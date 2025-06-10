@extends('layouts.admin')

@section('title', ucfirst($group) . ' Settings')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">{{ ucfirst(str_replace('_', ' ', $group)) }} Settings</h1>
            <p class="mt-1 text-sm text-gray-600">Configure {{ strtolower($group) }} related settings</p>
        </div>
        <a href="{{ route('admin.settings.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium transition-colors">
            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Settings
        </a>
    </div>

    <!-- Settings Form -->
    <div class="bg-white shadow rounded-lg">
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
            @csrf

            @foreach($settings as $setting)
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 py-4 {{ !$loop->last ? 'border-b border-gray-200' : '' }}">
                    <!-- Label and Description -->
                    <div class="lg:col-span-1">
                        <label for="setting_{{ $setting->key }}" class="block text-sm font-medium text-gray-900 mb-1">
                            {{ ucfirst(str_replace('_', ' ', str_replace($group.'_', '', $setting->key))) }}
                        </label>
                        <p class="text-sm text-gray-600">
                            @switch($setting->key)
                                @case('site_name')
                                    The name of your website/company
                                    @break
                                @case('site_tagline')
                                    A short description or slogan
                                    @break
                                @case('site_description')
                                    Brief description of your business
                                    @break
                                @case('site_logo')
                                    Main logo for your website
                                    @break
                                @case('contact_email')
                                    Primary contact email address
                                    @break
                                @case('contact_phone')
                                    Main phone number
                                    @break
                                @case('contact_address')
                                    Physical business address
                                    @break
                                @case('hero_title')
                                    Main headline on homepage
                                    @break
                                @case('hero_subtitle')
                                    Supporting text under main headline
                                    @break
                                @case('seo_title')
                                    Default page title for SEO
                                    @break
                                @case('seo_description')
                                    Default meta description
                                    @break
                                @default
                                    Configure this {{ $setting->type }} setting
                            @endswitch
                        </p>
                        <div class="mt-2 flex items-center space-x-2">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                @if($setting->type === 'text') bg-blue-100 text-blue-800
                                @elseif($setting->type === 'textarea') bg-green-100 text-green-800
                                @elseif($setting->type === 'email') bg-purple-100 text-purple-800
                                @elseif($setting->type === 'url') bg-yellow-100 text-yellow-800
                                @elseif($setting->type === 'image') bg-pink-100 text-pink-800
                                @else bg-gray-100 text-gray-800
                                @endif">
                                {{ ucfirst($setting->type) }}
                            </span>
                            <a href="{{ route('admin.settings.edit', $setting) }}" class="text-xs text-gray-500 hover:text-gray-700">
                                Edit Setting
                            </a>
                        </div>
                    </div>

                    <!-- Input Field -->
                    <div class="lg:col-span-2">
                        @if($setting->type === 'textarea')
                            <textarea
                                id="setting_{{ $setting->key }}"
                                name="settings[{{ $setting->key }}]"
                                rows="4"
                                placeholder="Enter {{ strtolower(str_replace('_', ' ', str_replace($group.'_', '', $setting->key))) }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('settings.'.$setting->key) border-red-500 @enderror">{{ old('settings.'.$setting->key, $setting->value) }}</textarea>

                        @elseif($setting->type === 'image')
                            <div class="space-y-4">
                                @if($setting->getFirstMediaUrl('images'))
                                    <div>
                                        <p class="text-sm text-gray-600 mb-2">Current image:</p>
                                        <img src="{{ $setting->getFirstMediaUrl('images') }}"
                                             alt="Current image"
                                             class="h-20 w-auto object-contain border border-gray-200 rounded">
                                    </div>
                                @endif
                                <input
                                    type="file"
                                    id="setting_{{ $setting->key }}"
                                    name="files[{{ $setting->key }}]"
                                    accept="image/*"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('files.'.$setting->key) border-red-500 @enderror">
                            </div>
                            <input type="hidden" name="settings[{{ $setting->key }}]" value="{{ $setting->value }}">

                        @elseif($setting->type === 'boolean')
                            <div class="flex items-center">
                                <input
                                    type="checkbox"
                                    id="setting_{{ $setting->key }}"
                                    name="settings[{{ $setting->key }}]"
                                    value="1"
                                    {{ old('settings.'.$setting->key, $setting->value) ? 'checked' : '' }}
                                    class="h-4 w-4 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                                <label for="setting_{{ $setting->key }}" class="ml-2 text-sm text-gray-900">
                                    Enable this setting
                                </label>
                            </div>

                        @else
                            <input
                                type="{{ $setting->type === 'email' ? 'email' : ($setting->type === 'url' ? 'url' : 'text') }}"
                                id="setting_{{ $setting->key }}"
                                name="settings[{{ $setting->key }}]"
                                value="{{ old('settings.'.$setting->key, $setting->value) }}"
                                placeholder="Enter {{ strtolower(str_replace('_', ' ', str_replace($group.'_', '', $setting->key))) }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('settings.'.$setting->key) border-red-500 @enderror">
                        @endif

                        @error('settings.'.$setting->key)
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        @error('files.'.$setting->key)
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            @endforeach

            <!-- Submit Button -->
            <div class="flex justify-end pt-6 border-t border-gray-200">
                <button type="submit" class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-2 rounded-lg font-medium transition-colors">
                    <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Save Settings
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
