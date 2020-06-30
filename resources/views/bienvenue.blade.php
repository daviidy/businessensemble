@extends('layouts.menu')
@section('title', 'Bienvenue')

@section('content')

        <style media="screen">
        /*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/themeum-core/assets/css/themeum-core.css?ver=4.9.15 ; media=all */
@media all{
span.countdown-period{text-transform:uppercase;margin-top:2px;font-size:12px;font-weight:400;display:block;}
.novisible{visibility:hidden;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/wp-crowdfunding/assets/css/crowdfunding-front.css?ver=2.0.2 ; media=all */
@media all{
.float-left{float:left;}
.text-right{text-align:right;}
.wpneo-modal-wrapper{background:rgba(0, 0, 0, 0.3);bottom:0;left:0;position:fixed;right:0;top:0;-webkit-transition:opacity 400ms ease-in 0s;transition:opacity 400ms ease-in 0s;z-index:99999;-webkit-animation-name:animatetop;-webkit-animation-duration:0.4s;animation-name:animatetop;animation-duration:0.4s;display:none;width:100%;font-family: 'Montserrat', sans-serif;color:#686C8B;font-size:14px;}
.wpneo-modal-wrapper h3,.wpneo-modal-wrapper h4{font-weight:500;}
div.wpneo-modal-wrapper-head{background-color:#ffffff;border-radius:6px 6px 0 0;position:relative;}
div.wpneo-modal-wrapper-head h4{border-bottom:1px solid #e5e5e5;font-size:18px;margin-bottom:0;padding:15px 0px 15px 30px;text-transform:capitalize;}
.wpneo-modal-content{background:#fff none repeat scroll 0 0;margin:5% auto 0;max-width:650px;position:relative;max-height:80%;overflow-y:auto;}
.wpneo-modal-content-inner{padding:25px 30px;}
.wpneo-modal-content p{color:#414548;font-size:16px;line-height:1.5;}
.wpneo-profile-button{background-color:#1adc68;color:#fff;}
.wpneo-profile-button:hover{background-color:#18ce43;color:#fff;}
@media (max-width: 992px){
.wpneo-modal-content{margin:10% auto 0;max-width:60%;}
}
@media (max-width: 767px){
.wpneo-modal-content{margin:15% auto 0;max-width:85%;}
}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/wpcftemplate/woocommerce/basic/style.css?ver=2.0.2 ; media=all */
@media all{
.float-left{float:left;}
.wpneo-modal-wrapper{background:rgba(0, 0, 0, 0.3);bottom:0;left:0;position:fixed;right:0;top:0;-webkit-transition:opacity 400ms ease-in 0s;transition:opacity 400ms ease-in 0s;z-index:99999;-webkit-animation-name:animatetop;-webkit-animation-duration:0.4s;animation-name:animatetop;animation-duration:0.4s;display:none;width:100%;}
div.wpneo-modal-wrapper-head{background-color:#ffffff;border-radius:6px 6px 0 0;position:relative;}
div.wpneo-modal-wrapper-head h4{border-bottom:1px solid #e5e5e5;font-size:18px;margin-bottom:0;padding:30px 0px 30px 30px;text-transform:capitalize;}
.wpneo-modal-content{background:#fff none repeat scroll 0 0;margin:5% auto 0;max-width:650px;position:relative;max-height:80%;overflow-y:auto;}
.wpneo-modal-content-inner{padding:30px;}
.wpneo-modal-content p{color:#414548;font-size:16px;line-height:1.5;}
.wpneo-icon{background-attachment:initial;background-image:url("https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/wpcftemplate/woocommerce/basic/icon.png");background-repeat:no-repeat;display:inline-block;height:27px;width:26px;}
.wpneo-icon-facebook{background-position:-28px -14px;}
.wpneo-icon-twitter{background-position:-75px -14px;}
.wpneo-icon-gplus{background-position:-122px -14px;}
.wpneo-icon-pinterest{background-position:-169px -14px;}
.wpneo-icon-linkedin{background-position:-588px -14px;}
a.wpneo-fund-modal-btn{color:#000000;}
img.profile-avatar{width:105px;height:105px!important;border-radius:50%;}
.wpneo-profile-left,.wpneo-profile-right{display:inline-block;float:left;}
.wpneo-profile-right{padding-left:0;}
.wpneo-profile-name{font-size:24px;color:#000;font-weight:bold;margin-top:5px;line-height:31px;}
.wpneo-profile-campaigns{margin-top:28px;}
.wpneo-profile-location span{position:absolute;color:#737373;}
.wpneo-profile-about{padding:0;display:inline-block;width:100%;}
.wpneo-profile-about h3{font-size:18px;line-height:50px;}
.wpneo-profile-about p{font-size:14px;margin:0;}
.wpneo-profile-button{text-decoration:none;text-transform:capitalize;padding:8px 20px;background-color:#8dc63f;font-weight:300;color:#fff;font-size:15px;border-radius:2px;float:left;margin:30px 0px 0px;}
a.wpneo-profile-button:hover{background-color:#80b538;color:#fff;}
.wpneo-profile-about .wpneo-social-link{margin-right:5px;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/bootstrap.min.css?ver=all ; media=all */
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
h2,h3,p{orphans:3;widows:3;}
h2,h3{page-break-after:avoid;}
}
*,::after,::before{box-sizing:border-box;}
section{display:block;}
[tabindex="-1"]:focus{outline:0!important;}
h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
[role=button],a,button{-ms-touch-action:manipulation;touch-action:manipulation;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button{overflow:visible;}
button{text-transform:none;}
button,html [type=button]{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
h2,h3,h4,h5,h6{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h2{font-size:2rem;}
h3{font-size:1.75rem;}
h4{font-size:1.5rem;}
h5{font-size:1.25rem;}
h6{font-size:1rem;}
.lead{font-size:1.25rem;font-weight:300;}
.img-fluid{max-width:100%;height:auto;}
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
.col-12,.col-lg-4,.col-lg-6,.col-lg-8,.col-sm-12,.col-sm-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
@media (min-width:576px){
.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
@media (min-width:992px){
.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
}

.nav{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none;}
.nav-link{display:block;padding:.5rem 1rem;}
.nav-link:focus,.nav-link:hover{text-decoration:none;}
.tab-content>.tab-pane{display:none;}
.tab-content>.active{display:block;}
.progress{display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem;}
.progress-bar{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;color:#fff;background-color:#007bff;}
.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5;}
.close:focus,.close:hover{color:#000;text-decoration:none;opacity:.75;}
button.close{padding:0;background:0 0;border:0;-webkit-appearance:none;}

.clearfix::after{display:block;clear:both;content:"";}
.d-inline-block{display:inline-block!important;}
.d-flex{display:-ms-flexbox!important;display:flex!important;}
.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important;}
.justify-content-center{-ms-flex-pack:center!important;justify-content:center!important;}
.align-items-center{-ms-flex-align:center!important;align-items:center!important;}
.align-self-end{-ms-flex-item-align:end!important;align-self:flex-end!important;}
.float-left{float:left!important;}
.w-100{width:100%!important;}
.text-left{text-align:left!important;}
.text-right{text-align:right!important;}
.text-center{text-align:center!important;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0 ; media=all */
@media all{
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.pull-left{float:left;}
.fa-heart-o:before{content:"\f08a";}
.fa-sun-o:before{content:"\f185";}
.fa-gg:before{content:"\f260";}
.fa-assistive-listening-systems:before{content:"\f2a2";}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/backnow-font-style.css?ver=all ; media=all */
@media all{
[class^="back-"]{font-family:'backnow'!important;speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.back-placeholder:before{content:"\e939";}
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
.thm-btn{line-height:43px;padding:0 25px;color:#fff;display:inline-block;border-radius:3px;-webkit-transition:.4s;transition:.4s;border:1px solid;}
.thm-btn,.wpneo-profile-button{color:#fff;cursor:pointer;}
.thm-btn:hover,.wpneo-profile-button:hover{background:#fff;}
button:focus{outline-offset:0;outline:0;-webkit-box-shadow:none;box-shadow:none;}
.entry-content .elementor-widget:not(:last-child){margin-bottom:20px;}
.backnow-title-content-wrapper{margin-bottom:60px;}
h2.thm-heading-title{font-weight:300;}
.sub-title-content{font-size:20px;font-weight:300;color:#222;margin-bottom:0;}
.thm-progress-bar .progress-bar{color:#fff;height:6px;-webkit-box-shadow:none;box-shadow:none;margin-bottom:0;border-radius:10px;}
.slider_content_wrapper{position:relative;}
.thm-slide-control{list-style:none;padding:0;margin:0;position:absolute;text-align:center;bottom:50px;margin:0 auto;left:50%;right:auto;top:auto;transform:translateX(-50%);}
.thm-slide-control li{display:inline-block;font-size:0;line-height:0;}
.thm-slide-control li{margin:0 3px;}
.thm-slide-control li button{width:30px;height:8px;box-shadow:none;border:none;background:rgba(255, 255, 255, 0.3);border-radius:8px;transition:400ms;}
.thm-slide-control li button:hover{width:50px;background:#fff;}
.thm-slide-control li.slick-active button{background:#fff;}
.slider-button .slider-button-1{transition:400ms;}
.slider-single-wrapper{background-size:cover;background-repeat:no-repeat;background-position:center;}
.thm-post-grid-col{margin-bottom:30px;}
.themeum-campaign-post{border-radius:4px;border:1px solid #EBEBF1;background:#fff;position:relative;height:100%;}
.themeum-campaign-img{margin:-1px -1px 0;position:relative;overflow:hidden;}
.themeum-campaign-img .review-item-image img{border-radius:5px;}
.themeum-campaign-img .thm-camp-hvr .thm-ch-icon{background-color:#fff;height:95px;width:95px;border-radius:50%;display:inline-block;line-height:106px;font-size:40px;}
.themeum-campaign-img .thm-camp-hvr{position:absolute;z-index:3;left:50%;top:50%;text-align:center;-webkit-transform:translateX(-50%) translateY(-50%) scale(.5);transform:translateX(-50%) translateY(-50%) scale(.5);opacity:0;-webkit-transition:all .1s ease-in 0s;transition:all .1s ease-in 0s;}
.themeum-campaign-img .thm-camp-hvr h4{color:#fff;margin:10px 0 0;font-weight:300;}
.themeum-campaign-post .themeum-campaign-img::after{content:'';position:absolute;height:100%;width:100%;z-index:1;border-radius:50%;left:50%;top:50%;margin-left:-50px;-webkit-transform:scale(0);transform:scale(0);opacity:0;-webkit-transition:all .2s ease-in 0s;transition:all .2s ease-in 0s;}
.themeum-campaign-post .themeum-campaign-img img{border-radius:4px 4px 0 0;}
.themeum-campaign-post .themeum-campaign-post-content{padding:20px 20px 0;position:relative;}
.themeum-campaign-exp-content h3,.themeum-campaign-post h3{font-size:18px;font-weight:400;line-height:24px;margin-bottom:10px;margin-top:3px;}
.themeum-campaign-exp-content h3 a,.themeum-campaign-post h3 a{transition:400ms;-webkit-transition:400ms;color:#393939;font-weight:400;}
.themeum-tab-category p{font-weight:300;}
.themeum-campaign-exp-content .entry-category a,.themeum-campaign-post .entry-category a{color:#B0B0B0;font-size:14px;margin-right:8px;}
.themeum-campaign-post a.thm-love-btn{position:absolute;right:25px;top:-25px;background:#fff;height:50px;width:50px;border-radius:50%;text-align:center;line-height:52px;font-size:20px;-webkit-transition:.2s;transition:.2s;z-index:2;}
.themeum-campaign-post a.thm-love-btn:hover{color:#fff;}
.progressbar-content-wrapper{padding:0 20px;}
.progressbar-content-wrapper .thm-progress-bar .progress{height:6px;background-color:#eee;-webkit-box-shadow:none;box-shadow:none;border-radius:10px;margin-top:12px;margin-bottom:12px;}
.progressbar-content-wrapper .thm-progress-bar .thm-raise-sp{color:#8A8D91;font-weight:300;}
.progressbar-content-wrapper .thm-progress-bar .lead{font-size:14px;font-weight:500;margin:0;color:#393939;}
.progressbar-content-wrapper .thm-meta-desc{width:50%;display:inline-block;}
.themeum-camp-author{padding:20px;}
.themeum-author-img{height:40px;width:40px;border-radius:50%;overflow:hidden;}
.themeum-author-img img{width:100%;}
.themeum-author-dsc{padding-left:10px;}
.themeum-author-dsc span,.themeum-author-funded span{display:block;color:#AAAEB3;font-size:14px;font-weight:300;line-height:1;display:block;}
.themeum-author-dsc a,.themeum-author-funded h6{font-size:14px;line-height:1;color:#363636;display:block;margin-bottom:6px;margin-top:3px;}
.themeum-author-funded{text-align:right;}
.wpneo-modal-wrapper{background:rgba(0, 0, 0, 0.8);}
.wpneo-modal-content{border-radius:4px;}
div.wpneo-modal-wrapper-head h4{border-bottom:1px solid #e7e7e7;font-size:18px;padding:20px 0px 20px 30px;}
.wpneo-modal-content-inner img.profile-avatar{border-radius:4px;margin-right:20px;}
.wpneo-profile-name{font-size:18px;font-weight:400;line-height:40px;color:#393939;}
.wpneo-profile-about .wpneo-icon{border-radius:4px;}

.themeum-tab-inner{height:100%;text-align:center;border-radius:4px;padding:20px 30px;background-color:#fff;border:1px solid #EBEBF1;}
.themeum-campaign-tab-post .progressbar-content-wrapper{padding:0;border-bottom-color:transparent;}
.themeum-campaign-tab-post .themeum-camp-author{padding:0;}
.themeum-tab-inner .themeum-campaign-post-content,.themeum-tab-category{color:#A0A0A0;font-weight:400;padding-top:15px;padding-bottom:15px;}
.themeum-tab-category .thm-cat-icon{font-size:85px;line-height:1;max-height:85px;margin-bottom:10px;}
.themeum-tab-inner .themeum-campaign-post-content h3,.themeum-tab-category h3{font-size:22px;font-weight:400;margin-bottom:15px;line-height:30px;}
.themeum-tab-inner .themeum-campaign-post-content h3 a,.themeum-tab-category h3 a{color:#353535;-webkit-transition:.4s;transition:.4s;}
.themeum-tab-category h3 a:hover{opacity:.6;}
.themeum-tab-inner .themeum-campaign-post-content p{font-weight:300;}
.themeum-tab-category h6{font-weight:400;margin-bottom:20px;}
.themeum-tab-category a.thm-btn{margin-top:10px;}
.themeum-tab-navigation{margin-bottom:20px;}
.themeum-tab-navigation li a{font-size:16px;font-weight:300;color:#9C9CA0;margin-bottom:10px;line-height:35px;padding:0 15px;}
.themeum-tab-navigation li a.active{background-color:#fff;color:#1B6DC1;border-radius:4px;border:1px solid #EBEBF1;}
.themeum-campaign-tab-post .themeum-camp-author{padding-top:12px;}
.themeum-campaign-time-exp{position:relative;overflow:hidden;padding-left:215px;margin:15px 0;border:1px solid #EBEBF1;border-radius:5px;background-color:#fff;}
.themeum-campaign-time-exp .themeum-campaign-thumb{width:215px;height:100%;position:absolute;left:0;top:0;background-size:cover;background-position:center center;}
.themeum-campaign-time-exp .thm-progress-bar .progress{height:6px;background-color:#eee;-webkit-box-shadow:none;box-shadow:none;border-radius:10px;margin-top:12px;margin-bottom:0;}
.themeum-campaign-exp-counter{margin-bottom:20px;}
.themeum-campaign-exp-counter .counter-item{padding:0 20px;border-left:1px solid #eee;float:left;}
.themeum-campaign-exp-counter .counter-item:last-child{padding-right:0;}
.themeum-campaign-exp-counter .counter-item span{font-size:14px;color:#8A8D91;margin-top:0;}
.themeum-campaign-exp-counter .counter-item span:first-child{font-size:18px;color:#000;line-height:1;font-weight:600;}
.themeum-campaign-exp-counter .counter-item:first-child{border-left-color:transparent;padding-left:0;}
.themeum-campaign-time-exp .themeum-campaign-exp-content{padding:25px 30px 25px 20px;}
.themeum-campaign-time-exp .thm-progress-bar .thm-raise-sp{color:#8A8D91;font-weight:300;}
.themeum-campaign-time-exp .thm-progress-bar .lead{font-size:14px;font-weight:500;margin:0;color:#393939;}
.themeum-campaign-time-exp .thm-meta-desc{width:50%;display:inline-block;}
img{max-width:100%;height:auto;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/custom.css?ver=all ; media=all */
@media all{
.backnow-location{display:inline-block;float:left;padding-right:20px;}
.wpneo-modal-content-inner{text-align:left;}
.wpneo-modal-content-inner .wpneo-profile-left img{width:110px!important;}
#bioinfo .wpneo-modal-content{margin:0;}
#bioinfo button.close{top:12px;position:absolute;right:10px;}
div.wpneo-modal-wrapper-head h4{text-align:left;}
.themeum-campaign-post .progressbar-content-wrapper{padding-top:14px;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/responsive.css?ver=all ; media=all */
@media all{
@media (min-width: 768px) and (max-width: 1000px){
.themeum-tab-category{margin:0 auto;}
}
@media only screen and (max-width: 992px){
.slider_content_wrapper br{display:none;}
.themeum-author-dsc{text-align:left;}
}
@media (max-width: 767px){
.themeum-campaign-tab-post .themeum-camp-author{margin-bottom:20px;}
.themeum-campaign-post .review-item-image img{width:100%;}
}
@media (max-width: 600px){
.themeum-campaign-time-exp .themeum-campaign-thumb{position:static;width:100%;height:200px;}
.themeum-campaign-time-exp{padding-left:0;}
}
@media (max-width: 489px){
.themeum-campaign-exp-counter .counter-item{padding:0 15px;}
}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/style.css?ver=4.9.15 ; media=all */
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
ul li{padding:5px 0;}
.elementor-widget-backnow-product-grid .themeum-campaign-post .entry-title a{color:#343a40!important; font-family: 'Montserrat', sans-serif!important;font-weight:400!important;}
}
/*! CSS Used from: Embedded */
a,.themeum-campaign-post .entry-category a:hover,.themeum-campaign-post h3 a:hover,.thm-btn:hover,.wpneo-profile-button:hover,.themeum-campaign-img .thm-camp-hvr .thm-ch-icon,.themeum-tab-category .thm-cat-icon,.themeum-tab-inner .themeum-campaign-post-content h3 a:hover,.themeum-campaign-exp-content h3 a:hover{color:#1B6DC1;}
.thm-progress-bar .progress-bar,.themeum-campaign-post .themeum-campaign-img::after,.progressbar-content-wrapper .thm-progress-bar .progress .progress-bar,.themeum-campaign-time-exp .thm-progress-bar .progress .progress-bar,.thm-btn,.themeum-campaign-post a.thm-love-btn:hover{background:#1B6DC1;}
.themeum-campaign-post .entry-title a:hover{color:#33d3c0!important;}
.thm-btn{background-color:#1B6DC1;border-color:#1B6DC1;}
.progressbar-content-wrapper .thm-progress-bar .progress .progress-bar,.themeum-campaign-time-exp .thm-progress-bar .progress .progress-bar{background:#1B6DC1;background:-moz-linear-gradient(left, #1B6DC1 0%, #1B6DC1 100%);background:-webkit-linear-gradient(left, #1B6DC1 0%,#1B6DC1 100%);background:linear-gradient(to right, #1B6DC1 0%,#1B6DC1 100%);}
a:hover{color:#00bf9c;}
h2{font-size:36px;font-family: 'Montserrat', sans-serif;font-weight:400;line-height:42px;color:#414040;}
h3{font-size:26px;font-family: 'Montserrat', sans-serif;font-weight:400;line-height:28px;color:#414040;}
h4{font-size:18px;font-family: 'Montserrat', sans-serif;font-weight:600;line-height:26px;color:#414040;}
h5{font-size:16px;font-family: 'Montserrat', sans-serif;font-weight:600;line-height:24px;color:#414040;}
.wpneo-profile-button{background-color:#33d3c0;border-color:#33d3c0;color:#fff!important;}
.wpneo-profile-button:hover{background-color:#33d3c0;border-color:#33d3c0;color:#fff!important;}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=2.6.7 ; media=all */
@media all{
.fadeInDown{animation-name:fadeInDown;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=2.6.7 ; media=all */
@media all{
.elementor{-webkit-hyphens:manual;-ms-hyphens:manual;hyphens:manual;}
.elementor *,.elementor :after,.elementor :before{-webkit-box-sizing:border-box;box-sizing:border-box;}
.elementor a{-webkit-box-shadow:none;box-shadow:none;text-decoration:none;}
.elementor img{height:auto;max-width:100%;border:none;-webkit-border-radius:0;border-radius:0;-webkit-box-shadow:none;box-shadow:none;}
.elementor .elementor-background-overlay{height:100%;width:100%;top:0;left:0;position:absolute;}
.elementor-align-center{text-align:center;}
.elementor-align-center .elementor-button{width:auto;}
.elementor-section{position:relative;}
.elementor-section .elementor-container{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin-right:auto;margin-left:auto;position:relative;}
.elementor-section.elementor-section-boxed>.elementor-container{max-width:1140px;}
.elementor-section.elementor-section-stretched{position:relative;width:100%;}
.elementor-row{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}
@media (max-width:1024px){
.elementor-row{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;}
}
.elementor-column-wrap{width:100%;position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}
.elementor-widget-wrap{position:relative;width:100%;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-align-content:flex-start;-ms-flex-line-pack:start;align-content:flex-start;}
.elementor-widget-wrap>.elementor-element{width:100%;}
.elementor-widget{position:relative;}
.elementor-widget:not(:last-child){margin-bottom:20px;}
.elementor-column{position:relative;min-height:1px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}
.elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated{padding:10px;}
@media (min-width:768px){
.elementor-column.elementor-col-25{width:25%;}
.elementor-column.elementor-col-33{width:33.333%;}
.elementor-column.elementor-col-100{width:100%;}
}
@media (max-width:767px){
.elementor-column{width:100%;}
}
.elementor-element .elementor-widget-container{-webkit-transition:background .3s,border .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;transition:background .3s,border .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;-o-transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;transition:background .3s,border .3s,border-radius .3s,box-shadow .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;}
.elementor-button{display:inline-block;line-height:1;background-color:#818a91;color:#fff;fill:#fff;text-align:center;-webkit-transition:all .3s;-o-transition:all .3s;transition:all .3s;}
.elementor-button:focus,.elementor-button:hover,.elementor-button:visited{color:#fff;}
.elementor-button.elementor-size-sm{font-size:15px;padding:12px 24px;-webkit-border-radius:3px;border-radius:3px;}
.elementor-button .elementor-button-text{display:inline-block;}
.elementor-button span{text-decoration:inherit;}
.elementor-icon{display:inline-block;line-height:1;-webkit-transition:all .3s;-o-transition:all .3s;transition:all .3s;color:#818a91;font-size:50px;text-align:center;}
.elementor-icon:hover{color:#818a91;}
.elementor-icon i{width:1em;height:1em;position:relative;display:block;}
.elementor-icon i:before{position:absolute;left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);}
@media (min-width:768px){
.elementor-widget-icon-box.elementor-vertical-align-top .elementor-icon-box-wrapper{-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;}
}
@media (max-width:767px){
.elementor-widget-icon-box .elementor-icon-box-icon{margin-left:auto!important;margin-right:auto!important;margin-bottom:15px;}
}
.elementor-widget-icon-box .elementor-icon-box-wrapper{text-align:center;}
.elementor-widget-icon-box .elementor-icon-box-content{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;}
.elementor-widget-icon-box .elementor-icon-box-description{margin:0;}
.elementor-widget-image{text-align:center;}
.elementor-widget-image .elementor-image img{vertical-align:middle;display:inline-block;}
.slick-slider{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent;}
.slick-list,.slick-slider{position:relative;display:block;}
.slick-list{overflow:hidden;margin:0;padding:0;}
.slick-list:focus{outline:none;}
.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translateZ(0);transform:translateZ(0);}
.slick-track{position:relative;left:0;top:0;display:block;}
.slick-track:after,.slick-track:before{content:"";display:table;}
.slick-track:after{clear:both;}
.slick-slide{float:left;height:100%;min-height:1px;display:none;}
.slick-initialized .slick-slide{display:block;}
.animated{-webkit-animation-duration:1.25s;animation-duration:1.25s;}
@media (prefers-reduced-motion:reduce){
.animated{-webkit-animation:none;animation:none;}
}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/uploads/elementor/css/post-1953.css?ver=1564769784 ; media=all */
@media all{
.elementor-1953 .elementor-element.elementor-element-6beb684:not(.elementor-motion-effects-element-type-background){background-image:url("http://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/slide.png");background-position:bottom center;background-repeat:no-repeat;}
.elementor-1953 .elementor-element.elementor-element-6beb684{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}
.elementor-1953 .elementor-element.elementor-element-fccd886 > .elementor-element-populated{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}
.elementor-1953 .elementor-element.elementor-element-d88ad52 .slider-single-wrapper{padding:0px 0px 0px 0px;height:700px;}
.elementor-1953 .elementor-element.elementor-element-d88ad52 .slider-title{padding:20px 0px 40px 0px;color:#ffffff;font-size:67px;font-weight:700;line-height:60px;}
.elementor-1953 .elementor-element.elementor-element-d88ad52 .slider-subtitle{color:#ffffff;font-size:16px;font-weight:400;}
.elementor-1953 .elementor-element.elementor-element-d88ad52 .slider-content{color:#ffffff;line-height:23px;}
.elementor-1953 .elementor-element.elementor-element-d88ad52 .slider-button-1{color:#ffffff;background-color:#1B6DC1;padding:8px 25px 8px 25px;margin:50px 0px 0px 0px;}
.elementor-1953 .elementor-element.elementor-element-d88ad52 a.slider-button-1{border-radius:3px 3px 3px 3px;}
.elementor-1953 .elementor-element.elementor-element-3uh2bpk:not(.elementor-motion-effects-element-type-background){background-color:#f7f7f9;background-image:url("http://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/slide.png");}
.elementor-1953 .elementor-element.elementor-element-3uh2bpk > .elementor-background-overlay{opacity:1;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}
.elementor-1953 .elementor-element.elementor-element-3uh2bpk{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:90px 0px 110px 0px;}
.elementor-1953 .elementor-element.elementor-element-eb4719c{text-align:center;}
.elementor-1953 .elementor-element.elementor-element-eb4719c .thm-heading-title{color:#000000;font-family:"Montserrat", Sans-serif;font-size:36px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-eb4719c .sub-title-content{color:#000000;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-eb4719c > .elementor-widget-container{margin:0px 0px 35px 0px;}
.elementor-1953 .elementor-element.elementor-element-ca48fd3{padding:90px 0px 80px 0px;}
.elementor-1953 .elementor-element.elementor-element-1411d0a{text-align:center;}
.elementor-1953 .elementor-element.elementor-element-1411d0a .thm-heading-title{color:#000000;font-family:"Montserrat", Sans-serif;font-size:36px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-1411d0a .sub-title-content{color:#000000;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-1411d0a > .elementor-widget-container{margin:0px 0px 60px 0px;}
.elementor-1953 .elementor-element.elementor-element-d353674:not(.elementor-motion-effects-element-type-background){background-color:#f7f7f9;}
.elementor-1953 .elementor-element.elementor-element-d353674{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:90px 0px 80px 0px;}
.elementor-1953 .elementor-element.elementor-element-1a1c7d5{text-align:center;}
.elementor-1953 .elementor-element.elementor-element-1a1c7d5 .thm-heading-title{color:#000000;font-family:"Montserrat", Sans-serif;font-size:36px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-1a1c7d5 .sub-title-content{color:#000000;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-1a1c7d5 > .elementor-widget-container{margin:0px 0px 60px 0px;}
.elementor-1953 .elementor-element.elementor-element-76cfba3{padding:90px 0px 0px 0px;}
.elementor-1953 .elementor-element.elementor-element-3e36572{text-align:center;}
.elementor-1953 .elementor-element.elementor-element-3e36572 .thm-heading-title{color:#000000;font-family:"Montserrat", Sans-serif;font-size:36px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-3e36572 .sub-title-content{color:#000000;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-3e36572 > .elementor-widget-container{margin:0px 0px 60px 0px;}
.elementor-1953 .elementor-element.elementor-element-5b10e73{padding:0px 0px 100px 0px;}
.elementor-1953 .elementor-element.elementor-element-c101f87.elementor-view-default .elementor-icon{fill:#a7a9ad;color:#a7a9ad;border-color:#a7a9ad;}
.elementor-1953 .elementor-element.elementor-element-c101f87.elementor-view-default .elementor-icon:hover{fill:#33d3c0;color:#33d3c0;border-color:#33d3c0;}
.elementor-1953 .elementor-element.elementor-element-c101f87.elementor-position-top .elementor-icon-box-icon{margin-bottom:10px;}
.elementor-1953 .elementor-element.elementor-element-c101f87 .elementor-icon{font-size:60px;}
.elementor-1953 .elementor-element.elementor-element-c101f87 .elementor-icon i{transform:rotate(0deg);}
.elementor-1953 .elementor-element.elementor-element-c101f87 .elementor-icon-box-title{margin-bottom:2px;}
.elementor-1953 .elementor-element.elementor-element-c101f87 .elementor-icon-box-content .elementor-icon-box-title{color:#000000;font-size:16px;font-weight:400;}
.elementor-1953 .elementor-element.elementor-element-c101f87 .elementor-icon-box-content .elementor-icon-box-description{color:#86939e;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-32ae4d5.elementor-view-default .elementor-icon{fill:#a7a9ad;color:#a7a9ad;border-color:#a7a9ad;}
.elementor-1953 .elementor-element.elementor-element-32ae4d5.elementor-view-default .elementor-icon:hover{fill:#33d3c0;color:#33d3c0;border-color:#33d3c0;}
.elementor-1953 .elementor-element.elementor-element-32ae4d5.elementor-position-top .elementor-icon-box-icon{margin-bottom:10px;}
.elementor-1953 .elementor-element.elementor-element-32ae4d5 .elementor-icon{font-size:60px;}
.elementor-1953 .elementor-element.elementor-element-32ae4d5 .elementor-icon i{transform:rotate(0deg);}
.elementor-1953 .elementor-element.elementor-element-32ae4d5 .elementor-icon-box-title{margin-bottom:2px;}
.elementor-1953 .elementor-element.elementor-element-32ae4d5 .elementor-icon-box-content .elementor-icon-box-title{color:#000000;font-size:16px;font-weight:400;}
.elementor-1953 .elementor-element.elementor-element-32ae4d5 .elementor-icon-box-content .elementor-icon-box-description{color:#86939e;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-ab39082.elementor-view-default .elementor-icon{fill:#a7a9ad;color:#a7a9ad;border-color:#a7a9ad;}
.elementor-1953 .elementor-element.elementor-element-ab39082.elementor-view-default .elementor-icon:hover{fill:#33d3c0;color:#33d3c0;border-color:#33d3c0;}
.elementor-1953 .elementor-element.elementor-element-ab39082.elementor-position-top .elementor-icon-box-icon{margin-bottom:10px;}
.elementor-1953 .elementor-element.elementor-element-ab39082 .elementor-icon{font-size:60px;}
.elementor-1953 .elementor-element.elementor-element-ab39082 .elementor-icon i{transform:rotate(0deg);}
.elementor-1953 .elementor-element.elementor-element-ab39082 .elementor-icon-box-title{margin-bottom:2px;}
.elementor-1953 .elementor-element.elementor-element-ab39082 .elementor-icon-box-content .elementor-icon-box-title{color:#000000;font-size:16px;font-weight:400;}
.elementor-1953 .elementor-element.elementor-element-ab39082 .elementor-icon-box-content .elementor-icon-box-description{color:#86939e;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-6dbcf51:not(.elementor-motion-effects-element-type-background){background-color:#f7f7f9; display: none;}
.elementor-1953 .elementor-element.elementor-element-6dbcf51{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:90px 0px 100px 0px;}
.elementor-1953 .elementor-element.elementor-element-6350e80{text-align:center;}
.elementor-1953 .elementor-element.elementor-element-6350e80 .thm-heading-title{color:#000000;font-family:"Montserrat", Sans-serif;font-size:36px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-6350e80 .sub-title-content{color:#000000;font-family:"Montserrat", Sans-serif;font-size:20px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-6350e80 > .elementor-widget-container{margin:0px 0px 60px 0px;}
.elementor-1953 .elementor-element.elementor-element-10866f6:not(.elementor-motion-effects-element-type-background){background-image:url("http://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/bg2.png");background-position:bottom center;background-repeat:no-repeat; background-color: #f7f7f9;}
.elementor-1953 .elementor-element.elementor-element-10866f6{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;padding:90px 0px 310px 0px;}
.elementor-1953 .elementor-element.elementor-element-e4987d7{text-align:center;}
.elementor-1953 .elementor-element.elementor-element-e4987d7 .thm-heading-title{color:#000000;margin:0px 0px 35px 0px;font-family:"Montserrat", Sans-serif;font-size:44px;font-weight:300;}
.elementor-1953 .elementor-element.elementor-element-e4987d7 .sub-title-content{color:#000;padding:0px 80px 30px 80px;font-family:"Montserrat", Sans-serif;font-size:18px;font-weight:300;line-height:30px;}
.elementor-1953 .elementor-element.elementor-element-956d6ec a.elementor-button,.elementor-1953 .elementor-element.elementor-element-956d6ec .elementor-button{font-family:"Montserrat", Sans-serif;font-size:14px;text-transform:uppercase;fill:#ffffff;color:#ffffff;background-color:#4266d0;border-radius:3px 3px 3px 3px;padding:15px 25px 15px 25px;}
.elementor-1953 .elementor-element.elementor-element-956d6ec a.elementor-button:hover,.elementor-1953 .elementor-element.elementor-element-956d6ec .elementor-button:hover,.elementor-1953 .elementor-element.elementor-element-956d6ec a.elementor-button:focus,.elementor-1953 .elementor-element.elementor-element-956d6ec .elementor-button:focus{background-color:#33d3c0;}
.elementor-1953 .elementor-element.elementor-element-220eb3b3:not(.elementor-motion-effects-element-type-background){background-color:#26262b;}
.elementor-1953 .elementor-element.elementor-element-220eb3b3{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:45px 0px 39px 0px;}
@media (max-width:767px){
.elementor-1953 .elementor-element.elementor-element-c101f87 .elementor-icon-box-icon{margin-bottom:10px;}
.elementor-1953 .elementor-element.elementor-element-32ae4d5 .elementor-icon-box-icon{margin-bottom:10px;}
.elementor-1953 .elementor-element.elementor-element-ab39082 .elementor-icon-box-icon{margin-bottom:10px;}
}
}
/*! CSS Used from: Embedded */
.wpneo-profile-button{background-color:#33d3c0;color:#fff;}
.wpneo-profile-button:hover{background-color:#1dc4e9;color:#fff;}
/*! CSS Used from: Embedded */
.themeum-tab-inner .themeum-campaign-post-content h3,.themeum-tab-category h3{font-size:22px!important;}
.themeum-campaign-exp-content h3,.themeum-campaign-post h3{font-size:18px!important;}

        </style>






        <!--slider style-->
        <style media="screen">
        /*! CSS Used from: Embedded */
			*{box-sizing:border-box;margin:0;padding:0;}
			img{max-width:100%;height:auto;}
			p,h1{font-size:inherit;font-weight:normal;/*max-width:60rem;*/}
			button,input{background-image:none;}
			input{color:#3c3b37;}
			*:focus,input:focus,button:focus{outline:none;}
			.udlite-heading-md{font-family:'SF Pro Display',-apple-system,BlinkMacSystemFont,Roboto,'Segoe UI',Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-weight:700;line-height:1.2;letter-spacing:-0.02rem;font-size:1.6rem;}
			.udlite-text-md{font-family:'SF Pro Text',-apple-system,BlinkMacSystemFont,Roboto,'Segoe UI',Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-weight:400;line-height:1.4;font-size:1.6rem;}
			.udlite-sr-only{position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px, 1px, 1px, 1px);}
			.udlite-btn{position:relative;align-items:center;border-radius:4px;border:none;cursor:pointer;display:inline-flex;min-width:10rem;padding:0 1.6rem;justify-content:center;user-select:none;vertical-align:bottom;}
			.udlite-btn:focus{color:#0f7c90;}
			.udlite-btn::-moz-focus-inner{border:0;}
			.udlite-btn-large{height:4.8rem;}
			.udlite-btn-ghost:active,.udlite-btn-ghost:hover{color:#094c59;}
			.udlite-btn-ghost{color:#0f7c90;background-color:transparent;min-width:auto;padding:0;}
			.udlite-btn-icon{min-width:auto;}
			.udlite-btn-icon-large{padding:0 1.2rem;width:4.8rem;}
			.udlite-icon{fill:currentColor;display:inline-block;flex-shrink:0;}
			.udlite-icon-large{width:2.4rem;height:2.4rem;}
			.udlite-icon-color-neutral{color:#73726c;}
			/*! CSS Used from: Embedded */
			.udlite-text-input{border-radius:4px;border:1px solid #989586;display:block;padding:0 1.6rem;min-width:24rem;width:100%;max-width:60rem;}
			.udlite-text-input::-moz-placeholder{color:#73726c;opacity:1;}
			.udlite-text-input:-ms-input-placeholder{color:#73726c;}
			.udlite-text-input::-webkit-input-placeholder{color:#73726c;}
			.udlite-text-input:hover{border-color:#797667;}
			.udlite-text-input:focus{border-color:#3c3b37;}
			.udlite-text-input-large{height:4.8rem;}
			.udlite-search-form-autocomplete{position:relative;min-width:24rem;max-width:60rem;}
			.udlite-search-form-autocomplete .udlite-search-form-autocomplete-input{border:0;flex:1;min-width:0;}
			.udlite-search-form-autocomplete-input-group{display:flex;align-items:center;height:100%;}
			/*! CSS Used from: Embedded */
			.billboard--billboard--3-fQr{display:block;margin:0 auto 0rem auto;position:relative;width:100%;}
			.billboard--billboard--3-fQr .billboard--search-bar--3s2y1{border:1px solid #dcdacb;border-radius:4px;margin-top:1.6rem;}
			.billboard--billboard--3-fQr .billboard--search-bar--3s2y1:hover{border-color:#c3c0a6;}
			.billboard--billboard--3-fQr .billboard--image-container--2JRqQ img{width:100%;}
			.billboard--billboard--3-fQr .billboard--content-box--JtXUJ{display:flex;flex-direction:column;position:absolute;background:#fff;box-shadow:0 2px 4px rgba(0,0,0,0.08),0 4px 12px rgba(0,0,0,0.08);padding:2.4rem;}
			@media (min-width:61.31em){
			.billboard--billboard--3-fQr{max-width:134rem;}
			.billboard--billboard--3-fQr .billboard--content-box--JtXUJ{left:4.8rem;top:6.4rem;max-width:44rem;}
			.billboard--billboard--3-fQr .billboard--content-box--JtXUJ h1{font-family:'Montserrat', sans-serif;font-weight:700;line-height:1.2;letter-spacing:-0.02rem;font-size:4rem;margin-bottom:.8rem;}
			.billboard--billboard--3-fQr .billboard--content-box--JtXUJ p{font-family:'Montserrat', sans-serif;font-weight:400;line-height:1.4;font-size:1.9rem;}
			}
			@media (min-width:43.81em) and (max-width:75em){
			.billboard--billboard--3-fQr .billboard--content-box--JtXUJ{width:34rem;left:2.4rem;top:2.4rem;}
			.billboard--billboard--3-fQr .billboard--content-box--JtXUJ h1{font-family:'Montserrat', sans-serif;font-weight:700;line-height:1.2;letter-spacing:-0.02rem;font-size:3.2rem;margin-bottom:.8rem;}
			.billboard--billboard--3-fQr .billboard--content-box--JtXUJ p{font-family:'Montserrat', sans-serif;font-weight:400;line-height:1.4;font-size:1.6rem;}
			}
			@media (min-width:43.81em) and (max-width:61.25em){
			.billboard--billboard--3-fQr .billboard--image-container--2JRqQ{height:25rem;overflow:hidden;}
			}
			@media (max-width:43.75em){
			.billboard--billboard--3-fQr{margin:0 auto 2.4rem auto;}
			.billboard--billboard--3-fQr .billboard--image-container--2JRqQ{height:20rem;margin-bottom:1.6rem;}
			.billboard--billboard--3-fQr .billboard--image-container--2JRqQ img{object-fit:cover;height:100%;}
			.billboard--billboard--3-fQr .billboard--content-box--JtXUJ{box-shadow:none;position:static;padding:0 2.4rem;}
			.billboard--billboard--3-fQr .billboard--content-box--JtXUJ h1{font-family:'Montserrat', sans-serif;font-weight:700;line-height:1.2;letter-spacing:-0.02rem;font-size:3.2rem;margin-bottom:.8rem;}
			.billboard--billboard--3-fQr .billboard--content-box--JtXUJ p{font-family:'Montserrat', sans-serif;font-weight:400;line-height:1.4;font-size:1.6rem;}
			}

			@media only screen and (max-width: 600px) {
			  .elementor-1953 .elementor-element.elementor-element-1411d0a .thm-heading-title{
			  	font-size: 25px;
			  }
			  .elementor-1953 .elementor-element.elementor-element-eb4719c .thm-heading-title{
			  	font-size: 25px;
			  }
			  .elementor-1953 .elementor-element.elementor-element-1a1c7d5 .thm-heading-title{
			  	font-size: 25px;
			  }

			  .elementor-1953 .elementor-element.elementor-element-3e36572 .thm-heading-title{
			  	font-size: 25px;
			  }
			  .elementor-1953 .elementor-element.elementor-element-e4987d7 .thm-heading-title{
			  	font-size: 25px;
			  }

			  .elementor-1953 .elementor-element.elementor-element-e4987d7 .sub-title-content{
			  	padding: 0px 15px 30px 15px;
			    font-size: 16px;
			    text-align: justify;
			  }
			  .query{
			  	padding: 32px 0px !important;
			  }
			}
    </style>


        <section id="main" class="clearfix">
            <div id="content" class="site-content" role="main">

                <div id="post-1953" class="post-1953 page type-page status-publish hentry">


                    <div class="entry-content">
                        <div data-elementor-type="post" data-elementor-id="1953" class="elementor elementor-1953 elementor-bc-flex-widget" data-elementor-settings="[]">
                            <div class="elementor-inner">
                                <div class="elementor-section-wrap">

                                    <!--slider-->
                                    <div class="ud-component--logged-out-home--billboard"
                                      data-component-props="{&quot;image&quot;:&quot;https://img-b.udemycdn.com/notices/home_banner/image/048e0cdc-3e71-47dc-ae30-e9ac7a3504b5.jpg&quot;,&quot;title_responsive&quot;:&quot;Apprenez \u00e0 votre rythme&quot;,&quot;image_responsive&quot;:&quot;https://img-b.udemycdn.com/notices/home_banner/image_responsive/f9cd7c14-72c2-48a4-908f-917ec4d2150f.jpg&quot;,&quot;image_udlite&quot;:&quot;https://img-b.udemycdn.com/notices/home_banner/image_udlite/7cf844b2-4371-45ea-9ef5-e10ea212eac2.jpg&quot;,&quot;subtitle_responsive&quot;:&quot;\u00c9tudiez \u00e0 tout moment le sujet que vous souhaitez. Faites d\u00e8s maintenant votre choix parmi des milliers de cours enseign\u00e9s par des formateurs confirm\u00e9s.&quot;,&quot;id&quot;:8310,&quot;image_responsive_udlite&quot;:&quot;https://img-b.udemycdn.com/notices/home_banner/image_responsive_udlite/772d511b-f5ff-4d43-8b27-1fab0560d0e5.jpg&quot;,&quot;title&quot;:&quot;Apprenez \u00e0 votre rythme&quot;,&quot;url&quot;:&quot;&quot;,&quot;subtitle&quot;:&quot;\u00c9tudiez \u00e0 tout moment le sujet que vous souhaitez. Faites d\u00e8s maintenant votre choix parmi des milliers de cours enseign\u00e9s par des formateurs confirm\u00e9s.&quot;}"
                                      ng-non-bindable="">
                                        <div data-purpose="billboard" class="billboard--billboard--3-fQr" data-reactroot="">
                                            <div class="billboard--image-container--2JRqQ"><img src="/assets/imgs/bannerbusinessensemble.png" width="1340" height="400" alt=""></div>
                                            <div class="billboard--content-box--JtXUJ">
                                                <h1 style="font-size: 2rem;">Bienvenue sur Business Ensemble</h1>
                                                <p style="font-size: 1.5rem;">
                                                    Première plateforme dédiée à la mise en relation entre porteur de projet et investisseur, spécialiste de l’investissement digital
                                                </p>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="ud-component--logged-out-home--value-props" data-component-props="{&quot;className&quot;:&quot;transfer_billboard_margin&quot;,&quot;type&quot;:&quot;lohp_value_props&quot;}" ng-non-bindable="">
                                        <div class="discovery-unit-empty-render" data-reactroot=""></div>
                                    </div>


                                    <section class="elementor-element elementor-element-3uh2bpk elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="3uh2bpk"
                                      data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-ae2mfvy elementor-column elementor-col-100 elementor-top-column" data-id="ae2mfvy" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-eb4719c elementor-widget elementor-widget-thm-title" data-id="eb4719c" data-element_type="widget" data-widget_type="thm-title.default">
                                                                <div class="elementor-widget-container">

                                                                    <div class="backnow-title-content-wrapper">

                                                                        <h2 class="thm-heading-title">Nos projets par catégorie</h2>
                                                                        <p class="sub-title-content">Naviguez parmi nos projets disponibles</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-3240490 elementor-widget elementor-widget-backnow-product-tab" data-id="3240490" data-element_type="widget"
                                                              data-widget_type="backnow-product-tab.default">
                                                                <div class="elementor-widget-container">

                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <ul class="nav themeum-tab-navigation justify-content-center">

                                                                                @foreach($categories as $category)
                                                                                @if(count($category->annonces) > 0)
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" href="#{{$category->id}}" data-toggle="pill">{{$category->name}}</a>
                                                                                </li>
                                                                                @endif
                                                                                @endforeach

                                                                            </ul>
                                                                        </div>
                                                                        <!--/.col-12-->

                                                                        <div class="col-12">
                                                                            <div class="tab-content" id="pills-tabContent">
                                                                                @foreach($categories as $category)
                                                                                @if(count($category->annonces) > 0)
                                                                                <div class="tab-pane fade {{$loop->first ? 'active show' : ''}}" id="{{$category->id}}">





                                                                                    <div class="row">

                                                                                        <div class="col-lg-4">
                                                                                            <div class="themeum-tab-inner d-flex align-items-center">
                                                                                                <div class="themeum-tab-category">
                                                                                                    <div class="thm-cat-icon" style="color:#{{$category->icon_color}}"><i class="fas {{$category->icon}}"></i></div>
                                                                                                    <h3 class="crowd-cat-title"><a href="{{url('categories', $category)}}" data-hcolor="#33d3c0">{{ucfirst($category->name)}}</a></h3>
                                                                                                    <h6>{{count($category->annonces)}}+ Projets</h6>
                                                                                                    <!--
                                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ulla ultrices</p>
                                                                                                -->
                                                                                                    <a href="{{url('categories', $category)}}"
                                                                                                      class="thm-btn" data-catbg="#33d3c0" style="color:#fff;background:#{{$category->icon_color}};border-color:#{{$category->icon_color}}">Voir tous les projets</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--col-lg-4-->

                                                                                        <div class="col-lg-8">
                                                                                            <div class="themeum-tab-inner d-flex align-items-center">
                                                                                                <div class="clearfix">
                                                                                                    <div class="row align-items-center">

                                                                                                        <div class="col-sm-6">
                                                                                                            <div class="thm-tab-content text-left">
                                                                                                                <div class="themeum-campaign-tab-post">
                                                                                                                    <div class="themeum-campaign-post-content clearfix">
                                                                                                                        <h3 class="entry-title">
                                                                                                                            <a href="{{url('annonces', $category->annonces->first())}}">
                                                                                                                                {{$category->annonces->first()->name}}
                                                                                                                            </a>
                                                                                                                        </h3>
                                                                                                                        <p>{{$category->annonces->first()->short_description}} </p>
                                                                                                                    </div>
                                                                                                                    <div class="progressbar-content-wrapper">
                                                                                                                        <div class="thm-progress-bar">
                                                                                                                            <div class="lead">
                                                                                                                                <span class="thm-Price-amount">
                                                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">FCFA</span>{{$category->annonces->first()->previous_raising_amount}}</span> </span>
                                                                                                                                <span class="thm-raise-sp">
                                                                                                                                    Levés
                                                                                                                                </span>
                                                                                                                                <div class="thm-meta-desc pull-right text-right">
                                                                                                                                    <span class="thm-Price-amount">
                                                                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">FCFA</span>{{$category->annonces->first()->raising_amount}}</span>
                                                                                                                                    </span>
                                                                                                                                    <span class="thm-raise-sp">
                                                                                                                                        Objectif
                                                                                                                                    </span>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="progress">
                                                                                                                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="64.29"
                                                                                                                                  style="width: 64.29%;"></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="themeum-campaign-author">
                                                                                                                        <div class="themeum-camp-author clearfix">
                                                                                                                            <div class="themeum-author-img float-left">
                                                                                                                                <img alt="" src="/storage/images/users/{{$category->annonces->first()->logo}}"
                                                                                                                                  srcset="/storage/images/users/{{$category->annonces->first()->logo}} 2x"
                                                                                                                                  class="avatar avatar-40 photo" height="40" width="40"> </div>
                                                                                                                            <div class="themeum-author-dsc pull-left">
                                                                                                                                <a href="{{url('users', $category->annonces->first()->user)}}" class="wpneo-fund-modal-btn">{{$category->annonces->first()->user->name}}</a>

                                                                                                                                <span>{{$category->annonces->first()->country}}</span>
                                                                                                                            </div>
                                                                                                                            <div class="themeum-author-funded pull-right">
                                                                                                                                <h6>64.29%</h6>
                                                                                                                                <span>Achevés</span>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!--/.col-sm-6-->
                                                                                                        <div class="col-sm-6">
                                                                                                            <div class="themeum-campaign-img">
                                                                                                                <a class="review-item-image" href="{{url('annonces', $category->annonces->first())}}"><img width="600"
                                                                                                                      height="580" src="/storage/images/annonces/{{$category->annonces->first()->logo}}"
                                                                                                                      class="img-fluid wp-post-image" alt=""></a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!--/.col-sm-6-->
                                                                                                    </div>
                                                                                                    <!--/.row-->
                                                                                                </div>
                                                                                                <!--/.clearfix-->
                                                                                            </div>
                                                                                            <!--/.themeum-tab-inner-->
                                                                                        </div>
                                                                                        <!--/.col-lg-8-->
                                                                                    </div>
                                                                                    <!--/.row-->

                                                                                    <!-- Modal Content | Author Info -->
                                                                                    <div class="modal fade wpneo-modal-wrapper" id="bioinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                                        <div class="modal-dialog" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="wpneo-modal-content">
                                                                                                    <div class="wpneo-modal-wrapper-head">
                                                                                                        <h4>About the campaign creator</h4>
                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                                    </div>

                                                                                                    <div class="wpneo-modal-content-inner">
                                                                                                        <div class="wpneo-profile-left">
                                                                                                            <img width="105" height="105" class="profile-avatar" src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/1065-IMG_2529.jpg"
                                                                                                              alt=""> </div>

                                                                                                        <div class="wpneo-profile-right">
                                                                                                            <div class="wpneo-profile-name">Fahim Murshaed</div>
                                                                                                            <div class="wpneo-profile-location backnow-location">
                                                                                                                <span class="backnow-meta-desc"><i class="back-placeholder"></i> Dhaka, Mirpur 1455</span>
                                                                                                            </div>

                                                                                                            <div class="wpneo-profile-campaigns">60 Campaigns | 0 Loved campaigns</div>
                                                                                                        </div>

                                                                                                        <div class="wpneo-profile-about">
                                                                                                            <h3>About</h3>
                                                                                                            <p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                                                                                                                "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."

                                                                                                                What is Lorem Ipsum?
                                                                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                                                                                                1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                                                                                                                also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                                                                                                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                                                                        </div>
                                                                                                        <div class="wpneo-profile-about">
                                                                                                            <h3>Portfolio</h3>
                                                                                                            <p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                                                                        </div>
                                                                                                        <div class="wpneo-profile-about">
                                                                                                            <h3>Contact Info</h3>
                                                                                                            <p>Email: rejuancse@gmail.com</p>
                                                                                                            <p>Phone: 01727424216</p>
                                                                                                            <p>Fax: 890989099</p>
                                                                                                            <p>Website: <a href="http://www.demosite.com"> http://www.demosite.com </a></p><a class="wpneo-profile-button" href="mailto:rejuancse@gmail.com"
                                                                                                              target="_top">Contact Me</a>
                                                                                                        </div>
                                                                                                        <div class="wpneo-profile-about">
                                                                                                            <h3>Social Link</h3><a class="wpneo-social-link" href="#"><i class="wpneo-icon wpneo-icon-facebook"></i></a><a class="wpneo-social-link" href="#"><i
                                                                                                                  class="wpneo-icon wpneo-icon-twitter"></i></a><a class="wpneo-social-link" href="#"><i class="wpneo-icon wpneo-icon-gplus"></i></a><a
                                                                                                              class="wpneo-social-link" href="#"><i class="wpneo-icon wpneo-icon-linkedin"></i></a><a class="wpneo-social-link" href="#"><i
                                                                                                                  class="wpneo-icon wpneo-icon-pinterest"></i></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>





                                                                                </div>
                                                                                @endif
                                                                                @endforeach
                                                                                <!--/.tab-pane-->

                                                                            </div>
                                                                            <!--/.tab-content-->
                                                                        </div>
                                                                        <!--/.col-12-->
                                                                    </div>
                                                                    <!--/.row-->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    {{--
                                    <section class="elementor-element elementor-element-ca48fd3 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="ca48fd3"
                                      data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-1a0d7b3 elementor-column elementor-col-100 elementor-top-column" data-id="1a0d7b3" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-1411d0a elementor-widget elementor-widget-thm-title" data-id="1411d0a" data-element_type="widget" data-widget_type="thm-title.default">
                                                                <div class="elementor-widget-container">

                                                                    <div class="backnow-title-content-wrapper">

                                                                        <h2 class="thm-heading-title">Nos projets recommandés pour vous</h2>
                                                                        <p class="sub-title-content">Découvrez les projets à fort potentiel.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-b3c10bd elementor-widget elementor-widget-backnow-product-grid" data-id="b3c10bd" data-element_type="widget"
                                                              data-widget_type="backnow-product-grid.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-6 thm-post-grid-col col-lg-4">
                                                                            <div class="themeum-campaign-post d-flex flex-wrap">
                                                                                <div class="clearfix">
                                                                                    <div class="themeum-campaign-img">
                                                                                        <a class="review-item-image" href="https://demo.themeum.com/wordpress/backnow/product/ashes-of-creation-new-mmorpg-by-intrepid-studios/"><img width="660" height="400"
                                                                                              src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/project36-660x400.jpg" class="img-fluid wp-post-image" alt=""></a>
                                                                                        <div class="thm-camp-hvr">
                                                                                            <div class="thm-ch-icon">
                                                                                                <i class="far fa-heart"></i>
                                                                                            </div>
                                                                                            <h4>Project You Love</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="themeum-campaign-post-content clearfix">
                                                                                        <a href="#" class="thm-love-btn " data-campaign="1860" data-user="0">
                                                                                            <i class="far fa-heart"></i>
                                                                                        </a>
                                                                                        <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/technology/" rel="tag">Technology</a></span>
                                                                                        <h3 class="entry-title">
                                                                                            <a href="https://demo.themeum.com/wordpress/backnow/product/ashes-of-creation-new-mmorpg-by-intrepid-studios/">
                                                                                                Ashes of Creation New MMORPG by Intrepid Studios </a>
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix align-self-end w-100">
                                                                                    <div class="progressbar-content-wrapper">
                                                                                        <div class="thm-progress-bar">
                                                                                            <div class="lead">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5,000.00</span> </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Raised
                                                                                                </span>
                                                                                                <div class="thm-meta-desc pull-right text-right">
                                                                                                    <span class="thm-Price-amount">
                                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8,500.00</span>
                                                                                                    </span>
                                                                                                    <span class="thm-raise-sp">
                                                                                                        Goal
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="progress">
                                                                                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="58.82" style="width: 58.82%;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="themeum-campaign-author">
                                                                                        <div class="themeum-camp-author clearfix">
                                                                                            <div class="themeum-author-img float-left">
                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=40&amp;d=mm&amp;r=g"
                                                                                                  srcset="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=80&amp;d=mm&amp;r=g 2x" class="avatar avatar-40 photo" height="40" width="40">
                                                                                            </div>
                                                                                            <div class="themeum-author-dsc pull-left">
                                                                                                <a data-toggle="modal" data-target="#bioinfo" href="#" class="wpneo-fund-modal-btn">admin</a>

                                                                                                <span>Sao Paolo, Road 12</span>
                                                                                            </div>
                                                                                            <div class="themeum-author-funded pull-right">
                                                                                                <h6>58.82%</h6>
                                                                                                <span>Funded</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 thm-post-grid-col col-lg-4">
                                                                            <div class="themeum-campaign-post d-flex flex-wrap">
                                                                                <div class="clearfix">
                                                                                    <div class="themeum-campaign-img">
                                                                                        <a class="review-item-image" href="https://demo.themeum.com/wordpress/backnow/product/dreamfall-chapters-the-longest-journey/"><img width="660" height="400"
                                                                                              src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/backit-product3-660x400.jpg" class="img-fluid wp-post-image" alt=""></a>
                                                                                        <div class="thm-camp-hvr">
                                                                                            <div class="thm-ch-icon">
                                                                                                <i class="far fa-heart"></i>
                                                                                            </div>
                                                                                            <h4>Project You Love</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="themeum-campaign-post-content clearfix">
                                                                                        <a href="#" class="thm-love-btn " data-campaign="1859" data-user="0">
                                                                                            <i class="far fa-heart"></i>
                                                                                        </a>
                                                                                        <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/clothing/" rel="tag">Clothing</a></span>
                                                                                        <h3 class="entry-title">
                                                                                            <a href="https://demo.themeum.com/wordpress/backnow/product/dreamfall-chapters-the-longest-journey/">
                                                                                                Dreamfall Chapters: The Longest Journey </a>
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix align-self-end w-100">
                                                                                    <div class="progressbar-content-wrapper">
                                                                                        <div class="thm-progress-bar">
                                                                                            <div class="lead">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,500.00</span> </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Raised
                                                                                                </span>
                                                                                                <div class="thm-meta-desc pull-right text-right">
                                                                                                    <span class="thm-Price-amount">
                                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>7,000.00</span>
                                                                                                    </span>
                                                                                                    <span class="thm-raise-sp">
                                                                                                        Goal
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="progress">
                                                                                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="64.29" style="width: 64.29%;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="themeum-campaign-author">
                                                                                        <div class="themeum-camp-author clearfix">
                                                                                            <div class="themeum-author-img float-left">
                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=40&amp;d=mm&amp;r=g"
                                                                                                  srcset="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=80&amp;d=mm&amp;r=g 2x" class="avatar avatar-40 photo" height="40" width="40">
                                                                                            </div>
                                                                                            <div class="themeum-author-dsc pull-left">
                                                                                                <a data-toggle="modal" data-target="#bioinfo" href="#" class="wpneo-fund-modal-btn">admin</a>

                                                                                                <span>Nagasaki, Road 8</span>
                                                                                            </div>
                                                                                            <div class="themeum-author-funded pull-right">
                                                                                                <h6>64.29%</h6>
                                                                                                <span>Funded</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 thm-post-grid-col col-lg-4">
                                                                            <div class="themeum-campaign-post d-flex flex-wrap">
                                                                                <div class="clearfix">
                                                                                    <div class="themeum-campaign-img">
                                                                                        <a class="review-item-image" href="https://demo.themeum.com/wordpress/backnow/product/shroud-of-the-avatar-forsaken-virtues-machine/"><img width="660" height="400"
                                                                                              src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/project30-660x400.jpg" class="img-fluid wp-post-image" alt=""></a>
                                                                                        <div class="thm-camp-hvr">
                                                                                            <div class="thm-ch-icon">
                                                                                                <i class="far fa-heart"></i>
                                                                                            </div>
                                                                                            <h4>Project You Love</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="themeum-campaign-post-content clearfix">
                                                                                        <a href="#" class="thm-love-btn " data-campaign="1858" data-user="0">
                                                                                            <i class="far fa-heart"></i>
                                                                                        </a>
                                                                                        <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/crafts/" rel="tag">Crafts</a></span>
                                                                                        <h3 class="entry-title">
                                                                                            <a href="https://demo.themeum.com/wordpress/backnow/product/shroud-of-the-avatar-forsaken-virtues-machine/">
                                                                                                Shroud of the Avatar: Forsaken Virtues machine </a>
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix align-self-end w-100">
                                                                                    <div class="progressbar-content-wrapper">
                                                                                        <div class="thm-progress-bar">
                                                                                            <div class="lead">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5,000.00</span> </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Raised
                                                                                                </span>
                                                                                                <div class="thm-meta-desc pull-right text-right">
                                                                                                    <span class="thm-Price-amount">
                                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>7,000.00</span>
                                                                                                    </span>
                                                                                                    <span class="thm-raise-sp">
                                                                                                        Goal
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="progress">
                                                                                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="71.43" style="width: 71.43%;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="themeum-campaign-author">
                                                                                        <div class="themeum-camp-author clearfix">
                                                                                            <div class="themeum-author-img float-left">
                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=40&amp;d=mm&amp;r=g"
                                                                                                  srcset="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=80&amp;d=mm&amp;r=g 2x" class="avatar avatar-40 photo" height="40" width="40">
                                                                                            </div>
                                                                                            <div class="themeum-author-dsc pull-left">
                                                                                                <a data-toggle="modal" data-target="#bioinfo" href="#" class="wpneo-fund-modal-btn">admin</a>

                                                                                                <span>Central Road 23</span>
                                                                                            </div>
                                                                                            <div class="themeum-author-funded pull-right">
                                                                                                <h6>71.43%</h6>
                                                                                                <span>Funded</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 thm-post-grid-col col-lg-4">
                                                                            <div class="themeum-campaign-post d-flex flex-wrap">
                                                                                <div class="clearfix">
                                                                                    <div class="themeum-campaign-img">
                                                                                        <a class="review-item-image" href="https://demo.themeum.com/wordpress/backnow/product/battletech-tactical-mech-combat-returns-to-the-pc/"><img width="660" height="400"
                                                                                              src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/project29-660x400.jpg" class="img-fluid wp-post-image" alt=""></a>
                                                                                        <div class="thm-camp-hvr">
                                                                                            <div class="thm-ch-icon">
                                                                                                <i class="far fa-heart"></i>
                                                                                            </div>
                                                                                            <h4>Project You Love</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="themeum-campaign-post-content clearfix">
                                                                                        <a href="#" class="thm-love-btn " data-campaign="1857" data-user="0">
                                                                                            <i class="far fa-heart"></i>
                                                                                        </a>
                                                                                        <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/design/" rel="tag">Design</a></span>
                                                                                        <h3 class="entry-title">
                                                                                            <a href="https://demo.themeum.com/wordpress/backnow/product/battletech-tactical-mech-combat-returns-to-the-pc/">
                                                                                                BATTLETECH – Tactical ‘Mech Combat Returns </a>
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix align-self-end w-100">
                                                                                    <div class="progressbar-content-wrapper">
                                                                                        <div class="thm-progress-bar">
                                                                                            <div class="lead">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5,000.00</span> </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Raised
                                                                                                </span>
                                                                                                <div class="thm-meta-desc pull-right text-right">
                                                                                                    <span class="thm-Price-amount">
                                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6,000.00</span>
                                                                                                    </span>
                                                                                                    <span class="thm-raise-sp">
                                                                                                        Goal
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="progress">
                                                                                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="83.33" style="width: 83.33%;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="themeum-campaign-author">
                                                                                        <div class="themeum-camp-author clearfix">
                                                                                            <div class="themeum-author-img float-left">
                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=40&amp;d=mm&amp;r=g"
                                                                                                  srcset="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=80&amp;d=mm&amp;r=g 2x" class="avatar avatar-40 photo" height="40" width="40">
                                                                                            </div>
                                                                                            <div class="themeum-author-dsc pull-left">
                                                                                                <a data-toggle="modal" data-target="#bioinfo" href="#" class="wpneo-fund-modal-btn">admin</a>

                                                                                                <span>Ment Road 23</span>
                                                                                            </div>
                                                                                            <div class="themeum-author-funded pull-right">
                                                                                                <h6>83.33%</h6>
                                                                                                <span>Funded</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 thm-post-grid-col col-lg-4">
                                                                            <div class="themeum-campaign-post d-flex flex-wrap">
                                                                                <div class="clearfix">
                                                                                    <div class="themeum-campaign-img">
                                                                                        <a class="review-item-image" href="https://demo.themeum.com/wordpress/backnow/product/planetary-annihilation-a-next-generation-rts/"><img width="660" height="400"
                                                                                              src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/project24-660x400.jpg" class="img-fluid wp-post-image" alt=""></a>
                                                                                        <div class="thm-camp-hvr">
                                                                                            <div class="thm-ch-icon">
                                                                                                <i class="far fa-heart"></i>
                                                                                            </div>
                                                                                            <h4>Project You Love</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="themeum-campaign-post-content clearfix">
                                                                                        <a href="#" class="thm-love-btn " data-campaign="1856" data-user="0">
                                                                                            <i class="far fa-heart"></i>
                                                                                        </a>
                                                                                        <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/flim-video/" rel="tag">Film &amp; Video</a></span>
                                                                                        <h3 class="entry-title">
                                                                                            <a href="https://demo.themeum.com/wordpress/backnow/product/planetary-annihilation-a-next-generation-rts/">
                                                                                                Planetary Annihilation – A Next Generation RTS </a>
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix align-self-end w-100">
                                                                                    <div class="progressbar-content-wrapper">
                                                                                        <div class="thm-progress-bar">
                                                                                            <div class="lead">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,500.00</span> </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Raised
                                                                                                </span>
                                                                                                <div class="thm-meta-desc pull-right text-right">
                                                                                                    <span class="thm-Price-amount">
                                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>7,000.00</span>
                                                                                                    </span>
                                                                                                    <span class="thm-raise-sp">
                                                                                                        Goal
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="progress">
                                                                                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="64.29" style="width: 64.29%;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="themeum-campaign-author">
                                                                                        <div class="themeum-camp-author clearfix">
                                                                                            <div class="themeum-author-img float-left">
                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=40&amp;d=mm&amp;r=g"
                                                                                                  srcset="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=80&amp;d=mm&amp;r=g 2x" class="avatar avatar-40 photo" height="40" width="40">
                                                                                            </div>
                                                                                            <div class="themeum-author-dsc pull-left">
                                                                                                <a data-toggle="modal" data-target="#bioinfo" href="#" class="wpneo-fund-modal-btn">admin</a>

                                                                                                <span>Central Road 23</span>
                                                                                            </div>
                                                                                            <div class="themeum-author-funded pull-right">
                                                                                                <h6>64.29%</h6>
                                                                                                <span>Funded</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 thm-post-grid-col col-lg-4">
                                                                            <div class="themeum-campaign-post d-flex flex-wrap">
                                                                                <div class="clearfix">
                                                                                    <div class="themeum-campaign-img">
                                                                                        <a class="review-item-image" href="https://demo.themeum.com/wordpress/backnow/product/yooka-laylee-a-3d-platformer-rare-vival/"><img width="660" height="400"
                                                                                              src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/backit-product11-660x400.jpg" class="img-fluid wp-post-image" alt=""></a>
                                                                                        <div class="thm-camp-hvr">
                                                                                            <div class="thm-ch-icon">
                                                                                                <i class="far fa-heart"></i>
                                                                                            </div>
                                                                                            <h4>Project You Love</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="themeum-campaign-post-content clearfix">
                                                                                        <a href="#" class="thm-love-btn " data-campaign="1855" data-user="0">
                                                                                            <i class="far fa-heart"></i>
                                                                                        </a>
                                                                                        <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/journalism/" rel="tag">Journalism</a></span>
                                                                                        <h3 class="entry-title">
                                                                                            <a href="https://demo.themeum.com/wordpress/backnow/product/yooka-laylee-a-3d-platformer-rare-vival/">
                                                                                                Yooka-Laylee – A 3D Platformer Rare-vival! </a>
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix align-self-end w-100">
                                                                                    <div class="progressbar-content-wrapper">
                                                                                        <div class="thm-progress-bar">
                                                                                            <div class="lead">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5,000.00</span> </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Raised
                                                                                                </span>
                                                                                                <div class="thm-meta-desc pull-right text-right">
                                                                                                    <span class="thm-Price-amount">
                                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6,000.00</span>
                                                                                                    </span>
                                                                                                    <span class="thm-raise-sp">
                                                                                                        Goal
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="progress">
                                                                                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="83.33" style="width: 83.33%;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="themeum-campaign-author">
                                                                                        <div class="themeum-camp-author clearfix">
                                                                                            <div class="themeum-author-img float-left">
                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=40&amp;d=mm&amp;r=g"
                                                                                                  srcset="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=80&amp;d=mm&amp;r=g 2x" class="avatar avatar-40 photo" height="40" width="40">
                                                                                            </div>
                                                                                            <div class="themeum-author-dsc pull-left">
                                                                                                <a data-toggle="modal" data-target="#bioinfo" href="#" class="wpneo-fund-modal-btn">admin</a>

                                                                                                <span>Ment Road 23</span>
                                                                                            </div>
                                                                                            <div class="themeum-author-funded pull-right">
                                                                                                <h6>83.33%</h6>
                                                                                                <span>Funded</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <!-- Modal Content | Author Info -->
                                                                        <div class="modal fade wpneo-modal-wrapper" id="bioinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="wpneo-modal-content">
                                                                                        <div class="wpneo-modal-wrapper-head">
                                                                                            <h4>About the campaign creator</h4>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                        </div>

                                                                                        <div class="wpneo-modal-content-inner">
                                                                                            <div class="wpneo-profile-left">
                                                                                            </div>

                                                                                            <div class="wpneo-profile-right">
                                                                                                <div class="wpneo-profile-name">Fahim Murshaed</div>
                                                                                                <div class="wpneo-profile-campaigns">60 Campaigns | 0 Loved campaigns</div>
                                                                                            </div>

                                                                                            <div class="wpneo-profile-about">
                                                                                                <h3>Contact Info</h3>
                                                                                            </div>
                                                                                            <div class="wpneo-profile-about">
                                                                                                <h3>Social Link</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-12">
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-element elementor-element-d353674 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="d353674"
                                      data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-6053003 elementor-column elementor-col-100 elementor-top-column" data-id="6053003" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-1a1c7d5 elementor-widget elementor-widget-thm-title" data-id="1a1c7d5" data-element_type="widget" data-widget_type="thm-title.default">
                                                                <div class="elementor-widget-container">

                                                                    <div class="backnow-title-content-wrapper">

                                                                        <h2 class="thm-heading-title">Les plus populaires</h2>
                                                                        <p class="sub-title-content">Découvrez les projets les plus appréciés par les investisseurs</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-9fead22 elementor-widget elementor-widget-backnow-product-grid" data-id="9fead22" data-element_type="widget"
                                                              data-widget_type="backnow-product-grid.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-6 thm-post-grid-col col-lg-4">
                                                                            <div class="themeum-campaign-post d-flex flex-wrap">
                                                                                <div class="clearfix">
                                                                                    <div class="themeum-campaign-img">
                                                                                        <a class="review-item-image" href="https://demo.themeum.com/wordpress/backnow/product/dreamfall-chapters-the-longest-journey/"><img width="660" height="400"
                                                                                              src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/backit-product3-660x400.jpg" class="img-fluid wp-post-image" alt=""></a>
                                                                                        <div class="thm-camp-hvr">
                                                                                            <div class="thm-ch-icon">
                                                                                                <i class="far fa-heart"></i>
                                                                                            </div>
                                                                                            <h4>Project You Love</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="themeum-campaign-post-content clearfix">
                                                                                        <a href="#" class="thm-love-btn " data-campaign="1859" data-user="0">
                                                                                            <i class="far fa-heart"></i>
                                                                                        </a>
                                                                                        <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/clothing/" rel="tag">Clothing</a></span>
                                                                                        <h3 class="entry-title">
                                                                                            <a href="https://demo.themeum.com/wordpress/backnow/product/dreamfall-chapters-the-longest-journey/">
                                                                                                Dreamfall Chapters: The Longest Journey </a>
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix align-self-end w-100">
                                                                                    <div class="progressbar-content-wrapper">
                                                                                        <div class="thm-progress-bar">
                                                                                            <div class="lead">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,500.00</span> </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Raised
                                                                                                </span>
                                                                                                <div class="thm-meta-desc pull-right text-right">
                                                                                                    <span class="thm-Price-amount">
                                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>7,000.00</span>
                                                                                                    </span>
                                                                                                    <span class="thm-raise-sp">
                                                                                                        Goal
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="progress">
                                                                                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="64.29" style="width: 64.29%;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="themeum-campaign-author">
                                                                                        <div class="themeum-camp-author clearfix">
                                                                                            <div class="themeum-author-img float-left">
                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=40&amp;d=mm&amp;r=g"
                                                                                                  srcset="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=80&amp;d=mm&amp;r=g 2x" class="avatar avatar-40 photo" height="40" width="40">
                                                                                            </div>
                                                                                            <div class="themeum-author-dsc pull-left">
                                                                                                <a data-toggle="modal" data-target="#bioinfo" href="#" class="wpneo-fund-modal-btn">admin</a>

                                                                                                <span>Nagasaki, Road 8</span>
                                                                                            </div>
                                                                                            <div class="themeum-author-funded pull-right">
                                                                                                <h6>64.29%</h6>
                                                                                                <span>Funded</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 thm-post-grid-col col-lg-4">
                                                                            <div class="themeum-campaign-post d-flex flex-wrap">
                                                                                <div class="clearfix">
                                                                                    <div class="themeum-campaign-img">
                                                                                        <a class="review-item-image" href="https://demo.themeum.com/wordpress/backnow/product/ashes-of-creation-new-mmorpg-by-intrepid-studios/"><img width="660" height="400"
                                                                                              src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/project36-660x400.jpg" class="img-fluid wp-post-image" alt=""></a>
                                                                                        <div class="thm-camp-hvr">
                                                                                            <div class="thm-ch-icon">
                                                                                                <i class="far fa-heart"></i>
                                                                                            </div>
                                                                                            <h4>Project You Love</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="themeum-campaign-post-content clearfix">
                                                                                        <a href="#" class="thm-love-btn " data-campaign="1860" data-user="0">
                                                                                            <i class="far fa-heart"></i>
                                                                                        </a>
                                                                                        <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/technology/" rel="tag">Technology</a></span>
                                                                                        <h3 class="entry-title">
                                                                                            <a href="https://demo.themeum.com/wordpress/backnow/product/ashes-of-creation-new-mmorpg-by-intrepid-studios/">
                                                                                                Ashes of Creation New MMORPG by Intrepid Studios </a>
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix align-self-end w-100">
                                                                                    <div class="progressbar-content-wrapper">
                                                                                        <div class="thm-progress-bar">
                                                                                            <div class="lead">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5,000.00</span> </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Raised
                                                                                                </span>
                                                                                                <div class="thm-meta-desc pull-right text-right">
                                                                                                    <span class="thm-Price-amount">
                                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8,500.00</span>
                                                                                                    </span>
                                                                                                    <span class="thm-raise-sp">
                                                                                                        Goal
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="progress">
                                                                                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="58.82" style="width: 58.82%;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="themeum-campaign-author">
                                                                                        <div class="themeum-camp-author clearfix">
                                                                                            <div class="themeum-author-img float-left">
                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=40&amp;d=mm&amp;r=g"
                                                                                                  srcset="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=80&amp;d=mm&amp;r=g 2x" class="avatar avatar-40 photo" height="40" width="40">
                                                                                            </div>
                                                                                            <div class="themeum-author-dsc pull-left">
                                                                                                <a data-toggle="modal" data-target="#bioinfo" href="#" class="wpneo-fund-modal-btn">admin</a>

                                                                                                <span>Sao Paolo, Road 12</span>
                                                                                            </div>
                                                                                            <div class="themeum-author-funded pull-right">
                                                                                                <h6>58.82%</h6>
                                                                                                <span>Funded</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 thm-post-grid-col col-lg-4">
                                                                            <div class="themeum-campaign-post d-flex flex-wrap">
                                                                                <div class="clearfix">
                                                                                    <div class="themeum-campaign-img">
                                                                                        <a class="review-item-image" href="https://demo.themeum.com/wordpress/backnow/product/illustrated-classics-by-ponem-shimizu-sienkie/"><img width="660" height="400"
                                                                                              src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2014/08/project27-660x400.jpg" class="img-fluid wp-post-image" alt=""></a>
                                                                                        <div class="thm-camp-hvr">
                                                                                            <div class="thm-ch-icon">
                                                                                                <i class="far fa-heart"></i>
                                                                                            </div>
                                                                                            <h4>Project You Love</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="themeum-campaign-post-content clearfix">
                                                                                        <a href="#" class="thm-love-btn " data-campaign="770" data-user="0">
                                                                                            <i class="far fa-heart"></i>
                                                                                        </a>
                                                                                        <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/clothing/" rel="tag">Clothing</a></span>
                                                                                        <h3 class="entry-title">
                                                                                            <a href="https://demo.themeum.com/wordpress/backnow/product/illustrated-classics-by-ponem-shimizu-sienkie/">
                                                                                                Illustrated Classics by Ponem Shimizu &amp; Sienkie </a>
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix align-self-end w-100">
                                                                                    <div class="progressbar-content-wrapper">
                                                                                        <div class="thm-progress-bar">
                                                                                            <div class="lead">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0.00</span> </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Raised
                                                                                                </span>
                                                                                                <div class="thm-meta-desc pull-right text-right">
                                                                                                    <span class="thm-Price-amount">
                                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8,900.00</span>
                                                                                                    </span>
                                                                                                    <span class="thm-raise-sp">
                                                                                                        Goal
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="progress">
                                                                                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="0" style="width: 0%;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="themeum-campaign-author">
                                                                                        <div class="themeum-camp-author clearfix">
                                                                                            <div class="themeum-author-img float-left">
                                                                                                <img alt="" src="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=40&amp;d=mm&amp;r=g"
                                                                                                  srcset="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=80&amp;d=mm&amp;r=g 2x" class="avatar avatar-40 photo" height="40" width="40">
                                                                                            </div>
                                                                                            <div class="themeum-author-dsc pull-left">
                                                                                                <a data-toggle="modal" data-target="#bioinfo" href="#" class="wpneo-fund-modal-btn">admin</a>

                                                                                                <span>Frankfood, 23 Street</span>
                                                                                            </div>
                                                                                            <div class="themeum-author-funded pull-right">
                                                                                                <h6>0%</h6>
                                                                                                <span>Funded</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <!-- Modal Content | Author Info -->
                                                                        <div class="modal fade wpneo-modal-wrapper" id="bioinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="wpneo-modal-content">
                                                                                        <div class="wpneo-modal-wrapper-head">
                                                                                            <h4>About the campaign creator</h4>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                                        </div>

                                                                                        <div class="wpneo-modal-content-inner">
                                                                                            <div class="wpneo-profile-left">
                                                                                            </div>

                                                                                            <div class="wpneo-profile-right">
                                                                                                <div class="wpneo-profile-name">Fahim Murshaed</div>
                                                                                                <div class="wpneo-profile-campaigns">60 Campaigns | 0 Loved campaigns</div>
                                                                                            </div>

                                                                                            <div class="wpneo-profile-about">
                                                                                                <h3>Contact Info</h3>
                                                                                            </div>
                                                                                            <div class="wpneo-profile-about">
                                                                                                <h3>Social Link</h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-12">
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    --}}

                                    <section class="elementor-element elementor-element-76cfba3 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="76cfba3"
                                      data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-9ba7665 elementor-column elementor-col-100 elementor-top-column" data-id="9ba7665" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-3e36572 elementor-widget elementor-widget-thm-title" data-id="3e36572" data-element_type="widget" data-widget_type="thm-title.default">
                                                                <div class="elementor-widget-container">

                                                                    <div class="backnow-title-content-wrapper">

                                                                        <h2 class="thm-heading-title">Secteur recherché</h2>
                                                                        <p class="sub-title-content">Secteur concerné</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-element elementor-element-5b10e73 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="5b10e73"
                                      data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-8eb8907 elementor-column elementor-col-33 elementor-top-column" data-id="8eb8907" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-c101f87 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="c101f87"
                                                              data-element_type="widget" data-widget_type="icon-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-">
                                                                                <i class="fas fa-assistive-listening-systems"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h5 class="elementor-icon-box-title">
                                                                                <span>Secteur 1</span>
                                                                            </h5>
                                                                            <p class="elementor-icon-box-description">Multimédia, Immobilier, Agriculture, Alimentation</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3210aaa elementor-column elementor-col-33 elementor-top-column" data-id="3210aaa" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-32ae4d5 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="32ae4d5"
                                                              data-element_type="widget" data-widget_type="icon-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-">
                                                                                <i class="fab fa-gg"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h5 class="elementor-icon-box-title">
                                                                                <span>Secteur 2</span>
                                                                            </h5>
                                                                            <p class="elementor-icon-box-description">Santé, Mode Matériel professionnel</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d899019 elementor-column elementor-col-33 elementor-top-column" data-id="d899019" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-ab39082 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="ab39082"
                                                              data-element_type="widget" data-widget_type="icon-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
                                                                            <span class="elementor-icon elementor-animation-">
                                                                                <i class="far fa-sun"></i> </span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h5 class="elementor-icon-box-title">
                                                                                <span>Secteur 3</span>
                                                                            </h5>
                                                                            <p class="elementor-icon-box-description">Innovation technologiques etc…</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-element elementor-element-6dbcf51 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="6dbcf51"
                                      data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-075e5aa elementor-column elementor-col-100 elementor-top-column" data-id="075e5aa" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-6350e80 elementor-widget elementor-widget-thm-title" data-id="6350e80" data-element_type="widget" data-widget_type="thm-title.default">
                                                                <div class="elementor-widget-container">

                                                                    <div class="backnow-title-content-wrapper">

                                                                        <h2 class="thm-heading-title">Back Before The Time Expires</h2>
                                                                        <p class="sub-title-content">Skin Cancer Prevention 5 Ways To Protect Yourself From Uv Rays</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-00dc245 elementor-widget elementor-widget-crowdfunding-time-expires" data-id="00dc245" data-element_type="widget"
                                                              data-widget_type="crowdfunding-time-expires.default">
                                                                <div class="elementor-widget-container">


                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-lg-6">


                                                                            <div class="themeum-campaign-time-exp clearfix">
                                                                                <div class="themeum-campaign-thumb" style="background-image: url('https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/project36.jpg');"></div>



                                                                                <div class="themeum-campaign-exp-content">
                                                                                    <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/technology/" rel="tag">Technology</a></span>
                                                                                    <h3 class="entry-title"><a href="https://demo.themeum.com/wordpress/backnow/product/ashes-of-creation-new-mmorpg-by-intrepid-studios/">Ashes of Creation New MMORPG by
                                                                                            Intrepid Studios</a></h3>


                                                                                    <div class="campaign-counter themeum-campaign-exp-counter clearfix" data-date="2019/11/23">

                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-days counter-days">0</span>
                                                                                            <span class="countdown-period">DAYS</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-hours counter-hours">0</span>
                                                                                            <span class="countdown-period">HRS</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-minutes counter-minutes">0</span>
                                                                                            <span class="countdown-period">MIN</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-seconds counter-seconds">0</span>
                                                                                            <span class="countdown-period">SEC</span>
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="thm-progress-bar">
                                                                                        <div class="lead">
                                                                                            <span class="thm-Price-amount">
                                                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5,000.00</span> </span>
                                                                                            <span class="thm-raise-sp">
                                                                                                Raised
                                                                                            </span>
                                                                                            <div class="thm-meta-desc pull-right text-right">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8,500.00</span>
                                                                                                </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Goal
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="58.82" style="width: 58.82%;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-lg-6">


                                                                            <div class="themeum-campaign-time-exp clearfix">
                                                                                <div class="themeum-campaign-thumb" style="background-image: url('https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/backit-product3.jpg');"></div>



                                                                                <div class="themeum-campaign-exp-content">
                                                                                    <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/clothing/" rel="tag">Clothing</a></span>
                                                                                    <h3 class="entry-title"><a href="https://demo.themeum.com/wordpress/backnow/product/dreamfall-chapters-the-longest-journey/">Dreamfall Chapters: The Longest Journey</a></h3>


                                                                                    <div class="campaign-counter themeum-campaign-exp-counter clearfix" data-date="2020/03/28">

                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-days counter-days">0</span>
                                                                                            <span class="countdown-period">DAYS</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-hours counter-hours">0</span>
                                                                                            <span class="countdown-period">HRS</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-minutes counter-minutes">0</span>
                                                                                            <span class="countdown-period">MIN</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-seconds counter-seconds">0</span>
                                                                                            <span class="countdown-period">SEC</span>
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="thm-progress-bar">
                                                                                        <div class="lead">
                                                                                            <span class="thm-Price-amount">
                                                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,500.00</span> </span>
                                                                                            <span class="thm-raise-sp">
                                                                                                Raised
                                                                                            </span>
                                                                                            <div class="thm-meta-desc pull-right text-right">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>7,000.00</span>
                                                                                                </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Goal
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="64.29" style="width: 64.29%;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-lg-6">


                                                                            <div class="themeum-campaign-time-exp clearfix">
                                                                                <div class="themeum-campaign-thumb" style="background-image: url('https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/project30.jpg');"></div>



                                                                                <div class="themeum-campaign-exp-content">
                                                                                    <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/crafts/" rel="tag">Crafts</a></span>
                                                                                    <h3 class="entry-title"><a href="https://demo.themeum.com/wordpress/backnow/product/shroud-of-the-avatar-forsaken-virtues-machine/">Shroud of the Avatar: Forsaken Virtues
                                                                                            machine</a></h3>


                                                                                    <div class="campaign-counter themeum-campaign-exp-counter clearfix" data-date="2020/01/31">

                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-days counter-days">0</span>
                                                                                            <span class="countdown-period">DAYS</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-hours counter-hours">0</span>
                                                                                            <span class="countdown-period">HRS</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-minutes counter-minutes">0</span>
                                                                                            <span class="countdown-period">MIN</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-seconds counter-seconds">0</span>
                                                                                            <span class="countdown-period">SEC</span>
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="thm-progress-bar">
                                                                                        <div class="lead">
                                                                                            <span class="thm-Price-amount">
                                                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5,000.00</span> </span>
                                                                                            <span class="thm-raise-sp">
                                                                                                Raised
                                                                                            </span>
                                                                                            <div class="thm-meta-desc pull-right text-right">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>7,000.00</span>
                                                                                                </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Goal
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="71.43" style="width: 71.43%;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-lg-6">


                                                                            <div class="themeum-campaign-time-exp clearfix">
                                                                                <div class="themeum-campaign-thumb" style="background-image: url('https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/project29.jpg');"></div>



                                                                                <div class="themeum-campaign-exp-content">
                                                                                    <span class="entry-category"><a href="https://demo.themeum.com/wordpress/backnow/product-category/design/" rel="tag">Design</a></span>
                                                                                    <h3 class="entry-title"><a href="https://demo.themeum.com/wordpress/backnow/product/battletech-tactical-mech-combat-returns-to-the-pc/">BATTLETECH – Tactical ‘Mech Combat
                                                                                            Returns</a></h3>


                                                                                    <div class="campaign-counter themeum-campaign-exp-counter clearfix" data-date="2021/04/24">

                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-days counter-days">312</span>
                                                                                            <span class="countdown-period">DAYS</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-hours counter-hours">0</span>
                                                                                            <span class="countdown-period">HRS</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-minutes counter-minutes">21</span>
                                                                                            <span class="countdown-period">MIN</span>
                                                                                        </div>
                                                                                        <div class="counter-item">
                                                                                            <span class="countdown-seconds counter-seconds">3</span>
                                                                                            <span class="countdown-period">SEC</span>
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="thm-progress-bar">
                                                                                        <div class="lead">
                                                                                            <span class="thm-Price-amount">
                                                                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5,000.00</span> </span>
                                                                                            <span class="thm-raise-sp">
                                                                                                Raised
                                                                                            </span>
                                                                                            <div class="thm-meta-desc pull-right text-right">
                                                                                                <span class="thm-Price-amount">
                                                                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6,000.00</span>
                                                                                                </span>
                                                                                                <span class="thm-raise-sp">
                                                                                                    Goal
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="progress">
                                                                                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" data-valuetransitiongoal="83.33" style="width: 83.33%;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-element elementor-element-10866f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="10866f6"
                                      data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-305920c elementor-column elementor-col-100 elementor-top-column" data-id="305920c" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-e4987d7 elementor-widget elementor-widget-thm-title" data-id="e4987d7" data-element_type="widget" data-widget_type="thm-title.default">
                                                                <div class="elementor-widget-container">

                                                                    <div class="backnow-title-content-wrapper">

                                                                        <h2 class="thm-heading-title">Présentation</h2>
                                                                        <p class="sub-title-content">Business Ensemble, leader mondial est la première plateforme dédiée à la mise en relation entre porteur de projet et investisseur, spécialiste de l’investissement digital .Il bouleverse les enjeux Networking et met tout le monde  sur le pied d’égalité. Ce créateur de richesse s’inscrit dans une politique structurelle de valorisation du capital humain, particulier, Start up, business Angel.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-956d6ec elementor-align-center elementor-widget elementor-widget-button" data-id="956d6ec" data-element_type="widget"
                                                              data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                            <span class="elementor-button-content-wrapper">
                                                                                <span class="elementor-button-text">Découvrez nos projets</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-element elementor-element-220eb3b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="220eb3b3"
                                      data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="display: none;">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-2cbfbcb8 elementor-column elementor-col-25 elementor-top-column" data-id="2cbfbcb8" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-2c5e8976 elementor-widget elementor-widget-image" data-id="2c5e8976" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="163" height="51" src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/icons1.png" class="attachment-full size-full" alt=""> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7cafd3b elementor-column elementor-col-25 elementor-top-column" data-id="7cafd3b" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-2a6b5ee6 elementor-widget elementor-widget-image" data-id="2a6b5ee6" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="151" height="38" src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/icon2.png" class="attachment-full size-full" alt=""
                                                                          srcset="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/icon2.png 151w, https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/icon2-150x38.png 150w"
                                                                          sizes="(max-width: 151px) 100vw, 151px"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6f7c51d8 elementor-column elementor-col-25 elementor-top-column" data-id="6f7c51d8" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-17ca005b elementor-widget elementor-widget-image" data-id="17ca005b" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="172" height="42" src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/icon3.png" class="attachment-full size-full" alt=""> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-5eeb1554 elementor-column elementor-col-25 elementor-top-column" data-id="5eeb1554" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-30ff4526 elementor-widget elementor-widget-image" data-id="30ff4526" data-element_type="widget" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="161" height="41" src="https://demo.themeum.com/wordpress/backnow/wp-content/uploads/2017/11/icon4.png" class="attachment-full size-full" alt=""> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <!--/#content-->
        </section>




@endsection
