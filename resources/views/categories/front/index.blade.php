@extends('layouts.menu')
@section('title', 'Choisissez un secteur')

@section('content')




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


<!--liste categories-->
<style media="screen">
/*! CSS Used from: https://oschoolelearning.com/css/admin/menu-school.css */
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
h4{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h4{margin-top:11px;margin-bottom:11px;}
h4{font-size:21px;}
h4{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h4{margin-top:11px;margin-bottom:11px;}
h4{font-size:21px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
h4{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h4{margin-top:11px;margin-bottom:11px;}
h4{font-size:21px;}
h4{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h4{margin-top:11px;margin-bottom:11px;}
h4{font-size:21px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
*,*:before,*:after{box-sizing:inherit;}
:disabled *{pointer-events:none;}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
h4{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h4{margin-top:11px;margin-bottom:11px;}
h4{font-size:21px;}
h4{font-family:inherit;font-weight:700;line-height:1.1;color:inherit;}
h4{margin-top:11px;margin-bottom:11px;}
h4{font-size:21px;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media screen{
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
}
*,:after,:before{box-sizing:inherit;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
*,*:before,*:after{box-sizing:inherit;}
:disabled *{pointer-events:none;}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
*,*:before,*:after{box-sizing:inherit;}
:disabled *{pointer-events:none;}
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
@media screen{
@media screen{
a{background-color:transparent;}
a:active,a:hover{outline:0;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
a{color:#30787d;text-decoration:none;}
a:hover,a:focus{color:#09a59a;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a{color:#1ea69a;text-decoration:none;-webkit-transition:0.25s;transition:0.25s;font-weight:500;}
a:hover,a:focus{color:#167b72;text-decoration:none;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
}
@media screen{
@media print{
*,*:before,*:after{color:#000!important;text-shadow:none!important;background:transparent!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*{-webkit-box-sizing:border-box;box-sizing:border-box;}
*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;}
*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit;}
}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
.MuiTypography-root{margin:0;}
.MuiTypography-h4{margin:4px;font-size:1.5625rem;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:400;line-height:1.235;letter-spacing:0.00735em;}
@media (min-width:600px){
.MuiTypography-h4{font-size:1.8219rem;}
}
@media (min-width:800px){
.MuiTypography-h4{font-size:2.0243rem;}
}
@media (min-width:1025px){
.MuiTypography-h4{font-size:2.0243rem;}
}
.MuiTypography-alignCenter{text-align:center;}
a{background-color:initial;}
a:active,a:hover{outline:0;}
svg:not(:root){overflow:hidden;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*,:after,:before{box-sizing:border-box;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
h4{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{margin-top:10px;margin-bottom:10px;}
h4{font-size:18px;}
::-ms-clear{display:none;}
a{color:inherit;transition:color 0.2s ease 0s;}
a:hover{color:inherit;border-bottom:none;text-decoration:none;}
.hqqZXZ{display:flex;width:100%;height:35%;}
.fUQatb{display:flex;flex:1 1 0%;-webkit-box-pack:center;justify-content:center;-webkit-box-align:center;align-items:center;flex-direction:column;height:180px;margin:10px;border-radius:4px;box-shadow:rgba(0, 0, 0, 0.1) 0px 0px 7px;transition:all 0.4s ease 0s;cursor:pointer;}
.fUQatb:hover{box-shadow:rgba(0, 0, 0, 0.1) 1px 2px 12px;border-bottom:none;transform:translateY(-5px);}
@media (max-width: 480px){
.fUQatb{margin:5px;}
}
.eBqjAL{font-weight:600;margin:0px 16px;}
.fjEdZT{width:90px;height:90px;overflow:visible;}
.fjEdZT > svg{height:90px;width:90px;overflow:visible;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
*,::after,::before{box-sizing:border-box;}
h4{margin-top:0;margin-bottom:.5rem;}
h4{margin-bottom:.5rem;font-weight:500;line-height:1.2;}
h4{font-size:1.5rem;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
}
}
#phone_4 {
    padding-left: 95px !important;
}

#modalauth{
	text-align: center;
}
.modalauth{
	padding: 25px;
}
.modal {
    
    top: 150px;}
</style>







<div style="margin-top: 2rem;" class="ss-page-title">Choisissez un secteur</div>
<div style="margin-bottom: 2rem;justify-content: center;" class="styles__CategoryButtons-vgii8s-3 hqqZXZ">
<div class="row">



@foreach($categories as $category)

    <div class="col-sm-4">
                @auth
                <a data-toggle="modal" data-target="#modal{{$category->id}}" class="styles__CategoryButton-vgii8s-4 fUQatb" href="#">
                @endauth
                @guest
                <a data-toggle="modal" data-target="#modalauth" class="styles__CategoryButton-vgii8s-4 fUQatb" href="#">
                @endguest

                    <div class="styles__CategoryButton_Icon-vgii8s-6 fjEdZT">
                        <i style="color: #{{$category->icon_color}}; font-size: 5rem;" class="fas {{$category->icon}}"></i>
                    </div>
                    <h4 class="MuiTypography-root Typography-ngwq8z-0 styles__CategoryButton_Title-vgii8s-5 eBqjAL MuiTypography-h4 MuiTypography-alignCenter" m="0,2">{{$category->name}}</h4>
                </a>


    </div>


@endforeach
</div>
</div>

@auth

<script src="/plugin/build/js/intlTelInput.js"></script>
<script src="/plugin/build/js/countrySelect.min.js"></script>

@foreach($categories as $category)

<!--Modal de l'ajout d'un membre de l'équipe-->
<!-- The Modal -->
          <div class="modal fade" id="modal{{$category->id}}">

                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content query" style="padding: 32px;">

                    <!-- Modal Header -->
                    <div class="modal-header">

                        <h4 class="modal-title text-center title-annonce"> La société </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body body-annonce">
                      <form action="{{route('annonces.store')}}" method="post" enctype="multipart/form-data" id="msform1">
                            @csrf
                        <div class="input">
                          <input type="text" class="form-control form-control-lg" placeholder="Titre de la société " name="title">
                        </div>
                        <div class="input">
                          <input type="text" class="form-control form-control-lg" placeholder="Pays " name="country" id="country8" >
                        </div>

                        <div class="input">
                          <input readonly type="text" class="form-control form-control-lg" value="{{$category->name}}" name="category_id" >
                        </div>

                        <div class="input">
                          <input type="number" class="form-control form-control-lg" name="phone" id="phone_4" placeholder="Téléphone">
                        </div>

                        <input hidden type="text" name="user_id" value="{{Auth::user()->id}}">
                        <button style="background-color: #00a78d; color: #fff " type="submit" class="btn  text-center">Créer une annonce </button>
                      </form>
                    </div>

                    <!-- Mwodal footer -->
                    <div class="modal-footer">
                      <!--button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button-->
                    </div>

                  </div>
                </div>

          </div>

<!--/ Modal de l'ajout d'un membre de l'équipe-->
<!-- /The Modal -->


  <script>
    var input = document.querySelector("#phone_4");
    window.intlTelInput(input, {

      autoPlaceholder: "polite",

       hiddenInput: "phone",

       nationalMode: true,

       preferredCountries: ["ci", "fr"],
       separateDialCode: true,
      utilsScript: "/plugin/build/js/utils.js",
    });
  </script>



  <script>
    $("#country8").countrySelect({
          preferredCountries: ['ci', 'fr',]
        }
      );

  </script>



@endforeach

@endauth

<!-- The Modal login-->
<div class="modal" id="modalauth">
  <div class="modal-dialog">
    <div class="modal-content">

      
      <!-- Modal body -->
      <div class="modal-body">
      	<h2 class="modal-title modalauth">Veuillez vous connecter afin de créer votre annonce.</h2>
        <a href="/login">
            <button type="button" class="btn " style="background-color: #00a78dff; color:#fff">Connectez-vous</button>
        </a>
      </div>

      
    </div>
  </div>
</div>

@endsection
