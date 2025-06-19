<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // General Settings
            ['key' => 'site_name', 'value' => 'Company Name', 'type' => 'text', 'group' => 'general'],
            ['key' => 'site_tagline', 'value' => 'Your Trusted Web & App Development Partner', 'type' => 'text', 'group' => 'general'],
            ['key' => 'site_description', 'value' => 'We create modern websites and mobile applications that help your business grow.', 'type' => 'textarea', 'group' => 'general'],
            ['key' => 'site_logo', 'value' => '', 'type' => 'image', 'group' => 'general'],
            ['key' => 'site_favicon', 'value' => '', 'type' => 'image', 'group' => 'general'],

            // Contact Information
            ['key' => 'contact_email', 'value' => 'info@company.com', 'type' => 'email', 'group' => 'contact'],
            ['key' => 'contact_phone', 'value' => '+62 812-6801-8693', 'type' => 'text', 'group' => 'contact'],
            ['key' => 'contact_whatsapp', 'value' => '+62 812-6801-8693', 'type' => 'text', 'group' => 'contact'],
            ['key' => 'contact_address', 'value' => 'Jl. Contoh No. 123, Kediri, Jawa Timur', 'type' => 'textarea', 'group' => 'contact'],
            ['key' => 'office_hours', 'value' => 'Senin - Jumat: 09:00 - 17:00 WIB', 'type' => 'text', 'group' => 'contact'],

            // Social Media
            ['key' => 'social_facebook', 'value' => '', 'type' => 'url', 'group' => 'social'],
            ['key' => 'social_instagram', 'value' => '', 'type' => 'url', 'group' => 'social'],
            ['key' => 'social_twitter', 'value' => '', 'type' => 'url', 'group' => 'social'],
            ['key' => 'social_linkedin', 'value' => '', 'type' => 'url', 'group' => 'social'],
            ['key' => 'social_youtube', 'value' => '', 'type' => 'url', 'group' => 'social'],

            // SEO Settings
            ['key' => 'seo_title', 'value' => 'Company Name - Web & App Development', 'type' => 'text', 'group' => 'seo'],
            ['key' => 'seo_description', 'value' => 'Professional web and mobile app development services. We create modern, responsive websites and mobile applications for your business.', 'type' => 'textarea', 'group' => 'seo'],
            ['key' => 'seo_keywords', 'value' => 'web development, mobile app, website design, Laravel, React Native', 'type' => 'textarea', 'group' => 'seo'],
            ['key' => 'google_analytics', 'value' => '', 'type' => 'textarea', 'group' => 'seo'],

            // Homepage Content
            ['key' => 'hero_title', 'value' => 'Build Your Digital Future With Us', 'type' => 'text', 'group' => 'homepage'],
            ['key' => 'hero_subtitle', 'value' => 'We create modern websites and mobile applications that help your business grow and reach more customers.', 'type' => 'textarea', 'group' => 'homepage'],
            ['key' => 'hero_cta_text', 'value' => 'Get Free Consultation', 'type' => 'text', 'group' => 'homepage'],
            ['key' => 'hero_cta_link', 'value' => '#contact', 'type' => 'text', 'group' => 'homepage'],
            ['key' => 'hero_image', 'value' => '', 'type' => 'image', 'group' => 'homepage'],

            // About Section
            ['key' => 'about_title', 'value' => 'About Our Company', 'type' => 'text', 'group' => 'about'],
            ['key' => 'about_subtitle', 'value' => 'Your Trusted Technology Partner', 'type' => 'text', 'group' => 'about'],
            ['key' => 'about_description', 'value' => 'We are a team of experienced developers who specialize in creating modern websites and mobile applications. With years of experience in the industry, we help businesses transform their ideas into powerful digital solutions.', 'type' => 'textarea', 'group' => 'about'],
            ['key' => 'about_image', 'value' => '', 'type' => 'image', 'group' => 'about'],

            // Statistics
            ['key' => 'stat_projects', 'value' => '100+', 'type' => 'text', 'group' => 'stats'],
            ['key' => 'stat_clients', 'value' => '50+', 'type' => 'text', 'group' => 'stats'],
            ['key' => 'stat_experience', 'value' => '5+', 'type' => 'text', 'group' => 'stats'],
            ['key' => 'stat_satisfaction', 'value' => '99%', 'type' => 'text', 'group' => 'stats'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
