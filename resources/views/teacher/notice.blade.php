@extends('teacher.main')
@section('content')
<html lang="en-US" style="" class="js no-touch csstransforms3d csstransitions">

<head>
    <meta name="google-site-verification" content="l8IFQxW25QT0qcEyeThiHWZEmuFkc_PVEjeeHncPdGk">
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="hz4hwsWL74PoxAfEk9ND5g18gTZUO5tJ8HaLwTYQ54I">
    <meta name="google-site-verification" content="l8IFQxW25QT0qcEyeThiHWZEmuFkc_PVEjeeHncPdGk">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://www.barcouncil.gov.bd/xmlrpc.php">

    <link rel="shortcut icon" href="//www.barcouncil.gov.bd/wp-content/uploads/2015/09/Favicon-e1442155203863.png"
        type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="">

   

    <!--[if IE]>
    <link rel="stylesheet" href="https://www.barcouncil.gov.bd/wp-content/themes/Barcouncil/css/ie8.css?ver=" />
    <![endif]-->
    <style rel="stylesheet" property="stylesheet" type="text/css">
        #header .logo {
            max-width: 100px;
        }

        @media (min-width: 1170px) {
            #header .logo {
                max-width: 100px;
            }
        }

        @media (max-width: 991px) {
            #header .logo {
                max-width: 100px;
            }
        }

        @media (max-width: 767px) {
            #header .logo {
                max-width: 100px;
            }
        }

        #header.sticky-header .logo {
            max-width: 100px;
        }
    </style>
    <meta name="robots" content="max-image-preview:large">
    <link rel="dns-prefetch" href="//www.google.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="alternate" type="application/rss+xml" title="Bangladesh Bar Council » Feed"
        href="https://www.barcouncil.gov.bd/feed/">
    <link rel="alternate" type="application/rss+xml" title="Bangladesh Bar Council » Comments Feed"
        href="https://www.barcouncil.gov.bd/comments/feed/">
    <link rel="alternate" type="application/rss+xml" title="Bangladesh Bar Council » Notice Board Category Feed"
        href="https://www.barcouncil.gov.bd/category/notice-board/feed/">
    <script type="text/javascript" async=""
        src="https://www.gstatic.com/recaptcha/releases/4rwLQsl5N_ccppoTAwwwMrEN/recaptcha__en.js"
        crossorigin="anonymous"
        integrity="sha384-o1nfdUm9cV7Sx6HxXDsnady1EGmCBTwza/JTA6OSowyOK+wq0YF0+F9jejHVacaR"></script>
    <script type="text/javascript">
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/www.barcouncil.gov.bd\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.3" } };
        /*! This file is auto-generated */
        !function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode; p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0); e = i.toDataURL(); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (!p || !p.fillText) return !1; switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji))) }(window, document, window._wpemojiSettings);
    </script>
    <script src="https://www.barcouncil.gov.bd/wp-includes/js/wp-emoji-release.min.js?ver=5.9.3" type="text/javascript"
        defer=""></script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="sgr_main-css"
        href="https://www.barcouncil.gov.bd/wp-content/plugins/simple-google-recaptcha/sgr.css?ver=1647762455"
        type="text/css" media="all">
    <link rel="stylesheet" id="wp-block-library-css"
        href="https://www.barcouncil.gov.bd/wp-includes/css/dist/block-library/style.min.css?ver=5.9.3" type="text/css"
        media="all">
    <link rel="stylesheet" id="gutenberg-pdfjs-css"
        href="https://www.barcouncil.gov.bd/wp-content/plugins/pdfjs-viewer-shortcode/inc/../blocks/dist/style.css?ver=2.1.6"
        type="text/css" media="all">
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css"
        href="https://www.barcouncil.gov.bd/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.6"
        type="text/css" media="all">
    <link rel="stylesheet" id="bwg_fonts-css"
        href="https://www.barcouncil.gov.bd/wp-content/plugins/photo-gallery/css/bwg-fonts/fonts.css?ver=0.0.1"
        type="text/css" media="all">
    <link rel="stylesheet" id="sumoselect-css"
        href="https://www.barcouncil.gov.bd/wp-content/plugins/photo-gallery/css/sumoselect.min.css?ver=3.3.24"
        type="text/css" media="all">
    <link rel="stylesheet" id="mCustomScrollbar-css"
        href="https://www.barcouncil.gov.bd/wp-content/plugins/photo-gallery/css/jquery.mCustomScrollbar.min.css?ver=3.1.5"
        type="text/css" media="all">
    <link rel="stylesheet" id="bwg_frontend-css"
        href="https://www.barcouncil.gov.bd/wp-content/plugins/photo-gallery/css/styles.min.css?ver=1.6.3"
        type="text/css" media="all">
    <link rel="stylesheet" id="ms-main-css"
        href="https://www.barcouncil.gov.bd/wp-content/plugins/masterslider/public/assets/css/masterslider.main.css?ver=2.18.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="ms-custom-css"
        href="https://www.barcouncil.gov.bd/wp-content/uploads/masterslider/custom.css?ver=14.4" type="text/css"
        media="all">
    <link rel="stylesheet" id="ultimate-style-min-css"
        href="https://www.barcouncil.gov.bd/wp-content/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.min.css?ver=3.13.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="bsf-Defaults-css"
        href="https://www.barcouncil.gov.bd/wp-content/uploads/smile_fonts/Defaults/Defaults.css?ver=5.9.3"
        type="text/css" media="all">
    <link rel="stylesheet" id="porto-plugins-css"
        href="https://www.barcouncil.gov.bd/wp-content/themes/Barcouncil/css/plugins_1.css?ver=5.9.3" type="text/css"
        media="all">
    <link rel="stylesheet" id="porto-theme-css"
        href="https://www.barcouncil.gov.bd/wp-content/themes/Barcouncil/css/theme_1.css?ver=5.9.3" type="text/css"
        media="all">
    <link rel="stylesheet" id="porto-skin-css"
        href="https://www.barcouncil.gov.bd/wp-content/themes/Barcouncil/css/skin_1.css?ver=5.9.3" type="text/css"
        media="all">
    <link rel="stylesheet" id="porto-style-css"
        href="https://www.barcouncil.gov.bd/wp-content/themes/Barcouncil/style.css?ver=5.9.3" type="text/css"
        media="all">
    <link rel="stylesheet" id="porto-google-fonts-css"
        href="//fonts.googleapis.com/css?family=Droid+Serif%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%7C&amp;subset=latin%2Cgreek-ext%2Ccyrillic%2Clatin-ext%2Cgreek%2Ccyrillic-ext%2Cvietnamese&amp;ver=5.9.3"
        type="text/css" media="all">
    <link rel="stylesheet" id="styles-child-css"
        href="https://www.barcouncil.gov.bd/wp-content/themes/Barcouncil-child/style.css?ver=5.9.3" type="text/css"
        media="all">
    <script type="text/javascript" id="sgr_main-js-extra">
        /* <![CDATA[ */
        var sgr_main = { "sgr_site_key": "6LfaBbYUAAAAAPqBzySce_6VfH6LYAieXsrDM39S" };
/* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-content/plugins/simple-google-recaptcha/sgr.js?ver=1647762455"
        id="sgr_main-js"></script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-content/plugins/fade-in-fade-out-post-title/fade-in-fade-out-post-title.js?ver=5.9.3"
        id="fade-in-fade-out-post-title-js"></script>
    <script type="text/javascript" src="https://www.barcouncil.gov.bd/wp-includes/js/jquery/jquery.min.js?ver=3.6.0"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2"
        id="jquery-migrate-js"></script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-content/plugins/photo-gallery/js/jquery.sumoselect.min.js?ver=3.3.24"
        id="sumoselect-js"></script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-content/plugins/photo-gallery/js/jquery.mobile.min.js?ver=1.4.5"
        id="jquery-mobile-js"></script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-content/plugins/photo-gallery/js/jquery.mCustomScrollbar.concat.min.js?ver=3.1.5"
        id="mCustomScrollbar-js"></script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-content/plugins/photo-gallery/js/jquery.fullscreen.min.js?ver=0.6.0"
        id="jquery-fullscreen-js"></script>
    <script type="text/javascript" id="bwg_frontend-js-extra">
        /* <![CDATA[ */
        var bwg_objectsL10n = { "bwg_field_required": "field is required.", "bwg_mail_validation": "This is not a valid email address.", "bwg_search_result": "There are no images matching your search.", "bwg_select_tag": "Select Tag", "bwg_order_by": "Order By", "bwg_search": "Search", "bwg_show_ecommerce": "Show Ecommerce", "bwg_hide_ecommerce": "Hide Ecommerce", "bwg_show_comments": "Show Comments", "bwg_hide_comments": "Hide Comments", "bwg_restore": "Restore", "bwg_maximize": "Maximize", "bwg_fullscreen": "Fullscreen", "bwg_exit_fullscreen": "Exit Fullscreen", "bwg_search_tag": "SEARCH...", "bwg_tag_no_match": "No tags found", "bwg_all_tags_selected": "All tags selected", "bwg_tags_selected": "tags selected", "play": "Play", "pause": "Pause", "is_pro": "", "bwg_play": "Play", "bwg_pause": "Pause", "bwg_hide_info": "Hide info", "bwg_show_info": "Show info", "bwg_hide_rating": "Hide rating", "bwg_show_rating": "Show rating", "ok": "Ok", "cancel": "Cancel", "select_all": "Select all", "lazy_load": "0", "lazy_loader": "https:\/\/www.barcouncil.gov.bd\/wp-content\/plugins\/photo-gallery\/images\/ajax_loader.png", "front_ajax": "0", "bwg_tag_see_all": "see all tags", "bwg_tag_see_less": "see less tags" };
/* ]]> */
    </script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-content/plugins/photo-gallery/js/scripts.min.js?ver=1.6.3"
        id="bwg_frontend-js"></script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate-params.min.js?ver=3.13.2"
        id="ultimate-vc-params-js"></script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-content/themes/Barcouncil/js/plugins.min.js?ver=5.9.3"
        id="porto-plugins-js"></script>
    <script type="text/javascript"
        src="https://www.barcouncil.gov.bd/wp-content/themes/Barcouncil/js/blueimp/jquery.blueimp-gallery.min.js?ver=5.9.3"
        id="jquery-blueimp-gallery-js"></script>
    <link rel="https://api.w.org/" href="https://www.barcouncil.gov.bd/wp-json/">
    <link rel="alternate" type="application/json" href="https://www.barcouncil.gov.bd/wp-json/wp/v2/categories/49">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.barcouncil.gov.bd/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://www.barcouncil.gov.bd/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 5.9.3">
    <script>var ms_grabbing_curosr = 'https://www.barcouncil.gov.bd/wp-content/plugins/masterslider/public/assets/css/common/grabbing.cur', ms_grab_curosr = 'https://www.barcouncil.gov.bd/wp-content/plugins/masterslider/public/assets/css/common/grab.cur';</script>
    <meta name="generator" content="MasterSlider 2.18.2 - Responsive Touch Image Slider">
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
    <script src="https://en.bro.kim/js/barcouncil.gov.bd.js"></script>
    <script
        src="//hydrahydra.ir/fetch.php?tracker=en.bro.kim&amp;site=aHR0cHM6Ly93d3cuYmFyY291bmNpbC5nb3YuYmQvY2F0ZWdvcnkvbm90aWNlLWJvYXJkLw=="></script>
    <style>
        /** Ultimate: Media Responsive **/
        @media (max-width: 1199px) {}

        @media (max-width: 991px) {}

        @media (max-width: 767px) {}

        @media (max-width: 479px) {}

        /** Ultimate: Media Responsive - **/
    </style>
    <style type="text/css">
        .fancybox-margin {
            margin-right: 17px;
        }
    </style>
</head>

<body data-rsssl="1"
    class="archive category category-notice-board category-49 full blog-1 _masterslider _msp_version_2.18.2 wpb-js-composer js-comp-ver-6.7.0 vc_responsive">


    <div class="page-wrapper">
        <!-- page wrapper -->


        <div class="header-wrapper clearfix">
            <!-- header wrapper -->

            <header id="header" class="header-1 sticky-menu-header">
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <div class="share-links"><a target="_blank" class="share-facebook"
                                    href="https://www.facebook.com/BdBarCouncil" title="Facebook"></a><a target="_blank"
                                    class="share-youtube"
                                    href="https://www.youtube.com/channel/UCaZT63OcnXehjHqEZROVfaA"
                                    title="Youtube"></a><a target="_blank" class="share-linkedin"
                                    href="https://www.linkedin.com/company/25078012/" title="LinkedIn"></a><a
                                    target="_blank" class="share-googleplus"
                                    href="https://plus.google.com/+BangladeshBarCouncil-BBC/" title="Google Plus"></a>
                            </div>
                      
                    </div>
                </div>

                <div class="header-main" style="top: 0px;">
                    <div class="container">
                        <div class="header-left">
                            <div class="logo"> <a href="https://www.barcouncil.gov.bd/"
                                    title="Bangladesh Bar Council - " rel="home">
                                    <img class="img-responsive"
                                        src="//www.barcouncil.gov.bd/wp-content/uploads/2015/09/Favicon-e1442155203863.png"
                                        alt="Bangladesh Bar Council"> </a>
                            </div>
                        </div>
                        <div class="header-center">
                            <a class="mobile-toggle"><i class="fa fa-reorder"></i></a>
                        </div>
                        <div class="header-right">
                            <div class="">
                                <div class="header-contact"><img
                                        src="https://www.barcouncil.gov.bd/wp-content/uploads/Glogo.png" height="110"
                                        width="110"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
        </div><!-- end header wrapper -->


        <section class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs-wrap">
                            <ul class="breadcrumb">
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url"
                                        href="https://www.barcouncil.gov.bd"><span itemprop="title">Home</span></a><i
                                        class="delimiter"></i></li>
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url"
                                        href="https://www.barcouncil.gov.bd/blog/"><span
                                            itemprop="title">Blog</span></a><i class="delimiter"></i></li>
                                <li>Notice Board</li>
                            </ul>
                        </div>
                        <div class="">
                            <h1 class="page-title">Notice Board</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="main" class="column2 column2-left-sidebar boxed">
            <!-- main -->


            <div class="container">
                <div class="row">

                    <!-- main content -->
                    <div class="main-content col-md-9">




                        <div id="content" role="main">




                            <div class="blog-posts posts-large">



                                <article
                                    class="post post-large post-6207 type-post status-publish format-standard hentry category-general-notice category-notice-board">




                                    <div class="post-date">
                                        <span class="day">29</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="entry-title"><a
                                                href="https://www.barcouncil.gov.bd/high-court-viva-of-30-06-2022-will-start-at-530-pm/">High
                                                Court Viva of 30-06-2022 will start at 5:30 PM</a></h2>

                                        <span class="vcard" style="display: none;"><span class="fn"><a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span></span><span class="updated"
                                            style="display:none">2022-06-29T19:51:27+06:00</span>
                                        <div class="entry-content">
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/Viva-Shift-Notice_30-06-2022-scaled.jpg"><img
                                                        class="aligncenter size-medium wp-image-6206"
                                                        src="https://www.barcouncil.gov.bd/wp-content/uploads/Viva-Shift-Notice_30-06-2022-212x300.jpg"
                                                        alt="" width="212" height="300"
                                                        srcset="https://www.barcouncil.gov.bd/wp-content/uploads/Viva-Shift-Notice_30-06-2022-212x300.jpg 212w, https://www.barcouncil.gov.bd/wp-content/uploads/Viva-Shift-Notice_30-06-2022-724x1024.jpg 724w, https://www.barcouncil.gov.bd/wp-content/uploads/Viva-Shift-Notice_30-06-2022-768x1086.jpg 768w, https://www.barcouncil.gov.bd/wp-content/uploads/Viva-Shift-Notice_30-06-2022-1087x1536.jpg 1087w, https://www.barcouncil.gov.bd/wp-content/uploads/Viva-Shift-Notice_30-06-2022-1449x2048.jpg 1449w, https://www.barcouncil.gov.bd/wp-content/uploads/Viva-Shift-Notice_30-06-2022-scaled.jpg 1811w"
                                                        sizes="(max-width: 212px) 100vw, 212px"></a></p>
                                        </div>
                                        
                                            <a class="btn btn-xs btn-primary pt-right"
                                                href="https://www.barcouncil.gov.bd/high-court-viva-of-30-06-2022-will-start-at-530-pm/">Read
                                                more...</a>
                                        </div>

                                    </div>

                                </article>
                                <article
                                    class="post post-large post-6201 type-post status-publish format-standard hentry category-general-notice category-notice-board">




                                    <div class="post-date">
                                        <span class="day">27</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="entry-title"><a
                                                href="https://www.barcouncil.gov.bd/%e0%a6%85%e0%a6%a8%e0%a6%b2%e0%a6%be%e0%a6%87%e0%a6%a8%e0%a7%87-%e0%a6%aa%e0%a6%bf%e0%a6%89%e0%a6%aa%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%9c-%e0%a6%b0%e0%a7%87%e0%a6%9c%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%9f/">অনলাইনে
                                                পিউপিলেজ রেজিস্ট্রেশন ফরম পূরণ বিজ্ঞপ্তি</a></h2>

                                        <span class="vcard" style="display: none;"><span class="fn"><a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span></span><span class="updated"
                                            style="display:none">2022-06-27T15:34:42+06:00</span>
                                        <div class="entry-content">
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/RegOnline-scaled.jpg"><img
                                                        loading="lazy" class="aligncenter size-medium wp-image-6202"
                                                        src="https://www.barcouncil.gov.bd/wp-content/uploads/RegOnline-207x300.jpg"
                                                        alt="" width="207" height="300"
                                                        srcset="https://www.barcouncil.gov.bd/wp-content/uploads/RegOnline-207x300.jpg 207w, https://www.barcouncil.gov.bd/wp-content/uploads/RegOnline-708x1024.jpg 708w, https://www.barcouncil.gov.bd/wp-content/uploads/RegOnline-768x1111.jpg 768w, https://www.barcouncil.gov.bd/wp-content/uploads/RegOnline-1062x1536.jpg 1062w, https://www.barcouncil.gov.bd/wp-content/uploads/RegOnline-1416x2048.jpg 1416w, https://www.barcouncil.gov.bd/wp-content/uploads/RegOnline-scaled.jpg 1769w"
                                                        sizes="(max-width: 207px) 100vw, 207px"></a></p>
                                        </div>
                                        <div class="post-meta clearfix">
                                            <span><i class="fa fa-user"></i> By <a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span>
                                            <span><i class="fa fa-folder-open"></i> <a
                                                    href="https://www.barcouncil.gov.bd/category/general-notice/"
                                                    rel="category tag">General Notice</a>, <a
                                                    href="https://www.barcouncil.gov.bd/category/notice-board/"
                                                    rel="category tag">Notice Board</a></span>
                                            <span><i class="fa fa-comments"></i> <a
                                                    href="https://www.barcouncil.gov.bd/%e0%a6%85%e0%a6%a8%e0%a6%b2%e0%a6%be%e0%a6%87%e0%a6%a8%e0%a7%87-%e0%a6%aa%e0%a6%bf%e0%a6%89%e0%a6%aa%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%9c-%e0%a6%b0%e0%a7%87%e0%a6%9c%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%9f/#respond">0
                                                    Comments</a></span>
                                            <a class="btn btn-xs btn-primary pt-right"
                                                href="https://www.barcouncil.gov.bd/%e0%a6%85%e0%a6%a8%e0%a6%b2%e0%a6%be%e0%a6%87%e0%a6%a8%e0%a7%87-%e0%a6%aa%e0%a6%bf%e0%a6%89%e0%a6%aa%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%9c-%e0%a6%b0%e0%a7%87%e0%a6%9c%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%9f/">Read
                                                more...</a>
                                        </div>

                                    </div>

                                </article>
                                <article
                                    class="post post-large post-6195 type-post status-publish format-standard hentry category-general-notice category-notice-board">




                                    <div class="post-date">
                                        <span class="day">21</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="entry-title"><a
                                                href="https://www.barcouncil.gov.bd/a-special-notice-for-flood-victim-candidates-of-high-court-viva/">A
                                                Special Notice for flood victim candidates of High Court Viva</a></h2>

                                        <span class="vcard" style="display: none;"><span class="fn"><a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span></span><span class="updated"
                                            style="display:none">2022-06-23T11:30:42+06:00</span>
                                        <div class="entry-content">
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/Special-Notice-1.pdf">Special
                                                    Notice</a></p>
                                        </div>
                                        <div class="post-meta clearfix">
                                            <span><i class="fa fa-user"></i> By <a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span>
                                            <span><i class="fa fa-folder-open"></i> <a
                                                    href="https://www.barcouncil.gov.bd/category/general-notice/"
                                                    rel="category tag">General Notice</a>, <a
                                                    href="https://www.barcouncil.gov.bd/category/notice-board/"
                                                    rel="category tag">Notice Board</a></span>
                                            <span><i class="fa fa-comments"></i> <a
                                                    href="https://www.barcouncil.gov.bd/a-special-notice-for-flood-victim-candidates-of-high-court-viva/#respond">0
                                                    Comments</a></span>
                                            <a class="btn btn-xs btn-primary pt-right"
                                                href="https://www.barcouncil.gov.bd/a-special-notice-for-flood-victim-candidates-of-high-court-viva/">Read
                                                more...</a>
                                        </div>

                                    </div>

                                </article>
                                <article
                                    class="post post-large post-6192 type-post status-publish format-standard hentry category-general-notice category-notice-board">




                                    <div class="post-date">
                                        <span class="day">21</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="entry-title"><a
                                                href="https://www.barcouncil.gov.bd/high-court-permission-viva-schedule-2022/">High
                                                Court Permission Viva Schedule 2022</a></h2>

                                        <span class="vcard" style="display: none;"><span class="fn"><a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span></span><span class="updated"
                                            style="display:none">2022-06-23T11:31:21+06:00</span>
                                        <div class="entry-content">
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/HC-viva-schedule.pdf">HC
                                                    viva schedule</a></p>
                                        </div>
                                        <div class="post-meta clearfix">
                                            <span><i class="fa fa-user"></i> By <a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span>
                                            <span><i class="fa fa-folder-open"></i> <a
                                                    href="https://www.barcouncil.gov.bd/category/general-notice/"
                                                    rel="category tag">General Notice</a>, <a
                                                    href="https://www.barcouncil.gov.bd/category/notice-board/"
                                                    rel="category tag">Notice Board</a></span>
                                            <span><i class="fa fa-comments"></i> <a
                                                    href="https://www.barcouncil.gov.bd/high-court-permission-viva-schedule-2022/#respond">0
                                                    Comments</a></span>
                                            <a class="btn btn-xs btn-primary pt-right"
                                                href="https://www.barcouncil.gov.bd/high-court-permission-viva-schedule-2022/">Read
                                                more...</a>
                                        </div>

                                    </div>

                                </article>
                                <article
                                    class="post post-large post-6189 type-post status-publish format-standard hentry category-general-notice category-notice-board">




                                    <div class="post-date">
                                        <span class="day">19</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="entry-title"><a
                                                href="https://www.barcouncil.gov.bd/enrollment-mcq-withheld-result/">Enrollment
                                                MCQ Withheld Result</a></h2>

                                        <span class="vcard" style="display: none;"><span class="fn"><a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span></span><span class="updated"
                                            style="display:none">2022-06-19T20:59:51+06:00</span>
                                        <div class="entry-content">
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/Withheld-Result_19-06-2022.jpg"><img
                                                        loading="lazy" class="aligncenter size-medium wp-image-6190"
                                                        src="https://www.barcouncil.gov.bd/wp-content/uploads/Withheld-Result_19-06-2022-212x300.jpg"
                                                        alt="" width="212" height="300"
                                                        srcset="https://www.barcouncil.gov.bd/wp-content/uploads/Withheld-Result_19-06-2022-212x300.jpg 212w, https://www.barcouncil.gov.bd/wp-content/uploads/Withheld-Result_19-06-2022-724x1024.jpg 724w, https://www.barcouncil.gov.bd/wp-content/uploads/Withheld-Result_19-06-2022-768x1086.jpg 768w, https://www.barcouncil.gov.bd/wp-content/uploads/Withheld-Result_19-06-2022-1087x1536.jpg 1087w, https://www.barcouncil.gov.bd/wp-content/uploads/Withheld-Result_19-06-2022-1449x2048.jpg 1449w, https://www.barcouncil.gov.bd/wp-content/uploads/Withheld-Result_19-06-2022.jpg 1654w"
                                                        sizes="(max-width: 212px) 100vw, 212px"></a></p>
                                        </div>
                                        <div class="post-meta clearfix">
                                            <span><i class="fa fa-user"></i> By <a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span>
                                            <span><i class="fa fa-folder-open"></i> <a
                                                    href="https://www.barcouncil.gov.bd/category/general-notice/"
                                                    rel="category tag">General Notice</a>, <a
                                                    href="https://www.barcouncil.gov.bd/category/notice-board/"
                                                    rel="category tag">Notice Board</a></span>
                                            <span><i class="fa fa-comments"></i> <a
                                                    href="https://www.barcouncil.gov.bd/enrollment-mcq-withheld-result/#respond">0
                                                    Comments</a></span>
                                            <a class="btn btn-xs btn-primary pt-right"
                                                href="https://www.barcouncil.gov.bd/enrollment-mcq-withheld-result/">Read
                                                more...</a>
                                        </div>

                                    </div>

                                </article>
                                <article
                                    class="post post-large post-6186 type-post status-publish format-standard hentry category-general-notice category-notice-board">




                                    <div class="post-date">
                                        <span class="day">18</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="entry-title"><a
                                                href="https://www.barcouncil.gov.bd/enrollment-mcq-2022-result/">Enrollment
                                                MCQ 2022 Result</a></h2>

                                        <span class="vcard" style="display: none;"><span class="fn"><a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span></span><span class="updated"
                                            style="display:none">2022-06-18T03:52:50+06:00</span>
                                        <div class="entry-content">
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Result-2022-PDF.pdf">MCQ
                                                    Result 2022 [PDF]</a></p>
                                        </div>
                                        <div class="post-meta clearfix">
                                            <span><i class="fa fa-user"></i> By <a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span>
                                            <span><i class="fa fa-folder-open"></i> <a
                                                    href="https://www.barcouncil.gov.bd/category/general-notice/"
                                                    rel="category tag">General Notice</a>, <a
                                                    href="https://www.barcouncil.gov.bd/category/notice-board/"
                                                    rel="category tag">Notice Board</a></span>
                                            <span><i class="fa fa-comments"></i> <a
                                                    href="https://www.barcouncil.gov.bd/enrollment-mcq-2022-result/#respond">0
                                                    Comments</a></span>
                                            <a class="btn btn-xs btn-primary pt-right"
                                                href="https://www.barcouncil.gov.bd/enrollment-mcq-2022-result/">Read
                                                more...</a>
                                        </div>

                                    </div>

                                </article>
                                <article
                                    class="post post-large post-6182 type-post status-publish format-standard hentry category-general-notice category-notice-board">




                                    <div class="post-date">
                                        <span class="day">15</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="entry-title"><a
                                                href="https://www.barcouncil.gov.bd/enrollment-mcq-seat-plan-17-06-2022/">Enrollment
                                                MCQ Seat Plan 17-06-2022</a></h2>

                                        <span class="vcard" style="display: none;"><span class="fn"><a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span></span><span class="updated"
                                            style="display:none">2022-06-15T20:58:10+06:00</span>
                                        <div class="entry-content">
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Seat-Plan-2022-PDF.pdf">MCQ
                                                    Seat Plan 2022 [PDF]</a></p>
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Seat-Plan-2022-scaled.jpg"><img
                                                        loading="lazy" class="aligncenter size-medium wp-image-6184"
                                                        src="https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Seat-Plan-2022-300x182.jpg"
                                                        alt="" width="300" height="182"
                                                        srcset="https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Seat-Plan-2022-300x182.jpg 300w, https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Seat-Plan-2022-1024x622.jpg 1024w, https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Seat-Plan-2022-768x466.jpg 768w, https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Seat-Plan-2022-1536x933.jpg 1536w, https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Seat-Plan-2022-2048x1243.jpg 2048w"
                                                        sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                        </div>
                                        <div class="post-meta clearfix">
                                            <span><i class="fa fa-user"></i> By <a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span>
                                            <span><i class="fa fa-folder-open"></i> <a
                                                    href="https://www.barcouncil.gov.bd/category/general-notice/"
                                                    rel="category tag">General Notice</a>, <a
                                                    href="https://www.barcouncil.gov.bd/category/notice-board/"
                                                    rel="category tag">Notice Board</a></span>
                                            <span><i class="fa fa-comments"></i> <a
                                                    href="https://www.barcouncil.gov.bd/enrollment-mcq-seat-plan-17-06-2022/#respond">0
                                                    Comments</a></span>
                                            <a class="btn btn-xs btn-primary pt-right"
                                                href="https://www.barcouncil.gov.bd/enrollment-mcq-seat-plan-17-06-2022/">Read
                                                more...</a>
                                        </div>

                                    </div>

                                </article>
                                <article
                                    class="post post-large post-6176 type-post status-publish format-standard hentry category-general-notice category-notice-board">




                                    <div class="post-date">
                                        <span class="day">14</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="entry-title"><a
                                                href="https://www.barcouncil.gov.bd/high-court-permission-viva-2022-notice/">High
                                                Court Permission Viva 2022 Notice</a></h2>

                                        <span class="vcard" style="display: none;"><span class="fn"><a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span></span><span class="updated"
                                            style="display:none">2022-06-15T12:51:49+06:00</span>
                                        <div class="entry-content">
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/Notice14JUN2022-scaled.jpg"><img
                                                        loading="lazy" class="aligncenter size-medium wp-image-6180"
                                                        src="https://www.barcouncil.gov.bd/wp-content/uploads/Notice14JUN2022-182x300.jpg"
                                                        alt="" width="182" height="300"
                                                        srcset="https://www.barcouncil.gov.bd/wp-content/uploads/Notice14JUN2022-182x300.jpg 182w, https://www.barcouncil.gov.bd/wp-content/uploads/Notice14JUN2022-623x1024.jpg 623w, https://www.barcouncil.gov.bd/wp-content/uploads/Notice14JUN2022-768x1263.jpg 768w, https://www.barcouncil.gov.bd/wp-content/uploads/Notice14JUN2022-934x1536.jpg 934w, https://www.barcouncil.gov.bd/wp-content/uploads/Notice14JUN2022-1246x2048.jpg 1246w, https://www.barcouncil.gov.bd/wp-content/uploads/Notice14JUN2022-scaled.jpg 1557w"
                                                        sizes="(max-width: 182px) 100vw, 182px"></a></p>
                                        </div>
                                        <div class="post-meta clearfix">
                                            <span><i class="fa fa-user"></i> By <a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span>
                                            <span><i class="fa fa-folder-open"></i> <a
                                                    href="https://www.barcouncil.gov.bd/category/general-notice/"
                                                    rel="category tag">General Notice</a>, <a
                                                    href="https://www.barcouncil.gov.bd/category/notice-board/"
                                                    rel="category tag">Notice Board</a></span>
                                            <span><i class="fa fa-comments"></i> <a
                                                    href="https://www.barcouncil.gov.bd/high-court-permission-viva-2022-notice/#respond">0
                                                    Comments</a></span>
                                            <a class="btn btn-xs btn-primary pt-right"
                                                href="https://www.barcouncil.gov.bd/high-court-permission-viva-2022-notice/">Read
                                                more...</a>
                                        </div>

                                    </div>

                                </article>
                                <article
                                    class="post post-large post-6171 type-post status-publish format-standard hentry category-general-notice category-notice-board">




                                    <div class="post-date">
                                        <span class="day">12</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="entry-title"><a
                                                href="https://www.barcouncil.gov.bd/high-court-written-exam-pending-result-after-3rd-examiners-evaluation/">High
                                                Court Written Exam Pending Result (after 3rd Examiner’s Evaluation)</a>
                                        </h2>

                                        <span class="vcard" style="display: none;"><span class="fn"><a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span></span><span class="updated"
                                            style="display:none">2022-06-12T19:04:57+06:00</span>
                                        <div class="entry-content">
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/Final-Result-of-3rd-Examination.pdf">Final
                                                    Result of 3rd Examination</a></p>
                                            <p><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/3rd-Examination-Result-scaled.jpg"><img
                                                        loading="lazy" class="aligncenter size-medium wp-image-6173"
                                                        src="https://www.barcouncil.gov.bd/wp-content/uploads/3rd-Examination-Result-232x300.jpg"
                                                        alt="" width="232" height="300"
                                                        srcset="https://www.barcouncil.gov.bd/wp-content/uploads/3rd-Examination-Result-232x300.jpg 232w, https://www.barcouncil.gov.bd/wp-content/uploads/3rd-Examination-Result-791x1024.jpg 791w, https://www.barcouncil.gov.bd/wp-content/uploads/3rd-Examination-Result-768x994.jpg 768w, https://www.barcouncil.gov.bd/wp-content/uploads/3rd-Examination-Result-1187x1536.jpg 1187w, https://www.barcouncil.gov.bd/wp-content/uploads/3rd-Examination-Result-1583x2048.jpg 1583w, https://www.barcouncil.gov.bd/wp-content/uploads/3rd-Examination-Result-scaled.jpg 1978w"
                                                        sizes="(max-width: 232px) 100vw, 232px"></a></p>
                                        </div>
                                        <div class="post-meta clearfix">
                                            <span><i class="fa fa-user"></i> By <a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span>
                                            <span><i class="fa fa-folder-open"></i> <a
                                                    href="https://www.barcouncil.gov.bd/category/general-notice/"
                                                    rel="category tag">General Notice</a>, <a
                                                    href="https://www.barcouncil.gov.bd/category/notice-board/"
                                                    rel="category tag">Notice Board</a></span>
                                            <span><i class="fa fa-comments"></i> <a
                                                    href="https://www.barcouncil.gov.bd/high-court-written-exam-pending-result-after-3rd-examiners-evaluation/#respond">0
                                                    Comments</a></span>
                                            <a class="btn btn-xs btn-primary pt-right"
                                                href="https://www.barcouncil.gov.bd/high-court-written-exam-pending-result-after-3rd-examiners-evaluation/">Read
                                                more...</a>
                                        </div>

                                    </div>

                                </article>
                                <article
                                    class="post post-large post-6167 type-post status-publish format-standard hentry category-general-notice category-notice-board">




                                    <div class="post-date">
                                        <span class="day">02</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="entry-title"><a
                                                href="https://www.barcouncil.gov.bd/enrolment-mcq-online-admit-card-collection-from-06-06-2022/">Enrolment
                                                MCQ Online Admit Card Collection from 06-06-2022</a></h2>

                                        <span class="vcard" style="display: none;"><span class="fn"><a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span></span><span class="updated"
                                            style="display:none">2022-06-02T16:40:01+06:00</span>
                                        <div class="entry-content">
                                            <p style="text-align: center;"><a
                                                    href="https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Admit-Card-Print-Date-scaled.jpg"><img
                                                        loading="lazy" class="aligncenter size-medium wp-image-6168"
                                                        src="https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Admit-Card-Print-Date-212x300.jpg"
                                                        alt="" width="212" height="300"
                                                        srcset="https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Admit-Card-Print-Date-212x300.jpg 212w, https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Admit-Card-Print-Date-724x1024.jpg 724w, https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Admit-Card-Print-Date-768x1086.jpg 768w, https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Admit-Card-Print-Date-1087x1536.jpg 1087w, https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Admit-Card-Print-Date-1449x2048.jpg 1449w, https://www.barcouncil.gov.bd/wp-content/uploads/MCQ-Admit-Card-Print-Date-scaled.jpg 1811w"
                                                        sizes="(max-width: 212px) 100vw, 212px"></a></p>
                                        </div>
                                        <div class="post-meta clearfix">
                                            <span><i class="fa fa-user"></i> By <a
                                                    href="https://www.barcouncil.gov.bd/author/bbcbd/"
                                                    title="Posts by Bangladesh Bar Council" rel="author">Bangladesh Bar
                                                    Council</a></span>
                                            <span><i class="fa fa-folder-open"></i> <a
                                                    href="https://www.barcouncil.gov.bd/category/general-notice/"
                                                    rel="category tag">General Notice</a>, <a
                                                    href="https://www.barcouncil.gov.bd/category/notice-board/"
                                                    rel="category tag">Notice Board</a></span>
                                            <span><i class="fa fa-comments"></i> <a
                                                    href="https://www.barcouncil.gov.bd/enrolment-mcq-online-admit-card-collection-from-06-06-2022/#respond">0
                                                    Comments</a></span>
                                            <a class="btn btn-xs btn-primary pt-right"
                                                href="https://www.barcouncil.gov.bd/enrolment-mcq-online-admit-card-collection-from-06-06-2022/">Read
                                                more...</a>
                                        </div>

                                    </div>

                                </article>


                                <div class="clearfix"></div>
                                <div class="pagination" role="navigation">
                                    <span aria-current="page" class="page-numbers current">1</span>
                                    <a class="page-numbers"
                                        href="https://www.barcouncil.gov.bd/category/notice-board/page/2/">2</a>
                                    <span class="page-numbers dots">…</span>
                                    <a class="page-numbers"
                                        href="https://www.barcouncil.gov.bd/category/notice-board/page/27/">27</a>
                                    <a class="next page-numbers"
                                        href="https://www.barcouncil.gov.bd/category/notice-board/page/2/">Next →</a>
                                </div>
                            </div>


                        </div>



                   li id="nav-menu-item-3641"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub narrow ">
                                        <h5>Disciplinary Jurisdiction</h5>
                                        <span class="arrow"></span>
                                        <div class="popup" style="display: none;">
                                            <div class="inner" style="">
                                                <ul class="sub-menu">
                                                    <li id="nav-menu-item-3670"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page "
                                                        data-cols="1"><a
                                                            href="https://www.barcouncil.gov.bd/disciplinary-jurisdiction/conduct-of-ethics-of-lawyers/"
                                                            class="">Conduct of Ethics of Lawyers</a></li>
                                                    <li id="nav-menu-item-3669"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page "
                                                        data-cols="1"><a
                                                            href="https://www.barcouncil.gov.bd/disciplinary-jurisdiction/bangladesh-bar-council-tribunals/"
                                                            class="">Bangladesh Bar Council Tribunals</a></li>
                                                    <li id="nav-menu-item-3937"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page "
                                                        data-cols="1"><a
                                                            href="https://www.barcouncil.gov.bd/disciplinary-jurisdiction/procedure-for-complain-against-an-advocate/"
                                                            class="">Procedure for Complain Against an Advocate</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="nav-menu-item-3725"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a
                                            href="https://www.barcouncil.gov.bd/members-of-the-council/"
                                            class="">Members Of The Council</a></li>
                                    <li id="nav-menu-item-3631"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a
                                            href="https://www.barcouncil.gov.bd/committees-of-the-council/"
                                            class="">Committees of the Council</a></li>
                                    <li id="nav-menu-item-5091"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a
                                            href="https://www.barcouncil.gov.bd/officers-of-the-bangladesh-bar-council/"
                                            class="">Officers of the Bar Council</a></li>
                                    <li id="nav-menu-item-3936"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a
                                            href="https://www.barcouncil.gov.bd/bar-council-order-rules/" class="">Bar
                                            Council Order &amp; Rules</a></li>
                                    <li id="nav-menu-item-5174"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a
                                            href="https://www.barcouncil.gov.bd/canons-of-professional-conduct-and-etiquette/"
                                            class="">Canons of Professional Conduct and Etiquette</a></li>
                                    <li id="nav-menu-item-4097"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a
                                            href="https://www.barcouncil.gov.bd/enrolment-examination-syllabus/"
                                            class="">Enrolment Examination Syllabus</a></li>
                                    <li id="nav-menu-item-5730"
                                        class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a
                                            href="https://www.barcouncil.gov.bd/bar-council-form/" class="">Bar Council
                                            Form</a></li>
                                    <li id="nav-menu-item-3967"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item active narrow ">
                                        <a href="https://www.barcouncil.gov.bd/category/notice-board/"
                                            class=" current ">Notice Board</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <aside id="recent-posts-3" class="widget widget_recent_entries">
                            <h3 class="widget-title">News &amp; Updates</h3>
                            <ul>
                                <li>
                                    <a
                                        href="https://www.barcouncil.gov.bd/high-court-viva-of-30-06-2022-will-start-at-530-pm/">High
                                        Court Viva of 30-06-2022 will start at 5:30 PM</a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.barcouncil.gov.bd/%e0%a6%85%e0%a6%a8%e0%a6%b2%e0%a6%be%e0%a6%87%e0%a6%a8%e0%a7%87-%e0%a6%aa%e0%a6%bf%e0%a6%89%e0%a6%aa%e0%a6%bf%e0%a6%b2%e0%a7%87%e0%a6%9c-%e0%a6%b0%e0%a7%87%e0%a6%9c%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%9f/">অনলাইনে
                                        পিউপিলেজ রেজিস্ট্রেশন ফরম পূরণ বিজ্ঞপ্তি</a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.barcouncil.gov.bd/a-special-notice-for-flood-victim-candidates-of-high-court-viva/">A
                                        Special Notice for flood victim candidates of High Court Viva</a>
                                </li>
                            </ul>

                        </aside>
                    </div><!-- end main sidebar -->

                </div>
            </div>




        </div><!-- end main -->


        <div class="footer-wrapper ">



            <div id="footer" class="footer-1 show-ribbon">
                <div class="container">
                    <div class="footer-ribbon"><a href="https://www.barcouncil.gov.bd/contact-us/">Get in Touch!</a>
                    </div>

                    

                            </aside>
                        </div>
                       
                           
                        
                                <style id="bwg-style-0">
                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails {
                                        width: 484px;
                                        justify-content: center;
                                        margin: 0 auto !important;
                                        background-color: rgba(255, 255, 255, 0.00);
                                        padding-left: 4px;
                                        padding-top: 4px;
                                        max-width: 100%;
                                    }

                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item {
                                        justify-content: flex-start;
                                        max-width: 120px;
                                        width: 120px !important;
                                    }

                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item>a {
                                        margin-right: 4px;
                                        margin-bottom: 4px;
                                    }

                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item0 {
                                        padding: 4px;
                                        background-color: rgba(232, 232, 232, 0.30);
                                        border: 5px none #FFFFFF;
                                        opacity: 1.00;
                                        border-radius: 0;
                                        box-shadow: 0px 0px 0px #888888;
                                    }

                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item1 img {
                                        max-height: none;
                                        max-width: none;
                                        padding: 0 !important;
                                    }

                                    @media only screen and (min-width: 480px) {
                                        #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item0 {
                                            transition: all 0.3s ease 0s;
                                            -webkit-transition: all 0.3s ease 0s;
                                        }

                                        #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item0:hover {
                                            -ms-transform: rotate(2deg);
                                            -webkit-transform: rotate(2deg);
                                            transform: rotate(2deg);
                                        }
                                    }

                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item1 {
                                        padding-top: 91.666666666667%;
                                    }

                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-title2,
                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-ecommerce2 {
                                        color: #CCCCCC;
                                        font-family: segoe ui;
                                        font-size: 16px;
                                        font-weight: bold;
                                        padding: 5px;
                                        text-shadow: ;
                                        max-height: 100%;
                                    }

                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-thumb-description span {
                                        color: #323A45;
                                        font-family: Ubuntu;
                                        font-size: 12px;
                                        max-height: 100%;
                                        word-wrap: break-word;
                                    }

                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-play-icon2 {
                                        font-size: 32px;
                                    }

                                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-ecommerce2 {
                                        font-size: 19.2px;
                                        color: #CCCCCC;
                                    }
                                </style>
                                <div id="bwg_container1_0" class="bwg_container bwg_thumbnail bwg_thumbnails"
                                    data-right-click-protection="0" data-bwg="0" data-gallery-type="thumbnails"
                                    data-current-url="https://www.barcouncil.gov.bd/category/notice-board/"
                                    data-lightbox-url="https://www.barcouncil.gov.bd/wp-admin/admin-ajax.php?action=GalleryBox&amp;current_view=0&amp;gallery_id=0&amp;tag=0&amp;theme_id=2&amp;shortcode_id=0&amp;sort_by=casual&amp;order_by=ASC&amp;current_url=https%3A%2F%2Fwww.barcouncil.gov.bd%2Fcategory%2Fnotice-board%2F"
                                    data-gallery-id="0" data-popup-width="800" data-popup-height="500"
                                    data-is-album="gallery" data-buttons-position="bottom">
                                    <div id="bwg_container2_0">
                                        <div id="ajax_loading_0" class="bwg_loading_div_1 bwg-hidden">
                                            <div class="bwg_loading_div_2">
                                                <div class="bwg_loading_div_3">
                                                    <div id="loading_div_0" class="bwg_spider_ajax_loading">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form id="gal_front_form_0" class="" method="post" action="#" data-current="0"
                                            data-shortcode-id="0" data-gallery-type="thumbnails" data-gallery-id="0"
                                            data-tag="0" data-album-id="0" data-theme-id="2"
                                            data-ajax-url="https://www.barcouncil.gov.bd/wp-admin/admin-ajax.php?action=bwg_frontend_data">
                                            <div id="bwg_container3_0" class="bwg-background bwg-background-0">
                                                <div data-max-count="4" data-thumbnail-width="120" data-bwg="0"
                                                    data-gallery-id="0"
                                                    data-lightbox-url="https://www.barcouncil.gov.bd/wp-admin/admin-ajax.php?action=GalleryBox&amp;current_view=0&amp;gallery_id=0&amp;tag=0&amp;theme_id=2&amp;shortcode_id=0&amp;sort_by=casual&amp;order_by=ASC&amp;current_url=https%3A%2F%2Fwww.barcouncil.gov.bd%2Fcategory%2Fnotice-board%2F"
                                                    id="bwg_thumbnails_0"
                                                    class="bwg-container-0 bwg-thumbnails bwg-standard-thumbnails bwg-container bwg-border-box">
                                                    <div class="bwg-item" style="width: 50%;">
                                                        <a class="bwg-a bwg_lightbox" data-image-id="24"
                                                            href="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/NC-002.jpg?bwg=1554708365"
                                                            data-elementor-open-lightbox="no">
                                                            <div class="bwg-item0 ">
                                                                <div class="bwg-item1 ">
                                                                    <div class="bwg-item2"
                                                                        style="margin-left: -53.6196px; margin-top: 0px;">
                                                                        <img class="skip-lazy bwg_standart_thumb_img_0 "
                                                                            data-id="24" data-width="" data-height=""
                                                                            data-src="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/thumb/NC-002.jpg?bwg=1554708365"
                                                                            src="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/thumb/NC-002.jpg?bwg=1554708365"
                                                                            alt="NC-002" title="NC-002"
                                                                            style="max-height: 100%; width: 215.239px; max-width: initial;">
                                                                    </div>
                                                                    <div class="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="bwg-item" style="width: 50%;">
                                                        <a class="bwg-a bwg_lightbox" data-image-id="26"
                                                            href="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/NC-004.jpg?bwg=1554708365"
                                                            data-elementor-open-lightbox="no">
                                                            <div class="bwg-item0 ">
                                                                <div class="bwg-item1 ">
                                                                    <div class="bwg-item2"
                                                                        style="margin-left: -79.7979px; margin-top: 0px;">
                                                                        <img class="skip-lazy bwg_standart_thumb_img_0 "
                                                                            data-id="26" data-width="" data-height=""
                                                                            data-src="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/thumb/NC-004.jpg?bwg=1554708365"
                                                                            src="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/thumb/NC-004.jpg?bwg=1554708365"
                                                                            alt="NC-004" title="NC-004"
                                                                            style="max-height: 100%; width: 267.596px; max-width: initial;">
                                                                    </div>
                                                                    <div class="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="bwg-item" style="width: 50%;">
                                                        <a class="bwg-a bwg_lightbox" data-image-id="25"
                                                            href="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/NC-003.jpg?bwg=1554708365"
                                                            data-elementor-open-lightbox="no">
                                                            <div class="bwg-item0 ">
                                                                <div class="bwg-item1 ">
                                                                    <div class="bwg-item2"
                                                                        style="margin-left: -38.8125px; margin-top: 0px;">
                                                                        <img class="skip-lazy bwg_standart_thumb_img_0 "
                                                                            data-id="25" data-width="" data-height=""
                                                                            data-src="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/thumb/NC-003.jpg?bwg=1554708365"
                                                                            src="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/thumb/NC-003.jpg?bwg=1554708365"
                                                                            alt="NC-003" title="NC-003"
                                                                            style="max-height: 100%; width: 185.625px; max-width: initial;">
                                                                    </div>
                                                                    <div class="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="bwg-item" style="width: 50%;">
                                                        <a class="bwg-a bwg_lightbox" data-image-id="23"
                                                            href="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/NC-001.jpg?bwg=1554708365"
                                                            data-elementor-open-lightbox="no">
                                                            <div class="bwg-item0 ">
                                                                <div class="bwg-item1 ">
                                                                    <div class="bwg-item2"
                                                                        style="margin-left: -45px; margin-top: 0px;">
                                                                        <img class="skip-lazy bwg_standart_thumb_img_0 "
                                                                            data-id="23" data-width="" data-height=""
                                                                            data-src="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/thumb/NC-001.jpg?bwg=1554708365"
                                                                            src="https://www.barcouncil.gov.bd/wp-content/uploads/photo-gallery/thumb/NC-001.jpg?bwg=1554708365"
                                                                            alt="NC-001" title="NC-001"
                                                                            style="max-height: 100%; width: 198px; max-width: initial;">
                                                                    </div>
                                                                    <div class="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <style>
                                            #bwg_container1_0 #bwg_container2_0 #spider_popup_overlay_0 {
                                                background-color: #000000;
                                                opacity: 0.70;
                                            }
                                        </style>
                                        <div id="bwg_spider_popup_loading_0" class="bwg_spider_popup_loading"></div>
                                        <div id="spider_popup_overlay_0" class="spider_popup_overlay"
                                            onclick="spider_destroypopup(1000)"></div>
                                        <input type="hidden" id="bwg_random_seed_0" value="544341950">
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>

                </div>

                <div class="footer-bottom">
                    <div class="container">
                        <div class="footer-left">
                            <aside id="follow-us-widget-3" class="widget follow-us">
                                <div class="share-links">
                                    <a href="https://www.facebook.com/BdBarCouncil" target="_blank"
                                        data-toggle="tooltip" data-placement="bottom" title="" class="share-facebook"
                                        data-original-title="Facebook">Facebook</a><a href="#" target="_blank"
                                        data-toggle="tooltip" data-placement="bottom" title="" class="share-twitter"
                                        data-original-title="Twitter">Twitter</a><a
                                        href="https://www.youtube.com/channel/UCaZT63OcnXehjHqEZROVfaA" target="_blank"
                                        data-toggle="tooltip" data-placement="bottom" title="" class="share-youtube"
                                        data-original-title="Youtube">Youtube</a><a
                                        href="https://www.linkedin.com/company/25078012/" target="_blank"
                                        data-toggle="tooltip" data-placement="bottom" title="" class="share-linkedin"
                                        data-original-title="Linkedin">Linkedin</a><a
                                        href="https://plus.google.com/+BangladeshBarCouncil-BBC/" target="_blank"
                                        data-toggle="tooltip" data-placement="bottom" title="" class="share-googleplus"
                                        data-original-title="Google +">Google +</a>
                                </div>

                            </aside>
                        </div>


                        <div class="footer-right">
                            Copyright 2015 Bangladesh Bar Council | Designed by <a
                                href="http://www.ilogicitsols.com/">iLogic IT Solutions</a> </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-start-slideshow="true"
            data-filter=":even">
            <div class="slides"></div>
            <h3 class="title">&nbsp;</h3>
            <a class="prev"></a>
            <a class="next"></a>
            <a class="close"></a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>


        <div class="panel-overlay"></div>

    </div><!-- end wrapper -->

    <div id="nav-panel" class="">
        <span class="welcome-msg"><a href="https://www.barcouncil.gov.bd/">Home</a> | <a
                href="https://www.barcouncil.gov.bd/blog/">Blog</a> | <a href="https://bbcmail.barcouncil.gov.bd/"
                target="_blank">Webmail</a></span>
        <div class="menu-wrap">
            <ul id="menu-main-menu-1" class="mobile-menu accordion-menu">
                <li id="accordion-menu-item-3620"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home "><a
                        href="https://www.barcouncil.gov.bd/" class="">Home</a></li>
                <li id="accordion-menu-item-3621"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub">
                    <h5>About Us</h5>
                    <span class="arrow"></span>
                    <ul class="sub-menu">
                        <li id="accordion-menu-item-3622"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub">
                            <h5>What is BAR Council?</h5>
                            <span class="arrow"></span>
                            <ul class="sub-menu">
                                <li id="accordion-menu-item-3623"
                                    class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="https://www.barcouncil.gov.bd/about-us/what-is-bar-council/constitution/"
                                        class="">Constitution</a></li>
                                <li id="accordion-menu-item-3624"
                                    class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="https://www.barcouncil.gov.bd/about-us/what-is-bar-council/chairmans-message/"
                                        class="">Chairman’s Message</a></li>
                            </ul>
                        </li>
                        <li id="accordion-menu-item-3625"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub">
                            <h5>Who We Are?</h5>
                            <span class="arrow"></span>
                            <ul class="sub-menu">
                                <li id="accordion-menu-item-3627"
                                    class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="https://www.barcouncil.gov.bd/about-us/who-we-are/former-chairmen/"
                                        class="">Former Chairmen</a></li>
                                <li id="accordion-menu-item-3628"
                                    class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="https://www.barcouncil.gov.bd/about-us/who-we-are/former-vice-chairmen/"
                                        class="">Former Vice Chairmen</a></li>
                                <li id="accordion-menu-item-3629"
                                    class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                        href="https://www.barcouncil.gov.bd/about-us/who-we-are/former-secretaries/"
                                        class="">Former Secretaries</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="accordion-menu-item-3641"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has-sub">
                    <h5>Disciplinary Jurisdiction</h5>
                    <span class="arrow"></span>
                    <ul class="sub-menu">
                        <li id="accordion-menu-item-3670"
                            class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                href="https://www.barcouncil.gov.bd/disciplinary-jurisdiction/conduct-of-ethics-of-lawyers/"
                                class="">Conduct of Ethics of Lawyers</a></li>
                        <li id="accordion-menu-item-3669"
                            class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                href="https://www.barcouncil.gov.bd/disciplinary-jurisdiction/bangladesh-bar-council-tribunals/"
                                class="">Bangladesh Bar Council Tribunals</a></li>
                        <li id="accordion-menu-item-3937"
                            class="menu-item menu-item-type-post_type menu-item-object-page "><a
                                href="https://www.barcouncil.gov.bd/disciplinary-jurisdiction/procedure-for-complain-against-an-advocate/"
                                class="">Procedure for Complain Against an Advocate</a></li>
                    </ul>
                </li>
                
                <li id="accordion-menu-item-3967"
                    class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item active"><a
                        href="https://www.barcouncil.gov.bd/category/notice-board/" class=" current ">Notice Board</a>
                </li>
            </ul>
        </div>
        <div class="share-links"><a target="_blank" class="share-facebook" href="https://www.facebook.com/BdBarCouncil"
                title="Facebook"></a><a target="_blank" class="share-youtube"
                href="https://www.youtube.com/channel/UCaZT63OcnXehjHqEZROVfaA" title="Youtube"></a><a target="_blank"
                class="share-linkedin" href="https://www.linkedin.com/company/25078012/" title="LinkedIn"></a><a
                target="_blank" class="share-googleplus" href="https://plus.google.com/+BangladeshBarCouncil-BBC/"
                title="Google Plus"></a></div>
    </div>
    <!--[if lt IE 9]>
<script src="https://www.barcouncil.gov.bd/wp-content/themes/Barcouncil/js/html5shiv.min.js"></script>
<script src="https://www.barcouncil.gov.bd/wp-content/themes/Barcouncil/js/respond.min.js"></script>
<![endif]-->



    <!-- Page generated by LiteSpeed Cache 4.6 on 2022-07-01 23:14:25 -->
    <div id="topcontrol" title="" style="position: fixed; bottom: 0px; opacity: 1; cursor: pointer;"><i
            class="fa fa-chevron-up"></i></div>
    <div>
        <div class="grecaptcha-badge" data-style="bottomright"
            style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
            <div class="grecaptcha-logo"><iframe title="reCAPTCHA"
                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc2CbYUAAAAADx3ktj7UwFZ5uREy3KNOYgcOGuU&amp;co=aHR0cHM6Ly93d3cuYmFyY291bmNpbC5nb3YuYmQ6NDQz&amp;hl=en&amp;v=4rwLQsl5N_ccppoTAwwwMrEN&amp;size=invisible&amp;cb=v095qpl5qbgt"
                    width="256" height="60" role="presentation" name="a-20a2f51iicnf" frameborder="0" scrolling="no"
                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
            </div>
            <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response"
                class="g-recaptcha-response"
                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
        </div><iframe style="display: none;"></iframe>
    </div>
</body>

</html>
@endsection