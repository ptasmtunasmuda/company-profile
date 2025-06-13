<?php

namespace App\DataTransferObjects;

class StatsData
{
    public function __construct(
        public readonly string $projects,
        public readonly string $clients,
        public readonly string $experience,
        public readonly string $satisfaction,
    ) {}

    public static function fromSettings(array $settings): self
    {
        return new self(
            projects: $settings['stat_projects'] ?? '100+',
            clients: $settings['stat_clients'] ?? '50+',
            experience: $settings['stat_experience'] ?? '5+',
            satisfaction: $settings['stat_satisfaction'] ?? '99%'
        );
    }

    public function toArray(): array
    {
        return [
            'projects' => $this->projects,
            'clients' => $this->clients,
            'experience' => $this->experience,
            'satisfaction' => $this->satisfaction,
        ];
    }
}
