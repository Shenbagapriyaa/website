@extends('layouts.app')

@section('title', 'About Us - Track Tech Solution | 15+ Years Pioneering Textile Digitisation')

@section('meta_description', 'Learn about Track Tech Solution - A pioneering digital solutions provider transforming the apparel manufacturing industry with real-time MES and IoT intelligence.')

@section('content')

<!-- About Hero -->
<section style="padding: 4rem 0 3rem; position:relative;">
    <div class="container">
        <div style="max-width:850px; margin:0 auto; text-align:center;">
            <span class="section-tag">Our Legacy & Vision</span>
            <h1 style="font-size:clamp(2.5rem, 5vw, 3.8rem); font-weight:800; margin:1rem 0 1.5rem; line-height:1.1;">
                Transforming the Apparel Industry with <span class="gradient-text">Digital Evolution</span>
            </h1>
            <p style="font-size:1.2rem; color:var(--text-secondary); line-height:1.7;">
                Track Tech Solution is a pioneering digital solutions and industrial IoT provider built exclusively for garment and textile manufacturers. With over 15 years of ground-level shop floor experience, we bridge the gap between factory operators and executive decision makers.
            </p>
        </div>
    </div>
</section>

<!-- Company Pillars 3D Grid -->
<section style="padding: 4rem 0; position:relative;">
    <div class="container">
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;">
            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="color:var(--accent-cyan); font-size:2rem; margin-bottom:1rem;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size:1.4rem; margin-bottom:0.75rem;">Our Mission</h3>
                <p style="color:var(--text-secondary); line-height:1.7;">
                    To empower garment manufacturers worldwide to eliminate paper chits, reduce fabric scrap, prevent rework before packing, and run high-efficiency, sustainable operations through real-time intelligence.
                </p>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="color:var(--accent-blue); font-size:2rem; margin-bottom:1rem;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                </div>
                <h3 style="font-size:1.4rem; margin-bottom:0.75rem;">Our Global Scale</h3>
                <p style="color:var(--text-secondary); line-height:1.7;">
                    Managing over 1,000+ active production lines across 40+ premier factories in India, Bangladesh, Sri Lanka, and Southeast Asia, inspecting more than 10 million garment pieces monthly.
                </p>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="color:var(--accent-purple); font-size:2rem; margin-bottom:1rem;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3 style="font-size:1.4rem; margin-bottom:0.75rem;">Proprietary Technology</h3>
                <p style="color:var(--text-secondary); line-height:1.7;">
                    Custom-engineered industrial edge terminals, optical machine sensors, and cloud telemetry algorithms designed from scratch to withstand high-dust, high-humidity textile environments.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Company History & Milestones Timeline -->
<section style="padding: 5rem 0; background:rgba(10,15,30,0.5); border-top:1px solid rgba(255,255,255,0.04); border-bottom:1px solid rgba(255,255,255,0.04);">
    <div class="container">
        <div class="section-header-3d">
            <span class="section-tag">Evolution Timeline</span>
            <h2 class="section-title">15+ Years of <span class="gradient-text">Continuous Innovation</span></h2>
            <p class="section-subtitle">How Track Tech Solution grew from a textile consultancy into a global technology powerhouse.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:2rem;">
            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="font-size:2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-cyan); margin-bottom:0.5rem;">2011</div>
                <h4 style="font-size:1.15rem; margin-bottom:0.5rem;">The Foundation</h4>
                <p style="font-size:0.875rem; color:var(--text-muted); line-height:1.6;">Founded in Bangalore with a mission to eliminate manual paper bundles and implement barcode tracking on shop floors.</p>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="font-size:2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-blue); margin-bottom:0.5rem;">2016</div>
                <h4 style="font-size:1.15rem; margin-bottom:0.5rem;">Launch of Trakwel PTS</h4>
                <p style="font-size:0.875rem; color:var(--text-muted); line-height:1.6;">Introduced real-time line balancing (Yamazumi) and deployed across 200+ sewing lines in major export houses.</p>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="font-size:2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-purple); margin-bottom:0.5rem;">2021</div>
                <h4 style="font-size:1.15rem; margin-bottom:0.5rem;">AI Quality & IoT Hardware</h4>
                <p style="font-size:0.875rem; color:var(--text-muted); line-height:1.6;">Launched proprietary IP65 industrial tablets, optical machine sensors, and AI-powered 4-point defect heatmaps.</p>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="font-size:2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-emerald); margin-bottom:0.5rem;">Today</div>
                <h4 style="font-size:1.15rem; margin-bottom:0.5rem;">Global Digital Twin MES</h4>
                <p style="font-size:0.875rem; color:var(--text-muted); line-height:1.6;">Powering over 1,000 active lines with full fabric-to-ship digital twin integration, OEE analytics, and predictive planning.</p>
            </div>
        </div>
    </div>
</section>

<!-- Global Office Locations -->
<section style="padding: 5rem 0 7rem;">
    <div class="container">
        <div class="section-header-3d">
            <span class="section-tag">Global Presence</span>
            <h2 class="section-title">Where We <span class="gradient-text">Operate</span></h2>
            <p class="section-subtitle">Strategically located in the world's most vital textile manufacturing hubs.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:2rem;">
            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="display:inline-block; padding:0.35rem 0.8rem; background:rgba(0,240,255,0.1); border-radius:var(--radius-full); color:var(--accent-cyan); font-size:0.8rem; font-weight:700; text-transform:uppercase; margin-bottom:1rem;">
                    Global Headquarters
                </div>
                <h3 style="font-size:1.35rem; margin-bottom:0.5rem;">Bangalore, India</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6; margin-bottom:1.5rem;">
                    364, 10/5 Silicon Town, Electronic City Phase 1, Bangalore, Karnataka 560100
                </p>
                <div style="color:var(--text-muted); font-size:0.85rem;">
                    R&D Engineering Center · Hardware Labs · Executive Management
                </div>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="display:inline-block; padding:0.35rem 0.8rem; background:rgba(59,130,246,0.1); border-radius:var(--radius-full); color:var(--accent-blue); font-size:0.8rem; font-weight:700; text-transform:uppercase; margin-bottom:1rem;">
                    Textile Engineering Hub
                </div>
                <h3 style="font-size:1.35rem; margin-bottom:0.5rem;">Tirupur, Tamil Nadu</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6; margin-bottom:1.5rem;">
                    Knitwear Tech Zone, Tirupur, Tamil Nadu 641602
                </p>
                <div style="color:var(--text-muted); font-size:0.85rem;">
                    Regional Field Engineering · 24/7 Hardware Support · Training Academy
                </div>
            </div>

            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="display:inline-block; padding:0.35rem 0.8rem; background:rgba(16,185,129,0.1); border-radius:var(--radius-full); color:var(--accent-emerald); font-size:0.8rem; font-weight:700; text-transform:uppercase; margin-bottom:1rem;">
                    International Hub
                </div>
                <h3 style="font-size:1.35rem; margin-bottom:0.5rem;">Dhaka, Bangladesh</h3>
                <p style="color:var(--text-secondary); font-size:0.95rem; line-height:1.6; margin-bottom:1.5rem;">
                    Gulshan Commercial Zone, Dhaka 1212
                </p>
                <div style="color:var(--text-muted); font-size:0.85rem;">
                    Large-Scale Export House Support · Multi-Plant Deployments
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
