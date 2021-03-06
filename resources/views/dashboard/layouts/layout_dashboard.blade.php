<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
        content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>@yield('title') | Test Data</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon-152x152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/chartist-plugin-tooltip.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/intro.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    <!-- END: Custom CSS-->
    @yield('cstm_css')
</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  "
    data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav
                class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
                <div class="nav-wrapper">
                    <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                        <input class="header-search-input z-depth-2" type="text" name="Search"
                            placeholder="Explore Test Data">
                    </div>
                    <ul class="navbar-list right">
                        <!-- <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li> -->
                        <li class="hide-on-med-and-down"><a
                                class="waves-effect waves-block waves-light toggle-fullscreen"
                                href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                        <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button"
                                href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                        <li><a class="waves-effect waves-block waves-light notification-button"
                                href="javascript:void(0);" data-target="notifications-dropdown"><i
                                    class="material-icons">notifications_none<small
                                        class="notification-badge">5</small></i></a></li>
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                                data-target="profile-dropdown"><span class="avatar-status avatar-online"><img
                                        src="assets/images/avatar-7.png" alt="avatar"><i></i></span></a></li>
                        <!-- <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li> -->
                    </ul>
                    <!-- translation-button-->
                    <ul class="dropdown-content" id="translation-dropdown">
                        <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-gb"></i>
                                English</a></li>
                        <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-fr"></i>
                                French</a></li>
                        <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-cn"></i>
                                Chinese</a></li>
                        <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-de"></i>
                                German</a></li>
                    </ul>
                    <!-- notifications-dropdown-->
                    <ul class="dropdown-content" id="notifications-dropdown">
                        <li>
                            <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                        </li>
                        <li class="divider"></li>
                        <li><a class="grey-text text-darken-2" href="#!"><span
                                    class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new
                                order has been placed!</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                        </li>
                        <li><a class="grey-text text-darken-2" href="#!"><span
                                    class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                        </li>
                        <li><a class="grey-text text-darken-2" href="#!"><span
                                    class="material-icons icon-bg-circle teal small">settings</span> Settings
                                updated</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                        </li>
                        <li><a class="grey-text text-darken-2" href="#!"><span
                                    class="material-icons icon-bg-circle deep-orange small">today</span> Director
                                meeting started</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                        </li>
                        <li><a class="grey-text text-darken-2" href="#!"><span
                                    class="material-icons icon-bg-circle amber small">trending_up</span> Generate
                                monthly report</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                        </li>
                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i
                                    class="material-icons">person_outline</i> Profile</a></li>
                        <li><a class="grey-text text-darken-1" href="app-chat.html"><i
                                    class="material-icons">chat_bubble_outline</i> Chat</a></li>
                        <li><a class="grey-text text-darken-1" href="page-faq.html"><i
                                    class="material-icons">help_outline</i> Help</a></li>
                        <li class="divider"></li>
                        <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i
                                    class="material-icons">lock_outline</i> Lock</a></li>
                        <li><a class="grey-text text-darken-1" href="user-login.html"><i
                                    class="material-icons">keyboard_tab</i> Logout</a></li>
                    </ul>
                </div>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form>
                            <div class="input-field">
                                <input class="search-box-sm" type="search" required="">
                                <label class="label-icon" for="search"><i
                                        class="material-icons search-sm-icon">search</i></label><i
                                    class="material-icons search-sm-close">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <!-- END: Header-->



    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img
                        src="assets/images/materialize-logo-color.png" alt="materialize logo" /><span
                        class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler"
                    href="#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
            data-menu="menu-navigation" data-collapsible="menu-accordion">
            <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i
                        class="material-icons">settings_input_svideo</i><span class="menu-title"
                        data-i18n="">Dashboard</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-body" href="{{ route('/') }}" data-i18n=""><i
                                    class="material-icons">radio_button_unchecked</i><span>Modern</span></a>
                        </li>
                        <li><a class="collapsible-body" href="{{ route('/') }}" data-i18n=""><i
                                    class="material-icons">radio_button_unchecked</i><span>eCommerce</span></a>
                        </li>
                        <li><a class="collapsible-body" href="{{ route('/') }}" data-i18n=""><i
                                    class="material-icons">radio_button_unchecked</i><span>Analytic</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Master Data</a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{ route('maintance') }}"><i
                        class="material-icons">devices</i><span class="menu-title" data-i18n="">Data Device</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{ route('maintance') }}"><i
                        class="material-icons">sim_card</i><span class="menu-title"
                        data-i18n="">Data MSISDN Production</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{ route('maintance') }}"><i
                        class="material-icons">sim_card</i><span class="menu-title" data-i18n="">Data MSISDN Testbed</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{ route('maintance') }}"><i
                        class="material-icons">email</i><span class="menu-title"
                        data-i18n="">Email</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{ route('maintance') }}"><i
                        class="material-icons">sim_card</i><span class="menu-title" data-i18n="">Brand</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{ route('maintance') }}"><i
                        class="material-icons">devices</i><span class="menu-title" data-i18n="">Merk</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{ route('maintance') }}"><i
                        class="material-icons">adb</i><span class="menu-title" data-i18n="">OS</span></a>
            </li>
            <!-- <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i
                        class="material-icons">add_shopping_cart</i><span class="menu-title"
                        data-i18n="">eCommerce</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-body" href="eCommerce-products-page.html" data-i18n=""><i
                                    class="material-icons">radio_button_unchecked</i><span>Products Page</span></a>
                        </li>
                        <li><a class="collapsible-body" href="eCommerce-pricing.html" data-i18n=""><i
                                    class="material-icons">radio_button_unchecked</i><span>Pricing</span></a>
                        </li>
                        <li><a class="collapsible-body" href="eCommerce-invoice.html" data-i18n=""><i
                                    class="material-icons">radio_button_unchecked</i><span>Invoice</span></a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <li class="navigation-header"><a class="navigation-header-text">Transactions</a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="in{{ route('maintance') }}porgres"><i
                        class="material-icons">file_upload</i><span class="menu-title" data-i18n="">Borrowing</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="inpo{{ route('maintance') }}rgres"><i
                        class="material-icons">file_download</i><span class="menu-title" data-i18n="">Return</span></a>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Reports</a><i
                    class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{ route('maintance') }}"><i
                        class="material-icons">report</i><span class="menu-title" data-i18n="">Report</span></a>
            </li>
        </ul>
        <div class="navigation-background"></div><a
            class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
            href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    
    @yield('content')
    
    <!-- END: Page Main-->

    <!-- Theme Customizer -->

    <!-- <a href="#" data-target="theme-cutomizer-out"
        class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"><i
            class="material-icons">settings</i></a>

    <div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
        <div class="col s12">
            <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
            <h5 class="theme-cutomizer-title">Theme Customizer</h5>
            <p class="medium-small">Customize & Preview in Real Time</p>
            <div class="menu-options">
                <h6 class="mt-6">Menu Options</h6>
                <hr class="customize-devider" />
                <div class="menu-options-form row">
                    <div class="input-field col s12 menu-color mb-0">
                        <p class="mt-0">Menu Color</p>
                        <div class="gradient-color center-align">
                            <span class="menu-color-option gradient-45deg-indigo-blue"
                                data-color="gradient-45deg-indigo-blue"></span>
                            <span class="menu-color-option gradient-45deg-purple-deep-orange"
                                data-color="gradient-45deg-purple-deep-orange"></span>
                            <span class="menu-color-option gradient-45deg-light-blue-cyan"
                                data-color="gradient-45deg-light-blue-cyan"></span>
                            <span class="menu-color-option gradient-45deg-purple-amber"
                                data-color="gradient-45deg-purple-amber"></span>
                            <span class="menu-color-option gradient-45deg-purple-deep-purple"
                                data-color="gradient-45deg-purple-deep-purple"></span>
                            <span class="menu-color-option gradient-45deg-deep-orange-orange"
                                data-color="gradient-45deg-deep-orange-orange"></span>
                            <span class="menu-color-option gradient-45deg-green-teal"
                                data-color="gradient-45deg-green-teal"></span>
                            <span class="menu-color-option gradient-45deg-indigo-light-blue"
                                data-color="gradient-45deg-indigo-light-blue"></span>
                            <span class="menu-color-option gradient-45deg-red-pink"
                                data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="menu-color-option red" data-color="red"></span>
                            <span class="menu-color-option purple" data-color="purple"></span>
                            <span class="menu-color-option pink" data-color="pink"></span>
                            <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="menu-color-option cyan" data-color="cyan"></span>
                            <span class="menu-color-option teal" data-color="teal"></span>
                            <span class="menu-color-option light-blue" data-color="light-blue"></span>
                            <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
                        </div>
                    </div>
                    <div class="input-field col s12 menu-bg-color mb-0">
                        <p class="mt-0">Menu Background Color</p>
                        <div class="gradient-color center-align">
                            <span class="menu-bg-color-option gradient-45deg-indigo-blue"
                                data-color="gradient-45deg-indigo-blue"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                                data-color="gradient-45deg-purple-deep-orange"></span>
                            <span class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                                data-color="gradient-45deg-light-blue-cyan"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-amber"
                                data-color="gradient-45deg-purple-amber"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                                data-color="gradient-45deg-purple-deep-purple"></span>
                            <span class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                                data-color="gradient-45deg-deep-orange-orange"></span>
                            <span class="menu-bg-color-option gradient-45deg-green-teal"
                                data-color="gradient-45deg-green-teal"></span>
                            <span class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                                data-color="gradient-45deg-indigo-light-blue"></span>
                            <span class="menu-bg-color-option gradient-45deg-red-pink"
                                data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="menu-bg-color-option red" data-color="red"></span>
                            <span class="menu-bg-color-option purple" data-color="purple"></span>
                            <span class="menu-bg-color-option pink" data-color="pink"></span>
                            <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                            <span class="menu-bg-color-option teal" data-color="teal"></span>
                            <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                            <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Menu Dark
                            <label class="float-right"><input class="menu-dark-checkbox" type="checkbox" /> <span
                                    class="lever ml-0"></span></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Menu Collapsed
                            <label class="float-right"><input class="menu-collapsed-checkbox" type="checkbox" /> <span
                                    class="lever ml-0"></span></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            <p class="mt-0">Menu Selection</p>
                            <label>
                                <input class="menu-selection-radio with-gap" value="sidenav-active-square"
                                    name="menu-selection" type="radio" />
                                <span>Square</span>
                            </label>
                            <label>
                                <input class="menu-selection-radio with-gap" value="sidenav-active-rounded"
                                    name="menu-selection" type="radio" />
                                <span>Rounded</span>
                            </label>
                            <label>
                                <input class="menu-selection-radio with-gap" value="" name="menu-selection"
                                    type="radio" />
                                <span>Normal</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-6">Navbar Options</h6>
            <hr class="customize-devider" />
            <div class="navbar-options row">
                <div class="input-field col s12 navbar-color mb-0">
                    <p class="mt-0">Navbar Color</p>
                    <div class="gradient-color center-align">
                        <span class="navbar-color-option gradient-45deg-indigo-blue"
                            data-color="gradient-45deg-indigo-blue"></span>
                        <span class="navbar-color-option gradient-45deg-purple-deep-orange"
                            data-color="gradient-45deg-purple-deep-orange"></span>
                        <span class="navbar-color-option gradient-45deg-light-blue-cyan"
                            data-color="gradient-45deg-light-blue-cyan"></span>
                        <span class="navbar-color-option gradient-45deg-purple-amber"
                            data-color="gradient-45deg-purple-amber"></span>
                        <span class="navbar-color-option gradient-45deg-purple-deep-purple"
                            data-color="gradient-45deg-purple-deep-purple"></span>
                        <span class="navbar-color-option gradient-45deg-deep-orange-orange"
                            data-color="gradient-45deg-deep-orange-orange"></span>
                        <span class="navbar-color-option gradient-45deg-green-teal"
                            data-color="gradient-45deg-green-teal"></span>
                        <span class="navbar-color-option gradient-45deg-indigo-light-blue"
                            data-color="gradient-45deg-indigo-light-blue"></span>
                        <span class="navbar-color-option gradient-45deg-red-pink"
                            data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="navbar-color-option red" data-color="red"></span>
                        <span class="navbar-color-option purple" data-color="purple"></span>
                        <span class="navbar-color-option pink" data-color="pink"></span>
                        <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="navbar-color-option cyan" data-color="cyan"></span>
                        <span class="navbar-color-option teal" data-color="teal"></span>
                        <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                        <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Navbar Dark
                        <label class="float-right"><input class="navbar-dark-checkbox" type="checkbox" /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Navbar Fixed
                        <label class="float-right"><input class="navbar-fixed-checkbox" type="checkbox" checked /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
            </div>
            <h6 class="mt-6">Footer Options</h6>
            <hr class="customize-devider" />
            <div class="navbar-options row">
                <div class="input-field col s12">
                    <div class="switch">
                        Footer Dark
                        <label class="float-right"><input class="footer-dark-checkbox" type="checkbox" /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Footer Fixed
                        <label class="float-right"><input class="footer-fixed-checkbox" type="checkbox" /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--/ Theme Customizer -->
    <!-- BEGIN: Footer-->

    <footer
        class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2019 ZLLUP</a> All rights reserved.</span><span
                    class="right hide-on-small-only">Design and Developed by ZLLUP</a></span></div>
        </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('assets/js/plugins.js') }}" type="text/javascript"></script>
    <!-- <script src="{{ asset('assets/js/search.min.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('assets/js/custom-script.js') }}" type="text/javascript"></script>
    <!-- <script src="{{ asset('assets/js/customizer.js') }}" type="text/javascript"></script> -->
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/js/intro.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    @yield('cstm_js')
</body>

</html>
