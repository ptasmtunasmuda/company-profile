<div class="mt-16 flex justify-center" data-aos="fade-up">
    <div class="flex space-x-2">
        {{-- Previous Page Link --}}
        @if ($portfolios->onFirstPage())
            <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-lg cursor-not-allowed">
                Sebelumnya
            </span>
        @else
            <a href="{{ $portfolios->previousPageUrl() }}"
                class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                Sebelumnya
            </a>
        @endif

        {{-- Page Numbers --}}
        @if($portfolios->lastPage() > 1)
            @php
                $start = max($portfolios->currentPage() - 2, 1);
                $end = min($start + 4, $portfolios->lastPage());
                $start = max($end - 4, 1);
            @endphp

            @if($start > 1)
                <a href="{{ $portfolios->url(1) }}"
                    class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                    1
                </a>
                @if($start > 2)
                    <span class="px-4 py-2 text-gray-500">...</span>
                @endif
            @endif

            @for ($i = $start; $i <= $end; $i++)
                @if ($i == $portfolios->currentPage())
                    <span class="px-4 py-2 bg-primary-600 text-white rounded-lg font-semibold shadow-md">
                        {{ $i }}
                    </span>
                @else
                    <a href="{{ $portfolios->url($i) }}"
                        class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                        {{ $i }}
                    </a>
                @endif
            @endfor

            @if($end < $portfolios->lastPage())
                @if($end < $portfolios->lastPage() - 1)
                    <span class="px-4 py-2 text-gray-500">...</span>
                @endif
                <a href="{{ $portfolios->url($portfolios->lastPage()) }}"
                    class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                    {{ $portfolios->lastPage() }}
                </a>
            @endif
        @endif

        {{-- Next Page Link --}}
        @if ($portfolios->hasMorePages())
            <a href="{{ $portfolios->nextPageUrl() }}"
                class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg hover:bg-primary-600 hover:text-white hover:border-primary-600 transition-all duration-300 shadow-sm hover:shadow-md">
                Lanjut
            </a>
        @else
            <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-lg cursor-not-allowed">
                Lanjut
            </span>
        @endif
    </div>
</div>
