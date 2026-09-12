<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO & Metadata -->
    <title>@yield('title', 'Track Tech Solution - The Missing Piece in Your Production Puzzle | Next-Gen Apparel MES & IoT')</title>
    <meta name="description" content="@yield('meta_description', 'Track Tech Solution - Modern digital intelligence platform for garment manufacturing. Real-time sewing line tracking, AI Quality Control, Cutting Room & Fabric Inventory.')">
    <meta name="keywords" content="apparel manufacturing software, garment factory tracking, textile MES, real-time production tracking, trakwel, apparel IoT, fabric inventory management, cutting room digitisation">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Track Tech Solution - Next-Gen Apparel Manufacturing Platform')">
    <meta property="og:description" content="Digitize your apparel factory from fabric to ship with 3D real-time intelligence.">
    
    <!-- Google Fonts: Plus Jakarta Sans, Syne & Space Grotesk -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Syne:wght@600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN with Custom Config) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            sky: '#0ea5e9',
                            skydark: '#0284c7',
                            skylight: '#e0f2fe',
                            purple: '#8b5cf6',
                            purpledark: '#6d28d9',
                            purplelight: '#f3e8ff',
                            indigo: '#6366f1',
                            emerald: '#10b981',
                            amber: '#f59e0b',
                            slate: '#0f172a'
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['"Syne"', 'sans-serif'],
                        code: ['"Space Grotesk"', 'monospace']
                    }
                }
            }
        }
    </script>

    <!-- Custom Modern UI Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>
<body class="bg-[#f8fafc] text-slate-900 selection:bg-sky-500/20 selection:text-sky-900">

    <!-- Main Navigation Header (Clean Home, About Us, Products, Success Stories, ROI, Contact) -->
    <header class="site-header">
        <nav class="navbar-glass">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="nav-brand">
                <img class="brand-logo-image" src="{{ asset('images/track-tech-logo.svg') }}" alt="Track Tech Solution logo">
                <span class="brand-title">Track Tech <span class="gradient-text">Solution</span></span>
            </a>

            <!-- Desktop Menu -->
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#hero' : route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-scroll-target="hero">Home</a>
                </li>

                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#about-us' : route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" data-scroll-target="about-us">About Us</a>
                </li>
                
                <!-- Products Dropdown -->
                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#products' : route('products.index') }}" class="nav-link {{ request()->is('products*') ? 'active' : '' }}" data-scroll-target="products">
                        Products
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
                    </a>
                    <div class="dropdown-menu-3d">
                        <div class="dropdown-grid">
                            <a href="{{ route('products.show', 'quality-control') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#0284c7; background:rgba(2,132,199,0.12);">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Quality Control (QMS)</h5>
                                    <p>AI-driven 4-point defect heatmaps & zero rework</p>
                                </div>
                            </a>

                            <a href="{{ route('products.show', 'production-tracking') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#8b5cf6; background:rgba(139,92,246,0.12);">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Production Tracking (PTS)</h5>
                                    <p>Real-time line balancing & live operator piece-rates</p>
                                </div>
                            </a>

                            <a href="{{ route('products.show', 'machine-maintenance') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#0ea5e9; background:rgba(14,165,233,0.12);">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Machine Maintenance & OEE</h5>
                                    <p>Predictive maintenance & wireless breakdown calls</p>
                                </div>
                            </a>

                            <a href="{{ route('products.show', 'fabric-inventory') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#10b981; background:rgba(16,185,129,0.12);">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Fabric Inventory (FIM)</h5>
                                    <p>Roll-level barcode tracking & shrinkage clustering</p>
                                </div>
                            </a>

                            <a href="{{ route('products.show', 'cutting-room') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#f59e0b; background:rgba(245,158,11,0.12);">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><line x1="20" y1="4" x2="8.12" y2="15.88"/><line x1="14.47" y1="14.48" x2="20" y2="20"/><line x1="8.12" y1="8.12" x2="12" y2="12"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Cutting Room Digitisation</h5>
                                    <p>Marker optimization & automated cut planning</p>
                                </div>
                            </a>

                            <a href="{{ route('products.show', 'iot-solutions') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#6366f1; background:rgba(99,102,241,0.12);">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Industrial IoT Hardware</h5>
                                    <p>IP65 touch tablets & machine optical sensors</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#interactive-board' : route('products.index') }}" class="nav-link" data-scroll-target="interactive-board">Solutions</a>
                </li>

                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#stories-section' : route('success-stories') }}" class="nav-link {{ request()->routeIs('success-stories') ? 'active' : '' }}" data-scroll-target="stories-section">Success Stories</a>
                </li>

                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#roi-calculator' : route('demo') }}" class="nav-link" data-scroll-target="roi-calculator">ROI Calculator</a>
                </li>

                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#contact-section' : route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" data-scroll-target="contact-section">Contact Us</a>
                </li>
            </ul>

            <!-- Header Action CTAs -->
            <div class="nav-actions">
                <a href="{{ route('demo') }}" class="btn-3d btn-primary-3d">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                    <span>Book 3D Demo</span>
                </a>

                <!-- Mobile Toggle Button -->
                <button type="button" id="mobile-toggle" class="mobile-toggle-btn" aria-label="Toggle navigation">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
            </div>
        </nav>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-drawer" class="mobile-drawer">
        <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border-subtle); padding-bottom:1rem;">
            <span class="brand-title">Track Tech <span class="gradient-text">Solution</span></span>
            <button id="mobile-close" style="background:none; border:none; color:var(--text-heading); cursor:pointer; font-size:1.8rem; line-height:1;">&times;</button>
        </div>
        <div style="display:flex; flex-direction:column; gap:0.75rem;">
            <a href="{{ request()->routeIs('home') ? '#hero' : route('home') }}" class="nav-link">Home</a>
            <a href="{{ request()->routeIs('home') ? '#about-us' : route('about') }}" class="nav-link">About Us</a>
            <a href="{{ request()->routeIs('home') ? '#products' : route('products.index') }}" class="nav-link">Products</a>
            <a href="{{ request()->routeIs('home') ? '#interactive-board' : route('products.index') }}" class="nav-link">Solutions</a>
            <a href="{{ route('success-stories') }}" class="nav-link">Success Stories</a>
            <a href="{{ route('demo') }}" class="nav-link">ROI Calculator & Demo</a>
            <a href="{{ request()->routeIs('home') ? '#contact-section' : route('contact') }}" class="nav-link">Contact Us</a>
        </div>
        <div style="margin-top:auto;">
            <a href="{{ route('demo') }}" class="btn-3d btn-primary-3d" style="width:100%;">Book 3D Demo</a>
        </div>
    </div>

    <!-- Main Content Body -->
    <main class="main-content relative z-10">
        @yield('content')
    </main>

    @if(request()->routeIs('contact'))
        <a class="whatsapp-float" href="https://wa.me/919650613666?text=Hello%20Track%20Tech%20Solution%2C%20I%20would%20like%20to%20discuss%20my%20factory%20project." target="_blank" rel="noopener noreferrer" aria-label="Chat with Track Tech Solution on WhatsApp">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5A11.84 11.84 0 0 0 12.06 0C5.52 0 .2 5.31.2 11.85c0 2.09.55 4.13 1.59 5.92L.1 24l6.39-1.67a11.85 11.85 0 0 0 5.57 1.42h.01c6.53 0 11.84-5.32 11.84-11.86 0-3.17-1.23-6.14-3.41-8.39Zm-8.44 18.2h-.01a9.85 9.85 0 0 1-5.02-1.37l-.36-.21-3.79.99 1.01-3.7-.23-.38a9.85 9.85 0 1 1 8.4 4.67Zm5.41-7.39c-.3-.15-1.78-.88-2.05-.98-.28-.1-.48-.15-.68.15-.2.3-.78.98-.95 1.18-.17.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.5-.9-.8-1.51-1.78-1.69-2.08-.18-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.38-.02-.53-.07-.15-.68-1.64-.93-2.25-.25-.59-.5-.51-.68-.52h-.58c-.2 0-.53.07-.8.38-.27.3-1.03 1-1.03 2.46s1.05 2.85 1.2 3.05c.15.2 2.07 3.16 5.01 4.43.7.3 1.25.48 1.68.62.7.22 1.34.19 1.84.12.56-.08 1.78-.73 2.03-1.43.25-.7.25-1.3.17-1.43-.07-.12-.27-.2-.57-.35Z"></path></svg>
            <span>WhatsApp</span>
        </a>
    @endif

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1: Brand & Bio -->
                <div class="footer-col">
                    <div class="nav-brand" style="margin-bottom:1.25rem;">
                        <img class="brand-logo-image" src="{{ asset('images/track-tech-logo.svg') }}" alt="Track Tech Solution logo">
                        <span class="brand-title">Track Tech <span class="gradient-text">Solution</span></span>
                    </div>
                    <p style="font-size:0.94rem; color:var(--text-muted); line-height:1.75; margin-bottom:1.5rem;">
                        The missing piece in your production puzzle. Pioneering real-time digital intelligence, factory IoT edge tablets, and apparel MES platforms across 40+ global garment manufacturing plants.
                    </p>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <span class="live-pulse-dot"></span>
                        <span style="font-size:0.86rem; color:var(--brand-sky); font-weight:700;">40+ Global Plants · 1,000+ Lines Connected</span>
                    </div>
                </div>

                <!-- Col 2: Products -->
                <div class="footer-col">
                    <h4>Products</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('products.show', 'quality-control') }}">Quality Control (QMS)</a></li>
                        <li><a href="{{ route('products.show', 'production-tracking') }}">Production Tracking (PTS)</a></li>
                        <li><a href="{{ route('products.show', 'machine-maintenance') }}">Machine Maintenance & OEE</a></li>
                        <li><a href="{{ route('products.show', 'fabric-inventory') }}">Fabric Inventory (FIM)</a></li>
                        <li><a href="{{ route('products.show', 'cutting-room') }}">Cutting Room Digitisation</a></li>
                        <li><a href="{{ route('products.show', 'iot-solutions') }}">Industrial IoT Hardware</a></li>
                    </ul>
                </div>

                <!-- Col 3: Company & Stories -->
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('success-stories') }}">Success Stories</a></li>
                        <li><a href="{{ route('demo') }}">Virtual 3D Factory Demo</a></li>
                        <li><a href="{{ route('contact') }}">Global Tech Hubs</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 4: Global HQ & Hotline -->
                <div class="footer-col">
                    <h4>Global Hubs</h4>
                    <div style="display:flex; flex-direction:column; gap:0.85rem; font-size:0.9rem;">
                        <div>
                            <strong style="color:var(--text-heading);">Bangalore HQ:</strong>
                            <p style="color:var(--text-muted);">364, Silicon Town, Electronic City Phase 1, Bangalore 560100</p>
                        </div>
                        <div>
                            <strong style="color:var(--text-heading);">Textile Tech Hubs:</strong>
                            <p style="color:var(--text-muted);">Tirupur, Tamil Nadu & Dhaka, Bangladesh</p>
                        </div>
                        <div style="margin-top:0.5rem;">
                            <a href="tel:+919650613666" style="color:var(--brand-sky); text-decoration:none; font-weight:700; display:inline-flex; align-items:center; gap:0.5rem;">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                Hotline: +91 96506 13666
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Track Tech Solution. All Rights Reserved. Built for Garment Manufacturers Worldwide.</p>
                <div style="display:flex; gap:1.5rem;">
                    <a href="{{ route('about') }}" style="color:var(--text-muted); text-decoration:none;">Privacy Policy</a>
                    <a href="{{ route('about') }}" style="color:var(--text-muted); text-decoration:none;">Terms of Service</a>
                    <a href="{{ route('contact') }}" style="color:var(--text-muted); text-decoration:none;">Security & Compliance</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Toast Notification -->
    <div id="toast-notification" class="toast-msg">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span id="toast-message-text">Your request has been submitted successfully.</span>
    </div>

    <!-- External Libraries: Lenis Smooth Scroll, Three.js & GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/lenis@1.0.45/dist/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- JavaScript Engines -->
    <script src="{{ asset('js/hero-factory-3d.js') }}"></script>
    <script src="{{ asset('js/cursor-3d.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
