<?php

namespace App\Repositories\Contracts;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Collection;

interface SettingRepositoryInterface
{
    public function get(string $key, $default = null);
    public function set(string $key, $value, string $type = 'text', string $group = 'general'): Setting;
    public function getByGroup(string $group): Collection;
    public function getMultiple(array $keys): array;
}
