@if($portfolio->project_url)
    <div class="flex items-start">
        <div class="w-6 h-6 bg-purple-100 rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
            <svg class="w-3 h-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
            </svg>
        </div>
        <div>
            <dt class="text-sm font-medium text-gray-500 mb-1">Live URL</dt>
            <dd>
                <a href="{{ $portfolio->project_url }}" target="_blank" rel="noopener"
                   class="inline-flex items-center px-3 py-2 bg-gradient-to-r from-primary-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:from-primary-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                    Visit Project
                    @include('partials.icons.external-link')
                </a>
            </dd>
        </div>
    </div>
@endif
