<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- FIXED: Gunakan satu viewport meta tag yang optimal -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta name="description" content="@yield('description', 'Professional web and mobile app development services')">
    <meta name="keywords" content="@yield('keywords', 'web development, mobile app, Laravel, React')">

    <!-- Favicon -->
    @if(\App\Models\Setting::get('site_favicon'))
        <link rel="icon" type="image/x-icon" href="{{ \App\Models\Setting::get('site_favicon') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ \App\Models\Setting::get('site_favicon') }}">
        <link rel="apple-touch-icon" href="{{ \App\Models\Setting::get('site_favicon') }}">
    @else
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @endif

    <!-- Preload critical resources -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preload" href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700" as="style">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700" rel="stylesheet" />

    <!-- Critical CSS for above-the-fold content -->
    <style>
        /* Critical navbar styles to prevent layout shift */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            transition: all 0.3s ease;
        }

        /* Remove any default margin/padding for full coverage */
        body, main {
            margin: 0;
            padding: 0;
        }

        /* Main content should start from top - no padding needed for floating navbar */
        main {
            min-height: 100vh;
            position: relative;
        }

        /* Prevent flash of unstyled content */
        .navbar-glass {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        /* Loading skeleton for navbar */
        .navbar-skeleton {
            height: 4rem;
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        @media (min-width: 768px) {
            .navbar-skeleton {
                height: 5rem;
            }
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- AOS CSS with preload -->
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"></noscript>

    <!-- PWA and mobile app meta tags -->
    <meta name="theme-color" content="#ffffff">
    <!-- FIXED: Gunakan meta tag yang baru -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">

    @stack('styles')
</head>
<body class="font-sans antialiased">
    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-primary-600 text-white px-4 py-2 rounded-md z-50">
        Skip to main content
    </a>

    <!-- Floating Navigation -->
    @include('components.navbar')

    <!-- Main Content - No padding top, starts from very top -->
    <main id="main-content" role="main" class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer role="contentinfo">
        @include('components.footer')
    </footer>

    <!-- Scripts with optimized loading -->
    <script>
        // Critical JavaScript for navbar functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize scroll behavior for navbar
            let scrolled = false;
            const navbar = document.querySelector('nav');

            function handleScroll() {
                const isScrolled = window.scrollY > 20;
                if (isScrolled !== scrolled) {
                    scrolled = isScrolled;
                    if (navbar) {
                        navbar.classList.toggle('scrolled', scrolled);
                    }
                }
            }

            // Throttled scroll event
            let ticking = false;
            window.addEventListener('scroll', function() {
                if (!ticking) {
                    requestAnimationFrame(function() {
                        handleScroll();
                        ticking = false;
                    });
                    ticking = true;
                }
            });

            // Handle mobile menu click outside
            document.addEventListener('click', function(event) {
                const mobileMenu = document.querySelector('[x-data]');
                const menuButton = document.querySelector('[\\@click="open = !open"]');

                if (mobileMenu && !mobileMenu.contains(event.target) && !menuButton?.contains(event.target)) {
                    // Close mobile menu if clicking outside
                    window.dispatchEvent(new CustomEvent('close-mobile-menu'));
                }
            });

            // Prevent body scroll when mobile menu is open
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                        const backdrop = document.querySelector('.mobile-menu-backdrop');
                        if (backdrop && getComputedStyle(backdrop).display !== 'none') {
                            document.body.style.overflow = 'hidden';
                        } else {
                            document.body.style.overflow = '';
                        }
                    }
                });
            });

            const backdrop = document.querySelector('.mobile-menu-backdrop');
            if (backdrop) {
                observer.observe(backdrop, { attributes: true });
            }
        });

        // Optimize images loading
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                img.src = img.dataset.src || img.src;
            });
        } else {
            // Fallback for browsers that don't support lazy loading
            const script = document.createElement('script');
            script.src = 'https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver';
            document.head.appendChild(script);
        }
    </script>

    <!-- AOS JS with defer -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS when script loads
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 100,
                    easing: 'ease-out-cubic',
                    mirror: false,
                    anchorPlacement: 'top-bottom',
                    disable: function() {
                        // Disable AOS on mobile for better performance
                        return window.innerWidth < 768;
                    }
                });
            } else {
                // Retry if AOS hasn't loaded yet
                setTimeout(function() {
                    if (typeof AOS !== 'undefined') {
                        AOS.init({
                            duration: 800,
                            once: true,
                            offset: 100,
                            easing: 'ease-out-cubic',
                            mirror: false,
                            anchorPlacement: 'top-bottom',
                            disable: function() {
                                return window.innerWidth < 768;
                            }
                        });
                    }
                }, 100);
            }
        });
    </script>

    @stack('scripts')

    <!-- Performance monitoring (optional) -->
    <script>
        // Monitor Core Web Vitals - FIXED: Improved error handling
        if (typeof window !== 'undefined' && 'Promise' in window) {
            try {
                import('https://unpkg.com/web-vitals@3/dist/web-vitals.js')
                    .then(({ onCLS, onINP, onLCP }) => {
                        onCLS(console.log);
                        onINP(console.log);
                        onLCP(console.log);
                    })
                    .catch(error => {
                        console.warn('Web Vitals could not be loaded:', error);
                    });
            } catch (error) {
                console.warn('Web Vitals import failed:', error);
            }
        }
    </script>
</body>
</html>
