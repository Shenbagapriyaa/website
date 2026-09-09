@extends('layouts.app')

@section('title', $product['title'] . ' - Track Tech Solution | Next-Gen Apparel MES')

@section('meta_description', $product['short_description'])

@section('content')

<!-- Product Hero -->
<section style="padding: 4rem 0 3rem; position:relative; overflow:hidden;">
    <div class="container">
        <div style="display:grid; grid-template-columns:1.2fr 0.8fr; gap:3rem; align-items:center;">
            <div>
                <span class="section-tag" style="color:{{ $product['accent'] }}; background:{{ $product['accent'] }}15; border:1px solid {{ $product['accent'] }}30;">
                    {{ $product['badge'] }}
                </span>
                
                <h1 style="font-size:clamp(2.25rem, 4.5vw, 3.5rem); font-weight:800; margin:1rem 0 1rem; line-height:1.1;">
                    {{ $product['title'] }}
                </h1>
                
                <p style="font-size:1.25rem; color:var(--text-accent); margin-bottom:1rem; font-weight:600;">
                    {{ $product['tagline'] }}
                </p>

                <p style="font-size:1.05rem; color:var(--text-secondary); line-height:1.7; margin-bottom:2rem;">
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

            <!-- Product Hero Stats HUD Box -->
            <div class="card-3d" style="border-color:{{ $product['accent'] }}40; box-shadow:0 0 30px {{ $product['accent'] }}20;">
                <div class="card-3d-glare"></div>
                <div style="font-size:0.85rem; color:var(--text-muted); text-transform:uppercase; font-weight:700; letter-spacing:0.1em; margin-bottom:1.5rem;">
                    Performance Benchmark Metrics
                </div>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.25rem;">
                    @foreach($product['hero_stats'] as $stat)
                    <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.06); border-radius:var(--radius-sm); padding:1rem;">
                        <div style="font-size:1.8rem; font-weight:800; font-family:var(--font-display); color:{{ $product['accent'] }}; line-height:1; margin-bottom:0.35rem;">
                            {{ $stat['val'] }}
                        </div>
                        <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">
                            {{ $stat['label'] }}
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Client Quote Snippet -->
                <div style="margin-top:1.5rem; padding-top:1.25rem; border-top:1px solid rgba(255,255,255,0.08);">
                    <p style="font-size:0.875rem; color:var(--text-secondary); font-style:italic; line-height:1.5; margin-bottom:0.5rem;">
                        "{{ $product['client_quote'] }}"
                    </p>
                    <div style="font-size:0.75rem; color:{{ $product['accent'] }}; font-weight:700;">
                        — {{ $product['client_author'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Features Grid -->
<section style="padding: 5rem 0; background:rgba(10,15,30,0.5); border-top:1px solid rgba(255,255,255,0.04); border-bottom:1px solid rgba(255,255,255,0.04);">
    <div class="container">
        <div class="section-header-3d">
            <span class="section-tag">Key Capabilities</span>
            <h2 class="section-title">Technical <span class="gradient-text">Features</span></h2>
            <p class="section-subtitle">Engineered to eliminate manufacturing friction and deliver real-time control.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:2rem;">
            @foreach($product['features'] as $idx => $feature)
            <div class="card-3d">
                <div class="card-3d-glare"></div>
                <div style="font-size:0.8rem; font-weight:800; color:{{ $product['accent'] }}; text-transform:uppercase; margin-bottom:0.75rem;">
                    Feature #0{{ $idx + 1 }}
                </div>
                <h3 style="font-size:1.25rem; margin-bottom:0.75rem;">{{ $feature['title'] }}</h3>
                <p style="font-size:0.925rem; color:var(--text-secondary); line-height:1.6;">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Operational Workflow Steps -->
<section style="padding: 5rem 0;">
    <div class="container">
        <div class="section-header-3d">
            <span class="section-tag">Implementation Process</span>
            <h2 class="section-title">How It <span class="gradient-text">Operates</span> on the Floor</h2>
            <p class="section-subtitle">Seamless 4-step deployment cycle for instant shop floor adoption.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:1.5rem;">
            @foreach($product['workflow_steps'] as $step)
            <div class="card-3d" style="text-align:center;">
                <div class="card-3d-glare"></div>
                <div style="width:50px; height:50px; border-radius:50%; background:{{ $product['accent'] }}15; border:2px solid {{ $product['accent'] }}; display:flex; align-items:center; justify-content:center; margin:0 auto 1rem; font-size:1.1rem; font-weight:800; color:#fff;">
                    {{ $step['step'] }}
                </div>
                <h4 style="font-size:1.1rem; margin-bottom:0.5rem;">{{ $step['title'] }}</h4>
                <p style="font-size:0.85rem; color:var(--text-muted); line-height:1.5;">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Navigation to Other Solutions -->
<section style="padding: 3rem 0 6rem; border-top:1px solid rgba(255,255,255,0.05);">
    <div class="container">
        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1.5rem; margin-bottom:2rem;">
            <h3 style="font-size:1.5rem;">Explore Other <span class="gradient-text">Track Tech Modules</span></h3>
            <a href="{{ route('products.index') }}" class="card-link-arrow">View All 6 Solutions →</a>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:1.5rem;">
            @foreach($solutions as $otherKey => $otherItem)
            @if($otherKey !== $product['slug'])
            <a href="{{ route('products.show', $otherItem['slug']) }}" style="text-decoration:none; color:inherit;">
                <div class="card-3d" style="padding:1.5rem;">
                    <div class="card-3d-glare"></div>
                    <div style="font-size:0.75rem; color:{{ $otherItem['accent'] }}; text-transform:uppercase; font-weight:700; margin-bottom:0.35rem;">
                        {{ $otherItem['badge'] }}
                    </div>
                    <h4 style="font-size:1.1rem; margin-bottom:0.5rem;">{{ $otherItem['title'] }}</h4>
                    <p style="font-size:0.8rem; color:var(--text-muted);">{{ Str::limit($otherItem['short_description'], 80) }}</p>
                </div>
            </a>
            @endif
            @endforeach
        </div>
    </div>
</section>

@endsection
