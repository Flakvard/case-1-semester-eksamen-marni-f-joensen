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
    <meta name="description" content="Find din nye sofa her | Vi har i mere end 100 år bygget danske kvalitetsmøbler - det er din garanti for en sofa som du sidder godt i.">
    <meta property="og:locale" content="da_DK">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Sofaer i dansk design | Håndbygget på vores danske møbelfabrik">
    <meta property="og:description" content="Find din nye sofa her | Vi har i mere end 100 år bygget danske kvalitetsmøbler - det er din garanti for en sofa som du sidder godt i.">
    <meta property="og:url" content="https://farstrup.dk/vare-kategori/sofaer/">
    <meta property="og:site_name" content="Farstrup Furniture">
    <meta name="twitter:card" content="summary_large_image">
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

        h1,
        h2 {
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
        h2 {
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
        p {
            margin-bottom: 20px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        h1:last-child,
        h2:last-child,
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

        .jumbotron-wrapper {
            position: relative;
            max-width: 100vw;
            width: 100vw;
            overflow: hidden
        }

        @media screen and (min-width: 768px) {
            .jumbotron-wrapper {
                left: calc(-1rem + 16px)
            }
        }

        @media only screen and (min-width: 1500px) {
            .jumbotron-wrapper {
                left: calc(-50vw + 50%)
            }
        }

        .jumbotron-background-image {
            height: 100%;
            z-index: -1
        }

        .jumbotron-background-image>* {
            object-fit: cover
        }

        .jumbotron-background-image-mobile {
            display: none
        }

        .jumbotron-image-container {
            width: 100vw;
            max-width: 100vw;
            z-index: -1;
            pointer-events: none;
            position: relative
        }

        amp-img[layout="fill"]>* {
            object-fit: cover
        }

        .jumbotron-wrapper-slider {
            position: relative;
            top: 103px;
            margin-bottom: 103px
        }

        @media screen and (max-width: 930px) {
            .jumbotron-wrapper-slider {
                top: 0;
                margin-bottom: 0
            }
        }

        body:not(.home) .jumbotron-slide {
            opacity: 1
        }

        .jumbotron-slide {
            position: relative;
            max-width: 100vw;
            opacity: 1;
            pointer-events: initial;
            transition: opacity 600ms ease-in-out;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
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
            body:not(.home) .jumbotron-wrapper:not(.jumbotron-wrapper-slider) .jumbotron-background-image {
                display: none
            }

            body:not(.home) .jumbotron-wrapper {
                height: auto
            }

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
            .jumbotron-background-image-mobile {
                display: block
            }

            .jumbotron-background-image-mobile amp-img {
                object-fit: cover
            }

            .jumbotron-background-image:not(.jumbotron-background-image-mobile) {
                display: none
            }

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

        .woocommerce-products-header {
            max-width: 1080px;
            margin: 20px auto 0
        }

        .woocommerce-result-count {
            display: none
        }

        .woocommerce-ordering {
            display: none
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

        @media screen and (max-width: 768px) {
            .sidebar-element.widget_product_categories:not(.overlay-cell):not(.video-cell):not(.text-align-left) {
                align-items: flex-start;
                padding: 20px 0 0 0;
                background: none
            }
        }

        body.tax-product_cat .products {
            display: flex;
            flex-wrap: wrap;
            padding: 0px 20px
        }

        body.tax-product_cat .products .product {
            width: calc(100% / 3 - 34px);
            padding-right: 50px;
            box-sizing: content-box
        }

        body.tax-product_cat .products .product:nth-child(3n) {
            padding-right: 0
        }

        body.tax-product_cat .products .product .product-content {
            max-width: 400px;
            margin-bottom: 60px
        }

        body.tax-product_cat .products .product .woocommerce-loop-product__link amp-img>* {
            transition: transform 350ms ease-in-out
        }

        body.tax-product_cat .products .product .woocommerce-loop-product__link p:first-child {
            font-size: 24px;
            position: relative;
            left: 20px;
            margin: 10px 0 40px
        }

        body.tax-product_cat .products .product .woocommerce-loop-product__link p:first-child::before,
        body.tax-product_cat .products .product .woocommerce-loop-product__link p:first-child::after {
            content: "";
            background: #707070;
            position: absolute
        }

        body.tax-product_cat .products .product .woocommerce-loop-product__link p:first-child::before {
            height: calc(100% + 10px);
            width: 1px;
            top: -14px;
            left: -20px
        }

        body.tax-product_cat .products .product .woocommerce-loop-product__link p:first-child::after {
            height: 1px;
            width: 200px;
            left: 0;
            bottom: -20px
        }

        body.tax-product_cat .products .product:hover .woocommerce-loop-product__link amp-img>* {
            transform: scale(1.1)
        }

        @media screen and (max-width: 1000px) {
            body.tax-product_cat .products .product {
                width: calc(50% - 15px);
                padding-right: 30px
            }

            body.tax-product_cat .products .product:nth-child(3n) {
                padding-right: 30px
            }

            body.tax-product_cat .products .product:nth-child(even) {
                padding-right: 0
            }
        }

        @media screen and (max-width: 768px) {
            body.tax-product_cat .products .product {
                width: 100%;
                padding-right: 0;
                display: flex;
                align-items: center
            }
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

        .large-lined-title {
            font-weight: lighter;
            position: relative;
            display: inline-block
        }

        .large-lined-title {
            font-size: 50px;
            left: 50%;
            transform: translateX(-50%)
        }

        .large-lined-title::before {
            content: "";
            background: #707070;
            height: calc(100% + 15px);
            width: 1px;
            position: absolute;
            top: -22px;
            left: -35px
        }

        @media screen and (max-width: 900px) {
            .large-lined-title {
                font-size: 30px
            }
        }

        .jumbotron-slide.jumbotron-billede:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #fff;
            opacity: .4
        }

        body:not(.home).tax-product_cat .content-container {
            margin-top: 0px;
            background-color: #e6e6e5
        }

        body:not(.home).tax-product_cat .content-container h1 {
            margin-top: 20px;
            margin-bottom: 80px
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

        .footer-row-container-alt {
            margin: 60px 0px;
            text-align: center;
            padding: 0px 60px
        }

        .footer-row-container-alt h1,
        .footer-row-container-alt h2 {
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: 400
        }

        .footer-row-container-alt h1:not(:first-child),
        .footer-row-container-alt h2:not(:first-child) {
            margin-top: 40px
        }

        .footer-row-container-alt p {
            font-size: 14px;
            margin-bottom: 20px
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

        .main-nav>div ul.menu li.menu-kollektion li.current-menu-item a {
            color: #000
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
        h2 {
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
        p {
            margin-bottom: 20px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        h1:last-child,
        h2:last-child,
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

        .jumbotron-wrapper {
            position: relative;
            max-width: 100vw;
            width: 100vw;
            overflow: hidden
        }

        @media screen and (min-width: 768px) {
            .jumbotron-wrapper {
                left: calc(-1rem + 16px)
            }
        }

        @media only screen and (min-width: 1500px) {
            .jumbotron-wrapper {
                left: calc(-50vw + 50%)
            }
        }

        .jumbotron-background-image {
            height: 100%;
            z-index: -1
        }

        .jumbotron-background-image>* {
            object-fit: cover
        }

        .jumbotron-background-image-mobile {
            display: none
        }

        .jumbotron-image-container {
            width: 100vw;
            max-width: 100vw;
            z-index: -1;
            pointer-events: none;
            position: relative
        }

        amp-img[layout="fill"]>* {
            object-fit: cover
        }

        .jumbotron-wrapper-slider {
            position: relative;
            top: 103px;
            margin-bottom: 103px
        }

        @media screen and (max-width: 930px) {
            .jumbotron-wrapper-slider {
                top: 0;
                margin-bottom: 0
            }
        }

        body:not(.home) .jumbotron-slide {
            opacity: 1
        }

        .jumbotron-slide {
            position: relative;
            max-width: 100vw;
            opacity: 1;
            pointer-events: initial;
            transition: opacity 600ms ease-in-out;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
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
            body:not(.home) .jumbotron-wrapper:not(.jumbotron-wrapper-slider) .jumbotron-background-image {
                display: none
            }

            body:not(.home) .jumbotron-wrapper {
                height: auto
            }

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
            .jumbotron-background-image-mobile {
                display: block
            }

            .jumbotron-background-image-mobile amp-img {
                object-fit: cover
            }

            .jumbotron-background-image:not(.jumbotron-background-image-mobile) {
                display: none
            }

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

        .woocommerce-products-header {
            max-width: 1080px;
            margin: 20px auto 0
        }

        .woocommerce-result-count {
            display: none
        }

        .woocommerce-ordering {
            display: none
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

        @media screen and (max-width: 768px) {
            .sidebar-element.widget_product_categories:not(.overlay-cell):not(.video-cell):not(.text-align-left) {
                align-items: flex-start;
                padding: 20px 0 0 0;
                background: none
            }
        }

        body.tax-product_cat .products {
            display: flex;
            flex-wrap: wrap;
            padding: 0px 20px
        }

        body.tax-product_cat .products .product {
            width: calc(100% / 3 - 34px);
            padding-right: 50px;
            box-sizing: content-box
        }

        body.tax-product_cat .products .product:nth-child(3n) {
            padding-right: 0
        }

        body.tax-product_cat .products .product .product-content {
            max-width: 400px;
            margin-bottom: 60px
        }

        body.tax-product_cat .products .product .woocommerce-loop-product__link amp-img>* {
            transition: transform 350ms ease-in-out
        }

        body.tax-product_cat .products .product .woocommerce-loop-product__link p:first-child {
            font-size: 24px;
            position: relative;
            left: 20px;
            margin: 10px 0 40px
        }

        body.tax-product_cat .products .product .woocommerce-loop-product__link p:first-child::before,
        body.tax-product_cat .products .product .woocommerce-loop-product__link p:first-child::after {
            content: "";
            background: #707070;
            position: absolute
        }

        body.tax-product_cat .products .product .woocommerce-loop-product__link p:first-child::before {
            height: calc(100% + 10px);
            width: 1px;
            top: -14px;
            left: -20px
        }

        body.tax-product_cat .products .product .woocommerce-loop-product__link p:first-child::after {
            height: 1px;
            width: 200px;
            left: 0;
            bottom: -20px
        }

        body.tax-product_cat .products .product:hover .woocommerce-loop-product__link amp-img>* {
            transform: scale(1.1)
        }

        @media screen and (max-width: 1000px) {
            body.tax-product_cat .products .product {
                width: calc(50% - 15px);
                padding-right: 30px
            }

            body.tax-product_cat .products .product:nth-child(3n) {
                padding-right: 30px
            }

            body.tax-product_cat .products .product:nth-child(even) {
                padding-right: 0
            }
        }

        @media screen and (max-width: 768px) {
            body.tax-product_cat .products .product {
                width: 100%;
                padding-right: 0;
                display: flex;
                align-items: center
            }
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

        .large-lined-title {
            font-weight: lighter;
            position: relative;
            display: inline-block
        }

        .large-lined-title {
            font-size: 50px;
            left: 50%;
            transform: translateX(-50%)
        }

        .large-lined-title::before {
            content: "";
            background: #707070;
            height: calc(100% + 15px);
            width: 1px;
            position: absolute;
            top: -22px;
            left: -35px
        }

        @media screen and (max-width: 900px) {
            .large-lined-title {
                font-size: 30px
            }
        }

        .jumbotron-slide.jumbotron-billede:after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #fff;
            opacity: .4
        }

        body:not(.home).tax-product_cat .content-container {
            margin-top: 0px;
            background-color: #e6e6e5
        }

        body:not(.home).tax-product_cat .content-container h1 {
            margin-top: 20px;
            margin-bottom: 80px
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

        .footer-row-container-alt {
            margin: 60px 0px;
            text-align: center;
            padding: 0px 60px
        }

        .footer-row-container-alt h1,
        .footer-row-container-alt h2 {
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: 400
        }

        .footer-row-container-alt h1:not(:first-child),
        .footer-row-container-alt h2:not(:first-child) {
            margin-top: 40px
        }

        .footer-row-container-alt p {
            font-size: 14px;
            margin-bottom: 20px
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

        .main-nav>div ul.menu li.menu-kollektion li.current-menu-item a {
            color: #000
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
        .gform_legacy_markup_wrapper h2 {
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

        .gform_legacy_markup_wrapper select {
            line-height: 1.5
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

        .gform_legacy_markup_wrapper select {
            font-size: inherit;
            font-family: inherit;
            letter-spacing: normal
        }

        .gform_legacy_markup_wrapper select option {
            padding: 2px;
            display: block
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

        .gform_legacy_markup_wrapper input.medium,
        .gform_legacy_markup_wrapper select.medium {
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

            .gform_legacy_markup_wrapper .top_label input.medium,
            .gform_legacy_markup_wrapper .top_label select.medium {
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

        .gform_legacy_markup_wrapper.gf_browser_chrome select {
            padding: 2px 0 2px 3px
        }

        .gform_legacy_markup_wrapper.gf_browser_chrome ul li:after,
        .gform_legacy_markup_wrapper.gf_browser_chrome ul li:before {
            content: none
        }

        .gform_legacy_markup_wrapper.gf_browser_chrome ul.gform_fields li.gfield select {
            margin-left: 1px
        }

        .gform_legacy_markup_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio] {
            margin-left: 1px
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_):not(#_) .gform_legacy_markup_wrapper.gf_browser_chrome select[multiple=multiple] {
            height: auto
        }

        :root:not(#_):not(#_):not(#_):not(#_):not(#_) .amp-wp-bf126db {
            visibility: hidden;
            position: absolute;
            left: -9999px;
            overflow: hidden
        }

        /*# sourceURL=amp-custom.css */
    </style>
    <link rel="alternate" hreflang="da" href="https://farstrup.dk/vare-kategori/sofaer/">
    <link rel="alternate" hreflang="en" href="https://farstrup.dk/en/vare-kategori/sofas/">
    <link rel="alternate" hreflang="nl" href="https://farstrup.dk/nl/product-categorie/zitgroepen/">
    <link rel="alternate" hreflang="de" href="https://farstrup.dk/de/produkt-kategorie/sofas-de/"><!-- This site is optimized with the Yoast SEO plugin v17.5 - https://yoast.com/wordpress/plugins/seo/ -->
    <link rel="canonical" href="https://farstrup.dk/vare-kategori/sofaer/">
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
                "@type": "CollectionPage",
                "@id": "https://farstrup.dk/vare-kategori/sofaer/#webpage",
                "url": "https://farstrup.dk/vare-kategori/sofaer/",
                "name": "Sofaer i dansk design | H\u00e5ndbygget p\u00e5 vores danske m\u00f8belfabrik",
                "isPartOf": {
                    "@id": "https://farstrup.dk/#website"
                },
                "description": "Find din nye sofa her | Vi har i mere end 100 \u00e5r bygget danske kvalitetsm\u00f8bler - det er din garanti for en sofa som du sidder godt i.",
                "breadcrumb": {
                    "@id": "https://farstrup.dk/vare-kategori/sofaer/#breadcrumb"
                },
                "inLanguage": "da-DK",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://farstrup.dk/vare-kategori/sofaer/"]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "https://farstrup.dk/vare-kategori/sofaer/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Sofaer"
                }]
            }]
        }
    </script><!-- / Yoast SEO plugin. -->
    <link rel="alternate" type="application/rss+xml" title="Farstrup Furniture » Sofaer Kategori Feed" href="https://farstrup.dk/vare-kategori/sofaer/feed/">
    <link rel="https://api.w.org/" href="https://farstrup.dk/wp-json/">
    <link rel="alternate" type="application/json" href="https://farstrup.dk/wp-json/wp/v2/product_cat/286">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://farstrup.dk/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://farstrup.dk/wp-includes/wlwmanifest.xml">
    <!--noscript-->
    <!--/noscript-->
    <link rel="apple-touch-icon" href="https://farstrup.dk/wp-content/uploads/cropped-farstrupfavicon-180x180.png">

    
    <title>Sofaer i dansk design | Håndbygget på vores danske møbelfabrik</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.write = function(text) {
                throw new Error("[AMP-WP] Prevented document.write() call with: " + text);
            };
        });
    </script>
</head>

<body data-rsssl="1" class="archive tax-product_cat term-sofaer term-286 theme-oras woocommerce woocommerce-page woocommerce-no-js">
    <?php
    include '../../header.php';
    ?>
    <br>
    <br>
    <br>
    <br>
    <?php
    echo ("hello world")
    ?>
    <div class="main-container ">


        

        <div class="mobil-header-wrapper ">



            <div class="mobil-header-content">

                <div class="mobil-header-info">


                    <div class="mobil-header-logo">
                        <div class="mobil-header-logo-inner" id="mainlogo">
                            <a href="https://farstrup.dk">
                                <amp-img src="https://farstrup.dk/wp-content/uploads/logo-2-300x60.png" width="200" height="40" layout="fixed" class="logo i-amphtml-layout-fixed i-amphtml-layout-size-defined" alt="" style="width:200px;height:40px" i-amphtml-layout="fixed"></amp-img>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mobil-header-btn">

                <button on="tap:mobilmenu.open">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="menu">Menu</span>
                </button>

            </div>
        </div>


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
        <div class="jumbotron-wrapper jumbotron-wrapper-slider jumbotron-wrapper-slider-billede">
            <div id="tapSlide" class="jumbotron-slide jumbotron-billede">
                <div class="jumbotron-image-container">
                    <amp-img src="https://farstrup.dk/wp-content/uploads/Farstrup_Plus_Testrender_01_nyeemaal.jpg" class="jumbotron-background-image i-amphtml-layout-responsive i-amphtml-layout-size-defined" width="1500" height="615" layout="responsive" alt="" data-amp-auto-lightbox-disable i-amphtml-layout="responsive">
                        <i-amphtml-sizer style="display:block;padding-top:41%"></i-amphtml-sizer>
                    </amp-img>
                    <amp-img src="https://farstrup.dk/wp-content/uploads/Farstrup_Plus_Testrender_02_MOBIL.jpg" class="jumbotron-background-image jumbotron-background-image-mobile i-amphtml-layout-responsive i-amphtml-layout-size-defined" width="700" height="800" layout="responsive" alt="sofa mobil banner" data-amp-auto-lightbox-disable i-amphtml-layout="responsive">
                        <i-amphtml-sizer style="display:block;padding-top:114.2857%"></i-amphtml-sizer>
                    </amp-img>
                </div>
            </div>
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
                <header class="woocommerce-products-header">
                    <h1 class="woocommerce-products-header__title page-title large-lined-title">Sofaer</h1>

                </header>
                <div class="woocommerce-notices-wrapper"></div>
                <p class="woocommerce-result-count">
                    Viser alle 12 resultater</p>
                <form class="woocommerce-ordering" method="get" action="//farstrup.dk/vare-kategori/sofaer/" target="_top">
                    <select name="orderby" class="orderby" aria-label="Webshop ordre">
                        <option value="menu_order" selected>Standardsortering</option>
                        <option value="popularity">Sortér efter popularitet</option>
                        <option value="date">Sortér efter nyeste</option>
                        <option value="price">Sortér efter pris: lav til høj</option>
                        <option value="price-desc">Sortér efter pris: høj til lav</option>
                    </select>
                    <input type="hidden" name="paged" value="1">
                </form>

<!--
Her starter sektinon hvor vi kan se alle varerne

-->
                <div class="products columns-3">
                    <div class="product type-product post-2646 status-publish first instock product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1-450x550.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1.png 450w, https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1-245x300.png 245w" sizes="(max-width: 450px) 100vw, 450px" data-hero-candidate="" layout="intrinsic" disable-inline-width="" data-hero i-amphtml-ssr i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><img class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" loading="lazy" alt="" src="https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1-450x550.png" srcset="https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1.png 450w, https://farstrup.dk/wp-content/uploads/Plus_5011_SetupB_Side_450x550_compressed-1-245x300.png 245w" sizes="(max-width: 450px) 100vw, 450px">
                            </amp-img>
                            <div class="product-content">
                                <p>Plus 5011</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2648 status-publish instock product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Plus_5021-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Plus 5021, mørk 2 personers sofa med stel i egetræ" srcset="https://farstrup.dk/wp-content/uploads/Plus_5021.jpg 450w, https://farstrup.dk/wp-content/uploads/Plus_5021-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Plus_5021-450x550.jpg" alt="Plus 5021, mørk 2 personers sofa med stel i egetræ" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Plus_5021.jpg 450w, https://farstrup.dk/wp-content/uploads/Plus_5021-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Plus 5021</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2650 status-publish last instock product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Plus_5031_SetupB_Detail_450x550_compressed-450x550.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://farstrup.dk/wp-content/uploads/Plus_5031_SetupB_Detail_450x550_compressed.png 450w, https://farstrup.dk/wp-content/uploads/Plus_5031_SetupB_Detail_450x550_compressed-245x300.png 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Plus_5031_SetupB_Detail_450x550_compressed-450x550.png" alt="" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Plus_5031_SetupB_Detail_450x550_compressed.png 450w, https://farstrup.dk/wp-content/uploads/Plus_5031_SetupB_Detail_450x550_compressed-245x300.png 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Plus 5031</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2652 status-publish first instock product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Scala_5412-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Scala 5412, Grå 2. personers sofa med stel i bøgetræ" srcset="https://farstrup.dk/wp-content/uploads/Scala_5412.jpg 450w, https://farstrup.dk/wp-content/uploads/Scala_5412-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Scala_5412-450x550.jpg" alt="Scala 5412, Grå 2. personers sofa med stel i bøgetræ" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Scala_5412.jpg 450w, https://farstrup.dk/wp-content/uploads/Scala_5412-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Scala 5412</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2654 status-publish instock product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Scala_5413-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Scala 5413, sort 3. personers sofa i læder med stel i bøgetræ" srcset="https://farstrup.dk/wp-content/uploads/Scala_5413.jpg 450w, https://farstrup.dk/wp-content/uploads/Scala_5413-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Scala_5413-450x550.jpg" alt="Scala 5413, sort 3. personers sofa i læder med stel i bøgetræ" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Scala_5413.jpg 450w, https://farstrup.dk/wp-content/uploads/Scala_5413-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Scala 5413</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2607 status-publish last instock product_cat-laenestole product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/5411_compressed-e1611755330211-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Scala 5411, sofastol i sort læder, står i lyse omgivelser" srcset="https://farstrup.dk/wp-content/uploads/5411_compressed-e1611755330211.jpg 450w, https://farstrup.dk/wp-content/uploads/5411_compressed-e1611755330211-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/5411_compressed-e1611755330211-450x550.jpg" alt="Scala 5411, sofastol i sort læder, står i lyse omgivelser" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/5411_compressed-e1611755330211.jpg 450w, https://farstrup.dk/wp-content/uploads/5411_compressed-e1611755330211-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Scala 5411</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2644 status-publish first instock product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Senator_5373_compressed-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Senator 5373, brun 3. personers sofa i læder med bøgetræsstel" layout="intrinsic" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Senator_5373_compressed-450x550.jpg" alt="Senator 5373, brun 3. personers sofa i læder med bøgetræsstel" loading="lazy"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Senator 5373</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2609 status-publish instock product_cat-laenestole product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="426" height="550" src="https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-426x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="" srcset="https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-e1638435735335.jpg 426w, https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-e1638435735335-233x300.jpg 233w" sizes="(max-width: 426px) 100vw, 426px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQyNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="426" height="550" src="https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-426x550.jpg" alt="" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-e1638435735335.jpg 426w, https://farstrup.dk/wp-content/uploads/Senator_5371_miljo_426x923-e1638435735335-233x300.jpg 233w" sizes="(max-width: 426px) 100vw, 426px"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Senator 5371</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2642 status-publish last instock product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Senator_5372-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Senator 5373, brun 2. personers sofa i læder med bøgetræsstel" srcset="https://farstrup.dk/wp-content/uploads/Senator_5372.jpg 450w, https://farstrup.dk/wp-content/uploads/Senator_5372-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Senator_5372-450x550.jpg" alt="Senator 5373, brun 2. personers sofa i læder med bøgetræsstel" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Senator_5372.jpg 450w, https://farstrup.dk/wp-content/uploads/Senator_5372-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Senator 5372</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2656 status-publish first instock product_cat-funktionsstole product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Fastoflex_5463-e1612257019153-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Fastoflex 5463 XXL, stol i lyst skind med stel i bøgetræ, stående i lyst Miljø" srcset="https://farstrup.dk/wp-content/uploads/Fastoflex_5463-e1612257019153.jpg 450w, https://farstrup.dk/wp-content/uploads/Fastoflex_5463-e1612257019153-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Fastoflex_5463-e1612257019153-450x550.jpg" alt="Fastoflex 5463 XXL, stol i lyst skind med stel i bøgetræ, stående i lyst Miljø" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Fastoflex_5463-e1612257019153.jpg 450w, https://farstrup.dk/wp-content/uploads/Fastoflex_5463-e1612257019153-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Fastoflex 5463</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2621 status-publish instock product_cat-laenestole product_cat-spisebordsstole product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Armstol 182, tremmestol med armlæn i bøg, med hynde i skind" srcset="https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469.jpg 450w, https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469-450x550.jpg" alt="Armstol 182, tremmestol med armlæn i bøg, med hynde i skind" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469.jpg 450w, https://farstrup.dk/wp-content/uploads/pindestol_182_compressed-e1611583318469-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Armstol 182</p>
                            </div>

                        </a>
                    </div>
                    <div class="product type-product post-2623 status-publish last instock product_cat-laenestole product_cat-sofaer has-post-thumbnail shipping-taxable product-type-simple">
                        <a href="../../produkter/plus-5011.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                            <amp-img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed-450x550.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail amp-wp-enforced-sizes i-amphtml-layout-intrinsic i-amphtml-layout-size-defined" alt="Tremmegyngetol 183 i sort med hynde" srcset="https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed.jpg 450w, https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px" layout="intrinsic" disable-inline-width="" i-amphtml-layout="intrinsic">
                                <i-amphtml-sizer class="i-amphtml-sizer"><img alt="" aria-hidden="true" class="i-amphtml-intrinsic-sizer" role="presentation" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjU1MCIgd2lkdGg9IjQ1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="></i-amphtml-sizer><noscript><img width="450" height="550" src="https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed-450x550.jpg" alt="Tremmegyngetol 183 i sort med hynde" loading="lazy" srcset="https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed.jpg 450w, https://farstrup.dk/wp-content/uploads/Gyngestol_183_1_compressed-245x300.jpg 245w" sizes="(max-width: 450px) 100vw, 450px"></noscript>
                            </amp-img>
                            <div class="product-content">
                                <p>Gyngestol 183</p>
                            </div>

                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="call-form-wrapper">
            <amp-script width="320" height="270" script="localStatus" class="i-amphtml-layout-fixed i-amphtml-layout-size-defined" style="width:320px;height:270px" i-amphtml-layout="fixed">
                <div class="call-form" id="callFormNotification">
                    <div role="button" tabindex="1" id="closeStatus" class="close-button">x</div>
                    <div class="title-wrapper">
                        <svg class="call-form-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewbox="0 0 75.639 72.852">
                            <path id="Icon_feather-phone-call" data-name="Icon feather-phone-call" d="M48.057,14.821a17.013,17.013,0,0,1,13.7,13.155M48.057,1.5c14.5,1.546,25.953,12.525,27.583,26.442M72.17,54.518v9.991a6.541,6.541,0,0,1-2.248,4.935,7.122,7.122,0,0,1-5.316,1.726A70.526,70.526,0,0,1,34.664,60.945,66.365,66.365,0,0,1,13.847,40.964,64.222,64.222,0,0,1,3.2,12.09,6.5,6.5,0,0,1,4.982,7,7.074,7.074,0,0,1,10.1,4.83H20.509a6.857,6.857,0,0,1,6.939,5.728,41.361,41.361,0,0,0,2.429,9.358,6.468,6.468,0,0,1-1.561,7.027l-4.406,4.229A54.452,54.452,0,0,0,44.726,51.154l4.406-4.229a7.151,7.151,0,0,1,7.321-1.5A46.081,46.081,0,0,0,66.2,47.757,6.747,6.747,0,0,1,72.17,54.518Z" transform="translate(-1.664 0.15)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path>
                        </svg>
                        <p class="call-form-title">Skal vi ringe dig op?</p>
                    </div>

                    <div class="gf_browser_chrome gform_wrapper gform_legacy_markup_wrapper" id="gform_wrapper_1">
                        <form method="post" enctype="multipart/form-data" id="gform_1" target="_top" action-xhr="https://farstrup.dk/wp-admin/admin-ajax.php?action=gravity_form_submission">
                            <div class="gform_body gform-body">
                                <ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
                                    <li id="field_1_2" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label screen-reader-text" for="input_1_2">Navn<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                        <div class="ginput_container ginput_container_text"><input name="input_2" id="input_1_2" type="text" value="" class="medium" placeholder="Navn" required="true" aria-invalid="false"> </div>
                                    </li>
                                    <li id="field_1_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label screen-reader-text" for="input_1_3">Nummer<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                        <div class="ginput_container ginput_container_text"><input name="input_3" id="input_1_3" type="text" value="" class="medium" placeholder="Nummer" required="true" aria-invalid="false"> </div>
                                    </li>
                                    <li id="field_1_4" class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_4">Email</label>
                                        <div class="ginput_container"><input on="change:AMP.setState({gravityForm_1_1: {field_4: event.value}})" name="input_4" id="input_1_4" type="text" value=""></div>
                                        <div class="gfield_description" id="gfield_description_1_4">Dette felt er til validering og bør ikke ændres.</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Send">
                                <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
                                <input type="hidden" class="gform_hidden" name="gform_submit" value="1">

                                <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsImNjNDYwZDAyNGFmNjI3OGFmOTVjZDc1NWI0YWU1MWFjIl0=">
                                <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
                                <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
                                <input type="hidden" name="gform_field_values" value="">

                            </div>
                            <div verify-error>
                                <template type="amp-mustache">
                                    There is a mistake in the form!
                                    {{#verifyErrors}}{{message}}{{/verifyErrors}}
                                </template>
                            </div>
                            <div submitting>
                                <template type="amp-mustache">
                                    Submitting...
                                </template>
                            </div>
                            <div submit-success>
                                <template type="amp-mustache">
                                    {{#confirmation}}
                                        {{{confirmation}}}
                                    {{/confirmation}}
                                    {{^confirmation}}
                                        Form successfully submitted.
                                    {{/confirmation}}
                                </template>
                            </div>
                            <div submit-error>
                                <template type="amp-mustache">
                                    {{#errors}}
                                        <p>{{#label}}{{label}}: {{/label}}{{message}}</p>
                                    {{/errors}}
                                    {{^errors}}
                                        <p>Something went wrong. Try again later?</p>
                                    {{/errors}}
                                </template>
                            </div>
                        </form>
                    </div>
                </div>

                <button id="toggleStatus" class="toggle-button">
                    <svg class="call-form-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewbox="0 0 75.639 72.852">
                        <path id="Icon_feather-phone-call" data-name="Icon feather-phone-call" d="M48.057,14.821a17.013,17.013,0,0,1,13.7,13.155M48.057,1.5c14.5,1.546,25.953,12.525,27.583,26.442M72.17,54.518v9.991a6.541,6.541,0,0,1-2.248,4.935,7.122,7.122,0,0,1-5.316,1.726A70.526,70.526,0,0,1,34.664,60.945,66.365,66.365,0,0,1,13.847,40.964,64.222,64.222,0,0,1,3.2,12.09,6.5,6.5,0,0,1,4.982,7,7.074,7.074,0,0,1,10.1,4.83H20.509a6.857,6.857,0,0,1,6.939,5.728,41.361,41.361,0,0,0,2.429,9.358,6.468,6.468,0,0,1-1.561,7.027l-4.406,4.229A54.452,54.452,0,0,0,44.726,51.154l4.406-4.229a7.151,7.151,0,0,1,7.321-1.5A46.081,46.081,0,0,0,66.2,47.757,6.747,6.747,0,0,1,72.17,54.518Z" transform="translate(-1.664 0.15)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path>
                    </svg>
                </button>
            </amp-script>
        </div>
        <script id="localStatus" type="text/plain" target="amp-script">const toggleBtn = document.getElementById('toggleStatus');

</script>

        <a class="til-top" id="toTopButton" href="#top" on="tap:topHeader.scrollTo(duration=200)">
            <span>Til toppen</span>
            <amp-img src="/wp-content/uploads/til-top.svg" height="40" width="40" alt="" layout="fixed" class="i-amphtml-layout-fixed i-amphtml-layout-size-defined" style="width:40px;height:40px" i-amphtml-layout="fixed">
            </amp-img>
        </a>


        <div class="footer-wrapper">
            <div class="cards-container infokort-cards-container">
                <div class="card">
                    <div class="card-info">
                        <p class="card-overskrift">Unikke stole</p>
                        <p>Vores stole kan laves med sædehøjde, der passer dig.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <p class="card-overskrift">Dansk - hele vejen</p>
                        <p>Alle vores møbler er produceret på egen fabrik i Danmark.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <p class="card-overskrift">Gedigent håndværk</p>
                        <p>Vi har lavet stole i over 100 år. Derfor har vi en lang tradition for godt håndværk.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <p class="card-overskrift">Kvalitetsstof og læder</p>
                        <p>Kvalitetsstof fra danske Gabriel og ægte læder fra Sørensen Leather.</p>
                    </div>
                </div>
            </div>


            <div class="footer-row-container-alt">
                <h2>Sofaer er stuens centrum</h2>
                <p>Stuen er ét af de vigtigste rum i hjemmet. Det er i stuen, vi mødes med familie såvel som med venner til en snak om alt hvad hjertet begærer. Det er i stuen, vi nyder kaffen med vores gæster og det er i stuen, vi ser film med familien. Det er derfor vigtigt at have en lækker kvalitetssofa, som er komfortabel at sidde i længe. Det er også vigtigt, at have den rette udsmykning i stuen i form af en stilren og designmæssig gennemført sofa. Gå på opdagelse i vores sortiment af lækre sofaer, hvor du finder sofaer til dig alene men også til resten af familien. Udforsk vores store <a href="/vare-kategori/laenestole/">udvalg af matchende læne- og hvilestole her</a>.</p>
                <p>Når du skal købe en ny sofa, er det vigtigt at gøre dig nogle tanker om hvor den skal stå. Hvor passer den ind i indretningen og skal den suppleres med endnu en sofa. Måske du har et køkken alrum, så det er vigtigt at udtrykket passer til dine <a href="/vare-kategori/spisebordsstole/">spisebordsstole</a> eller noget helt andet. Hos Farstrup giver vi dig rig mulighed for at kombinere sofaerne som du ønsker og skabe nyt liv i din stue. Vores sofaer bygges af vores danske møbelsnedkere, som tilpasser den lige som du ønsker det med lige præcis de materialer du foretrækker.</p>
                <p>Hvis du ikke vil gå på kompromis med hverken design eller kvalitet, så har vi en sofa til dig. Vi bygger vores møbler med kærlighed for materialerne og kæler for detaljerne. På den måde får du møbler der passer til dig og dine ønsker. Uanset om du foretrækker stof- eller lædersofaer, så har vi en sofa der passer til dig. At sidde ergonomisk korrekt er vigtigt for din fysiske sundhed. <a href="https://farstrup.dk/ergonomisk-korrekt-siddestilling/">Læs mere om, hvordan man sidder ergonomisk korrekt her</a>.</p>
                <h2>Mere end almindelige sofaer</h2>
                <p>Vi bygger ikke bare sofaer. Vi bygger veldesignede, unikke, håndlavede og specielt tilpassede sofaer til hver unikke kunde, der har den højest mulige siddekomfort. <a href="https://farstrup.dk/produkter/">Alle vores møbler</a> bliver, som vores sofaer, unikt tilpasset til dig i både farve, materiale og udtryk.</p>
                <p>Vi bygger sofaer som både du og dine gæster har lyst til at blive siddende i, i mange timer. Vi forstår vigtigheden af tekstiler og farver. Derfor har vi et stort udvalg af kvalitetsstoffer og ægte læder, som kan vælges i alverdens farvekombinationer. Vi forstår at design og stil er vigtigt, men at det intet er værd uden komfort. Derfor har vi flere forskellige sofaserier, med hver deres unikke præg – tilpasset unikt til dig.</p>
                <p>Den komplette sofa er bygget i den perfekte kombination mellem håndværk, design og komfort. Derfor er vores sofaer designet af dygtige møbeldesignere og bygget af vores professionelle møbelsnedkere, syersker og møbelpolstrere af langtidsholdbare og bæredygtige råmaterialer.</p>
                <p>Hvis du er i tvivl om, hvilken sofa der passer til dig kan du <a href="https://farstrup.dk/saadan-finder-du-den-rigtige-sofa/">læse vores guide til at finde den rigtige sofa her</a>.</p>
            </div>
            <footer>
                <div class="footer-info">

                    <div class="footer-section">

                        <p class="footer-title">Om Farstrup</p>

                        <div class="footer-content">

                            <div class="footer-description">
                                <p>Farstrup er specialister i at tilpasse stole, der tilgodeser dine individuelle behov.</p>
                                <p>Bemærk at dette er Farstrups overordnede website, og der tages forbehold for tastefejl.</p>
                                <p>Ønsker du at købe et produkt, eller har du behov for service, er du velkommen til at kontakte en af <a href="https://farstrup.dk/forhandlere/">vores mange forhandlere, som du finder her.</a></p>
                            </div>

                        </div>

                    </div>

                    <div class="footer-section">

                        <p class="footer-title">Kontakt</p>

                        <div class="footer-content">

                            <p class="afdelingsnavn">Farstrup Furniture A/S</p>
                            <p class="adresse">Farstrupvej 21,</p>
                            <p class="postnummer-by">5471 Søndersø</p>
                            <p>CVR-nr: 37217514</p>
                            <p>Tel: <a href="tel:+4563838383">+45 63838383</a></p>
                            <p>Mail: <a href="mailto:info@farstrup.dk">info@farstrup.dk</a></p>

                        </div>

                    </div>

                    <div class="footer-section">

                        <p class="footer-title">Åbningstider</p>

                        <div class="footer-content">

                            <p class="footer-sub-title">Kontorets åbningstider:</p>

                            <p class="aabningstid"><span class="dag">Mandag: </span><span class="tid">8:00 – 16:00</span></p>
                            <p class="aabningstid"><span class="dag">Tirsdag: </span><span class="tid">8:00 – 16:00</span></p>
                            <p class="aabningstid"><span class="dag">Onsdag: </span><span class="tid">8:00 – 16:00</span></p>
                            <p class="aabningstid"><span class="dag">Torsdag: </span><span class="tid">8:00 – 16:00</span></p>
                            <p class="aabningstid idag"><span class="dag">Fredag: </span><span class="tid">8:00 – 15:30</span></p>
                            <p class="aabningstid"><span class="dag">Lørdag: </span><span class="tid">Lukket</span></p>
                            <p class="aabningstid"><span class="dag">Søndag: </span><span class="tid">Lukket</span></p>
                        </div>

                    </div>

                    <div class="footer-section">

                        <p class="footer-title">Sociale medier</p>

                        <div class="footer-content">


                            <a class="footer-social-medie" href="https://www.facebook.com/FarstrupFurniture/" target="_blank">
                                <amp-img src="https://farstrup.dk/wp-content/uploads/facebook-icon.svg" width="30" height="30" alt="" layout="fixed" class="i-amphtml-layout-fixed i-amphtml-layout-size-defined" style="width:30px;height:30px" i-amphtml-layout="fixed">
                                </amp-img>
                                <span>Facebook</span>
                            </a>


                            <a class="footer-social-medie" href="https://www.instagram.com/farstrupfurniture/" target="_blank">
                                <amp-img src="https://farstrup.dk/wp-content/uploads/instagram-icon.svg" width="30" height="30" alt="" layout="fixed" class="i-amphtml-layout-fixed i-amphtml-layout-size-defined" style="width:30px;height:30px" i-amphtml-layout="fixed">
                                </amp-img>
                                <span>Instagram</span>
                            </a>


                            <a class="footer-social-medie" href="https://www.linkedin.com/company/farstrup-furniture/" target="_blank">
                                <amp-img src="https://farstrup.dk/wp-content/uploads/linkedin-icon.svg" width="30" height="30" alt="" layout="fixed" class="i-amphtml-layout-fixed i-amphtml-layout-size-defined" style="width:30px;height:30px" i-amphtml-layout="fixed">
                                </amp-img>
                                <span>LinkedIn</span>
                            </a>


                        </div>

                    </div>

                </div>
            </footer>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" data-amp-original-style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" class="amp-wp-bf126db">
            <defs>
                <filter id="wp-duotone-dark-grayscale">
                    <fecolormatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg>
                        <fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb>
                    </fecomponenttransfer>
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" data-amp-original-style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" class="amp-wp-bf126db">
            <defs>
                <filter id="wp-duotone-grayscale">
                    <fecolormatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0 1"></fefuncb>
                    </fecomponenttransfer>
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" data-amp-original-style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" class="amp-wp-bf126db">
            <defs>
                <filter id="wp-duotone-purple-yellow">
                    <fecolormatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb>
                    </fecomponenttransfer>
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" data-amp-original-style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" class="amp-wp-bf126db">
            <defs>
                <filter id="wp-duotone-blue-red">
                    <fecolormatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg>
                        <fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb>
                    </fecomponenttransfer>
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" data-amp-original-style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" class="amp-wp-bf126db">
            <defs>
                <filter id="wp-duotone-midnight">
                    <fecolormatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0 0"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg>
                        <fefuncb type="table" tablevalues="0 1"></fefuncb>
                    </fecomponenttransfer>
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" data-amp-original-style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" class="amp-wp-bf126db">
            <defs>
                <filter id="wp-duotone-magenta-yellow">
                    <fecolormatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg>
                        <fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb>
                    </fecomponenttransfer>
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" data-amp-original-style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" class="amp-wp-bf126db">
            <defs>
                <filter id="wp-duotone-purple-green">
                    <fecolormatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr>
                        <fefuncg type="table" tablevalues="0 1"></fefuncg>
                        <fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb>
                    </fecomponenttransfer>
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" data-amp-original-style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" class="amp-wp-bf126db">
            <defs>
                <filter id="wp-duotone-blue-orange">
                    <fecolormatrix type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 0 0 0 1 0 "></fecolormatrix>
                    <fecomponenttransfer color-interpolation-filters="sRGB">
                        <fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr>
                        <fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg>
                        <fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb>
                    </fecomponenttransfer>
                </filter>
            </defs>
        </svg>

        <amp-consent id="wp-gdpr-cookie-notice-wrap" class="wp-gdpr-cookie-notice-wrap i-amphtml-layout-nodisplay" layout="nodisplay" hidden="hidden" i-amphtml-layout="nodisplay">
            <script type="application/json">
                {
                    "consentInstanceId": "wp-gdpr-cookie-notice",
                    "consentRequired": "remote",
                    "promptUI": "wp-gdpr-cookie-notice",
                    "checkConsentHref": "https:\/\/farstrup.dk\/wp-admin\/admin-ajax.php?action=wp_gdpr_cookie_notice_check_consent_href"
                }
            </script>
            <div id="wp-gdpr-cookie-notice" class="wp-gdpr-cookie-notice" role="alert" aria-label="Cookie Consent Notice">
                <div class="wp-gdpr-cookie-notice-inner">
                    <div class="wp-gdpr-cookie-notice-content-wrap">
                        <div class="wp-gdpr-cookie-notice-heading">
                            <h2>Denne side bruger cookies</h2>
                        </div>
                        <div class="wp-gdpr-cookie-notice-content">
                            <p>Denne hjemmeside bruger små filer kaldet cookies for at hjælpe os med at forbedre din oplevelse.<br>
                                Lær mere omkring hvordan vi bruger cookies i vores <a href="https://farstrup.dk/privatlivspolitik/#" class="cookie-policy-page">cookie- og privatlivspolitik</a>.</p>
                        </div>
                    </div>
                    <form id="wp-gdpr-cookie-notice-form" class="wp-gdpr-cookie-notice-form" method="POST" action-xhr="https://farstrup.dk/wp-admin/admin-ajax.php?_wp_amp_action_xhr_converted=1" target="_top">
                        <div class="wp-gdpr-cookie-notice-controls">
                            <div class="wp-gdpr-cookie-notice-submit">
                                <button type="submit" class="wp-gdpr-cookie-notice-button" on="tap:wp-gdpr-cookie-notice-wrap.accept">OK</button>
                            </div>
                        </div>
                        <input type="hidden" name="functional" value="1">
                        <input type="hidden" name="preferences" value="1">
                        <input type="hidden" name="analytics" value="1">
                        <input type="hidden" name="marketing" value="1">
                        <input type="hidden" name="action" value="wp_gdpr_cookie_notice_submit">
                        <input type="hidden" id="wp_gdpr_cookie_notice_nonce" name="wp_gdpr_cookie_notice_nonce" value="ffbb9136e3">
                    </form>
                </div>
            </div>
        </amp-consent>
    </div>
</body>

</html>

<!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/

Object Caching 388/821 objects using disk

Served from: farstrup.dk @ 2021-12-03 22:38:31 by W3 Total Cache
-->