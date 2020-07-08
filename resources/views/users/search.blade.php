@extends('layouts.menu')
@section('title', 'Liste des utilisateurs')

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



<!--liste users-->
<style media="screen">
/*! CSS Used from: Embedded */
/*! @import https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-twitter:before{content:"\f099";}
.fa-facebook:before{content:"\f09a";}
.fa-google-plus:before{content:"\f0d5";}
/*! end @import */
*:hover{-webkit-transition:all 1s ease;transition:all 1s ease;}
.profile-card-2 .card-img-block{float:left;width:100%;height:150px;overflow:hidden;}
.profile-card-2 .card-body{position:relative;}
.profile-card-2 .profile{border-radius:50%;position:absolute;top:-42px;left:15%;max-width:75px;border:3px solid rgba(255, 255, 255, 1);-webkit-transform:translate(-50%, 0%);transform:translate(-50%, 0%);}
.profile-card-2 h5{font-weight:600;color:#6ab04c;}
.profile-card-2 .card-text{font-weight:300;font-size:15px;}
.profile-card-2 .icon-block{float:left;width:100%;}
.profile-card-2 .icon-block a{text-decoration:none;}
.profile-card-2 i{display:inline-block;font-size:16px;color:#6ab04c;text-align:center;border:1px solid #6ab04c;width:30px;height:30px;line-height:30px;border-radius:50%;margin:0 5px;}
.profile-card-2 i:hover{background-color:#6ab04c;color:#fff;}
/*! CSS Used from: https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css */
*,::after,::before{box-sizing:border-box;}
h5{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
strong{font-weight:bolder;}
a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
h5{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h5{font-size:1.25rem;}
.img-fluid{max-width:100%;height:auto;}
.col-md-4{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width:768px){
.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
}
.card{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem;}
.card-body{-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem;}
.card-title{margin-bottom:.75rem;}
.float-left{float:left!important;}
.w-100{width:100%!important;}
.mt-3{margin-top:1rem!important;}
.pt-5{padding-top:3rem!important;}
.text-center{text-align:center!important;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}

</style>


<!--style search bar-->
<style media="screen">
/*! CSS Used from: https://colorlib.com/etc/searchf/colorlib-search-3/css/main.css */
svg:not(:root){overflow:hidden;}
button,input,select{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;}
button,input{overflow:visible;}
button,select{text-transform:none;}
button,html [type="button"]{-webkit-appearance:button;}
button::-moz-focus-inner,[type="button"]::-moz-focus-inner{border-style:none;padding:0;}
button:-moz-focusring,[type="button"]:-moz-focusring{outline:1px dotted ButtonText;}
.choices{position:relative;margin-bottom:24px;font-size:16px;}
.choices:focus{outline:none;}
.choices:last-child{margin-bottom:0;}
.choices[data-type*="select-one"]{cursor:pointer;}
.choices[data-type*="select-one"] .choices__inner{padding-bottom:7.5px;}
.choices[data-type*="select-one"] .choices__input{display:block;width:100%;padding:10px;border-bottom:1px solid #DDDDDD;background-color:#FFFFFF;margin:0;}
.choices[data-type*="select-one"]:after{content:"";height:0;width:0;border-style:solid;border-color:#333333 transparent transparent transparent;border-width:5px;position:absolute;right:11.5px;top:50%;margin-top:-2.5px;pointer-events:none;}
.choices__inner{display:inline-block;vertical-align:top;width:100%;background-color:#f9f9f9;padding:7.5px 7.5px 3.75px;border:1px solid #DDDDDD;border-radius:2.5px;font-size:14px;min-height:44px;overflow:hidden;}
.choices__list{margin:0;padding-left:0;list-style:none;}
.choices__list--single{display:inline-block;padding:4px 16px 4px 4px;width:100%;}
.choices__list--single .choices__item{width:100%;}
.choices__list--dropdown{display:none;z-index:1;position:absolute;width:100%;background-color:#FFFFFF;border:1px solid #DDDDDD;top:100%;margin-top:-1px;border-bottom-left-radius:2.5px;border-bottom-right-radius:2.5px;overflow:hidden;word-break:break-all;}
.choices__list--dropdown .choices__list{position:relative;max-height:100%/*300px*/;overflow:auto;-webkit-overflow-scrolling:touch;will-change:scroll-position;}
.choices__list--dropdown .choices__item{position:relative;padding:10px;font-size:14px;}
@media (min-width: 640px){
.choices__list--dropdown .choices__item--selectable{padding-right:100px;}
.choices__list--dropdown .choices__item--selectable:after{content:attr(data-select-text);font-size:12px;opacity:0;position:absolute;right:10px;top:50%;transform:translateY(-50%);}
}
.choices__list--dropdown .choices__item--selectable.is-highlighted{background-color:#f2f2f2;}
.choices__list--dropdown .choices__item--selectable.is-highlighted:after{opacity:.5;}
.choices__item{cursor:default;}
.choices__item--selectable{cursor:pointer;}
.choices__input{display:inline-block;vertical-align:baseline;background-color:#f9f9f9;font-size:14px;margin-bottom:5px;border:0;border-radius:0;max-width:100%;padding:4px 0 4px 2px;}
.choices__input:focus{outline:0;}
.choices__placeholder{opacity:.5;}
*{box-sizing:border-box;}
form{width:100%;max-width:790px;margin-bottom:0;}
form .inner-form{background:#fff;display:-ms-flexbox;display:flex;width:100%;-ms-flex-pack:justify;justify-content:space-between;-ms-flex-align:center;align-items:center;box-shadow:0px 8px 20px 0px rgba(0, 0, 0, 0.15);border-radius:3px;}
form .inner-form .input-field{height:68px;}
form .inner-form .input-field input{height:100%;background:transparent;border:0;display:block;width:100%;padding:10px 32px;font-size:16px;color:#555;}
form .inner-form .input-field input:-moz-placeholder{color:#888;font-size:16px;}
form .inner-form .input-field input::-webkit-input-placeholder{color:#888;font-size:16px;}
form .inner-form .input-field input:hover,form .inner-form .input-field input:focus{box-shadow:none;outline:0;border-color:#fff;}
form .inner-form .input-field.first-wrap{width:200px;border-right:1px solid rgba(0, 0, 0, 0.1);}
form .inner-form .input-field.first-wrap .choices__inner{background:transparent;border-radius:0;border:0;height:100%;color:#fff;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;padding:10px 30px;}
form .inner-form .input-field.first-wrap .choices__inner .choices__list.choices__list--single{display:-ms-flexbox;display:flex;padding:0;-ms-flex-align:center;align-items:center;height:100%;}
form .inner-form .input-field.first-wrap .choices__inner .choices__item.choices__item--selectable.choices__placeholder{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;height:100%;opacity:1;color:#888;}
form .inner-form .input-field.first-wrap .choices__inner .choices__list--single .choices__item{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;height:100%;color:#555;}
form .inner-form .input-field.first-wrap .choices[data-type*="select-one"]:after{right:30px;border-color:#e5e5e5 transparent transparent transparent;}
form .inner-form .input-field.first-wrap .choices__list.choices__list--dropdown{border:0;background:#fff;padding:20px 30px;margin-top:2px;border-radius:4px;box-shadow:0px 8px 20px 0px rgba(0, 0, 0, 0.15);}
form .inner-form .input-field.first-wrap .choices__list.choices__list--dropdown .choices__item--selectable{padding-right:0;}
form .inner-form .input-field.first-wrap .choices__list--dropdown .choices__item--selectable.is-highlighted{background:#fff;color:#63c76a;}
form .inner-form .input-field.first-wrap .choices__list--dropdown .choices__item{color:#555;min-height:24px;}
form .inner-form .input-field.second-wrap{-ms-flex-positive:1;flex-grow:1;}
form .inner-form .input-field.third-wrap{width:74px;}
form .inner-form .input-field.third-wrap .btn-search{height:100%;width:100%;white-space:nowrap;color:#fff;border:0;cursor:pointer;background:rgb(26, 179, 148);transition:all .2s ease-out, color .2s ease-out;}
form .inner-form .input-field.third-wrap .btn-search svg{width:16px;}
form .inner-form .input-field.third-wrap .btn-search:hover{background:rgb(26, 179, 148);}
form .inner-form .input-field.third-wrap .btn-search:focus{outline:0;box-shadow:none;}
@media screen and (max-width: 992px){
form .inner-form .input-field{height:50px;}
}
@media screen and (max-width: 767px){
form .inner-form{-ms-flex-wrap:wrap;flex-wrap:wrap;padding:20px;}
form .inner-form .input-field{margin-bottom:20px;border-bottom:1px solid rgba(0, 0, 0, 0.1);}
form .inner-form .input-field input{padding:10px 15px;}
form .inner-form .input-field.first-wrap{width:100%;border-right:0;}
form .inner-form .input-field.first-wrap .choices__inner{padding:10px 15px;}
form .inner-form .input-field.first-wrap .choices[data-type*="select-one"]:after{right:11.5px;border-color:#e5e5e5 transparent transparent transparent;}
form .inner-form .input-field.second-wrap{width:100%;margin-bottom:30px;}
form .inner-form .input-field.second-wrap input{border:1px solid rgba(255, 255, 255, 0.3);}
form .inner-form .input-field.third-wrap{margin-bottom:0;width:100%;}
}

/*=====  End of Choices  ======*/
* {
  box-sizing: border-box;
}

.s003 {
  /*min-height: 100vh;*/
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
      justify-content: center;
  -ms-flex-align: center;
      align-items: center;
  font-family: 'Poppins', sans-serif;
  /*background-color: #a598ee;*/
  /*background-size: cover;
  background-position: center center;*/
  padding: 15px;
}

.s003 form {
  width: 100%;
  max-width: 790px;
  margin-bottom: 0;
}

.s003 form .inner-form {
  background: #fff;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  -ms-flex-pack: justify;
      justify-content: space-between;
  -ms-flex-align: center;
      align-items: center;
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  border-radius: 3px;
}

.s003 form .inner-form .input-field {
  height: 68px;
}

.s003 form .inner-form .input-field input {
  height: 100%;
  background: transparent;
  border: 0;
  display: block;
  width: 100%;
  padding: 10px 32px;
  font-size: 16px;
  color: #555;
}

.s003 form .inner-form .input-field input.placeholder {
  color: #888;
  font-size: 16px;
}

.s003 form .inner-form .input-field input:-moz-placeholder {
  color: #888;
  font-size: 16px;
}

.s003 form .inner-form .input-field input::-webkit-input-placeholder {
  color: #888;
  font-size: 16px;
}

.s003 form .inner-form .input-field input:hover, .s003 form .inner-form .input-field input:focus {
  box-shadow: none;
  outline: 0;
  border-color: #fff;
}

.s003 form .inner-form .input-field.first-wrap {
  width: 200px;
  border-right: 1px solid rgba(0, 0, 0, 0.1);
}

.s003 form .inner-form .input-field.first-wrap .choices__inner {
  background: transparent;
  border-radius: 0;
  border: 0;
  height: 100%;
  color: #fff;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  padding: 10px 30px;
}

.s003 form .inner-form .input-field.first-wrap .choices__inner .choices__list.choices__list--single {
  display: -ms-flexbox;
  display: flex;
  padding: 0;
  -ms-flex-align: center;
      align-items: center;
  height: 100%;
}

.s003 form .inner-form .input-field.first-wrap .choices__inner .choices__item.choices__item--selectable.choices__placeholder {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  height: 100%;
  opacity: 1;
  color: #888;
}

.s003 form .inner-form .input-field.first-wrap .choices__inner .choices__list--single .choices__item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  height: 100%;
  color: #555;
}

.s003 form .inner-form .input-field.first-wrap .choices[data-type*="select-one"]:after {
  right: 30px;
  border-color: #e5e5e5 transparent transparent transparent;
}

.s003 form .inner-form .input-field.first-wrap .choices__list.choices__list--dropdown {
  border: 0;
  background: #fff;
  padding: 20px 30px;
  margin-top: 2px;
  border-radius: 4px;
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
}

.s003 form .inner-form .input-field.first-wrap .choices__list.choices__list--dropdown .choices__item--selectable {
  padding-right: 0;
}

.s003 form .inner-form .input-field.first-wrap .choices__list--dropdown .choices__item--selectable.is-highlighted {
  background: #fff;
  color: #63c76a;
}

.s003 form .inner-form .input-field.first-wrap .choices__list--dropdown .choices__item {
  color: #555;
  min-height: 24px;
}

.s003 form .inner-form .input-field.second-wrap {
  -ms-flex-positive: 1;
      flex-grow: 1;
}

.s003 form .inner-form .input-field.third-wrap {
  width: 74px;
}

.s003 form .inner-form .input-field.third-wrap .btn-search {
  height: 100%;
  width: 100%;
  white-space: nowrap;
  color: #fff;
  border: 0;
  cursor: pointer;
  background: #63c76a;
  transition: all .2s ease-out, color .2s ease-out;
}

.s003 form .inner-form .input-field.third-wrap .btn-search svg {
  width: 16px;
}

.s003 form .inner-form .input-field.third-wrap .btn-search:hover {
  background: #50c058;
}

.s003 form .inner-form .input-field.third-wrap .btn-search:focus {
  outline: 0;
  box-shadow: none;
}

@media screen and (max-width: 992px) {
  .s003 form .inner-form .input-field {
    height: 50px;
  }
}

@media screen and (max-width: 767px) {
  .s003 form .inner-form {
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    padding: 20px;
  }
  .s003 form .inner-form .input-field {
    margin-bottom: 20px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  }
  .s003 form .inner-form .input-field input {
    padding: 10px 15px;
  }
  .s003 form .inner-form .input-field.first-wrap {
    width: 100%;
    border-right: 0;
  }
  .s003 form .inner-form .input-field.first-wrap .choices__inner {
    padding: 10px 15px;
  }
  .s003 form .inner-form .input-field.first-wrap .choices[data-type*="select-one"]:after {
    right: 11.5px;
    border-color: #e5e5e5 transparent transparent transparent;
  }
  .s003 form .inner-form .input-field.second-wrap {
    width: 100%;
    margin-bottom: 30px;
  }
  .s003 form .inner-form .input-field.second-wrap input {
    border: 1px solid rgba(255, 255, 255, 0.3);
  }
  .s003 form .inner-form .input-field.third-wrap {
    margin-bottom: 0;
    width: 100%;
  }

  .input-select select{
	
    padding: 5%;
    
	}
}

.input-select select{
	width: 100%;
    padding: 10%;
    border: none;
}
.styles__CategoryButtons-vgii8s-3 .row{
	margin-left: 0!important;
	margin-right: 0!important;
}
</style>




<div style="margin-top: 2rem;" class="ss-page-title">Liste des utilisateurs</div>
@if(session('status'))
@include('includes.status')
@endif

<div class="s003">
      <form action="/searchUsers" enctype="multipart/form-data" method="post">
         @csrf
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="">Type</option>
                <option>Entrepreneur</option>
                <option>Investisseur</option>
                <option>Ladies</option>
                <option>Men</option>
                <option>Clothing</option>
                <option>Footwear</option>
                <option>Accessories</option>
              </select>
            </div>
          </div>
          <div class="input-field second-wrap">
            <input id="search" type="text" placeholder="Enter Keywords?" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="button">
              <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </button>
          </div>
        </div>
      </form>
    </div>

<div style="margin-bottom: 2rem;justify-content: center;" class="styles__CategoryButtons-vgii8s-3 hqqZXZ">
<div style="padding: 2rem;" class="row">

@foreach($users as $user)

<div class="col-md-4">
    <div class="card profile-card-2">
        <div class="card-img-block">
            <img class="img-fluid" src="https://images.pexels.com/photos/870903/pexels-photo-870903.jpeg?w=940&amp;h=650&amp;auto=compress&amp;cs=tinysrgb" alt="Card image cap">
        </div>
        <div class="card-body pt-5">
            <img src="/storage/images/users/{{$user->image}}" alt="profile-image" class="profile">
            <h5 class="card-title">{{ucfirst($user->name)}}</h5>
            <p class="card-text">{{$user->bio}}</p>
            <!--div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div-->
        </div>
    </div>
    <a href="/chat/{{$user->id}}">
    <p class="mt-3 w-100 float-left text-center"><strong>Envoyer message</strong></p>
    </a>
</div>


@endforeach
</div>
</div>
<script>
	/*
$(document).ready(function(){
    $(".choices__list--single").click(function(){
        $(".choices__list--dropdown").toggle();
    });

    $('.choices__item--choice').click(function() {
	    var value = $(this).text();
	    var option = $('#text_tag_option');
	    $('#choices__placeholder').text(value);
         option.val(value).text(value);
	    $(".choices__list--dropdown").hide();
	    return false;
	});
});*/
</script>

@endsection
