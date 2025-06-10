<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use App\Models\Testimonial;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample Portfolios
        $portfolios = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'Modern e-commerce platform with advanced features',
                'content' => '<p>A comprehensive e-commerce solution built with Laravel and React. Features include inventory management, payment gateway integration, and advanced analytics dashboard.</p>',
                'client_name' => 'PT. Retail Indonesia',
                'project_url' => 'https://example-ecommerce.com',
                'technologies' => ['Laravel', 'React', 'MySQL', 'Stripe'],
                'completed_at' => '2024-01-15',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Mobile Banking App',
                'description' => 'Secure mobile banking application for iOS and Android',
                'content' => '<p>A secure and user-friendly mobile banking application with features like account management, money transfer, bill payment, and transaction history.</p>',
                'client_name' => 'Bank ABC',
                'project_url' => null,
                'technologies' => ['React Native', 'Node.js', 'MongoDB', 'Firebase'],
                'completed_at' => '2023-12-10',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Restaurant Management System',
                'description' => 'Complete restaurant management system with POS integration',
                'content' => '<p>A comprehensive restaurant management system that includes online ordering, POS integration, inventory management, and customer relationship management.</p>',
                'client_name' => 'Restaurant Chain XYZ',
                'project_url' => 'https://restaurant-demo.com',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Payment Gateway'],
                'completed_at' => '2023-11-20',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }

        // Sample Testimonials
        $testimonials = [
            [
                'client_name' => 'John Doe',
                'client_position' => 'CEO',
                'client_company' => 'Tech Startup Inc.',
                'testimonial' => 'Excellent work! The team delivered our project on time and exceeded our expectations. The website is fast, responsive, and exactly what we needed.',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'client_name' => 'Sarah Johnson',
                'client_position' => 'Marketing Director',
                'client_company' => 'Digital Agency Pro',
                'testimonial' => 'Professional service and great communication throughout the project. Our new e-commerce platform has significantly increased our online sales.',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'client_name' => 'Michael Chen',
                'client_position' => 'Founder',
                'client_company' => 'Mobile Solutions Ltd.',
                'testimonial' => 'The mobile app they developed for us is fantastic. Clean design, smooth performance, and our users love it. Highly recommended!',
                'rating' => 5,
                'is_active' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
