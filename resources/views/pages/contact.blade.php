@extends('layouts.app')

@section('title', 'Contact Us')
@section('description', 'Get in touch with us for your web and mobile app development needs. We provide free consultation and custom quotes.')

@section('content')
<!-- Page Header -->
<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-900 text-white pt-32 pb-24 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute top-10 left-10 w-96 h-96 bg-gradient-to-r from-primary-400 to-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob"></div>
    <div class="absolute top-40 right-10 w-96 h-96 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-blob animation-delay-2000"></div>
    <div class="absolute bottom-20 left-1/2 w-96 h-96 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>

    <!-- Floating Elements -->
    <div class="absolute top-20 right-20 w-4 h-4 bg-blue-300 rounded-full animate-pulse"></div>
    <div class="absolute top-60 left-32 w-3 h-3 bg-purple-300 rounded-full animate-ping"></div>
    <div class="absolute bottom-40 right-40 w-2 h-2 bg-pink-300 rounded-full animate-bounce"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <nav class="text-blue-200 mb-8" data-aos="fade-up">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors duration-300 hover:underline">Home</a>
                <span class="mx-3 text-blue-300">/</span>
                <span class="text-white font-medium">Contact</span>
            </nav>

            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-lg rounded-full text-sm font-semibold text-blue-100 mb-8 border border-white/20 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-5 h-5 mr-3 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Ayo Bicara
            </div>

            <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight bg-gradient-to-r from-white via-blue-100 to-white bg-clip-text text-transparent" data-aos="fade-up" data-aos-delay="200">
                Hubungi kami
            </h1>

            <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto leading-relaxed mb-12" data-aos="fade-up" data-aos-delay="300">
                Siap untuk mengubah kehadiran digital Anda? Mari diskusikan proyek Anda <span class="font-semibold text-yellow-300">vision to life</span>
            </p>

            <!-- Quick Contact Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-white mb-2">24h</div>
                    <div class="text-blue-200 text-sm font-medium">Waktu Respons</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-white mb-2">Free</div>
                    <div class="text-blue-200 text-sm font-medium">Konsultasi</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-white mb-2">100%</div>
                    <div class="text-blue-200 text-sm font-medium">Kepuasan</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-white mb-2">24/7</div>
                    <div class="text-blue-200 text-sm font-medium">Dukungan</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">
            <!-- Contact Info -->
            <div class="lg:col-span-2">
                <div data-aos="fade-right">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Hubungi kami</h2>
                    </div>

                    <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 border border-gray-100 mb-8">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Siap untuk memulai proyek Anda? Hubungi kami hari ini dan mari kita bahas bagaimana kami dapat membantu Anda mencapai tujuan digital Anda dengan solusi mutakhir.
                        </p>
                        <p class="text-gray-600">
                            Kami menawarkan konsultasi gratis dan estimasi proyek yang terperinci. Tidak ada biaya tersembunyi, hanya komunikasi yang transparan dan hasil yang luar biasa.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="group flex items-start p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors duration-300">Alamat kami</h3>
                                <p class="text-gray-600 leading-relaxed">{{ \App\Models\Setting::get('contact_address', 'Jl. Merdeka No. 123, Kediri, East Java, Indonesia') }}</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="group flex items-start p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors duration-300">Hubungi Kami</h3>
                                <p class="text-gray-600 leading-relaxed">{{ \App\Models\Setting::get('contact_phone', '+62 123-456-7890') }}</p>
                                <p class="text-sm text-gray-500 mt-1">Tersedia 24/7 untuk pertanyaan mendesak</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="group flex items-start p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors duration-300">Email Kami</h3>
                                <p class="text-gray-600 leading-relaxed">{{ \App\Models\Setting::get('contact_email', 'info@company.com') }}</p>
                                <p class="text-sm text-gray-500 mt-1">Kami merespon dalam waktu 24 jam</p>
                            </div>
                        </div>

                        <!-- Office Hours -->
                        <div class="group flex items-start p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors duration-300">Jam Kerja</h3>
                                <p class="text-gray-600 leading-relaxed">{{ \App\Models\Setting::get('office_hours', 'Monday - Friday: 09:00 - 17:00') }}</p>
                                <p class="text-sm text-gray-500 mt-1">Konsultasi akhir pekan berdasarkan perjanjian</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-3">
                <div data-aos="fade-left">
                    <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-8 md:p-12 border border-gray-100">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Kirimkan Pesan kepada kami</h2>
                        </div>

                        @if(session('success'))
                            <div class="mb-8 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 text-green-800 px-6 py-4 rounded-2xl relative shadow-lg">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-8">
                            @csrf

                            <!-- Name and Email Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="group">
                                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-3">Nama Lengkap *</label>
                                    <div class="relative">
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                               class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300 group-hover:border-gray-300 @error('name') border-red-300 @enderror"
                                               placeholder="Masukkan nama lengkap Anda">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('name')
                                        <p class="mt-2 text-sm text-red-600 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="group">
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-3">Alamat Email *</label>
                                    <div class="relative">
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                               class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300 group-hover:border-gray-300 @error('email') border-red-300 @enderror"
                                               placeholder="Masukkan alamat email Anda">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('email')
                                        <p class="mt-2 text-sm text-red-600 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Phone and Subject Row -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="group">
                                    <label for="phone" class="block text-sm font-semibold text-gray-700 mb-3">Nomor telepon</label>
                                    <div class="relative">
                                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                               class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300 group-hover:border-gray-300 @error('phone') border-red-300 @enderror"
                                               placeholder="Masukkan nomor telepon Anda">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('phone')
                                        <p class="mt-2 text-sm text-red-600 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="group">
                                    <label for="subject" class="block text-sm font-semibold text-gray-700 mb-3">Subjek *</label>
                                    <div class="relative">
                                        <select id="subject" name="subject" required
                                                class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300 group-hover:border-gray-300 @error('subject') border-red-300 @enderror">
                                            <option value="">Pilih subjek</option>
                                            <option value="Web Development" {{ old('subject') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                            <option value="Mobile App Development" {{ old('subject') == 'Mobile App Development' ? 'selected' : '' }}>Mobile App Development</option>
                                            <option value="E-Commerce Solution" {{ old('subject') == 'E-Commerce Solution' ? 'selected' : '' }}>E-Commerce Solution</option>
                                            <option value="UI/UX Design" {{ old('subject') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                                            <option value="Digital Marketing" {{ old('subject') == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                                            <option value="Maintenance & Support" {{ old('subject') == 'Maintenance & Support' ? 'selected' : '' }}>Maintenance & Support</option>
                                            <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                            <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Lainnya</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('subject')
                                        <p class="mt-2 text-sm text-red-600 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="group">
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-3">Message *</label>
                                <div class="relative">
                                    <textarea id="message" name="message" rows="6" required
                                              placeholder="Beritahu kami tentang persyaratan proyek Anda, jadwal waktu, anggaran, dan fitur spesifik apa pun yang Anda butuhkan..."
                                              class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300 group-hover:border-gray-300 resize-none @error('message') border-red-300 @enderror">{{ old('message') }}</textarea>
                                    <div class="absolute bottom-3 right-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                                @error('message')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div>
                                <button type="submit" class="group w-full bg-gradient-to-r from-primary-600 to-purple-600 text-white px-8 py-4 rounded-2xl font-bold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 mr-3 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    Kirim Pesan
                                    <div class="ml-3 w-0 group-hover:w-2 h-2 bg-white/30 rounded-full transition-all duration-300"></div>
                                </button>
                            </div>
                        </form>

                        <!-- Additional Info -->
                        <div class="mt-8 pt-8 border-t border-gray-200">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                                <div class="flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-600">Konsultasi Gratis</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-600">Balasan Cepat</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="w-5 h-5 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-600">Aman & Pribadi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-r from-blue-200 to-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-r from-purple-200 to-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-40 animate-blob animation-delay-2000"></div>

    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 opacity-5">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="faq-grid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#faq-grid)" />
        </svg>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                FAQ
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Pertanyaan yang Sering <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Diajukan</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Berikut ini beberapa pertanyaan umum yang kami terima dari klien kami. Tidak dapat menemukan apa yang Anda cari? Jangan ragu untuk menghubungi kami!</p>
        </div>

        <div class="space-y-6" x-data="{ activeAccordion: null }">
            <!-- FAQ Item 1 -->
            <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <button @click="activeAccordion = activeAccordion === 1 ? null : 1"
                        class="w-full px-8 py-6 text-left flex justify-between items-center focus:outline-none hover:bg-gray-50 transition-colors duration-300">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Berapa lama waktu yang dibutuhkan untuk mengembangkan situs web?</h3>
                    <div class="flex-shrink-0 ml-6">
                        <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-200 transition-colors duration-300">
                            <svg class="w-4 h-4 text-primary-600 transform transition-transform duration-300" :class="{ 'rotate-180': activeAccordion === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </button>
                <div x-show="activeAccordion === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="px-8 pb-6">
                    <div class="bg-gradient-to-r from-primary-50 to-blue-50 rounded-2xl p-6 border-l-4 border-primary-500">
                        <p class="text-gray-700 leading-relaxed">Jadwal pengembangan bergantung pada kompleksitas dan fitur situs web Anda. Situs web bisnis sederhana biasanya memerlukan waktu 2-4 minggu, sedangkan aplikasi web yang kompleks dapat memerlukan waktu 2-6 bulan. Kami akan memberikan jadwal terperinci selama konsultasi awal, termasuk tonggak pencapaian dan hasil akhir.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <button @click="activeAccordion = activeAccordion === 2 ? null : 2"
                        class="w-full px-8 py-6 text-left flex justify-between items-center focus:outline-none hover:bg-gray-50 transition-colors duration-300">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Apa yang termasuk dalam layanan pengembangan Anda?</h3>
                    <div class="flex-shrink-0 ml-6">
                        <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-200 transition-colors duration-300">
                            <svg class="w-4 h-4 text-primary-600 transform transition-transform duration-300" :class="{ 'rotate-180': activeAccordion === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </button>
                <div x-show="activeAccordion === 2" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="px-8 pb-6">
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-6 border-l-4 border-green-500">
                        <p class="text-gray-700 leading-relaxed">Layanan kami yang komprehensif meliputi konsultasi awal, desain UI/UX, pengembangan frontend dan backend, desain database, pengujian, penerapan, dan dukungan pasca peluncuran. Kami juga menyediakan pelatihan untuk manajemen konten, optimasi SEO, dan panduan pemeliharaan dasar untuk memastikan keberhasilan Anda.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <button @click="activeAccordion = activeAccordion === 3 ? null : 3"
                        class="w-full px-8 py-6 text-left flex justify-between items-center focus:outline-none hover:bg-gray-50 transition-colors duration-300">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Apakah Anda menyediakan pemeliharaan dan dukungan berkelanjutan?</h3>
                    <div class="flex-shrink-0 ml-6">
                        <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-200 transition-colors duration-300">
                            <svg class="w-4 h-4 text-primary-600 transform transition-transform duration-300" :class="{ 'rotate-180': activeAccordion === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </button>
                <div x-show="activeAccordion === 3" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="px-8 pb-6">
                    <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl p-6 border-l-4 border-purple-500">
                        <p class="text-gray-700 leading-relaxed">Ya, kami menawarkan berbagai paket pemeliharaan termasuk pembaruan keamanan, pembaruan konten, pemantauan kinerja, manajemen cadangan, dan dukungan teknis 24/7. Kami juga menyediakan dukungan gratis selama 30 hari setelah proyek selesai untuk memastikan semuanya berjalan lancar.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                <button @click="activeAccordion = activeAccordion === 4 ? null : 4"
                        class="w-full px-8 py-6 text-left flex justify-between items-center focus:outline-none hover:bg-gray-50 transition-colors duration-300">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Apa syarat pembayaran Anda?</h3>
                    <div class="flex-shrink-0 ml-6">
                        <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-200 transition-colors duration-300">
                            <svg class="w-4 h-4 text-primary-600 transform transition-transform duration-300" :class="{ 'rotate-180': activeAccordion === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </button>
                <div x-show="activeAccordion === 4" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="px-8 pb-6">
                    <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-2xl p-6 border-l-4 border-orange-500">
                        <p class="text-gray-700 leading-relaxed">Kami biasanya meminta pembayaran di muka sebesar 50% untuk memulai proyek, dengan sisa 50% dibayarkan setelah proyek selesai. Untuk proyek yang lebih besar, kami dapat mengatur pembayaran berdasarkan tonggak pencapaian. Kami menerima transfer bank, kartu kredit, dan berbagai metode pembayaran online demi kenyamanan Anda.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg border border-gray-100 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                <button @click="activeAccordion = activeAccordion === 5 ? null : 5"
                        class="w-full px-8 py-6 text-left flex justify-between items-center focus:outline-none hover:bg-gray-50 transition-colors duration-300">
                    <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary-600 transition-colors duration-300">Bisakah Anda membantu pengembangan aplikasi mobile?</h3>
                    <div class="flex-shrink-0 ml-6">
                        <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-200 transition-colors duration-300">
                            <svg class="w-4 h-4 text-primary-600 transform transition-transform duration-300" :class="{ 'rotate-180': activeAccordion === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </button>
                <div x-show="activeAccordion === 5" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="px-8 pb-6">
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 border-l-4 border-blue-500">
                        <p class="text-gray-700 leading-relaxed">Tentu saja! Kami mengkhususkan diri dalam pengembangan aplikasi seluler asli dan lintas platform menggunakan React Native dan Flutter. Kami dapat mengembangkan aplikasi untuk platform iOS dan Android serta membantu pengajuan ke app store, pengoptimalan, dan pembaruan berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Help CTA -->
        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="600">
            <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-xl border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Masih ada pertanyaan?</h3>
                <p class="text-gray-600 mb-6">Tidak dapat menemukan jawaban yang Anda cari? Tim kami siap membantu Anda dengan pertanyaan spesifik apa pun tentang project Anda.</p>
                <a href="#contact-form" onclick="document.getElementById('message').focus()"
                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-600 to-purple-600 text-white rounded-xl font-semibold hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Ajukan Pertanyaan Anda
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    </section>

    <!-- Map Section -->
    <section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-3">
        <svg class="w-full h-full" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="map-pattern" width="60" height="60" patternUnits="userSpaceOnUse">
                    <circle cx="30" cy="30" r="2" fill="currentColor"/>
                    <circle cx="10" cy="10" r="1" fill="currentColor"/>
                    <circle cx="50" cy="50" r="1" fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#map-pattern)" />
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary-100 to-purple-100 text-primary-700 rounded-full text-sm font-bold mb-6">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Lokasi Kami
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                Kunjungi Kantor <span class="bg-gradient-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">Kami</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Kunjungi kantor kami untuk konsultasi tatap muka atau jadwalkan pertemuan virtual sesuai keinginan Anda.</p>
        </div>

        <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl overflow-hidden shadow-2xl h-96 md:h-[500px] relative group" data-aos="fade-up" data-aos-delay="200">
            <!-- Map Placeholder -->
            <div class="w-full h-full flex items-center justify-center text-gray-500 bg-gradient-to-br from-blue-50 to-purple-50">
                <div class="text-center p-8">
                    <div class="w-24 h-24 bg-gradient-to-br from-primary-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-xl">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Peta Interaktif Segera Hadir</h3>
                    <p class="text-gray-600 mb-4 max-w-md mx-auto">{{ \App\Models\Setting::get('contact_address', 'Jl. Merdeka No. 123, Kediri, East Java, Indonesia') }}</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="https://maps.google.com" target="_blank"
                            class="inline-flex items-center px-4 py-2 bg-primary-600 text-white rounded-lg font-semibold hover:bg-primary-700 transition-colors duration-300">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                            Lihat di Google Maps
                        </a>
                        <a href="tel:{{ \App\Models\Setting::get('contact_phone', '+62123456789') }}"
                            class="inline-flex items-center px-4 py-2 border-2 border-primary-600 text-primary-600 rounded-lg font-semibold hover:bg-primary-600 hover:text-white transition-colors duration-300">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Hubungi Kami Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Corner Decoration -->
            <div class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-br from-primary-400 to-purple-500 rounded-full opacity-20 group-hover:scale-110 transition-transform duration-500"></div>
            <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-400 rounded-full opacity-20 group-hover:scale-110 transition-transform duration-500"></div>
        </div>
    </div>
    </section>

    @push('styles')
    <style>
    /* Enhanced Animations */
    @keyframes blob {
    0% {
        transform: translate(0px, 0px) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
    100% {
        transform: translate(0px, 0px) scale(1);
    }
    }

    .animate-blob {
    animation: blob 7s infinite;
    }

    .animation-delay-2000 {
    animation-delay: 2s;
    }

    .animation-delay-4000 {
    animation-delay: 4s;
    }

    /* Form Enhancements */
    .form-input {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .form-input:focus {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    /* Accordion Animations */
    .accordion-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
    }

    .accordion-content.active {
    max-height: 200px;
    }

    /* Button Loading State */
    .btn-loading {
    position: relative;
    pointer-events: none;
    }

    .btn-loading::after {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    top: 50%;
    left: 50%;
    margin-left: -8px;
    margin-top: -8px;
    border: 2px solid #ffffff;
    border-radius: 50%;
    border-top-color: transparent;
    animation: spin 1s linear infinite;
    }

    @keyframes spin {
    to {
        transform: rotate(360deg);
    }
    }

    /* Scroll Animations */
    @keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
    }

    .slide-in-up {
    animation: slideInUp 0.6s ease-out forwards;
    }

    /* Contact Card Hover Effects */
    .contact-card {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .contact-card:hover {
    transform: translateY(-8px) scale(1.02);
    }

    /* Enhanced gradient animations */
    @keyframes gradient-shift {
    0%, 100% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    }

    .animated-gradient {
    background-size: 200% 200%;
    animation: gradient-shift 3s ease infinite;
    }

    /* Print styles */
    @media print {
    .no-print {
        display: none !important;
    }

    .contact-card {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid #e5e7eb;
    }
    }

    /* Dark mode support for future implementation */
    @media (prefers-color-scheme: dark) {
    .contact-form {
        background: rgba(17, 24, 39, 0.8);
        color: white;
    }
    }
    </style>
    @endpush

    @push('scripts')
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Form validation and enhancement
    const form = document.querySelector('form');
    const submitButton = form.querySelector('button[type="submit"]');

    // Real-time form validation
    const inputs = form.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', validateField);
        input.addEventListener('input', function() {
            if (this.classList.contains('border-red-300')) {
                validateField.call(this);
            }
        });
    });

    function validateField() {
        const value = this.value.trim();
        const isRequired = this.hasAttribute('required');
        const type = this.type;
        let isValid = true;

        // Remove previous error styling
        this.classList.remove('border-red-300', 'border-green-300');

        if (isRequired && !value) {
            isValid = false;
        } else if (type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            isValid = emailRegex.test(value);
        } else if (type === 'tel' && value) {
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
            isValid = phoneRegex.test(value.replace(/[-\s\(\)]/g, ''));
        }

        // Add styling based on validation
        if (!isValid) {
            this.classList.add('border-red-300');
        } else if (value) {
            this.classList.add('border-green-300');
        }

        return isValid;
    }

    // Form submission with loading state
    form.addEventListener('submit', function(e) {
        let allValid = true;

        inputs.forEach(input => {
            if (!validateField.call(input)) {
                allValid = false;
            }
        });

        if (!allValid) {
            e.preventDefault();
            return;
        }

        // Add loading state
        submitButton.classList.add('btn-loading');
        submitButton.disabled = true;

        // Create loading animation
        const originalContent = submitButton.innerHTML;
        submitButton.innerHTML = `
            <svg class="animate-spin w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Sending Message...
        `;

        // If form submission fails, restore button
        setTimeout(() => {
            if (submitButton.classList.contains('btn-loading')) {
                submitButton.classList.remove('btn-loading');
                submitButton.disabled = false;
                submitButton.innerHTML = originalContent;
            }
        }, 10000);
    });

    // Auto-resize textarea
    const textarea = document.getElementById('message');
    if (textarea) {
        function autoResize() {
            this.style.height = 'auto';
            this.style.height = Math.min(this.scrollHeight, 200) + 'px';
        }

        textarea.addEventListener('input', autoResize);
        autoResize.call(textarea);
    }

    // Character counter for message field
    if (textarea) {
        const maxLength = 1000;
        const counter = document.createElement('div');
        counter.className = 'text-sm text-gray-500 mt-2 text-right';
        textarea.parentNode.appendChild(counter);

        function updateCounter() {
            const remaining = maxLength - textarea.value.length;
            counter.textContent = `${textarea.value.length}/${maxLength} characters`;

            if (remaining < 50) {
                counter.classList.add('text-orange-600');
                counter.classList.remove('text-gray-500');
            } else {
                counter.classList.remove('text-orange-600');
                counter.classList.add('text-gray-500');
            }
        }

        textarea.addEventListener('input', updateCounter);
        textarea.setAttribute('maxlength', maxLength);
        updateCounter();
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Contact card hover effects
    const contactCards = document.querySelectorAll('.contact-card');
    contactCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('slide-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements for scroll animations
    document.querySelectorAll('[data-aos]').forEach(el => {
        observer.observe(el);
    });

    // Copy contact info to clipboard
    function copyToClipboard(text, element) {
        navigator.clipboard.writeText(text).then(() => {
            // Show success feedback
            const originalContent = element.innerHTML;
            element.innerHTML = `
                <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Copied!
            `;

            setTimeout(() => {
                element.innerHTML = originalContent;
            }, 2000);
        }).catch(err => {
            console.error('Failed to copy: ', err);
        });
    }

    // Add click-to-copy functionality for contact info
    const emailElement = document.querySelector('[data-contact="email"]');
    const phoneElement = document.querySelector('[data-contact="phone"]');

    if (emailElement) {
        emailElement.style.cursor = 'pointer';
        emailElement.title = 'Click to copy email';
        emailElement.addEventListener('click', function() {
            copyToClipboard(this.textContent, this);
        });
    }

    if (phoneElement) {
        phoneElement.style.cursor = 'pointer';
        phoneElement.title = 'Click to copy phone';
        phoneElement.addEventListener('click', function() {
            copyToClipboard(this.textContent, this);
        });
    }

    // FAQ smooth accordion animations
    const accordionButtons = document.querySelectorAll('[data-accordion]');
    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const isActive = content.classList.contains('active');

            // Close all accordions
            document.querySelectorAll('.accordion-content').forEach(acc => {
                acc.classList.remove('active');
                acc.style.maxHeight = '0px';
            });

            // Open clicked accordion if it wasn't active
            if (!isActive) {
                content.classList.add('active');
                content.style.maxHeight = content.scrollHeight + 'px';
            }
        });
    });

    // Parallax effect for background elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelectorAll('.animate-blob');

        parallax.forEach(element => {
            const speed = 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });

    // Auto-save form data to localStorage
    const formData = {};

    inputs.forEach(input => {
        // Load saved data
        const savedValue = localStorage.getItem(`contact_form_${input.name}`);
        if (savedValue && input.type !== 'password') {
            input.value = savedValue;
        }

        // Save data on input
        input.addEventListener('input', function() {
            localStorage.setItem(`contact_form_${this.name}`, this.value);
        });
    });

    // Clear saved data on successful submission
    form.addEventListener('submit', function() {
        setTimeout(() => {
            inputs.forEach(input => {
                localStorage.removeItem(`contact_form_${input.name}`);
            });
        }, 1000);
    });

    // Add focus indicators for accessibility
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('ring-2', 'ring-primary-500', 'ring-opacity-50');
        });

        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('ring-2', 'ring-primary-500', 'ring-opacity-50');
        });
    });

    // Mobile-specific enhancements
    if (window.innerWidth <= 768) {
        // Prevent zoom on iOS when focusing inputs
        const meta = document.createElement('meta');
        meta.name = 'viewport';
        meta.content = 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no';
        document.head.appendChild(meta);

        // Add touch-friendly spacing
        inputs.forEach(input => {
            input.style.minHeight = '44px';
        });
    }

    // Add success animation for form submission
    if (window.location.search.includes('success=1')) {
        // Create success overlay
        const successOverlay = document.createElement('div');
        successOverlay.className = 'fixed inset-0 bg-green-500 bg-opacity-90 flex items-center justify-center z-50';
        successOverlay.innerHTML = `
            <div class="bg-white rounded-3xl p-8 mx-4 text-center shadow-2xl transform scale-0 transition-transform duration-500">
                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Message Sent!</h3>
                <p class="text-gray-600">Thank you for contacting us. We'll get back to you within 24 hours.</p>
            </div>
        `;

        document.body.appendChild(successOverlay);

        setTimeout(() => {
            successOverlay.querySelector('div').style.transform = 'scale(1)';
        }, 100);

        setTimeout(() => {
            successOverlay.remove();
        }, 3000);
    }
    });

    // Service Worker for offline functionality
    if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('SW registered: ', registration);
            })
            .catch(registrationError => {
                console.log('SW registration failed: ', registrationError);
            });
    });
    }

    // Performance monitoring
    const perfObserver = new PerformanceObserver((list) => {
    list.getEntries().forEach((entry) => {
        if (entry.entryType === 'navigation') {
            console.log('Page load time:', entry.loadEventEnd - entry.loadEventStart, 'ms');
        }
    });
});

if (typeof PerformanceObserver !== 'undefined') {
   perfObserver.observe({ entryTypes: ['navigation'] });
}
</script>
@endpush
@endsection
