<style>
@keyframes blob {
    0% { transform: translate(0px, 0px) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
    100% { transform: translate(0px, 0px) scale(1); }
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.animate-blob { animation: blob 7s infinite; }
.animate-float { animation: float 6s ease-in-out infinite; }
.animation-delay-2000 { animation-delay: 2s; }
.animation-delay-4000 { animation-delay: 4s; }

.prose-primary {
    --tw-prose-links: theme('colors.primary.600');
    --tw-prose-headings: theme('colors.gray.900');
}
.prose-primary h2 { font-size: 1.875rem; margin-top: 2rem; margin-bottom: 1rem; }
.prose-primary p { margin-bottom: 1.25rem; line-height: 1.75; }
</style>
