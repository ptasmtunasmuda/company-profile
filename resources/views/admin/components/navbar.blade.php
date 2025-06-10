<header class="bg-white shadow-sm border-b border-gray-200">
    <div class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center">
            <h1 class="text-2xl font-semibold text-gray-900">@yield('title', 'Dashboard')</h1>
        </div>

        <div class="flex items-center space-x-4">
            <!-- Notifications -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="p-2 text-gray-400 hover:text-gray-600 relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-3.405-3.405A2.032 2.032 0 0116 12V6a6 6 0 10-12 0v6c0 .695-.19 1.348-.595 1.905L0 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    @if(\App\Models\Contact::unread()->count() > 0)
                        <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">
                            {{ \App\Models\Contact::unread()->count() }}
                        </span>
                    @endif
                </button>

                <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg border z-50">
                    <div class="p-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold">Notifications</h3>
                    </div>
                    <div class="max-h-64 overflow-y-auto">
                        @forelse(\App\Models\Contact::unread()->latest()->take(5)->get() as $contact)
                            <div class="p-4 border-b border-gray-100 hover:bg-gray-50">
                                <div class="flex justify-between items-start">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">New message from {{ $contact->name }}</p>
                                        <p class="text-sm text-gray-500 truncate">{{ $contact->subject }}</p>
                                        <p class="text-xs text-gray-400 mt-1">{{ $contact->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="p-4 text-center text-gray-500">
                                No new notifications
                            </div>
                        @endforelse
                    </div>
                    @if(\App\Models\Contact::unread()->count() > 0)
                        <div class="p-4 border-t border-gray-200">
                            <a href="{{ route('admin.contacts.index') }}" class="text-sm text-primary-600 hover:text-primary-700">
                                View all messages
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <!-- User Menu -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                        <span class="text-sm font-semibold">{{ substr(auth()->user()->name, 0, 1) }}</span>
                    </div>
                    <span class="ml-2 text-gray-700">{{ auth()->user()->name }}</span>
                    <svg class="ml-1 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border z-50">
                    <div class="py-1">
                        <a href="{{ route('home') }}" target="_blank" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                            View Website
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                Sign out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
