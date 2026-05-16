<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SincroAPI x DigiMedia - Registration</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed-dim": "#98da27",
                        "tertiary-fixed": "#b2f746",
                        "on-tertiary-fixed": "#121f00",
                        "on-primary-container": "#315200",
                        "on-secondary-fixed-variant": "#46464d",
                        "on-surface-variant": "#c1cab0",
                        "secondary-fixed-dim": "#c7c5ce",
                        "status-error": "#ef4444",
                        "secondary-fixed": "#e3e1ea",
                        "surface-dim": "#131315",
                        "surface-variant": "#353437",
                        "primary": "#9ee939",
                        "surface-tint": "#91db2a",
                        "slate-surface": "#18181b",
                        "on-background": "#e5e1e4",
                        "on-error-container": "#ffdad6",
                        "on-surface": "#e5e1e4",
                        "on-secondary-container": "#bcbbc3",
                        "surface-container-highest": "#353437",
                        "inverse-on-surface": "#313032",
                        "surface-container-lowest": "#0e0e10",
                        "on-secondary": "#303037",
                        "outline": "#8b947d",
                        "primary-fixed-dim": "#91db2a",
                        "tertiary": "#a5e837",
                        "on-primary": "#1f3700",
                        "status-idle": "#71717a",
                        "surface": "#131315",
                        "surface-container": "#201f22",
                        "inverse-surface": "#e5e1e4",
                        "on-primary-fixed-variant": "#304f00",
                        "on-error": "#690005",
                        "surface-container-low": "#1c1b1d",
                        "secondary-container": "#4b4b52",
                        "background": "#131315",
                        "primary-container": "#84cc16",
                        "surface-bright": "#39393b",
                        "on-tertiary": "#213600",
                        "status-active": "#a3e635",
                        "on-tertiary-fixed-variant": "#334f00",
                        "outline-variant": "#424936",
                        "surface-container-high": "#2a2a2c",
                        "slate-border": "#27272a",
                        "on-secondary-fixed": "#1b1b21",
                        "inverse-primary": "#416900",
                        "on-primary-fixed": "#102000",
                        "error-container": "#93000a",
                        "on-tertiary-container": "#345100",
                        "tertiary-container": "#8acb12",
                        "primary-fixed": "#acf847",
                        "error": "#ffb4ab",
                        "secondary": "#c7c5ce"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "margin-desktop": "40px",
                        "gutter": "24px",
                        "container-max": "1440px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "mono-data": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "label-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "headline-lg-mobile": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "mono-data": ["14px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-sm": ["12px", { "lineHeight": "1", "letterSpacing": "0.02em", "fontWeight": "500" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-md": ["14px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
          font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen flex flex-col font-body-md text-body-md selection:bg-primary-container selection:text-black">
<!-- Top Navigation suppressed for transactional page -->
<main class="flex-grow flex items-center justify-center p-margin-mobile md:p-margin-desktop">
<div class="w-full max-w-[480px]">
<!-- Brand Header -->
<div class="text-center mb-8">
<h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary tracking-tight mb-2">SincroAPI</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Initialize your high-fidelity production environment.</p>
</div>
<!-- Registration Card -->
<div class="bg-slate-surface border border-slate-border rounded-xl p-6 md:p-8 relative overflow-hidden">
<!-- Subtle glow effect top edge -->
<div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/30 to-transparent"></div>
<form action="{{route('register')}}" method="POST" class="space-y-6">
 @csrf
<!-- Grid for Form Fields -->
<div class="space-y-4">
<!-- Name Field -->
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface block" for="name">Full Name</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none" style="font-variation-settings: 'FILL' 1;">person</span>
<input class="w-full bg-surface-container-lowest border border-slate-border rounded-DEFAULT py-2.5 pl-10 pr-4 text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all font-body-md text-body-md" id="name" name="name" placeholder="Enter your name" required="" type="text"/>
</div>
</div>
<!-- Email Field -->
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface block" for="email">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none" style="font-variation-settings: 'FILL' 1;">mail</span>
<input class="w-full bg-surface-container-lowest border border-slate-border rounded-DEFAULT py-2.5 pl-10 pr-4 text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all font-body-md text-body-md" id="email" name="email" placeholder="eng@example.com" required="" type="email"/>
</div>
</div>
<!-- Password Field -->
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface block" for="password">Password</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none" style="font-variation-settings: 'FILL' 1;">lock</span>
<input class="w-full bg-surface-container-lowest border border-slate-border rounded-DEFAULT py-2.5 pl-10 pr-4 text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all font-body-md text-body-md" id="password" name="password" placeholder="••••••••" required="" type="password"/>
</div>
</div>
<!-- Confirm Password Field -->
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface block" for="password_confirmation" >Confirm Password</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none" style="font-variation-settings: 'FILL' 1;">lock_reset</span>
<input class="w-full bg-surface-container-lowest border border-slate-border rounded-DEFAULT py-2.5 pl-10 pr-4 text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all font-body-md text-body-md" id="confirm_password" name="password_confirmation" placeholder="••••••••" required="" type="password"/>
</div>
</div>
</div>
<!-- Terms Checkbox -->
<div class="flex items-start gap-3 pt-2">
<div class="flex items-center h-5">
<input class="w-4 h-4 bg-surface-container-lowest border-slate-border rounded text-primary focus:ring-primary/50 focus:ring-offset-surface-dim" id="terms" type="checkbox"/>
</div>
<div class="text-sm">
<label class="font-body-md text-body-md text-on-surface-variant" for="terms">
                                I agree to the <a class="text-primary hover:underline" href="#">Terms of Service</a> and <a class="text-primary hover:underline" href="#">Privacy Policy</a>.
                            </label>
</div>
</div>
<!-- Action Button -->
<button class="w-full bg-primary-container text-black font-label-md text-label-md py-3 px-4 rounded-DEFAULT hover:bg-primary transition-colors flex items-center justify-center gap-2 group" type="submit">
                        Create Account
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
</form>
</div>
<!-- Footer Link -->
<div class="mt-6 text-center">
<p class="font-body-md text-body-md text-on-surface-variant">
                    Already have an access token? 
                    <a class="text-primary font-label-md text-label-md hover:underline ml-1" href="#">Log in here</a>
</p>
</div>
</div>
</main>
<!-- Simple Footer -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-slate-border dark:border-slate-border w-full px-margin-desktop py-base-gutter max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-base">
<p class="font-body-md text-body-md text-on-surface dark:text-on-surface">© 2024 SincroAPI x DigiMedia. High-Fidelity Media Production Interface.</p>
<div class="flex gap-4">
<a class="font-label-sm text-label-sm text-on-secondary-container font-medium hover:text-primary underline transition-all" href="#">Documentation</a>
<a class="font-label-sm text-label-sm text-on-secondary-container font-medium hover:text-primary underline transition-all" href="#">Support</a>
<a class="font-label-sm text-label-sm text-on-secondary-container font-medium hover:text-primary underline transition-all" href="#">Privacy</a>
<a class="font-label-sm text-label-sm text-on-secondary-container font-medium hover:text-primary underline transition-all" href="#">Terms</a>
</div>
</footer>
</body></html>