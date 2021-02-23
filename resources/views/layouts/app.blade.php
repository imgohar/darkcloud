<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dark Cloud- Cloud Computing, Apps & Server</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{URL::asset("images/darkcloud-logo-black.png")}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset("css/bootstrap.min.css")}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" href="{{URL::asset("revslider/css/rs6.css")}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{URL::asset("css/typography.css")}}">
    <!-- Style CSS -->
    <link rel='stylesheet' href='{{URL::asset("css/qloud-style.css")}}' />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{URL::asset("css/responsive.css")}}">
</head>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <div class="load-img">
                <img src="{{URL::asset("images/loader.gif")}}" alt="loader">
            </div>
        </div>
    </div>
    <!-- loading End -->
    {{-- HEADER START --}}
    @include('includes.header')
    {{-- HEADER ENDS --}}

    
    {{-- MAIN CONTENT --}}
    @yield('content')
    {{-- MAIN CONTENT END --}}

    {{-- FOOTER START --}}
    @include('includes.footer')
    {{-- FOOTER END --}}

    <!-- === back-to-top === -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- === back-to-top End === -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{URL::asset("js/jquery-3.4.1.js")}}"></script>
    <!-- jQuery  for scroll me js -->
    <script src='{{URL::asset("js/jquery-min.js")}}'></script>
    <!-- popper  -->
    <script src="{{URL::asset("js/popper.min.js")}}"></script>
    <!--  bootstrap -->
    <script src="{{URL::asset("js/bootstrap.min.js")}}"></script>
    <!-- Appear JavaScript -->
    <script src="{{URL::asset("js/appear.js")}}"></script>

    <!-- Jquery-migrate JavaScript -->
    <script src='{{URL::asset("js/jquery-migrate.min.js")}}'></script>
    <!-- Scripts JavaScript -->
    <script src='{{URL::asset("js/scripts.js")}}'></script>
    <!-- countdownTimer JavaScript -->
    <script src='{{URL::asset("js/jQuery.countdownTimer.min.js")}}'></script>
    <!-- Tox-progress JavaScript -->
    <script src='{{URL::asset("js/tox-progress.min.js")}}'></script>
    <!-- Timeline JavaScript -->
    <script src='{{URL::asset("js/timeline.js")}}'></script>
    <!-- Timeline min JavaScript -->
    <script src='{{URL::asset("js/timeline.min.js")}}'></script>
    <!-- Slick JavaScript -->
    <script src='{{URL::asset("js/slick.min.js")}}'></script>
    <!-- Popper JavaScript -->
    <script src='{{URL::asset("js/popper.min.js")}}'></script>
    <!-- Owl.carousel JavaScript -->
    <script src='{{URL::asset("js/owl.carousel.min.js")}}'></script>
    <!-- Countdown JavaScript -->
    <script src='{{URL::asset("js/countdown.js")}}'></script>
    <!-- Jquery.countTo JavaScript -->
    <script src='{{URL::asset("js/jquery.countTo.js")}}'></script>
    <!-- Magnific-popup JavaScript -->
    <script src='{{URL::asset("js/jquery.magnific-popup.min.js")}}'></script>
    <!-- Isotope.pkgd.min JavaScript -->
    <script src='{{URL::asset("js/isotope.pkgd.min.js")}}'></script>
    <!-- Wow JavaScript -->
    <script src='{{URL::asset("js/wow.min.js")}}'></script>
    <!--  Custom JavaScript -->
    <script src="{{URL::asset("js/custom.js")}}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{URL::asset("revslider/js/revolution.tools.min.js")}}"></script>
    <script src="{{URL::asset("revslider/js/rs6.min.js")}}"></script>
    <script>
        var revapi1,
            tpj;
        jQuery(function() {
            tpj = jQuery;
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    jsFileLocation: "js/",
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1240,1024,778,480",
                    gridwidth: 1440,
                    gridheight: 768,
                    spinner: "spinner0",
                    editorheight: "768,546,584,720",
                    responsiveLevels: "1240,1024,778,480",
                    disableProgressBar: "on",
                    navigation: {
                        onHoverStop: false
                    },
                    parallax: {
                        levels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 30],
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 0
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });
            }
        });
    </script>
</body>
</html>