@extends('layouts.admin')

@section('title', 'Edit Portfolio')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Edit Portfolio Project</h1>
                <p class="mt-1 text-sm text-gray-600">Update {{ $portfolio->title }}</p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('portfolio.detail', $portfolio->slug) }}" target="_blank" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium admin-transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    View Live
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

    <!-- Form -->
    <div class="admin-card">
        <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST" enctype="multipart/form-data" class="space-y-6" data-validate>
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Project Title *</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $portfolio->title) }}" required
                               class="admin-input @error('title') border-red-500 @enderror">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="client_name" class="block text-sm font-medium text-gray-700 mb-2">Client Name</label>
                        <input type="text" id="client_name" name="client_name" value="{{ old('client_name', $portfolio->client_name) }}"
                               class="admin-input @error('client_name') border-red-500 @enderror">
                        @error('client_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="project_url" class="block text-sm font-medium text-gray-700 mb-2">Project URL</label>
                        <input type="url" id="project_url" name="project_url" value="{{ old('project_url', $portfolio->project_url) }}"
                               placeholder="https://example.com"
                               class="admin-input @error('project_url') border-red-500 @enderror">
                        @error('project_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="completed_at" class="block text-sm font-medium text-gray-700 mb-2">Completion Date</label>
                        <input type="date" id="completed_at" name="completed_at" value="{{ old('completed_at', $portfolio->completed_at?->format('Y-m-d')) }}"
                               class="admin-input @error('completed_at') border-red-500 @enderror">
                        @error('completed_at')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $portfolio->sort_order) }}"
                               min="0" step="1"
                               class="admin-input @error('sort_order') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">Lower numbers appear first</p>
                        @error('sort_order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Current Featured Image -->
                    @if($portfolio->getFirstMediaUrl('featured_image'))
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Current Featured Image</label>
                            <div class="relative inline-block">
                                <img src="{{ $portfolio->getFirstMediaUrl('featured_image', 'thumb') }}"
                                     alt="{{ $portfolio->title }}"
                                     class="w-32 h-24 object-cover rounded-lg">
                            </div>
                        </div>
                    @endif

                    <div>
                        <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ $portfolio->getFirstMediaUrl('featured_image') ? 'Replace Featured Image' : 'Featured Image' }}
                        </label>
                        <input type="file" id="featured_image" name="featured_image" accept="image/*"
                               class="admin-input @error('featured_image') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">Recommended size: 1200x800px</p>
                        @error('featured_image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Current Gallery -->
                    @if($portfolio->getMedia('gallery')->count() > 0)
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Current Gallery Images</label>
                            <div class="grid grid-cols-3 gap-2">
                                @foreach($portfolio->getMedia('gallery') as $image)
                                    <div class="relative">
                                        <img src="{{ $image->getUrl('thumb') }}"
                                             alt="Gallery image"
                                             class="w-full h-20 object-cover rounded">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div>
                        <label for="gallery" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ $portfolio->getMedia('gallery')->count() > 0 ? 'Add More Gallery Images' : 'Gallery Images' }}
                        </label>
                        <input type="file" id="gallery" name="gallery[]" accept="image/*" multiple
                               class="admin-input @error('gallery') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">You can select multiple images</p>
                        @error('gallery')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Technologies Used</label>
                        <div id="technologies-container" class="space-y-2">
                            @if($portfolio->technologies && count($portfolio->technologies) > 0)
                                @foreach($portfolio->technologies as $tech)
                                    <div class="tech-input flex">
                                        <input type="text" name="technologies[]" value="{{ $tech }}"
                                               class="flex-1 px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <button type="button" onclick="removeTech(this)" class="px-3 py-2 bg-red-500 text-white rounded-r-lg hover:bg-red-600">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                @endforeach
                            @else
                                <div class="tech-input flex">
                                    <input type="text" name="technologies[]" placeholder="e.g., Laravel"
                                           class="flex-1 px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <button type="button" onclick="removeTech(this)" class="px-3 py-2 bg-red-500 text-white rounded-r-lg hover:bg-red-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <button type="button" onclick="addTech()" class="mt-2 text-blue-600 hover:text-blue-700 text-sm font-medium">
                            + Add Technology
                        </button>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $portfolio->is_featured) ? 'checked' : '' }}
                                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="is_featured" class="ml-2 block text-sm text-gray-900">Featured Project</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $portfolio->is_active) ? 'checked' : '' }}
                                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="is_active" class="ml-2 block text-sm text-gray-900">Active (visible on website)</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full Width Fields -->
            <div class="space-y-6">
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Short Description *</label>
                    <textarea id="description" name="description" rows="3" required
                                placeholder="Brief description of the project (shown in portfolio grid)"
                                class="admin-input @error('description') border-red-500 @enderror">{{ old('description', $portfolio->description) }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Detailed Content *</label>
                    <textarea id="content" name="content" rows="15" required
                                placeholder="Detailed description of the project, challenges solved, technologies used, etc."
                                class="admin-input @error('content') border-red-500 @enderror">{{ old('content', $portfolio->content) }}</textarea>
                    <p class="mt-1 text-sm text-gray-500">You can use HTML tags for formatting</p>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="flex justify-between pt-6 border-t border-gray-200">
                <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST" class="inline" data-confirm-delete="Are you sure you want to delete this portfolio? This action cannot be undone.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 admin-transition">
                        Delete Portfolio
                    </button>
                </form>

                <div class="flex space-x-4">
                    <a href="{{ route('admin.portfolios.index') }}" class="px-6 py-2 admin-btn-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 admin-transition">
                        Update Portfolio
                    </button>
                </div>
            </div>
        </form>
    </div>
    </div>

    @push('scripts')
    <script>
    function addTech() {
    const container = document.getElementById('technologies-container');
    const div = document.createElement('div');
    div.className = 'tech-input flex';
    div.innerHTML = `
        <input type="text" name="technologies[]" placeholder="e.g., React"
                class="flex-1 px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        <button type="button" onclick="removeTech(this)" class="px-3 py-2 bg-red-500 text-white rounded-r-lg hover:bg-red-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    `;
    container.appendChild(div);
    }

    function removeTech(button) {
    const container = document.getElementById('technologies-container');
    if (container.children.length > 1) {
        button.parentElement.remove();
    }
    }

    // Auto-resize textarea
    document.getElementById('content').addEventListener('input', function() {
    this.style.height = 'auto';
    this.style.height = this.scrollHeight + 'px';
    });
</script>
@endpush
@endsection
