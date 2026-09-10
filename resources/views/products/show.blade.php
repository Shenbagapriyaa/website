@extends('layouts.app')

@section('title', $product['title'] . ' - Track Tech Solution | Next-Gen Apparel MES')

@section('meta_description', $product['short_description'])

@section('content')

<!-- Product Hero -->
<section style="padding: 4.5rem 0 3rem; position:relative; overflow:hidden;"
         data-bg="#f8fafc"
         data-glow-1="rgba(56, 189, 248, 0.25)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div style="display:grid; grid-template-columns:1.2fr 0.8fr; gap:3.5rem; align-items:center;">
            <div class="reveal-fade-left">
                <span class="section-tag" style="color:{{ $product['accent'] }}; background:{{ $product['accent'] }}15; border:1px solid {{ $product['accent'] }}30;">
                    {{ $product['badge'] }}
                </span>
                
                <h1 style="font-size:clamp(2.3rem, 4.8vw, 3.6rem); font-weight:800; margin:1rem 0 1rem; line-height:1.1; color:var(--text-heading);">
                    {{ $product['title'] }}
                </h1>
                
                <p style="font-size:1.25rem; color:var(--brand-sky); margin-bottom:1rem; font-weight:700;">
                    {{ $product['tagline'] }}
                </p>

                <p style="font-size:1.1rem; color:var(--text-secondary); line-height:1.8; margin-bottom:2.25rem;">
                    {{ $product['full_description'] }}
                </p>

                <div style="display:flex; flex-wrap:wrap; gap:1rem;">
                    <a href="{{ route('demo') }}" class="btn-3d btn-primary-3d">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        <span>Schedule {{ $product['title'] }} Demo</span>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-3d btn-secondary-3d">
                        <span>Get Pricing & Spec Sheet</span>
                    </a>
                </div>
            </div>

            <!-- Product Real Image Showcase & HUD Box -->
            <div class="reveal-fade-right" style="display:flex; flex-direction:column; gap:1.5rem;">
                <div class="real-product-image-wrap" style="height:250px;">
                    @if($product['slug'] === 'quality-control')
                        <img src="{{ asset('images/quality_control_real.jpg') }}" alt="{{ $product['title'] }}">
                    @elseif($product['slug'] === 'fabric-inventory')
                        <img src="{{ asset('images/fabric_inventory_real.jpg') }}" alt="{{ $product['title'] }}">
                    @elseif($product['slug'] === 'cutting-room')
                        <img src="{{ asset('images/cutting_room_real.jpg') }}" alt="{{ $product['title'] }}">
                    @else
                        <img src="{{ asset('images/production_tracking_real.jpg') }}" alt="{{ $product['title'] }}">
                    @endif
                    <div class="real-product-overlay-tag">
                        <span>● FIELD DEPLOYED SYSTEM</span>
                    </div>
                </div>

                <div class="card-3d" style="border-color:{{ $product['accent'] }}40; box-shadow:0 15px 35px -5px {{ $product['accent'] }}25; padding:2rem;">
                    <div class="card-3d-glare"></div>
                    <div style="font-size:0.85rem; color:var(--text-muted); text-transform:uppercase; font-weight:700; letter-spacing:0.08em; margin-bottom:1.25rem;">
                        Performance Benchmark Metrics
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.25rem;">
                        @foreach($product['hero_stats'] as $stat)
                        <div style="background:var(--bg-subtle); border:1px solid var(--border-subtle); border-radius:var(--radius-md); padding:1.25rem;">
                            <div style="font-size:1.8rem; font-weight:800; font-family:var(--font-display); color:{{ $product['accent'] }}; line-height:1; margin-bottom:0.35rem;">
                                {{ $stat['val'] }}
                            </div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase; font-weight:700;">
                                {{ $stat['label'] }}
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Client Quote Snippet -->
                    <div style="margin-top:1.5rem; padding-top:1.25rem; border-top:1px solid var(--border-subtle);">
                        <p style="font-size:0.92rem; color:var(--text-secondary); font-style:italic; line-height:1.6; margin-bottom:0.5rem;">
                            "{{ $product['client_quote'] }}"
                        </p>
                        <div style="font-size:0.82rem; color:{{ $product['accent'] }}; font-weight:800;">
                            — {{ $product['client_author'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Features Grid -->
<section style="padding: 5rem 0; position:relative;"
         data-bg="#f0f9ff"
         data-glow-1="rgba(2, 132, 199, 0.25)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(56, 189, 248, 0.18)">
    <div class="container">
        <div class="section-header-3d reveal-on-scroll">
            <span class="section-tag">Key Capabilities</span>
            <h2 class="section-title">Technical <span class="gradient-text">Features</span></h2>
            <p class="section-subtitle">Engineered to eliminate manufacturing friction and deliver real-time control.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;">
            @foreach($product['features'] as $idx => $feature)
            <div class="card-3d reveal-on-scroll stagger-{{ ($idx % 3) + 1 }}">
                <div class="card-3d-glare"></div>
                <div style="font-size:0.8rem; font-weight:800; color:{{ $product['accent'] }}; text-transform:uppercase; margin-bottom:0.75rem;">
                    Feature #0{{ $idx + 1 }}
                </div>
                <h3 style="font-size:1.35rem; font-weight:800; margin-bottom:0.75rem; color:var(--text-heading);">{{ $feature['title'] }}</h3>
                <p style="font-size:0.94rem; color:var(--text-muted); line-height:1.7;">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Operational Workflow Steps -->
<section style="padding: 5rem 0; position:relative;"
         data-bg="#f5f3ff"
         data-glow-1="rgba(168, 85, 247, 0.25)"
         data-glow-2="rgba(99, 102, 241, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div class="section-header-3d reveal-on-scroll">
            <span class="section-tag section-tag-purple">Implementation Process</span>
            <h2 class="section-title">How It <span class="gradient-text">Operates</span> on the Floor</h2>
            <p class="section-subtitle">Seamless 4-step deployment cycle for instant shop floor adoption.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:1.75rem;">
            @foreach($product['workflow_steps'] as $idx => $step)
            <div class="card-3d reveal-on-scroll stagger-{{ $idx + 1 }}" style="text-align:center;">
                <div class="card-3d-glare"></div>
                <div style="width:54px; height:54px; border-radius:50%; background:{{ $product['accent'] }}18; border:2px solid {{ $product['accent'] }}; display:flex; align-items:center; justify-content:center; margin:0 auto 1.25rem; font-size:1.2rem; font-weight:800; color:{{ $product['accent'] }};">
                    {{ $step['step'] }}
                </div>
                <h4 style="font-size:1.2rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">{{ $step['title'] }}</h4>
                <p style="font-size:0.9rem; color:var(--text-muted); line-height:1.65;">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Navigation to Other Solutions -->
<section style="padding: 3rem 0 6rem; position:relative;"
         data-bg="#f8fafc"
         data-glow-1="rgba(56, 189, 248, 0.25)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1.5rem; margin-bottom:2.5rem;">
            <h3 style="font-size:1.65rem; font-weight:800; color:var(--text-heading);">Explore Other <span class="gradient-text">Track Tech Modules</span></h3>
            <a href="{{ route('products.index') }}" class="btn-3d btn-secondary-3d" style="padding:0.55rem 1.35rem; font-size:0.9rem;">View All 6 Solutions →</a>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:1.75rem;">
            @foreach($solutions as $otherKey => $otherItem)
            @if($otherKey !== $product['slug'])
            <a href="{{ route('products.show', $otherItem['slug']) }}" style="text-decoration:none; color:inherit;">
                <div class="card-3d" style="padding:1.85rem;">
                    <div class="card-3d-glare"></div>
                    <div style="font-size:0.75rem; color:{{ $otherItem['accent'] }}; text-transform:uppercase; font-weight:700; margin-bottom:0.4rem;">
                        {{ $otherItem['badge'] }}
                    </div>
                    <h4 style="font-size:1.2rem; font-weight:800; margin-bottom:0.5rem; color:var(--text-heading);">{{ $otherItem['title'] }}</h4>
                    <p style="font-size:0.88rem; color:var(--text-muted); line-height:1.55;">{{ Str::limit($otherItem['short_description'], 80) }}</p>
                </div>
            </a>
            @endif
            @endforeach
        </div>
    </div>
</section>

@endsection
