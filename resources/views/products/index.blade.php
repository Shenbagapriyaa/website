@extends('layouts.app')

@section('title', 'Product Solutions Suite - Track Tech Solution | Next-Gen Apparel Manufacturing Platform')

@section('meta_description', 'Explore Track Tech Solution’s complete suite of software and IoT hardware for apparel manufacturing: QMS, PTS, Machine Maintenance, Fabric Inventory, Cutting Room, and IoT Edge Devices.')

@section('content')

<section style="padding: 4rem 0 2rem; position:relative;">
    <div class="container">
        <div class="section-header-3d">
            <span class="section-tag">Enterprise Software & IoT Suite</span>
            <h1 class="section-title">Smart Manufacturing <span class="gradient-text">Solutions</span></h1>
            <p class="section-subtitle">
                Engineered specifically for the apparel industry to streamline operations, eliminate paper records, and maximize factory gross margins.
            </p>
        </div>

        <!-- Solutions Grid -->
        <div class="solutions-grid" style="margin-top:3rem;">
            @foreach($solutions as $key => $item)
            <div class="card-3d-wrap">
                <div class="card-3d">
                    <div class="card-3d-glare"></div>

                    <div class="solution-card-header">
                        <div class="solution-icon-wrap" style="color:{{ $item['accent'] }}; border-color:{{ $item['accent'] }}40; background:{{ $item['accent'] }}15;">
                            @if($item['icon'] == 'check-circle')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            @elseif($item['icon'] == 'activity')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                            @elseif($item['icon'] == 'cpu')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/></svg>
                            @elseif($item['icon'] == 'calendar')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            @elseif($item['icon'] == 'archive')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
                            @elseif($item['icon'] == 'scissors')
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="6" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><line x1="20" y1="4" x2="8.12" y2="15.88"/><line x1="14.47" y1="14.48" x2="20" y2="20"/><line x1="8.12" y1="8.12" x2="12" y2="12"/></svg>
                            @else
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/></svg>
                            @endif
                        </div>

                        <div class="solution-metric-badge">
                            <div class="solution-metric-num" style="color:{{ $item['accent'] }};">{{ $item['highlight_metric'] }}</div>
                            <div class="solution-metric-lbl">{{ $item['highlight_label'] }}</div>
                        </div>
                    </div>

                    <h3 class="solution-title">{{ $item['title'] }}</h3>
                    <p class="solution-desc">{{ $item['short_description'] }}</p>

                    <!-- Key features list preview -->
                    <ul style="list-style:none; margin-bottom:1.5rem; display:flex; flex-direction:column; gap:0.4rem;">
                        @foreach(array_slice($item['features'], 0, 3) as $feat)
                        <li style="font-size:0.85rem; color:var(--text-secondary); display:flex; align-items:center; gap:0.5rem;">
                            <span style="color:{{ $item['accent'] }}; font-weight:bold;">✓</span>
                            <span>{{ $feat['title'] }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <div class="solution-card-footer">
                        <span style="font-size:0.75rem; color:var(--text-muted); font-weight:700; text-transform:uppercase;">{{ $item['badge'] }}</span>
                        <a href="{{ route('products.show', $item['slug']) }}" class="card-link-arrow">
                            <span>Deep Dive</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to action block -->
<section style="padding: 4rem 0 6rem;">
    <div class="container">
        <div class="cta-box-3d" style="padding:3rem 2rem;">
            <h3>Need a Customized Solution Package for Your Factory?</h3>
            <p style="color:var(--text-secondary); max-width:600px; margin:0.75rem auto 1.5rem;">
                Our technical consultants will review your factory machinery, layout, and buyer compliance standards to build a custom implementation roadmap.
            </p>
            <a href="{{ route('contact') }}" class="btn-3d btn-primary-3d">Schedule Technical Assessment</a>
        </div>
    </div>
</section>

@endsection
