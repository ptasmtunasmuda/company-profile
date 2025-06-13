<script>
document.addEventListener('DOMContentLoaded', function() {
    // Service Filter Functionality
    const filterButtons = document.querySelectorAll('.service-filter');
    const serviceItems = document.querySelectorAll('.service-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');

            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Filter service items
            serviceItems.forEach(item => {
                const category = item.getAttribute('data-category');

                if (filter === 'all' || category === filter) {
                    item.style.display = 'block';
                    item.style.animation = 'slideInUp 0.6s ease-out forwards';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Load More Functionality
    const loadMoreBtn = document.getElementById('loadlagi');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            // Add loading state
            this.innerHTML = `
                <svg class="animate-spin w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Loading Services...
            `;

            // Simulate loading delay
            setTimeout(() => {
                this.innerHTML = `
                    Load More Services
                    <svg class="w-5 h-5 ml-3 transform group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                `;
            }, 2000);
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('slide-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe service items for scroll animations
    serviceItems.forEach(item => {
        observer.observe(item);
    });

    // Counter animation for stats
    const counters = document.querySelectorAll('[data-aos="fade-up"][data-aos-delay="400"] .text-3xl, [data-aos="fade-up"][data-aos-delay="400"] .text-4xl');
    const animateCounter = (counter) => {
        const target = parseInt(counter.textContent.replace(/\D/g, ''));
        if (isNaN(target)) return;

        const increment = target / 100;
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current) + (counter.textContent.includes('+') ? '+' : '') + (counter.textContent.includes('/') ? '/7' : '');
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + (counter.textContent.includes('+') ? '+' : '') + (counter.textContent.includes('/') ? '/7' : '');
            }
        };

        updateCounter();
    };

    // Trigger counter animation when stats section is visible
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                counters.forEach(counter => animateCounter(counter));
                statsObserver.unobserve(entry.target);
            }
        });
    });

    const statsSection = document.querySelector('[data-aos-delay="400"]');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // Enhanced hover effects for service items
    serviceItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-12px) rotateX(5deg)';
            this.style.boxShadow = '0 25px 50px -12px rgba(0, 0, 0, 0.25)';
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotateX(0)';
            this.style.boxShadow = '';
        });
    });

    // Parallax effect for background elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelectorAll('.animate-blob');

        parallax.forEach(element => {
            const speed = 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });
});

// Service Worker for offline capability
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('SW registered: ', registration);
            })
            .catch(registrationError => {
                console.log('SW registration failed: ', registrationError);
            });
    });
}
</script>
