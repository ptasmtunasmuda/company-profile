<?php

namespace App\Enums;

enum SettingGroup: string
{
    case GENERAL = 'general';
    case HERO = 'hero';
    case ABOUT = 'about';
    case CONTACT = 'contact';
    case SEO = 'seo';
    case SOCIAL = 'social';
    case STATS = 'stats';
}
