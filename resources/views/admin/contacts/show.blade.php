@extends('layouts.admin')

@section('title', 'View Message')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Message from {{ $contact->name }}</h1>
                <p class="mt-1 text-sm text-gray-600">Received {{ $contact->created_at->format('F d, Y \a\t H:i') }}</p>
            </div>
            <a href="{{ route('admin.contacts.index') }}" class="admin-btn-secondary">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Messages
            </a>
        </div>
    </div>

    <!-- Message Content -->
    <div class="admin-card">
        <div class="admin-card-header">
            <h3 class="admin-card-title">Message Details</h3>
            <div class="flex items-center space-x-2">
                @if($contact->is_read)
                    <span class="admin-badge-success">
                        Read
                    </span>
                @else
                    <span class="admin-badge-warning">
                        Unread
                    </span>
                @endif
            </div>
        </div>

        <div class="p-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Contact Information -->
                <div class="lg:col-span-1">
                    <div class="bg-blue-50 rounded-lg p-4 border border-blue-100">
                        <h4 class="text-sm font-semibold text-gray-900 mb-4">Contact Information</h4>
                        <dl class="space-y-3">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Name</dt>
                                <dd class="mt-1 text-sm text-gray-900 font-medium">{{ $contact->name }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Email</dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    <a href="mailto:{{ $contact->email }}" class="text-blue-600 hover:text-blue-700 font-medium admin-transition">
                                        {{ $contact->email }}
                                    </a>
                                </dd>
                            </div>
                            @if($contact->phone)
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Phone</dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        <a href="tel:{{ $contact->phone }}" class="text-blue-600 hover:text-blue-700 font-medium admin-transition">
                                            {{ $contact->phone }}
                                        </a>
                                    </dd>
                                </div>
                            @endif
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Subject</dt>
                                <dd class="mt-1 text-sm text-gray-900 font-medium">{{ $contact->subject }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Received</dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $contact->created_at->format('F d, Y') }}
                                    <br>
                                    <span class="text-xs text-gray-500">{{ $contact->created_at->format('H:i') }} ({{ $contact->created_at->diffForHumans() }})</span>
                                </dd>
                            </div>
                            @if($contact->is_read && $contact->read_at)
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Read At</dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{ $contact->read_at->format('F d, Y H:i') }}
                                        <br>
                                        <span class="text-xs text-gray-500">{{ $contact->read_at->diffForHumans() }}</span>
                                    </dd>
                                </div>
                            @endif
                        </dl>
                    </div>

                    <!-- Quick Actions -->
                    <div class="mt-6 space-y-3">
                        <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}"
                           class="admin-btn-primary w-full text-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Reply via Email
                        </a>

                        @if($contact->phone)
                            <a href="tel:{{ $contact->phone }}"
                               class="w-full bg-green-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-700 admin-transition text-center block">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                Call {{ $contact->name }}
                            </a>
                        @endif

                        @if(!$contact->is_read)
                            <form action="{{ route('admin.contacts.read', $contact) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="w-full bg-orange-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-orange-600 admin-transition">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Mark as Read
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

                <!-- Message Content -->
                <div class="lg:col-span-2">
                    <div class="bg-white border border-gray-200 rounded-lg p-6">
                        <h4 class="text-lg font-semibold text-gray-900 mb-4">Message</h4>
                        <div class="prose max-w-none">
                            <div class="whitespace-pre-wrap text-gray-700 leading-relaxed  p-4 rounded-lg border">{{ $contact->message }}</div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="mt-6 flex justify-between">
                        <div class="flex space-x-3">
                            @if($contact->is_read)
                                <form action="{{ route('admin.contacts.unread', $contact) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="admin-btn-secondary">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        Mark as Unread
                                    </button>
                                </form>
                            @endif
                        </div>

                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST"
                              data-confirm-delete="Are you sure you want to delete this message? This action cannot be undone.">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-btn-danger">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                                Delete Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
