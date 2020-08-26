@extends('layouts.menu')
@section('title', $annonce->title)

@section('content')

<!--style wpneo wraper-->
<style media="screen">
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.6.5 ; media=all */
@media all{
.woocommerce img,.woocommerce-page img{height:auto;max-width:100%;}
.woocommerce #content div.product div.thumbnails::after,.woocommerce #content div.product div.thumbnails::before,.woocommerce div.product div.thumbnails::after,.woocommerce div.product div.thumbnails::before,.woocommerce-page #content div.product div.thumbnails::after,.woocommerce-page #content div.product div.thumbnails::before,.woocommerce-page div.product div.thumbnails::after,.woocommerce-page div.product div.thumbnails::before{content:' ';display:table;}
.woocommerce #content div.product div.thumbnails::after,.woocommerce div.product div.thumbnails::after,.woocommerce-page #content div.product div.thumbnails::after,.woocommerce-page div.product div.thumbnails::after{clear:both;}
.woocommerce #content div.product div.thumbnails a,.woocommerce div.product div.thumbnails a,.woocommerce-page #content div.product div.thumbnails a,.woocommerce-page div.product div.thumbnails a{float:left;width:30.75%;margin-right:3.8%;margin-bottom:1em;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.6.5 ; media=all */
@media all{
.woocommerce div.product{margin-bottom:0;position:relative;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/wp-crowdfunding/assets/css/crowdfunding-front.css?ver=2.0.2 ; media=all */
@media all{
.wpneo-wrapper{font-family:'Rubik', sans-serif;font-weight:300;color:#686C8B;}
.wpneo-wrapper ul{padding:0;margin:0;list-style:none;}
.text-right{text-align:right;}
.wpneocf-container{margin-right:auto;margin-left:auto;}
.wpneo-wrapper{margin:0 auto;}
.woocommerce-product-gallery__image{margin-bottom:20px;}
.wpneo_donate_button{background-color:#00a78d;color:#fff;}
.wpneo_donate_button:hover{background-color:#18ce43;color:#fff;}
ul.wpcf_predefined_pledge_amount{margin:10px;}
ul.wpcf_predefined_pledge_amount li{display:inline-block;}
ul.wpcf_predefined_pledge_amount li a{display:block;padding:5px 10px;border:2px solid #1B6DC1 !important;color:#fff !important;}
@media (min-width: 1200px){
.wpneocf-container{width:1170px;}
}
.wpneo-campaign-summary-inner h2:before{display:none;}
.wpneo-campaign-summary-inner h2.wpneo-campaign-title{margin-top:0;}
.wpneo-raised-percent .wpneo-meta-name,.wpneo-raised-percent .wpneo-meta-desc{padding-left:0;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/wpcftemplate/woocommerce/basic/style.css?ver=2.0.2 ; media=all */
@media all{
.wpneo-campaign-summary{width:40%;float:right;}
.wpneo-campaign-single-left-info{margin-bottom:35px;float:left;width:58%;position:relative;}
.wpneo-icon{background-attachment:initial;background-image:url("https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/wpcftemplate/woocommerce/basic/icon.png");background-repeat:no-repeat;display:inline-block;height:27px;width:26px;}
.wpneo-icon-location{background-position:-402px -17px;width:16px;}
.wpneo-raised-percent{border-top:1px solid #e9e9e9;padding:20px 20px 5px;}
.wpneo-campaign-summary .wpneo-raised-percent{border-top:none;padding:0;}
.wpneo-raised-percent .wpneo-meta-name,.wpneo-raised-percent .wpneo-meta-desc{display:inline-block;}
.wpneo-raised-percent .wpneo-meta-desc{font-weight:bold;}
h2.wpneo-campaign-title{font-size:30px;line-height:40px;margin-bottom:5px;}
.wpneo-single-sidebar{clear:both;margin-bottom:20px;margin-top:44px;}
.wpneo-location-wrapper{color:#737373;display:inline-flex;margin-top:-7px;width:100%;}
.wpneo_donate_button{background:#00a78d;text-transform:none;margin:0px;line-height:18px;}
@media screen and (min-width: 320px) and (max-width: 767px){
.wpneo-campaign-single-left-info,.wpneo-campaign-summary{width:94%;padding:20px;}
}
ul.wpcf_predefined_pledge_amount li a{display:block;padding:5px 10px;border:2px solid #1B6DC1 !important;color:#fff;background:#1B6DC1 !important;border-radius:3px;}
ul.wpcf_predefined_pledge_amount li a:hover{background:#00bf9c;border:2px solid #00bf9c;}
ul.wpcf_predefined_pledge_amount{margin:10px 0;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/bootstrap.min.css?ver=all ; media=all */
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
h2,p{orphans:3;widows:3;}
h2{page-break-after:avoid;}
}
*,::after,::before{box-sizing:border-box;}
h2{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
h2{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h2{font-size:2rem;}
.lead{font-size:1.25rem;font-weight:300;}
.progress{display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem;}
.progress-bar{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;color:#fff;background-color:#007bff;}
.text-right{text-align:right!important;}
.text-center{text-align:center!important;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0 ; media=all */
@media all{
.pull-right{float:right;}
.pull-left{float:left;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/backnow-font-style.css?ver=all ; media=all */
@media all{
[class^="back-"]{font-family:'backnow'!important;speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.back-heart:before{content:"\e910";}
.back-favorites:before{content:"\e912";}
.back-play-button:before{content:"\e93a";}
.back-dove:before{content:"\e945";}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/main.css?ver=all ; media=all */
@media all{
.wpneo_donate_button_2{color:#00a78d;cursor:pointer;}
.wpneo_donate_button_2:hover{background:#fff;}
.wpneo_donate_button{color:#fff;cursor:pointer;}
.wpneo_donate_button:hover{background:#fff;}
.thm-progress-bar .progress-bar{color:#fff;height:6px;-webkit-box-shadow:none;box-shadow:none;margin-bottom:0;border-radius:10px;}
.progressbar-content-wrapper{padding:0 20px;}
.progressbar-content-wrapper .thm-progress-bar .progress{height:6px;background-color:#eee;-webkit-box-shadow:none;box-shadow:none;border-radius:10px;margin-top:12px;margin-bottom:12px;}
.progressbar-content-wrapper .thm-progress-bar .thm-raise-sp{color:#8A8D91;font-weight:300;}
.progressbar-content-wrapper .thm-progress-bar .lead{font-size:14px;font-weight:500;margin:0;color:#393939;}
.progressbar-content-wrapper .thm-meta-desc{width:50%;display:inline-block;}
.wpneo-raised-percent{border-top:0;padding:12px 0 0px;margin-top:0;}
.wpneo-icon-location{background-position:-395px -11px;width:20px;}
.wpneo-campaign-summary-inner h2.wpneo-campaign-title{line-height:42px;font-size:36px;margin-bottom:6px;font-weight:400;}
.wpneo-campaign-summary-inner .wpneo-location-wrapper{display:inline-block;width:auto;margin-top:0;color:#9C9C9C;font-weight:400;}
.wpneo-campaign-summary-inner .wpneo-icon-location{background-position:-389px -11px;width:26px;position:relative;top:3px;}
.wpneo-campaign-single-left-info .thumbnails div{margin-top:20px;}
.wpneo-campaign-single-left-info .thumbnails div img{border-radius:4px;}
.woocommerce .wpneo-wrapper #content .wpneo-campaign-single-left-info .thumbnails div a{float:left;width:33.333%;padding:0 10px;margin:0px 0 20px;}
.wpneo-campaign-single-left-info .thumbnails{margin:0 -10px;}
.wpneo-campaign-summary-inner .wpneo-raised-percent{display:none;}
.wpneo-single-short-description{font-size:14px;color:#4C4C4C;margin-top:24px;}
img{max-width:100%;height:auto;}
.wpneo-single-sidebar .wpneo_donate_button{border-radius:4px;padding:15px 30px;font-weight:400;transition:400ms;}
.wpneo-single-sidebar .wpneo_donate_button_2{border-radius:4px;padding:15px 30px;font-weight:400;transition:400ms;}
.thm-single-category li{display:inline-block;margin-right:12px;margin-bottom:5px;}
.wpneo-campaign-summary-inner ul.thm-single-category a{font-weight:400;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/woocommerce.css?ver=all ; media=all */
@media all{
.woocommerce #content div.product div.thumbnails a,.woocommerce div.product div.thumbnails a,.woocommerce-page #content div.product div.thumbnails a,.woocommerce-page div.product div.thumbnails a{width:29.3%;}
.woocommerce div.product{margin-bottom:20px;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/custom.css?ver=all ; media=all */
@media all{
.lead.backnow-review-cont{padding-bottom:22px;padding-top:5px;}
.backnow-review-cont .text-center{display:inline-block;transform:translate(50%, 0%);cursor:pointer;}
.progressbar-content-wrapper .thm-progress-bar .backnow-review-cont{font-size:16px!important;}
.backnow-review-cont i{color:#1B6DC1;}
.wpneo-wrapper ul{width:100%;float:left;display:inline-block;}
.wpneo-list-details p{color:#979AA1;text-align:justify;}
.wpneo-list-details{margin-bottom:100px;}
.video-container.pull-left{position:relative;}
.wpneo-post-img .pup-up-video{transform:translate(-50%, -50%);left:50%;position:absolute;top:50%;font-size:80px;}
.wpneo-campaign-summary-inner .wpneo-location-wrapper{display:none;}
.video-container i.back-play-button{color:#fff;background:#3ad9c7;border-radius:50%;transition:.3s;}
.video-container i.back-play-button:hover{color:#fff;background:#1dc4e9;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/responsive.css?ver=all ; media=all */
@media all{
@media (min-width: 980px) and (max-width: 1400px){
.backnow-review-cont .text-center{transform:none;margin-left:5px;}
.wpneocf-container{padding-left:15px;padding-right:15px;}
}
@media (min-width: 768px) and (max-width: 1000px){
.wpneocf-container{max-width:750px;}
}
@media only screen and (max-width: 992px){
.wpneo-campaign-single-left-info{width:100%;display:block;float:none;}
.wpneo-campaign-summary{width:100%;float:none;display:block;}
.wpneocf-container{padding-left:15px;padding-right:15px;}
}
@media (max-width: 767px){
.wpneo-list-details{margin-bottom:0;}
.wpneo-campaign-single-left-info,.wpneo-campaign-summary{width:100%;padding:20px;}
}
@media (max-width: 600px){
.backnow-review-cont span.thm-Price-amount:first-child{display:block;width:100%;margin-bottom:15px;}
.backnow-review-cont .text-center{transform:none;}
}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/style.css?ver=4.9.15 ; media=all */
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
ul li{padding:5px 0;}
.woocommerce-product-gallery__image{display:inline;}
}
/*! CSS Used from: Embedded */
a,.wpneo_donate_button:hover{color:#33d3c0;}
.thm-progress-bar .progress-bar,.progressbar-content-wrapper .thm-progress-bar .progress .progress-bar{background:#1B6DC1 !important;}
.wpneo-single-sidebar .wpneo_donate_button:hover{background:#00bf9c;}
.progressbar-content-wrapper .thm-progress-bar .progress .progress-bar{background:#33d3c0;background:-moz-linear-gradient(left, #00bf9c 0%, #33d3c0 100%);background:-webkit-linear-gradient(left, #00bf9c 0%,#33d3c0 100%);background:linear-gradient(to right, #00bf9c 0%,#33d3c0 100%);}
a:hover{color:#00bf9c;}
.wpneo-wrapper{font-size:14px;font-family:Montserrat;font-weight:300;line-height:24px;color:#979aa1;}
h2{font-size:36px;font-family:Montserrat;font-weight:400;line-height:42px;color:#414040;}
.wpneo_donate_button{background-color:#00a78d;border-color:#00a78d;color:#fff!important;}
.wpneo_donate_button_2{background-color:#fff;border: 2px solid #00a78d;color:#00a78d!important;}
.wpneo_donate_button:hover{background-color:#00a78d;border-color:#00a78d;color:#fff!important;}
/*! CSS Used from: Embedded */
.wpneo_donate_button{background-color:#00a78d;color:#fff;}
.wpneo_donate_button:hover{background-color:#1dc4e9;color:#fff;}

</style>

<!--style backnow-tabs-->
<style media="screen">
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/wp-crowdfunding/assets/css/crowdfunding-front.css?ver=2.0.2 ; media=all */
@media all{
.wpneo-wrapper{font-family:'Rubik', sans-serif;font-weight:300;color:#686C8B;}
.wpneo-wrapper ul{padding:0;margin:0;list-style:none;}
.wpneocf-container{margin-right:auto;margin-left:auto;}
.wpneo-wrapper{margin:0 auto;}
.wpneo-tabs-menu li.wpneo-current{border-bottom:3px solid #1adc68;}
.wpneo-tabs-menu li.wpneo-current a{color:#1B6DC1;}
@media (min-width: 1200px){
.wpneocf-container{width:1170px;}
}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/wpcftemplate/woocommerce/basic/style.css?ver=2.0.2 ; media=all */
@media all{
.wpneo-tabs-menu{border-top:1px solid#e7e7e7;border-bottom:1px solid#e7e7e7;clear:both;display:table;width:100%;padding:15px 50px 0;}
.wpneo-tabs-menu li{border-top:2px solid transparent;float:left;line-height:1;padding:30px;position:relative;}
.wpneo-tabs-menu li.wpneo-current{border-bottom:3px solid #8dc63f;}
.wpneo-tabs-menu li a:focus{outline:0;}
.wpneo-tabs-menu li a{color:#414548;font-size:16px;text-decoration:none;text-transform:capitalize;position:relative;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/bootstrap.min.css?ver=all ; media=all */
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*,::after,::before{box-sizing:border-box;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/main.css?ver=all ; media=all */
@media all{
.wpneo-tabs-menu{border:none;}
.wpneo-tabs-menu li{padding:30px 0;margin-right:30px;}
.wpneo-tabs-menu li a{font-weight:400;font-size:16px;color:#4C4C4C;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/custom.css?ver=all ; media=all */
@media all{
.wpneo-wrapper.backnow-tabs{background:#fff;display:inline-block;width:100%;margin-top:80px;}
.wpneo-tabs{overflow:hidden;clear:both;}
.wpneo-wrapper ul{width:100%;float:left;display:inline-block;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/responsive.css?ver=all ; media=all */
@media all{
@media (min-width: 980px) and (max-width: 1400px){
.wpneocf-container{padding-left:15px;padding-right:15px;}
}
@media (min-width: 768px) and (max-width: 1000px){
.wpneocf-container{max-width:750px;}
}
@media only screen and (max-width: 992px){
.wpneocf-container{padding-left:15px;padding-right:15px;}
}
@media (max-width: 767px){
.wpneo-tabs{margin-top:50px;padding:20px;}
.wpneo-tabs-menu li{padding:12px 0;margin-right:0;margin-bottom:14px;float:none;margin-bottom:5px;}
.wpneo-tabs-menu li a{font-size:14px;}
}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/style.css?ver=4.9.15 ; media=all */
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
ul li{padding:5px 0;}
}
/*! CSS Used from: Embedded */
a,.wpneo-tabs-menu li.wpneo-current a,.wpneo-tabs-menu li a:hover{color:#1B6DC1;}
.wpneo-tabs-menu li.wpneo-current{border-bottom:2px solid #1B6DC1;}
a:hover{color:#00bf9c;}
.wpneo-wrapper{font-size:14px;font-family:Montserrat;font-weight:300;line-height:24px;color:#979aa1;}
/*! CSS Used from: Embedded */
.wpneo-tabs-menu li.wpneo-current{border-bottom:3px solid #1B6DC1;}
.wpneo-tabs-menu li.wpneo-current a{color:#1B6DC1;}

</style>

<!--style 3ème rangée-->
<style media="screen">
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.6.5 ; media=all */
@media all{
.woocommerce img,.woocommerce-page img{height:auto;max-width:100%;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.6.5 ; media=all */
@media all{
.clear{clear:both;}
.woocommerce #respond input#submit{font-size:100%;margin:0;line-height:1;cursor:pointer;position:relative;text-decoration:none;overflow:visible;padding:.618em 1em;font-weight:700;border-radius:3px;left:auto;color:#515151;background-color:#ebe9eb;border:0;display:inline-block;background-image:none;box-shadow:none;text-shadow:none;}
.woocommerce #respond input#submit:hover{background-color:#dfdcde;text-decoration:none;background-image:none;color:#515151;}
.woocommerce #respond input#submit:disabled{color:inherit;cursor:not-allowed;opacity:.5;padding:.618em 1em;}
.woocommerce #respond input#submit:disabled:hover{color:inherit;background-color:#ebe9eb;}
.woocommerce #reviews #respond{margin:0;border:0;padding:0;}
.woocommerce #reviews #comment{height:75px;}
.woocommerce #reviews #comments h2{clear:none;}
.woocommerce #review_form #respond{position:static;margin:0;width:auto;padding:0;background:transparent none;border:0;}
.woocommerce #review_form #respond::after,.woocommerce #review_form #respond::before{content:' ';display:table;}
.woocommerce #review_form #respond::after{clear:both;}
.woocommerce #review_form #respond p{margin:0 0 10px;}
.woocommerce #review_form #respond .form-submit input{left:auto;}
.woocommerce #review_form #respond textarea{box-sizing:border-box;width:100%;}
.woocommerce p.stars a{position:relative;height:1em;width:1em;text-indent:-999em;display:inline-block;text-decoration:none;}
.woocommerce p.stars a::before{display:block;position:absolute;top:0;left:0;width:1em;height:1em;line-height:1;font-family:WooCommerce;content:"\e021";text-indent:0;}
.woocommerce p.stars a:hover~a::before{content:"\e021";}
.woocommerce p.stars:hover a::before{content:"\e020";}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/wp-crowdfunding/assets/css/crowdfunding-front.css?ver=2.0.2 ; media=all */
@media all{
.wpneo-wrapper{font-family:'Rubik', sans-serif;font-weight:300;color:#686C8B;}
.wpneo-wrapper ul{padding:0;margin:0;list-style:none;}
.wpneocf-container{margin-right:auto;margin-left:auto;}
.wpneo-wrapper{margin:0 auto;}
.select_rewards_button{padding:7px 15px!important;font-size:14px;font-weight:400;background:#222!important;text-transform:capitalize;line-height:24px;border:none;color:#fff;}
.select_rewards_button:hover{background:#000!important;color:#f2f2f2;}
.wpneo-clearfix:after{clear:both;content:" ";display:block;height:0;visibility:hidden;}
.wpneo-modal-wrapper{background:rgba(0, 0, 0, 0.3);bottom:0;left:0;position:fixed;right:0;top:0;-webkit-transition:opacity 400ms ease-in 0s;transition:opacity 400ms ease-in 0s;z-index:99999;-webkit-animation-name:animatetop;-webkit-animation-duration:0.4s;animation-name:animatetop;animation-duration:0.4s;display:none;width:100%;font-family:'Rubik', sans-serif;color:#686C8B;font-size:14px;}
.wpneo-modal-wrapper h3,.wpneo-modal-wrapper h4{font-weight:500;}
div.wpneo-modal-wrapper-head{background-color:#ffffff;border-radius:6px 6px 0 0;position:relative;}
div.wpneo-modal-wrapper-head h4{border-bottom:1px solid #e5e5e5;font-size:18px;margin-bottom:0;padding:15px 0px 15px 30px;text-transform:capitalize;}
.wpneo-modal-content{background:#fff none repeat scroll 0 0;margin:5% auto 0;max-width:650px;position:relative;max-height:80%;overflow-y:auto;}
.wpneo-modal-content-inner{padding:25px 30px;}
.wpneo-modal-content p{color:#414548;font-size:16px;line-height:1.5;}
.wpneo-tooltip{position:absolute;display:inline-block;border-bottom:1px dotted black;}
.wpneo-tooltip .wpneo-tooltip-min,.wpneo-tooltip .wpneo-tooltip-max{visibility:hidden;width:190px;background-color:black;color:#fff;text-align:center;border-radius:6px;padding:5px 0;position:absolute;z-index:1;top:-32px;font-size:12px;}
#wpneo-tab-reviews .submit,.wpneo-profile-button{background-color:#1adc68;color:#fff;}
#wpneo-tab-reviews .submit:hover,.wpneo-profile-button:hover{background-color:#18ce43;color:#fff;}
ul.wpneo-crowdfunding-update li:hover span.round-circle{background-color:#1adc68;}
ul.wpneo-crowdfunding-update li .wpneo-crowdfunding-update-title{color:#1adc68;}
.tab-rewards-wrapper .overlay{background:rgba(26,220,104,.95);}
@media (min-width: 1200px){
.wpneocf-container{width:1170px;}
}
@media (max-width: 992px){
.wpneo-modal-content{margin:10% auto 0;max-width:60%;}
}
@media (max-width: 767px){
.wpneo-modal-content{margin:15% auto 0;max-width:85%;}
}
.wpneo-tab-content h2:before{display:none;}
.wpneo-tab h2{font-size:30px;}
.woocommerce #respond label{margin-bottom:20px;}
.woocommerce #respond label{display:inline-block;float:left;font-size:16px;line-height:11px;width:auto;padding-right:10px;}
.woocommerce #review_form #respond p{margin:0 0 10px;}
.woocommerce #respond p{font-size:16px;font-weight:bold;}
.wpneo-tab-content p span{padding-bottom:25px;}
#respond a{color:#4a4a4a;}
.woocommerce p.stars a{position:relative;height:1em;width:1em;text-indent:-999em;display:inline-block;text-decoration:none;}
#wpneo-tab-reviews p.stars a::before{color:#ffcc00;}
.woocommerce p.stars a::before{display:block;position:absolute;top:0;left:0;width:1em;height:1em;line-height:1;font-family:WooCommerce;content:'\e021';text-indent:0;}
.woocommerce p.stars a:hover~a::before{content:'\e021';}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/wpcftemplate/woocommerce/basic/style.css?ver=2.0.2 ; media=all */
@media all{
.clear-float:after{display:table;clear:both;content:"";}
.wpneo-tab{background-color:#fff;margin-bottom:20px;}
.wpneo-tab-content{display:none;padding:15px;}
.wpneo-tab-content p span{padding-bottom:25px;}
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
input[type="number"].wpneo_donate_amount_field{max-width:120px;border:2px solid #000;color:#000;border-radius:4px;display:inline-block;}
.tab-campaign-story-left{width:60%;float:left;}
.tab-campaign-story-right{width:35%;float:right;}
.wpneo-tab h2{margin-top:15px;margin-bottom:15px;}
.tab-rewards-wrapper{border:1px solid #e7e7e7;padding:5%;margin-bottom:20px;}
.tab-rewards-wrapper h3{margin-bottom:20px;}
.tab_col_9{width:64%;float:left;}
.tab_col_3{width:30.6%;float:right;}
#wpneo-tab-reviews .submit{background:#8dc63f!important;color:#ffffff!important;}
#wpneo-tab-reviews p.stars a::before{color:#ffcc00!important;}
#wpneo-tab-reviews span.required{color:#ffcc00;}
.tab-rewards-wrapper:hover .overlay{opacity:1;}
.tab-rewards-wrapper .overlay{position:absolute;left:0;right:0;bottom:0px;padding:16px;text-align:center;background:rgba(147,201,73,.9);opacity:0;-webkit-transition:opacity 400ms;transition:opacity 400ms;}
.tab-rewards-wrapper{position:relative;}
.tab-rewards-wrapper .overlay>div{display:table;height:100%;width:100%;}
.tab-rewards-wrapper .overlay>div>div{display:table-cell;vertical-align:middle;}
ul.wpneo-crowdfunding-update{border-left:3px solid #e7e7e7;padding-left:20px!important;}
ul.wpneo-crowdfunding-update li{margin-bottom:20px;}
ul.wpneo-crowdfunding-update li .wpneo-crowdfunding-update-title{margin-top:10px;margin-bottom:10px;font-size:22px;color:#8dc63f;}
.wpneo-crowdfunding-update h4{margin-top:-26px;}
span.round-circle{height:25px;width:25px;border-radius:50%;background:#e7e7e7;display:block;margin-left:-35px;}
ul.wpneo-crowdfunding-update li:hover span.round-circle{background:#8dc63f;}
@media screen and (min-width: 320px) and (max-width: 767px){
.tab-campaign-story-left,.tab-campaign-story-right{width:94%;padding:20px;}
}
.wpneo-profile-left,.wpneo-profile-right{display:inline-block;float:left;}
.wpneo-profile-right{padding-left:0;}
.wpneo-profile-name{font-size:24px;color:#000;font-weight:bold;margin-top:5px;line-height:31px;}
.wpneo-profile-campaigns{margin-top:28px;}
.wpneo-profile-about{padding:0;display:inline-block;width:100%;}
.wpneo-profile-about h3{font-size:18px;line-height:50px;}
.wpneo-profile-about p{font-size:14px;margin:0;}
.wpneo-profile-button{text-decoration:none;text-transform:capitalize;padding:8px 20px;background-color:#8dc63f;font-weight:300;color:#fff;font-size:15px;border-radius:2px;float:left;margin:30px 0px 0px;}
a.wpneo-profile-button:hover{background-color:#80b538;color:#fff;}
.wpneo-profile-about .wpneo-social-link{margin-right:5px;}
#wpneo-tab-baker_list table{border:none;}
#wpneo-tab-baker_list table tr td,#wpneo-tab-baker_list table tr th{border-top:none;border-left:none;border-right:none;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/bootstrap.min.css?ver=all ; media=all */
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img,tr{page-break-inside:avoid;}
h2,h3,p{orphans:3;widows:3;}
h2,h3{page-break-after:avoid;}
.table{border-collapse:collapse!important;}
.table td,.table th{background-color:#fff!important;}
}
*,::after,::before{box-sizing:border-box;}
[tabindex="-1"]:focus{outline:0!important;}
h2,h3,h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
small{font-size:80%;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
a,button,input:not([type=range]),label,select,textarea{-ms-touch-action:manipulation;touch-action:manipulation;}
table{border-collapse:collapse;}
th{text-align:inherit;}
label{display:inline-block;margin-bottom:.5rem;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button,input,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,input{overflow:visible;}
button,select{text-transform:none;}
[type=submit],button,html [type=button]{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
textarea{overflow:auto;resize:vertical;}
h2,h3,h4{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h2{font-size:2rem;}
h3{font-size:1.75rem;}
h4{font-size:1.5rem;}
small{font-size:80%;font-weight:400;}
.table{width:100%;max-width:100%;margin-bottom:1rem;background-color:transparent;}
.table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #e9ecef;}
.fade{opacity:0;transition:opacity .15s linear;}
.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5;}
.close:focus,.close:hover{color:#000;text-decoration:none;opacity:.75;}
button.close{padding:0;background:0 0;border:0;-webkit-appearance:none;}
.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;outline:0;}
.modal.fade .modal-dialog{transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translate(0,-25%);transform:translate(0,-25%);}
.modal-dialog{position:relative;width:auto;margin:10px;pointer-events:none;}
.modal-content{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0;}
@media (min-width:576px){
.modal-dialog{max-width:500px;margin:30px auto;}
}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0 ; media=all */
@media all{
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.fa-twitter:before{content:"\f099";}
.fa-facebook:before{content:"\f09a";}
.fa-pinterest:before{content:"\f0d2";}
.fa-linkedin:before{content:"\f0e1";}
.fa-long-arrow-right:before{content:"\f178";}
.fa-google:before{content:"\f1a0";}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/magnific-popup.css?ver=all ; media=all */
@media all{
button::-moz-focus-inner{padding:0;border:0;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/main.css?ver=all ; media=all */
@media all{
input[type=submit],.wpneo-profile-button,.select_rewards_button{color:#fff;cursor:pointer;}
input[type=submit]:hover,.wpneo-profile-button:hover,.select_rewards_button:hover{background:#fff;}
input:focus,textarea:focus,select:focus,button:focus{outline-offset:0;outline:0;-webkit-box-shadow:none;box-shadow:none;}
#wpneo-tab-description img.aligncenter{margin:0 auto;max-width:100%;display:inherit;}
.comment-reply-title{font-weight:600;font-size:20px;margin-bottom:20px;}
.comment-respond{padding:25px 0 0;background-color:#fff;border-radius:4px;border-top:1px solid #e7e7e7;}
input[type="number"].wpneo_donate_amount_field{border:none;padding:9px 10px;max-width:85%;font-weight:400;color:#393939;width:100%;background:#F7F7F9;}
.wpneo-modal-wrapper{background:rgba(0, 0, 0, 0.8);}
.wpneo-modal-content{border-radius:4px;}
div.wpneo-modal-wrapper-head h4{border-bottom:1px solid #e7e7e7;font-size:18px;padding:20px 0px 20px 30px;}
.wpneo-profile-name{font-size:18px;font-weight:400;line-height:40px;color:#393939;}
.wpneo-profile-about .wpneo-icon{border-radius:4px;}
.wpneo-tab{background:none;}
.wpneo-tab-content{padding:35px 0;color:#4A4A4A;}
.tab-rewards-wrapper{border:1px solid #e7e7e7;padding:0px;background:#fff;border-radius:5px;margin-bottom:30px;margin-top:20px;}
.tab-rewards-wrapper h3{margin-bottom:10px;font-size:22px;}
.tab-rewards-wrapper .overlay{background:rgb(58, 217, 199);}
#wpneo-tab-description img,#wpneo-tab-description img.aligncenter{margin-bottom:20px;margin-top:20px;width:100%;}
.tab-description{line-height:26px;}
span.round-circle{margin-left:-50px;transition:400ms;-webkit-transition:400ms;}
ul.wpneo-crowdfunding-update{padding-left:35px!important;}
.wpneo-crowdfunding-update h4{font-size:16px;color:#393939;margin-bottom:-5px;}
ul.wpneo-crowdfunding-update li .wpneo-crowdfunding-update-title{margin-top:5px;margin-bottom:12px;font-size:18px;}
#wpneo-tab-baker_list table tr th{font-size:18px;}
.woocommerce .woocommerce-Reviews div#comments{padding:0;}
.woocommerce #reviews #comments h2{clear:none;margin:0;font-size:24px;}
.woocommerce #review_form_wrapper #review_form #respond textarea{border-radius:4px;border:2px solid #e7e7e7;padding:15px;}
.modal{text-align:center;}
.modal .modal-dialog,.wpneo-modal-content{max-width:650px;}
.modal .modal-content{border-radius:4px;background-color:#fff;margin-top:100px;text-align:center;}
.modal button.close{filter:alpha(opacity=60);opacity:.6;background:none;}
.modal button.close span{font-size:20px;font-size:15px;border-radius:50%;border:1px solid #B2B2B2;color:#999;width:30px;height:30px;line-height:30px;display:inline-block;height:30px;background:#fff;}
img{max-width:100%;height:auto;}
div#wpneo-tab-baker_list,div#wpneo-tab-reviews{background-color:#fff;border:1px solid #EBEBF1;padding:25px;margin-top:35px;border-radius:5px;}
div#wpneo-tab-reviews{max-width:680px;}
#wpneo-tab-baker_list table tr td,#wpneo-tab-baker_list table tr th{border-bottom:1px solid #EDEDED;}
div#wpneo-tab-reviews #review_form label{display:block;width:100%;}
div#wpneo-tab-reviews  #comments h2{margin-bottom:0;}
div#wpneo-tab-reviews #review_form #respond textarea{border-width:1px!important;height:180px;max-width:600px;display:block;}
ul.wpneo-crowdfunding-update li{background:#fff;padding:20px;position:relative;border-radius:5px;border:1px solid #EBEBF1;}
ul.wpneo-crowdfunding-update li:last-child{margin-bottom:0;}
ul.wpneo-crowdfunding-update span.round-circle{position:absolute;left:0;top:20px;}
.wpneo-crowdfunding-update h4{margin-top:0;}
ul.wpneo-crowdfunding-update li .wpneo-crowdfunding-update-title{color:#222!important;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/woocommerce.css?ver=all ; media=all */
@media all{
select,input[type="number"]{font-size:16px;}
.woocommerce textarea{display:inline;}
.woocommerce #respond .comment-form-comment label{background:transparent;display:inline-block;min-width:60px;padding:10px 0;top:0px;z-index:1;font-weight:400;}
.woocommerce #respond input#submit{margin:4px 0 0 0;background-color:#959595;color:#fff;border:0;padding:16px 42px;font-size:14px;font-weight:400;}
.woocommerce #review_form #respond textarea{box-sizing:border-box;width:100%;color:rgba(0, 0, 0, 0.7);font-weight:400;padding:6px;border-color:#ccc;}
.woocommerce div#comments{background:transparent;margin:0;padding:20px;}
.woocommerce #respond label{display:inline-block;float:left;font-size:16px;line-height:11px;width:auto;padding-right:10px;}
.woocommerce .comment-reply-title,.woocommerce #reply-title{color:rgba(51, 51, 51, 0.81);margin:19px 0 35px;padding-bottom:30px;font-weight:400;line-height:52px;border:none;}
.woocommerce #respond p{font-size:16px;font-weight:bold;}
.woocommerce #respond input#submit:hover{color:#fff;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/jssocials.css?ver=all ; media=all */
@media all{
.jssocials-shares .jssocials-share{display:inline-block;margin-right:10px;}
.jssocials-shares .jssocials-share:last-child{margin-right:0;}
.jssocials-shares .jssocials-share a{display:block;width:110px;line-height:45px;text-align:center;color:#fff;border-radius:30px;font-size:14px;font-weight:300;}
.jssocials-share-twitter .jssocials-share-link{background:#00aced;}
.jssocials-share-twitter .jssocials-share-link:hover{background:#0087ba;}
.jssocials-share-facebook .jssocials-share-link{background:#3b5998;}
.jssocials-share-facebook .jssocials-share-link:hover{background:#2d4373;}
.jssocials-share-googleplus .jssocials-share-link{background:#dd4b39;}
.jssocials-share-googleplus .jssocials-share-link:hover{background:#c23321;}
.jssocials-share-linkedin .jssocials-share-link{background:#007bb6;}
.jssocials-share-linkedin .jssocials-share-link:hover{background:#005983;}
.jssocials-share-pinterest .jssocials-share-link{background:#cb2027;}
.jssocials-share-pinterest .jssocials-share-link:hover{background:#9f191f;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/custom.css?ver=all ; media=all */
@media all{
.wpneo-wrapper ul{width:100%;float:left;display:inline-block;}
.wpneo-list-details p{color:#979AA1;text-align:justify;}
.backnow-reward-cont{padding:25px 30px 0;}
.backnow-estimate-date{background:#EBEBF1;padding:18px;text-align:center;margin-left:-30px;margin-right:-30px;font-size:14px;color:#393C40;letter-spacing:0.8px;line-height:22px;}
.tab-rewards-wrapper h3{margin-bottom:10px;font-size:20px;font-weight:400;color:#393C40;}
.quantity_box{background:#fff;padding:20px 30px 30px;margin-bottom:20px;border:1px solid #e7e7e7;position:relative;border-radius:5px;}
.quantity_box span{color:#393C40;line-height:20px;margin-bottom:10px;display:block;}
.quantity_box .qwpneo_donate_button{background:#33D3C0;border:none;padding:10px 14px;color:#fff;font-size:16px;font-weight:bold;border-radius:0 3px 3px 0px;margin-left:-5px;transition:.3s;cursor:pointer;}
.quantity_box .qwpneo_donate_button:hover{background:#25c3b1;}
.wpneo-list-details{margin-bottom:100px;}
.wpneo-tab-content{padding-bottom:0;color:#4A4A4A;}
.woocommerce #reviews #comments h2{font-size:20px;line-height:1.1em;}
.woocommerce #reviews #comments h2 + p{margin-bottom:0;}
.woocommerce #review_form_wrapper .comment-reply-title{display:block;margin:0;padding:0;}
.select_rewards_button{background-color:rgba(51, 211, 192, 0)!important;border-radius:3px!important;padding:0px 20px!important;border-color:rgba(51, 211, 192, 0)!important;}
.select_rewards_button:hover{background-color:rgba(34, 193, 174, 0)!important;border-color:rgba(51, 211, 192, 0)!important;}
span.backnow-rewards{font-weight:400;font-size:16px;color:#4C4C4C;outline:none;margin-bottom:15px;display:block;}
.wpneo-list-details .backnow-bio{overflow:hidden;background:#fff;width:100%;border-radius:4px;margin-top:50px;}
.wpneo-list-details .backnow-bio img{width:44px!important;border-radius:50%;}
.backnow-bio-social .jssocials-shares .jssocials-share a{display:block;width:inherit;line-height:inherit;text-align:center;color:#CBCBCB;border-radius:0;font-size:16px;font-weight:300;}
.backnow-bio-social .jssocials-shares a{background:transparent;}
.backnow-bio-social .jssocials-shares a:hover{background:transparent;color:#33D3C0;}
#wpneo-tab-description .backnow-bio img{margin-bottom:0;margin-top:0;}
#wpneo-tab-description .backnow-bio{padding:16px 20px;}
.backnow-share{padding:8px 14px;}
.backnow-info-img a{padding-left:10px;}
.backnow-info-img,.backnow-share{float:left;display:inline;width:auto;overflow:hidden;}
.wpneo-modal-content-inner{text-align:left;}
#bioinfo .wpneo-modal-content{margin:0;}
#bioinfo button.close{top:12px;position:absolute;right:10px;}
div.wpneo-modal-wrapper-head h4{text-align:left;}
.backnow-bio-social.jssocials{padding:10px 0;}
#wpneo-tab-baker_list table tr th{font-weight:500;}
span.round-circle{height:20px;width:20px;margin-left:-47.5px;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/responsive.css?ver=all ; media=all */
@media all{
@media (min-width: 980px) and (max-width: 1400px){
.wpneocf-container{padding-left:15px;padding-right:15px;}
}
@media (min-width: 768px) and (max-width: 1000px){
.wpneocf-container{max-width:750px;}
}
@media only screen and (max-width: 992px){
.wpneo-list-details .backnow-bio{width:100%;}
.quantity_box .qwpneo_donate_button{margin-left:0;margin-top:5px;border-radius:5px;}
.quantity_box{padding:20px;}
input[type="number"].wpneo_donate_amount_field{display:block;widows:100%;margin-right:0;max-width:100%;margin-top:5px;}
span.backnow-rewards{position:static;margin-top:0;margin-bottom:15px;display:block;}
.wpneocf-container{padding-left:15px;padding-right:15px;}
}
@media (max-width: 767px){
.backnow-info-img,.backnow-share{width:100%;}
.backnow-bio .backnow-follow-us.pull-right{float:none;padding-left:10px;}
.wpneo-list-details{margin-bottom:0;}
.jssocials-shares .jssocials-share a{width:90px;line-height:35px;font-size:12px;font-weight:300;margin-top:8px;}
.tab-campaign-story-left,.tab-campaign-story-right{width:100%;padding:20px;}
.wpneo-tab .tab_col_9,.wpneo-tab .tab_col_3{width:100%;float:left;}
}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/style.css?ver=4.9.15 ; media=all */
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
.aligncenter{display:block;margin:5px auto 5px auto;}
table tr th,table tr td{padding:8px;border:1px solid #ddd;}
table{margin-bottom:10px;}
table tr th,table tr td{padding:8px;border:1px solid #ddd;}
ul li{padding:5px 0;}
div#wpneo-tab-baker_list{margin-top:80px;}
}
/*! CSS Used from: Embedded */
a,.tab-rewards-wrapper h3,ul.wpneo-crowdfunding-update li .wpneo-crowdfunding-update-title,input[type=submit]:hover,.wpneo-profile-button:hover,.select_rewards_button:hover{color:#1B6DC1;}
.woocommerce #respond input#submit:hover,.form-submit input[type=submit],ul.wpneo-crowdfunding-update li:hover span.round-circle{background:#1B6DC1;}
#wpneo-tab-reviews .submit{background:#1B6DC1!important;}
input:focus,textarea:focus,select:focus{border-color:#1B6DC1;}
a:hover{color:#00bf9c;}
.wpneo-wrapper{font-size:14px;font-family:Montserrat;font-weight:300;line-height:24px;color:#979aa1;}
h2{font-size:36px;font-family:Montserrat;font-weight:400;line-height:42px;color:#414040;}
h3{font-size:26px;font-family:Montserrat;font-weight:400;line-height:28px;color:#414040;}
h4{font-size:18px;font-family:Montserrat;font-weight:600;line-height:26px;color:#414040;}
input[type=submit],.wpneo-profile-button,.select_rewards_button{background-color:#33d3c0;border-color:#33d3c0;color:#fff!important;}
input[type=submit]:hover,.wpneo-profile-button:hover,.select_rewards_button:hover{background-color:#33d3c0;border-color:#33d3c0;color:#fff!important;}
/*! CSS Used from: Embedded */
#wpneo-tab-reviews .submit,.wpneo-profile-button{background-color:#33d3c0;color:#fff;}
#wpneo-tab-reviews .submit:hover,.wpneo-profile-button:hover{background-color:#1dc4e9;color:#fff;}
ul.wpneo-crowdfunding-update li:hover span.round-circle{background-color:#33d3c0;}
ul.wpneo-crowdfunding-update li .wpneo-crowdfunding-update-title{color:#33d3c0;}
.tab-rewards-wrapper .overlay{background:rgba(51,211,192,.95);}
.fade{
	opacity: 0.9!important;
}

.modal-dialog {

    top: 90px!important;
}

	@media only screen and (max-width: 600px) {
		 div#wpneo-tab-reviews #review_form #respond textarea{
		 	width: 100%!important;
		}

		.video-container.pull-left, .video-container.pull-left iframe{
			height: 178px !important;
			margin-bottom: 0px!important;
		}


		.wpneo-campaign-single-left-info, .wpneo-campaign-summary {
		    width: 100%;
		    padding: 10px;
		}

		.wpneo-campaign-single-left-info .thumbnails{
			display: inline-flex;
		}

		.save{
			margin-top: 40px;
		}
	}
</style>


<div class="wpneo-wrapper">
    <div class="wpneocf-container">
        <div class="content-area">
            <div id="content" class="site-content" role="main">
                <div class="wpneo-list-details">
                    <div itemscope="" itemtype="http://schema.org/ItemList" id="campaign-1859"
                      class="post-1859 product type-product status-publish has-post-thumbnail product_cat-clothing product_tag-innovation product_tag-project product_tag-shop first instock sale sold-individually shipping-taxable purchasable product-type-crowdfunding">
                        <div class="wpneo-campaign-single-left-info">

                            <div class="wpneo-post-img">

                                <div class="video-container pull-left"
                                  style="width:100%; height:390px; margin-bottom:30px; ">
                                  @if($annonce->video)
                                    {!!$annonce->video!!}
                                    @else
                                    <img style="width: 100%;" src="/storage/images/annonces/{{$annonce->logo}}" alt="">
                                  @endif
                                </div>

                            </div>

                            <div id="campaign_loved_html">
                            </div>

                            <div class="thumbnails">
                                @foreach($annonce->multimedias as $multimedia)
                                @if(strpos($multimedia->name, '.png') !== false || strpos($multimedia->name, '.jpg') !== false || strpos($multimedia->name, '.jpeg') !== false)
                                <div class="woocommerce-product-gallery__image">
                                    <a itemprop="image" class="woocommerce-main-image cloud-zoom"
                                      href="#">
                                      <img width="215" height="130"
                                          src="/storage/files/annonces/{{$multimedia->name}}" class="attachment-215x130 size-215x130" alt="" title="">
                                      </a>
                                  </div>
                                @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="wpneo-campaign-summary progressbar-content-wrapper">
                            <div class="wpneo-campaign-summary-inner thm-progress-bar" itemscope="" itemtype="http://schema.org/DonateAction">
                                <ul class="thm-single-category">
                                    <li><a href="{{url('categories', $annonce->category)}}" style="color:#33d3c0;"><span>{{$annonce->category->name}}</span></a></li>
                                </ul>
                                <div></div>
                                <h2 class="wpneo-campaign-title">{{$annonce->title}}</h2>
                                <div class="wpneo-single-short-description">
                                    <div itemprop="description">
                                        <p>
                                            {{$annonce->short_description}}
                                        </p>
                                    </div>
                                </div>
                                <!-- Review Section Start -->
                                <div class="lead backnow-review-cont">
                                    <!--
                                    <span class="thm-Price-amount">
                                        <span class="woocommerce-Price-amount amount"><i class="fas fa-dove"></i>
                                            1 </span>

                                        Backer<span class="thm-raise-sp"></span>
                                    </span>
                                -->

                                    @if(count($annonce->users->where('saved', 1)) > 0)
                                    <span class="thm-Price-amount text-center">
                                        <span class="thm-love-btn" data-campaign="1859" data-user="1048">
                                            <i class="far fa-heart"></i>
                                            <span class="woocommerce-Price-amount amount latest-price">
                                                {{count($annonce->users->where('saved', 1))}} </span>
                                            <span class="thm-raise-sp">ont enregistré cette annonce</span>
                                        </span>
                                    </span>
                                    @else
                                    <span class="thm-Price-amount text-center">
                                        <span class="thm-love-btn" data-campaign="1859" data-user="1048">
                                            <i class="far fa-heart"></i>

                                            <span class="thm-raise-sp">Soyez le premier à enregistrer cette annonce</span>
                                        </span>
                                    </span>
                                    @endif

                                    <!-- Review Count -->
                                    <!--
                                    <span class="thm-Price-amount pull-right text-right">
                                        <span class="woocommerce-Price-amount amount">
                                            <i class="far fa-star"></i>
                                            <span class="count">0</span> </span>
                                        <span class="thm-raise-sp">Reviews</span>
                                    </span>
                                -->
                                    <!-- Review Count End -->
                                </div>
                                <!-- Review End -->


                                <div class="lead">
                                    <ul class="wpcf_predefined_pledge_amount">
                                        <li><a href="javascript:;" data-predefined-price="50"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Montant minimum par investisseur: </span>{{$annonce->min_investor_amount}} €</span></a> </li>
                                        <!--
                                        <li><a href="javascript:;" data-predefined-price="60"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>60.00</span></a> </li>
                                        <li><a href="javascript:;" data-predefined-price="70"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>70.00</span></a> </li>
                                        <li><a href="javascript:;" data-predefined-price="80"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>80.00</span></a> </li>
                                    -->
                                    </ul>
                                    <span class="thm-Price-amount">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>  4,500.00</span></span>
                                    </span>
                                    <span class="thm-raise-sp">Levés</span>

                                    <div class="thm-meta-desc pull-right text-right">
                                        <span class="thm-Price-amount">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">€</span>  {{$annonce->raising_amount}}</span></span>
                                        </span>
                                        <span class="thm-raise-sp">
                                            Objectif </span>
                                    </div>
                                </div>



                                <div class="wpneo-raised-percent">
                                    <div class="wpneo-meta-name">Pourcentage achevé :</div>
                                    @if($annonce->raising_amount !== 0 && $annonce->raising_amount !== null)
                                    <div class="wpneo-meta-desc">{{($annonce->previous_raising_amount / $annonce->raising_amount) * 100}}%</div>
                                    @else
                                    <div class="wpneo-meta-desc">0%</div>
                                    @endif
                                </div>

                                <div class="progress">
                                    @if($annonce->raising_amount !== 0 && $annonce->raising_amount !== null)
                                    <div class="progress-bar" style="width: {{($annonce->previous_raising_amount / $annonce->raising_amount) * 100}}%"></div> <br>
                                    @else
                                    <div class="progress-bar" style="width: 0%"></div> <br>
                                    @endif
                                </div>


                                <div class="lead" style="padding: 15px 0;">
                                    <span class="thm-Price-amount">
                                        <!--span class="woocommerce-Price-amount amount">0</span-->
                                    </span>
                                    <!--span class="thm-raise-sp">Days to go</span-->
                                    <div class="thm-meta-desc pull-right text-right">
                                        <span class="thm-Price-amount">
                                            <span class="woocommerce-Price-amount amount">
                                                @if($annonce->raising_amount !== 0 && $annonce->raising_amount !== null)
                                                {{($annonce->previous_raising_amount / $annonce->raising_amount) * 100}}%
                                                @else
                                                0%
                                                @endif
                                            </span>
                                        </span>
                                        <span class="thm-raise-sp">
                                            Achevés </span>
                                    </div>
                                </div>
                                @auth
                                @if(Auth::user()->isInvestor())
                                <div class="wpneo-single-sidebar row">
                                	<div class="col-md-6 col-sm-12">
                                		<a href="/showInterest/{{$annonce->id}}"><span class="wpneo_donate_button">Je suis intéressé</span></a>
                                	</div>
                                	<div class="col-md-6 col-sm-12 save" >
                                		<a href="#"><span class="wpneo_donate_button_2">Sauvegarder</span></a>
                                	</div>



                                    <!-- <button class="backnow-remind-me"><?php// _e('Remind me', 'backnow'); ?></button> -->
                                </div>
                                @endif
                                @endauth
                                <div class="wpneo-location-wrapper">
                                    <i class="wpneo-icon wpneo-icon-location"></i>
                                    <span>Nagasaki, Road 8, Japan</span>
                                </div>
                            </div><!-- .wpcf-campaign-summary-inner -->
                        </div><!-- .wpcf-campaign-summary -->
                        <meta itemprop="url" content="https://demo.themeum.com/wordpress/backnow/product/dreamfall-chapters-the-longest-journey/">
                    </div><!-- #campaign-1859 -->
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div>
</div>


<div class="wpneo-wrapper backnow-tabs">
    <div class="wpneocf-container">
        <div class="wpneo-tabs">
            <ul class="wpneo-tabs-menu">
                <li class="wpneo-current description_tab">
                    <a href="#wpneo-tab-description">A propos</a>
                </li>
                <!--
                <li class=" update_tab">
                    <a href="#wpneo-tab-update">Updates</a>
                </li>
                <li class=" baker_list_tab">
                    <a href="#wpneo-tab-baker_list">Backer List</a>
                </li>
                <li class=" reviews_tab">
                    <a href="#wpneo-tab-reviews">Reviews (0)</a>
                </li>
            -->
            </ul>
        </div>
    </div>
</div>



<div class="wpneo-wrapper">
    <div class="wpneocf-container">
        <div class="content-area">
            <div class="site-content" role="main">
                <div class="wpneo-list-details">
                    <div class="wpneo-tab">
                        <div id="wpneo-tab-description" class="wpneo-tab-content" style="display: block;">
                            <div class="tab-description tab_col_9 tab-campaign-story-left">
                                <h2>Bref résumé</h2>
                                <p>{{$annonce->short_description}}</p>

                                <h2>Description de l'entreprise</h2>
                                <p>{{$annonce->company_description}}</p>

                            </div>
                            <div class="tab-rewards tab_col_3 tab-campaign-story-right">
                                <!-- Quantity Box WooCommerce -->
                                {{--
                                <div id="backnow_project" class="quantity_box">
                                    <span>Make a pledge without a reward </span>
                                    <span class="wpneo-tooltip">
                                        <span class="wpneo-tooltip-min">Minimum amount is $</span>
                                        <span class="wpneo-tooltip-max">Maximum amount is $5000</span>
                                    </span>
                                    <form enctype="multipart/form-data" method="post" class="cart">
                                        <input type="number" min="0" placeholder="" name="wpneo_donate_amount_field" class="input-text amount wpneo_donate_amount_field text" value="100" data-min-price="" data-max-price="5000">
                                        <input type="hidden" value="1859" name="add-to-cart">
                                        <button type="submit" class="qwpneo_donate_button"><i class="fas fa-arrow-right"></i></button>
                                    </form>
                                </div>

                                <!-- Quantity Box End -->

                                <span id="backnow_project_demo" class="backnow-rewards">
                                    <span>Rewards</span>
                                </span>


                                <div class="tab-rewards-wrapper">
                                    <div class="backnow-reward-cont">
                                        <h3>
                                            $100 - $199 </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in aliquam urna, ultrices lobortis lacus. Praesent mi enim, congue semper volutpat ut, bibendum tempor arcu.</p>
                                        <p>0 backnows</p>

                                        <div class="backnow-estimate-date">
                                            <span>Estimated Delivery: </span><span>Mar, 2019</span> </div>



                                        <div class="overlay">
                                            <div>
                                                <div>
                                                    <form enctype="multipart/form-data" method="post" class="cart">
                                                        <input type="hidden" value="100" name="wpneo_donate_amount_field">
                                                        <input type="hidden"
                                                          value="{&quot;wpneo_rewards_pladge_amount&quot;:100,&quot;wpneo_rewards_image_field&quot;:0,&quot;wpneo_rewards_description&quot;:&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in aliquam urna, ultrices lobortis lacus. Praesent mi enim, congue semper volutpat ut, bibendum tempor arcu.&quot;,&quot;wpneo_rewards_endmonth&quot;:&quot;mar&quot;,&quot;wpneo_rewards_endyear&quot;:&quot;2019&quot;,&quot;wpneo_rewards_item_limit&quot;:&quot;&quot;}"
                                                          name="wpneo_selected_rewards_checkout">
                                                        <input type="hidden" value="1" name="wpneo_rewards_index">
                                                        <input type="hidden" value="1" name="_cf_product_author_id">
                                                        <input type="hidden" value="1859" name="add-to-cart">
                                                        <button type="submit" class="select_rewards_button">Select Reward</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Campaign Over -->


                                    </div>
                                </div>
                                --}}

                                <div class="tab-rewards-wrapper">
                                    <div class="backnow-reward-cont">
                                        <h3>
                                            En résumé </h3>
                                        <p>
                                            Stade de développement: {{$annonce->stage}}
                                        </p>

                                        <p>
                                            Rôle de l'investisseur: {{$annonce->investor_role}}
                                        </p>
                                        <!--
                                        <div class="backnow-estimate-date">
                                            <span>Estimated Delivery: </span><span>Mar, 2019</span> </div>
                                        -->



                                        <div class="overlay">
                                            <div>
                                                <div>
                                                    <form enctype="multipart/form-data" method="post" class="cart">
                                                        <input type="hidden" value="200" name="wpneo_donate_amount_field">
                                                        <input type="hidden"
                                                          value="{&quot;wpneo_rewards_pladge_amount&quot;:200,&quot;wpneo_rewards_image_field&quot;:0,&quot;wpneo_rewards_description&quot;:&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in aliquam urna, ultrices lobortis lacus. Praesent mi enim, congue semper volutpat ut, bibendum tempor arcu.&quot;,&quot;wpneo_rewards_endmonth&quot;:&quot;mar&quot;,&quot;wpneo_rewards_endyear&quot;:&quot;2019&quot;,&quot;wpneo_rewards_item_limit&quot;:&quot;&quot;}"
                                                          name="wpneo_selected_rewards_checkout">
                                                        <input type="hidden" value="2" name="wpneo_rewards_index">
                                                        <input type="hidden" value="1" name="_cf_product_author_id">
                                                        <input type="hidden" value="1859" name="add-to-cart">
                                                        <button type="submit" class="select_rewards_button">Select Reward</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Campaign Over -->


                                    </div>
                                </div>
                                {{--
                                <div class="tab-rewards-wrapper">
                                    <div class="backnow-reward-cont">
                                        <h3>
                                            $300 - more </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in aliquam urna, ultrices lobortis lacus. Praesent mi enim, congue semper volutpat ut, bibendum tempor arcu.</p>
                                        <p>1 backnows</p>

                                        <div class="backnow-estimate-date">
                                            <span>Estimated Delivery: </span><span>Mar, 2019</span> </div>



                                        <div class="overlay">
                                            <div>
                                                <div>
                                                    <form enctype="multipart/form-data" method="post" class="cart">
                                                        <input type="hidden" value="300" name="wpneo_donate_amount_field">
                                                        <input type="hidden"
                                                          value="{&quot;wpneo_rewards_pladge_amount&quot;:300,&quot;wpneo_rewards_image_field&quot;:0,&quot;wpneo_rewards_description&quot;:&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in aliquam urna, ultrices lobortis lacus. Praesent mi enim, congue semper volutpat ut, bibendum tempor arcu.&quot;,&quot;wpneo_rewards_endmonth&quot;:&quot;mar&quot;,&quot;wpneo_rewards_endyear&quot;:&quot;2019&quot;,&quot;wpneo_rewards_item_limit&quot;:&quot;&quot;}"
                                                          name="wpneo_selected_rewards_checkout">
                                                        <input type="hidden" value="3" name="wpneo_rewards_index">
                                                        <input type="hidden" value="1" name="_cf_product_author_id">
                                                        <input type="hidden" value="1859" name="add-to-cart">
                                                        <button type="submit" class="select_rewards_button">Select Reward</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Campaign Over -->


                                    </div>
                                </div>
                                --}}
                                <div style="clear: both"></div>
                                <div style="clear: both"></div>
                            </div>

                            <div class="tab-description-wrap wpneo-clearfix">
                                <div class="tab-description">
                                    <div class="backnow-bio">
                                        <div class="backnow-info-img">


                                            <img width="80" height="80" src="/storage/images/users/{{$annonce->user->image}}" alt="">

                                            <a data-toggle="modal" data-target="#bioinfo" href="#" class="wpneo-fund-modal-btn">{{$annonce->user->name}}</a>
                                        </div>


                                        <!-- User Address -->
                                        <div class="backnow-share">

                                        </div>

                                        <!-- Social Share -->
                                        <!--
                                        <div class="backnow-follow-us pull-right">
                                            <div class="backnow-bio-social jssocials" data-url="https://demo.themeum.com/wordpress/backnow/product/dreamfall-chapters-the-longest-journey/">
                                                <div class="jssocials-shares">
                                                    <div class="jssocials-share jssocials-share-facebook"><a href="#" class="jssocials-share-link"><i class="fa fa-facebook jssocials-share-logo"></i></a></div>
                                                    <div class="jssocials-share jssocials-share-twitter"><a href="#" class="jssocials-share-link"><i class="fa fa-twitter jssocials-share-logo"></i></a></div>
                                                    <div class="jssocials-share jssocials-share-googleplus"><a href="#" class="jssocials-share-link"><i class="fa fa-google jssocials-share-logo"></i></a></div>
                                                    <div class="jssocials-share jssocials-share-linkedin"><a href="#" class="jssocials-share-link"><i class="fa fa-linkedin jssocials-share-logo"></i></a></div>
                                                    <div class="jssocials-share jssocials-share-pinterest"><a href="#" class="jssocials-share-link"><i class="fa fa-pinterest jssocials-share-logo"></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    -->
                                    </div>

                                </div>
                            </div>

                            <!-- Modal Content -->
                            <div class="modal fade wpneo-modal-wrapper" id="bioinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="wpneo-modal-content">
                                            <div class="wpneo-modal-wrapper-head">
                                                <h4>A propos de {{$annonce->user->name}}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>

                                            <div class="wpneo-modal-content-inner">
                                                <div class="wpneo-profile-left">
                                                </div>

                                                <div class="wpneo-profile-right">
                                                    <div class="wpneo-profile-name">{{$annonce->user->name}}</div>
                                                    <div class="wpneo-profile-campaigns">{{count($annonce->user->annonces->where('status', 1))}} Annonces</div>
                                                </div>

                                                <div class="wpneo-profile-about">
                                                    <h3>Bio</h3>
                                                    <p>{{$annonce->user->bio}}</p>
                                                </div>
                                                <!--
                                                <div class="wpneo-profile-about">
                                                    <h3>Portfolio</h3>
                                                    <p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                            -->
                                                <div class="wpneo-profile-about">
                                                    <a href="/chat/{{$annonce->user->id}}">
                                                        <h3>Envoyer message</h3>
                                                    </a>

                                                    <!--
                                                    <p>Email: rejuancse@gmail.com</p>
                                                    <p>Phone: 01727424216</p>
                                                    <p>Fax: 890989099</p>
                                                    <p>Website: <a href="http://www.demosite.com"> http://www.demosite.com </a></p><a class="wpneo-profile-button" href="mailto:rejuancse@gmail.com" target="_top">Contact Me</a>
                                                -->
                                                </div>
                                                <!--
                                                <div class="wpneo-profile-about">
                                                    <h3>Social Link</h3><a class="wpneo-social-link" href="#"><i class="wpneo-icon wpneo-icon-facebook"></i></a><a class="wpneo-social-link" href="#"><i class="wpneo-icon wpneo-icon-twitter"></i></a><a
                                                      class="wpneo-social-link" href="#"><i class="wpneo-icon wpneo-icon-gplus"></i></a><a class="wpneo-social-link" href="#"><i class="wpneo-icon wpneo-icon-linkedin"></i></a><a
                                                      class="wpneo-social-link" href="#"><i class="wpneo-icon wpneo-icon-pinterest"></i></a>
                                                </div>
                                            -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="wpneo-tab-update" class="wpneo-tab-content">
                            <div class="campaign_update_wrapper">
                                <ul class="wpneo-crowdfunding-update">
                                    <li>
                                        <span class="round-circle"></span>
                                        <h4>31-05-2018</h4>
                                        <p class="wpneo-crowdfunding-update-title">New Project Launches in Bangalore</p>
                                        <p>Corned beef leberkas fatback porchetta, strip steak salami turkey short loin flank ham hock landjaeger. Leberkas pork belly kevin shoulder filet mignon. Bacon spare ribs rump chuck turkey, ham hock capicola.
                                            Strip steak tongue kielbasa, boudin hamburger t-bone capicola turducken. Landjaeger meatloaf pork belly spare ribs chuck.</p>
                                    </li>
                                    <li>
                                        <span class="round-circle"></span>
                                        <h4>31-05-2018</h4>
                                        <p class="wpneo-crowdfunding-update-title">Our First Office Start</p>
                                        <p>Corned beef leberkas fatback porchetta, strip steak salami turkey short loin flank ham hock landjaeger. Leberkas pork belly kevin shoulder filet mignon. Bacon spare ribs rump chuck turkey, ham hock capicola.
                                            Strip steak tongue kielbasa, boudin hamburger t-bone capicola turducken. Landjaeger meatloaf pork belly spare ribs chuck.</p>
                                    </li>
                                    <li>
                                        <span class="round-circle"></span>
                                        <h4>31-05-2018</h4>
                                        <p class="wpneo-crowdfunding-update-title">We Touch the Million Dollar Milestone</p>
                                        <p>Corned beef leberkas fatback porchetta, strip steak salami turkey short loin flank ham hock landjaeger. Leberkas pork belly kevin shoulder filet mignon. Bacon spare ribs rump chuck turkey, ham hock capicola.
                                            Strip steak tongue kielbasa, boudin hamburger t-bone capicola turducken. Landjaeger meatloaf pork belly spare ribs chuck.</p>
                                    </li>
                                    <li>
                                        <span class="round-circle"></span>
                                        <h4>31-05-2018</h4>
                                        <p class="wpneo-crowdfunding-update-title">Our Employee Reach 100 Person</p>
                                        <p>Corned beef leberkas fatback porchetta, strip steak salami turkey short loin flank ham hock landjaeger. Leberkas pork belly kevin shoulder filet mignon. Bacon spare ribs rump chuck turkey, ham hock capicola.
                                            Strip steak tongue kielbasa, boudin hamburger t-bone capicola turducken. Landjaeger meatloaf pork belly spare ribs chuck.</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div id="wpneo-tab-baker_list" class="wpneo-tab-content">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>Donate Amount</th>
                                        <th>Date</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            Fahim Murshaed </td>
                                        <td>
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span> 4,500.00</span> </td>
                                        <td>November 28, 2017</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div id="wpneo-tab-reviews" class="wpneo-tab-content">
                            <div id="reviews" class="woocommerce-Reviews">
                                <div id="comments">
                                    <h2 class="woocommerce-Reviews-title">
                                        Reviews </h2>

                                    <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                </div>

                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">Be the first to review “Dreamfall Chapters: The Longest Journey” <small><a rel="nofollow" id="cancel-comment-reply-link"
                                                      href="/wordpress/backnow/product/dreamfall-chapters-the-longest-journey/#respond" style="display:none;">Cancel reply</a></small></span>
                                            <form action="https://demo.themeum.com/wordpress/backnow/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                                                <div class="comment-form-rating"><label for="rating">Your rating</label>
                                                    <p class="stars"> <span> <a class="star-1" href="#">1</a> <a class="star-2" href="#">2</a> <a class="star-3" href="#">3</a> <a class="star-4" href="#">4</a> <a class="star-5" href="#">5</a> </span>
                                                    </p><select name="rating" id="rating" required="" style="display: none;">
                                                        <option value="">Rate…</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very poor</option>
                                                    </select>
                                                </div>
                                                <p class="comment-form-comment"><label for="comment">Your review&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea></p>
                                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit"> <input type="hidden" name="comment_post_ID" value="1859" id="comment_post_ID">
                                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                                </p>
                                            </form>
                                        </div><!-- #respond -->
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>

                        </div>
                    </div>
                    <div class="clear-float"></div>
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div>
</div>

<!--Tap script-->

      <script>
          $(document).ready(function(){

             $(function(){
				$('.wpneo-tabs-menu li a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('wpneo-current')
				$('.wpneo-tabs-menu li a').click(function(){
					$(this).parent().addClass('wpneo-current').siblings().removeClass('wpneo-current')
				})
			})

            $(".wpneo-tabs-menu li a").click(function () {
		        $(".wpneo-tab .wpneo-tab-content").hide();
		        $($(this).attr("href")).css('display', 'block');
		    });
          });
      </script>

@endsection
