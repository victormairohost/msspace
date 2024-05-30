<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    </body>
</head>
<!-- Styles -->
<style>
    /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb
    }

    ::after,
    ::before {
        --tw-content: ''
    }

    :host,
    html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        tab-size: 4;
        font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-feature-settings: normal;
        font-variation-settings: normal;
        -webkit-tap-highlight-color: transparent
    }

    body {
        margin: 0;
        line-height: inherit
    }

    hr {
        height: 0;
        color: inherit;
        border-top-width: 1px
    }

    abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: inherit;
        font-weight: inherit
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    b,
    strong {
        font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-feature-settings: normal;
        font-variation-settings: normal;
        font-size: 1em
    }

    small {
        font-size: 80%
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    table {
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        font-feature-settings: inherit;
        font-variation-settings: inherit;
        font-size: 100%;
        font-weight: inherit;
        line-height: inherit;
        color: inherit;
        margin: 0;
        padding: 0
    }

    button,
    select {
        text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: button;
        background-color: transparent;
        background-image: none
    }

    :-moz-focusring {
        outline: auto
    }

    :-moz-ui-invalid {
        box-shadow: none
    }

    progress {
        vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        -webkit-appearance: textfield;
        outline-offset: -2px
    }

    ::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    summary {
        display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
        margin: 0
    }

    fieldset {
        margin: 0;
        padding: 0
    }

    legend {
        padding: 0
    }

    menu,
    ol,
    ul {
        list-style: none;
        margin: 0;
        padding: 0
    }

    dialog {
        padding: 0
    }

    textarea {
        resize: vertical
    }

    input::placeholder,
    textarea::placeholder {
        opacity: 1;
        color: #9ca3af
    }

    [role=button],
    button {
        cursor: pointer
    }

    :disabled {
        cursor: default
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
        display: block;
        vertical-align: middle
    }

    img,
    video {
        max-width: 100%;
        height: auto
    }

    [hidden] {
        display: none
    }

    *,
    ::before,
    ::after {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia:
    }

    ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia:
    }

    .absolute {
        position: absolute
    }

    .relative {
        position: relative
    }

    .-left-20 {
        left: -5rem
    }

    .top-0 {
        top: 0px
    }

    .-bottom-16 {
        bottom: -4rem
    }

    .-left-16 {
        left: -4rem
    }

    .-mx-3 {
        margin-left: -0.75rem;
        margin-right: -0.75rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .mt-6 {
        margin-top: 1.5rem
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .aspect-video {
        aspect-ratio: 16 / 9
    }

    .size-12 {
        width: 3rem;
        height: 3rem
    }

    .size-5 {
        width: 1.25rem;
        height: 1.25rem
    }

    .size-6 {
        width: 1.5rem;
        height: 1.5rem
    }

    .h-12 {
        height: 3rem
    }

    .h-40 {
        height: 10rem
    }

    .h-full {
        height: 100%
    }

    .min-h-screen {
        min-height: 100vh
    }

    .w-full {
        width: 100%
    }

    .w-\[calc\(100\%\+8rem\)\] {
        width: calc(100% + 8rem)
    }

    .w-auto {
        width: auto
    }

    .max-w-\[877px\] {
        max-width: 877px
    }

    .max-w-2xl {
        max-width: 42rem
    }

    .flex-1 {
        flex: 1 1 0%
    }

    .shrink-0 {
        flex-shrink: 0
    }

    .grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
    }

    .flex-col {
        flex-direction: column
    }

    .items-start {
        align-items: flex-start
    }

    .items-center {
        align-items: center
    }

    .items-stretch {
        align-items: stretch
    }

    .justify-end {
        justify-content: flex-end
    }

    .justify-center {
        justify-content: center
    }

    .gap-2 {
        gap: 0.5rem
    }

    .gap-4 {
        gap: 1rem
    }

    .gap-6 {
        gap: 1.5rem
    }

    .self-center {
        align-self: center
    }

    .overflow-hidden {
        overflow: hidden
    }

    .rounded-\[10px\] {
        border-radius: 10px
    }

    .rounded-full {
        border-radius: 9999px
    }

    .rounded-lg {
        border-radius: 0.5rem
    }

    .rounded-md {
        border-radius: 0.375rem
    }

    .rounded-sm {
        border-radius: 0.125rem
    }

    .bg-\[\#FF2D20\]\/10 {
        background-color: rgb(255 45 32 / 0.1)
    }

    .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-gradient-to-b {
        background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
    }

    .from-transparent {
        --tw-gradient-from: transparent var(--tw-gradient-from-position);
        --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .via-white {
        --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
        --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
    }

    .to-white {
        --tw-gradient-to: #fff var(--tw-gradient-to-position)
    }

    .stroke-\[\#FF2D20\] {
        stroke: #FF2D20
    }

    .object-cover {
        object-fit: cover
    }

    .object-top {
        object-position: top
    }

    .p-6 {
        padding: 1.5rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .py-10 {
        padding-top: 2.5rem;
        padding-bottom: 2.5rem
    }

    .px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem
    }

    .py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem
    }

    .py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem
    }

    .pt-3 {
        padding-top: 0.75rem
    }

    .text-center {
        text-align: center
    }

    .font-sans {
        font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
    }

    .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem
    }

    .text-sm\/relaxed {
        font-size: 0.875rem;
        line-height: 1.625
    }

    .text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem
    }

    .font-semibold {
        font-weight: 600
    }

    .text-black {
        --tw-text-opacity: 1;
        color: rgb(0 0 0 / var(--tw-text-opacity))
    }

    .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .underline {
        -webkit-text-decoration-line: underline;
        text-decoration-line: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
        --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
        --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .ring-1 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .ring-transparent {
        --tw-ring-color: transparent
    }

    .ring-white\/\[0\.05\] {
        --tw-ring-color: rgb(255 255 255 / 0.05)
    }

    .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
        --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
    }

    .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
        --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
    }

    .transition {
        transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms
    }

    .duration-300 {
        transition-duration: 300ms
    }

    .selection\:bg-\[\#FF2D20\] *::selection {
        --tw-bg-opacity: 1;
        background-color: rgb(255 45 32 / var(--tw-bg-opacity))
    }

    .selection\:text-white *::selection {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .selection\:bg-\[\#FF2D20\]::selection {
        --tw-bg-opacity: 1;
        background-color: rgb(255 45 32 / var(--tw-bg-opacity))
    }

    .selection\:text-white::selection {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .hover\:text-black:hover {
        --tw-text-opacity: 1;
        color: rgb(0 0 0 / var(--tw-text-opacity))
    }

    .hover\:text-black\/70:hover {
        color: rgb(0 0 0 / 0.7)
    }

    .hover\:ring-black\/20:hover {
        --tw-ring-color: rgb(0 0 0 / 0.2)
    }

    .focus\:outline-none:focus {
        outline: 2px solid transparent;
        outline-offset: 2px
    }

    .focus-visible\:ring-1:focus-visible {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
    }

    @media (min-width: 640px) {
        .sm\:size-16 {
            width: 4rem;
            height: 4rem
        }

        .sm\:size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .sm\:pt-5 {
            padding-top: 1.25rem
        }
    }

    @media (min-width: 768px) {
        .md\:row-span-3 {
            grid-row: span 3 / span 3
        }
    }

    @media (min-width: 1024px) {
        .lg\:col-start-2 {
            grid-column-start: 2
        }

        .lg\:h-16 {
            height: 4rem
        }

        .lg\:max-w-7xl {
            max-width: 80rem
        }

        .lg\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr))
        }

        .lg\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .lg\:flex-col {
            flex-direction: column
        }

        .lg\:items-end {
            align-items: flex-end
        }

        .lg\:justify-center {
            justify-content: center
        }

        .lg\:gap-8 {
            gap: 2rem
        }

        .lg\:p-10 {
            padding: 2.5rem
        }

        .lg\:pb-10 {
            padding-bottom: 2.5rem
        }

        .lg\:pt-0 {
            padding-top: 0px
        }

        .lg\:text-\[\#FF2D20\] {
            --tw-text-opacity: 1;
            color: rgb(255 45 32 / var(--tw-text-opacity))
        }
    }

    @media (prefers-color-scheme: dark) {
        .dark\:block {
            display: block
        }

        .dark\:hidden {
            display: none
        }

        .dark\:bg-black {
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity))
        }

        .dark\:bg-zinc-900 {
            --tw-bg-opacity: 1;
            background-color: rgb(24 24 27 / var(--tw-bg-opacity))
        }

        .dark\:via-zinc-900 {
            --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .dark\:to-zinc-900 {
            --tw-gradient-to: #18181b var(--tw-gradient-to-position)
        }

        .dark\:text-white\/50 {
            color: rgb(255 255 255 / 0.5)
        }

        .dark\:text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .dark\:text-white\/70 {
            color: rgb(255 255 255 / 0.7)
        }

        .dark\:ring-zinc-800 {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
        }

        .dark\:hover\:text-white:hover {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .dark\:hover\:text-white\/70:hover {
            color: rgb(255 255 255 / 0.7)
        }

        .dark\:hover\:text-white\/80:hover {
            color: rgb(255 255 255 / 0.8)
        }

        .dark\:hover\:ring-zinc-700:hover {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
        }

        .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        .dark\:focus-visible\:ring-white:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
        }
    }
</style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="ProfessionalsProfile" style="width: 1440px; height: 1963px; position: relative; background: #F9F9FB">
        <div class="Frame1000008118"
            style="padding-top: 76px; padding-left: 24px; padding-right: 24px; left: 272px; top: 64px; position: absolute; justify-content: center; align-items: flex-start; gap: 53px; display: inline-flex">
            <div class="Frame1618868166"
                style="width: 772px; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                <div class="Frame1618868164"
                    style="align-self: stretch; padding: 16px; background: #F0F0F6; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                    <div class="Frame1618868146" style="width: 193px; height: 189px; position: relative">
                        <div class="Frame427324525"
                            style="width: 175px; height: 175px; padding-top: 33.63px; padding-bottom: 32.93px; padding-left: 32.91px; padding-right: 33.65px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 7.48px; overflow: hidden; justify-content: center; align-items: center; display: inline-flex">
                            <div class="PhImageSquareLight"
                                style="flex: 1 1 0; align-self: stretch; padding: 14.40px; justify-content: center; align-items: center; display: inline-flex">
                                <div class="Vector" style="width: 79.64px; height: 79.64px; background: #AFAFB1"></div>
                            </div>
                        </div>
                        <div class="FileUploadStates"
                            style="width: 32px; height: 32px; left: 151px; top: 152px; position: absolute">
                            <div class="Ellipse"
                                style="width: 32px; height: 32px; left: 0px; top: 0px; position: absolute; background: #AFAFB1; border-radius: 9999px">
                            </div>
                            <div class="IconCloudUpload"
                                style="width: 16px; height: 16px; padding-top: 1.33px; padding-bottom: 0.67px; padding-left: 0.67px; padding-right: 0.67px; left: 8px; top: 8px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
                                <div class="Icon" style="width: 14.67px; height: 14px; background: #ECEBEC"></div>
                            </div>
                        </div>
                    </div>
                    <div class="Frame1618868147"
                        style="flex: 1 1 0; flex-direction: column; justify-content: center; align-items: flex-start; gap: 8px; display: inline-flex">
                        <div class="Frame1618868134"
                            style="align-self: stretch; justify-content: space-between; align-items: flex-end; display: inline-flex">
                            <div class="Frame9475"
                                style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 8px; display: inline-flex">
                                <div class="EmmanuelOla"
                                    style="text-align: justify; color: #1A1A1A; font-size: 24px; font-family: Inter; font-weight: 500; line-height: 32px; word-wrap: break-word">
                                    Victor mairo</div>
                                <div class="Frame1618868133"
                                    style="justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                                    <div class="Frame1618868132"
                                        style="justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                                        <div class="IonLocationOutline"
                                            style="width: 20px; height: 20px; position: relative">
                                            <div class="Vector"
                                                style="width: 11.25px; height: 16.25px; left: 4.38px; top: 1.88px; position: absolute; border: 1.62px #87868A solid">
                                            </div>
                                            <div class="Vector"
                                                style="width: 3.75px; height: 3.75px; left: 8.12px; top: 5.62px; position: absolute; border: 1.62px #87868A solid">
                                            </div>
                                        </div>
                                        <div class="London"
                                            style="text-align: justify; color: #87868A; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                        </div>
                                    </div>
                                    <div class="UnitedKingdom851amGmt"
                                        style="text-align: justify; color: #87868A; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                        Nigeria | 2:30pm</div>
                                </div>
                            </div>
                            <div class="PublicView"
                                style="justify-content: flex-end; align-items: center; gap: 12px; display: flex">
                                <div class="EyeOpen"
                                    style="width: 24px; height: 24px; padding-left: 3px; padding-right: 3px; padding-top: 7px; padding-bottom: 7px; justify-content: center; align-items: center; display: flex">
                                    <div class="Group" style="width: 18px; height: 10px; position: relative">
                                        <div class="Vector"
                                            style="width: 18px; height: 6px; left: 0px; top: 0px; position: absolute; border: 1.50px #1C2458 solid">
                                        </div>
                                        <div class="Vector"
                                            style="width: 6px; height: 6px; left: 6px; top: 4px; position: absolute; border: 1.50px #1C2458 solid">
                                        </div>
                                    </div>
                                </div>
                                <div class="PublicView"
                                    style="color: #1C2458; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 21px; word-wrap: break-word">
                                    Public view</div>
                            </div>
                        </div>
                        <div class="CarbonStar"
                            style="align-self: stretch; padding-top: 5px; padding-bottom: 5px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
                            <div class="StarRanks"
                                style="width: 24px; height: 24px; padding-top: 3px; padding-bottom: 3.90px; padding-left: 3px; padding-right: 3px; background: #FAEFDF; border-radius: 5px; overflow: hidden; justify-content: center; align-items: center; display: flex">
                                <div class="Vector" style="width: 18px; height: 17.10px; background: #7B5800"></div>
                            </div>
                            <div class="Expert"
                                style="color: #1C2458; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 20px; word-wrap: break-word">
                                Expert</div>
                        </div>
                        <div class="Frame1618868168"
                            style="justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
                            <div class="Badge"
                                style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                <div class="Badge"
                                    style="padding-left: 12px; padding-right: 12px; padding-top: 2px; padding-bottom: 2px; background: #E1E2ED; border-radius: 12px; flex-direction: column; justify-content: center; align-items: center; gap: 8px; display: flex">
                                    <div class="Container"
                                        style="justify-content: center; align-items: center; gap: 2px; display: inline-flex">
                                        <div class="Label"
                                            style="text-align: center; color: #41455E; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 20.30px; word-wrap: break-word">
                                            Food safety</div>
                                    </div>
                                </div>
                            </div>
                            <div class="Badge"
                                style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                <div class="Badge"
                                    style="padding-left: 12px; padding-right: 12px; padding-top: 2px; padding-bottom: 2px; background: #E1E2ED; border-radius: 12px; flex-direction: column; justify-content: center; align-items: center; gap: 8px; display: flex">
                                    <div class="Container"
                                        style="justify-content: center; align-items: center; gap: 2px; display: inline-flex">
                                        <div class="Label"
                                            style="text-align: center; color: #41455E; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 20.30px; word-wrap: break-word">
                                            Risk assessment</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="AvailabilityToggle"
                            style="align-self: stretch; padding-top: 10px; padding-bottom: 10px; justify-content: space-between; align-items: center; display: inline-flex">
                            <div class="Frame427324544"
                                style="justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                <div class="NotAvailable"
                                    style="color: #1C2458; font-size: 20px; font-family: Inter; font-weight: 500; line-height: 28px; word-wrap: break-word">
                                    Not Available</div>
                            </div>
                            <div class="Toggle"
                                style="width: 42px; height: 24px; padding-top: 2px; padding-bottom: 2px; padding-left: 4px; padding-right: 18px; background: #D7D7D8; border-radius: 100px; overflow: hidden; justify-content: flex-start; align-items: center; display: flex">
                                <div class="Frame427324543"
                                    style="width: 20px; height: 20px; position: relative; background: white; box-shadow: 2px 2px 10px rgba(80.38, 79.71, 79.71, 0.25); border-radius: 10px; border: 1px #AFAFB1 solid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Frame1618868165"
                    style="align-self: stretch; height: 1223px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                    <div class="Frame1618868141"
                        style="align-self: stretch; height: 1223px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
                        <div class="Frame1618868139"
                            style="align-self: stretch; height: 177px; padding: 16px; background: white; border-radius: 10px; border: 1px #C3C5DB solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div class="Frame1618868135"
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div class="AboutMe"
                                    style="width: 119px; color: #1A1A1A; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 32px; word-wrap: break-word">
                                    About me</div>
                                <div class="EditProfile"
                                    style="justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                    <div class="FluentEdit16Regular"
                                        style="width: 24px; height: 24px; padding-top: 1.49px; padding-bottom: 1.50px; padding-left: 1.50px; padding-right: 1.49px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector"
                                            style="width: 21.01px; height: 21.01px; background: #1C2458"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="MultiLineTextField"
                                style="align-self: stretch; border-radius: 10px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                                <div class="AtPbsbWeSpecializeInDeliveringTailoredSolutionsToBusinessesAcrossDiverseIndustriesWithATeamOfSeasonedProfessionalsWeOfferComprehensiveConsultancyServicesDesignedToDriveGrowthOptimizeOperationsAndFosterInnovationSeeMore"
                                    style="flex: 1 1 0"><span
                                        style="color: #1A1A1A; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 21px; word-wrap: break-word">With
                                        over 15 years of experience in management consulting, I have a proven track
                                        record of helping organizations achieve their strategic goals and overcome
                                        complex challenges. My expertise lies in strategic planning, organizational
                                        transformation, and performance optimization. Throughout my career, I have
                                        worked with clients across various industries, providing strategic insights,
                                        actionable recommendations, and hands-on support to drive growth and innovation.
                                    </span><span
                                        style="color: #595991; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 21px; word-wrap: break-word">See
                                        more..</span></div>
                            </div>
                        </div>
                        <div class="Frame1618868140"
                            style="align-self: stretch; height: 104px; padding: 16px; background: white; border-radius: 10px; border: 1px #C3C5DB solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div class="Frame1618868135"
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div class="ScopeOfExpertise"
                                    style="flex: 1 1 0; color: #1A1A1A; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 32px; word-wrap: break-word">
                                    Scope of expertise</div>
                                <div class="EditProfile"
                                    style="justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                    <div class="FluentEdit16Regular"
                                        style="width: 24px; height: 24px; padding-top: 1.49px; padding-bottom: 1.50px; padding-left: 1.50px; padding-right: 1.49px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector"
                                            style="width: 21.01px; height: 21.01px; background: #1C2458"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="Frame427324720"
                                style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                                <div class="Chips"
                                    style="padding: 8px; background: #F4E0C1; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #412D00; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Food Safety</div>
                                </div>
                                <div class="Chips"
                                    style="padding: 8px; background: #F4E0C1; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #412D00; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Project Management</div>
                                </div>
                                <div class="Chips"
                                    style="padding: 8px; background: #F4E0C1; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #412D00; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Gap Analysis</div>
                                </div>
                                <div class="Chips"
                                    style="padding: 8px; background: #F4E0C1; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #412D00; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Audit</div>
                                </div>
                            </div>
                        </div>
                        <div class="Frame427324744"
                            style="align-self: stretch; height: 150px; padding: 16px; background: white; border-radius: 10px; border: 1px #C3C5DB solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div class="Frame1618868135"
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div class="Skills"
                                    style="width: 119px; color: #1A1A1A; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 32px; word-wrap: break-word">
                                    Skills</div>
                                <div class="EditProfile"
                                    style="justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                    <div class="FluentEdit16Regular"
                                        style="width: 24px; height: 24px; padding-top: 1.49px; padding-bottom: 1.50px; padding-left: 1.50px; padding-right: 1.49px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector"
                                            style="width: 21.01px; height: 21.01px; background: #1C2458"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="Frame427324720"
                                style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                                <div class="Chips"
                                    style="padding: 8px; background: #E8EAF7; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Change Management</div>
                                </div>
                                <div class="Chips"
                                    style="padding: 8px; background: #E8EAF7; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Organizational Development</div>
                                </div>
                                <div class="Chips"
                                    style="padding: 8px; background: #E8EAF7; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Performance Improvement</div>
                                </div>
                                <div class="Chips"
                                    style="padding: 8px; background: #E8EAF7; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Business Process Optimization</div>
                                </div>
                                <div class="Chips"
                                    style="padding: 8px; background: #E8EAF7; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Change Management</div>
                                </div>
                                <div class="Chips"
                                    style="padding: 8px; background: #E8EAF7; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Business Process Optimization</div>
                                </div>
                                <div class="Chips"
                                    style="padding: 8px; background: #E8EAF7; border-radius: 10px; justify-content: flex-start; align-items: center; gap: 5px; display: flex">
                                    <div class="UxDesign"
                                        style="text-align: justify; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                        Organizational Development</div>
                                </div>
                            </div>
                        </div>
                        <div class="Frame1618868141"
                            style="align-self: stretch; height: 132px; padding: 16px; background: white; border-radius: 10px; border: 1px #C3C5DB solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div class="Frame1618868135"
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div class="Experience"
                                    style="flex: 1 1 0; color: #1A1A1A; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 32px; word-wrap: break-word">
                                    Experience</div>
                                <div class="EditProfile"
                                    style="justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                    <div class="FluentEdit16Regular"
                                        style="width: 24px; height: 24px; padding-top: 1.49px; padding-bottom: 1.50px; padding-left: 1.50px; padding-right: 1.49px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector"
                                            style="width: 21.01px; height: 21.01px; background: #1C2458"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="MultiLineTextField"
                                style="width: 642px; height: 76px; border-radius: 10px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                                <div class="TypeHere"
                                    style="flex: 1 1 0; color: #AFAFB1; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                    Add your experience here</div>
                            </div>
                        </div>
                        <div class="ExperienceLog"
                            style="align-self: stretch; height: 284px; padding: 16px; background: white; border-radius: 10px; border: 1px #C3C5DB solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div class="Frame1618868161"
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div class="ExperienceLog"
                                    style="width: 541px; color: #1A1A1A; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 32px; word-wrap: break-word">
                                    Experience log</div>
                                <div class="Frame1618868160"
                                    style="justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                                    <div class="EditProfile"
                                        style="justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                        <div class="EditProfile"
                                            style="color: #1C2458; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 21px; word-wrap: break-word">
                                            Bulk upload</div>
                                    </div>
                                    <div class="EditProfile"
                                        style="justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                        <div class="FluentEdit16Regular"
                                            style="width: 24px; height: 24px; padding-top: 1.49px; padding-bottom: 1.50px; padding-left: 1.50px; padding-right: 1.49px; justify-content: center; align-items: center; display: flex">
                                            <div class="Vector"
                                                style="width: 21.01px; height: 21.01px; background: #1C2458"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Frame1618868159"
                                style="align-self: stretch; height: 212px; padding-top: 16px; padding-bottom: 16px; background: white; border-bottom: 1px #ECEBEC solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
                                <div class="Frame1618868158"
                                    style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
                                    <div class="ProjectTitle"
                                        style="color: #1A1A1A; font-size: 24px; font-family: Inter; font-weight: 500; line-height: 32px; word-wrap: break-word">
                                        Project Title</div>
                                    <div class="RoleInProject"
                                        style="color: #1C2458; font-size: 20px; font-family: Inter; font-weight: 500; line-height: 28px; word-wrap: break-word">
                                        Role in project</div>
                                </div>
                                <div class="Frame1618868157"
                                    style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                    <div class="Organization"
                                        style="color: #1C2458; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 20px; word-wrap: break-word">
                                        Organization</div>
                                    <div class="Status"
                                        style="color: #37363C; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                        Status</div>
                                    <div class="March2021June2021"
                                        style="color: #6A6D83; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                        March 2021 - June 2021</div>
                                </div>
                            </div>
                        </div>
                        <div class="ProfileCertification"
                            style="align-self: stretch; height: 276px; padding: 16px; background: white; border-radius: 10px; border: 1px #C3C5DB solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div class="Frame1618868135"
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div class="Certification"
                                    style="flex: 1 1 0; color: #1A1A1A; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 32px; word-wrap: break-word">
                                    Certification (1 of 5)</div>
                                <div class="EditProfile"
                                    style="justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                    <div class="FluentEdit16Regular"
                                        style="width: 24px; height: 24px; padding-top: 1.49px; padding-bottom: 1.50px; padding-left: 1.50px; padding-right: 1.49px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector"
                                            style="width: 21.01px; height: 21.01px; background: #1C2458"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="Frame1618868156"
                                style="align-self: stretch; height: 204px; padding-top: 16px; padding-bottom: 16px; background: white; border-bottom: 1px #ECEBEC solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                                <div class="Iso9001"
                                    style="color: #1A1A1A; font-size: 24px; font-family: Inter; font-weight: 500; line-height: 32px; word-wrap: break-word">
                                    ISO 9001</div>
                                <div class="Frame1618868155"
                                    style="align-self: stretch; justify-content: space-between; align-items: flex-start; display: inline-flex">
                                    <div class="Frame1618868154"
                                        style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 43px; display: inline-flex">
                                        <div class="Frame1618868150"
                                            style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                            <div class="SooAgency"
                                                style="color: #1C2458; font-size: 20px; font-family: Inter; font-weight: 500; line-height: 28px; word-wrap: break-word">
                                                SOO Agency</div>
                                            <div class="65667098"
                                                style="color: #37363C; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                                236/6566/7098</div>
                                        </div>
                                        <div class="March2021June2021"
                                            style="color: #6A6D83; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                            March 2021 - June 2021</div>
                                    </div>
                                    <img class="Frame1618868153"
                                        style="width: 188px; height: 116px; position: relative; border: 1px #6A6D83 solid"
                                        src="https://via.placeholder.com/188x116" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Frame1000008123"
                    style="height: 200px; padding: 16px; background: #FEFCF9; border-radius: 10px; border: 1px #FAEFDF solid; flex-direction: column; justify-content: center; align-items: flex-end; gap: 16px; display: flex">
                    <div class="Frame1000008120"
                        style="align-self: stretch; height: 134px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
                        <div class="Mentorship"
                            style="align-self: stretch; color: #261A00; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 32px; word-wrap: break-word">
                            Mentorship</div>
                        <div class="AreYouInterestedInReceivingMentorshipMsSpaceIsYourGatewayToConnectingWithExpertsInTheFieldsYouDesireMentorshipInAdditionallyYouCanLeverageYourWealthOfKnowledgeByRegisteringAsAMentorGuidingIndividualsInNeedMentorshipOptionsAreAvailableBothFreeAndPaid"
                            style="align-self: stretch; color: #261A00; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                            Are you interested in receiving mentorship? MS Space is your gateway to connecting with
                            experts in the fields you desire mentorship in. <br /><br />Additionally, you can leverage
                            your wealth of knowledge by registering as a mentor, guiding individuals in need. Mentorship
                            options are available, both free and paid.</div>
                    </div>
                    <div class="StrokeButton"
                        style="width: 117px; border-radius: 10px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                        <div class="ViewEventDetails"
                            style="flex: 1 1 0; color: #1C2458; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                            Go to mentorship</div>
                    </div>
                </div>
            </div>
            <div class="Frame1618868167"
                style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
                <div class="Frame1618868145"
                    style="height: 230px; padding: 16px; background: white; border-radius: 10px; border: 1px #C3C5DB solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 27px; display: flex">
                    <div class="Frame1618868143"
                        style="align-self: stretch; height: 110px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px #ECEBEC solid; flex-direction: column; justify-content: center; align-items: center; gap: 8px; display: flex">
                        <div class="Frame1618868142"
                            style="align-self: stretch; height: 40px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 4px; display: flex">
                            <div class="ProfessionalRank"
                                style="color: #29292D; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 20px; word-wrap: break-word">
                                Professional rank</div>
                            <div class="Expert"
                                style="color: #464555; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                Expert</div>
                        </div>
                        <div class="Frame1618868136"
                            style="align-self: stretch; justify-content: center; align-items: center; gap: 12px; display: inline-flex">
                            <div class="StarRanks"
                                style="width: 16px; height: 16px; padding-top: 2px; padding-bottom: 2.60px; padding-left: 2px; padding-right: 2px; background: #E2E2E8; border-radius: 3.33px; overflow: hidden; justify-content: center; align-items: center; display: flex">
                                <div class="Vector" style="width: 12px; height: 11.40px; background: #ABAAB9"></div>
                            </div>
                            <div class="StarRanks"
                                style="width: 16px; height: 16px; padding-top: 1.81px; padding-bottom: 2.43px; padding-left: 1.81px; padding-right: 1.81px; background: #FFEAE2; border-radius: 3.44px; overflow: hidden; justify-content: center; align-items: center; display: flex">
                                <div class="Vector" style="width: 12.37px; height: 11.76px; background: #FD5740">
                                </div>
                            </div>
                            <div class="StarRanks"
                                style="width: 16px; height: 16px; padding-top: 2.38px; padding-bottom: 2.94px; padding-left: 2.37px; padding-right: 2.38px; background: #E1E2ED; border-radius: 3.12px; overflow: hidden; justify-content: center; align-items: center; display: flex">
                                <div class="Vector" style="width: 11.25px; height: 10.69px; background: #41455E">
                                </div>
                            </div>
                            <div class="StarRanks"
                                style="width: 16px; height: 16px; padding-top: 1.81px; padding-bottom: 2.43px; padding-left: 1.81px; padding-right: 1.81px; background: #C6CBEC; border-radius: 3.44px; overflow: hidden; justify-content: center; align-items: center; display: flex">
                                <div class="Vector" style="width: 12.37px; height: 11.76px; background: #6674CC">
                                </div>
                            </div>
                            <div class="StarRanks"
                                style="width: 30px; height: 30px; padding-top: 6px; padding-bottom: 6.90px; padding-left: 6px; padding-right: 6px; background: #FAEFDF; border-radius: 5px; overflow: hidden; border: 1px #F4E0C1 solid; justify-content: center; align-items: center; display: flex">
                                <div class="Vector" style="width: 18px; height: 17.10px; background: #7B5800"></div>
                            </div>
                        </div>
                    </div>
                    <div class="MyAffiliations"
                        style="align-self: stretch; height: 61px; flex-direction: column; justify-content: center; align-items: center; gap: 7px; display: flex">
                        <div class="Frame1618868138"
                            style="align-self: stretch; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <div class="AllifiliatedProf"
                                style="width: 24px; height: 24px; padding-left: 7px; padding-right: 7px; padding-top: 4px; padding-bottom: 4px; justify-content: center; align-items: center; display: flex">
                                <div class="Vector" style="width: 10px; height: 16px; border: 2px #29292D solid">
                                </div>
                            </div>
                            <div class="MyAffiliations"
                                style="color: #29292D; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 20px; word-wrap: break-word">
                                My Affiliations</div>
                        </div>
                        <div class="Frame1618868144"
                            style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                            <img class="Frame1000007841"
                                style="width: 30px; height: 30px; position: relative; border-radius: 42px; border: 1px #F5F5F5 solid"
                                src="https://via.placeholder.com/30x30" />
                            <img class="Frame1618868139"
                                style="width: 30px; height: 30px; position: relative; border-radius: 42px; border: 1px #F5F5F5 solid"
                                src="https://via.placeholder.com/30x30" />
                            <img class="Frame1618868140"
                                style="width: 30px; height: 30px; position: relative; border-radius: 42px; border: 1px #F5F5F5 solid"
                                src="https://via.placeholder.com/30x30" />
                        </div>
                    </div>
                </div>
                <div class="Frame1618868163"
                    style="height: 885px; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 20px; display: flex">
                    <div class="Frame1000008124"
                        style="align-self: stretch; height: 151px; padding: 16px; background: white; border-radius: 10px; overflow: hidden; border: 1px #ECEBEC solid; flex-direction: column; justify-content: center; align-items: flex-end; gap: 16px; display: flex">
                        <div class="Frame1000008120"
                            style="align-self: stretch; height: 84px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
                            <div class="RegisterAsAConsultingFirmOnMsSpace"
                                style="align-self: stretch; color: #1B1B1F; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                Register as a consulting firm on MS Space</div>
                            <div class="RegisterYourConsultancyFirmAndGetJobsDirectlyFromMsSpacePlatform"
                                style="align-self: stretch; color: #1B1B1F; font-size: 12px; font-family: Inter; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                Register your consultancy firm and get jobs directly from MS Space platform.</div>
                        </div>
                        <div class="StrokeButton"
                            style="width: 72px; height: 19px; border-radius: 10px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                            <div class="ViewEventDetails"
                                style="flex: 1 1 0; color: #1C2458; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                Get Started</div>
                        </div>
                    </div>
                    <div class="Frame1618868149"
                        style="align-self: stretch; height: 206px; padding: 16px; background: white; border-radius: 10px; overflow: hidden; border: 1px #ECEBEC solid; flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                        <div class="Frame427324234"
                            style="align-self: stretch; height: 78px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 6px; display: flex">
                            <div class="UpdateYourProfessionalPortfolio"
                                style="align-self: stretch; color: #1A1A1A; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                Update your Professional portfolio</div>
                            <div class="UpdatingYourPortfolioHelpsTheSystemPairYouWithJobsWhereYourExpertiseAreNeeded"
                                style="align-self: stretch; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                Updating your portfolio helps the system pair you with jobs where your expertise are
                                needed.</div>
                        </div>
                        <div class="Frame1618868148"
                            style="align-self: stretch; height: 80px; flex-direction: column; justify-content: center; align-items: center; gap: 8px; display: flex">
                            <div class="StrokeButton"
                                style="align-self: stretch; padding: 10px; border-radius: 10px; border: 1px #1C2458 solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                <div class="ViewEventDetails"
                                    style="flex: 1 1 0; text-align: center; color: #1C2458; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                    Update Certifications</div>
                            </div>
                            <div class="StrokeButton"
                                style="align-self: stretch; padding: 10px; border-radius: 10px; border: 1px #1C2458 solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                <div class="ViewEventDetails"
                                    style="flex: 1 1 0; text-align: center; color: #1C2458; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                    Update Experience log</div>
                            </div>
                        </div>
                    </div>
                    <div class="Frame427324237"
                        style="align-self: stretch; padding: 16px; background: white; border-radius: 10px; overflow: hidden; border: 1px #ECEBEC solid; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                        <div class="Frame427324235"
                            style="flex: 1 1 0; flex-direction: column; justify-content: center; align-items: flex-end; gap: 16px; display: inline-flex">
                            <div class="Frame427324234"
                                style="align-self: stretch; height: 60px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 6px; display: flex">
                                <div class="PromoteYourProfile"
                                    style="align-self: stretch; color: #1A1A1A; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                    Promote your profile</div>
                                <div class="YouCanRunYourPromotionsHereOnMsSpacePlatform"
                                    style="align-self: stretch; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                    You can run your promotions here on MS Space platform</div>
                            </div>
                            <div class="StrokeButton"
                                style="width: 89px; height: 26px; padding-top: 10px; padding-bottom: 10px; border-radius: 10px; justify-content: flex-end; align-items: center; gap: 10px; display: inline-flex">
                                <div class="ViewEventDetails"
                                    style="flex: 1 1 0; color: #1C2458; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                    Run Promotion</div>
                            </div>
                        </div>
                    </div>
                    <div class="Frame427324240"
                        style="align-self: stretch; padding: 16px; background: white; border-radius: 10px; border: 1px #ECEBEC solid; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                        <div class="Frame427324235"
                            style="flex: 1 1 0; flex-direction: column; justify-content: center; align-items: flex-end; gap: 16px; display: inline-flex">
                            <div class="Frame427324234"
                                style="align-self: stretch; height: 78px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 6px; display: flex">
                                <div class="SuperchargeYourLearningWithMsSpace"
                                    style="align-self: stretch; color: #1A1A1A; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                    Supercharge Your Learning with MS Space</div>
                                <div class="LookingToFillThatKnowledgeGapMsSpaceIsYourAllEncompassingLearningPlatform"
                                    style="align-self: stretch; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                    Looking to fill that knowledge gap? MS Space is your all encompassing learning
                                    platform..</div>
                            </div>
                            <div class="StrokeButton"
                                style="width: 85px; height: 26px; padding-top: 10px; padding-bottom: 10px; border-radius: 10px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                <div class="ViewEventDetails"
                                    style="flex: 1 1 0; color: #1C2458; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 16px; word-wrap: break-word">
                                    Coming soon</div>
                            </div>
                        </div>
                    </div>
                    <div class="Frame1618868150"
                        style="align-self: stretch; padding: 16px; background: white; border-radius: 10px; overflow: hidden; border: 1px #ECEBEC solid; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                        <div class="Frame427324235"
                            style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                            <div class="Frame427324234"
                                style="align-self: stretch; height: 130px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 6px; display: flex">
                                <div class="ShareYourProfileOnSocialMedia"
                                    style="align-self: stretch; color: #1A1A1A; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                    Share your profile on social media</div>
                                <div class="ShareYourProfileLinkDirectlyToYourSocialMediaOrCopyTheLink"
                                    style="align-self: stretch; color: #1A1A1A; font-size: 12px; font-family: Inter; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                    Share your profile link directly to your social media or copy the link.</div>
                                <div class="MsspaceglobalComEmmanuelt"
                                    style="align-self: stretch; color: #6674CC; font-size: 12px; font-family: Inter; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                    Msspaceglobal.com/EmmanuelT</div>
                                <div class="ButtonSecondary"
                                    style="align-self: stretch; height: 40px; padding-top: 16px; padding-bottom: 16px; background: white; border-radius: 6px; overflow: hidden; flex-direction: column; justify-content: center; align-items: flex-start; gap: 16px; display: flex">
                                    <div class="Container"
                                        style="justify-content: center; align-items: center; gap: 32px; display: inline-flex">
                                        <div class="EntypoSocialFacebook"
                                            style="width: 20px; height: 20px; padding: 1px; justify-content: center; align-items: center; display: flex">
                                            <div class="Vector"
                                                style="width: 18px; height: 18px; background: #4267B2"></div>
                                        </div>
                                        <div class="LogosWhatsappIcon"
                                            style="width: 19.84px; height: 20px; position: relative">
                                            <div class="Vector"
                                                style="width: 19.16px; height: 19.24px; left: 0.34px; top: 0.34px; position: absolute; background: linear-gradient(0deg, #1FAF38 0%, #60D669 100%)">
                                            </div>
                                            <div class="Vector"
                                                style="width: 19.84px; height: 19.93px; left: 0px; top: 0px; position: absolute; background: linear-gradient(0deg, #F9F9F9 0%, white 100%)">
                                            </div>
                                            <div class="Vector"
                                                style="width: 10.03px; height: 9.31px; left: 4.94px; top: 5.32px; position: absolute; background: white">
                                            </div>
                                        </div>
                                        <div class="SimpleIconsX"
                                            style="width: 20px; height: 20px; padding-top: 0.96px; padding-bottom: 0.96px; justify-content: center; align-items: center; display: flex">
                                            <div class="Vector"
                                                style="width: 20px; height: 18.08px; background: #1A1A1A"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Sidebar"
            style="width: 272px; height: 1024px; padding-top: 24px; padding-bottom: 24px; left: 0px; top: 0px; position: absolute; background: white; border-right: 1px #ECEBEC solid; flex-direction: column; justify-content: center; align-items: flex-start; gap: 362px; display: inline-flex">
            <div class="TopSection"
                style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                <div class="Logo1"
                    style="width: 272px; padding-left: 24px; padding-right: 24px; padding-top: 8px; padding-bottom: 8px; justify-content: flex-start; align-items: center; gap: 26px; display: inline-flex">
                    <img class="MsSpaceMain5x1" style="width: 139.73px; height: 30.43px"
                        src="https://www.msspaceglobal.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fms_space_logo.a4474f77.png&w=128&q=75" />
                    <div class="UiwDArrowLeft"
                        style="padding: 8px; border-radius: 5px; overflow: hidden; border: 1px #D7D7D8 solid; flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
                        <div class="Vector" style="width: 18px; height: 16px; background: #1A1A1A"></div>
                    </div>
                </div>
                <div class="BodySection"
                    style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
                    <div class="SidebarSection"
                        style="height: 266px; padding-left: 8px; padding-right: 8px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
                        <div class="SidebarMenulist"
                            style="align-self: stretch; height: 253px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                            <div class="Home"
                                style="align-self: stretch; height: 48px; padding-left: 16px; padding-right: 16px; padding-top: 12px; padding-bottom: 12px; border-radius: 4px; overflow: hidden; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div class="LeftContent"
                                    style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                                    <div class="Home"
                                        style="width: 24px; height: 24px; justify-content: center; align-items: center; display: flex">
                                        <div class="Group" style="width: 24px; height: 24px; position: relative">
                                            <div class="Vector"
                                                style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute">
                                            </div>
                                            <div class="Vector"
                                                style="width: 19.95px; height: 18.66px; left: 2.02px; top: 2.34px; position: absolute; background: #29292D">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Text"
                                        style="flex: 1 1 0; color: #29292D; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 21px; word-wrap: break-word">
                                        Home</div>
                                </div>
                            </div>
                            <div class="Activity"
                                style="align-self: stretch; height: 48px; padding-left: 16px; padding-right: 16px; padding-top: 12px; padding-bottom: 12px; border-radius: 4px; overflow: hidden; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div class="LeftContent"
                                    style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                                    <div class="Activity"
                                        style="width: 24px; height: 24px; padding-left: 2px; padding-right: 2px; padding-top: 3px; padding-bottom: 3px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector"
                                            style="width: 20px; height: 18px; border: 2px #29292D solid"></div>
                                    </div>
                                    <div class="Text"
                                        style="flex: 1 1 0; color: #29292D; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 20.30px; word-wrap: break-word">
                                        Activity</div>
                                </div>
                            </div>
                            <div class="Services"
                                style="align-self: stretch; height: 48px; padding-left: 16px; padding-right: 16px; padding-top: 12px; padding-bottom: 12px; border-radius: 4px; overflow: hidden; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div class="LeftContent"
                                    style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                                    <div class="Services"
                                        style="width: 24px; height: 24px; padding-top: 3px; padding-bottom: 1.38px; padding-left: 2px; padding-right: 1.18px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector"
                                            style="width: 20.82px; height: 19.62px; background: #29292D"></div>
                                    </div>
                                    <div class="Text"
                                        style="flex: 1 1 0; color: #29292D; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 21px; word-wrap: break-word">
                                        Services</div>
                                </div>
                            </div>
                            <div class="Jobs"
                                style="align-self: stretch; height: 48px; padding-left: 16px; padding-right: 16px; padding-top: 12px; padding-bottom: 12px; border-radius: 4px; overflow: hidden; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div class="LeftContent"
                                    style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                                    <div class="Jobs"
                                        style="width: 24px; height: 24px; padding-top: 1.50px; padding-bottom: 3px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector" style="width: 24px; height: 19.50px; background: #29292D">
                                        </div>
                                    </div>
                                    <div class="Text"
                                        style="flex: 1 1 0; color: #29292D; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 21px; word-wrap: break-word">
                                        Jobs</div>
                                </div>
                            </div>
                            <div class="Mentorship"
                                style="align-self: stretch; height: 45px; padding-left: 16px; padding-right: 16px; padding-top: 12px; padding-bottom: 12px; border-radius: 4px; overflow: hidden; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div class="LeftContent"
                                    style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                                    <div class="Mentorship"
                                        style="width: 24px; height: 24px; padding-top: 3.09px; padding-bottom: 3px; padding-left: 1.50px; padding-right: 1.50px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector" style="width: 21px; height: 17.91px; background: #29292D">
                                        </div>
                                    </div>
                                    <div class="Text"
                                        style="flex: 1 1 0; color: #29292D; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 21px; word-wrap: break-word">
                                        Mentorship</div>
                                </div>
                            </div>
                        </div>
                        <div class="Divider" style="align-self: stretch; height: 1px; background: #F0F2F5"></div>
                    </div>
                    <div class="SidebarSection"
                        style="height: 176px; padding-left: 8px; padding-right: 8px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
                        <div class="SidebarMenulist"
                            style="align-self: stretch; height: 176px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                            <div class="Profile"
                                style="align-self: stretch; height: 44px; padding-left: 16px; padding-right: 16px; padding-top: 12px; padding-bottom: 12px; background: #F7F8FC; border-radius: 4px; overflow: hidden; border: 1px #C6CBEC solid; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div class="LeftContent"
                                    style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                                    <div class="Profile"
                                        style="width: 24px; height: 24px; padding-left: 3.75px; padding-right: 3.75px; padding-top: 1.50px; padding-bottom: 1.50px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector" style="width: 16.50px; height: 21px; background: #1C2458">
                                        </div>
                                    </div>
                                    <div class="Text"
                                        style="flex: 1 1 0; color: #1C2458; font-size: 14px; font-family: Inter; font-weight: 600; line-height: 18px; word-wrap: break-word">
                                        Profile</div>
                                </div>
                            </div>
                            <div class="Collaboration"
                                style="align-self: stretch; height: 44px; padding-left: 16px; padding-right: 16px; padding-top: 12px; padding-bottom: 12px; border-radius: 4px; overflow: hidden; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div class="LeftContent"
                                    style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                                    <div class="Handshakr"
                                        style="width: 24px; height: 24px; padding-top: 4.50px; padding-bottom: 3px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector" style="width: 24px; height: 16.50px; background: #1A1A1A">
                                        </div>
                                    </div>
                                    <div class="Text"
                                        style="flex: 1 1 0; color: #29292D; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 20.30px; word-wrap: break-word">
                                        Collaboration</div>
                                </div>
                            </div>
                            <div class="Wallet"
                                style="align-self: stretch; height: 44px; padding-left: 16px; padding-right: 16px; padding-top: 12px; padding-bottom: 12px; border-radius: 4px; overflow: hidden; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div class="LeftContent"
                                    style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                                    <div class="Wallet"
                                        style="width: 24px; height: 24px; padding-top: 1px; padding-bottom: 3px; padding-left: 3px; padding-right: 2.50px; justify-content: center; align-items: center; display: flex">
                                        <div class="Vector" style="width: 18.50px; height: 20px; background: #1A1A1A">
                                        </div>
                                    </div>
                                    <div class="Text"
                                        style="flex: 1 1 0; color: #29292D; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 20.30px; word-wrap: break-word">
                                        Wallet</div>
                                </div>
                            </div>
                            <div class="Notifications"
                                style="align-self: stretch; height: 44px; padding-left: 16px; padding-right: 16px; padding-top: 12px; padding-bottom: 12px; border-radius: 4px; overflow: hidden; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                <div class="LeftContent"
                                    style="flex: 1 1 0; height: 24px; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                                    <div class="Notifications" style="width: 24px; height: 24px; position: relative">
                                        <div class="Vector"
                                            style="width: 3.82px; height: 8.23px; left: 2.78px; top: 1.18px; position: absolute; background: #29292D">
                                        </div>
                                        <div class="Vector"
                                            style="width: 15.16px; height: 19.75px; left: 4.42px; top: 2px; position: absolute; background: #29292D">
                                        </div>
                                        <div class="Vector"
                                            style="width: 3.83px; height: 8.24px; left: 17.39px; top: 1.17px; position: absolute; background: #29292D">
                                        </div>
                                    </div>
                                    <div class="Text"
                                        style="flex: 1 1 0; color: #29292D; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 20.30px; word-wrap: break-word">
                                        Notification</div>
                                </div>
                                <div class="Badge"
                                    style="padding-left: 8px; padding-right: 8px; background: #F0F2F5; border-radius: 10px; flex-direction: column; justify-content: center; align-items: center; gap: 8px; display: inline-flex">
                                    <div class="Container"
                                        style="justify-content: center; align-items: center; gap: 2px; display: inline-flex">
                                        <div class="Label"
                                            style="text-align: center; color: #29292D; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 17.40px; word-wrap: break-word">
                                            10</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="BottomSection"
                style="flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                <div class="SidebarMenu"
                    style="height: 80px; padding-top: 8px; padding-bottom: 8px; flex-direction: column; justify-content: flex-end; align-items: flex-end; display: flex">
                    <div class="Sidebar"
                        style="align-self: stretch; padding-left: 24px; padding-right: 24px; padding-top: 12px; padding-bottom: 12px; border-radius: 4px; overflow: hidden; justify-content: space-between; align-items: center; display: inline-flex">
                        <div class="Frame9"
                            style="flex: 1 1 0; height: 40px; justify-content: flex-start; align-items: center; gap: 12px; display: flex">
                            <div class="Avatars" style="width: 40px; height: 40px; position: relative">
                                <img class="Image"
                                    style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute; background: linear-gradient(0deg, #FFE7CC 0%, #FFE7CC 100%); border-radius: 200px; border: 1.50px white solid"
                                    src="https://via.placeholder.com/40x40" />
                                <div class="AvatarOnlineIndicator"
                                    style="width: 10px; height: 10px; left: 30px; top: 28px; position: absolute; background: #04802E; border-radius: 10px; border: 1px white solid">
                                </div>
                            </div>
                            <div class="Frame8"
                                style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                <div class="Text"
                                    style="width: 132px; color: #1A1A1A; font-size: 14px; font-family: Inter; font-weight: 600; line-height: 18px; word-wrap: break-word">
                                    Cheta Ihekwaba</div>
                                <div class="Text"
                                    style="align-self: stretch; color: #5F5E63; font-size: 14px; font-family: Inter; font-weight: 400; line-height: 21px; word-wrap: break-word">
                                    Chetachii@gmail.com</div>
                            </div>
                        </div>
                        <div class="IconSignOut"
                            style="width: 20px; height: 20px; padding-top: 1.67px; padding-bottom: 1.67px; padding-left: 1.67px; padding-right: 0.83px; justify-content: center; align-items: center; display: flex">
                            <div class="Icon" style="width: 17.50px; height: 16.67px; background: black"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Header"
            style="width: 1168px; height: 64px; padding: 24px; left: 272px; top: 0px; position: absolute; background: white; border-bottom: 1px #ECEBEC solid; justify-content: space-between; align-items: center; display: inline-flex">
            <div class="Frame1000007956"
                style="justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                <div class="NavLink1"
                    style="width: 100px; padding-left: 12px; padding-right: 12px; padding-top: 6px; padding-bottom: 6px; background: #F1F0F3; border-radius: 15px; border: 1px #8288AA solid; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                    <div class="Workspace"
                        style="text-align: center; color: #2E303B; font-size: 14px; font-family: Inter; font-weight: 600; line-height: 18px; word-wrap: break-word">
                        Workspace</div>
                </div>
                <div class="NavLink2"
                    style="width: 63px; padding-left: 12px; padding-right: 12px; padding-top: 6px; padding-bottom: 6px; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                    <div class="Learn"
                        style="text-align: center; color: #2E303B; font-size: 14px; font-family: Inter; font-weight: 600; line-height: 18px; word-wrap: break-word">
                        Learn</div>
                </div>
                <div class="NavLink3"
                    style="width: 108px; padding-left: 12px; padding-right: 12px; padding-top: 6px; padding-bottom: 6px; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                    <div class="Certification"
                        style="text-align: center; color: #2E303B; font-size: 14px; font-family: Inter; font-weight: 600; line-height: 18px; word-wrap: break-word">
                        Certification</div>
                </div>
            </div>
            <div class="Frame1000007955"
                style="justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                <div class="Help" style="justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                    <div class="HelpIcon" style="width: 24px; height: 24px; position: relative">
                        <div class="Vector"
                            style="width: 19.50px; height: 19.50px; left: 2.25px; top: 2.25px; position: absolute; border: 1.50px #2E303B solid">
                        </div>
                        <div class="Vector"
                            style="width: 7.50px; height: 7.50px; left: 8.25px; top: 8.25px; position: absolute; border: 1.50px #2E303B solid">
                        </div>
                        <div class="Vector"
                            style="width: 18.94px; height: 18.94px; left: 2.53px; top: 2.53px; position: absolute; border: 1.50px #2E303B solid">
                        </div>
                    </div>
                    <div class="Help"
                        style="color: #2E303B; font-size: 14px; font-family: Inter; font-weight: 600; line-height: 18px; word-wrap: break-word">
                        Help</div>
                </div>
                <div class="Settings"
                    style="justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                    <div class="SettingsIcon"
                        style="width: 24px; height: 24px; padding-left: 3.02px; padding-right: 3.02px; padding-top: 2.50px; padding-bottom: 2.50px; justify-content: center; align-items: center; display: flex">
                        <div class="Group" style="width: 17.97px; height: 19px; position: relative">
                            <div class="Vector"
                                style="width: 6.73px; height: 6.73px; left: 5.75px; top: 6.18px; position: absolute; border: 1.50px #2E303B solid">
                            </div>
                            <div class="Vector"
                                style="width: 17.97px; height: 19px; left: 0px; top: 0px; position: absolute; border: 1.50px #2E303B solid">
                            </div>
                        </div>
                    </div>
                    <div class="Settings"
                        style="color: #2E303B; font-size: 14px; font-family: Inter; font-weight: 600; line-height: 18px; word-wrap: break-word">
                        Settings</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
