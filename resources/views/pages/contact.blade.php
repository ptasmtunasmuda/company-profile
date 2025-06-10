@extends('layouts.app')

@section('title', 'Contact Us')
@section('description', 'Get in touch with us for your web and mobile app development needs. We provide free consultation and custom quotes.')

@section('content')
<!-- Page Header -->
<section class="bg-gray-900 text-white pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Contact Us</h1>
            <p class="text-xl text-gray-300 mb-4" data-aos="fade-up" data-aos-delay="100">Let's discuss your project and bring your ideas to life</p>
            <nav class="text-gray-300" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                <span class="mx-2">/</span>
                <span class="text-white">Contact</span>
            </nav>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Contact Info -->
            <div class="lg:col-span-1">
                <div data-aos="fade-right">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Get in Touch</h2>
                    <p class="text-gray-600 mb-8">Ready to start your project? Contact us today and let's discuss how we can help you achieve your digital goals.</p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Address</h3>
                                <p class="text-gray-600">{{ \App\Models\Setting::get('contact_address', 'Your Address Here') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Phone</h3>
                                <p class="text-gray-600">{{ \App\Models\Setting::get('contact_phone', '+62 123-456-7890') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                                <p class="text-gray-600">{{ \App\Models\Setting::get('contact_email', 'info@company.com') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Office Hours</h3>
                                <p class="text-gray-600">{{ \App\Models\Setting::get('office_hours', 'Monday - Friday: 09:00 - 17:00') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div data-aos="fade-left">
                    <div class="bg-white p-8 rounded-lg shadow-lg border">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Send us a Message</h2>

                        @if(session('success'))
                            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors @error('name') border-red-500 @enderror">
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors @error('email') border-red-500 @enderror">
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors @error('phone') border-red-500 @enderror">
                                    @error('phone')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                                    <select id="subject" name="subject" required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors @error('subject') border-red-500 @enderror">
                                        <option value="">Select a subject</option>
                                        <option value="Web Development" {{ old('subject') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                        <option value="Mobile App Development" {{ old('subject') == 'Mobile App Development' ? 'selected' : '' }}>Mobile App Development</option>
                                        <option value="E-Commerce Solution" {{ old('subject') == 'E-Commerce Solution' ? 'selected' : '' }}>E-Commerce Solution</option>
                                        <option value="UI/UX Design" {{ old('subject') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                                        <option value="Digital Marketing" {{ old('subject') == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                                        <option value="Maintenance & Support" {{ old('subject') == 'Maintenance & Support' ? 'selected' : '' }}>Maintenance & Support</option>
                                        <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                        <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('subject')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                                <textarea id="message" name="message" rows="6" required
                                            placeholder="Tell us about your project requirements, timeline, and budget..."
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <button type="submit" class="w-full bg-primary-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-700 transition-colors flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600">Here are some common questions we get from our clients.</p>
        </div>

        <div class="space-y-6" x-data="{ activeAccordion: null }">
            <div class="bg-white rounded-lg shadow-lg border" data-aos="fade-up" data-aos-delay="100">
                <button @click="activeAccordion = activeAccordion === 1 ? null : 1" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                    <h3 class="text-lg font-semibold text-gray-900">How long does it take to develop a website?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': activeAccordion === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="activeAccordion === 1" x-transition class="px-6 pb-4">
                    <p class="text-gray-600">The development timeline depends on the complexity and features of your website. A simple business website typically takes 2-4 weeks, while a complex web application can take 2-6 months. We'll provide you with a detailed timeline during our initial consultation.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg border" data-aos="fade-up" data-aos-delay="200">
                <button @click="activeAccordion = activeAccordion === 2 ? null : 2" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                    <h3 class="text-lg font-semibold text-gray-900">What is included in your development services?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': activeAccordion === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="activeAccordion === 2" x-transition class="px-6 pb-4">
                    <p class="text-gray-600">Our services include consultation, UI/UX design, frontend and backend development, testing, deployment, and post-launch support. We also provide training for content management and basic maintenance guidance.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg border" data-aos="fade-up" data-aos-delay="300">
                <button @click="activeAccordion = activeAccordion === 3 ? null : 3" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                    <h3 class="text-lg font-semibold text-gray-900">Do you provide ongoing maintenance and support?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': activeAccordion === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="activeAccordion === 3" x-transition class="px-6 pb-4">
                    <p class="text-gray-600">Yes, we offer various maintenance packages including security updates, content updates, performance monitoring, and technical support. We also provide 30 days of free support after project completion.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg border" data-aos="fade-up" data-aos-delay="400">
                <button @click="activeAccordion = activeAccordion === 4 ? null : 4" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                    <h3 class="text-lg font-semibold text-gray-900">What are your payment terms?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': activeAccordion === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="activeAccordion === 4" x-transition class="px-6 pb-4">
                    <p class="text-gray-600">We typically require 50% upfront payment to begin the project, with the remaining 50% due upon completion. For larger projects, we can arrange milestone-based payments. We accept bank transfers and various online payment methods.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg border" data-aos="fade-up" data-aos-delay="500">
                <button @click="activeAccordion = activeAccordion === 5 ? null : 5" class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                    <h3 class="text-lg font-semibold text-gray-900">Can you help with mobile app development?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" :class="{ 'rotate-180': activeAccordion === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="activeAccordion === 5" x-transition class="px-6 pb-4">
                    <p class="text-gray-600">Absolutely! We specialize in both native and cross-platform mobile app development using React Native and Flutter. We can develop apps for iOS and Android platforms and help with app store submissions.</p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Map Section (Optional) -->
    <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Visit Our Office</h2>
            <p class="text-xl text-gray-600">Come visit us at our office or schedule a virtual meeting.</p>
        </div>

        <div class="bg-gray-200 rounded-lg overflow-hidden shadow-lg h-96" data-aos="fade-up" data-aos-delay="200">
            <!-- Replace with actual Google Maps embed or map service -->
            <div class="w-full h-full flex items-center justify-center text-gray-500">
                <div class="text-center">
                    <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <p class="text-lg">Interactive Map Coming Soon</p>
                    <p class="text-sm">{{ \App\Models\Setting::get('contact_address', 'Your Address Here') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
