<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO & Metadata -->
    <title>@yield('title', 'Track Tech Solution - The Missing Piece in Your Production Puzzle | Next-Gen 3D MES & IoT')</title>
    <meta name="description" content="@yield('meta_description', 'Track Tech Solution - All-in-one real-time digital intelligence platform for garment manufacturing. Real-time line tracking, AI Quality Control, Cutting Room & Fabric Inventory.')">
    <meta name="keywords" content="apparel manufacturing software, garment factory tracking, textile MES, real-time production tracking, trakwel, apparel IoT, fabric inventory management, cutting room digitization">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Track Tech Solution - Next-Gen Apparel Manufacturing Platform')">
    <meta property="og:description" content="Digitize your apparel factory from fabric to ship with 3D real-time intelligence.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Space+Grotesk:wght@500;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN with Custom Config) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            cyan: '#00f0ff',
                            sky: '#0ea5e9',
                            blue: '#3b82f6',
                            purple: '#a855f7',
                            dark: '#040711',
                            card: '#0a1020'
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['"Space Grotesk"', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Custom 3D UI Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>
<body class="bg-[#040711] text-slate-100 selection:bg-cyan-500/30 selection:text-cyan-200">

    <!-- Full-Screen Interactive 3D Canvas Background (No Three.js) -->
    <canvas id="digital-factory-canvas" class="fixed inset-0 pointer-events-none z-[1] w-full h-full"></canvas>
    <div class="bg-grid-overlay"></div>

    <!-- Main Navigation Header -->
    <header class="site-header">
        <nav class="navbar-glass">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="nav-brand">
                <div class="brand-icon-3d">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                    </svg>
                </div>
                <span class="brand-title">Track Tech <span class="gradient-text">Solution</span></span>
            </a>

            <!-- Desktop Menu -->
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#hero' : route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                </li>
                
                <!-- Products Dropdown -->
                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#solutions' : route('products.index') }}" class="nav-link {{ request()->is('products*') ? 'active' : '' }}">
                        Products
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
                    </a>
                    <div class="dropdown-menu-3d">
                        <div class="dropdown-grid">
                            <a href="{{ route('products.show', 'quality-control') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#00f0ff;">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Quality Control (QMS)</h5>
                                    <p>Defect reduction up to 35% with 4-point AI</p>
                                </div>
                            </a>

                            <a href="{{ route('products.show', 'production-tracking') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#3b82f6;">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Production Tracking (PTS)</h5>
                                    <p>Real-time line balancing & live WIP monitoring</p>
                                </div>
                            </a>

                            <a href="{{ route('products.show', 'machine-maintenance') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#a855f7;">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Machine Maintenance & OEE</h5>
                                    <p>Predictive maintenance & automated call alerts</p>
                                </div>
                            </a>

                            <a href="{{ route('products.show', 'fabric-inventory') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#10b981;">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Fabric Inventory Management</h5>
                                    <p>Roll-level barcode tracking & shade bands</p>
                                </div>
                            </a>

                            <a href="{{ route('products.show', 'cutting-room') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#f59e0b;">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><line x1="20" y1="4" x2="8.12" y2="15.88"/><line x1="14.47" y1="14.48" x2="20" y2="20"/><line x1="8.12" y1="8.12" x2="12" y2="12"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Cutting Room Digitisation</h5>
                                    <p>Marker optimization & digital bundle tickets</p>
                                </div>
                            </a>

                            <a href="{{ route('products.show', 'iot-solutions') }}" class="dropdown-card-item">
                                <div class="dropdown-icon" style="color:#0284c7;">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
                                </div>
                                <div class="dropdown-meta">
                                    <h5>Industrial IoT Hardware</h5>
                                    <p>IP65 touch tablets & machine sensors</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#about-section' : route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                </li>

                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#stories-section' : route('success-stories') }}" class="nav-link {{ request()->routeIs('success-stories') ? 'active' : '' }}">Success Stories</a>
                </li>

                <li class="nav-item">
                    <a href="{{ request()->routeIs('home') ? '#contact-section' : route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
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
        <div style="display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid rgba(255,255,255,0.1); padding-bottom:1rem;">
            <span class="brand-title">Track Tech <span class="gradient-text">Solution</span></span>
            <button id="mobile-close" style="background:none; border:none; color:#fff; cursor:pointer; font-size:1.8rem; line-height:1;">&times;</button>
        </div>
        <div style="display:flex; flex-direction:column; gap:0.75rem;">
            <a href="{{ request()->routeIs('home') ? '#hero' : route('home') }}" class="nav-link">Home</a>
            <a href="{{ request()->routeIs('home') ? '#solutions' : route('products.index') }}" class="nav-link">Products & Solutions</a>
            <a href="{{ request()->routeIs('home') ? '#about-section' : route('about') }}" class="nav-link">About Company</a>
            <a href="{{ request()->routeIs('home') ? '#stories-section' : route('success-stories') }}" class="nav-link">Business Stories</a>
            <a href="{{ route('demo') }}" class="nav-link">3D Demo & ROI</a>
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

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1: Brand & Bio -->
                <div class="footer-col">
                    <div class="nav-brand" style="margin-bottom:1.25rem;">
                        <div class="brand-icon-3d">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                        </div>
                        <span class="brand-title">Track Tech <span class="gradient-text">Solution</span></span>
                    </div>
                    <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.7; margin-bottom:1.5rem;">
                        The missing piece in your production puzzle. Pioneering digital intelligence, IoT edge devices, and real-time MES platforms for the global apparel manufacturing industry.
                    </p>
                    <div style="display:flex; gap:0.75rem;">
                        <span class="live-pulse-dot"></span>
                        <span style="font-size:0.8rem; color:var(--accent-cyan); font-weight:700;">40+ Global Factories · 1000+ Lines Connected</span>
                    </div>
                </div>

                <!-- Col 2: Solutions -->
                <div class="footer-col">
                    <h4>Solutions Suite</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('products.show', 'quality-control') }}">Quality Control (QMS)</a></li>
                        <li><a href="{{ route('products.show', 'production-tracking') }}">Production Tracking (PTS)</a></li>
                        <li><a href="{{ route('products.show', 'machine-maintenance') }}">Machine Maintenance & OEE</a></li>
                        <li><a href="{{ route('products.show', 'production-planning') }}">Production Planning (PPS)</a></li>
                        <li><a href="{{ route('products.show', 'fabric-inventory') }}">Fabric Inventory (FIM)</a></li>
                        <li><a href="{{ route('products.show', 'cutting-room') }}">Cutting Room Digitisation</a></li>
                    </ul>
                </div>

                <!-- Col 3: Company & Stories -->
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('about') }}">About Track Tech</a></li>
                        <li><a href="{{ route('success-stories') }}">Client Success Stories</a></li>
                        <li><a href="{{ route('demo') }}">Virtual 3D Twin Demo</a></li>
                        <li><a href="{{ route('contact') }}">Global Tech Hubs</a></li>
                        <li><a href="{{ route('contact') }}">Request Consultation</a></li>
                    </ul>
                </div>

                <!-- Col 4: Global HQ & Hotline -->
                <div class="footer-col">
                    <h4>Global Hubs</h4>
                    <div style="display:flex; flex-direction:column; gap:0.85rem; font-size:0.875rem;">
                        <div>
                            <strong style="color:#fff;">Bangalore HQ:</strong>
                            <p style="color:var(--text-muted);">364, Silicon Town, Electronic City Phase 1, Bangalore, Karnataka 560100</p>
                        </div>
                        <div>
                            <strong style="color:#fff;">Textile Tech Hub:</strong>
                            <p style="color:var(--text-muted);">Tirupur, Tamil Nadu & Dhaka, Bangladesh</p>
                        </div>
                        <div style="margin-top:0.5rem;">
                            <a href="tel:+919650613666" style="color:var(--accent-cyan); text-decoration:none; font-weight:700; display:inline-flex; align-items:center; gap:0.5rem;">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                Hotline: +91 96506 13666
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Track Tech Solution. All Rights Reserved. Built for Apparel Manufacturers Worldwide.</p>
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
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent-emerald)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span id="toast-message-text">Your request has been submitted successfully.</span>
    </div>

    <!-- Core JavaScript Engines (Tailwind + Vanilla JS, No Three.js) -->
    <script src="{{ asset('js/digital-factory-bg.js') }}"></script>
    <script src="{{ asset('js/hero-factory-3d.js') }}"></script>
    <script src="{{ asset('js/cursor-3d.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
