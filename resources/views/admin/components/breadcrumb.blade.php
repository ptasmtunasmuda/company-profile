<nav class="mb-6 admin-card" aria-label="Breadcrumb">
    <div class="flex items-center justify-between">
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
            <li class="inline-flex items-center">
                <a href="{{ route('admin.dashboard') }}"
                   class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg admin-transition">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v6h8V5z"></path>
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>
            @foreach($breadcrumbs as $breadcrumb)
                <li class="flex items-center">
                    <svg class="w-5 h-5 text-gray-300 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    @if($loop->last)
                        <span class="admin-badge-info">
                            {{ $breadcrumb['title'] }}
                        </span>
                    @else
                        <a href="{{ $breadcrumb['url'] }}"
                           class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg admin-transition">
                            {{ $breadcrumb['title'] }}
                        </a>
                    @endif
                </li>
            @endforeach
        </ol>

        <!-- Quick Actions -->
        <div class="hidden md:flex items-center space-x-2">
            @if(request()->routeIs('admin.*.index'))
                @php
                    $routePrefix = str_replace('.index', '', request()->route()->getName());
                    $createRoute = $routePrefix . '.create';
                @endphp
                @if(Route::has($createRoute))
                    <a href="{{ route($createRoute) }}"
                       class="admin-btn-primary">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add New
                    </a>
                @endif
            @endif
        </div>
    </div>
</nav>
