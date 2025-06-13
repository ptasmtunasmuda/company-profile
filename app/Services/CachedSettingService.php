<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;

class CachedSettingService
{
    private const CACHE_KEY = 'app_settings';
    private const CACHE_TTL = 3600; // 1 hour

    private ?Collection $settings = null;

    public function get(string $key, $default = null)
    {
        $this->loadSettings();

        $setting = $this->settings->get($key);

        if (!$setting) {
            return $default;
        }

        // Handle different setting types
        return match($setting->type ?? 'text') {
            'image' => $this->getImageValue($setting),
            'boolean' => (bool) $setting->value,
            'number' => (int) $setting->value,
            'json' => json_decode($setting->value, true),
            default => $setting->value ?? $default
        };
    }

    public function getMultiple(array $keys): array
    {
        $this->loadSettings();

        $result = [];
        foreach ($keys as $key) {
            $result[$key] = $this->get($key);
        }

        return $result;
    }

    public function getByGroup(string $group): array
    {
        $this->loadSettings();

        return $this->settings
            ->filter(fn($setting) => $setting->group === $group)
            ->mapWithKeys(fn($setting) => [$setting->key => $this->get($setting->key)])
            ->toArray();
    }

    public function refresh(): void
    {
        Cache::forget(self::CACHE_KEY);
        $this->settings = null;
    }

    private function loadSettings(): void
    {
        if ($this->settings !== null) {
            return;
        }

        $this->settings = Cache::remember(self::CACHE_KEY, self::CACHE_TTL, function () {
            return Setting::all()->keyBy('key');
        });
    }

    private function getImageValue($setting)
    {
        if ($setting->value) {
            if (str_starts_with($setting->value, 'http')) {
                return $setting->value;
            }
            return asset($setting->value);
        }

        // Note: Media library check would need separate query
        // For now, return null to avoid N+1
        return null;
    }
}
