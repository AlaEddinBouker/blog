<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Chnowa Barnemjek</title>
    <meta name="description" content="">
    <meta name="author" content="Devrows">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="/content/football/images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kanit:100,300,400,400italic,500,700,700italic'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300'>

    <!-- CSS -->
    <link rel='stylesheet' href='/css/global.css'>
    <link rel='stylesheet' href='/content/football/css/structure.css'>
    <link rel='stylesheet' href='/content/football/css/football.css'>
    <link rel='stylesheet' href='/content/football/css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="/plugins/rs-plugin-5.3.1/css/settings.css">

</head>

<body class="color-custom style-default button-flat layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-creative header-open minimalist-header-no ab-hide subheader-title-left menu-link-color menuo-no-borders logo-valign-top logo-no-margin logo-no-sticky-padding mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-2096">
<div id="Header_creative">
    <a href="#" class="creative-menu-toggle"><i class="icon-menu-fine"></i></a>
    <div class="creative-social">
        <ul class="social">
            <li class="facebook">
                <a href="#" title="Facebook"><i class="icon-facebook"></i></a>
            </li>
            <li class="twitter">
                <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
            </li>
            <li class="youtube">
                <a href="#" title="YouTube"><i class="icon-play"></i></a>
            </li>
            <li class="instagram">
                <a href="#" title="Instagram"><i class="icon-instagram"></i></a>
            </li>
        </ul>
    </div>
    <div class="creative-wrapper">

        <div id="Top_bar">
            <div class="one clearfix">
                <div class="top_bar_left">
                    <div class="logo">
                        <a id="logo" href="{{url('/')}}" title="logo" data-height="292" data-padding="0"><img class="logo-main scale-with-grid" src="/images/bg.jpg" data-retina="/images/bg.jpg" data-height="292" alt="football">
                            <img class="logo-sticky scale-with-grid" src="/images/bg.jpg" data-retina="/images/bg.jpg" data-height="292" alt="football">
                            <img class="logo-mobile scale-with-grid" src="/images/bg.jpg" data-retina="/images/bg.jpg" data-height="292" alt="football">
                            <img class="logo-mobile-sticky scale-with-grid" src="/images/bg.jpg" data-retina="/images/bg.jpg" data-height="292" alt="football"></a>
                    </div>
                    <div class="menu_wrapper">
                        <nav id="menu">
                            <ul id="menu-main-menu" class="menu menu-main">
                                <li class="current-menu-item">
                                    <a href="index-football.html"><span>Accueile</span></a>
                                </li>
                                <li>
                                    <a href="content/football/news.html"><span>Categories</span></a>
                                </li>

                                <li>
                                    <a href="content/football/contact.html"><span>CONTACT</span></a>
                                </li>
                            </ul>
                        </nav>
                        <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                    </div>
                </div>
                <div class="banner_wrapper"></div>
            </div>
        </div>
    </div>
</div>
<div id="Wrapper">
    @yield('content')
    <footer id="Footer" class="clearfix">
        <div class="footer_copy">
            <div class="container">
                <div class="column one">
                    <a id="back_to_top" class="button button_js" href="#"><i class="icon-up-open-big"></i></a>
                    <div class="copyright">
                        &copy; 2019 CHNOWA BARNEMJEK ? - Developped by <a target="_blank" rel="nofollow" href="http://devrows.com">DevRows</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- side menu -->
<div id="Side_slide" class="right dark" data-width="250">
    <div class="close-wrapper">
        <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
    </div>
    <div class="menu_wrapper"></div>
    <ul class="social">
        <li class="facebook">
            <a href="#" title="Facebook"><i class="icon-facebook"></i></a>
        </li>
        <li class="twitter">
            <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
        </li>
        <li class="youtube">
            <a href="#" title="YouTube"><i class="icon-play"></i></a>
        </li>
        <li class="instagram">
            <a href="#" title="Instagram"><i class="icon-instagram"></i></a>
        </li>
    </ul>
</div>
<div id="body_overlay"></div>

<!-- JS -->
<script src="/js/jquery-2.1.4.min.js"></script>

<script src="/js/mfn.menu.js"></script>
<script src="/js/jquery.plugins.js"></script>
<script src="/js/jquery.jplayer.min.js"></script>
<script src="/js/animations/animations.js"></script>
<script src="/js/translate3d.js"></script>
<script src="/js/scripts.js"></script>


<script src="/plugins/rs-plugin-5.3.1/js/jquery.themepunch.tools.min.js"></script>
<script src="/plugins/rs-plugin-5.3.1/js/jquery.themepunch.revolution.min.js"></script>

<script src="/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.video.min.js"></script>
<script src="/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.parallax.min.js"></script>


<script>
    var revapi1, tpj;
    ( function() {
        if (!/loaded|interactive|complete/.test(document.readyState))
            document.addEventListener("DOMContentLoaded", onLoad);
        else
            onLoad();
        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on")
                    tpj.noConflict();
            }
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType : "hero",
                    sliderLayout : "auto",
                    dottedOverlay : "none",
                    delay : 9000,
                    visibilityLevels : [1240, 1024, 778, 480],
                    gridwidth : 1080,
                    gridheight : 900,
                    lazyType : "none",
                    parallax : {
                        type : "scroll",
                        origo : "enterpoint",
                        speed : 400,
                        speedbg : 0,
                        speedls : 0,
                        levels : [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow : 0,
                    spinner : "spinner2",
                    autoHeight : "off",
                    disableProgressBar : "on",
                    hideThumbsOnMobile : "off",
                    hideSliderAtLimit : 0,
                    hideCaptionAtLimit : 0,
                    hideAllCaptionAtLilmit : 0,
                    debugMode : false,
                    fallbacks : {
                        simplifyAll : "off",
                        disableFocusListener : false,
                    }
                });
            };
        };
    }());
</script>


</body>

</html>