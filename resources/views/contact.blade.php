@extends('layouts.app')

@section('title', 'Contact Us - Track Tech Solution | Connect with Textile Digitisation Experts')

@section('meta_description', 'Contact Track Tech Solution Bangalore HQ or Tirupur & Dhaka hubs for garment factory digitisation, real-time MES implementation, and IoT edge hardware.')

@section('content')

<!-- Contact Hero -->
<section style="padding: 4rem 0 3rem; position:relative;">
    <div class="container">
        <div style="max-width:800px; margin:0 auto; text-align:center;">
            <span class="section-tag">Let's Connect</span>
            <h1 style="font-size:clamp(2.5rem, 5vw, 3.8rem); font-weight:800; margin:1rem 0 1.25rem; line-height:1.1;">
                Have a Factory Project? <span class="gradient-text">Let's Build It.</span>
            </h1>
            <p style="font-size:1.15rem; color:var(--text-secondary); line-height:1.7;">
                Reach out to our textile engineering consultants for plant assessments, pilot deployments, hardware inquiries, or custom ERP integrations.
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Hubs Section -->
<section style="padding: 2rem 0 6rem; position:relative;">
    <div class="container">
        <div style="display:grid; grid-template-columns:1.1fr 0.9fr; gap:3.5rem; align-items:start;">

            <!-- Left: Contact Form -->
            <div class="card-3d" style="padding:2.5rem; border-color:var(--border-glow); box-shadow:var(--shadow-3d);">
                <div class="card-3d-glare"></div>
                <h3 style="font-size:1.6rem; margin-bottom:0.5rem;">Send Us a <span class="gradient-text">Direct Message</span></h3>
                <p style="color:var(--text-secondary); font-size:0.9rem; margin-bottom:2rem;">
                    Our technical team responds within 24 hours with actionable engineering insights.
                </p>

                <form action="{{ route('contact.submit') }}" method="POST" class="ajax-inquiry-form">
                    @csrf
                    <input type="hidden" name="type" value="contact">

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div class="form-group">
                            <label class="form-label">Your Name *</label>
                            <input type="text" name="name" class="form-control" placeholder="e.g. Anand Sharma" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="text" name="phone" class="form-control" placeholder="+91 96506 13666" required>
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                        <div class="form-group">
                            <label class="form-label">Work Email *</label>
                            <input type="email" name="email" class="form-control" placeholder="anand@textiles.com" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Company / Mill Name</label>
                            <input type="text" name="company" class="form-control" placeholder="e.g. Orient Craft Ltd">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Inquiry Subject</label>
                        <select name="solution_interest" class="form-control" style="background:#0f172a;">
                            <option value="General Consultation">General Factory Digitisation Consultation</option>
                            <option value="Pricing & Quote">System Pricing & Line Hardware Quote</option>
                            <option value="ERP Integration">ERP Integration (SAP / Oracle / FastReact / Infor)</option>
                            <option value="Hardware Terminals">Industrial IoT Hardware Terminals & Scanners</option>
                            <option value="Partnership">Channel Partnership & Global Distribution</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">How can we help your operations? *</label>
                        <textarea name="message" class="form-control" placeholder="Please describe your factory setup, current bottlenecks, or questions..." rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn-3d btn-primary-3d" style="width:100%; padding:0.9rem; font-size:1rem; margin-top:0.5rem;">
                        <span>Send Message</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </button>
                </form>
            </div>

            <!-- Right: Direct Hubs & Contact Channels -->
            <div style="display:flex; flex-direction:column; gap:1.5rem;">
                
                <!-- Hotline Card -->
                <div class="card-3d" style="padding:1.75rem; border-color:rgba(0,240,255,0.3);">
                    <div class="card-3d-glare"></div>
                    <div style="display:flex; align-items:center; gap:1rem; margin-bottom:1rem;">
                        <div style="width:48px; height:48px; border-radius:12px; background:rgba(0,240,255,0.15); display:flex; align-items:center; justify-content:center; color:var(--accent-cyan);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <div style="font-size:0.8rem; color:var(--text-muted); text-transform:uppercase; font-weight:700;">Direct Technical Hotline</div>
                            <a href="tel:+919650613666" style="font-size:1.4rem; font-weight:800; color:#fff; text-decoration:none;">+91 96506 13666</a>
                        </div>
                    </div>
                    <p style="font-size:0.85rem; color:var(--text-secondary);">
                        Available Monday to Saturday, 9:00 AM – 7:00 PM IST. Direct access to our solution architects.
                    </p>
                </div>

                <!-- Office 1: Bangalore HQ -->
                <div class="card-3d" style="padding:1.75rem;">
                    <div class="card-3d-glare"></div>
                    <div style="font-size:0.75rem; color:var(--accent-cyan); font-weight:700; text-transform:uppercase; margin-bottom:0.35rem;">
                        Global Headquarters
                    </div>
                    <h4 style="font-size:1.2rem; color:#fff; margin-bottom:0.5rem;">Bangalore Technology Center</h4>
                    <p style="font-size:0.9rem; color:var(--text-secondary); line-height:1.6;">
                        364, 10/5 Silicon Town, Electronic City Phase 1, Bangalore, Karnataka 560100, India
                    </p>
                </div>

                <!-- Office 2: Tirupur -->
                <div class="card-3d" style="padding:1.75rem;">
                    <div class="card-3d-glare"></div>
                    <div style="font-size:0.75rem; color:var(--accent-blue); font-weight:700; text-transform:uppercase; margin-bottom:0.35rem;">
                        Regional Field Office
                    </div>
                    <h4 style="font-size:1.2rem; color:#fff; margin-bottom:0.5rem;">Tirupur Textile Hub</h4>
                    <p style="font-size:0.9rem; color:var(--text-secondary); line-height:1.6;">
                        Avinashi Road, Knitwear Industrial Corridor, Tirupur, Tamil Nadu 641602, India
                    </p>
                </div>

                <!-- Office 3: Dhaka -->
                <div class="card-3d" style="padding:1.75rem;">
                    <div class="card-3d-glare"></div>
                    <div style="font-size:0.75rem; color:var(--accent-emerald); font-weight:700; text-transform:uppercase; margin-bottom:0.35rem;">
                        International Center
                    </div>
                    <h4 style="font-size:1.2rem; color:#fff; margin-bottom:0.5rem;">Dhaka Export Operations</h4>
                    <p style="font-size:0.9rem; color:var(--text-secondary); line-height:1.6;">
                        Gulshan Avenue Commercial District, Dhaka 1212, Bangladesh
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- FAQ Accordion Section -->
<section style="padding: 4rem 0 6rem; background:rgba(10,15,30,0.5); border-top:1px solid rgba(255,255,255,0.04);">
    <div class="container">
        <div class="section-header-3d">
            <span class="section-tag">Frequently Asked Questions</span>
            <h2 class="section-title">Common <span class="gradient-text">Questions</span></h2>
            <p class="section-subtitle">Everything you need to know about adopting Track Tech Solution.</p>
        </div>

        <div style="max-width:850px; margin:0 auto; display:flex; flex-direction:column; gap:1.25rem;">
            <div class="card-3d" style="padding:1.5rem;">
                <div class="card-3d-glare"></div>
                <h4 style="font-size:1.15rem; margin-bottom:0.5rem; color:#fff;">How long does it take to implement Track Tech on our factory lines?</h4>
                <p style="font-size:0.9rem; color:var(--text-secondary); line-height:1.6;">
                    A standard 20-line factory implementation takes only 5 to 7 days. Our plug-and-play IP65 edge hardware mounts onto existing sewing machines in minutes without disrupting ongoing production shifts.
                </p>
            </div>

            <div class="card-3d" style="padding:1.5rem;">
                <div class="card-3d-glare"></div>
                <h4 style="font-size:1.15rem; margin-bottom:0.5rem; color:#fff;">Does Track Tech integrate with our existing ERP software?</h4>
                <p style="font-size:0.9rem; color:var(--text-secondary); line-height:1.6;">
                    Yes. We provide bidirectional REST APIs that integrate out-of-the-box with SAP, Oracle ERP, FastReact, Infor M3, and custom in-house factory databases for purchase orders, payroll, and shipping.
                </p>
            </div>

            <div class="card-3d" style="padding:1.5rem;">
                <div class="card-3d-glare"></div>
                <h4 style="font-size:1.15rem; margin-bottom:0.5rem; color:#fff;">What happens if the factory internet connection goes down?</h4>
                <p style="font-size:0.9rem; color:var(--text-secondary); line-height:1.6;">
                    Our local edge server architecture guarantees 100% floor continuity. Operators can continue scanning pieces and running inspections offline. Once the internet connection is restored, all data automatically synchronizes with the cloud.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
