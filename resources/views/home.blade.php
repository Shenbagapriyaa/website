@extends('layouts.app')

@section('title', 'Track Tech Solution - The Missing Piece in Your Production Puzzle | Next-Gen Apparel MES & IoT')

@section('content')

<!-- ==========================================
     1. HERO SECTION WITH 3D STAGE & AMBIENT VIDEO
     ========================================== -->
<section class="hero-section-3d" id="hero" 
         data-bg="#f8fafc" 
         data-glow-1="rgba(56, 189, 248, 0.25)" 
         data-glow-2="rgba(168, 85, 247, 0.22)" 
         data-glow-3="rgba(14, 165, 233, 0.2)">
    <div class="container">
        <div class="hero-grid">
            <!-- Hero Left: Strategic Proposition -->
            <div class="hero-content-col reveal-on-scroll">
                <div class="hero-badge-hud">
                    <span class="live-pulse-dot"></span>
                    <span>The Missing Piece in Your Production Puzzle</span>
                </div>

                <h1 class="hero-title">
                    Digital Intelligence For <span class="gradient-text">Modern Apparel</span> Manufacturing
                </h1>

                <p class="hero-lead">
                    Transform your garment floor from fragile paper chits to synchronized cloud intelligence. Real-time line tracking, AI-driven quality control, fabric yield optimization, and IoT edge hardware.
                </p>

                <div class="hero-cta-group">
                    <a href="{{ route('demo') }}" class="btn-3d btn-primary-3d">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        <span>Experience 3D Demo</span>
                    </a>
                    
                    <a href="#products" class="btn-3d btn-secondary-3d">
                        <span>Explore Our Products</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                </div>

                <!-- Live Metrics HUD -->
                <div class="hero-stats-hud">
                    <div class="hud-stat-box">
                        <div class="hud-stat-num" data-counter="37" data-prefix="+" data-suffix="%">+37%</div>
                        <div class="hud-stat-label">Floor Efficiency</div>
                    </div>

                    <div class="hud-stat-box">
                        <div class="hud-stat-num" data-counter="28" data-prefix="-" data-suffix="%" style="color:var(--brand-emerald);">-28%</div>
                        <div class="hud-stat-label">Fabric Scrap</div>
                    </div>

                    <div class="hud-stat-box">
                        <div class="hud-stat-num" data-counter="99.2" data-suffix="%" style="color:var(--brand-purple);">99.2%</div>
                        <div class="hud-stat-label">Right-First-Time</div>
                    </div>
                </div>
            </div>

            <!-- Hero Right: 3D Interactive Telemetry Viewport with Ambient Video -->
            <div class="hero-stage-col reveal-on-scroll stagger-2">
                <div class="hero-3d-stage">
                    <!-- Ambient Factory Video Layer -->
                    <video class="hero-bg-video-embed" autoplay muted loop playsinline poster="{{ asset('images/production_tracking_real.jpg') }}">
                        <source src="https://assets.mixkit.co/videos/preview/mixkit-automated-assembly-line-in-a-factory-42861-large.mp4" type="video/mp4">
                    </video>

                    <canvas id="hero-factory-canvas" class="w-full h-full relative z-[2]"></canvas>

                    <!-- Floating Telemetry Glass Badges -->
                    <div class="stage-overlay-card card-top-right">
                        <div style="display:flex; align-items:center; gap:0.75rem;">
                            <div style="width:38px; height:38px; border-radius:12px; background:var(--brand-sky-bg); display:flex; align-items:center; justify-content:center; color:var(--brand-sky);">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                            </div>
                            <div>
                                <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase; font-weight:700;">Line Efficiency</div>
                                <div style="font-size:1rem; font-weight:800; color:var(--text-heading);">94.4% <span style="font-size:0.78rem; color:var(--brand-emerald);">▲ +5.2%</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="stage-overlay-card card-bottom-left">
                        <div style="display:flex; align-items:center; gap:0.75rem;">
                            <div style="width:38px; height:38px; border-radius:12px; background:var(--brand-purple-bg); display:flex; align-items:center; justify-content:center; color:var(--brand-purple);">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
                            </div>
                            <div>
                                <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase; font-weight:700;">Active WIP Bundles</div>
                                <div style="font-size:1rem; font-weight:800; color:var(--text-heading);">14,820 pcs <span style="font-size:0.78rem; color:var(--brand-sky);">● Live Sync</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     2. MONDAY.COM STYLE LIVE CONTROL BOARD
     ========================================== -->
<section style="padding: 4rem 0 6rem; position:relative;" id="interactive-board"
         data-bg="#f0fdf4" 
         data-glow-1="rgba(16, 185, 129, 0.25)" 
         data-glow-2="rgba(56, 189, 248, 0.2)" 
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div class="section-header-3d reveal-on-scroll">
            <span class="section-tag">Interactive Shop Floor HUD</span>
            <h2 class="section-title">Live Plant Operations <span class="gradient-text">In Real-Time</span></h2>
            <p class="section-subtitle">
                Experience how factory supervisors, quality managers, and industrial engineers monitor line flow from a single collaborative workspace.
            </p>
        </div>

        <div class="monday-board-wrapper reveal-on-scroll">
            <div class="monday-board-header">
                <div style="display:flex; align-items:center; gap:1rem;">
                    <div style="width:12px; height:12px; border-radius:50%; background:var(--brand-emerald);"></div>
                    <strong style="font-size:1.1rem; color:var(--text-heading); font-family:var(--font-display);">Bangalore Plant Alpha · Main Sewing Floor</strong>
                    <span style="font-size:0.8rem; background:var(--brand-sky-bg); color:var(--brand-sky); padding:0.25rem 0.65rem; border-radius:var(--radius-full); font-weight:700;">38 ACTIVE LINES</span>
                </div>
                <div style="display:flex; gap:0.5rem;">
                    <span style="font-size:0.85rem; color:var(--text-muted); font-weight:600;">Shift: <strong>Shift A (Day)</strong></span>
                    <span style="color:var(--border-subtle);">|</span>
                    <span style="font-size:0.85rem; color:var(--text-muted); font-weight:600;">Target Output: <strong>9,600 Pcs</strong></span>
                </div>
            </div>

            <div style="overflow-x:auto;">
                <table class="monday-board-table">
                    <thead>
                        <tr>
                            <th>Sewing Line</th>
                            <th>Garment Style</th>
                            <th>Operators</th>
                            <th>Target / Hr</th>
                            <th>Actual Output</th>
                            <th>Line Efficiency</th>
                            <th>Quality (RFT)</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Line #01 (Alpha)</strong></td>
                            <td>Men's Polo Pique T-Shirt</td>
                            <td>44 Operators</td>
                            <td>120 pcs</td>
                            <td><strong>118 pcs</strong></td>
                            <td><strong style="color:var(--brand-emerald);">98.3%</strong></td>
                            <td>99.1% RFT</td>
                            <td><span class="status-pill status-active">● Optimal Flow</span></td>
                        </tr>
                        <tr>
                            <td><strong>Line #02 (Bravo)</strong></td>
                            <td>Women's Denim Jacket</td>
                            <td>52 Operators</td>
                            <td>85 pcs</td>
                            <td><strong>82 pcs</strong></td>
                            <td><strong style="color:var(--brand-sky);">96.4%</strong></td>
                            <td>98.5% RFT</td>
                            <td><span class="status-pill status-active">● Synchronized</span></td>
                        </tr>
                        <tr>
                            <td><strong>Line #03 (Charlie)</strong></td>
                            <td>Kid's Fleece Hoodie</td>
                            <td>40 Operators</td>
                            <td>100 pcs</td>
                            <td><strong>74 pcs</strong></td>
                            <td><strong style="color:var(--brand-amber);">74.0%</strong></td>
                            <td>94.2% RFT</td>
                            <td><span class="status-pill status-warning">▲ Rebalance Needed</span></td>
                        </tr>
                        <tr>
                            <td><strong>Line #04 (Delta)</strong></td>
                            <td>Activewear Poly-Spandex Leggings</td>
                            <td>38 Operators</td>
                            <td>135 pcs</td>
                            <td><strong>132 pcs</strong></td>
                            <td><strong style="color:var(--brand-emerald);">97.7%</strong></td>
                            <td>99.4% RFT</td>
                            <td><span class="status-pill status-active">● Optimal Flow</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     3. ABOUT US (WHO WE ARE)
     ========================================== -->
<section style="padding: 5rem 0; position:relative;" id="about-us"
         data-bg="#f5f3ff" 
         data-glow-1="rgba(168, 85, 247, 0.25)" 
         data-glow-2="rgba(99, 102, 241, 0.22)" 
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div style="display:grid; grid-template-columns: 1fr 1.1fr; gap:4.5rem; align-items:center;">
            <div class="reveal-fade-left">
                <span class="section-tag">About Us</span>
                <h2 class="section-title">
                    Engineered by Textile Experts, <br><span class="gradient-text">Built for Floor Realities</span>
                </h2>
                <p style="color:var(--text-secondary); font-size:1.1rem; line-height:1.8; margin-bottom:1.75rem;">
                    Track Tech Solution is a specialized industrial software and IoT hardware provider dedicated entirely to the apparel manufacturing industry. With over 15 years of boots-on-the-ground factory floor experience, we eliminate the complexity of clunky legacy ERPs.
                </p>
                <div style="display:flex; flex-direction:column; gap:1.1rem; margin-bottom:2.25rem;">
                    <div style="display:flex; align-items:center; gap:0.85rem;">
                        <div style="width:30px; height:30px; border-radius:50%; background:var(--brand-sky-bg); display:flex; align-items:center; justify-content:center; color:var(--brand-sky); font-weight:bold; font-size:0.9rem;">✓</div>
                        <span style="font-weight:600; color:var(--text-heading); font-size:1rem;">1,000+ active production lines across 40+ premier garment export factories</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.85rem;">
                        <div style="width:30px; height:30px; border-radius:50%; background:var(--brand-purple-bg); display:flex; align-items:center; justify-content:center; color:var(--brand-purple); font-weight:bold; font-size:0.9rem;">✓</div>
                        <span style="font-weight:600; color:var(--text-heading); font-size:1rem;">Real-time piece-rate calculations and tamper-proof operator incentive tracking</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.85rem;">
                        <div style="width:30px; height:30px; border-radius:50%; background:var(--brand-emerald-bg); display:flex; align-items:center; justify-content:center; color:var(--brand-emerald); font-weight:bold; font-size:0.9rem;">✓</div>
                        <span style="font-weight:600; color:var(--text-heading); font-size:1rem;">Industrial IP65 touch tablets engineered for lint, heat, and high vibration</span>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn-3d btn-secondary-3d">
                    <span>Learn More About Us</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>

            <!-- Bento Grid -->
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.75rem;" class="reveal-fade-right">
                <div class="card-3d">
                    <div class="card-3d-glare"></div>
                    <div style="width:48px; height:48px; border-radius:14px; background:var(--brand-sky-bg); color:var(--brand-sky); display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
                    </div>
                    <h3 style="font-size:1.25rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Floor Simplicity</h3>
                    <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.65;">Designed for fast 1-second scans by operators with zero technical training.</p>
                </div>

                <div class="card-3d">
                    <div class="card-3d-glare"></div>
                    <div style="width:48px; height:48px; border-radius:14px; background:var(--brand-purple-bg); color:var(--brand-purple); display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <h3 style="font-size:1.25rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Zero Latency</h3>
                    <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.65;">Edge-computing ensures operations continue uninterrupted even during network drops.</p>
                </div>

                <div class="card-3d">
                    <div class="card-3d-glare"></div>
                    <div style="width:48px; height:48px; border-radius:14px; background:var(--brand-emerald-bg); color:var(--brand-emerald); display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 4.24 4.24"/><path d="m14.83 9.17 4.24-4.24"/><path d="m14.83 14.83 4.24 4.24"/><path d="m9.17 14.83-4.24 4.24"/></svg>
                    </div>
                    <h3 style="font-size:1.25rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Fabric-to-Ship</h3>
                    <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.65;">Complete visibility connecting raw fabric rolls, cut bundles, sewing lines, and carton pack.</p>
                </div>

                <div class="card-3d">
                    <div class="card-3d-glare"></div>
                    <div style="width:48px; height:48px; border-radius:14px; background:#fef3c7; color:var(--brand-amber); display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <h3 style="font-size:1.25rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Bottleneck Alerts</h3>
                    <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.65;">Automated wireless andon call signals and supervisor escalation before lines stall.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     4. OUR PRODUCTS: REAL-WORLD APPAREL MES MODULES
     ========================================== -->
<section style="padding: 6rem 0; position:relative;" id="products"
         data-bg="#f0f9ff" 
         data-glow-1="rgba(2, 132, 199, 0.28)" 
         data-glow-2="rgba(56, 189, 248, 0.22)" 
         data-glow-3="rgba(168, 85, 247, 0.2)">
    <div class="container">
        <div class="section-header-3d reveal-on-scroll">
            <span class="section-tag section-tag-purple">Our Products</span>
            <h2 class="section-title">Smart Factory <span class="gradient-text">Products Suite</span></h2>
            <p class="section-subtitle">
                A unified suite of digital modules designed to optimize every phase of your apparel manufacturing lifecycle.
            </p>
        </div>

        <!-- Interactive Products Switcher Tabs -->
        <div class="solution-tabs-nav reveal-on-scroll">
            <button class="tab-btn active" data-tab="tab-pts">Production Tracking (PTS)</button>
            <button class="tab-btn" data-tab="tab-qms">AI Quality Control (QMS)</button>
            <button class="tab-btn" data-tab="tab-oee">Machine Maintenance & OEE</button>
            <button class="tab-btn" data-tab="tab-fim">Fabric Inventory (FIM)</button>
            <button class="tab-btn" data-tab="tab-cut">Cutting Room Digitisation</button>
            <button class="tab-btn" data-tab="tab-iot">Industrial IoT Hardware</button>
        </div>

        <!-- Tab Content Panes with REAL-WORLD IMAGERY -->
        <div class="tab-content-wrapper reveal-on-scroll">
            <!-- TAB 1: PTS with Real Image -->
            <div class="tab-pane active" id="tab-pts">
                <div class="card-3d" style="padding:3rem;">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:3.5rem; align-items:center;">
                        <div>
                            <span class="section-tag">Sewing Line Digitisation</span>
                            <h3 style="font-size:1.9rem; font-weight:800; margin-bottom:1rem; color:var(--text-heading);">
                                Real-Time Line Balancing & Piece-Rate Tracking
                            </h3>
                            <p style="color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                                Eliminate paper bundle tickets with digital barcode / RFID scanning. Supervisors gain instant visibility into live hourly production, bottleneck stations, operator efficiency, and line pitch balancing (Yamazumi).
                            </p>
                            <div style="display:flex; flex-direction:column; gap:0.85rem; margin-bottom:2rem;">
                                <div style="display:flex; align-items:center; gap:0.65rem; font-weight:600; color:var(--text-heading);">
                                    <span style="color:var(--brand-sky); font-weight:bold;">●</span> Live WIP visibility at every operation & workstation
                                </div>
                                <div style="display:flex; align-items:center; gap:0.65rem; font-weight:600; color:var(--text-heading);">
                                    <span style="color:var(--brand-sky); font-weight:bold;">●</span> Automated DHU & hourly target vs actual variance alerts
                                </div>
                                <div style="display:flex; align-items:center; gap:0.65rem; font-weight:600; color:var(--text-heading);">
                                    <span style="color:var(--brand-sky); font-weight:bold;">●</span> Transparent individual operator piece-rate calculations
                                </div>
                            </div>
                            <a href="{{ route('products.show', 'production-tracking') }}" class="btn-3d btn-primary-3d">
                                <span>View Product Details</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </a>
                        </div>

                        <!-- Real-World Factory Image Showcase -->
                        <div class="real-product-image-wrap">
                            <img src="{{ asset('images/production_tracking_real.jpg') }}" alt="Real-world garment factory sewing lines with Track Tech digital tablets">
                            <div class="real-product-overlay-tag">
                                <span>● LIVE SEWING FLOOR</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 2: QMS with Real Image -->
            <div class="tab-pane" id="tab-qms">
                <div class="card-3d" style="padding:3rem;">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:3.5rem; align-items:center;">
                        <div>
                            <span class="section-tag section-tag-purple">AI Quality Management</span>
                            <h3 style="font-size:1.9rem; font-weight:800; margin-bottom:1rem; color:var(--text-heading);">
                                Zero-Defect RFT with 4-Point Visual Heatmaps
                            </h3>
                            <p style="color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                                Inspect faster and identify top repeat defects before garments move to finishing. Touchscreen tablets record defect types, pinpoint coordinates on garment silhouettes, and assign accountability immediately.
                            </p>
                            <div style="display:flex; flex-direction:column; gap:0.85rem; margin-bottom:2rem;">
                                <div style="display:flex; align-items:center; gap:0.65rem; font-weight:600; color:var(--text-heading);">
                                    <span style="color:var(--brand-purple); font-weight:bold;">●</span> 35% average reduction in rework and audit rejection rates
                                </div>
                                <div style="display:flex; align-items:center; gap:0.65rem; font-weight:600; color:var(--text-heading);">
                                    <span style="color:var(--brand-purple); font-weight:bold;">●</span> Live defect concentration heatmaps by line, operator & style
                                </div>
                                <div style="display:flex; align-items:center; gap:0.65rem; font-weight:600; color:var(--text-heading);">
                                    <span style="color:var(--brand-purple); font-weight:bold;">●</span> Automated AQL 1.5/2.5 buyer compliance certificate generation
                                </div>
                            </div>
                            <a href="{{ route('products.show', 'quality-control') }}" class="btn-3d btn-purple-3d">
                                <span>View Product Details</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </a>
                        </div>

                        <!-- Real-World Factory Image Showcase -->
                        <div class="real-product-image-wrap">
                            <img src="{{ asset('images/quality_control_real.jpg') }}" alt="Real-world garment factory AI quality inspection table">
                            <div class="real-product-overlay-tag">
                                <span>● AI QUALITY STATION</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 3: OEE with Machine Maintenance Real Image -->
            <div class="tab-pane" id="tab-oee">
                <div class="card-3d" style="padding:3rem;">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:3.5rem; align-items:center;">
                        <div>
                            <span class="section-tag">Machine Maintenance & OEE</span>
                            <h3 style="font-size:1.9rem; font-weight:800; margin-bottom:1rem; color:var(--text-heading);">
                                Wireless Andon Calls & Overall Equipment Effectiveness
                            </h3>
                            <p style="color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                                Reduce idle mechanic response times from 25 minutes to under 3 minutes. Touch button breakdowns notify floor mechanics over smartwatch / mobile alerts, tracking MTTR (Mean Time to Repair) and MTBF.
                            </p>
                            <a href="{{ route('products.show', 'machine-maintenance') }}" class="btn-3d btn-primary-3d">
                                <span>View Product Details</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </a>
                        </div>
                        <div class="real-product-image-wrap">
                            <img src="{{ asset('images/production_tracking_real.jpg') }}" alt="Factory floor machine maintenance and OEE terminals">
                            <div class="real-product-overlay-tag">
                                <span>● WIRELESS ANDON & OEE</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 4: FIM with Real Image -->
            <div class="tab-pane" id="tab-fim">
                <div class="card-3d" style="padding:3rem;">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:3.5rem; align-items:center;">
                        <div>
                            <span class="section-tag">Fabric Inventory (FIM)</span>
                            <h3 style="font-size:1.9rem; font-weight:800; margin-bottom:1rem; color:var(--text-heading);">
                                Roll-Level Barcode Tracking & Shade Segregation
                            </h3>
                            <p style="color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                                Fabric accounts for 60-70% of total garment production costs. Track Tech FIM manages roll width, shrinkage percentage, and shade lot matching to prevent cross-shade garment assembly errors.
                            </p>
                            <a href="{{ route('products.show', 'fabric-inventory') }}" class="btn-3d btn-primary-3d">
                                <span>View Product Details</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </a>
                        </div>
                        <div class="real-product-image-wrap">
                            <img src="{{ asset('images/fabric_inventory_real.jpg') }}" alt="Textile warehouse technician scanning barcode on fabric rolls">
                            <div class="real-product-overlay-tag">
                                <span>● FABRIC WAREHOUSE INVENTORY</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 5: Cutting Room with Real Image -->
            <div class="tab-pane" id="tab-cut">
                <div class="card-3d" style="padding:3rem;">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:3.5rem; align-items:center;">
                        <div>
                            <span class="section-tag">Cutting Room Digitisation</span>
                            <h3 style="font-size:1.9rem; font-weight:800; margin-bottom:1rem; color:var(--text-heading);">
                                Automated Cut Order Planning & Remnant Control
                            </h3>
                            <p style="color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                                Eliminate manual paper cut tickets and calculate optimal lay height and marker combinations in seconds. Generate barcode bundle tags directly at the spreading table.
                            </p>
                            <a href="{{ route('products.show', 'cutting-room') }}" class="btn-3d btn-primary-3d">
                                <span>View Product Details</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </a>
                        </div>
                        <div class="real-product-image-wrap">
                            <img src="{{ asset('images/cutting_room_real.jpg') }}" alt="Automated cutting room spreading table with computer markers">
                            <div class="real-product-overlay-tag">
                                <span>● AUTO-SPREADING & CUTTING</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 6: IoT Hardware with Real Image -->
            <div class="tab-pane" id="tab-iot">
                <div class="card-3d" style="padding:3rem;">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:3.5rem; align-items:center;">
                        <div>
                            <span class="section-tag">Industrial IoT Hardware</span>
                            <h3 style="font-size:1.9rem; font-weight:800; margin-bottom:1rem; color:var(--text-heading);">
                                Rugged IP65 Tablets & Machine Optical Sensors
                            </h3>
                            <p style="color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                                Consumer tablets break down on dusty sewing floors. Track Tech designs custom industrial-grade touch terminals with anti-glare screens, heavy-duty brackets, and direct machine pulse counters.
                            </p>
                            <a href="{{ route('products.show', 'iot-solutions') }}" class="btn-3d btn-primary-3d">
                                <span>View Product Details</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </a>
                        </div>
                        <div class="real-product-image-wrap">
                            <img src="{{ asset('images/production_tracking_real.jpg') }}" alt="Industrial IoT Hardware mounted on factory workstations">
                            <div class="real-product-overlay-tag">
                                <span>● IP65 INDUSTRIAL EDGE TABLETS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     5. OUR KEY BENEFITS (MEASURABLE ROI)
     ========================================== -->
<section style="padding: 5rem 0; position:relative;" id="benefits"
         data-bg="#faf5ff" 
         data-glow-1="rgba(192, 132, 252, 0.25)" 
         data-glow-2="rgba(14, 165, 233, 0.2)" 
         data-glow-3="rgba(16, 185, 129, 0.18)">
    <div class="container">
        <div class="section-header-3d reveal-on-scroll">
            <span class="section-tag">Measurable Business ROI</span>
            <h2 class="section-title">The Value You Unlock <span class="gradient-text">On Day One</span></h2>
            <p class="section-subtitle">
                Proven numbers recorded across 40+ leading apparel manufacturing plants.
            </p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:2rem;">
            <!-- Benefit 1 -->
            <div class="card-3d reveal-on-scroll stagger-1">
                <div class="card-3d-glare"></div>
                <div style="font-size:2.8rem; font-weight:800; font-family:var(--font-display); color:var(--brand-sky); margin-bottom:0.5rem;" data-counter="37" data-prefix="+" data-suffix="%">+37%</div>
                <h4 style="font-size:1.25rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Efficiency Boost</h4>
                <p style="font-size:0.92rem; color:var(--text-muted); line-height:1.65;">Real-time line balancing removes idle waiting time and balances operator workloads instantly.</p>
            </div>

            <!-- Benefit 2 -->
            <div class="card-3d reveal-on-scroll stagger-2">
                <div class="card-3d-glare"></div>
                <div style="font-size:2.8rem; font-weight:800; font-family:var(--font-display); color:var(--brand-emerald); margin-bottom:0.5rem;" data-counter="28" data-prefix="-" data-suffix="%" style="color:var(--brand-emerald);">-28%</div>
                <h4 style="font-size:1.25rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Fabric Waste Reduction</h4>
                <p style="font-size:0.92rem; color:var(--text-muted); line-height:1.65;">Automated marker planning and roll length matching prevents remnant scrap and end-bit loss.</p>
            </div>

            <!-- Benefit 3 -->
            <div class="card-3d reveal-on-scroll stagger-3">
                <div class="card-3d-glare"></div>
                <div style="font-size:2.8rem; font-weight:800; font-family:var(--font-display); color:var(--brand-purple); margin-bottom:0.5rem;" data-counter="35" data-prefix="-" data-suffix="%" style="color:var(--brand-purple);">-35%</div>
                <h4 style="font-size:1.25rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Rework & Defect Rate</h4>
                <p style="font-size:0.92rem; color:var(--text-muted); line-height:1.65;">Instant defect pinpointing stops faulty bundles from moving downstream, cutting packing rejection.</p>
            </div>

            <!-- Benefit 4 -->
            <div class="card-3d reveal-on-scroll stagger-4">
                <div class="card-3d-glare"></div>
                <div style="font-size:2.8rem; font-weight:800; font-family:var(--font-display); color:var(--brand-sky); margin-bottom:0.5rem;" data-counter="100" data-suffix="%">100%</div>
                <h4 style="font-size:1.25rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Paperless Floor</h4>
                <p style="font-size:0.92rem; color:var(--text-muted); line-height:1.65;">Zero lost paper chits, zero manual data entry errors, and tamper-proof wage payroll calculations.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     6. WHY WE ARE DIFFERENT (COMPETITIVE EDGE)
     ========================================== -->
<section style="padding: 6rem 0; position:relative;" id="why-different"
         data-bg="#f8fafc" 
         data-glow-1="rgba(14, 165, 233, 0.22)" 
         data-glow-2="rgba(168, 85, 247, 0.2)" 
         data-glow-3="rgba(56, 189, 248, 0.18)">
    <div class="container">
        <div class="section-header-3d reveal-on-scroll">
            <span class="section-tag section-tag-purple">Why We Are Different</span>
            <h2 class="section-title">Built Different From <span class="gradient-text">Generic Software</span></h2>
            <p class="section-subtitle">
                Why world-class apparel manufacturers choose Track Tech over traditional ERPs.
            </p>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:2.5rem;" class="reveal-on-scroll">
            <!-- Left: Generic ERPs -->
            <div class="card-3d" style="border-color:rgba(226,232,240,0.85); background:rgba(255,255,255,0.7);">
                <div style="display:flex; align-items:center; gap:0.85rem; margin-bottom:1.5rem;">
                    <div style="width:38px; height:38px; border-radius:50%; background:rgba(244,63,94,0.12); color:var(--brand-rose); display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:1.1rem;">✕</div>
                    <h3 style="font-size:1.35rem; font-weight:800; color:var(--text-heading);">Generic Enterprise ERPs</h3>
                </div>
                <ul style="list-style:none; display:flex; flex-direction:column; gap:1.1rem; font-size:0.95rem; color:var(--text-muted);">
                    <li style="display:flex; gap:0.75rem; align-items:flex-start;">
                        <span style="color:var(--brand-rose); font-weight:bold;">—</span>
                        <span>Requires end-of-day batch data entry; managers discover bottlenecks hours after they happen.</span>
                    </li>
                    <li style="display:flex; gap:0.75rem; align-items:flex-start;">
                        <span style="color:var(--brand-rose); font-weight:bold;">—</span>
                        <span>Clunky multi-screen interfaces confusing for sewing floor operators.</span>
                    </li>
                    <li style="display:flex; gap:0.75rem; align-items:flex-start;">
                        <span style="color:var(--brand-rose); font-weight:bold;">—</span>
                        <span>Software only; requires you to source incompatible third-party tablets and brackets.</span>
                    </li>
                    <li style="display:flex; gap:0.75rem; align-items:flex-start;">
                        <span style="color:var(--brand-rose); font-weight:bold;">—</span>
                        <span>Crashes when factory Wi-Fi drops, halting operator scanning.</span>
                    </li>
                </ul>
            </div>

            <!-- Right: Track Tech Solution -->
            <div class="card-gradient-border">
                <div class="card-gradient-inner">
                    <div style="display:flex; align-items:center; gap:0.85rem; margin-bottom:1.5rem;">
                        <div style="width:38px; height:38px; border-radius:50%; background:var(--brand-emerald-bg); color:var(--brand-emerald); display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:1.1rem;">✓</div>
                        <h3 style="font-size:1.35rem; font-weight:800; color:var(--text-heading);">Track Tech Solution</h3>
                    </div>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:1.1rem; font-size:0.95rem; color:var(--text-secondary);">
                        <li style="display:flex; gap:0.75rem; align-items:flex-start;">
                            <span style="color:var(--brand-emerald); font-weight:bold;">✓</span>
                            <span><strong>Live Second-by-Second Telemetry:</strong> Instant andon and bottleneck detection right as it occurs.</span>
                        </li>
                        <li style="display:flex; gap:0.75rem; align-items:flex-start;">
                            <span style="color:var(--brand-emerald); font-weight:bold;">✓</span>
                            <span><strong>1-Touch Operator UX:</strong> Large touch buttons and audio beeps designed for line workers.</span>
                        </li>
                        <li style="display:flex; gap:0.75rem; align-items:flex-start;">
                            <span style="color:var(--brand-emerald); font-weight:bold;">✓</span>
                            <span><strong>Full Hardware Co-Design:</strong> Rugged IP65 touch tablets & machine pulse sensors included.</span>
                        </li>
                        <li style="display:flex; gap:0.75rem; align-items:flex-start;">
                            <span style="color:var(--brand-emerald); font-weight:bold;">✓</span>
                            <span><strong>Offline Edge Resilience:</strong> Local cache records scans even during power or Wi-Fi interruptions.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     7. INTERACTIVE ROI & FABRIC SAVINGS CALCULATOR
     ========================================== -->
<section style="padding: 5rem 0; position:relative;" id="roi-calculator"
         data-bg="#f0f9ff" 
         data-glow-1="rgba(2, 132, 199, 0.25)" 
         data-glow-2="rgba(168, 85, 247, 0.2)" 
         data-glow-3="rgba(56, 189, 248, 0.18)">
    <div class="container">
        <div class="calc-container reveal-on-scroll">
            <div style="text-align:center; max-width:700px; margin:0 auto 3rem;">
                <span class="section-tag">Interactive ROI Estimator</span>
                <h2 style="font-size:clamp(1.9rem, 3.4vw, 2.7rem); font-weight:800; color:var(--text-heading); margin-bottom:0.75rem;">
                    Calculate Your Factory’s Projected Savings
                </h2>
                <p style="color:var(--text-muted); font-size:1.05rem;">
                    Adjust your factory line scale and target efficiency increase to estimate your annual financial impact.
                </p>
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:3.5rem; align-items:center;">
                <!-- Controls -->
                <div style="display:flex; flex-direction:column; gap:2.25rem;">
                    <div>
                        <div style="display:flex; justify-content:space-between; margin-bottom:0.85rem; font-weight:700;">
                            <label for="calc-lines-slider" style="color:var(--text-heading); font-size:1rem;">Number of Active Sewing Lines</label>
                            <span id="calc-lines-val" style="color:var(--brand-sky); font-family:var(--font-display); font-size:1.2rem;">20 Sewing Lines</span>
                        </div>
                        <input type="range" id="calc-lines-slider" class="calc-slider" min="4" max="120" value="20" step="2">
                    </div>

                    <div>
                        <div style="display:flex; justify-content:space-between; margin-bottom:0.85rem; font-weight:700;">
                            <label for="calc-eff-slider" style="color:var(--text-heading); font-size:1rem;">Target Efficiency Improvement</label>
                            <span id="calc-eff-val" style="color:var(--brand-purple); font-family:var(--font-display); font-size:1.2rem;">+15% Efficiency</span>
                        </div>
                        <input type="range" id="calc-eff-slider" class="calc-slider" min="5" max="35" value="15" step="1">
                    </div>

                    <p style="font-size:0.88rem; color:var(--text-muted); line-height:1.65;">
                        *Based on standard 45-operator garment line benchmarks operating 300 days/year with standard fabric yardage and labor constants.
                    </p>
                </div>

                <!-- Live Results Display -->
                <div style="background:#ffffff; border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:2.25rem; box-shadow:var(--shadow-card);">
                    <div style="font-size:0.88rem; font-weight:700; color:var(--text-muted); text-transform:uppercase; margin-bottom:0.35rem;">Estimated Annual Savings</div>
                    <div id="calc-annual-savings" style="font-size:clamp(2.6rem, 4.2vw, 3.4rem); font-weight:800; font-family:var(--font-display); color:var(--brand-sky); margin-bottom:1.5rem; line-height:1;">
                        $168,000
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.25rem; border-top:1px solid var(--border-subtle); padding-top:1.5rem;">
                        <div>
                            <div style="font-size:0.8rem; color:var(--text-muted); font-weight:600;">Fabric Saved / Year</div>
                            <div id="calc-yardage-savings" style="font-size:1.25rem; font-weight:800; color:var(--text-heading);">290,000 Yds</div>
                        </div>
                        <div>
                            <div style="font-size:0.8rem; color:var(--text-muted); font-weight:600;">Labor Hours Recaptured</div>
                            <div id="calc-hours-saved" style="font-size:1.25rem; font-weight:800; color:var(--text-heading);">43,200 Hrs</div>
                        </div>
                    </div>

                    <div style="margin-top:1.75rem;">
                        <a href="{{ route('demo') }}" class="btn-3d btn-primary-3d" style="width:100%;">
                            <span>Request Detailed Audit for Your Plant</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     8. SUCCESS STORIES
     ========================================== -->
<section style="padding: 6rem 0; position:relative;" id="stories-section"
         data-bg="#f8fafc" 
         data-glow-1="rgba(14, 165, 233, 0.22)" 
         data-glow-2="rgba(168, 85, 247, 0.2)" 
         data-glow-3="rgba(56, 189, 248, 0.18)">
    <div class="container">
        <div class="section-header-3d reveal-on-scroll">
            <span class="section-tag">Success Stories</span>
            <h2 class="section-title">Trusted by Global <span class="gradient-text">Apparel Exporters</span></h2>
            <p class="section-subtitle">
                Over 40+ premier manufacturers across India, Bangladesh, and Sri Lanka rely on Track Tech daily.
            </p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2.25rem;">
            <!-- Story 1 -->
            <div class="card-3d reveal-on-scroll stagger-1">
                <div class="card-3d-glare"></div>
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.25rem;">
                    <strong style="font-size:1.2rem; color:var(--text-heading);">Tirupur Knitwear Hub</strong>
                    <span style="font-size:0.75rem; background:var(--brand-sky-bg); color:var(--brand-sky); padding:0.25rem 0.65rem; border-radius:var(--radius-full); font-weight:700;">64 SEWING LINES</span>
                </div>
                <p style="font-size:0.94rem; color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                    "We converted our 64-line plant to Track Tech PTS and QMS in less than 3 weeks. Our line throughput jumped 21% within 60 days, and our paper printing costs dropped to zero."
                </p>
                <div style="font-size:0.88rem; color:var(--text-muted); font-weight:600;">
                    — VP of Operations, Leading Knits Exporter
                </div>
            </div>

            <!-- Story 2 -->
            <div class="card-3d reveal-on-scroll stagger-2">
                <div class="card-3d-glare"></div>
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.25rem;">
                    <strong style="font-size:1.2rem; color:var(--text-heading);">Bangalore Woven Garments</strong>
                    <span style="font-size:0.75rem; background:var(--brand-purple-bg); color:var(--brand-purple); padding:0.25rem 0.65rem; border-radius:var(--radius-full); font-weight:700;">38 SEWING LINES</span>
                </div>
                <p style="font-size:0.94rem; color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                    "The AI Quality heatmap gave our supervisors direct eyes on sewing defect clusters before garments hit the audit table. Re-screening overhead decreased by 40%."
                </p>
                <div style="font-size:0.88rem; color:var(--text-muted); font-weight:600;">
                    — General Manager (Quality & Compliance)
                </div>
            </div>

            <!-- Story 3 -->
            <div class="card-3d reveal-on-scroll stagger-3">
                <div class="card-3d-glare"></div>
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.25rem;">
                    <strong style="font-size:1.2rem; color:var(--text-heading);">Dhaka Outerwear Plant</strong>
                    <span style="font-size:0.75rem; background:var(--brand-emerald-bg); color:var(--brand-emerald); padding:0.25rem 0.65rem; border-radius:var(--radius-full); font-weight:700;">82 SEWING LINES</span>
                </div>
                <p style="font-size:0.94rem; color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                    "The industrial IP65 tablets handle the humid environment flawlessly. Even when the central network had an outage, the offline edge tablets never missed a single operator scan."
                </p>
                <div style="font-size:0.88rem; color:var(--text-muted); font-weight:600;">
                    — Chief Technology Officer, Outerwear Group
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     9. CONTACT US & FINAL CTA
     ========================================== -->
<section style="padding: 6rem 0; position:relative;" id="contact-section"
         data-bg="#fdf4ff" 
         data-glow-1="rgba(236, 72, 153, 0.22)" 
         data-glow-2="rgba(168, 85, 247, 0.2)" 
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div class="card-gradient-border reveal-on-scroll">
            <div class="card-gradient-inner" style="padding:4.5rem 2.5rem; text-align:center;">
                <span class="section-tag">Get In Touch</span>
                <h2 style="font-size:clamp(2.2rem, 4vw, 3.4rem); font-weight:800; color:var(--text-heading); margin-bottom:1.25rem; line-height:1.15;">
                    Ready to Connect Your Factory Floor in <span class="gradient-text">Real-Time?</span>
                </h2>
                <p style="font-size:1.18rem; color:var(--text-muted); max-width:680px; margin:0 auto 2.75rem; line-height:1.75;">
                    Schedule an interactive 3D digital twin demo tailored to your plant layout, machine counts, and specific manufacturing bottlenecks.
                </p>
                <div style="display:flex; justify-content:center; gap:1.25rem; flex-wrap:wrap;">
                    <a href="{{ route('demo') }}" class="btn-3d btn-primary-3d" style="padding:0.95rem 2.4rem; font-size:1.05rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        <span>Book Interactive 3D Demo</span>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-3d btn-secondary-3d" style="padding:0.95rem 2.2rem; font-size:1.05rem;">
                        <span>Contact Our Team</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
