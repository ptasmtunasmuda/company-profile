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

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes glow {
    0%, 100% {
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
    }
    50% {
        box-shadow: 0 0 40px rgba(59, 130, 246, 0.8), 0 0 60px rgba(59, 130, 246, 0.3);
    }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-glow {
    animation: glow 3s ease-in-out infinite;
}

.animation-delay-1000 {
    animation-delay: 1s;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

/* Text Gradients */
.text-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Enhanced Card Hover Effects */
.service-item {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.service-item:hover {
    transform: translateY(-12px) rotateX(5deg);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Filter Buttons */
.service-filter {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.service-filter.active {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    transform: scale(1.05);
    box-shadow: 0 10px 25px -5px rgba(102, 126, 234, 0.4);
}

/* Line Clamp Utilities */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
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

/* Scroll Reveal Animation */
@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.slide-in-up {
    animation: slideInUp 0.6s ease-out forwards;
}

/* Enhanced Hover States */
.hover-lift {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.hover-lift:hover {
    transform: translateY(-8px) scale(1.02);
}

/* Glassmorphism Effect */
.glass {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

/* Enhanced Button Styles */
.btn-primary-enhanced {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.btn-primary-enhanced::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-primary-enhanced:hover::before {
    left: 100%;
}

.btn-primary-enhanced:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgba(102, 126, 234, 0.4);
}

/* Responsive Design Enhancements */
@media (max-width: 768px) {
    .service-item:hover {
        transform: translateY(-8px);
    }
}

/* Print Styles */
@media print {
    .service-item {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid #e5e7eb;
    }
}
</style>
