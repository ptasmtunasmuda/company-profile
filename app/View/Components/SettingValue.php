<?php

namespace App\View\Components;

use App\Services\CachedSettingService;
use Illuminate\View\Component;

class SettingValue extends Component
{
    public function __construct(
        public string $key,
        public $default = null,
        private CachedSettingService $cachedSettingService
    ) {}

    public function render()
    {
        return $this->cachedSettingService->get($this->key, $this->default);
    }
}
