@extends('layouts.app')

@section('title', 'Track Tech Solution - The Missing Piece in Your Production Puzzle | 3D MES & Factory Intelligence')

@section('content')

<!-- ==========================================
     HERO SECTION WITH 3D WEBGL FACTORY & HUD
     ========================================== -->
<section class="hero-section-3d" id="hero">
    <div class="container">
        <div class="hero-grid">
            <!-- Hero Left: Copy & Value Proposition -->
            <div class="hero-content-col">
                <div class="hero-badge-hud">
                    <span class="live-pulse-dot"></span>
                    <span>Next-Gen Apparel MES & IoT Intelligence</span>
                </div>

                <h1 class="hero-title">
                    Revolutionizing <span class="gradient-text">Garment Manufacturing</span><br>
                    With Real-Time Digital Intelligence
                </h1>

                <p class="hero-lead">
                    From Factory Floor to Executive Dashboard. Eliminate paper chits, predict quality bottlenecks, optimize fabric yield, and maximize equipment uptime.
                </p>

                <div class="hero-cta-group">
                    <a href="{{ route('demo') }}" class="btn-3d btn-primary-3d">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        <span>Book Live 3D Demo</span>
                    </a>
                    
                    <a href="#solutions" class="btn-3d btn-secondary-3d">
                        <span>Explore Solutions</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                </div>

                <!-- Live Metrics HUD -->
                <div class="hero-stats-hud">
                    <div class="hud-stat-box">
                        <div class="hud-stat-num" data-counter="37" data-prefix="+" data-suffix="%">+37%</div>
                        <div class="hud-stat-label">Efficiency Boost</div>
                    </div>

                    <div class="hud-stat-box">
                        <div class="hud-stat-num" data-counter="28" data-prefix="-" data-suffix="%" style="color:var(--accent-emerald);">-28%</div>
                        <div class="hud-stat-label">Fabric Waste</div>
                    </div>

                    <div class="hud-stat-box">
                        <div class="hud-stat-num" data-counter="99.2" data-suffix="%" style="color:var(--accent-purple);">99.2%</div>
                        <div class="hud-stat-label">Quality Score (RFT)</div>
                    </div>
                </div>
            </div>

            <!-- Hero Right: 3D Interactive WebGL Stage -->
            <div class="hero-stage-col">
                <div class="hero-3d-stage">
                    <canvas id="hero-factory-canvas" class="w-full h-full rounded-2xl"></canvas>

                    <!-- Floating 3D Telemetry Overlay Badges -->
                    <div class="stage-overlay-card card-top-right">
                        <div style="display:flex; align-items:center; gap:0.65rem;">
                            <div style="width:34px; height:34px; border-radius:8px; background:rgba(0,240,255,0.15); display:flex; align-items:center; justify-content:center; color:var(--accent-cyan);">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                            </div>
                            <div>
                                <div style="font-size:0.7rem; color:var(--text-muted); text-transform:uppercase;">Line Efficiency</div>
                                <div style="font-size:0.95rem; font-weight:800; color:#fff;">92.4% <span style="font-size:0.75rem; color:var(--accent-emerald);">▲ +4.2%</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="stage-overlay-card card-bottom-left">
                        <div style="display:flex; align-items:center; gap:0.65rem;">
                            <div style="width:34px; height:34px; border-radius:8px; background:rgba(16,185,129,0.15); display:flex; align-items:center; justify-content:center; color:var(--accent-emerald);">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <div style="font-size:0.7rem; color:var(--text-muted); text-transform:uppercase;">WIP Active Bundles</div>
                                <div style="font-size:0.95rem; font-weight:800; color:#fff;">14,820 pcs <span style="font-size:0.75rem; color:var(--accent-cyan);">● Synced</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     CORE VALUE PROPOSITIONS (INNOVATE, TRANSFORM, OPTIMIZE)
     ========================================== -->
<section style="padding: 3rem 0; position:relative;">
    <div class="container">
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:1.5rem;">
            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="color:var(--accent-cyan); margin-bottom:1rem;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
                </div>
                <h3 style="font-size:1.35rem; margin-bottom:0.5rem;">Innovate</h3>
                <p style="font-size:0.9rem; color:var(--text-secondary);">Unleashing cutting-edge IoT edge sensors and 3D digital telemetry to redefine apparel production workflows.</p>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="color:var(--accent-blue); margin-bottom:1rem;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                </div>
                <h3 style="font-size:1.35rem; margin-bottom:0.5rem;">Transform</h3>
                <p style="font-size:0.9rem; color:var(--text-secondary);">Empowering a seamless shift from fragile manual paper chits to tamper-proof, cloud-synchronized digital lines.</p>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="color:var(--accent-purple); margin-bottom:1rem;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 4.24 4.24"/><path d="m14.83 9.17 4.24-4.24"/><path d="m14.83 14.83 4.24 4.24"/><path d="m9.17 14.83-4.24 4.24"/></svg>
                </div>
                <h3 style="font-size:1.35rem; margin-bottom:0.5rem;">Optimize</h3>
                <p style="font-size:0.9rem; color:var(--text-secondary);">Maximize operator throughput, eliminate cutting room scrap, and elevate quality right-first-time compliance.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     ABOUT US IN-PAGE SECTION
     ========================================== -->
<section style="padding: 6rem 0; position:relative;" id="about-section">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:3.5rem; align-items:center;">
            <div>
                <span class="section-tag">About Track Tech Solution</span>
                <h2 style="font-size:clamp(2rem, 3.5vw, 3rem); font-weight:800; margin-bottom:1.25rem; line-height:1.15;">
                    Pioneering Digital Intelligence for <span class="gradient-text">Apparel Manufacturers</span>
                </h2>
                <p style="color:var(--text-secondary); font-size:1.05rem; line-height:1.7; margin-bottom:1.5rem;">
                    Track Tech Solution is a premier digital solutions provider focused on revolutionizing the garment manufacturing industry. With over 15 years of ground-level floor experience, we bridge the gap between factory operators and executive dashboards with real-time IoT MES platforms.
                </p>
                <div style="display:flex; flex-direction:column; gap:0.85rem; margin-bottom:2rem;">
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <div style="width:24px; height:24px; border-radius:50%; background:rgba(0,240,255,0.15); display:flex; align-items:center; justify-content:center; color:var(--accent-cyan); font-weight:bold; font-size:0.8rem;">✓</div>
                        <span style="color:var(--text-primary); font-size:0.95rem;">Real-time production & piece-rate tracking across 1000+ sewing lines</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <div style="width:24px; height:24px; border-radius:50%; background:rgba(0,240,255,0.15); display:flex; align-items:center; justify-content:center; color:var(--accent-cyan); font-weight:bold; font-size:0.8rem;">✓</div>
                        <span style="color:var(--text-primary); font-size:0.95rem;">AI-powered 4-point Quality Control reducing defects by up to 35%</span>
                    </div>
                    <div style="display:flex; align-items:center; gap:0.75rem;">
                        <div style="width:24px; height:24px; border-radius:50%; background:rgba(0,240,255,0.15); display:flex; align-items:center; justify-content:center; color:var(--accent-cyan); font-weight:bold; font-size:0.8rem;">✓</div>
                        <span style="color:var(--text-primary); font-size:0.95rem;">Fabric roll inventory & cutting room marker yield optimization</span>
                    </div>
                </div>
                <div style="display:flex; gap:1rem;">
                    <a href="{{ route('about') }}" class="btn-3d btn-primary-3d">Read Full Company Story</a>
                    <a href="{{ route('contact') }}" class="btn-3d btn-secondary-3d">Our Global Hubs</a>
                </div>
            </div>

            <!-- Right: Impact Card Matrix -->
            <div class="card-3d" style="border-color:rgba(0,240,255,0.3); box-shadow:var(--shadow-3d); padding:2.5rem;">
                <div class="card-3d-glare"></div>
                <div style="font-size:0.85rem; color:var(--text-muted); text-transform:uppercase; font-weight:700; letter-spacing:0.1em; margin-bottom:1.5rem;">
                    Core Enterprise Footprint
                </div>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem;">
                    <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.06); border-radius:var(--radius-sm); padding:1.2rem;">
                        <div style="font-size:2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-cyan);">40+</div>
                        <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Active Factories</div>
                    </div>
                    <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.06); border-radius:var(--radius-sm); padding:1.2rem;">
                        <div style="font-size:2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-blue);">1000+</div>
                        <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Active Lines</div>
                    </div>
                    <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.06); border-radius:var(--radius-sm); padding:1.2rem;">
                        <div style="font-size:2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-purple);">10M+</div>
                        <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Pieces / Month</div>
                    </div>
                    <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.06); border-radius:var(--radius-sm); padding:1.2rem;">
                        <div style="font-size:2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-emerald);">15+</div>
                        <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Years Legacy</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     COMPLETE 3D SOLUTIONS SUITE
     ========================================== -->
<section class="solutions-section" id="solutions">
    <div class="container">
        <div class="section-header-3d">
            <span class="section-tag">Industry Leading Expertise</span>
            <h2 class="section-title">The Complete <span class="gradient-text">Textile Digitisation</span> Suite</h2>
            <p class="section-subtitle">Six intelligent modules engineered to connect every square meter of your garment facility.</p>
        </div>

        <div class="solutions-grid">
            @foreach($solutions as $key => $item)
            <div class="card-3d-wrap">
                <div class="card-3d">
                    <div class="card-3d-glare"></div>
                    
                    <div class="solution-card-header">
                        <div class="solution-icon-wrap" style="color:{{ $item['accent'] }}; border:1px solid {{ $item['accent'] }}40; background:{{ $item['accent'] }}15;">
                            @if($item['icon'] == 'check-circle')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            @elseif($item['icon'] == 'activity')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                            @elseif($item['icon'] == 'cpu')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/></svg>
                            @elseif($item['icon'] == 'calendar')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            @elseif($item['icon'] == 'archive')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
                            @elseif($item['icon'] == 'scissors')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><line x1="20" y1="4" x2="8.12" y2="15.88"/><line x1="14.47" y1="14.48" x2="20" y2="20"/><line x1="8.12" y1="8.12" x2="12" y2="12"/></svg>
                            @else
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/></svg>
                            @endif
                        </div>

                        <div class="solution-metric-badge">
                            <div class="solution-metric-num" style="color:{{ $item['accent'] }};">{{ $item['highlight_metric'] }}</div>
                            <div class="solution-metric-lbl">{{ $item['highlight_label'] }}</div>
                        </div>
                    </div>

                    <h3 class="solution-title">{{ $item['title'] }}</h3>
                    <p class="solution-desc">{{ $item['short_description'] }}</p>

                    <div class="solution-card-footer">
                        <span style="font-size:0.75rem; color:var(--text-muted); font-weight:700; text-transform:uppercase;">{{ $item['badge'] }}</span>
                        <a href="{{ route('products.show', $item['slug']) }}" class="card-link-arrow">
                            <span>Explore Details</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================================
     INTERACTIVE 3D FACTORY LIFECYCLE FLOW
     ========================================== -->
<section class="lifecycle-section" id="pipeline-section">
    <div class="container">
        <div class="section-header-3d">
            <span class="section-tag">End-to-End Pipeline</span>
            <h2 class="section-title">From Fabric Roll to <span class="gradient-text">Shipped Container</span></h2>
            <p class="section-subtitle">Real-time data synchronization at every stage of garment manufacturing.</p>
        </div>

        <div class="pipeline-stepper">
            <div class="pipeline-step-node">
                <div class="step-node-bubble" style="border-color:#10b981; box-shadow:0 0 20px rgba(16,185,129,0.35);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
                </div>
                <div class="step-node-num">Step 01</div>
                <h4 class="step-node-title">Fabric Inward & Shade</h4>
                <p class="step-node-desc">Roll barcode scan, 4-point inspection & shade sorting.</p>
            </div>

            <div class="pipeline-step-node">
                <div class="step-node-bubble" style="border-color:#f59e0b; box-shadow:0 0 20px rgba(245,158,11,0.35);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><line x1="20" y1="4" x2="8.12" y2="15.88"/><line x1="14.47" y1="14.48" x2="20" y2="20"/><line x1="8.12" y1="8.12" x2="12" y2="12"/></svg>
                </div>
                <div class="step-node-num">Step 02</div>
                <h4 class="step-node-title">Smart Cut & Bundle</h4>
                <p class="step-node-desc">Marker optimization, ply tracking & digital bundle tickets.</p>
            </div>

            <div class="pipeline-step-node">
                <div class="step-node-bubble" style="border-color:#00f0ff; box-shadow:0 0 20px rgba(0,240,255,0.35);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#00f0ff" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </div>
                <div class="step-node-num">Step 03</div>
                <h4 class="step-node-title">Sewing & WIP Balancing</h4>
                <p class="step-node-desc">Operator station IoT tracking & live Yamazumi balancing.</p>
            </div>

            <div class="pipeline-step-node">
                <div class="step-node-bubble" style="border-color:#3b82f6; box-shadow:0 0 20px rgba(59,130,246,0.35);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <div class="step-node-num">Step 04</div>
                <h4 class="step-node-title">AI Quality Check</h4>
                <p class="step-node-desc">Instant defect heatmaps, root cause analytics & AQL audits.</p>
            </div>

            <div class="pipeline-step-node">
                <div class="step-node-bubble" style="border-color:#a855f7; box-shadow:0 0 20px rgba(168,85,247,0.35);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#a855f7" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/></svg>
                </div>
                <div class="step-node-num">Step 05</div>
                <h4 class="step-node-title">Finishing & OEE</h4>
                <p class="step-node-desc">Packing scan, machine health logs & carton shipment audit.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     LIVE FACTORY ROI & VALUE CALCULATOR
     ========================================== -->
<section class="calculator-section" id="roi-section">
    <div class="container">
        <div class="calculator-card-3d">
            <div class="calculator-grid">
                <!-- Left: Sliders -->
                <div>
                    <span class="section-tag" style="margin-bottom:1rem;">Interactive ROI Simulator</span>
                    <h3 style="font-size:2rem; margin-bottom:1rem;">Calculate Your Factory's <span class="gradient-text">Annual Savings</span></h3>
                    <p style="color:var(--text-secondary); font-size:0.95rem; margin-bottom:2rem;">
                        Adjust your factory sewing lines and target efficiency goals to calculate exact labor minutes and fabric yardage preserved.
                    </p>

                    <!-- Control 1: Sewing Lines -->
                    <div class="calc-control-group">
                        <div class="calc-label-row">
                            <span class="calc-label-title">Active Sewing Lines</span>
                            <span class="calc-label-val" id="calc-lines-val">24 Sewing Lines</span>
                        </div>
                        <input type="range" min="4" max="100" step="2" value="24" class="calc-slider" id="calc-lines-slider">
                    </div>

                    <!-- Control 2: Target Efficiency -->
                    <div class="calc-control-group">
                        <div class="calc-label-row">
                            <span class="calc-label-title">Target Efficiency Improvement</span>
                            <span class="calc-label-val" id="calc-eff-val" style="color:var(--accent-emerald);">+15% Efficiency</span>
                        </div>
                        <input type="range" min="5" max="35" step="1" value="15" class="calc-slider" id="calc-eff-slider">
                    </div>
                </div>

                <!-- Right: Computed Results HUD -->
                <div>
                    <div class="calc-results-hud">
                        <div class="calc-result-item" style="grid-column: span 2; background:rgba(0,240,255,0.06); border-color:rgba(0,240,255,0.3);">
                            <div class="calc-result-sub" style="color:var(--accent-cyan);">Estimated Total Annual Savings</div>
                            <div class="calc-result-big gradient-text" id="calc-annual-savings">$384,500</div>
                        </div>

                        <div class="calc-result-item">
                            <div class="calc-result-sub">Fabric Saved / Year</div>
                            <div class="calc-result-big" id="calc-yardage-savings" style="color:var(--accent-emerald);">348,000 Yds</div>
                        </div>

                        <div class="calc-result-item">
                            <div class="calc-result-sub">Operator Hours Recovered</div>
                            <div class="calc-result-big" id="calc-hours-saved" style="color:var(--accent-blue);">155,520 Hrs</div>
                        </div>

                        <div class="calc-result-item" style="grid-column: span 2;">
                            <div style="display:flex; justify-content:space-between; align-items:center;">
                                <div>
                                    <div class="calc-result-sub">Projected System Payback</div>
                                    <div style="font-size:1.4rem; font-weight:800; color:#fff;" id="calc-payback-months">3.4 Mo</div>
                                </div>
                                <a href="{{ route('demo') }}" class="btn-3d btn-primary-3d" style="padding:0.5rem 1.25rem; font-size:0.85rem;">Get Custom Audit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     PARTNERS & ENTERPRISE CLIENTS MARQUEE
     ========================================== -->
<section class="partners-section">
    <div class="container" style="text-align:center; margin-bottom:2rem;">
        <span style="font-size:0.85rem; color:var(--text-muted); text-transform:uppercase; letter-spacing:0.15em; font-weight:700;">
            Trusted by Global Apparel Leaders & Manufacturers
        </span>
    </div>

    <div class="partners-marquee">
        <div class="partner-logo-chip">SHAHI EXPORTS</div>
        <div class="partner-logo-chip">ARVIND LTD</div>
        <div class="partner-logo-chip">PDS MULTINATIONAL</div>
        <div class="partner-logo-chip">MODELAMA EXPORTS</div>
        <div class="partner-logo-chip">PEARL GLOBAL</div>
        <div class="partner-logo-chip">BRANDIX APPAREL</div>
        <div class="partner-logo-chip">GOKALDAS EXPORTS</div>
        <div class="partner-logo-chip">ORIENT CRAFT</div>
        
        <!-- Duplicate for Infinite Loop -->
        <div class="partner-logo-chip">SHAHI EXPORTS</div>
        <div class="partner-logo-chip">ARVIND LTD</div>
        <div class="partner-logo-chip">PDS MULTINATIONAL</div>
        <div class="partner-logo-chip">MODELAMA EXPORTS</div>
    </div>
</section>

<!-- ==========================================
     CLIENT TESTIMONIALS & CASE STUDIES
     ========================================== -->
<section style="padding: 6rem 0; position:relative;" id="stories-section">
    <div class="container">
        <div class="section-header-3d">
            <span class="section-tag">Success Stories</span>
            <h2 class="section-title">What Factory <span class="gradient-text">Leaders</span> Say</h2>
            <p class="section-subtitle">Real results from live factory floors implementing Track Tech Solution.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(340px, 1fr)); gap:2rem;">
            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="display:flex; align-items:center; gap:0.5rem; color:var(--accent-amber); margin-bottom:1rem;">
                    ★★★★★
                </div>
                <p style="font-size:1rem; color:var(--text-primary); font-style:italic; line-height:1.7; margin-bottom:1.5rem;">
                    "TTS Quality Control reduced our internal rejection rate from 6.8% to 1.9% within 90 days. The real-time defect heatmaps eliminated our end-line bottlenecks completely."
                </p>
                <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:1rem;">
                    <strong style="display:block; color:#fff;">General Manager - Quality Operations</strong>
                    <span style="font-size:0.85rem; color:var(--text-muted);">Shahi Exports</span>
                </div>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="display:flex; align-items:center; gap:0.5rem; color:var(--accent-amber); margin-bottom:1rem;">
                    ★★★★★
                </div>
                <p style="font-size:1rem; color:var(--text-primary); font-style:italic; line-height:1.7; margin-bottom:1.5rem;">
                    "With Trakwel PTS, our plant managers balanced 48 lines simultaneously without paperwork. Operator incentives are calculated automatically, driving a 22% spike in throughput."
                </p>
                <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:1rem;">
                    <strong style="display:block; color:#fff;">Vice President of Manufacturing</strong>
                    <span style="font-size:0.85rem; color:var(--text-muted);">Arvind Ltd</span>
                </div>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="display:flex; align-items:center; gap:0.5rem; color:var(--accent-amber); margin-bottom:1rem;">
                    ★★★★★
                </div>
                <p style="font-size:1rem; color:var(--text-primary); font-style:italic; line-height:1.7; margin-bottom:1.5rem;">
                    "Machine downtime dropped by 60% with TTS automated technician dispatch and PM tracking. We now run our machines at 94.8% true OEE."
                </p>
                <div style="border-top:1px solid rgba(255,255,255,0.08); padding-top:1rem;">
                    <strong style="display:block; color:#fff;">Head of Engineering & Maintenance</strong>
                    <span style="font-size:0.85rem; color:var(--text-muted);">Modelama Exports</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     CALL TO ACTION & CONSULTATION FORM
     ========================================== -->
<section class="cta-section-3d" id="contact-section">
    <div class="container">
        <div class="cta-box-3d">
            <span class="section-tag" style="margin-bottom:1rem;">Ready to Digitize Your Factory?</span>
            <h2 style="font-size:clamp(2rem, 4vw, 3rem); font-weight:800; margin-bottom:1rem;">
                Transform Your Floor into a <span class="gradient-text">Smart Factory</span>
            </h2>
            <p style="color:var(--text-secondary); max-width:620px; margin:0 auto 2.5rem; font-size:1.1rem;">
                Schedule a live 3D walkthrough tailored to your plant size, or speak with our textile digitisation engineers.
            </p>

            <div style="max-width:580px; margin:0 auto;">
                <form action="{{ route('contact.submit') }}" method="POST" class="ajax-inquiry-form" style="background:rgba(10,15,30,0.8); border:1px solid rgba(0,240,255,0.2); border-radius:var(--radius-md); padding:2rem;">
                    @csrf
                    <input type="hidden" name="type" value="quote">

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" name="name" class="form-control" placeholder="e.g. Ramesh Kumar" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="text" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Work Email *</label>
                        <input type="email" name="email" class="form-control" placeholder="name@company.com" required>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div class="form-group">
                            <label class="form-label">Factory / Company Name</label>
                            <input type="text" name="company" class="form-control" placeholder="e.g. Apex Apparels">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Number of Sewing Lines</label>
                            <input type="number" name="factory_lines" class="form-control" placeholder="e.g. 20" min="1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Primary Solution Interest</label>
                        <select name="solution_interest" class="form-control" style="background:#0f172a;">
                            <option value="All Solutions">Complete Smart Factory Suite</option>
                            <option value="Quality Management System">Quality Management System (QMS)</option>
                            <option value="Production Tracking">Production Tracking (PTS / Trakwel)</option>
                            <option value="Machine Maintenance & OEE">Machine Maintenance & OEE</option>
                            <option value="Fabric Inventory & Cutting">Fabric Inventory & Cutting Room</option>
                            <option value="IoT Hardware">Industrial IoT Hardware Terminals</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Message / Specific Requirements</label>
                        <textarea name="message" class="form-control" placeholder="Tell us about your factory challenges..." rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn-3d btn-primary-3d" style="width:100%; padding:0.9rem; font-size:1rem; margin-top:0.5rem;">
                        <span>Get Free Factory Assessment & Quote</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
