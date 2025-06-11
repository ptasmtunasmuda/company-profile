<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Setting extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml'])
            ->useDisk('public'); // Pastikan menggunakan disk public
    }

    public function registerMediaConversions(Media $media = null): void
    {
        // Optional: Buat thumbnail jika diperlukan
        // $this->addMediaConversion('thumb')
        //     ->width(150)
        //     ->height(150)
        //     ->sharpen(10);
    }

    public static function get($key, $default = null)
    {
        $setting = self::where('key', $key)->first();

        if (!$setting) {
            return $default;
        }

        // Jika type adalah image
        if ($setting->type === 'image') {
            // Prioritas 1: Cek value manual storage
            if ($setting->value) {
                // Jika sudah full URL, return as is
                if (str_starts_with($setting->value, 'http')) {
                    return $setting->value;
                }
                // Jika relative path, convert ke full URL
                return asset($setting->value);
            }

            // Prioritas 2: Fallback ke media library
            if ($setting->hasMedia('images')) {
                return $setting->getFirstMediaUrl('images');
            }
        }

        return $setting->value ?? $default;
    }

    public static function set($key, $value, $type = 'text', $group = 'general')
    {
        return self::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'type' => $type, 'group' => $group]
        );
    }

    public function scopeByGroup($query, $group)
    {
        return $query->where('group', $group);
    }

    // Method tambahan untuk mendapatkan URL gambar
    public function getImageUrl()
    {
        if ($this->type === 'image' && $this->hasMedia('images')) {
            return $this->getFirstMediaUrl('images');
        }

        return $this->value;
    }
}
