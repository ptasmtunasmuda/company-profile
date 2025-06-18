@extends('layouts.admin')

@section('title', 'Testimonials Management')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Testimonials</h1>
                <p class="mt-1 text-sm text-gray-600">Manage client testimonials and reviews</p>
            </div>
            <a href="{{ route('admin.testimonials.create') }}" class="admin-btn-primary">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add New Testimonial
            </a>
        </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-gray-900">{{ $testimonials->total() }}</div>
                    <div class="text-sm text-gray-600">Total Testimonials</div>
                </div>
            </div>
        </div>
        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-gray-900">{{ $testimonials->where('is_active', true)->count() }}</div>
                    <div class="text-sm text-gray-600">Active Testimonials</div>
                </div>
            </div>
        </div>
        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-gray-900">{{ number_format($testimonials->avg('rating'), 1) }}</div>
                    <div class="text-sm text-gray-600">Average Rating</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Table -->
    <div class="admin-card">
        <div class="admin-card-header">
            <h3 class="admin-card-title">All Testimonials</h3>
        </div>

        @if($testimonials->count() > 0)
            <div class="overflow-x-auto admin-scrollbar">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th class="text-left w-64">Client</th>
                            <th class="text-left w-96">Testimonial</th>
                            <th class="text-left w-32">Rating</th>
                            <th class="text-left w-24">Status</th>
                            <th class="text-left w-32">Created</th>
                            <th class="text-left w-32">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                            <tr class="hover:bg-gray-50 admin-transition">
                                <td class="px-6 py-4 w-64">
                                    <div class="flex items-center">
                                        @if($testimonial->getFirstMediaUrl('avatar'))
                                            <img class="h-12 w-12 rounded-full object-cover border-2 border-gray-200 flex-shrink-0"
                                                 src="{{ $testimonial->getFirstMediaUrl('avatar', 'thumb') }}"
                                                 alt="{{ $testimonial->client_name }}">
                                        @else
                                            <div class="h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center border-2 border-blue-200 flex-shrink-0">
                                                <span class="text-lg font-bold text-blue-600">{{ substr($testimonial->client_name, 0, 1) }}</span>
                                            </div>
                                        @endif
                                        <div class="ml-4 min-w-0 flex-1">
                                            <div class="text-sm font-semibold text-gray-900 truncate">{{ $testimonial->client_name }}</div>
                                            @if($testimonial->client_position && $testimonial->client_company)
                                                <div class="text-sm text-gray-500 truncate">{{ $testimonial->client_position }}, {{ $testimonial->client_company }}</div>
                                            @elseif($testimonial->client_company)
                                                <div class="text-sm text-gray-500 truncate">{{ $testimonial->client_company }}</div>
                                            @elseif($testimonial->client_position)
                                                <div class="text-sm text-gray-500 truncate">{{ $testimonial->client_position }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 w-96">
                                    <div class="text-sm text-gray-900 leading-relaxed break-words">
                                        <span class="text-gray-400">"</span>{{ Str::limit($testimonial->testimonial, 120) }}<span class="text-gray-400">"</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            @for($i = 1; $i <= 5; $i++)
                                                <svg class="w-4 h-4 {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            @endfor
                                        </div>
                                        <span class="ml-2 text-sm font-medium text-gray-700">{{ $testimonial->rating }}/5</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    @if($testimonial->is_active)
                                        <span class="admin-badge-success">Active</span>
                                    @else
                                        <span class="admin-badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    <div class="flex flex-col">
                                        <span class="font-medium">{{ $testimonial->created_at->format('M d, Y') }}</span>
                                        <span class="text-xs text-gray-400">{{ $testimonial->created_at->format('H:i') }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-1">
                                        <a href="{{ route('admin.testimonials.show', $testimonial) }}"
                                           class="inline-flex items-center justify-center w-8 h-8 text-gray-600 hover:text-gray-700 hover:bg-gray-100 rounded-lg admin-transition"
                                           title="View Testimonial">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.testimonials.edit', $testimonial) }}"
                                           class="inline-flex items-center justify-center w-8 h-8 text-blue-600 hover:text-blue-700 hover:bg-blue-50 rounded-lg admin-transition"
                                           title="Edit Testimonial">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline" data-confirm-delete="Are you sure you want to delete this testimonial?">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="inline-flex items-center justify-center w-8 h-8 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg admin-transition"
                                                    title="Delete Testimonial">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                {{ $testimonials->links() }}
            </div>
        @else
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                <h3 class="admin-card-title mb-2">No testimonials</h3>
                <p class="text-gray-600 mb-6">Get started by adding your first client testimonial.</p>
                <a href="{{ route('admin.testimonials.create') }}" class="admin-btn-primary">
                    Add First Testimonial
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
