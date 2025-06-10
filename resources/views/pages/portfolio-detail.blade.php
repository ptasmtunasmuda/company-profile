@extends('layouts.app')

@section('title', $portfolio->title . ' - Portfolio')
@section('description', $portfolio->description)

@section('content')
<!-- Page Header -->
<section class="bg-gray-900 text-white pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <nav class="text-gray-300 mb-4" data-aos="fade-up">
                <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                <span class="mx-2">/</span>
                <a href="{{ route('portfolio') }}" class="hover:text-white">Portfolio</a>
                <span class="mx-2">/</span>
                <span class="text-white">{{ $portfolio->title }}</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up" data-aos-delay="100">{{ $portfolio->title }}</h1>
            @if($portfolio->client_name)
                <p class="text-xl text-blue-200" data-aos="fade-up" data-aos-delay="200">{{ $portfolio->client_name }}</p>
            @endif
        </div>
    </div>
</section>

<!-- Project Overview -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Featured Image -->
                @if($portfolio->getFirstMediaUrl('featured_image'))
                    <div class="mb-12" data-aos="fade-up">
                        <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'large') }}"
                             alt="{{ $portfolio->title }}"
                             class="w-full h-96 object-cover rounded-lg shadow-lg">
                    </div>
                @endif

                <!-- Project Description -->
                <div class="mb-12" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Project Overview</h2>
                    <p class="text-lg text-gray-600 mb-6">{{ $portfolio->description }}</p>

                    <div class="prose prose-lg max-w-none">
                        {!! $portfolio->content !!}
                    </div>
                </div>

                <!-- Project Gallery -->
                @if($portfolio->getMedia('gallery')->count() > 0)
                    <div class="mb-12" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Project Gallery</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach($portfolio->getMedia('gallery') as $image)
                                <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer"
                                     onclick="openImageModal('{{ $image->getUrl() }}', '{{ $portfolio->title }}')">
                                    <img src="{{ $image->getUrl('thumb') }}"
                                         alt="{{ $portfolio->title }}"
                                         class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-opacity duration-300 flex items-center justify-center">
                                        <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-lg p-6 sticky top-6" data-aos="fade-left">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Project Details</h3>

                    <div class="space-y-4">
                        @if($portfolio->client_name)
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Client</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $portfolio->client_name }}</dd>
                            </div>
                        @endif

                        @if($portfolio->completed_at)
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Completion Date</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $portfolio->completed_at->format('F Y') }}</dd>
                            </div>
                        @endif

                        @if($portfolio->project_url)
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Live URL</dt>
                                <dd class="mt-1">
                                    <a href="{{ $portfolio->project_url }}" target="_blank" rel="noopener"
                                       class="text-primary-600 hover:text-primary-700 text-sm flex items-center">
                                        Visit Project
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </a>
                                </dd>
                            </div>
                        @endif

                        @if($portfolio->technologies)
                            <div>
                                <dt class="text-sm font-medium text-gray-500 mb-2">Technologies Used</dt>
                                <dd class="mt-1">
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($portfolio->technologies as $tech)
                                            <span class="px-2 py-1 bg-primary-100 text-primary-600 text-xs rounded-full">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                </dd>
                            </div>
                        @endif
                    </div>

                    <!-- CTA -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Interested in Similar Project?</h4>
                        <a href="{{ route('contact') }}"
                           class="w-full bg-primary-600 text-white px-4 py-3 rounded-lg font-semibold hover:bg-primary-700 transition-colors text-center block">
                            Start Your Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
@if($relatedPortfolios->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Related Projects</h2>
            <p class="text-xl text-gray-600">Check out some of our other successful projects</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedPortfolios as $related)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    @if($related->getFirstMediaUrl('featured_image'))
                        <img src="{{ $related->getFirstMediaUrl('featured_image', 'thumb') }}"
                             alt="{{ $related->title }}"
                             class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    @endif

                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2">{{ $related->title }}</h3>
                        <p class="text-gray-600 mb-4 text-sm">{{ Str::limit($related->description, 80) }}</p>
                        <a href="{{ route('portfolio.detail', $related->slug) }}"
                           class="text-primary-600 font-semibold hover:text-primary-700 transition-colors text-sm">
                            View Project →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Image Modal -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
    <div class="relative max-w-4xl max-h-full p-4">
        <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white hover:text-gray-300 z-10">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg">
    </div>
</div>

@push('scripts')
<script>
function openImageModal(imageUrl, title) {
    document.getElementById('modalImage').src = imageUrl;
    document.getElementById('modalImage').alt = title;
    document.getElementById('imageModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeImageModal() {
    document.getElementById('imageModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside the image
document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeImageModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
});
</script>
@endpush
@endsection
