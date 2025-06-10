@extends('layouts.admin')

@section('title', 'Site Settings')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Site Settings</h1>
            <p class="mt-1 text-sm text-gray-600">Configure your website settings and content</p>
        </div>
        <a href="{{ route('admin.settings.create') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Add Setting
        </a>
    </div>

    <!-- Settings Groups -->
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        @foreach($settings as $group => $groupSettings)
            <div class="bg-white rounded-lg shadow">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900 capitalize">{{ str_replace('_', ' ', $group) }} Settings</h3>
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
                                <a href="{{ route('admin.settings.show', $group) }}" class="text-primary-600 hover:text-primary-700 text-sm">
                                    Edit
                                </a>
                            </div>
                        @endforeach

                        @if($groupSettings->count() > 5)
                            <div class="text-center pt-2 border-t border-gray-100">
                                <a href="{{ route('admin.settings.show', $group) }}" class="text-sm text-primary-600 hover:text-primary-700">
                                    View all {{ $groupSettings->count() }} settings
                                </a>
                            </div>
                        @else
                            <div class="text-center pt-2 border-t border-gray-100">
                                <a href="{{ route('admin.settings.show', $group) }}" class="text-sm text-primary-600 hover:text-primary-700">
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
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Settings Overview</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="text-center">
                <div class="text-2xl font-bold text-primary-600">{{ $settings->flatten()->count() }}</div>
                <div class="text-sm text-gray-600">Total Settings</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-green-600">{{ $settings->flatten()->where('value', '!=', '')->count() }}</div>
                <div class="text-sm text-gray-600">Configured</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-yellow-600">{{ $settings->flatten()->where('value', '')->count() }}</div>
                <div class="text-sm text-gray-600">Empty</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-blue-600">{{ $settings->count() }}</div>
                <div class="text-sm text-gray-600">Groups</div>
            </div>
        </div>
    </div>
</div>
@endsection
