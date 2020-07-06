<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | Business Ensemble </title>


    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="/admin_dashboard/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/admin_dashboard/files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/admin_dashboard/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="/admin_dashboard/files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="/admin_dashboard/files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="/admin_dashboard/files/assets/icon/simple-line-icons/css/simple-line-icons.css">

    <link rel="stylesheet" type="text/css" href="/admin_dashboard/files/assets/icon/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/admin_dashboard/files/assets/css/font-awesome-n.min.css">

    <link rel="stylesheet" href="/admin_dashboard/files/bower_components/chartist/css/chartist.css" type="text/css" media="all">

    <link rel="stylesheet" href="/admin_dashboard/files/bower_components/select2/css/select2.min.css" />


    <link rel="stylesheet" type="text/css" href="/admin_dashboard/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/admin_dashboard/files/assets/css/widget.css">



    <!-- ==============================================
        Favicons
        =============================================== -->

    <link rel="shortcut icon" href="/assets/imgs/logo-be.jpg">
    <link rel="apple-touch-icon" href="/assets/imgs/logo-be.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/imgs/logo-be.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/imgs/logo-be.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/94491a0993.js" crossorigin="anonymous"></script>

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="/plugin/build/css/simple-iconpicker.min.css" rel="stylesheet">
    <script src="/plugin/build/js/simple-iconpicker.min.js"></script>

    <script src="/js/jscolor.js"></script>
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="/">
                            <img class="img-fluid" width="150" src="/assets/imgs/logo-be.jpg" alt="Logo RepetBox" />
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
                                            <i class="feather icon-x input-group-text"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
                                            <i class="feather icon-search input-group-text"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-4ae1809b5ff4f05c7560522f-="">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-bell"></i>
                                        <span class="badge bg-c-red">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">Nouveau</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="/admin_dashboard/files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="/admin_dashboard/files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="/admin_dashboard/files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="/storage/images/users/{{Auth::user()->image}}" class="img-radius" alt="User-Profile-Image">
                                        <span>{{Auth::user()->name}}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="{{route('users.edit', Auth::user())}}">
                                                <i class="icon-settings"></i> Paramètres
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/home">
                                                <i class="icon-user"></i> Profil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/chat">
                                                <i class="feather icon-mail"></i> Mes messages
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                <i class="feather icon-log-out"></i>
                                                Déconnexion
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-search-box">
                                <a class="back_friendlist">
                                    <i class="feather icon-x"></i>
                                </a>
                                <div class="right-icon-control">
                                    <div class="input-group input-group-button">
                                        <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="/admin_dashboard/files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="/admin_dashboard/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="/admin_dashboard/files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="/admin_dashboard/files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="/admin_dashboard/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-default"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-x"></i> Josephin Doe
                    </a>
                </div>
                <div class="main-friend-chat">
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="/admin_dashboard/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="/admin_dashboard/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">can you come with me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="chat-reply-box">
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" class="form-control" placeholder="Write hear . . ">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu active pcoded-trigger">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="/admin" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Accueil</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="icon-diamond"></i></span>
                                            <span class="pcoded-mtext">Utilisateurs</span>
                                        </a>
                                        <ul class="pcoded-submenu">

                                            <li class="">
                                                <a href="{{url('users')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Liste des utilisateurs</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>



                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="icon-diamond"></i></span>
                                            <span class="pcoded-mtext">Catégories</span>
                                        </a>
                                        <ul class="pcoded-submenu">

                                            <li class="">
                                                <a href="/categories" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Liste des catégories</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="{{route('categories.create')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Ajouter une catégorie</span>
                                                </a>
                                            </li>


                                        </ul>
                                    </li>

                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="icon-diamond"></i></span>
                                            <span class="pcoded-mtext">Annonces</span>
                                        </a>
                                        <ul class="pcoded-submenu">

                                            <li class="">
                                                <a href="/admin/annonces" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Liste des annonces</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="icon-diamond"></i></span>
                                            <span class="pcoded-mtext">Offres de prix</span>
                                        </a>
                                        <ul class="pcoded-submenu">

                                            <li class="">
                                                <a href="/pricings" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Liste des offres</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/pricings/create" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Ajout d'une offre</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/characteristics" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Liste des caractéristiques</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="/characteristics/create" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Ajout d'une caractéristique</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>



                                </ul>

                            </div>
                        </div>
                    </nav>

                    <div class="pcoded-content">

                        <div class="page-header card">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success background-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <strong>{!! $message !!}</strong>
                            </div>
                            <?php Session::forget('success');?>
                            @endif
                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger background-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <strong>{!! $message !!}</strong>
                            </div>
                            <?php Session::forget('error');?>
                            @endif
                            @if(session('status'))
                            <div class="alert alert-success background-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <strong>{{session('status')}}</strong>
                            </div>
                            @endif
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>@yield('page_title')</h5>
                                            <!--
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="/admin"><i class="icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">@yield('link_title')</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @yield('content')

                    </div>
                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="/admin_dashboard/files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="/admin_dashboard/files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="/admin_dashboard/files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="/admin_dashboard/files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="/admin_dashboard/files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="/js/quill/image-resize.min.js"></script>
    <script src="/js/quill/video-resize.min.js"></script>



    <script type="4ae1809b5ff4f05c7560522f-text/javascript" src="/admin_dashboard/files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="4ae1809b5ff4f05c7560522f-text/javascript" src="/admin_dashboard/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="4ae1809b5ff4f05c7560522f-text/javascript" src="/admin_dashboard/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="4ae1809b5ff4f05c7560522f-text/javascript" src="/admin_dashboard/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script src="/admin_dashboard/files/assets/pages/waves/js/waves.min.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>

    <script type="4ae1809b5ff4f05c7560522f-text/javascript" src="/admin_dashboard/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script type="4ae1809b5ff4f05c7560522f-text/javascript" src="/admin_dashboard/files/bower_components/modernizr/js/modernizr.js"></script>

    <script type="4ae1809b5ff4f05c7560522f-text/javascript" src="/admin_dashboard/files/bower_components/select2/js/select2.full.min.js"></script>

    <script type="4ae1809b5ff4f05c7560522f-text/javascript" src="/admin_dashboard/files/assets/pages/advance-elements/select2-custom.js"></script>



    <script src="/admin_dashboard/files/assets/pages/chart/float/jquery.flot.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script src="/admin_dashboard/files/assets/pages/chart/float/jquery.flot.categories.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script src="/admin_dashboard/files/assets/pages/chart/float/curvedLines.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script src="/admin_dashboard/files/assets/pages/chart/float/jquery.flot.tooltip.min.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>

    <script src="/admin_dashboard/files/assets/pages/widget/amchart/amcharts.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script src="/admin_dashboard/files/assets/pages/widget/amchart/gauge.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script src="/admin_dashboard/files/assets/pages/widget/amchart/serial.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script src="/admin_dashboard/files/assets/pages/widget/amchart/light.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script src="/admin_dashboard/files/assets/pages/widget/amchart/pie.min.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script src="/admin_dashboard/files/assets/pages/widget/amchart/ammap.min.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script src="/admin_dashboard/files/assets/pages/widget/amchart/usaLow.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>

    <script src="/admin_dashboard/files/bower_components/chartist/js/chartist.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>

    <script src="/admin_dashboard/files/assets/js/pcoded.min.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script src="/admin_dashboard/files/assets/js/vertical/vertical-layout.min.js" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script type="4ae1809b5ff4f05c7560522f-text/javascript" src="/admin_dashboard/files/assets/pages/dashboard/analytic-dashboard.min.js"></script>
    <script type="4ae1809b5ff4f05c7560522f-text/javascript" src="/admin_dashboard/files/assets/js/script.min.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="4ae1809b5ff4f05c7560522f-text/javascript"></script>
    <script type="4ae1809b5ff4f05c7560522f-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="4ae1809b5ff4f05c7560522f-|49" defer=""></script>


</body>

</html>
