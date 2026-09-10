@extends('layouts.app')

@section('title', 'Contact Us - Track Tech Solution | Connect with Textile Digitisation Experts')

@section('meta_description', 'Contact Track Tech Solution Bangalore HQ or Tirupur & Dhaka hubs for garment factory digitisation, real-time MES implementation, and IoT edge hardware.')

@section('content')

<!-- Contact Hero -->
<section style="padding: 4.5rem 0 3rem; position:relative;"
         data-bg="#f8fafc"
         data-glow-1="rgba(56, 189, 248, 0.25)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div style="max-width:800px; margin:0 auto; text-align:center;" class="reveal-on-scroll">
            <span class="section-tag">Let's Connect</span>
            <h1 class="hero-title" style="margin:1rem 0 1.25rem;">
                Have a Factory Project? <span class="gradient-text">Let's Build It.</span>
            </h1>
            <p style="font-size:1.18rem; color:var(--text-secondary); line-height:1.75;">
                Reach out to our textile engineering consultants for plant assessments, pilot deployments, hardware inquiries, or custom MES implementations.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Hubs Section -->
<section style="padding: 2rem 0 6rem; position:relative;"
         data-bg="#fdf4ff"
         data-glow-1="rgba(236, 72, 153, 0.22)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div style="display:grid; grid-template-columns:1.1fr 0.9fr; gap:3.5rem; align-items:start;">

            <!-- Left: Contact Form -->
            <div class="card-3d reveal-fade-left" style="padding:2.75rem;">
                <div class="card-3d-glare"></div>
                <h3 style="font-size:1.65rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">Send Us a <span class="gradient-text">Direct Message</span></h3>
                <p style="color:var(--text-muted); font-size:0.94rem; margin-bottom:2rem;">
                    Our technical team responds within 24 hours with actionable engineering insights.
                </p>

                <form action="{{ route('contact.submit') }}" method="POST" style="display:flex; flex-direction:column; gap:1.35rem;">
                    @csrf
                    <input type="hidden" name="type" value="contact">

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div>
                            <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Your Name *</label>
                            <input type="text" name="name" required placeholder="e.g. Anand Sharma" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                        </div>
                        <div>
                            <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Phone Number *</label>
                            <input type="tel" name="phone" required placeholder="+91 96506 13666" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div>
                            <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Work Email *</label>
                            <input type="email" name="email" required placeholder="anand@textiles.com" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                        </div>
                        <div>
                            <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Company / Mill Name</label>
                            <input type="text" name="company" placeholder="e.g. Orient Craft Ltd" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                        </div>
                    </div>

                    <div>
                        <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Topic of Interest</label>
                        <select name="subject" style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none;">
                            <option value="Production Tracking (PTS)">Real-time Sewing Line Tracking (PTS)</option>
                            <option value="AI Quality Control (QMS)">AI Quality Management (QMS)</option>
                            <option value="Fabric Inventory (FIM)">Fabric Roll Inventory & Shrinkage (FIM)</option>
                            <option value="Cutting Room Digitisation">Cutting Room Automation & Barcode</option>
                            <option value="Industrial IoT Hardware">Rugged Industrial Tablets & Hardware</option>
                            <option value="General Consultation">General Factory Assessment</option>
                        </select>
                    </div>

                    <div>
                        <label style="display:block; font-size:0.88rem; font-weight:700; color:var(--text-heading); margin-bottom:0.4rem;">Factory Requirements / Message *</label>
                        <textarea name="message" rows="4" required placeholder="Please describe your factory location, number of lines, current bottlenecks, or specific timeline..." style="width:100%; padding:0.9rem 1.2rem; background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); font-size:0.95rem; color:var(--text-heading); outline:none; resize:vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn-3d btn-primary-3d" style="width:100%; padding:1.05rem; font-size:1.08rem;">
                        <span>Submit Inquiry</span>
                    </button>
                </form>
            </div>

            <!-- Right: Global Hubs & Hotline -->
            <div style="display:flex; flex-direction:column; gap:1.5rem;" class="reveal-fade-right">
                <!-- Direct Hotline Box -->
                <div class="card-gradient-border">
                    <div class="card-gradient-inner" style="padding:2.25rem;">
                        <div style="display:flex; align-items:center; gap:0.85rem; margin-bottom:1rem;">
                            <div style="width:44px; height:44px; border-radius:14px; background:var(--brand-sky-bg); color:var(--brand-sky); display:flex; align-items:center; justify-content:center;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <div>
                                <div style="font-size:0.82rem; color:var(--text-muted); font-weight:700; text-transform:uppercase;">Immediate Phone Support</div>
                                <div style="font-size:1.35rem; font-weight:800; color:var(--brand-sky);">+91 96506 13666</div>
                            </div>
                        </div>
                        <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65;">
                            Direct line to our senior solution architects for rapid deployment scoping and technical inquiries.
                        </p>
                    </div>
                </div>

                <!-- HQ Bangalore Card -->
                <div class="card-3d" style="padding:1.85rem;">
                    <div class="card-3d-glare"></div>
                    <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.75rem;">
                        <span style="font-size:1.3rem;">🏢</span>
                        <h4 style="font-size:1.2rem; font-weight:800; color:var(--text-heading);">Bangalore Headquarters</h4>
                    </div>
                    <p style="font-size:0.92rem; color:var(--text-muted); line-height:1.65; margin-bottom:0.5rem;">
                        364, Silicon Town, Electronic City Phase 1, Bangalore, Karnataka 560100
                    </p>
                    <div style="font-size:0.88rem; color:var(--brand-sky); font-weight:700;">Global R&D & Engineering Labs</div>
                </div>

                <!-- Tirupur Hub -->
                <div class="card-3d" style="padding:1.85rem;">
                    <div class="card-3d-glare"></div>
                    <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.75rem;">
                        <span style="font-size:1.3rem;">🏭</span>
                        <h4 style="font-size:1.2rem; font-weight:800; color:var(--text-heading);">Tirupur Textile Hub</h4>
                    </div>
                    <p style="font-size:0.92rem; color:var(--text-muted); line-height:1.65; margin-bottom:0.5rem;">
                        Knitwear Support Center & Floor Deployment Field Office, Tirupur, Tamil Nadu
                    </p>
                    <div style="font-size:0.88rem; color:var(--brand-purple); font-weight:700;">On-Site Field Operations</div>
                </div>

                <!-- Dhaka Hub -->
                <div class="card-3d" style="padding:1.85rem;">
                    <div class="card-3d-glare"></div>
                    <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.75rem;">
                        <span style="font-size:1.3rem;">🌏</span>
                        <h4 style="font-size:1.2rem; font-weight:800; color:var(--text-heading);">Dhaka International Hub</h4>
                    </div>
                    <p style="font-size:0.92rem; color:var(--text-muted); line-height:1.65; margin-bottom:0.5rem;">
                        Export Garment Support & Hardware Logistics, Dhaka, Bangladesh
                    </p>
                    <div style="font-size:0.88rem; color:var(--brand-emerald); font-weight:700;">International Support Team</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
