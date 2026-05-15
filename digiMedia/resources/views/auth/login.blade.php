<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SincroAPI x DigiMedia - Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
                      "headline-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                      "headline-lg-mobile": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                      "mono-data": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "label-sm": ["12px", {"lineHeight": "1", "letterSpacing": "0.02em", "fontWeight": "500"}],
                      "headline-md": ["24px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                      "label-md": ["14px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}]
              }
            }
          }
        }
    </script>
<style>
        body { background-color: theme('colors.background'); }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col items-center justify-center p-margin-mobile md:p-margin-desktop">
<div class="w-full max-w-md bg-slate-surface border border-slate-border rounded-xl p-8 shadow-lg">
<div class="text-center mb-8">
<h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-2">SincroAPI</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Log in to your high-fidelity workspace.</p>
</div>
<form class="space-y-6">
<div class="space-y-2">
<label class="block font-label-md text-label-md text-on-surface" for="email">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-status-idle" style="font-variation-settings: 'FILL' 0;">mail</span>
<input class="w-full bg-surface-container-lowest border border-slate-border rounded text-on-surface pl-10 pr-3 py-2 font-body-md text-body-md focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all placeholder:text-status-idle" id="email" placeholder="engineer@digimedia.io" required="" type="email"/>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between items-center">
<label class="block font-label-md text-label-md text-on-surface" for="password">Password</label>
<a class="font-label-sm text-label-sm text-primary hover:text-primary-fixed transition-colors" href="#">Forgot password?</a>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-status-idle" style="font-variation-settings: 'FILL' 0;">lock</span>
<input class="w-full bg-surface-container-lowest border border-slate-border rounded text-on-surface pl-10 pr-3 py-2 font-body-md text-body-md focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all placeholder:text-status-idle" id="password" placeholder="••••••••" required="" type="password"/>
</div>
</div>
<div class="flex items-center">
<input class="h-4 w-4 rounded border-slate-border bg-surface-container-lowest text-primary focus:ring-primary focus:ring-offset-background" id="remember-me" type="checkbox"/>
<label class="ml-2 block font-body-md text-body-md text-on-surface-variant" for="remember-me">
                    Remember me
                </label>
</div>
<button class="w-full bg-primary-container text-black font-label-md text-label-md py-3 rounded flex items-center justify-center hover:bg-primary-fixed transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-background gap-2" type="submit">
<span>Log In</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">login</span>
</button>
</form>
<div class="mt-8 text-center border-t border-slate-border pt-6">
<p class="font-body-md text-body-md text-on-surface-variant">
                New to SincroAPI? 
                <a class="font-label-md text-label-md text-primary hover:text-primary-fixed transition-colors ml-1" href="#">Create an account</a>
</p>
</div>
</div>
</body></html>