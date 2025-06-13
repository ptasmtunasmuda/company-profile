import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Auto-hide flash messages
document.addEventListener('DOMContentLoaded', function() {
    const flashMessages = document.querySelectorAll('[role="alert"]');
    flashMessages.forEach(function(message) {
        setTimeout(function() {
            message.style.opacity = '0';
            setTimeout(function() {
                message.remove();
            }, 300);
        }, 5000);
    });

    // Enhanced navbar scroll effect
    const navbar = document.querySelector('.navbar-scroll, .navbar-glass');
    if (navbar) {
        const handleScroll = () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled', 'navbar-glass-scrolled');
            } else {
                navbar.classList.remove('scrolled', 'navbar-glass-scrolled');
            }
        };

        window.addEventListener('scroll', handleScroll);
        handleScroll(); // Initial check
    }

    // Add staggered animation delays to card elements
    const cards = document.querySelectorAll('.service-card, .portfolio-card, .testimonial-card');
    cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 100}ms`;
    });

    // Smooth scroll untuk navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Intersection Observer untuk lazy loading animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all animated elements
    document.querySelectorAll('[data-animate]').forEach(el => {
        observer.observe(el);
    });

    // Text reveal animation observer
    const textRevealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                textRevealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.text-reveal').forEach(el => {
        textRevealObserver.observe(el);
    });

    // Enhanced hover effects untuk service cards
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            if (window.innerWidth >= 768) { // Only on desktop
                this.style.transform = 'translateY(-12px) scale(1.02)';
                this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.15)';

                // Add icon animation
                const icon = this.querySelector('.service-icon, .w-16');
                if (icon) {
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            }
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '';

            const icon = this.querySelector('.service-icon, .w-16');
            if (icon) {
                icon.style.transform = 'scale(1) rotate(0deg)';
            }
        });
    });

    // Portfolio card hover effects
    const portfolioCards = document.querySelectorAll('.portfolio-card');
    portfolioCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            if (window.innerWidth >= 768) { // Only on desktop
                this.style.transform = 'translateY(-8px) scale(1.02)';
                this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.15)';

                // Add subtle rotation effect
                const img = this.querySelector('img');
                if (img) {
                    img.style.transform = 'scale(1.05) rotate(1deg)';
                    img.style.transition = 'transform 0.5s ease';
                }
            }
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '';

            const img = this.querySelector('img');
            if (img) {
                img.style.transform = 'scale(1) rotate(0deg)';
            }
        });
    });

    // Testimonial card tilt effect
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    testimonialCards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            if (window.innerWidth < 768) return; // Skip on mobile

            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
            this.style.transition = 'transform 0.1s ease-out';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
            this.style.transition = 'transform 0.3s ease-out';
        });
    });

    // About page card effects
    const aboutValueCards = document.querySelectorAll('.about-value-card');
    aboutValueCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            if (window.innerWidth >= 768) {
                this.style.transform = 'translateY(-12px) scale(1.02)';
                this.style.boxShadow = '0 25px 50px rgba(0, 0, 0, 0.15)';
            }
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '';
        });
    });

    const aboutTeamCards = document.querySelectorAll('.about-team-card');
    aboutTeamCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            if (window.innerWidth >= 768) {
                this.style.transform = 'translateY(-12px) scale(1.02)';
                this.style.boxShadow = '0 25px 50px rgba(0, 0, 0, 0.15)';
            }
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '';
        });
    });

    // Parallax effect untuk background elements (desktop only)
    const parallaxElements = document.querySelectorAll('[data-parallax]');

    function updateParallax() {
        if (window.innerWidth < 768) return; // Skip on mobile

        const scrollTop = window.pageYOffset;

        parallaxElements.forEach(element => {
            const speed = parseFloat(element.dataset.parallax) || 0.5;
            const yPos = -(scrollTop * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    }

    // Throttle scroll events untuk performance
    let ticking = false;
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(() => {
                updateParallax();
                ticking = false;
            });
            ticking = true;
        }
    }

    if (parallaxElements.length > 0) {
        window.addEventListener('scroll', requestTick);
    }

    // Loading states untuk images
    const images = document.querySelectorAll('img[data-src]');
    if (images.length > 0) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.classList.remove('image-skeleton');
                        img.classList.add('loaded');
                        imageObserver.unobserve(img);
                    }
                }
            });
        });

        images.forEach(img => {
            img.classList.add('image-skeleton');
            imageObserver.observe(img);
        });
    }

    // Counter animation untuk statistik
    const counters = document.querySelectorAll('[data-counter]');
    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.dataset.counter);

                    if (isNaN(target)) return;

                    const duration = 2000; // 2 seconds
                    const step = target / (duration / 16); // 60 FPS

                    let current = 0;
                    const timer = setInterval(() => {
                        current += step;
                        if (current >= target) {
                            counter.textContent = target;
                            clearInterval(timer);
                        } else {
                            counter.textContent = Math.floor(current);
                        }
                    }, 16);

                    counterObserver.unobserve(counter);
                }
            });
        });

        counters.forEach(counter => {
            counterObserver.observe(counter);
        });
    }

    // Enhanced button ripple effect
    const buttons = document.querySelectorAll('.cta-button, .btn-primary, .btn-hover-effect');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');

            this.style.position = 'relative';
            this.appendChild(ripple);

            setTimeout(() => {
                if (ripple.parentNode) {
                    ripple.remove();
                }
            }, 600);
        });
    });

    // Form validation enhancements
    const forms = document.querySelectorAll('form[data-validate]');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const inputs = this.querySelectorAll('input[required], textarea[required]');
            let isValid = true;

            inputs.forEach(input => {
                const value = input.value ? input.value.trim() : '';

                if (!value) {
                    isValid = false;
                    input.classList.add('border-red-500');

                    // Add error message if not exists
                    let errorMsg = input.parentNode.querySelector('.error-message');
                    if (!errorMsg) {
                        errorMsg = document.createElement('span');
                        errorMsg.className = 'error-message text-red-500 text-sm mt-1 block';
                        errorMsg.textContent = 'This field is required';
                        input.parentNode.appendChild(errorMsg);
                    }
                } else {
                    input.classList.remove('border-red-500');
                    const errorMsg = input.parentNode.querySelector('.error-message');
                    if (errorMsg) {
                        errorMsg.remove();
                    }
                }
            });

            if (!isValid) {
                e.preventDefault();
                showNotification('Please fill in all required fields', 'error');
            }
        });
    });

    // Initialize tooltips
    const tooltips = document.querySelectorAll('[data-tooltip]');
    tooltips.forEach(tooltip => {
        tooltip.addEventListener('mouseenter', function() {
            const tooltipText = this.dataset.tooltip;
            if (!tooltipText) return;

            const tooltipEl = document.createElement('div');
            tooltipEl.className = 'tooltip-element absolute bg-gray-900 text-white px-2 py-1 rounded text-sm z-50 pointer-events-none whitespace-nowrap';
            tooltipEl.textContent = tooltipText;

            document.body.appendChild(tooltipEl);

            const rect = this.getBoundingClientRect();
            const tooltipRect = tooltipEl.getBoundingClientRect();

            let left = rect.left + (rect.width / 2) - (tooltipRect.width / 2);
            let top = rect.top - tooltipRect.height - 5;

            // Keep tooltip in viewport
            if (left < 0) left = 5;
            if (left + tooltipRect.width > window.innerWidth) left = window.innerWidth - tooltipRect.width - 5;
            if (top < 0) top = rect.bottom + 5;

            tooltipEl.style.left = left + 'px';
            tooltipEl.style.top = top + 'px';

            this._tooltip = tooltipEl;
        });

        tooltip.addEventListener('mouseleave', function() {
            if (this._tooltip) {
                this._tooltip.remove();
                this._tooltip = null;
            }
        });
    });

    // Lazy loading for background images
    const lazyBackgrounds = document.querySelectorAll('[data-bg]');
    if (lazyBackgrounds.length > 0) {
        const bgObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bg = entry.target;
                    if (bg.dataset.bg) {
                        bg.style.backgroundImage = `url(${bg.dataset.bg})`;
                        bg.classList.add('loaded');
                        bgObserver.unobserve(bg);
                    }
                }
            });
        });

        lazyBackgrounds.forEach(bg => {
            bgObserver.observe(bg);
        });
    }

    // Notification system
    function showNotification(message, type = 'success', duration = 3000) {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 transition-all duration-300 transform translate-x-full opacity-0 ${
            type === 'success' ? 'bg-green-500 text-white' :
            type === 'error' ? 'bg-red-500 text-white' :
            type === 'warning' ? 'bg-yellow-500 text-white' :
            'bg-blue-500 text-white'
        }`;
        notification.textContent = message;

        document.body.appendChild(notification);

        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
            notification.style.opacity = '1';
        }, 10);

        // Remove after duration
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            notification.style.opacity = '0';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.remove();
                }
            }, 300);
        }, duration);
    }

    // Make showNotification globally available
    window.showNotification = showNotification;

    // Handle reduced motion preference
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    if (prefersReducedMotion.matches) {
        // Disable animations for users who prefer reduced motion
        const style = document.createElement('style');
        style.innerHTML = `
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        `;
        document.head.appendChild(style);

        // Remove floating animations
        document.querySelectorAll('.animate-float').forEach(el => {
            el.style.animation = 'none';
        });
    }

    // Performance monitoring (only in development)
    if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
        if ('performance' in window) {
            window.addEventListener('load', () => {
                setTimeout(() => {
                    const perfData = performance.getEntriesByType('navigation')[0];
                    if (perfData) {
                        const loadTime = perfData.loadEventEnd - perfData.loadEventStart;
                        const domTime = perfData.domContentLoadedEventEnd - perfData.domContentLoadedEventStart;

                        console.log(`🚀 Performance Metrics:`);
                        console.log(`📊 Page Load Time: ${loadTime.toFixed(2)}ms`);
                        console.log(`🏗️ DOM Content Loaded: ${domTime.toFixed(2)}ms`);
                        console.log(`⚡ First Contentful Paint: ${performance.getEntriesByName('first-contentful-paint')[0]?.startTime.toFixed(2)}ms`);
                    }
                }, 100);
            });
        }
    }

    // Only register service worker in production
    if ('serviceWorker' in navigator && window.location.hostname !== 'localhost' && window.location.hostname !== '127.0.0.1') {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js')
                .then(registration => {
                    console.log('✅ SW registered successfully');
                })
                .catch(error => {
                    console.log('❌ SW registration failed:', error);
                });
        });
    }

    // Keyboard navigation improvements
    document.addEventListener('keydown', function(e) {
        // ESC key to close modals
        if (e.key === 'Escape') {
            const modals = document.querySelectorAll('.modal.active, .modal.show');
            modals.forEach(modal => {
                modal.classList.remove('active', 'show');
            });

            // Remove any tooltips
            document.querySelectorAll('.tooltip-element').forEach(tooltip => {
                tooltip.remove();
            });
        }
    });

    // Initialize AOS (Animate On Scroll) if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out-cubic',
            once: true,
            mirror: false,
            offset: 100
        });
    }

    // Debug mode (only in development)
    if (window.location.search.includes('debug=true') && (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1')) {
        console.log('🔧 Debug mode enabled');

        // Add debug info to page
        const debugInfo = document.createElement('div');
        debugInfo.className = 'fixed bottom-4 left-4 bg-black text-white p-3 rounded text-xs z-50 font-mono max-w-xs';
        debugInfo.innerHTML = `
            <div><strong>Debug Info:</strong></div>
            <div>Viewport: ${window.innerWidth}x${window.innerHeight}</div>
            <div>User Agent: ${navigator.userAgent.substring(0, 30)}...</div>
            <div>Load Time: ${performance.now().toFixed(2)}ms</div>
            <div>Memory: ${navigator.deviceMemory || 'N/A'}GB</div>
        `;
        document.body.appendChild(debugInfo);

        // Add click to close
        debugInfo.addEventListener('click', () => debugInfo.remove());
    }

    console.log('🎉 App.js initialized successfully!');
    console.log('📱 Device: ' + (window.innerWidth >= 768 ? 'Desktop' : 'Mobile'));
    console.log('🎨 Animations: ' + (prefersReducedMotion.matches ? 'Reduced' : 'Full'));
});
