<div class="mb-16" data-aos="fade-up" data-aos-delay="100">
    <div class="flex items-center mb-8">
        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
        </div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Project Overview</h2>
    </div>

    <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-3xl p-8 md:p-12 border border-gray-100 mb-8">
        <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">{{ $portfolio->description }}</p>

        <div class="prose prose-lg prose-primary max-w-none">
            {!! $portfolio->content !!}
        </div>
    </div>
</div>
