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

    // Portfolio Filter Functionality
    const filterButtons = document.querySelectorAll('.portfolio-filter');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');

            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.classList.remove('bg-primary-600', 'text-white');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            });

            this.classList.add('active');
            this.classList.remove('bg-gray-100', 'text-gray-700');
            this.classList.add('bg-primary-600', 'text-white');

            // Filter portfolio items
            portfolioItems.forEach(item => {
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
    const loadMoreBtn = document.getElementById('loadMore');
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            const originalText = this.innerHTML;

            // Add loading state
            this.innerHTML = `
                <svg class="animate-spin w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Loading More Projects...
            `;

            // Simulate loading delay
            setTimeout(() => {
                this.innerHTML = originalText;
            }, 2000);
        });
    }

    // Portfolio Image Modal Functions
    window.openImageModal = function(imageUrl, title) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        if (modal && modalImage) {
            modalImage.src = imageUrl;
            modalImage.alt = title;

            // Remove hidden class and add flex
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';

            // Animate modal entrance
            setTimeout(() => {
                modal.classList.remove('opacity-0');
            }, 10);
        }
    };

    window.closeImageModal = function() {
        const modal = document.getElementById('imageModal');

        if (modal) {
            modal.classList.add('opacity-0');

            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }, 300);
        }
    };

    // Close modal when clicking outside the image
    const imageModal = document.getElementById('imageModal');
    if (imageModal) {
        imageModal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });
    }

    // Enhanced hover effects for portfolio items
    portfolioItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            if (window.innerWidth >= 768) { // Only on desktop
                this.style.transform = 'translateY(-12px) rotateX(5deg)';
                this.style.boxShadow = '0 25px 50px -12px rgba(0, 0, 0, 0.25)';
            }
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotateX(0)';
            this.style.boxShadow = '';
        });
    });

    // Copy to clipboard functionality for project URL
    window.copyToClipboard = function(text) {
        navigator.clipboard.writeText(text).then(() => {
            showNotification('URL copied to clipboard!', 'success');
        }).catch(() => {
            showNotification('Failed to copy URL', 'error');
        });
    };

    // Image preloading for gallery
    const galleryImages = document.querySelectorAll('.gallery-item img');
    galleryImages.forEach(img => {
        const galleryItem = img.closest('.gallery-item');
        if (galleryItem && galleryItem.getAttribute('onclick')) {
            const onclickAttr = galleryItem.getAttribute('onclick');
            const match = onclickAttr.match(/'([^']+)'/);
            if (match) {
                const fullSizeUrl = match[1];
                const preloadImg = new Image();
                preloadImg.src = fullSizeUrl;
            }
        }
    });

    // Enhanced prose styling for portfolio content
    const proseContent = document.querySelectorAll('.prose-primary');
    proseContent.forEach(prose => {
        // Add custom styling for links
        const links = prose.querySelectorAll('a');
        links.forEach(link => {
            if (!link.classList.contains('btn')) {
                link.classList.add('text-primary-600', 'hover:text-primary-700', 'underline', 'transition-colors', 'duration-300');
            }
        });

        // Add styling for blockquotes
        const blockquotes = prose.querySelectorAll('blockquote');
        blockquotes.forEach(quote => {
            quote.classList.add('border-l-4', 'border-primary-500', 'pl-6', 'italic', 'text-gray-700', 'bg-gray-50', 'py-4', 'rounded-r-lg');
        });

        // Add styling for code blocks
        const codeBlocks = prose.querySelectorAll('pre code');
        codeBlocks.forEach(code => {
            code.parentElement.classList.add('bg-gray-900', 'text-green-400', 'rounded-lg', 'p-4', 'overflow-x-auto', 'text-sm');
        });

        // Add styling for inline code
        const inlineCodes = prose.querySelectorAll('p code, li code');
        inlineCodes.forEach(code => {
            code.classList.add('bg-primary-100', 'text-primary-800', 'px-2', 'py-1', 'rounded', 'text-sm', 'font-mono');
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

            // Close image modal
            if (window.closeImageModal) {
                closeImageModal();
            }

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

    // Intersection Observer for scroll animations
    const scrollObserverOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('slide-in-up');
                scrollObserver.unobserve(entry.target);
            }
        });
    }, scrollObserverOptions);

    // Observe portfolio items for scroll animations
    portfolioItems.forEach(item => {
        scrollObserver.observe(item);
    });

    // Counter animation for stats
    const statsCounters = document.querySelectorAll('[data-aos="fade-up"][data-aos-delay="400"] .text-3xl');
    const animateCounter = (counter) => {
        const target = parseInt(counter.textContent.replace(/\D/g, ''));
        if (isNaN(target)) return;

        const increment = target / 100;
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current) + (counter.textContent.includes('+') ? '+' : '') + (counter.textContent.includes('%') ? '%' : '');
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + (counter.textContent.includes('+') ? '+' : '') + (counter.textContent.includes('%') ? '%' : '');
            }
        };

        updateCounter();
    };

    // Trigger counter animation when stats section is visible
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                statsCounters.forEach(counter => animateCounter(counter));
                statsObserver.unobserve(entry.target);
            }
        });
    });

    const statsSection = document.querySelector('[data-aos-delay="400"]');
    if (statsSection) {
        statsObserver.observe(statsSection);
    }

    // Image lazy loading
    const lazyImages = document.querySelectorAll('img[data-src]');
    const imageLoadObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('loading-shimmer');
                imageLoadObserver.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => {
        img.classList.add('loading-shimmer');
        imageLoadObserver.observe(img);
    });

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

     // Contact Page Functions
    window.openMapModal = function() {
        const modal = document.getElementById('mapModal');
        if (modal) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            // Add animation
            setTimeout(() => {
                const content = modal.querySelector('.bg-white');
                if (content) {
                    content.classList.add('modal-enter-active');
                }
            }, 10);
        }
    };

    window.closeMapModal = function() {
        const modal = document.getElementById('mapModal');
        if (modal) {
            const modalContent = modal.querySelector('.bg-white');

            if (modalContent) {
                modalContent.classList.add('modal-exit-active');
            }

            setTimeout(() => {
                modal.classList.add('hidden');
                if (modalContent) {
                    modalContent.classList.remove('modal-enter-active', 'modal-exit-active');
                }
                document.body.style.overflow = 'auto';
            }, 300);
        }
    };



    // Contact card hover effects
    const contactCards = document.querySelectorAll('.contact-card');
    contactCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            if (window.innerWidth >= 768) { // Only on desktop
                this.style.transform = 'translateY(-8px) scale(1.02)';
            }
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Copy contact info to clipboard
    window.copyToClipboard = function(text, element) {
        navigator.clipboard.writeText(text).then(() => {
            // Show success feedback
            const originalContent = element.innerHTML;
            element.innerHTML = `
                <svg class="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Copied!
            `;

            setTimeout(() => {
                element.innerHTML = originalContent;
            }, 2000);
        }).catch(err => {
            console.error('Failed to copy: ', err);
            showNotification('Failed to copy to clipboard', 'error');
        });
    };

    // Add click-to-copy functionality for contact info
    const emailElements = document.querySelectorAll('[data-contact="email"]');
    const phoneElements = document.querySelectorAll('[data-contact="phone"]');

    emailElements.forEach(element => {
        element.style.cursor = 'pointer';
        element.title = 'Click to copy email';
        element.addEventListener('click', function() {
            copyToClipboard(this.textContent, this);
        });
    });

    phoneElements.forEach(element => {
        element.style.cursor = 'pointer';
        element.title = 'Click to copy phone number';
        element.addEventListener('click', function() {
            copyToClipboard(this.textContent, this);
        });
    });

    // Close map modal with Escape key and outside click
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeMapModal();
        }
    });

    const mapModal = document.getElementById('mapModal');
    if (mapModal) {
        mapModal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeMapModal();
            }
        });
    }

    // Add success animation for form submission
    if (window.location.search.includes('success=1')) {
        // Create success overlay
        const successOverlay = document.createElement('div');
        successOverlay.className = 'fixed inset-0 bg-green-500 bg-opacity-90 flex items-center justify-center z-50';
        successOverlay.innerHTML = `
            <div class="bg-white rounded-3xl p-8 mx-4 text-center shadow-2xl transform scale-0 transition-transform duration-500">
                <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Message Sent!</h3>
                <p class="text-gray-600">Thank you for contacting us. We'll reply within 24 hours.</p>
            </div>
        `;

        document.body.appendChild(successOverlay);

        setTimeout(() => {
            successOverlay.querySelector('div').style.transform = 'scale(1)';
        }, 100);

        setTimeout(() => {
            successOverlay.remove();
        }, 3000);
    }

    console.log('🎉 App.js initialized successfully!');
    console.log('📱 Device: ' + (window.innerWidth >= 768 ? 'Desktop' : 'Mobile'));
    console.log('🎨 Animations: ' + (prefersReducedMotion.matches ? 'Reduced' : 'Full'));
    console.log('🔧 Portfolio features loaded');
    console.log('📊 Performance monitoring active');
});
