@extends('layouts.admin')

@section('title', 'Testimonial Details')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Testimonial Details</h1>
                <p class="mt-1 text-sm text-gray-600">{{ $testimonial->client_name }}</p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="admin-btn-primary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Edit Testimonial
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

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Testimonial Content -->
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Testimonial</h3>
                <div class="bg-gray-50 p-6 rounded-lg border-l-4 border-blue-500">
                    <div class="flex items-start">
                        <svg class="w-8 h-8 text-blue-500 mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                        <div class="flex-1">
                            <blockquote class="text-gray-700 text-lg leading-relaxed mb-4">
                                "{{ $testimonial->content }}"
                            </blockquote>
                            <div class="flex items-center">
                                @if($testimonial->getFirstMediaUrl('avatar'))
                                    <img src="{{ $testimonial->getFirstMediaUrl('avatar', 'thumb') }}"
                                         alt="{{ $testimonial->client_name }}"
                                         class="w-12 h-12 rounded-full object-cover mr-4">
                                @else
                                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mr-4">
                                        <span class="text-white font-bold text-lg">{{ substr($testimonial->client_name, 0, 1) }}</span>
                                    </div>
                                @endif
                                <div>
                                    <p class="font-semibold text-gray-900">{{ $testimonial->client_name }}</p>
                                    @if($testimonial->client_position)
                                        <p class="text-sm text-gray-600">{{ $testimonial->client_position }}</p>
                                    @endif
                                    @if($testimonial->client_company)
                                        <p class="text-sm text-gray-600">{{ $testimonial->client_company }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rating Display -->
            @if($testimonial->rating)
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Rating</h3>
                <div class="flex items-center space-x-2">
                    <div class="flex items-center">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $testimonial->rating)
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            @else
                                <svg class="w-6 h-6 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            @endif
                        @endfor
                    </div>
                    <span class="text-lg font-semibold text-gray-900">{{ $testimonial->rating }}/5</span>
                </div>
            </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Client Info -->
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Client Information</h3>
                <div class="space-y-4">
                    <div class="text-center">
                        @if($testimonial->getFirstMediaUrl('avatar'))
                            <img src="{{ $testimonial->getFirstMediaUrl('avatar', 'thumb') }}"
                                 alt="{{ $testimonial->client_name }}"
                                 class="w-20 h-20 rounded-full object-cover mx-auto mb-4">
                        @else
                            <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-white font-bold text-2xl">{{ substr($testimonial->client_name, 0, 1) }}</span>
                            </div>
                        @endif
                        <h4 class="font-semibold text-gray-900">{{ $testimonial->client_name }}</h4>
                        @if($testimonial->client_position)
                            <p class="text-sm text-gray-600">{{ $testimonial->client_position }}</p>
                        @endif
                        @if($testimonial->client_company)
                            <p class="text-sm text-gray-600">{{ $testimonial->client_company }}</p>
                        @endif
                    </div>

                    <div class="border-t pt-4">
                        <div class="space-y-3">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Status</label>
                                <div class="mt-1">
                                    @if($testimonial->is_active)
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

                                    @if($testimonial->is_featured)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 ml-2">
                                            <svg class="w-2 h-2 mr-1" fill="currentColor" viewBox="0 0 8 8">
                                                <circle cx="4" cy="4" r="3"/>
                                            </svg>
                                            Featured
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Created</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $testimonial->created_at->format('F j, Y \a\t g:i A') }}</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Last Updated</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $testimonial->updated_at->format('F j, Y \a\t g:i A') }}</p>
                            </div>

                            @if($testimonial->sort_order)
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Sort Order</label>
                                <p class="mt-1 text-sm text-gray-900">{{ $testimonial->sort_order }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="admin-card">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Actions</h3>
                <div class="space-y-3">
                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="w-full admin-btn-primary text-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit Testimonial
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
