<!DOCTYPE html>
<html lang="da-DK" class="no-js" transformed="self;v=1" i-amphtml-layout="" i-amphtml-no-boilerplate="">

<head>
    <script type="text/javascript">
        var gform;
        gform || (document.addEventListener("gform_main_scripts_loaded", function() {
            gform.scriptsLoaded = !0
        }), window.addEventListener("DOMContentLoaded", function() {
            gform.domLoaded = !0
        }), gform = {
            domLoaded: !1,
            scriptsLoaded: !1,
            initializeOnLoaded: function(o) {
                gform.domLoaded && gform.scriptsLoaded ? o() : !gform.domLoaded && gform.scriptsLoaded ? window.addEventListener("DOMContentLoaded", o) : document.addEventListener("gform_main_scripts_loaded", o)
            },
            hooks: {
                action: {},
                filter: {}
            },
            addAction: function(o, r, n, t) {
                gform.addHook("action", o, r, n, t)
            },
            addFilter: function(o, r, n, t) {
                gform.addHook("filter", o, r, n, t)
            },
            doAction: function(o) {
                gform.doHook("action", o, arguments)
            },
            applyFilters: function(o) {
                return gform.doHook("filter", o, arguments)
            },
            removeAction: function(o, r) {
                gform.removeHook("action", o, r)
            },
            removeFilter: function(o, r, n) {
                gform.removeHook("filter", o, r, n)
            },
            addHook: function(o, r, n, t, i) {
                null == gform.hooks[o][r] && (gform.hooks[o][r] = []);
                var e = gform.hooks[o][r];
                null == i && (i = r + "_" + e.length), gform.hooks[o][r].push({
                    tag: i,
                    callable: n,
                    priority: t = null == t ? 10 : t
                })
            },
            doHook: function(o, r, n) {
                if (n = Array.prototype.slice.call(n, 1), null != gform.hooks[o][r]) {
                    var t, i = gform.hooks[o][r];
                    i.sort(function(o, r) {
                        return o.priority - r.priority
                    });
                    for (var e = 0; e < i.length; e++) "function" != typeof(t = i[e].callable) && (t = window[t]), "action" == o ? t.apply(null, n) : n[0] = t.apply(null, n)
                }
                if ("filter" == o) return n[0]
            },
            removeHook: function(o, r, n, t) {
                if (null != gform.hooks[o][r])
                    for (var i = gform.hooks[o][r], e = i.length - 1; 0 <= e; e--) null != t && t != i[e].tag || null != n && n != i[e].priority || i.splice(e, 1)
            }
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://cdn.ampproject.org">
    <style amp-runtime="" i-amphtml-version="012111152338002">
        html {
            overflow-x: hidden !important
        }

        html.i-amphtml-fie {
            height: 100% !important;
            width: 100% !important
        }

        html:not([amp4ads]),
        html:not([amp4ads]) body {
            height: auto !important
        }

        html:not([amp4ads]) body {
            margin: 0 !important
        }

        body {
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%
        }

        html.i-amphtml-singledoc.i-amphtml-embedded {
            -ms-touch-action: pan-y pinch-zoom;
            touch-action: pan-y pinch-zoom
        }

        html.i-amphtml-fie>body,
        html.i-amphtml-singledoc>body {
            overflow: visible !important
        }

        html.i-amphtml-fie:not(.i-amphtml-inabox)>body,
        html.i-amphtml-singledoc:not(.i-amphtml-inabox)>body {
            position: relative !important
        }

        html.i-amphtml-ios-embed-legacy>body {
            overflow-x: hidden !important;
            overflow-y: auto !important;
            position: absolute !important
        }

        html.i-amphtml-ios-embed {
            overflow-y: auto !important;
            position: static
        }

        #i-amphtml-wrapper {
            overflow-x: hidden !important;
            overflow-y: auto !important;
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            margin: 0 !important;
            display: block !important
        }

        html.i-amphtml-ios-embed.i-amphtml-ios-overscroll,
        html.i-amphtml-ios-embed.i-amphtml-ios-overscroll>#i-amphtml-wrapper {
            -webkit-overflow-scrolling: touch !important
        }

        #i-amphtml-wrapper>body {
            position: relative !important;
            border-top: 1px solid transparent !important
        }

        #i-amphtml-wrapper+body {
            visibility: visible
        }

        #i-amphtml-wrapper+body .i-amphtml-lightbox-element,
        #i-amphtml-wrapper+body[i-amphtml-lightbox] {
            visibility: hidden
        }

        #i-amphtml-wrapper+body[i-amphtml-lightbox] .i-amphtml-lightbox-element {
            visibility: visible
        }

        #i-amphtml-wrapper.i-amphtml-scroll-disabled,
        .i-amphtml-scroll-disabled {
            overflow-x: hidden !important;
            overflow-y: hidden !important
        }

        amp-instagram {
            padding: 54px 0px 0px !important;
            background-color: #fff
        }

        amp-iframe iframe {
            box-sizing: border-box !important
        }

        [amp-access][amp-access-hide] {
            display: none
        }

        [subscriptions-dialog],
        body:not(.i-amphtml-subs-ready) [subscriptions-action],
        body:not(.i-amphtml-subs-ready) [subscriptions-section] {
            display: none !important
        }

        amp-experiment,
        amp-live-list>[update] {
            display: none
        }

        amp-list[resizable-children]>.i-amphtml-loading-container.amp-hidden {
            display: none !important
        }

        amp-list [fetch-error],
        amp-list[load-more] [load-more-button],
        amp-list[load-more] [load-more-end],
        amp-list[load-more] [load-more-failed],
        amp-list[load-more] [load-more-loading] {
            display: none
        }

        amp-list[diffable] div[role=list] {
            display: block
        }

        amp-story-page,
        amp-story[standalone] {
            min-height: 1px !important;
            display: block !important;
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            overflow: hidden !important;
            width: 100% !important
        }

        amp-story[standalone] {
            background-color: #000 !important;
            position: relative !important
        }

        amp-story-page {
            background-color: #757575
        }

        amp-story .amp-active>div,
        amp-story .i-amphtml-loader-background {
            display: none !important
        }

        amp-story-page:not(:first-of-type):not([distance]):not([active]) {
            transform: translateY(1000vh) !important
        }

        amp-autocomplete {
            position: relative !important;
            display: inline-block !important
        }

        amp-autocomplete>input,
        amp-autocomplete>textarea {
            padding: 0.5rem;
            border: 1px solid rgba(0, 0, 0, 0.33)
        }

        .i-amphtml-autocomplete-results,
        amp-autocomplete>input,
        amp-autocomplete>textarea {
            font-size: 1rem;
            line-height: 1.5rem
        }

        [amp-fx^=fly-in] {
            visibility: hidden
        }

        amp-script[nodom],
        amp-script[sandboxed] {
            position: fixed !important;
            top: 0 !important;
            width: 1px !important;
            height: 1px !important;
            overflow: hidden !important;
            visibility: hidden
        }

        /*# sourceURL=/css/ampdoc.css*/
        [hidden] {
            display: none !important
        }

        .i-amphtml-element {
            display: inline-block
        }

        .i-amphtml-blurry-placeholder {
            transition: opacity 0.3s cubic-bezier(0.0, 0.0, 0.2, 1) !important;
            pointer-events: none
        }

        [layout=nodisplay]:not(.i-amphtml-element) {
            display: none !important
        }

        .i-amphtml-layout-fixed,
        [layout=fixed][width][height]:not(.i-amphtml-layout-fixed) {
            display: inline-block;
            position: relative
        }

        .i-amphtml-layout-responsive,
        [layout=responsive][width][height]:not(.i-amphtml-layout-responsive),
        [width][height][heights]:not([layout]):not(.i-amphtml-layout-responsive),
        [width][height][sizes]:not(img):not([layout]):not(.i-amphtml-layout-responsive) {
            display: block;
            position: relative
        }

        .i-amphtml-layout-intrinsic,
        [layout=intrinsic][width][height]:not(.i-amphtml-layout-intrinsic) {
            display: inline-block;
            position: relative;
            max-width: 100%
        }

        .i-amphtml-layout-intrinsic .i-amphtml-sizer {
            max-width: 100%
        }

        .i-amphtml-intrinsic-sizer {
            max-width: 100%;
            display: block !important
        }

        .i-amphtml-layout-container,
        .i-amphtml-layout-fixed-height,
        [layout=container],
        [layout=fixed-height][height]:not(.i-amphtml-layout-fixed-height) {
            display: block;
            position: relative
        }

        .i-amphtml-layout-fill,
        .i-amphtml-layout-fill.i-amphtml-notbuilt,
        [layout=fill]:not(.i-amphtml-layout-fill),
        body noscript>* {
            display: block;
            overflow: hidden !important;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        body noscript>* {
            position: absolute !important;
            width: 100%;
            height: 100%;
            z-index: 2
        }

        body noscript {
            display: inline !important
        }

        .i-amphtml-layout-flex-item,
        [layout=flex-item]:not(.i-amphtml-layout-flex-item) {
            display: block;
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        .i-amphtml-layout-fluid {
            position: relative
        }

        .i-amphtml-layout-size-defined {
            overflow: hidden !important
        }

        .i-amphtml-layout-awaiting-size {
            position: absolute !important;
            top: auto !important;
            bottom: auto !important
        }

        i-amphtml-sizer {
            display: block !important
        }

        @supports (aspect-ratio:1/1) {
            i-amphtml-sizer.i-amphtml-disable-ar {
                display: none !important
            }
        }

        .i-amphtml-blurry-placeholder,
        .i-amphtml-fill-content {
            display: block;
            height: 0;
            max-height: 100%;
            max-width: 100%;
            min-height: 100%;
            min-width: 100%;
            width: 0;
            margin: auto
        }

        .i-amphtml-layout-size-defined .i-amphtml-fill-content {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        .i-amphtml-replaced-content,
        .i-amphtml-screen-reader {
            padding: 0 !important;
            border: none !important
        }

        .i-amphtml-screen-reader {
            position: fixed !important;
            top: 0px !important;
            left: 0px !important;
            width: 4px !important;
            height: 4px !important;
            opacity: 0 !important;
            overflow: hidden !important;
            margin: 0 !important;
            display: block !important;
            visibility: visible !important
        }

        .i-amphtml-screen-reader~.i-amphtml-screen-reader {
            left: 8px !important
        }

        .i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader {
            left: 12px !important
        }

        .i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader~.i-amphtml-screen-reader {
            left: 16px !important
        }

        .i-amphtml-unresolved {
            position: relative;
            overflow: hidden !important
        }

        .i-amphtml-select-disabled {
            -webkit-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important
        }

        .i-amphtml-notbuilt,
        [layout]:not(.i-amphtml-element),
        [width][height][heights]:not([layout]):not(.i-amphtml-element),
        [width][height][sizes]:not(img):not([layout]):not(.i-amphtml-element) {
            position: relative;
            overflow: hidden !important;
            color: transparent !important
        }

        .i-amphtml-notbuilt:not(.i-amphtml-layout-container)>*,
        [layout]:not([layout=container]):not(.i-amphtml-element)>*,
        [width][height][heights]:not([layout]):not(.i-amphtml-element)>*,
        [width][height][sizes]:not([layout]):not(.i-amphtml-element)>* {
            display: none
        }

        amp-img:not(.i-amphtml-element)[i-amphtml-ssr]>img.i-amphtml-fill-content {
            display: block
        }

        .i-amphtml-notbuilt:not(.i-amphtml-layout-container),
        [layout]:not([layout=container]):not(.i-amphtml-element),
        [width][height][heights]:not([layout]):not(.i-amphtml-element),
        [width][height][sizes]:not(img):not([layout]):not(.i-amphtml-element) {
            color: transparent !important;
            line-height: 0 !important
        }

        .i-amphtml-ghost {
            visibility: hidden !important
        }

        .i-amphtml-element>[placeholder],
        [layout]:not(.i-amphtml-element)>[placeholder],
        [width][height][heights]:not([layout]):not(.i-amphtml-element)>[placeholder],
        [width][height][sizes]:not([layout]):not(.i-amphtml-element)>[placeholder] {
            display: block;
            line-height: normal
        }

        .i-amphtml-element>[placeholder].amp-hidden,
        .i-amphtml-element>[placeholder].hidden {
            visibility: hidden
        }

        .i-amphtml-element:not(.amp-notsupported)>[fallback],
        .i-amphtml-layout-container>[placeholder].amp-hidden,
        .i-amphtml-layout-container>[placeholder].hidden {
            display: none
        }

        .i-amphtml-layout-size-defined>[fallback],
        .i-amphtml-layout-size-defined>[placeholder] {
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            z-index: 1
        }

        amp-img[i-amphtml-ssr]:not(.i-amphtml-element)>[placeholder] {
            z-index: auto
        }

        .i-amphtml-notbuilt>[placeholder] {
            display: block !important
        }

        .i-amphtml-hidden-by-media-query {
            display: none !important
        }

        .i-amphtml-element-error {
            background: red !important;
            color: #fff !important;
            position: relative !important
        }

        .i-amphtml-element-error:before {
            content: attr(error-message)
        }

        i-amp-scroll-container,
        i-amphtml-scroll-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: block
        }

        i-amp-scroll-container.amp-active,
        i-amphtml-scroll-container.amp-active {
            overflow: auto;
            -webkit-overflow-scrolling: touch
        }

        .i-amphtml-loading-container {
            display: block !important;
            pointer-events: none;
            z-index: 1
        }

        .i-amphtml-notbuilt>.i-amphtml-loading-container {
            display: block !important
        }

        .i-amphtml-loading-container.amp-hidden {
            visibility: hidden
        }

        .i-amphtml-element>[overflow] {
            cursor: pointer;
            position: relative;
            z-index: 2;
            visibility: hidden;
            display: initial;
            line-height: normal
        }

        .i-amphtml-layout-size-defined>[overflow] {
            position: absolute
        }

        .i-amphtml-element>[overflow].amp-visible {
            visibility: visible
        }

        template {
            display: none !important
        }

        .amp-border-box,
        .amp-border-box *,
        .amp-border-box :after,
        .amp-border-box :before {
            box-sizing: border-box
        }

        amp-pixel {
            display: none !important
        }

        amp-analytics,
        amp-auto-ads,
        amp-story-auto-ads {
            position: fixed !important;
            top: 0 !important;
            width: 1px !important;
            height: 1px !important;
            overflow: hidden !important;
            visibility: hidden
        }

        html.i-amphtml-fie>amp-analytics {
            position: initial !important
        }

        [visible-when-invalid]:not(.visible),
        form [submit-error],
        form [submit-success],
        form [submitting] {
            display: none
        }

        amp-accordion {
            display: block !important
        }

        @media (min-width:1px) {
            :where(amp-accordion>section)>:first-child {
                margin: 0;
                background-color: #efefef;
                padding-right: 20px;
                border: 1px solid #dfdfdf
            }

            :where(amp-accordion>section)>:last-child {
                margin: 0
            }
        }

        amp-accordion>section {
            float: none !important
        }

        amp-accordion>section>* {
            float: none !important;
            display: block !important;
            overflow: hidden !important;
            position: relative !important
        }

        amp-accordion,
        amp-accordion>section {
            margin: 0
        }

        amp-accordion:not(.i-amphtml-built)>section>:last-child {
            display: none !important
        }

        amp-accordion:not(.i-amphtml-built)>section[expanded]>:last-child {
            display: block !important
        }

        /*# sourceURL=/css/ampshared.css*/
    </style>
    <meta name="amp-script-src" content=" sha384-N9Zh9utxuGZf-TELvAvJUCjaVfS15HPWZp1-gyA-AN1nr1WyB5cNXuXtvn8I4niu">
    <meta property="og:image" content="https://farstrup.dk/wp-content/uploads/logo-2.png">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="100">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="Plus 5011 er en sofastol, der passer til Plus-seriens lænestole og sofaer. Det tidsløse og elegante design gør Plus 5011 let at placere i de fleste indretninger og kan nemt matches sammen med andre møbler. Plus 5011 har en klassisk stil, men er absolut ikke kedelig med sin elegance og hyggelige stemning. Plus 5011 har […]">
    <meta property="og:locale" content="da_DK">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Plus 5011 | Farstrup Furniture">
    <meta property="og:description" content="Plus 5011 er en sofastol, der passer til Plus-seriens lænestole og sofaer. Det tidsløse og elegante design gør Plus 5011 let at placere i de fleste indretninger og kan nemt matches sammen med andre møbler. Plus 5011 har en klassisk stil, men er absolut ikke kedelig med sin elegance og hyggelige stemning. Plus 5011 har […]">
    <meta property="og:url" content="https://farstrup.dk/produkter/plus-5011/">
    <meta property="og:site_name" content="Farstrup Furniture">
    <meta property="article:modified_time" content="2021-11-18T11:20:51+00:00">
    <meta property="og:image" content="https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1.png">
    <meta property="og:image:width" content="450">
    <meta property="og:image:height" content="550">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:label1" content="Estimeret læsetid">
    <meta name="twitter:data1" content="2 minutter">
    <meta name="generator" content="WordPress 5.8.2">
    <meta name="generator" content="WooCommerce 5.8.0">
    <meta name="generator" content="WPML ver:4.4.12 stt:12,37,1,3;">
    <meta name="generator" content="Site Kit by Google 1.44.0">
    <meta name="generator" content="AMP Plugin v2.1.4; mode=standard">
    <meta name="msapplication-TileImage" content="https://farstrup.dk/wp-content/uploads/cropped-farstrupfavicon-270x270.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <script async="" src="https://cdn.ampproject.org/v0.mjs" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ampproject.org/v0/amp-analytics-0.1.mjs" async="" custom-element="amp-analytics" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js" crossorigin="anonymous" custom-element="amp-analytics"></script>
    <script src="https://cdn.ampproject.org/v0/amp-animation-0.1.mjs" async="" custom-element="amp-animation" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-animation-0.1.js" crossorigin="anonymous" custom-element="amp-animation"></script>
    <script src="https://cdn.ampproject.org/v0/amp-consent-0.1.mjs" async="" custom-element="amp-consent" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-consent-0.1.js" crossorigin="anonymous" custom-element="amp-consent"></script>
    <script src="https://cdn.ampproject.org/v0/amp-form-0.1.mjs" async="" custom-element="amp-form" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-form-0.1.js" crossorigin="anonymous" custom-element="amp-form"></script>
    <script src="https://cdn.ampproject.org/v0/amp-mustache-0.2.mjs" async="" custom-template="amp-mustache" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js" crossorigin="anonymous" custom-template="amp-mustache"></script>
    <script src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.mjs" async="" custom-element="amp-position-observer" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.js" crossorigin="anonymous" custom-element="amp-position-observer"></script>
    <script src="https://cdn.ampproject.org/v0/amp-script-0.1.mjs" async="" custom-element="amp-script" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-script-0.1.js" crossorigin="anonymous" custom-element="amp-script"></script>
    <script src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.mjs" async="" custom-element="amp-sidebar" type="module" crossorigin="anonymous"></script>
    <script async nomodule src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" crossorigin="anonymous" custom-element="amp-sidebar"></script>
    <link rel="icon" href="https://farstrup.dk/wp-content/uploads/cropped-farstrupfavicon-32x32.png" sizes="32x32">
    <link rel="icon" href="https://farstrup.dk/wp-content/uploads/cropped-farstrupfavicon-192x192.png" sizes="192x192">
    <link crossorigin="anonymous" rel="stylesheet" id="gfonts-css" href="https://fonts.googleapis.com/css2?family=PT+Sans%3Aital%400%3B1&amp;display=swap&amp;ver=5.8.2" type="text/css" media="all">
    <style amp-custom="">
        .amp-wp-enforced-sizes {
            -o-object-fit: contain;
            object-fit: contain
        }

        amp-img img,
        amp-img noscript {
            image-rendering: inherit;
            -o-object-fit: inherit;
            object-fit: inherit;
            -o-object-position: inherit;
            object-position: inherit
        }

        .wp-block-button__link {
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 1.125em;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            text-align: center;
            text-decoration: none;
            word-break: break-word
        }

        .wp-block-button__link:active,
        .wp-block-button__link:focus,
        .wp-block-button__link:hover,
        .wp-block-button__link:visited {
            color: #fff
        }

        .wp-block-buttons {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: var(--wp--style--block-gap, .5em)
        }

        .wp-block-buttons>.wp-block-button {
            display: inline-block;
            margin: 0
        }

        h1,
        h2,
        h3 {
            overflow-wrap: break-word
        }

        ul {
            overflow-wrap: break-word
        }

        p {
            overflow-wrap: break-word
        }

        :where(p.has-text-color:not(.has-link-color)) a {
            color: inherit
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            border: 0;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .screen-reader-text {
            word-wrap: normal
        }

        .screen-reader-text:focus {
            background-color: #ddd;
            -webkit-clip-path: none;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .screen-reader-text:focus {
            clip: auto
        }

        @-webkit-keyframes components-spinner__animation {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @keyframes components-spinner__animation {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            width: 1px
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .screen-reader-text {
            overflow-wrap: normal;
            word-wrap: normal;
            position: absolute
        }

        .screen-reader-text:focus {
            background-color: #fff;
            border-radius: 3px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, .6);
            -webkit-clip-path: none;
            clip-path: none;
            color: #2b2d2f;
            display: block;
            font-size: .875rem;
            font-weight: 700;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .screen-reader-text:focus {
            clip: auto
        }

        @-webkit-keyframes fadein {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadein {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @-webkit-keyframes slidein {
            0% {
                transform: translateX(0)
            }

            to {
                transform: translateX(-480px)
            }
        }

        @keyframes slidein {
            0% {
                transform: translateX(0)
            }

            to {
                transform: translateX(-480px)
            }
        }

        @media only screen and (max-width:480px) {
            @-webkit-keyframes slidein {
                0% {
                    transform: translateX(0)
                }

                to {
                    transform: translateX(-100vw)
                }
            }

            @keyframes slidein {
                0% {
                    transform: translateX(0)
                }

                to {
                    transform: translateX(-100vw)
                }
            }
        }

        @-webkit-keyframes spin {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @-webkit-keyframes wc-block-components-spinner__animation {
            0% {
                -webkit-animation-timing-function: cubic-bezier(.5856, .0703, .4143, .9297);
                animation-timing-function: cubic-bezier(.5856, .0703, .4143, .9297);
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @keyframes wc-block-components-spinner__animation {
            0% {
                -webkit-animation-timing-function: cubic-bezier(.5856, .0703, .4143, .9297);
                animation-timing-function: cubic-bezier(.5856, .0703, .4143, .9297);
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @-webkit-keyframes loading-fade {
            0% {
                opacity: .7
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .7
            }
        }

        @keyframes loading-fade {
            0% {
                opacity: .7
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .7
            }
        }

        body {
            --wp--preset--color--black: #000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #fff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, #9b51e0 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, #7adcb4 0%, #00d082 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, #cf2e2e 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, #eee 0%, #a9b8c3 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, #4aeadc 0%, #9778d1 20%, #cf2aba 40%, #ee2c82 60%, #fb6962 80%, #fef84c 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, #ffceec 0%, #9896f0 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, #fecda5 0%, #fe2d2d 50%, #6b003e 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, #ffcb70 0%, #c751c0 50%, #4158d0 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, #fff5cb 0%, #b6e3d4 50%, #33a7b5 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, #caf880 0%, #71ce7e 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, #020381 0%, #2874fc 100%);
            --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
            --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
            --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
            --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
            --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
            --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
            --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
            --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--huge: 42px
        }

        .wpml-ls-menu-item .wpml-ls-flag {
            display: inline;
            vertical-align: baseline
        }

        .wpml-ls-menu-item .wpml-ls-flag+span {
            margin-left: .3em
        }

        .row {
            display: flex;
            flex-direction: column
        }

        [class*="span"] {
            position: relative;
            width: 100%
        }

        @media screen and (min-width: 768px) {
            [class*="span"] {
                padding-right: 15px;
                padding-left: 15px
            }

            [class*="span"]:first-child {
                padding-left: 0
            }

            [class*="span"]:last-child {
                padding-right: 0
            }

            .row {
                flex-direction: row
            }
        }

        @keyframes fade {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-moz-keyframes fade {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fade {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-o-keyframes fade {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        html {
            position: relative;
            scroll-behavior: smooth
        }

        body {
            padding: 0;
            margin: 0;
            font-family: "Segoe UI", "PT Sans", sans-serif;
            color: #373635;
            font-size: 20px;
            overflow-x: hidden
        }

        @media screen and (max-width: 768px) {
            body {
                font-size: 16px
            }
        }

        body .main-container {
            opacity: .0001;
            transition: opacity 1000ms ease-in-out
        }

        body[class*="amp-mode-"] .main-container {
            opacity: 1
        }

        h1,
        h2,
        h3 {
            font-family: "Segoe UI", "PT Sans", sans-serif;
            font-weight: lighter;
            line-height: 1.1em
        }

        button,
        input[type="submit"],
        input[type="button"] {
            font-family: "Poppins", sans-serif
        }

        * {
            margin: 0;
            padding: 0;
            outline: none
        }

        h1,
        h2,
        h3,
        p {
            margin-bottom: 20px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        h1:last-child,
        h2:last-child,
        h3:last-child,
        p:last-child {
            margin-bottom: 0
        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        p {
            line-height: 1.5
        }

        a {
            color: #373635;
            text-decoration: none
        }

        a:hover {
            color: #5e5c5b
        }

        a.product-content:hover {
            color: #000
        }

        ul li a,
        .woocommerce-loop-product__link {
            color: #373635;
            text-decoration: none;
            transition: color .2s ease-in-out
        }

        ul li a:hover,
        .woocommerce-loop-product__link:hover {
            color: #2a2928
        }

        p a {
            font-weight: 500
        }

        .sidebar ul li a:hover {
            text-decoration: underline
        }

        ul {
            list-style-position: inside
        }

        [role=button] {
            cursor: pointer;
            user-select: none
        }

        amp-img.contain img {
            object-fit: contain
        }

        .main-container {
            max-width: 1500px;
            width: 100%;
            margin: 0 auto
        }

        @media screen and (max-width: 1550px) {
            .main-container {
                position: relative
            }
        }

        .header-container {
            position: fixed;
            width: 100%;
            top: 0px;
            z-index: 10
        }

        .header-background {
            width: 100%;
            height: 100%;
            position: absolute;
            background: #e6e6e5
        }

        .main-nav-logo {
            max-width: 210px;
            flex-basis: 25%;
            position: relative
        }

        .stickobserver {
            position: absolute;
            top: 0;
            left: 0
        }

        .stickobserver.stick-observer {
            top: calc(100vh + 20px)
        }

        .main-nav-wrapper {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 20px;
            max-width: 1500px;
            margin: 0 auto;
            position: relative
        }

        .main-nav {
            margin-top: 20px
        }

        .main-nav.top-nav {
            position: absolute;
            top: 0px;
            right: 50px;
            margin-top: 2px
        }

        .main-nav.top-nav ul.menu>li>a {
            font-size: 12px
        }

        .main-nav li {
            list-style: none
        }

        .main-nav ul.menu {
            display: flex;
            flex-direction: row
        }

        .main-nav ul.menu>li .sub-menu li {
            transition: transform 100ms ease-in-out
        }

        .main-nav ul.menu>li .sub-menu li:hover {
            transform: scale(1.1)
        }

        .main-nav ul.menu>li {
            position: relative
        }

        .main-nav ul.menu>li:hover .sub-menu {
            display: block
        }

        .main-nav ul.menu>li>a {
            display: block;
            color: #000;
            text-decoration: none;
            font-size: 20px;
            font-weight: lighter;
            padding: 8px 14px;
            margin-left: 20px;
            transition: color .2s ease-in-out;
            position: relative
        }

        .main-nav ul.menu>li:first-child a {
            margin-left: 0
        }

        .main-nav ul.menu a:hover {
            color: #000
        }

        .main-nav ul.menu>li>a:hover {
            color: #000
        }

        .main-nav ul.menu>li>a:hover:after {
            content: " ";
            position: absolute;
            height: 2px;
            width: 100%;
            background-color: #373635;
            bottom: -2px;
            left: 0px
        }

        .main-nav .menu-item.wpml-ls-menu-item.wpml-ls-current-language {
            display: flex
        }

        .main-nav .menu-item.wpml-ls-menu-item.wpml-ls-current-language>a {
            position: relative;
            bottom: 2px
        }

        .main-nav .menu-item.wpml-ls-menu-item li {
            padding: 0
        }

        .main-nav .menu-item.wpml-ls-menu-item .wpml-ls-flag {
            display: block;
            height: 24px;
            width: 36px
        }

        .main-nav .menu-item.wpml-ls-menu-item a {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .main-nav .menu-item.wpml-ls-menu-item>a {
            width: 68px
        }

        .main-nav .menu-item.wpml-ls-menu-item .sub-menu {
            min-width: 0;
            width: calc(100% - 20px);
            background: none;
            top: 100%
        }

        .main-nav .menu-item.wpml-ls-menu-item .sub-menu a {
            position: relative;
            right: 1px
        }

        .main-nav .menu-item.wpml-ls-menu-item:hover {
            background: none
        }

        .main-nav .menu-item.wpml-ls-menu-item:hover a::after {
            all: unset
        }

        .main-nav .wpml-ls-item .sub-menu {
            display: block;
            opacity: .0001;
            pointer-events: none
        }

        .main-nav .wpml-ls-item:hover .sub-menu {
            opacity: 1;
            pointer-events: initial
        }

        .main-nav .sub-menu {
            display: none;
            background: #dad9d6;
            opacity: .9;
            box-shadow: none;
            position: absolute;
            top: calc(100% + 2px);
            left: 20px;
            min-width: 175px;
            padding-top: 8px;
            padding-bottom: 16px
        }

        .main-nav .sub-menu li a {
            display: block;
            color: #000;
            text-decoration: none;
            font-size: 14px;
            padding: 8px 16px;
            transition: color .2s ease-in-out
        }

        @media screen and (max-width: 768px) {
            .main-nav-wrapper {
                display: none
            }
        }

        .mobil-header-wrapper {
            position: sticky;
            top: 0px;
            display: flex;
            flex-direction: row;
            z-index: 99;
            background-color: #fff;
            align-items: center;
            justify-content: space-between;
            padding: 0 15px 0 25px
        }

        .mobil-header-logo-inner .logo {
            height: 40px
        }

        .mobil-header-logo-inner .logo>* {
            object-fit: contain
        }

        .mobil-header-logo a {
            height: 100%;
            width: 100%
        }

        .mobil-header-logo amp-img img {
            object-fit: contain
        }

        .mobil-header-info {
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap
        }

        .mobil-header-info a {
            display: block;
            width: 100%;
            position: relative
        }

        .mobil-header-btn {
            width: 80px
        }

        .mobil-header-btn button {
            -webkit-appearance: none;
            background: none;
            border: none;
            width: 100%;
            height: 100%;
            padding: 40px 10px
        }

        .mobil-header-btn button .menu {
            font-size: 21.14px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 500;
            display: none
        }

        .mobil-header-btn button span:not(.menu) {
            display: block;
            width: 40px;
            height: 4px;
            background: #000;
            border-radius: 10px;
            margin: 0 auto 4px
        }

        @media screen and (min-width: 931px) {
            .mobil-header-wrapper {
                display: none
            }
        }

        amp-sidebar#mobilmenu {
            background-color: #fff
        }

        amp-sidebar#mobilmenu .menu-item.wpml-ls-item {
            display: flex;
            align-items: center
        }

        amp-sidebar#mobilmenu .menu-item.wpml-ls-item .sub-menu {
            display: flex;
            margin-top: 0
        }

        amp-sidebar#mobilmenu .menu-header-menu-container,
        amp-sidebar#mobilmenu .menu-header-top-menu-container {
            font-size: 30px
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li {
            padding: 6px 0;
            margin: 0 40px;
            position: relative
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li .sub-menu,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li .sub-menu {
            margin-top: 8px
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li .sub-menu li,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li .sub-menu li {
            padding-left: 40px
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li.wpml-ls-item,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li.wpml-ls-item {
            margin-top: 20px;
            padding-left: 35px
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li.wpml-ls-item a,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li.wpml-ls-item a {
            padding: 0;
            margin-right: 10px
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li.wpml-ls-item .sub-menu,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li.wpml-ls-item .sub-menu {
            margin-top: 0
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li.wpml-ls-item .sub-menu li,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li.wpml-ls-item .sub-menu li {
            padding-left: 0
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li.wpml-ls-item.wpml-ls-current-language>a,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li.wpml-ls-item.wpml-ls-current-language>a {
            background: rgba(255, 255, 255, .25);
            border-radius: 50%
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li a,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li a {
            padding: 0
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li:after,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li:after {
            content: ">";
            display: block;
            position: absolute;
            right: 0px;
            top: 8px
        }

        amp-sidebar#mobilmenu ul.menu li.wpml-ls-item:hover>a {
            background: rgba(255, 255, 255, .25);
            border-radius: 50%
        }

        amp-sidebar#mobilmenu .close-sidebar {
            position: absolute;
            right: 20px;
            top: 20px;
            background: transparent
        }

        amp-sidebar#mobilmenu .close-sidebar span {
            width: 40px;
            height: 4px;
            background: #fff
        }

        amp-sidebar#mobilmenu .menu a {
            position: relative;
            text-decoration: none;
            color: #fff;
            display: block;
            border-bottom: none
        }

        amp-sidebar#mobilmenu li {
            list-style: none
        }

        amp-sidebar {
            background-color: #fff;
            width: 90vw;
            max-width: 440px
        }

        amp-sidebar .wpml-ls-menu-item.wpml-ls-item .wpml-ls-flag {
            display: block;
            padding: 20px;
            margin: 5px
        }

        amp-sidebar .menu-header-menu-container {
            font-size: 20px
        }

        amp-sidebar .menu-header-menu-container ul.menu>li {
            padding: 6px 0;
            margin: 0 40px;
            position: relative
        }

        amp-sidebar .menu-header-menu-container ul.menu>li .sub-menu {
            margin-top: 8px
        }

        amp-sidebar .menu-header-menu-container ul.menu>li .sub-menu li {
            padding-left: 40px
        }

        amp-sidebar .menu-header-menu-container ul.menu>li a {
            padding: 0
        }

        amp-sidebar li {
            list-style: none
        }

        amp-sidebar .menu .menu-item-has-children>a {
            display: none
        }

        amp-sidebar .menu .menu-item-has-children .sub-menu {
            padding-left: 0
        }

        amp-sidebar .menu {
            margin: 0;
            padding: 0;
            list-style: none
        }

        amp-sidebar .menu a {
            position: relative;
            text-decoration: none;
            color: inherit;
            display: block;
            padding: 20px;
            border-bottom: 1px solid #ccc
        }

        @media screen and (min-width: 768px) {
            @keyframes indfravenstre {
                0% {
                    transform: translateX(-100%)
                }

                100% {
                    transform: translateX(0)
                }
            }

            @keyframes indfrahojre {
                0% {
                    transform: translateX(100%)
                }

                100% {
                    transform: translateX(0)
                }
            }
        }

        amp-img[layout="fill"]>* {
            object-fit: cover
        }

        .sidebar-element {
            position: relative;
            overflow: hidden
        }

        .sidebar-element:not(.overlay-cell):not(.video-cell) {
            padding: 50px
        }

        .sidebar-element:not(:last-child) {
            background: linear-gradient(#fff, #fff), linear-gradient(to right, #848484, rgba(0, 0, 0, 0));
            border: 2px solid transparent;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            background-repeat: no-repeat;
            background-origin: padding-box, border-box
        }

        .sidebar-element:not(.overlay-cell):not(.video-cell) {
            padding: 20px
        }

        @media screen and (min-width: 768px) {
            .sidebar-element:not(.overlay-cell):not(.video-cell) {
                padding-left: 0
            }
        }

        .content-container.single .content ul {
            list-style-position: inside
        }

        .content-container.single .content ul li {
            margin-bottom: 5px
        }

        .content-container.single .content ul li:last-child {
            margin-bottom: 0
        }

        body:not(.home) .content-container {
            margin-top: 100px
        }

        @media screen and (max-width: 930px) {
            body:not(.home) .content-container {
                margin-top: 0
            }
        }

        .content ul {
            list-style-position: outside
        }

        .cards-container {
            display: flex;
            flex-direction: column
        }

        .cards-container .card {
            color: #000;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-basis: 10%;
            flex-shrink: 0;
            flex-grow: 1
        }

        .cards-container .card a {
            color: #000
        }

        .cards-container .card .card-info {
            position: relative;
            padding: 20px;
            width: 100%;
            z-index: 2
        }

        .cards-container .card .card-info .card-overskrift {
            font-size: 24px;
            margin-bottom: 10px;
            display: block;
            text-decoration: none
        }

        @media screen and (max-width: 768px) {
            .content .cards-container .card {
                margin-bottom: 30px
            }
        }

        @media screen and (min-width: 768px) {
            .cards-container {
                flex-direction: row
            }

            .card:not(:last-child) {
                border-right: solid 1px #fff
            }
        }

        @media screen and (max-width: 768px) {
            .cards-container {
                padding: 0;
                margin-top: 0
            }

            .cards-container .card {
                padding-bottom: 0
            }

            .cards-container .card .card-info {
                padding: 20px 20px 40px 20px
            }

            .cards-container .card .card-info .card-overskrift {
                margin-bottom: 10px
            }
        }

        .footer-wrapper {
            width: 100%;
            background: #e6e6e5;
            font-size: 20px;
            letter-spacing: .5px;
            padding: 30px 0 100px 0;
            margin-top: 60px;
            position: relative
        }

        .footer-wrapper footer {
            width: 100%;
            max-width: calc(100% - 20px * 2);
            margin: 0 auto
        }

        .footer-wrapper p {
            margin: 0
        }

        .footer-wrapper::after {
            content: "";
            position: absolute;
            right: -30px;
            bottom: -30px;
            height: 250px;
            width: 250px;
            background-image: url("/wp-content/themes/oras-child/images/stempel.png");
            background-position: center center;
            background-size: contain;
            background-repeat: no-repeat
        }

        @media screen and (max-width: 1500px) {
            .footer-wrapper {
                overflow: hidden
            }
        }

        .footer-section {
            padding: 0 40px 0 20px;
            width: 100%
        }

        .footer-section:last-child {
            padding: 0 20px
        }

        .footer-section .footer-title {
            font-size: 25px;
            border-bottom: 1px solid #707070;
            padding: 0 0 20px 20px;
            margin-bottom: 30px;
            position: relative;
            font-weight: lighter
        }

        .footer-section .footer-title::before {
            content: "";
            height: 100%;
            width: 1px;
            background: #707070;
            position: absolute;
            top: -10px;
            left: -20px
        }

        .footer-section .footer-content {
            padding-left: 20px;
            display: flex;
            flex-direction: column;
            font-size: 16px
        }

        .footer-section .footer-description p {
            margin-bottom: 20px
        }

        .footer-section .footer-sub-title {
            margin-bottom: 20px
        }

        .footer-social-medie {
            display: flex;
            align-items: center;
            margin-bottom: 15px
        }

        .footer-social-medie:last-child {
            margin-bottom: 0
        }

        .footer-social-medie amp-img {
            margin-right: 25px
        }

        .footer-info {
            padding: 45px;
            position: relative;
            display: flex;
            width: 100%
        }

        .aabningstid {
            display: flex;
            justify-content: space-between;
            width: 200px
        }

        .aabningstid.idag {
            font-weight: bold
        }

        @media screen and (max-width: 1224px) {
            .footer-info {
                flex-direction: column
            }

            .footer-info .footer-section {
                padding: 0 40px 40px 20px
            }
        }

        @media screen and (max-width: 768px) {
            .footer-info {
                padding: 40px 0
            }
        }

        body.woocommerce .sidebar {
            display: none
        }

        .sidebar-enabled {
            display: flex;
            flex-direction: row
        }

        .sidebar-enabled .content {
            width: calc(100% - 400px)
        }

        .sidebar-enabled .sidebar {
            width: 400px
        }

        .sidebar-enabled {
            flex-direction: column-reverse
        }

        .sidebar-enabled .content {
            width: 100%
        }

        .sidebar-enabled .sidebar {
            padding: 20px;
            display: flex;
            justify-content: center
        }

        .sidebar-element {
            margin-bottom: 0
        }

        @media screen and (max-width: 1224px) {
            .sidebar-element {
                width: 100%
            }

            .sidebar-element:not(.widget_product_categories) {
                max-width: 380px
            }
        }

        body.single .content h1 {
            font-size: 36px
        }

        @media screen and (min-width: 768px) {
            body.single .content h1 {
                font-size: 35px;
                margin-bottom: 20px;
                line-height: normal
            }
        }

        .wp-block-buttons {
            margin-bottom: 25px
        }

        .wp-block-buttons .wp-block-button {
            margin-bottom: 0
        }

        .wp-block-buttons .wp-block-button a {
            white-space: nowrap;
            font-size: 17px;
            text-decoration: underline;
            color: #373635;
            background: none;
            padding: 0
        }

        .wp-block-buttons .wp-block-button:hover a {
            color: #5e5c5b
        }

        #gform_wrapper_1 {
            position: relative;
            height: 340px
        }

        #gform_wrapper_1:before {
            content: "";
            position: absolute;
            border: solid 5px #5e5c5b;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none
        }

        #gform_wrapper_1:after {
            content: "";
            position: absolute;
            background-image: url("/wp-content/themes/oras-child/images/headset.png");
            background-size: contain;
            background-repeat: no-repeat;
            width: 125px;
            height: 125px;
            top: -90px;
            left: 50%;
            transform: translateX(-50%);
            pointer-events: none
        }

        #gform_wrapper_1 form {
            width: 240px;
            margin: 0 auto;
            padding: 30px 20px 20px 20px
        }

        #gform_wrapper_1 .gfield_label {
            display: none
        }

        #gform_wrapper_1 .gfield {
            padding-right: 0
        }

        #gform_wrapper_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]) {
            background-color: #5e5c5b;
            color: #fff;
            text-align: center;
            width: 100%;
            text-transform: uppercase
        }

        #gform_wrapper_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])::placeholder {
            color: #fff
        }

        #gform_wrapper_1 .gform_footer {
            margin: 0;
            padding: 0
        }

        #gform_wrapper_1 .gform_footer::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -41px;
            display: block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 7px 0 7px 14px;
            border-color: transparent transparent transparent #fff;
            transform: translateX(-50%) rotate(360deg);
            pointer-events: none
        }

        #gform_wrapper_1 input {
            border: 0
        }

        #gform_wrapper_1 input[type=submit] {
            position: relative;
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #373635;
            display: block;
            margin: 0 auto;
            font-size: 0px;
            font-size: 17px;
            padding: 0px;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            font-family: "Arial", sans-serif;
            color: #000;
            cursor: pointer;
            -webkit-appearance: none;
            border-radius: 0
        }

        .sidebar {
            flex-direction: column
        }

        .sidebar-element {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 auto
        }

        .sidebar-element:not(.overlay-cell):not(.video-cell):not(.text-align-left) {
            padding: 0 0 20px 0
        }

        .sidebar-element #gform_wrapper_1 {
            height: 300px;
            width: 320px
        }

        @media screen and (max-width: 930px) {
            amp-sidebar#mobilmenu {
                width: 90vw;
                max-width: 440px
            }

            .main-nav-wrapper {
                display: none
            }

            amp-sidebar#mobilmenu {
                background: #373635
            }

            amp-sidebar#mobilmenu .menu-header-menu-container ul.menu li a,
            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu li a {
                padding: 12px 45px;
                line-height: 25px;
                display: block;
                color: #fff;
                font-weight: 500;
                font-size: 30px
            }

            amp-sidebar#mobilmenu .menu-header-menu-container ul.menu li:after,
            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu li:after {
                display: none
            }

            amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li,
            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li {
                margin: 0;
                padding: 0
            }

            amp-sidebar#mobilmenu .menu-header-menu-container ul.menu ul li:not(.wpml-ls-item) a,
            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu ul li:not(.wpml-ls-item) a {
                padding: 0px 45px;
                padding: 8px 45px;
                padding-left: 40px;
                font-weight: normal;
                font-size: 20px;
                line-height: 30px
            }

            amp-sidebar#mobilmenu .menu-header-menu-container ul.menu ul li:not(.wpml-ls-item) a:before,
            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu ul li:not(.wpml-ls-item) a:before {
                content: "";
                position: absolute;
                top: 22px;
                left: 10px;
                width: 20px;
                height: 1px;
                background: #fff
            }

            amp-sidebar#mobilmenu .menu-header-top-menu-container {
                margin: 70px 0 10px;
                position: relative
            }

            amp-sidebar#mobilmenu .menu-header-top-menu-container::before {
                content: "";
                position: absolute;
                top: 0;
                left: 45px;
                height: 100%;
                width: 2px;
                background: #fff
            }

            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu li a {
                font-size: 16px;
                padding: 3px 60px
            }

            .close-sidebar {
                position: relative;
                width: 68px;
                height: 68px;
                float: right;
                -webkit-appearance: none;
                background: none;
                border: none;
                outline: none
            }

            .close-sidebar span {
                display: block;
                height: 3px;
                width: 40px;
                position: absolute;
                background: #fff;
                top: 50%;
                left: 50%;
                border-radius: 2px;
                transform: translate(-50%, -50%) rotate(45deg)
            }

            .close-sidebar span:last-child {
                transform: translate(-50%, -50%) rotate(-45deg)
            }
        }

        @media screen and (max-width: 768px) {
            .content {
                overflow-x: hidden
            }
        }

        .content>.products {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap
        }

        .content>.products .product {
            display: flex;
            flex-direction: column;
            width: calc(100% / 3);
            margin: 0;
            position: relative;
            padding-bottom: 30px
        }

        .content>.products .product-content {
            padding: 20px
        }

        .content>.products .woocommerce-loop-product__link>p:first-child {
            display: block;
            font-size: 24px;
            font-weight: lighter;
            padding-right: 30px
        }

        @media screen and (min-width: 768px) {
            .content>.products .product:nth-child(3n) {
                border-right: none
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1500px) {
            .content>.products .product {
                width: calc(100% / 2)
            }

            .content>.products .product:nth-child(2n) {
                border-right: none
            }
        }

        @media screen and (max-width: 768px) {
            .content>.products {
                flex-direction: column;
                margin: 0
            }

            .content>.products .product {
                width: 85%;
                border-right: none
            }
        }

        .widget_product_categories .current-cat {
            font-weight: 500
        }

        .sidebar-venstre {
            position: relative;
            padding-bottom: 500px
        }

        .sidebar-venstre li {
            list-style: none
        }

        .sidebar-venstre .widget-title {
            display: inline-block;
            border-bottom: solid 1px black
        }

        .woocommerce-Tabs-panel .row:not(:first-child) {
            margin-top: 25px
        }

        body.single-product {
            background: #e6e6e5
        }

        body.single-product .product {
            display: flex;
            flex-direction: row;
            position: relative;
            flex-wrap: wrap
        }

        body.single-product .product-gallery-container {
            width: 40%
        }

        body.single-product .summary {
            width: 60%;
            position: absolute;
            left: 40%;
            top: 0;
            padding: 0 20px
        }

        body.single-product h1.product_title {
            font-size: 28px
        }

        body.single-product .wc-tabs-wrapper {
            margin-top: 50px;
            width: 60%;
            padding: 0 20px;
            font-weight: 300
        }

        body.single-product .wc-tabs-wrapper .wp-block-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px
        }

        body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button {
            flex-basis: 50%;
            flex-shrink: 1;
            margin-right: 0;
            margin-left: 0
        }

        body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button>a {
            width: calc(100% - 20px * 2)
        }

        body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button a {
            padding: 10px 30px;
            text-decoration: none;
            background: #373635;
            color: #fff;
            border-radius: 0;
            text-transform: uppercase
        }

        @media screen and (max-width: 530px) {
            body.single-product .wc-tabs-wrapper .wp-block-buttons {
                flex-direction: column;
                align-items: center;
                justify-content: flex-start
            }

            body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button {
                margin: 0;
                flex-basis: 100%
            }

            body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button:first-child {
                margin-bottom: 10px
            }
        }

        body.single-product .content {
            padding-top: 30px
        }

        @media screen and (max-width: 768px) {
            body.single-product .content {
                padding-top: 0
            }

            body.single-product .product {
                flex-direction: column
            }

            body.single-product .product-gallery-container {
                width: 100%
            }

            body.single-product .summary {
                position: static;
                width: 100%;
                margin-top: 20px
            }

            body.single-product .wc-tabs-wrapper {
                width: 100%;
                margin-top: 0
            }

            body.single-product h1.product_title {
                font-size: 24px
            }
        }

        @media screen and (max-width: 768px) {
            .sidebar-element.widget_product_categories:not(.overlay-cell):not(.video-cell):not(.text-align-left) {
                align-items: flex-start;
                padding: 20px 0 0 0;
                background: none
            }
        }

        .mere-info-wrapper {
            margin: 60px 0;
            padding: 10px 50px 40px;
            background: #fff;
            width: 800px;
            max-width: 100%;
            position: relative
        }

        .mere-info-wrapper .mere-info-link {
            position: absolute;
            top: -120px
        }

        .mere-info-wrapper h2 {
            margin-top: 40px
        }

        @media screen and (max-width: 768px) {
            .mere-info-wrapper {
                padding: 40px 20px
            }
        }

        .product-image-container+.mere-info-wrapper {
            margin: 280px 0
        }

        @media screen and (max-width: 1150px) {
            .product-image-container+.mere-info-wrapper {
                margin: 200px auto 0
            }
        }

        @media screen and (max-width: 700px) {
            .product-image-container+.mere-info-wrapper {
                margin: 60px auto 0
            }
        }

        .tabs.wc-tabs {
            display: none
        }

        .product_meta {
            display: none
        }

        .related.products {
            display: none
        }

        .price {
            display: none
        }

        .content-container .cards-container.infokort-cards-container {
            display: flex;
            flex-wrap: wrap;
            max-width: initial;
            padding: 40px 0;
            margin: 0 auto
        }

        .content-container .cards-container.infokort-cards-container .card {
            width: 100%;
            display: block;
            margin-bottom: 0;
            padding-bottom: 10px
        }

        .content-container .cards-container.infokort-cards-container .card .card-info {
            text-align: center;
            pointer-events: auto;
            position: static
        }

        .content-container .cards-container.infokort-cards-container .card .card-info .card-overskrift {
            font-weight: normal
        }

        .content-container .cards-container.infokort-cards-container::before {
            height: 0;
            width: 0
        }

        @media screen and (max-width: 1224px) {
            .content-container .cards-container.infokort-cards-container .card {
                width: 50%;
                flex-basis: initial;
                flex-shrink: initial;
                flex-grow: initial
            }
        }

        @media screen and (max-width: 768px) {
            .content-container .cards-container.infokort-cards-container .card {
                width: 100%
            }

            .content-container .cards-container.infokort-cards-container .card .card-info {
                padding: 20px 20px 15px
            }

            .content-container .cards-container.infokort-cards-container .card .card-info:first-child {
                padding-top: 0
            }
        }

        .call-form-wrapper {
            pointer-events: none
        }

        .call-form-wrapper * {
            pointer-events: none
        }

        .call-form-wrapper .toggle-button {
            pointer-events: all
        }

        .call-form-wrapper div.close-button {
            pointer-events: all
        }

        .call-form-wrapper input {
            pointer-events: all
        }

        .call-form {
            width: 300px;
            padding: 20px;
            border-radius: 24px;
            background: rgba(55, 54, 53, .75);
            position: fixed;
            right: 20px;
            bottom: 40px;
            z-index: 999;
            transition: transform 250ms ease-in-out;
            transform: translateX(0);
            display: none;
            color: #fff
        }

        .call-form[class*="visible"] {
            display: block
        }

        .call-form .close-button {
            position: absolute;
            top: -15px;
            right: 25px;
            height: 25px;
            width: 25px;
            border-radius: 50%;
            background: #373635;
            text-align: center;
            line-height: 22px;
            color: #fff
        }

        .call-form .title-wrapper {
            display: flex;
            align-items: center
        }

        .call-form .title-wrapper .call-form-icon {
            margin-right: 20px;
            transition: all 250ms ease-in-out
        }

        .call-form .title-wrapper .call-form-title {
            color: #fff
        }

        .call-form #gform_wrapper_1 {
            height: auto
        }

        .call-form #gform_wrapper_1 form {
            padding: 0
        }

        .call-form #gform_wrapper_1 [type="submit"] {
            color: transparent
        }

        .call-form #gform_wrapper_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]) {
            background: #fff;
            color: #373635;
            font-weight: 500
        }

        .call-form #gform_wrapper_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])::placeholder {
            color: #373635
        }

        .call-form #gform_wrapper_1::before {
            height: 0;
            width: 0;
            border: none
        }

        .call-form #gform_wrapper_1::after {
            height: 0;
            width: 0;
            background: none
        }

        .call-form-wrapper {
            bottom: 60px;
            right: 0;
            position: fixed;
            z-index: 1
        }

        .call-form-wrapper .toggle-button {
            position: absolute;
            bottom: 5px;
            right: 5px;
            cursor: pointer;
            border: none;
            background: #373635;
            display: block;
            display: grid;
            padding: 10px;
            place-items: center
        }

        .footer-wrapper footer {
            border-top: 1px solid #707070
        }

        .footer-wrapper>div:last-of-type {
            padding-bottom: 60px
        }

        .footer-wrapper .infokort-cards-container {
            text-align: center;
            padding: 0px 65px
        }

        .footer-wrapper .infokort-cards-container .card:not(:last-child) {
            border-right: none
        }

        .footer-wrapper .infokort-cards-container p:not(.card-overskrift) {
            font-size: 16px
        }

        .product.type-product .product-image-container {
            width: 100%;
            margin-bottom: -200px
        }

        .product.type-product .product-image-container.first-child {
            margin-top: 100px
        }

        .product.type-product .product-image-container:last-of-type {
            margin-bottom: 0
        }

        .product.type-product .product-image-container:nth-of-type(2n-1) {
            padding-left: 55%
        }

        .product.type-product .product-image-container:nth-of-type(2n) {
            padding-right: 55%
        }

        @media screen and (max-width: 1150px) {
            .product.type-product .product-image-container {
                margin-bottom: -100px
            }
        }

        @media screen and (max-width: 700px) {
            .product.type-product .product-image-container {
                margin: 0px;
                width: 100%;
                margin-bottom: 40px
            }

            .product.type-product .product-image-container:nth-of-type(2n-1) {
                padding-left: 0
            }

            .product.type-product .product-image-container:nth-of-type(2n) {
                padding-right: 0
            }
        }

        .main-nav .menu-item.wpml-ls-menu-item.wpml-ls-current-language>a:first-child>amp-img {
            opacity: 0
        }

        .main-nav .menu-item.wpml-ls-menu-item.wpml-ls-current-language>a:first-child {
            background-image: url("/wp-content/themes/oras-child/images/globus.png");
            background-size: 27px 27px;
            background-position: 48% 50%;
            background-repeat: no-repeat;
            top: 3px
        }

        div.main-nav.top-nav {
            position: absolute;
            top: 0px;
            right: 30px;
            margin-top: 2px
        }

        .main-nav>div ul.menu>li.menu-kollektion {
            position: static
        }

        .main-nav-wrapper {
            position: static
        }

        .main-nav>div>ul>li.menu-kollektion:hover>.sub-menu {
            display: flex;
            justify-content: center
        }

        .main-nav>div .menu-kollektion .sub-menu {
            width: 100vw;
            top: 85px;
            left: 0px;
            padding: 0px;
            position: absolute;
            max-width: 1500px;
            opacity: 1;
            background: transparent
        }

        .main-nav>div .menu-kollektion .sub-menu::before {
            content: "";
            width: 100vw;
            height: 100%;
            position: absolute;
            left: calc(((100vw - 1500px) / 2) * -1);
            top: 0px;
            background-color: #e6e6e5;
            border-top: solid 1px #3e3d3c;
            border-bottom: solid 1px #3e3d3c;
            opacity: 1;
            z-index: -1
        }

        @media screen and (max-width: 1500px) {
            .main-nav>div .menu-kollektion .sub-menu::before {
                left: 0px
            }
        }

        .main-nav>div .menu-kollektion .sub-menu li {
            width: 14%;
            list-style: none;
            padding-bottom: 25px;
            float: left
        }

        @media screen and (max-width: 1100px) {
            .main-nav>div .menu-kollektion .sub-menu li {
                width: 25%
            }
        }

        .main-nav>div ul.menu li.menu-kollektion>.sub-menu li:hover {
            transform: none
        }

        .main-nav>div ul.menu li.menu-laenestole a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-laenestole a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-laenestole a::before {
            background: url("/wp-content/themes/oras-child/images/menu_icon_laenestol.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-funktionsstole a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-funktionsstole a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-funktionsstole a::before {
            background: url("/wp-content/themes/oras-child/images/menu_icon_funktion_2.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-sofaer a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-sofaer a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-sofaer a::before {
            background: url("/wp-content/themes/oras-child/images/menu_icon_sofa.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-spisebordsstole a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-spisebordsstole a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-spisebordsstole a::before {
            background: url("/wp-content/themes/oras-child/images/menu_icon_stole_2.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-stabelstole a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-stabelstole a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-stabelstole a::before {
            background: url("/wp-content/themes/oras-child/images/stabelstol_ikon.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-borde a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-borde a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-borde a::before {
            background: url("/wp-content/themes/oras-child/images/menu_icon_bord.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        #mobilmenu .menu-kollektion .sub-menu {
            display: none
        }

        .til-top {
            position: fixed;
            bottom: 10px;
            right: 12px;
            z-index: 1;
            visibility: hidden;
            display: flex;
            align-items: center;
            padding-bottom: 5px
        }

        .til-top amp-img {
            margin-left: 10px
        }

        .til-top span {
            font-size: 16px
        }

        .row {
            display: flex;
            flex-direction: column
        }

        [class*="span"] {
            position: relative;
            width: 100%
        }

        @media screen and (min-width: 768px) {
            [class*="span"] {
                padding-right: 15px;
                padding-left: 15px
            }

            [class*="span"]:first-child {
                padding-left: 0
            }

            [class*="span"]:last-child {
                padding-right: 0
            }

            .row {
                flex-direction: row
            }
        }

        @keyframes fade {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-moz-keyframes fade {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fade {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @-o-keyframes fade {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        html {
            position: relative;
            scroll-behavior: smooth
        }

        body {
            padding: 0;
            margin: 0;
            font-family: "Segoe UI", "PT Sans", sans-serif;
            color: #373635;
            font-size: 20px;
            overflow-x: hidden
        }

        @media screen and (max-width: 768px) {
            body {
                font-size: 16px
            }
        }

        @media screen and (min-width: 768px) {
            .content {
                padding-left: 40px;
                padding-right: 40px
            }
        }

        body .main-container {
            opacity: .0001;
            transition: opacity 1000ms ease-in-out
        }

        body[class*="amp-mode-"] .main-container {
            opacity: 1
        }

        h1,
        h2,
        h3 {
            font-family: "Segoe UI", "PT Sans", sans-serif;
            font-weight: lighter;
            line-height: 1.1em
        }

        button,
        input[type="submit"],
        input[type="button"] {
            font-family: "Poppins", sans-serif
        }

        * {
            margin: 0;
            padding: 0;
            outline: none
        }

        h1,
        h2,
        h3,
        p {
            margin-bottom: 20px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        h1:last-child,
        h2:last-child,
        h3:last-child,
        p:last-child {
            margin-bottom: 0
        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        p {
            line-height: 1.5
        }

        a {
            color: #373635;
            text-decoration: none
        }

        a:hover {
            color: #5e5c5b
        }

        a.product-content:hover {
            color: #000
        }

        ul li a,
        .woocommerce-loop-product__link {
            color: #373635;
            text-decoration: none;
            transition: color .2s ease-in-out
        }

        ul li a:hover,
        .woocommerce-loop-product__link:hover {
            color: #2a2928
        }

        p a {
            font-weight: 500
        }

        .sidebar ul li a:hover {
            text-decoration: underline
        }

        ul {
            list-style-position: inside
        }

        [role=button] {
            cursor: pointer;
            user-select: none
        }

        amp-img.contain img {
            object-fit: contain
        }

        .main-container {
            max-width: 1500px;
            width: 100%;
            margin: 0 auto
        }

        @media screen and (max-width: 1550px) {
            .main-container {
                position: relative
            }
        }

        .header-container {
            position: fixed;
            width: 100%;
            top: 0px;
            z-index: 10;
            pointer-events: none
        }

        .header-background {
            width: 100%;
            height: 100%;
            position: absolute;
            background: #e6e6e5
        }

        .main-nav-logo {
            max-width: 210px;
            flex-basis: 25%;
            position: relative
        }

        .stickobserver {
            position: absolute;
            top: 0;
            left: 0
        }

        .stickobserver.stick-observer {
            top: calc(100vh + 20px)
        }

        .main-nav-wrapper {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 20px;
            max-width: 1500px;
            margin: 0 auto;
            position: relative;
            pointer-events: all
        }

        .main-nav {
            margin-top: 20px
        }

        .main-nav.top-nav {
            position: absolute;
            top: 0px;
            right: 50px;
            margin-top: 2px
        }

        .main-nav.top-nav ul.menu>li>a {
            font-size: 12px
        }

        .main-nav li {
            list-style: none
        }

        .main-nav ul.menu {
            display: flex;
            flex-direction: row
        }

        .main-nav ul.menu>li .sub-menu li {
            transition: transform 100ms ease-in-out
        }

        .main-nav ul.menu>li .sub-menu li:hover {
            transform: scale(1.1)
        }

        .main-nav ul.menu>li {
            position: relative
        }

        .main-nav ul.menu>li:hover .sub-menu {
            display: block
        }

        .main-nav ul.menu>li>a {
            display: block;
            color: #000;
            text-decoration: none;
            font-size: 20px;
            font-weight: lighter;
            padding: 8px 14px;
            margin-left: 20px;
            transition: color .2s ease-in-out;
            position: relative
        }

        .main-nav ul.menu>li:first-child a {
            margin-left: 0
        }

        .main-nav ul.menu a:hover {
            color: #000
        }

        .main-nav ul.menu>li>a:hover {
            color: #000
        }

        .main-nav ul.menu>li>a:hover:after {
            content: " ";
            position: absolute;
            height: 2px;
            width: 100%;
            background-color: #373635;
            bottom: -2px;
            left: 0px
        }

        .main-nav .menu-item.wpml-ls-menu-item.wpml-ls-current-language {
            display: flex
        }

        .main-nav .menu-item.wpml-ls-menu-item.wpml-ls-current-language>a {
            position: relative;
            bottom: 2px
        }

        .main-nav .menu-item.wpml-ls-menu-item li {
            padding: 0
        }

        .main-nav .menu-item.wpml-ls-menu-item .wpml-ls-flag {
            display: block;
            height: 24px;
            width: 36px
        }

        .main-nav .menu-item.wpml-ls-menu-item a {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .main-nav .menu-item.wpml-ls-menu-item>a {
            width: 68px
        }

        .main-nav .menu-item.wpml-ls-menu-item .sub-menu {
            min-width: 0;
            width: calc(100% - 20px);
            background: none;
            top: 100%
        }

        .main-nav .menu-item.wpml-ls-menu-item .sub-menu a {
            position: relative;
            right: 1px
        }

        .main-nav .menu-item.wpml-ls-menu-item:hover {
            background: none
        }

        .main-nav .menu-item.wpml-ls-menu-item:hover a::after {
            all: unset
        }

        .main-nav .wpml-ls-item .sub-menu {
            display: block;
            opacity: .0001;
            pointer-events: none
        }

        .main-nav .wpml-ls-item:hover .sub-menu {
            opacity: 1;
            pointer-events: initial
        }

        .main-nav .sub-menu {
            display: none;
            background: #dad9d6;
            opacity: .9;
            box-shadow: none;
            position: absolute;
            top: calc(100% + 2px);
            left: 20px;
            min-width: 175px;
            padding-top: 8px;
            padding-bottom: 16px
        }

        .main-nav .sub-menu li a {
            display: block;
            color: #000;
            text-decoration: none;
            font-size: 14px;
            padding: 8px 16px;
            transition: color .2s ease-in-out
        }

        @media screen and (max-width: 768px) {
            .main-nav-wrapper {
                display: none
            }
        }

        .mobil-header-wrapper {
            position: sticky;
            top: 0px;
            display: flex;
            flex-direction: row;
            z-index: 99;
            background-color: #fff;
            align-items: center;
            justify-content: space-between;
            padding: 0 15px 0 25px
        }

        @media screen and (max-width: 782px) {
            html:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) {
                margin-top: 0px
            }
        }

        .mobil-header-logo-inner .logo {
            height: 40px
        }

        .mobil-header-logo-inner .logo>* {
            object-fit: contain
        }

        .mobil-header-logo a {
            height: 100%;
            width: 100%
        }

        .mobil-header-logo amp-img img {
            object-fit: contain
        }

        .mobil-header-info {
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap
        }

        .mobil-header-info a {
            display: block;
            width: 100%;
            position: relative
        }

        .mobil-header-btn {
            width: 80px
        }

        .mobil-header-btn button {
            -webkit-appearance: none;
            background: none;
            border: none;
            width: 100%;
            height: 100%;
            padding: 40px 10px
        }

        .mobil-header-btn button .menu {
            font-size: 21.14px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 500;
            display: none
        }

        .mobil-header-btn button span:not(.menu) {
            display: block;
            width: 40px;
            height: 4px;
            background: #000;
            border-radius: 10px;
            margin: 0 auto 4px
        }

        @media screen and (min-width: 931px) {
            .mobil-header-wrapper {
                display: none
            }
        }

        amp-sidebar#mobilmenu {
            background-color: #fff
        }

        amp-sidebar#mobilmenu .menu-item.wpml-ls-item {
            display: flex;
            align-items: center
        }

        amp-sidebar#mobilmenu .menu-item.wpml-ls-item .sub-menu {
            display: flex;
            margin-top: 0
        }

        amp-sidebar#mobilmenu .menu-header-menu-container,
        amp-sidebar#mobilmenu .menu-header-top-menu-container {
            font-size: 30px
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li {
            padding: 6px 0;
            margin: 0 40px;
            position: relative
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li .sub-menu,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li .sub-menu {
            margin-top: 8px
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li .sub-menu li,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li .sub-menu li {
            padding-left: 40px
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li.wpml-ls-item,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li.wpml-ls-item {
            margin-top: 20px;
            padding-left: 35px
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li.wpml-ls-item a,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li.wpml-ls-item a {
            padding: 0;
            margin-right: 10px
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li.wpml-ls-item .sub-menu,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li.wpml-ls-item .sub-menu {
            margin-top: 0
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li.wpml-ls-item .sub-menu li,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li.wpml-ls-item .sub-menu li {
            padding-left: 0
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li.wpml-ls-item.wpml-ls-current-language>a,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li.wpml-ls-item.wpml-ls-current-language>a {
            background: rgba(255, 255, 255, .25);
            border-radius: 50%
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li a,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li a {
            padding: 0
        }

        amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li:after,
        amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li:after {
            content: ">";
            display: block;
            position: absolute;
            right: 0px;
            top: 8px
        }

        amp-sidebar#mobilmenu ul.menu li.wpml-ls-item:hover>a {
            background: rgba(255, 255, 255, .25);
            border-radius: 50%
        }

        amp-sidebar#mobilmenu .close-sidebar {
            position: absolute;
            right: 20px;
            top: 20px;
            background: transparent
        }

        amp-sidebar#mobilmenu .close-sidebar span {
            width: 40px;
            height: 4px;
            background: #fff
        }

        amp-sidebar#mobilmenu .menu a {
            position: relative;
            text-decoration: none;
            color: #fff;
            display: block;
            border-bottom: none
        }

        amp-sidebar#mobilmenu li {
            list-style: none
        }

        amp-sidebar {
            background-color: #fff;
            width: 90vw;
            max-width: 440px
        }

        amp-sidebar .wpml-ls-menu-item.wpml-ls-item .wpml-ls-flag {
            display: block;
            padding: 20px;
            margin: 5px
        }

        amp-sidebar .menu-header-menu-container {
            font-size: 20px
        }

        amp-sidebar .menu-header-menu-container ul.menu>li {
            padding: 6px 0;
            margin: 0 40px;
            position: relative
        }

        amp-sidebar .menu-header-menu-container ul.menu>li .sub-menu {
            margin-top: 8px
        }

        amp-sidebar .menu-header-menu-container ul.menu>li .sub-menu li {
            padding-left: 40px
        }

        amp-sidebar .menu-header-menu-container ul.menu>li a {
            padding: 0
        }

        amp-sidebar li {
            list-style: none
        }

        amp-sidebar .menu .menu-item-has-children>a {
            display: none
        }

        amp-sidebar .menu .menu-item-has-children .sub-menu {
            padding-left: 0
        }

        amp-sidebar .menu {
            margin: 0;
            padding: 0;
            list-style: none
        }

        amp-sidebar .menu a {
            position: relative;
            text-decoration: none;
            color: inherit;
            display: block;
            padding: 20px;
            border-bottom: 1px solid #ccc
        }

        @media screen and (min-width: 768px) {
            @keyframes indfravenstre {
                0% {
                    transform: translateX(-100%)
                }

                100% {
                    transform: translateX(0)
                }
            }

            @keyframes indfrahojre {
                0% {
                    transform: translateX(100%)
                }

                100% {
                    transform: translateX(0)
                }
            }
        }

        amp-img[layout="fill"]>* {
            object-fit: cover
        }

        .sidebar-element {
            position: relative;
            overflow: hidden
        }

        .sidebar-element:not(.overlay-cell):not(.video-cell) {
            padding: 50px
        }

        .sidebar-element:not(:last-child) {
            background: linear-gradient(#fff, #fff), linear-gradient(to right, #848484, rgba(0, 0, 0, 0));
            border: 2px solid transparent;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            background-repeat: no-repeat;
            background-origin: padding-box, border-box
        }

        .sidebar-element:not(.overlay-cell):not(.video-cell) {
            padding: 20px
        }

        @media screen and (min-width: 768px) {
            .sidebar-element:not(.overlay-cell):not(.video-cell) {
                padding-left: 0
            }
        }

        .content-container.single .content ul {
            list-style-position: inside
        }

        .content-container.single .content ul li {
            margin-bottom: 5px
        }

        .content-container.single .content ul li:last-child {
            margin-bottom: 0
        }

        body:not(.home) .content-container {
            margin-top: 100px
        }

        @media screen and (max-width: 930px) {
            body:not(.home) .content-container {
                margin-top: 0
            }
        }

        .content ul {
            list-style-position: outside
        }

        .cards-container {
            display: flex;
            flex-direction: column
        }

        .cards-container .card {
            color: #000;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-basis: 10%;
            flex-shrink: 0;
            flex-grow: 1
        }

        .cards-container .card a {
            color: #000
        }

        .cards-container .card .card-info {
            position: relative;
            padding: 20px;
            width: 100%;
            z-index: 2
        }

        .cards-container .card .card-info .card-overskrift {
            font-size: 24px;
            margin-bottom: 10px;
            display: block;
            text-decoration: none
        }

        @media screen and (max-width: 768px) {
            .content .cards-container .card {
                margin-bottom: 30px
            }
        }

        @media screen and (min-width: 768px) {
            .cards-container {
                flex-direction: row
            }

            .card:not(:last-child) {
                border-right: solid 1px #fff
            }
        }

        @media screen and (max-width: 768px) {
            .cards-container {
                padding: 0;
                margin-top: 0
            }

            .cards-container .card {
                padding-bottom: 0
            }

            .cards-container .card .card-info {
                padding: 20px 20px 40px 20px
            }

            .cards-container .card .card-info .card-overskrift {
                margin-bottom: 10px
            }
        }

        .footer-wrapper {
            width: 100%;
            background: #e6e6e5;
            font-size: 20px;
            letter-spacing: .5px;
            padding: 30px 0 100px 0;
            margin-top: 60px;
            position: relative
        }

        .footer-wrapper footer {
            width: 100%;
            max-width: calc(100% - 20px * 2);
            margin: 0 auto
        }

        .footer-wrapper p {
            margin: 0
        }

        .footer-wrapper::after {
            content: "";
            position: absolute;
            right: -30px;
            bottom: -30px;
            height: 250px;
            width: 250px;
            background-image: url("/wp-content/themes/oras-child/images/stempel.png");
            background-position: center center;
            background-size: contain;
            background-repeat: no-repeat
        }

        @media screen and (max-width: 1500px) {
            .footer-wrapper {
                overflow: hidden
            }
        }

        .footer-section {
            padding: 0 40px 0 20px;
            width: 100%
        }

        .footer-section:last-child {
            padding: 0 20px
        }

        .footer-section .footer-title {
            font-size: 25px;
            border-bottom: 1px solid #707070;
            padding: 0 0 20px 20px;
            margin-bottom: 30px;
            position: relative;
            font-weight: lighter
        }

        .footer-section .footer-title::before {
            content: "";
            height: 100%;
            width: 1px;
            background: #707070;
            position: absolute;
            top: -10px;
            left: -20px
        }

        .footer-section .footer-content {
            padding-left: 20px;
            display: flex;
            flex-direction: column;
            font-size: 16px
        }

        .footer-section .footer-description p {
            margin-bottom: 20px
        }

        .footer-section .footer-sub-title {
            margin-bottom: 20px
        }

        .footer-social-medie {
            display: flex;
            align-items: center;
            margin-bottom: 15px
        }

        .footer-social-medie:last-child {
            margin-bottom: 0
        }

        .footer-social-medie amp-img {
            margin-right: 25px
        }

        .footer-info {
            padding: 45px;
            position: relative;
            display: flex;
            width: 100%
        }

        .aabningstid {
            display: flex;
            justify-content: space-between;
            width: 200px
        }

        .aabningstid.idag {
            font-weight: bold
        }

        @media screen and (max-width: 1224px) {
            .footer-info {
                flex-direction: column
            }

            .footer-info .footer-section {
                padding: 0 40px 40px 20px
            }
        }

        @media screen and (max-width: 768px) {
            .footer-info {
                padding: 40px 0
            }
        }

        body.woocommerce .sidebar {
            display: none
        }

        .sidebar-enabled {
            display: flex;
            flex-direction: row
        }

        .sidebar-enabled .content {
            width: calc(100% - 400px)
        }

        .sidebar-enabled .sidebar {
            width: 400px
        }

        .sidebar-enabled {
            flex-direction: column-reverse
        }

        .sidebar-enabled .content {
            width: 100%
        }

        .sidebar-enabled .sidebar {
            padding: 20px;
            display: flex;
            justify-content: center
        }

        .sidebar-element {
            margin-bottom: 0
        }

        @media screen and (max-width: 1224px) {
            .sidebar-element {
                width: 100%
            }

            .sidebar-element:not(.widget_product_categories) {
                max-width: 380px
            }
        }

        body.single .content h1 {
            font-size: 36px
        }

        @media screen and (min-width: 768px) {
            body.single .content h1 {
                font-size: 35px;
                margin-bottom: 20px;
                line-height: normal
            }
        }

        .wp-block-buttons {
            margin-bottom: 25px
        }

        .wp-block-buttons .wp-block-button {
            margin-bottom: 0
        }

        .wp-block-buttons .wp-block-button a {
            white-space: nowrap;
            font-size: 17px;
            text-decoration: underline;
            color: #373635;
            background: none;
            padding: 0
        }

        .wp-block-buttons .wp-block-button:hover a {
            color: #5e5c5b
        }

        #gform_wrapper_1 {
            position: relative;
            height: 340px
        }

        #gform_wrapper_1:before {
            content: "";
            position: absolute;
            border: solid 5px #5e5c5b;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none
        }

        #gform_wrapper_1:after {
            content: "";
            position: absolute;
            background-image: url("/wp-content/themes/oras-child/images/headset.png");
            background-size: contain;
            background-repeat: no-repeat;
            width: 125px;
            height: 125px;
            top: -90px;
            left: 50%;
            transform: translateX(-50%);
            pointer-events: none
        }

        #gform_wrapper_1 form {
            width: 240px;
            margin: 0 auto;
            padding: 30px 20px 20px 20px
        }

        #gform_wrapper_1 .gfield_label {
            display: none
        }

        #gform_wrapper_1 .gfield {
            padding-right: 0
        }

        #gform_wrapper_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]) {
            background-color: #5e5c5b;
            color: #fff;
            text-align: center;
            width: 100%;
            text-transform: uppercase
        }

        #gform_wrapper_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])::placeholder {
            color: #fff
        }

        #gform_wrapper_1 .gform_footer {
            margin: 0;
            padding: 0
        }

        #gform_wrapper_1 .gform_footer::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -41px;
            display: block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 7px 0 7px 14px;
            border-color: transparent transparent transparent #fff;
            transform: translateX(-50%) rotate(360deg);
            pointer-events: none
        }

        #gform_wrapper_1 input {
            border: 0
        }

        #gform_wrapper_1 input[type=submit] {
            position: relative;
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #373635;
            display: block;
            margin: 0 auto;
            font-size: 0px;
            font-size: 17px;
            padding: 0px;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            font-family: "Arial", sans-serif;
            color: #000;
            cursor: pointer;
            -webkit-appearance: none;
            border-radius: 0
        }

        .sidebar {
            flex-direction: column
        }

        .sidebar-element {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 auto
        }

        .sidebar-element:not(.overlay-cell):not(.video-cell):not(.text-align-left) {
            padding: 0 0 20px 0
        }

        .sidebar-element #gform_wrapper_1 {
            height: 300px;
            width: 320px
        }

        @media screen and (max-width: 930px) {
            amp-sidebar#mobilmenu {
                width: 90vw;
                max-width: 440px
            }

            .main-nav-wrapper {
                display: none
            }

            amp-sidebar#mobilmenu {
                background: #373635
            }

            amp-sidebar#mobilmenu .menu-header-menu-container ul.menu li a,
            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu li a {
                padding: 12px 45px;
                line-height: 25px;
                display: block;
                color: #fff;
                font-weight: 500;
                font-size: 30px
            }

            amp-sidebar#mobilmenu .menu-header-menu-container ul.menu li:after,
            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu li:after {
                display: none
            }

            amp-sidebar#mobilmenu .menu-header-menu-container ul.menu>li,
            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu>li {
                margin: 0;
                padding: 0
            }

            amp-sidebar#mobilmenu .menu-header-menu-container ul.menu ul li:not(.wpml-ls-item) a,
            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu ul li:not(.wpml-ls-item) a {
                padding: 0px 45px;
                padding: 8px 45px;
                padding-left: 40px;
                font-weight: normal;
                font-size: 20px;
                line-height: 30px
            }

            amp-sidebar#mobilmenu .menu-header-menu-container ul.menu ul li:not(.wpml-ls-item) a:before,
            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu ul li:not(.wpml-ls-item) a:before {
                content: "";
                position: absolute;
                top: 22px;
                left: 10px;
                width: 20px;
                height: 1px;
                background: #fff
            }

            amp-sidebar#mobilmenu .menu-header-top-menu-container {
                margin: 70px 0 10px;
                position: relative
            }

            amp-sidebar#mobilmenu .menu-header-top-menu-container::before {
                content: "";
                position: absolute;
                top: 0;
                left: 45px;
                height: 100%;
                width: 2px;
                background: #fff
            }

            amp-sidebar#mobilmenu .menu-header-top-menu-container ul.menu li a {
                font-size: 16px;
                padding: 3px 60px
            }

            .close-sidebar {
                position: relative;
                width: 68px;
                height: 68px;
                float: right;
                -webkit-appearance: none;
                background: none;
                border: none;
                outline: none
            }

            .close-sidebar span {
                display: block;
                height: 3px;
                width: 40px;
                position: absolute;
                background: #fff;
                top: 50%;
                left: 50%;
                border-radius: 2px;
                transform: translate(-50%, -50%) rotate(45deg)
            }

            .close-sidebar span:last-child {
                transform: translate(-50%, -50%) rotate(-45deg)
            }
        }

        @media screen and (max-width: 768px) {
            .content {
                overflow-x: hidden
            }
        }

        .content>.products {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap
        }

        .content>.products .product {
            display: flex;
            flex-direction: column;
            width: calc(100% / 3);
            margin: 0;
            position: relative;
            padding-bottom: 30px
        }

        .content>.products .product-content {
            padding: 20px
        }

        .content>.products .woocommerce-loop-product__link>p:first-child {
            display: block;
            font-size: 24px;
            font-weight: lighter;
            padding-right: 30px
        }

        @media screen and (min-width: 768px) {
            .content>.products .product:nth-child(3n) {
                border-right: none
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1500px) {
            .content>.products .product {
                width: calc(100% / 2)
            }

            .content>.products .product:nth-child(2n) {
                border-right: none
            }
        }

        @media screen and (max-width: 768px) {
            .content>.products {
                flex-direction: column;
                margin: 0
            }

            .content>.products .product {
                width: 85%;
                border-right: none
            }
        }

        .widget_product_categories .current-cat {
            font-weight: 500
        }

        .sidebar-venstre {
            position: relative;
            padding-bottom: 500px
        }

        .sidebar-venstre li {
            list-style: none
        }

        .sidebar-venstre .widget-title {
            display: inline-block;
            border-bottom: solid 1px black
        }

        .woocommerce-Tabs-panel .row:not(:first-child) {
            margin-top: 25px
        }

        body.single-product {
            background: #e6e6e5
        }

        body.single-product .product {
            display: flex
        }

        @media screen and (min-width: 768px) {
            body.single-product .product {
                display: grid;
                grid-template-columns: 40% 60%;
                position: relative
            }

            body.single-product .product>*:nth-child(n+4) {
                grid-column: 1/-1
            }
        }

        body.single-product .product-gallery-container {
            width: 100%
        }

        @media screen and (min-width: 768px) {
            body.single-product .product-gallery-container {
                padding-right: 40px
            }
        }

        body.single-product .summary {
            width: 100%;
            position: absolute;
            left: 40%;
            top: 0;
            padding: 0 20px
        }

        body.single-product h1.product_title {
            font-size: 28px
        }

        body.single-product .wc-tabs-wrapper {
            margin-top: 50px;
            width: 100%;
            padding: 0 20px;
            font-weight: 300
        }

        body.single-product .wc-tabs-wrapper .wp-block-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px
        }

        body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button {
            flex-basis: 50%;
            flex-shrink: 1;
            margin-right: 0;
            margin-left: 0
        }

        body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button>a {
            margin: 0 40px;
            width: calc(100% - 20px * 2)
        }

        body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button a {
            padding: 10px 30px;
            text-decoration: none;
            background: #373635;
            color: #fff;
            border-radius: 0;
            text-transform: uppercase
        }

        @media screen and (max-width: 530px) {
            body.single-product .wc-tabs-wrapper .wp-block-buttons {
                flex-direction: column;
                align-items: center;
                justify-content: flex-start
            }

            body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button {
                margin: 0;
                flex-basis: 100%
            }

            body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button:first-child {
                margin-bottom: 10px
            }
        }

        body.single-product .content {
            padding-top: 30px
        }

        @media screen and (max-width: 768px) {
            body.single-product .content {
                padding-top: 0
            }

            body.single-product .product {
                flex-direction: column
            }

            body.single-product .product-gallery-container {
                width: 100%
            }

            body.single-product .summary {
                position: static;
                width: 100%;
                margin-top: 20px
            }

            body.single-product .wc-tabs-wrapper {
                width: 100%;
                margin-top: 0
            }

            body.single-product h1.product_title {
                font-size: 24px
            }
        }

        @media screen and (max-width: 768px) {
            .sidebar-element.widget_product_categories:not(.overlay-cell):not(.video-cell):not(.text-align-left) {
                align-items: flex-start;
                padding: 20px 0 0 0;
                background: none
            }
        }

        .mere-info-wrapper {
            margin: 60px 0;
            padding: 10px 50px 40px;
            background: #fff;
            width: 800px;
            max-width: 100%;
            position: relative
        }

        .mere-info-wrapper .mere-info-link {
            position: absolute;
            top: -120px
        }

        .mere-info-wrapper h2 {
            margin-top: 40px
        }

        @media screen and (max-width: 768px) {
            .mere-info-wrapper {
                padding: 40px 20px
            }
        }

        .product-image-container+.mere-info-wrapper {
            margin: 280px 0
        }

        @media screen and (max-width: 1150px) {
            .product-image-container+.mere-info-wrapper {
                margin: 200px auto 0
            }
        }

        @media screen and (max-width: 700px) {
            .product-image-container+.mere-info-wrapper {
                margin: 60px auto 0
            }
        }

        .tabs.wc-tabs {
            display: none
        }

        .product_meta {
            display: none
        }

        .related.products {
            display: none
        }

        .price {
            display: none
        }

        .content-container .cards-container.infokort-cards-container {
            display: flex;
            flex-wrap: wrap;
            max-width: initial;
            padding: 40px 0;
            margin: 0 auto
        }

        .content-container .cards-container.infokort-cards-container .card {
            width: 100%;
            display: block;
            margin-bottom: 0;
            padding-bottom: 10px
        }

        .content-container .cards-container.infokort-cards-container .card .card-info {
            text-align: center;
            pointer-events: auto;
            position: static
        }

        .content-container .cards-container.infokort-cards-container .card .card-info .card-overskrift {
            font-weight: normal
        }

        .content-container .cards-container.infokort-cards-container::before {
            height: 0;
            width: 0
        }

        @media screen and (max-width: 1224px) {
            .content-container .cards-container.infokort-cards-container .card {
                width: 50%;
                flex-basis: initial;
                flex-shrink: initial;
                flex-grow: initial
            }
        }

        @media screen and (max-width: 768px) {
            .content-container .cards-container.infokort-cards-container .card {
                width: 100%
            }

            .content-container .cards-container.infokort-cards-container .card .card-info {
                padding: 20px 20px 15px
            }

            .content-container .cards-container.infokort-cards-container .card .card-info:first-child {
                padding-top: 0
            }
        }

        .call-form-wrapper {
            pointer-events: none
        }

        .call-form-wrapper * {
            pointer-events: none
        }

        .call-form-wrapper .toggle-button {
            pointer-events: all
        }

        .call-form-wrapper div.close-button {
            pointer-events: all
        }

        .call-form-wrapper input {
            pointer-events: all
        }

        .call-form {
            width: 300px;
            padding: 20px;
            border-radius: 24px;
            background: rgba(55, 54, 53, .75);
            position: fixed;
            right: 20px;
            bottom: 40px;
            z-index: 999;
            transition: transform 250ms ease-in-out;
            transform: translateX(0);
            display: none;
            color: #fff
        }

        .call-form[class*="visible"] {
            display: block;
            pointer-events: all
        }

        .call-form[class*="visible"] * {
            pointer-events: all
        }

        .call-form .close-button {
            position: absolute;
            top: -15px;
            right: 25px;
            height: 25px;
            width: 25px;
            border-radius: 50%;
            background: #373635;
            text-align: center;
            line-height: 22px;
            color: #fff
        }

        .call-form .title-wrapper {
            display: flex;
            align-items: center
        }

        .call-form .title-wrapper .call-form-icon {
            margin-right: 20px;
            transition: all 250ms ease-in-out
        }

        .call-form .title-wrapper .call-form-title {
            color: #fff
        }

        .call-form #gform_wrapper_1 {
            height: auto;
            margin-bottom: 16px;
            margin-top: 16px;
            max-width: 100%
        }

        .call-form #gform_wrapper_1 form {
            padding: 0
        }

        .call-form #gform_wrapper_1 * {
            box-sizing: border-box
        }

        .call-form #gform_wrapper_1 li {
            list-style: none;
            margin-top: 16px
        }

        .call-form #gform_wrapper_1 [type="submit"] {
            color: transparent
        }

        .call-form #gform_wrapper_1 div.ginput_container {
            margin-top: 8px
        }

        .call-form #gform_wrapper_1 .gform_validation_container {
            display: none
        }

        .call-form #gform_wrapper_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]) {
            background: #fff;
            color: #373635;
            font-weight: 500;
            text-align: center;
            width: 100%;
            text-transform: uppercase;
            font-size: inherit;
            font-family: inherit;
            padding: 5px 4px;
            letter-spacing: normal
        }

        .call-form #gform_wrapper_1 input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])::placeholder {
            color: #373635
        }

        .call-form #gform_wrapper_1::before {
            height: 0;
            width: 0;
            border: none
        }

        .call-form #gform_wrapper_1::after {
            height: 0;
            width: 0;
            background: none
        }

        .call-form-wrapper {
            bottom: 60px;
            right: 0;
            position: fixed;
            z-index: 4
        }

        .call-form-wrapper .toggle-button {
            position: absolute;
            bottom: 5px;
            right: 5px;
            cursor: pointer;
            border: none;
            background: #373635;
            display: block;
            display: grid;
            padding: 10px;
            place-items: center
        }

        .footer-wrapper footer {
            border-top: 1px solid #707070
        }

        .footer-wrapper>div:last-of-type {
            padding-bottom: 60px
        }

        .footer-wrapper .infokort-cards-container {
            text-align: center;
            padding: 0px 65px
        }

        .footer-wrapper .infokort-cards-container .card:not(:last-child) {
            border-right: none
        }

        .footer-wrapper .infokort-cards-container p:not(.card-overskrift) {
            font-size: 16px
        }

        .product.type-product .product-image-container {
            width: 100%;
            margin-bottom: -200px
        }

        .product.type-product .product-image-container.first-child {
            margin-top: 100px
        }

        .product.type-product .product-image-container:last-of-type {
            margin-bottom: 0
        }

        .product.type-product .product-image-container:nth-of-type(2n-1) {
            padding-left: 55%
        }

        .product.type-product .product-image-container:nth-of-type(2n) {
            padding-right: 55%
        }

        @media screen and (max-width: 1150px) {
            .product.type-product .product-image-container {
                margin-bottom: -100px
            }
        }

        @media screen and (max-width: 700px) {
            .product.type-product .product-image-container {
                margin: 0px;
                width: 100%;
                margin-bottom: 40px
            }

            .product.type-product .product-image-container:nth-of-type(2n-1) {
                padding-left: 0
            }

            .product.type-product .product-image-container:nth-of-type(2n) {
                padding-right: 0
            }
        }

        .main-nav .menu-item.wpml-ls-menu-item.wpml-ls-current-language>a:first-child>amp-img {
            opacity: 0
        }

        .main-nav .menu-item.wpml-ls-menu-item.wpml-ls-current-language>a:first-child {
            background-image: url("/wp-content/themes/oras-child/images/globus.png");
            background-size: 27px 27px;
            background-position: 48% 50%;
            background-repeat: no-repeat;
            top: 3px
        }

        div.main-nav.top-nav {
            position: absolute;
            top: 0px;
            right: 30px;
            margin-top: 2px
        }

        .main-nav>div ul.menu>li.menu-kollektion {
            position: static
        }

        .main-nav-wrapper {
            position: static
        }

        .main-nav>div>ul>li.menu-kollektion:hover>.sub-menu {
            display: flex;
            justify-content: center
        }

        .main-nav>div .menu-kollektion .sub-menu {
            width: 100vw;
            top: 85px;
            left: 0px;
            padding: 0px;
            position: absolute;
            max-width: 1500px;
            opacity: 1;
            background: transparent
        }

        .main-nav>div .menu-kollektion .sub-menu::before {
            content: "";
            width: 100vw;
            height: 100%;
            position: absolute;
            left: calc(((100vw - 1500px) / 2) * -1);
            top: 0px;
            background-color: #e6e6e5;
            border-top: solid 1px #3e3d3c;
            border-bottom: solid 1px #3e3d3c;
            opacity: 1;
            z-index: -1
        }

        @media screen and (max-width: 1500px) {
            .main-nav>div .menu-kollektion .sub-menu::before {
                left: 0px
            }
        }

        .main-nav>div .menu-kollektion .sub-menu li {
            width: 14%;
            list-style: none;
            padding-bottom: 25px;
            float: left
        }

        @media screen and (max-width: 1100px) {
            .main-nav>div .menu-kollektion .sub-menu li {
                width: 25%
            }
        }

        .main-nav>div ul.menu li.menu-kollektion>.sub-menu li:hover {
            transform: none
        }

        .main-nav>div ul.menu li.menu-laenestole a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-laenestole a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-laenestole a::before {
            background: url("/wp-content/themes/oras-child/images/menu_icon_laenestol.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-funktionsstole a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-funktionsstole a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-funktionsstole a::before {
            background: url("/wp-content/themes/oras-child/images/menu_icon_funktion_2.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-sofaer a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-sofaer a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-sofaer a::before {
            background: url("/wp-content/themes/oras-child/images/menu_icon_sofa.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-spisebordsstole a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-spisebordsstole a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-spisebordsstole a::before {
            background: url("/wp-content/themes/oras-child/images/menu_icon_stole_2.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-stabelstole a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-stabelstole a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-stabelstole a::before {
            background: url("/wp-content/themes/oras-child/images/stabelstol_ikon.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-borde a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-borde a:hover {
            color: #000
        }

        .main-nav>div ul.menu li.menu-borde a::before {
            background: url("/wp-content/themes/oras-child/images/menu_icon_bord.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        #mobilmenu .menu-kollektion .sub-menu {
            display: none
        }

        .til-top {
            position: fixed;
            bottom: 10px;
            right: 12px;
            z-index: 1;
            visibility: hidden;
            display: flex;
            align-items: center;
            padding-bottom: 5px
        }

        .til-top amp-img {
            margin-left: 10px
        }

        .til-top span {
            font-size: 16px
        }

        .product amp-img {
            position: relative;
            max-height: 100%
        }

        .product amp-img img {
            object-fit: cover;
            object-position: center center
        }

        .main-nav>div ul.menu li.menu-referencer a::before {
            background: url("https://farstrup.dk/wp-content/uploads/referencer_stregtegning@2x.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-kataloger a::before {
            background: url("https://farstrup.dk/wp-content/uploads/katalog_stregtegning2@2x.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-tekniskefiler a::before {
            background: url("https://farstrup.dk/wp-content/uploads/tekniskefiler_stregtegning.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-contract-kollektion a::before {
            background: url("https://farstrup.dk/wp-content/uploads/kollektion_streg-1.png");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: 0 auto;
            content: "";
            display: block;
            width: 120px;
            height: 180px
        }

        .main-nav>div ul.menu li.menu-contract-kollektion a,
        .main-nav>div ul.menu li.menu-tekniskefiler a,
        .main-nav>div ul.menu li.menu-kataloger a,
        .main-nav>div ul.menu li.menu-referencer a {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #888;
            transition: color .3s ease-in-out
        }

        .main-nav>div ul.menu li.menu-contract-kollektion a:hover,
        .main-nav>div ul.menu li.menu-tekniskefiler a:hover,
        .main-nav>div ul.menu li.menu-kataloger a:hover,
        .main-nav>div ul.menu li.menu-referencer a:hover {
            color: #000
        }

        @-webkit-keyframes prop-600 {
            0% {
                -webkit-transform: translateX(0px)
            }

            50% {
                -webkit-transform: translateX(-5px)
            }
        }

        @media only screen and (max-width: 768px) {
            body.single-product .content {
                margin-top: 30px;
                padding: 30px
            }
        }

        body.single-product .wc-tabs-wrapper .wp-block-buttons .wp-block-button {
            flex-basis: 49%
        }

        .wp-gdpr-cookie-notice-wrap {
            position: fixed;
            right: 0;
            left: 0;
            bottom: 0;
            z-index: 9999999999;
            box-shadow: 0 -3px 5px 0 rgba(0, 0, 0, .1)
        }

        .wp-gdpr-cookie-notice {
            position: relative;
            border-width: 0px 0 0
        }

        .wp-gdpr-cookie-notice-wrap {
            background-color: rgba(0, 0, 0, .65)
        }

        .wp-gdpr-cookie-notice {
            padding: .75rem 1rem;
            font-size: 90%;
            line-height: 1.4;
            color: #404040;
            background-color: #fff;
            border-color: #ccc;
            border-style: solid
        }

        .wp-gdpr-cookie-notice-inner {
            display: block;
            margin: 0 auto;
            max-width: 640px
        }

        .wp-gdpr-cookie-notice a,
        .wp-gdpr-cookie-notice a:visited {
            color: #21759b
        }

        .wp-gdpr-cookie-notice a:hover,
        .wp-gdpr-cookie-notice a:focus {
            color: #195874
        }

        .wp-gdpr-cookie-notice-heading,
        .wp-gdpr-cookie-notice-content {
            margin-bottom: .2rem
        }

        .wp-gdpr-cookie-notice-heading>* {
            margin: 0;
            padding: 0;
            font-size: 110%
        }

        .wp-gdpr-cookie-notice-content>* {
            margin: 0 0 .5rem;
            padding: 0
        }

        .wp-gdpr-cookie-notice-content>*:last-child {
            margin: 0
        }

        .wp-gdpr-cookie-notice-form {
            margin: 0;
            padding: 0;
            background: transparent;
            border: 0;
            box-shadow: none;
            overflow: visible
        }

        .wp-gdpr-cookie-notice-controls {
            display: flex;
            align-items: center;
            justify-content: flex-end
        }

        .wp-gdpr-cookie-notice-controls>* {
            margin-right: .8rem
        }

        .wp-gdpr-cookie-notice-controls>*:last-child {
            margin-right: 0
        }

        .wp-gdpr-cookie-notice-button {
            display: inline-block;
            padding: .4rem .6rem;
            font-size: 90%;
            color: #fff;
            background-color: #21759b;
            border: 0;
            border-radius: 0;
            appearance: none
        }

        .wp-gdpr-cookie-notice-button:hover,
        .wp-gdpr-cookie-notice-button:focus {
            color: #fff;
            background-color: #195874
        }

        .gform_legacy_markup_wrapper {
            margin-bottom: 16px;
            margin-top: 16px;
            max-width: 100%
        }

        .gform_legacy_markup_wrapper form {
            text-align: left;
            max-width: 100%;
            margin: 0 auto
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper *,
        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper :after,
        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper :before {
            box-sizing: border-box
        }

        .gform_legacy_markup_wrapper h1,
        .gform_legacy_markup_wrapper h2,
        .gform_legacy_markup_wrapper h3 {
            font-weight: 400;
            border: none;
            background: 0 0
        }

        .gform_legacy_markup_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]) {
            font-size: inherit;
            font-family: inherit;
            padding: 5px 4px;
            letter-spacing: normal
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper input[type=image] {
            border: none;
            padding: 0;
            width: auto
        }

        .gform_legacy_markup_wrapper ul.gform_fields {
            list-style-type: none;
            display: block
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper ul.gform_fields {
            margin: 0
        }

        .gform_legacy_markup_wrapper ul {
            text-indent: 0
        }

        .gform_legacy_markup_wrapper form li,
        .gform_legacy_markup_wrapper li {
            overflow: visible
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper form li,
        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper li {
            margin-left: 0;
            list-style-type: none;
            list-style-image: none;
            list-style: none
        }

        .gform_legacy_markup_wrapper ul li.gfield {
            clear: both
        }

        .gform_legacy_markup_wrapper ul li:after,
        .gform_legacy_markup_wrapper ul li:before,
        .gform_legacy_markup_wrapper ul.gform_fields {
            padding: 0;
            margin: 0;
            overflow: visible
        }

        .gform_legacy_markup_wrapper .field_sublabel_below div[class*=gfield_date_].ginput_container label {
            width: 3rem;
            text-align: center
        }

        .gform_legacy_markup_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label {
            width: 48px;
            text-align: center
        }

        .gform_legacy_markup_wrapper label.gfield_label {
            font-weight: 700;
            font-size: inherit
        }

        .gform_legacy_markup_wrapper .top_label .gfield_label {
            display: -moz-inline-stack;
            display: inline-block;
            line-height: 1.3;
            clear: both
        }

        .gform_legacy_markup_wrapper .field_sublabel_below div[class*=gfield_date_].ginput_container label,
        .gform_legacy_markup_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label {
            display: block;
            font-size: .813em;
            letter-spacing: .5pt;
            white-space: nowrap
        }

        .gform_legacy_markup_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label {
            margin: 1px 0 9px 1px
        }

        body .gform_legacy_markup_wrapper .top_label div.ginput_container {
            margin-top: 8px
        }

        .gform_legacy_markup_wrapper .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper .screen-reader-text {
            word-wrap: normal
        }

        .gform_legacy_markup_wrapper input.medium {
            width: 100%
        }

        .gform_legacy_markup_wrapper .gfield_description {
            font-size: .813em;
            line-height: inherit;
            clear: both;
            font-family: inherit;
            letter-spacing: normal
        }

        .gform_legacy_markup_wrapper .gfield_description {
            padding: 0 16px 0 0
        }

        .gform_legacy_markup_wrapper .field_description_below .gfield_description {
            padding-top: 16px
        }

        .gform_legacy_markup_wrapper .gfield_description {
            width: 100%
        }

        .gform_legacy_markup_wrapper .gfield_required {
            color: #790000;
            margin-left: 4px
        }

        .gform_legacy_markup_wrapper .gform_footer {
            padding: 16px 0 10px 0;
            margin: 16px 0 0 0;
            clear: both;
            width: 100%
        }

        .gform_legacy_markup_wrapper .gform_footer input.button,
        .gform_legacy_markup_wrapper .gform_footer input[type=submit] {
            font-size: 1em;
            width: 100%;
            margin: 0 0 16px 0
        }

        .gform_legacy_markup_wrapper .gform_footer input[type=image] {
            padding: 0;
            display: block;
            max-width: 100%
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper .gform_footer input[type=image] {
            width: auto;
            background: 0 0;
            border: none;
            margin: 0 auto 16px auto
        }

        .gform_legacy_markup_wrapper .gform_hidden,
        .gform_legacy_markup_wrapper input.gform_hidden,
        .gform_legacy_markup_wrapper input[type=hidden] {
            overflow: hidden
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper .gform_hidden,
        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper input.gform_hidden,
        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper input[type=hidden] {
            display: none;
            max-height: 1px
        }

        .gform_legacy_markup_wrapper .gform_validation_container,
        .gform_validation_container,
        body .gform_legacy_markup_wrapper .gform_body ul.gform_fields li.gfield.gform_validation_container,
        body .gform_legacy_markup_wrapper li.gform_validation_container,
        body .gform_legacy_markup_wrapper ul.gform_fields li.gfield.gform_validation_container {
            left: -9000px
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper .gform_validation_container,
        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_validation_container,
        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) body .gform_legacy_markup_wrapper .gform_body ul.gform_fields li.gfield.gform_validation_container,
        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) body .gform_legacy_markup_wrapper li.gform_validation_container,
        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) body .gform_legacy_markup_wrapper ul.gform_fields li.gfield.gform_validation_container {
            display: none;
            position: absolute
        }

        body .gform_legacy_markup_wrapper ul li.gfield {
            margin-top: 16px;
            padding-top: 0
        }

        @media only screen and (max-width:641px) {
            .gform_legacy_markup_wrapper input:not([type=radio]):not([type=checkbox]):not([type=image]):not([type=file]) {
                line-height: 2;
                min-height: 2rem
            }

            .gform_legacy_markup_wrapper .ginput_container span:not(.ginput_price) {
                margin-bottom: 8px;
                display: block
            }
        }

        @media only screen and (min-width:641px) {
            .gform_legacy_markup_wrapper .gform_body {
                width: 100%
            }

            .gform_legacy_markup_wrapper ul.gform_fields:not(.top_label) .gfield_label {
                float: left;
                width: 29%;
                padding-right: 16px;
                margin-bottom: 16px
            }

            .gform_legacy_markup_wrapper .top_label input.medium {
                width: calc(50% - 8px)
            }

            .gform_legacy_markup_wrapper .gform_footer input.button,
            .gform_legacy_markup_wrapper .gform_footer input[type=image],
            .gform_legacy_markup_wrapper .gform_footer input[type=submit] {
                display: -moz-inline-stack;
                display: inline-block
            }

            .gform_legacy_markup_wrapper .gform_footer input[type=image] {
                vertical-align: middle
            }

            .gform_legacy_markup_wrapper .gform_footer input.button,
            .gform_legacy_markup_wrapper .gform_footer input[type=submit] {
                font-size: 1em;
                width: auto;
                margin: 0 16px 0 0
            }

            .gform_legacy_markup_wrapper ul.gform_fields li.gfield {
                padding-right: 16px
            }

            .gform_legacy_markup_wrapper .gform_footer:not(.top_label) {
                padding: 16px 0 10px 0;
                margin-left: 29%;
                width: 70%
            }

            html:not([dir=rtl]) .gform_legacy_markup_wrapper ul.gform_fields:not(.top_label) .gfield_description,
            html:not([dir=rtl]) .gform_legacy_markup_wrapper ul.gform_fields:not(.top_label) .ginput_container:not(.ginput_container_time):not(.ginput_container_date) {
                width: 70%;
                margin-left: 29%
            }
        }

        .gform_legacy_markup_wrapper.gf_browser_chrome ul li:after,
        .gform_legacy_markup_wrapper.gf_browser_chrome ul li:before {
            content: none
        }

        .gform_legacy_markup_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio] {
            margin-left: 1px
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_) .amp-wp-bf126db {
            visibility: hidden;
            position: absolute;
            left: -9999px;
            overflow: hidden
        }

        /*# sourceURL=amp-custom.css */
    </style>
    <link rel="alternate" hreflang="da" href="https://farstrup.dk/produkter/plus-5011/">
    <link rel="alternate" hreflang="en" href="https://farstrup.dk/en/produkter/plus-5011/">
    <link rel="alternate" hreflang="nl" href="https://farstrup.dk/nl/produkter/plus-5011/">
    <link rel="alternate" hreflang="de" href="https://farstrup.dk/de/produkter/plus-5011/"><!-- This site is optimized with the Yoast SEO plugin v17.5 - https://yoast.com/wordpress/plugins/seo/ -->
    <link rel="canonical" href="https://farstrup.dk/produkter/plus-5011/">
    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebSite",
                "@id": "https://farstrup.dk/#website",
                "url": "https://farstrup.dk/",
                "name": "Farstrup Furniture",
                "description": "Farstrup Furniture",
                "potentialAction": [{
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "https://farstrup.dk/?s={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                }],
                "inLanguage": "da-DK"
            }, {
                "@type": "ImageObject",
                "@id": "https://farstrup.dk/produkter/plus-5011/#primaryimage",
                "inLanguage": "da-DK",
                "url": "https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1.png",
                "contentUrl": "https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1.png",
                "width": 450,
                "height": 550
            }, {
                "@type": "WebPage",
                "@id": "https://farstrup.dk/produkter/plus-5011/#webpage",
                "url": "https://farstrup.dk/produkter/plus-5011/",
                "name": "Plus 5011 | Farstrup Furniture",
                "isPartOf": {
                    "@id": "https://farstrup.dk/#website"
                },
                "primaryImageOfPage": {
                    "@id": "https://farstrup.dk/produkter/plus-5011/#primaryimage"
                },
                "datePublished": "2020-08-18T10:11:12+00:00",
                "dateModified": "2021-11-18T11:20:51+00:00",
                "description": "Plus 5011 er en sofastol, der passer til Plus-seriens l\u00e6nestole og sofaer. Det tidsl\u00f8se og elegante design g\u00f8r Plus 5011 let at placere i de fleste indretninger og kan nemt matches sammen med andre m\u00f8bler. Plus 5011 har en klassisk stil, men er absolut ikke kedelig med sin elegance og hyggelige stemning. Plus 5011 har [\u2026]",
                "breadcrumb": {
                    "@id": "https://farstrup.dk/produkter/plus-5011/#breadcrumb"
                },
                "inLanguage": "da-DK",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://farstrup.dk/produkter/plus-5011/"]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "https://farstrup.dk/produkter/plus-5011/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Produkter",
                    "item": "https://farstrup.dk/produkter/"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Plus 5011"
                }]
            }]
        }
    </script><!-- / Yoast SEO plugin. -->
    <link rel="https://api.w.org/" href="https://farstrup.dk/wp-json/">
    <link rel="alternate" type="application/json" href="https://farstrup.dk/wp-json/wp/v2/product/2646">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://farstrup.dk/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://farstrup.dk/wp-includes/wlwmanifest.xml">
    <link rel="shortlink" href="https://farstrup.dk/?p=2646">
    <link rel="alternate" type="application/json+oembed" href="https://farstrup.dk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffarstrup.dk%2Fprodukter%2Fplus-5011%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://farstrup.dk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffarstrup.dk%2Fprodukter%2Fplus-5011%2F&amp;format=xml">
    <!--noscript-->
    <!--/noscript-->
    <link rel="apple-touch-icon" href="https://farstrup.dk/wp-content/uploads/cropped-farstrupfavicon-180x180.png">
    <title>Plus 5011 | Farstrup Furniture</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.write = function(text) {
                throw new Error("[AMP-WP] Prevented document.write() call with: " + text);
            };
        });
    </script>
</head>

<body data-rsssl="1" class="product-template-default single single-product postid-2646 theme-oras woocommerce woocommerce-page woocommerce-no-js">
    <?php
    include '../header.php';
    ?>
    <br>
    <br>
    <br>
    <br>
    <?php
    echo ("hello world")
    ?>

    <div class="main-container ">


        <amp-animation id="stick" layout="nodisplay" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay">
            <script type="application/json">
                {
                    "duration": "300ms",
                    "fill": "both",
                    "animations": [{
                            "selector": ".main-nav-wrapper",
                            "keyframes": [{
                                "transform": "translateY(-40px)"
                            }]
                        },
                        {
                            "selector": ".header-background",
                            "keyframes": [{
                                "transform": "translateY(-55px)"
                            }]

                        },
                        {
                            "selector": ".main-nav-logo-inner .logo",
                            "keyframes": [{
                                "transform": "translateY(12px) scale(0.6)"
                            }]
                        }
                    ]
                }
            </script>
        </amp-animation>

        <amp-animation id="unstick" layout="nodisplay" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay">
            <script type="application/json">
                {
                    "duration": "300ms",
                    "fill": "both",
                    "animations": [{
                            "selector": ".main-nav-wrapper",
                            "keyframes": [{
                                "transform": "translateY(0px)"
                            }]
                        },
                        {
                            "selector": ".header-background",
                            "keyframes": [{
                                "transform": "translateY(0px)"
                            }]
                        },
                        {
                            "selector": ".main-nav-logo-inner .logo",
                            "keyframes": [{
                                "transform": "translateY(0) scale(1)"
                            }]
                        }
                    ]
                }
            </script>
        </amp-animation>

        <div class="stick-observer stickobserver">
            <amp-position-observer on="enter:stick.start" layout="nodisplay" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay"></amp-position-observer>
        </div>

        <div class="unstuck-observer stickobserver">
            <amp-position-observer on="enter:unstick.start" layout="nodisplay" class="i-amphtml-layout-nodisplay" hidden="hidden" i-amphtml-layout="nodisplay"></amp-position-observer>
        </div>
        <div class="content-container shop sidebar-enabled sidebar-enabled-left">

            <div class="sidebar sidebar-venstre">
                <div id="woocommerce_product_categories-2" class="sidebar-element widget woocommerce widget_product_categories">
                    <p class="widget-title">Produkter</p>
                    <ul class="product-categories">
                        <li class="cat-item cat-item-78"><a href="https://farstrup.dk/vare-kategori/borde/">Borde</a></li>
                        <li class="cat-item cat-item-284"><a href="https://farstrup.dk/vare-kategori/funktionsstole/">Funktionsstole</a></li>
                        <li class="cat-item cat-item-283"><a href="https://farstrup.dk/vare-kategori/laenestole/">Lænestole</a></li>
                        <li class="cat-item cat-item-286 current-cat"><a href="https://farstrup.dk/vare-kategori/sofaer/">Sofaer</a></li>
                        <li class="cat-item cat-item-287"><a href="https://farstrup.dk/vare-kategori/spisebordsstole/">Spisebordsstole</a></li>
                        <li class="cat-item cat-item-285"><a href="https://farstrup.dk/vare-kategori/stabelstole/">Stabelstole</a></li>
                    </ul>
                </div>

                <div class="sidebar-element bgcolor-">

                </div>

            </div>
            <div class="content">


                <div class="woocommerce-notices-wrapper"></div>
                <div id="product-2646" class="product type-product post-2646 status-publish first instock product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">

                    <div class="product-gallery-container">
                        <div class="product-gallery">
                            <div class="product-main-image">
                                <amp-img src="https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1.png" width="450" height="550" layout="responsive" class="product-thumbnail i-amphtml-layout-responsive i-amphtml-layout-size-defined" data-hero-candidate="" data-hero i-amphtml-ssr i-amphtml-layout="responsive">
                                    <i-amphtml-sizer style="display:block;padding-top:122.2222%"></i-amphtml-sizer>

                                    <img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" loading="lazy" src="https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1.png">
                                </amp-img>
                            </div>
                        </div>

                    </div>
                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title">Plus 5011</h1>
                        <p class="price"></p>
                        <div class="product_meta">



                            <span class="posted_in">Kategori: <a href="https://farstrup.dk/vare-kategori/sofaer/" rel="tag">Sofaer</a></span>


                        </div>
                    </div>


                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                            <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                <a href="#tab-description">
                                    Beskrivelse </a>
                            </li>
                        </ul>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">


                            <div class="row">
                                <div class="text-container the-content-container">
                                    <p>Plus 5011 er en sofastol, der passer til Plus-seriens <a href="/vare-kategori/laenestole/">lænestole</a> og <a href="/vare-kategori/sofaer/">sofaer</a>. Det tidløse og elegante design gør Plus 5011 let at sammensætte med de fleste indretninger og den kan nemt matches sammen med andre <a href="https://farstrup.dk/produkter/">møbler</a>.</p>
                                    <p>Plus 5011 har et fast lavt ryglæn, et klassisk design og en uovertruffen siddekomfort. Sofastolen er udført med kvalitetsmaterialer, og der er mulighed for at vælge mellem et bredt udvalg af kvalitetstekstiler og lædermaterialer i mange forskellige farver, så hvis ønsket er at matche eksisterende møbler er det muligt, men det er også muligt at skabe en stol med et helt personligt udtryk.</p>
                                    <p>5011 sofastolen er en alsidig stol der kan bruges i de fleste rum– den går gennem utallige faglærte hænder, for at man til sidst kan sætte sig i sin helt personlige stol eller stol med personlighed.</p>
                                    <p>Plus 5011 er en klassisk og stilren lænestol, som står flot sammen med <a href="https://farstrup.dk/produkter/sofabord-8300/">sofabordene 3800</a>.</p>
                                    <p>Se hele udvalget af <a href="/vare-kategori/laenestole/">lænestole her</a> og <a href="/vare-kategori/sofaer/">sofaer her</a>.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="extra-text-container the-content-container">
                                    <h3>En verden af plusser</h3>
                                    <p>Plus 5021 er blot en af mange i Plus-serien, som fås lige efter din smag. Længe leve individualisme!</p>
                                    <p>Designet af Hans J. Frydendal, MMD.</p>
                                    <p><strong>Vist på foto</strong><br>
                                        Model: Plus 5011</p>
                                        <?php include "" ?>
                                    <p>Vist med én syning i ryggen på billedet. Fås som standard med to ekstra syninger på tværs.</p>
                                    <p><strong>Vejl. pris fra: 8.900 Kr.</strong></p>
                                    <p>Prisen på møblet varierer afhængig af materialevalg. Der må ydermere påregnes pristillæg for funktioner og tilpasninger.</p>
                                </div>
                            </div>



                        </div>

                        <div class="wp-block-buttons buttons-beside-product">
                            <div class="wp-block-button">
                                <a class="wp-block-button__link" href="https://farstrup.dk/forhandlere/">Find forhandler</a>
                            </div>
                            <div class="wp-block-button">
                                <a class="wp-block-button__link" href="#mere-info">Mere info</a>
                            </div>
                        </div>
                    </div>

                    <div class="product-image-container first-child">
                        <amp-img src="https://farstrup.dk/wp-content/uploads/Plus_5011_450x550_web.jpg" width="450" height="550" layout="intrinsic" class="product-image i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" i-amphtml-layout="intrinsic">
                            <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer>
                        </amp-img>

                    </div>
                    <div class="product-image-container ">
                        <amp-img src="https://farstrup.dk/wp-content/uploads/Plus_5011_2_450x550_web.jpg" width="450" height="550" layout="intrinsic" class="product-image i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" i-amphtml-layout="intrinsic">
                            <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer>
                        </amp-img>

                    </div>

                    <div class="mere-info-wrapper">
                        <div class="mere-info-link" id="mere-info"></div>
                        <h2>Specifikationer</h2>
                        <div class="column">
                            <p><b>Generelt</b><br>
                                Plus-serien findes et i utal af forskellige designs og muligheder. Længe leve individualisme!</p>
                            <p><b>Vedligeholdelse</b><br>
                                Afhængigt af hvilket tekstil eller lædermateriale, som du ønsker på stolen er der forskellige ting du kan gøre. Spørg gerne os eller en af vores forhandlere.</p>
                        </div>
                        <div class="column">
                            <p><strong>Mål m.m.</strong><br>
                                Bredde: 70 cm<br>
                                Dybde: 73 cm<br>
                                Højde: 88 cm</p>
                            <p>Siddedybde, siddehøjde med mere kan justeres efter behov. Kontakt en af vores forhandlere og hør mere om mulighederne.</p>
                            <h3>Betræk</h3>
                            <p>Plus 5011 fås i et bredt udvalg i læder og kvalitetstektiler.<br>
                                Vælg kvalitetstekstil fra danske Gabriel eller Kvadrat.<br>
                                Er du mere til læder, kan dette naturligvis også lade sig gøre. Du kan få din Plus 5011 med ægte læder fra danske Sørensen Leather.</p>
                            <p>
                                <amp-img class="wp-image-4408 alignnone amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" src="https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1.png" alt="" width="229" height="229" srcset="https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1.png 400w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-180x180.png 180w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-300x300.png 300w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-150x150.png 150w" sizes="(max-width: 229px) 100vw, 229px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                    <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjIyOSIgd2lkdGg9IjIyOSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" src="https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1.png" alt="" width="229" height="229" srcset="https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1.png 400w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-180x180.png 180w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-300x300.png 300w, https://farstrup.dk/wp-content/uploads/haenger_laeder-400x400-1-150x150.png 150w" sizes="(max-width: 229px) 100vw, 229px"></noscript>
                                </amp-img>
                                <amp-img class="wp-image-4424 alignnone amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" src="https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1.png" alt="" width="204" height="204" srcset="https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1.png 400w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-180x180.png 180w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-300x300.png 300w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-150x150.png 150w" sizes="(max-width: 204px) 100vw, 204px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                    <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjIwNCIgd2lkdGg9IjIwNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" src="https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1.png" alt="" width="204" height="204" srcset="https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1.png 400w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-180x180.png 180w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-300x300.png 300w, https://farstrup.dk/wp-content/uploads/standard-medley-400x400-1-150x150.png 150w" sizes="(max-width: 204px) 100vw, 204px"></noscript>
                                </amp-img>
                            </p>
                            <p>Er du i tvivl om hvilket betræk du skal vælge på din stol. Så besøg din lokale forhandler. Her vil du kunne se – og ikke mindst mærke – alle de forskellige tekstiler og lædertyper.<br>
                                <a href="https://farstrup.dk/forhandlere/">Klik her for at finde en forhandler nær dig.</a>
                            </p>
                            <h3>Stel</h3>
                            <p>Plus 5011 fås med stel i massivt ege- eller bøgetræ.<br>
                                Begge træsorter tilbydes i forskellige bejdseformer.</p>
                            <p><strong>Bøg:</strong> Ubehandlet, natur, lysnet, hvidolieret, kirsebær, lys brun, teak, maghogni og sortbejdset.</p>
                            <p><strong>Eg:</strong> Ubehandlet, natur, lysnet, hvidolieret, lys brun og sortbejdset.</p>
                            <p>Vi yder 10 års garanti på træstellet.</p>
                            <p>
                                <amp-img class="alignnone size-medium wp-image-5148 amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" src="https://farstrup.dk/wp-content/uploads/traeproever-300x300.png" alt="" width="300" height="300" srcset="https://farstrup.dk/wp-content/uploads/traeproever-300x300.png 300w, https://farstrup.dk/wp-content/uploads/traeproever-180x180.png 180w, https://farstrup.dk/wp-content/uploads/traeproever-150x150.png 150w, https://farstrup.dk/wp-content/uploads/traeproever.png 550w" sizes="(max-width: 300px) 100vw, 300px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                    <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjMwMCIgd2lkdGg9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img loading="lazy" src="https://farstrup.dk/wp-content/uploads/traeproever-300x300.png" alt="" width="300" height="300" srcset="https://farstrup.dk/wp-content/uploads/traeproever-300x300.png 300w, https://farstrup.dk/wp-content/uploads/traeproever-180x180.png 180w, https://farstrup.dk/wp-content/uploads/traeproever-150x150.png 150w, https://farstrup.dk/wp-content/uploads/traeproever.png 550w" sizes="(max-width: 300px) 100vw, 300px"></noscript>
                                </amp-img>
                            </p>
                        </div>
                    </div>


                    <section class="related products">

                        <h2>Relaterede varer</h2>

                        <div class="products columns-4">


                            <div class="product type-product post-2609 status-publish first instock product_cat-laenestole product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                                <a href="https://farstrup.dk/produkter/senator-5371/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <amp-img width="426" height="550" src="https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-426x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-e1638435735335.jpg 426w, https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-e1638435735335-233x300.jpg 233w" sizes="(max-width: 426px) 100vw, 426px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                        <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQyNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="426" height="550" src="https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-426x550.jpg" alt="" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-e1638435735335.jpg 426w, https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-e1638435735335-233x300.jpg 233w" sizes="(max-width: 426px) 100vw, 426px"></noscript>
                                    </amp-img>
                                    <div class="product-content">
                                        <p>Senator 5371</p>
                                    </div>

                                </a>
                            </div>


                            <div class="product type-product post-2654 status-publish instock product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                                <a href="https://farstrup.dk/produkter/scala-5413/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Scala_5413-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Scala 5413, sort 3. personers sofa i læder med stel i bøgetræ" srcset="https://farstrup.dk/wp-content/uploads/Scala_5413.jpg 450w, https://farstrup.dk/wp-content/uploads/Scala_5413-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                        <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Scala_5413-450x550.jpg" alt="Scala 5413, sort 3. personers sofa i læder med stel i bøgetræ" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Scala_5413.jpg 450w, https://farstrup.dk/wp-content/uploads/Scala_5413-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                                    </amp-img>
                                    <div class="product-content">
                                        <p>Scala 5413</p>
                                    </div>

                                </a>
                            </div>


                            <div class="product type-product post-2621 status-publish instock product_cat-laenestole product_cat-spisebordsstole product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                                <a href="https://farstrup.dk/produkter/armstol-182/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Armstol 182, tremmestol med armlæn i bøg, med hynde i skind" srcset="https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469.jpg 450w, https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                        <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469-450x550.jpg" alt="Armstol 182, tremmestol med armlæn i bøg, med hynde i skind" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469.jpg 450w, https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                                    </amp-img>
                                    <div class="product-content">
                                        <p>Armstol 182</p>
                                    </div>

                                </a>
                            </div>


                            <div class="product type-product post-2623 status-publish last instock product_cat-laenestole product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                                <a href="https://farstrup.dk/produkter/gyngestol-183/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Tremmegyngetol 183 i sort med hynde" srcset="https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed.jpg 450w, https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                        <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed-450x550.jpg" alt="Tremmegyngetol 183 i sort med hynde" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed.jpg 450w, https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                                    </amp-img>
                                    <div class="product-content">
                                        <p>Gyngestol 183</p>
                                    </div>

                                </a>
                            </div>


                        </div>

                    </section>

                </div>




            </div>
        </div>

     
    </script>

        <?php
        include "../../case-1-semester-eksamen-marni-f-joensen/footer.php"
        ?>


    </div>
</body>

</html>

<!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/

Object Caching 134/714 objects using disk

Served from: farstrup.dk @ 2021-12-03 23:19:27 by W3 Total Cache
-->