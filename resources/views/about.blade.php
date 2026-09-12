@extends('layouts.app')

@section('title', 'About Us - Track Tech Solution | 15+ Years Pioneering Apparel Digitisation')

@section('meta_description', 'Learn about Track Tech Solution - A pioneering digital solutions provider transforming the apparel manufacturing industry with real-time MES and IoT intelligence.')

@section('content')

<!-- About Hero -->
<section class="page-blue-theme" style="padding: 4.5rem 0 3rem; position:relative;" 
         data-bg="#eef8ff" 
         data-glow-1="rgba(56, 189, 248, 0.25)" 
         data-glow-2="rgba(168, 85, 247, 0.2)" 
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div style="max-width:850px; margin:0 auto; text-align:center;" class="reveal-on-scroll">
            <span class="section-tag">Our Legacy & Vision</span>
            <h1 class="hero-title" style="margin:1rem 0 1.5rem;">
                Transforming Apparel Manufacturing with <span class="gradient-text">Digital Evolution</span>
            </h1>
            <p style="font-size:1.18rem; color:var(--text-secondary); line-height:1.75;">
                Track Tech Solution is a specialized digital solutions and industrial IoT provider built exclusively for garment and textile manufacturers. With over 15 years of ground-level shop floor experience, we bridge the gap between factory operators and executive decision makers.
            </p>
        </div>
    </div>
</section>

<!-- Company Pillars with Real Factory Showcase Image -->
<section style="padding: 3rem 0 5rem; position:relative;"
         data-bg="#f5f3ff"
         data-glow-1="rgba(168, 85, 247, 0.25)"
         data-glow-2="rgba(99, 102, 241, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <!-- Main Real Factory Image Banner -->
        <div class="real-product-image-wrap reveal-on-scroll" style="height:420px; margin-bottom:3.5rem;">
            <img src="{{ asset('images/production_tracking_real.jpg') }}" alt="Modern high-tech apparel manufacturing plant powered by Track Tech">
            <div class="real-product-overlay-tag">
                <span>● 1,000+ CONNECTED SEWING LINES ACROSS 40+ ENTERPRISE PLANTS</span>
            </div>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;">
            <div class="card-3d reveal-on-scroll stagger-1">
                <div class="card-3d-glare"></div>
                <div style="width:48px; height:48px; border-radius:14px; background:var(--brand-sky-bg); color:var(--brand-sky); display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size:1.4rem; font-weight:800; margin-bottom:0.75rem; color:var(--text-heading);">Our Mission</h3>
                <p style="color:var(--text-secondary); line-height:1.7;">
                    To empower garment manufacturers worldwide to eliminate paper chits, reduce fabric scrap, prevent rework before packing, and run high-efficiency, sustainable operations through real-time intelligence.
                </p>
            </div>

            <div class="card-3d reveal-on-scroll stagger-2">
                <div class="card-3d-glare"></div>
                <div style="width:48px; height:48px; border-radius:14px; background:var(--brand-purple-bg); color:var(--brand-purple); display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                </div>
                <h3 style="font-size:1.4rem; font-weight:800; margin-bottom:0.75rem; color:var(--text-heading);">Global Scale</h3>
                <p style="color:var(--text-secondary); line-height:1.7;">
                    Managing over 1,000+ active production lines across 40+ premier factories in India, Bangladesh, Sri Lanka, and Southeast Asia, inspecting more than 10 million garment pieces monthly.
                </p>
            </div>

            <div class="card-3d reveal-on-scroll stagger-3">
                <div class="card-3d-glare"></div>
                <div style="width:48px; height:48px; border-radius:14px; background:var(--brand-emerald-bg); color:var(--brand-emerald); display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem;">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3 style="font-size:1.4rem; font-weight:800; margin-bottom:0.75rem; color:var(--text-heading);">Hardware & Cloud Co-Design</h3>
                <p style="color:var(--text-secondary); line-height:1.7;">
                    Custom-engineered industrial edge terminals, optical machine sensors, and cloud telemetry algorithms designed from scratch to withstand high-dust, high-humidity textile environments.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Company History & Milestones Timeline -->
<section style="padding: 5rem 0; position:relative;"
         data-bg="#f0f9ff"
         data-glow-1="rgba(2, 132, 199, 0.25)"
         data-glow-2="rgba(56, 189, 248, 0.2)"
         data-glow-3="rgba(168, 85, 247, 0.18)">
    <div class="container">
        <div class="section-header-3d reveal-on-scroll">
            <span class="section-tag section-tag-purple">Evolution Timeline</span>
            <h2 class="section-title">15+ Years of <span class="gradient-text">Continuous Innovation</span></h2>
            <p class="section-subtitle">How Track Tech Solution grew into a trusted technology partner for global apparel enterprises.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:2rem;">
            <div class="card-3d reveal-on-scroll stagger-1">
                <div class="card-3d-glare"></div>
                <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--brand-sky); margin-bottom:0.5rem;">2011</div>
                <h4 style="font-size:1.2rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">The Foundation</h4>
                <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.65;">Founded in Bangalore with a mission to eliminate manual paper bundles and implement barcode tracking on shop floors.</p>
            </div>

            <div class="card-3d reveal-on-scroll stagger-2">
                <div class="card-3d-glare"></div>
                <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--brand-purple); margin-bottom:0.5rem;">2016</div>
                <h4 style="font-size:1.2rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Launch of Trakwel PTS</h4>
                <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.65;">Introduced real-time line balancing (Yamazumi) and deployed across 200+ sewing lines in major export houses.</p>
            </div>

            <div class="card-3d reveal-on-scroll stagger-3">
                <div class="card-3d-glare"></div>
                <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--brand-sky); margin-bottom:0.5rem;">2021</div>
                <h4 style="font-size:1.2rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">AI Quality & IoT Hardware</h4>
                <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.65;">Launched proprietary IP65 industrial tablets, optical machine sensors, and AI-powered 4-point defect heatmaps.</p>
            </div>

            <div class="card-3d reveal-on-scroll stagger-4">
                <div class="card-3d-glare"></div>
                <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--brand-emerald); margin-bottom:0.5rem;">Today</div>
                <h4 style="font-size:1.2rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Global Digital MES</h4>
                <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.65;">Powering over 1,000 active lines with full fabric-to-ship digital twin integration, OEE analytics, and predictive planning.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section style="padding: 4rem 0 6rem; position:relative;"
         data-bg="#fdf4ff"
         data-glow-1="rgba(236, 72, 153, 0.22)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div class="card-gradient-border reveal-on-scroll">
            <div class="card-gradient-inner" style="padding:3.5rem; text-align:center;">
                <h3 style="font-size:2.2rem; font-weight:800; color:var(--text-heading); margin-bottom:1rem;">Ready to Partner with Track Tech?</h3>
                <p style="color:var(--text-muted); font-size:1.1rem; margin-bottom:2rem; max-width:580px; margin-left:auto; margin-right:auto;">
                    Connect with our textile digitisation engineers for a consultation and live platform walkthrough.
                </p>
                <a href="{{ route('demo') }}" class="btn-3d btn-primary-3d">Book Live 3D Platform Walkthrough</a>
            </div>
        </div>
    </div>
</section>

@endsection
