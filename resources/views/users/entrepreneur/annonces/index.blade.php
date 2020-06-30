@extends('layouts.menu')
@section('title', 'Vos annonces')

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
.ss-avatar-error-message{color:#af0309;font-size:.8rem;margin-top:-1em;margin-bottom:1em;text-align:center;display:none;}
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
</style>


<!--pour les annonces-->

<style media="screen">
/*! CSS Used from: https://use.fontawesome.com/releases/v5.13.0/css/all.css */
.far{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1;}
.fa-heart:before{content:"\f004";}
.far{font-weight:400;}
.far{font-family:"Font Awesome 5 Free";}
/*! CSS Used from: https://kit-free.fontawesome.com/releases/latest/css/free.min.css ; media=all */
@media all{
.far{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1;}
.fa-heart:before{content:"\f004";}
.far{font-weight:400;}
.far{font-family:"Font Awesome 5 Free";}
}
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css */
*,::after,::before{box-sizing:border-box;}
[tabindex="-1"]:focus:not(:focus-visible){outline:0!important;}
h3,h4,h6{margin-top:0;margin-bottom:.5rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button{overflow:visible;}
button{text-transform:none;}
[type=button],button{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
h3,h4,h6{margin-bottom:.5rem;font-weight:500;line-height:1.2;}
h3{font-size:1.75rem;}
h4{font-size:1.5rem;}
h6{font-size:1rem;}
.lead{font-size:1.25rem;font-weight:300;}
.img-fluid{max-width:100%;height:auto;}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-12,.col-lg-4,.col-sm-6{position:relative;width:100%;padding-right:15px;padding-left:15px;}
.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
@media (min-width:576px){
.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
@media (min-width:992px){
.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
}
.fade{transition:opacity .15s linear;}
@media (prefers-reduced-motion:reduce){
.fade{transition:none;}
}
.fade:not(.show){opacity:0;}
.progress{display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;line-height:0;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem;}
.progress-bar{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center;overflow:hidden;color:#fff;text-align:center;white-space:nowrap;background-color:#007bff;transition:width .6s ease;}
@media (prefers-reduced-motion:reduce){
.progress-bar{transition:none;}
}
.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5;}
.close:hover{color:#000;text-decoration:none;}
button.close{padding:0;background-color:transparent;border:0;}
.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0;}
.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none;}
.modal.fade .modal-dialog{transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translate(0,-50px);transform:translate(0,-50px);}
@media (prefers-reduced-motion:reduce){
.modal.fade .modal-dialog{transition:none;}
}
.modal-content{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0;}
@media (min-width:576px){
.modal-dialog{max-width:500px;margin:1.75rem auto;}
}
.clearfix::after{display:block;clear:both;content:"";}
.d-flex{display:-ms-flexbox!important;display:flex!important;}
.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important;}
.align-self-end{-ms-flex-item-align:end!important;align-self:flex-end!important;}
.float-left{float:left!important;}
.w-100{width:100%!important;}
.text-right{text-align:right!important;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
img{page-break-inside:avoid;}
h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
.modal .modal-dialog,.wpneo-modal-content{max-width:650px;}
h3,h4,h6{color:#1B6DC1!important;}
@media all{
.float-left{float:left;}
}
@media all{
.float-left{float:left;}
}
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
}
*,::after,::before{box-sizing:border-box;}
a{color:#1B6DC1;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
a,button{-ms-touch-action:manipulation;touch-action:manipulation;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button{overflow:visible;}
button{text-transform:none;}
button,html [type=button]{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-12,.col-sm-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
@media (min-width:576px){
.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
.clearfix::after{display:block;clear:both;content:"";}
.d-flex{display:-ms-flexbox!important;display:flex!important;}
.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important;}
.float-left{float:left!important;}
}
@media all{
button::-moz-focus-inner{padding:0;border:0;}
}
@media all{
button:focus{outline-offset:0;outline:0;-webkit-box-shadow:none;box-shadow:none;}
img{max-width:100%;height:auto;}
}
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
}
a{color:#33d3c0;}
a:hover{color:#00bf9c;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
*,::after,::before{box-sizing:border-box;}
[tabindex="-1"]:focus{outline:0!important;}
h3,h4{margin-top:0;margin-bottom:.5rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
a,button{-ms-touch-action:manipulation;touch-action:manipulation;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;}
button::-moz-focus-inner{padding:0;border-style:none;}
h3,h4{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h3{font-size:1.75rem;}
h4{font-size:1.5rem;}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-lg-4,.col-sm-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:576px){
.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
@media (min-width:992px){
.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
}
.clearfix::after{display:block;clear:both;content:"";}
}
@media all{
button::-moz-focus-inner{padding:0;border:0;}
}
@media all{
button:focus{outline-offset:0;outline:0;-webkit-box-shadow:none;box-shadow:none;}
img{max-width:100%;height:auto;}
}
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
}
a{color:#33d3c0;}
a:hover{color:#00bf9c;}
h3{font-size:26px;font-family:Montserrat;font-weight:400;line-height:28px;color:#414040;}
h4{font-size:18px;font-family:Montserrat;font-weight:600;line-height:26px;color:#414040;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media all{
.text-right{text-align:right;}
}
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
}
*,::after,::before{box-sizing:border-box;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.text-right{text-align:right!important;}
}
@media all{
img{max-width:100%;height:auto;}
}
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
}
a{color:#33d3c0;}
a:hover{color:#00bf9c;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media all{
.float-left{float:left;}
.text-right{text-align:right;}
.wpneo-modal-wrapper{background:rgba(0, 0, 0, 0.3);bottom:0;left:0;position:fixed;right:0;top:0;-webkit-transition:opacity 400ms ease-in 0s;transition:opacity 400ms ease-in 0s;z-index:99999;-webkit-animation-name:animatetop;-webkit-animation-duration:0.4s;animation-name:animatetop;animation-duration:0.4s;display:none;width:100%;font-family:'Montserrat', sans-serif;color:#686C8B;font-size:14px;}
.wpneo-modal-wrapper h3,.wpneo-modal-wrapper h4{font-weight:500;}
div.wpneo-modal-wrapper-head{background-color:#ffffff;border-radius:6px 6px 0 0;position:relative;}
div.wpneo-modal-wrapper-head h4{border-bottom:1px solid #e5e5e5;font-size:18px;margin-bottom:0;padding:15px 0px 15px 30px;text-transform:capitalize;}
.wpneo-modal-content{background:#fff none repeat scroll 0 0;margin:5% auto 0;max-width:650px;position:relative;max-height:80%;overflow-y:auto;}
.wpneo-modal-content-inner{padding:25px 30px;}
@media (max-width: 992px){
.wpneo-modal-content{margin:10% auto 0;max-width:60%;}
}
@media (max-width: 767px){
.wpneo-modal-content{margin:15% auto 0;max-width:85%;}
}
}
@media all{
.float-left{float:left;}
.wpneo-modal-wrapper{background:rgba(0, 0, 0, 0.3);bottom:0;left:0;position:fixed;right:0;top:0;-webkit-transition:opacity 400ms ease-in 0s;transition:opacity 400ms ease-in 0s;z-index:99999;-webkit-animation-name:animatetop;-webkit-animation-duration:0.4s;animation-name:animatetop;animation-duration:0.4s;display:none;width:100%;}
div.wpneo-modal-wrapper-head{background-color:#ffffff;border-radius:6px 6px 0 0;position:relative;}
div.wpneo-modal-wrapper-head h4{border-bottom:1px solid #e5e5e5;font-size:18px;margin-bottom:0;padding:30px 0px 30px 30px;text-transform:capitalize;}
.wpneo-modal-content{background:#fff none repeat scroll 0 0;margin:5% auto 0;max-width:650px;position:relative;max-height:80%;overflow-y:auto;}
.wpneo-modal-content-inner{padding:30px;}
a.wpneo-fund-modal-btn{color:#000000;}
.wpneo-profile-left,.wpneo-profile-right{display:inline-block;float:left;}
.wpneo-profile-right{padding-left:0;}
.wpneo-profile-name{font-size:24px;color:#000;font-weight:bold;margin-top:5px;line-height:31px;}
.wpneo-profile-campaigns{margin-top:28px;}
.wpneo-profile-about{padding:0;display:inline-block;width:100%;}
.wpneo-profile-about h3{font-size:18px;line-height:50px;}
}
@media all{
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
h3{orphans:3;widows:3;}
h3{page-break-after:avoid;}
}
*,::after,::before{box-sizing:border-box;}
[tabindex="-1"]:focus{outline:0!important;}
h3,h4,h6{margin-top:0;margin-bottom:.5rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
a,button{-ms-touch-action:manipulation;touch-action:manipulation;}
button{border-radius:0;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button{overflow:visible;}
button{text-transform:none;}
button,html [type=button]{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
h3,h4,h6{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h3{font-size:1.75rem;}
h4{font-size:1.5rem;}
h6{font-size:1rem;}
.lead{font-size:1.25rem;font-weight:300;}
.img-fluid{max-width:100%;height:auto;}
.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
.col-12,.col-lg-4,.col-sm-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
@media (min-width:576px){
.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
@media (min-width:992px){
.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
}
.progress{display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem;}
.progress-bar{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;color:#fff;background-color:#007bff;}
.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5;}
.close:focus,.close:hover{color:#000;text-decoration:none;opacity:.75;}
button.close{padding:0;background:0 0;border:0;-webkit-appearance:none;}
.clearfix::after{display:block;clear:both;content:"";}
.d-flex{display:-ms-flexbox!important;display:flex!important;}
.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important;}
.align-self-end{-ms-flex-item-align:end!important;align-self:flex-end!important;}
.float-left{float:left!important;}
.w-100{width:100%!important;}
.text-right{text-align:right!important;}
}
@media all{
.pull-right{float:right;}
.pull-left{float:left;}
}
@media all{
button::-moz-focus-inner{padding:0;border:0;}
}
@media all{
button:focus{outline-offset:0;outline:0;-webkit-box-shadow:none;box-shadow:none;}
.thm-progress-bar .progress-bar{color:#fff;height:6px;-webkit-box-shadow:none;box-shadow:none;margin-bottom:0;border-radius:10px;}
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
.themeum-campaign-post h3{font-size:18px;font-weight:400;line-height:24px;margin-bottom:10px;margin-top:3px;}
.themeum-campaign-post h3 a{transition:400ms;-webkit-transition:400ms;color:#393939;font-weight:400;}
.themeum-campaign-post .entry-category a{color:#B0B0B0;font-size:14px;margin-right:8px;}
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
.wpneo-profile-name{font-size:18px;font-weight:400;line-height:40px;color:#393939;}
img{max-width:100%;height:auto;}
}
@media all{
.wpneo-modal-content-inner{text-align:left;}
#bioinfo .wpneo-modal-content{margin:0;}
#bioinfo button.close{top:12px;position:absolute;right:10px;}
div.wpneo-modal-wrapper-head h4{text-align:left;}
.themeum-campaign-post .progressbar-content-wrapper{padding-top:14px;}
}
@media all{
@media only screen and (max-width: 992px){
.themeum-author-dsc{text-align:left;}
}
@media (max-width: 767px){
.themeum-campaign-post .review-item-image img{width:100%;}
}
}
@media all{
a{text-decoration:none!important;}
a:focus{outline:0;outline-offset:0;}
.elementor-widget-backnow-product-grid .themeum-campaign-post .entry-title a{color:#343a40!important;font-family:'Montserrat', sans-serif!important;font-weight:400!important;}
}
a,.themeum-campaign-post .entry-category a:hover,.themeum-campaign-post h3 a:hover,.themeum-campaign-img .thm-camp-hvr .thm-ch-icon{color:#1B6DC1;}
.thm-progress-bar .progress-bar,.themeum-campaign-post .themeum-campaign-img::after,.progressbar-content-wrapper .thm-progress-bar .progress .progress-bar,.themeum-campaign-post a.thm-love-btn:hover{background:#1B6DC1;}
.themeum-campaign-post .entry-title a:hover{color:#33d3c0!important;}
.progressbar-content-wrapper .thm-progress-bar .progress .progress-bar{background:#1B6DC1;background:-moz-linear-gradient(left, #1B6DC1 0%, #1B6DC1 100%);background:-webkit-linear-gradient(left, #1B6DC1 0%,#1B6DC1 100%);background:linear-gradient(to right, #1B6DC1 0%,#1B6DC1 100%);}
a:hover{color:#00bf9c;}
h3{font-size:26px;font-family:'Montserrat', sans-serif;font-weight:400;line-height:28px;color:#414040;}
h4{font-size:18px;font-family:'Montserrat', sans-serif;font-weight:600;line-height:26px;color:#414040;}
@media all{
.elementor *,.elementor :after,.elementor :before{-webkit-box-sizing:border-box;box-sizing:border-box;}
.elementor a{-webkit-box-shadow:none;box-shadow:none;text-decoration:none;}
.elementor img{height:auto;max-width:100%;border:none;-webkit-border-radius:0;border-radius:0;-webkit-box-shadow:none;box-shadow:none;}
.elementor-widget-wrap>.elementor-element{width:100%;}
.elementor-widget{position:relative;}
.elementor-element .elementor-widget-container{-webkit-transition:background .3s,border .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;transition:background .3s,border .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;-o-transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;transition:background .3s,border .3s,border-radius .3s,box-shadow .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;}
}
.themeum-campaign-post h3{font-size:18px!important;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
*{box-sizing:border-box;margin:0;padding:0;}
img{max-width:100%;height:auto;}
button{background-image:none;}
*:focus,button:focus{outline:none;}
}

</style>

@include('includes.user_header')


<!--div style="width: 82%;
    margin: auto;" class="wpneo-head wpneo-shadow">
    <div class="wpneo-links clearfix">
        <div class="wpneo-links-list active"><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=dashboard">Tableau de bord</a></div>
        <div class="wpneo-links-list wp-crowd-parent"><a href="#" target="blank">Mes annonces<!--span class="wpcrowd-arrow-down"></span--></a>
            <!--div class="wp-crowd-submenu wpneo-shadow">
                <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=profile">Profile</a></div>
                <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=contact">Contact</a></div>
                <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=password">Password</a></div>
                <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=rewards">Rewards</a></div>
                <div class="wpneo-links-lists"><a href="https://demo.themeum.com/wordpress/backnow/wp-login.php?action=logout&amp;redirect_to=https%3A%2F%2Fdemo.themeum.com%2Fwordpress%2Fbacknow&amp;_wpnonce=18302b08e3">Logout</a></div>
            </div--
        </div>
        <div class="wpneo-links-list wp-crowd-parent"><a href="#">Déconnection<!--span class="wpcrowd-arrow-down"></span-></a>
            <!--div class="wp-crowd-submenu wpneo-shadow">
                <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=campaign">My Campaigns</a></div>
                <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=backed_campaigns">My Invested Campaigns</a></div>
                <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=pledges_received">Pledges Received</a></div>
                <div class="wpneo-links-lists "><a href="https://demo.themeum.com/wordpress/backnow/dashboard/?page_type=bookmark">Bookmarks</a></div>
            </div->
        </div>
        <div class="wp-crowd-new-campaign"><a class="wp-crowd-btn wp-crowd-btn-primary" data-toggle="modal" data-target="#myModal_2" href="#">Créer une annonce</a></div>
    </div>
</div-->


<div class="ss-page-title">Mes annonces</div>


<div class="elementor-element elementor-element-b3c10bd elementor-widget elementor-widget-backnow-product-grid" data-id="b3c10bd" data-element_type="widget" data-widget_type="backnow-product-grid.default">
    <div style="padding: 4rem;" class="elementor-widget-container">
        <div class="row">
            @foreach($annonces as $annonce)
            <div class="col-12 col-sm-6 thm-post-grid-col col-lg-4">
                <div class="themeum-campaign-post d-flex flex-wrap">
                    <div class="clearfix">
                        <div class="themeum-campaign-img">
                            <a class="review-item-image" href="{{url('annonces', $annonce)}}">
                                <img width="660" height="400"
                                  src="/storage/images/annonces/{{$annonce->logo}}" class="img-fluid wp-post-image" alt=""></a>
                            <div class="thm-camp-hvr">
                                <div class="thm-ch-icon">
                                    <i class="far fa-heart" aria-hidden="true"></i>
                                </div>
                                <h4>Project You Love</h4>
                            </div>
                        </div>
                        <div class="themeum-campaign-post-content clearfix">
                            @auth
                            @if($annonce->user->id !== Auth::user()->id)
                            <a href="#" class="thm-love-btn " data-campaign="1860" data-user="0">
                                <i class="far fa-heart" aria-hidden="true"></i>
                            </a>
                            @else
                            <a href="{{route('annonces.edit', $annonce)}}" class="thm-love-btn " data-campaign="1860" data-user="0">
                                <i class="far fa-pencil" aria-hidden="true"></i>
                            </a>
                            @endif
                            @endauth
                            <span class="entry-category"><a href="{{url('categories', $annonce->category)}}" rel="tag">{{$annonce->category->name}}</a></span>
                            <h3 class="entry-title">
                                <a href="{{url('annonces', $annonce)}}">
                                    {{$annonce->title}}
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="clearfix align-self-end w-100">
                        <div class="progressbar-content-wrapper">
                            <div class="thm-progress-bar">
                                <div class="lead">
                                    <span class="thm-Price-amount">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">FCFA</span>{{$annonce->previous_raising_amount}}</span> </span>
                                    <span class="thm-raise-sp">
                                        Levés
                                    </span>
                                    <div class="thm-meta-desc pull-right text-right">
                                        <span class="thm-Price-amount">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">FCFA</span>{{$annonce->raising_amount}}</span>
                                        </span>
                                        <span class="thm-raise-sp">
                                            Objectif
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
                                    <img alt="" src="/storage/images/users/{{$annonce->user->image}}" srcset="https://secure.gravatar.com/avatar/caa0224bc614077dd7c869f0217cde43?s=80&amp;d=mm&amp;r=g 2x"
                                      class="avatar avatar-40 photo" height="40" width="40">
                                </div>
                                <div class="themeum-author-dsc pull-left">
                                    <a data-toggle="modal" data-target="#bioinfo{{$annonce->id}}" href="#" class="wpneo-fund-modal-btn">{{$annonce->user->name}}</a>

                                    <span>{{$annonce->user->country}}</span>
                                </div>
                                <div class="themeum-author-funded pull-right">
                                    <h6>58.82%</h6>
                                    <span>Achevés</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal Content | Author Info -->
            <div class="modal fade wpneo-modal-wrapper" id="bioinfo{{$annonce->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="wpneo-modal-content">
                            <div class="wpneo-modal-wrapper-head">
                                <h4>A propos du promoteur de ce projet</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>

                            <div class="wpneo-modal-content-inner">
                                <div class="wpneo-profile-left">
                                </div>

                                <div class="wpneo-profile-right">
                                    <div class="wpneo-profile-name">{{$annonce->user->name}}</div>
                                    <div class="wpneo-profile-campaigns">{{count($annonce->user->annoncesOne)}} Campagne(s)</div>
                                </div>

                                <div class="wpneo-profile-about">
                                    <a href="{{url('users', $annonce->user)}}">
                                        <h3>Voir le profil</h3>
                                    </a>

                                </div>
                                <div class="wpneo-profile-about">
                                    <a href="/chat">
                                        <h3>Envoyer message</h3>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="col-12">
            </div>
        </div>


    </div>
</div>



@endsection
