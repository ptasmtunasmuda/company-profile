<?php

namespace App\Services;

use App\DataTransferObjects\HeroContentData;
use App\DataTransferObjects\AboutContentData;
use App\DataTransferObjects\StatsData;

class SettingService
{
    public function __construct(
        private CachedSettingService $cachedSettingService
    ) {}

    public function getHeroContent(): HeroContentData
    {
        $settings = $this->cachedSettingService->getMultiple([
            'hero_title',
            'hero_subtitle',
            'hero_cta_text',
            'hero_cta_link'
        ]);

        return HeroContentData::fromSettings($settings);
    }

    public function getAboutContent(): AboutContentData
    {
        $settings = $this->cachedSettingService->getMultiple([
            'about_title',
            'about_subtitle',
            'about_description'
        ]);

        return AboutContentData::fromSettings($settings);
    }

    public function getStats(): StatsData
    {
        $settings = $this->cachedSettingService->getMultiple([
            'stat_projects',
            'stat_clients',
            'stat_experience',
            'stat_satisfaction'
        ]);

        return StatsData::fromSettings($settings);
    }

    public function getSetting(string $key, $default = null)
    {
        return $this->cachedSettingService->get($key, $default);
    }

    public function getMultiple(array $keys): array
    {
        return $this->cachedSettingService->getMultiple($keys);
    }

    public function getByGroup(string $group): array
    {
        return $this->cachedSettingService->getByGroup($group);
    }

    public function refresh(): void
    {
        $this->cachedSettingService->refresh();
    }
}
