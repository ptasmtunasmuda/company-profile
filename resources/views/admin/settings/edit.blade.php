@extends('layouts.admin')

@section('title', 'Website Settings')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="admin-card">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Website Settings</h1>
                <p class="mt-1 text-sm text-gray-600">Configure your website's general settings and information</p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('home') }}" target="_blank" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium admin-transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    View Website
                </a>
            </div>
        </div>
    </div>

    <!-- Settings Form -->
    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Site Information -->
        <div class="admin-card">
            <h3 class="text-lg font-semibold text-gray-900 mb-6">Site Information</h3>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div>
                    <label for="site_name" class="block text-sm font-medium text-gray-700 mb-2">Site Name *</label>
                    <input type="text" id="site_name" name="site_name" value="{{ old('site_name', \App\Models\Setting::get('site_name', config('app.name'))) }}" required
                           class="admin-input @error('site_name') border-red-500 @enderror">
                    @error('site_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="site_tagline" class="block text-sm font-medium text-gray-700 mb-2">Site Tagline</label>
                    <input type="text" id="site_tagline" name="site_tagline" value="{{ old('site_tagline', \App\Models\Setting::get('site_tagline')) }}"
                           placeholder="Brief description of your business"
                           class="admin-input @error('site_tagline') border-red-500 @enderror">
                    @error('site_tagline')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="lg:col-span-2">
                    <label for="site_description" class="block text-sm font-medium text-gray-700 mb-2">Site Description</label>
                    <textarea id="site_description" name="site_description" rows="3"
                              placeholder="Detailed description for SEO and about sections"
                              class="admin-input @error('site_description') border-red-500 @enderror">{{ old('site_description', \App\Models\Setting::get('site_description')) }}</textarea>
                    @error('site_description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Logo & Branding -->
        <div class="admin-card">
            <h3 class="text-lg font-semibold text-gray-900 mb-6">Logo & Branding</h3>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Current Logo -->
                @if(\App\Models\Setting::get('site_logo'))
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Current Logo</label>
                        <div class="relative inline-block">
                            <img src="{{ \App\Models\Setting::get('site_logo') }}"
                                 alt="Current Logo"
                                 class="h-16 w-auto object-contain bg-gray-50 p-2 rounded-lg border">
                        </div>
                    </div>
                @endif

                <div>
                    <label for="site_logo" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ \App\Models\Setting::get('site_logo') ? 'Replace Logo' : 'Site Logo' }}
                    </label>
                    <input type="file" id="site_logo" name="site_logo" accept="image/*"
                           class="admin-input @error('site_logo') border-red-500 @enderror">
                    <p class="mt-1 text-sm text-gray-500">Recommended: PNG format, transparent background, max 200px height</p>
                    @error('site_logo')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Current Favicon -->
                @if(\App\Models\Setting::get('site_favicon'))
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Current Favicon</label>
                        <div class="relative inline-block">
                            <img src="{{ \App\Models\Setting::get('site_favicon') }}"
                                 alt="Current Favicon"
                                 class="h-8 w-8 object-contain bg-gray-50 p-1 rounded border">
                        </div>
                    </div>
                @endif

                <div>
                    <label for="site_favicon" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ \App\Models\Setting::get('site_favicon') ? 'Replace Favicon' : 'Site Favicon' }}
                    </label>
                    <input type="file" id="site_favicon" name="site_favicon" accept="image/*"
                           class="admin-input @error('site_favicon') border-red-500 @enderror">
                    <p class="mt-1 text-sm text-gray-500">Recommended: ICO or PNG format, 32x32px</p>
                    @error('site_favicon')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="admin-card">
            <h3 class="text-lg font-semibold text-gray-900 mb-6">Contact Information</h3>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div>
                    <label for="contact_email" class="block text-sm font-medium text-gray-700 mb-2">Contact Email</label>
                    <input type="email" id="contact_email" name="contact_email" value="{{ old('contact_email', \App\Models\Setting::get('contact_email')) }}"
                           placeholder="info@yourcompany.com"
                           class="admin-input @error('contact_email') border-red-500 @enderror">
                    @error('contact_email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="contact_phone" class="block text-sm font-medium text-gray-700 mb-2">Contact Phone</label>
                    <input type="text" id="contact_phone" name="contact_phone" value="{{ old('contact_phone', \App\Models\Setting::get('contact_phone')) }}"
                           placeholder="+1 (555) 123-4567"
                           class="admin-input @error('contact_phone') border-red-500 @enderror">
                    @error('contact_phone')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="lg:col-span-2">
                    <label for="contact_address" class="block text-sm font-medium text-gray-700 mb-2">Contact Address</label>
                    <textarea id="contact_address" name="contact_address" rows="3"
                              placeholder="123 Business Street, City, State 12345"
                              class="admin-input @error('contact_address') border-red-500 @enderror">{{ old('contact_address', \App\Models\Setting::get('contact_address')) }}</textarea>
                    @error('contact_address')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Social Media -->
        <div class="admin-card">
            <h3 class="text-lg font-semibold text-gray-900 mb-6">Social Media Links</h3>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div>
                    <label for="social_facebook" class="block text-sm font-medium text-gray-700 mb-2">Facebook URL</label>
                    <input type="url" id="social_facebook" name="social_facebook" value="{{ old('social_facebook', \App\Models\Setting::get('social_facebook')) }}"
                           placeholder="https://facebook.com/yourpage"
                           class="admin-input @error('social_facebook') border-red-500 @enderror">
                    @error('social_facebook')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="social_twitter" class="block text-sm font-medium text-gray-700 mb-2">Twitter URL</label>
                    <input type="url" id="social_twitter" name="social_twitter" value="{{ old('social_twitter', \App\Models\Setting::get('social_twitter')) }}"
                           placeholder="https://twitter.com/youraccount"
                           class="admin-input @error('social_twitter') border-red-500 @enderror">
                    @error('social_twitter')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="social_linkedin" class="block text-sm font-medium text-gray-700 mb-2">LinkedIn URL</label>
                    <input type="url" id="social_linkedin" name="social_linkedin" value="{{ old('social_linkedin', \App\Models\Setting::get('social_linkedin')) }}"
                           placeholder="https://linkedin.com/company/yourcompany"
                           class="admin-input @error('social_linkedin') border-red-500 @enderror">
                    @error('social_linkedin')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="social_instagram" class="block text-sm font-medium text-gray-700 mb-2">Instagram URL</label>
                    <input type="url" id="social_instagram" name="social_instagram" value="{{ old('social_instagram', \App\Models\Setting::get('social_instagram')) }}"
                           placeholder="https://instagram.com/youraccount"
                           class="admin-input @error('social_instagram') border-red-500 @enderror">
                    @error('social_instagram')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- SEO Settings -->
        <div class="admin-card">
            <h3 class="text-lg font-semibold text-gray-900 mb-6">SEO Settings</h3>
            
            <div class="space-y-6">
                <div>
                    <label for="meta_keywords" class="block text-sm font-medium text-gray-700 mb-2">Meta Keywords</label>
                    <input type="text" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', \App\Models\Setting::get('meta_keywords')) }}"
                           placeholder="keyword1, keyword2, keyword3"
                           class="admin-input @error('meta_keywords') border-red-500 @enderror">
                    <p class="mt-1 text-sm text-gray-500">Separate keywords with commas</p>
                    @error('meta_keywords')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="google_analytics" class="block text-sm font-medium text-gray-700 mb-2">Google Analytics ID</label>
                    <input type="text" id="google_analytics" name="google_analytics" value="{{ old('google_analytics', \App\Models\Setting::get('google_analytics')) }}"
                           placeholder="G-XXXXXXXXXX"
                           class="admin-input @error('google_analytics') border-red-500 @enderror">
                    @error('google_analytics')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="admin-card">
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 admin-transition">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Save Settings
                </button>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
// Auto-resize textareas
document.querySelectorAll('textarea').forEach(textarea => {
    textarea.addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    });
});
</script>
@endpush
@endsection
