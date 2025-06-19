@extends('layouts.admin')

@section('title', 'Portfolio Details')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Portfolio Details</h1>
                <p class="mt-1 text-sm text-gray-600">{{ $portfolio->title }}</p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('portfolio.detail', $portfolio->slug) }}" target="_blank" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium admin-transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    View Live
                </a>
                <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="admin-btn-primary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Edit Portfolio
                </a>
                <a href="{{ route('admin.portfolios.index') }}" class="admin-btn-secondary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Portfolio
                </a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Featured Image -->
            @if($portfolio->getFirstMediaUrl('featured_image'))
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Featured Image</h3>
                <div class="relative">
                    <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'large') }}"
                         alt="{{ $portfolio->title }}"
                         class="w-full h-64 md:h-96 object-cover rounded-lg">
                </div>
            </div>
            @endif

            <!-- Content -->
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Project Description</h3>
                <div class="prose max-w-none">
                    <p class="text-gray-600 mb-4">{{ $portfolio->description }}</p>
                    <div class="text-gray-700">
                        {!! nl2br(e($portfolio->content)) !!}
                    </div>
                </div>
            </div>

            <!-- Gallery -->
            @if($portfolio->getMedia('gallery')->count() > 0)
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Gallery Images</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach($portfolio->getMedia('gallery') as $image)
                        <div class="relative group">
                            <img src="{{ $image->getUrl('thumb') }}"
                                 alt="Gallery image"
                                 class="w-full h-32 object-cover rounded-lg cursor-pointer hover:opacity-75 transition-opacity"
                                 onclick="openImageModal('{{ $image->getUrl() }}', '{{ $portfolio->title }}')">
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-200 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                </svg>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Project Info -->
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Project Information</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Status</label>
                        <div class="mt-1">
                            @if($portfolio->is_active)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <svg class="w-2 h-2 mr-1" fill="currentColor" viewBox="0 0 8 8">
                                        <circle cx="4" cy="4" r="3"/>
                                    </svg>
                                    Active
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    <svg class="w-2 h-2 mr-1" fill="currentColor" viewBox="0 0 8 8">
                                        <circle cx="4" cy="4" r="3"/>
                                    </svg>
                                    Inactive
                                </span>
                            @endif

                            @if($portfolio->is_featured)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 ml-2">
                                    <svg class="w-2 h-2 mr-1" fill="currentColor" viewBox="0 0 8 8">
                                        <circle cx="4" cy="4" r="3"/>
                                    </svg>
                                    Featured
                                </span>
                            @endif
                        </div>
                    </div>

                    @if($portfolio->client_name)
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Client</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $portfolio->client_name }}</p>
                    </div>
                    @endif

                    @if($portfolio->project_url)
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Project URL</label>
                        <a href="{{ $portfolio->project_url }}" target="_blank" class="mt-1 text-sm text-blue-600 hover:text-blue-700 break-all">
                            {{ $portfolio->project_url }}
                        </a>
                    </div>
                    @endif

                    @if($portfolio->completed_at)
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Completion Date</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $portfolio->completed_at->format('F j, Y') }}</p>
                    </div>
                    @endif

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Created</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $portfolio->created_at->format('F j, Y \a\t g:i A') }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Last Updated</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $portfolio->updated_at->format('F j, Y \a\t g:i A') }}</p>
                    </div>

                    @if($portfolio->sort_order)
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Sort Order</label>
                        <p class="mt-1 text-sm text-gray-900">{{ $portfolio->sort_order }}</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Technologies -->
            @if($portfolio->technologies && count($portfolio->technologies) > 0)
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Technologies Used</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach($portfolio->technologies as $tech)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Actions -->
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Actions</h3>
                <div class="space-y-3">
                    <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="w-full admin-btn-primary text-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit Portfolio
                    </a>

                    <a href="{{ route('portfolio.detail', $portfolio->slug) }}" target="_blank" class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium admin-transition text-center inline-block">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        View Live
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="relative max-w-4xl max-h-full">
            <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white hover:text-gray-300 z-10">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain">
        </div>
    </div>
</div>

@push('scripts')
<script>
function openImageModal(src, alt) {
    document.getElementById('modalImage').src = src;
    document.getElementById('modalImage').alt = alt;
    const modal = document.getElementById('imageModal');
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
    document.body.style.overflow = '';
}

// Close modal on escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
});

// Close modal on background click
document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeImageModal();
    }
});
</script>
@endpush
@endsection
