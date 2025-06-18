@extends('layouts.admin')

@section('title', 'Create New Page')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Create New Page</h1>
            <p class="mt-1 text-sm text-gray-600">Add a new page to your website</p>
        </div>
        <a href="{{ route('admin.pages.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium admin-transition">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Pages
        </a>
    </div>

    <!-- Form -->
    <div class="admin-card">
        <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6" data-validate>
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Page Title *</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" required
                               class="admin-input @error('title') border-red-500 @enderror">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-2">SEO Title</label>
                        <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title') }}"
                               placeholder="SEO optimized title (optional)"
                               class="admin-input @error('meta_title') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">If empty, page title will be used</p>
                        @error('meta_title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                        <textarea id="meta_description" name="meta_description" rows="3"
                                  placeholder="Brief description for search engines (recommended: 150-160 characters)"
                                  class="admin-input @error('meta_description') border-red-500 @enderror">{{ old('meta_description') }}</textarea>
                        @error('meta_description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="meta_keywords" class="block text-sm font-medium text-gray-700 mb-2">Meta Keywords</label>
                        <input type="text" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}"
                               placeholder="keyword1, keyword2, keyword3"
                               class="admin-input @error('meta_keywords') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">Separate keywords with commas</p>
                        @error('meta_keywords')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <div>
                        <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
                        <input type="file" id="featured_image" name="featured_image" accept="image/*"
                               class="admin-input @error('featured_image') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">Optional: Header image for the page</p>
                        @error('featured_image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                               class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="is_active" class="ml-2 block text-sm text-gray-900">Published (visible on website)</label>
                    </div>

                    <!-- Page Info -->
                    <div class=" rounded-lg p-4">
                        <h4 class="text-sm font-medium text-gray-900 mb-2">Page Information</h4>
                        <div class="space-y-2 text-sm text-gray-600">
                            <div>
                                <span class="font-medium">URL:</span>
                                <span id="page-url">{{ url('/page/') }}/page-slug</span>
                            </div>
                            <div>
                                <span class="font-medium">Status:</span>
                                <span id="page-status">Published</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Page Content *</label>
                <textarea id="content" name="content" rows="15" required
                          placeholder="Enter your page content here. You can use HTML for formatting."
                          class="admin-input @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
                <div class="mt-2 flex justify-between items-center">
                    <p class="text-sm text-gray-500">You can use HTML tags for formatting</p>
                    <button type="button" onclick="togglePreview()" class="text-sm text-blue-600 hover:text-blue-700">
                        Toggle Preview
                    </button>
                </div>
                @error('content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Content Preview -->
            <div id="content-preview" class="hidden">
                <h4 class="text-sm font-medium text-gray-700 mb-2">Content Preview</h4>
                <div class="border border-gray-300 rounded-lg p-4  max-h-96 overflow-y-auto">
                    <div id="preview-content" class="prose max-w-none"></div>
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.pages.index') }}" class="px-6 py-2 admin-btn-secondary">
                    Cancel
                </a>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 admin-transition">
                    Create Page
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const titleInput = document.getElementById('title');
    const pageUrlSpan = document.getElementById('page-url');
    const isActiveCheckbox = document.getElementById('is_active');
    const pageStatusSpan = document.getElementById('page-status');
    const contentTextarea = document.getElementById('content');
    const previewContent = document.getElementById('preview-content');

    // Update URL slug when title changes
    titleInput.addEventListener('input', function() {
        const slug = this.value.toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .trim('-');
        pageUrlSpan.textContent = '{{ url("/page/") }}/' + (slug || 'page-slug');
    });

    // Update status when checkbox changes
    isActiveCheckbox.addEventListener('change', function() {
        pageStatusSpan.textContent = this.checked ? 'Published' : 'Draft';
    });
});

function togglePreview() {
    const preview = document.getElementById('content-preview');
    const content = document.getElementById('content').value;
    const previewContent = document.getElementById('preview-content');

    if (preview.classList.contains('hidden')) {
        previewContent.innerHTML = content;
        preview.classList.remove('hidden');
    } else {
        preview.classList.add('hidden');
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
