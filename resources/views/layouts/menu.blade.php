<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title') | Business Ensemble</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{!! csrf_token() !!}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/notifs/amaran/amaran.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

	    <link href="/plugin/build/css/simple-iconpicker.min.css" rel="stylesheet">
	    <script src="/plugin/build/js/simple-iconpicker.min.js"></script>
        <!-- ==============================================
		Favicons
		=============================================== -->
	    <link rel="shortcut icon" href="/assets/imgs/logo-be.jpg">
	    <link rel="apple-touch-icon" href="/assets/imgs/logo-be.jpg">
	    <link rel="apple-touch-icon" sizes="72x72" href="/assets/imgs/logo-be.jpg">
	    <link rel="apple-touch-icon" sizes="114x114" href="/assets/imgs/logo-be.jpg">



          <!--highlight js-->

          <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>

          <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/atom-one-dark.min.css">
        <!--fin highlight js-->

        <script src="https://kit.fontawesome.com/94491a0993.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <!--Plugin form cdn jquery tel selector-->
      <link rel="stylesheet" href="/plugin/build/css/intlTelInput.css">
      <link rel="stylesheet" href="/plugin/build/css/demo.css">
        <!--End Plugin form cdn jquery-->

        <!--Plugin form cdn jquery contry selector-->
        <link rel="stylesheet" href="/plugin/build/css/countrySelect.css">
        <link rel="stylesheet" href="/plugin/build/css/demo1.css">

      <!--End Plugin form cdn jquery-->

        <!--style header-->
        <style media="screen">
        	.input{
			  padding: 15px 0;
			}

        .modal .modal-dialog, .wpneo-modal-content {
            max-width: 650px;
        }

        #phone_3{padding-left:95px !important;}
            /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/wp-crowdfunding/assets/css/crowdfunding-front.css?ver=2.0.2 ; media=all */
        	body{
        		color: #787878!important;
        		font-family: 'Montserrat', sans-serif;
        	}
        	h1, h2, h3, h4, h5, h6 {
        		color: #1B6DC1 !important;
        	}
			@media all{
			.float-left{float:left;}
			.float-right{float:right;}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/wpcftemplate/woocommerce/basic/style.css?ver=2.0.2 ; media=all */
			@media all{
			.float-left{float:left;}
			.float-right{float:right;}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/bootstrap.min.css?ver=all ; media=all */
			@media all{
			@media print{
			*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
			a,a:visited{text-decoration:underline;}
			img{page-break-inside:avoid;}
			}
			*,::after,::before{box-sizing:border-box;}
			header{display:block;}
			ul{margin-top:0;margin-bottom:1rem;}
			ul ul{margin-bottom:0;}
			a{color:#1B6DC1;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
			a:hover{color:#0056b3;text-decoration:underline;}
			img{vertical-align:middle;border-style:none;}
			a,button,input:not([type=range]),label{-ms-touch-action:manipulation;touch-action:manipulation;}
			label{display:inline-block;margin-bottom:.5rem;}
			button{border-radius:0;}
			button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
			button,input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
			button,input{overflow:visible;}
			button{text-transform:none;}
			[type=submit],button,html [type=button]{-webkit-appearance:button;}
			[type=button]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
			.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
			@media (min-width:576px){
			.container{max-width:540px;}
			}
			@media (min-width:768px){
			.container{max-width:720px;}
			}
			@media (min-width:992px){
			.container{max-width:960px;}
			}
			@media (min-width:1200px){
			.container{max-width:1140px;}
			}
			.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
			.col-12,.col-4,.col-5,.col-7,.col-8,.col-lg,.col-lg-5,.col-lg-auto,.col-md-6,.col-sm-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
			.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
			.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%;}
			.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%;}
			.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
			.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
			@media (min-width:576px){
			.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
			}
			@media (min-width:768px){
			.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
			}
			@media (min-width:992px){
			.col-lg{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%;}
			.col-lg-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none;}
			.col-lg-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%;}
			.order-lg-1{-ms-flex-order:1;order:1;}
			.order-lg-3{-ms-flex-order:3;order:3;}
			}
			/*.collapse{display:none;}*/
			.nav{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none;}
			.navbar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none;}
			.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;flex-grow:1;-ms-flex-align:center;align-items:center;}
			.clearfix::after{display:block;clear:both;content:"";}
			.d-none{display:none!important;}
			.d-block{display:block!important;}
			.d-flex{display:-ms-flexbox!important;display:flex!important;}
			@media (min-width:992px){
			.d-lg-none{display:none!important;}
			.d-lg-block{display:block!important;}
			}
			.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important;}
			.justify-content-center{-ms-flex-pack:center!important;justify-content:center!important;}
			.align-items-center{-ms-flex-align:center!important;align-items:center!important;}
			.float-left{float:left!important;}
			.float-right{float:right!important;}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0 ; media=all */
			@media all{
			.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
			.fa-search:before{content:"\f002";}
			.fa-navicon:before{content:"\f0c9";}
			.fa-angle-right:before{content:"\f105";}
			.fa-angle-down:before{content:"\f107";}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/backnow-font-style.css?ver=all ; media=all */
			@media all{
			[class^="back-"]{font-family:'backnow'!important;speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
			.back-layout:before{content:"\e929";}
			.back-magnifying-glass-2:before{content:"\e92b";}
			.back-profile:before{content:"\e93e";}
			.back-photo-camera2:before{content:"\e988";}
			.back-video-camera2:before{content:"\e989";}
			.back-robot-head:before{content:"\e98a";}
			.back-scissors:before{content:"\e98b";}
			.back-music-note-black-symbol:before{content:"\e98c";}
			.back-random-line:before{content:"\e98d";}
			.back-gamepad2:before{content:"\e98e";}
			.back-fast-food:before{content:"\e98f";}
			.back-hand-mic:before{content:"\e990";}
			.back-polo-shirt:before{content:"\e991";}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/magnific-popup.css?ver=all ; media=all */
			@media all{
			button::-moz-focus-inner{padding:0;border:0;}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/main.css?ver=all ; media=all */
			@media all{
			input[type=submit]{color:#fff;cursor:pointer;}
			input[type=submit]:hover{background:#fff;}
			.backnow-login-register a.backnow-dashboard{padding:5px 10px;border-radius:4px;color:#fff;transition:400ms;-webkit-transition:400ms;}
			input:focus,button:focus{outline-offset:0;outline:0;-webkit-box-shadow:none;box-shadow:none;}
			.thm-explore{position:relative;padding-right:10px;}
			.thm-explore::after{content:'';position:absolute;height:16px;width:1px;background:#DCDCDC;right:-10px;top:50%;margin-top:-8px;}
			.thm-explore ul{position:absolute;list-style:none;background:#fff;top:65px;left:0;z-index:9;min-width:210px;padding:15px 0;border-radius:2px;overflow:hidden;-webkit-transition:all .4s ease .2s;transition:all .4s ease .2s;opacity:0;visibility:hidden;-webkit-box-shadow:0 3px 5px 0 rgba(0, 0, 0, 0.08);box-shadow:0 3px 5px 0 rgba(0, 0, 0, 0.08);}
			.thm-explore:hover ul{opacity:1;visibility:visible;-webkit-transition-delay:0s;transition-delay:0s;}
			.thm-explore ul li a{color:#888;padding:5px 20px;display:block;line-height:26px;-webkit-transition:.4s;transition:.4s;}
			.thm-explore ul li a i{margin-right:10px;font-size:17px;line-height:26px;}
			.thm-explore>a{padding:12px 0;line-height:30px;}
			.thm-explore>a i:first-child{margin-right:5px;}
			.thm-explore>a i:last-child{margin-left:5px;}
			.site-header{background:#fff;padding:20px 0;border-bottom:1px solid #EBEBF1;}
			.common-menu-wrap{position:inherit;text-align:right;}
			.common-menu-wrap .nav>li{display:inline-block;position:relative;padding:0;margin-left:28px;}
			.thm-explore>a,.common-menu-wrap .nav>li>a{display:inline-block;line-height:30px;padding:0;font-size:14px;font-weight:300;color:#676767;position:relative;padding:12px 0;transition:400ms;-webkit-transition:400ms;}
			.logo-wrapper{padding:0;}
    .logo-wrapper a{display:inline-block;/*padding:14px 0;*/}
			.common-menu-wrap .nav>li>a:hover,.common-menu-wrap .nav>li>a:focus{background-color:transparent;}
			.common-menu-wrap .nav>li.menu-item-has-children{position:relative;z-index:100;}
			.common-menu-wrap .nav>li.menu-item-has-children>a{position:relative;}
			/*.common-menu-wrap .nav>li.menu-item-has-children>a:after{content:" \e916";font-family:'backnow'!important;margin-left:0;color:#191919;font-size:9px;position:relative;top:-1px;}*/
			.header-solid .common-menu-wrap .nav>li.menu-item-has-children:after{color:#000;}
			.common-menu-wrap .nav>li>ul{padding:0px 0 0;}
			.common-menu-wrap .nav>li ul{text-align:left;position:absolute;display:none;left:0;list-style:none;margin:0;width:220px;z-index:999999;color:#fff;top:100%;-webkit-box-shadow:0 3px 5px 0 rgba(0, 0, 0, 0.08);box-shadow:0 3px 5px 0 rgba(0, 0, 0, 0.08);border-radius:0 0 3px 3px;-webkit-transition:400ms;transition:400ms;margin-top:10px;-webkit-transition:all .4s ease .2s;transition:all .4s ease .2s;}
			.common-menu-wrap .nav>li ul::after{position:absolute;bottom:100%;left:0;height:10px;width:100%;content:'';background-color:transparent;}
			.common-menu-wrap .nav>li:hover>ul{padding:10px 0;display:block;-webkit-transition:.4s;transition:.4s;}
			.common-menu-wrap .nav>li ul{background-color:#fff;}
			.common-menu-wrap .nav>li>ul li a{display:block;line-height:normal;padding:2px 20px;font-size:14px;color:#000;transition:400ms;-webkit-transition:400ms;}
			.common-menu-wrap .nav>li>ul li:last-child a{border-bottom-width:0;border-radius:0 0 3px 3px;}
			.common-menu-wrap .nav>li>ul li a:hover{text-decoration:none;color:#fff;}
			.common-menu-wrap .nav>li>ul{transition:300ms;-webkit-transition:300ms;}
			.common-menu-wrap .nav>li>ul li{transition:300ms;-webkit-transition:300ms;}
			.common-menu-wrap .nav>li>ul li{position:relative;transiton:300ms;-webkit-transiton:300ms;-moz-transiton:300ms;}
			#mobile-menu{position:absolute;top:70px;width:100%;z-index:9;right:0;z-index:999;background:#eeeeee;min-width:220px;}
			.header-solid #mobile-menu{top:100%;}
			.navbar-toggle{border:none;margin:0;z-index:3;font-size:30px;text-align:right;background:transparent;padding-right:0;line-height:26px;padding:12px 5px;font-weight:300;color:#676767;}
			#mobile-menu .navbar-collapse{border:0;}
			#mobile-menu .navbar-nav{margin-top:10px;margin-bottom:10px;}
			#mobile-menu ul{list-style:none;}
			#mobile-menu ul li{margin-bottom:1px;}
			#mobile-menu ul li a{padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px;color:#676767;display:block;font-weight:300;}
			#mobile-menu ul li.active>a,#mobile-menu ul li a:hover{background:none;}
			#mobile-menu ul ul{padding-left:10px;padding-top:0;padding-bottom:0;}
			#mobile-menu ul li span.menu-toggler{display:inline-block;width:34px;cursor:pointer;color:#000;height:34px;line-height:34px;text-align:center;position:absolute;right:0;top:0;z-index:99;}
			#mobile-menu ul li:hover .menu-toggler{color:#222;}
			#mobile-menu ul li{line-height:20px;display:block;position:relative;}
			#mobile-menu ul li span.menu-toggler i{display:block;line-height:44px;}
			#mobile-menu ul li span.menu-toggler i.fa-angle-right:before{content:"\f107";}
			#mobile-menu ul li span.menu-toggler.collapsed i.fa-angle-right:before{content:"\f105";}
			#mobile-menu ul li span.menu-toggler.collapsed .fa-angle-right{display:block;}
			.backnow-search-wrap{display:inline-block;}
			.thm-fullscreen-search{position:fixed;height:100%;width:100%;top:0;left:0;z-index:9999;visibility:hidden;opacity:0;-webkit-transition:.4s;-o-transition:.4s;transition:.4s;}
			.thm-fullscreen-search .search-overlay{background-color:#000;position:absolute;height:100%;width:100%;left:0;top:0;z-index:-1;opacity:.85;cursor:url(https://image.ibb.co/dquw2G/close_1.png), auto;}
			.thm-fullscreen-search form{position:relative;width:50%;}
			.thm-fullscreen-search form input[type="text"]{width:100%;border:none;border-bottom:1px solid #fff;height:55px;background-color:transparent;font-size:25px;color:#fff;font-weight:300;}
			.thm-fullscreen-search form input[type="text"]::-webkit-input-placeholder{color:#fff;}
			.thm-fullscreen-search form input[type="text"]::-moz-placeholder{color:#fff;}
			.thm-fullscreen-search form input[type="text"]:-ms-input-placeholder{color:#fff;}
			.thm-fullscreen-search form input[type="text"]:-moz-placeholder{color:#fff;}
			.thm-fullscreen-search label{position:absolute;right:0;top:0;line-height:55px;font-size:18px;color:#fff;text-transform:uppercase;}
			.themeum-navbar-header{display:inline-block;}
			.backnow-login-register{position:relative;float:right;padding:10px 0;}
			.backnow-login-register ul{list-style:none;padding:0;margin:0 0 0 10px;position:relative;display:flex;position:relative;}
			.backnow-login-register ul::before{content:'';position:absolute;left:0;top:50%;background:#DCDCDC;width:1px;height:15px;margin-top:-7.5px;}
			.backnow-login-register ul li{display:inline-block;position:relative;padding:0;margin-left:15px;}
			.backnow-login-register ul li a{display:block;position:relative;font-size:14px;font-weight:300;color:#676767;}
			.backnow-login-register ul li a i{margin-right:5px;color:#B2B2B2;}
			.backnow-login-register a.backnow-dashboard{text-transform:uppercase;}
			img{max-width:100%;height:auto;}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/woocommerce.css?ver=all ; media=all */
			@media all{
			input[type="text"]{font-size:16px;}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/responsive.css?ver=all ; media=all */
			@media all{
			@media (min-width: 980px) and (max-width: 1400px){
			.common-menu-wrap .nav>li{margin-left:15px;}
			}
			@media (min-width: 768px) and (max-width: 1000px){

			.navbar-collapse{padding-right:0;padding-left:0;}
			#mobile-menu ul{padding:0;}
			.header-solid #mobile-menu{top:100%;}
			.navbar-toggle{display:inline-block;}
			}
			@media only screen and (max-width: 992px){
			.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none;}
			.navbar-toggle{display:inline-block;margin-top:0;outline:none;right:0;font-size:15px;padding-left:15px;}
			.navbar-nav{float:none;}
			.navbar-nav>li{float:none;}
			}
			@media (max-width: 767px){
			.thm-fullscreen-search form{width:70%;}
			.thm-explore::after{display:none;}
			.col-8 .backnow-login-register ul::before{content:none;}
			.backnow-login-register a.backnow-dashboard{font-size:11px;}
			#mobile-menu ul{padding:0;}
			.header-solid #mobile-menu{top:100%;}
			}
			@media (min-width: 768px){
			.navbar-nav{float:none;margin:0;}
			.navbar-nav>li{float:none;}
			}
			@media (max-width: 489px){
			.thm-fullscreen-search form{width:85%;}
			.thm-fullscreen-search form input[type="text"]{font-size:20px;}
			}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/style.css?ver=4.9.15 ; media=all */
			@media all{
			a{text-decoration:none!important;}
			a:focus{outline:0;outline-offset:0;}
			ul li{padding:5px 0;}
			}
			/*! CSS Used from: Embedded */
			a,#mobile-menu ul li.active>a,#mobile-menu ul li a:hover,input[type=submit]:hover,.thm-explore ul li a:hover{color:#33d3c0;}
			input:focus{border-color:#33d3c0;}
			.backnow-login-register a.backnow-dashboard:hover{background:#519eec;}
			a:hover{color:#00bf9c;}
			.common-menu-wrap .nav>li>a,.thm-explore ul li a,.thm-explore a,.common-menu-wrap .nav> li > ul li a{font-size:14px;font-family:Montserrat;font-weight:300;line-height:30px;color:#676767;}
			.site-header{background:#fff;}
			.site-header{padding-top:10px;}
			.site-header{padding-bottom:10px;}
			.themeum-navbar-header .themeum-navbar-brand img{width:130px;max-width:none;}
			input[type=submit]{background-color:#1B6DC1;border-color:#1B6DC1;color:#fff!important;}
			.backnow-login-register a.backnow-dashboard{background-color:#1B6DC1;}
			input[type=submit]:hover{background-color:#1B6DC1;border-color:#1B6DC1;color:#fff!important;}
			.header-solid .common-menu-wrap .nav>li.menu-item-has-children:after,.header-solid .common-menu-wrap .nav>li>a,.header-solid .common-menu-wrap .nav>li>a:after,.backnow-search{color:#676767;}
			.header-solid .common-menu-wrap .nav>li>a:hover,.header-solid .common-menu-wrap .nav>li>a:hover:after,.backnow-search-wrap a.backnow-search:hover{color:#33d3c0;}
			.header-solid .common-menu-wrap .nav>li.active>a{color:#33d3c0;}
			.common-menu-wrap .nav>li ul{background-color:#fff;}
			.common-menu-wrap .nav>li>ul li a{color:#676767;border-color:#eef0f2;}
			.common-menu-wrap .nav>li>ul li a:hover,.common-menu-wrap .sub-menu li.active a,.common-menu-wrap .nav>li.current-menu-parent.menu-item-has-children > a:after{color:#33d3c0;}
			.common-menu-wrap .nav>li > ul::after{border-color:transparent transparent #262626 transparent;}
			/*! CSS Used from: Embedded */
			ul.thm-iconic-category li{padding:0;}

			        </style>



              <!--style div footer-->
                  <style media="screen">
                  /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/bootstrap.min.css?ver=all ; media=all */
          @media all{
          @media print{
          *,::after,::before{text-shadow:none!important;box-shadow:none!important;}
          a,a:visited{text-decoration:underline;}
          img{page-break-inside:avoid;}
          h3,p{orphans:3;widows:3;}
          h3{page-break-after:avoid;}
          }
          *,::after,::before{box-sizing:border-box;}
          [tabindex="-1"]:focus{outline:0!important;}
          h3,h4{margin-top:0;margin-bottom:.5rem;}
          p{margin-top:0;margin-bottom:1rem;}
          ul{margin-top:0;margin-bottom:1rem;}
          a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
          a:hover{color:#0056b3;text-decoration:underline;}
          img{vertical-align:middle;border-style:none;}
          a,button,input:not([type=range]),label{-ms-touch-action:manipulation;touch-action:manipulation;}
          label{display:inline-block;margin-bottom:.5rem;}
          button{border-radius:0;}
          button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
          button,input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
          button,input{overflow:visible;}
          button{text-transform:none;}
          [type=submit],button{-webkit-appearance:button;}
          [type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
          h3,h4{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
          h3{font-size:1.75rem;}
          h4{font-size:1.5rem;}
          .container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
          @media (min-width:576px){
          .container{max-width:540px;}
          }
          @media (min-width:768px){
          .container{max-width:720px;}
          }
          @media (min-width:992px){
          .container{max-width:960px;}
          }
          @media (min-width:1200px){
          .container{max-width:1140px;}
          }
          .row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
          .col-lg-3,.col-lg-4,.col-lg-8,.col-sm-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
          @media (min-width:576px){
          .col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
          }
          @media (min-width:992px){
          .col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;}
          .col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
          .col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
          }
          .clearfix::after{display:block;clear:both;content:"";}
          }
          /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0 ; media=all */
          @media all{
          .fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
          .fa-long-arrow-right:before{content:"\f178";}
          }
          /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/magnific-popup.css?ver=all ; media=all */
          @media all{
          button::-moz-focus-inner{padding:0;border:0;}
          }
          /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/main.css?ver=all ; media=all */
          @media all{
          input:focus,button:focus{outline-offset:0;outline:0;-webkit-box-shadow:none;box-shadow:none;}
          .widget{word-break:break-word;}
          .widget ul>li:last-child{border-bottom:none;}
          .widget_nav_menu ul{padding:0px;}
          .widget_nav_menu ul li{list-style:none;}
          .widget ul li:last-child a{padding-bottom:0;}
          .widget ul li a{color:#38434a;}
          .bottom .widget{color:#dedede;}
          .bottom .widget ul li a{color:#dedede;line-height:32px;transition:400ms;-webkit-transition:400ms;font-size:14px;font-weight:300;}
          .bottom{border-top:1px solid rgb(67, 67, 77);border-bottom:1px solid rgb(67, 67, 77);}
          .mailchimp-inner{border-left:1px solid rgb(67, 67, 77);text-align:center;padding:0 40px;}
          .bottom-widget{padding-top:15px;}
          .bottom-widget .widget h3.widget-title{font-size:18px;font-weight:300;margin-bottom:20px;color:#fff;margin-top:0;}
          .mc4wp-form-fields input[type="email"]{background:#323238;border:none;border-radius:3px;font-size:14px;padding:12px;color:#ccc;font-weight:300;height:46px;width:240px;display:inline-block;float:left;}
          .mchimp-newsletter h4{color:#fff!important;font-weight:300;}
          .mc4wp-form-fields input[type="email"]:focus{outline-offset:0px;outline:-webkit-focus-ring-color auto 0px;}
          .mc4wp-form-fields button:hover{background:#25b7a6;}
          .mc4wp-form-fields button{color:#fff;border-radius:0;border:none;padding:11px 16px;margin-left:-15px;border-radius:0 3px 3px 0;background:#34d3c0;-webkit-transition:.3s;transition:.3s;}
          img{max-width:100%;height:auto;}
          }
          /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/woocommerce.css?ver=all ; media=all */
          @media all{
          input[type="text"],input[type="email"]{font-size:16px;}
          }
          /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/custom.css?ver=all ; media=all */
          @media all{
          .mailchil-container{margin-top:25px;}
          .mchimp-newsletter p{font-size:14px;color:#dedede;font-weight:300;line-height:18px;}
          }
          /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/responsive.css?ver=all ; media=all */
          @media all{
          @media only screen and (max-width: 992px){
          .mailchimp-inner{border-color:transparent;}
          .mchimp-newsletter{position:relative;z-index:3;}
          .mc4wp-form-fields button{position:absolute;bottom:0;right:0;}
          .mc4wp-form-fields input[type="email"]{display:block;width:100%;float:none;}
          }
          @media (max-width: 767px){
          .mailchimp-inner{margin-bottom:15px;}
          .bottom-wrap{padding-bottom:0!important;;         padding-top:30px!important;}
          .bottom-widget h3{margin-bottom:25px;}
          .bottom-widget{width:100%;}
          .mc4wp-form-fields input[type="email"]{display:block;width:100%;float:none;}
          .bottom-widget{width:100%;}
          }
          }
          /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/style.css?ver=4.9.15 ; media=all */
          @media all{
          a{text-decoration:none!important;}
          a:focus{outline:0;outline-offset:0;}
          ul li{padding:5px 0;}
          }
          /*! CSS Used from: Embedded */
          a,.bottom-widget .widget ul li a:hover,.widget ul li a:hover{color:#33d3c0;}
          input:focus{border-color:#33d3c0;}
          a:hover{color:#00bf9c;}
          h3{font-size:26px;font-family:Montserrat;font-weight:400;line-height:28px;color:#414040;}
          h4{font-size:18px;font-family:Montserrat;font-weight:600;line-height:26px;color:#414040;}
          .bottom{background-color:#26262b;}
          .bottom .widget ul li a{color:#6e6e6e;}
          .bottom-wrap{padding-top:58px;}
          .bottom-wrap{padding-bottom:58px;}

                  </style>







			        <!--style footer-->
			        <style media="screen">
			        /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/wp-crowdfunding/assets/css/crowdfunding-front.css?ver=2.0.2 ; media=all */
			@media all{
			.text-right{text-align:right;}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/bootstrap.min.css?ver=all ; media=all */
			@media all{
			@media print{
			*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
			a,a:visited{text-decoration:underline;}
			img{page-break-inside:avoid;}
			}
			*,::after,::before{box-sizing:border-box;}
			footer{display:block;}
			ul{margin-top:0;margin-bottom:1rem;}
			a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
			a:hover{color:#0056b3;text-decoration:underline;}
			img{vertical-align:middle;border-style:none;}
			a{-ms-touch-action:manipulation;touch-action:manipulation;}
			.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
			@media (min-width:576px){
			.container{max-width:540px;}
			}
			@media (min-width:768px){
			.container{max-width:720px;}
			}
			@media (min-width:992px){
			.container{max-width:960px;}
			}
			@media (min-width:1200px){
			.container{max-width:1140px;}
			}
			.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
			.col-md-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
			@media (min-width:768px){
			.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
			}
			.text-left{text-align:left!important;}
			.text-right{text-align:right!important;}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0 ; media=all */
			@media all{
			.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
			.fa-twitter:before{content:"\f099";}
			.fa-facebook:before{content:"\f09a";}
			.fa-google-plus:before{content:"\f0d5";}
			.fa-linkedin:before{content:"\f0e1";}
			.fa-dribbble:before{content:"\f17d";}
			.fa-behance:before{content:"\f1b4";}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/main.css?ver=all ; media=all */
			@media all{
			.social-share,.copy-wrapper{padding-top:2px;text-align:center;}
			.social-share ul{margin:0;padding:0;}
			.footer-copyright{color:#dedede;}
			.footer-copyright span{color:#dedede;}
			img{max-width:100%;height:auto;}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/custom.css?ver=all ; media=all */
			@media all{
			.social-share ul li{display:inline-block;text-align:right;padding:0 0 0px 15px;}
			.copy-wrapper .social-share{text-align:right;}
			.footer-copyright img.enter-logo{margin-right:10px;margin-top:-8px;}
			.footer-copyright span{font-size:14px;font-weight:300;}
			.footer-copyright{margin-top:0;}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/responsive.css?ver=all ; media=all */
			@media all{
			@media (max-width: 489px){
			.social-share,.copy-wrapper{margin-bottom:15px;text-align:center;}
			.social-share,.copy-wrapper{padding-top:8px;text-align:center!important;}
			.copy-wrapper span{display:block;margin-top:5px;}
			}
			}
			/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/style.css?ver=4.9.15 ; media=all */
			@media all{
			a{text-decoration:none!important;}
			a:focus{outline:0;outline-offset:0;}
			ul li{padding:5px 0;}
			}
			/*! CSS Used from: Embedded */
			a{color:#33d3c0;}
			a:hover,.footer-copyright a:hover{color:#00bf9c;}
			#footer{background-color:#26262b;}
			#footer{padding-top:30px;}
			#footer{padding-bottom:30px;}
			.footer-copyright,.footer-copyright a{color:#6e6e6e;}

			.menu, .menu1, menu2{
				display: block;
			}

			.title-annonce {

			    text-align: center !important;
			    text-transform: uppercase !important;
			    padding: 54px 30px 0 30px !important;
			    width: 100% !important;
			}

			.body-annonce {

			    padding: 3rem!important;
			}

			.dropdown-item{
				margin: 15px 0;
			}

			.btn-info{
				background-color: #1B6DC1!important;
				color: #fff;
			}

			.dropdown-menu{
				border: 1px solid rgba(0, 0, 0, 0)!important;
			}

			@media only screen and (max-width: 600px) {

			  	.query{
			  		padding: 32px 0px !important;
			  	}
			  	.body-annonce {
				    padding: 1.5rem!important;
				}
				.title-annonce {

				   padding: 0px !important;

				}
				#col-6{
					max-width: 40%;
				}
				#col-5{
					margin: 0 auto;
					flex: 0 0 50.666667%;
    				max-width: 50.666667%;
				}

				#col-7{
					flex: 0 0 100%;
				    max-width: 100%;
				    padding: 0 44px!important;
				    text-align: center;
				}
			}
      .populated:hover {
          box-shadow: 0 4px 2px 0 rgba(0, 0, 0, 0.2), 0px 0px 8px 0 rgba(0, 0, 0, 0.19);
          border-radius: 5px;
        }
      .btn {
          display: inline-block;
          font-weight: normal;
          line-height: 1.25;
          text-align: center;
          white-space: nowrap;
          vertical-align: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
          border: 1px solid transparent;
          padding: 0.5rem 1rem;
          font-size: 1rem;
          border-radius: 0.25rem;
          -webkit-transition: all 0.2s ease-in-out;
          -o-transition: all 0.2s ease-in-out;
          transition: all 0.2s ease-in-out;
      }
        </style>
    </head>
    <body class="home page-template page-template-homepage page-template-homepage-php page page-id-33 logged-in woocommerce-js fullwidth-bg elementor-default elementor-page elementor-page-33">
        <header id="masthead" class="site-header header header-solid">


            <div class="site-header-wrap container">
                <div class="row">
                    <div class=" clearfix col-6" id="col-6">
                        <div class="thm-explore float-left">
                            <a href="#">
                              <i class="fas fa-sliders-h"></i>
                              Explorer
                              <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="thm-iconic-category">
                                @foreach($categories as $category)
                                @if(count($category->annonces->where('status', 1)) > 0)
                                <li data-color="#33d3c0">
                                    <a href="{{url('categories', $category)}}">
                                        <i class="fas {{$category->icon}}"></i>
                                        <span>{{$category->name}}</span>
                                    </a>
                                </li>
                                @endif
                                @endforeach





                            </ul>

                        </div>
                        <div id="main-menu" class="common-menu-wrap float-left d-none d-lg-block">
                            <ul id="menu-main-menu" class="nav">
                                <li class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children active has-menu-child"><a
                                      href="/">Accueil</a>

                                </li>
                                <li class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has-menu-child">
                                    <a href="#">Investisseur</a>
                                  <i class="fas fa-angle-down"></i>
                                    <ul role="menu" class="sub-menu">
                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page has-menu-child"><a href="#">Investir</a></li>

                                    </ul>
                                </li>
                                <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-menu-child">
                                <a href="#">Porteur de projet</a>
                                  <i class="fas fa-angle-down"></i>
                                    <ul role="menu" class="sub-menu">
                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page has-menu-child"><a href="#">Lever des fonds</a></li>
                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page has-menu-child"><a href="/searchUsers">Trouver un associé</a></li>
                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page has-menu-child"><a href="/whichCategories">Créer une annonce</a></li>
                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page has-menu-child"><a href="/membership">Tarifs</a></li>
                                        <!--
                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page has-menu-child">
                                        	<a data-toggle="modal" data-target="#myModal_2" href="#" >Créer une annonce</a>
                                        </li>

                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page has-menu-child"><a href="https://demo.themeum.com/wordpress/backnow/discover-style-2/">Outil de recherche</a></li>
                                    -->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/#main-menu-->
                    </div>
                    <!--/.col-md-5-->

                    <div class="d-block d-lg-none col-7">
                        <div class="backnow-login-register">
                            <ul>
                            	@auth
                                @if(Auth::user()->isEntrepreneur() || Auth::user()->isAdmin())
                                <!-- Start Campaign Section -->
                                <li>
                                  <a class="backnow-login backnow-dashboard" data-toggle="modal" data-target="#myModal_2" href="/whichCategories" >
                                    Créer une annonce
                                  </a>
                                </li>
                                @endif
                                @endauth
                                <!-- End Campaign -->
                            </ul>

                        </div>

                    </div>

                    <!--/.col-md-7-->


                    <div class=" col-md-3 col-5 col-sm-3 order-lg-2 col-lg-auto" id="col-5" style="">
                        <div class="themeum-navbar-header">
                            <div class="logo-wrapper">
                                <a class="themeum-navbar-brand" href="/">
                                    <img class="enter-logo img-responsive" src="/assets/imgs/logo-be.jpg" alt="Logo" title="Logo">
                                </a>
                            </div>
                        </div>
                        <!--/#themeum-navbar-header-->
                    </div>
                    <!--/.col-md-7-->


                    <div class="col-7 col-sm-6 d-lg-none" id="col-7">

                        <button type="button" class="navbar-toggle float-right" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fas fa-bars"></i>
                            Menu </button>


                        <div class="backnow-login-register float-right">
                            <!--div class="backnow-search-wrap">
                                <a href="#" class="backnow-search search-open-icon"><i class="fas fa-search"></i></a>
                            </div-->

                            <ul>
                                <!-- Login Section -->
                                @guest
                                <!-- Login Section -->
                                	<li><a href="{{route('login')}}"> <i class="fas fa-user-alt"></i>Connexion/Inscription</a></li>
                                <!-- End Login section -->
                                @endguest
                                @auth
                                	<li class = "dropdown">

                                		<!--a href="/home"> <i class="fas fa-user-alt"></i>Tableau de bord</a-->
                                		<p class = "dropdown-toggle" id = "dropdownMenuButton" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false"><i class="fas fa-user-alt"></i> Tableau de bord</p>

                                		<div class = "dropdown-menu" aria-labelledby = "dropdownMenuButton">
						                  <a class = "dropdown-item" href = "/home">Mon compte</a>
                                          <a class = "dropdown-item" href = "/messages">Messages</a>
						                  <a class = "dropdown-item" href = "/myProjects">Mes annonces</a>
                                          <a class = "dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              <i class="fas fa-sign-out-alt"></i>
                                              Déconnexion
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  @csrf
                                              </form>
                                          </a>
						               </div>

                                	</li>

                                @endauth

                                <!-- End Login section -->
                            </ul>


                        </div>

                    </div>
                    <div class="col-12 d-lg-none ">
                        <div id="mobile-menu" class="">
                            <div class="collapse navbar-collapse">
                                <ul id="menu-main-menu-1" class="nav navbar-nav">
                                    <li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-27 active"><a title="Home"
                                          href="http://demo.themeum.com/wordpress/backnow/">Accueil</a>

                                    </li>
                                    <li id="menu-item-384" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-384"><a title="Page" href="#">Investisseur</a>
                                        <span class="menu-toggler collapsed" data-toggle="collapse" data-target=".collapse-384">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                        <ul role="menu" class="collapse collapse-384 ">
                                            <li id="menu-item-385" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-385"><a title="Blog" href="https://demo.themeum.com/wordpress/backnow/blog/">Investir</a></li>
                                            <!--li id="menu-item-1824" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1824"><a title="Blog fullwidth" href="https://demo.themeum.com/wordpress/backnow/blog-wide/">Explorer</a></li>
                                            <li id="menu-item-1470" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1470"><a title="About" href="https://demo.themeum.com/wordpress/backnow/about/">Rechercher</a></li-->

                                        </ul>
                                    </li>
                                    <li id="menu-item-1823" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1823"><a title="Discover" href="https://demo.themeum.com/wordpress/backnow/discover/">Porteur de projet</a>
                                        <span class="menu-toggler collapsed" data-toggle="collapse" data-target=".collapse-1823">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                        <ul role="menu" class="collapse collapse-1823 ">
                                        	<li id="menu-item-1822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1822">
                                              <a title="Discover Style 2" href="https://demo.themeum.com/wordpress/backnow/discover-style-2/">Lever des fonds</a>
                                            </li>
                                            <li id="menu-item-1822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1822">
                                              <a title="Discover Style 2" href="/searchUsers">Trouver un associé</a>
                                            </li>
                                        	@auth
                                            <li id="menu-item-1822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1822">
                                              <a title="Discover Style 2"  href="/whichCategories" >Créer une annonce</a>
                                            </li>
                                            @endauth

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/.#mobile-menu-->
                    </div>

                    <div class="d-none d-lg-block order-lg-3 col-lg">

                        <div class="backnow-login-register">
                            <!--
                            <div class="backnow-search-wrap">
                                <a href="#" class="backnow-search search-open-icon"><i class="fas fa-search"></i></a>
                            </div>
                        -->

                            <ul>
                                @guest
                                <!-- Login Section -->
                                <li><a href="{{route('login')}}"> <i class="fas fa-user-alt"></i>Connexion/Inscription</a></li>
                                <!-- End Login section -->
                                @endguest
                                @auth
                                <li class = "dropdown">

                                		<!--a href="/home"> <i class="fas fa-user-alt"></i>Tableau de bord</a-->
                                		<p class = "dropdown-toggle" type = "button" id = "dropdownMenuButton" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false"><i class="fas fa-user-alt"></i> Tableau de bord</p>

                                		<div class = "dropdown-menu" aria-labelledby = "dropdownMenuButton">
						                  <a class = "dropdown-item" href = "/home">Mon compte</a>
                                          <a class = "dropdown-item" href = "/messages">Messages</a>
						                  <a class = "dropdown-item" href = "/myProjects">Mes annonces</a>
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              <i class="fas fa-sign-out-alt"></i>
                                              Déconnexion
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  @csrf
                                              </form>
                                          </a>
						               </div>

                                	</li>


                                <!-- Start Campaign Section {{route('annonces.create')}} -->
                                <li><a class=""  href="/whichCategories" ><button class = "btn btn-info backnow-login backnow-dashboard" type = "button" >Créer une annonce</button> </a></li>
                                <!-- End Campaign -->
                                @endauth
                            </ul>

                        </div>

                    </div>
                    <!--/.col-md-7-->
                </div>
                <!--/.main-menu-wrap-->

                <div class="thm-fullscreen-search d-flex flex-wrap justify-content-center align-items-center">
                    <div class="search-overlay"></div>
                    <form action="https://demo.themeum.com/wordpress/backnow/" method="get">
                        <input class="main-font" type="text" value="" name="s" placeholder="Search here..." autocomplete="off">
                        <input type="submit" value="submit" class="d-none" id="thm-search-submit">
                        <label for="thm-search-submit"><i class="fa fa-search"></i></label>
                    </form>
                </div>
                <!--/ .main-menu-wrap -->

            </div>
            <!--/.container-->
        </header>

        @yield('content')



        <div class="bottom footer-wrap">
            <div class="container bottom-footer-cont">
                <div class="row clearfix">

                    <!-- Without MailChimp -->

                    <!-- With MailChimp -->
                    <div class="col-lg-8">
                        <div class="row">

                            <div class="bottom-wrap col-sm-6 col-lg-5">
                                <div class="bottom-widget">
                                    <div id="nav_menu-4" class="widget widget_nav_menu">
                                        <h3 class="widget-title">Contactez – nous</h3>
                                        <div class="menu-footer-3-container">
                                            <ul id="menu-footer-3" class="menu">
                                                <li id="menu-item-252" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-252">
                                                	<span class="far fa-envelope"> </span>
                                                	<a href="mailto:infos@businessensemble.fr">infos@businessensemble.fr</a>
                                                </li>
                                                <li id="menu-item-253" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-253">
                                                	<span class="fas fa-paper-plane"> </span>
                                                	<a href="#">Av des champs Elysée Paris 8</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-wrap col-sm-6 col-lg-5">
                                <div class="bottom-widget">
                                    <div id="nav_menu-5" class="widget widget_nav_menu">
                                        <h3 class="widget-title">Espace Membre</h3>
                                        <div class="menu-footer-4-container">
                                            <ul id="menu-footer-4" class="menu">
                                                <li id="menu-item-255" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-255">
                                                	<span class="fas fa-globe"> </span>
                                                    @guest
                                                	<a href="/login">CONNEXION</a></li>
                                                    @endguest
                                                    @auth
                                                	<a href="/home">TABLEAU DE BORD</a></li>
                                                    @endauth
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- mailchil-container start -->
                    <div class="col-lg-4 mailchimp-inner bottom-wrap">
                        <div class="mailchil-container">
                            <img class="enter-logo img-responsive" alt="logo" src="http://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/mail-icon.png">
                            <div class="bottom-widget">
                                <div id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
                                    <script>
                                        (function() {
                                            if (!window.mc4wp) {
                                                window.mc4wp = {
                                                    listeners: [],
                                                    forms: {
                                                        on: function(event, callback) {
                                                            window.mc4wp.listeners.push({
                                                                event: event,
                                                                callback: callback
                                                            });
                                                        }
                                                    }
                                                }
                                            }
                                        })();
                                    </script><!-- Mailchimp for WordPress v4.7.4 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-262" method="post" data-id="262" data-name="">
                                        <div class="mc4wp-form-fields">
                                            <div class="mchimp-newsletter">
                                                <h4>Abonnez-vous à notre newsletter</h4>
                                                <p>Recevez nos actualités et conseils directement dans votre adresse email</p>
                                                <input type="email" name="EMAIL" placeholder="Votre adresse email" required="">
                                                <button type="submit" value=""><i class="fas fa-arrow-right"></i></button>
                                            </div>
                                        </div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label><input type="hidden"
                                          name="_mc4wp_timestamp" value="1592264102"><input type="hidden" name="_mc4wp_form_id" value="262"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                        <div class="mc4wp-response"></div>
                                    </form><!-- / Mailchimp for WordPress Plugin -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- mailchimp end -->

                </div>
            </div>
        </div>


        <footer id="footer">
            <div class="container">
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-md-6 text-left copy-wrapper">
                            <img class="enter-logo img-responsive" src="/assets/imgs/logo-be.jpg" alt="Logo" title="Logo" width="150">
                           © <span id="year"> 2018 </span>  All Rights Reserved.
                        </div> <!-- end row -->
                        <div class="col-md-6 text-right copy-wrapper">

                            <div class="social-share">
                                <ul>
                                    <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>

                                    <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>

                                    <li><a target="_blank" href="#"><i class="fab fa-google"></i></a></li>


                                    <li><a target="_blank" href="#"><i class="fab fa-linkedin"></i></a></li>

                                    <li><a target="_blank" href="#"><i class="fab fa-dribbble"></i></a></li>

                                    <li><a target="_blank" href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end row -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>


        <script type="text/javascript" src="/notifs/amaran/jquery.amaran.js"></script>

        <!--COPYRIGTH SCRIPT-->
    <script type="text/javascript">
        var date = new Date();
        var annee = date.getFullYear();
        document.getElementById('year').innerHTML = annee;
    </script>

        <!--Tap script-->

      <script>
          $(document).ready(function(){
            $(".themeum-tab-navigation a").click(function(){
              $(this).tab('show');
            });
          });
      </script>

      <script type="text/javascript">
        $(document).ready(function(){
          $("#myBtn").click(function(){
            $("#myModal").modal();
          });

        });
      </script>




      <!--scripts pusher-->
      @auth
      <script src="https://js.pusher.com/5.0/pusher.min.js"></script>



    <script>
       var receiver_id = '';
       var my_id = "{{ Auth::id() }}";
       $(document).ready(function () {
           // ajax setup form csrf token
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
           /*
           // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('cdd8ae74bdc2c7c57639', {
        cluster: 'eu'
      });

      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
        alert('dave');
      });
           */
           // Enable pusher logging - don't include this in production
           Pusher.logToConsole = true;
           var pusher = new Pusher('ba187d3f7ffec751fb4b', {
               cluster: 'eu',
               forceTLS: false
           });
           var channel = pusher.subscribe('my-channel');
           channel.bind('my-event', function (data) {
               if (my_id == data.from) {

                   $('#' + data.to).click();
               } else if (my_id == data.to) {
                   if (receiver_id == data.from) {
                       // if receiver is selected, reload the selected user ...
                       $('#' + data.from).click();
                   } else {
                       // if receiver is not seleted, add notification for that user
                       var pending = parseInt($('#' + data.from).find('.pending').html());
                       if (pending) {
                           $('#' + data.from).find('.pending').html(pending + 1);
                       } else {
                           $('#' + data.from).append('<span class="pending">1</span>');
                       }
                   }
               }
           });

           $('.user').click(function () {
               $('.user').removeClass('active');
               $(this).addClass('active');
               $(this).find('.pending').remove();
               receiver_id = $(this).attr('id');
               $.ajax({
                   type: "get",
                   url: "message/" + receiver_id, // need to create this route
                   data: "",
                   cache: false,
                   success: function (data) {
                       $('#messages').html(data);
                       scrollToBottomFunc();
                   }
               });
           });
           $(document).on('keyup', '.input-text input', function (e) {
               var message = $(this).val();
               // check if enter key is pressed and message is not null also receiver is selected
               if (e.keyCode == 13 && message != '' && receiver_id != '') {
                   $(this).val(''); // while pressed enter text box will be empty
                   var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                   $.ajax({
                       type: "post",
                       url: "message", // need to create this post route
                       data: datastr,
                       cache: false,
                       success: function (data) {

                       },
                       error: function (jqXHR, status, err) {
                       },
                       complete: function () {
                           scrollToBottomFunc();
                       }
                   })
               }
           });
       });
       // make a function to scroll down auto
       function scrollToBottomFunc() {
           $('.message-wrapper').animate({
               scrollTop: $('.message-wrapper').get(0).scrollHeight
           }, 50);
       }
   </script>

   @endauth



    </body>
</html>
