<?php

namespace App\DataTransferObjects;

class HeroContentData
{
    public function __construct(
        public readonly string $title,
        public readonly string $subtitle,
        public readonly string $ctaText,
        public readonly string $ctaLink,
    ) {}

    public static function fromSettings(array $settings): self
    {
        return new self(
            title: $settings['hero_title'] ?? 'Build Your Digital Future With Us',
            subtitle: $settings['hero_subtitle'] ?? 'We create modern websites and mobile applications.',
            ctaText: $settings['hero_cta_text'] ?? 'Get Free Consultation',
            ctaLink: $settings['hero_cta_link'] ?? '#contact'
        );
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'cta_text' => $this->ctaText,
            'cta_link' => $this->ctaLink,
        ];
    }
}
