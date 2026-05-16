<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SincroAPI x DigiMedia - Dashboard</title>
<!-- Google Fonts & Material Symbols -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }
    </style>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
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
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "1440px",
                        "margin-desktop": "40px",
                        "base": "8px",
                        "margin-mobile": "16px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "mono-data": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "mono-data": ["14px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "label-sm": ["12px", { "lineHeight": "1", "letterSpacing": "0.02em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "label-md": ["14px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col">
<!-- TopNavBar -->
<nav class="bg-surface dark:bg-surface border-b border-slate-border dark:border-slate-border docked full-width top-0 z-50">
<div class="flex justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto h-20">
<!-- Brand -->
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">graphic_eq</span>
<span class="font-headline-md text-headline-md font-bold text-primary dark:text-primary tracking-tight">SincroAPI x DigiMedia</span>
</div>
<!-- Navigation Links -->
<div class="hidden md:flex gap-8 h-full items-end">
<a class="text-primary font-label-md border-b-2 border-primary pb-5 hover:text-primary transition-colors duration-200" href="#">Dashboard</a>
<a class="text-on-surface-variant font-label-md pb-5 hover:text-primary transition-colors duration-200" href="#">History</a>
<a class="text-on-surface-variant font-label-md pb-5 hover:text-primary transition-colors duration-200" href="#">Profile</a>
</div>
<!-- Trailing Icons -->
<div class="flex items-center gap-4 text-primary dark:text-primary">
<button class="hover:text-primary-container transition-colors duration-200 active:scale-95 transition-transform duration-150">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="hover:text-primary-container transition-colors duration-200 active:scale-95 transition-transform duration-150">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
</button>
</div>
</div>
</nav>
<!-- Blade Layout Extension Mock -->
<!-- @extends('layouts.app') -->
<!-- @section('content') -->
<main class="flex-grow w-full px-margin-desktop max-w-container-max mx-auto py-12">
<!-- Header -->
<header class="mb-12">
<h1 class="font-headline-lg text-headline-lg text-on-surface mb-2">Your Media Dashboard</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Upload assets for processing and monitor real-time transcription status.</p>
</header>
<!-- Main Layout Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Upload Card (Left Panel) -->
<div class="lg:col-span-4 flex flex-col gap-gutter">
<div class="bg-slate-surface border border-slate-border rounded-xl p-8 flex flex-col items-center justify-center text-center shadow-sm h-full min-h-[320px]">
<div class="w-16 h-16 rounded-full bg-surface-container-high flex items-center justify-center mb-6 border border-slate-border">
<span class="material-symbols-outlined text-primary" style="font-size: 32px;">cloud_upload</span>
</div>
<h2 class="font-headline-md text-headline-md text-on-surface mb-2">Ingest Media</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-8">Drag-and-drop .mp3 and .wav files here to begin processing.</p>
<form action="{{route('media.upload')}}" method="POST">
@csrf
<input type="file" id="audio_file_input" name="audio_file" class="hidden" accept=".mp4,.mp3,.wav,.aac,.m4a" onchange="updateButtonText(this)">
<!-- Your styled button (now with an onclick trigger) -->
<button
    type="submit"
    onclick="document.getElementById('audio_file_input').click()" 
    class="bg-lime-500 hover:bg-lime-600 text-slate-950 font-semibold px-8 py-3 rounded-lg w-full active:scale-95 transition-all duration-150 flex items-center justify-center gap-2"
>
    <span class="material-symbols-outlined text-[20px]">upload_file</span>
    <span id="upload_button_text">Upload Audio File</span>
</button>
</form>
</div>
</div>
<!-- Recent Tracks Data Grid (Right Panel) -->
<div class="lg:col-span-8">
<div class="bg-slate-surface border border-slate-border rounded-xl overflow-hidden flex flex-col h-full">
<div class="p-6 border-b border-slate-border bg-surface-container-low flex justify-between items-center">
<h3 class="font-headline-md text-headline-md text-on-surface">Recent Tracks</h3>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Live Sync</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface border-b border-slate-border">
<th class="font-label-sm text-label-sm text-on-surface-variant py-4 px-6 uppercase">File Name</th>
<th class="font-label-sm text-label-sm text-on-surface-variant py-4 px-6 uppercase">Status</th>
<th class="font-label-sm text-label-sm text-on-surface-variant py-4 px-6 uppercase text-right">Actions</th>
</tr>
</thead>
<tbody class="font-mono-data text-mono-data">

<!-- Mock Row 1: Completed -->
<tr class="border-b border-slate-border hover:bg-surface-container-low transition-colors group">
<td class="py-4 px-6 text-on-surface font-medium flex items-center gap-3">
<span class="material-symbols-outlined text-on-surface-variant text-[18px]">audio_file</span>
                                        interview_raw_take_01.wav
                                    </td>
<td class="py-4 px-6">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-sm border border-primary text-primary font-label-sm text-label-sm uppercase bg-primary/10">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                            Completed
                                        </span>
</td>
<td class="py-4 px-6 text-right">
<button class="inline-flex items-center gap-2 border border-slate-border text-primary font-label-sm text-label-sm px-4 py-2 rounded hover:border-primary hover:bg-primary/5 transition-all active:scale-95">
<span class="material-symbols-outlined text-[16px]">download</span>
                                            Download .SRT
                                        </button>
</td>
</tr>
<!-- Mock Row 2: Processing -->
<tr class="border-b border-slate-border bg-[#121214] hover:bg-surface-container-low transition-colors group">
<td class="py-4 px-6 text-on-surface font-medium flex items-center gap-3">
<span class="material-symbols-outlined text-on-surface-variant text-[18px]">audio_file</span>
                                        podcast_ep_42_mixdown.mp3
                                    </td>
<td class="py-4 px-6">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-sm border border-outline text-on-surface-variant font-label-sm text-label-sm uppercase bg-surface-container">
<span class="material-symbols-outlined text-[12px] animate-spin">sync</span>
                                            Processing
                                        </span>
</td>
<td class="py-4 px-6 text-right">
<button class="inline-flex items-center gap-2 border border-slate-border text-status-idle font-label-sm text-label-sm px-4 py-2 rounded opacity-50 cursor-not-allowed" disabled="">
<span class="material-symbols-outlined text-[16px]">download</span>
                                            Download .SRT
                                        </button>
</td>
</tr>
<!-- Mock Row 3: Pending -->
<tr class="border-b border-slate-border hover:bg-surface-container-low transition-colors group">
<td class="py-4 px-6 text-on-surface font-medium flex items-center gap-3">
<span class="material-symbols-outlined text-on-surface-variant text-[18px]">audio_file</span>
                                        vocal_isolation_stem.wav
                                    </td>
<td class="py-4 px-6">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-sm border border-slate-border text-status-idle font-label-sm text-label-sm uppercase bg-surface">
<span class="w-1.5 h-1.5 rounded-full bg-status-idle"></span>
                                            Pending
                                        </span>
</td>
<td class="py-4 px-6 text-right">
<button class="inline-flex items-center gap-2 border border-slate-border text-status-idle font-label-sm text-label-sm px-4 py-2 rounded opacity-50 cursor-not-allowed" disabled="">
<span class="material-symbols-outlined text-[16px]">download</span>
                                            Download .SRT
                                        </button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</main>
<!-- @endsection -->
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-slate-border dark:border-slate-border full-width mt-auto">
<div class="w-full px-margin-desktop py-base-gutter max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-base py-6">
<div class="font-label-md text-label-md font-bold text-primary">
                SincroAPI x DigiMedia
            </div>
<div class="text-on-surface dark:text-on-surface font-body-md text-body-md text-center">
                © 2024 SincroAPI x DigiMedia. High-Fidelity Media Production Interface.
            </div>
<div class="flex gap-6">
<a class="text-on-secondary-container font-medium font-label-sm text-label-sm hover:text-primary underline transition-all" href="#">Documentation</a>
<a class="text-on-secondary-container font-medium font-label-sm text-label-sm hover:text-primary underline transition-all" href="#">Support</a>
<a class="text-on-secondary-container font-medium font-label-sm text-label-sm hover:text-primary underline transition-all" href="#">Privacy</a>
<a class="text-on-secondary-container font-medium font-label-sm text-label-sm hover:text-primary underline transition-all" href="#">Terms</a>
</div>
</div>
</footer>
<script>
function updateButtonText(input) {
    const buttonText = document.getElementById('upload_button_text');
    if (input.files && input.files[0]) {
        // Change the button text to the selected filename
        buttonText.textContent = input.files[0].name;
    }
}
</script>
</body></html>