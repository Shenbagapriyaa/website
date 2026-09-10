@extends('layouts.app')

@section('title', 'Product Solutions Suite - Track Tech Solution | Next-Gen Apparel Manufacturing Platform')

@section('meta_description', 'Explore Track Tech Solution’s complete suite of software and IoT hardware for apparel manufacturing: QMS, PTS, Machine Maintenance, Fabric Inventory, Cutting Room, and IoT Edge Devices.')

@section('content')

<section style="padding: 4.5rem 0 2rem; position:relative;"
         data-bg="#f8fafc"
         data-glow-1="rgba(56, 189, 248, 0.25)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div class="section-header-3d reveal-on-scroll">
            <span class="section-tag">Enterprise Software & IoT Suite</span>
            <h1 class="section-title">Smart Manufacturing <span class="gradient-text">Solutions</span></h1>
            <p class="section-subtitle">
                Engineered specifically for the apparel industry to streamline operations, eliminate paper records, and maximize factory gross margins.
            </p>
        </div>

        <!-- Solutions Grid -->
        <div class="solutions-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(340px, 1fr)); gap:2.25rem; margin-top:3.5rem;">
            @foreach($solutions as $key => $item)
            <div class="card-3d-wrap reveal-on-scroll">
                <div class="card-3d" style="height:100%; display:flex; flex-direction:column; padding:2rem;">
                    <div class="card-3d-glare"></div>

                    <!-- Real Image Thumbnail Preview -->
                    <div class="real-product-image-wrap" style="height:170px; margin-bottom:1.5rem;">
                        @if($key === 'quality-control')
                            <img src="{{ asset('images/quality_control_real.jpg') }}" alt="{{ $item['title'] }}">
                        @elseif($key === 'fabric-inventory')
                            <img src="{{ asset('images/fabric_inventory_real.jpg') }}" alt="{{ $item['title'] }}">
                        @elseif($key === 'cutting-room')
                            <img src="{{ asset('images/cutting_room_real.jpg') }}" alt="{{ $item['title'] }}">
                        @else
                            <img src="{{ asset('images/production_tracking_real.jpg') }}" alt="{{ $item['title'] }}">
                        @endif
                        <div class="real-product-overlay-tag" style="top:0.6rem; left:0.6rem; font-size:0.75rem;">
                            <span>{{ $item['badge'] }}</span>
                        </div>
                    </div>

                    <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:1rem;">
                        <div>
                            <h3 style="font-size:1.35rem; font-weight:800; color:var(--text-heading); margin-bottom:0.25rem;">{{ $item['title'] }}</h3>
                            <div style="font-size:0.8rem; color:{{ $item['accent'] }}; font-weight:700;">{{ $item['tagline'] ?? '' }}</div>
                        </div>

                        <div style="text-align:right;">
                            <div style="font-size:1.35rem; font-weight:800; font-family:var(--font-display); color:{{ $item['accent'] }}; line-height:1;">{{ $item['highlight_metric'] }}</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase; font-weight:600; margin-top:0.2rem;">{{ $item['highlight_label'] }}</div>
                        </div>
                    </div>

                    <p style="font-size:0.92rem; color:var(--text-muted); line-height:1.65; margin-bottom:1.5rem;">{{ $item['short_description'] }}</p>

                    <!-- Key features preview -->
                    <ul style="list-style:none; margin-bottom:1.75rem; display:flex; flex-direction:column; gap:0.5rem;">
                        @foreach(array_slice($item['features'], 0, 3) as $feat)
                        <li style="font-size:0.88rem; color:var(--text-secondary); display:flex; align-items:center; gap:0.5rem;">
                            <span style="color:{{ $item['accent'] }}; font-weight:bold;">✓</span>
                            <span>{{ $feat['title'] }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <div style="margin-top:auto; padding-top:1.25rem; border-top:1px solid var(--border-subtle); display:flex; justify-content:space-between; align-items:center;">
                        <span style="font-size:0.78rem; color:var(--text-muted); font-weight:700; text-transform:uppercase;">Verified Module</span>
                        <a href="{{ route('products.show', $item['slug']) }}" class="btn-3d btn-secondary-3d" style="padding:0.45rem 1.15rem; font-size:0.88rem;">
                            <span>Deep Dive</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to action block -->
<section style="padding: 4rem 0 6rem; position:relative;"
         data-bg="#f0f9ff"
         data-glow-1="rgba(2, 132, 199, 0.25)"
         data-glow-2="rgba(168, 85, 247, 0.2)"
         data-glow-3="rgba(14, 165, 233, 0.18)">
    <div class="container">
        <div class="card-gradient-border reveal-on-scroll">
            <div class="card-gradient-inner" style="padding:4rem 2rem; text-align:center;">
                <h3 style="font-size:2.2rem; font-weight:800; color:var(--text-heading); margin-bottom:0.75rem;">Need a Customized Solution Package for Your Factory?</h3>
                <p style="color:var(--text-muted); max-width:640px; margin:0 auto 2.25rem; font-size:1.1rem; line-height:1.75;">
                    Our technical consultants will review your factory machinery, layout, and compliance standards to build a custom implementation roadmap.
                </p>
                <a href="{{ route('contact') }}" class="btn-3d btn-primary-3d">Schedule Technical Assessment</a>
            </div>
        </div>
    </div>
</section>

@endsection
