{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
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

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
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

        ::-webkit-backdrop {
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

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ route('question.index') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                    <path
                        d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                        fill="#FF2D20" />
                </svg>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="https://laravel.com/docs"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laravel has wonderful documentation covering every aspect of the framework. Whether you
                                are a newcomer or have prior experience with Laravel, we recommend reading our
                                documentation from beginning to end.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://laracasts.com"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round"
                                        d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://laravel-news.com"
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <div
                        class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div
                                class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>,
                                <a href="https://vapor.laravel.com"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>,
                                <a href="https://nova.laravel.com"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>,
                                and <a href="https://envoyer.io"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a>
                                help you take your projects to the next level. Pair them with powerful open source
                                libraries like <a href="https://laravel.com/docs/billing"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>,
                                <a href="https://laravel.com/docs/dusk"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>,
                                <a href="https://laravel.com/docs/broadcasting"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>,
                                <a href="https://laravel.com/docs/horizon"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>,
                                <a href="https://laravel.com/docs/sanctum"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>,
                                <a href="https://laravel.com/docs/telescope"
                                    class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>,
                                and more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/sponsors/taylorotwell"
                            class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5"
                                class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-Equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Assignment Help Service ✏️ Homework Help with Writing My Assignments</title>
    <meta name="description"
        content="Looking For Assignment Help? ⏩ Get top-rated assignment assistance online in over 100 subjects ✔️ Best Experts ✍Any Deadlines & 24/7 Support">
    <meta name="keywords" content="studybay, service, writing, essay, help, paper">
    <link rel="canonical" href="https://studybay.com/">
    <meta property="og:url" content="https://studybay.com">
    <meta property="og:title" content="Online Assignment Help Service ✏️ Homework Help with My Assignments">
    <meta property="og:description"
        content="Looking For Assignment Help? ⏩ Get top-rated assignment assistance online in over 100 subjects ✔️ Best Experts ✍Any Deadlines & 24/7 Support">
    <meta property="og:image" content="https://studybay.app/assets/images/marketing/social/Sticker.jpg">
    <meta name="wot-verification" content="27ca4e5d2383980ec39b">
    <meta name="robots" content="index,follow">
    <link rel="icon shortcut" href="/favicon.ef6ebfc0.ico" type="image/x-icon">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
    <header class="header" id="page-header" aria-expanded="false">
        <div class="container header__container">
            <div class="header__sticky-exclusive-description"> <span class="h4">Sterling Academia</span>
                <p class="header__p p"> A-Plus Homework Help<br>For College Students </p>
            </div>
            <div class="header__logo" aria-hidden="true"> <span class="h4">Sterling Academia</span></div>
            <div class="header__side-menu side-menu">
                <div class="header__cta header-cta">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            <a class="a a--shy-round" href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>
                        </div>
                    @endif
                    <a href="{{ route('register') }}" class="a a--cta a--cta-round" data-secret="?studybay%app$reg$"
                        data-tabindex="0 0 2" data-hidden="" id="signup-link">Sign Up</a> <button
                        class="a a--cta a--cta-round side-menu__close" type="button" id="close-menu"
                        data-tabindex="0 0 3" data-focustrap-last="m"> <svg width="14" height="14"
                            viewBox="0 0 14 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M1 1 L13 13"></path>
                            <path d="M13 1 L1 13"></path>
                        </svg> <span class="IH">Close menu</span> </button>
                </div>
                <ul class="dropdown header__menu header-menu">
                    <li>
                        <div class="dropdown">
                            <button class="blank header-menu__link dropdown-toggle" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </button>
                            <ul class="header-menu dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu__item"> <a class="a a--shy header-menu__link" href="/authors/"
                            data-tabindex="0 4 7"> Our Experts </a> </li>
                    <li class="header-menu__item"> <a class="a a--shy header-menu__link" href="/blog/"
                            data-tabindex="0 2 5"> Blog </a> </li>
                    <li class="header-menu__item"> <a class="a a--shy header-menu__link" href="/info/about/"
                            data-tabindex="0 1 4" data-focustrap-first="m"> About Us </a> </li>
                </ul>
            </div> <button class="blank header__burger" type="button" id="open-menu"> <svg width="32"
                    height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path
                        d="M4 8.00002C4 7.26365 4.59696 6.66669 5.33333 6.66669H26.6667C27.4031 6.66669 28 7.26365 28 8.00002C28 8.73639 27.4031 9.33335 26.6667 9.33335H5.33333C4.59696 9.33335 4 8.73639 4 8.00002Z"
                        fill="black"></path>
                    <path
                        d="M4 16C4 15.2636 4.59696 14.6667 5.33333 14.6667H26.6667C27.4031 14.6667 28 15.2636 28 16C28 16.7364 27.4031 17.3334 26.6667 17.3334H5.33333C4.59696 17.3334 4 16.7364 4 16Z"
                        fill="black"></path>
                    <path
                        d="M5.33333 22.6667C4.59696 22.6667 4 23.2636 4 24C4 24.7364 4.59696 25.3334 5.33333 25.3334H26.6667C27.4031 25.3334 28 24.7364 28 24C28 23.2636 27.4031 22.6667 26.6667 22.6667H5.33333Z"
                        fill="black"></path>
                </svg> <span class="IH">Open menu</span> </button>
        </div>
    </header>
    <main class="no-x-scroll">
        <div class="hero">
            <div class="container">
                <div class="hero__content"> <span role="heading" aria-level="1" class="h1 hero__h1"
                        data-heading-hidden="true"></span>
                    <p class="hero__p p"> Get personalized expert assistance in any academic field. 100+ courses and
                        programs covered. </p>
                    <form class="hero__form" id="hero-form"> <label for="project-description-textarea"
                            class="IH">Describe your project briefly</label>
                        <textarea class="field hero__textarea" placeholder="Describe your project briefly" required minlength="4"
                            maxlength="110" id="project-description-textarea"></textarea> <button class="button hero__button" type="submit"> Find an Expert
                        </button>
                    </form>
                </div>
            </div>
            <div class="hero__bg hero__bg--front" id="hero-bg-front"></div>
            <div class="hero__bg hero__bg--back" id="hero-bg-back"></div>
        </div>
        <section class="steps" id="steps" aria-labelledby="Title-Steps">
            <div class="container steps__container"> <span role="heading" aria-level="2" class="steps__title"
                    id="Title-Steps">How It Works</span>
                <ul class="steps__list ul">
                    <li class="li step">
                        <div class="step__video" aria-hidden="true">
                            <div class="video">
                                <div class="video__head"> <span class="video__dots"></span> </div> <video
                                    class="video__player" autoplay loop playsinline="" preload="auto"
                                    poster="/assignment-requirements.f2c2d7f1.jpg" muted data-video-step="0">
                                    <source type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="step__text"> <span role="heading" aria-level="3" class="step__title">1. Fill in
                                a brief</span>
                            <p class="p step__description">Tell us what you need help with, describe your project
                                requirements, and set the deadline.</p>
                        </div>
                    </li>
                    <li class="li step">
                        <div class="step__video" aria-hidden="true">
                            <div class="video">
                                <div class="video__head"> <span class="video__dots"></span> </div> <video
                                    class="video__player" autoplay loop playsinline="" preload="auto"
                                    poster="/assignment-writer.cf3e9594.jpg" muted data-video-step="1">
                                    <source type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="step__text"> <span role="heading" aria-level="3" class="step__title">2. Choose
                                an expert</span>
                            <p class="p step__description">Receive offers from those who can help with assignments,
                                compare their ratings, and pick the best one for your task.</p>
                        </div>
                    </li>
                    <li class="li step">
                        <div class="step__video" aria-hidden="true">
                            <div class="video">
                                <div class="video__head"> <span class="video__dots"></span> </div> <video
                                    class="video__player" autoplay loop playsinline="" preload="auto"
                                    poster="/assignment-help-for-students.cf2be110.jpg" muted data-video-step="2">
                                    <source type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="step__text"> <span role="heading" aria-level="3" class="step__title">3. Get it
                                done on time</span>
                            <p class="p step__description">Chat with the expert directly, discuss your project in
                                detail, and get professional academic assistance by the deadline.</p> <span
                                data-secret="?studybay%app$reg$" data-hidden="" class="a a--cta step__button"> Let's
                                go </span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="experts" aria-labelledby="Title-Experts">
            <div class="container experts__container"> <span role="heading" aria-level="2" class="experts__title h2"
                    id="Title-Experts">Who Are the Experts?</span>
                <div class="experts__description">
                    <p class="experts__description p">We engage alumni of the world's top universities and colleges to
                        become Studybay experts. We carefully check each candidate's academic and professional
                        background before hiring.</p>
                </div>
                <div class="universities">
                    <p class="p universities__title"> Cooperate with those who graduated from the best universities and
                        colleges </p>
                    <div class="universities__separator" aria-hidden="true"></div>
                    <div class="universities__logos"> <img src="/univ-logos-1.4e013491.svg" width="254"
                            height="30" loading="lazy" alt=""> <img src="/univ-logos-2.40efff3c.svg"
                            width="282" height="30" loading="lazy" alt=""> </div>
                </div>
                <div class="slider__wrapper" id="experts-slider">
                    <div class="slider slider--snap">
                        <div class="slider__inner">
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/427981.16e5103d.webp 1x,/427981.cf00a0bd.jpg 1x"
                                            src="/427981.cf00a0bd.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.8</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Jennifer H </span>
                                        <p class="expert__position p">Business</p>
                                        <p class="expert__activity p"> <span>1709</span> finished papers </p>
                                    </span></div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/452087.51a5ed7c.webp 1x,/452087.ffd33bb3.jpg 1x"
                                            src="/452087.ffd33bb3.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">5.0</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Young H</span> </span>
                                    <p class="expert__position p">Economics</p>
                                    <p class="expert__activity p"> <span>374</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/26948.4208e31a.webp 1x,/26948.89f51821.jpg 1x"
                                            src="/26948.89f51821.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.4</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Jabali</span> </span>
                                    <p class="expert__position p">Telecommunications</p>
                                    <p class="expert__activity p"> <span>307</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/35688.8c7da302.webp 1x,/35688.c58ea943.jpg 1x"
                                            src="/35688.c58ea943.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.3</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">David</span> </span>
                                    <p class="expert__position p">Business</p>
                                    <p class="expert__activity p"> <span>337</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/44644.2773709a.webp 1x,/44644.fae868e5.jpg 1x"
                                            src="/44644.fae868e5.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.8</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Gabrielle M</span> </span>
                                    <p class="expert__position p">History/Sociology</p>
                                    <p class="expert__activity p"> <span>1098</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/143701.33f76215.webp 1x,/143701.7e86f0d3.jpg 1x"
                                            src="/143701.7e86f0d3.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.9</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Java S </span>
                                        <p class="expert__position p">History</p>
                                        <p class="expert__activity p"> <span>7406</span> finished papers </p>
                                    </span></div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/52928.112f4e6f.webp 1x,/52928.46c75bce.jpg 1x"
                                            src="/52928.46c75bce.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.5</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Kelvin N</span> </span>
                                    <p class="expert__position p">Biochemistry</p>
                                    <p class="expert__activity p"> <span>2021</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/61280.89ea1e3e.webp 1x,/61280.a6fb4f2c.jpg 1x"
                                            src="/61280.a6fb4f2c.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> <span
                                            class="IH">Expert's rating is</span> <span
                                            class="expert__rating">5.0</span> </span></div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Josh H</span> </span>
                                    <p class="expert__position p">Pharmacy</p>
                                    <p class="expert__activity p"> <span>2262</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/472346.4b2dd085.webp 1x,/472346.07663c6f.jpg 1x"
                                            src="/472346.07663c6f.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.7</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Denis C</span> </span>
                                    <p class="expert__position p">Computer Science</p>
                                    <p class="expert__activity p"> <span>555</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/186604.af78eba3.webp 1x,/186604.5f6fdd7a.jpg 1x"
                                            src="/186604.5f6fdd7a.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.7</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Alphonse W</span> </span>
                                    <p class="expert__position p">Agriculture</p>
                                    <p class="expert__activity p"> <span>965</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/227874.953bcb44.webp 1x,/227874.267d2ac9.jpg 1x"
                                            src="/227874.267d2ac9.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.9</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Tamara C</span> </span>
                                    <p class="expert__position p">Business</p>
                                    <p class="expert__activity p"> <span>2024</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/421299.f33c263e.webp 1x,/421299.3ac8106b.jpg 1x"
                                            src="/421299.3ac8106b.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.7</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Victor</span> </span>
                                    <p class="expert__position p">Informatics</p>
                                    <p class="expert__activity p"> <span>257</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/425189.9b1d2f22.webp 1x,/425189.2f64a9ee.jpg 1x"
                                            src="/425189.2f64a9ee.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.5</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Weylin H</span> </span>
                                    <p class="expert__position p">Actuarial Science</p>
                                    <p class="expert__activity p"> <span>2691</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/508499.f020340b.webp 1x,/508499.61ff4ec6.jpg 1x"
                                            src="/508499.61ff4ec6.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.9</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Mary J</span> </span>
                                    <p class="expert__position p">Statistics</p>
                                    <p class="expert__activity p"> <span>5197</span> finished papers </p>
                                </div>
                            </article>
                            <article class="expert">
                                <div class="expert__top"> <span> <img loading="lazy"
                                            srcset="/663459.a8ff973a.webp 1x,/663459.920785cb.jpg 1x"
                                            src="/663459.920785cb.jpg" class="expert__avatar" width="96"
                                            height="96" alt="" aria-hidden="true"> </span> <span
                                        class="IH">Expert's rating is</span> <span
                                        class="expert__rating">4.1</span> </div>
                                <div class="expert__inner"> <span role="heading" aria-level="3"
                                        class="expert__name h3"> <span class="fake-a">Mufasa</span> </span>
                                    <p class="expert__position p">Business</p>
                                    <p class="expert__activity p"> <span>245</span> finished papers </p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="slider__controls"> <button type="button"
                            class="slider__control slider__control--left" tabindex="-1" aria-hidden="true" hidden>
                            Scroll to left </button> <button type="button"
                            class="slider__control slider__control--right" tabindex="-1" aria-hidden="true" hidden>
                            Scroll to right </button> </div>
                </div>
                <div class="experts__become-wrapper"> <span class="a a--cta experts__become-link" data-hidden=""
                        data-secret="$essay-writing-jobs$">Become an Expert</span> </div>
            </div>
        </section>
        <section class="what-special-wrapper">
            <div class="container container--wide glide what-special">
                <article class="what-special__common">
                    <h1 class="h1 what-special__heading" role="heading" aria-level="2"> What Makes Assignment Help
                        From Our Experts So Special? </h1>
                    <p class="p what-special__desc"> Studybay gives you a chance to cooperate with top experts within
                        different fields of study. Work on your projects being guided by a professional and be sure
                        everything will be done by the deadline </p>
                </article>
                <div class="what-special__more">
                    <div class="slider__wrapper" id="what-special-slider">
                        <div class="slider slider--snap">
                            <div>
                                <article class="glide__slide special-skill"> <img loading="lazy"
                                        srcset="/verification-of-our-academic-writers.72bb4aac.webp 1x,/verification-of-our-academic-writers.2fdc3021.jpg 1x"
                                        src="/verification-of-our-academic-writers.2fdc3021.jpg" width="405"
                                        height="280px" alt="Verification of our writers" class="special-skill__img">
                                    <div class="special-skill__content"> <span role="heading" aria-level="3"
                                            class="h3 special-skill__heading"> Verification </span>
                                        <p class="p special-skill__desc"> We care about your projects and pick the best
                                            specialists to help with assignments of yours. Before claiming that the
                                            person is an expert, we verify the identity of each candidate via social
                                            media. </p>
                                    </div>
                                </article>
                                <article class="glide__slide special-skill"> <img loading="lazy"
                                        srcset="/skill-test-for-writers.c8094c88.webp 1x,/skill-test-for-writers.5610414e.jpg 1x"
                                        src="/skill-test-for-writers.5610414e.jpg" width="405" height="280px"
                                        alt="Skill check" class="special-skill__img">
                                    <div class="special-skill__content"> <span role="heading" aria-level="3"
                                            class="h3 special-skill__heading"> Skill Test </span>
                                        <p class="p special-skill__desc"> We test each candidate by examining their
                                            skills and knowledge with various examinations in different academic fields.
                                            We make sure the education level and work experience that the expert
                                            describes on their profile match their real expertise and that they really
                                            are capable of providing you with high-quality online assignment help. </p>
                                    </div>
                                </article>
                                <article class="glide__slide special-skill"> <img loading="lazy"
                                        srcset="/check-for-assignment-writers.864def6f.webp 1x,/check-for-assignment-writers.ad5ec8b4.jpg 1x"
                                        src="/check-for-assignment-writers.ad5ec8b4.jpg" width="405"
                                        height="280px" alt="Quality check" class="special-skill__img">
                                    <div class="special-skill__content"> <span role="heading" aria-level="3"
                                            class="h3 special-skill__heading"> Quality Analysis </span>
                                        <p class="p special-skill__desc"> We developed an AI-based system that analyses
                                            the quality of each expert’s performance. We form a rating based on the data
                                            we collect and reviews that experts get from their clients, so you can be
                                            sure the assignment helper you find on Studybay is skilled and reliable. We
                                            also check each review for reliability. </p>
                                    </div>
                                </article>
                                <article class="glide__slide special-skill"> <img loading="lazy"
                                        srcset="/academic-writers-with-best-grades.d430cb9d.webp 1x,/academic-writers-with-best-grades.b1ccdff1.jpg 1x"
                                        src="/academic-writers-with-best-grades.b1ccdff1.jpg" width="405"
                                        height="280px" alt="Assignment assistance online for students"
                                        class="special-skill__img">
                                    <div class="special-skill__content"> <span role="heading" aria-level="3"
                                            class="h3 special-skill__heading"> Education Level </span>
                                        <p class="p special-skill__desc"> Our experts are graduates of the world’s
                                            leading universities. We carefully check diplomas and credentials to make
                                            sure each document is legit and matches the education level that is claimed.
                                        </p>
                                    </div>
                                </article>
                                <article class="glide__slide special-skill"> <img loading="lazy"
                                        srcset="/expertise-in-writing-service-help.243ecc9b.webp 1x,/expertise-in-writing-service-help.0fc304ac.jpg 1x"
                                        src="/expertise-in-writing-service-help.0fc304ac.jpg" width="405"
                                        height="280px" alt="Expertise in study help" class="special-skill__img">
                                    <div class="special-skill__content"> <span role="heading" aria-level="3"
                                            class="h3 special-skill__heading"> Broad Expertise </span>
                                        <p class="p special-skill__desc"> It doesn't matter how complicated your
                                            assignment is. We can find a specialist that is competent enough to provide
                                            you with a clear and effective solution to any academic problem. Can't find
                                            reliable sources with strong arguments and need assignment writing help? Or
                                            can't wrap your mind over a polynomial equation and want assistance with
                                            algebra? Studybay experts can nail it. </p>
                                    </div>
                                </article>
                                <article class="glide__slide special-skill"> <img loading="lazy"
                                        srcset="/communication-with-college-students.80b92b7f.webp 1x,/communication-with-college-students.09e4ca59.jpg 1x"
                                        src="/communication-with-college-students.09e4ca59.jpg" width="405"
                                        height="280px" alt="Get assignment help" class="special-skill__img">
                                    <div class="special-skill__content"> <span role="heading" aria-level="3"
                                            class="h3 special-skill__heading"> Communication Skills </span>
                                        <p class="p special-skill__desc"> You can chat with all the experts who can
                                            help you with your assignments, even before you hire them. Make your
                                            decision based not only on reviews and ratings but also on your own
                                            impression of the direct interaction with the person. After you've chosen
                                            the right professional with whom to cooperate, you can still communicate
                                            with them via chat to discuss your project and track the progress. </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div aria-controls="what-special-slider" class="slider__controls"> <button type="button"
                            class="slider__control slider__control--left" tabindex="-1" aria-hidden="true" hidden>
                            Scroll to left </button> <button type="button"
                            class="slider__control slider__control--right" tabindex="-1" aria-hidden="true" hidden>
                            Scroll to right </button> </div>
                </div>
            </div>
        </section>
        <div class="container container--wide way-more">
            <h2 class="h2 way-more__heading"> Way More Than Any Other Assignment Help Website </h2>
            <section class="way-more__top" id="way-more">
                <article class="concise-info-card way-more-card way-more-card--right-reduced">
                    <div class="way-more-card__content">
                        <div class="concise-info-card__info"> <span class="h3 way-more-card__heading" role="heading"
                                aria-level="3"> Studybay </span>
                            <p class="p way-more-card__text"> Work on your assignments while being guided by an expert
                                in the discipline. </p>
                        </div> <img loading="lazy" width="96" height="96"
                            srcset="/teacher.954c6f5e.webp 1x,/teacher.1934ef94.png 1x" src="/teacher.1934ef94.png"
                            alt="" class="way-more-card__teacher"> <span data-secret="?studybay%app$reg$"
                            data-hidden="" class="a a--cta way-more-card__link"> Cooperate With Experts </span>
                    </div>
                    <div class="way-more-card__video">
                        <div class="way-more-video">
                            <div class="way-more-video__head"> <span class="way-more-video__dots"></span> </div>
                            <div class="way-more-video__window"> <video aria-hidden="true"
                                    class="way-more-video__player" preload="auto"
                                    poster="/about-poster.9de803f3.webp" loop>
                                    <source type="video/mp4">
                                </video> </div>
                        </div>
                    </div>
                </article>
                <article class="plagiarism-card way-more-card way-more-card--dark">
                    <div class="plagiarism-card__content"> <span class="h3 way-more-card__heading" role="heading"
                            aria-level="3"> Plagiarism Checker </span>
                        <p class="p plagiarism-card__text way-more-card__text"> Make sure your project is authentic and
                            plagiarism-free in a few clicks. </p>
                        <div class="plagiarism-card__papers"> <img loading="lazy" width="140" height="140"
                                srcset="/paper1.c52b9249.webp 1x,/paper1.55967e76.png 1x" src="/paper1.55967e76.png"
                                alt="" class="plagiarism-card__paper-1"> <img loading="lazy" width="140"
                                height="140" srcset="/paper2.0d5d3c80.webp 1x,/paper2.e2ec56e7.png 1x"
                                src="/paper2.e2ec56e7.png" alt="" class="plagiarism-card__paper-2"> <img
                                loading="lazy" width="140" height="140"
                                srcset="/ok.eea3ba76.webp 1x,/ok.43dc4585.png 1x" src="/ok.43dc4585.png"
                                alt="" class="plagiarism-card__ok-image"> </div> <a
                            href="/plagiarism-checker/"
                            class="a a--cta way-more-card__link way-more-card__link--down"> Check Your Project </a>
                    </div>
                </article>
            </section>
            <section class="way-more__bottom">
                <article class="way-more-card way-more-card--wc"> <span class="h3 way-more-card__heading"
                        role="heading" aria-level="3"> Writing Center </span>
                    <p class="p way-more-card__text"> Get professional assistance with your academic writings for
                        school, college, or university. </p> <span data-hidden="" data-secret="$order$"
                        class="a a--cta way-more-card__link way-more-card__link--down"> Get Expert Help </span>
                </article>
                <article class="way-more-card way-more-card--dark way-more-card--sr">
                    <div class="way-more-card__images" aria-hidden="true"> <span
                            class="way-more-card__emoji">✍️</span> <span class="way-more-card__operator">+️</span>
                        <span class="way-more-card__paper"></span> <span class="way-more-card__operator">=️</span>
                        <span class="way-more-card__emoji">✅</span>
                    </div> <span class="h3 way-more-card__heading" role="heading" aria-level="3"> Study Documents
                    </span>
                    <p class="p way-more-card__text"> Browse our collection of study documents for inspiration on your
                        next paper. </p> <a href="https://loop.studybay.com/"
                        class="a a--cta way-more-card__link way-more-card__link--down"> Visit Study Resources </a>
                </article>
                <article class="way-more-card way-more-card--sb"> <span class="h3 way-more-card__heading"
                        role="heading" aria-level="3"> Studybay Business </span>
                    <p class="p way-more-card__text"> Leave your content marketing to professionals and focus on
                        developing your enterprise. </p> <span data-secret="?studybay%business/" data-hidden=""
                        class="a a--cta way-more-card__link way-more-card__link--down"> Boost Your Business </span>
                </article>
            </section>
        </div>
        <div class="testimonials" hidden id="testimonials">
            <div class="container"> <span class="testimonials__heading" role="heading" aria-level="2">Reviews from
                    Studybay Community</span>
                <ul class="reviews__container ul">
                    <li class="li review__item"> <svg aria-hidden="true" width="104" height="25"
                            viewBox="0 0 104 25" class="review__item-icon">
                            <title>Our Studybay rating is:</title> <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 102 30" width="100" fill="#0d6efd">
                                <path fillrule="evenodd"
                                    d="M 10.47 6.28 L 13.87 6.28 C 15.79 6.28 16.74 5.78 16.74 4.77 C 16.74 4.39 16.55 4.08 16.16 3.84 C 15.76 3.61 15.24 3.49 14.58 3.49 C 13.57 3.49 12.64 3.77 11.8 4.34 C 10.97 4.9 10.52 5.55 10.47 6.28 L 10.47 6.28 L 10.47 6.28 Z M 12.1 9.7 L 13.41 11.33 L 14.16 12.21 C 15.61 13.98 16.34 15.84 16.35 17.81 C 16.34 19.73 15.7 21.4 14.4 22.85 C 12.66 24.82 10.36 25.81 7.53 25.81 C 5.32 25.81 3.52 25.15 2.11 23.81 C 0.7 22.48 0 20.77 0 18.69 C 0 16.15 1.09 14.02 3.28 12.33 C 4.45 11.42 5.52 10.97 6.51 10.97 C 7.01 10.97 7.42 11.11 7.75 11.4 C 8.07 11.69 8.23 12.06 8.23 12.52 C 8.23 13.13 7.86 13.66 7.12 14.1 L 6 14.8 C 5.34 15.19 4.79 15.75 4.37 16.47 C 3.93 17.18 3.71 17.88 3.72 18.57 C 3.71 19.69 4.09 20.6 4.86 21.32 C 5.61 22.04 6.57 22.4 7.75 22.4 C 9.04 22.4 10.16 21.92 11.12 20.96 C 12.07 20.02 12.54 18.9 12.53 17.62 C 12.54 16.79 12.35 16.04 11.97 15.37 C 11.58 14.71 10.74 13.67 9.45 12.26 C 8.56 11.29 7.92 10.44 7.53 9.7 L 3.72 9.7 C 2.41 9.7 1.76 9.26 1.75 8.37 C 1.76 7.74 1.98 7.24 2.45 6.88 C 2.9 6.54 3.54 6.37 4.37 6.38 L 6.8 6.38 C 6.98 4.53 7.84 3.01 9.35 1.82 C 10.88 0.6 12.7 0 14.82 0 C 16.42 0 17.72 0.43 18.73 1.29 C 19.73 2.16 20.23 3.28 20.23 4.66 C 20.23 6.49 19.43 7.89 17.83 8.87 C 16.93 9.42 15.49 9.7 13.53 9.7 L 12.1 9.7 L 12.1 9.7 Z M 24.31 8.7 L 24.74 8.7 C 25.92 8.7 26.51 9.12 26.51 9.96 C 26.51 10.53 26.3 10.98 25.89 11.3 C 25.47 11.62 24.89 11.78 24.14 11.78 L 23.14 11.78 L 21.27 16.45 L 22.83 16.45 C 24.01 16.45 24.6 16.87 24.6 17.71 C 24.6 18.28 24.39 18.73 23.97 19.05 C 23.56 19.37 22.99 19.53 22.25 19.53 L 19.74 19.53 C 19.04 19.53 18.48 19.37 18.06 19.05 C 17.65 18.71 17.44 18.26 17.44 17.69 C 17.44 17.34 17.53 16.96 17.71 16.52 L 17.97 15.91 L 19.6 11.78 L 19.4 11.78 C 18.35 11.78 17.83 11.37 17.82 10.54 C 17.83 9.97 18.04 9.51 18.45 9.18 C 18.87 8.86 19.45 8.7 20.19 8.7 L 20.84 8.7 L 21.58 6.83 L 21.73 6.46 C 22.16 5.41 22.85 4.88 23.78 4.88 C 24.17 4.88 24.5 5.01 24.76 5.27 C 25.05 5.53 25.19 5.85 25.2 6.22 C 25.19 6.57 25.06 7.03 24.81 7.58 L 24.31 8.7 L 24.31 8.7 Z M 35.67 16.41 L 37.3 16.41 C 37.94 16.41 38.39 16.51 38.66 16.71 C 38.93 16.9 39.07 17.22 39.07 17.67 C 39.07 18.25 38.86 18.71 38.45 19.04 C 38.03 19.37 37.45 19.53 36.7 19.53 L 34.2 19.53 C 33.42 19.53 32.9 19.22 32.65 18.6 C 32.12 19.22 31.48 19.53 30.7 19.53 L 28.67 19.53 C 27.85 19.53 27.17 19.27 26.63 18.75 C 26.08 18.22 25.81 17.56 25.81 16.76 C 25.81 16.3 25.93 15.76 26.17 15.16 L 28.07 10.36 C 28.61 9.04 29.34 8.37 30.25 8.37 C 30.66 8.37 31 8.5 31.28 8.77 C 31.56 9.03 31.7 9.35 31.71 9.72 C 31.7 10.02 31.63 10.35 31.47 10.73 L 31.33 11.1 L 29.87 14.79 L 29.7 15.23 C 29.62 15.47 29.57 15.66 29.55 15.77 C 29.54 16.21 29.81 16.43 30.37 16.44 C 31.53 16.43 32.3 15.95 32.67 14.99 L 34.42 10.58 C 34.95 9.24 35.69 8.57 36.65 8.57 C 37.03 8.57 37.36 8.71 37.66 8.96 C 37.92 9.24 38.06 9.56 38.06 9.95 C 38.06 10.23 37.94 10.69 37.7 11.3 L 35.67 16.41 L 35.67 16.41 Z M 43.72 16.74 L 44.25 16.74 C 44.89 16.74 45.31 16.5 45.51 16.01 L 46.55 13.52 C 46.68 13.22 46.74 12.99 46.74 12.83 C 46.74 12.56 46.63 12.33 46.39 12.14 C 46.16 11.95 45.86 11.86 45.51 11.86 C 44.79 11.86 44.12 12.25 43.49 13.04 C 42.87 13.81 42.56 14.65 42.56 15.55 C 42.56 16.35 42.95 16.74 43.72 16.74 L 43.72 16.74 Z M 49.01 16.45 L 50.68 16.45 C 51.9 16.45 52.52 16.87 52.52 17.71 C 52.52 18.28 52.3 18.73 51.85 19.05 C 51.43 19.37 50.83 19.53 50.06 19.53 L 48.11 19.53 C 47.35 19.53 46.8 19.23 46.45 18.64 C 45.83 19.23 45.16 19.53 44.45 19.53 L 42.61 19.53 C 41.54 19.53 40.68 19.18 40.04 18.47 C 39.39 17.74 39.07 16.79 39.07 15.6 C 39.07 13.77 39.71 12.14 40.99 10.69 C 42.25 9.23 43.68 8.5 45.27 8.5 C 46.44 8.5 47.38 8.91 48.06 9.74 L 51.3 1.99 C 51.86 0.66 52.63 0 53.62 0 C 54.04 0 54.39 0.13 54.69 0.39 C 54.97 0.65 55.12 0.97 55.12 1.34 C 55.12 1.64 55.04 1.97 54.89 2.33 L 54.72 2.72 L 49.01 16.45 L 49.01 16.45 Z M 55.81 23.02 L 53.96 23.02 C 51.94 23.02 50.93 23.67 50.93 24.98 C 50.93 25.44 51.07 25.81 51.34 26.09 C 51.62 26.37 51.99 26.51 52.47 26.51 C 53.1 26.51 53.67 26.25 54.16 25.74 C 54.67 25.22 55.22 24.32 55.81 23.02 L 55.81 23.02 Z M 60.92 20.3 L 62.59 20.3 C 63.8 20.3 64.41 20.71 64.42 21.54 C 64.41 22.11 64.2 22.55 63.78 22.86 C 63.34 23.18 62.75 23.34 61.98 23.33 L 59.66 23.33 C 59.38 24.14 58.87 25.2 58.13 26.51 C 56.88 28.84 55.04 30 52.64 30 C 51.16 30 49.93 29.55 48.94 28.66 C 47.94 27.77 47.44 26.66 47.44 25.34 C 47.44 24.43 47.71 23.57 48.25 22.78 C 48.79 21.98 49.51 21.38 50.4 20.99 C 51.4 20.53 52.9 20.3 54.88 20.3 L 57.22 20.3 L 57.64 19.3 C 56.93 19.59 56.28 19.73 55.69 19.73 C 54.66 19.73 53.83 19.48 53.21 18.96 C 52.56 18.46 52.24 17.81 52.25 17 C 52.24 16.51 52.45 15.77 52.86 14.78 L 54.41 11.03 L 54.59 10.65 C 55.04 9.59 55.76 9.07 56.73 9.07 C 57.14 9.07 57.5 9.2 57.79 9.45 C 58.06 9.72 58.2 10.05 58.21 10.46 C 58.2 10.72 58.08 11.16 57.84 11.77 L 56.43 15.09 C 56.2 15.63 56.09 15.98 56.09 16.14 C 56.05 16.59 56.34 16.82 56.98 16.81 C 57.41 16.82 57.86 16.69 58.31 16.45 C 58.78 16.19 59.07 15.91 59.19 15.59 L 61.11 11.03 L 61.26 10.65 C 61.71 9.59 62.43 9.07 63.41 9.07 C 63.83 9.07 64.18 9.2 64.46 9.48 C 64.74 9.73 64.88 10.06 64.88 10.46 C 64.88 10.72 64.81 11.03 64.66 11.39 L 64.49 11.77 L 60.92 20.3 L 60.92 20.3 Z M 66.98 15.21 C 67.42 15.77 67.94 16.05 68.53 16.05 C 68.97 16.05 69.33 15.93 69.63 15.68 C 70.03 15.36 70.39 14.88 70.71 14.24 C 71.01 13.6 71.16 13.02 71.16 12.52 C 71.16 12.11 71.05 11.79 70.82 11.55 C 70.58 11.29 70.28 11.16 69.9 11.16 C 69.06 11.16 68.38 11.78 67.87 13.02 L 66.98 15.21 L 66.98 15.21 Z M 69.95 8.59 C 70.35 8.45 70.72 8.39 71.04 8.39 C 72.12 8.39 72.99 8.8 73.65 9.62 C 74.32 10.45 74.65 11.52 74.65 12.84 C 74.65 15.38 73.7 17.37 71.8 18.8 C 71.13 19.29 70.43 19.53 69.71 19.53 L 68.4 19.53 C 67.48 19.53 66.7 19.2 66.05 18.53 C 65.66 19.2 65.05 19.53 64.22 19.53 C 63.82 19.53 63.48 19.4 63.22 19.14 C 62.93 18.87 62.79 18.54 62.79 18.16 C 62.79 17.87 62.86 17.55 63 17.18 L 63.17 16.79 L 68.97 2.01 L 69.14 1.6 C 69.56 0.53 70.23 0 71.13 0 C 71.56 0 71.91 0.13 72.18 0.39 C 72.47 0.66 72.61 0.98 72.61 1.35 C 72.61 1.66 72.54 1.98 72.39 2.36 L 72.23 2.75 L 69.95 8.59 L 69.95 8.59 Z M 80 16.74 L 80.34 16.74 C 81.1 16.74 81.6 16.44 81.86 15.85 L 82.83 13.52 C 82.96 13.22 83.02 12.97 83.02 12.76 C 83.02 12.52 82.9 12.31 82.67 12.14 C 82.41 11.95 82.11 11.86 81.76 11.86 C 81.09 11.86 80.44 12.24 79.79 12.99 C 79.16 13.76 78.84 14.55 78.84 15.36 C 78.84 16.28 79.22 16.74 80 16.74 L 80 16.74 Z M 85.19 16.41 L 86.8 16.41 C 88 16.41 88.6 16.83 88.6 17.67 C 88.6 18.25 88.39 18.71 87.96 19.04 C 87.52 19.37 86.92 19.53 86.18 19.53 L 84.32 19.53 C 83.49 19.53 82.92 19.22 82.63 18.58 C 81.9 19.22 81.21 19.53 80.53 19.53 L 78.89 19.53 C 77.83 19.53 76.97 19.16 76.32 18.4 C 75.67 17.66 75.35 16.68 75.35 15.45 C 75.35 13.63 75.99 11.99 77.26 10.54 C 78.54 9.1 79.98 8.37 81.59 8.37 C 82.82 8.37 83.72 8.8 84.29 9.65 C 84.77 8.93 85.4 8.57 86.18 8.57 C 86.6 8.57 86.96 8.71 87.24 8.96 C 87.52 9.24 87.67 9.57 87.66 9.97 C 87.67 10.23 87.59 10.55 87.44 10.93 L 87.27 11.3 L 85.19 16.41 L 85.19 16.41 Z M 92.09 23.02 L 90.24 23.02 C 88.22 23.02 87.21 23.67 87.21 24.98 C 87.21 25.44 87.35 25.81 87.62 26.09 C 87.9 26.37 88.27 26.51 88.75 26.51 C 89.38 26.51 89.95 26.25 90.44 25.74 C 90.95 25.22 91.49 24.32 92.09 23.02 L 92.09 23.02 Z M 97.2 20.3 L 98.87 20.3 C 100.08 20.3 100.69 20.71 100.69 21.54 C 100.69 22.11 100.48 22.55 100.05 22.86 C 99.62 23.18 99.03 23.34 98.26 23.33 L 95.94 23.33 C 95.66 24.14 95.15 25.2 94.41 26.51 C 93.16 28.84 91.32 30 88.92 30 C 87.44 30 86.21 29.55 85.22 28.66 C 84.22 27.77 83.72 26.66 83.72 25.34 C 83.72 24.43 83.99 23.57 84.53 22.78 C 85.07 21.98 85.79 21.38 86.68 20.99 C 87.68 20.53 89.18 20.3 91.16 20.3 L 93.5 20.3 L 93.92 19.3 C 93.21 19.59 92.56 19.73 91.97 19.73 C 90.94 19.73 90.11 19.48 89.49 18.96 C 88.84 18.46 88.52 17.81 88.52 17 C 88.52 16.51 88.73 15.77 89.14 14.78 L 90.69 11.03 L 90.87 10.65 C 91.32 9.59 92.03 9.07 93.01 9.07 C 93.42 9.07 93.78 9.2 94.07 9.45 C 94.34 9.72 94.48 10.05 94.49 10.46 C 94.48 10.72 94.36 11.16 94.12 11.77 L 92.69 15.09 C 92.48 15.63 92.37 15.98 92.37 16.14 C 92.33 16.59 92.62 16.82 93.25 16.81 C 93.69 16.82 94.14 16.69 94.59 16.45 C 95.06 16.19 95.35 15.91 95.47 15.59 L 97.39 11.03 L 97.54 10.65 C 97.99 9.59 98.71 9.07 99.68 9.07 C 100.1 9.07 100.46 9.2 100.74 9.48 C 101.02 9.73 101.16 10.06 101.16 10.46 C 101.16 10.72 101.09 11.03 100.94 11.39 L 100.77 11.77 L 97.2 20.3 L 97.2 20.3 Z M 97.2 20.3">
                                </path>
                            </svg>
                        </svg> <span class="review__item-rating">4.6</span> </li>
                    <li class="li review__item"> <svg aria-hidden="true" width="104" height="25"
                            viewBox="0 0 104 25" class="review__item-icon">
                            <title>Our ReviewCentre rating is:</title> <svg xmlns="http://www.w3.org/2000/svg"
                                width="100" height="25" viewBox="0 0 230 57.9" aria-hidden="true"
                                style="position:relative;top:5px;">
                                <path
                                    d="M114.6 0H6.8C3.1 0 0 3.1 0 6.8v27.3c0 3.8 3.1 6.8 6.8 6.8H12v15.3c0 1.4 1.6 2.1 2.6 1.3L32 40.9h82.6c3.8 0 6.8-3.1 6.8-6.8V6.8c0-3.7-3-6.8-6.8-6.8z"
                                    fill="#8d288c"></path>
                                <path
                                    d="M14.2 11.3c.5 0 .8.2.8.7l.2 2.7c.4-.9 1-1.7 2-2.4.9-.7 2.1-1.1 3.4-1.1.2 0 .4 0 .5.1s.2.3.2.5V15c0 .4-.2.6-.6.6h-1.1c-1.2 0-2.3.5-3.1 1.5-.8 1-1.2 2.2-1.2 3.5v7.8c0 .5-.3.8-.8.8h-2.9c-.5 0-.8-.3-.8-.8V12.1c0-.5.3-.8.8-.8h2.6zM37.6 25.1c.5-.2.8-.1 1 .5l.6 1.6c.1.4-.1.8-.5 1-1.8.9-3.7 1.3-5.9 1.3-3 0-5.3-.8-7-2.4-1.7-1.6-2.5-3.9-2.5-6.8s.8-5.2 2.3-6.9c1.5-1.6 3.6-2.4 6.3-2.4 2.6 0 4.6.8 6 2.3 1.4 1.5 2.1 3.6 2.1 6.2V21c0 .5-.3.8-.8.8H27.7c.2 1.3.7 2.4 1.7 3.2 1 .8 2.2 1.2 3.8 1.2 1.5 0 3-.4 4.4-1.1zm-10-6.1H36v-.2c0-1.4-.3-2.6-1-3.4-.7-.8-1.7-1.2-3-1.2-2.7 0-4.2 1.6-4.4 4.8zM48.9 29.1c-.5 0-.8-.2-1-.6l-5.8-16.2c-.2-.6 0-.9.6-.9h3c.5 0 .8.2.9.7l2.5 7.7 1.4 4.9h.1l1.4-4.9 2.5-7.7c.1-.5.4-.7.9-.7h3c.3 0 .5.1.6.3.1.2.1.4 0 .6l-5.8 16.2c-.2.4-.5.6-1 .6h-3.3zM66.5 8.5c0 .5-.2.8-.7.8h-3c-.5 0-.7-.3-.7-.8V6.2c0-.5.2-.8.7-.8h3c.5 0 .7.3.7.8v2.3zm0 19.8c0 .5-.3.8-.8.8h-2.9c-.5 0-.8-.3-.8-.8V12.1c0-.5.3-.8.8-.8h2.9c.5 0 .8.3.8.8v16.2zM84.6 25.1c.5-.2.8-.1 1 .5l.6 1.6c.1.4-.1.8-.5 1-1.8.9-3.7 1.3-5.9 1.3-3 0-5.3-.8-7-2.4-1.7-1.6-2.5-3.9-2.5-6.8s.8-5.2 2.3-6.9c1.5-1.6 3.6-2.4 6.3-2.4 2.6 0 4.6.8 6 2.3 1.4 1.5 2.1 3.6 2.1 6.2V21c0 .5-.3.8-.8.8H74.7c.2 1.3.7 2.4 1.7 3.2 1 .8 2.2 1.2 3.8 1.2 1.5 0 3-.4 4.4-1.1zm-10-6.1H83v-.2c0-1.4-.3-2.6-1-3.4-.7-.8-1.7-1.2-3-1.2-2.7 0-4.2 1.6-4.4 4.8zM104 11.3c.4 0 .7.2.8.7l2.8 9.1.8 3.5h.1l.7-3.5 2.4-9c.1-.5.4-.7.9-.7h3c.6 0 .8.3.6.9l-4.8 16.1c-.1.5-.5.7-1 .7h-3c-.5 0-.9-.3-1-.8l-2.6-8.1-1-3.7h-.1l-1 3.7-2.5 8.1c-.2.5-.5.8-1 .8h-3c-.5 0-.8-.2-1-.7l-4.9-16.1c-.2-.6 0-.9.6-.9h3c.5 0 .8.2.9.7l2.4 9 .7 3.5h.1L98 21l2.7-9.1c.1-.5.4-.7.9-.7h2.4z"
                                    fill="#fff"></path>
                                <path
                                    d="M128.1 13.5c1.6-1.6 3.7-2.3 6.4-2.3 2.2 0 3.9.4 5.1 1.1.5.3.6.6.4 1l-.8 1.8c-.2.5-.6.6-1.1.4-.9-.4-2-.6-3.1-.6-1.5 0-2.7.4-3.5 1.3-.8.9-1.3 2.2-1.3 4 0 1.8.4 3.2 1.3 4.1.8.9 2 1.4 3.5 1.4 1.3 0 2.4-.3 3.4-.8.5-.2.8-.1 1 .4l.8 1.8c.2.4 0 .7-.5 1-1.3.8-3 1.2-5 1.2-2.7 0-4.9-.8-6.5-2.4-1.6-1.6-2.4-3.8-2.4-6.7 0-2.9.8-5.2 2.3-6.7zM156.1 25.1c.5-.2.8-.1 1 .5l.6 1.6c.1.4-.1.7-.5 1-1.7.9-3.6 1.3-5.7 1.3-2.9 0-5.2-.8-6.8-2.4-1.6-1.6-2.5-3.8-2.5-6.7 0-2.9.8-5.1 2.3-6.7 1.5-1.6 3.6-2.4 6.2-2.4 2.5 0 4.5.8 5.9 2.3 1.4 1.5 2.1 3.5 2.1 6v1.6c0 .5-.3.8-.8.8h-11.3c.2 1.3.7 2.4 1.7 3.1.9.8 2.2 1.1 3.7 1.1 1.3-.1 2.8-.4 4.1-1.1zm-9.7-6h8.2v-.2c0-1.4-.3-2.5-1-3.3-.7-.8-1.6-1.2-2.9-1.2-2.7 0-4.1 1.5-4.3 4.7zM177.9 28.2c0 .5-.3.8-.8.8h-2.8c-.5 0-.8-.3-.8-.8v-9.8c0-1.2-.2-2-.7-2.6-.5-.6-1.3-.9-2.5-.9s-2.2.4-2.9 1.1c-.7.7-1 1.7-1 2.9v9.3c0 .5-.3.8-.8.8h-2.8c-.5 0-.8-.3-.8-.8V12.3c0-.5.3-.8.8-.8h2.6c.5 0 .7.2.8.7l.2 1.7c1.1-1.8 2.9-2.8 5.5-2.8 2 0 3.5.6 4.5 1.7s1.5 2.7 1.5 4.8v10.6zM187.3 15.2v8c0 .9.2 1.6.5 1.9.3.4.9.5 1.8.5.2 0 .6-.1 1.4-.2.2 0 .4 0 .5.1s.2.3.2.5l.2 1.8c0 .4-.2.6-.6.8-.7.2-1.7.4-2.8.4-1.9 0-3.3-.4-4.2-1.3s-1.3-2.2-1.3-4.2V15h-1.8c-.5 0-.8-.3-.8-.8v-1.8c0-.5.3-.8.8-.8h1.9V7.8c0-.5.3-.7.8-.7h2.6c.5 0 .8.2.8.7v4.1h3.7c.5 0 .8.3.8.8v1.8c0 .5-.3.8-.8.8h-3.7zM198.2 11.5c.5 0 .7.2.8.7l.2 2.6c.4-.9 1-1.7 1.9-2.4.9-.7 2-1.1 3.3-1.1.2 0 .4 0 .5.1s.1.3.1.5V15c0 .4-.2.6-.6.6h-1.1c-1.2 0-2.2.5-3 1.5-.8 1-1.2 2.1-1.2 3.4v7.6c0 .5-.3.8-.8.8h-2.8c-.5 0-.8-.3-.8-.8V12.3c0-.5.3-.8.8-.8h2.7zM221.1 25.1c.5-.2.8-.1 1 .5l.6 1.6c.1.4-.1.7-.5 1-1.7.9-3.6 1.3-5.7 1.3-2.9 0-5.2-.8-6.8-2.4-1.6-1.6-2.5-3.8-2.5-6.7 0-2.9.8-5.1 2.3-6.7 1.5-1.6 3.6-2.4 6.2-2.4 2.5 0 4.5.8 5.9 2.3 1.4 1.5 2.1 3.5 2.1 6v1.6c0 .5-.3.8-.8.8h-11.3c.2 1.3.7 2.4 1.7 3.1.9.8 2.2 1.1 3.7 1.1s2.7-.4 4.1-1.1zm-9.8-6h8.2v-.2c0-1.4-.3-2.5-1-3.3-.7-.8-1.6-1.2-2.9-1.2-2.6 0-4.1 1.5-4.3 4.7z"
                                    fill="#313283"></path>
                            </svg>
                        </svg> <span class="review__item-rating">4.8</span> </li>
                    <li class="li review__item"> <svg aria-hidden="true" width="104" height="25"
                            viewBox="0 0 104 25" class="review__item-icon">
                            <title>Our SiteJabber rating is:</title> <svg xmlns="http://www.w3.org/2000/svg"
                                width="103" height="25" viewBox="0 1500 10400 2000" aria-hidden="true"
                                style="position:relative;top:3px;">
                                <path
                                    d="M4600 3391v-111h84c70 0 88-3 111-22 55-43 55-43 55-613v-525h241l-3 553c-3 546-4 553-26 621-18 52-35 80-71 116-64 63-116 81-268 87l-123 6v-112zM2187 3026c-112-47-190-140-199-236l-3-35 106-3 107-3 19 38c62 122 296 101 281-25-4-38-52-66-160-92-250-60-323-124-323-280 0-91 22-138 91-198 108-96 283-116 436-50 86 37 158 135 158 216 0 21-3 22-107 22h-108l-17-30c-45-79-199-78-227 1-23 66 15 95 174 135 168 41 239 82 279 162 56 110 40 219-43 302-71 71-137 93-286 97-108 3-126 1-178-21zM4095 3032c-230-81-356-315-304-564 50-241 290-400 540-359 240 39 398 233 387 476l-3 66-350 2-350 2 4 25c14 103 121 180 250 180 77 0 141-23 196-72l46-40 72 37c104 54 104 53 63 107-41 53-106 99-185 130s-292 37-366 10zm391-563c-16-80-79-140-173-164-48-12-71-13-109-5-99 22-171 86-189 168l-7 32h485l-7-31zM5513 3030c-114-41-211-128-262-234-38-77-55-190-44-276 31-225 169-370 393-412 109-20 241 15 317 85l43 40v-113h240l-2 458-3 457-117 3-118 3v-122l-34 35c-18 20-60 48-92 63-79 37-240 43-321 13zm313-228c143-73 179-265 73-386-118-134-338-112-422 43-31 57-37 155-12 214 27 66 92 125 163 148 45 14 153 4 198-19zM6703 3029c-31-12-71-39-98-65l-45-46v122h-230V1620h230v305c0 168 2 305 5 305s22-17 44-39c95-95 286-115 439-46 61 28 154 112 189 173 60 102 82 276 49 397-40 151-139 262-279 314-79 29-228 29-304 0zm225-225c178-88 177-360-1-451-128-66-288-10-341 119-20 48-21 158-1 205 41 97 124 153 230 153 46 0 74-7 113-26zM7791 3033c-24-8-66-38-94-64-28-27-51-49-52-49v115l-117 3-118 3V1620h241l-1 303c0 166-1 305 0 308 0 3 22-16 49-42 109-105 313-116 467-23 74 44 96 65 139 129 95 144 107 344 31 511-36 77-121 164-204 204-63 32-74 34-182 37-86 2-126-2-159-14zm190-213c53-15 113-72 139-132 32-74 26-188-14-248-107-162-341-152-429 20-25 49-28 63-24 125 6 107 61 192 147 229 40 18 129 20 181 6zM8787 3026c-195-82-297-235-297-446 0-246 153-430 392-470 162-28 343 33 437 146 71 86 116 226 109 342l-3 54-354-2-354-1 7 32c35 179 312 243 451 105l41-41 81 45c45 25 85 48 89 52s-24 38-62 76c-102 101-165 125-344 129-125 3-139 2-193-21zm409-553c-34-141-201-216-341-154-63 28-93 55-116 106-37 79-49 75 222 75h241l-6-27zM2840 2580v-460h230v920h-230v-460zM3340 2675v-365h-170v-190h170v-350h230v350h200v190h-200v730h-230v-365zM9550 2580v-460h242l-2 93c-2 120-3 120 24 62 61-134 172-194 307-166 30 6 59 15 66 19 8 5 6 34-10 110-19 96-22 103-41 97-39-11-134-18-169-11-53 10-122 76-148 144-21 52-23 79-28 312l-6 255-117 3-118 3v-461zM2873 1880c-96-58-91-190 9-239 56-26 98-27 149 0 75 38 95 133 45 205-37 52-144 70-203 34zM4910 1892c-84-37-115-132-67-203 75-113 260-77 274 53 8 86-59 159-146 157-25 0-53-3-61-7z"
                                    fill="#323231"></path>
                                <path
                                    d="M630 3027c-273-81-466-300-510-580-24-145 0-291 72-437 54-110 186-246 293-302 123-64 203-83 345-83s222 19 345 83c107 56 239 192 293 302 23 47 50 114 59 150 23 88 23 263 0 350-17 64-68 178-104 233l-18 27 140 140 140 140-490-1c-477 0-492-1-565-22z"
                                    fill="#f06a22"></path>
                                <path
                                    d="M562 2695c-5-9 1-68 15-148l23-132-90-84c-50-46-95-91-100-101-18-33 12-46 147-65l130-17 61-124c81-163 83-163 164 0l61 124 130 17c135 19 165 32 147 65-5 10-50 55-100 101l-90 84 20 115c24 137 25 169 6 176-8 3-69-23-136-58l-120-63-120 63c-65 34-124 62-129 62-6 0-14-7-19-15z"
                                    fill="#fffdfb"></path>
                            </svg>
                        </svg> <span class="review__item-rating">4.7</span> </li>
                    <li class="li review__item"> <svg aria-hidden="true" width="104" height="25"
                            viewBox="0 0 104 25" class="review__item-icon">
                            <title>Our Reviews.io rating is:</title> <svg xmlns="http://www.w3.org/2000/svg"
                                width="104" height="20" viewBox="0 0 124 20" fill="none"
                                aria-hidden="true" style="position:relative;top:3px;">
                                <path
                                    d="M32.4077 15.393L29.2303 11.3028C31.2704 10.8252 32.6967 9.49343 32.6967 7.28608V7.24837C32.6967 6.14116 32.2918 5.15611 31.6079 4.47153C30.734 3.59761 29.3655 3.07471 27.658 3.07471H22.6173C22.1221 3.07471 21.6953 3.49718 21.6953 4.0158V16.0409C21.6953 16.5597 22.1221 16.9821 22.6173 16.9821C23.1339 16.9821 23.5577 16.5585 23.5577 16.0409V11.6525H27.1688L30.9078 16.51C31.1131 16.7838 31.3904 16.9821 31.7556 16.9821C32.2271 16.9821 32.6967 16.5554 32.6967 16.0593C32.6967 15.8078 32.5895 15.598 32.4077 15.393V15.393ZM30.815 7.306L30.8151 7.34436H30.815C30.815 8.98172 29.4335 9.94372 27.5228 9.94372H23.5577V4.82188H27.5421C29.5958 4.82188 30.815 5.74272 30.815 7.306V7.306Z"
                                    fill="black"></path>
                                <path
                                    d="M35.4126 15.9449C35.4126 16.4629 35.8393 16.8855 36.3346 16.8855H44.8C45.2801 16.8855 45.6637 16.5012 45.6637 16.0211C45.6637 15.5417 45.2802 15.1574 44.8 15.1574H37.2752V10.7862H43.8381C44.3184 10.7862 44.7025 10.4026 44.7025 9.92248C44.7025 9.46626 44.3184 9.05811 43.8381 9.05811H37.2752V4.80344H44.704C45.1833 4.80344 45.5684 4.41917 45.5684 3.93908C45.5684 3.45898 45.1833 3.07471 44.704 3.07471H36.3346C35.8395 3.07471 35.4126 3.49718 35.4126 4.01596V15.9449V15.9449Z"
                                    fill="black"></path>
                                <path
                                    d="M53.4852 17.0412L53.5862 17.0409C54.0901 17.0321 54.4041 16.7483 54.6033 16.3046L59.8205 4.25381C59.8669 4.1379 59.8905 4.022 59.8905 3.88288C59.8905 3.40887 59.4897 2.97998 58.9685 2.97998C58.5554 2.97998 58.2261 3.29181 58.0647 3.61303C58.0629 3.61665 58.0613 3.62027 58.0596 3.62406L53.5435 14.4418L49.0452 3.66242C48.8848 3.27222 48.5578 2.97998 48.0987 2.97998C47.579 2.97998 47.1567 3.4306 47.1567 3.90131C47.1567 4.06579 47.1818 4.18269 47.2514 4.32263L52.4422 16.301C52.6232 16.7521 52.9658 17.0412 53.4852 17.0412V17.0412Z"
                                    fill="black"></path>
                                <path
                                    d="M62.3608 3.92107V16.0422C62.3608 16.5609 62.7876 16.9834 63.2828 16.9834C63.7995 16.9834 64.2233 16.5598 64.2233 16.0422V3.92107C64.2233 3.40344 63.7995 2.97998 63.2828 2.97998C62.7876 2.97998 62.3608 3.40229 62.3608 3.92107V3.92107Z"
                                    fill="black"></path>
                                <path
                                    d="M76.9552 3.07504L76.9328 3.07471H68.5629C68.0685 3.07471 67.6416 3.49718 67.6416 4.01596V15.9449C67.6416 16.4629 68.0683 16.8855 68.5629 16.8855C68.5628 16.8855 77.0288 16.8855 77.0288 16.8855C77.5082 16.8855 77.8925 16.5012 77.8925 16.0211C77.8925 15.5417 77.5082 15.1574 77.0288 15.1574H69.504V10.7862H76.0663C76.5474 10.7862 76.9307 10.4026 76.9307 9.92248C76.9307 9.46626 76.5474 9.05811 76.0663 9.05811H69.504V4.80344H76.9328C77.4121 4.80344 77.7972 4.41917 77.7972 3.93908C77.7972 3.46655 77.4239 3.08673 76.9552 3.07504V3.07504Z"
                                    fill="black"></path>
                                <path
                                    d="M93.4487 17.0595H93.6068C94.0556 17.0499 94.3783 16.7424 94.5362 16.2903C94.5355 16.2917 98.8459 4.3251 98.8459 4.3251C98.8463 4.32346 98.8468 4.32197 98.8475 4.32033C98.8905 4.18861 98.952 4.03303 98.952 3.90131C98.952 3.42962 98.506 2.97998 98.0108 2.97998C97.5676 2.97998 97.2574 3.27337 97.1168 3.69321C97.1174 3.6914 93.5516 13.9477 93.5516 13.9477L90.189 3.69354C90.0497 3.27469 89.7412 2.97998 89.2765 2.97998V2.98146L89.1797 2.97998C88.6912 2.97998 88.4059 3.27469 88.2666 3.69354L84.9042 13.9474L81.3574 3.7291C81.22 3.317 80.8675 2.97998 80.4065 2.97998C79.89 2.97998 79.4468 3.42748 79.4468 3.92058C79.4468 4.05443 79.4873 4.18812 79.5317 4.32115L83.8427 16.2906C84.0013 16.7644 84.3241 17.0506 84.7721 17.0595H84.9302C85.3783 17.0499 85.7018 16.7422 85.8589 16.2899L89.1802 6.41967L92.52 16.2903C92.6779 16.7424 93.0014 17.0499 93.4487 17.0595V17.0595Z"
                                    fill="black"></path>
                                <path
                                    d="M108.682 13.2132V13.2516C108.682 14.4945 107.545 15.3701 105.852 15.3701C104.188 15.3701 102.953 14.8658 101.719 13.8203L101.715 13.8172C101.593 13.698 101.378 13.5993 101.138 13.5993C100.641 13.5993 100.235 14.0002 100.235 14.5213C100.235 14.8302 100.38 15.091 100.593 15.2367C102.124 16.4516 103.792 17.0789 105.794 17.0789C108.576 17.0789 110.563 15.4996 110.563 13.098V13.0588C110.563 10.9251 109.153 9.76088 106.042 9.08255C106.042 9.08255 106.042 9.08239 106.041 9.08239C103.215 8.47651 102.521 7.84478 102.521 6.63301V6.59465C102.521 5.46324 103.583 4.59212 105.217 4.59212C106.431 4.59212 107.496 4.92963 108.598 5.73292C108.599 5.73325 108.599 5.73341 108.599 5.73374C108.764 5.85163 108.929 5.90036 109.142 5.90036C109.64 5.90036 110.044 5.49732 110.044 4.99763C110.044 4.64612 109.837 4.38648 109.648 4.24505C109.647 4.24439 109.646 4.24357 109.645 4.24291C108.385 3.33722 107.067 2.8833 105.255 2.8833C102.589 2.8833 100.658 4.52445 100.658 6.72966L100.83 6.90122C100.83 6.90122 100.658 6.73081 100.658 6.73081V6.76654L100.83 6.93892L100.658 6.76753C100.658 9.05917 102.107 10.1251 105.315 10.822C105.316 10.822 105.316 10.8222 105.316 10.8222C108.008 11.3903 108.682 12.0227 108.682 13.2132V13.2132Z"
                                    fill="black"></path>
                                <path
                                    d="M112.676 15.091L112.66 15.0908C112.298 15.0908 112.041 15.35 112.041 15.6993L112.143 15.8022L112.041 15.6993V15.9147C112.041 16.2636 112.299 16.5342 112.66 16.5342C113.009 16.5342 113.269 16.2642 113.269 15.9147C113.269 15.9717 113.222 16.0176 113.166 16.0176C113.166 16.0176 113.269 16.0061 113.269 15.9099V15.6993C113.269 15.3547 113.017 15.0989 112.676 15.091V15.091ZM112.152 16.0161C112.147 16.0173 112.143 16.0176 112.143 16.0176C112.147 16.0176 112.15 16.0176 112.153 16.0173L112.152 16.0161V16.0161Z"
                                    fill="black"></path>
                                <path
                                    d="M114.878 11.1794V16.011C114.878 16.3057 115.106 16.5337 115.4 16.5337C115.696 16.5337 115.912 16.3064 115.912 16.011V11.1794C115.912 10.8839 115.684 10.6567 115.39 10.6567C115.108 10.6567 114.878 10.8977 114.878 11.1794V11.1794ZM114.802 9.20996H114.802C114.802 9.52591 115.061 9.75394 115.39 9.75394C115.731 9.75394 115.987 9.52525 115.987 9.20996V9.07068C115.987 8.74189 115.731 8.52588 115.39 8.52588C115.061 8.52588 114.802 8.74123 114.802 9.07068L114.802 9.20996Z"
                                    fill="black"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M123.297 13.6023L123.297 13.5789C123.297 11.9512 122.027 10.5913 120.3 10.5913C118.562 10.5913 117.291 11.9736 117.291 13.6001L117.312 13.6215L117.291 13.6008V13.6215C117.291 15.2485 118.551 16.6083 120.278 16.6083C122.016 16.6083 123.296 15.2278 123.297 13.6023V13.6023ZM122.241 13.6215V13.6001C122.241 12.4638 121.394 11.5284 120.278 11.5284C119.132 11.5284 118.347 12.4634 118.347 13.5789V13.6001C118.347 14.7363 119.184 15.6596 120.3 15.6596C121.445 15.6596 122.241 14.7368 122.241 13.6215V13.6215Z"
                                    fill="black"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.0927 4.13916L15.2656 4.55406C16.8781 5.85621 17.6664 7.53819 17.8129 9.57349C17.6904 13.502 15.8369 16.0269 12.6529 17.1098C8.97428 18.2182 6.64328 17.3214 4.38769 15.0231L4.24561 15.9066L5.16266 16.8622C8.35259 20.1865 13.6414 20.2956 16.9657 17.1057C20.2899 13.9156 20.3991 8.62696 17.209 5.30252L16.0927 4.13916V4.13916Z"
                                    fill="#FEEF7C"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.79729 15.415L4.35147 14.9309C2.04896 11.6681 1.95248 6.89114 5.10355 4.26132C7.43932 2.31196 12.074 1.30155 15.7819 4.56623L16.0586 4.07939L15.1551 3.13764C11.965 -0.186641 6.67637 -0.295799 3.35193 2.8943C0.0276509 6.08423 -0.0813419 11.373 3.10859 14.6973L3.79729 15.415V15.415Z"
                                    fill="#5CD3CB"></path>
                                <path
                                    d="M1.81738 10.0248C1.81738 14.6436 5.56232 18.3886 10.1812 18.3886C14.8009 18.3886 18.5456 14.6436 18.5456 10.0248C18.5456 5.40509 14.8009 1.66016 10.1812 1.66016C5.56232 1.66016 1.81738 5.40509 1.81738 10.0248V10.0248ZM7.63895 11.5375C7.72687 11.2593 7.62907 10.956 7.39528 10.7813C6.77622 10.319 5.55574 9.40753 4.73566 8.79507C4.61728 8.70665 4.56887 8.55238 4.61547 8.41211C4.66206 8.27183 4.79312 8.17733 4.94096 8.17733H8.11954C8.4154 8.17733 8.67784 7.98766 8.77086 7.70695C9.02144 6.95009 9.51948 5.44593 9.84975 4.44886C9.89618 4.30875 10.0271 4.21391 10.1748 4.21375C10.3224 4.21358 10.4538 4.30792 10.5006 4.44787C10.8343 5.44576 11.3383 6.9524 11.5913 7.70892C11.685 7.98865 11.947 8.17733 12.242 8.17733C12.9939 8.17733 14.4424 8.17733 15.4286 8.17733C15.576 8.17733 15.707 8.27151 15.7538 8.41145C15.8006 8.5514 15.7528 8.7055 15.6349 8.79424C14.8173 9.41017 13.5962 10.3299 12.9784 10.7951C12.746 10.9701 12.6493 11.2729 12.7371 11.5502C12.976 12.3046 13.4551 13.8175 13.7788 14.8394C13.8239 14.9821 13.7712 15.1379 13.6485 15.2238C13.5259 15.3098 13.3617 15.3063 13.2429 15.2151C12.4215 14.5845 11.2214 13.6634 10.5929 13.1811C10.3458 12.9915 10.002 12.9919 9.75558 13.1826C9.13323 13.6637 7.94946 14.5791 7.13498 15.2088C7.01644 15.3005 6.85196 15.3047 6.72897 15.2187C6.60598 15.1329 6.55297 14.9772 6.59808 14.8343C6.92177 13.8094 7.40022 12.2939 7.63895 11.5375V11.5375Z"
                                    fill="black"></path>
                            </svg>
                        </svg> <span class="review__item-rating">4.7</span> </li>
                </ul>
                <div class="slider__wrapper" id="testimonials-slider" hidden>
                    <div class="slider slider--snap">
                        <div class="slider__inner">
                            <blockquote class="testimonial" data-testimonials=""> <cite
                                    class="testimonial__author"></cite>
                                <div class="given-rating testimonial__rating"></div>
                                <p class="p testimonial__text"></p>
                                <footer class="testimonial__footer">
                                    <div class="testimonial__authority-logo testimonial__authority-logo--studybay">
                                        <span class="IH">This testimonial is from Studybay</span> <svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 102 30" width="100"
                                            fill="#0d6efd">
                                            <path fillrule="evenodd"
                                                d="M 10.47 6.28 L 13.87 6.28 C 15.79 6.28 16.74 5.78 16.74 4.77 C 16.74 4.39 16.55 4.08 16.16 3.84 C 15.76 3.61 15.24 3.49 14.58 3.49 C 13.57 3.49 12.64 3.77 11.8 4.34 C 10.97 4.9 10.52 5.55 10.47 6.28 L 10.47 6.28 L 10.47 6.28 Z M 12.1 9.7 L 13.41 11.33 L 14.16 12.21 C 15.61 13.98 16.34 15.84 16.35 17.81 C 16.34 19.73 15.7 21.4 14.4 22.85 C 12.66 24.82 10.36 25.81 7.53 25.81 C 5.32 25.81 3.52 25.15 2.11 23.81 C 0.7 22.48 0 20.77 0 18.69 C 0 16.15 1.09 14.02 3.28 12.33 C 4.45 11.42 5.52 10.97 6.51 10.97 C 7.01 10.97 7.42 11.11 7.75 11.4 C 8.07 11.69 8.23 12.06 8.23 12.52 C 8.23 13.13 7.86 13.66 7.12 14.1 L 6 14.8 C 5.34 15.19 4.79 15.75 4.37 16.47 C 3.93 17.18 3.71 17.88 3.72 18.57 C 3.71 19.69 4.09 20.6 4.86 21.32 C 5.61 22.04 6.57 22.4 7.75 22.4 C 9.04 22.4 10.16 21.92 11.12 20.96 C 12.07 20.02 12.54 18.9 12.53 17.62 C 12.54 16.79 12.35 16.04 11.97 15.37 C 11.58 14.71 10.74 13.67 9.45 12.26 C 8.56 11.29 7.92 10.44 7.53 9.7 L 3.72 9.7 C 2.41 9.7 1.76 9.26 1.75 8.37 C 1.76 7.74 1.98 7.24 2.45 6.88 C 2.9 6.54 3.54 6.37 4.37 6.38 L 6.8 6.38 C 6.98 4.53 7.84 3.01 9.35 1.82 C 10.88 0.6 12.7 0 14.82 0 C 16.42 0 17.72 0.43 18.73 1.29 C 19.73 2.16 20.23 3.28 20.23 4.66 C 20.23 6.49 19.43 7.89 17.83 8.87 C 16.93 9.42 15.49 9.7 13.53 9.7 L 12.1 9.7 L 12.1 9.7 Z M 24.31 8.7 L 24.74 8.7 C 25.92 8.7 26.51 9.12 26.51 9.96 C 26.51 10.53 26.3 10.98 25.89 11.3 C 25.47 11.62 24.89 11.78 24.14 11.78 L 23.14 11.78 L 21.27 16.45 L 22.83 16.45 C 24.01 16.45 24.6 16.87 24.6 17.71 C 24.6 18.28 24.39 18.73 23.97 19.05 C 23.56 19.37 22.99 19.53 22.25 19.53 L 19.74 19.53 C 19.04 19.53 18.48 19.37 18.06 19.05 C 17.65 18.71 17.44 18.26 17.44 17.69 C 17.44 17.34 17.53 16.96 17.71 16.52 L 17.97 15.91 L 19.6 11.78 L 19.4 11.78 C 18.35 11.78 17.83 11.37 17.82 10.54 C 17.83 9.97 18.04 9.51 18.45 9.18 C 18.87 8.86 19.45 8.7 20.19 8.7 L 20.84 8.7 L 21.58 6.83 L 21.73 6.46 C 22.16 5.41 22.85 4.88 23.78 4.88 C 24.17 4.88 24.5 5.01 24.76 5.27 C 25.05 5.53 25.19 5.85 25.2 6.22 C 25.19 6.57 25.06 7.03 24.81 7.58 L 24.31 8.7 L 24.31 8.7 Z M 35.67 16.41 L 37.3 16.41 C 37.94 16.41 38.39 16.51 38.66 16.71 C 38.93 16.9 39.07 17.22 39.07 17.67 C 39.07 18.25 38.86 18.71 38.45 19.04 C 38.03 19.37 37.45 19.53 36.7 19.53 L 34.2 19.53 C 33.42 19.53 32.9 19.22 32.65 18.6 C 32.12 19.22 31.48 19.53 30.7 19.53 L 28.67 19.53 C 27.85 19.53 27.17 19.27 26.63 18.75 C 26.08 18.22 25.81 17.56 25.81 16.76 C 25.81 16.3 25.93 15.76 26.17 15.16 L 28.07 10.36 C 28.61 9.04 29.34 8.37 30.25 8.37 C 30.66 8.37 31 8.5 31.28 8.77 C 31.56 9.03 31.7 9.35 31.71 9.72 C 31.7 10.02 31.63 10.35 31.47 10.73 L 31.33 11.1 L 29.87 14.79 L 29.7 15.23 C 29.62 15.47 29.57 15.66 29.55 15.77 C 29.54 16.21 29.81 16.43 30.37 16.44 C 31.53 16.43 32.3 15.95 32.67 14.99 L 34.42 10.58 C 34.95 9.24 35.69 8.57 36.65 8.57 C 37.03 8.57 37.36 8.71 37.66 8.96 C 37.92 9.24 38.06 9.56 38.06 9.95 C 38.06 10.23 37.94 10.69 37.7 11.3 L 35.67 16.41 L 35.67 16.41 Z M 43.72 16.74 L 44.25 16.74 C 44.89 16.74 45.31 16.5 45.51 16.01 L 46.55 13.52 C 46.68 13.22 46.74 12.99 46.74 12.83 C 46.74 12.56 46.63 12.33 46.39 12.14 C 46.16 11.95 45.86 11.86 45.51 11.86 C 44.79 11.86 44.12 12.25 43.49 13.04 C 42.87 13.81 42.56 14.65 42.56 15.55 C 42.56 16.35 42.95 16.74 43.72 16.74 L 43.72 16.74 Z M 49.01 16.45 L 50.68 16.45 C 51.9 16.45 52.52 16.87 52.52 17.71 C 52.52 18.28 52.3 18.73 51.85 19.05 C 51.43 19.37 50.83 19.53 50.06 19.53 L 48.11 19.53 C 47.35 19.53 46.8 19.23 46.45 18.64 C 45.83 19.23 45.16 19.53 44.45 19.53 L 42.61 19.53 C 41.54 19.53 40.68 19.18 40.04 18.47 C 39.39 17.74 39.07 16.79 39.07 15.6 C 39.07 13.77 39.71 12.14 40.99 10.69 C 42.25 9.23 43.68 8.5 45.27 8.5 C 46.44 8.5 47.38 8.91 48.06 9.74 L 51.3 1.99 C 51.86 0.66 52.63 0 53.62 0 C 54.04 0 54.39 0.13 54.69 0.39 C 54.97 0.65 55.12 0.97 55.12 1.34 C 55.12 1.64 55.04 1.97 54.89 2.33 L 54.72 2.72 L 49.01 16.45 L 49.01 16.45 Z M 55.81 23.02 L 53.96 23.02 C 51.94 23.02 50.93 23.67 50.93 24.98 C 50.93 25.44 51.07 25.81 51.34 26.09 C 51.62 26.37 51.99 26.51 52.47 26.51 C 53.1 26.51 53.67 26.25 54.16 25.74 C 54.67 25.22 55.22 24.32 55.81 23.02 L 55.81 23.02 Z M 60.92 20.3 L 62.59 20.3 C 63.8 20.3 64.41 20.71 64.42 21.54 C 64.41 22.11 64.2 22.55 63.78 22.86 C 63.34 23.18 62.75 23.34 61.98 23.33 L 59.66 23.33 C 59.38 24.14 58.87 25.2 58.13 26.51 C 56.88 28.84 55.04 30 52.64 30 C 51.16 30 49.93 29.55 48.94 28.66 C 47.94 27.77 47.44 26.66 47.44 25.34 C 47.44 24.43 47.71 23.57 48.25 22.78 C 48.79 21.98 49.51 21.38 50.4 20.99 C 51.4 20.53 52.9 20.3 54.88 20.3 L 57.22 20.3 L 57.64 19.3 C 56.93 19.59 56.28 19.73 55.69 19.73 C 54.66 19.73 53.83 19.48 53.21 18.96 C 52.56 18.46 52.24 17.81 52.25 17 C 52.24 16.51 52.45 15.77 52.86 14.78 L 54.41 11.03 L 54.59 10.65 C 55.04 9.59 55.76 9.07 56.73 9.07 C 57.14 9.07 57.5 9.2 57.79 9.45 C 58.06 9.72 58.2 10.05 58.21 10.46 C 58.2 10.72 58.08 11.16 57.84 11.77 L 56.43 15.09 C 56.2 15.63 56.09 15.98 56.09 16.14 C 56.05 16.59 56.34 16.82 56.98 16.81 C 57.41 16.82 57.86 16.69 58.31 16.45 C 58.78 16.19 59.07 15.91 59.19 15.59 L 61.11 11.03 L 61.26 10.65 C 61.71 9.59 62.43 9.07 63.41 9.07 C 63.83 9.07 64.18 9.2 64.46 9.48 C 64.74 9.73 64.88 10.06 64.88 10.46 C 64.88 10.72 64.81 11.03 64.66 11.39 L 64.49 11.77 L 60.92 20.3 L 60.92 20.3 Z M 66.98 15.21 C 67.42 15.77 67.94 16.05 68.53 16.05 C 68.97 16.05 69.33 15.93 69.63 15.68 C 70.03 15.36 70.39 14.88 70.71 14.24 C 71.01 13.6 71.16 13.02 71.16 12.52 C 71.16 12.11 71.05 11.79 70.82 11.55 C 70.58 11.29 70.28 11.16 69.9 11.16 C 69.06 11.16 68.38 11.78 67.87 13.02 L 66.98 15.21 L 66.98 15.21 Z M 69.95 8.59 C 70.35 8.45 70.72 8.39 71.04 8.39 C 72.12 8.39 72.99 8.8 73.65 9.62 C 74.32 10.45 74.65 11.52 74.65 12.84 C 74.65 15.38 73.7 17.37 71.8 18.8 C 71.13 19.29 70.43 19.53 69.71 19.53 L 68.4 19.53 C 67.48 19.53 66.7 19.2 66.05 18.53 C 65.66 19.2 65.05 19.53 64.22 19.53 C 63.82 19.53 63.48 19.4 63.22 19.14 C 62.93 18.87 62.79 18.54 62.79 18.16 C 62.79 17.87 62.86 17.55 63 17.18 L 63.17 16.79 L 68.97 2.01 L 69.14 1.6 C 69.56 0.53 70.23 0 71.13 0 C 71.56 0 71.91 0.13 72.18 0.39 C 72.47 0.66 72.61 0.98 72.61 1.35 C 72.61 1.66 72.54 1.98 72.39 2.36 L 72.23 2.75 L 69.95 8.59 L 69.95 8.59 Z M 80 16.74 L 80.34 16.74 C 81.1 16.74 81.6 16.44 81.86 15.85 L 82.83 13.52 C 82.96 13.22 83.02 12.97 83.02 12.76 C 83.02 12.52 82.9 12.31 82.67 12.14 C 82.41 11.95 82.11 11.86 81.76 11.86 C 81.09 11.86 80.44 12.24 79.79 12.99 C 79.16 13.76 78.84 14.55 78.84 15.36 C 78.84 16.28 79.22 16.74 80 16.74 L 80 16.74 Z M 85.19 16.41 L 86.8 16.41 C 88 16.41 88.6 16.83 88.6 17.67 C 88.6 18.25 88.39 18.71 87.96 19.04 C 87.52 19.37 86.92 19.53 86.18 19.53 L 84.32 19.53 C 83.49 19.53 82.92 19.22 82.63 18.58 C 81.9 19.22 81.21 19.53 80.53 19.53 L 78.89 19.53 C 77.83 19.53 76.97 19.16 76.32 18.4 C 75.67 17.66 75.35 16.68 75.35 15.45 C 75.35 13.63 75.99 11.99 77.26 10.54 C 78.54 9.1 79.98 8.37 81.59 8.37 C 82.82 8.37 83.72 8.8 84.29 9.65 C 84.77 8.93 85.4 8.57 86.18 8.57 C 86.6 8.57 86.96 8.71 87.24 8.96 C 87.52 9.24 87.67 9.57 87.66 9.97 C 87.67 10.23 87.59 10.55 87.44 10.93 L 87.27 11.3 L 85.19 16.41 L 85.19 16.41 Z M 92.09 23.02 L 90.24 23.02 C 88.22 23.02 87.21 23.67 87.21 24.98 C 87.21 25.44 87.35 25.81 87.62 26.09 C 87.9 26.37 88.27 26.51 88.75 26.51 C 89.38 26.51 89.95 26.25 90.44 25.74 C 90.95 25.22 91.49 24.32 92.09 23.02 L 92.09 23.02 Z M 97.2 20.3 L 98.87 20.3 C 100.08 20.3 100.69 20.71 100.69 21.54 C 100.69 22.11 100.48 22.55 100.05 22.86 C 99.62 23.18 99.03 23.34 98.26 23.33 L 95.94 23.33 C 95.66 24.14 95.15 25.2 94.41 26.51 C 93.16 28.84 91.32 30 88.92 30 C 87.44 30 86.21 29.55 85.22 28.66 C 84.22 27.77 83.72 26.66 83.72 25.34 C 83.72 24.43 83.99 23.57 84.53 22.78 C 85.07 21.98 85.79 21.38 86.68 20.99 C 87.68 20.53 89.18 20.3 91.16 20.3 L 93.5 20.3 L 93.92 19.3 C 93.21 19.59 92.56 19.73 91.97 19.73 C 90.94 19.73 90.11 19.48 89.49 18.96 C 88.84 18.46 88.52 17.81 88.52 17 C 88.52 16.51 88.73 15.77 89.14 14.78 L 90.69 11.03 L 90.87 10.65 C 91.32 9.59 92.03 9.07 93.01 9.07 C 93.42 9.07 93.78 9.2 94.07 9.45 C 94.34 9.72 94.48 10.05 94.49 10.46 C 94.48 10.72 94.36 11.16 94.12 11.77 L 92.69 15.09 C 92.48 15.63 92.37 15.98 92.37 16.14 C 92.33 16.59 92.62 16.82 93.25 16.81 C 93.69 16.82 94.14 16.69 94.59 16.45 C 95.06 16.19 95.35 15.91 95.47 15.59 L 97.39 11.03 L 97.54 10.65 C 97.99 9.59 98.71 9.07 99.68 9.07 C 100.1 9.07 100.46 9.2 100.74 9.48 C 101.02 9.73 101.16 10.06 101.16 10.46 C 101.16 10.72 101.09 11.03 100.94 11.39 L 100.77 11.77 L 97.2 20.3 L 97.2 20.3 Z M 97.2 20.3">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="testimonial__authority-logo testimonial__authority-logo--sitejabber">
                                        <span class="IH">This testimonial is from SiteJabber</span> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="103" height="25"
                                            viewBox="0 1500 10400 2000" aria-hidden="true"
                                            style="position:relative;top:3px;">
                                            <path
                                                d="M4600 3391v-111h84c70 0 88-3 111-22 55-43 55-43 55-613v-525h241l-3 553c-3 546-4 553-26 621-18 52-35 80-71 116-64 63-116 81-268 87l-123 6v-112zM2187 3026c-112-47-190-140-199-236l-3-35 106-3 107-3 19 38c62 122 296 101 281-25-4-38-52-66-160-92-250-60-323-124-323-280 0-91 22-138 91-198 108-96 283-116 436-50 86 37 158 135 158 216 0 21-3 22-107 22h-108l-17-30c-45-79-199-78-227 1-23 66 15 95 174 135 168 41 239 82 279 162 56 110 40 219-43 302-71 71-137 93-286 97-108 3-126 1-178-21zM4095 3032c-230-81-356-315-304-564 50-241 290-400 540-359 240 39 398 233 387 476l-3 66-350 2-350 2 4 25c14 103 121 180 250 180 77 0 141-23 196-72l46-40 72 37c104 54 104 53 63 107-41 53-106 99-185 130s-292 37-366 10zm391-563c-16-80-79-140-173-164-48-12-71-13-109-5-99 22-171 86-189 168l-7 32h485l-7-31zM5513 3030c-114-41-211-128-262-234-38-77-55-190-44-276 31-225 169-370 393-412 109-20 241 15 317 85l43 40v-113h240l-2 458-3 457-117 3-118 3v-122l-34 35c-18 20-60 48-92 63-79 37-240 43-321 13zm313-228c143-73 179-265 73-386-118-134-338-112-422 43-31 57-37 155-12 214 27 66 92 125 163 148 45 14 153 4 198-19zM6703 3029c-31-12-71-39-98-65l-45-46v122h-230V1620h230v305c0 168 2 305 5 305s22-17 44-39c95-95 286-115 439-46 61 28 154 112 189 173 60 102 82 276 49 397-40 151-139 262-279 314-79 29-228 29-304 0zm225-225c178-88 177-360-1-451-128-66-288-10-341 119-20 48-21 158-1 205 41 97 124 153 230 153 46 0 74-7 113-26zM7791 3033c-24-8-66-38-94-64-28-27-51-49-52-49v115l-117 3-118 3V1620h241l-1 303c0 166-1 305 0 308 0 3 22-16 49-42 109-105 313-116 467-23 74 44 96 65 139 129 95 144 107 344 31 511-36 77-121 164-204 204-63 32-74 34-182 37-86 2-126-2-159-14zm190-213c53-15 113-72 139-132 32-74 26-188-14-248-107-162-341-152-429 20-25 49-28 63-24 125 6 107 61 192 147 229 40 18 129 20 181 6zM8787 3026c-195-82-297-235-297-446 0-246 153-430 392-470 162-28 343 33 437 146 71 86 116 226 109 342l-3 54-354-2-354-1 7 32c35 179 312 243 451 105l41-41 81 45c45 25 85 48 89 52s-24 38-62 76c-102 101-165 125-344 129-125 3-139 2-193-21zm409-553c-34-141-201-216-341-154-63 28-93 55-116 106-37 79-49 75 222 75h241l-6-27zM2840 2580v-460h230v920h-230v-460zM3340 2675v-365h-170v-190h170v-350h230v350h200v190h-200v730h-230v-365zM9550 2580v-460h242l-2 93c-2 120-3 120 24 62 61-134 172-194 307-166 30 6 59 15 66 19 8 5 6 34-10 110-19 96-22 103-41 97-39-11-134-18-169-11-53 10-122 76-148 144-21 52-23 79-28 312l-6 255-117 3-118 3v-461zM2873 1880c-96-58-91-190 9-239 56-26 98-27 149 0 75 38 95 133 45 205-37 52-144 70-203 34zM4910 1892c-84-37-115-132-67-203 75-113 260-77 274 53 8 86-59 159-146 157-25 0-53-3-61-7z"
                                                fill="#323231"></path>
                                            <path
                                                d="M630 3027c-273-81-466-300-510-580-24-145 0-291 72-437 54-110 186-246 293-302 123-64 203-83 345-83s222 19 345 83c107 56 239 192 293 302 23 47 50 114 59 150 23 88 23 263 0 350-17 64-68 178-104 233l-18 27 140 140 140 140-490-1c-477 0-492-1-565-22z"
                                                fill="#f06a22"></path>
                                            <path
                                                d="M562 2695c-5-9 1-68 15-148l23-132-90-84c-50-46-95-91-100-101-18-33 12-46 147-65l130-17 61-124c81-163 83-163 164 0l61 124 130 17c135 19 165 32 147 65-5 10-50 55-100 101l-90 84 20 115c24 137 25 169 6 176-8 3-69-23-136-58l-120-63-120 63c-65 34-124 62-129 62-6 0-14-7-19-15z"
                                                fill="#fffdfb"></path>
                                        </svg>
                                    </div>
                                    <div class="testimonial__authority-logo testimonial__authority-logo--reviewcentre">
                                        <span class="IH">This testimonial is from ReviewCentre</span> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="100" height="25"
                                            viewBox="0 0 230 57.9" aria-hidden="true"
                                            style="position:relative;top:5px;">
                                            <path
                                                d="M114.6 0H6.8C3.1 0 0 3.1 0 6.8v27.3c0 3.8 3.1 6.8 6.8 6.8H12v15.3c0 1.4 1.6 2.1 2.6 1.3L32 40.9h82.6c3.8 0 6.8-3.1 6.8-6.8V6.8c0-3.7-3-6.8-6.8-6.8z"
                                                fill="#8d288c"></path>
                                            <path
                                                d="M14.2 11.3c.5 0 .8.2.8.7l.2 2.7c.4-.9 1-1.7 2-2.4.9-.7 2.1-1.1 3.4-1.1.2 0 .4 0 .5.1s.2.3.2.5V15c0 .4-.2.6-.6.6h-1.1c-1.2 0-2.3.5-3.1 1.5-.8 1-1.2 2.2-1.2 3.5v7.8c0 .5-.3.8-.8.8h-2.9c-.5 0-.8-.3-.8-.8V12.1c0-.5.3-.8.8-.8h2.6zM37.6 25.1c.5-.2.8-.1 1 .5l.6 1.6c.1.4-.1.8-.5 1-1.8.9-3.7 1.3-5.9 1.3-3 0-5.3-.8-7-2.4-1.7-1.6-2.5-3.9-2.5-6.8s.8-5.2 2.3-6.9c1.5-1.6 3.6-2.4 6.3-2.4 2.6 0 4.6.8 6 2.3 1.4 1.5 2.1 3.6 2.1 6.2V21c0 .5-.3.8-.8.8H27.7c.2 1.3.7 2.4 1.7 3.2 1 .8 2.2 1.2 3.8 1.2 1.5 0 3-.4 4.4-1.1zm-10-6.1H36v-.2c0-1.4-.3-2.6-1-3.4-.7-.8-1.7-1.2-3-1.2-2.7 0-4.2 1.6-4.4 4.8zM48.9 29.1c-.5 0-.8-.2-1-.6l-5.8-16.2c-.2-.6 0-.9.6-.9h3c.5 0 .8.2.9.7l2.5 7.7 1.4 4.9h.1l1.4-4.9 2.5-7.7c.1-.5.4-.7.9-.7h3c.3 0 .5.1.6.3.1.2.1.4 0 .6l-5.8 16.2c-.2.4-.5.6-1 .6h-3.3zM66.5 8.5c0 .5-.2.8-.7.8h-3c-.5 0-.7-.3-.7-.8V6.2c0-.5.2-.8.7-.8h3c.5 0 .7.3.7.8v2.3zm0 19.8c0 .5-.3.8-.8.8h-2.9c-.5 0-.8-.3-.8-.8V12.1c0-.5.3-.8.8-.8h2.9c.5 0 .8.3.8.8v16.2zM84.6 25.1c.5-.2.8-.1 1 .5l.6 1.6c.1.4-.1.8-.5 1-1.8.9-3.7 1.3-5.9 1.3-3 0-5.3-.8-7-2.4-1.7-1.6-2.5-3.9-2.5-6.8s.8-5.2 2.3-6.9c1.5-1.6 3.6-2.4 6.3-2.4 2.6 0 4.6.8 6 2.3 1.4 1.5 2.1 3.6 2.1 6.2V21c0 .5-.3.8-.8.8H74.7c.2 1.3.7 2.4 1.7 3.2 1 .8 2.2 1.2 3.8 1.2 1.5 0 3-.4 4.4-1.1zm-10-6.1H83v-.2c0-1.4-.3-2.6-1-3.4-.7-.8-1.7-1.2-3-1.2-2.7 0-4.2 1.6-4.4 4.8zM104 11.3c.4 0 .7.2.8.7l2.8 9.1.8 3.5h.1l.7-3.5 2.4-9c.1-.5.4-.7.9-.7h3c.6 0 .8.3.6.9l-4.8 16.1c-.1.5-.5.7-1 .7h-3c-.5 0-.9-.3-1-.8l-2.6-8.1-1-3.7h-.1l-1 3.7-2.5 8.1c-.2.5-.5.8-1 .8h-3c-.5 0-.8-.2-1-.7l-4.9-16.1c-.2-.6 0-.9.6-.9h3c.5 0 .8.2.9.7l2.4 9 .7 3.5h.1L98 21l2.7-9.1c.1-.5.4-.7.9-.7h2.4z"
                                                fill="#fff"></path>
                                            <path
                                                d="M128.1 13.5c1.6-1.6 3.7-2.3 6.4-2.3 2.2 0 3.9.4 5.1 1.1.5.3.6.6.4 1l-.8 1.8c-.2.5-.6.6-1.1.4-.9-.4-2-.6-3.1-.6-1.5 0-2.7.4-3.5 1.3-.8.9-1.3 2.2-1.3 4 0 1.8.4 3.2 1.3 4.1.8.9 2 1.4 3.5 1.4 1.3 0 2.4-.3 3.4-.8.5-.2.8-.1 1 .4l.8 1.8c.2.4 0 .7-.5 1-1.3.8-3 1.2-5 1.2-2.7 0-4.9-.8-6.5-2.4-1.6-1.6-2.4-3.8-2.4-6.7 0-2.9.8-5.2 2.3-6.7zM156.1 25.1c.5-.2.8-.1 1 .5l.6 1.6c.1.4-.1.7-.5 1-1.7.9-3.6 1.3-5.7 1.3-2.9 0-5.2-.8-6.8-2.4-1.6-1.6-2.5-3.8-2.5-6.7 0-2.9.8-5.1 2.3-6.7 1.5-1.6 3.6-2.4 6.2-2.4 2.5 0 4.5.8 5.9 2.3 1.4 1.5 2.1 3.5 2.1 6v1.6c0 .5-.3.8-.8.8h-11.3c.2 1.3.7 2.4 1.7 3.1.9.8 2.2 1.1 3.7 1.1 1.3-.1 2.8-.4 4.1-1.1zm-9.7-6h8.2v-.2c0-1.4-.3-2.5-1-3.3-.7-.8-1.6-1.2-2.9-1.2-2.7 0-4.1 1.5-4.3 4.7zM177.9 28.2c0 .5-.3.8-.8.8h-2.8c-.5 0-.8-.3-.8-.8v-9.8c0-1.2-.2-2-.7-2.6-.5-.6-1.3-.9-2.5-.9s-2.2.4-2.9 1.1c-.7.7-1 1.7-1 2.9v9.3c0 .5-.3.8-.8.8h-2.8c-.5 0-.8-.3-.8-.8V12.3c0-.5.3-.8.8-.8h2.6c.5 0 .7.2.8.7l.2 1.7c1.1-1.8 2.9-2.8 5.5-2.8 2 0 3.5.6 4.5 1.7s1.5 2.7 1.5 4.8v10.6zM187.3 15.2v8c0 .9.2 1.6.5 1.9.3.4.9.5 1.8.5.2 0 .6-.1 1.4-.2.2 0 .4 0 .5.1s.2.3.2.5l.2 1.8c0 .4-.2.6-.6.8-.7.2-1.7.4-2.8.4-1.9 0-3.3-.4-4.2-1.3s-1.3-2.2-1.3-4.2V15h-1.8c-.5 0-.8-.3-.8-.8v-1.8c0-.5.3-.8.8-.8h1.9V7.8c0-.5.3-.7.8-.7h2.6c.5 0 .8.2.8.7v4.1h3.7c.5 0 .8.3.8.8v1.8c0 .5-.3.8-.8.8h-3.7zM198.2 11.5c.5 0 .7.2.8.7l.2 2.6c.4-.9 1-1.7 1.9-2.4.9-.7 2-1.1 3.3-1.1.2 0 .4 0 .5.1s.1.3.1.5V15c0 .4-.2.6-.6.6h-1.1c-1.2 0-2.2.5-3 1.5-.8 1-1.2 2.1-1.2 3.4v7.6c0 .5-.3.8-.8.8h-2.8c-.5 0-.8-.3-.8-.8V12.3c0-.5.3-.8.8-.8h2.7zM221.1 25.1c.5-.2.8-.1 1 .5l.6 1.6c.1.4-.1.7-.5 1-1.7.9-3.6 1.3-5.7 1.3-2.9 0-5.2-.8-6.8-2.4-1.6-1.6-2.5-3.8-2.5-6.7 0-2.9.8-5.1 2.3-6.7 1.5-1.6 3.6-2.4 6.2-2.4 2.5 0 4.5.8 5.9 2.3 1.4 1.5 2.1 3.5 2.1 6v1.6c0 .5-.3.8-.8.8h-11.3c.2 1.3.7 2.4 1.7 3.1.9.8 2.2 1.1 3.7 1.1s2.7-.4 4.1-1.1zm-9.8-6h8.2v-.2c0-1.4-.3-2.5-1-3.3-.7-.8-1.6-1.2-2.9-1.2-2.6 0-4.1 1.5-4.3 4.7z"
                                                fill="#313283"></path>
                                        </svg>
                                    </div>
                                    <p class="testimonial__link-wrapper"> <a class="a a--shy testimonial__link"
                                            href="#">Read more</a> </p>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="slider__controls"> <button type="button"
                            class="slider__control slider__control--left" tabindex="-1" aria-hidden="true" hidden>
                            Scroll to left </button> <button type="button"
                            class="slider__control slider__control--right" tabindex="-1" aria-hidden="true" hidden>
                            Scroll to right </button> </div>
                </div>
            </div>
        </div>
        <div class="about-us">
            <div class="container">
                <div class="about-us__wrapper">
                    <div class="about-us__content">
                        <h3 class="about-us__heading h3"> About Us </h3>
                        <p class="about-us__p p"> Studybay is a team of seasoned professionals and enthusiastic geeks
                            driven by the idea of improving an educational process worldwide. We believe that
                            cooperation is the best way to make learning easier and more effective. </p>
                        <p class="about-us__p p"> That's why we develop groundbreaking EdTech tools — to help students
                            reach their most ambitious goals in collaboration with top educators from all over the
                            world. </p> <span role="heading" aria-level="h4"
                            class="about-us__heading about-us__heading--smaller h3"> Studybay Today </span>
                        <ul class="about-us__ul ul">
                            <li class="about-us__li ul__li"> Helped over 3M students since 2013 </li>
                            <li class="about-us__li ul__li"> Brought 50,000+ top Experts together </li>
                            <li class="about-us__li ul__li"> Improved learning in 100+ countries </li>
                        </ul> <span class="about-us__cta"> <svg width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M15.0195 8.287C17.5365 8.287 18 9.9455 18 12.0985V16.4995H17.997V16.5H15.5145L15.5143 12.4821C15.5107 11.5727 15.4424 10.478 14.221 10.478C12.9275 10.478 12.7295 11.488 12.7295 12.5325V16.4995H10.2445V8.488H12.631V9.5805H12.666C12.9975 8.951 13.8095 8.287 15.0195 8.287ZM8.686 8.4885V16.5H6.198V8.4885H8.686ZM7.441 4.5C8.236 4.5 8.8815 5.1455 8.882 5.941C8.882 6.7365 8.2365 7.3955 7.441 7.3955C6.6455 7.3955 6 6.7365 6 5.941C6 5.1455 6.6455 4.5 7.441 4.5Z"
                                    fill="white"></path>
                            </svg> <a class="a a--shy about-us__a" href="https://www.linkedin.com/company/studybayco/"
                                target="_blank"> Join Us on
                                LinkedIn </a> </span>
                    </div>
                    <div class="about-us__media" aria-hidden="true">
                        <div class="about-us__cell"> <img loading="lazy"
                                srcset="/assignment-help-for-usa-universities.fbdf10d1.webp 1x,/assignment-help-for-usa-universities.f3ccdea6.jpg 1x"
                                src="/assignment-help-for-usa-universities.f3ccdea6.jpg" width="600"
                                height="400" alt="Universities and colleges in USA"> </div>
                        <div class="about-us__cell"> <img loading="lazy"
                                srcset="/every-student-get-professional-assignment.f7a30282.webp 1x,/every-student-get-professional-assignment.97a2594c.jpg 1x"
                                src="/every-student-get-professional-assignment.97a2594c.jpg" width="600"
                                height="400" alt="Assignments online in US"> </div>
                        <div class="about-us__cell"> <img loading="lazy"
                                srcset="/students-choose-our-assignment-help.43186c57.webp 1x,/students-choose-our-assignment-help.c9415bdf.jpg 1x"
                                src="/students-choose-our-assignment-help.c9415bdf.jpg" width="400" height="600"
                                alt="Help for university students"> </div>
                        <div class="about-us__cell"> <img loading="lazy"
                                srcset="/best-results-with-our-service.3c57523a.webp 1x,/best-results-with-our-service.b3419014.jpg 1x"
                                src="/best-results-with-our-service.b3419014.jpg" width="493" height="600"
                                alt="Help with my assignment"> </div>
                        <div class="about-us__cell"> <img loading="lazy"
                                srcset="/editing-help-service.d5ba1cce.webp 1x,/editing-help-service.8c60a398.jpg 1x"
                                src="/editing-help-service.8c60a398.jpg" width="600" height="400"
                                alt="Writer helps with editing"> </div>
                        <div class="about-us__cell"> <img loading="lazy"
                                srcset="/online-college-study.1f061ecf.webp 1x,/online-college-study.7fc93212.jpg 1x"
                                src="/online-college-study.7fc93212.jpg" width="400" height="600"
                                alt="Online study assistance"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-form">
            <div class="container cta-form__container">
                <div class="cta-form__content"> <span role="heading" aria-level="2" class="cta-form__heading">
                        Reach Out to the Expert Now </span>
                    <p class="cta-form__p"> Running out of time to get it done all by yourself? No problem. Just give
                        us a brief project description.<br> Within three minutes, we can find an expert to provide you
                        with professional assignment help. </p>
                    <form class="cta-form__form" id="cta-form"> <label
                            class="cta-form__fragment cta-form__fragment--title"> <span class="cta-form__label IH">
                                What's your project about </span> <input type="text" name="description"
                                class="cta-form__field field" placeholder="Personal self-care plan" required
                                maxlength="110" minlength="4"> </label>
                        <div class="cta-form__lane"> <label class="cta-form__fragment cta-form__fragment--deadline">
                                <span class="cta-form__label IH"> Set the deadline </span> <select name="deadline"
                                    required class="cta-form__field cta-form__field--deadline field">
                                    <option value="" selected disabled>Choose deadline</option>
                                    <option value="today">Today</option>
                                    <option value="tomorrow">Tomorrow</option>
                                    <option value="3days">In 3 days</option>
                                    <option value="week">In a week</option>
                                    <option value="month">In a month</option>
                                </select> </label> </div> <button class="button button--contrast cta-form__button"
                            type="submit"> Find an Expert </button>
                    </form>
                </div>
                <div class="cta-form__info cta-info">
                    <p class="cta-info__line p"> <svg aria-level="true" width="33" height="33"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.428 13.808c.478-5.08 5.095-9.064 10.719-9.064 5.427 0 9.916 3.71 10.653 8.534l-1.702-.846a.82.82 0 0 0-.73 1.467l3.63 1.805 2.468-2.786a.844.844 0 0 0-1.263-1.118l-.746.842c-1.042-5.406-6.157-9.51-12.31-9.51-6.588 0-11.987 4.705-12.47 10.675-.038.48.356.873.838.873s.868-.393.913-.872ZM27.285 20.118c-.478 5.08-5.094 9.064-10.718 9.064-5.427 0-9.916-3.71-10.654-8.534l1.702.846a.82.82 0 0 0 .73-1.467l-3.63-1.805-2.468 2.785a.844.844 0 0 0 1.263 1.12l.747-.843c1.042 5.405 6.157 9.51 12.31 9.51 6.588 0 11.986-4.706 12.469-10.675.039-.48-.356-.873-.837-.873-.482 0-.868.392-.914.872Z"
                                fill="#fff"></path>
                            <path
                                d="M17.435 21.94v1.764H15.5v-1.731c-2.375-.372-3.452-2.055-3.57-3.382l2.324-.501c.084.938.757 1.78 2.206 1.78.842 0 1.448-.389 1.448-1.02 0-.47-.37-.777-1.044-.922l-1.499-.34c-1.886-.437-3.048-1.537-3.048-3.074 0-1.812 1.415-3.057 3.183-3.349V9.418h1.936v1.796c1.853.388 2.695 1.666 2.93 2.766l-2.34.599c-.101-.502-.388-1.343-1.718-1.343-.943 0-1.414.534-1.414 1.052 0 .437.336.776.993.922l1.465.307c2.257.486 3.15 1.748 3.15 3.204 0 1.488-1.112 2.88-3.066 3.22Z"
                                fill="#fff"></path>
                        </svg> Money-Back Guarantee </p>
                    <p class="cta-info__line p"> <svg width="31" height="31" viewBox="0 0 31 31"
                            aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M23.5 22.704v2.286a2.571 2.571 0 0 1-2.572 2.571h-1.023a2.287 2.287 0 0 0-2.12-1.428H15.5a2.286 2.286 0 1 0 0 4.571h2.285c.96 0 1.78-.59 2.12-1.428h1.023a4.286 4.286 0 0 0 4.286-4.286v-2.286H23.5Zm-8 5.143h2.285a.571.571 0 1 1 0 1.143H15.5a.571.571 0 1 1 0-1.143ZM15.5 2.704a8 8 0 0 0-8 8v12H2.928a2.286 2.286 0 0 1-2.285-2.286v-6.285a2.286 2.286 0 0 1 2.285-2.286h2.857v-1.143C5.785 5.339 10.135.99 15.5.99s9.714 4.349 9.714 9.714v1.143h2.857a2.286 2.286 0 0 1 2.286 2.286v6.285a2.286 2.286 0 0 1-2.286 2.286H23.5v-12a8 8 0 0 0-8-8ZM2.928 13.561h2.857v7.429H2.928a.571.571 0 0 1-.571-.572v-6.285c0-.316.256-.572.571-.572Zm25.143 7.429h-2.857V13.56h2.857c.316 0 .572.256.572.572v6.285a.571.571 0 0 1-.572.572Z"
                                fill="#fff"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.214 10.704a6.286 6.286 0 0 1 12.571 0v7.429a6.286 6.286 0 1 1-12.571 0v-7.429Zm10.857 0v7.429a4.571 4.571 0 1 1-9.143 0v-7.429a4.571 4.571 0 0 1 9.143 0Z"
                                fill="#fff"></path>
                        </svg> Support 24/7 </p>
                    <p class="cta-info__line p"> <svg width="31" height="31" viewBox="0 0 31 31"
                            aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M22.928 8.418h2c.947 0 1.715.768 1.715 1.715v5.714h-2v-5.429H6.357v10.858H8.07v2h-2a1.714 1.714 0 0 1-1.714-1.715v-5.714h-2a1.714 1.714 0 0 1-1.714-1.714V2.704C.643 1.757 1.41.99 2.357.99h18.857c.947 0 1.714.767 1.714 1.714v5.714ZM2.643 2.99v10.857h1.714v-3.714c0-.947.767-1.715 1.714-1.715h14.857V2.99H2.643Z"
                                fill="#fff"></path>
                            <path
                                d="M19.737 26.073v.916h-.968v-.9c-1.186-.193-1.724-1.068-1.783-1.758l1.16-.26c.043.487.38.925 1.103.925.42 0 .723-.202.723-.53 0-.244-.185-.404-.521-.48l-.75-.177c-.941-.227-1.522-.799-1.522-1.598 0-.942.707-1.59 1.59-1.741v-.909h.968v.934c.925.202 1.346.866 1.464 1.438l-1.17.312c-.05-.261-.193-.699-.858-.699-.471 0-.707.278-.707.547 0 .227.169.404.497.48l.732.16c1.127.252 1.573.908 1.573 1.665 0 .774-.556 1.498-1.531 1.675ZM23.1 23.275c0-.315.256-.571.571-.571h2.972a.571.571 0 0 1 0 1.143H23.67a.572.572 0 0 1-.571-.572ZM12.157 22.704a.572.572 0 0 0 0 1.143h2.971a.571.571 0 0 0 0-1.143h-2.971Z"
                                fill="#fff"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.071 17.561c0-.947.768-1.714 1.715-1.714h18.857c.947 0 1.714.767 1.714 1.714v11.428c0 .947-.767 1.715-1.714 1.715H9.786a1.714 1.714 0 0 1-1.715-1.715V17.561Zm2 11.143V17.847h18.286v10.857H10.071Z"
                                fill="#fff"></path>
                        </svg> No Hidden Charges </p>
                </div>
            </div>
        </div>
        <div class="how-stand">
            <div class="container">
                <h2 class="h2 how-stand__heading">How Studybay Stands Out From Assignment Help Services?</h2>
                <div class="slider__wrapper" id="how-stand-slider">
                    <div class="slider--snap">
                        <div class="slider__grid-view slider__inner">
                            <article class="how-stand-card" data-card=""> <svg aria-hidden="true"
                                    width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.5 8A5.5 5.5 0 0 1 8 2.5h32A5.5 5.5 0 0 1 45.5 8v19a5.5 5.5 0 0 1-5.5 5.5h-3.5v5.407c0 1.713-2.011 2.633-3.307 1.514L25.179 32.5H8A5.5 5.5 0 0 1 2.5 27V8ZM8 5.5A2.5 2.5 0 0 0 5.5 8v19A2.5 2.5 0 0 0 8 29.5h18.295l7.205 6.223V29.5H40a2.5 2.5 0 0 0 2.5-2.5V8A2.5 2.5 0 0 0 40 5.5H8Z"
                                        fill="#0d6efd"></path>
                                    <path
                                        d="M10.5 32v8.5A5.5 5.5 0 0 0 16 46h3.5v5.407c0 1.713 2.011 2.633 3.307 1.514L30.821 46H48a5.5 5.5 0 0 0 5.5-5.5v-19A5.5 5.5 0 0 0 48 16h-2.5v3H48a2.5 2.5 0 0 1 2.5 2.5v19A2.5 2.5 0 0 1 48 43H29.705L22.5 49.223V43H16a2.5 2.5 0 0 1-2.5-2.5V32h-3Z"
                                        fill="#000"></path>
                                    <path
                                        d="M19 18a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM26 18a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM33 18a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"
                                        fill="#0d6efd"></path>
                                </svg> <span class="how-stand-card__heading" role="heading" aria-level="3"> Huge
                                    Community of Experts </span>
                                <p class="how-stand-card__text p"> We bring together verified college professors,
                                    practicing scientists, independent researchers, freelance journalists, essay
                                    writers, and thousands of other experts in different fields of study, not only from
                                    the USA, but from all over the world. They are ready to share their knowledge and
                                    provide you with professional assignment help. </p>
                            </article>
                            <article class="how-stand-card" data-card=""> <svg aria-hidden="true"
                                    width="44" height="52" viewBox="0 0 44 52" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M39.715 0H3.555A3.559 3.559 0 0 0 0 3.555v22.224a3.559 3.559 0 0 0 3.555 3.555h4.109v7.492c0 3.488 2.1 6.64 5.228 8.028v5.623c0 .84.682 1.523 1.523 1.523h14.44c.84 0 1.523-.682 1.523-1.523v-5.623c3.127-1.389 5.228-4.54 5.228-8.027v-7.493h4.109a3.559 3.559 0 0 0 3.554-3.555V3.555A3.559 3.559 0 0 0 39.715 0ZM3.555 3.047h36.16c.275 0 .507.232.507.508V6.41H3.047V3.555c0-.276.232-.508.508-.508ZM27.33 48.953H15.939v-3.636H27.33v3.636Zm5.228-12.127a5.759 5.759 0 0 1-3.935 5.444H14.645a5.759 5.759 0 0 1-3.934-5.444v-7.492h11.494c-1.353 1.472-2.629 3.717-2.629 6.947a1.523 1.523 0 0 0 3.047 0c0-4.68 3.774-6.417 3.925-6.485.57-.236.922-.783.922-1.4v-6.85a2.547 2.547 0 0 1 2.545-2.544 2.547 2.547 0 0 1 2.544 2.544v15.28Zm7.156-10.54h-4.11v-4.74a5.598 5.598 0 0 0-5.59-5.591 5.598 5.598 0 0 0-5.592 5.591v4.74H3.555a.515.515 0 0 1-.508-.507V9.457h37.175v16.322a.515.515 0 0 1-.507.508Z"
                                        fill="#000"></path>
                                    <path
                                        d="M15.732 13.144H7.934c-.842 0-1.524.682-1.524 1.523v6.41c0 .841.682 1.523 1.524 1.523h7.798c.842 0 1.524-.682 1.524-1.523v-6.41c0-.841-.682-1.523-1.524-1.523Zm-1.523 6.41H9.457V16.19h4.752v3.363Z"
                                        fill="#0d6efd"></path>
                                </svg> <span class="how-stand-card__heading" role="heading" aria-level="3">
                                    Affordable Prices </span>
                                <p class="how-stand-card__text p"> As a strong team of developers, we use high-tech
                                    solutions such as AI-based tools to cover various parts of the process of each
                                    project. For example, we automate and optimize plagiarism checking and grammar
                                    checking, which lets us provide students with cheap homework assignment help of
                                    outstanding quality. </p>
                            </article>
                            <article class="how-stand-card" data-card=""> <svg width="56" height="56"
                                    aria-hidden="true" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.625 22.682C9.462 13.793 17.54 6.82 27.383 6.82c9.497 0 17.352 6.493 18.643 14.935l-2.978-1.481a1.434 1.434 0 1 0-1.277 2.568L48.123 26l4.319-4.874a1.476 1.476 0 0 0-2.21-1.958l-1.306 1.473C47.102 11.181 38.15 4 27.383 4 15.853 4 6.407 12.234 5.562 22.681c-.068.84.622 1.527 1.465 1.527.843 0 1.52-.686 1.598-1.526ZM46.876 33.725c-.837 8.889-8.916 15.862-18.758 15.862-9.498 0-17.353-6.493-18.643-14.935l2.978 1.481a1.434 1.434 0 1 0 1.276-2.568l-6.352-3.158-4.318 4.874a1.476 1.476 0 0 0 2.21 1.959l1.306-1.474c1.824 9.46 10.775 16.641 21.543 16.641 11.53 0 20.976-8.234 21.82-18.681.069-.84-.621-1.526-1.464-1.526s-1.52.685-1.598 1.525Z"
                                        fill="#000"></path>
                                    <path
                                        d="M29.637 36.914V40h-3.39v-3.03c-4.155-.65-6.04-3.595-6.247-5.917l4.067-.878c.147 1.643 1.326 3.115 3.86 3.115 1.474 0 2.535-.68 2.535-1.784 0-.82-.649-1.359-1.827-1.614l-2.623-.594c-3.3-.765-5.334-2.69-5.334-5.38 0-3.17 2.475-5.35 5.57-5.86V15h3.389v3.143c3.241.68 4.715 2.916 5.127 4.841l-4.096 1.048c-.177-.878-.678-2.35-3.006-2.35-1.65 0-2.475.934-2.475 1.84 0 .765.589 1.36 1.738 1.614l2.564.538c3.95.85 5.511 3.058 5.511 5.606 0 2.605-1.945 5.04-5.363 5.634Z"
                                        fill="#0d6efd"></path>
                                </svg> <span class="how-stand-card__heading" role="heading" aria-level="3">
                                    Money-Back Guarantee </span>
                                <p class="how-stand-card__text p"> We provide you with a warranty on each project.
                                    Your payment goes to an expert only after you have accepted the project as
                                    completed. If you are not satisfied with the result of your cooperation with our
                                    expert, you can request any edits for free or even a refund during a warranty
                                    period. </p>
                            </article>
                            <article class="how-stand-card" data-card=""> <svg width="56" height="56"
                                    aria-hidden="true" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28 48a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" fill="#000"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10 6a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v44a4 4 0 0 1-4 4H14a4 4 0 0 1-4-4V6Zm4-1h28a1 1 0 0 1 1 1v44a1 1 0 0 1-1 1H14a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"
                                        fill="#000"></path>
                                    <path d="M28 30.5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" fill="#0d6efd"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M36 20.5h-1.5v-3a6.5 6.5 0 1 0-13 0v3H20a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-12a2 2 0 0 0-2-2ZM28 14a3.5 3.5 0 0 0-3.5 3.5v3h7v-3A3.5 3.5 0 0 0 28 14Zm-7 9.5v10h14v-10H21Z"
                                        fill="#0d6efd"></path>
                                </svg> <span class="how-stand-card__heading" role="heading" aria-level="3"> Data
                                    Security </span>
                                <p class="how-stand-card__text p"> We care about your security, therefore we encrypt
                                    all personal data to make every user feel safe while using Studybay. We don’t share
                                    any personal information with any third parties without your permission. </p>
                            </article>
                            <article class="how-stand-card" data-card=""> <svg width="56" height="56"
                                    aria-hidden="true" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M28 14.5a4.5 4.5 0 0 0-4.5 4.5v4h-3v-4a7.5 7.5 0 0 1 15 0v4h-3v-4a4.5 4.5 0 0 0-4.5-4.5Z"
                                        fill="#0d6efd"></path>
                                    <path d="M29.5 30a1.5 1.5 0 0 0-3 0v3a1.5 1.5 0 0 0 3 0v-3Z" fill="#000">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20 23a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V25a2 2 0 0 0-2-2H20Zm1 3v11h14V26H21Z"
                                        fill="#000"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="m28 54 8.685-5.376A26 26 0 0 0 49 26.517V9a2 2 0 0 0-2-2h-7.596a4 4 0 0 1-1.72-.388L28.86 2.41a2 2 0 0 0-1.72 0l-8.824 4.202a4 4 0 0 1-1.72.388H9a2 2 0 0 0-2 2v17.517a26 26 0 0 0 12.315 22.107L28 54Zm18-44h-6.596a7 7 0 0 1-3.01-.68L28 5.323 19.606 9.32a7 7 0 0 1-3.01.68H10v16.517a23 23 0 0 0 10.894 19.556L28 50.472l7.106-4.4A23 23 0 0 0 46 26.518V10Z"
                                        fill="#000"></path>
                                </svg> <span class="how-stand-card__heading" role="heading" aria-level="3"> Safe
                                    Payment Methods </span>
                                <p class="how-stand-card__text p"> We use fast, convenient, modern, and safe payment
                                    tools and solutions, such as Paypal, Payoneer, and Visa/Mastercard, for payments and
                                    withdrawals. And we're constantly working on adding more options. Also, you can pay
                                    the entire amount at once or in two installments if it is more convenient for you.
                                </p>
                            </article>
                            <article class="how-stand-card" data-card=""> <svg width="52" height="52"
                                    aria-hidden="true" viewBox="0 0 52 52" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M40 38v4a4.5 4.5 0 0 1-4.5 4.5h-1.79A4.001 4.001 0 0 0 30 44h-4a4 4 0 0 0 0 8h4a4.001 4.001 0 0 0 3.71-2.5h1.79A7.5 7.5 0 0 0 43 42v-4h-3Zm-14 9h4a1 1 0 1 1 0 2h-4a1 1 0 1 1 0-2Z"
                                        fill="#0d6efd"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M26 3c-7.732 0-14 6.268-14 14v21H4a4 4 0 0 1-4-4V23a4 4 0 0 1 4-4h5v-2C9 7.611 16.611 0 26 0s17 7.611 17 17v2h5a4 4 0 0 1 4 4v11a4 4 0 0 1-4 4h-8V17c0-7.732-6.268-14-14-14ZM4 22h5v13H4a1 1 0 0 1-1-1V23a1 1 0 0 1 1-1Zm44 13h-5V22h5a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1Z"
                                        fill="#000"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 17c0-6.075 4.925-11 11-11s11 4.925 11 11v13c0 6.075-4.925 11-11 11s-11-4.925-11-11V17Zm19 0v13a8 8 0 1 1-16 0V17a8 8 0 1 1 16 0Z"
                                        fill="#000"></path>
                                </svg> <span class="how-stand-card__heading" role="heading" aria-level="3"> 24/7
                                    Support </span>
                                <p class="how-stand-card__text p"> Our support team is here for you 24/7 to answer any
                                    questions and resolve any issues you might have. Feel free to contact us via phone,
                                    email, or chat on the website whenever you need it. </p>
                            </article>
                        </div>
                    </div>
                    <div class="slider__controls"> <button type="button"
                            class="slider__control slider__control--left" tabindex="-1" aria-hidden="true"
                            hidden> Scroll to left </button> <button type="button"
                            class="slider__control slider__control--right" tabindex="-1" aria-hidden="true"
                            hidden> Scroll to right </button> </div>
                </div>
            </div>
        </div>
        <div class="container container--wide">
            <div class="load-app"> <img srcset="/mobile.c562de05.webp 1x,/mobile.cc5a5063.png 1x"
                    src="/mobile.cc5a5063.png" loading="lazy" height="480" alt=""
                    class="load-app__image-1"> <svg class="load-app__image-ellipsis-1" aria-hidden="true"
                    width="703" height="257" viewBox="0 0 703 257" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M702.5 349.312c0 81.541-45.053 155.405-117.978 208.901-72.925 53.496-173.694 86.599-285.022 86.599S87.403 611.709 14.478 558.213C-58.447 504.717-103.5 430.853-103.5 349.312c0-81.54 45.053-155.404 117.978-208.9 72.925-53.496 173.694-86.6 285.022-86.6s212.097 33.104 285.022 86.6c72.925 53.496 117.978 127.36 117.978 208.9Z"
                        stroke="#0d6efd"></path>
                    <path
                        d="M614.5 311.312c0 171.389-172.488 310.5-385.5 310.5s-385.5-139.111-385.5-310.5C-156.5 139.924 15.988.812 229 .812s385.5 139.112 385.5 310.5Z"
                        stroke="#fff"></path>
                </svg>
                <div class="load-app__container">
                    <article class="load-app__content">
                        <div class="load-app__top"> <span class="load-app__heading" role="heading"
                                aria-level="2">Download our app now!</span>
                            <p class="load-app__links"> <span data-secret="?app%adjust%com$evhk0ct"
                                    class="load-app__link" data-hidden=""> <span class="IH">Load the app from
                                        app store</span> <svg width="112" height="40" aria-hidden="true"
                                        viewBox="0 0 112 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="112" height="40" rx="4" fill="#000">
                                        </rect>
                                        <rect x=".5" y=".5" width="111" height="39"
                                            rx="3.5" stroke="#fff" stroke-opacity=".25"></rect>
                                        <path
                                            d="M26.908 20.619c-.022-2.457 2.012-3.653 2.105-3.708-1.152-1.68-2.938-1.91-3.565-1.928-1.5-.157-2.954.898-3.718.898-.78 0-1.956-.882-3.224-.857-1.63.026-3.157.97-3.994 2.437-1.728 2.99-.44 7.386 1.216 9.803.828 1.184 1.795 2.506 3.061 2.46 1.24-.052 1.702-.79 3.197-.79 1.481 0 1.916.79 3.207.76 1.33-.021 2.167-1.19 2.966-2.384.957-1.357 1.34-2.694 1.356-2.762-.031-.01-2.582-.984-2.607-3.93ZM24.468 13.393c.666-.833 1.122-1.967.996-3.117-.965.043-2.17.667-2.865 1.482-.615.718-1.163 1.895-1.022 3.002 1.084.08 2.196-.546 2.891-1.367ZM46.08 28.02h-1.732l-.948-2.98h-3.296l-.904 2.98h-1.685l3.266-10.145h2.017L46.08 28.02Zm-2.966-4.23-.857-2.65c-.091-.27-.261-.907-.512-1.91h-.03c-.1.431-.261 1.069-.482 1.91l-.843 2.65h2.724ZM54.478 24.272c0 1.244-.336 2.228-1.008 2.95-.602.642-1.35.963-2.243.963-.963 0-1.656-.346-2.077-1.038h-.03v3.854h-1.626v-7.888c0-.782-.02-1.585-.06-2.409h1.429l.09 1.16h.031c.542-.874 1.365-1.31 2.469-1.31.863 0 1.583.341 2.16 1.023.577.683.865 1.581.865 2.695Zm-1.655.06c0-.712-.16-1.3-.482-1.761-.352-.482-.824-.723-1.415-.723a1.69 1.69 0 0 0-1.091.399 1.85 1.85 0 0 0-.64 1.046c-.05.202-.075.366-.075.496v1.22c0 .532.163.98.49 1.348.326.366.75.55 1.271.55.612 0 1.089-.237 1.43-.708.34-.472.512-1.094.512-1.867ZM62.893 24.272c0 1.244-.336 2.228-1.01 2.95-.601.642-1.349.963-2.242.963-.963 0-1.655-.346-2.076-1.038h-.03v3.854h-1.626v-7.888c0-.782-.02-1.585-.06-2.409h1.43l.09 1.16h.03c.541-.874 1.364-1.31 2.469-1.31.862 0 1.582.341 2.16 1.023.576.683.865 1.581.865 2.695Zm-1.656.06c0-.712-.16-1.3-.483-1.761-.351-.482-.821-.723-1.414-.723-.402 0-.765.134-1.092.399a1.848 1.848 0 0 0-.638 1.046c-.05.202-.076.366-.076.496v1.22c0 .532.163.98.488 1.348.326.365.75.55 1.273.55.612 0 1.089-.237 1.43-.708.341-.472.512-1.094.512-1.867ZM72.3 25.175c0 .863-.3 1.565-.901 2.107-.661.593-1.581.888-2.764.888-1.092 0-1.967-.21-2.63-.632l.377-1.354a4.455 4.455 0 0 0 2.35.648c.612 0 1.089-.14 1.431-.415.34-.276.51-.647.51-1.109 0-.411-.14-.758-.42-1.04-.28-.28-.748-.542-1.4-.784-1.777-.662-2.664-1.633-2.664-2.909 0-.834.31-1.518.934-2.05.62-.533 1.448-.799 2.483-.799.924 0 1.69.16 2.303.482l-.407 1.325c-.571-.311-1.218-.467-1.941-.467-.572 0-1.019.141-1.339.422-.27.25-.406.556-.406.919 0 .4.154.732.465.993.271.24.763.502 1.476.783.873.351 1.514.762 1.927 1.233.41.47.616 1.058.616 1.76ZM77.674 21.924h-1.792v3.552c0 .904.316 1.355.949 1.355.29 0 .531-.025.722-.075l.045 1.234c-.32.12-.742.18-1.264.18-.642 0-1.144-.196-1.506-.587-.36-.392-.542-1.05-.542-1.973v-3.687h-1.067v-1.22h1.067v-1.34l1.596-.481v1.821h1.792v1.221ZM85.757 24.302c0 1.125-.322 2.048-.963 2.77-.674.743-1.567 1.114-2.68 1.114-1.074 0-1.929-.356-2.566-1.068-.638-.712-.956-1.611-.956-2.695 0-1.133.328-2.062.986-2.784.656-.723 1.542-1.084 2.656-1.084 1.073 0 1.937.356 2.589 1.069.623.692.934 1.584.934 2.678Zm-1.686.053c0-.675-.144-1.253-.436-1.736-.341-.584-.828-.875-1.46-.875-.653 0-1.149.292-1.49.875-.292.483-.436 1.071-.436 1.766 0 .675.144 1.254.436 1.735.352.584.843.876 1.476.876.62 0 1.108-.298 1.46-.89.299-.493.45-1.077.45-1.751ZM91.04 22.134a2.825 2.825 0 0 0-.511-.045c-.572 0-1.014.216-1.325.648-.271.381-.407.863-.407 1.445v3.838h-1.624l.015-5.012c0-.843-.02-1.61-.061-2.303h1.416l.06 1.4h.044c.172-.481.442-.869.813-1.159a1.965 1.965 0 0 1 1.175-.392c.15 0 .285.01.406.03v1.55ZM98.309 24.016c0 .291-.019.537-.06.737h-4.875c.019.723.254 1.276.707 1.657.41.34.942.512 1.595.512.722 0 1.38-.116 1.973-.347l.254 1.129c-.692.302-1.509.452-2.452.452-1.134 0-2.025-.334-2.673-1.001-.646-.667-.97-1.563-.97-2.687 0-1.103.3-2.022.904-2.754.631-.782 1.484-1.173 2.557-1.173 1.055 0 1.853.39 2.395 1.173.43.621.645 1.39.645 2.302Zm-1.55-.421c.01-.482-.095-.898-.316-1.25-.28-.452-.713-.678-1.295-.678-.531 0-.963.22-1.293.663-.271.351-.432.773-.481 1.264h3.385ZM42.576 11.633c0 .898-.269 1.573-.806 2.027-.498.418-1.206.628-2.122.628-.454 0-.843-.02-1.169-.06V9.327a8.624 8.624 0 0 1 1.377-.104c.872 0 1.53.19 1.974.57.497.429.746 1.043.746 1.841Zm-.842.023c0-.582-.154-1.028-.462-1.34-.308-.31-.758-.465-1.35-.465-.252 0-.466.017-.644.052v3.727c.099.015.279.022.54.022.612 0 1.084-.17 1.416-.51.332-.34.5-.835.5-1.486ZM47.043 12.417c0 .553-.158 1.005-.473 1.36-.331.366-.77.548-1.317.548-.527 0-.947-.174-1.26-.525-.313-.35-.47-.791-.47-1.324 0-.556.161-1.013.484-1.367.324-.355.758-.532 1.306-.532.527 0 .951.174 1.272.524.305.34.458.78.458 1.316Zm-.828.026c0-.332-.072-.616-.215-.853-.167-.287-.406-.43-.716-.43-.321 0-.565.143-.733.43-.143.237-.214.526-.214.867 0 .332.071.616.214.853.173.287.414.43.725.43.305 0 .544-.145.717-.437.148-.242.222-.529.222-.86ZM53.033 10.65l-1.124 3.594h-.732l-.466-1.56c-.118-.39-.214-.778-.289-1.162h-.014c-.07.395-.166.781-.29 1.161l-.494 1.56h-.74l-1.058-3.593h.821l.407 1.708c.098.404.179.79.243 1.154h.015c.06-.3.158-.683.297-1.146l.51-1.715h.65l.49 1.678c.117.41.213.804.288 1.184h.022c.054-.37.135-.764.243-1.184l.437-1.678h.784v-.001ZM57.175 14.244h-.8v-2.058c0-.635-.24-.952-.724-.952a.721.721 0 0 0-.577.262.928.928 0 0 0-.222.616v2.131h-.799v-2.566c0-.316-.01-.658-.029-1.028h.703l.037.562h.022c.093-.175.232-.32.414-.434a1.35 1.35 0 0 1 .724-.202c.336 0 .615.108.837.325.275.266.413.663.413 1.191v2.153ZM59.377 14.244h-.798V9h.798v5.243ZM64.081 12.417c0 .553-.158 1.005-.473 1.36-.331.366-.77.548-1.317.548-.528 0-.948-.174-1.26-.525-.313-.35-.47-.791-.47-1.324 0-.556.161-1.013.485-1.367.323-.355.757-.532 1.304-.532.528 0 .951.174 1.273.524.305.34.458.78.458 1.316Zm-.83.026c0-.332-.07-.616-.213-.853-.167-.287-.407-.43-.716-.43-.322 0-.566.143-.733.43-.143.237-.214.526-.214.867 0 .332.072.616.214.853.173.287.414.43.725.43.305 0 .544-.145.716-.437.149-.242.222-.529.222-.86ZM67.948 14.244h-.717l-.06-.414h-.022c-.245.33-.595.495-1.05.495-.339 0-.613-.109-.82-.325a1.02 1.02 0 0 1-.281-.732c0-.44.183-.774.551-1.006.368-.232.885-.345 1.55-.34v-.067c0-.473-.248-.71-.746-.71-.355 0-.667.09-.937.266l-.163-.524c.334-.207.747-.31 1.233-.31.94 0 1.41.495 1.41 1.486v1.324c0 .359.018.645.052.857Zm-.83-1.235v-.555c-.88-.015-1.321.227-1.321.725 0 .187.05.327.153.421a.56.56 0 0 0 .39.14c.176 0 .34-.055.49-.166a.681.681 0 0 0 .289-.565ZM72.488 14.244h-.709l-.037-.577h-.022c-.227.439-.612.658-1.154.658-.434 0-.794-.17-1.08-.51-.286-.34-.428-.781-.428-1.323 0-.582.154-1.053.465-1.413.302-.335.67-.503 1.11-.503.482 0 .82.162 1.012.488h.015V9h.8v4.274c0 .35.01.673.028.969Zm-.828-1.516v-.6a.91.91 0 0 0-.311-.736.785.785 0 0 0-.534-.195.82.82 0 0 0-.703.356c-.17.237-.256.54-.256.91 0 .354.081.643.245.864a.822.822 0 0 0 .699.355.77.77 0 0 0 .63-.296.985.985 0 0 0 .23-.658ZM79.32 12.417c0 .553-.157 1.005-.473 1.36-.33.366-.768.548-1.316.548-.527 0-.947-.174-1.261-.525-.313-.35-.47-.791-.47-1.324 0-.556.162-1.013.485-1.367.323-.355.758-.532 1.306-.532.527 0 .951.174 1.271.524.305.34.459.78.459 1.316Zm-.827.026c0-.332-.072-.616-.215-.853-.168-.287-.406-.43-.717-.43-.32 0-.564.143-.733.43-.143.237-.214.526-.214.867 0 .332.072.616.214.853.173.287.414.43.725.43.305 0 .546-.145.718-.437.147-.242.222-.529.222-.86ZM83.616 14.244h-.798v-2.058c0-.635-.241-.952-.725-.952a.719.719 0 0 0-.576.262.924.924 0 0 0-.222.616v2.131h-.8v-2.566c0-.316-.01-.658-.028-1.028h.701l.037.562h.023c.093-.175.232-.32.414-.434.217-.134.459-.202.725-.202.334 0 .613.108.835.325.277.266.414.663.414 1.191v2.153ZM88.993 11.248h-.88v1.746c0 .444.157.666.466.666.144 0 .263-.012.357-.038l.02.606c-.158.06-.365.09-.62.09-.316 0-.562-.096-.74-.289-.178-.192-.266-.515-.266-.969v-1.812h-.525v-.598h.525V9.99l.783-.236v.894h.88v.6ZM93.224 14.244h-.8V12.2c0-.645-.241-.967-.724-.967-.37 0-.623.187-.762.56a1.004 1.004 0 0 0-.037.288v2.161h-.798V9.001h.798v2.166h.015c.252-.394.612-.591 1.08-.591.33 0 .604.108.821.325.27.271.407.674.407 1.206v2.137ZM97.586 12.277c0 .143-.011.264-.03.362H95.16c.01.355.125.626.347.813.203.168.464.252.784.252.355 0 .678-.056.97-.17l.124.555c-.34.148-.742.222-1.206.222-.556 0-.995-.164-1.312-.492-.319-.328-.476-.768-.476-1.32 0-.542.147-.993.443-1.353.31-.384.728-.576 1.257-.576.517 0 .91.192 1.175.576.214.305.32.682.32 1.13Zm-.763-.207a1.076 1.076 0 0 0-.154-.614c-.14-.221-.35-.333-.636-.333a.759.759 0 0 0-.636.326 1.21 1.21 0 0 0-.237.621h1.663Z"
                                            fill="#fff"></path>
                                    </svg> </span> <span data-secret="?app%adjust%com$evhk0ct"
                                    class="load-app__link" data-hidden=""> <span class="IH">Load the app from
                                        google play</span> <svg width="112" height="40" aria-hidden="true"
                                        viewBox="0 0 112 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="112" height="40" rx="4" fill="#000">
                                        </rect>
                                        <rect x=".5" y=".5" width="111" height="39"
                                            rx="3.5" stroke="#fff" stroke-opacity=".25"></rect>
                                        <path
                                            d="M8.77 10.033a1.6 1.6 0 0 0-.369 1.12v17.696a1.6 1.6 0 0 0 .368 1.12l.056.056 9.912-9.904v-.232L8.825 9.977l-.056.056Z"
                                            fill="url(#a)"></path>
                                        <path
                                            d="m22.017 23.425-3.28-3.304v-.232l3.28-3.312.072.04 3.928 2.232c1.12.632 1.12 1.672 0 2.312l-3.912 2.224-.088.04Z"
                                            fill="url(#b)"></path>
                                        <path
                                            d="M22.113 23.377 18.738 20 8.77 29.968a1.304 1.304 0 0 0 1.664.049l11.688-6.64"
                                            fill="url(#c)"></path>
                                        <path
                                            d="m22.114 16.625-11.688-6.64a1.304 1.304 0 0 0-1.664.048L18.738 20l3.376-3.376Z"
                                            fill="url(#d)"></path>
                                        <path opacity=".2"
                                            d="m22.017 23.305-11.591 6.6a1.336 1.336 0 0 1-1.6 0l-.056.056.056.056a1.328 1.328 0 0 0 1.6 0l11.687-6.64-.096-.072Z"
                                            fill="#000"></path>
                                        <path opacity=".12"
                                            d="M8.77 29.857a1.6 1.6 0 0 1-.369-1.12v.12a1.6 1.6 0 0 0 .368 1.12l.056-.056-.056-.064Zm17.247-8.816-4 2.264.072.072 3.928-2.224a1.4 1.4 0 0 0 .8-1.152 1.488 1.488 0 0 1-.8 1.04Z"
                                            fill="#000"></path>
                                        <path opacity=".25"
                                            d="m10.426 10.096 15.592 8.864a1.489 1.489 0 0 1 .8 1.04 1.4 1.4 0 0 0-.8-1.152L10.426 9.984c-1.12-.632-2.032-.104-2.032 1.176v.12c.024-1.288.92-1.816 2.032-1.184Z"
                                            fill="#fff"></path>
                                        <path
                                            d="M56.925 21.087a3.44 3.44 0 1 0 3.456 3.44 3.392 3.392 0 0 0-3.456-3.44Zm0 5.528a2.089 2.089 0 1 1 1.942-2.088 1.991 1.991 0 0 1-1.942 2.088Zm-7.535-5.528a3.439 3.439 0 1 0 3.448 3.44 3.392 3.392 0 0 0-3.456-3.44h.008Zm0 5.528a2.09 2.09 0 0 1-.62-4.118 2.088 2.088 0 0 1 2.555 2.03 1.991 1.991 0 0 1-1.943 2.088h.008Zm-8.975-4.468v1.457h3.496a3.052 3.052 0 0 1-.81 1.837 3.576 3.576 0 0 1-2.694 1.069 3.885 3.885 0 0 1 0-7.77 3.723 3.723 0 0 1 2.646 1.044l1.028-1.028a5.09 5.09 0 0 0-3.666-1.513 5.348 5.348 0 0 0-2.11 10.345 5.35 5.35 0 0 0 2.11.346 4.857 4.857 0 0 0 3.731-1.497 4.856 4.856 0 0 0 1.262-3.416 4.755 4.755 0 0 0-.08-.914l-4.913.04Zm36.67 1.133a3.236 3.236 0 0 0-2.946-2.193 3.236 3.236 0 0 0-3.237 3.44 3.366 3.366 0 0 0 3.415 3.44 3.423 3.423 0 0 0 2.865-1.522l-1.173-.81a1.966 1.966 0 0 1-1.692.955 1.748 1.748 0 0 1-1.667-1.044l4.605-1.901-.17-.365Zm-4.694 1.15a1.885 1.885 0 0 1 1.797-2.008 1.335 1.335 0 0 1 1.278.729l-3.075 1.279Zm-3.739 3.334h1.513V17.648h-1.513v10.116Zm-2.477-5.908h-.056a2.429 2.429 0 0 0-1.813-.81 3.448 3.448 0 0 0 0 6.888 2.349 2.349 0 0 0 1.813-.81h.048v.494c0 1.32-.704 2.024-1.837 2.024a1.902 1.902 0 0 1-1.732-1.223l-1.319.55a3.278 3.278 0 0 0 3.051 2.032c1.773 0 3.237-1.044 3.237-3.585v-6.127h-1.391v.567Zm-1.731 4.759a2.096 2.096 0 0 1 0-4.176 1.943 1.943 0 0 1 1.837 2.088 1.926 1.926 0 0 1-1.846 2.088h.008Zm19.73-8.967h-3.617v10.116h1.513v-3.836h2.113a3.15 3.15 0 0 0 2.37-5.445 3.147 3.147 0 0 0-2.37-.835h-.008Zm0 4.855h-2.112v-3.447h2.145a1.736 1.736 0 1 1 0 3.472l-.032-.025Zm9.332-1.456a2.833 2.833 0 0 0-2.695 1.545l1.343.559a1.433 1.433 0 0 1 1.376-.745 1.457 1.457 0 0 1 1.619 1.303v.105a3.342 3.342 0 0 0-1.578-.388c-1.449 0-2.914.81-2.914 2.274a2.34 2.34 0 0 0 2.51 2.226 2.129 2.129 0 0 0 1.941-.971h.049v.809h1.457V23.87c0-1.772-1.344-2.8-3.068-2.8l-.04-.024Zm-.186 5.543c-.494 0-1.182-.25-1.182-.857 0-.81.858-1.077 1.619-1.077.48-.012.956.106 1.376.34a1.83 1.83 0 0 1-1.773 1.619l-.04-.025Zm8.603-5.3-1.732 4.386h-.049l-1.796-4.387h-1.619l2.695 6.135-1.538 3.407h1.579l4.143-9.542h-1.683Zm-13.605 6.474h1.514V17.648h-1.514v10.116ZM40.105 11.822a2.192 2.192 0 0 1-.607 1.619 2.354 2.354 0 0 1-1.78.72 2.549 2.549 0 0 1-.97-4.896c.308-.125.638-.186.97-.178.342-.001.68.067.995.202.293.118.554.304.76.542l-.428.43a1.618 1.618 0 0 0-1.327-.575 1.878 1.878 0 0 0-1.886 1.942 1.91 1.91 0 0 0 3.237 1.4c.25-.27.393-.62.405-.987h-1.756v-.583h2.355c.021.12.032.242.032.364ZM43.812 9.8h-2.185v1.538h1.99v.582h-1.99v1.538h2.185v.599h-2.833V9.2h2.833v.599Zm2.654 4.257h-.623V9.799h-1.36V9.2h3.375v.599h-1.392v4.257Zm3.772 0V9.2h.623v4.856h-.623Zm3.39 0h-.622V9.799h-1.36V9.2h3.334v.599H53.63v4.257Zm7.673-.631a2.525 2.525 0 0 1-3.56 0 2.622 2.622 0 0 1 0-3.602 2.508 2.508 0 0 1 3.56 0 2.614 2.614 0 0 1 0 3.602Zm-3.1-.405a1.87 1.87 0 0 0 2.639 0 2.072 2.072 0 0 0 0-2.784 1.87 1.87 0 0 0-2.639 0 2.071 2.071 0 0 0 0 2.784Zm4.694 1.036V9.2h.761l2.363 3.78V9.2h.624v4.856h-.648l-2.468-3.958v3.958h-.632Z"
                                            fill="#fff"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M59.52 9.163a2.428 2.428 0 0 0-1.722.717 2.541 2.541 0 0 0 0 3.488 2.444 2.444 0 0 0 3.445 0 2.533 2.533 0 0 0 0-3.488 2.429 2.429 0 0 0-1.722-.717Zm-.995.037a2.59 2.59 0 0 1 2.834.566v.001a2.695 2.695 0 0 1 0 3.713v.002a2.606 2.606 0 0 1-3.676 0l-.002-.002a2.703 2.703 0 0 1 0-3.712l.002-.002a2.59 2.59 0 0 1 .842-.566Zm-20.81-.032a2.347 2.347 0 0 0-1.728.704 2.467 2.467 0 0 0 1.731 4.208h.003a2.273 2.273 0 0 0 1.719-.695 2.11 2.11 0 0 0 .584-1.559l.081-.004h-.08c0-.095-.008-.19-.021-.283h-2.205v.42h1.759l-.003.084a1.61 1.61 0 0 1-.426 1.04l-.003.003a1.99 1.99 0 0 1-3.375-1.457 1.958 1.958 0 0 1 1.965-2.024 1.7 1.7 0 0 1 1.333.537l.313-.313a1.918 1.918 0 0 0-.68-.465 2.428 2.428 0 0 0-.964-.196h-.002Zm2.471 2.652a2.273 2.273 0 0 1-.63 1.677 2.438 2.438 0 0 1-1.84.745 2.63 2.63 0 0 1-1.845-4.484 2.51 2.51 0 0 1 1.847-.752 2.59 2.59 0 0 1 1.026.208c.305.123.576.316.791.564l.05.057-.545.545-.057-.068a1.539 1.539 0 0 0-1.26-.546h-.006a1.796 1.796 0 0 0-1.804 1.86v.003a1.828 1.828 0 0 0 3.098 1.343c.216-.235.348-.534.377-.85h-1.751v-.745h2.504l.012.067c.022.124.033.25.033.376Zm.712-2.7h2.995v.76h-2.185v1.376h1.99V12h-1.99v1.376h2.185v.76h-2.995V9.12Zm.162.161v4.694h2.67v-.437h-2.184v-1.7h1.99v-.42h-1.99v-1.7h2.185v-.437h-2.67Zm3.343-.162h3.536v.76h-1.392v4.258h-.785V9.88h-1.36v-.76Zm.162.162v.437h1.36v4.257h.46V9.718h1.393v-.437h-3.213Zm5.592-.162h.785v5.018h-.785V9.119Zm.162.162v4.694h.461V9.281h-.461Zm1.246-.162h3.496v.76H53.71v4.258h-.785V9.88h-1.36v-.76Zm.162.162v.437h1.36v4.257h.46V9.718H54.9v-.437h-3.173Zm11.088-.162h.886l2.238 3.578V9.12h.785v5.018h-.774l-2.342-3.756v3.756h-.793V9.119Zm.161.162v4.694h.47v-4.16l2.594 4.16h.522V9.281H66.1v3.98l-2.489-3.98h-.635Zm-4.832.898a1.95 1.95 0 0 1 2.753 0l.003.002a2.153 2.153 0 0 1 0 2.893l-.003.003a1.95 1.95 0 0 1-2.753 0l.058-.057-.06.054a2.153 2.153 0 0 1 0-2.892l.002-.003Zm.116 2.785a1.789 1.789 0 0 0 2.521 0 1.99 1.99 0 0 0 0-2.672 1.789 1.789 0 0 0-2.521 0 1.99 1.99 0 0 0 0 2.672Z"
                                            fill="#fff"></path>
                                        <defs>
                                            <linearGradient id="a" x1="17.857" y1="10.969"
                                                x2="4.433" y2="24.393" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#00A0FF"></stop>
                                                <stop offset=".01" stop-color="#00A1FF"></stop>
                                                <stop offset=".26" stop-color="#00BEFF"></stop>
                                                <stop offset=".51" stop-color="#00D2FF"></stop>
                                                <stop offset=".76" stop-color="#00DFFF"></stop>
                                                <stop offset="1" stop-color="#00E3FF"></stop>
                                            </linearGradient>
                                            <linearGradient id="b" x1="27.481" y1="20.001"
                                                x2="8.129" y2="20.001" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFE000"></stop>
                                                <stop offset=".41" stop-color="#FFBD00"></stop>
                                                <stop offset=".78" stop-color="orange"></stop>
                                                <stop offset="1" stop-color="#FF9C00"></stop>
                                            </linearGradient>
                                            <linearGradient id="c" x1="20.282" y1="21.84"
                                                x2="2.074" y2="40.041" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FF3A44"></stop>
                                                <stop offset="1" stop-color="#C31162"></stop>
                                            </linearGradient>
                                            <linearGradient id="d" x1="6.258" y1="4.145"
                                                x2="14.386" y2="12.273" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#32A071"></stop>
                                                <stop offset=".07" stop-color="#2DA771"></stop>
                                                <stop offset=".48" stop-color="#15CF74"></stop>
                                                <stop offset=".8" stop-color="#06E775"></stop>
                                                <stop offset="1" stop-color="#00F076"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg> </span> </p>
                        </div>
                        <ul class="load-app__bottom">
                            <li class="load-app__benefit"> <span class="load-app__benefit-title" role="heading"
                                    aria-level="3"> Get Online Assignment Help in a Few Taps </span>
                                <p class="load-app__benefit-text"> Let Studybay experts be with you wherever you go.
                                </p>
                            </li>
                            <li class="load-app__benefit"> <span class="load-app__benefit-title" role="heading"
                                    aria-level="3"> Getting Help Is Easy </span>
                                <p class="load-app__benefit-text"> Enjoy our user-friendly interface. </p>
                            </li>
                            <li class="load-app__benefit"> <span class="load-app__benefit-title" role="heading"
                                    aria-level="3"> Stay Productive All the Time </span>
                                <p class="load-app__benefit-text"> Work on projects even far away from the computer.
                                </p>
                            </li>
                            <li class="load-app__benefit"> <span class="load-app__benefit-title" role="heading"
                                    aria-level="3"> Chat via Your Smartphone </span>
                                <p class="load-app__benefit-text"> Request expert assistance even on the go. </p>
                            </li>
                        </ul>
                    </article> <img srcset="/mobile.c562de05.webp 1x,/mobile.cc5a5063.png 1x"
                        src="/mobile.cc5a5063.png" loading="lazy" height="480" alt=""
                        class="load-app__image-2"> <svg class="load-app__image-ellipsis-2" aria-hidden="true"
                        width="703" height="257" viewBox="0 0 703 257" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M702.5 349.312c0 81.541-45.053 155.405-117.978 208.901-72.925 53.496-173.694 86.599-285.022 86.599S87.403 611.709 14.478 558.213C-58.447 504.717-103.5 430.853-103.5 349.312c0-81.54 45.053-155.404 117.978-208.9 72.925-53.496 173.694-86.6 285.022-86.6s212.097 33.104 285.022 86.6c72.925 53.496 117.978 127.36 117.978 208.9Z"
                            stroke="#0d6efd"></path>
                        <path
                            d="M614.5 311.312c0 171.389-172.488 310.5-385.5 310.5s-385.5-139.111-385.5-310.5C-156.5 139.924 15.988.812 229 .812s385.5 139.112 385.5 310.5Z"
                            stroke="#fff"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="well" id="well">
            <div class="container well__container">
                <div class="well__content">
                    <div class="well__heading-wrapper"> <span role="heading" aria-level="2"
                            class="well__heading"> Everything You Need to Write an <span
                                class="inseparable">A-Grade</span> Paper </span> </div>
                    <div class="well__pad well__video-wrapper"> <iframe class="well__video" width="100%"
                            height="100%" src="https://www.youtube-nocookie.com/embed/jgXyuCC4yYs"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen title="Studybay | Your Study Assistant (YouTube)"
                            loading="lazy"></iframe> </div>
                    <div class="well__pad well__writing">
                        <h3 class="h3 well__h3"> Writing Topics & Ideas </h3>
                        <ul class="ul well__ul well__ul--arrows">
                            <li class="ul__li well__li">
                                <p class="well__p"> <a href="/argumentative-essay-topics/" class="a a--shy">
                                        Argumentative Essay </a> </p>
                            </li>
                            <li class="ul__li well__li">
                                <p class="well__p"> <a href="/persuasive-essay-topics/" class="a a--shy">
                                        Persuasive Essay </a> </p>
                            </li>
                            <li class="ul__li well__li">
                                <p class="well__p"> <a href="/medical-argumentative-essay-topics/"
                                        class="a a--shy"> Medical Essay </a> </p>
                            </li>
                            <li class="ul__li well__li">
                                <p class="well__p"> <a href="/compare-and-contrast-essay-topics/"
                                        class="a a--shy"> Compare and Contrast Essay </a> </p>
                            </li>
                            <li class="ul__li well__li">
                                <p class="well__p"> <a href="/controversial-argumentative-essay-topics/"
                                        class="a a--shy"> Controversial Essay </a> </p>
                            </li>
                            <li class="ul__li well__li">
                                <p class="well__p"> <a href="/research-essay-topics/" class="a a--shy"> Research
                                        Proposal </a> </p>
                            </li>
                            <li class="ul__li well__li">
                                <p class="well__p"> <a href="/criminal-justice-research-proposal-topics/"
                                        class="a a--shy"> Criminal justice research </a> </p>
                            </li>
                            <li class="ul__li well__li">
                                <p class="well__p"> <a href="/cse-style-paper/" class="a a--shy"> CSE paper </a>
                                </p>
                            </li>
                            <li class="ul__li well__li">
                                <p class="well__p"> <a href="/case-study-topics/" class="a a--shy"> Case Study
                                    </a> </p>
                            </li>
                            <li class="ul__li well__li">
                                <p class="well__p"> <a href="/blog/how-to-make-a-thesis-statement/"
                                        class="a a--shy"> Thesis </a> </p>
                            </li>
                        </ul> <a href="/links/#essay-topics" class="a a--bold well__more-link"> More topics </a>
                    </div>
                    <div class="well__boost well__pad">
                        <h3 class="h3 well__h3"> Boost Your Writing </h3>
                        <ul class="ul well__boost-ul well__ul well__ul--letters" id="well-boost-ul">
                            <li class="ul__li well__li">
                                <div class="well__letter" aria-hidden="true"></div> <a
                                    href="/blog/how-to-write-the-best-essay/" class="a a--shy"> Essay </a>
                            </li>
                            <li class="ul__li well__li">
                                <div class="well__letter" aria-hidden="true"></div> <a
                                    href="/blog/how-to-write-a-discussion-paper/" class="a a--shy"> Discussion paper
                                </a>
                            </li>
                            <li class="ul__li well__li">
                                <div class="well__letter" aria-hidden="true"></div> <a
                                    href="/blog/how-to-write-coursework/" class="a a--shy"> Coursework </a>
                            </li>
                            <li class="ul__li well__li">
                                <div class="well__letter" aria-hidden="true"></div> <a
                                    href="/blog/case-study-format/" class="a a--shy"> Case Study </a>
                            </li>
                            <li class="ul__li well__li">
                                <div class="well__letter" aria-hidden="true"></div> <a
                                    href="/blog/how-to-write-an-observation-report/" class="a a--shy"> Observation
                                    report </a>
                            </li>
                            <li class="ul__li well__li">
                                <div class="well__letter" aria-hidden="true"></div> <a
                                    href="/blog/how-to-begin-a-reaction-paper/" class="a a--shy"> Reaction paper
                                </a>
                            </li>
                            <li class="ul__li well__li">
                                <div class="well__letter" aria-hidden="true"></div> <a
                                    href="/blog/how-to-write-a-paper-in-apa/" class="a a--shy"> Use APA format </a>
                            </li>
                            <li class="ul__li well__li">
                                <div class="well__letter" aria-hidden="true"></div> <a
                                    href="/blog/mla-format-paper/" class="a a--shy"> Use MLA format </a>
                            </li>
                            <li class="ul__li well__li">
                                <div class="well__letter" aria-hidden="true"></div> <a
                                    href="/blog/cms-paper-format/" class="a a--shy"> Use CMS format </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts">
            <div class="contacts__container container">
                <div class="contacts__row">
                    <section class="contacts__info" aria-labelledby="Title-Contacts"> <span
                            class="contacts__heading" role="heading" aria-level="2" id="Title-Contacts"
                            aria-hidden="true">Ask Our Team</span>
                        <p class="contacts__description p"> Want to contact us directly? No problem. We are always
                            here for you. </p>
                        <div class="people"> <img loading="lazy"
                                srcset="/expert-1.56ff750d.webp 1x,/expert-1.aec7aaf5.jpg 1x"
                                src="/expert-1.aec7aaf5.jpg" width="94" height="94" class="people__image"
                                alt=""> <img loading="lazy"
                                srcset="/expert-2.7b52dc8e.webp 1x,/expert-2.bb0038ae.jpg 1x"
                                src="/expert-2.bb0038ae.jpg" width="94" height="94" class="people__image"
                                alt=""> <img loading="lazy"
                                srcset="/expert-3.2b0634a7.webp 1x,/expert-3.fe79f63f.jpg 1x"
                                src="/expert-3.fe79f63f.jpg" width="94" height="94" class="people__image"
                                alt=""> </div>
                        <div class="contacts__data"> <svg class="contacts__icon" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path
                                    d="M22.0742 15.7533C20.6049 15.7533 19.1621 15.5234 17.7949 15.0716C17.125 14.8431 16.3014 15.0528 15.8926 15.4727L13.194 17.5098C10.0644 15.8393 8.13669 13.9121 6.48894 10.8061L8.46612 8.17781C8.97981 7.66481 9.16406 6.91544 8.94331 6.21231C8.48956 4.83794 8.25906 3.39587 8.25906 1.92587C8.25913 0.863937 7.39519 0 6.33331 0H1.92581C0.863937 0 0 0.863937 0 1.92581C0 14.0977 9.90237 24 22.0742 24C23.1361 24 24.0001 23.1361 24.0001 22.0742V17.679C24 16.6172 23.1361 15.7533 22.0742 15.7533Z"
                                    fill="currentColor"></path>
                            </svg> <a href="tel:18554077728" class="a a--shy">1-855-407-7728</a> </div>
                        <div class="contacts__data"> <svg class="contacts__icon"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M2.1 3.3C0.8 3.3-0.2 4.4-0.2 5.7V18.3C-0.2 19.6 0.8 20.7 2.1 20.7H21.9C23.2 20.7 24.2 19.6 24.2 18.3V5.7C24.2 4.4 23.2 3.3 21.9 3.3H2.1ZM11.6 13.9L3 5.2H21L12.4 13.9C12.3 13.9 12.2 14 12 14 11.8 14 11.7 13.9 11.6 13.9ZM1.6 17.5V6.5L7.1 12 1.6 17.5ZM22.4 17.5L16.9 12 22.4 6.5V17.5ZM21 18.8H3L8.4 13.3 10.3 15.2C11.2 16.1 12.8 16.1 13.7 15.2L15.6 13.3 21 18.8Z"
                                        fill="currentColor"></path>
                                </g>
                                <defs>
                                    <clipPath>
                                        <rect width="24" height="24" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg> <a href="/cdn-cgi/l/email-protection#c2b1b7b2b2adb0b682b1b6b7a6bba0a3bbeca1adaf"
                                class="a a--shy"><span class="__cf_email__"
                                    data-cfemail="b0c3c5c0c0dfc2c4f0c3c4c5d4c9d2d1c99ed3dfdd">[email&#160;protected]</span></a>
                        </div> <button type="button" class="button contacts__chat custom-intercom-launcher" hidden>
                            <svg class="contacts__icon" width="20" height="20" viewBox="0 0 16 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M8.00021 14.6668C6.8493 14.6678 5.71795 14.3691 4.71755 13.8001L2.21088 14.6354C2.14282 14.6572 2.07167 14.6678 2.00021 14.6668C1.89463 14.6667 1.79058 14.6415 1.69663 14.5934C1.60267 14.5452 1.5215 14.4754 1.45979 14.3898C1.39808 14.3041 1.3576 14.205 1.34167 14.1006C1.32575 13.9963 1.33485 13.8896 1.36821 13.7894L2.20021 11.2828C1.47958 10.0081 1.19888 8.53155 1.4015 7.08137C1.60412 5.63119 2.27879 4.28812 3.3212 3.2598C4.36362 2.23147 5.71574 1.57514 7.16854 1.39227C8.62135 1.20939 10.0939 1.51016 11.3587 2.24807C12.6234 2.98598 13.6099 4.11995 14.1656 5.47468C14.7213 6.82941 14.8153 8.32946 14.433 9.74295C14.0507 11.1564 13.2135 12.4047 12.0508 13.2947C10.888 14.1847 9.46448 14.6669 8.00021 14.6668ZM8.00021 2.66676C7.0458 2.66542 6.10856 2.92057 5.28653 3.40552C4.4645 3.89047 3.78789 4.58741 3.32746 5.42342C2.86704 6.25943 2.63972 7.20381 2.66929 8.15776C2.69886 9.11172 2.98423 10.0402 3.49555 10.8461C3.548 10.9298 3.58119 11.0241 3.59272 11.1223C3.60425 11.2204 3.59383 11.3198 3.56221 11.4134L3.05155 12.9468L4.58488 12.4361C4.67841 12.4041 4.77793 12.3934 4.87612 12.4049C4.97431 12.4165 5.06866 12.4499 5.15221 12.5028C5.85123 12.9465 6.64396 13.2214 7.46763 13.3057C8.2913 13.39 9.12328 13.2814 9.89769 12.9884C10.6721 12.6954 11.3677 12.2262 11.9293 11.6178C12.4909 11.0095 12.9032 10.2787 13.1335 9.48342C13.3638 8.68811 13.4057 7.85012 13.256 7.03579C13.1063 6.22147 12.7691 5.45318 12.271 4.79177C11.7729 4.13037 11.1277 3.59401 10.3864 3.22517C9.64515 2.85634 8.82818 2.66515 8.00021 2.66676Z"
                                    fill="white"></path>
                                <path
                                    d="M10.6663 6.99996L5.33301 6.99996C5.1562 6.99996 4.98663 6.92972 4.8616 6.80469C4.73658 6.67967 4.66634 6.5101 4.66634 6.33329C4.66634 6.15648 4.73658 5.98691 4.8616 5.86189C4.98663 5.73686 5.1562 5.66663 5.33301 5.66663L10.6663 5.66663C10.8432 5.66663 11.0127 5.73686 11.1377 5.86189C11.2628 5.98691 11.333 6.15648 11.333 6.33329C11.333 6.5101 11.2628 6.67967 11.1377 6.80469C11.0127 6.92972 10.8432 6.99996 10.6663 6.99996Z"
                                    fill="white"></path>
                                <path
                                    d="M10.6663 10.3333L7.99967 10.3333C7.82286 10.3333 7.65329 10.2631 7.52827 10.1381C7.40325 10.0131 7.33301 9.84349 7.33301 9.66667C7.33301 9.48986 7.40325 9.32029 7.52827 9.19526C7.65329 9.07024 7.82286 9 7.99967 9L10.6663 9C10.8432 9 11.0127 9.07024 11.1377 9.19526C11.2628 9.32029 11.333 9.48986 11.333 9.66667C11.333 9.84348 11.2628 10.0131 11.1377 10.1381C11.0127 10.2631 10.8432 10.3333 10.6663 10.3333Z"
                                    fill="white"></path>
                            </svg> Start LiveChat </button>
                    </section>
                    <div class="faq"> <span class="faq__heading" role="heading" aria-level="2"
                            id="faq-heading"></span>
                        <article class="callout faq-block">
                            <div class="faq-block__controller">
                                <h3 class="faq-block__header h3" id="faq-block__header-1"></h3> <button
                                    type="button" aria-expanded="false" class="faq-block__expander"> <svg
                                        class="toggle-article-image" width="36" height="36"
                                        viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <circle opacity=".1" r="18" transform="matrix(-1 0 0 1 18 18)"
                                            fill="currentColor"></circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.52 22.77l-5.329-6.04a.79.79 0 01-.191-.524.79.79 0 01.191-.526l.393-.444a.603.603 0 01.926 0l4.475 5.072 4.48-5.078a.614.614 0 01.464-.217c.175 0 .34.077.463.217l.392.445a.79.79 0 01.192.525.79.79 0 01-.192.525L18.45 22.77a.614.614 0 01-.464.217.614.614 0 01-.465-.217z"
                                            fill="currentColor"></path>
                                    </svg> <span class="IH">Toggle section</span> </button>
                            </div>
                            <div class="faq-block__content" id="faq-block__content-1"></div>
                        </article>
                        <article class="callout faq-block">
                            <div class="faq-block__controller">
                                <h3 class="faq-block__header h3" id="faq-block__header-2"></h3> <button
                                    type="button" aria-expanded="false" class="faq-block__expander"> <svg
                                        class="toggle-article-image" width="36" height="36"
                                        viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <circle opacity=".1" r="18" transform="matrix(-1 0 0 1 18 18)"
                                            fill="currentColor"></circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.52 22.77l-5.329-6.04a.79.79 0 01-.191-.524.79.79 0 01.191-.526l.393-.444a.603.603 0 01.926 0l4.475 5.072 4.48-5.078a.614.614 0 01.464-.217c.175 0 .34.077.463.217l.392.445a.79.79 0 01.192.525.79.79 0 01-.192.525L18.45 22.77a.614.614 0 01-.464.217.614.614 0 01-.465-.217z"
                                            fill="currentColor"></path>
                                    </svg> <span class="IH">Toggle section</span> </button>
                            </div>
                            <div class="faq-block__content" id="faq-block__content-2"></div>
                        </article>
                        <article class="callout faq-block">
                            <div class="faq-block__controller">
                                <h3 class="faq-block__header h3" id="faq-block__header-3"></h3> <button
                                    type="button" aria-expanded="false" class="faq-block__expander"> <svg
                                        class="toggle-article-image" width="36" height="36"
                                        viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <circle opacity=".1" r="18" transform="matrix(-1 0 0 1 18 18)"
                                            fill="currentColor"></circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.52 22.77l-5.329-6.04a.79.79 0 01-.191-.524.79.79 0 01.191-.526l.393-.444a.603.603 0 01.926 0l4.475 5.072 4.48-5.078a.614.614 0 01.464-.217c.175 0 .34.077.463.217l.392.445a.79.79 0 01.192.525.79.79 0 01-.192.525L18.45 22.77a.614.614 0 01-.464.217.614.614 0 01-.465-.217z"
                                            fill="currentColor"></path>
                                    </svg> <span class="IH">Toggle section</span> </button>
                            </div>
                            <div class="faq-block__content" id="faq-block__content-3"></div>
                        </article>
                        <article class="callout faq-block">
                            <div class="faq-block__controller">
                                <h3 class="faq-block__header h3" id="faq-block__header-4"></h3> <button
                                    type="button" aria-expanded="false" class="faq-block__expander"> <svg
                                        class="toggle-article-image" width="36" height="36"
                                        viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <circle opacity=".1" r="18" transform="matrix(-1 0 0 1 18 18)"
                                            fill="currentColor"></circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.52 22.77l-5.329-6.04a.79.79 0 01-.191-.524.79.79 0 01.191-.526l.393-.444a.603.603 0 01.926 0l4.475 5.072 4.48-5.078a.614.614 0 01.464-.217c.175 0 .34.077.463.217l.392.445a.79.79 0 01.192.525.79.79 0 01-.192.525L18.45 22.77a.614.614 0 01-.464.217.614.614 0 01-.465-.217z"
                                            fill="currentColor"></path>
                                    </svg> <span class="IH">Toggle section</span> </button>
                            </div>
                            <div class="faq-block__content" id="faq-block__content-4"></div>
                        </article>
                        <article class="callout faq-block">
                            <div class="faq-block__controller">
                                <h3 class="faq-block__header h3" id="faq-block__header-5"></h3> <button
                                    type="button" aria-expanded="false" class="faq-block__expander"> <svg
                                        class="toggle-article-image" width="36" height="36"
                                        viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <circle opacity=".1" r="18" transform="matrix(-1 0 0 1 18 18)"
                                            fill="currentColor"></circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.52 22.77l-5.329-6.04a.79.79 0 01-.191-.524.79.79 0 01.191-.526l.393-.444a.603.603 0 01.926 0l4.475 5.072 4.48-5.078a.614.614 0 01.464-.217c.175 0 .34.077.463.217l.392.445a.79.79 0 01.192.525.79.79 0 01-.192.525L18.45 22.77a.614.614 0 01-.464.217.614.614 0 01-.465-.217z"
                                            fill="currentColor"></path>
                                    </svg> <span class="IH">Toggle section</span> </button>
                            </div>
                            <div class="faq-block__content" id="faq-block__content-5"></div>
                        </article>
                        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.querySelector("main").classList.remove("no-x-scroll"), document.querySelectorAll(".faq-block__content")
                                .forEach(function(e) {
                                    return e.hidden = !0
                                });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-media">
            <div class="container">
                <div class="social-media__wrapper">
                    <div class="social-media__media" aria-hidden="true">
                        <div class="social-media__cell"> <a href="https://www.instagram.com/p/B-2nGq9hu8Z/"
                                target="_blank"> <img loading="lazy"
                                    srcset="/1.14bb3150.webp 1x,/1.a58dde1d.jpg 1x" src="/1.a58dde1d.jpg"
                                    width="400" height="400"
                                    alt="Photo from the instagram with 446 likes and 1 comment"> </a>
                            <div class="social-media__hover-preview" aria-hidden="true">
                                <div class="social-media__stat"> <svg width="24" height="21">
                                        <path fill="#FFF"
                                            d="M17.15.25C13.6.25 12 2.9 12 2.9S10.4.25 6.85.25C3.2.25.25 3.45.25 7.4s3.05 6.2 6.1 8.9c4.6 4.1 4.9 4.45 5.65 4.45s1.05-.35 5.65-4.45c3.1-2.75 6.1-5 6.1-8.9 0-3.95-2.95-7.15-6.6-7.15zm-.5 14.9c-2.7 2.4-4.15 3.75-4.65 4.05-.5-.35-2.3-1.95-4.65-4.05-2.75-2.45-5.6-4.5-5.6-7.8 0-3.1 2.3-5.65 5.1-5.65 2.05 0 3.15 1 3.95 2.1 1.8 2.55.6 2.55 2.4 0 .8-1.1 1.9-2.1 3.95-2.1 2.8 0 5.1 2.55 5.1 5.65 0 3.35-2.85 5.4-5.6 7.8z">
                                        </path>
                                    </svg> <span>446</span> </div>
                                <div class="social-media__stat"> <svg width="24" height="24">
                                        <path fill="#FFF"
                                            d="M23.75 23.05l-1.4-5.5c.9-1.65 1.4-3.55 1.4-5.55C23.75 5.5 18.5.25 12 .25S.25 5.5.25 12 5.5 23.75 12 23.75c2 0 3.9-.5 5.55-1.4l5.5 1.4c.4.1.8-.3.7-.7zM22.25 12c0 2-.5 3.5-1.3 5-.1.2-.15.45-.1.7l1.05 4.2-4.15-1.05c-.25-.05-.5-.05-.7.1-.9.5-2.6 1.3-5 1.3-5.7 0-10.3-4.6-10.3-10.25S6.35 1.75 12 1.75 22.25 6.35 22.25 12z">
                                        </path>
                                    </svg> <span>1</span> </div>
                            </div>
                        </div>
                        <div class="social-media__cell"> <a class="social-media__cell"
                                href="https://www.instagram.com/p/B-uxtE_FkiB/" target="_blank"> <img
                                    loading="lazy" srcset="/2.c707e0d2.webp 1x,/2.ee933e82.jpg 1x"
                                    src="/2.ee933e82.jpg" width="400" height="400"
                                    alt="Photo from the instagram with 160 likes and 5 comment"> </a>
                            <div class="social-media__hover-preview" aria-hidden="true">
                                <div class="social-media__stat"> <svg width="24" height="21">
                                        <path fill="#FFF"
                                            d="M17.15.25C13.6.25 12 2.9 12 2.9S10.4.25 6.85.25C3.2.25.25 3.45.25 7.4s3.05 6.2 6.1 8.9c4.6 4.1 4.9 4.45 5.65 4.45s1.05-.35 5.65-4.45c3.1-2.75 6.1-5 6.1-8.9 0-3.95-2.95-7.15-6.6-7.15zm-.5 14.9c-2.7 2.4-4.15 3.75-4.65 4.05-.5-.35-2.3-1.95-4.65-4.05-2.75-2.45-5.6-4.5-5.6-7.8 0-3.1 2.3-5.65 5.1-5.65 2.05 0 3.15 1 3.95 2.1 1.8 2.55.6 2.55 2.4 0 .8-1.1 1.9-2.1 3.95-2.1 2.8 0 5.1 2.55 5.1 5.65 0 3.35-2.85 5.4-5.6 7.8z">
                                        </path>
                                    </svg> <span>160</span> </div>
                                <div class="social-media__stat"> <svg width="24" height="24">
                                        <path fill="#FFF"
                                            d="M23.75 23.05l-1.4-5.5c.9-1.65 1.4-3.55 1.4-5.55C23.75 5.5 18.5.25 12 .25S.25 5.5.25 12 5.5 23.75 12 23.75c2 0 3.9-.5 5.55-1.4l5.5 1.4c.4.1.8-.3.7-.7zM22.25 12c0 2-.5 3.5-1.3 5-.1.2-.15.45-.1.7l1.05 4.2-4.15-1.05c-.25-.05-.5-.05-.7.1-.9.5-2.6 1.3-5 1.3-5.7 0-10.3-4.6-10.3-10.25S6.35 1.75 12 1.75 22.25 6.35 22.25 12z">
                                        </path>
                                    </svg> <span>5</span> </div>
                            </div>
                        </div>
                        <div class="social-media__cell"> <a class="social-media__cell"
                                href="https://www.instagram.com/p/B-SzRohFBfN/" target="_blank"> <img
                                    loading="lazy" srcset="/3.79e2a853.webp 1x,/3.97d9a881.jpg 1x"
                                    src="/3.97d9a881.jpg" width="400" height="400"
                                    alt="Photo from the instagram with 179 likes and 3 comment"> </a>
                            <div class="social-media__hover-preview" aria-hidden="true">
                                <div class="social-media__stat"> <svg width="24" height="21">
                                        <path fill="#FFF"
                                            d="M17.15.25C13.6.25 12 2.9 12 2.9S10.4.25 6.85.25C3.2.25.25 3.45.25 7.4s3.05 6.2 6.1 8.9c4.6 4.1 4.9 4.45 5.65 4.45s1.05-.35 5.65-4.45c3.1-2.75 6.1-5 6.1-8.9 0-3.95-2.95-7.15-6.6-7.15zm-.5 14.9c-2.7 2.4-4.15 3.75-4.65 4.05-.5-.35-2.3-1.95-4.65-4.05-2.75-2.45-5.6-4.5-5.6-7.8 0-3.1 2.3-5.65 5.1-5.65 2.05 0 3.15 1 3.95 2.1 1.8 2.55.6 2.55 2.4 0 .8-1.1 1.9-2.1 3.95-2.1 2.8 0 5.1 2.55 5.1 5.65 0 3.35-2.85 5.4-5.6 7.8z">
                                        </path>
                                    </svg> <span>179</span> </div>
                                <div class="social-media__stat"> <svg width="24" height="24">
                                        <path fill="#FFF"
                                            d="M23.75 23.05l-1.4-5.5c.9-1.65 1.4-3.55 1.4-5.55C23.75 5.5 18.5.25 12 .25S.25 5.5.25 12 5.5 23.75 12 23.75c2 0 3.9-.5 5.55-1.4l5.5 1.4c.4.1.8-.3.7-.7zM22.25 12c0 2-.5 3.5-1.3 5-.1.2-.15.45-.1.7l1.05 4.2-4.15-1.05c-.25-.05-.5-.05-.7.1-.9.5-2.6 1.3-5 1.3-5.7 0-10.3-4.6-10.3-10.25S6.35 1.75 12 1.75 22.25 6.35 22.25 12z">
                                        </path>
                                    </svg> <span>3</span> </div>
                            </div>
                        </div>
                        <div class="social-media__cell"> <a class="social-media__cell"
                                href="https://www.instagram.com/p/B8zTXoOKYi5/" target="_blank"> <img
                                    loading="lazy" srcset="/4.eaa20ab5.webp 1x,/4.24cff444.jpg 1x"
                                    src="/4.24cff444.jpg" width="400" height="400"
                                    alt="Photo from the instagram with 281 likes and 1 comment"> </a>
                            <div class="social-media__hover-preview" aria-hidden="true">
                                <div class="social-media__stat"> <svg width="24" height="21">
                                        <path fill="#FFF"
                                            d="M17.15.25C13.6.25 12 2.9 12 2.9S10.4.25 6.85.25C3.2.25.25 3.45.25 7.4s3.05 6.2 6.1 8.9c4.6 4.1 4.9 4.45 5.65 4.45s1.05-.35 5.65-4.45c3.1-2.75 6.1-5 6.1-8.9 0-3.95-2.95-7.15-6.6-7.15zm-.5 14.9c-2.7 2.4-4.15 3.75-4.65 4.05-.5-.35-2.3-1.95-4.65-4.05-2.75-2.45-5.6-4.5-5.6-7.8 0-3.1 2.3-5.65 5.1-5.65 2.05 0 3.15 1 3.95 2.1 1.8 2.55.6 2.55 2.4 0 .8-1.1 1.9-2.1 3.95-2.1 2.8 0 5.1 2.55 5.1 5.65 0 3.35-2.85 5.4-5.6 7.8z">
                                        </path>
                                    </svg> <span>281</span> </div>
                                <div class="social-media__stat"> <svg width="24" height="24">
                                        <path fill="#FFF"
                                            d="M23.75 23.05l-1.4-5.5c.9-1.65 1.4-3.55 1.4-5.55C23.75 5.5 18.5.25 12 .25S.25 5.5.25 12 5.5 23.75 12 23.75c2 0 3.9-.5 5.55-1.4l5.5 1.4c.4.1.8-.3.7-.7zM22.25 12c0 2-.5 3.5-1.3 5-.1.2-.15.45-.1.7l1.05 4.2-4.15-1.05c-.25-.05-.5-.05-.7.1-.9.5-2.6 1.3-5 1.3-5.7 0-10.3-4.6-10.3-10.25S6.35 1.75 12 1.75 22.25 6.35 22.25 12z">
                                        </path>
                                    </svg> <span>1</span> </div>
                            </div>
                        </div>
                        <div class="social-media__cell"> <a class="social-media__cell"
                                href="https://www.instagram.com/p/B9r6Lq6FM12/" target="_blank"> <img
                                    loading="lazy" srcset="/5.fb9d3e9b.webp 1x,/5.4a4f61f0.jpg 1x"
                                    src="/5.4a4f61f0.jpg" width="400" height="400"
                                    alt="Photo from the instagram with 56 likes and 1 comment"> </a>
                            <div class="social-media__hover-preview" aria-hidden="true">
                                <div class="social-media__stat"> <svg width="24" height="21">
                                        <path fill="#FFF"
                                            d="M17.15.25C13.6.25 12 2.9 12 2.9S10.4.25 6.85.25C3.2.25.25 3.45.25 7.4s3.05 6.2 6.1 8.9c4.6 4.1 4.9 4.45 5.65 4.45s1.05-.35 5.65-4.45c3.1-2.75 6.1-5 6.1-8.9 0-3.95-2.95-7.15-6.6-7.15zm-.5 14.9c-2.7 2.4-4.15 3.75-4.65 4.05-.5-.35-2.3-1.95-4.65-4.05-2.75-2.45-5.6-4.5-5.6-7.8 0-3.1 2.3-5.65 5.1-5.65 2.05 0 3.15 1 3.95 2.1 1.8 2.55.6 2.55 2.4 0 .8-1.1 1.9-2.1 3.95-2.1 2.8 0 5.1 2.55 5.1 5.65 0 3.35-2.85 5.4-5.6 7.8z">
                                        </path>
                                    </svg> <span>56</span> </div>
                                <div class="social-media__stat"> <svg width="24" height="24">
                                        <path fill="#FFF"
                                            d="M23.75 23.05l-1.4-5.5c.9-1.65 1.4-3.55 1.4-5.55C23.75 5.5 18.5.25 12 .25S.25 5.5.25 12 5.5 23.75 12 23.75c2 0 3.9-.5 5.55-1.4l5.5 1.4c.4.1.8-.3.7-.7zM22.25 12c0 2-.5 3.5-1.3 5-.1.2-.15.45-.1.7l1.05 4.2-4.15-1.05c-.25-.05-.5-.05-.7.1-.9.5-2.6 1.3-5 1.3-5.7 0-10.3-4.6-10.3-10.25S6.35 1.75 12 1.75 22.25 6.35 22.25 12z">
                                        </path>
                                    </svg> <span>1</span> </div>
                            </div>
                        </div>
                        <div class="social-media__cell"> <a class="social-media__cell"
                                href="https://www.instagram.com/p/B_NjWYpgfgl/" target="_blank"> <img
                                    loading="lazy" srcset="/6.282d3aa2.webp 1x,/6.3a86fe90.jpg 1x"
                                    src="/6.3a86fe90.jpg" width="400" height="400"
                                    alt="Photo from the instagram with 43 likes and 1 comment"> </a>
                            <div class="social-media__hover-preview" aria-hidden="true">
                                <div class="social-media__stat"> <svg width="24" height="21">
                                        <path fill="#FFF"
                                            d="M17.15.25C13.6.25 12 2.9 12 2.9S10.4.25 6.85.25C3.2.25.25 3.45.25 7.4s3.05 6.2 6.1 8.9c4.6 4.1 4.9 4.45 5.65 4.45s1.05-.35 5.65-4.45c3.1-2.75 6.1-5 6.1-8.9 0-3.95-2.95-7.15-6.6-7.15zm-.5 14.9c-2.7 2.4-4.15 3.75-4.65 4.05-.5-.35-2.3-1.95-4.65-4.05-2.75-2.45-5.6-4.5-5.6-7.8 0-3.1 2.3-5.65 5.1-5.65 2.05 0 3.15 1 3.95 2.1 1.8 2.55.6 2.55 2.4 0 .8-1.1 1.9-2.1 3.95-2.1 2.8 0 5.1 2.55 5.1 5.65 0 3.35-2.85 5.4-5.6 7.8z">
                                        </path>
                                    </svg> <span>43</span> </div>
                                <div class="social-media__stat"> <svg width="24" height="24">
                                        <path fill="#FFF"
                                            d="M23.75 23.05l-1.4-5.5c.9-1.65 1.4-3.55 1.4-5.55C23.75 5.5 18.5.25 12 .25S.25 5.5.25 12 5.5 23.75 12 23.75c2 0 3.9-.5 5.55-1.4l5.5 1.4c.4.1.8-.3.7-.7zM22.25 12c0 2-.5 3.5-1.3 5-.1.2-.15.45-.1.7l1.05 4.2-4.15-1.05c-.25-.05-.5-.05-.7.1-.9.5-2.6 1.3-5 1.3-5.7 0-10.3-4.6-10.3-10.25S6.35 1.75 12 1.75 22.25 6.35 22.25 12z">
                                        </path>
                                    </svg> <span>1</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-media__content"> <span role="heading" aria-level="2" class="IH">
                            Social media </span> <a href="https://www.instagram.com/studybaycom"
                            class="h2 social-media__link" target="_blank"> <span class="a a--contrast a--shy">
                                Join Us on Instagram </span> <svg width="48" height="48"
                                viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path d="M24 48c13.255 0 24-10.745 24-24S37.255 0 24 0 0 10.745 0 24s10.745 24 24 24z"
                                    fill="#fff"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.555 13.268c1.99-.088 6.911-.093 8.899 0 4.065.187 6.1 2.486 6.278 6.278.088 1.99.094 6.91 0 8.898-.148 3.212-1.658 5-3.659 5.777-1.471.57-2.907.567-7.069.567l-.571.002c-3.754.019-6.424.172-8.41-1.813-2.046-2.046-1.812-4.78-1.812-8.981 0-4.105-.265-6.904 1.812-8.981 1.243-1.243 2.785-1.665 4.532-1.747zm4.41 1.85c-2.886 0-3.224.014-4.37.054-4.99.256-4.48 3.837-4.48 8.81 0 3.674-.275 6.098 1.242 7.607 1.152 1.155 2.677 1.248 6.055 1.254h2.122c3.978.007 5.763.062 7.065-1.24 1.338-1.345 1.254-3.16 1.255-7.608l-.001-1.245c-.004-1.773-.02-2.169-.062-3.117-.226-4.99-3.99-4.488-8.785-4.488l-.04-.027zM24 18.835c3.253 0 5.891 2.52 5.891 5.634 0 3.112-2.635 5.635-5.89 5.635-3.253 0-5.892-2.52-5.892-5.634 0-3.112 2.636-5.635 5.891-5.635zm0 1.977c-2.112 0-3.823 1.637-3.823 3.657s1.71 3.658 3.823 3.658 3.825-1.637 3.824-3.657c0-2.02-1.712-3.658-3.824-3.658zm5.4-3.856c.814 0 1.473.631 1.473 1.41 0 .777-.66 1.408-1.473 1.408-.813 0-1.473-.63-1.473-1.409 0-.778.66-1.409 1.473-1.409z"
                                    fill="currentColor"></path>
                            </svg> </a> <a href="https://www.facebook.com/studybaycom"
                            class="h2 social-media__fb social-media__link" target="_blank"> <span
                                class="a a--contrast a--shy"> and Facebook </span> <svg width="48"
                                height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M24 48c13.255 0 24-10.745 24-24S37.255 0 24 0 0 10.745 0 24s10.745 24 24 24z"
                                    fill="#fff"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31.2 21.97h-4.4v-3.508c0-.968.788-.877 1.76-.877h1.76V13.2H26.8c-2.916 0-5.28 2.356-5.28 5.262v3.507H18v4.385h3.52V36h5.28v-9.646h2.64l1.76-4.385z"
                                    fill="currentColor"></path>
                            </svg> </a>
                        <p class="p social-media__p"> Know more, pay less — access monthly giveaways, exclusive promo
                            codes, and useful content. </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="extended-content">
            <div class="container container--wide most-popular-subjects">
                <h2 class="h2 most-popular-subjects__heading"> Most Popular Assignment Subjects </h2>
                <p class="most-popular-subjects__text p"> No topic is out of reach here on Studybay. Find an expert
                    within any area and get their professional assistance. </p>
                <div class="slider__wrapper" id="most-popular-subjects-slider">
                    <div class="slider slider--snap">
                        <div class="most-popular-subjects__list slider__inner">
                            <article class="most-popular-subjects__item popular-subject" data-popular=""> <span
                                    class="popular-subject__heading" role="heading" aria-level="3"> <svg
                                        width="41" height="40" aria-hidden="true" viewBox="0 0 41 40"
                                        class="most-popular-subjects__image" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.5" cy="20" r="20" fill="#0d6efd">
                                        </circle>
                                        <path
                                            d="M22.049 15.47a1 1 0 1 0-1.765-.94l-2.666 5A1 1 0 0 0 18.5 21h2.333l-1.882 3.53a1 1 0 1 0 1.765.94l2.666-5A1 1 0 0 0 22.5 19h-2.333l1.882-3.53Z"
                                            fill="#fff"></path>
                                        <path
                                            d="M13.705 16.218a.84.84 0 0 1 .573-.218h2.835a1 1 0 1 0 0-2h-2.835c-.717 0-1.416.267-1.941.759a2.615 2.615 0 0 0-.837 1.908v6.667c0 .728.31 1.413.837 1.908a2.839 2.839 0 0 0 1.94.758h1.779a1 1 0 0 0 0-2h-1.778a.84.84 0 0 1-.573-.217.617.617 0 0 1-.205-.45v-6.666c0-.155.065-.318.205-.45ZM24.944 14a1 1 0 0 0 0 2h1.778a.84.84 0 0 1 .573.218c.14.13.205.294.205.449v6.667a.617.617 0 0 1-.205.449.84.84 0 0 1-.573.217h-2.835a1 1 0 0 0 0 2h2.835c.717 0 1.416-.266 1.941-.758.528-.495.837-1.18.837-1.908v-6.667c0-.729-.31-1.414-.837-1.908a2.839 2.839 0 0 0-1.94-.759h-1.779Z"
                                            fill="#fff"></path>
                                    </svg> Engineering </span>
                                <p class="p popular-subject__text"> Whether you’re majoring in mechanical engineering,
                                    chemical engineering, or any other engineering discipline, we can find an expert to
                                    give you helpful advice. </p>
                            </article>
                            <article class="most-popular-subjects__item popular-subject" data-popular=""> <span
                                    class="popular-subject__heading" role="heading" aria-level="3"> <svg
                                        width="41" height="40" fill="none" viewBox="0 0 41 40"
                                        aria-hidden="true" class="most-popular-subjects__image"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.5" cy="20" r="20" fill="#0d6efd">
                                        </circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.5 10a1 1 0 1 0 0 2h2.457l.647 3.162c.004.027.01.053.016.078l1.366 6.672c.122.603.457 1.14.94 1.52A2.66 2.66 0 0 0 18.61 24h7.936a2.66 2.66 0 0 0 1.684-.568c.483-.38.818-.917.94-1.521l1.311-6.72A1 1 0 0 0 29.5 14H16.408l-.656-3.2a1 1 0 0 0-.98-.8H11.5Zm6.445 11.513L16.817 16h11.47l-1.077 5.515a.595.595 0 0 1-.216.346.66.66 0 0 1-.42.139h-7.991a.66.66 0 0 1-.42-.14.595.595 0 0 1-.218-.347Z"
                                            fill="#fff"></path>
                                        <path
                                            d="M15.5 28a2 2 0 1 1 4 0 2 2 0 0 1-4 0ZM25.5 28a2 2 0 1 1 4 0 2 2 0 0 1-4 0Z"
                                            fill="#fff"></path>
                                    </svg> Marketing </span>
                                <p class="p popular-subject__text"> Find an experienced professional to let you figure
                                    out what are SWOT analysis, pricing strategies, promotional tools, etc. </p>
                            </article>
                            <article class="most-popular-subjects__item popular-subject" data-popular=""> <span
                                    class="popular-subject__heading" role="heading" aria-level="3"> <svg
                                        width="41" height="40" fill="none" viewBox="0 0 41 40"
                                        aria-hidden="true" class="most-popular-subjects__image"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.5" cy="20" r="20" fill="#0d6efd">
                                        </circle>
                                        <path
                                            d="M18.207 14.707a1 1 0 0 0-1.414-1.414l-6 6a1 1 0 0 0 0 1.414l6 6a1 1 0 0 0 1.414-1.414L12.914 20l5.293-5.293ZM24.207 13.293a1 1 0 0 0-1.414 1.414L28.086 20l-5.293 5.293a1 1 0 0 0 1.414 1.414l6-6a1 1 0 0 0 0-1.414l-6-6Z"
                                            fill="#fff"></path>
                                    </svg> Programming </span>
                                <p class="p popular-subject__text"> What would a real practicing IT specialist say
                                    regarding my assignment? If that's the question you ask yourself, find an expert
                                    within the industry on Studybay and show them your task. </p>
                            </article>
                            <article class="most-popular-subjects__item popular-subject" data-popular=""> <span
                                    class="popular-subject__heading" role="heading" aria-level="3"> <svg
                                        width="41" height="40" fill="none" viewBox="0 0 41 40"
                                        aria-hidden="true" class="most-popular-subjects__image"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.5" cy="20" r="20" fill="#0d6efd">
                                        </circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.5 9a2 2 0 0 0-2 2h-1a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V14a3 3 0 0 0-3-3h-1a2 2 0 0 0-2-2h-6Zm8 4a2 2 0 0 1-2 2h-6a2 2 0 0 1-2-2h-1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V14a1 1 0 0 0-1-1h-1Zm-8 0h6v-2h-6v2Z"
                                            fill="#fff"></path>
                                    </svg> Accounting </span>
                                <p class="p popular-subject__text"> Navigate a variety of financial terms and figure
                                    out how to operate them properly while cooperating with top experts within the
                                    field. </p>
                            </article>
                            <article class="most-popular-subjects__item popular-subject" data-popular=""> <span
                                    class="popular-subject__heading" role="heading" aria-level="3"> <svg
                                        width="41" height="40" fill="none" viewBox="0 0 41 40"
                                        aria-hidden="true" class="most-popular-subjects__image"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.5" cy="20" r="20" fill="#0d6efd">
                                        </circle>
                                        <path
                                            d="M13.207 12.293a1 1 0 0 0-1.414 1.414L17.086 19l-5.293 5.293a1 1 0 0 0 1.414 1.414l6-6a1 1 0 0 0 0-1.414l-6-6ZM20.5 26a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2h-8Z"
                                            fill="#fff"></path>
                                    </svg> Java </span>
                                <p class="p popular-subject__text"> Improve your skills and learn more effectively by
                                    requesting help on any assignment from those who know their way around this
                                    fundamental programming language. </p>
                            </article>
                            <article class="most-popular-subjects__item popular-subject" data-popular=""> <span
                                    class="popular-subject__heading" role="heading" aria-level="3"> <svg
                                        width="41" height="40" fill="none" viewBox="0 0 41 40"
                                        aria-hidden="true" class="most-popular-subjects__image"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.5" cy="20" r="20" fill="#0d6efd">
                                        </circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M21.5 11a1 1 0 1 0-2 0v1H18a4.5 4.5 0 1 0 0 9h1.5v5h-5a1 1 0 1 0 0 2h5v1a1 1 0 1 0 2 0v-1H23a4.5 4.5 0 1 0 0-9h-1.5v-5h4a1 1 0 1 0 0-2h-4v-1Zm-2 3H18a2.5 2.5 0 0 0 0 5h1.5v-5Zm2 7v5H23a2.5 2.5 0 0 0 0-5h-1.5Z"
                                            fill="#fff"></path>
                                    </svg> Economics </span>
                                <p class="p popular-subject__text"> From macroeconomics to microeconomics,
                                    international economics to personal finance economics, we have experts who can cover
                                    any type of request regarding assignment help online. </p>
                            </article>
                            <article class="most-popular-subjects__item popular-subject" data-popular=""> <span
                                    class="popular-subject__heading" role="heading" aria-level="3"> <svg
                                        width="41" height="40" fill="none" viewBox="0 0 41 40"
                                        aria-hidden="true" class="most-popular-subjects__image"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.5" cy="20" r="20" fill="#0d6efd">
                                        </circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.5 10a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1 10 10 0 0 0-10-10Zm1 9v-6.937A7.999 7.999 0 0 1 28.437 19H21.5Z"
                                            fill="#fff"></path>
                                        <path
                                            d="M17.21 12.916a1 1 0 1 0-.8-1.832 9.854 9.854 0 0 0-3.771 2.904 9.88 9.88 0 0 0-1.689 9.091 9.873 9.873 0 0 0 2.474 4.069 9.845 9.845 0 0 0 8.84 2.664 9.84 9.84 0 0 0 4.303-2.028 9.87 9.87 0 0 0 2.854-3.81 1 1 0 0 0-1.842-.778 7.868 7.868 0 0 1-2.276 3.039 7.84 7.84 0 0 1-7.213 1.432 7.846 7.846 0 0 1-3.258-1.94 7.874 7.874 0 0 1-2.2-7.038 7.88 7.88 0 0 1 1.574-3.458 7.852 7.852 0 0 1 3.005-2.315Z"
                                            fill="#fff"></path>
                                    </svg> Statistics </span>
                                <p class="p popular-subject__text"> Learn about the best ways of collection,
                                    organization, analysis, interpretation, and presentation of data first hand — find
                                    an expert in statistics to help with your assignments. </p>
                            </article>
                            <article class="most-popular-subjects__item popular-subject" data-popular=""> <span
                                    class="popular-subject__heading" role="heading" aria-level="3"> <svg
                                        width="41" height="40" fill="none" viewBox="0 0 41 40"
                                        aria-hidden="true" class="most-popular-subjects__image"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.5" cy="20" r="20" fill="#0d6efd">
                                        </circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.5 10a3 3 0 0 0-3 3v1h-2.2c-1.643 0-2.8 1.445-2.8 3v10c0 1.555 1.157 3 2.8 3h14.4c1.643 0 2.8-1.445 2.8-3V17c0-1.555-1.157-3-2.8-3h-2.2v-1a3 3 0 0 0-3-3h-4Zm5 4v-1a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1h6Zm-10.2 2c-.345 0-.8.346-.8 1v10c0 .654.455 1 .8 1h14.4c.345 0 .8-.346.8-1V17c0-.654-.455-1-.8-1H13.3Z"
                                            fill="#fff"></path>
                                    </svg> Management </span>
                                <p class="p popular-subject__text"> Whether it's a business, a non-profit
                                    organization, or a government institution you are going to work with in the future,
                                    start your path in management by requesting homework assignment help from a
                                    professional. </p>
                            </article>
                            <article class="most-popular-subjects__item popular-subject" data-popular=""> <span
                                    class="popular-subject__heading" role="heading" aria-level="3"> <svg
                                        width="41" height="40" aria-hidden="true" viewBox="0 0 41 40"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.5" cy="20" r="20" fill="#0d6efd">
                                        </circle>
                                        <g clip-path="url(#aLaw)">
                                            <path
                                                d="M28.21 11.056c-2.273-.408-4.367-1.65-5.413-2.353a4.102 4.102 0 0 0-4.595 0c-1.046.704-3.14 1.945-5.413 2.353a2.815 2.815 0 0 0-2.324 2.77v5.658c0 1.87.523 3.692 1.554 5.416.807 1.35 1.925 2.639 3.323 3.833 2.35 2.007 4.678 3.054 4.776 3.097l.382.17.38-.17c.099-.043 2.426-1.09 4.777-3.097 1.398-1.194 2.516-2.484 3.323-3.833 1.031-1.724 1.554-3.546 1.554-5.416v-5.658a2.815 2.815 0 0 0-2.324-2.77Zm.449 8.428c0 2.787-1.408 5.408-4.185 7.792a20.802 20.802 0 0 1-3.974 2.655 20.807 20.807 0 0 1-3.975-2.655c-2.777-2.383-4.184-5.005-4.184-7.792v-5.658a.94.94 0 0 1 .779-.924c2.611-.468 4.961-1.857 6.13-2.643a2.233 2.233 0 0 1 2.5 0c1.168.786 3.518 2.175 6.13 2.643.45.081.779.47.779.924v5.658Z"
                                                fill="#fff"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="aLaw">
                                                <path fill="#fff" transform="translate(8.5 8)"
                                                    d="M0 0h24v24H0z"></path>
                                            </clipPath>
                                        </defs>
                                    </svg> Law </span>
                                <p class="p popular-subject__text"> We will match you with an assignment helper
                                    specializing in legal studies so that you can ask any questions related to the
                                    discipline and get clear and accurate answers. </p>
                            </article>
                        </div>
                    </div>
                    <div class="slider__controls"> <button type="button"
                            class="slider__control slider__control--left" tabindex="-1" aria-hidden="true"
                            hidden> Scroll to left </button> <button type="button"
                            class="slider__control slider__control--right" tabindex="-1" aria-hidden="true"
                            hidden> Scroll to right </button> </div>
                </div>
            </div>
            <div class="popular-types-wrapper">
                <div class="container container--wide">
                    <h2 class="h2 most-popular-types__heading"> Most Popular Assignment Types </h2>
                    <p class="most-popular-types__text p"> Our experts can cover all kinds of assignments — pick the
                        one you need help with, and we’ll find the right experts to handle it. </p>
                    <div class="most-popular-types__content">
                        <div id="most-popular-types-slider">
                            <div class="slider slider--snap">
                                <div class="slider__grid-view">
                                    <article class="most-popular-types__item popular-type" data-popular=""> <span
                                            class="popular-type__heading" role="heading" aria-level="3"> Essay
                                        </span>
                                        <p class="p popular-type__text"> Whether you struggle with making an outline
                                            or finding convincing argumentation, our experts can provide you with
                                            assignment writing help and cooperate with you on your argumentative,
                                            narrative, or any other kind of essay. </p>
                                    </article>
                                    <article class="most-popular-types__item popular-type" data-popular=""> <span
                                            class="popular-type__heading" role="heading" aria-level="3"> Research
                                            paper </span>
                                        <p class="p popular-type__text"> Get our professional assignment help while
                                            working on your research. Make sure your academic paper is perfect from the
                                            title page and abstract to the references section. </p>
                                    </article>
                                    <article class="most-popular-types__item popular-type" data-popular=""> <span
                                            class="popular-type__heading" role="heading" aria-level="3">
                                            Coursework </span>
                                        <p class="p popular-type__text"> Don't worry about your overall course scores.
                                            Hire an expert to cooperate with you on your assignment, no matter how
                                            complicated and time-consuming it is. </p>
                                    </article>
                                    <article class="most-popular-types__item popular-type" data-popular=""> <span
                                            class="popular-type__heading" role="heading" aria-level="3"> Personal
                                            statement </span>
                                        <p class="p popular-type__text"> Make the admissions committee notice you
                                            among all the other potential students. Request help with your application
                                            essay and enroll at your dream college or university. </p>
                                    </article>
                                    <article class="most-popular-types__item popular-type" data-popular=""> <span
                                            class="popular-type__heading" role="heading" aria-level="3"> Speech
                                        </span>
                                        <p class="p popular-type__text"> Want to write a clear, convincing, and
                                            engaging speech? Get advice from professional writers, journalists, and
                                            professors among Studybay experts. </p>
                                    </article>
                                    <article class="most-popular-types__item popular-type" data-popular=""> <span
                                            class="popular-type__heading" role="heading" aria-level="3"> Case
                                            studies </span>
                                        <p class="p popular-type__text"> Consult with people with real practical
                                            experience within an academic field to successfully perform a detailed study
                                            of a subject, place, event, person, group, organization, or phenomenon. </p>
                                    </article>
                                    <article class="most-popular-types__item popular-type" data-popular=""> <span
                                            class="popular-type__heading" role="heading" aria-level="3"> Term
                                            paper </span>
                                        <p class="p popular-type__text"> Make sure your academic term ends up
                                            successfully. Let an expert calm your worries down with their professional
                                            assistance. </p>
                                    </article>
                                    <article class="most-popular-types__item popular-type" data-popular=""> <span
                                            class="popular-type__heading" role="heading" aria-level="3"> Thesis or
                                            dissertation </span>
                                        <p class="p popular-type__text"> Even if all you need is just proofreading,
                                            feel free to entrust the double-check of your fundamental academic article
                                            to an expert who has already earned a degree. </p>
                                    </article>
                                    <article class="most-popular-types__item popular-type" data-popular=""> <span
                                            class="popular-type__heading" role="heading" aria-level="3"> Annotated
                                            bibliography </span>
                                        <p class="p popular-type__text"> Get assistance not only finding great sources
                                            to back up your research but also listing them properly. </p>
                                    </article>
                                </div>
                            </div>
                            <div class="slider__controls"> <button type="button"
                                    class="slider__control slider__control--left" tabindex="-1"
                                    aria-hidden="true" hidden> Scroll to left </button> <button type="button"
                                    class="slider__control slider__control--right" tabindex="-1"
                                    aria-hidden="true" hidden> Scroll to right </button> </div>
                        </div>
                        <article class="most-popular-types__banner most-popular-types__item type-banner"> <span
                                class="type-banner__heading" role="heading" aria-level="3"> Didn't find what you
                                were looking for? </span>
                            <p class="p type-banner__text"> Order a custom job from an expert 👍 </p> <span
                                data-hidden="" data-secret="$authors$" class="a a--cta type-banner__link">Find an
                                Expert</span>
                        </article>
                    </div>
                </div>
            </div>
            <div class="container container--wide">
                <h2 class="h2 questions__heading"> Any Questions Left? </h2>
                <div id="questions-slider">
                    <div class="slider slider--snap">
                        <div class="questions__list slider__grid-view">
                            <article class="question questions__item" data-question="">
                                <h3 class="h3 question__heading"> Is getting assignment help considered cheating?
                                </h3>
                                <p class="p question__text"> Using Studybay services is not cheating. Cheating
                                    involves plagiarism or stealing other people’s work and using it as your own. We
                                    stand against copying others’ content and claiming it as original content created by
                                    you. You can learn more about our ethical principles by checking our Honor Code.
                                </p>
                            </article>
                            <article class="question questions__item" data-question="">
                                <h3 class="h3 question__heading"> Is it worth the money? </h3>
                                <p class="p question__text"> Definitely yes. Sometimes it’s really unbearable for a
                                    student to understand the ins and outs of the topic or even a whole discipline all
                                    by themselves. In this case, Studybay can come in really handy. Here you can find
                                    experts in various academic fields to share their knowledge and help you get your
                                    assignments done. </p>
                            </article>
                            <article class="question questions__item" data-question="">
                                <h3 class="h3 question__heading"> How long will it take for my assignment to be ready?
                                </h3>
                                <p class="p question__text"> It really depends on the assignment type and complexity.
                                    If you’re not sure how much time work on your task may require, you can reach out to
                                    our support team to make sure our experts will be able to fulfill your requirements
                                    by the deadline. </p>
                            </article>
                            <article class="question questions__item" data-question="">
                                <h3 class="h3 question__heading"> Can I edit the assignment if I don’t like it? </h3>
                                <p class="p question__text"> Of course, you can. We offer free revisions on each
                                    project and even a money-back guarantee, which means you can request a refund if
                                    you’re not satisfied with our assignment help service. Also, we don’t transfer your
                                    funds to the expert until you accept your project as completed, so you can be sure
                                    your money is safe and sound. </p>
                            </article>
                        </div>
                    </div>
                    <div class="slider__controls"> <button type="button"
                            class="slider__control slider__control--left" tabindex="-1" aria-hidden="true"
                            hidden> Scroll to left </button> <button type="button"
                            class="slider__control slider__control--right" tabindex="-1" aria-hidden="true"
                            hidden> Scroll to right </button> </div>
                </div>
            </div>
        </div>
        <div> <button id="extend-button" class="extend-button" aria-controls="extended-content"
                aria-expanded="true"> Show less </button> </div>
        <div class="auth-popup" id="auth-popup" hidden>
            <div class="auth-popup__backspace"></div>
            <div class="auth-popup__content"> <button type="button" class="auth-popup__close"> <span
                        class="IH">Close modal window</span> <svg width="16" height="16"
                        viewbox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path opacity="0.7"
                            d="M7.81 6.75l5.47-5.47a.75.75 0 0 0 0-1.06.75.75 0 0 0-1.06 0L6.75 5.69 1.28.22a.75.75 0 0 0-1.06 0 .75.75 0 0 0 0 1.06l5.47 5.47-5.47 5.47a.75.75 0 0 0 0 1.06c.15.15.34.22.53.22s.38-.07.53-.22l5.47-5.47 5.47 5.47c.15.15.34.22.53.22s.38-.07.53-.22a.75.75 0 0 0 0-1.06z">
                        </path>
                    </svg> </button>
                <h2 class="auth-popup__heading h2"> Sign Up Studybay </h2>
                <form action="/order/unregordershortform/" class="auth-popup__form" method="post"
                    id="fastreg-form"> <input type="hidden" name="title" value=""
                        id="project-description"> <input type="hidden" name="deadline" value=""
                        id="project-deadline"> <input type="hidden" name="type_id" value="1"> <input
                        type="hidden" name="withoutDefaultType" value="1"> <input type="hidden"
                        name="reg_url" value=""> <input type="hidden" name="type_form"
                        value="sb_mainCustomer_1"> <label class="auth-popup__fragment"> <span
                            class="auth-popup__label"> Email </span> <input class="auth-popup__field field"
                            id="fastreg-email" name="email" type="email" placeholder="sam.doe@gmail.com"
                            required pattern="\S+@\S+\.\S+" title="Valid email should look like email@example.com">
                    </label>
                    <div class="auth-popup__fragment fake-checkbox__root"> <label class="fake-checkbox"> <input
                                class="fake-checkbox__real-checkbox" value="1" name="license"
                                type="checkbox" id="auth-popup-user-agreement" required> <span
                                class="fake-checkbox__checkmark"> <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 18" aria-hidden="true">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M20.6 0l3.092 3.17L9.226 18 .308 8.858 3.4 5.688l5.826 5.972z"></path>
                                </svg> </span> <span class="fake-checkbox__base"></span> </label> <label
                            class="auth-popup__label" for="auth-popup-user-agreement"> I accept <span
                                class="a" data-hidden="" data-secret="$info$license$">User Agreement</span>
                        </label> </div>
                    <div class="auth-popup__fragment fake-checkbox__root"> <label class="fake-checkbox"> <input
                                class="fake-checkbox__real-checkbox" name="isAnnoyingEmailTurnedOff"
                                value="1" type="checkbox" id="auth-popup-marketing"> <span
                                class="fake-checkbox__checkmark"> <svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 18" aria-hidden="true">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M20.6 0l3.092 3.17L9.226 18 .308 8.858 3.4 5.688l5.826 5.972z"></path>
                                </svg> </span> <span class="fake-checkbox__base"></span> </label> <label
                            class="auth-popup__label" for="auth-popup-marketing"> I don't want to receive marketing
                            messages from Studybay </label> </div> <button
                        class="auth-popup__button auth-popup__fragment button" type="submit"> Sign Up </button>
                </form>
                <footer class="auth-popup__footer">
                    <p class="auth-popup__p p"> Already registered? <span class="a" data-hidden=""
                            data-secret="$login$">Log In</span> </p>
                </footer>
            </div>
        </div>
        <div id="brazil-banner" class="brazil-banner" hidden>
            <div class="brazil-banner__backspace" data-brazil-banner="close"></div>
            <div role="dialog" class="brazil-banner__root" aria-modal="true"
                aria-labelledby="brazil-banner-heading"> <button type="button" class="brazil-banner__close"
                    data-brazil-banner="close"> <span class="IH">Close</span> <svg width="14"
                        height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.707 1.707A1 1 0 0 0 12.293.293L7 5.586 1.707.293A1 1 0 0 0 .293 1.707L5.586 7 .293 12.293a1 1 0 1 0 1.414 1.414L7 8.414l5.293 5.293a1 1 0 0 0 1.414-1.414L8.414 7l5.293-5.293Z"
                            fill="#000"></path>
                    </svg> </button> <img src="/poster.330ac4e4.svg" width="138" height="160"
                    alt="" class="brazil-banner__image">
                <h2 id="brazil-banner-heading" class="brazil-banner__heading"> Are you from Brazil? 🇧🇷 </h2>
                <p class="brazil-banner__message">You can go to the Brazilian version of the site</p>
                <div class="brazil-banner__controls"> <button
                        class="brazil-banner__control brazil-banner__control--hollow"
                        data-brazil-banner="close">Stay</button> <span class="brazil-banner__control"
                        id="brazil-banner-pass-link" data-hidden="" data-secret="?mystudybay%com%br/">Go</span>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <h2 class="IH">Studybay Services</h2>
        <div class="container">
            <div class="footer__main-info">
                <div class="help">
                    <div class="help__phone"> <a href="tel:18554077728" target="_blank"
                            class="a a--shy help__contact-link"> 1-855-407-7728 </a> </div>
                    <div class="help__email"> <a
                            href="/cdn-cgi/l/email-protection#a4d7d1d4d4cbd6d0e4d7d0d1c0ddc6c5dd8ac7cbc9"
                            target="_blank" class="a a--shy help__contact-link"> <span class="__cf_email__"
                                data-cfemail="097a7c7979667b7d497a7d7c6d706b6870276a6664">[email&#160;protected]</span>
                        </a> </div>
                    <div class="help__button"> <span data-hidden="" data-secret="$order$"
                            class="a a--cta help__button-link" data-hook="ref"> Get Help </span> </div>
                    <div class="help__stores"> <a class="help__store" href="https://app.adjust.com/ch01bt2"> <img
                                src="/app-store.f42eaf6e.svg" width="99" height="32" loading="lazy"
                                alt="Download on the App Store"> </a> <a class="help__store"
                            href="https://app.adjust.com/ch01bt2"> <img src="/google-play.66c26d25.svg"
                                width="99" height="32" loading="lazy" alt="Get it on Google Play"> </a>
                    </div>
                </div>
                <div class="footer__links-section">
                    <div class="footer__links-wrapper"> <span role="heading" aria-level="3"
                            class="footer__links-title h3">Studybay products</span>
                        <ul class="footer__links-list">
                            <li class="footer__link"> <span class="a a--shy" data-hidden=""
                                    data-secret="$order$">Place a Project</span> </li>
                            <li class="footer__link"> <a class="a a--shy" href="https://loop.studybay.com/">Study
                                    Notes & Documents</a> </li>
                            <li class="footer__link"> <a class="a a--shy"
                                    href="/blog/affiliate-marketing-partnership/">Affiliate Program</a> </li>
                            <li class="footer__link"> <a class="a a--shy" href="/plagiarism-checker/">Plagiarism
                                    Checker</a> </li>
                            <li class="footer__link"> <a class="a a--shy" href="/essay-writing-jobs/">Become an
                                    Expert</a> </li>
                        </ul>
                    </div>
                    <div class="footer__links-wrapper"> <span role="heading" aria-level="3"
                            class="footer__links-title h3">Legal & Policies</span>
                        <ul class="footer__links-list">
                            <li class="footer__link"> <a class="a a--shy" href="/info/privacy/">Privacy Policy</a>
                            </li>
                            <li class="footer__link"> <a class="a a--shy" href="/info/license/">User Agreement</a>
                            </li>
                            <li class="footer__link"> <a class="a a--shy" href="/info/cookiepolicy/">Cookie
                                    Policy</a> </li>
                            <li class="footer__link"> <a class="a a--shy" href="/info/datasecurity/">Data
                                    Security</a> </li>
                            <li class="footer__link"> <a class="a a--shy" href="/info/honorcode/">Honor Code</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__links-wrapper"> <span role="heading" aria-level="3"
                            class="footer__links-title h3">Customer Services</span>
                        <ul class="footer__links-list">
                            <li class="footer__link"> <a class="a a--shy" href="/info/faq/">FAQ</a> </li>
                            <li class="footer__link"> <a class="a a--shy" href="/reviews/">Reviews</a> </li>
                            <li class="footer__link"> <a class="a a--shy" href="/authors/">Expert Ratings</a>
                            </li>
                            <li class="footer__link"> <a class="a a--shy" href="/links/">Project Types</a> </li>
                        </ul>
                    </div>
                    <div class="footer__links-wrapper"> <span role="heading" aria-level="3"
                            class="footer__links-title h3">Popular Services</span>
                        <div class="footer__links-inner-wrapper">
                            <ul class="footer__links-list">
                                <li class="footer__link"> <a class="a a--shy" href="/essay-help/">Essay Help</a>
                                </li>
                                <li class="footer__link"> <a class="a a--shy"
                                        href="/website-that-writes-essays-for-you/">Essay for you</a> </li>
                                <li class="footer__link"> <a class="a a--shy" href="/buy-essay/">Essay Paper</a>
                                </li>
                                <li class="footer__link"> <a class="a a--shy" href="/essay-editing/">Edit My
                                        Essay</a> </li>
                                <li class="footer__link"> <a class="a a--shy"
                                        href="/essay-proofreading/">Proofread</a> </li>
                                <li class="footer__link"> <a class="a a--shy"
                                        href="/buy-dissertation-online/">Dissertation</a> </li>
                                <li class="footer__link"> <a class="a a--shy" href="/buy-thesis-paper/">Thesis
                                        Paper</a> </li>
                                <li class="footer__link"> <a class="a a--shy"
                                        href="/buy-courseworks/">Courseworks</a> </li>
                                <li class="footer__link"> <a class="a a--shy" href="/coursework-help/">Coursework
                                        Help</a> </li>
                                <li class="footer__link"> <a class="a a--shy"
                                        href="/buy-research-papers/">Research Papers</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accent-color-background">
            <div class="container">
                <div class="footer__additional-info">
                    <div class="footer__info-item"> <span>© 2011–<span id="current-year">2022</span> Studybay All
                            Rights Reserved</span> </div>
                    <div class="footer__info-item"> <span class="wrapbox"> <span class="wrapbox__item">Follow
                                us:</span> <span class="wrapbox wrapbox--inner"> <a
                                    href="https://www.linkedin.com/company/studybayco/" target="_blank"
                                    class="footer__info-link footer__info-link--rounded wrapbox__item"> <img
                                        src="/linkedin.423cb424.svg" width="24" height="24"
                                        loading="lazy" alt="LinkedIn"> </a> <a
                                    href="https://twitter.com/studybaycom/" target="_blank"
                                    class="footer__info-link footer__info-link--rounded wrapbox__item"> <img
                                        src="/twitter.c6cee3c5.svg" width="24" height="24" loading="lazy"
                                        alt="twitter"> </a> <a href="https://www.facebook.com/studybaycom/"
                                    target="_blank"
                                    class="footer__info-link footer__info-link--rounded wrapbox__item"> <img
                                        src="/facebook.4aa9dcf9.svg" width="24" height="24"
                                        loading="lazy" alt="facebook"> </a> <a
                                    href="https://instagram.com/studybaycom/" target="_blank"
                                    class="footer__info-link footer__info-link--rounded wrapbox__item"> <img
                                        src="/instagram.1913531e.svg" width="24" height="24"
                                        loading="lazy" alt="instagram"> </a> <a
                                    href="https://www.youtube.com/c/Studybaycom" target="_blank"
                                    class="footer__info-link footer__info-link--rounded wrapbox__item"> <img
                                        src="/youtube.f2da95f0.svg" width="24" height="24" loading="lazy"
                                        alt="youtube"> </a> <a href="https://www.pinterest.com/studybaycom/"
                                    target="_blank"
                                    class="footer__info-link footer__info-link--rounded wrapbox__item"> <img
                                        src="/pinterest.05f167ec.svg" width="24" height="24"
                                        loading="lazy" alt="pinterest"> </a> </span> </span> </div>
                    <div class="footer__info-item"> <span class="wrapbox"> <span class="wrapbox__item">We
                                accept:</span> <span class="wrapbox wrapbox--inner"> <img
                                    src="/apple-pay.93b00a67.svg" width="41" height="17"
                                    class="footer__payment-img wrapbox__item" loading="lazy" alt="apple pay"> <img
                                    src="/google-pay.5f3039a1.svg" width="41" height="17"
                                    class="footer__payment-img wrapbox__item" loading="lazy" alt="google pay">
                                <img src="/visa.4b065a71.svg" width="43" height="15"
                                    class="footer__payment-img wrapbox__item" loading="lazy" alt="visa"> <img
                                    src="/mastercard.ddb22e91.svg" width="33" height="20"
                                    class="footer__payment-img wrapbox__item" loading="lazy" alt="mastercard">
                                <img src="/paypal.2730846b.svg" width="50" height="15"
                                    class="footer__payment-img wrapbox__item" loading="lazy" alt="paypal"> <img
                                    src="/discover_card_logo.bdbbc0b9.svg" width="55" height="50"
                                    class="footer__payment-img wrapbox__item" loading="lazy" alt="discover card">
                            </span> </span> </div>
                    <div class="footer__info-item"> <span>Main office:<br></span> <span>Panimpex Ltd, 25 Martiou, 27,
                            D. Michael Tower, office 105A, ‘Egkomi, 2408, Nicosia, Cyprus</span> </div>
                    <div class="footer__info-item"> <span class="wrapbox wrapbox--inner"> <img
                                src="/mastercard-secure.2f991c16.svg" width="38" height="53"
                                class="footer__payment-img wrapbox__item" loading="lazy"
                                alt="Mastercard 3D secure"> <img src="/visa-secure.957141ba.svg" width="40"
                                height="40" class="footer__payment-img wrapbox__item" loading="lazy"
                                alt="Visa secure"> <a
                                href="https://www.dmca.com/Protection/Status.aspx?ID=900d6aa0-995e-4fce-85d4-f8a0909429fe&amp;refurl=https://studybay.com/"
                                title="DMCA.com Protection Status" rel="nofollow"
                                class="dmca-badge footer__info-link wrapbox__item"
                                aria-label="DMCA.com Protection Status"> <img src="/dmca.f0be2958.svg"
                                    width="140" height="24" loading="lazy"
                                    alt="DMCA.com Protection Status"> </a> </span> </div>
                </div>
            </div>
        </div>
    </footer>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/myjs.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
