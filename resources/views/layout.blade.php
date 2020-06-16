<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">

    <!-- for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="albertos/images/favicon.ico" type="albertos/image/vnd.microsoft.icon" />
    <link rel="icon" href="albertos/images/favicon.ico" type="albertos/image/x-ico" />
    <title>ALBERTOS - Pizza & Restaurant HTML Template</title>

    <link rel='stylesheet' href='albertos/rs-slider/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/animsition.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/simple-line-icons.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/pe-icon-7-stroke.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/flaticon.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/owl.carousel.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/jquery.easy-pie-chart.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/owl.transitions.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/media.css' type='text/css' media='all' />
    <link rel='stylesheet' href='albertos/css/custom_script.css' type='text/css' media='all' />

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Merriweather%3A%2C400%7CPatua+One%3A400&amp;ver=1.0.0' type='text/css' media='all' />
    <link href="http://fonts.googleapis.com/css?family=Patua+One:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">


</head>

<body class="home page-template page-template-template-home page-template-template-home-php page page-id-7">
    <div class="animsition global-wrapper">
        <div id="header" class="header-wrapper">
            <div class="logo">
                <a href="{{route('accueil')}}" title="ALBERTOS - Pizza HTML Theme"><img class="logoImage" src="albertos/images/logo.png" alt="ALBERTOS - Pizza HTML Theme" /><img class="logoImageRetina" src="albertos/images/logo-retina.png" alt="ALBERTOS - Pizza HTML Theme" /></a>
                <div class="clear"></div>
            </div>
            <div class="menu-wrapper">
                <div class="main-menu">
                    <div class="menu-main-nav-menu-container">
                        <ul id="menu-main-nav-menu" class="sf-menu">
                            <li class="menu-item menu-item-home {{Request::path() === '/' ? 'current-menu-item current_page_item' : ''}}"><a href="{{route('accueil')}}">Home</a></li>
                            <li class="menu-item {{Request::path() === 'menu' ? 'current-menu-item current_page_item': ''}}"><a href="{{route('menu')}}">Menu</a></li>
                            <li class="menu-item {{Request::path() === 'order' ? 'current-menu-item current_page_item': ''}}"><a href="{{route('order')}}">Demande en ligne</a></li>
                            <li class="menu-item {{Request::path() === 'about' ? 'current-menu-item current_page_item': ''}}"><a href="{{route('about')}}">About us</a></li>
                            <li class="menu-item {{Request::path() === 'contact' ? 'current-menu-item current_page_item': ''}}"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-icons-inside">
                    <div class="menu-icon menu-icon-mobile"><span class="menu-icon-create"></span></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="footer">
                <div class="footer-socials">
                    <ul class="socials-sh">
                        <li>
                            <a class="fa sh-socials-url fa-twitter" href="#" title="Twitter" target="_blank"></a>
                        </li>
                        <li>
                            <a class="fa sh-socials-url fa-facebook" href="#" title="Facebook" target="_blank"></a>
                        </li>
                        <li>
                            <a class="fa sh-socials-url fa-linkedin" href="#" title="LinkedIn" target="_blank"></a>
                        </li>
                        <li>
                            <a class="fa sh-socials-url fa-google-plus" href="#" title="Google Plus" target="_blank"></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-content">
                    @ 2020 La Boite à Pizza. Made by <a href="#"  title="Pego HTML Themes">Ghoulami El Mehdi</a>.</div>
            </div>
        </div>

        <div class="mobile-menu-wrapper">
            <div class="menu-main-nav-menu-container">
                <ul id="menu-main-nav-menu-1" class="mobile-menu">
                    <li class="menu-item menu-item-home {{Request::path() === '/' ? 'current-menu-item current_page_item' : ''}}"><a href="{{route('accueil')}}">Home</a></li>
                    <li class="menu-item {{Request::path() === 'menu' ? 'current-menu-item current_page_item': ''}}"><a href="{{route('menu')}}">Menu</a></li>
                    <li class="menu-item {{Request::path() === 'ordrer' ? 'current-menu-item current_page_item': ''}}"><a href="#">Demande en ligne</a></li>
                    <li class="menu-item {{Request::path() === 'about' ? 'current-menu-item current_page_item': ''}}"><a href="{{route('about')}}">About us</a></li>
                    <li class="menu-item {{Request::path() === 'contact' ? 'current-menu-item current_page_item': ''}}"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>

        @yield('content')

    </div>

    <script type='text/javascript' src='albertos/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='albertos/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='albertos/rs-slider/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='albertos/rs-slider/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyD3rVzWhxb6EGiqAD9HSrKb22gTo2HTqoA&amp;ver=1.0'></script>

    <script type='text/javascript' src='albertos/js/modernizr.custom.js'></script>
    <script type='text/javascript' src='albertos/js/jquery.animsition.min.js'></script>
    <script type='text/javascript' src='albertos/js/superfish.js'></script>
    <script type='text/javascript' src='albertos/js/waypoints.min.js'></script>
    <script type='text/javascript' src='albertos/js/jquery.mobilemenu.js'></script>
    <script type='text/javascript' src='albertos/js/custom.js'></script>
    <script type='text/javascript' src='albertos/js/custom-inline-js.js'></script>
    <script type='text/javascript' src='albertos/js/jquery.isotope.min.js'></script>

    <script type="text/javascript" src="albertos/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="albertos/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="albertos/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="albertos/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="albertos/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="albertos/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="albertos/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="albertos/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="albertos/js/extensions/revolution.extension.video.min.js"></script>
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>

    <script type="text/javascript" src="albertos/js/file1.js"></script>

    <script>
        var htmlDivCss = unescape("%23rev_slider_1_1%20.metis%20.tp-bullet%20%7B%20%0A%20%20%20%20opacity%3A1%3B%0A%20%20%20%20width%3A50px%3B%0A%20%20%20%20height%3A50px%3B%20%20%20%20%0A%20%20%20%20padding%3A3px%3B%0A%20%20%20%20background-color%3Argba%280%2C%200%2C%200%2C0.25%29%3B%0A%20%20%20%20margin%3A0px%3B%0A%20%20%20%20box-sizing%3Aborder-box%3B%0A%20%20%20%20transition%3Aall%200.3s%3B%0A%20%20%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20%20%20border-radius%3A50%25%3B%0A%20%20%7D%0A%0A%23rev_slider_1_1%20.metis%20.tp-bullet-image%20%7B%0A%0A%20%20%20border-radius%3A50%25%3B%0A%20%20%20display%3Ablock%3B%0A%20%20%20box-sizing%3Aborder-box%3B%0A%20%20%20position%3Arelative%3B%0A%20%20%20%20-webkit-box-shadow%3A%20inset%205px%205px%2010px%200px%20rgba%280%2C0%2C0%2C0.25%29%3B%0A%20%20-moz-box-shadow%3A%20inset%205px%205px%2010px%200px%20rgba%280%2C0%2C0%2C0.25%29%3B%0A%20%20box-shadow%3A%20inset%205px%205px%2010px%200px%20rgba%280%2C0%2C0%2C0.25%29%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20background-size%3Acover%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%7D%20%20%0A%23rev_slider_1_1%20.metis%20.tp-bullet-title%20%7B%20%0A%20%20%20%20%20position%3Aabsolute%3B%20%0A%20%20%20%20%20bottom%3A50px%3B%0A%20%20%20%20%20margin-bottom%3A10px%3B%0A%20%20%20%20%20display%3Ainline-block%3B%0A%20%20%20%20%20left%3A50%25%3B%0A%20%20%20%20%20background%3A%23000%3B%0A%20%20%20%20%20background%3Argba%280%2C%200%2C%200%2C0.75%29%3B%0A%20%20%20%20%20color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%20%20%20%20%20padding%3A10px%2030px%3B%0A%20%20%20%20%20border-radius%3A4px%3B%0A%20%20%20-webkit-border-radius%3A4px%3B%0A%20%20%20%20%20opacity%3A0%3B%0A%20%20%20%20%20%20transition%3Aall%200.3s%3B%0A%20%20%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20%20%20transform%3A%20translatez%280.001px%29%20translatex%28-50%25%29%20translatey%2814px%29%3B%0A%20%20%20%20transform-origin%3A50%25%20100%25%3B%0A%20%20%20%20-webkit-transform%3A%20translatez%280.001px%29%20translatex%28-50%25%29%20translatey%2814px%29%3B%0A%20%20%20%20-webkit-transform-origin%3A50%25%20100%25%3B%0A%20%20%20%20opacity%3A0%3B%0A%20%20%20%20white-space%3Anowrap%3B%0A%20%7D%0A%0A%23rev_slider_1_1%20.metis%20.tp-bullet%3Ahover%20.tp-bullet-title%20%7B%0A%20%20%20%20%20transform%3Arotatex%280deg%29%20translatex%28-50%25%29%3B%0A%20%20%20%20-webkit-transform%3Arotatex%280deg%29%20translatex%28-50%25%29%3B%0A%20%20%20%20opacity%3A1%3B%0A%7D%0A%0A%23rev_slider_1_1%20.metis%20.tp-bullet.selected%2C%0A%23rev_slider_1_1%20.metis%20.tp-bullet%3Ahover%20%20%7B%0Abackground%3A%20-moz-linear-gradient%28top%2C%20%20rgba%28255%2C%20255%2C%20255%2C%201%29%200%25%2C%20rgba%28119%2C%20119%2C%20119%2C%201%29%20100%25%29%3B%0Abackground%3A%20-webkit-gradient%28left%20top%2C%20left%20bottom%2C%20color-stop%280%25%2C%20rgba%28255%2C%20255%2C%20255%2C%201%29%29%2C%20color-stop%28100%25%2C%20rgba%28119%2C%20119%2C%20119%2C%201%29%29%29%3B%0Abackground%3A%20-webkit-linear-gradient%28top%2C%20rgba%28255%2C%20255%2C%20255%2C%201%29%200%25%2C%20rgba%28119%2C%20119%2C%20119%2C%201%29%20100%25%29%3B%0Abackground%3A%20-o-linear-gradient%28top%2C%20rgba%28255%2C%20255%2C%20255%2C%201%29%200%25%2C%20rgba%28119%2C%20119%2C%20119%2C%201%29%20100%25%29%3B%0Abackground%3A%20-ms-linear-gradient%28top%2C%20rgba%28255%2C%20255%2C%20255%2C%201%29%200%25%2C%20rgba%28119%2C%20119%2C%20119%2C%201%29%20100%25%29%3B%0Abackground%3A%20linear-gradient%28to%20bottom%2C%20rgba%28255%2C%20255%2C%20255%2C%201%29%200%25%2C%20rgba%28119%2C%20119%2C%20119%2C%201%29%20100%25%29%3B%0A%20%20%7D%0A%23rev_slider_1_1%20.metis%20.tp-bullet-title%3Aafter%20%7B%0A%20%20%20%20content%3A%22%20%22%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20left%3A50%25%3B%0A%20%20%20%20margin-left%3A-8px%3B%0A%20%20%20%20width%3A%200%3B%0A%20%20%20%20height%3A%200%3B%0A%20%20%20%20border-style%3A%20solid%3B%0A%20%20%20%20border-width%3A%208px%208px%200%208px%3B%0A%20%20%20%20border-color%3A%20rgba%280%2C%200%2C%200%2C0.75%29%20transparent%20transparent%20transparent%3B%0A%20%20%20%20bottom%3A-8px%3B%0A%20%20%20%7D%0A%0A%0A%0A%2F%2A%20VERTICAL%20RIGHT%20%2A%2F%0A%23rev_slider_1_1%20.metis.nav-dir-vertical.nav-pos-hor-right%20.tp-bullet-title%20%7B%20%0A%20%20%20margin-bottom%3A0px%3B%20top%3A50%25%3B%20right%3A50px%3B%20left%3Aauto%3B%20bottom%3Aauto%3B%20margin-right%3A10px%3B%20%20transform%3A%20translateX%28-10px%29%20translateY%28-50%25%29%3B-webkit-transform%3A%20translateX%28-10px%29%20translateY%28-50%25%29%3B%20%0A%7D%20%20%0A%23rev_slider_1_1%20.metis.nav-dir-vertical.nav-pos-hor-right%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%2010px%200%2010px%2010px%3B%0A%20%20border-color%3A%20%20transparent%20transparent%20transparent%20rgba%280%2C%200%2C%200%2C0.75%29%20%3B%0A%20%20right%3A-10px%3B%0A%20%20left%3Aauto%3B%20%20%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A10px%3B%20%20%20%20%0A%7D%0A%0A%0A%23rev_slider_1_1%20.metis.nav-dir-vertical.nav-pos-hor-right%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20%20transform%3AtranslateY%28-50%25%29%20translateX%280px%29%3B%0A%20%20-webkit-transform%3AtranslateY%28-50%25%29%20translateX%280px%29%3B%0A%7D%0A%0A%2F%2A%20VERTICAL%20LEFT%20%26%26%20CENTER%2A%2F%0A%23rev_slider_1_1%20.metis.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.metis.nav-dir-vertical.nav-pos-hor-center%20.tp-bullet-title%20%7B%20%0A%20%20%20margin-bottom%3A0px%3B%20top%3A50%25%3B%20left%3A50px%3B%20right%3Aauto%3B%20bottom%3Aauto%3B%20margin-left%3A10px%3B%20%20transform%3A%20translateX%2810px%29%20translateY%28-50%25%29%3B-webkit-transform%3A%20translateX%2810px%29%20translateY%28-50%25%29%3B%20%0A%7D%20%20%0A%23rev_slider_1_1%20.metis.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%3Aafter%2C%0A%23rev_slider_1_1%20.metis.nav-dir-vertical.nav-pos-hor-center%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%2010px%2010px%2010px%200%3B%0A%20%20border-color%3A%20%20transparent%20rgba%280%2C%200%2C%200%2C0.75%29%20%20transparent%20transparent%20%3B%0A%20%20left%3A-2px%3B%0A%20%20right%3Aauto%3B%20%20%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A10px%3B%20%20%20%20%0A%7D%0A%0A%0A%23rev_slider_1_1%20.metis.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet%3Ahover%20.tp-bullet-title%2C%0A%23rev_slider_1_1%20.metis.nav-dir-vertical.nav-pos-hor-center%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20%20transform%3AtranslateY%28-50%25%29%20translateX%280px%29%3B%0A%20%20-webkit-transform%3AtranslateY%28-50%25%29%20translateX%280px%29%3B%0A%7D%0A%0A%0A%2F%2A%20HORIZONTAL%20TOP%20%2A%2F%0A%23rev_slider_1_1%20.metis.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%20%7B%20%0A%20%20%20margin-bottom%3A0px%3B%20top%3A50px%3B%20left%3A50%25%3B%20bottom%3Aauto%3B%20margin-top%3A10px%3B%20right%3Aauto%3B%20transform%3A%20translateX%28-50%25%29%20translateY%2810px%29%3B-webkit-transform%3A%20translateX%28-50%25%29%20translateY%2810px%29%3B%20%0A%7D%20%20%0A%23rev_slider_1_1%20.metis.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%200%2010px%2010px%2010px%3B%0A%20%20border-color%3A%20%20transparent%20transparent%20rgba%280%2C%200%2C%200%2C0.75%29%20transparent%3B%0A%20%20right%3Aauto%3B%0A%20%20left%3A50%25%3B%0A%20%20margin-left%3A-10px%3B%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A-10px%3B%0A%20%20%20%20%0A%7D%0A%0A%0A%23rev_slider_1_1%20.metis.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20%20transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%20%20-webkit-transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%7D%0A%0A%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
</body>
</html>
