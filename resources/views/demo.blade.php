@extends('layouts.app')

@section('title', 'Schedule Live 3D Demo & Factory Twin - Track Tech Solution')

@section('meta_description', 'Book an interactive 3D demonstration of Track Tech Solution tailored to your garment factory lines, machinery, and quality requirements.')

@section('content')

<!-- Demo Hero -->
<section style="padding: 4.5rem 0 3rem; position:relative;"
         data-bg="#f8fafc"
         data-glow-1="rgba(56, 189, 248, 0.25)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div style="max-width:800px; margin:0 auto; text-align:center;" class="reveal-on-scroll">
            <span class="section-tag">Interactive Factory Twin</span>
            <h1 class="hero-title" style="margin:1rem 0 1.25rem;">
                Experience Track Tech in <span class="gradient-text">Real-Time 3D</span>
            </h1>
            <p style="font-size:1.18rem; color:var(--text-secondary); line-height:1.75;">
                See how our digital platform transforms your fabric warehouse, spreading tables, sewing lines, and quality stations into a synchronized smart factory.
            </p>
        </div>
    </div>
</section>

<!-- Demo Interactive Experience & Booking Form -->
<section style="padding: 2rem 0 6rem; position:relative;"
         data-bg="#f0f9ff"
         data-glow-1="rgba(2, 132, 199, 0.25)"
         data-glow-2="rgba(56, 189, 248, 0.2)"
         data-glow-3="rgba(168, 85, 247, 0.18)">
    <div class="container">
        <div style="display:grid; grid-template-columns:1.1fr 0.9fr; gap:3.5rem; align-items:start;">

            <!-- Left: Virtual Digital Twin Preview HUD -->
            <div class="reveal-fade-left">
                <!-- Real-World Factory Hero Snapshot -->
                <div class="real-product-image-wrap" style="height:260px; margin-bottom:1.5rem;">
                    <img src="{{ asset('images/quality_control_real.jpg') }}" alt="Real-world garment factory digital telemetry tablet in action">
                    <div class="real-product-overlay-tag">
                        <span>● LIVE FACTORY FLOOR TELEMETRY</span>
                    </div>
                </div>

                <div class="card-3d" style="padding:2.25rem; margin-bottom:2rem;">
                    <div class="card-3d-glare"></div>
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
                        <div style="display:flex; align-items:center; gap:0.6rem;">
                            <span class="live-pulse-dot"></span>
                            <strong style="color:var(--text-heading); font-size:1.1rem;">Virtual Floor Telemetry Simulation</strong>
                        </div>
                        <span style="font-size:0.78rem; color:var(--brand-sky); background:var(--brand-sky-bg); padding:0.25rem 0.65rem; border-radius:var(--radius-full); font-weight:700;">
                            LIVE REPLICA
                        </span>
                    </div>

                    <!-- Simulated Line Status Blocks -->
                    <div style="display:flex; flex-direction:column; gap:1rem;">
                        <!-- Line 01 -->
                        <div style="background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); padding:1.2rem; display:flex; justify-content:space-between; align-items:center;">
                            <div>
                                <div style="font-weight:700; color:var(--text-heading); font-size:0.98rem;">Sewing Line #01 (Polo Shirts)</div>
                                <div style="font-size:0.82rem; color:var(--text-muted); margin-top:0.25rem;">Operator Count: 44 · Target: 120 pcs/hr</div>
                            </div>
                            <div style="text-align:right;">
                                <div style="font-size:1.25rem; font-weight:800; color:var(--brand-emerald);">94.2% Eff</div>
                                <div style="font-size:0.78rem; color:var(--brand-emerald); font-weight:700;">● Optimal Flow</div>
                            </div>
                        </div>

                        <!-- Line 02 -->
                        <div style="background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); padding:1.2rem; display:flex; justify-content:space-between; align-items:center;">
                            <div>
                                <div style="font-weight:700; color:var(--text-heading); font-size:0.98rem;">Sewing Line #02 (Denim Jacket)</div>
                                <div style="font-size:0.82rem; color:var(--text-muted); margin-top:0.25rem;">Operator Count: 52 · Target: 85 pcs/hr</div>
                            </div>
                            <div style="text-align:right;">
                                <div style="font-size:1.25rem; font-weight:800; color:var(--brand-amber);">78.6% Eff</div>
                                <div style="font-size:0.78rem; color:var(--brand-amber); font-weight:700;">▲ Rebalance Needed</div>
                            </div>
                        </div>

                        <!-- Line 03 -->
                        <div style="background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); padding:1.2rem; display:flex; justify-content:space-between; align-items:center;">
                            <div>
                                <div style="font-weight:700; color:var(--text-heading); font-size:0.98rem;">Cutting Room Supermarket</div>
                                <div style="font-size:0.82rem; color:var(--text-muted); margin-top:0.25rem;">Auto-Spread Table #03 · Lay Count: 80 Plies</div>
                            </div>
                            <div style="text-align:right;">
                                <div style="font-size:1.25rem; font-weight:800; color:var(--brand-sky);">98.8% Yield</div>
                                <div style="font-size:0.78rem; color:var(--brand-sky); font-weight:700;">● Tagged & Staged</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Live Walkthrough Points -->
                <div class="card-3d" style="padding:2.25rem;">
                    <div class="card-3d-glare"></div>
                    <h3 style="font-size:1.3rem; font-weight:800; margin-bottom:1.1rem; color:var(--text-heading);">What You Will Experience in the Live Demo:</h3>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.9rem;">
                        <li style="display:flex; align-items:flex-start; gap:0.75rem; color:var(--text-secondary); font-size:0.94rem;">
                            <span style="color:var(--brand-sky); font-weight:bold;">✓</span>
                            <span>Live tablet interface walkthrough showing how floor operators scan bundles in &lt; 1 second.</span>
                        </li>
                        <li style="display:flex; align-items:flex-start; gap:0.75rem; color:var(--text-secondary); font-size:0.94rem;">
                            <span style="color:var(--brand-sky); font-weight:bold;">✓</span>
                            <span>Executive dashboard overview showing multi-plant efficiency, WIP value, and bottleneck alerts.</span>
                        </li>
                        <li style="display:flex; align-items:flex-start; gap:0.75rem; color:var(--text-secondary); font-size:0.94rem;">
                            <span style="color:var(--brand-sky); font-weight:bold;">✓</span>
                            <span>AI Quality heatmap demonstration showing how defects are flagged to prevent bulk packing errors.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right: Interactive Booking Form -->
            <div class="reveal-fade-right">
                <div class="card-3d" style="padding:2.75rem;">
                    <div class="card-3d-glare"></div>
                    <h2 style="font-size:1.75rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Schedule Your Private Session</h2>
                    <p style="font-size:0.94rem; color:var(--text-muted); margin-bottom:2rem;">
                        Personalized to your garment category, production line scale, and current floor setup.
                    </p>

                    <form action="{{ route('contact.submit') }}" method="POST" style="display:flex; flex-direction:column; gap:1.35rem;">
                        @csrf
                        <input type="hidden" name="inquiry_type" value="3D Demo Request">

                        <div>
                            <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Full Name *</label>
                            <input type="text" name="name" required placeholder="e.g. Rajesh Kumar" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                        </div>

                        <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                            <div>
                                <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Work Email *</label>
                                <input type="email" name="email" required placeholder="name@apparel.com" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                            </div>
                            <div>
                                <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Phone / WhatsApp *</label>
                                <input type="tel" name="phone" required placeholder="+91 98765 43210" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                            </div>
                        </div>

                        <div>
                            <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Company / Factory Name *</label>
                            <input type="text" name="company" required placeholder="e.g. Apex Garments Ltd" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                        </div>

                        <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                            <div>
                                <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Factory Location</label>
                                <input type="text" name="location" placeholder="e.g. Tirupur / Dhaka" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                            </div>
                            <div>
                                <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Number of Sewing Lines</label>
                                <select name="lines_count" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                                    <option value="1-10 Lines">1 - 10 Lines</option>
                                    <option value="11-30 Lines" selected>11 - 30 Lines</option>
                                    <option value="31-60 Lines">31 - 60 Lines</option>
                                    <option value="60+ Lines">60+ Lines (Enterprise)</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Key Focus Area</label>
                            <select name="primary_interest" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                                <option value="Production Line Tracking (PTS)">Real-time Sewing Line Tracking (PTS)</option>
                                <option value="AI Quality Control (QMS)">AI Quality Management (QMS)</option>
                                <option value="Fabric & Cutting Digitisation">Fabric Inventory & Cutting Room Digitisation</option>
                                <option value="Complete MES Platform">Full End-to-End Smart Factory Suite</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-3d btn-primary-3d" style="width:100%; padding:1.05rem; font-size:1.08rem; margin-top:0.5rem;">
                            <span>Confirm & Schedule 3D Demo</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
