<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
    @include('partials.shared.background-patterns')

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-600 rounded-full text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                Testimoni Klien
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Apa Kata Klien Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Jangan hanya percaya pada apa yang kami katakan. Berikut ini adalah beberapa pernyataan dari klien kami yang merasa puas setelah bekerja sama dengan kami.</p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
                <div class="testimonial-card bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-primary-200 relative group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <!-- Quote Icon -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-primary-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>

                    <!-- Stars -->
                    <div class="flex items-center mb-6">
                        @for($i = 1; $i <= 5; $i++)
                            <svg class="w-5 h-5 {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endfor
                    </div>

                    <!-- Testimonial Text -->
                    <blockquote class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "{{ $testimonial->testimonial }}"
                    </blockquote>

                    <!-- Client Info -->
                    <div class="flex items-center">
                        @if(method_exists($testimonial, 'getFirstMediaUrl') && $testimonial->getFirstMediaUrl('avatar'))
                            <img src="{{ $testimonial->getFirstMediaUrl('avatar', 'thumb') }}" alt="{{ $testimonial->client_name }}" class="w-12 h-12 rounded-full object-cover mr-4 ring-2 ring-primary-100">
                        @else
                            <div class="w-12 h-12 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full mr-4 flex items-center justify-center ring-2 ring-primary-100">
                                <span class="text-white font-semibold text-lg">{{ substr($testimonial->client_name, 0, 1) }}</span>
                            </div>
                        @endif
                        <div>
                            <div class="font-semibold text-gray-900">{{ $testimonial->client_name }}</div>
                            @if($testimonial->client_position && $testimonial->client_company)
                                <div class="text-sm text-gray-500">{{ $testimonial->client_position }}, {{ $testimonial->client_company }}</div>
                            @elseif($testimonial->client_company)
                                <div class="text-sm text-gray-500">{{ $testimonial->client_company }}</div>
                            @elseif($testimonial->client_position)
                                <div class="text-sm text-gray-500">{{ $testimonial->client_position }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
