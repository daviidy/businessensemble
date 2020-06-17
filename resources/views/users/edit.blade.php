@extends('layouts.menu')
@section('title', 'Modifier votre profil')

@section('content')

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
button{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;}
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
.user-section .btn-success{font-family:'Montserrat', sans-serif;font-size:14px!important;background-color:#D86000
!important;border:1px solid #D86000!important;}
.user-section .m-r-5{margin-right:5px!important;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}

</style>



<!--onglets style-->
<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
section{display:block;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
a:active,a:hover{outline-width:0;}
img{border-style:none;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,li::first-letter,p::first-line,div::first-line,li::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#0275d8;text-decoration:none;}
a:focus,a:hover{color:#014c8c;text-decoration:underline;}
img{vertical-align:middle;}
a,label{-ms-touch-action:manipulation;touch-action:manipulation;}
label{display:inline-block;margin-bottom:.5rem;}
h4{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{font-size:1.5rem;}
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
.col-sm-4,.col-lg-12{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 576px){
.col-sm-4{-webkit-box-flex:0;-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
}
@media (min-width: 992px){
.col-lg-12{-webkit-box-flex:0;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
.fade{opacity:0;-webkit-transition:opacity 0.15s linear;-o-transition:opacity 0.15s linear;transition:opacity 0.15s linear;}
.nav{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding-left:0;margin-bottom:0;list-style:none;}
.nav-link{display:block;padding:0.5em 1em;}
.nav-link:focus,.nav-link:hover{text-decoration:none;}
.nav-tabs{border-bottom:1px solid #ddd;}
.nav-tabs .nav-item{margin-bottom:-1px;}
.nav-tabs .nav-link{border:1px solid transparent;border-top-right-radius:0.25rem;border-top-left-radius:0.25rem;}
.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#eceeef #eceeef #ddd;}
.nav-tabs .nav-link.active{color:#464a4c;background-color:#fff;border-color:#ddd #ddd #fff;}
.tab-content > .tab-pane{display:none;}
.tab-content > .active{display:block;}
.card{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;background-color:#fff;border:1px solid rgba(0, 0, 0, 0.125);border-radius:0.25rem;}
.card-block{-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem;}
.media{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;}
.media-body{-webkit-box-flex:1;-webkit-flex:1 1 0%;-ms-flex:1 1 0%;flex:1 1 0%;}
.rounded-circle{border-radius:50%;}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-briefcase:before{content:"\f0b1";}
.fa-envelope:before{content:"\f0e0";}
.fa-ellipsis-v:before{content:"\f142";}
div,h4,p,a,img,i,section{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
section{display:block;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Montserrat', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
a{color:#fff;text-decoration:none;outline:0;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
a:hover,a:focus,a:active,a.active{text-decoration:none;outline:0;color:#D86000!important;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
ul{margin:0;}
ul{list-style:none outside;}
li{line-height:24px;}
a{cursor:pointer;outline:0;}
a{cursor:pointer;outline:0;}
.posts-2{width:100%;background:#f2f2f2;padding-top:50px;padding-bottom:30px;}
.card{margin-bottom:30px;margin-right:10px;margin-left:10px;border-radius:10px!important;box-shadow:0 1px 5px rgba(49, 58, 70, 0.4);}
.card a{text-decoration:none!important;color:inherit;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
.nav-tabs .nav-link{font-family:'Montserrat', sans-serif;font-size:16px;color:#3b4354;}
.followers .card-profile .media{margin-top:0;}
.followers .card-profile .media .media-left{padding-right:15px;}
.followers .card-profile .media .media-object{width:48px;padding:2px;border:2px solid #eaecf0;}
.followers .media-object{display:block;}
.followers .media-body{display:table-cell;vertical-align:top;width:10000px;}
.followers .media-heading{font-family:'Montserrat', sans-serif;margin-top:5px;margin-bottom:2px;font-size:16px;font-weight:700;color:#3b4354;}
.followers .media-usermeta{font-family:'Montserrat', sans-serif;margin-top:4px;color:#909bb1;}
.followers .media-usermeta i{display:inline-block;margin-right:5px;vertical-align:baseline;}
.followers .card-options{position:absolute;top:15px;right:20px;padding:0;margin:0;}
.followers .card-options > li{display:block;float:left;list-style:none;}
.followers .card-options > li > a{color:#bdc3d1;-webkit-transition:all 0.2s ease-out 0s;-o-transition:all 0.2s ease-out 0s;transition:all 0.2s ease-out 0s;}
.followers .card-options > li > a > i{display:inline-block;vertical-align:middle;}
.followers .people-info .row{margin:0;}
.followers .people-info .col-sm-4{padding:0;font-size:12px;}
.followers .people-info .col-sm-4:first-child > .info-group{margin-left:0;}
.followers .people-info .info-group{font-family:'Montserrat', sans-serif;font-size:14px;padding:15px;background-color:#f9fafb;margin-left:1px;}
.followers .people-info .info-group label{display:block;margin-bottom:5px;text-transform:uppercase;font-family:'Montserrat', sans-serif;font-weight:700;font-size:11px;letter-spacing:.5px;color:#3b4354;}
.followers .people-info .row + .row{margin-top:1px;}
.followers .people-info h4{font-family:'Montserrat', sans-serif;margin:9px 0 8px;font-weight:500;color:#259dab;font-size:15px;}
.nav-tabs .nav-link{font-family:'Montserrat', sans-serif;font-size:16px;}
.form_style{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding: 20px;
    border-radius: 20px;
}
.form_style_sec {margin: 5rem;}
.header_form{background-color:#efeeee!important;}
@media (max-width: 767px){

	.form_style_sec {margin: 2rem;}
	.arch .arch-right{text-align: center; margin-bottom: 15px;}
}

.rgsel, .rgsel-1, .commune_0{display: none;}


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
                <form enctype="multipart/form-data" class="edit_user" id="edit_user_4646744" action="{{url('users', Auth::user())}}" accept-charset="UTF-8" method="post">
                    @csrf
                    {{method_field('patch')}}
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 text-center">
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

                        <div class="col-xs-12 col-sm-8">
                            <div class="form-group">
                                <label for="user_first_name">Nom de famille</label>
                                <input class="form-control" type="text" value="{{Auth::user()->last_name}}" name="last_name" id="user_first_name">

                            </div> <!-- close .form-group -->

                            <div class="form-group">
                                <label for="user_last_name">Prénom Traditionnel</label>
                                <input class="form-control" type="text" value="{{Auth::user()->traditional_first_name}}" name="traditional_first_name" id="user_last_name">

                            </div> <!-- close .form-group -->
                            <div class="form-group">
                                <label for="user_last_name">Autre prénom</label>
                                <input class="form-control" type="text" value="{{Auth::user()->other_name}}" name="other_name" id="user_last_name">

                            </div>

                            <div class="form-group">
                                <label for="user_email">
                                    Email address
                                </label>
                                <input class="form-control" readonly type="email" value="{{Auth::user()->email}}" name="email" id="user_email">

                            </div> <!-- close .form-group -->

                            <div class="form-group">
                                <label for="">
                                    Industrie dans laquelle vous exercez ({{Auth::user()->job}})
                                </label>
							      <select name="job" class="form-control" id="sel1" placeholder="Métier">
                                      @if(Auth::user()->job !== null)
                                      <option selected value="{{Auth::user()->job}}">{{Auth::user()->job}}</option>
                                      @endif
							        <option value="Aéronautique Et Espace">Aéronautique Et Espace</option>
							        <option value="Agriculture - Agroalimentaire">Agriculture - Agroalimentaire</option>
							        <option value="Artisanat">Artisanat</option>
							        <option value="Audiovisuel, Cinéma">Audiovisuel, Cinéma</option>
							        <option value="Audit, Comptabilité, Gestion">Audit, Comptabilité, Gestion</option>
							        <option value="Automobile">Automobile</option>
							        <option value="Banque, Assurance">Banque, Assurance</option>
							        <option value="Bâtiment, Travaux Publics">Bâtiment, Travaux Publics</option>
							        <option value="Biologie, Chimie, Pharmacie">Biologie, Chimie, Pharmacie</option>
							        <option value="Commerce, Distribution">Commerce, Distribution</option>
							        <option value="Communication">Communication</option>
							        <option value="Création, Métiers D'art">Création, Métiers D'art</option>
							        <option value="Culture, Patrimoine">Culture, Patrimoine</option>
							        <option value="Défense, Sécurité, Armée">Défense, Sécurité, Armée</option>
							        <option value="Documentation, Bibliothèque">Documentation, Bibliothèque</option>
							        <option value="Droit">Droit</option>
							        <option value="Edition, Livre">Edition, Livre</option>
							        <option value="Enseignement">Enseignement</option>
							        <option value="Environnement">Environnement</option>
							        <option value="Ferroviaire">Ferroviaire</option>
							        <option value="Foires, Salons Et Congrès">Foires, Salons Et Congrès</option>
							        <option value="Fonction Publique">Fonction Publique</option>
							        <option value="Hôtellerie, Restauration">Hôtellerie, Restauration</option>
							        <option value="Humanitaire">Humanitaire</option>
							        <option value="Immobilier">Immobilier</option>
							        <option value="Industrie">Industrie</option>
							        <option value="Informatique, Télécoms, Web">Informatique, Télécoms, Web</option>
							        <option value="Journalisme">Journalisme</option>
							        <option value="Langues">Langues</option>
							        <option value="Marketing, Publicité">Marketing, Publicité</option>
							        <option value="Médical">Médical</option>
							        <option value="Mode-Textile">Mode-Textile</option>
							        <option value="Paramédical">Paramédical</option>
							        <option value="Propreté Et Services Associés">Propreté Et Services Associés</option>
							        <option value="Psychologie">Psychologie</option>
							        <option value="Ressources Humaines">Ressources Humaines</option>
							        <option value="Sciences Humaines Et Sociales">Sciences Humaines Et Sociales</option>
							        <option value="Secrétariat">Secrétariat</option>
							        <option value="Social">Social</option>
							        <option value="Spectacle - Métiers De La Scène">Spectacle - Métiers De La Scène</option>
							        <option value="Sport">Sport</option>
							        <option value="Tourisme">Tourisme</option>
							        <option value="Transport-Logistique">Transport-Logistique</option>
							      </select>

                            </div> <!-- close .form-group -->

                            <div class="form-group">
                                <label for="Image_cover">
                                    Image de fond
                                </label>
                                <input class="form-control" type="file" value="" name="cover_image" id="">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                    </div> <!-- close .row -->

                    <div class="row">

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Pays d'origine
                                </label>
                                <!--input class="form-control" placeholder="Pays de naissance" value="{{Auth::user()->birth_country}}" type="text" name="birth_country"  id="country"-->
                                <select name="birth_country" class="form-control" value="{{Auth::user()->birth_country}}" id="pays">

                                    @if(Auth::user()->birth_country !== null)
                                    <option selected value="{{Auth::user()->birth_country}}">{{Auth::user()->birth_country}}</option>
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
                        {{--
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Etat de naissance
                                </label>
                                <!--input class="form-control" placeholder="Etat de naissance" type="text" name="user[url]" -->

							    <select class="form-control" id="sel1" placeholder="Etat de naissance">
							        <option>Abidjan</option>
							        <option>Lacs</option>
							        <option>Comoé</option>
							        <option>Denguélé</option>
							        <option>Gôh-Djiboua</option>
							        <option>Lagunes</option>
							        <option>Montagnes</option>
							        <option>Sassandra-Marahoué</option>
							        <option>Savanes</option>
							        <option>Bas-Sassandra</option>
							        <option>Vallée du Bandama</option>
							        <option>Woroba</option>
							        <option>Zanzan</option>
							        <option>Yamoussoukro</option>
							    </select>
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Ville de naissance
                                </label>
                                <input id="search_input" class="form-control" placeholder="Ville de naissance" type="text" value="{{Auth::user()->birth_city}}" name="birth_city" id="city" autocomplete="on" >
                                <input class="form-control" type="hidden" id="loc_lat" />
                                <input class="form-control" type="hidden" id="loc_long" />
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Ville
                                </label>
                                <input class="form-control" placeholder="Ville" type="text" name="town" id="user_url" value="{{Auth::user()->town}}">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                        --}}
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Pays de résidence
                                </label>
                                <input id="country_2" class="form-control" placeholder="Pays de résidence" type="text" name="living_country" id="country_2 search_input-1" value="{{Auth::user()->living_country}}">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                        <div class="col-xs-12 col-sm-6" id="commune0">
                            <div class="form-group">
                                <label for="user_url">
                                    Votre village
                                </label>
                                <input class="form-control" placeholder="Votre village" type="text" name="town" id="user_url search_input-25" value="{{Auth::user()->town}}">
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                        <div class="col-xs-12 col-sm-6 commune_0" id="commune">
                            <div class="form-group">
                                <label for="user_url">
                                    Votre village
                                </label>

                                <select class="form-control"  value="" name="town">
                                    @if(Auth::user()->town !== null)
                                    <option value="{{Auth::user()->town}}">{{Auth::user()->town}}</option>
                                    @endif
							        <option value="Abengourou">Abengourou</option>
							        <option value="Abobo">Abobo</option>
							        <option value="Aboisso">Aboisso</option>
							        <option value="Adiaké">Adiaké</option>
							        <option value="Adjamé">Adjamé</option>
							        <option value="Adzopé">Adzopé</option>
							        <option value="Afféry">Afféry</option>
							        <option value="Agboville">Agboville</option>
							        <option value="Agnibilékrou">Agnibilékrou</option>
							        <option value="Agou">Agou</option>
							        <option value="Akoupé">Akoupé</option>
							        <option value="Alépé">Alépé</option>
							        <option value="Anoumaba">Anoumaba</option>
							        <option value="Anyama">Anyama</option>
							        <option value="Arrah">Arrah</option>
							        <option value="Assinie">Assinie</option>
							        <option value="Assuéffry">Assuéffry</option>
							        <option value="Attécoubé">Attécoubé</option>
							        <option value="Attiegouakro">Attiegouakro</option>
							        <option value="Ayamé">Ayamé</option>
							        <option value="Azaguié">Azaguié</option>
							        <option value="Bako">Bako</option>
							        <option value="Bangolo">Bangolo</option>
							        <option value="Bassawa">Bassawa</option>
							        <option value="Bédiala">Bédiala</option>
							        <option value="Béoumi">Béoumi</option>
							        <option value="Béttié">Béttié</option>
							        <option value="Biankouma">Biankouma</option>
							        <option value="Bin-Houyé">Bin-Houyé</option>
							        <option value="Bingerville">Bingerville</option>
							        <option value="Bloléquin">Bloléquin</option>
							        <option value="Bocanda">Bocanda</option>
							        <option value="Bodokro">Bodokro</option>
							        <option value="Bondoukou">Bondoukou</option>
							        <option value="Bongouanou">Bongouanou</option>
							        <option value="Boniérédougou">Boniérédougou</option>
							        <option value="Bonon">Bonon</option>
							        <option value="Bonoua">Bonoua</option>
							        <option value="Booko">Booko</option>
							        <option value="Borotou">Borotou</option>
							        <option value="Botro">Botro</option>
							        <option value="Bouaflé">Bouaflé</option>
							        <option value="Bouaké">Bouaké</option>
							        <option value="Bouna">Bouna</option>
							        <option value="Boundiali">Boundiali</option>
							        <option value="Brobo">Brobo</option>
							        <option value="Buyo">Buyo</option>
							        <option value="Cocody">Cocody</option>
							        <option value="Dabakala">Dabakala</option>
							        <option value="Dabou">Dabou</option>
							        <option value="Daloa">Daloa</option>
							        <option value="Danané">Danané</option>
							        <option value="Daoukro">Daoukro</option>
							        <option value="Diabo">Diabo</option>
							        <option value="Dianra">Dianra</option>
							        <option value="Diawala">Diawala</option>
							        <option value="Didiévi">Didiévi</option>
							        <option value="Diégonéfla">Diégonéfla</option>
							        <option value="Dikodougou">Dikodougou</option>
							        <option value="Dimbokro">Dimbokro</option>
							        <option value="Dioulatiédougou">Dioulatiédougou</option>
							        <option value="Divo">Divo</option>
							        <option value="Djebonoua">Djebonoua</option>
							        <option value="Djèkanou">Djèkanou</option>
							        <option value="Djibrosso">Djibrosso</option>
							        <option value="Doropo">Doropo</option>
							        <option value="Dualla">Dualla</option>
							        <option value="Duékoué">Duékoué</option>
							        <option value="Ettrokro">Ettrokro</option>
							        <option value="Facobly">Facobly</option>
							        <option value="Ferkessédougou">Ferkessédougou</option>
							        <option value="Foumbolo">Foumbolo</option>
							        <option value="Fresco">Fresco</option>
							        <option value="Fronan">Fronan</option>
							        <option value="Gagnoa">Gagnoa</option>
							        <option value="Gbeleban">Gbeleban</option>
							        <option value="Gboguhé">Gboguhé</option>
							        <option value="Gbon">Gbon</option>
							        <option value="Gbonné">Gbonné</option>
							        <option value="Gohitafla">Gohitafla</option>
							        <option value="Goulia">Goulia</option>
							        <option value="Grabo">Grabo</option>
							        <option value="Grand-Bassam">Grand-Bassam</option>
							        <option value="Grand-Béréby">Grand-Béréby</option>
							        <option value="Grand-Lahou">Grand-Lahou</option>
							        <option value="Grand-Zattry">Grand-Zattry</option>
							        <option value="Guéyo">Guéyo</option>
							        <option value="Guibéroua">Guibéroua</option>
							        <option value="Guiembé">Guiembé</option>
							        <option value="Guiglo">Guiglo</option>
							        <option value="Guintéguéla">Guintéguéla</option>
							        <option value="Guitry">Guitry</option>
							        <option value="Hiré">Hiré</option>
							        <option value="Issia">Issia</option>
							        <option value="Jacqueville">Jacqueville</option>
							        <option value="Kanakono">Kanakono</option>
							        <option value="Kani">Kani</option>
							        <option value="Kaniasso">Kaniasso</option>
							        <option value="Karakoro">Karakoro</option>
							        <option value="Kasséré">Kasséré</option>
							        <option value="Katiola">Katiola</option>
							        <option value="Kokoumbo">Kokoumbo</option>
							        <option value="Kolia">Kolia</option>
							        <option value="Komborodougou">Komborodougou</option>
							        <option value="Kong">Kong</option>
							        <option value="Kongasso">Kongasso</option>
							        <option value="Koonan">Koonan</option>
							        <option value="Korhogo">Korhogo</option>
							        <option value="Koro">Koro</option>
							        <option value="Kouassi-Datékro">Kouassi-Datékro</option>
							        <option value="Kouassi-Kouassikro">Kouassi-Kouassikro</option>
							        <option value="Kouibly">Kouibly</option>
							        <option value="Koumassi">Koumassi</option>
							        <option value="Koumbala">Koumbala</option>
							        <option value="Koun-Fao">Koun-Fao</option>
							        <option value="Kounahiri">Kounahiri</option>
							        <option value="Kouto">Kouto</option>
							        <option value="Lakota">Lakota</option>
							        <option value="Logoualé">Logoualé</option>
							        <option value="M'bahiakro">M'bahiakro</option>
							        <option value="M'batto">M'batto</option>
							        <option value="M'bengué">M'bengué</option>
							        <option value="Madinani">Madinani</option>
							        <option value="Maféré">Maféré</option>
							        <option value="Man">Man</option>
							        <option value="Mankono">Mankono</option>
							        <option value="Marcory">Marcory</option>
							        <option value="Massala">Massala</option>
							        <option value="Mayo">Mayo</option>
							        <option value="Méagui">Méagui</option>
							        <option value="Minignan">Minignan</option>
							        <option value="Morondo">Morondo</option>
							        <option value="N'douci">N'douci</option>
							        <option value="Napié">Napié</option>
							        <option value="Nassian">Nassian</option>
							        <option value="Niablé">Niablé</option>
							        <option value="Niakaramandougou">Niakaramandougou</option>
							        <option value="Niéllé">Niéllé</option>
							        <option value="Niofoin">Niofoin</option>
							        <option value="Odienné">Odienné</option>
							        <option value="Ouangolodougou">Ouangolodougou</option>
							        <option value="Ouaninou">Ouaninou</option>
							        <option value="Ouellé">Ouellé</option>
							        <option value="Oumé">Oumé</option>
							        <option value="Ouragahio">Ouragahio</option>
							        <option value="Plateau">Plateau</option>
							        <option value="Port-bouët">Port-bouët</option>
							        <option value="Prikro">Prikro</option>
							        <option value="Rubino">Rubino</option>
							        <option value="Saïoua">Saïoua</option>
							        <option value="Sakassou">Sakassou</option>
							        <option value="Samatiguila">Samatiguila</option>
							        <option value="San Pedro">San Pedro</option>
							        <option value="Sandégué">Sandégué</option>
							        <option value="Sangouiné">Sangouiné</option>
							        <option value="Sarhala">Sarhala</option>
							        <option value="Sassandra">Sassandra</option>
							        <option value="Satama-Sokoro">Satama-Sokoro</option>
							        <option value="Satama-Sokoura">Satama-Sokoura</option>
							        <option value="Séguéla">Séguéla</option>
							        <option value="Séguelon">Séguelon</option>
							        <option value="Seydougou">Seydougou</option>
							        <option value="Sifié">Sifié</option>
							        <option value="Sikensi">Sikensi</option>
							        <option value="Sinématiali">Sinématiali</option>
							        <option value="Sinfra">Sinfra</option>
							        <option value="Sipilou">Sipilou</option>
							        <option value="Sirasso">Sirasso</option>
							        <option value="Songon">Songon</option>
							        <option value="Soubré">Soubré</option>
							        <option value="Taabo">Taabo</option>
							        <option value="Tabou">Tabou</option>
							        <option value="Tafiré">Tafiré</option>
							        <option value="Taï">Taï</option>
							        <option value="Tanda">Tanda</option>
							        <option value="Téhini">Téhini</option>
							        <option value="Tengréla">Tengréla</option>
							        <option value="Tiapoum">Tiapoum</option>
							        <option value="Tiassalé">Tiassalé</option>
							        <option value="Tie-n'diekro">Tie-n'diekro</option>
							        <option value="Tiébissou">Tiébissou</option>
							        <option value="Tiémé">Tiémé</option>
							        <option value="Tiémélékro">Tiémélékro</option>
							        <option value="Tiéningboué">Tiéningboué</option>
							        <option value="Tienko">Tienko</option>
							        <option value="Tioroniaradougou">Tioroniaradougou</option>
							        <option value="Tortiya">Tortiya</option>
							        <option value="Touba">Touba</option>
							        <option value="Toulépleu">Toulépleu</option>
							        <option value="Toumodi">Toumodi</option>
							        <option value="Transua">Transua</option>
							        <option value="Treichville">Treichville</option>
							        <option value="Vavoua">Vavoua</option>
							        <option value="Worofla">Worofla</option>
							        <option value="Yakassé-Attobrou">Yakassé-Attobrou</option>
							        <option value="Yamoussoukro">Yamoussoukro</option>
							        <option value="Yopougon">Yopougon</option>
							        <option value="Zikisso">Zikisso</option>
							        <option value="Zouan-Hounien">Zouan-Hounien</option>
							        <option value="Zoukougbeu">Zoukougbeu</option>
							        <option value="Zuénoula">Zuénoula</option>

							    </select>



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Ville de résidence
                                </label>
                                <input class="form-control" placeholder="Ville de résidence" type="text" name="living_city" id="user_url search_input-2" value="{{Auth::user()->living_city}}">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        {{--
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Etat de résidence
                                </label>
                                <input class="form-control" placeholder="Etat de résidence" type="text" name="living_state"  value="{{Auth::user()->living_state}}" id="search_input-3">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                        --}}


                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Situation matrimoniale
                                </label>
                                <input class="form-control" placeholder="Situation matrimonial" type="text" name="marital_status" id="user_url" value="{{Auth::user()->marital_status}}">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Code Postal
                                </label>
                                <input class="form-control" placeholder="Code Postal" type="text" name="zip_code" id="user_url" value="{{Auth::user()->zip_code}}">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Nombre d'enfants
                                </label>
                                <input class="form-control" placeholder="Nombre d'enfant" type="number" name="children_number" id="user_url" value="{{Auth::user()->children_number}}">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Numéro de téléphone
                                </label>
                                <input class="form-control" placeholder="Numéro de téléphone" type="text" name="mobile_tel" id="phone" value="{{Auth::user()->mobile_tel}}">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->


                        <!--Father-->

                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group header_form">
                            	<hr>
	                                <h1 for="user_url" style="text-align: center;">
	                                    Profil du père
	                                </h1>
                                <hr>
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->


                            <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Nom du père
                                </label>
                                <input class="form-control" placeholder="Nom du père" type="text" name="father_traditional_first_name" id="user_url" value="{{Auth::user()->father_traditional_first_name}}">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Prénoms du père
                                </label>
                                <input class="form-control" placeholder="Prénoms du père" type="text" name="father_last_name" id="user_url" value="{{Auth::user()->father_last_name}}">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                        {{--
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Autre noms du père
                                </label>
                                <input class="form-control" placeholder="Autre noms du père" type="text" name="father_other_name" id="user_url" value="{{Auth::user()->father_other_name}}">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                        --}}
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Nationalité du père
                                </label>
                                <!--input class="form-control" placeholder="Pays de résidence du père" type="text" name="father_birth_country" id="country_4" value="{{Auth::user()->father_birth_country}}"-->

                                <select id="nationalite_1" class="form-control" placeholder="Nationalité du père" name="father_birth_country">
                                    @if(Auth::user()->father_birth_country !== null)
                                    <option value="{{Auth::user()->father_birth_country}}">{{Auth::user()->father_birth_country}}</option>
                                    @endif
							        <option value="AFG">Afghane (Afghanistan)</option>
							        <option value="ALB">Albanaise (Albanie)</option>
							        <option value="DZA">Algérienne (Algérie)</option>
							        <option value="DEU">Allemande (Allemagne)</option>
							        <option value="USA">Americaine (États-Unis)</option>
							        <option value="AND">Andorrane (Andorre)</option>
							        <option value="AGO">Angolaise (Angola)</option>
							        <option value="ATG">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
							        <option value="ARG">Argentine (Argentine)</option>
							        <option value="ARM">Armenienne (Arménie)</option>
							        <option value="AUS">Australienne (Australie)</option>
							        <option value="AUT">Autrichienne (Autriche)</option>
							        <option value="AZE">Azerbaïdjanaise (Azerbaïdjan)</option>
							        <option value="BHS">Bahamienne (Bahamas)</option>
							        <option value="BHR">Bahreinienne (Bahreïn)</option>
							        <option value="BGD">Bangladaise (Bangladesh)</option>
							        <option value="BRB">Barbadienne (Barbade)</option>
							        <option value="BEL">Belge (Belgique)</option>
							        <option value="BLZ">Belizienne (Belize)</option>
							        <option value="BEN">Béninoise (Bénin)</option>
							        <option value="BTN">Bhoutanaise (Bhoutan)</option>
							        <option value="BLR">Biélorusse (Biélorussie)</option>
							        <option value="MMR">Birmane (Birmanie)</option>
							        <option value="GNB">Bissau-Guinéenne (Guinée-Bissau)</option>
							        <option value="BOL">Bolivienne (Bolivie)</option>
							        <option value="BIH">Bosnienne (Bosnie-Herzégovine)</option>
							        <option value="BWA">Botswanaise (Botswana)</option>
							        <option value="BRA">Brésilienne (Brésil)</option>
							        <option value="GBR">Britannique (Royaume-Uni)</option>
							        <option value="BRN">Brunéienne (Brunéi)</option>
							        <option value="BGR">Bulgare (Bulgarie)</option>
							        <option value="BFA">Burkinabée (Burkina)</option>
							        <option value="BDI">Burundaise (Burundi)</option>
							        <option value="KHM">Cambodgienne (Cambodge)</option>
							        <option value="CMR">Camerounaise (Cameroun)</option>
							        <option value="CAN">Canadienne (Canada)</option>
							        <option value="CPV">Cap-verdienne (Cap-Vert)</option>
							        <option value="CAF">Centrafricaine (Centrafrique)</option>
							        <option value="CHL">Chilienne (Chili)</option>
							        <option value="CHN">Chinoise (Chine)</option>
							        <option value="CYP">Chypriote (Chypre)</option>
							        <option value="COL">Colombienne (Colombie)</option>
							        <option value="COM">Comorienne (Comores)</option>
							        <option value="COG">Congolaise (Congo-Brazzaville)</option>
							        <option value="COD">Congolaise (Congo-Kinshasa)</option>
							        <option value="COK">Cookienne (Îles Cook)</option>
							        <option value="CRI">Costaricaine (Costa Rica)</option>
							        <option value="HRV">Croate (Croatie)</option>
							        <option value="CUB">Cubaine (Cuba)</option>
							        <option value="DNK">Danoise (Danemark)</option>
							        <option value="DJI">Djiboutienne (Djibouti)</option>
							        <option value="DOM">Dominicaine (République dominicaine)</option>
							        <option value="DMA">Dominiquaise (Dominique)</option>
							        <option value="EGY">Égyptienne (Égypte)</option>
							        <option value="ARE">Émirienne (Émirats arabes unis)</option>
							        <option value="GNQ">Équato-guineenne (Guinée équatoriale)</option>
							        <option value="ECU">Équatorienne (Équateur)</option>
							        <option value="ERI">Érythréenne (Érythrée)</option>
							        <option value="ESP">Espagnole (Espagne)</option>
							        <option value="TLS">Est-timoraise (Timor-Leste)</option>
							        <option value="EST">Estonienne (Estonie)</option>
							        <option value="ETH">Éthiopienne (Éthiopie)</option>
							        <option value="FJI">Fidjienne (Fidji)</option>
							        <option value="FIN">Finlandaise (Finlande)</option>
							        <option value="FRA">Française (France)</option>
							        <option value="GAB">Gabonaise (Gabon)</option>
							        <option value="GMB">Gambienne (Gambie)</option>
							        <option value="GEO">Georgienne (Géorgie)</option>
							        <option value="GHA">Ghanéenne (Ghana)</option>
							        <option value="GRD">Grenadienne (Grenade)</option>
							        <option value="GTM">Guatémaltèque (Guatemala)</option>
							        <option value="GIN">Guinéenne (Guinée)</option>
							        <option value="GUY">Guyanienne (Guyana)</option>
							        <option value="HTI">Haïtienne (Haïti)</option>
							        <option value="GRC">Hellénique (Grèce)</option>
							        <option value="HND">Hondurienne (Honduras)</option>
							        <option value="HUN">Hongroise (Hongrie)</option>
							        <option value="IND">Indienne (Inde)</option>
							        <option value="IDN">Indonésienne (Indonésie)</option>
							        <option value="IRQ">Irakienne (Iraq)</option>
							        <option value="IRN">Iranienne (Iran)</option>
							        <option value="IRL">Irlandaise (Irlande)</option>
							        <option value="ISL">Islandaise (Islande)</option>
							        <option value="ISR">Israélienne (Israël)</option>
							        <option value="ITA">Italienne (Italie)</option>
							        <option value="CIV">Ivoirienne (Côte d'Ivoire)</option>
							        <option value="JAM">Jamaïcaine (Jamaïque)</option>
							        <option value="JPN">Japonaise (Japon)</option>
							        <option value="JOR">Jordanienne (Jordanie)</option>
							        <option value="KAZ">Kazakhstanaise (Kazakhstan)</option>
							        <option value="KEN">Kenyane (Kenya)</option>
							        <option value="KGZ">Kirghize (Kirghizistan)</option>
							        <option value="KIR">Kiribatienne (Kiribati)</option>
							        <option value="KNA">Kittitienne et Névicienne (Saint-Christophe-et-Niévès)</option>
							        <option value="KWT">Koweïtienne (Koweït)</option>
							        <option value="LAO">Laotienne (Laos)</option>
							        <option value="LSO">Lesothane (Lesotho)</option>
							        <option value="LVA">Lettone (Lettonie)</option>
							        <option value="LBN">Libanaise (Liban)</option>
							        <option value="LBR">Libérienne (Libéria)</option>
							        <option value="LBY">Libyenne (Libye)</option>
							        <option value="LIE">Liechtensteinoise (Liechtenstein)</option>
							        <option value="LTU">Lituanienne (Lituanie)</option>
							        <option value="LUX">Luxembourgeoise (Luxembourg)</option>
							        <option value="MKD">Macédonienne (Macédoine)</option>
							        <option value="MYS">Malaisienne (Malaisie)</option>
							        <option value="MWI">Malawienne (Malawi)</option>
							        <option value="MDV">Maldivienne (Maldives)</option>
							        <option value="MDG">Malgache (Madagascar)</option>
							        <option value="MLI">Maliennes (Mali)</option>
							        <option value="MLT">Maltaise (Malte)</option>
							        <option value="MAR">Marocaine (Maroc)</option>
							        <option value="MHL">Marshallaise (Îles Marshall)</option>
							        <option value="MUS">Mauricienne (Maurice)</option>
							        <option value="MRT">Mauritanienne (Mauritanie)</option>
							        <option value="MEX">Mexicaine (Mexique)</option>
							        <option value="FSM">Micronésienne (Micronésie)</option>
							        <option value="MDA">Moldave (Moldovie)</option>
							        <option value="MCO">Monegasque (Monaco)</option>
							        <option value="MNG">Mongole (Mongolie)</option>
							        <option value="MNE">Monténégrine (Monténégro)</option>
							        <option value="MOZ">Mozambicaine (Mozambique)</option>
							        <option value="NAM">Namibienne (Namibie)</option>
							        <option value="NRU">Nauruane (Nauru)</option>
							        <option value="NLD">Néerlandaise (Pays-Bas)</option>
							        <option value="NZL">Néo-Zélandaise (Nouvelle-Zélande)</option>
							        <option value="NPL">Népalaise (Népal)</option>
							        <option value="NIC">Nicaraguayenne (Nicaragua)</option>
							        <option value="NGA">Nigériane (Nigéria)</option>
							        <option value="NER">Nigérienne (Niger)</option>
							        <option value="NIU">Niuéenne (Niue)</option>
							        <option value="PRK">Nord-coréenne (Corée du Nord)</option>
							        <option value="NOR">Norvégienne (Norvège)</option>
							        <option value="OMN">Omanaise (Oman)</option>
							        <option value="UGA">Ougandaise (Ouganda)</option>
							        <option value="UZB">Ouzbéke (Ouzbékistan)</option>
							        <option value="PAK">Pakistanaise (Pakistan)</option>
							        <option value="PLW">Palaosienne (Palaos)</option>
							        <option value="PSE">Palestinienne (Palestine)</option>
							        <option value="PAN">Panaméenne (Panama)</option>
							        <option value="PNG">Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
							        <option value="PRY">Paraguayenne (Paraguay)</option>
							        <option value="PER">Péruvienne (Pérou)</option>
							        <option value="PHL">Philippine (Philippines)</option>
							        <option value="POL">Polonaise (Pologne)</option>
							        <option value="PRT">Portugaise (Portugal)</option>
							        <option value="QAT">Qatarienne (Qatar)</option>
							        <option value="ROU">Roumaine (Roumanie)</option>
							        <option value="RUS">Russe (Russie)</option>
							        <option value="RWA">Rwandaise (Rwanda)</option>
							        <option value="LCA">Saint-Lucienne (Sainte-Lucie)</option>
							        <option value="SMR">Saint-Marinaise (Saint-Marin)</option>
							        <option value="VCT">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
							        <option value="SLB">Salomonaise (Îles Salomon)</option>
							        <option value="SLV">Salvadorienne (Salvador)</option>
							        <option value="WSM">Samoane (Samoa)</option>
							        <option value="STP">Santoméenne (Sao Tomé-et-Principe)</option>
							        <option value="SAU">Saoudienne (Arabie saoudite)</option>
							        <option value="SEN">Sénégalaise (Sénégal)</option>
							        <option value="SRB">Serbe (Serbie)</option>
							        <option value="SYC">Seychelloise (Seychelles)</option>
							        <option value="SLE">Sierra-Léonaise (Sierra Leone)</option>
							        <option value="SGP">Singapourienne (Singapour)</option>
							        <option value="SVK">Slovaque (Slovaquie)</option>
							        <option value="SVN">Slovène (Slovénie)</option>
							        <option value="SOM">Somalienne (Somalie)</option>
							        <option value="SDN">Soudanaise (Soudan)</option>
							        <option value="LKA">Sri-Lankaise (Sri Lanka)</option>
							        <option value="ZAF">Sud-Africaine (Afrique du Sud)</option>
							        <option value="KOR">Sud-Coréenne (Corée du Sud)</option>
							        <option value="SSD">Sud-Soudanaise (Soudan du Sud)</option>
							        <option value="SWE">Suédoise (Suède)</option>
							        <option value="CHE">Suisse (Suisse)</option>
							        <option value="SUR">Surinamaise (Suriname)</option>
							        <option value="SWZ">Swazie (Swaziland)</option>
							        <option value="SYR">Syrienne (Syrie)</option>
							        <option value="TJK">Tadjike (Tadjikistan)</option>
							        <option value="TZA">Tanzanienne (Tanzanie)</option>
							        <option value="TCD">Tchadienne (Tchad)</option>
							        <option value="CZE">Tchèque (Tchéquie)</option>
							        <option value="THA">Thaïlandaise (Thaïlande)</option>
							        <option value="TGO">Togolaise (Togo)</option>
							        <option value="TON">Tonguienne (Tonga)</option>
							        <option value="TTO">Trinidadienne (Trinité-et-Tobago)</option>
							        <option value="TUN">Tunisienne (Tunisie)</option>
							        <option value="TKM">Turkmène (Turkménistan)</option>
							        <option value="TUR">Turque (Turquie)</option>
							        <option value="TUV">Tuvaluane (Tuvalu)</option>
							        <option value="UKR">Ukrainienne (Ukraine)</option>
							        <option value="URY">Uruguayenne (Uruguay)</option>
							        <option value="VUT">Vanuatuane (Vanuatu)</option>
							        <option value="VAT">Vaticane (Vatican)</option>
							        <option value="VEN">Vénézuélienne (Venezuela)</option>
							        <option value="VNM">Vietnamienne (Viêt Nam)</option>
							        <option value="YEM">Yéménite (Yémen)</option>
							        <option value="ZMB">Zambienne (Zambie)</option>
							        <option value="ZWE">Zimbabwéenne (Zimbabwe)</option>
								</select>



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Village du père
                                </label>
                                <input class="form-control" value="{{Auth::user()->father_town}}" placeholder="Village du père" type="text" name="father_town" id="region1">

                                <select class="form-control rgsel-1" id="region_2" placeholder="Village du père" name="father_town">
                                    @if(Auth::user()->father_town !== null)
                                    <option value="{{Auth::user()->father_town}}">{{Auth::user()->father_town}}</option>
                                    @endif
							        <option value="Abengourou">Abengourou</option>
							        <option value="Abobo">Abobo</option>
							        <option value="Aboisso">Aboisso</option>
							        <option value="Adiaké">Adiaké</option>
							        <option value="Adjamé">Adjamé</option>
							        <option value="Adzopé">Adzopé</option>
							        <option value="Afféry">Afféry</option>
							        <option value="Agboville">Agboville</option>
							        <option value="Agnibilékrou">Agnibilékrou</option>
							        <option value="Agou">Agou</option>
							        <option value="Akoupé">Akoupé</option>
							        <option value="Alépé">Alépé</option>
							        <option value="Anoumaba">Anoumaba</option>
							        <option value="Anyama">Anyama</option>
							        <option value="Arrah">Arrah</option>
							        <option value="Assinie">Assinie</option>
							        <option value="Assuéffry">Assuéffry</option>
							        <option value="Attécoubé">Attécoubé</option>
							        <option value="Attiegouakro">Attiegouakro</option>
							        <option value="Ayamé">Ayamé</option>
							        <option value="Azaguié">Azaguié</option>
							        <option value="Bako">Bako</option>
							        <option value="Bangolo">Bangolo</option>
							        <option value="Bassawa">Bassawa</option>
							        <option value="Bédiala">Bédiala</option>
							        <option value="Béoumi">Béoumi</option>
							        <option value="Béttié">Béttié</option>
							        <option value="Biankouma">Biankouma</option>
							        <option value="Bin-Houyé">Bin-Houyé</option>
							        <option value="Bingerville">Bingerville</option>
							        <option value="Bloléquin">Bloléquin</option>
							        <option value="Bocanda">Bocanda</option>
							        <option value="Bodokro">Bodokro</option>
							        <option value="Bondoukou">Bondoukou</option>
							        <option value="Bongouanou">Bongouanou</option>
							        <option value="Boniérédougou">Boniérédougou</option>
							        <option value="Bonon">Bonon</option>
							        <option value="Bonoua">Bonoua</option>
							        <option value="Booko">Booko</option>
							        <option value="Borotou">Borotou</option>
							        <option value="Botro">Botro</option>
							        <option value="Bouaflé">Bouaflé</option>
							        <option value="Bouaké">Bouaké</option>
							        <option value="Bouna">Bouna</option>
							        <option value="Boundiali">Boundiali</option>
							        <option value="Brobo">Brobo</option>
							        <option value="Buyo">Buyo</option>
							        <option value="Cocody">Cocody</option>
							        <option value="Dabakala">Dabakala</option>
							        <option value="Dabou">Dabou</option>
							        <option value="Daloa">Daloa</option>
							        <option value="Danané">Danané</option>
							        <option value="Daoukro">Daoukro</option>
							        <option value="Diabo">Diabo</option>
							        <option value="Dianra">Dianra</option>
							        <option value="Diawala">Diawala</option>
							        <option value="Didiévi">Didiévi</option>
							        <option value="Diégonéfla">Diégonéfla</option>
							        <option value="Dikodougou">Dikodougou</option>
							        <option value="Dimbokro">Dimbokro</option>
							        <option value="Dioulatiédougou">Dioulatiédougou</option>
							        <option value="Divo">Divo</option>
							        <option value="Djebonoua">Djebonoua</option>
							        <option value="Djèkanou">Djèkanou</option>
							        <option value="Djibrosso">Djibrosso</option>
							        <option value="Doropo">Doropo</option>
							        <option value="Dualla">Dualla</option>
							        <option value="Duékoué">Duékoué</option>
							        <option value="Ettrokro">Ettrokro</option>
							        <option value="Facobly">Facobly</option>
							        <option value="Ferkessédougou">Ferkessédougou</option>
							        <option value="Foumbolo">Foumbolo</option>
							        <option value="Fresco">Fresco</option>
							        <option value="Fronan">Fronan</option>
							        <option value="Gagnoa">Gagnoa</option>
							        <option value="Gbeleban">Gbeleban</option>
							        <option value="Gboguhé">Gboguhé</option>
							        <option value="Gbon">Gbon</option>
							        <option value="Gbonné">Gbonné</option>
							        <option value="Gohitafla">Gohitafla</option>
							        <option value="Goulia">Goulia</option>
							        <option value="Grabo">Grabo</option>
							        <option value="Grand-Bassam">Grand-Bassam</option>
							        <option value="Grand-Béréby">Grand-Béréby</option>
							        <option value="Grand-Lahou">Grand-Lahou</option>
							        <option value="Grand-Zattry">Grand-Zattry</option>
							        <option value="Guéyo">Guéyo</option>
							        <option value="Guibéroua">Guibéroua</option>
							        <option value="Guiembé">Guiembé</option>
							        <option value="Guiglo">Guiglo</option>
							        <option value="Guintéguéla">Guintéguéla</option>
							        <option value="Guitry">Guitry</option>
							        <option value="Hiré">Hiré</option>
							        <option value="Issia">Issia</option>
							        <option value="Jacqueville">Jacqueville</option>
							        <option value="Kanakono">Kanakono</option>
							        <option value="Kani">Kani</option>
							        <option value="Kaniasso">Kaniasso</option>
							        <option value="Karakoro">Karakoro</option>
							        <option value="Kasséré">Kasséré</option>
							        <option value="Katiola">Katiola</option>
							        <option value="Kokoumbo">Kokoumbo</option>
							        <option value="Kolia">Kolia</option>
							        <option value="Komborodougou">Komborodougou</option>
							        <option value="Kong">Kong</option>
							        <option value="Kongasso">Kongasso</option>
							        <option value="Koonan">Koonan</option>
							        <option value="Korhogo">Korhogo</option>
							        <option value="Koro">Koro</option>
							        <option value="Kouassi-Datékro">Kouassi-Datékro</option>
							        <option value="Kouassi-Kouassikro">Kouassi-Kouassikro</option>
							        <option value="Kouibly">Kouibly</option>
							        <option value="Koumassi">Koumassi</option>
							        <option value="Koumbala">Koumbala</option>
							        <option value="Koun-Fao">Koun-Fao</option>
							        <option value="Kounahiri">Kounahiri</option>
							        <option value="Kouto">Kouto</option>
							        <option value="Lakota">Lakota</option>
							        <option value="Logoualé">Logoualé</option>
							        <option value="M'bahiakro">M'bahiakro</option>
							        <option value="M'batto">M'batto</option>
							        <option value="M'bengué">M'bengué</option>
							        <option value="Madinani">Madinani</option>
							        <option value="Maféré">Maféré</option>
							        <option value="Man">Man</option>
							        <option value="Mankono">Mankono</option>
							        <option value="Marcory">Marcory</option>
							        <option value="Massala">Massala</option>
							        <option value="Mayo">Mayo</option>
							        <option value="Méagui">Méagui</option>
							        <option value="Minignan">Minignan</option>
							        <option value="Morondo">Morondo</option>
							        <option value="N'douci">N'douci</option>
							        <option value="Napié">Napié</option>
							        <option value="Nassian">Nassian</option>
							        <option value="Niablé">Niablé</option>
							        <option value="Niakaramandougou">Niakaramandougou</option>
							        <option value="Niéllé">Niéllé</option>
							        <option value="Niofoin">Niofoin</option>
							        <option value="Odienné">Odienné</option>
							        <option value="Ouangolodougou">Ouangolodougou</option>
							        <option value="Ouaninou">Ouaninou</option>
							        <option value="Ouellé">Ouellé</option>
							        <option value="Oumé">Oumé</option>
							        <option value="Ouragahio">Ouragahio</option>
							        <option value="Plateau">Plateau</option>
							        <option value="Port-bouët">Port-bouët</option>
							        <option value="Prikro">Prikro</option>
							        <option value="Rubino">Rubino</option>
							        <option value="Saïoua">Saïoua</option>
							        <option value="Sakassou">Sakassou</option>
							        <option value="Samatiguila">Samatiguila</option>
							        <option value="San Pedro">San Pedro</option>
							        <option value="Sandégué">Sandégué</option>
							        <option value="Sangouiné">Sangouiné</option>
							        <option value="Sarhala">Sarhala</option>
							        <option value="Sassandra">Sassandra</option>
							        <option value="Satama-Sokoro">Satama-Sokoro</option>
							        <option value="Satama-Sokoura">Satama-Sokoura</option>
							        <option value="Séguéla">Séguéla</option>
							        <option value="Séguelon">Séguelon</option>
							        <option value="Seydougou">Seydougou</option>
							        <option value="Sifié">Sifié</option>
							        <option value="Sikensi">Sikensi</option>
							        <option value="Sinématiali">Sinématiali</option>
							        <option value="Sinfra">Sinfra</option>
							        <option value="Sipilou">Sipilou</option>
							        <option value="Sirasso">Sirasso</option>
							        <option value="Songon">Songon</option>
							        <option value="Soubré">Soubré</option>
							        <option value="Taabo">Taabo</option>
							        <option value="Tabou">Tabou</option>
							        <option value="Tafiré">Tafiré</option>
							        <option value="Taï">Taï</option>
							        <option value="Tanda">Tanda</option>
							        <option value="Téhini">Téhini</option>
							        <option value="Tengréla">Tengréla</option>
							        <option value="Tiapoum">Tiapoum</option>
							        <option value="Tiassalé">Tiassalé</option>
							        <option value="Tie-n'diekro">Tie-n'diekro</option>
							        <option value="Tiébissou">Tiébissou</option>
							        <option value="Tiémé">Tiémé</option>
							        <option value="Tiémélékro">Tiémélékro</option>
							        <option value="Tiéningboué">Tiéningboué</option>
							        <option value="Tienko">Tienko</option>
							        <option value="Tioroniaradougou">Tioroniaradougou</option>
							        <option value="Tortiya">Tortiya</option>
							        <option value="Touba">Touba</option>
							        <option value="Toulépleu">Toulépleu</option>
							        <option value="Toumodi">Toumodi</option>
							        <option value="Transua">Transua</option>
							        <option value="Treichville">Treichville</option>
							        <option value="Vavoua">Vavoua</option>
							        <option value="Worofla">Worofla</option>
							        <option value="Yakassé-Attobrou">Yakassé-Attobrou</option>
							        <option value="Yamoussoukro">Yamoussoukro</option>
							        <option value="Yopougon">Yopougon</option>
							        <option value="Zikisso">Zikisso</option>
							        <option value="Zouan-Hounien">Zouan-Hounien</option>
							        <option value="Zoukougbeu">Zoukougbeu</option>
							        <option value="Zuénoula">Zuénoula</option>
							      </select>

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->


                        <!--div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Village du père
                                </label>
                                <input class="form-control" placeholder="Ville de résidence du père" type="text" name="father_town" id="user_url" value="{{Auth::user()->father_town}}">

                            </div> <!-- close .form-group ->
                        </div--> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Nombre d'enfants du père
                                </label>
                                <input class="form-control" placeholder="Nombre d'enfant du père" type="number" name="father_children_number" id="user_url" value="{{Auth::user()->father_children_number}}">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <!--End Father-->

                        <!--Mother-->



                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group header_form">
                            	<hr>
                                <h1 for="" style="text-align: center;">
                                    Profil de la mère
                                </h1>
                                <hr>
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->


                            <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">
                                    Nom de la mère
                                </label>
                                <input class="form-control" placeholder="Nom de la mère" type="text" name="mother_traditional_first_name" id="user_url" value="{{Auth::user()->mother_traditional_first_name}}">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">
                                    Prénoms de la mère
                                </label>
                                <input class="form-control" placeholder="Prénoms de la mère" type="text" name="mother_last_name" id="user_url" value="{{Auth::user()->mother_last_name}}">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                        {{--
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">
                                    Autre noms de la mère
                                </label>
                                <input class="form-control" placeholder="Autre noms de la mère" type="text" name="mother_other_name" id="user_url" value="{{Auth::user()->mother_other_name}}">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                        --}}
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">
                                    Nationalité de la mère
                                </label>
                                <!--input class="form-control" placeholder="Pays de résidence de la mère" type="text" name="mother_birth_country" id="country_5" value="{{Auth::user()->mother_birth_country}}"-->

                                <select id="nationalite" class="form-control" placeholder="Etat de naissance" name="mother_birth_country">
                                    @if(Auth::user()->mother_birth_country !== null)
                                    <option value="{{Auth::user()->mother_birth_country}}">{{Auth::user()->mother_birth_country}}</option>
                                    @endif
							        <option value="AFG">Afghane (Afghanistan)</option>
							        <option value="ALB">Albanaise (Albanie)</option>
							        <option value="DZA">Algérienne (Algérie)</option>
							        <option value="DEU">Allemande (Allemagne)</option>
							        <option value="USA">Americaine (États-Unis)</option>
							        <option value="AND">Andorrane (Andorre)</option>
							        <option value="AGO">Angolaise (Angola)</option>
							        <option value="ATG">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
							        <option value="ARG">Argentine (Argentine)</option>
							        <option value="ARM">Armenienne (Arménie)</option>
							        <option value="AUS">Australienne (Australie)</option>
							        <option value="AUT">Autrichienne (Autriche)</option>
							        <option value="AZE">Azerbaïdjanaise (Azerbaïdjan)</option>
							        <option value="BHS">Bahamienne (Bahamas)</option>
							        <option value="BHR">Bahreinienne (Bahreïn)</option>
							        <option value="BGD">Bangladaise (Bangladesh)</option>
							        <option value="BRB">Barbadienne (Barbade)</option>
							        <option value="BEL">Belge (Belgique)</option>
							        <option value="BLZ">Belizienne (Belize)</option>
							        <option value="BEN">Béninoise (Bénin)</option>
							        <option value="BTN">Bhoutanaise (Bhoutan)</option>
							        <option value="BLR">Biélorusse (Biélorussie)</option>
							        <option value="MMR">Birmane (Birmanie)</option>
							        <option value="GNB">Bissau-Guinéenne (Guinée-Bissau)</option>
							        <option value="BOL">Bolivienne (Bolivie)</option>
							        <option value="BIH">Bosnienne (Bosnie-Herzégovine)</option>
							        <option value="BWA">Botswanaise (Botswana)</option>
							        <option value="BRA">Brésilienne (Brésil)</option>
							        <option value="GBR">Britannique (Royaume-Uni)</option>
							        <option value="BRN">Brunéienne (Brunéi)</option>
							        <option value="BGR">Bulgare (Bulgarie)</option>
							        <option value="BFA">Burkinabée (Burkina)</option>
							        <option value="BDI">Burundaise (Burundi)</option>
							        <option value="KHM">Cambodgienne (Cambodge)</option>
							        <option value="CMR">Camerounaise (Cameroun)</option>
							        <option value="CAN">Canadienne (Canada)</option>
							        <option value="CPV">Cap-verdienne (Cap-Vert)</option>
							        <option value="CAF">Centrafricaine (Centrafrique)</option>
							        <option value="CHL">Chilienne (Chili)</option>
							        <option value="CHN">Chinoise (Chine)</option>
							        <option value="CYP">Chypriote (Chypre)</option>
							        <option value="COL">Colombienne (Colombie)</option>
							        <option value="COM">Comorienne (Comores)</option>
							        <option value="COG">Congolaise (Congo-Brazzaville)</option>
							        <option value="COD">Congolaise (Congo-Kinshasa)</option>
							        <option value="COK">Cookienne (Îles Cook)</option>
							        <option value="CRI">Costaricaine (Costa Rica)</option>
							        <option value="HRV">Croate (Croatie)</option>
							        <option value="CUB">Cubaine (Cuba)</option>
							        <option value="DNK">Danoise (Danemark)</option>
							        <option value="DJI">Djiboutienne (Djibouti)</option>
							        <option value="DOM">Dominicaine (République dominicaine)</option>
							        <option value="DMA">Dominiquaise (Dominique)</option>
							        <option value="EGY">Égyptienne (Égypte)</option>
							        <option value="ARE">Émirienne (Émirats arabes unis)</option>
							        <option value="GNQ">Équato-guineenne (Guinée équatoriale)</option>
							        <option value="ECU">Équatorienne (Équateur)</option>
							        <option value="ERI">Érythréenne (Érythrée)</option>
							        <option value="ESP">Espagnole (Espagne)</option>
							        <option value="TLS">Est-timoraise (Timor-Leste)</option>
							        <option value="EST">Estonienne (Estonie)</option>
							        <option value="ETH">Éthiopienne (Éthiopie)</option>
							        <option value="FJI">Fidjienne (Fidji)</option>
							        <option value="FIN">Finlandaise (Finlande)</option>
							        <option value="FRA">Française (France)</option>
							        <option value="GAB">Gabonaise (Gabon)</option>
							        <option value="GMB">Gambienne (Gambie)</option>
							        <option value="GEO">Georgienne (Géorgie)</option>
							        <option value="GHA">Ghanéenne (Ghana)</option>
							        <option value="GRD">Grenadienne (Grenade)</option>
							        <option value="GTM">Guatémaltèque (Guatemala)</option>
							        <option value="GIN">Guinéenne (Guinée)</option>
							        <option value="GUY">Guyanienne (Guyana)</option>
							        <option value="HTI">Haïtienne (Haïti)</option>
							        <option value="GRC">Hellénique (Grèce)</option>
							        <option value="HND">Hondurienne (Honduras)</option>
							        <option value="HUN">Hongroise (Hongrie)</option>
							        <option value="IND">Indienne (Inde)</option>
							        <option value="IDN">Indonésienne (Indonésie)</option>
							        <option value="IRQ">Irakienne (Iraq)</option>
							        <option value="IRN">Iranienne (Iran)</option>
							        <option value="IRL">Irlandaise (Irlande)</option>
							        <option value="ISL">Islandaise (Islande)</option>
							        <option value="ISR">Israélienne (Israël)</option>
							        <option value="ITA">Italienne (Italie)</option>
							        <option value="CIV">Ivoirienne (Côte d'Ivoire)</option>
							        <option value="JAM">Jamaïcaine (Jamaïque)</option>
							        <option value="JPN">Japonaise (Japon)</option>
							        <option value="JOR">Jordanienne (Jordanie)</option>
							        <option value="KAZ">Kazakhstanaise (Kazakhstan)</option>
							        <option value="KEN">Kenyane (Kenya)</option>
							        <option value="KGZ">Kirghize (Kirghizistan)</option>
							        <option value="KIR">Kiribatienne (Kiribati)</option>
							        <option value="KNA">Kittitienne et Névicienne (Saint-Christophe-et-Niévès)</option>
							        <option value="KWT">Koweïtienne (Koweït)</option>
							        <option value="LAO">Laotienne (Laos)</option>
							        <option value="LSO">Lesothane (Lesotho)</option>
							        <option value="LVA">Lettone (Lettonie)</option>
							        <option value="LBN">Libanaise (Liban)</option>
							        <option value="LBR">Libérienne (Libéria)</option>
							        <option value="LBY">Libyenne (Libye)</option>
							        <option value="LIE">Liechtensteinoise (Liechtenstein)</option>
							        <option value="LTU">Lituanienne (Lituanie)</option>
							        <option value="LUX">Luxembourgeoise (Luxembourg)</option>
							        <option value="MKD">Macédonienne (Macédoine)</option>
							        <option value="MYS">Malaisienne (Malaisie)</option>
							        <option value="MWI">Malawienne (Malawi)</option>
							        <option value="MDV">Maldivienne (Maldives)</option>
							        <option value="MDG">Malgache (Madagascar)</option>
							        <option value="MLI">Maliennes (Mali)</option>
							        <option value="MLT">Maltaise (Malte)</option>
							        <option value="MAR">Marocaine (Maroc)</option>
							        <option value="MHL">Marshallaise (Îles Marshall)</option>
							        <option value="MUS">Mauricienne (Maurice)</option>
							        <option value="MRT">Mauritanienne (Mauritanie)</option>
							        <option value="MEX">Mexicaine (Mexique)</option>
							        <option value="FSM">Micronésienne (Micronésie)</option>
							        <option value="MDA">Moldave (Moldovie)</option>
							        <option value="MCO">Monegasque (Monaco)</option>
							        <option value="MNG">Mongole (Mongolie)</option>
							        <option value="MNE">Monténégrine (Monténégro)</option>
							        <option value="MOZ">Mozambicaine (Mozambique)</option>
							        <option value="NAM">Namibienne (Namibie)</option>
							        <option value="NRU">Nauruane (Nauru)</option>
							        <option value="NLD">Néerlandaise (Pays-Bas)</option>
							        <option value="NZL">Néo-Zélandaise (Nouvelle-Zélande)</option>
							        <option value="NPL">Népalaise (Népal)</option>
							        <option value="NIC">Nicaraguayenne (Nicaragua)</option>
							        <option value="NGA">Nigériane (Nigéria)</option>
							        <option value="NER">Nigérienne (Niger)</option>
							        <option value="NIU">Niuéenne (Niue)</option>
							        <option value="PRK">Nord-coréenne (Corée du Nord)</option>
							        <option value="NOR">Norvégienne (Norvège)</option>
							        <option value="OMN">Omanaise (Oman)</option>
							        <option value="UGA">Ougandaise (Ouganda)</option>
							        <option value="UZB">Ouzbéke (Ouzbékistan)</option>
							        <option value="PAK">Pakistanaise (Pakistan)</option>
							        <option value="PLW">Palaosienne (Palaos)</option>
							        <option value="PSE">Palestinienne (Palestine)</option>
							        <option value="PAN">Panaméenne (Panama)</option>
							        <option value="PNG">Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
							        <option value="PRY">Paraguayenne (Paraguay)</option>
							        <option value="PER">Péruvienne (Pérou)</option>
							        <option value="PHL">Philippine (Philippines)</option>
							        <option value="POL">Polonaise (Pologne)</option>
							        <option value="PRT">Portugaise (Portugal)</option>
							        <option value="QAT">Qatarienne (Qatar)</option>
							        <option value="ROU">Roumaine (Roumanie)</option>
							        <option value="RUS">Russe (Russie)</option>
							        <option value="RWA">Rwandaise (Rwanda)</option>
							        <option value="LCA">Saint-Lucienne (Sainte-Lucie)</option>
							        <option value="SMR">Saint-Marinaise (Saint-Marin)</option>
							        <option value="VCT">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
							        <option value="SLB">Salomonaise (Îles Salomon)</option>
							        <option value="SLV">Salvadorienne (Salvador)</option>
							        <option value="WSM">Samoane (Samoa)</option>
							        <option value="STP">Santoméenne (Sao Tomé-et-Principe)</option>
							        <option value="SAU">Saoudienne (Arabie saoudite)</option>
							        <option value="SEN">Sénégalaise (Sénégal)</option>
							        <option value="SRB">Serbe (Serbie)</option>
							        <option value="SYC">Seychelloise (Seychelles)</option>
							        <option value="SLE">Sierra-Léonaise (Sierra Leone)</option>
							        <option value="SGP">Singapourienne (Singapour)</option>
							        <option value="SVK">Slovaque (Slovaquie)</option>
							        <option value="SVN">Slovène (Slovénie)</option>
							        <option value="SOM">Somalienne (Somalie)</option>
							        <option value="SDN">Soudanaise (Soudan)</option>
							        <option value="LKA">Sri-Lankaise (Sri Lanka)</option>
							        <option value="ZAF">Sud-Africaine (Afrique du Sud)</option>
							        <option value="KOR">Sud-Coréenne (Corée du Sud)</option>
							        <option value="SSD">Sud-Soudanaise (Soudan du Sud)</option>
							        <option value="SWE">Suédoise (Suède)</option>
							        <option value="CHE">Suisse (Suisse)</option>
							        <option value="SUR">Surinamaise (Suriname)</option>
							        <option value="SWZ">Swazie (Swaziland)</option>
							        <option value="SYR">Syrienne (Syrie)</option>
							        <option value="TJK">Tadjike (Tadjikistan)</option>
							        <option value="TZA">Tanzanienne (Tanzanie)</option>
							        <option value="TCD">Tchadienne (Tchad)</option>
							        <option value="CZE">Tchèque (Tchéquie)</option>
							        <option value="THA">Thaïlandaise (Thaïlande)</option>
							        <option value="TGO">Togolaise (Togo)</option>
							        <option value="TON">Tonguienne (Tonga)</option>
							        <option value="TTO">Trinidadienne (Trinité-et-Tobago)</option>
							        <option value="TUN">Tunisienne (Tunisie)</option>
							        <option value="TKM">Turkmène (Turkménistan)</option>
							        <option value="TUR">Turque (Turquie)</option>
							        <option value="TUV">Tuvaluane (Tuvalu)</option>
							        <option value="UKR">Ukrainienne (Ukraine)</option>
							        <option value="URY">Uruguayenne (Uruguay)</option>
							        <option value="VUT">Vanuatuane (Vanuatu)</option>
							        <option value="VAT">Vaticane (Vatican)</option>
							        <option value="VEN">Vénézuélienne (Venezuela)</option>
							        <option value="VNM">Vietnamienne (Viêt Nam)</option>
							        <option value="YEM">Yéménite (Yémen)</option>
							        <option value="ZMB">Zambienne (Zambie)</option>
							        <option value="ZWE">Zimbabwéenne (Zimbabwe)</option>
								</select>



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">
                                    Village de la mère
                                </label>
                                <input class="form-control" placeholder="Region de la mère" type="text" name="mother_town" id="region" value="{{Auth::user()->mother_town}}">

                                <select class="form-control rgsel" id="region_1" placeholder="Region de la mère" value="" name="mother_town">
                                    @if(Auth::user()->mother_town !== null)
                                    <option value="{{Auth::user()->mother_town}}">{{Auth::user()->mother_town}}</option>
                                    @endif
							        <option value="Abengourou">Abengourou</option>
							        <option value="Abobo">Abobo</option>
							        <option value="Aboisso">Aboisso</option>
							        <option value="Adiaké">Adiaké</option>
							        <option value="Adjamé">Adjamé</option>
							        <option value="Adzopé">Adzopé</option>
							        <option value="Afféry">Afféry</option>
							        <option value="Agboville">Agboville</option>
							        <option value="Agnibilékrou">Agnibilékrou</option>
							        <option value="Agou">Agou</option>
							        <option value="Akoupé">Akoupé</option>
							        <option value="Alépé">Alépé</option>
							        <option value="Anoumaba">Anoumaba</option>
							        <option value="Anyama">Anyama</option>
							        <option value="Arrah">Arrah</option>
							        <option value="Assinie">Assinie</option>
							        <option value="Assuéffry">Assuéffry</option>
							        <option value="Attécoubé">Attécoubé</option>
							        <option value="Attiegouakro">Attiegouakro</option>
							        <option value="Ayamé">Ayamé</option>
							        <option value="Azaguié">Azaguié</option>
							        <option value="Bako">Bako</option>
							        <option value="Bangolo">Bangolo</option>
							        <option value="Bassawa">Bassawa</option>
							        <option value="Bédiala">Bédiala</option>
							        <option value="Béoumi">Béoumi</option>
							        <option value="Béttié">Béttié</option>
							        <option value="Biankouma">Biankouma</option>
							        <option value="Bin-Houyé">Bin-Houyé</option>
							        <option value="Bingerville">Bingerville</option>
							        <option value="Bloléquin">Bloléquin</option>
							        <option value="Bocanda">Bocanda</option>
							        <option value="Bodokro">Bodokro</option>
							        <option value="Bondoukou">Bondoukou</option>
							        <option value="Bongouanou">Bongouanou</option>
							        <option value="Boniérédougou">Boniérédougou</option>
							        <option value="Bonon">Bonon</option>
							        <option value="Bonoua">Bonoua</option>
							        <option value="Booko">Booko</option>
							        <option value="Borotou">Borotou</option>
							        <option value="Botro">Botro</option>
							        <option value="Bouaflé">Bouaflé</option>
							        <option value="Bouaké">Bouaké</option>
							        <option value="Bouna">Bouna</option>
							        <option value="Boundiali">Boundiali</option>
							        <option value="Brobo">Brobo</option>
							        <option value="Buyo">Buyo</option>
							        <option value="Cocody">Cocody</option>
							        <option value="Dabakala">Dabakala</option>
							        <option value="Dabou">Dabou</option>
							        <option value="Daloa">Daloa</option>
							        <option value="Danané">Danané</option>
							        <option value="Daoukro">Daoukro</option>
							        <option value="Diabo">Diabo</option>
							        <option value="Dianra">Dianra</option>
							        <option value="Diawala">Diawala</option>
							        <option value="Didiévi">Didiévi</option>
							        <option value="Diégonéfla">Diégonéfla</option>
							        <option value="Dikodougou">Dikodougou</option>
							        <option value="Dimbokro">Dimbokro</option>
							        <option value="Dioulatiédougou">Dioulatiédougou</option>
							        <option value="Divo">Divo</option>
							        <option value="Djebonoua">Djebonoua</option>
							        <option value="Djèkanou">Djèkanou</option>
							        <option value="Djibrosso">Djibrosso</option>
							        <option value="Doropo">Doropo</option>
							        <option value="Dualla">Dualla</option>
							        <option value="Duékoué">Duékoué</option>
							        <option value="Ettrokro">Ettrokro</option>
							        <option value="Facobly">Facobly</option>
							        <option value="Ferkessédougou">Ferkessédougou</option>
							        <option value="Foumbolo">Foumbolo</option>
							        <option value="Fresco">Fresco</option>
							        <option value="Fronan">Fronan</option>
							        <option value="Gagnoa">Gagnoa</option>
							        <option value="Gbeleban">Gbeleban</option>
							        <option value="Gboguhé">Gboguhé</option>
							        <option value="Gbon">Gbon</option>
							        <option value="Gbonné">Gbonné</option>
							        <option value="Gohitafla">Gohitafla</option>
							        <option value="Goulia">Goulia</option>
							        <option value="Grabo">Grabo</option>
							        <option value="Grand-Bassam">Grand-Bassam</option>
							        <option value="Grand-Béréby">Grand-Béréby</option>
							        <option value="Grand-Lahou">Grand-Lahou</option>
							        <option value="Grand-Zattry">Grand-Zattry</option>
							        <option value="Guéyo">Guéyo</option>
							        <option value="Guibéroua">Guibéroua</option>
							        <option value="Guiembé">Guiembé</option>
							        <option value="Guiglo">Guiglo</option>
							        <option value="Guintéguéla">Guintéguéla</option>
							        <option value="Guitry">Guitry</option>
							        <option value="Hiré">Hiré</option>
							        <option value="Issia">Issia</option>
							        <option value="Jacqueville">Jacqueville</option>
							        <option value="Kanakono">Kanakono</option>
							        <option value="Kani">Kani</option>
							        <option value="Kaniasso">Kaniasso</option>
							        <option value="Karakoro">Karakoro</option>
							        <option value="Kasséré">Kasséré</option>
							        <option value="Katiola">Katiola</option>
							        <option value="Kokoumbo">Kokoumbo</option>
							        <option value="Kolia">Kolia</option>
							        <option value="Komborodougou">Komborodougou</option>
							        <option value="Kong">Kong</option>
							        <option value="Kongasso">Kongasso</option>
							        <option value="Koonan">Koonan</option>
							        <option value="Korhogo">Korhogo</option>
							        <option value="Koro">Koro</option>
							        <option value="Kouassi-Datékro">Kouassi-Datékro</option>
							        <option value="Kouassi-Kouassikro">Kouassi-Kouassikro</option>
							        <option value="Kouibly">Kouibly</option>
							        <option value="Koumassi">Koumassi</option>
							        <option value="Koumbala">Koumbala</option>
							        <option value="Koun-Fao">Koun-Fao</option>
							        <option value="Kounahiri">Kounahiri</option>
							        <option value="Kouto">Kouto</option>
							        <option value="Lakota">Lakota</option>
							        <option value="Logoualé">Logoualé</option>
							        <option value="M'bahiakro">M'bahiakro</option>
							        <option value="M'batto">M'batto</option>
							        <option value="M'bengué">M'bengué</option>
							        <option value="Madinani">Madinani</option>
							        <option value="Maféré">Maféré</option>
							        <option value="Man">Man</option>
							        <option value="Mankono">Mankono</option>
							        <option value="Marcory">Marcory</option>
							        <option value="Massala">Massala</option>
							        <option value="Mayo">Mayo</option>
							        <option value="Méagui">Méagui</option>
							        <option value="Minignan">Minignan</option>
							        <option value="Morondo">Morondo</option>
							        <option value="N'douci">N'douci</option>
							        <option value="Napié">Napié</option>
							        <option value="Nassian">Nassian</option>
							        <option value="Niablé">Niablé</option>
							        <option value="Niakaramandougou">Niakaramandougou</option>
							        <option value="Niéllé">Niéllé</option>
							        <option value="Niofoin">Niofoin</option>
							        <option value="Odienné">Odienné</option>
							        <option value="Ouangolodougou">Ouangolodougou</option>
							        <option value="Ouaninou">Ouaninou</option>
							        <option value="Ouellé">Ouellé</option>
							        <option value="Oumé">Oumé</option>
							        <option value="Ouragahio">Ouragahio</option>
							        <option value="Plateau">Plateau</option>
							        <option value="Port-bouët">Port-bouët</option>
							        <option value="Prikro">Prikro</option>
							        <option value="Rubino">Rubino</option>
							        <option value="Saïoua">Saïoua</option>
							        <option value="Sakassou">Sakassou</option>
							        <option value="Samatiguila">Samatiguila</option>
							        <option value="San Pedro">San Pedro</option>
							        <option value="Sandégué">Sandégué</option>
							        <option value="Sangouiné">Sangouiné</option>
							        <option value="Sarhala">Sarhala</option>
							        <option value="Sassandra">Sassandra</option>
							        <option value="Satama-Sokoro">Satama-Sokoro</option>
							        <option value="Satama-Sokoura">Satama-Sokoura</option>
							        <option value="Séguéla">Séguéla</option>
							        <option value="Séguelon">Séguelon</option>
							        <option value="Seydougou">Seydougou</option>
							        <option value="Sifié">Sifié</option>
							        <option value="Sikensi">Sikensi</option>
							        <option value="Sinématiali">Sinématiali</option>
							        <option value="Sinfra">Sinfra</option>
							        <option value="Sipilou">Sipilou</option>
							        <option value="Sirasso">Sirasso</option>
							        <option value="Songon">Songon</option>
							        <option value="Soubré">Soubré</option>
							        <option value="Taabo">Taabo</option>
							        <option value="Tabou">Tabou</option>
							        <option value="Tafiré">Tafiré</option>
							        <option value="Taï">Taï</option>
							        <option value="Tanda">Tanda</option>
							        <option value="Téhini">Téhini</option>
							        <option value="Tengréla">Tengréla</option>
							        <option value="Tiapoum">Tiapoum</option>
							        <option value="Tiassalé">Tiassalé</option>
							        <option value="Tie-n'diekro">Tie-n'diekro</option>
							        <option value="Tiébissou">Tiébissou</option>
							        <option value="Tiémé">Tiémé</option>
							        <option value="Tiémélékro">Tiémélékro</option>
							        <option value="Tiéningboué">Tiéningboué</option>
							        <option value="Tienko">Tienko</option>
							        <option value="Tioroniaradougou">Tioroniaradougou</option>
							        <option value="Tortiya">Tortiya</option>
							        <option value="Touba">Touba</option>
							        <option value="Toulépleu">Toulépleu</option>
							        <option value="Toumodi">Toumodi</option>
							        <option value="Transua">Transua</option>
							        <option value="Treichville">Treichville</option>
							        <option value="Vavoua">Vavoua</option>
							        <option value="Worofla">Worofla</option>
							        <option value="Yakassé-Attobrou">Yakassé-Attobrou</option>
							        <option value="Yamoussoukro">Yamoussoukro</option>
							        <option value="Yopougon">Yopougon</option>
							        <option value="Zikisso">Zikisso</option>
							        <option value="Zouan-Hounien">Zouan-Hounien</option>
							        <option value="Zoukougbeu">Zoukougbeu</option>
							        <option value="Zuénoula">Zuénoula</option>
							      </select>

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->


                        <!--div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Village de la mère
                                </label>
                                <input class="form-control" placeholder="Ville de résidence de la mère" type="text" name="mother_birth_city" id="user_url" value="{{Auth::user()->mother_birth_city}}">

                            </div> <!-- close .form-group ->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Nombre d'enfants de la mère
                                </label>
                                <input class="form-control" placeholder="Nombre d'enfant de la mère" type="number" name="mother_children_number" id="user_url" value="{{Auth::user()->mother_children_number}}">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

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





@endsection
