@extends('layouts.admin')

@section('title', 'Pages Management')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Pages</h1>
                <p class="mt-1 text-sm text-gray-600">Manage website pages and content</p>
            </div>
            <a href="{{ route('admin.pages.create') }}" class="admin-btn-primary">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add New Page
            </a>
        </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-gray-900">{{ $pages->total() }}</div>
                    <div class="text-sm text-gray-600">Total Pages</div>
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
                    <div class="text-2xl font-bold text-gray-900">{{ $pages->where('is_active', true)->count() }}</div>
                    <div class="text-sm text-gray-600">Published Pages</div>
                </div>
            </div>
        </div>
        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-gray-500 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-gray-900">{{ $pages->where('is_active', false)->count() }}</div>
                    <div class="text-sm text-gray-600">Draft Pages</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pages Table -->
    <div class="admin-card">
        <div class="admin-card-header">
            <h3 class="admin-card-title">All Pages</h3>
        </div>

        @if($pages->count() > 0)
            <div class="overflow-x-auto admin-scrollbar">
                <table class="admin-table"><thead><tr><th>Page</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Last Modified</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($pages as $page)
                            <tr class="hover:">
                                <td>
                                    <div class="flex items-center">
                                        @if($page->getFirstMediaUrl('featured_image'))
                                            <img class="h-10 w-10 rounded object-cover" src="{{ $page->getFirstMediaUrl('featured_image', 'thumb') }}" alt="{{ $page->title }}">
                                        @else
                                            <div class="h-10 w-10 bg-gray-200 rounded flex items-center justify-center">
                                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                            </div>
                                        @endif
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $page->title }}</div>
                                            @if($page->meta_title)
                                                <div class="text-sm text-gray-500">{{ Str::limit($page->meta_title, 50) }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm text-gray-900">{{ $page->slug }}</div>
                                </td>
                                <td>
                                    @if($page->is_active)
                                        <span class="admin-badge-success">Published</span>
                                    @else
                                        <span class="admin-badge-danger">Draft</span>
                                    @endif
                                </td>
                                <td class="text-sm text-gray-500">
                                    {{ $page->updated_at->format('M d, Y H:i') }}
                                </td>
                                <td class="text-sm font-medium">
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('admin.pages.show', $page) }}" class="text-gray-600 hover:text-gray-700 p-1 rounded admin-transition" title="View Page">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.pages.edit', $page) }}" class="text-blue-600 hover:text-blue-700 p-1 rounded admin-transition" title="Edit Page">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('page', $page->slug) }}" target="_blank" class="text-green-600 hover:text-green-700 p-1 rounded admin-transition" title="View Live">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.pages.destroy', $page) }}" method="POST" class="inline" data-confirm-delete="Are you sure you want to delete this page?">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-700 p-1 rounded admin-transition" title="Delete Page">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
            <div class=" border-t border-gray-200">
                {{ $pages->links() }}
            </div>
        @else
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <h3 class="admin-card-title mb-2">No pages</h3>
                <p class="text-gray-600 mb-6">Get started by creating your first page.</p>
                <a href="{{ route('admin.pages.create') }}" class="admin-btn-primary">
                    Create First Page
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
