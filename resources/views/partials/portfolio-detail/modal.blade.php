<div id="imageModal" class="fixed inset-0 bg-black/90 backdrop-blur-sm items-center justify-center z-50 hidden opacity-0 transition-opacity duration-300">
    <div class="relative max-w-6xl max-h-full p-4 w-full">
        <!-- Close Button -->
        <button onclick="closeImageModal()" class="absolute top-6 right-6 z-20 w-12 h-12 bg-white/10 backdrop-blur-sm text-white hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 group">
            <svg class="w-6 h-6 transform group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Modal Content -->
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-4 shadow-2xl border border-white/10">
            <img id="modalImage" src="" alt="" class="max-w-full max-h-[80vh] object-contain rounded-xl mx-auto">
        </div>

        <!-- Navigation Hint -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-white/60 text-sm">
            <div class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full border border-white/20">
                <span>Tekan ESC untuk menutup</span>
            </div>
        </div>
    </div>
</div>

<script>
function openImageModal(imageUrl, title) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');

    modalImage.src = imageUrl;
    modalImage.alt = title;

    modal.classList.remove('hidden');
    modal.classList.add('flex');

    setTimeout(() => {
        modal.classList.remove('opacity-0');
        modal.classList.add('opacity-100');
    }, 10);

    document.body.style.overflow = 'hidden';
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');

    modal.classList.remove('opacity-100');
    modal.classList.add('opacity-0');

    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }, 300);
}

// Close modal with ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
});

// Close modal when clicking outside
document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeImageModal();
    }
});
</script>
