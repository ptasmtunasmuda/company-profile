<?php

namespace App\Models;

use App\Services\CachedSettingService;
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
            ->useDisk('public');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150)
            ->sharpen(10);
    }

    /**
     * @deprecated Use CachedSettingService instead
     */
    public static function get($key, $default = null)
    {
        // Untuk backward compatibility, delegate ke CachedSettingService
        $cachedService = app(CachedSettingService::class);
        return $cachedService->get($key, $default);
    }

    public static function set($key, $value, $type = 'text', $group = 'general')
    {
        $setting = self::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'type' => $type, 'group' => $group]
        );

        // Clear cache setelah update
        $cachedService = app(CachedSettingService::class);
        $cachedService->refresh();

        return $setting;
    }

    public function scopeByGroup($query, $group)
    {
        return $query->where('group', $group);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function getImageUrl()
    {
        if ($this->type === 'image') {
            if ($this->value) {
                if (str_starts_with($this->value, 'http')) {
                    return $this->value;
                }
                return asset($this->value);
            }

            if ($this->hasMedia('images')) {
                return $this->getFirstMediaUrl('images');
            }
        }

        return $this->value;
    }

    // Boot method untuk clear cache saat setting berubah
    protected static function boot()
    {
        parent::boot();

        static::saved(function () {
            app(CachedSettingService::class)->refresh();
        });

        static::deleted(function () {
            app(CachedSettingService::class)->refresh();
        });
    }
}
