<style>
/* Enhanced Animations */
@keyframes blob {
    0% {
        transform: translate(0px, 0px) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
    100% {
        transform: translate(0px, 0px) scale(1);
    }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

/* Custom prose styling */
.prose-primary {
    --tw-prose-links: theme('colors.primary.600');
    --tw-prose-headings: theme('colors.gray.900');
}

.prose-primary h1,
.prose-primary h2,
.prose-primary h3,
.prose-primary h4 {
    color: var(--tw-prose-headings);
    font-weight: 700;
}

.prose-primary h2 {
    font-size: 1.875rem;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.prose-primary h3 {
    font-size: 1.5rem;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.prose-primary p {
    margin-bottom: 1.25rem;
    line-height: 1.75;
}

.prose-primary ul {
    margin: 1.25rem 0;
    padding-left: 1.625rem;
}

.prose-primary li {
    margin: 0.5rem 0;
}

.prose-primary strong {
    color: var(--tw-prose-headings);
    font-weight: 600;
}

/* Modal Animation */
.modal-enter {
    opacity: 0;
    transform: scale(0.9);
}

.modal-enter-active {
    opacity: 1;
    transform: scale(1);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

/* Image Gallery Hover Effects */
.gallery-item {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.gallery-item:hover {
    transform: translateY(-8px) scale(1.02);
}

/* Responsive Design */
@media (max-width: 768px) {
    .gallery-item:hover {
        transform: translateY(-4px) scale(1.01);
    }
}

/* Scroll Animations */
@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.slide-in-up {
    animation: slideInUp 0.6s ease-out forwards;
}

/* Print Styles */
@media print {
    .sticky {
        position: static;
    }

    .shadow-lg,
    .shadow-xl,
    .shadow-2xl {
        box-shadow: none;
        border: 1px solid #e5e7eb;
    }
}
</style>
