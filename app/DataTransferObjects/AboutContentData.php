<?php

namespace App\DataTransferObjects;

class AboutContentData
{
    public function __construct(
        public readonly string $title,
        public readonly string $subtitle,
        public readonly string $description,
    ) {}

    public static function fromSettings(array $settings): self
    {
        return new self(
            title: $settings['about_title'] ?? 'About Our Company',
            subtitle: $settings['about_subtitle'] ?? 'Your Trusted Technology Partner',
            description: $settings['about_description'] ?? ''
        );
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
        ];
    }
}
