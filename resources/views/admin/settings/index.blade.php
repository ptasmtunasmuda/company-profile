@extends('layouts.admin')

@section('title', 'Site Settings')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Site Settings</h1>
                <p class="mt-1 text-sm text-gray-600">Configure your website settings and content</p>
            </div>
            <a href="{{ route('admin.settings.create') }}" class="admin-btn-primary">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add Setting
            </a>
        </div>
    </div>

    <!-- Settings Groups -->
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        @foreach($settings as $group => $groupSettings)
            <div class="admin-card">
                <div class="admin-card-header">
                    <h3 class="admin-card-title capitalize">{{ str_replace('_', ' ', $group) }} Settings</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        @switch($group)
                            @case('general')
                                Basic site information and branding
                                @break
                            @case('contact')
                                Contact information and addresses
                                @break
                            @case('social')
                                Social media links and profiles
                                @break
                            @case('seo')
                                Search engine optimization settings
                                @break
                            @case('homepage')
                                Homepage content and hero section
                                @break
                            @case('about')
                                About page content
                                @break
                            @case('stats')
                                Statistics and counters
                                @break
                            @default
                                Custom settings group
                        @endswitch
                    </p>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        @foreach($groupSettings->take(5) as $setting)
                            <div class="flex justify-between items-start">
                                <div class="flex-1">
                                    <div class="text-sm font-medium text-gray-900">{{ ucfirst(str_replace('_', ' ', str_replace($group.'_', '', $setting->key))) }}</div>
                                    <div class="text-xs text-gray-500 mt-1">
                                        @if($setting->type === 'image' && $setting->value)
                                            <span class="text-green-600">Image uploaded</span>
                                        @elseif($setting->value)
                                            {{ Str::limit($setting->value, 30) }}
                                        @else
                                            <span class="text-gray-400">Not set</span>
                                        @endif
                                    </div>
                                </div>
                                <a href="{{ route('admin.settings.show', $group) }}" class="text-blue-600 hover:text-blue-700 text-sm admin-transition">
                                    Edit
                                </a>
                            </div>
                        @endforeach

                        @if($groupSettings->count() > 5)
                            <div class="text-center pt-2 border-t border-gray-100">
                                <a href="{{ route('admin.settings.show', $group) }}" class="text-sm text-blue-600 hover:text-blue-700">
                                    View all {{ $groupSettings->count() }} settings
                                </a>
                            </div>
                        @else
                            <div class="text-center pt-2 border-t border-gray-100">
                                <a href="{{ route('admin.settings.show', $group) }}" class="text-sm text-blue-600 hover:text-blue-700">
                                    Manage {{ ucfirst($group) }} Settings
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Quick Stats -->
    <div class="admin-card">
        <h3 class="admin-card-title mb-4">Settings Overview</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="admin-stats-card">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <div class="text-2xl font-bold text-gray-900">{{ $settings->flatten()->count() }}</div>
                        <div class="text-sm text-gray-600">Total Settings</div>
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
                        <div class="text-2xl font-bold text-gray-900">{{ $settings->flatten()->where('value', '!=', '')->count() }}</div>
                        <div class="text-sm text-gray-600">Configured</div>
                    </div>
                </div>
            </div>
            <div class="admin-stats-card">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <div class="text-2xl font-bold text-gray-900">{{ $settings->flatten()->where('value', '')->count() }}</div>
                        <div class="text-sm text-gray-600">Empty</div>
                    </div>
                </div>
            </div>
            <div class="admin-stats-card">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <div class="text-2xl font-bold text-gray-900">{{ $settings->count() }}</div>
                        <div class="text-sm text-gray-600">Groups</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
