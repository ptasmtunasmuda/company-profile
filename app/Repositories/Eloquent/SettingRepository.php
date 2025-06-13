<?php

namespace App\Repositories\Eloquent;

use App\Models\Setting;
use App\Repositories\Contracts\SettingRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class SettingRepository implements SettingRepositoryInterface
{
    public function __construct(
        private Setting $setting
    ) {}

    public function get(string $key, $default = null)
    {
        return Setting::get($key, $default);
    }

    public function set(string $key, $value, string $type = 'text', string $group = 'general'): Setting
    {
        return Setting::set($key, $value, $type, $group);
    }

    public function getByGroup(string $group): Collection
    {
        return $this->setting->byGroup($group)->get();
    }

    public function getMultiple(array $keys): array
    {
        $settings = $this->setting->whereIn('key', $keys)->get();
        $result = [];

        foreach ($keys as $key) {
            $setting = $settings->firstWhere('key', $key);
            $result[$key] = $setting ? $setting->value : null;
        }

        return $result;
    }
}
