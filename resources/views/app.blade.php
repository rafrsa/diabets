<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Diabets</title>

    <link rel="icon" href="http://demo.geekslabs.com/materialize/v2.1/layout03/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="http://demo.geekslabs.com/materialize/v2.1/layout03/images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="http://demo.geekslabs.com/materialize/v2.1/layout03/images/favicon/mstile-144x144.png">

    <link href="{{ URL::asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://demo.geekslabs.com/materialize/v2.1/layout03/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="cyan">
            <div class="nav-wrapper">

                <ul class="left">
                    <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan hide-on-large-only"><i class="mdi-navigation-menu" ></i></a></li>
                    <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="http://demo.geekslabs.com/materialize/v2.1/layout03/images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                </div>
                <ul class="right hide-on-med-and-down">
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                    </li>
                    <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- HORIZONTL NAV START-->
        <nav id="horizontal-nav" class="white hide-on-med-and-down">
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li>
                        <a href="http://demo.geekslabs.com/materialize/v2.1/layout03/index.html" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://demo.geekslabs.com/materialize/v2.1/layout03/app-email.html" class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>Mailbox</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="CSSdropdown">
                            <i class="mdi-action-invert-colors"></i>
                            <span>CSS<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="UIElementsdropdown">
                            <i class="mdi-image-palette"></i>
                            <span>UI Elements<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="app-widget.html" class="cyan-text">
                            <i class="mdi-device-now-widgets"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Tablesdropdown">
                            <i class="mdi-editor-border-all"></i>
                            <span>Tables<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Formsdropdown">
                            <i class="mdi-editor-insert-comment"></i>
                            <span>Forms<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Pagesdropdown">
                            <i class="mdi-social-pages"></i>
                            <span>Pages<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="eCommersdropdown">
                            <i class="mdi-action-shopping-cart"></i>
                            <span>eCommers<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Usersdropdown">
                            <i class="mdi-action-account-circle"></i>
                            <span>Users<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Chartsdropdown">
                            <i class="mdi-editor-insert-chart"></i>
                            <span>Charts<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- CSSdropdown -->
        <ul id="CSSdropdown" class="dropdown-content dropdown-horizontal-list">
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/css-typography.html" class="cyan-text">Typography</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/css-icons.html" class="cyan-text">Icons</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/css-shadow.html" class="cyan-text">Shadow</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/css-media.html" class="cyan-text">Media</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/css-sass.html" class="cyan-text">Sass</a></li>
        </ul>

        <!-- UIElementsdropdown-->
        <ul id="UIElementsdropdown" class="dropdown-content dropdown-horizontal-list">
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-buttons.html" class="cyan-text">Buttons</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-badges.html" class="cyan-text">Badges</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-cards.html" class="cyan-text">Cards</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-collections.html" class="cyan-text">Collections</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-accordions.html" class="cyan-text">Accordian</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-navbar.html" class="cyan-text">Navbar</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-pagination.html" class="cyan-text">Pagination</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-preloader.html" class="cyan-text">Preloader</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-modals.html" class="cyan-text">Modals</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-media.html" class="cyan-text">Media</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-toasts.html" class="cyan-text">Toasts</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/ui-tooltip.html" class="cyan-text">Tooltip</a></li>
        </ul>

        <!-- Tablesdropdown -->
        <ul id="Tablesdropdown" class="dropdown-content dropdown-horizontal-list">
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/table-basic.html" class="cyan-text">Basic Tables</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/table-data.html" class="cyan-text">Data Tables</a></li>
        </ul>

        <!-- Formsdropdown -->
        <ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/form-elements.html" class="cyan-text">Form Elements</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/form-layouts.html" class="cyan-text">Form Layouts</a></li>
        </ul>

        <!-- Pagesdropdown -->
        <ul id="Pagesdropdown" class="dropdown-content dropdown-horizontal-list">

            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/page-invoice.html" class="cyan-text">Invoice</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/page-404.html" class="cyan-text">404</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/page-500.html" class="cyan-text">500</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/page-blank.html" class="cyan-text">Blank</a></li>
        </ul>

        <!-- eCommers -->
        <ul id="eCommersdropdown" class="dropdown-content dropdown-horizontal-list">
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/eCommerce-products-page.html"  class="cyan-text">eCommerce Products </a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/eCommerce-pricing.html"  class="cyan-text">Pricing Page</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/eCommerce-invoice.html"  class="cyan-text">Invoice</a></li>
        </ul>

        <!-- Mediasdropdown -->
        <ul id="Mediasdropdown" class="dropdown-content dropdown-horizontal-list">
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/media-gallary-page.html"  class="cyan-text">Gallary Page</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/media-hover-effects.html"  class="cyan-text">Image Hover Effects</a></li>
        </ul>

        <!-- Usersdropdown -->
        <ul id="Usersdropdown" class="dropdown-content dropdown-horizontal-list">
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/user-profile-page.html"  class="cyan-text">User Profile</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/user-login.html"  class="cyan-text">Login</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/user-register.html" class="cyan-text">Register</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/user-forgot-password.html" class="cyan-text">Forgot Password</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/user-lock-screen.html" class="cyan-text">Lock Screen</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/user-sesssion-timeout.html" class="cyan-text">Session Timeout</a></li>
        </ul>

        <!-- Chartsdropdown -->
        <ul id="Chartsdropdown" class="dropdown-content dropdown-horizontal-list">
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/charts-chartjs.html" class="cyan-text">Chart JS</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/charts-chartist.html" class="cyan-text">Chartist</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/charts-morris.html" class="cyan-text">Morris Charts</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/charts-xcharts.html" class="cyan-text">xCharts</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/charts-flotcharts.html" class="cyan-text">Flot Charts</a></li>
            <li><a href="http://demo.geekslabs.com/materialize/v2.1/layout03/charts-sparklines.html" class="cyan-text">Sparkline Charts</a></li>
        </ul>
    </div>
</header>

<footer class="page-footer">
    <div class="container">
        <div class="row">
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
        </div>
    </div>
</footer>

<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/materialize.js"></script>
<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/chartist-js/chartist.min.js"></script>

<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/chartjs/chart.min.js"></script>
<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/chartjs/chart-script.js"></script>

<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/sparkline/sparkline-script.js"></script>

<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins/jvectormap/vectormap-script.js"></script>

<script type="text/javascript" src="http://demo.geekslabs.com/materialize/v2.1/layout03/js/plugins.js"></script>

</body>

</html>