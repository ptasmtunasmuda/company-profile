@if($condition)
    <div class="flex items-start">
        <div class="w-6 h-6 {{ $iconColor }} rounded-lg flex items-center justify-center mr-3 mt-1 flex-shrink-0">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $iconPath }}"></path>
            </svg>
        </div>
        <div>
            <dt class="text-sm font-medium text-gray-500">{{ $label }}</dt>
            <dd class="text-gray-900 font-semibold">{{ $value }}</dd>
        </div>
    </div>
@endif
