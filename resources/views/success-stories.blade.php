@extends('layouts.app')

@section('title', 'Client Success Stories & Case Studies - Track Tech Solution')

@section('meta_description', 'Discover how leading apparel manufacturers achieved 37% efficiency improvements, 28% fabric scrap reduction, and 99.2% quality scores with Track Tech Solution.')

@section('content')

<!-- Case Studies Hero -->
<section style="padding: 4rem 0 3rem; position:relative;">
    <div class="container">
        <div class="section-header-3d">
            <span class="section-tag">Proven Floor Impact</span>
            <h1 class="section-title">Enterprise <span class="gradient-text">Success Stories</span></h1>
            <p class="section-subtitle">
                Explore how tier-1 apparel manufacturers deployed Track Tech Solution across hundreds of production lines to drive rapid ROI.
            </p>
        </div>
    </div>
</section>

<!-- Case Studies Detail List -->
<section style="padding: 2rem 0 6rem; position:relative;">
    <div class="container">
        <div style="display:flex; flex-direction:column; gap:3rem;">

            <!-- Case Study 1: Shahi Exports -->
            <div class="card-3d" style="padding:3rem;">
                <div class="card-3d-glare"></div>
                <div style="display:grid; grid-template-columns:1.2fr 0.8fr; gap:3rem; align-items:center;">
                    <div>
                        <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:1rem;">
                            <span style="font-size:0.8rem; font-weight:800; color:var(--accent-cyan); background:rgba(0,240,255,0.1); padding:0.35rem 0.8rem; border-radius:var(--radius-full); text-transform:uppercase;">
                                Export Garment House
                            </span>
                            <span style="font-size:0.9rem; color:var(--text-muted);">60+ Sewing Lines</span>
                        </div>

                        <h2 style="font-size:1.85rem; margin-bottom:1rem;">Shahi Exports: Eliminating End-Line Rework with AI QMS</h2>
                        <p style="color:var(--text-secondary); line-height:1.7; margin-bottom:1.5rem;">
                            Facing high end-line garment rejections and delayed buyer shipments, Shahi Exports deployed Track Tech Solution’s tablet-based Quality Management System across 60 sewing lines. Inspectors logged defects directly into digital heatmaps, alerting line supervisors instantly when stitch density or seam tolerance deviated.
                        </p>

                        <div style="border-left:3px solid var(--accent-cyan); padding-left:1rem; margin-bottom:1.5rem; font-style:italic; color:var(--text-primary);">
                            "Within 90 days, our internal rejection rate plummeted from 6.8% down to 1.9%, saving thousands of operator rework hours every single week."
                        </div>

                        <div style="font-size:0.85rem; color:var(--accent-cyan); font-weight:700;">
                            — General Manager, Quality Excellence
                        </div>
                    </div>

                    <!-- Right Stats Box -->
                    <div style="background:rgba(0,240,255,0.04); border:1px solid rgba(0,240,255,0.2); border-radius:var(--radius-md); padding:2rem; display:grid; grid-template-columns:1fr 1fr; gap:1.5rem;">
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-cyan);">72%</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Reduction in Rework</div>
                        </div>
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-emerald);">99.2%</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Right First Time (RFT)</div>
                        </div>
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-blue);">2.1 Mo</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Full System Payback</div>
                        </div>
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-purple);">100%</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Paperless QC Floor</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 2: Arvind Ltd -->
            <div class="card-3d" style="padding:3rem;">
                <div class="card-3d-glare"></div>
                <div style="display:grid; grid-template-columns:1.2fr 0.8fr; gap:3rem; align-items:center;">
                    <div>
                        <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:1rem;">
                            <span style="font-size:0.8rem; font-weight:800; color:var(--accent-blue); background:rgba(59,130,246,0.1); padding:0.35rem 0.8rem; border-radius:var(--radius-full); text-transform:uppercase;">
                                Integrated Textile Conglomerate
                            </span>
                            <span style="font-size:0.9rem; color:var(--text-muted);">48 Active Sewing Lines</span>
                        </div>

                        <h2 style="font-size:1.85rem; margin-bottom:1rem;">Arvind Ltd: Real-Time Line Balancing & Operator Incentive Engine</h2>
                        <p style="color:var(--text-secondary); line-height:1.7; margin-bottom:1.5rem;">
                            Arvind Ltd integrated Trakwel PTS across 48 denim and woven sewing lines. Workstations were equipped with ruggedized RFID touch terminals. Managers gained second-by-second visibility into line bottlenecks and dynamic Yamazumi charts to redeploy operators within 10 minutes of starvation.
                        </p>

                        <div style="border-left:3px solid var(--accent-blue); padding-left:1rem; margin-bottom:1.5rem; font-style:italic; color:var(--text-primary);">
                            "Real-time operator station screens created healthy floor competition, driving our overall plant efficiency from 58% to 80% in less than four months."
                        </div>

                        <div style="font-size:0.85rem; color:var(--accent-blue); font-weight:700;">
                            — VP of Manufacturing Operations
                        </div>
                    </div>

                    <!-- Right Stats Box -->
                    <div style="background:rgba(59,130,246,0.04); border:1px solid rgba(59,130,246,0.2); border-radius:var(--radius-md); padding:2rem; display:grid; grid-template-columns:1fr 1fr; gap:1.5rem;">
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-blue);">+22%</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Overall Line Efficiency</div>
                        </div>
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-cyan);">Zero</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Manual Bundle Chits</div>
                        </div>
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-emerald);">$410K</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Annual Labor Savings</div>
                        </div>
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-purple);">10 min</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Bottleneck Rebalance</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 3: Modelama Exports -->
            <div class="card-3d" style="padding:3rem;">
                <div class="card-3d-glare"></div>
                <div style="display:grid; grid-template-columns:1.2fr 0.8fr; gap:3rem; align-items:center;">
                    <div>
                        <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:1rem;">
                            <span style="font-size:0.8rem; font-weight:800; color:var(--accent-purple); background:rgba(168,85,247,0.1); padding:0.35rem 0.8rem; border-radius:var(--radius-full); text-transform:uppercase;">
                                High-Fashion Export House
                            </span>
                            <span style="font-size:0.9rem; color:var(--text-muted);">Cutting & Sewing Units</span>
                        </div>

                        <h2 style="font-size:1.85rem; margin-bottom:1rem;">Modelama: Slashing Machine Downtime by 60% with IoT OEE</h2>
                        <p style="color:var(--text-secondary); line-height:1.7; margin-bottom:1.5rem;">
                            Unplanned machine breakdowns frequently halted production lines during peak delivery periods. By deploying Track Tech Solution’s Machine Maintenance Suite and IoT vibration sensors, mechanics received instant dispatch alerts on wearable pagers and tablets with exact spare part recommendations.
                        </p>

                        <div style="border-left:3px solid var(--accent-purple); padding-left:1rem; margin-bottom:1.5rem; font-style:italic; color:var(--text-primary);">
                            "Our Mean Time to Repair (MTTR) dropped from 42 minutes to under 12 minutes, keeping our assembly lines constantly energized."
                        </div>

                        <div style="font-size:0.85rem; color:var(--accent-purple); font-weight:700;">
                            — Head of Engineering & Assets
                        </div>
                    </div>

                    <!-- Right Stats Box -->
                    <div style="background:rgba(168,85,247,0.04); border:1px solid rgba(168,85,247,0.2); border-radius:var(--radius-md); padding:2rem; display:grid; grid-template-columns:1fr 1fr; gap:1.5rem;">
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-purple);">-60%</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Unscheduled Downtime</div>
                        </div>
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-emerald);">94.8%</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Asset Availability</div>
                        </div>
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-cyan);">12 min</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Average MTTR</div>
                        </div>
                        <div>
                            <div style="font-size:2.2rem; font-weight:800; font-family:var(--font-display); color:var(--accent-blue);">100%</div>
                            <div style="font-size:0.75rem; color:var(--text-muted); text-transform:uppercase;">Digital Spare Spends</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
