@extends('layouts.admin')

@section('title', 'Edit Page')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Edit Page</h1>
                <p class="mt-1 text-sm text-gray-600">Update {{ $page->title }}</p>
            </div>
            <div class="flex space-x-3">
                @if($page->slug !== 'home' && $page->slug !== 'about')
                    <a href="{{ route('page', $page->slug) }}" target="_blank" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium admin-transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        View Live
                    </a>
                @endif
                <a href="{{ route('admin.pages.index') }}" class="admin-btn-secondary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Pages
                </a>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="admin-card">
        <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data" class="space-y-6" data-validate>
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Page Title *</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $page->title) }}" required
                               class="admin-input @error('title') border-red-500 @enderror">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Page Slug</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug', $page->slug) }}"
                               class="admin-input @error('slug') border-red-500 @enderror"
                               {{ in_array($page->slug, ['home', 'about']) ? 'readonly' : '' }}>
                        <p class="mt-1 text-sm text-gray-500">URL-friendly version of the title</p>
                        @error('slug')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                        <textarea id="meta_description" name="meta_description" rows="3"
                                  placeholder="Brief description for search engines (150-160 characters)"
                                  class="admin-input @error('meta_description') border-red-500 @enderror">{{ old('meta_description', $page->meta_description) }}</textarea>
                        @error('meta_description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $page->sort_order) }}"
                               min="0" step="1"
                               class="admin-input @error('sort_order') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">Lower numbers appear first in navigation</p>
                        @error('sort_order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Current Featured Image -->
                    @if($page->getFirstMediaUrl('featured_image'))
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Current Featured Image</label>
                            <div class="relative inline-block">
                                <img src="{{ $page->getFirstMediaUrl('featured_image', 'thumb') }}"
                                     alt="{{ $page->title }}"
                                     class="w-32 h-24 object-cover rounded-lg">
                            </div>
                        </div>
                    @endif

                    <div>
                        <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ $page->getFirstMediaUrl('featured_image') ? 'Replace Featured Image' : 'Featured Image' }}
                        </label>
                        <input type="file" id="featured_image" name="featured_image" accept="image/*"
                               class="admin-input @error('featured_image') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">Recommended size: 1200x800px</p>
                        @error('featured_image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $page->is_active) ? 'checked' : '' }}
                                   class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="is_active" class="ml-2 block text-sm text-gray-900">Active (visible on website)</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="show_in_menu" name="show_in_menu" value="1" {{ old('show_in_menu', $page->show_in_menu) ? 'checked' : '' }}
                                   class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="show_in_menu" class="ml-2 block text-sm text-gray-900">Show in navigation menu</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full Width Fields -->
            <div class="space-y-6">
                <div>
                    <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">Page Excerpt</label>
                    <textarea id="excerpt" name="excerpt" rows="3"
                              placeholder="Brief description of the page content"
                              class="admin-input @error('excerpt') border-red-500 @enderror">{{ old('excerpt', $page->excerpt) }}</textarea>
                    @error('excerpt')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Page Content *</label>
                    <textarea id="content" name="content" rows="15" required
                              placeholder="Full content of the page"
                              class="admin-input @error('content') border-red-500 @enderror">{{ old('content', $page->content) }}</textarea>
                    <p class="mt-1 text-sm text-gray-500">You can use HTML tags for formatting</p>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="flex justify-between pt-6 border-t border-gray-200">
                <div>
                    <!-- Delete button will be outside form -->
                </div>

                <div class="flex space-x-4">
                    <a href="{{ route('admin.pages.index') }}" class="px-6 py-2 admin-btn-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 admin-transition">
                        Update Page
                    </button>
                </div>
            </div>
        </form>

        <!-- Delete Form - Separate from update form -->
        @if(!in_array($page->slug, ['home', 'about']))
        <div class="admin-card mt-6">
            <div class="border-t border-red-200 pt-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-medium text-red-900">Danger Zone</h3>
                        <p class="text-sm text-red-600">Once you delete this page, there is no going back. Please be certain.</p>
                    </div>
                    <form action="{{ route('admin.pages.destroy', $page) }}" method="POST" class="inline" data-confirm-delete="Are you sure you want to delete this page? This action cannot be undone.">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 admin-transition">
                            Delete Page
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

@push('scripts')
<script>
// Auto-resize textarea
document.getElementById('content').addEventListener('input', function() {
    this.style.height = 'auto';
    this.style.height = this.scrollHeight + 'px';
});

// Generate slug from title
document.getElementById('title').addEventListener('input', function() {
    const slugField = document.getElementById('slug');
    if (!slugField.readOnly) {
        const slug = this.value
            .toLowerCase()
            .replace(/[^a-z0-9 -]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .trim('-');
        slugField.value = slug;
    }
});
</script>
@endpush
@endsection
