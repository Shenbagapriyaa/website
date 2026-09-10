@extends('layouts.app')

@section('title', 'Client Success Stories & ROI Case Studies - Track Tech Solution')

@section('meta_description', 'Real-world case studies of apparel manufacturers achieving 30%+ efficiency gains, zero paperwork, and major fabric savings with Track Tech Solution.')

@section('content')

<!-- Case Studies Hero -->
<section style="padding: 4.5rem 0 3rem; position:relative;"
         data-bg="#f8fafc"
         data-glow-1="rgba(56, 189, 248, 0.25)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div style="max-width:850px; margin:0 auto; text-align:center;" class="reveal-on-scroll">
            <span class="section-tag">Proven Ground Impact</span>
            <h1 class="hero-title" style="margin:1rem 0 1.25rem;">
                Real Factories. Real <span class="gradient-text">Transformations.</span>
            </h1>
            <p style="font-size:1.18rem; color:var(--text-secondary); line-height:1.75;">
                Explore how leading garment export houses converted manual, paper-choked floors into synchronized digital manufacturing plants.
            </p>
        </div>
    </div>
</section>

<!-- Stories Grid with Real-World Factory Imagery -->
<section style="padding: 2rem 0 6rem; position:relative;"
         data-bg="#f0f9ff"
         data-glow-1="rgba(2, 132, 199, 0.25)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(16, 185, 129, 0.18)">
    <div class="container">
        <div style="display:flex; flex-direction:column; gap:3.5rem;">

            <!-- Case Study 1 with Real Production Image -->
            <div class="card-3d reveal-on-scroll" style="padding:3.25rem;">
                <div class="card-3d-glare"></div>
                <div style="display:grid; grid-template-columns:1.2fr 0.8fr; gap:3.5rem; align-items:center;">
                    <div>
                        <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:1rem;">
                            <span class="section-tag">Knits & Activewear Export</span>
                            <span style="font-size:0.88rem; color:var(--text-muted); font-weight:600;">Tirupur, India</span>
                        </div>
                        <h2 style="font-size:1.9rem; font-weight:800; color:var(--text-heading); margin-bottom:1rem;">
                            Scaling 64 Sewing Lines from Paper Bundles to Real-Time Cloud Telemetry
                        </h2>
                        <p style="color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                            Prior to Track Tech, this Tier-1 exporter suffered from end-of-day discrepancy reconciliation, high WIP congestion at collar-joining bottlenecks, and lost bundle chits. By installing Track Tech PTS & QMS across all 64 lines:
                        </p>
                        <div style="display:flex; flex-direction:column; gap:0.85rem;">
                            <div style="display:flex; align-items:center; gap:0.6rem; font-weight:600; color:var(--text-heading);">
                                <span style="color:var(--brand-emerald);">✔</span> <strong>23.4% throughput gain</strong> via real-time line balancing
                            </div>
                            <div style="display:flex; align-items:center; gap:0.6rem; font-weight:600; color:var(--text-heading);">
                                <span style="color:var(--brand-emerald);">✔</span> <strong>Zero missing bundles</strong> and complete piece-rate payroll automation
                            </div>
                            <div style="display:flex; align-items:center; gap:0.6rem; font-weight:600; color:var(--text-heading);">
                                <span style="color:var(--brand-emerald);">✔</span> <strong>Full ROI achieved</strong> in less than 4.2 months
                            </div>
                        </div>
                    </div>

                    <!-- Metrics & Image Pillar -->
                    <div style="display:flex; flex-direction:column; gap:1.25rem;">
                        <div class="real-product-image-wrap" style="height:200px;">
                            <img src="{{ asset('images/production_tracking_real.jpg') }}" alt="Tirupur plant live sewing lines">
                        </div>
                        <div style="background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:1.75rem; text-align:center;">
                            <div style="font-size:2.8rem; font-weight:800; font-family:var(--font-display); color:var(--brand-sky); line-height:1; margin-bottom:0.35rem;">+23.4%</div>
                            <div style="font-size:0.95rem; font-weight:700; color:var(--text-heading); margin-bottom:1.25rem;">Overall Productivity Boost</div>

                            <div style="border-top:1px solid var(--border-subtle); padding-top:1.25rem; display:flex; justify-content:space-around;">
                                <div>
                                    <div style="font-size:1.4rem; font-weight:800; color:var(--brand-emerald);">100%</div>
                                    <div style="font-size:0.75rem; color:var(--text-muted); font-weight:600;">Paperless</div>
                                </div>
                                <div>
                                    <div style="font-size:1.4rem; font-weight:800; color:var(--brand-purple);">4.2 Mo</div>
                                    <div style="font-size:0.75rem; color:var(--text-muted); font-weight:600;">Payback Period</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 2 with Real Cutting & Fabric Image -->
            <div class="card-3d reveal-on-scroll" style="padding:3.25rem;">
                <div class="card-3d-glare"></div>
                <div style="display:grid; grid-template-columns:1.2fr 0.8fr; gap:3.5rem; align-items:center;">
                    <div>
                        <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:1rem;">
                            <span class="section-tag section-tag-purple">Denim & Woven Outerwear</span>
                            <span style="font-size:0.88rem; color:var(--text-muted); font-weight:600;">Dhaka, Bangladesh</span>
                        </div>
                        <h2 style="font-size:1.9rem; font-weight:800; color:var(--text-heading); margin-bottom:1rem;">
                            Cutting Fabric Scrap and Eliminating Packing Rejection Across 82 Lines
                        </h2>
                        <p style="color:var(--text-secondary); line-height:1.75; margin-bottom:1.5rem;">
                            With high denim yardage consumption, even 1.5% scrap was costing thousands of dollars per month. Deploying Track Tech FIM, Cutting Room Digitisation, and AI QMS allowed roll-level shrinkage segregation and visual defect tagging:
                        </p>
                        <div style="display:flex; flex-direction:column; gap:0.85rem;">
                            <div style="display:flex; align-items:center; gap:0.6rem; font-weight:600; color:var(--text-heading);">
                                <span style="color:var(--brand-emerald);">✔</span> <strong>$240,000 annual fabric savings</strong> from optimized cut markers
                            </div>
                            <div style="display:flex; align-items:center; gap:0.6rem; font-weight:600; color:var(--text-heading);">
                                <span style="color:var(--brand-emerald);">✔</span> <strong>42% reduction in end-of-line AQL audit defect rate</strong>
                            </div>
                            <div style="display:flex; align-items:center; gap:0.6rem; font-weight:600; color:var(--text-heading);">
                                <span style="color:var(--brand-emerald);">✔</span> <strong>Wireless Andon response time</strong> dropped from 24 min to 3.1 min
                            </div>
                        </div>
                    </div>

                    <!-- Metrics & Image Pillar -->
                    <div style="display:flex; flex-direction:column; gap:1.25rem;">
                        <div class="real-product-image-wrap" style="height:200px;">
                            <img src="{{ asset('images/cutting_room_real.jpg') }}" alt="Dhaka automated cutting floor">
                        </div>
                        <div style="background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-lg); padding:1.75rem; text-align:center;">
                            <div style="font-size:2.8rem; font-weight:800; font-family:var(--font-display); color:var(--brand-purple); line-height:1; margin-bottom:0.35rem;">$240k+</div>
                            <div style="font-size:0.95rem; font-weight:700; color:var(--text-heading); margin-bottom:1.25rem;">Annual Fabric Scrap Savings</div>

                            <div style="border-top:1px solid var(--border-subtle); padding-top:1.25rem; display:flex; justify-content:space-around;">
                                <div>
                                    <div style="font-size:1.4rem; font-weight:800; color:var(--brand-emerald);">-42%</div>
                                    <div style="font-size:0.75rem; color:var(--text-muted); font-weight:600;">Defect Rate</div>
                                </div>
                                <div>
                                    <div style="font-size:1.4rem; font-weight:800; color:var(--brand-sky);">3.1 Min</div>
                                    <div style="font-size:0.75rem; color:var(--text-muted); font-weight:600;">Mechanic Alert</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section style="padding: 2rem 0 6rem; position:relative;"
         data-bg="#fdf4ff"
         data-glow-1="rgba(236, 72, 153, 0.22)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div class="card-gradient-border reveal-on-scroll">
            <div class="card-gradient-inner" style="padding:4rem; text-align:center;">
                <h3 style="font-size:2.2rem; font-weight:800; color:var(--text-heading); margin-bottom:1rem;">Ready to Replicate These Results in Your Factory?</h3>
                <p style="color:var(--text-muted); font-size:1.1rem; margin-bottom:2rem; max-width:620px; margin-left:auto; margin-right:auto;">
                    Schedule an exploratory session with our technical team to analyze your plant's potential ROI.
                </p>
                <a href="{{ route('demo') }}" class="btn-3d btn-primary-3d">Book Your 3D Platform Demo</a>
            </div>
        </div>
    </div>
</section>

@endsection
