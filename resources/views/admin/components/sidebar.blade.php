<div class="admin-sidebar flex-shrink-0 relative"
     x-data="{ mobileOpen: false }"
     x-on:toggle-sidebar.window="mobileOpen = !mobileOpen"
     :class="{ 'mobile-open': mobileOpen }">
    <!-- Header -->
    <div class="p-8 border-b border-gray-200">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-center flex-1">
                @if(\App\Models\Setting::get('site_logo'))
                    <img class="h-12 w-auto"
                         src="{{ \App\Models\Setting::get('site_logo') }}"
                         alt="{{ config('app.name') }}">
                @else
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-xl">{{ substr(config('app.name'), 0, 1) }}</span>
                    </div>
                @endif
            </div>

            <!-- Mobile Close Button -->
            <button @click="mobileOpen = false"
                    class="md:hidden p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg admin-transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 py-8">
        <div class="px-6 py-3 mb-6">
            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Navigation</p>
        </div>

        <div class="space-y-2">
            <a href="{{ route('admin.dashboard') }}"
               class="admin-nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <svg class="admin-nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v6h8V5z"></path>
                </svg>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.pages.index') }}"
               class="admin-nav-item {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
                <svg class="admin-nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span>Pages</span>
            </a>

            <a href="{{ route('admin.portfolios.index') }}"
               class="admin-nav-item {{ request()->routeIs('admin.portfolios.*') ? 'active' : '' }}">
                <svg class="admin-nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <span>Portfolio</span>
            </a>

            <a href="{{ route('admin.testimonials.index') }}"
               class="admin-nav-item {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                <svg class="admin-nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                <span>Testimonials</span>
            </a>

            <a href="{{ route('admin.contacts.index') }}"
               class="admin-nav-item {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                <svg class="admin-nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span>Contacts</span>
                @if(\App\Models\Contact::unread()->count() > 0)
                    <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full font-semibold">
                        {{ \App\Models\Contact::unread()->count() }}
                    </span>
                @endif
            </a>

            <a href="{{ route('admin.settings.index') }}"
               class="admin-nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <svg class="admin-nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Settings</span>
            </a>
        </div>
    </nav>


</div>
