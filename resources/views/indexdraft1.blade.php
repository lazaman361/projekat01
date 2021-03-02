<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="pingback" href="https://convergetp.com/xmlrpc.php"/>

    <script type="text/javascript">
        document.documentElement.className = 'js';
    </script>

    <script>var et_site_url = 'https://convergetp.com';
        var et_post_id = '82';

        function et_core_page_resource_fallback(a, b) {
            "undefined" === typeof b && (b = a.sheet.cssRules && 0 === a.sheet.cssRules.length);
            b && (a.onerror = null, a.onload = null, a.href ? a.href = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id : a.src && (a.src = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id))
        }
    </script>
    <script id="diviarea-loader">window.DiviPopupData = window.DiviAreaConfig = {
            "zIndex": 1000000,
            "animateSpeed": 400,
            "triggerClassPrefix": "show-popup-",
            "idAttrib": "data-popup",
            "modalIndicatorClass": "is-modal",
            "blockingIndicatorClass": "is-blocking",
            "defaultShowCloseButton": true,
            "withCloseClass": "with-close",
            "noCloseClass": "no-close",
            "triggerCloseClass": "close",
            "singletonClass": "single",
            "darkModeClass": "dark",
            "noShadowClass": "no-shadow",
            "altCloseClass": "close-alt",
            "popupSelector": ".et_pb_section.popup",
            "initializeOnEvent": "et_pb_after_init_modules",
            "popupWrapperClass": "area-outer-wrap",
            "fullHeightClass": "full-height",
            "openPopupClass": "da-overlay-visible",
            "overlayClass": "da-overlay",
            "exitIndicatorClass": "on-exit",
            "hoverTriggerClass": "on-hover",
            "clickTriggerClass": "on-click",
            "onExitDelay": 2000,
            "notMobileClass": "not-mobile",
            "notTabletClass": "not-tablet",
            "notDesktopClass": "not-desktop",
            "baseContext": "body",
            "activePopupClass": "is-open",
            "closeButtonClass": "da-close",
            "withLoaderClass": "with-loader",
            "debug": false,
            "ajaxUrl": "https:\/\/convergetp.com\/wp-admin\/admin-ajax.php",
            "sys": []
        };
        var loader = function () {
            "use strict";
            !function () {
                window.DiviArea = window.DiviPopup = {loaded: !1};
                var n = window.DiviArea, i = n.Hooks = {}, t = {};

                function o(n, i, o) {
                    var r, e, c;
                    if ("string" == typeof n) if (t[n]) {
                        if (i) if ((r = t[n]) && o) for (c = r.length; c--;) (e = r[c]).callback === i && e.context === o && (r[c] = !1); else for (c = r.length; c--;) r[c].callback === i && (r[c] = !1)
                    } else t[n] = []
                }

                function r(n, i, o, r) {
                    if ("string" == typeof n) {
                        var e = {callback: i, priority: o, context: r}, c = t[n];
                        c ? (c.push(e), c = function (n) {
                            var i, t, o, r, e = n.length;
                            for (r = 1; r < e; r++) for (i = n[r], t = r; t > 0; t--) (o = n[t - 1]).priority > i.priority && (n[t] = o, n[t - 1] = i);
                            return n
                        }(c)) : c = [e], t[n] = c
                    }
                }

                function e(n, i, o) {
                    var r, e;
                    for ("string" == typeof i && (i = [i]), r = 0; r < i.length; r++) {
                        var c = t[i[r]], f = !1, a = void 0;
                        if (c) {
                            var l = c.length;
                            for (e = 0; e < l; e++) if (c[e]) if ("filter" === n) void 0 !== (a = c[e].callback.apply(c[e].context, o)) && (o[0] = a); else {
                                if (!c[e] || "function" != typeof c[e].callback) return !1;
                                c[e].callback.apply(c[e].context, o)
                            } else f = !0;
                            if (f) for (e = l; e--;) c[e] || c.splice(e, 1)
                        }
                    }
                    if ("filter" === n) return o[0]
                }

                i.silent = function () {
                    return i
                }, n.removeFilter = i.removeFilter = function (n, i) {
                    o(n, i)
                }, n.removeAction = i.removeAction = function (n, i) {
                    o(n, i)
                }, n.applyFilters = i.applyFilters = function (n) {
                    for (var i = [], t = arguments.length - 1; t-- > 0;) i[t] = arguments[t + 1];
                    return e("filter", n, i)
                }, n.doAction = i.doAction = function (n) {
                    for (var i = [], t = arguments.length - 1; t-- > 0;) i[t] = arguments[t + 1];
                    e("action", n, i)
                }, n.addFilter = i.addFilter = function (n, i, t, o) {
                    r(n, i, parseInt(t || 10, 10), o || window)
                }, n.addAction = i.addAction = function (n, i, t, o) {
                    r(n, i, parseInt(t || 10, 10), o || window)
                }, n.addActionOnce = i.addActionOnce = function (n, i, t, e) {
                    r(n, i, parseInt(t || 10, 10), e || window), r(n, (function () {
                        o(n, i)
                    }), 1 + parseInt(t || 10, 10), e || window)
                }
            }();
            return {}
        }();
    </script>
    <style id="et-divi-userfonts">@font-face {
            font-family: "Work Sans Regular";
            font-display: swap;
            src: url("https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/et-fonts/WorkSans-Regular.ttf") format("truetype");
        }</style>
    <!-- This site is optimized with the Yoast SEO Premium plugin v15.9 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Home - Converge Technology Solutions</title>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="https://convergetp.com/"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Home - Converge Technology Solutions"/>
    <meta property="og:url" content="https://convergetp.com/"/>
    <meta property="og:site_name" content="Converge Technology Solutions"/>
    <meta property="article:modified_time" content="2021-02-22T12:40:13+00:00"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@ConvergeTSC"/>
    <meta name="twitter:label1" content="Est. reading time">
    <meta name="twitter:data1" content="5 minutes">
    <script type="application/ld+json" class="yoast-schema-graph">
        {"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://convergetp.com/#website","url":"https://convergetp.com/","name":"Converge Technology Solutions","description":"Collaborate. Connect. Converge","potentialAction":[{"@type":"SearchAction","target":"https://convergetp.com/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"WebPage","@id":"https://convergetp.com/#webpage","url":"https://convergetp.com/","name":"Home - Converge Technology Solutions","isPartOf":{"@id":"https://convergetp.com/#website"},"datePublished":"2020-04-20T18:21:02+00:00","dateModified":"2021-02-22T12:40:13+00:00","breadcrumb":{"@id":"https://convergetp.com/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://convergetp.com/"]}]},{"@type":"BreadcrumbList","@id":"https://convergetp.com/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"@type":"WebPage","@id":"https://convergetp.com/","url":"https://convergetp.com/","name":"Home"}}]}]}

    </script>
    <!-- / Yoast SEO Premium plugin. -->


    <link rel='dns-prefetch' href='//kit.fontawesome.com'/>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
    <link rel='dns-prefetch' href='//s.w.org'/>
    <link rel="alternate" type="application/rss+xml" title="Converge Technology Solutions &raquo; Feed"
          href="https://convergetp.com/feed/"/>
    <link rel="alternate" type="application/rss+xml" title="Converge Technology Solutions &raquo; Comments Feed"
          href="https://convergetp.com/comments/feed/"/>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/convergetp.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.3"}
        };
        !function (e, a, t) {
            var r, n, o, i, p = a.createElement("canvas"), s = p.getContext && p.getContext("2d");

            function c(e, t) {
                var a = String.fromCharCode;
                s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
                var r = p.toDataURL();
                return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
            }

            function l(e) {
                if (!s || !s.fillText) return !1;
                switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
                    case"flag":
                        return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));
                    case"emoji":
                        return !c([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }

            function d(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (i = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <meta content="Divi v.4.9.0" name="generator"/>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-includes/css/dist/block-library/style.min.css?ver=5.5.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='axss-styles-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/ax-social-stream/public/css/styles.min.css?ver=3.8.6'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='axss-grid-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/ax-social-stream/public/css/grid.min.css?ver=3.8.6'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='cookie-law-info-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-public.css?ver=2.0.0'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='cookie-law-info-gdpr-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-gdpr.css?ver=2.0.0'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='stock-ticker-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/stock-ticker/assets/css/stock-ticker.css?ver=3.2.0'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='stock-ticker-custom-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/stock-ticker-custom.css?ver=3.2.0' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='extp-google-fonts-css'
          href='//fonts.googleapis.com/css?family=Source+Sans+Pro&#038;ver=1.0.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='css-divi-area-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/popups-for-divi/styles/front.min.css?ver=2.3.5'
          type='text/css' media='all'/>
    <style id='css-divi-area-inline-css' type='text/css'>
        .et_pb_section.popup {
            display: none
        }
    </style>
    <link rel='stylesheet' id='divi-style-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/themes/Divi/style.css?ver=4.9.0' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='dwd-map-extended-styles-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/dwd-map-extended/styles/style.min.css?ver=3.1.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='supreme-modules-pro-for-divi-styles-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/supreme-modules-pro-for-divi/styles/style.min.css?ver=3.4.1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='et-builder-googlefonts-cached-css'
          href='https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,regular,500,600,700,800,900&#038;subset=latin,latin-ext,vietnamese&#038;display=swap'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='dashicons-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-includes/css/dashicons.min.css?ver=5.5.3' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='extp-font-awesome-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/css/font-awesome/css/fontawesome-all.min.css?ver=5.5.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='extp-lightbox-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/css/glightbox.css?ver=5.5.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='extp-teampress-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/css/style.css?ver=5.5.3' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='extp-teampress-imghover-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/css/imghover-style.css?ver=5.5.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='extp-teampress-list-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/css/style-list.css?ver=5.5.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='extp-teampress-tablecss-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/css/style-table.css?ver=5.5.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='extp-teampress-expand-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/css/collapse.css?ver=5.5.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='extp-teampress-modal-css'
          href='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/css/modal.css?ver=5.5.3' type='text/css'
          media='all'/>
    <script type='text/javascript'
            src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/popups-for-divi/scripts/ie-compat.min.js?ver=2.3.5'
            id='dap-ie-js'></script>
    <script type='text/javascript' src='https://a4n3h6d7.stackpathcdn.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'
            id='jquery-core-js'></script>
    <script type='text/javascript' id='cookie-law-info-js-extra'>
        /* <![CDATA[ */
        var Cli_Data = {
            "nn_cookie_ids": [],
            "cookielist": [],
            "non_necessary_cookies": {"necessary": [], "non-necessary": []},
            "ccpaEnabled": "",
            "ccpaRegionBased": "",
            "ccpaBarEnabled": "",
            "ccpaType": "gdpr",
            "js_blocking": "1",
            "custom_integration": "",
            "triggerDomRefresh": ""
        };
        var cli_cookiebar_settings = {
            "animate_speed_hide": "500",
            "animate_speed_show": "500",
            "background": "#FFF",
            "border": "#b1a6a6c2",
            "border_on": "",
            "button_1_button_colour": "#22376c",
            "button_1_button_hover": "#1b2c56",
            "button_1_link_colour": "#fff",
            "button_1_as_button": "1",
            "button_1_new_win": "",
            "button_2_button_colour": "#333",
            "button_2_button_hover": "#292929",
            "button_2_link_colour": "#444",
            "button_2_as_button": "",
            "button_2_hidebar": "",
            "button_3_button_colour": "#3566bb",
            "button_3_button_hover": "#2a5296",
            "button_3_link_colour": "#fff",
            "button_3_as_button": "1",
            "button_3_new_win": "",
            "button_4_button_colour": "#000",
            "button_4_button_hover": "#000000",
            "button_4_link_colour": "#333333",
            "button_4_as_button": "",
            "font_family": "inherit",
            "header_fix": "",
            "notify_animate_hide": "1",
            "notify_animate_show": "",
            "notify_div_id": "#cookie-law-info-bar",
            "notify_position_horizontal": "right",
            "notify_position_vertical": "bottom",
            "scroll_close": "",
            "scroll_close_reload": "",
            "accept_close_reload": "",
            "reject_close_reload": "",
            "showagain_tab": "1",
            "showagain_background": "#fff",
            "showagain_border": "#000",
            "showagain_div_id": "#cookie-law-info-again",
            "showagain_x_position": "100px",
            "text": "#333333",
            "show_once_yn": "",
            "show_once": "10000",
            "logging_on": "",
            "as_popup": "",
            "popup_overlay": "1",
            "bar_heading_text": "",
            "cookie_bar_as": "banner",
            "popup_showagain_position": "bottom-right",
            "widget_position": "left"
        };
        var log_object = {"ajax_url": "https:\/\/convergetp.com\/wp-admin\/admin-ajax.php"};
        /* ]]> */
    </script>
    <script type='text/javascript'
            src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/cookie-law-info/public/js/cookie-law-info-public.js?ver=2.0.0'
            id='cookie-law-info-js'></script>
    <script crossorigin="anonymous" type='text/javascript' src='https://kit.fontawesome.com/5b6024ce5b.js'
            id='font-awesome-official-js'></script>
    <script type='text/javascript'
            src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/js/teampress.min.js?ver=1.4'
            id='extp-teampress-js'></script>
    <script type='text/javascript'
            src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/stock-market-ticker/assets/stockdio-wp.js?ver=1.9.4'
            id='customStockdioJs-js'></script>
    <link rel="https://api.w.org/" href="https://convergetp.com/wp-json/"/>
    <link rel="alternate" type="application/json" href="https://convergetp.com/wp-json/wp/v2/pages/82"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://convergetp.com/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://a4n3h6d7.stackpathcdn.com/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 5.5.3"/>
    <link rel='shortlink' href='https://convergetp.com/'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://convergetp.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fconvergetp.com%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://convergetp.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fconvergetp.com%2F&#038;format=xml"/>
    <script>
        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    </script>
    <style>
        .no-js img.lazyload {
            display: none;
        }

        figure.wp-block-image img.lazyloading {
            min-width: 150px;
        }

        .lazyload, .lazyloading {
            opacity: 0;
        }

        .lazyloaded {
            opacity: 1;
            transition: opacity 400ms;
            transition-delay: 0ms;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="preload" href="https://a4n3h6d7.stackpathcdn.com/wp-content/themes/Divi/core/admin/fonts/modules.ttf"
          as="font" crossorigin="anonymous">
    <script type="text/javascript">
        var cli_flush_cache = true;
    </script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W7RH2JD');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127734268-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-127734268-1');
    </script>

    <script>
        jQuery(function ($) {
            $('.logo_container').append('<a href="/"><img src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/08/CTS-NewLogo-2020-White-TransparentBG.png" class="home-logo" id="logo" style="display:none;" /></a>');
        });
    </script>
    <link rel="icon" href="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/08/cropped-CTS-Arrow-02-32x32.png"
          sizes="32x32"/>
    <link rel="icon"
          href="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/08/cropped-CTS-Arrow-02-192x192.png"
          sizes="192x192"/>
    <link rel="apple-touch-icon"
          href="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/08/cropped-CTS-Arrow-02-180x180.png"/>
    <meta name="msapplication-TileImage"
          content="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/08/cropped-CTS-Arrow-02-270x270.png"/>
    <style type="text/css">    .ex-tplist h3 a,
        .ex-tplist .extsc-hidden .exp-modal-info h3 a,
        .extp-member-single .member-info h3,
        .exteam-lb .gslide-description.description-right h3 {
            font-family: "", sans-serif;
        }

        .ex-tplist:not(.style-3):not(.style-7):not(.style-11):not(.style-17):not(.style-19):not(.style-20):not(.style-img-2):not(.style-img-3):not(.style-img-4):not(.style-img-5):not(.style-img-6):not(.style-img-7):not(.style-img-9):not(.style-img-10):not(.list-style-3) h3 a,
        .exteam-lb .gslide-description.description-right h3 a,
        .extp-member-single .member-info h3,
        .ex-tplist h3 a,
        .ex-tplist .extsc-hidden .exp-modal-info h3 a,
        .ex-tplist .exp-expand .exp-expand-des h3 a {
            color: #22376c;
        }

        .ex-tplist .exp-expand .exp-expand-meta h5,
        .ex-tplist .extsc-hidden .exp-modal-info h5,
        .exteam-lb .gslide-description.description-right h5,
        .extp-member-single .mb-meta,
        .ex-tplist h5 {
            font-family: "", sans-serif;
        }
    </style>
    <link rel="stylesheet" id="et-core-unified-82-cached-inline-styles"
          href="https://a4n3h6d7.stackpathcdn.com/wp-content/et-cache/82/et-core-unified-82-1614189757426.min.css"
          onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)"/>
</head>
<body data-rsssl=1
      class="home page-template-default page page-id-82 et_pb_button_helper_class et_fullwidth_nav et_fullwidth_secondary_nav et_fixed_nav et_show_nav et_secondary_nav_enabled et_secondary_nav_two_panels et_primary_nav_dropdown_animation_expand et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns_1_2__1_4 et_cover_background et_pb_gutter et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
<div id="page-container">

    <div id="top-header">
        <div class="container clearfix">


            <div id="et-info">

                <a href="mailto:info@convergetp.com"><span id="et-info-email">info@convergetp.com</span></a>

                <ul class="et-social-icons">

                    <li class="et-social-icon et-social-twitter">
                        <a href="https://twitter.com/ConvergeTSC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                           class="icon">
                            <span>Twitter</span>
                        </a>
                    </li>
                    <li class="et-social-icon et-social-google-plus">
                        <a href="https://www.linkedin.com/company/converge-technology-partners-inc" class="icon">
                            <span>Google</span>
                        </a>
                    </li>

                </ul>
            </div> <!-- #et-info -->


            <div id="et-secondary-menu">
                <div class="et_duplicate_social_icons">
                    <ul class="et-social-icons">

                        <li class="et-social-icon et-social-twitter">
                            <a href="https://twitter.com/ConvergeTSC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                               class="icon">
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li class="et-social-icon et-social-google-plus">
                            <a href="https://www.linkedin.com/company/converge-technology-partners-inc" class="icon">
                                <span>Google</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div> <!-- #et-secondary-menu -->

        </div> <!-- .container -->
    </div> <!-- #top-header -->


    <header id="main-header" data-height-onload="52">
        <div class="container clearfix et_menu_container">
            <div class="logo_container">
                <span class="logo_helper"></span>
                <a href="https://convergetp.com/">
                    <img alt="Converge Technology Solutions" id="logo" data-height-percentage="75"
                         data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/04/ConvergeLogoSig.png"
                         class="lazyload"
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/>
                    <noscript><img
                            src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/04/ConvergeLogoSig.png"
                            alt="Converge Technology Solutions" id="logo" data-height-percentage="75"/></noscript>
                </a>
            </div>
            <div id="et-top-navigation" data-height="52" data-fixed-height="42">
                <nav id="top-menu-nav">
                    <ul id="top-menu" class="nav">
                        <li id="menu-item-8665"
                            class="company menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-8665">
                            <a href="https://convergetp.com/about-us/">Company</a>
                            <ul class="sub-menu">
                                <li id="menu-item-11586"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11586"><a
                                        href="https://convergetp.com/about-us/">About Us</a></li>
                                <li id="menu-item-413"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-413"><a
                                        href="https://convergetp.com/leadership/">Leadership</a></li>
                                <li id="menu-item-7897"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7897"><a
                                        href="https://convergetp.com/strategic-alliances/">Strategic Alliances</a></li>
                                <li id="menu-item-9988"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9988"><a
                                        href="https://convergetp.com/portfolio-of-companies/">Portfolio of Companies</a>
                                </li>
                                <li id="menu-item-12010"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12010"><a
                                        href="https://careers.convergetp.com/">Careers</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-408"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-408">
                            <a href="https://convergetp.com/solutions/">Solutions</a>
                            <ul class="sub-menu">
                                <li id="menu-item-427"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-427"><a
                                        href="https://convergetp.com/advanced-analytics/">Advanced Analytics</a></li>
                                <li id="menu-item-428"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-428"><a
                                        href="https://convergetp.com/cloud/">Cloud</a></li>
                                <li id="menu-item-429"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-429"><a
                                        href="https://convergetp.com/cybersecurity/">Cybersecurity</a></li>
                                <li id="menu-item-430"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-430"><a
                                        href="https://convergetp.com/digital-infrastructure/">Digital Infrastructure</a>
                                </li>
                                <li id="menu-item-431"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-431"><a
                                        href="https://convergetp.com/managed-services/">Managed Services</a></li>
                                <li id="menu-item-432"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-432">
                                    <a href="https://convergetp.com/talent-solutions/">Talent Solutions</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-12103"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12103">
                                            <a href="https://talent.convergetp.com/">Career Portal</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-409"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-409"><a
                                href="https://convergetp.com/investor-relations/">Investor Relations</a></li>
                        <li id="menu-item-410"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-410">
                            <a href="https://convergetp.com/newsroom/">Newsroom</a>
                            <ul class="sub-menu">
                                <li id="menu-item-12764"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12764"><a
                                        href="https://convergetp.com/newsroom/blogs/">Blogs</a></li>
                                <li id="menu-item-10857"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10857"><a
                                        href="https://convergetp.com/newsroom/press-releases/">Press Releases</a></li>
                                <li id="menu-item-11792"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11792"><a
                                        href="https://convergetp.com/news/">News</a></li>
                                <li id="menu-item-8783"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8783"><a
                                        href="https://convergetp.com/newsroom/social-stream/">Social</a></li>
                                <li id="menu-item-11585"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11585"><a
                                        href="https://info.convergetp.com/hubfs/assets/resources/Converge%20Events.pdf">Events</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-9805"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9805"><a
                                href="https://convergetp.com/case-studies/">Case Studies</a></li>
                        <li id="menu-item-412"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-412"><a
                                href="https://convergetp.com/contact-us/">Contact Us</a></li>
                    </ul>
                </nav>


                <div id="et_top_search">
                    <span id="et_search_icon"></span>
                </div>

                <div id="et_mobile_nav_menu">
                    <div class="mobile_nav closed">
                        <span class="select_page">Select Page</span>
                        <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                    </div>
                </div>
            </div> <!-- #et-top-navigation -->
        </div> <!-- .container -->
        <div class="et_search_outer">
            <div class="container et_search_form_container">
                <form role="search" method="get" class="et-search-form" action="https://convergetp.com/">
                    <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s"
                           title="Search for:"/></form>
                <span class="et_close_search_field"></span>
            </div>
        </div>
    </header> <!-- #main-header -->
    <div id="et-main-area">

        <div id="main-content">


            <article id="post-82" class="post-82 page type-page status-publish hentry">


                <div class="entry-content">
                    <div id="et-boc" class="et-boc">

                        <div class="et-l et-l--post">
                            <div class="et_builder_inner_content et_pb_gutters3">
                                <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular">


                                    <div class="et_pb_row et_pb_row_0">
                                        <div
                                            class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div
                                                class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">


                                                <div class="et_pb_text_inner"><h1 style="text-align: center;">
                                                        COLLABORATE.</h1>
                                                    <h1 style="text-align: center;">CONNECT.</h1>
                                                    <h1 style="text-align: center;"><span style="color: #819fd3;">CONVERGE.</span>
                                                    </h1></div>
                                            </div> <!-- .et_pb_text -->
                                            <div
                                                class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">


                                                <div class="et_pb_text_inner"><h2>Converge Technology Solutions Corp. is
                                                        a North American Software-enabled, Hybrid IT</h2>
                                                    <h2>solution provider focused on delivering industry-leading
                                                        solutions and services.</h2></div>
                                            </div> <!-- .et_pb_text -->
                                            <div
                                                class="et_pb_button_module_wrapper et_pb_button_0_wrapper et_pb_button_alignment_center et_pb_module ">
                                                <a class="et_pb_button et_pb_button_0 et_pb_bg_layout_light"
                                                   href="https://convergetp.com/about-us/">Learn More</a>
                                            </div>
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->


                                </div> <!-- .et_pb_section -->
                                <div class="et_pb_section et_pb_section_1 et_section_regular">


                                    <div class="et_pb_row et_pb_row_1">
                                        <div
                                            class="et_pb_column et_pb_column_4_4 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div
                                                class="et_pb_with_border et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_left et_pb_bg_layout_light">


                                                <div class="et_pb_text_inner"><p style="text-align: center;">Our
                                                        regional sales and services organizations deliver advanced
                                                        analytics, cloud, cybersecurity, and managed services offerings
                                                        to our clients.</p>
                                                    <p style="text-align: center;">We support these solutions with
                                                        talent expertise and digital infrastructure offerings across all
                                                        major IT partners in the marketplace.</p></div>
                                            </div> <!-- .et_pb_text -->
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->


                                </div> <!-- .et_pb_section -->
                                <div class="et_pb_section et_pb_section_2 et_section_regular">


                                    <div class="et_pb_row et_pb_row_2 et_pb_equal_columns et_pb_gutters1">
                                        <div
                                            class="et_pb_column et_pb_column_4_4 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div
                                                class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_left et_pb_bg_layout_light">


                                                <div class="et_pb_text_inner"><h2>Our Solutions</h2></div>
                                            </div> <!-- .et_pb_text -->
                                            <div
                                                class="et_pb_module et_pb_divider et_pb_divider_0 et_pb_divider_position_ et_pb_space">
                                                <div class="et_pb_divider_internal"></div>
                                            </div>
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->
                                    <div class="et_pb_row et_pb_row_3">
                                        <div
                                            class="et_pb_column et_pb_column_1_3 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module dsm_flipbox dsm_flipbox_0">


                                                <div class="et_pb_module_inner">
                                                    <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_0 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_child_image"><span
                                                                        class="dsm_flipbox_child_image_wrap"><img alt=""
                                                                                                                  data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/DigitalInfrastructure-200x200-1.png"
                                                                                                                  class="lazyload"
                                                                                                                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/DigitalInfrastructure-200x200-1.png"
                                                                                alt=""/></noscript></span></div>
                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">
                                                                    <h2 class="dsm-title et_pb_module_header">Digital
                                                                        Infrastructure</h2>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_1 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">


                                                                    <div class="dsm-content"><p>Converge provides a full
                                                                            range of infrastructure services, including
                                                                            IT Services. Data infrastructure ecosystems
                                                                            are complex, and we offer a wide variety of
                                                                            infrastructure tools and support to
                                                                            organizations of all sizes.</p>
                                                                        <p style="text-align: center;"><a
                                                                                href="https://convergetp.com/digital-infrastructure/">Read
                                                                                More</a></p></div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="et_pb_module dsm_flipbox dsm_flipbox_1">


                                                <div class="et_pb_module_inner">
                                                    <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_2 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_child_image"><span
                                                                        class="dsm_flipbox_child_image_wrap"><img alt=""
                                                                                                                  data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/AdvancedAnalytics-200x200-1.png"
                                                                                                                  class="lazyload"
                                                                                                                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/AdvancedAnalytics-200x200-1.png"
                                                                                alt=""/></noscript></span></div>
                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">
                                                                    <h2 class="dsm-title et_pb_module_header">Advanced
                                                                        Analytics</h2>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_3 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">


                                                                    <div class="dsm-content">Converge’s advanced
                                                                        analytics process utilizes mathematical and
                                                                        statistical methods as well as machine-driven
                                                                        techniques, such as deep learning and blockchain
                                                                        technology, to provide customers with
                                                                        intelligent insight into their data. We enable
                                                                        enterprises to forecast trends, predict future
                                                                        behavior, and better navigate toward
                                                                        success.</p>
                                                                        <p style="text-align: center;"><a
                                                                                href="https://convergetp.com/advanced-analytics/">Read
                                                                                More</a></p></div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_3 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module dsm_flipbox dsm_flipbox_2">


                                                <div class="et_pb_module_inner">
                                                    <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_4 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_child_image"><span
                                                                        class="dsm_flipbox_child_image_wrap"><img alt=""
                                                                                                                  data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/Cloud-01-1_200x200.png"
                                                                                                                  class="lazyload"
                                                                                                                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/Cloud-01-1_200x200.png"
                                                                                alt=""/></noscript></span></div>
                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">
                                                                    <h2 class="dsm-title et_pb_module_header">Cloud</h2>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_5 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">


                                                                    <div class="dsm-content"><p>Our multi-faceted cloud
                                                                            practice is ready to empower your
                                                                            organization to adopt new strategies and
                                                                            approaches that embrace Cloud technologies
                                                                            and make the best use of them.</p>
                                                                        <p style="text-align: center;"><a
                                                                                href="https://convergetp.com/cloud/">Read
                                                                                More</a></p></div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="et_pb_module dsm_flipbox dsm_flipbox_3">


                                                <div class="et_pb_module_inner">
                                                    <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_6 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_child_image"><span
                                                                        class="dsm_flipbox_child_image_wrap"><img alt=""
                                                                                                                  data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/ManagedServices-01-200x200-1.png"
                                                                                                                  class="lazyload"
                                                                                                                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/ManagedServices-01-200x200-1.png"
                                                                                alt=""/></noscript></span></div>
                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">
                                                                    <h2 class="dsm-title et_pb_module_header">Managed
                                                                        Services</h2>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_7 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">


                                                                    <div class="dsm-content"><p><span>Converge Managed Services offers the ability to provide 24&#215;7 monitoring, remote management, and engineering services utilizing service desk-initiated, ticket-based support for remediation or escalation of alerts, system conditions, and vendor management.</span>
                                                                        </p>
                                                                        <p style="text-align: center;"><a
                                                                                href="https://convergetp.com/managed-services/"><span>Read More</span></a>
                                                                        </p></div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_3 et_pb_column_5  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div class="et_pb_module dsm_flipbox dsm_flipbox_4">


                                                <div class="et_pb_module_inner">
                                                    <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_8 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_child_image"><span
                                                                        class="dsm_flipbox_child_image_wrap"><img alt=""
                                                                                                                  data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/Cybersecurity-04-200x200-1.png"
                                                                                                                  class="lazyload"
                                                                                                                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/Cybersecurity-04-200x200-1.png"
                                                                                alt=""/></noscript></span></div>
                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">
                                                                    <h2 class="dsm-title et_pb_module_header">
                                                                        Cybersecurity</h2>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_9 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">


                                                                    <div class="dsm-content">Converge’s cybersecurity
                                                                        arsenal is comprised of an evolving collection
                                                                        of defense tools, risk management approaches,
                                                                        technologies, training, and best practices. We
                                                                        design custom strategies based on clients’
                                                                        specific security needs to protect networks,
                                                                        devices, programs, and data from attacks or
                                                                        unauthorized access.</p>
                                                                        <p style="text-align: center;"><a
                                                                                href="https://convergetp.com/cybersecurity/">Read
                                                                                More</a></p></div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="et_pb_module dsm_flipbox dsm_flipbox_5">


                                                <div class="et_pb_module_inner">
                                                    <div class="dsm-flipbox dsm-flipbox-effect-right">
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_10 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_child_image"><span
                                                                        class="dsm_flipbox_child_image_wrap"><img alt=""
                                                                                                                  data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/TalentSolutions-200x200-1.png"
                                                                                                                  class="lazyload"
                                                                                                                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/TalentSolutions-200x200-1.png"
                                                                                alt=""/></noscript></span></div>
                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">
                                                                    <h2 class="dsm-title et_pb_module_header">Talent
                                                                        Solutions</h2>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="et_pb_module dsm_flipbox_child dsm_flipbox_child_11 et_pb_bg_layout_light  dsm_flipbox_icon_position_top">


                                                            <div class="et_pb_module_inner">


                                                                <div class="dsm_flipbox_wrapper et_pb_text_align_left">


                                                                    <div class="dsm-content"><p>Our Talent Solution Team
                                                                            consists of gifted recruiters and account
                                                                            managers who have built a massive network of
                                                                            talent. We find and place top IT
                                                                            professionals, enabling clients to build,
                                                                            transition, and transform their business
                                                                            through people.</p>
                                                                        <p style="text-align: center;"><a
                                                                                href="https://convergetp.com/talent-solutions/">Read
                                                                                More</a></p></div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->


                                </div> <!-- .et_pb_section -->
                                <div
                                    class="et_pb_section et_pb_section_3 et_pb_with_background et_pb_fullwidth_section et_section_regular">


                                    <section
                                        class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_clickable et_pb_text_align_center et_pb_bg_layout_dark">


                                        <div class="et_pb_fullwidth_header_container center">
                                            <div class="header-content-container center">
                                                <div class="header-content">

                                                    <h2 class="et_pb_module_header">Building Confidence Through
                                                        Proactive IT Solutions</h2>

                                                    <div class="et_pb_header_content_wrapper"></div>
                                                    <a class="et_pb_button et_pb_more_button et_pb_button_one" href="">Contact
                                                        Us</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="et_pb_fullwidth_header_overlay"></div>
                                        <div class="et_pb_fullwidth_header_scroll"></div>
                                    </section>


                                </div> <!-- .et_pb_section -->
                                <div class="et_pb_section et_pb_section_4 et_section_regular">


                                    <div class="et_pb_row et_pb_row_4">
                                        <div
                                            class="et_pb_column et_pb_column_4_4 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div
                                                class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_left et_pb_bg_layout_light">


                                                <div class="et_pb_text_inner"><h2>Strategic Alliances</h2></div>
                                            </div> <!-- .et_pb_text -->
                                            <div
                                                class="et_pb_module et_pb_divider et_pb_divider_1 et_pb_divider_position_ et_pb_space">
                                                <div class="et_pb_divider_internal"></div>
                                            </div>
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->
                                    <div class="et_pb_row et_pb_row_5 et_pb_gutters1">
                                        <div
                                            class="et_pb_column et_pb_column_1_5 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module et_pb_image et_pb_image_0">


                                                <a href="https://aws.amazon.com/" target="_blank"><span
                                                        class="et_pb_image_wrap "><img loading="lazy" alt=""
                                                                                       title="aws-real" height="auto"
                                                                                       width="auto"
                                                                                       data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/aws-real.png"
                                                                                       class="lazyload"
                                                                                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                loading="lazy"
                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/aws-real.png"
                                                                alt="" title="aws-real" height="auto"
                                                                width="auto"/></noscript></span></a>
                                            </div>
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_5 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module et_pb_image et_pb_image_1 et_pb_image_sticky">


                                                <a href="https://www.cisco.com/" target="_blank"><span
                                                        class="et_pb_image_wrap "><img loading="lazy" alt=""
                                                                                       title="cisco-Gold-logo"
                                                                                       height="auto" width="auto"
                                                                                       data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/cisco-Gold-logo.png"
                                                                                       class="lazyload"
                                                                                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                loading="lazy"
                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/cisco-Gold-logo.png"
                                                                alt="" title="cisco-Gold-logo" height="auto"
                                                                width="auto"/></noscript></span></a>
                                            </div>
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_5 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module et_pb_image et_pb_image_2 et_pb_image_sticky">


                                                <a href="https://www.delltechnologies.com/en-us/index.htm"
                                                   target="_blank"><span class="et_pb_image_wrap "><img loading="lazy"
                                                                                                        alt=""
                                                                                                        title="partner-logo-dell-technologies-partner-titanium-v2"
                                                                                                        height="auto"
                                                                                                        width="auto"
                                                                                                        data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/10/partner-logo-dell-technologies-partner-titanium-v2.png"
                                                                                                        class="wp-image-12136 lazyload"
                                                                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                loading="lazy"
                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/10/partner-logo-dell-technologies-partner-titanium-v2.png"
                                                                alt=""
                                                                title="partner-logo-dell-technologies-partner-titanium-v2"
                                                                height="auto" width="auto"
                                                                class="wp-image-12136"/></noscript></span></a>
                                            </div>
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_5 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module et_pb_image et_pb_image_3">


                                                <a href="https://cloud.google.com/" target="_blank"><span
                                                        class="et_pb_image_wrap "><img loading="lazy"
                                                                                       alt="Google Cloud Partner"
                                                                                       title="GC-Partner-outline-H"
                                                                                       height="auto" width="auto"
                                                                                       data-srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/GC-Partner-outline-H.png 952w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/GC-Partner-outline-H-480x147.png 480w"
                                                                                       data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/GC-Partner-outline-H.png"
                                                                                       data-sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 952px, 100vw"
                                                                                       class="wp-image-13513 lazyload"
                                                                                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                loading="lazy"
                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/GC-Partner-outline-H.png"
                                                                alt="Google Cloud Partner" title="GC-Partner-outline-H"
                                                                height="auto" width="auto"
                                                                srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/GC-Partner-outline-H.png 952w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/GC-Partner-outline-H-480x147.png 480w"
                                                                sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 952px, 100vw"
                                                                class="wp-image-13513"/></noscript></span></a>
                                            </div>
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_5 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div class="et_pb_module et_pb_image et_pb_image_4">


                                                <a href="https://www.ibm.com/us-en/?ar=1" target="_blank"><span
                                                        class="et_pb_image_wrap "><img loading="lazy"
                                                                                       alt="IBM Platinum Business Partner"
                                                                                       title="IBM---Platinum-Business-Partner-Logo---Blue_Black_White_resized"
                                                                                       height="auto" width="auto"
                                                                                       data-srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/IBM-Platinum-Business-Partner-Logo-Blue_Black_White_resized.png 500w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/IBM-Platinum-Business-Partner-Logo-Blue_Black_White_resized-480x270.png 480w"
                                                                                       data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/IBM-Platinum-Business-Partner-Logo-Blue_Black_White_resized.png"
                                                                                       data-sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw"
                                                                                       class="wp-image-13787 lazyload"
                                                                                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                loading="lazy"
                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/IBM-Platinum-Business-Partner-Logo-Blue_Black_White_resized.png"
                                                                alt="IBM Platinum Business Partner"
                                                                title="IBM---Platinum-Business-Partner-Logo---Blue_Black_White_resized"
                                                                height="auto" width="auto"
                                                                srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/IBM-Platinum-Business-Partner-Logo-Blue_Black_White_resized.png 500w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/IBM-Platinum-Business-Partner-Logo-Blue_Black_White_resized-480x270.png 480w"
                                                                sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 500px, 100vw"
                                                                class="wp-image-13787"/></noscript></span></a>
                                            </div>
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->
                                    <div class="et_pb_row et_pb_row_6">
                                        <div
                                            class="et_pb_column et_pb_column_1_5 et_pb_column_12  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module et_pb_image et_pb_image_5">


                                                <a href="https://www.ingrammicro.com/" target="_blank"><span
                                                        class="et_pb_image_wrap "><img loading="lazy" alt=""
                                                                                       title="ingram-micro-logo-png-transparent-svg-vector-freebie-supply-ingram-png-2400_388-1"
                                                                                       height="auto" width="auto"
                                                                                       data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/ingram-micro-logo-png-transparent-svg-vector-freebie-supply-ingram-png-2400_388-1.png"
                                                                                       class="wp-image-10575 lazyload"
                                                                                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                loading="lazy"
                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/ingram-micro-logo-png-transparent-svg-vector-freebie-supply-ingram-png-2400_388-1.png"
                                                                alt=""
                                                                title="ingram-micro-logo-png-transparent-svg-vector-freebie-supply-ingram-png-2400_388-1"
                                                                height="auto" width="auto"
                                                                class="wp-image-10575"/></noscript></span></a>
                                            </div>
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_5 et_pb_column_13  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module et_pb_image et_pb_image_6">


                                                <a href="https://www.microsoft.com/" target="_blank"><span
                                                        class="et_pb_image_wrap "><img loading="lazy" alt=""
                                                                                       title="ms-gold" height="auto"
                                                                                       width="auto"
                                                                                       data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/ms-gold.png"
                                                                                       class="wp-image-10576 lazyload"
                                                                                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                loading="lazy"
                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/ms-gold.png"
                                                                alt="" title="ms-gold" height="auto" width="auto"
                                                                class="wp-image-10576"/></noscript></span></a>
                                            </div>
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_5 et_pb_column_14  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module et_pb_image et_pb_image_7">


                                                <a href="https://www.purestorage.com/" target="_blank"><span
                                                        class="et_pb_image_wrap "><img loading="lazy" alt=""
                                                                                       title="partner-logo-purestorage-347x204-02"
                                                                                       height="auto" width="auto"
                                                                                       data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/partner-logo-purestorage-347x204-02.png"
                                                                                       class="wp-image-10577 lazyload"
                                                                                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                loading="lazy"
                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/partner-logo-purestorage-347x204-02.png"
                                                                alt="" title="partner-logo-purestorage-347x204-02"
                                                                height="auto" width="auto"
                                                                class="wp-image-10577"/></noscript></span></a>
                                            </div>
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_5 et_pb_column_15  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module et_pb_image et_pb_image_8">


                                                <a href="https://www.redhat.com/en" target="_blank"><span
                                                        class="et_pb_image_wrap "><img loading="lazy" alt=""
                                                                                       title="red-hat-apex-partner"
                                                                                       height="auto" width="auto"
                                                                                       data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/red-hat-apex-partner.png"
                                                                                       class="wp-image-10578 lazyload"
                                                                                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                loading="lazy"
                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/red-hat-apex-partner.png"
                                                                alt="" title="red-hat-apex-partner" height="auto"
                                                                width="auto" class="wp-image-10578"/></noscript></span></a>
                                            </div>
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_5 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div class="et_pb_module et_pb_image et_pb_image_9">


                                                <a href="https://www.vmware.com/" target="_blank"><span
                                                        class="et_pb_image_wrap "><img loading="lazy" alt=""
                                                                                       title="vmware-principal-partner"
                                                                                       height="auto" width="auto"
                                                                                       data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/vmware-principal-partner.png"
                                                                                       class="wp-image-10579 lazyload"
                                                                                       src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                                loading="lazy"
                                                                src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/vmware-principal-partner.png"
                                                                alt="" title="vmware-principal-partner" height="auto"
                                                                width="auto" class="wp-image-10579"/></noscript></span></a>
                                            </div>
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->
                                    <div class="et_pb_row et_pb_row_7">
                                        <div
                                            class="et_pb_column et_pb_column_4_4 et_pb_column_17  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div
                                                class="et_pb_button_module_wrapper et_pb_button_1_wrapper et_pb_button_alignment_center et_pb_module ">
                                                <a class="et_pb_button et_pb_button_1 et_pb_bg_layout_light"
                                                   href="https://convergetp.com/strategic-alliances/">See More</a>
                                            </div>
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->


                                </div> <!-- .et_pb_section -->
                                <div class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular">


                                    <div class="et_pb_row et_pb_row_8 et_pb_equal_columns et_pb_gutters4">
                                        <div
                                            class="et_pb_column et_pb_column_4_4 et_pb_column_18  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div
                                                class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_left et_pb_bg_layout_light">


                                                <div class="et_pb_text_inner"><h2>Newsroom</h2></div>
                                            </div> <!-- .et_pb_text -->
                                            <div
                                                class="et_pb_module et_pb_divider et_pb_divider_2 et_pb_divider_position_ et_pb_space">
                                                <div class="et_pb_divider_internal"></div>
                                            </div>
                                            <div
                                                class="et_pb_module et_pb_blog_0 et_blog_grid_equal_height et_pb_blog_grid_wrapper">
                                                <div class="et_pb_blog_grid clearfix ">


                                                    <div class="et_pb_ajax_pagination_container">
                                                        <div class="et_pb_salvattore_content" data-columns>
                                                            <article id="post-13860"
                                                                     class="et_pb_post clearfix et_pb_blog_item_0_0 post-13860 post type-post status-publish format-standard has-post-thumbnail hentry category-blogs tag-adapt tag-agile tag-experiment tag-george-watt tag-government tag-inspect tag-lean-transformation tag-navigation tag-private-sector tag-wilderness">

                                                                <div class="et_pb_image_container"><a
                                                                        href="https://convergetp.com/2021/02/23/what-wilderness-navigation-taught-me-about-lean-transformation/"
                                                                        class="entry-featured-image-url"><img
                                                                            loading="lazy"
                                                                            alt="What Wilderness Navigation Taught Me About Lean Transformation"
                                                                            data-srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/What-Wilderness-Navigation-Taught-Me-About-Lean-Transformation.jpg 479w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/What-Wilderness-Navigation-Taught-Me-About-Lean-Transformation-400x250.jpg 480w "
                                                                            width="400" height="250"
                                                                            data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/What-Wilderness-Navigation-Taught-Me-About-Lean-Transformation-400x250.jpg"
                                                                            data-sizes="(max-width:479px) 479px, 100vw "
                                                                            class="lazyload"
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/>
                                                                        <noscript><img loading="lazy"
                                                                                       src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/What-Wilderness-Navigation-Taught-Me-About-Lean-Transformation-400x250.jpg"
                                                                                       alt="What Wilderness Navigation Taught Me About Lean Transformation"
                                                                                       class=""
                                                                                       srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/What-Wilderness-Navigation-Taught-Me-About-Lean-Transformation.jpg 479w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/What-Wilderness-Navigation-Taught-Me-About-Lean-Transformation-400x250.jpg 480w "
                                                                                       sizes="(max-width:479px) 479px, 100vw "
                                                                                       width="400" height="250"/>
                                                                        </noscript>
                                                                    </a></div> <!-- .et_pb_image_container -->
                                                                <h2 class="entry-title"><a
                                                                        href="https://convergetp.com/2021/02/23/what-wilderness-navigation-taught-me-about-lean-transformation/">What
                                                                        Wilderness Navigation Taught Me About Lean
                                                                        Transformation</a></h2>

                                                                <p class="post-meta">by <span class="author vcard"><a
                                                                            href="https://convergetp.com/author/gwatt/"
                                                                            title="Posts by George Watt" rel="author">George Watt</a></span>
                                                                    | <span class="published">Feb 23, 2021</span></p>
                                                                <div class="post-content">
                                                                    <div class="post-content-inner"><p>Lean approaches
                                                                            drive benefits far beyond their
                                                                            profit-driven, private-sector roots I hear
                                                                            it often. “This lean and agile stuff is
                                                                            cool, but it’s not really applicable to me.”
                                                                            “We’re not a startup.” “We create programs,
                                                                            not products.” “We deliver government
                                                                            services.”...</p>
                                                                    </div>
                                                                    <a href="https://convergetp.com/2021/02/23/what-wilderness-navigation-taught-me-about-lean-transformation/"
                                                                       class="more-link">read more</a></div>
                                                            </article> <!-- .et_pb_post -->

                                                            <article id="post-13502"
                                                                     class="et_pb_post clearfix et_pb_blog_item_0_1 post-13502 post type-post status-publish format-standard has-post-thumbnail hentry category-advanced-analytics category-blogs tag-advanced-analytics tag-analytics tag-appliances tag-cloud tag-data-warehousing tag-database-management tag-netezza tag-oracle tag-rdbms tag-relational-database-management-system tag-sql">

                                                                <div class="et_pb_image_container"><a
                                                                        href="https://convergetp.com/2021/02/17/examining-the-past-present-and-future-of-data-warehousing-and-analytics/"
                                                                        class="entry-featured-image-url"><img
                                                                            loading="lazy"
                                                                            alt="Examining the Past, Present, and Future of Data Warehousing and Analytics"
                                                                            data-srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Examining-the-Past-Present-and-Future-of-Data-Warehousing-and-Analytics-1.jpg 479w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Examining-the-Past-Present-and-Future-of-Data-Warehousing-and-Analytics-1-400x250.jpg 480w "
                                                                            width="400" height="250"
                                                                            data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Examining-the-Past-Present-and-Future-of-Data-Warehousing-and-Analytics-1-400x250.jpg"
                                                                            data-sizes="(max-width:479px) 479px, 100vw "
                                                                            class="lazyload"
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/>
                                                                        <noscript><img loading="lazy"
                                                                                       src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Examining-the-Past-Present-and-Future-of-Data-Warehousing-and-Analytics-1-400x250.jpg"
                                                                                       alt="Examining the Past, Present, and Future of Data Warehousing and Analytics"
                                                                                       class=""
                                                                                       srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Examining-the-Past-Present-and-Future-of-Data-Warehousing-and-Analytics-1.jpg 479w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Examining-the-Past-Present-and-Future-of-Data-Warehousing-and-Analytics-1-400x250.jpg 480w "
                                                                                       sizes="(max-width:479px) 479px, 100vw "
                                                                                       width="400" height="250"/>
                                                                        </noscript>
                                                                    </a></div> <!-- .et_pb_image_container -->
                                                                <h2 class="entry-title"><a
                                                                        href="https://convergetp.com/2021/02/17/examining-the-past-present-and-future-of-data-warehousing-and-analytics/">Examining
                                                                        the Past, Present, and Future of Data
                                                                        Warehousing and Analytics</a></h2>

                                                                <p class="post-meta">by <span class="author vcard"><a
                                                                            href="https://convergetp.com/author/rsinclair/"
                                                                            title="Posts by Robb Sinclair" rel="author">Robb Sinclair</a></span>
                                                                    | <span class="published">Feb 17, 2021</span></p>
                                                                <div class="post-content">
                                                                    <div class="post-content-inner"><p>Since I started
                                                                            my career about 25 years ago, data
                                                                            warehousing and the analytics tools it
                                                                            supports have come a long way. From the
                                                                            early days of relational database management
                                                                            systems (RDBMS) to the launch of
                                                                            high-performance analytics appliances and
                                                                            the emergence of...</p>
                                                                    </div>
                                                                    <a href="https://convergetp.com/2021/02/17/examining-the-past-present-and-future-of-data-warehousing-and-analytics/"
                                                                       class="more-link">read more</a></div>
                                                            </article> <!-- .et_pb_post -->

                                                            <article id="post-13614"
                                                                     class="et_pb_post clearfix et_pb_blog_item_0_2 post-13614 post type-post status-publish format-standard has-post-thumbnail hentry category-blogs category-cloud tag-app-management tag-applications tag-automation tag-automation-tools tag-cloud-delivered tag-covid tag-saas tag-software tag-software-as-a-service tag-wfh tag-work-from-home">

                                                                <div class="et_pb_image_container"><a
                                                                        href="https://convergetp.com/2021/02/11/work-from-home-and-the-saas-imperative/"
                                                                        class="entry-featured-image-url"><img
                                                                            loading="lazy"
                                                                            alt="Work from Home and the SaaS Imperative"
                                                                            data-srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Work-From-Home-and-the-Saas-Imperative.jpg 479w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Work-From-Home-and-the-Saas-Imperative-400x250.jpg 480w "
                                                                            width="400" height="250"
                                                                            data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Work-From-Home-and-the-Saas-Imperative-400x250.jpg"
                                                                            data-sizes="(max-width:479px) 479px, 100vw "
                                                                            class="lazyload"
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/>
                                                                        <noscript><img loading="lazy"
                                                                                       src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Work-From-Home-and-the-Saas-Imperative-400x250.jpg"
                                                                                       alt="Work from Home and the SaaS Imperative"
                                                                                       class=""
                                                                                       srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Work-From-Home-and-the-Saas-Imperative.jpg 479w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Work-From-Home-and-the-Saas-Imperative-400x250.jpg 480w "
                                                                                       sizes="(max-width:479px) 479px, 100vw "
                                                                                       width="400" height="250"/>
                                                                        </noscript>
                                                                    </a></div> <!-- .et_pb_image_container -->
                                                                <h2 class="entry-title"><a
                                                                        href="https://convergetp.com/2021/02/11/work-from-home-and-the-saas-imperative/">Work
                                                                        from Home and the SaaS Imperative</a></h2>

                                                                <p class="post-meta">by <span class="author vcard"><a
                                                                            href="https://convergetp.com/author/mbisignani/"
                                                                            title="Posts by Mick Bisignani"
                                                                            rel="author">Mick Bisignani</a></span> |
                                                                    <span class="published">Feb 11, 2021</span></p>
                                                                <div class="post-content">
                                                                    <div class="post-content-inner"><p>There is a reason
                                                                            why many organizations have been able to,
                                                                            with relative ease, achieve the transition
                                                                            to a work from home (WFH) reality in the
                                                                            aftermath of the COVID-19 pandemic: Many of
                                                                            the technologies that enterprises have used
                                                                            traditionally benefit from simpler...</p>
                                                                    </div>
                                                                    <a href="https://convergetp.com/2021/02/11/work-from-home-and-the-saas-imperative/"
                                                                       class="more-link">read more</a></div>
                                                            </article> <!-- .et_pb_post -->
                                                        </div><!-- .et_pb_salvattore_content -->
                                                        <div>
                                                            <div class="pagination clearfix">
                                                                <div class="alignleft"><a
                                                                        href="https://convergetp.com/page/2/?et_blog">&laquo;
                                                                        Older Entries</a></div>
                                                                <div class="alignright"></div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- .et_pb_posts -->
                                                </div>

                                            </div>
                                            <div
                                                class="et_pb_button_module_wrapper et_pb_button_2_wrapper et_pb_button_alignment_center et_pb_module ">
                                                <a class="et_pb_button et_pb_button_2 et_pb_bg_layout_dark"
                                                   href="https://convergetp.com/newsroom/">Visit our Newsroom</a>
                                            </div>
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->


                                </div> <!-- .et_pb_section -->
                                <div class="et_pb_section et_pb_section_6 et_section_regular">


                                    <div class="et_pb_row et_pb_row_9">
                                        <div
                                            class="et_pb_column et_pb_column_4_4 et_pb_column_19  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div
                                                class="et_pb_module et_pb_text et_pb_text_6  et_pb_text_align_left et_pb_bg_layout_light">


                                                <div class="et_pb_text_inner"><h2>Where is Converge?</h2></div>
                                            </div> <!-- .et_pb_text -->
                                            <div
                                                class="et_pb_module et_pb_divider et_pb_divider_3 et_pb_divider_position_ et_pb_space">
                                                <div class="et_pb_divider_internal"></div>
                                            </div>
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->
                                    <div class="et_pb_row et_pb_row_10">
                                        <div
                                            class="et_pb_column et_pb_column_3_4 et_pb_column_20  et_pb_css_mix_blend_mode_passthrough">


                                            <div class="et_pb_module et_pb_code et_pb_code_0">


                                                <div class="et_pb_code_inner">
                                                    <script
                                                        src="https://hosting.simplemaps.com/users/JdnYqQ5Zc1KP/mapdata.js"></script>
                                                    <script
                                                        src="https://hosting.simplemaps.com/users/JdnYqQ5Zc1KP/namap.js"></script>
                                                    <div id="map"></div>
                                                </div>
                                            </div> <!-- .et_pb_code -->
                                        </div> <!-- .et_pb_column -->
                                        <div
                                            class="et_pb_column et_pb_column_1_4 et_pb_column_21  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                            <div class="et_pb_module et_pb_image et_pb_image_10">


                                                <span class="et_pb_image_wrap "><img loading="lazy" alt=""
                                                                                     title="Converge Map FEB 2021-legendd"
                                                                                     height="auto" width="auto"
                                                                                     data-srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Converge-Map-FEB-2021-legendd.png 1984w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Converge-Map-FEB-2021-legendd-1280x1148.png 1280w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Converge-Map-FEB-2021-legendd-980x879.png 980w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Converge-Map-FEB-2021-legendd-480x430.png 480w"
                                                                                     data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Converge-Map-FEB-2021-legendd.png"
                                                                                     data-sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 1984px, 100vw"
                                                                                     class="wp-image-13681 lazyload"
                                                                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="/><noscript><img
                                                            loading="lazy"
                                                            src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Converge-Map-FEB-2021-legendd.png"
                                                            alt="" title="Converge Map FEB 2021-legendd" height="auto"
                                                            width="auto"
                                                            srcset="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Converge-Map-FEB-2021-legendd.png 1984w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Converge-Map-FEB-2021-legendd-1280x1148.png 1280w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Converge-Map-FEB-2021-legendd-980x879.png 980w, https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2021/02/Converge-Map-FEB-2021-legendd-480x430.png 480w"
                                                            sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 1984px, 100vw"
                                                            class="wp-image-13681"/></noscript></span>
                                            </div>
                                        </div> <!-- .et_pb_column -->


                                    </div> <!-- .et_pb_row -->


                                </div> <!-- .et_pb_section -->        </div><!-- .et_builder_inner_content -->
                        </div><!-- .et-l -->


                    </div><!-- #et-boc -->
                </div> <!-- .entry-content -->


            </article> <!-- .et_pb_post -->


        </div> <!-- #main-content -->


        <span class="et_pb_scroll_top et-pb-icon"></span>


        <footer id="main-footer">

            <div class="container">
                <div id="footer-widgets" class="clearfix">
                    <div class="footer-widget">
                        <div id="custom_html-3" class="widget_text fwidget et_pb_widget widget_custom_html">
                            <div class="textwidget custom-html-widget"><img alt="white Converge logo" width="200"
                                                                            id="footerlogo"
                                                                            data-src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/Convergetp_white_logo.png"
                                                                            class="lazyload"
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                <noscript><img
                                        src="https://a4n3h6d7.stackpathcdn.com/wp-content/uploads/2020/09/Convergetp_white_logo.png"
                                        alt="white Converge logo" width="200" id="footerlogo"></noscript>

                                <p>
                                    <b>Headquarters - </b>161 Bay St Suite 2325<br>Toronto, ON. Canada M5J 2S1
                                </p>
                                <p>
                                    <b>Business Hours -</b> 9:00am EST - 5:00pm EST
                                </p>
                                <p>
                                    © <b>Converge Technology Solutions Corp.</b><br>
                                    All Rights Reserved | <a href="https://convergetp.com/privacy-policy/">Privacy
                                        Policy</a> | <a href="https://convergetp.com/cookies-policy/">Cookies Policy</a>

                                </p></div>
                        </div> <!-- end .fwidget --></div> <!-- end .footer-widget -->
                    <div class="footer-widget">
                        <div id="nav_menu-7" class="fwidget et_pb_widget widget_nav_menu">
                            <div class="menu-footer-menu-container">
                                <ul id="menu-footer-menu" class="menu">
                                    <li id="menu-item-11390"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11390">
                                        <a href="https://convergetp.com/about-us/">Company</a></li>
                                    <li id="menu-item-10227"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10227">
                                        <a href="https://convergetp.com/solutions/">Solutions</a></li>
                                    <li id="menu-item-10225"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10225">
                                        <a href="https://convergetp.com/investor-relations/">Investor Relations</a></li>
                                    <li id="menu-item-10226"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10226">
                                        <a href="https://convergetp.com/newsroom/">Newsroom</a></li>
                                    <li id="menu-item-10222"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10222">
                                        <a href="https://convergetp.com/case-studies/">Case Studies</a></li>
                                    <li id="menu-item-10224"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10224">
                                        <a href="https://convergetp.com/contact-us/">Contact Us</a></li>
                                </ul>
                            </div>
                        </div> <!-- end .fwidget --></div> <!-- end .footer-widget -->
                    <div class="footer-widget">
                        <div id="custom_html-5" class="widget_text fwidget et_pb_widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="footer3">
                                    <p>
                                        <b>Let's Connect</b>
                                    </p><span class="footericons">
<a href="https://twitter.com/ConvergeTSC" target="_blank" rel="noopener noreferrer">
<i class="fab fa-twitter fa-2x fa-fw"></i></a>
	<a href="https://www.linkedin.com/company/converge-technology-partners-inc" target="_blank"
       rel="noopener noreferrer">
<i class="fab fa-linkedin-in fa-2x fa-fw"></i></a>
</span>
                                </div>
                            </div>
                        </div> <!-- end .fwidget --></div> <!-- end .footer-widget -->    </div><!-- #footer-widgets -->
            </div>    <!-- .container -->


            <div id="footer-bottom">
                <div class="container clearfix">
                </div>    <!-- .container -->
            </div>
        </footer> <!-- #main-footer -->
    </div> <!-- #et-main-area -->


</div> <!-- #page-container -->

<!--googleoff: all-->
<div id="cookie-law-info-bar" data-nosnippet="true"><span><div class="cli-bar-container cli-style-v2"><div
                class="cli-bar-message">We use cookies on our website to give you the most relevant experience by remembering your preferences and repeat visits. By clicking “Accept”, you consent to the use of ALL the cookies. For more information view our <a
                    href="https://convergetp.com/privacy-policy/">Privacy Policy</a> and <a
                    href="https://convergetp.com/cookies-policy/”">Cookies Policy</a>.</div><div
                class="cli-bar-btn_container"><a role='button' tabindex='0' class="cli_settings_button"
                                                 style="margin:0px 10px 0px 5px;">Cookie settings</a><a role='button'
                                                                                                        tabindex='0'
                                                                                                        data-cli_action="accept"
                                                                                                        id="cookie_action_close_header"
                                                                                                        class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button"
                                                                                                        style="display:inline-block; ">ACCEPT</a></div></div></span>
</div>
<div id="cookie-law-info-again" style="display:none;" data-nosnippet="true"><span id="cookie_hdr_showagain">Privacy & Cookies Policy</span>
</div>
<div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog"
     aria-labelledby="cliSettingsPopup" aria-hidden="true">
    <div class="cli-modal-dialog" role="document">
        <div class="cli-modal-content cli-bar-popup">
            <button type="button" class="cli-modal-close" id="cliModalClose">
                <svg class="" viewBox="0 0 24 24">
                    <path
                        d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"></path>
                    <path d="M0 0h24v24h-24z" fill="none"></path>
                </svg>
                <span class="wt-cli-sr-only">Close</span>
            </button>
            <div class="cli-modal-body">
                <div class="cli-container-fluid cli-tab-container">
                    <div class="cli-row">
                        <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                            <div class="cli-privacy-overview">
                                <h4>Privacy Overview</h4>
                                <div class="cli-privacy-content">
                                    <div class="cli-privacy-content-text">This website uses cookies to improve your
                                        experience while you navigate through the website. Out of these cookies, the
                                        cookies that are categorized as necessary are stored on your browser as they are
                                        essential for the working of basic functionalities of the website. We also use
                                        third-party cookies that help us analyze and understand how you use this
                                        website. These cookies will be stored in your browser only with your consent.
                                        You also have the option to opt-out of these cookies. But opting out of some of
                                        these cookies may have an effect on your browsing experience.
                                    </div>
                                </div>
                                <a class="cli-privacy-readmore" tabindex="0" role="button"
                                   data-readmore-text="Show more" data-readless-text="Show less"></a></div>
                        </div>
                        <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                            <div class="cli-tab-section">
                                <div class="cli-tab-header">
                                    <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                       data-target="necessary" data-toggle="cli-toggle-tab">
                                        Necessary </a>
                                    <div class="wt-cli-necessary-checkbox">
                                        <input type="checkbox" class="cli-user-preference-checkbox"
                                               id="wt-cli-checkbox-necessary" data-id="checkbox-necessary"
                                               checked="checked"/>
                                        <label class="form-check-label"
                                               for="wt-cli-checkbox-necessary">Necessary</label>
                                    </div>
                                    <span class="cli-necessary-caption">Always Enabled</span></div>
                                <div class="cli-tab-content">
                                    <div class="cli-tab-pane cli-fade" data-id="necessary">
                                        <p>Necessary cookies are absolutely essential for the website to function
                                            properly. This category only includes cookies that ensures basic
                                            functionalities and security features of the website. These cookies do not
                                            store any personal information.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cli-tab-section">
                                <div class="cli-tab-header">
                                    <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                       data-target="non-necessary" data-toggle="cli-toggle-tab">
                                        Non-necessary </a>
                                    <div class="cli-switch">
                                        <input type="checkbox" id="wt-cli-checkbox-non-necessary"
                                               class="cli-user-preference-checkbox" data-id="checkbox-non-necessary"
                                               checked='checked'/>
                                        <label for="wt-cli-checkbox-non-necessary" class="cli-slider"
                                               data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                class="wt-cli-sr-only">Non-necessary</span></label>
                                    </div>
                                </div>
                                <div class="cli-tab-content">
                                    <div class="cli-tab-pane cli-fade" data-id="non-necessary">
                                        <p>Any cookies that may not be particularly necessary for the website to
                                            function and is used specifically to collect user personal data via
                                            analytics, ads, other embedded contents are termed as non-necessary cookies.
                                            It is mandatory to procure user consent prior to running these cookies on
                                            your website.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cli-modal-footer">
                <div class="wt-cli-element cli-container-fluid cli-tab-container">
                    <div class="cli-row">
                        <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                            <div class="cli-tab-footer wt-cli-privacy-overview-actions">

                                <a id="wt-cli-privacy-save-btn" role="button" tabindex="0" data-cli-action="accept"
                                   class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE
                                    & ACCEPT</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
<!--googleon: all-->
<script type="text/javascript">
    var et_link_options_data = [{
        "class": "et_pb_fullwidth_header_0",
        "url": "https:\/\/convergetp.com\/contact-us\/",
        "target": "_self"
    }];
</script>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe height="0" width="0" style="display:none;visibility:hidden"
            data-src="https://www.googletagmanager.com/ns.html?id=GTM-W7RH2JD" class="lazyload"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<link rel='stylesheet' id='mediaelement-css'
      href='https://a4n3h6d7.stackpathcdn.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.13-9993131'
      type='text/css' media='all'/>
<link rel='stylesheet' id='wp-mediaelement-css'
      href='https://a4n3h6d7.stackpathcdn.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=5.5.3'
      type='text/css' media='all'/>
<link rel='stylesheet' id='et-builder-googlefonts-css'
      href='https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic&#038;subset=latin,latin-ext,vietnamese&#038;display=swap'
      type='text/css' media='all'/>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/afl-wc-utm/public/js/afl-js-cookies.min.js?ver=2.2.1'
        id='afl-js-cookies-js'></script>
<script type='text/javascript' id='afl-wc-utm-public-js-extra'>
    /* <![CDATA[ */
    var afl_wc_utm_public = {
        "ajax_url": "https:\/\/convergetp.com\/wp-admin\/admin-ajax.php",
        "action": "afl_wc_utm_view",
        "nonce": "",
        "cookie_prefix": "afl_wc_utm_",
        "cookie_expiry": {"name": "afl_wc_utm_cookie_expiry", "days": 90},
        "domain_info": {"domain": "convergetp.com", "path": "\/"},
        "last_touch_window": "1800"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/afl-wc-utm/public/js/afl-wc-utm-public.min.js?ver=2.0.1'
        id='afl-wc-utm-public-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/ax-social-stream/public/js/utils.min.js?ver=3.8.6'
        id='axss-utils-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/ax-social-stream/public/js/wall.min.js?ver=3.8.6'
        id='axss-wall-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/stock-ticker/assets/js/jquery.webticker.min.js?ver=2.2.0.1'
        id='jquery-webticker-js'></script>
<script type='text/javascript' id='stock-ticker-js-extra'>
    /* <![CDATA[ */
    var stockTickerJs = {"ajax_url": "https:\/\/convergetp.com\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/stock-ticker/assets/js/jquery.stockticker.min.js?ver=3.2.0'
        id='stock-ticker-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/popups-for-divi/scripts/front.min.js?ver=2.3.5'
        id='js-divi-area-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.min.js?ver=3.8.3'
        id='smush-lazy-load-js'></script>
<script type='text/javascript' id='divi-custom-script-js-extra'>
    /* <![CDATA[ */
    var DIVI = {"item_count": "%d Item", "items_count": "%d Items"};
    var et_shortcodes_strings = {"previous": "Previous", "next": "Next"};
    var et_pb_custom = {
        "ajaxurl": "https:\/\/convergetp.com\/wp-admin\/admin-ajax.php",
        "images_uri": "https:\/\/convergetp.com\/wp-content\/themes\/Divi\/images",
        "builder_images_uri": "https:\/\/convergetp.com\/wp-content\/themes\/Divi\/includes\/builder\/images",
        "et_frontend_nonce": "1a8bd0b724",
        "subscription_failed": "Please, check the fields below to make sure you entered the correct information.",
        "et_ab_log_nonce": "c2e9bab9fb",
        "fill_message": "Please, fill in the following fields:",
        "contact_error_message": "Please, fix the following errors:",
        "invalid": "Invalid email",
        "captcha": "Captcha",
        "prev": "Prev",
        "previous": "Previous",
        "next": "Next",
        "wrong_captcha": "You entered the wrong number in captcha.",
        "wrong_checkbox": "Checkbox",
        "ignore_waypoints": "no",
        "is_divi_theme_used": "1",
        "widget_search_selector": ".widget_search",
        "ab_tests": [],
        "is_ab_testing_active": "",
        "page_id": "82",
        "unique_test_id": "",
        "ab_bounce_rate": "5",
        "is_cache_plugin_active": "yes",
        "is_shortcode_tracking": "",
        "tinymce_uri": ""
    };
    var et_builder_utils_params = {
        "condition": {"diviTheme": true, "extraTheme": false},
        "scrollLocations": ["app", "top"],
        "builderScrollLocations": {"desktop": "app", "tablet": "app", "phone": "app"},
        "onloadScrollLocation": "app",
        "builderType": "fe"
    };
    var et_frontend_scripts = {"builderCssContainerPrefix": "#et-boc", "builderCssLayoutPrefix": "#et-boc .et-l"};
    var et_pb_box_shadow_elements = [];
    var et_pb_motion_elements = {"desktop": [], "tablet": [], "phone": []};
    var et_pb_sticky_elements = [];
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/themes/Divi/js/custom.unified.js?ver=4.9.0'
        id='divi-custom-script-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/dwd-map-extended/scripts/frontend-bundle.min.js?ver=3.1.3'
        id='dwd-map-extended-frontend-bundle-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/supreme-modules-pro-for-divi/scripts/frontend-bundle.min.js?ver=3.4.1'
        id='supreme-modules-pro-for-divi-frontend-bundle-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/themes/Divi/core/admin/js/common.js?ver=4.9.0'
        id='et-core-common-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/js/glightbox.min.js?ver=1.0'
        id='extp-lightbox-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-content/plugins/teampress/js/jquery.nicescroll.min.js?ver=1.0'
        id='extp-nicescroll-js'></script>
<script type='text/javascript' src='https://a4n3h6d7.stackpathcdn.com/wp-includes/js/wp-embed.min.js?ver=5.5.3'
        id='wp-embed-js'></script>
<script type='text/javascript' id='mediaelement-core-js-before'>
    var mejsL10n = {
        "language": "en", "strings": {
            "mejs.download-file": "Download File",
            "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
            "mejs.fullscreen": "Fullscreen",
            "mejs.play": "Play",
            "mejs.pause": "Pause",
            "mejs.time-slider": "Time Slider",
            "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
            "mejs.live-broadcast": "Live Broadcast",
            "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
            "mejs.unmute": "Unmute",
            "mejs.mute": "Mute",
            "mejs.volume-slider": "Volume Slider",
            "mejs.video-player": "Video Player",
            "mejs.audio-player": "Audio Player",
            "mejs.captions-subtitles": "Captions\/Subtitles",
            "mejs.captions-chapters": "Chapters",
            "mejs.none": "None",
            "mejs.afrikaans": "Afrikaans",
            "mejs.albanian": "Albanian",
            "mejs.arabic": "Arabic",
            "mejs.belarusian": "Belarusian",
            "mejs.bulgarian": "Bulgarian",
            "mejs.catalan": "Catalan",
            "mejs.chinese": "Chinese",
            "mejs.chinese-simplified": "Chinese (Simplified)",
            "mejs.chinese-traditional": "Chinese (Traditional)",
            "mejs.croatian": "Croatian",
            "mejs.czech": "Czech",
            "mejs.danish": "Danish",
            "mejs.dutch": "Dutch",
            "mejs.english": "English",
            "mejs.estonian": "Estonian",
            "mejs.filipino": "Filipino",
            "mejs.finnish": "Finnish",
            "mejs.french": "French",
            "mejs.galician": "Galician",
            "mejs.german": "German",
            "mejs.greek": "Greek",
            "mejs.haitian-creole": "Haitian Creole",
            "mejs.hebrew": "Hebrew",
            "mejs.hindi": "Hindi",
            "mejs.hungarian": "Hungarian",
            "mejs.icelandic": "Icelandic",
            "mejs.indonesian": "Indonesian",
            "mejs.irish": "Irish",
            "mejs.italian": "Italian",
            "mejs.japanese": "Japanese",
            "mejs.korean": "Korean",
            "mejs.latvian": "Latvian",
            "mejs.lithuanian": "Lithuanian",
            "mejs.macedonian": "Macedonian",
            "mejs.malay": "Malay",
            "mejs.maltese": "Maltese",
            "mejs.norwegian": "Norwegian",
            "mejs.persian": "Persian",
            "mejs.polish": "Polish",
            "mejs.portuguese": "Portuguese",
            "mejs.romanian": "Romanian",
            "mejs.russian": "Russian",
            "mejs.serbian": "Serbian",
            "mejs.slovak": "Slovak",
            "mejs.slovenian": "Slovenian",
            "mejs.spanish": "Spanish",
            "mejs.swahili": "Swahili",
            "mejs.swedish": "Swedish",
            "mejs.tagalog": "Tagalog",
            "mejs.thai": "Thai",
            "mejs.turkish": "Turkish",
            "mejs.ukrainian": "Ukrainian",
            "mejs.vietnamese": "Vietnamese",
            "mejs.welsh": "Welsh",
            "mejs.yiddish": "Yiddish"
        }
    };
</script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.13-9993131'
        id='mediaelement-core-js'></script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=5.5.3'
        id='mediaelement-migrate-js'></script>
<script type='text/javascript' id='mediaelement-js-extra'>
    /* <![CDATA[ */
    var _wpmejsSettings = {
        "pluginPath": "\/wp-includes\/js\/mediaelement\/",
        "classPrefix": "mejs-",
        "stretching": "responsive"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://a4n3h6d7.stackpathcdn.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=5.5.3'
        id='wp-mediaelement-js'></script>
</body>
</html>

<!-- Dynamic page generated in 2.038 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2021-03-02 05:45:09 -->

<!-- Compression = gzip -->
