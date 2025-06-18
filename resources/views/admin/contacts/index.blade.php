@extends('layouts.admin')

@section('title', 'Contact Messages')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Contact Messages</h1>
                <p class="mt-1 text-sm text-gray-600">Manage incoming contact form submissions</p>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-gray-900">{{ $stats['total'] }}</div>
                    <div class="text-sm text-gray-600">Total Messages</div>
                </div>
            </div>
        </div>
        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-gray-900">{{ $stats['unread'] }}</div>
                    <div class="text-sm text-gray-600">Unread Messages</div>
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
                    <div class="text-2xl font-bold text-gray-900">{{ $stats['read'] }}</div>
                    <div class="text-sm text-gray-600">Read Messages</div>
                </div>
            </div>
        </div>
        <div class="admin-stats-card">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <div class="text-2xl font-bold text-gray-900">{{ $contacts->count() }}</div>
                    <div class="text-sm text-gray-600">Showing</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class="admin-card">
        <form method="GET" action="{{ route('admin.contacts.index') }}" class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <input type="text" name="search" value="{{ request('search') }}"
                       placeholder="Search by name, email, or subject..."
                       class="admin-input">
            </div>
            <div>
                <select name="status" class="admin-select">
                    <option value="">All Messages</option>
                    <option value="unread" {{ request('status') === 'unread' ? 'selected' : '' }}>Unread Only</option>
                    <option value="read" {{ request('status') === 'read' ? 'selected' : '' }}>Read Only</option>
                </select>
            </div>
            <div class="flex gap-2">
                <button type="submit" class="admin-btn-primary">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                    Filter
                </button>
                <a href="{{ route('admin.contacts.index') }}" class="admin-btn-secondary">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Clear
                </a>
            </div>
        </form>
    </div>

    <!-- Messages Table -->
    <div class="admin-card">
        @if($contacts->count() > 0)
            <!-- Bulk Actions -->
            <div class="admin-card-header">
                <form id="bulkActionForm" action="{{ route('admin.contacts.bulk-action') }}" method="POST" class="flex items-center gap-4">
                    @csrf
                    <div class="flex items-center">
                        <input type="checkbox" id="selectAll" class="h-4 w-4 text-blue-600 border-gray-300 rounded admin-focus">
                        <label for="selectAll" class="ml-2 text-sm text-gray-600">Select All</label>
                    </div>
                    <select name="action" class="admin-select text-sm" disabled>
                        <option value="">Bulk Actions</option>
                        <option value="mark_read">Mark as Read</option>
                        <option value="mark_unread">Mark as Unread</option>
                        <option value="delete">Delete</option>
                    </select>
                    <button type="submit" id="bulkActionBtn" class="admin-btn-secondary text-sm" disabled>
                        Apply
                    </button>
                </form>
            </div>

            <div class="overflow-x-auto admin-scrollbar admin-scrollbar">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded admin-focus">
                            </th>
                            <th>Contact</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($contacts as $contact)
                            <tr class="hover: {{ !$contact->is_read ? 'bg-blue-50' : '' }}">
                                <td>
                                    <input type="checkbox" name="contacts[]" value="{{ $contact->id }}"
                                           class="contact-checkbox h-4 w-4 text-blue-600 border-gray-300 rounded admin-focus">
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <span class="text-sm font-semibold text-blue-700">{{ substr($contact->name, 0, 1) }}</span>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 {{ !$contact->is_read ? 'font-bold' : '' }}">
                                                {{ $contact->name }}
                                            </div>
                                            <div class="text-sm text-gray-500">{{ $contact->email }}</div>
                                            @if($contact->phone)
                                                <div class="text-sm text-gray-500">{{ $contact->phone }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm text-gray-900 {{ !$contact->is_read ? 'font-semibold' : '' }}">
                                        {{ $contact->subject }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm text-gray-600 max-w-xs truncate">
                                        {{ Str::limit($contact->message, 100) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        @if($contact->is_read)
                                            <span class="admin-badge-success">
                                                Read
                                            </span>
                                        @else
                                            <span class="admin-badge-warning">
                                                Unread
                                            </span>
                                            <div class="w-2 h-2 bg-blue-500 rounded-full ml-2"></div>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-sm text-gray-500">
                                    <div>{{ $contact->created_at->format('M d, Y') }}</div>
                                    <div class="text-xs">{{ $contact->created_at->format('H:i') }}</div>
                                </td>
                                <td class="text-sm font-medium">
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('admin.contacts.show', $contact) }}"
                                           class="text-blue-600 hover:text-blue-700 p-1 rounded admin-transition"
                                           title="View Message">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </a>

                                        @if($contact->is_read)
                                            <form action="{{ route('admin.contacts.unread', $contact) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-orange-600 hover:text-orange-700 p-1 rounded admin-transition" title="Mark as Unread">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{ route('admin.contacts.read', $contact) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-green-600 hover:text-green-700 p-1 rounded admin-transition" title="Mark as Read">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        @endif

                                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline"
                                              data-confirm-delete="Are you sure you want to delete this message?">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-700 p-1 rounded admin-transition" title="Delete Message">
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
                {{ $contacts->links() }}
            </div>
        @else
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <h3 class="admin-card-title mb-2">No messages found</h3>
                <p class="text-gray-600">{{ request()->hasAny(['search', 'status']) ? 'Try adjusting your search filters.' : 'When visitors contact you through the website, their messages will appear here.' }}</p>
            </div>
        @endif
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const selectAllCheckbox = document.getElementById('selectAll');
    const contactCheckboxes = document.querySelectorAll('.contact-checkbox');
    const bulkActionSelect = document.querySelector('select[name="action"]');
    const bulkActionBtn = document.getElementById('bulkActionBtn');
    const bulkForm = document.getElementById('bulkActionForm');

    // Select All functionality
    selectAllCheckbox.addEventListener('change', function() {
        contactCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
        updateBulkActions();
    });

    // Individual checkbox change
    contactCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateBulkActions);
    });

    function updateBulkActions() {
        const checkedBoxes = document.querySelectorAll('.contact-checkbox:checked');
        const hasChecked = checkedBoxes.length > 0;

        bulkActionSelect.disabled = !hasChecked;
        bulkActionBtn.disabled = !hasChecked || !bulkActionSelect.value;

        if (hasChecked) {
            bulkActionSelect.classList.remove('bg-gray-100');
            bulkActionBtn.classList.remove('bg-gray-400');
            bulkActionBtn.classList.add('bg-gray-600');
        } else {
            bulkActionSelect.classList.add('bg-gray-100');
            bulkActionBtn.classList.remove('bg-gray-600');
            bulkActionBtn.classList.add('bg-gray-400');
        }
    }

    // Enable/disable bulk action button when action is selected
    bulkActionSelect.addEventListener('change', updateBulkActions);

    // Bulk form submission
    bulkForm.addEventListener('submit', function(e) {
        const checkedBoxes = document.querySelectorAll('.contact-checkbox:checked');
        const action = bulkActionSelect.value;

        if (checkedBoxes.length === 0) {
            e.preventDefault();
            alert('Please select at least one message.');
            return;
        }

        if (!action) {
            e.preventDefault();
            alert('Please select an action.');
            return;
        }

        if (action === 'delete') {
            if (!confirm(`Are you sure you want to delete ${checkedBoxes.length} message(s)? This action cannot be undone.`)) {
                e.preventDefault();
                return;
            }
        }
    });
});
</script>
@endpush
@endsection
