<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Get all structured products & solutions data
     */
    public static function getSolutions()
    {
        return [
            'quality-control' => [
                'slug' => 'quality-control',
                'badge' => 'AI-Powered QMS',
                'title' => 'Quality Management System',
                'tagline' => 'Predict, Prevent, and Elevate Quality Across Every Stitch',
                'icon' => 'check-circle',
                'color' => 'cyan',
                'accent' => '#00f0ff',
                'highlight_metric' => '99.2%',
                'highlight_label' => 'Quality Score (RFT)',
                'defect_reduction' => '35%',
                'short_description' => 'Predict and prevent defects, automate standard 4-point checks, and ensure consistent excellence with our AI-powered Quality Control system.',
                'full_description' => 'Track Tech Solution’s Quality Management System (QMS) bridges the gap between factory floor inspectors and management. Our mobile-first inspection terminals deliver real-time defect heatmaps, root cause analytics, operator quality scores, and instant alerts to prevent mass rework before garments reach the packing stage.',
                'hero_stats' => [
                    ['val' => '35%', 'label' => 'Defect Rate Reduction'],
                    ['val' => '99.2%', 'label' => 'Right First Time (RFT)'],
                    ['val' => '10M+', 'label' => 'Pieces Checked Monthly'],
                    ['val' => '100%', 'label' => 'Digital Audit Trail']
                ],
                'features' => [
                    [
                        'title' => 'Real-Time Defect Heatmaps',
                        'desc' => 'Visual 3D garment anatomical heatmaps instantly highlight defect concentration on specific seams, lines, or operator stations.'
                    ],
                    [
                        'title' => 'Automated 4-Point & AQL Inspections',
                        'desc' => 'Digital standard compliance checklists for inline, end-line, and final audits with automated AQL pass/fail criteria.'
                    ],
                    [
                        'title' => 'Operator Skill & Quality Matrix',
                        'desc' => 'Track individual operator performance and deliver targeted training recommendations based on historical defect data.'
                    ],
                    [
                        'title' => 'Instant Rework & Rejection Alerts',
                        'desc' => 'Automated push notifications to supervisors when line defect thresholds exceed permissible limits.'
                    ],
                    [
                        'title' => 'Cloud Calibration & Global Reporting',
                        'desc' => 'Multi-factory quality comparison dashboards with exportable compliance certificates for international fashion buyers.'
                    ]
                ],
                'workflow_steps' => [
                    ['step' => '01', 'title' => 'Inline Inspection', 'desc' => 'Tablet-based checkpoint recording at critical sewing operations.'],
                    ['step' => '02', 'title' => 'End-line Verification', 'desc' => 'Comprehensive 100% garment inspection before washing & finishing.'],
                    ['step' => '03', 'title' => 'AI Defect Clustering', 'desc' => 'Algorithmic root-cause diagnosis identifying pattern or machine errors.'],
                    ['step' => '04', 'title' => 'Buyer AQL Audit', 'desc' => 'Final buyer compliance verification with digital tamper-proof reports.']
                ],
                'client_quote' => 'TTS Quality Control reduced our factory internal rejection rate from 6.8% to 1.9% within 90 days of deployment.',
                'client_author' => 'General Manager - Shahi Exports'
            ],

            'production-tracking' => [
                'slug' => 'production-tracking',
                'badge' => 'Real-Time IoT MES',
                'title' => 'Production Tracking System (Trakwel PTS)',
                'tagline' => 'Total Factory Visibility from Cut Bundle to Finished Cartons',
                'icon' => 'activity',
                'color' => 'blue',
                'accent' => '#3b82f6',
                'highlight_metric' => '37%',
                'highlight_label' => 'Efficiency Boost',
                'defect_reduction' => 'N/A',
                'short_description' => 'Gain complete real-time visibility of your production lines with granular bundle tracking, operator productivity monitoring, and bottleneck detection.',
                'full_description' => 'Trakwel PTS is an advanced apparel Manufacturing Execution System (MES). It connects cutting rooms, sewing lines, and finishing departments using RFID, Barcodes, and Smart Workstation Terminals. Eliminate paper chits and gain second-by-second insights on Line Efficiency, Work In Progress (WIP), and Individual Operator SMV performance.',
                'hero_stats' => [
                    ['val' => '+37%', 'label' => 'Efficiency Improvement'],
                    ['val' => '1000+', 'label' => 'Active Lines Monitored'],
                    ['val' => 'Zero', 'label' => 'Paper Chit Dependency'],
                    ['val' => 'Real-Time', 'label' => 'Bottleneck Diagnostics']
                ],
                'features' => [
                    [
                        'title' => 'Live Digital Line Balancing (Yamazumi)',
                        'desc' => 'Identify line starvation and pile-ups dynamically to rebalance operators and optimize takt times in minutes.'
                    ],
                    [
                        'title' => 'RFID & QR Smart Bundle Tracking',
                        'desc' => 'Scan bundle tags seamlessly at every workstation to update WIP and verify operational sequences.'
                    ],
                    [
                        'title' => 'Operator Piece-Rate & Incentive Engine',
                        'desc' => 'Automatic calculation of operator efficiency, earned minutes, and bonus incentives with real-time station display.'
                    ],
                    [
                        'title' => 'Executive Andon Dashboard',
                        'desc' => 'Live factory floor digital twin displaying target vs. actual outputs, line efficiency, and downtime across plants.'
                    ],
                    [
                        'title' => 'ERP & Payroll Two-Way Sync',
                        'desc' => 'Seamless REST API integration with SAP, Oracle, FastReact, Infor, and custom legacy enterprise software.'
                    ]
                ],
                'workflow_steps' => [
                    ['step' => '01', 'title' => 'Bundle Generation', 'desc' => 'Barcode/RFID tagging directly upon cut-piece bundling.'],
                    ['step' => '02', 'title' => 'Workstation Scan', 'desc' => 'Operator scans piece/bundle on IoT terminal upon completion.'],
                    ['step' => '03', 'title' => 'Telemetry Processing', 'desc' => 'Server calculates SMV compliance, line speed, and bottleneck indices.'],
                    ['step' => '04', 'title' => 'Andon Display', 'desc' => 'Real-time line visualizers trigger green/amber/red status floor alerts.']
                ],
                'client_quote' => 'With TTS Production Tracking, our factory managers balanced 48 sewing lines simultaneously without leaving their executive console.',
                'client_author' => 'VP Operations - Arvind Ltd'
            ],

            'machine-maintenance' => [
                'slug' => 'machine-maintenance',
                'badge' => 'Smart OEE & IoT',
                'title' => 'Machine Maintenance & OEE Suite',
                'tagline' => 'Maximize Machine Uptime with Predictive Maintenance & IoT Analytics',
                'icon' => 'cpu',
                'color' => 'purple',
                'accent' => '#a855f7',
                'highlight_metric' => '94.8%',
                'highlight_label' => 'Overall Equipment Effectiveness',
                'defect_reduction' => '42% MTTR Drop',
                'short_description' => 'Unlock the full potential of your machinery and track Overall Equipment Effectiveness (OEE) with automated breakdown alerts and predictive maintenance.',
                'full_description' => 'Downtime on sewing machines, automated cutters, and boilers costs apparel factories millions annually. Track Tech Solution’s Machine Maintenance Suite links machines with IoT edge hardware to log motor hours, detect abnormal vibrations/temperature, schedule automated PMs, and dispatch mechanics via smart technician alerts in seconds.',
                'hero_stats' => [
                    ['val' => '94.8%', 'label' => 'Peak Machine Uptime'],
                    ['val' => '-42%', 'label' => 'Mean Time to Repair (MTTR)'],
                    ['val' => '100%', 'label' => 'Digital Spare Parts Tracking'],
                    ['val' => '24/7', 'label' => 'IoT Condition Monitoring']
                ],
                'features' => [
                    [
                        'title' => 'Instant Breakdown Call System',
                        'desc' => 'Operators trigger mechanic assistance with a single button press on workstation tablets, auto-routing to nearest available technician.'
                    ],
                    [
                        'title' => 'Preventive Maintenance (PM) Scheduler',
                        'desc' => 'Automatic maintenance schedules based on active operating hours and motor cycles rather than guesswork calendars.'
                    ],
                    [
                        'title' => 'Live OEE Metrics & Availability Logs',
                        'desc' => 'Real-time tracking of Availability, Performance, and Quality factors across every sewing and cutting asset.'
                    ],
                    [
                        'title' => 'Spare Parts Inventory & Cost Tracking',
                        'desc' => 'Track needle replacements, motor belts, oils, and spares consumption with min-max reorder level automation.'
                    ],
                    [
                        'title' => 'Mechanic Productivity & Response Analytics',
                        'desc' => 'Track MTBF (Mean Time Between Failures) and MTTR (Mean Time To Repair) per technician and machine model.'
                    ]
                ],
                'workflow_steps' => [
                    ['step' => '01', 'title' => 'Sensor / Manual Alert', 'desc' => 'Machine breakdown logged automatically or via operator touch panel.'],
                    ['step' => '02', 'title' => 'Technician Dispatch', 'desc' => 'Smart allocation of mechanic with digital spare kit recommendations.'],
                    ['step' => '03', 'title' => 'Maintenance Log', 'desc' => 'Mechanic inputs root issue, replaced parts, and machine restart time.'],
                    ['step' => '04', 'title' => 'OEE Recalibration', 'desc' => 'Factory downtime ledger updates and logs equipment health score.']
                ],
                'client_quote' => 'Our machine downtime decreased by 60% in the first quarter thanks to TTS automated mechanic dispatch and PM tracking.',
                'client_author' => 'Head of Engineering - Modelama Exports'
            ],

            'production-planning' => [
                'slug' => 'production-planning',
                'badge' => 'Intelligent Scheduling',
                'title' => 'Production Planning & Capacity (PPS)',
                'tagline' => 'Synchronize Orders, Factory Capacities, and Critical Delivery Deadlines',
                'icon' => 'calendar',
                'color' => 'indigo',
                'accent' => '#6366f1',
                'highlight_metric' => '98.5%',
                'highlight_label' => 'On-Time In-Full Delivery (OTIF)',
                'defect_reduction' => 'N/A',
                'short_description' => 'Schedule orders against lines, sections, and multi-factory locations with ease using our intuitive Production Planning & Capacity simulator.',
                'full_description' => 'Handling fast-fashion short lead times requires agile capacity planning. Track Tech Solution’s PPS module provides dynamic Gantt chart scheduling, multi-factory line allocation, critical path management (TNA), and instant "what-if" scenario simulation when order quantities or delivery dates fluctuate.',
                'hero_stats' => [
                    ['val' => '98.5%', 'label' => 'On-Time Delivery Rate'],
                    ['val' => '-65%', 'label' => 'Planning Cycle Time'],
                    ['val' => '100%', 'label' => 'Line Capacity Utilization'],
                    ['val' => 'Live TNA', 'label' => 'Time & Action Milestone Tracking']
                ],
                'features' => [
                    [
                        'title' => 'Visual Multi-Line Gantt Scheduler',
                        'desc' => 'Drag-and-drop order allocation across sewing lines with automatic style learning-curve calculation.'
                    ],
                    [
                        'title' => 'Dynamic Time & Action (TNA) Engine',
                        'desc' => 'Automated milestone tracking for yarn booking, lab dips, fabric delivery, fit approvals, and shipping.'
                    ],
                    [
                        'title' => 'What-If Capacity Simulator',
                        'desc' => 'Simulate the impact of new buyer orders or order splits across multiple factory units in real time.'
                    ],
                    [
                        'title' => 'Material Readiness Verification',
                        'desc' => 'Prevent line stoppages by validating fabric and trim inventory readiness before line loading.'
                    ],
                    [
                        'title' => 'Buyer Delivery Risk Forecaster',
                        'desc' => 'AI-driven alerts for potential delay bottlenecks up to 14 days before delivery dates.'
                    ]
                ],
                'workflow_steps' => [
                    ['step' => '01', 'title' => 'Order Ingestion', 'desc' => 'Import purchase orders with size-color breakdowns and target delivery dates.'],
                    ['step' => '02', 'title' => 'Line Capacity Matching', 'desc' => 'Algorithm recommends optimal sewing lines based on skill and SMV.'],
                    ['step' => '03', 'title' => 'TNA Automation', 'desc' => 'Critical milestones populated and assigned to merchandising teams.'],
                    ['step' => '04', 'title' => 'Live Progress Sync', 'desc' => 'Actual production output updates schedule projections continuously.']
                ],
                'client_quote' => 'TTS Planning module gave our merchandising and production teams one single source of truth for all buyer commitments.',
                'client_author' => 'Senior Vice President - PDS Multinational'
            ],

            'fabric-inventory' => [
                'slug' => 'fabric-inventory',
                'badge' => 'Smart Warehouse & Yield',
                'title' => 'Fabric Inventory Management (FIM)',
                'tagline' => 'Roll-Level Precision Tracking, Shade Grouping, and Scrap Elimination',
                'icon' => 'archive',
                'color' => 'emerald',
                'accent' => '#10b981',
                'highlight_metric' => '28%',
                'highlight_label' => 'Fabric Scrap Reduction',
                'defect_reduction' => '100% Roll Traceability',
                'short_description' => 'Control the costliest component in apparel manufacturing. Digitize roll-level inventory, manage shade & shrinkage lots, and maximize fabric utilization.',
                'full_description' => 'Fabric accounts for 60-70% of a garment’s manufacturing cost. Track Tech Solution’s Fabric Inventory Management (FIM) replaces manual yardage ledgers with roll barcode tagging, width & shrinkage grouping, four-point fabric inspection logging, and automated roll allocation for optimal marker utilization.',
                'hero_stats' => [
                    ['val' => '28%', 'label' => 'Reduction in Dead Stock'],
                    ['val' => '99.8%', 'label' => 'Warehouse Yardage Accuracy'],
                    ['val' => '100%', 'label' => 'Roll-to-Garment Traceability'],
                    ['val' => 'Zero', 'label' => 'Shade Variation Mismatches']
                ],
                'features' => [
                    [
                        'title' => 'Roll-Level Barcode & RFID Tagging',
                        'desc' => 'Scan individual fabric rolls upon receipt to record exact supplier yardage, weight, and lot numbers.'
                    ],
                    [
                        'title' => 'Shade Lot & Shrinkage Grouping',
                        'desc' => 'Group rolls by shade band and shrinkage percentage to ensure identical panels are paired in cutting.'
                    ],
                    [
                        'title' => 'Digital 4-Point Fabric Inspection',
                        'desc' => 'Log fabric faults (holes, slubs, stains) per 100 sq. yards directly on tablet-mounted inspection tables.'
                    ],
                    [
                        'title' => 'End-Bit & Remnant Management',
                        'desc' => 'Track short-length rolls and optimize remnant utilization for pocket bags, waistbands, or combo panels.'
                    ],
                    [
                        'title' => 'Automated Roll Requisitioning',
                        'desc' => 'Directly feed cut-plan roll requests to the warehouse picker with precise aisle/rack coordinates.'
                    ]
                ],
                'workflow_steps' => [
                    ['step' => '01', 'title' => 'Inward Roll Tagging', 'desc' => 'QR barcode attached with supplier PO, lot, and initial yardage.'],
                    ['step' => '02', 'title' => 'Inspection & Grading', 'desc' => '4-point inspection calculates penalty points and accept/reject grade.'],
                    ['step' => '03', 'title' => 'Warehouse Bin Mapping', 'desc' => 'Location tracking across warehouse racks and climate-controlled bays.'],
                    ['step' => '04', 'title' => 'Cut-Plan Issue', 'desc' => 'Selected shade-matched rolls issued directly to spreading tables.']
                ],
                'client_quote' => 'We saved over $180,000 in fabric wastage across 6 factories within the first 6 months of using TTS Fabric Inventory.',
                'client_author' => 'Supply Chain Director - Global Garments Group'
            ],

            'cutting-room' => [
                'slug' => 'cutting-room',
                'badge' => 'Intelligent Spreading & Cut',
                'title' => 'Cutting Room Digitisation (CRD)',
                'tagline' => 'Smart Cut-Plan Optimization, Ply Tracking, and Bundle Automation',
                'icon' => 'scissors',
                'color' => 'amber',
                'accent' => '#f59e0b',
                'highlight_metric' => '4.2%',
                'highlight_label' => 'Fabric Savings per Order',
                'defect_reduction' => '100% Bundle Accuracy',
                'short_description' => 'Digitize the nerve center of your factory. Optimize cut orders, eliminate end-loss, verify ply counts, and generate digital bundle tickets seamlessly.',
                'full_description' => 'The cutting room dictates the entire sewing output. Track Tech Solution’s Cutting Room Digitisation suite connects CAD markers, automatic spreaders, manual cutting tables, and bundling stations. Real-time ply counting, end-bit optimization, and automated barcode ticket generation guarantee zero mix-ups in sewing.',
                'hero_stats' => [
                    ['val' => '4.2%', 'label' => 'Average Fabric Yardage Saved'],
                    ['val' => 'Zero', 'label' => 'Bundle Ticket Mix-Ups'],
                    ['val' => '100%', 'label' => 'Cut Piece Audit Record'],
                    ['val' => '-50%', 'label' => 'Spreading Prep Time']
                ],
                'features' => [
                    [
                        'title' => 'Dynamic Cut-Order Planner',
                        'desc' => 'Calculate the optimal combination of marker lengths, plies, and lay combinations to minimize fabric consumption.'
                    ],
                    [
                        'title' => 'Smart Spreading & Ply Sensor Sync',
                        'desc' => 'Log actual fabric tension, roll splice points, and exact ply count with sensor-enabled spreading tables.'
                    ],
                    [
                        'title' => 'Instant Digital Bundle Generation',
                        'desc' => 'Print thermal barcode/QR stickers for parts, bundles, and cut tickets with automatic numbering.'
                    ],
                    [
                        'title' => 'Cut-Piece Numbering & Fuse Audit',
                        'desc' => 'Verify bundle completeness, collar/cuff fusing quality, and piece counts before dispatch to sewing lines.'
                    ],
                    [
                        'title' => 'End-Loss & Scrap Analytics',
                        'desc' => 'Capture end-loss per lay and identify spreading operator efficiencies to reward high-yield technicians.'
                    ]
                ],
                'workflow_steps' => [
                    ['step' => '01', 'title' => 'CAD Marker Ingestion', 'desc' => 'Import marker ratios, widths, and style pattern dimensions.'],
                    ['step' => '02', 'title' => 'Spreading Execution', 'desc' => 'Track roll unrolling, tension, and defect splice positions on table.'],
                    ['step' => '03', 'title' => 'Cutting & Numbering', 'desc' => 'Auto-cut or manual blade cutting with instant barcode tagging.'],
                    ['step' => '04', 'title' => 'Supermarket Staging', 'desc' => 'Kitted bundles staged in supermarkets ready for sewing line loading.']
                ],
                'client_quote' => 'TTS Cutting Room Digitisation cut our marker creation and fabric consumption calculations from hours to seconds.',
                'client_author' => 'Cutting Room Incharge - Pearl Global'
            ],

            'iot-solutions' => [
                'slug' => 'iot-solutions',
                'badge' => 'Hardware & Edge Devices',
                'title' => 'Industrial IoT Hardware & Edge Terminals',
                'tagline' => 'Ruggedized Industrial Hardware Engineered for High-Speed Apparel Floors',
                'icon' => 'server',
                'color' => 'sky',
                'accent' => '#0284c7',
                'highlight_metric' => '99.99%',
                'highlight_label' => 'Hardware Reliability',
                'defect_reduction' => 'IP65 Rated',
                'short_description' => 'Industrial touch terminals, IoT machine counter hubs, wireless barcode scanners, and Andon smart TV displays built for demanding shop floors.',
                'full_description' => 'Consumer tablets and fragile gadgets fail rapidly under textile dust, high humidity, and vibration. Track Tech Solution designs custom-engineered industrial IoT devices, edge gateways, wireless RFID gates, and Andon broadcast displays built specifically for garment manufacturing environments.',
                'hero_stats' => [
                    ['val' => 'IP65', 'label' => 'Dust & Moisture Resistance'],
                    ['val' => '< 50ms', 'label' => 'Edge Real-Time Latency'],
                    ['val' => 'Plug & Play', 'label' => 'Universal Machine Adapter'],
                    ['val' => '10,000+', 'label' => 'Terminals Deployed']
                ],
                'features' => [
                    [
                        'title' => 'Operator Station Smart Tablets',
                        'desc' => '7-inch & 10-inch ruggedized capacitive touchscreens with vibration immunity and anti-glare screens.'
                    ],
                    [
                        'title' => 'Universal Sewing Machine Counter Sensor',
                        'desc' => 'Non-invasive optical and magnetic stitch/cycle sensors compatible with Juki, Brother, Pegasus, and Jack machines.'
                    ],
                    [
                        'title' => 'Overhead Andon TV Dashboard Gateways',
                        'desc' => 'Industrial 4K HDMI edge computers powering high-visibility shop floor dashboards with no buffering.'
                    ],
                    [
                        'title' => 'Industrial RFID & 2D Barcode Scanners',
                        'desc' => 'Ultra-fast handheld and fixed-mount scanners capable of reading creased or fabric-printed barcodes.'
                    ],
                    [
                        'title' => 'Local Edge Server & Offline Sync',
                        'desc' => 'Zero downtime guarantee: Floor devices continue logging production even if external internet drops, auto-syncing when restored.'
                    ]
                ],
                'workflow_steps' => [
                    ['step' => '01', 'title' => 'Device Mount', 'desc' => 'Magnetic/bracket industrial mounting at machine needle points or tables.'],
                    ['step' => '02', 'title' => 'Edge Calibration', 'desc' => 'Auto-detection of machine cycles and secure floor WiFi connection.'],
                    ['step' => '03', 'title' => 'Continuous Telemetry', 'desc' => 'Millisecond pulse transmission to on-prem or cloud message brokers.'],
                    ['step' => '04', 'title' => 'Centralized MDM', 'desc' => 'Remote firmware updates and health checks across thousands of devices.']
                ],
                'client_quote' => 'The ruggedness of TTS edge hardware is unmatched. In 3 years of continuous operation, we have had virtually zero hardware failures.',
                'client_author' => 'IT Infrastructure Head - Brandix Apparel'
            ]
        ];
    }

    /**
     * Home Page
     */
    public function home()
    {
        $solutions = self::getSolutions();
        return view('home', compact('solutions'));
    }

    /**
     * About Us Page
     */
    public function about()
    {
        $solutions = self::getSolutions();
        return view('about', compact('solutions'));
    }

    /**
     * Products List Page
     */
    public function productsIndex()
    {
        $solutions = self::getSolutions();
        return view('products.index', compact('solutions'));
    }

    /**
     * Single Product Details Page
     */
    public function productShow($slug)
    {
        $solutions = self::getSolutions();
        if (!isset($solutions[$slug])) {
            abort(404, 'Product Solution not found');
        }
        $product = $solutions[$slug];
        return view('products.show', compact('product', 'solutions'));
    }

    /**
     * Success Stories / Case Studies Page
     */
    public function successStories()
    {
        $solutions = self::getSolutions();
        return view('success-stories', compact('solutions'));
    }

    /**
     * Interactive 3D Demo & ROI Calculator Page
     */
    public function demo()
    {
        $solutions = self::getSolutions();
        return view('demo', compact('solutions'));
    }

    /**
     * Contact Us Page
     */
    public function contact()
    {
        $solutions = self::getSolutions();
        return view('contact', compact('solutions'));
    }
}
