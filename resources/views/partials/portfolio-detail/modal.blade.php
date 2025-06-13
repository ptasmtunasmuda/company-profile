<div id="imageModal" class="fixed inset-0 bg-black/90 backdrop-blur-sm flex items-center justify-center z-50 hidden opacity-0 transition-opacity duration-300">
    <div class="relative max-w-6xl max-h-full p-4 w-full">
        @include('partials.portfolio-detail.modal-close-button')
        @include('partials.portfolio-detail.modal-content')
        @include('partials.portfolio-detail.modal-hint')
    </div>
</div>
