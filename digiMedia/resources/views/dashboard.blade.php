<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SincroAPI - Master Layout</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface": "#131315",
                        "on-secondary-container": "#bcbbc3",
                        "outline-variant": "#424936",
                        "secondary": "#c7c5ce",
                        "on-tertiary-container": "#345100",
                        "primary-container": "#84cc16",
                        "surface-container-lowest": "#0e0e10",
                        "surface-tint": "#91db2a",
                        "on-secondary": "#303037",
                        "on-surface-variant": "#c1cab0",
                        "primary-fixed-dim": "#91db2a",
                        "on-primary-container": "#315200",
                        "on-error-container": "#ffdad6",
                        "primary": "#9ee939",
                        "tertiary-container": "#8acb12",
                        "surface-bright": "#39393b",
                        "surface-container-low": "#1c1b1d",
                        "error": "#ffb4ab",
                        "on-primary": "#1f3700",
                        "surface-container-highest": "#353437",
                        "on-surface": "#e5e1e4",
                        "secondary-fixed-dim": "#c7c5ce",
                        "tertiary-fixed-dim": "#98da27",
                        "tertiary-fixed": "#b2f746",
                        "secondary-container": "#4b4b52",
                        "on-background": "#e5e1e4",
                        "inverse-primary": "#416900",
                        "error-container": "#93000a",
                        "on-tertiary": "#213600",
                        "status-active": "#a3e635",
                        "on-tertiary-fixed": "#121f00",
                        "on-tertiary-fixed-variant": "#334f00",
                        "on-error": "#690005",
                        "surface-container-high": "#2a2a2c",
                        "on-secondary-fixed": "#1b1b21",
                        "status-idle": "#71717a",
                        "secondary-fixed": "#e3e1ea",
                        "surface-container": "#201f22",
                        "inverse-on-surface": "#313032",
                        "outline": "#8b947d",
                        "slate-surface": "#18181b",
                        "status-error": "#ef4444",
                        "on-primary-fixed": "#102000",
                        "slate-border": "#27272a",
                        "inverse-surface": "#e5e1e4",
                        "on-primary-fixed-variant": "#304f00",
                        "background": "#131315",
                        "tertiary": "#a5e837",
                        "on-secondary-fixed-variant": "#46464d",
                        "surface-dim": "#131315",
                        "primary-fixed": "#acf847",
                        "surface-variant": "#353437"
                    },
                    borderRadius: {
                        DEFAULT: "0.125rem",
                        lg: "0.25rem",
                        xl: "0.5rem",
                        full: "0.75rem"
                    },
                    spacing: {
                        "container-max": "1440px",
                        "margin-desktop": "40px",
                        "base": "8px",
                        "margin-mobile": "16px",
                        "gutter": "24px"
                    },
                    fontFamily: {
                        "body-lg": ["Inter"],
                        "mono-data": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    fontSize: {
                        "body-lg": ["18px", { lineHeight: "1.6", fontWeight: "400" }],
                        "mono-data": ["14px", { lineHeight: "1.5", fontWeight: "400" }],
                        "label-sm": ["12px", { lineHeight: "1", letterSpacing: "0.02em", fontWeight: "500" }],
                        "headline-lg-mobile": ["32px", { lineHeight: "1.2", letterSpacing: "-0.01em", fontWeight: "700" }],
                        "label-md": ["14px", { lineHeight: "1", letterSpacing: "0.05em", fontWeight: "600" }],
                        "headline-md": ["24px", { lineHeight: "1.3", letterSpacing: "-0.01em", fontWeight: "600" }],
                        "headline-lg": ["48px", { lineHeight: "1.1", letterSpacing: "-0.02em", fontWeight: "700" }],
                        "body-md": ["16px", { lineHeight: "1.5", fontWeight: "400" }]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-surface text-on-surface min-h-screen flex flex-col font-body-md">
<!-- TopNavBar -->
<header class="bg-surface border-b border-slate-border w-full top-0 z-50">
<div class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-20">
<!-- Brand -->
<div class="flex items-center gap-4">
<span class="font-headline-md text-headline-md font-bold text-primary tracking-tight">SincroAPI x DigiMedia</span>
</div>
<!-- Navigation Links (Desktop) -->
<nav class="hidden md:flex gap-8 h-full items-end">
<a class="text-primary font-label-md text-label-md border-b-2 border-primary pb-5 hover:text-primary transition-colors duration-200" href="#">Dashboard</a>
<a class="text-on-surface-variant font-label-md text-label-md pb-5 hover:text-primary transition-colors duration-200" href="#">History</a>
<a class="text-on-surface-variant font-label-md text-label-md pb-5 hover:text-primary transition-colors duration-200" href="#">Profile</a>
</nav>
<!-- Trailing Icons -->
<div class="flex items-center gap-4">
<button class="text-on-surface hover:text-primary transition-colors duration-200 active:scale-95 transition-transform duration-150 p-2">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="text-on-surface hover:text-primary transition-colors duration-200 active:scale-95 transition-transform duration-150 p-2">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
</button>
</div>
</div>
</header>
<!-- Flash Messages Component (Blade Partial Simulator) -->
<div class="max-w-container-max mx-auto w-full px-margin-desktop pt-gutter hidden" id="flash-messages">
<!-- Success Message -->
<div class="bg-slate-surface border border-slate-border rounded p-4 flex items-start gap-3 mb-4 relative overflow-hidden group">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-status-active"></div>
<span class="material-symbols-outlined text-status-active">check_circle</span>
<div class="flex-1">
<p class="font-label-md text-label-md text-status-active mb-1">Success</p>
<p class="font-body-md text-body-md text-on-surface">API keys have been successfully rotated and deployed to the edge nodes.</p>
</div>
<button class="text-on-surface-variant hover:text-on-surface transition-colors">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<!-- Error Message -->
<div class="bg-slate-surface border border-slate-border rounded p-4 flex items-start gap-3 mb-4 relative overflow-hidden group">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-status-error"></div>
<span class="material-symbols-outlined text-status-error">error</span>
<div class="flex-1">
<p class="font-label-md text-label-md text-status-error mb-1">Connection Error</p>
<p class="font-body-md text-body-md text-on-surface">Failed to synchronize with primary ingest server. Retrying in 30 seconds.</p>
</div>
<button class="text-on-surface-variant hover:text-on-surface transition-colors">
<span class="material-symbols-outlined">close</span>
</button>
</div>
</div>
<!-- Main Content Area -->
<main class="flex-1 w-full max-w-container-max mx-auto px-margin-desktop py-gutter">
<!-- @yield('content') placeholder -->
<div class="flex flex-col gap-gutter">
<!-- Header Section -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 border-b border-slate-border pb-6">
<div>
<h1 class="font-headline-lg text-headline-lg text-on-surface mb-2">Dashboard</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Real-time media processing metrics and system health overview.</p>
</div>
<div class="flex gap-4">
<button class="bg-surface border border-slate-border text-primary font-label-md text-label-md px-4 py-2 rounded hover:bg-slate-surface transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">download</span>
                        Export Logs
                    </button>
<button class="bg-primary-container text-black font-label-md text-label-md px-4 py-2 rounded hover:bg-tertiary-container transition-colors shadow-[0_0_15px_rgba(132,204,22,0.2)] flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">add</span>
                        New Job
                    </button>
</div>
</div>
<!-- Bento Grid Stats Layout -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Stat Card 1 -->
<div class="col-span-1 md:col-span-4 bg-slate-surface border border-slate-border rounded p-6 flex flex-col justify-between">
<div class="flex justify-between items-center mb-6">
<span class="font-label-md text-label-md text-on-surface-variant">Active Streams</span>
<div class="bg-status-active/10 border border-status-active/30 rounded px-2 py-1 flex items-center gap-1">
<div class="w-1.5 h-1.5 rounded-full bg-status-active"></div>
<span class="font-label-sm text-label-sm text-status-active">Live</span>
</div>
</div>
<div>
<div class="font-headline-lg text-headline-lg text-on-surface mb-1">1,204</div>
<p class="font-mono-data text-mono-data text-primary">+12% from last hour</p>
</div>
</div>
<!-- Stat Card 2 -->
<div class="col-span-1 md:col-span-4 bg-slate-surface border border-slate-border rounded p-6 flex flex-col justify-between">
<div class="flex justify-between items-center mb-6">
<span class="font-label-md text-label-md text-on-surface-variant">Processing Latency</span>
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">speed</span>
</div>
<div>
<div class="font-headline-lg text-headline-lg text-on-surface mb-1">42<span class="font-headline-md text-headline-md text-on-surface-variant ml-1">ms</span></div>
<p class="font-mono-data text-mono-data text-on-surface-variant">Average across all nodes</p>
</div>
</div>
<!-- Stat Card 3 -->
<div class="col-span-1 md:col-span-4 bg-slate-surface border border-slate-border rounded p-6 flex flex-col justify-between">
<div class="flex justify-between items-center mb-6">
<span class="font-label-md text-label-md text-on-surface-variant">Error Rate</span>
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">warning</span>
</div>
<div>
<div class="font-headline-lg text-headline-lg text-on-surface mb-1">0.05<span class="font-headline-md text-headline-md text-on-surface-variant ml-1">%</span></div>
<p class="font-mono-data text-mono-data text-status-active">Within SLA limits</p>
</div>
</div>
</div>
<!-- Complex Data Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter mt-4">
<!-- Recent Jobs List -->
<div class="col-span-1 lg:col-span-2 bg-slate-surface border border-slate-border rounded overflow-hidden">
<div class="p-4 border-b border-slate-border flex justify-between items-center bg-surface-container-low">
<h2 class="font-label-md text-label-md text-on-surface">Recent Render Jobs</h2>
<button class="text-primary font-label-sm text-label-sm hover:underline">View All</button>
</div>
<div class="divide-y divide-slate-border">
<!-- Job Item 1 -->
<div class="p-4 flex items-center justify-between hover:bg-[#121214] transition-colors">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded bg-surface border border-slate-border flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-[20px]">movie</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface">Project_Alpha_Final_v2.mp4</p>
<p class="font-mono-data text-mono-data text-on-surface-variant mt-1">ID: JOB-8823 • 4K HEVC</p>
</div>
</div>
<div class="flex items-center gap-6">
<div class="text-right hidden sm:block">
<p class="font-label-sm text-label-sm text-on-surface">12 mins ago</p>
<p class="font-mono-data text-mono-data text-on-surface-variant">Duration: 4m 12s</p>
</div>
<div class="bg-status-active/10 border border-status-active/30 rounded px-2 py-1 flex items-center gap-1 w-[80px] justify-center">
<span class="font-label-sm text-label-sm text-status-active">Done</span>
</div>
</div>
</div>
<!-- Job Item 2 -->
<div class="p-4 flex items-center justify-between hover:bg-[#121214] transition-colors">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded bg-surface border border-slate-border flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">audio_file</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface">Interview_Stem_Master.wav</p>
<p class="font-mono-data text-mono-data text-on-surface-variant mt-1">ID: JOB-8822 • 24-bit PCM</p>
</div>
</div>
<div class="flex items-center gap-6">
<div class="text-right hidden sm:block">
<p class="font-label-sm text-label-sm text-on-surface">Just now</p>
<p class="font-mono-data text-mono-data text-on-surface-variant">Est. 2m left</p>
</div>
<div class="bg-primary/10 border border-primary/30 rounded px-2 py-1 flex items-center gap-1 w-[80px] justify-center relative overflow-hidden">
<!-- Progress bar simulation -->
<div class="absolute left-0 top-0 bottom-0 w-[65%] bg-primary/20"></div>
<span class="font-label-sm text-label-sm text-primary relative z-10">65%</span>
</div>
</div>
</div>
<!-- Job Item 3 -->
<div class="p-4 flex items-center justify-between hover:bg-[#121214] transition-colors">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded bg-surface border border-slate-border flex items-center justify-center">
<span class="material-symbols-outlined text-status-error text-[20px]">movie</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface">B_Roll_Sync_Batch_04.mxf</p>
<p class="font-mono-data text-mono-data text-on-surface-variant mt-1">ID: JOB-8821 • ProRes 422</p>
</div>
</div>
<div class="flex items-center gap-6">
<div class="text-right hidden sm:block">
<p class="font-label-sm text-label-sm text-on-surface">45 mins ago</p>
<p class="font-mono-data text-mono-data text-on-surface-variant">Failed at step 3</p>
</div>
<div class="bg-status-error/10 border border-status-error/30 rounded px-2 py-1 flex items-center gap-1 w-[80px] justify-center">
<span class="font-label-sm text-label-sm text-status-error">Failed</span>
</div>
</div>
</div>
</div>
</div>
<!-- System Status Widget -->
<div class="col-span-1 bg-slate-surface border border-slate-border rounded p-6 flex flex-col gap-6">
<div>
<h2 class="font-label-md text-label-md text-on-surface mb-4">Node Health Map</h2>
<!-- Simulated Server Rack/Node Visualization -->
<div class="grid grid-cols-4 gap-2">
<!-- Healthy Nodes -->
<div class="h-12 rounded bg-surface border border-status-active/50 flex items-center justify-center group relative cursor-pointer">
<div class="w-2 h-2 rounded-full bg-status-active shadow-[0_0_8px_rgba(163,230,53,0.8)]"></div>
</div>
<div class="h-12 rounded bg-surface border border-status-active/50 flex items-center justify-center">
<div class="w-2 h-2 rounded-full bg-status-active shadow-[0_0_8px_rgba(163,230,53,0.8)]"></div>
</div>
<div class="h-12 rounded bg-surface border border-status-active/50 flex items-center justify-center">
<div class="w-2 h-2 rounded-full bg-status-active shadow-[0_0_8px_rgba(163,230,53,0.8)]"></div>
</div>
<!-- Idle Node -->
<div class="h-12 rounded bg-surface border border-slate-border flex items-center justify-center">
<div class="w-2 h-2 rounded-full bg-status-idle"></div>
</div>
<div class="h-12 rounded bg-surface border border-status-active/50 flex items-center justify-center">
<div class="w-2 h-2 rounded-full bg-status-active shadow-[0_0_8px_rgba(163,230,53,0.8)]"></div>
</div>
<!-- Error Node -->
<div class="h-12 rounded bg-surface border border-status-error/50 flex items-center justify-center relative overflow-hidden">
<div class="w-2 h-2 rounded-full bg-status-error shadow-[0_0_8px_rgba(239,68,68,0.8)] animate-pulse"></div>
<div class="absolute inset-0 bg-status-error/5 border border-status-error"></div>
</div>
<div class="h-12 rounded bg-surface border border-status-active/50 flex items-center justify-center">
<div class="w-2 h-2 rounded-full bg-status-active shadow-[0_0_8px_rgba(163,230,53,0.8)]"></div>
</div>
<div class="h-12 rounded bg-surface border border-slate-border flex items-center justify-center">
<div class="w-2 h-2 rounded-full bg-status-idle"></div>
</div>
</div>
</div>
<!-- Environment Info -->
<div class="bg-surface rounded p-4 border border-slate-border mt-auto">
<div class="flex justify-between items-center mb-2">
<span class="font-label-sm text-label-sm text-on-surface-variant">Environment</span>
<span class="font-mono-data text-mono-data text-on-surface">Production (us-east-1)</span>
</div>
<div class="flex justify-between items-center mb-2">
<span class="font-label-sm text-label-sm text-on-surface-variant">API Version</span>
<span class="font-mono-data text-mono-data text-on-surface">v2.4.1-stable</span>
</div>
<div class="flex justify-between items-center">
<span class="font-label-sm text-label-sm text-on-surface-variant">Storage</span>
<span class="font-mono-data text-mono-data text-on-surface">64% of 100TB</span>
</div>
<!-- Storage Progress -->
<div class="w-full h-1 bg-surface-bright rounded mt-2 overflow-hidden">
<div class="h-full bg-primary" style="width: 64%"></div>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest border-t border-slate-border w-full mt-auto">
<div class="w-full px-margin-desktop py-base max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-base">
<span class="font-label-md text-label-md font-bold text-primary">© 2024 SincroAPI x DigiMedia. High-Fidelity Media Production Interface.</span>
<nav class="flex gap-6">
<a class="text-on-secondary-container font-medium font-label-sm text-label-sm hover:text-primary underline transition-all" href="#">Documentation</a>
<a class="text-on-secondary-container font-medium font-label-sm text-label-sm hover:text-primary underline transition-all" href="#">Support</a>
<a class="text-on-secondary-container font-medium font-label-sm text-label-sm hover:text-primary underline transition-all" href="#">Privacy</a>
<a class="text-on-secondary-container font-medium font-label-sm text-label-sm hover:text-primary underline transition-all" href="#">Terms</a>
</nav>
</div>
</footer>
</body></html>