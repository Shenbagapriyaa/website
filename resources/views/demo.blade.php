@extends('layouts.app')

@section('title', 'Schedule Live 3D Demo & Factory Twin - Track Tech Solution')

@section('meta_description', 'Book an interactive 3D demonstration of Track Tech Solution tailored to your garment factory lines, machinery, and quality requirements.')

@section('content')

<!-- Demo Hero -->
<section style="padding: 4rem 0 3rem; position:relative;">
    <div class="container">
        <div style="max-width:800px; margin:0 auto; text-align:center;">
            <span class="section-tag">Interactive Factory Twin</span>
            <h1 style="font-size:clamp(2.5rem, 5vw, 3.8rem); font-weight:800; margin:1rem 0 1.25rem; line-height:1.1;">
                Experience Track Tech in <span class="gradient-text">Real-Time 3D</span>
            </h1>
            <p style="font-size:1.15rem; color:var(--text-secondary); line-height:1.7;">
                See how our digital platform transforms your fabric warehouse, spreading tables, sewing lines, and quality stations into a synchronized smart factory.
            </p>
        </div>
    </div>
</section>

<!-- Demo Interactive Experience & Booking Form -->
<section style="padding: 2rem 0 6rem; position:relative;">
    <div class="container">
        <div style="display:grid; grid-template-columns:1.1fr 0.9fr; gap:3rem; align-items:start;">

            <!-- Left: Virtual Digital Twin Preview HUD -->
            <div>
                <div class="card-3d" style="padding:2rem; margin-bottom:2rem;">
                    <div class="card-3d-glare"></div>
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
                        <div>
                            <span class="live-pulse-dot" style="display:inline-block; margin-right:8px;"></span>
                            <strong style="color:#fff; font-size:1.1rem;">Virtual Floor Telemetry Simulation</strong>
                        </div>
                        <span style="font-size:0.75rem; color:var(--accent-cyan); background:rgba(0,240,255,0.1); padding:0.25rem 0.6rem; border-radius:var(--radius-full); font-weight:700;">
                            LIVE REPLICA
                        </span>
                    </div>

                    <!-- Simulated Line Status Blocks -->
                    <div style="display:flex; flex-direction:column; gap:1rem;">
                        <!-- Line 01 -->
                        <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08); border-radius:var(--radius-sm); padding:1rem; display:flex; justify-content:space-between; align-items:center;">
                            <div>
                                <div style="font-weight:700; color:#fff; font-size:0.95rem;">Sewing Line #01 (Polo Shirts)</div>
                                <div style="font-size:0.8rem; color:var(--text-muted);">Operator Count: 44 · Target: 120 pcs/hr</div>
                            </div>
                            <div style="text-align:right;">
                                <div style="font-size:1.2rem; font-weight:800; color:var(--accent-emerald);">94.2% Eff</div>
                                <div style="font-size:0.75rem; color:var(--accent-emerald);">● Optimal Flow</div>
                            </div>
                        </div>

                        <!-- Line 02 -->
                        <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08); border-radius:var(--radius-sm); padding:1rem; display:flex; justify-content:space-between; align-items:center;">
                            <div>
                                <div style="font-weight:700; color:#fff; font-size:0.95rem;">Sewing Line #02 (Denim Jacket)</div>
                                <div style="font-size:0.8rem; color:var(--text-muted);">Operator Count: 52 · Target: 85 pcs/hr</div>
                            </div>
                            <div style="text-align:right;">
                                <div style="font-size:1.2rem; font-weight:800; color:var(--accent-amber);">78.6% Eff</div>
                                <div style="font-size:0.75rem; color:var(--accent-amber);">▲ Rebalance Needed</div>
                            </div>
                        </div>

                        <!-- Line 03 -->
                        <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08); border-radius:var(--radius-sm); padding:1rem; display:flex; justify-content:space-between; align-items:center;">
                            <div>
                                <div style="font-weight:700; color:#fff; font-size:0.95rem;">Cutting Room Supermarket</div>
                                <div style="font-size:0.8rem; color:var(--text-muted);">Auto-Spread Table #03 · Lay Count: 80 Plies</div>
                            </div>
                            <div style="text-align:right;">
                                <div style="font-size:1.2rem; font-weight:800; color:var(--accent-cyan);">98.8% Yield</div>
                                <div style="font-size:0.75rem; color:var(--accent-cyan);">● Tagged & Staged</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- What you will see in the live session -->
                <div class="card-3d" style="padding:2rem;">
                    <div class="card-3d-glare"></div>
                    <h3 style="font-size:1.25rem; margin-bottom:1rem;">What You Will Experience in the Live Demo:</h3>
                    <ul style="list-style:none; display:flex; flex-direction:column; gap:0.75rem;">
                        <li style="display:flex; align-items:flex-start; gap:0.65rem; color:var(--text-secondary); font-size:0.95rem;">
                            <span style="color:var(--accent-cyan); font-weight:bold;">✓</span>
                            <span>Live tablet interface walkthrough showing how floor operators scan bundles in &lt; 1 second.</span>
                        </li>
                        <li style="display:flex; align-items:flex-start; gap:0.65rem; color:var(--text-secondary); font-size:0.95rem;">
                            <span style="color:var(--accent-cyan); font-weight:bold;">✓</span>
                            <span>Executive dashboard overview showing multi-plant efficiency, WIP value, and bottleneck alerts.</span>
                        </li>
                        <li style="display:flex; align-items:flex-start; gap:0.65rem; color:var(--text-secondary); font-size:0.95rem;">
                            <span style="color:var(--accent-cyan); font-weight:bold;">✓</span>
                            <span>AI Quality heatmap demonstration showing how defects are flagged to prevent bulk packing errors.</span>
                        </li>
                        <li style="display:flex; align-items:flex-start; gap:0.65rem; color:var(--text-secondary); font-size:0.95rem;">
                            <span style="color:var(--accent-cyan); font-weight:bold;">✓</span>
                            <span>Hardware compatibility check for your existing sewing machines (Juki, Brother, Jack, Pegasus).</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right: Booking Form -->
            <div class="card-3d" style="border-color:var(--border-glow); box-shadow:var(--shadow-3d); padding:2.5rem;">
                <div class="card-3d-glare"></div>
                <h3 style="font-size:1.6rem; margin-bottom:0.5rem;">Book Your <span class="gradient-text">Live 1-on-1 Demo</span></h3>
                <p style="color:var(--text-secondary); font-size:0.9rem; margin-bottom:2rem;">
                    Select your preferred time and tell us about your production lines.
                </p>

                <form action="{{ route('contact.submit') }}" method="POST" class="ajax-inquiry-form">
                    @csrf
                    <input type="hidden" name="type" value="demo">

                    <div class="form-group">
                        <label class="form-label">Full Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="e.g. Ramesh Kumar" required>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div class="form-group">
                            <label class="form-label">Work Email *</label>
                            <input type="email" name="email" class="form-control" placeholder="name@company.com" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="text" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div class="form-group">
                            <label class="form-label">Factory / Company</label>
                            <input type="text" name="company" class="form-control" placeholder="e.g. Shahi / Arvind Unit" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Number of Lines</label>
                            <input type="number" name="factory_lines" class="form-control" placeholder="e.g. 24" min="1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Primary Module You Want to See</label>
                        <select name="solution_interest" class="form-control" style="background:#0f172a;">
                            <option value="Complete Factory Demo">Full End-to-End Smart Factory Demo</option>
                            <option value="Production Tracking">Production Tracking & Line Balancing (PTS)</option>
                            <option value="Quality Control">AI Quality Control & 4-Point Audits (QMS)</option>
                            <option value="Fabric Inventory & Cutting">Fabric Warehouse & Cutting Room Suite</option>
                            <option value="Machine Maintenance">Machine Maintenance & OEE Suite</option>
                            <option value="Industrial IoT Hardware">Industrial IoT Terminals & Sensors</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Specific Challenges or Notes</label>
                        <textarea name="message" class="form-control" placeholder="Mention any specific ERP sync or machine types you use..." rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn-3d btn-primary-3d" style="width:100%; padding:0.9rem; font-size:1rem; margin-top:0.5rem;">
                        <span>Confirm Demo Reservation</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
