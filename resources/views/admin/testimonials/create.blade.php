@extends('layouts.admin')

@section('title', 'Create New Testimonial')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Create New Testimonial</h1>
            <p class="mt-1 text-sm text-gray-600">Add a new client testimonial</p>
        </div>
        <a href="{{ route('admin.testimonials.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Testimonials
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white shadow rounded-lg">
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 p-6">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div>
                        <label for="client_name" class="block text-sm font-medium text-gray-700 mb-2">Client Name *</label>
                        <input type="text" id="client_name" name="client_name" value="{{ old('client_name') }}" required
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('client_name') border-red-500 @enderror">
                        @error('client_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="client_position" class="block text-sm font-medium text-gray-700 mb-2">Client Position</label>
                        <input type="text" id="client_position" name="client_position" value="{{ old('client_position') }}"
                               placeholder="e.g., CEO, Marketing Director"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('client_position') border-red-500 @enderror">
                        @error('client_position')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="client_company" class="block text-sm font-medium text-gray-700 mb-2">Client Company</label>
                        <input type="text" id="client_company" name="client_company" value="{{ old('client_company') }}"
                               placeholder="e.g., Tech Startup Inc."
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('client_company') border-red-500 @enderror">
                        @error('client_company')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating *</label>
                        <select id="rating" name="rating" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('rating') border-red-500 @enderror">
                            <option value="">Select Rating</option>
                            @for($i = 5; $i >= 1; $i--)
                                <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>
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
                        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}"
                               min="0" step="1"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('sort_order') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">Lower numbers appear first</p>
                        @error('sort_order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <div>
                        <label for="avatar" class="block text-sm font-medium text-gray-700 mb-2">Client Avatar</label>
                        <input type="file" id="avatar" name="avatar" accept="image/*"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('avatar') border-red-500 @enderror">
                        <p class="mt-1 text-sm text-gray-500">Recommended size: 200x200px (square)</p>
                        @error('avatar')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                               class="h-4 w-4 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                        <label for="is_active" class="ml-2 block text-sm text-gray-900">Active (visible on website)</label>
                    </div>

                    <!-- Preview Rating -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Rating Preview</label>
                        <div id="rating-preview" class="flex items-center space-x-1">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="w-6 h-6 text-gray-300 star-icon" data-rating="{{ $i }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full Width Fields -->
            <div>
                <label for="testimonial" class="block text-sm font-medium text-gray-700 mb-2">Testimonial *</label>
                <textarea id="testimonial" name="testimonial" rows="6" required
                          placeholder="Enter the client's testimonial here..."
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('testimonial') border-red-500 @enderror">{{ old('testimonial') }}</textarea>
                <p class="mt-1 text-sm text-gray-500">Maximum 1000 characters</p>
                @error('testimonial')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Buttons -->
            <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.testimonials.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="px-6 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-colors">
                    Create Testimonial
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ratingSelect = document.getElementById('rating');
    const starIcons = document.querySelectorAll('.star-icon');

    function updateStarPreview(rating) {
        starIcons.forEach((star, index) => {
            if (index < rating) {
                star.classList.remove('text-gray-300');
                star.classList.add('text-yellow-400');
            } else {
                star.classList.remove('text-yellow-400');
                star.classList.add('text-gray-300');
            }
        });
    }

    // Update preview when select changes
    ratingSelect.addEventListener('change', function() {
        const rating = parseInt(this.value) || 0;
        updateStarPreview(rating);
    });

    // Allow clicking stars to set rating
    starIcons.forEach((star, index) => {
        star.addEventListener('click', function() {
            const rating = index + 1;
            ratingSelect.value = rating;
            updateStarPreview(rating);
        });

        star.style.cursor = 'pointer';
    });

    // Initialize with old value if any
    const initialRating = parseInt(ratingSelect.value) || 0;
    updateStarPreview(initialRating);
});
</script>
@endpush
@endsection
