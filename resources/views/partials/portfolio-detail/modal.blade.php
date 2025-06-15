<div id="imageModal" class="fixed inset-0 bg-black/90 backdrop-blur-sm items-center justify-center z-50 hidden opacity-0 transition-opacity duration-300">
    <div class="relative max-w-6xl max-h-full p-4 w-full">
        <!-- Close Button -->
        <button onclick="closeImageModal()" class="absolute top-6 right-6 z-20 w-12 h-12 bg-white/10 backdrop-blur-sm text-white hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Modal Content -->
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-4 shadow-2xl border border-white/10">
            <img id="modalImage" src="" alt="" class="max-w-full max-h-[80vh] object-contain rounded-xl mx-auto">
        </div>

        <!-- Hint -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-white/60 text-sm">
            <span class="bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full">Press ESC to close</span>
        </div>
    </div>
</div>
