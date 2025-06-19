@extends('layouts.admin')

@section('title', 'Edit Testimonial')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Edit Testimonial</h1>
                <p class="mt-1 text-sm text-gray-600">Update {{ $testimonial->client_name }}'s testimonial</p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('admin.testimonials.show', $testimonial) }}" class="admin-btn-secondary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    View Details
                </a>
                <a href="{{ route('admin.testimonials.index') }}" class="admin-btn-secondary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Testimonials
                </a>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="admin-card">
        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data" class="space-y-6" data-validate>
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div>
                        <label for="client_name" class="block text-sm font-medium text-gray-700 mb-2">Client Name *</label>
                        <input type="text" id="client_name" name="client_name" value="{{ old('client_name', $testimonial->client_name) }}" required
                               class="admin-input @error('client_name') border-red-500 @enderror">
                        @error('client_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="client_position" class="block text-sm font-medium text-gray-700 mb-2">Client Position</label>
                        <input type="text" id="client_position" name="client_position" value="{{ old('client_position', $testimonial->client_position) }}"
                               placeholder="e.g., CEO, Marketing Manager"
                               class="admin-input @error('client_position') border-red-500 @enderror">
                        @error('client_position')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="client_company" class="block text-sm font-medium text-gray-700 mb-2">Client Company</label>
                        <input type="text" id="client_company" name="client_company" value="{{ old('client_company', $testimonial->client_company) }}"
                               placeholder="Company or organization name"
                               class="admin-input @error('client_company') border-red-500 @enderror">
                        @error('client_company')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                        <select id="rating" name="rating" class="admin-input @error('rating') border-red-500 @enderror">
                            <option value="">Select rating</option>
                            @for($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}" {{ old('rating', $testimonial->rating) == $i ? 'selected' : '' }}>
                                    {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                                </option>
                            @endfor
                        </select>
                        @error('rating')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">Sort Order</label>
                        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $testimonial->sort_order) }}"
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
                    <!-- Current Avatar -->
                    @if($testimonial->getFirstMediaUrl('avatar'))
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Current Avatar</label>
                            <div class="relative inline-block">
                                <img src="{{ $testimonial->getFirstMediaUrl('avatar', 'thumb') }}"
                                     alt="{{ $testimonial->client_name }}"
                                     class="w-20 h-20 rounded-full object-cover">
                            </div>
                        </div>
                    @endif

                    <div>
                        <label for="avatar" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ $testimonial->getFirstMediaUrl('avatar') ? 'Replace Avatar' : 'Client Avatar' }}
                        </label>
                        <input type="file" id="avatar" name="avatar" accept="image/*"
                               class="admin-input @error('avatar') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">Recommended size: 200x200px (square)</p>
                        @error('avatar')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}
                                   class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="is_active" class="ml-2 block text-sm text-gray-900">Active (visible on website)</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $testimonial->is_featured) ? 'checked' : '' }}
                                   class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="is_featured" class="ml-2 block text-sm text-gray-900">Featured testimonial</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full Width Fields -->
            <div class="space-y-6">
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Testimonial Content *</label>
                    <textarea id="content" name="content" rows="6" required
                              placeholder="What did the client say about your work?"
                              class="admin-input @error('content') border-red-500 @enderror">{{ old('content', $testimonial->content) }}</textarea>
                    <p class="mt-1 text-sm text-gray-500">The main testimonial text</p>
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
                    <a href="{{ route('admin.testimonials.index') }}" class="px-6 py-2 admin-btn-secondary">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 admin-transition">
                        Update Testimonial
                    </button>
                </div>
            </div>
        </form>

        <!-- Delete Form - Separate from update form -->
        <div class="admin-card mt-6">
            <div class="border-t border-red-200 pt-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-medium text-red-900">Danger Zone</h3>
                        <p class="text-sm text-red-600">Once you delete this testimonial, there is no going back. Please be certain.</p>
                    </div>
                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline" data-confirm-delete="Are you sure you want to delete this testimonial? This action cannot be undone.">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 admin-transition">
                            Delete Testimonial
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Auto-resize textarea
document.getElementById('content').addEventListener('input', function() {
    this.style.height = 'auto';
    this.style.height = this.scrollHeight + 'px';
});

// Rating preview
document.getElementById('rating').addEventListener('change', function() {
    const rating = parseInt(this.value);
    // You can add visual star rating preview here if needed
});
</script>
@endpush
@endsection
