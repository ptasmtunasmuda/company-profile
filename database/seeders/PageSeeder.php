<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'content' => '<h2>About Our Company</h2>
                <p>We are a leading web and mobile application development company dedicated to helping businesses achieve their digital goals. Our team of experienced developers, designers, and project managers work together to create innovative solutions that drive growth and success.</p>

                <h3>Our Mission</h3>
                <p>To empower businesses with cutting-edge technology solutions that enhance their digital presence and drive meaningful results.</p>

                <h3>Our Vision</h3>
                <p>To be the most trusted technology partner for businesses looking to transform their digital landscape.</p>

                <h3>Our Values</h3>
                <ul>
                <li><strong>Innovation:</strong> We stay ahead of technology trends to provide the best solutions.</li>
                <li><strong>Quality:</strong> We deliver high-quality work that exceeds expectations.</li>
                <li><strong>Transparency:</strong> We maintain open communication throughout every project.</li>
                <li><strong>Partnership:</strong> We work as an extension of your team.</li>
                </ul>',
                'meta_title' => 'About Us - Company Name',
                'meta_description' => 'Learn about our company, mission, vision, and values. We are your trusted partner for web and mobile app development.',
                'meta_keywords' => 'about us, company profile, web development team, mission vision',
                'is_active' => true,
            ],
            [
                'title' => 'Our Services',
                'slug' => 'services',
                'content' => '<h2>Our Services</h2>
                <p>We offer comprehensive web and mobile application development services to help your business succeed in the digital world.</p>

                <h3>Web Development</h3>
                <p>Custom website development using modern technologies like Laravel, React, and Vue.js. We create responsive, fast, and SEO-friendly websites that convert visitors into customers.</p>

                <h3>Mobile App Development</h3>
                <p>Native and cross-platform mobile applications for iOS and Android. We use React Native and Flutter to create high-performance apps that provide excellent user experience.</p>

                <h3>E-Commerce Solutions</h3>
                <p>Complete e-commerce platforms with payment integration, inventory management, and customer management systems.</p>

                <h3>UI/UX Design</h3>
                <p>Modern and intuitive user interface design that focuses on user experience and conversion optimization.</p>

                <h3>Digital Marketing</h3>
                <p>SEO optimization, social media marketing, and digital advertising to help your business reach more customers.</p>

                <h3>Maintenance & Support</h3>
                <p>Ongoing maintenance, updates, and technical support to keep your digital assets running smoothly.</p>',
                'meta_title' => 'Our Services - Web & Mobile App Development',
                'meta_description' => 'Professional web development, mobile app development, UI/UX design, and digital marketing services.',
                'meta_keywords' => 'web development, mobile app development, UI UX design, digital marketing, e-commerce',
                'is_active' => true,
            ],
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'content' => '<h2>Privacy Policy</h2>
                <p><em>Last updated: ' . date('F d, Y') . '</em></p>

                <h3>Information We Collect</h3>
                <p>We collect information you provide directly to us, such as when you contact us through our website forms or email.</p>

                <h3>How We Use Your Information</h3>
                <p>We use the information we collect to respond to your inquiries, provide our services, and communicate with you about our offerings.</p>

                <h3>Information Sharing</h3>
                <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent.</p>

                <h3>Data Security</h3>
                <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>

                <h3>Contact Us</h3>
                <p>If you have any questions about this Privacy Policy, please contact us at info@company.com</p>',
                'meta_title' => 'Privacy Policy - Company Name',
                'meta_description' => 'Our privacy policy explains how we collect, use, and protect your personal information.',
                'meta_keywords' => 'privacy policy, data protection, personal information',
                'is_active' => true,
            ],
            [
                'title' => 'Terms of Service',
                'slug' => 'terms-of-service',
                'content' => '<h2>Terms of Service</h2>
                <p><em>Last updated: ' . date('F d, Y') . '</em></p>

                <h3>Acceptance of Terms</h3>
                <p>By accessing and using our services, you accept and agree to be bound by the terms and provision of this agreement.</p>

                <h3>Our Services</h3>
                <p>We provide web and mobile application development services. The scope of work will be defined in separate project agreements.</p>

                <h3>Payment Terms</h3>
                <p>Payment terms will be specified in individual project contracts. Generally, we require a deposit before starting work and final payment upon project completion.</p>

                <h3>Intellectual Property</h3>
                <p>Upon full payment, clients receive ownership of the developed code and assets, excluding any third-party components with separate licenses.</p>

                <h3>Limitation of Liability</h3>
                <p>Our liability is limited to the amount paid for our services. We are not responsible for any indirect, incidental, or consequential damages.</p>

                <h3>Contact Information</h3>
                <p>For questions about these Terms of Service, please contact us at info@company.com</p>',
                'meta_title' => 'Terms of Service - Company Name',
                'meta_description' => 'Terms and conditions for using our web and mobile app development services.',
                'meta_keywords' => 'terms of service, terms and conditions, legal',
                'is_active' => true,
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
