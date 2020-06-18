@extends('layouts.menu')
@section('title', 'Modifier votre profil')

@section('content')

<style media="screen">
    @media screen and (min-width: 768px)
    {
        .ss-content-wrapper{
            margin: 5rem;
        }
        .text-right{text-align: center!important;}
    }
</style>

<style media="screen">
.profile-bg-picture {
background: linear-gradient(rgba(34, 34, 34, 0.7), rgba(34, 34, 34, 0.7)), url(../img/blog/13.jpg) no-repeat center center fixed;
background-position: center center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-attachment: scroll;
color: #fff;
height: 55vh;
display: flex;
align-items: center;
justify-content: center;
}
</style>

<!--user-section-->
<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
section{display:block;}
small{font-size:80%;}
img{border-style:none;}
button{font-family:'Montserrat', sans-serif;font-size:100%;line-height:1.15;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button,html [type="button"]{-webkit-appearance:button;}
button::-moz-focus-inner,[type="button"]::-moz-focus-inner{border-style:none;padding:0;}
button:-moz-focusring,[type="button"]:-moz-focusring{outline:1px dotted ButtonText;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,p::first-line,div::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
img{vertical-align:middle;}
button{-ms-touch-action:manipulation;touch-action:manipulation;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button{line-height:inherit;}
h4{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{font-size:1.5rem;}
small{font-size:80%;font-weight:normal;}
.container{position:relative;margin-left:auto;margin-right:auto;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 576px){
.container{width:540px;max-width:100%;}
}
@media (min-width: 768px){
.container{width:720px;max-width:100%;}
}
@media (min-width: 992px){
.container{width:960px;max-width:100%;}
}
@media (min-width: 1200px){
.container{width:1140px;max-width:100%;}
}
.row{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
@media (min-width: 576px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 768px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 992px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 1200px){
.row{margin-right:-15px;margin-left:-15px;}
}
.col-sm-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 576px){
.col-sm-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
.btn{display:inline-block;font-weight:normal;line-height:1.25;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:0.5rem 1rem;font-size:1rem;border-radius:0.25rem;-webkit-transition:all 0.2s ease-in-out;-o-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;}
.btn:focus,.btn:hover{text-decoration:none;}
.btn:focus{outline:0;-webkit-box-shadow:0 0 0 2px rgba(2, 117, 216, 0.25);box-shadow:0 0 0 2px rgba(2, 117, 216, 0.25);}
.btn:disabled{cursor:not-allowed;opacity:.65;}
.btn:active{background-image:none;}
.btn-success{color:#fff;background-color:#5cb85c;border-color:#5cb85c;}
.btn-success:hover{color:#fff;background-color:#449d44;border-color:#419641;}
.btn-success:focus{-webkit-box-shadow:0 0 0 2px rgba(92, 184, 92, 0.5);box-shadow:0 0 0 2px rgba(92, 184, 92, 0.5);}
.btn-success:disabled{background-color:#5cb85c;border-color:#5cb85c;}
.btn-success:active{color:#fff;background-color:#449d44;background-image:none;border-color:#419641;}
.media-body{-webkit-box-flex:1;-webkit-flex:1 1 0%;-ms-flex:1 1 0%;flex:1 1 0%;}
.text-right{text-align:right;}
.text-muted{color:#636c72!important;}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-left{float:left;}
.fa-user:before{content:"\f007";}
div,span,h4,p,img,small,i,section{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
section{display:block;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
small{font-size:80%;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
.user-section .profile-user-box{background-color:#ffffff;padding:20px;border:1px solid #e2e2e2;position:relative;top:-50px;border-radius:5px;align-self:flex-end;}
.user-section .m-r-15{margin-right:15px!important;}
.user-section .pull-left{float:left!important;}
.user-section .thumb-lg{height:88px;width:88px;}
.user-section .media-body{display:table-cell;vertical-align:top;}
.user-section .media-body{width:10000px;}
.user-section .media-body h4{font-family:'Montserrat', sans-serif;font-size:23px!important;color:#1ab394;}
.user-section .media-body p{font-family:'Montserrat', sans-serif;}
.user-section .m-b-0{margin-bottom:0!important;}
.user-section .btn-success{font-family:'Montserrat', sans-serif;font-size:14px!important;background-color:#1B6DC1!important;border:1px solid #1B6DC1!important;}
.user-section .m-r-5{margin-right:5px!important;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}

</style>


<!--mindvalley style-->
<style media="screen">
/*! CSS Used from: https://beta.mindvalley.com/css/app-7b34aadc7487ebee416140622cdcb51a.css?vsn=d */
a{background-color:transparent;}
img{border-style:none;}
input{font-family:inherit;font-size:100%;line-height:1.15;margin:0;}
input{overflow:visible;}
*,:after,:before{box-sizing:inherit;}
a{text-decoration:none;}
@media (min-width:992px){
.profile-page .avatar-container{display:none;}
}
.field-value{color:#333;font-family:'Montserrat', sans-serif;font-size:1rem;letter-spacing:.11px;line-height:1.5em;padding-bottom:1.25em;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
@media (min-width:992px){
.field-value{padding-bottom:1.875em;}
}
.field-value.social{padding-top:.3125em;}
@media (min-width:992px){
.field-value.social{padding-bottom:1.875em;}
}
.bio-field{white-space:pre-wrap;word-wrap:break-word;}
input:invalid{border:1px solid #fa524f;}
input:invalid:focus{outline:0;}
.text-input-icon{text-indent:1.875em;background-position:left .625em;}
.text-input-icon{background-repeat:no-repeat;background-size:1.25em;}
.ss-avatar-upload-wrapper{position:relative;display:inline-block;margin-bottom:1.25em;max-width:16.875em;}
.ss-avatar-upload-wrapper .ss-avatar{height:auto;border-radius:10px;max-width:100%;}
.ss-avatar-upload-wrapper .ss-edit-avatar{text-align:center;flex:auto;font-size:.875rem;background-color:rgba(0,0,0,.5);color:hsla(0,0%,100%,.8);border-radius:0 0 10px 10px;padding:.8em 0 .7em;position:absolute;bottom:5px;right:0;left:0;cursor:pointer;margin:0;}
.ss-avatar-upload-wrapper .ss-edit-avatar:before{content:"";display:inline-block;background:url(https://static.mindvalley.com/public/assets/2019/04/ico-solid-camera.svg) no-repeat;width:20px;height:1.09375rem;margin-right:.3125em;opacity:.7;vertical-align:text-bottom;}
.ss-avatar-upload-wrapper .ss-avatar-progress-bar{display:none;text-align:center;font-size:.875rem;color:hsla(0,0%,100%,.8);padding:.8em 0 .7em;height:2.6rem;position:absolute;bottom:5px;right:0;left:0;background:#000;border-radius:0 0 10px 10px;box-shadow:inset 0 -1px 1px hsla(0,0%,100%,.3);}
.ss-avatar-upload-wrapper .ss-avatar-progress-bar .ss-avatar-progress-bar-animation{width:0;display:block;height:100%;position:absolute;bottom:0;right:0;left:0;border-radius:0 0 10px 10px;background-color:#575e65;box-shadow:inset 0 2px 9px hsla(0,0%,100%,.3),inset 0 -2px 6px rgba(0,0,0,.4);overflow:hidden;}
.ss-avatar-upload-wrapper .ss-avatar-progress-bar .ss-avatar-progress-bar-animation:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background-image:linear-gradient(-45deg,hsla(0,0%,100%,.2) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.2) 0,hsla(0,0%,100%,.2) 75%,transparent 0,transparent);z-index:1;background-size:50px 50px;animation:move 2s linear infinite;border-top-right-radius:8px;border-bottom-right-radius:8px;border-top-left-radius:20px;border-bottom-left-radius:20px;overflow:hidden;}
.ss-avatar-upload-wrapper .ss-avatar-progress-bar .ss-avatar-progress-bar-animation:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background-image:-webkit-gradient(linear,0 0,100% 100%,color-stop(.25,hsla(0,0%,100%,.2)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,hsla(0,0%,100%,.2)),color-stop(.75,hsla(0,0%,100%,.2)),color-stop(.75,transparent),to(transparent));background-image:-moz-linear-gradient(-45deg,hsla(0,0%,100%,.2) 25%,transparent 25%,transparent 50%,hsla(0,0%,100%,.2) 50%,hsla(0,0%,100%,.2) 75%,transparent 75%,transparent);z-index:1;-webkit-background-size:50px 50px;-moz-background-size:50px 50px;-webkit-animation:move 2s linear infinite;-webkit-border-top-right-radius:8px;-webkit-border-bottom-right-radius:8px;-moz-border-radius-topright:8px;-moz-border-radius-bottomright:8px;border-top-right-radius:8px;border-bottom-right-radius:8px;-webkit-border-top-left-radius:20px;-webkit-border-bottom-left-radius:20px;-moz-border-radius-topleft:20px;-moz-border-radius-bottomleft:20px;border-top-left-radius:20px;border-bottom-left-radius:20px;overflow:hidden;}
.ss-avatar-upload-wrapper .ss-avatar-progress-bar .ss-avatar-progress-bar-animation:after{animation:move 2s linear infinite;}
.ss-avatar-upload-wrapper .ss-avatar-input{display:none;}
.ss-avatar-error-message{color:red;font-size:.8rem;margin-top:-1em;margin-bottom:1em;text-align:center;display:none;}
.ss-page-title{font-family: 'Montserrat', sans-serif;color:#2c313b;font-size:1.875rem;font-weight:700;letter-spacing:.21px;line-height:1.167em;padding-bottom:1em;text-align: center;}
.ss-profile-info{border-radius:8px;background-color:#fff;box-shadow:0 10px 20px 0 rgba(0,0,0,.1);padding:1.875em 1.25em;margin-bottom:3.13em;}
@media (min-width:480px){
.ss-profile-info{padding:1.875em;}
}
@media (min-width:992px){
.ss-profile-info{padding:2.5em 4.375em;}
}
.ss-profile-details{border-bottom:1px solid #dfdfdf;padding-bottom:1.875em;}
.ss-profile-social{padding-top:3.125em;}
.bot{
border-bottom: 1px solid #dfdfdf;
    padding-bottom: 1.875em;
    }
@media (min-width:992px){
.ss-profile-social{padding-top:2.5em;}
}
.ss-social-title{color:#2c313b;font-size:1.375rem;font-weight:700;letter-spacing:.16px;line-height:1.18em;font-family: 'Montserrat', sans-serif;}
@media (min-width:768px){
.ss-social-title{color:#333;}
}
@media (min-width:992px){
.ss-social-title{font-size:1.25rem;line-height:1.2em;letter-spacing:.14px;}
}
.ss-social-subtitle{font-family: 'Montserrat', sans-serif;color:#62686e;font-size:.875rem;letter-spacing:.1px;line-height:1.286em;padding:.71em 0 2.14em;}
@media (min-width:768px){
.ss-social-subtitle{padding-bottom:2.14em;}
}
@media (min-width:992px){
.ss-social-subtitle{font-size:1rem;line-height:1.3125em;}
}
.ss-flex{display:flex;flex-wrap:wrap;}
.ss-flex-item-info{width:100%;}
@media (min-width:480px){
.ss-flex-item-info{width:50%;}
.ss-flex-item-info.email{order:2;padding:0 0 0 .9375em;align-self:center;}
.ss-flex-item-info.avatar{order:1;padding:0 .9375em 0 0;}
}
@media (min-width:768px){
.ss-flex-item-info.email{padding:0 0 0 2.1875em;}
.ss-flex-item-info.avatar{padding:0 2.1875em 0 0;}
}
@media (min-width:992px){
.ss-flex-item-info.email{order:1;padding:0 .9375em 0 0;}
.ss-flex-item-info.avatar{order:2;padding:0 0 0 .9375em;}
}
.ss-flex-item{width:100%;}
@media (min-width:480px){
.ss-flex-item{text-align:left;width:50%;}
.ss-flex-item:nth-of-type(2n){padding-left:.9375em;}
.ss-flex-item:nth-of-type(2n-1){padding-right:.9375em;}
}
@media (min-width:768px){
.ss-flex-item:nth-of-type(2n){padding-left:2.1875em;}
.ss-flex-item:nth-of-type(2n-1){padding-right:2.1875em;}
}
@media (min-width:992px) and (max-width:1200px){
.ss-flex-item:nth-of-type(2n){padding-left:.9375em;}
.ss-flex-item:nth-of-type(2n-1){padding-right:.9375em;}
}
.ss-item-flex-full{width:100%;}
.ss-field-label{font-family: 'Montserrat', sans-serif; color:#62686e;font-size:.875rem;letter-spacing:.1px;line-height:1.286em;padding:.714em .3125em .714em 0;}
.ss-field-label-large{font-family: 'Montserrat', sans-serif;color:#2c313b;font-size:1.5rem;font-weight:700;padding-bottom:.5em;}
.ss-empty-value{color:#95989d;}
.ss-field-privacy-notice{border-radius:9.5px;background-color:#f5f5f5;font-size:.75rem;letter-spacing:.09px;line-height:1.417em;color:#95989d;padding:.416em .833em;}
.ss-field-privacy-notice .ss-lock{height:.625rem;}
.ss-icon-facebook{background-size:inherit;text-indent:1.5625em;}
.ss-edit-profile-button{font-family: 'Montserrat', sans-serif;display:inline-block;background-color:#1B6DC1;border-radius:91px;color:#fff;width:100%;font-size:1rem;font-weight:600;letter-spacing:.4px;line-height:1em;text-align:center;padding:.9375em 0;margin-top:1.875em;margin-right:15px;cursor:pointer;}
.ss-edit-profile-button:focus{outline:0;}
.ss-edit-profile-button:hover{background-color:#ffffff;border: 2px solid #1B6DC1;}
@media (min-width:768px){
.ss-edit-profile-button{padding-left:40px;padding-right:40px;max-width:16em;}
}
@media (min-width:992px){
.ss-two-column-page .ss-content-wrapper{width:75%;}
}
.ss-two-column-page .ss-page-title{color:#2c313b;font-size:1.875rem;font-weight:700;letter-spacing:.21px;line-height:1.167em;padding-bottom:1em;margin:0;font-family: 'Montserrat', sans-serif;}
.lazyload{opacity:0;}
.lazyloaded{opacity:1;transition:opacity .3s;}

</style>



<!--style tab dashboard-->
<style media="screen">
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/plugins/wp-crowdfunding/assets/css/crowdfunding-front.css?ver=2.0.2 ; media=all */
@media all{
.wp-crowd-btn{padding:10px 20px;text-decoration:none;box-shadow:none;border:none;font-size:14px;font-weight:300;border-radius:3px;text-transform:capitalize;transition:400ms;}
.wp-crowd-btn:hover,.wp-crowd-btn:focus{text-decoration:none;outline:0;}
.wpneo-links div a.wp-crowd-btn-primary:hover,.wp-crowd-btn-primary:focus{color:#fff;}
.wpneo-head{margin-bottom:30px;background:#fff;padding:0 20px;}
.wpneo-links .wpneo-links-list{display:inline-block;}
.wpneo-links .wpneo-links-list a{display:block;color:#686C8B;font-size:14px;line-height:58px;padding:0;margin-right:25px;text-decoration:none;font-weight:400;box-shadow:none;}
.wpneo-links .wpneo-links-list a:focus{outline:0;}
.wpneo-links a{box-shadow:none;line-height:20px;}
.wp-crowd-new-campaign{float:right;margin-top:7px;}
.wpneo-shadow{-webkit-box-shadow:0 0 3px rgba(0, 0, 0, 0.1);box-shadow:0 0 3px rgba(0, 0, 0, 0.1);background:#fff;border-radius:4px;}
.wp-crowd-parent{position:relative;}
.wpneo-links-list{display:block;position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.wpneo-links-lists{display:block;padding:0 25px;}
.wpneo-links .wpneo-links-list .wpneo-links-lists a{line-height:40px;}
.wp-crowd-submenu{position:absolute;width:230px;top:100%;left:0;padding:10px 0;opacity:0;visibility:hidden;-webkit-transiton:350ms;-moz-transition:350ms;-ms-transition:350ms;-o-transition:350ms;transition:350ms;-webkit-transform:translate(0, 25px);transform:translate(0, 25px);z-index:1;}
.wpneo-links-list:hover .wp-crowd-submenu{opacity:1;visibility:visible;-webkit-transform:translate(0, 1px);transform:translate(0, 1px);}
.wpcrowd-arrow-down{border:solid #686C8B;border-width:0 2px 2px 0;display:inline-block;padding:2.5px;transform:rotate(45deg);-webkit-transform:rotate(45deg);position:relative;left:5px;top:-2px;}
.wp-crowd-btn-primary{background-color:#1B6DC1;color:#fff;}
.wp-crowd-btn-primary:hover{background-color:#1B6DC1;color:#fff;}
.wpneo-links div a:hover,.wpneo-links div.active a{color:#1B6DC1;}
.wpneo-links div a:hover .wpcrowd-arrow-down{border:solid #1adc68;border-width:0 2px 2px 0;}
@media (max-width: 992px){
.wpneo-links .wpneo-links-list a{font-size:14px;margin-right:20px;line-height:24px;}
.wpneo-head{padding-top:10px;}
.wp-crowd-new-campaign{float:none;display:inline-block;margin-bottom:24px;}
}
@media (max-width: 767px){
.wp-crowd-submenu{right:-60%;left:auto;}
}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/bootstrap.min.css?ver=all ; media=all */
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*,::after,::before{box-sizing:border-box;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
.clearfix::after{display:block;clear:both;content:"";}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/main.css?ver=all ; media=all */
@media all{
.wp-crowd-new-campaign{margin-top:17px;}
.wp-crowd-btn{border-radius:50px;}
.wpneo-head{background:#fff;}
.wpneo-links .wpneo-links-list a{font-weight:300;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/css/custom.css?ver=all ; media=all */
@media all{
.wp-crowd-submenu{width:230px;}
}
/*! CSS Used from: https://demo.themeum.com/wordpress/backnow/wp-content/themes/backnow/style.css?ver=4.9.15 ; media=all */
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
}
/*! CSS Used from: Embedded */
a{color:#33d3c0;}
a:hover{color:#00bf9c;}
/*! CSS Used from: Embedded */
.wp-crowd-btn-primary{background-color:#1B6DC1;color:#fff;}
.wp-crowd-btn-primary:hover{background-color:#1B6DC1;color:#fff;}
.wpneo-links div a:hover,.wpneo-links div.active a{color:#33d3c0;}
.wpneo-links div a:hover .wpcrowd-arrow-down{border:solid #1B6DC1;border-width:0 2px 2px 0;}
.hide{display:none!important;}
.form_style{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding: 20px;
    border-radius: 20px;
}
.form_style_sec {margin: 5rem;}
.header_form{background-color:#efeeee!important;}
@media only screen and (max-width: 600px) {
  .form_style_sec {margin: 1.5rem;}
}
</style>

<!--style unsplash-->
<style media="screen">
/*! CSS Used from: https://unsplash.com/assets/application-f75735f5491078c7be55e653e6bbd242c88aaf155bc1fc4559cce30f0bfa0d8c.css ; media=all */
@media all{
a:focus{outline:thin dotted;}
a:active,a:hover{outline:0;}
h1{font-size:2em;margin:0.67em 0;}
strong{font-weight:700;}
img{border:0;}
svg:not(:root){overflow:hidden;}
input,textarea{font-family:inherit;font-size:100%;margin:0;padding:0;}
input{line-height:normal;}
input[type="submit"]{-webkit-appearance:button;cursor:pointer;border-radius: 20px;width: 50%;}
input[type="checkbox"]{box-sizing:border-box;padding:0;}
input::-moz-focus-inner{border:0;padding:0;}
textarea{overflow:auto;vertical-align:top;}
.row{margin-left:-12px;margin-right:-12px;}
.row:before,.row:after{content:" ";display:table;}
.row:after{clear:both;}
.row:before,.row:after{content:" ";display:table;}
.row:after{clear:both;}
.row:before{content:none;}
.row:after{content:'';}
.col-sm-4,.col-sm-6,.col-sm-8,.col-md-9,.col-xs-12{position:relative;min-height:1px;padding-left:12px;padding-right:12px;}
.col-xs-12{width:100%;}
@media (min-width: 768px){
.col-sm-4,.col-sm-6,.col-sm-8{float:left;}
.col-sm-8{width:66.66666667%;}
.col-sm-6{width:50%;}
.col-sm-4{width:33.33333333%;}
}
@media (min-width: 992px){
.col-md-9{float:left;}
.col-md-9{width:75%;}
}
.hide{display:none!important;}
.margin-bottom{margin-bottom:24px;}
*,*:before,*:after{box-sizing:border-box;}
input,textarea{font-family:inherit;font-size:inherit;line-height:inherit;letter-spacing:inherit;}
a{color:#767676;text-decoration:underline;-webkit-transition:color 0.1s ease-in-out, fill 0.1s ease-in-out, opacity 0.1s ease-in-out;transition:color 0.1s ease-in-out, fill 0.1s ease-in-out, opacity 0.1s ease-in-out;}
a:hover,a:focus{color:#111111;}
a:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.icon{display:inline-block;vertical-align:middle;fill:#111111;line-height:1;speak:none;text-decoration:inherit;width:18px;height:18px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;-webkit-transition:fill 0.1s ease-in-out;transition:fill 0.1s ease-in-out;}
a .icon{fill:#767676;text-decoration:none!important;-webkit-transition:fill 0.1s ease-in-out, opacity 0.1s ease-in-out;transition:fill 0.1s ease-in-out, opacity 0.1s ease-in-out;}
a:hover .icon,a:focus .icon{fill:#111111;}
img{vertical-align:middle;}
.upload-circular__image{display:block;width:100%;height:auto;}
.arch:before,.arch:after{content:" ";display:table;}
.arch:after{clear:both;}
.arch:before,.arch:after{content:" ";display:table;}
.arch:after{clear:both;}
.arch .arch-left{float:none;text-align:left;}
.arch .arch-right{float:none;text-align:left;}
@media (min-width: 768px){
.arch .arch-left{float:left!important;}
.arch .arch-right{float:right!important;text-align:right;}
}
label{display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:baseline;-webkit-align-items:baseline;-ms-flex-align:baseline;align-items:baseline;max-width:100%;margin-bottom:6px;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;}
label span{margin-left:4px;margin-right:4px;}
input[type="checkbox"]{margin:5px 8px 0 0;margin-top:1px \9;line-height:normal;-webkit-transform:translateY(1px);-ms-transform:translateY(1px);transform:translateY(1px);}
input[type="file"]{display:block;}
input[type="file"]:focus,input[type="checkbox"]:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.form-control{display:block;width:100%;height:40px;padding:6px 12px;font-size:15px;line-height:1.6;color:#111111;background-color:transparent;background-image:none;border:1px solid #767676;border-radius:3px;-webkit-transition:border-color ease-in-out 0.15s;transition:border-color ease-in-out 0.15s;}
.form-control:focus{border-color:#111111;outline:0;}
.form-control::-moz-placeholder{color:#767676;opacity:1;}
.form-control:-ms-input-placeholder{color:#767676;}
.form-control::-webkit-input-placeholder{color:#767676;}
textarea.form-control{height:auto;resize:vertical;min-height:40px;}
.input-with-counter{position:relative;}
.input-with-counter textarea{resize:none;}
.input-with-counter .character-count{position:absolute;right:10px;font-size:12px;color:#767676;pointer-events:none;}
.input-with-counter .character-count--textarea{bottom:8px;}
.form-group{margin-bottom:24px;}
.form-group .input-group{display:inline-table;width:100%;}
.form-group .input-group .input-group-addon,.form-group .input-group .form-control{display:table-cell;}
.form-group .input-group .input-group-addon{text-align:center;border:1px solid #767676;border-right:0;border-top-left-radius:3px;border-bottom-left-radius:3px;}
.form-group .input-group .input-group-addon+input{border-top-left-radius:0;border-bottom-left-radius:0;}
.checkbox{position:relative;display:block;margin-bottom:16px;}
.checkbox label{min-height:18px;margin-bottom:0;font-weight:normal;cursor:pointer;line-height:1.5;}
.checkbox--with-helper{display:inline-block;margin-bottom:24px;}
.label__helper{margin-top:4px;margin-left:20px;font-size:13px;display:block;}
.help-block{display:block;color:currentColor;}
.help-block p{font-size:13px;line-height:1.6;margin-top:8px;}
h1,h6{font-size:22px;font-weight:400;margin:0 0 16px;padding:0;}
.delta{font-size:16px;}
@media (min-width: 768px){
.delta{font-size:18px;}
}
.zeta{font-size:13px;line-height:18px;}
p{font-size:15px;font-weight:400;line-height:1.6;margin:16px 0;}
.text-left{text-align:left!important; font-family: 'Montserrat', sans-serif;}
.text-center{text-align:center!important;}
.text-weight--bold{font-weight:700;}
.text-weight--medium{font-weight:500;}
.link--no-underline{text-decoration:none!important;}
.text-secondary{color:#767676;}
.btn{display:inline-block;margin-bottom:0;text-align:center;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;text-decoration:none;box-shadow:0 1px 4px rgba(0,0,0,0.02),0 1px 1px rgba(0,0,0,0.06);padding:9px 18px;font-size:15px;line-height:1.6;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:background-color 0.1s ease-in-out, border-color 0.1s ease-in-out, color 0.1s ease-in-out;transition:background-color 0.1s ease-in-out, border-color 0.1s ease-in-out, color 0.1s ease-in-out;}
.btn:focus,.btn:active:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:#ffffff;text-decoration:none;}
.btn:active{outline:0;background-image:none;}
.btn-default{color:#ffffff;background-color:#8a4711;}
.btn-default:hover,.btn-default:active{background-color:#D86000;}
.btn-block-level{width:100%;}
@media screen and (max-width: 768px)
    {
        .btn-block-level{width: 262px!important;}
        .text-right{text-align: center !important;}

    }
    .sub{text-align: center !important;}

.pill{height:24px;border-radius:24px;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;font-size:13px;line-height:1;padding-right:12px;padding-left:12px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;text-decoration:none;background-color:#eaeaea;color:#767676;}
a .pill,a:hover .pill{text-decoration:none;}
.pill .icon{padding-right:3px;margin-left:-3px;fill:#767676;}
a .pill .icon,a:hover .pill .icon{fill:#767676;}
.pill--default{background-color:#5e5e5e;color:#ffffff;}
.pill--default .icon{fill:#ffffff;}
a .pill--default .icon,a:hover .pill--default .icon{fill:#ffffff;}
.tagsinput{overflow-y:auto;padding:6px 6px 1px;border:1px solid #767676;border-radius:3px;min-height:40px!important;}
.tagsinput:hover{cursor:text;}
.tagsinput input{width:80px;margin:0px;font-size:14px;border:1px solid transparent;background:transparent;color:#111111;outline:0px;margin-right:5px;}
.tagsinput div{display:block;float:left;}
.tags_clear{clear:both;width:100%;height:0px;}
.upload-circular-container{display:inline-block;}
.upload-circular{position:relative;border-radius:50%;width:128px;height:128px;margin:auto;overflow:hidden;}
.upload-circular__image--large{width:128px;height:128px;}
.upload-circular__progress{position:absolute;height:128px;top:0;width:0;background-color:#3cb46e;opacity:0.3;-webkit-transition:width 0.3s ease-in-out;transition:width 0.3s ease-in-out;}
.user-badges{margin-top:7px;}
.user-badges-container{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;min-height:50px;}
.no-badge-message{margin-top:6px;margin-bottom:6px;}
.user-badges-list{margin:0;list-style:none;padding:0;background:#ffffff;border:1px solid #d1d1d1;border-radius:3px;box-shadow:2px 2px 6px rgba(0,0,0,0.12);position:absolute;width:100%;font-size:0;z-index:2;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;top:0;left:-8px;-webkit-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;opacity:1;-webkit-transform:scale(1) translate(0);-ms-transform:scale(1) translate(0);transform:scale(1) translate(0);visibility:visible;}
.user-badges-list--hidden{opacity:0;-webkit-transform:scale(0.8) translate(-5%, -5%);-ms-transform:scale(0.8) translate(-5%, -5%);transform:scale(0.8) translate(-5%, -5%);visibility:hidden;}
@media (max-width: 767px){
.user-badges-list--hidden{display:none;}
}
@media (max-width: 767px){
.user-badges-list{position:relative;}
}
.user-badges-list__item{display:inline-block;}
.user-badges-list__item a{display:inline-block;padding:8px;}
.user-badges-list__item a:hover{background-color:#eeeeee;}
.user-badges-list__item--text{font-size:12px;line-height:32px;}
}
</style>



@include('includes.user_header')

@if(session('status'))
@include('includes.status')
@endif

<section class="form_style_sec " >
    <div class="row form_style">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="arch">
                <div class="arch-left">
                    <h1 class="margin-bottom delta text-weight--bold">Modifier votre profil</h1>
                </div> <!-- close .arch-left -->
                {{--
                <div class="arch-right">
                    <a href="https://help.unsplash.com/en/articles/3314707-why-do-i-need-to-confirm-my-account" class="link--no-underline">
                        <span class="pill pill--default"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24" class="icon">
                                <style type="text/css">
                                    .st1 {
                                        display: inline;
                                    }

                                    .st2 {
                                        fill: none;
                                    }

                                    .st3 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    }
                                </style>
                                <path d="M12 2c-5.5 0-10 4.5-10 10s4.5 10 10 10 10-4.5 10-10-4.5-10-10-10zm4.2 14.1l-5.2-3.1v-6h1v5.2l4.8 2.7-.6 1.2z" height="24"></path>
                            </svg>
                            Confirmation pending</span>
                    </a>
                </div> <!-- close .arch-right -->
                --}}
            </div> <!-- close .arch -->




            <div class="form">
                <form enctype="multipart/form-data" class="edit_user" id="edit_user_4646744" action="{{url('users', Auth::user())}}" accept-charset="UTF-8" method="post" >
                    @csrf
                    {{method_field('patch')}}
                    <div class="container">
                    	
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 text-center">
                            <a id="openimgupload" class="upload-circular-container profile-image-container js-general-uploader-pseudo-file-field">
                                <div id="uploaded_image" class="upload-circular">
                                    <img sizes="128px"
                                      class="upload-circular__image upload-circular__image--large js-general-uploader-new-upload-target"
                                      src="/storage/images/users/{{Auth::user()->image}}">
                                    <div class="upload-circular__progress js-general-uploader-progress-target">
                                    </div> <!-- close .__progress -->
                                </div> <!-- close .upload-circular -->

                                <p class="text-center zeta js-edit-profile-image-trigger-text">Modifier l'image de profil</p>
                                <input id="imgupload" hidden type="file" accept="image/jpeg,image/png">
                                <input hidden type="text" name="user_id" value="{{Auth::user()->id}}">
                            </a> <!-- close .js -->

                            <div class="user-badges text-left">

                                <div class="form-group">
                                <label for="user_username">
                                    Nom d'utilisateur <span class="text-secondary"></span>
                                </label>
                                <input class="form-control" type="text" readonly value="{{Auth::user()->name}}" name="name" id="user_username">

                                <div class="help-block text-secondary">
                                    <p>@<strong>{{Auth::user()->name}}</strong></p>
                                </div> <!-- close .help-block -->

                            </div>
                            </div>


                        </div>

                        <div class="col-xs-8 col-sm-8">
                            <div class="form-group">
                                <label for="user_first_name">Nom </label>
                                <input class="form-control" type="text" value="{{Auth::user()->first_name}}" name="first_name" id="user_first_name">

                            </div> <!-- close .form-group -->

                            <div class="form-group">
                                <label for="user_last_name">Prénom </label>
                                <input class="form-control" type="text" value="{{Auth::user()->last_name}}" name="last_name" id="user_last_name">

                            </div> <!-- close .form-group -->
                            

                            <div class="form-group">
                                <label for="user_email">
                                    Email address
                                </label>
                                <input class="form-control" readonly type="email" value="{{Auth::user()->email}}" name="email" id="user_email">

                            </div> <!-- close .form-group -->

                            

                            <div class="form-group">
                                <label for="Image_cover">
                                    Image de fond
                                </label>
                                <input class="form-control" type="file" value="" name="image" id="">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                    </div> <!-- close .row -->
                    </div>
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Pays 
                                </label>
                                <!--input class="form-control" placeholder="Pays de naissance" value="{{Auth::user()->birth_country}}" type="text" name="birth_country"  id="country"-->
                                <select name="country" class="form-control" value="{{Auth::user()->country}}" id="pays">

                                    @if(Auth::user()->country !== null)
                                    <option selected value="{{Auth::user()->country}}">{{Auth::user()->country}}</option>
                                    @endif
									<option value="Afghanistan">Afghanistan </option>
									<option value="Afrique_Centrale">Afrique_Centrale </option>
									<option value="Afrique_du_sud">Afrique_du_Sud </option>
									<option value="Albanie">Albanie </option>
									<option value="Algerie">Algerie </option>
									<option value="Allemagne">Allemagne </option>
									<option value="Andorre">Andorre </option>
									<option value="Angola">Angola </option>
									<option value="Anguilla">Anguilla </option>
									<option value="Arabie_Saoudite">Arabie_Saoudite </option>
									<option value="Argentine">Argentine </option>
									<option value="Armenie">Armenie </option>
									<option value="Australie">Australie </option>
									<option value="Autriche">Autriche </option>
									<option value="Azerbaidjan">Azerbaidjan </option>

									<option value="Bahamas">Bahamas </option>
									<option value="Bangladesh">Bangladesh </option>
									<option value="Barbade">Barbade </option>
									<option value="Bahrein">Bahrein </option>
									<option value="Belgique">Belgique </option>
									<option value="Belize">Belize </option>
									<option value="Benin">Benin </option>
									<option value="Bermudes">Bermudes </option>
									<option value="Bielorussie">Bielorussie </option>
									<option value="Bolivie">Bolivie </option>
									<option value="Botswana">Botswana </option>
									<option value="Bhoutan">Bhoutan </option>
									<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
									<option value="Bresil">Bresil </option>
									<option value="Brunei">Brunei </option>
									<option value="Bulgarie">Bulgarie </option>
									<option value="Burkina_Faso">Burkina_Faso </option>
									<option value="Burundi">Burundi </option>

									<option value="Caiman">Caiman </option>
									<option value="Cambodge">Cambodge </option>
									<option value="Cameroun">Cameroun </option>
									<option value="Canada">Canada </option>
									<option value="Canaries">Canaries </option>
									<option value="Cap_vert">Cap_Vert </option>
									<option value="Chili">Chili </option>
									<option value="Chine">Chine </option>
									<option value="Chypre">Chypre </option>
									<option value="Colombie">Colombie </option>
									<option value="Comores">Colombie </option>
									<option value="Congo">Congo </option>
									<option value="Congo democratique">Congo_democratique </option>
									<option value="Cook">Cook </option>
									<option value="Coree du_Nord">Coree_du_Nord </option>
									<option value="Coree du Sud">Coree du_Sud </option>
									<option value="Costa Rica">Costa Rica </option>
									<option value="Côte d'Ivoire">Côte d'Ivoire </option>
									<option value="Croatie">Croatie </option>
									<option value="Cuba">Cuba </option>

									<option value="Danemark">Danemark </option>
									<option value="Djibouti">Djibouti </option>
									<option value="Dominique">Dominique </option>

									<option value="Egypte">Egypte </option>
									<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
									<option value="Equateur">Equateur </option>
									<option value="Erythree">Erythree </option>
									<option value="Espagne">Espagne </option>
									<option value="Estonie">Estonie </option>
									<option value="Etats_Unis">Etats_Unis </option>
									<option value="Ethiopie">Ethiopie </option>

									<option value="Falkland">Falkland </option>
									<option value="Feroe">Feroe </option>
									<option value="Fidji">Fidji </option>
									<option value="Finlande">Finlande </option>
									<option value="France">France </option>

									<option value="Gabon">Gabon </option>
									<option value="Gambie">Gambie </option>
									<option value="Georgie">Georgie </option>
									<option value="Ghana">Ghana </option>
									<option value="Gibraltar">Gibraltar </option>
									<option value="Grece">Grece </option>
									<option value="Grenade">Grenade </option>
									<option value="Groenland">Groenland </option>
									<option value="Guadeloupe">Guadeloupe </option>
									<option value="Guam">Guam </option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guernesey">Guernesey </option>
									<option value="Guinee">Guinee </option>
									<option value="Guinee_Bissau">Guinee_Bissau </option>
									<option value="Guinee equatoriale">Guinee_Equatoriale </option>
									<option value="Guyana">Guyana </option>
									<option value="Guyane_Francaise ">Guyane_Francaise </option>

									<option value="Haiti">Haiti </option>
									<option value="Hawaii">Hawaii </option>
									<option value="Honduras">Honduras </option>
									<option value="Hong_Kong">Hong_Kong </option>
									<option value="Hongrie">Hongrie </option>

									<option value="Inde">Inde </option>
									<option value="Indonesie">Indonesie </option>
									<option value="Iran">Iran </option>
									<option value="Iraq">Iraq </option>
									<option value="Irlande">Irlande </option>
									<option value="Islande">Islande </option>
									<option value="Israel">Israel </option>
									<option value="Italie">italie </option>

									<option value="Jamaique">Jamaique </option>
									<option value="Jan Mayen">Jan Mayen </option>
									<option value="Japon">Japon </option>
									<option value="Jersey">Jersey </option>
									<option value="Jordanie">Jordanie </option>

									<option value="Kazakhstan">Kazakhstan </option>
									<option value="Kenya">Kenya </option>
									<option value="Kirghizstan">Kirghizistan </option>
									<option value="Kiribati">Kiribati </option>
									<option value="Koweit">Koweit </option>

									<option value="Laos">Laos </option>
									<option value="Lesotho">Lesotho </option>
									<option value="Lettonie">Lettonie </option>
									<option value="Liban">Liban </option>
									<option value="Liberia">Liberia </option>
									<option value="Liechtenstein">Liechtenstein </option>
									<option value="Lituanie">Lituanie </option>
									<option value="Luxembourg">Luxembourg </option>
									<option value="Lybie">Lybie </option>

									<option value="Macao">Macao </option>
									<option value="Macedoine">Macedoine </option>
									<option value="Madagascar">Madagascar </option>
									<option value="Madère">Madère </option>
									<option value="Malaisie">Malaisie </option>
									<option value="Malawi">Malawi </option>
									<option value="Maldives">Maldives </option>
									<option value="Mali">Mali </option>
									<option value="Malte">Malte </option>
									<option value="Man">Man </option>
									<option value="Mariannes du Nord">Mariannes du Nord </option>
									<option value="Maroc">Maroc </option>
									<option value="Marshall">Marshall </option>
									<option value="Martinique">Martinique </option>
									<option value="Maurice">Maurice </option>
									<option value="Mauritanie">Mauritanie </option>
									<option value="Mayotte">Mayotte </option>
									<option value="Mexique">Mexique </option>
									<option value="Micronesie">Micronesie </option>
									<option value="Midway">Midway </option>
									<option value="Moldavie">Moldavie </option>
									<option value="Monaco">Monaco </option>
									<option value="Mongolie">Mongolie </option>
									<option value="Montserrat">Montserrat </option>
									<option value="Mozambique">Mozambique </option>

									<option value="Namibie">Namibie </option>
									<option value="Nauru">Nauru </option>
									<option value="Nepal">Nepal </option>
									<option value="Nicaragua">Nicaragua </option>
									<option value="Niger">Niger </option>
									<option value="Nigeria">Nigeria </option>
									<option value="Niue">Niue </option>
									<option value="Norfolk">Norfolk </option>
									<option value="Norvege">Norvege </option>
									<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
									<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

									<option value="Oman">Oman </option>
									<option value="Ouganda">Ouganda </option>
									<option value="Ouzbekistan">Ouzbekistan </option>

									<option value="Pakistan">Pakistan </option>
									<option value="Palau">Palau </option>
									<option value="Palestine">Palestine </option>
									<option value="Panama">Panama </option>
									<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
									<option value="Paraguay">Paraguay </option>
									<option value="Pays_Bas">Pays_Bas </option>
									<option value="Perou">Perou </option>
									<option value="Philippines">Philippines </option>
									<option value="Pologne">Pologne </option>
									<option value="Polynesie">Polynesie </option>
									<option value="Porto_Rico">Porto_Rico </option>
									<option value="Portugal">Portugal </option>

									<option value="Qatar">Qatar </option>

									<option value="Republique_Dominicaine">Republique_Dominicaine </option>
									<option value="Republique_Tcheque">Republique_Tcheque </option>
									<option value="Reunion">Reunion </option>
									<option value="Roumanie">Roumanie </option>
									<option value="Royaume_Uni">Royaume_Uni </option>
									<option value="Russie">Russie </option>
									<option value="Rwanda">Rwanda </option>

									<option value="Sahara Occidental">Sahara Occidental </option>
									<option value="Sainte_Lucie">Sainte_Lucie </option>
									<option value="Saint_Marin">Saint_Marin </option>
									<option value="Salomon">Salomon </option>
									<option value="Salvador">Salvador </option>
									<option value="Samoa_Occidentales">Samoa_Occidentales</option>
									<option value="Samoa_Americaine">Samoa_Americaine </option>
									<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
									<option value="Senegal">Senegal </option>
									<option value="Seychelles">Seychelles </option>
									<option value="Sierra Leone">Sierra Leone </option>
									<option value="Singapour">Singapour </option>
									<option value="Slovaquie">Slovaquie </option>
									<option value="Slovenie">Slovenie</option>
									<option value="Somalie">Somalie </option>
									<option value="Soudan">Soudan </option>
									<option value="Sri_Lanka">Sri_Lanka </option>
									<option value="Suede">Suede </option>
									<option value="Suisse">Suisse </option>
									<option value="Surinam">Surinam </option>
									<option value="Swaziland">Swaziland </option>
									<option value="Syrie">Syrie </option>

									<option value="Tadjikistan">Tadjikistan </option>
									<option value="Taiwan">Taiwan </option>
									<option value="Tonga">Tonga </option>
									<option value="Tanzanie">Tanzanie </option>
									<option value="Tchad">Tchad </option>
									<option value="Thailande">Thailande </option>
									<option value="Tibet">Tibet </option>
									<option value="Timor_Oriental">Timor_Oriental </option>
									<option value="Togo">Togo </option>
									<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
									<option value="Tristan da cunha">Tristan de cuncha </option>
									<option value="Tunisie">Tunisie </option>
									<option value="Turkmenistan">Turmenistan </option>
									<option value="Turquie">Turquie </option>

									<option value="Ukraine">Ukraine </option>
									<option value="Uruguay">Uruguay </option>

									<option value="Vanuatu">Vanuatu </option>
									<option value="Vatican">Vatican </option>
									<option value="Venezuela">Venezuela </option>
									<option value="Vierges_Americaines">Vierges_Americaines </option>
									<option value="Vierges_Britanniques">Vierges_Britanniques </option>
									<option value="Vietnam">Vietnam </option>

									<option value="Wake">Wake </option>
									<option value="Wallis et Futuma">Wallis et Futuma </option>

									<option value="Yemen">Yemen </option>
									<option value="Yougoslavie">Yougoslavie </option>

									<option value="Zambie">Zambie </option>
									<option value="Zimbabwe">Zimbabwe </option>

								</select>

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        
                        
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Ville de résidence
                                </label>
                                <input class="form-control" placeholder="Ville de résidence" type="text" name="city" id="user_url search_input-2" value="{{Auth::user()->city}}">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                        

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Numéro de téléphone
                                </label>
                                <input class="form-control" placeholder="Numéro de téléphone" type="text" name="phone" id="phone" value="{{Auth::user()->phone}}">

                                

                                
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="user_url">
                                    biographie
                                </label>
                                <input type="hidden" name="bio" value="">
                           		<div class="" id="editorDetails" style="height: 200px;">
                           			@if(Auth::user()->bio !== null)
                                    {!!Auth::user()->bio!!}
                                    @endif
                           		</div>
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                       

                        <!--Father-->
                        
                        

                        <!--End Father-->

                        <!--Mother-->



                        
                        <!--End mother-->
                       
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group sub">
                                <input type="submit" name="commit" value="Enregistrez les modifications" class="btn btn-default btn-block-level" data-disable-with="···">
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                    </div> <!-- close .row -->
                </form>
            </div> <!-- close .form -->

            <div class="hide">
                <form action="" class="js-general-uploader-s3-form js-edit-profile-image-s3-form" data-callback-method="POST" data-callback-param="file" enctype="multipart/form-data">
                    <input type="file" name="file" id="file" class="js-general-uploader-s3-file-field">
                </form>

                <form class="js-edit-profile-image-form" action="/account/profile_image" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="put"><input type="hidden"
                      name="authenticity_token" value="bbMpoxP1932DrraVaAHqotMDQPc9PUdxreNo+yo7XlbAHHleLhFJvhDoyb4j7eZwkYurin1SkD6zUWoZozEtDg==">

                    <div class="hide js-general-uploader-form">
                    </div>

                    <input type="submit" name="commit" value="Save" class="js-general-uploader-form-submit" data-disable-with="Save">
                </form>
            </div> <!-- close .hide -->

            <script class="js-general-uploader-form-template" type="text/x-tmpl">
                <input name="profile_image[url]" id="profile_image_url" type="text" value="<%= file.url %>">
          <input name="profile_image[filetype]" id="profile_image_filetype" type="text" value="<%= file.filetype %>">
          <input name="profile_image[filepath]" id="profile_image_filesize" type="text" value="<%= file.filepath %>">
          <input name="profile_image[filesize]" id="profile_image_filesize" type="text" value="<%= file.filesize %>">
        </script>


        </div>

    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="/js/quill/image-resize.min.js"></script>
<script src="/js/quill/video-resize.min.js"></script>


        <script>
        var options = {
        modules: {
          toolbar: [
            [{ header: [1, 2, false] }],
            ['size', 'bold', 'italic', 'underline'],
            ['blockquote', 'align',],
            [{ list: 'ordered' }, { list: 'bullet' }]
        ],
        imageResize: {
             modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
         },
         videoResize: {
                modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
            },
         syntax: true,
        },
        placeholder: 'Ecrivez ici...',
        theme: 'snow'  // or 'bubble'
        };
        var quill = new Quill('#editorDetails', options);

            //a la sumissio  du formulmaire ob recupêre
            //le contenu de la div qui a le texte riche
            //et on met ce contenu dans l'input hidden
            var form = document.getElementById('edit_user_4646744');
            form.onsubmit = function() {
              // Populate hidden form on submit
              var text = document.querySelector('input[name=bio]');
              text.value = quill.root.innerHTML;

            //   console.log("Submitted", $(form).serialize(), $(form).serializeArray());

              // No back end to actually submit to!
            //   alert('Open the console to see the submit data!')
              return true;
            };
          </script>




<script type="text/javascript">

$('#openimgupload').click(function(){ $('#imgupload').trigger('click'); });

</script>

<script>
$(document).ready(function(){
 $(document).on('change', '#imgupload', function(){
  var name = document.getElementById("imgupload").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1)
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("imgupload").files[0]);
  var f = document.getElementById("imgupload").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
      form_data.append("image", document.getElementById('imgupload').files[0]);
      form_data.append("id_user", $('input[name=user_id]').val());

      $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });

   $.ajax({
    url:"/uploadAvatar",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },
    success:function(data)
    {
        console.log('ok');
     $('#uploaded_image').html('<img sizes="128px" class="upload-circular__image upload-circular__image--large js-general-uploader-new-upload-target" src="/storage/images/users/'+data.image+'" alt="'+data.name+'">');
 },
 error: function (xhr, msg) {
     console.log($('input[name=user_id]').val());
   console.log(msg + '\n' + xhr.responseText);
}
   });
  }
 });
});
</script>

<script src="/plugin/build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {

      autoPlaceholder: "polite",

       hiddenInput: "phone",

       nationalMode: true,

       preferredCountries: ["ci", "fr"],
       separateDialCode: true,
      utilsScript: "/plugin/build/js/utils.js",
    });
  </script>



@endsection
