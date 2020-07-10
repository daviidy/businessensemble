@extends('layouts.admin')
@section('title', 'Administration')
@section('page_title', 'Administration')
@section('link_title', 'Administration')

@section('content')

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
.fUQatb{background: #fff;display:flex;flex:1 1 0%;-webkit-box-pack:center;justify-content:center;-webkit-box-align:center;align-items:center;flex-direction:column;height:180px;margin:10px;border-radius:4px;box-shadow:rgba(0, 0, 0, 0.1) 0px 0px 7px;transition:all 0.4s ease 0s;cursor:pointer;}
.fUQatb:hover{box-shadow:rgba(0, 0, 0, 0.1) 1px 2px 12px;border-bottom:none;transform:translateY(-5px);}
@media (max-width: 480px){
.fUQatb{margin:5px;}
}
.eBqjAL{font-weight:600;margin:0px 16px;font-size: 1rem;color: #000;}
.fjEdZT{width:90px;height:90px;overflow:visible;}
.fjEdZT > svg{height:90px;width:90px;overflow:visible;}
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
}
*,:after,:before{box-sizing:inherit;}
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
    </style>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="styles__CategoryButtons-vgii8s-3 hqqZXZ">
                                <a class="styles__CategoryButton-vgii8s-4 fUQatb" href="/admin/annonces">
                                    <div class="styles__CategoryButton_Icon-vgii8s-6 fjEdZT"><svg width="161" height="147" viewBox="0 0 161 147" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M135.204 119.528H25.7964C23.7044 119.518 22.011 117.804 22 115.686V28.842C22.011 26.724 23.7044 25.01 25.7964 25H135.168C137.26 25.01 138.953 26.724 138.964 28.842V115.686C138.954 117.789 137.283 119.497 135.206 119.528H135.204ZM29.301 35.087H68.3656Z"
                                              fill="#DAE1F2"></path>
                                            <path
                                              d="M22 44.559H139M29.301 35.087H68.3656M135.204 119.528H25.7964C23.7044 119.518 22.011 117.804 22 115.686V28.842C22.011 26.724 23.7044 25.01 25.7964 25H135.168C137.26 25.01 138.953 26.724 138.964 28.842V115.686C138.954 117.789 137.283 119.497 135.206 119.528H135.204Z"
                                              stroke="#455A7F" stroke-width="2.93" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <rect x="23" y="46" width="115" height="73" fill="#455A7F"></rect>
                                            <path d="M105.174 37.438C106.419 37.438 107.429 36.4172 107.429 35.158C107.429 33.8988 106.419 32.878 105.174 32.878C103.929 32.878 102.919 33.8988 102.919 35.158C102.919 36.4172 103.929 37.438 105.174 37.438Z" fill="#455A7F"></path>
                                            <path d="M116.786 37.438C118.031 37.438 119.041 36.4172 119.041 35.158C119.041 33.8988 118.031 32.878 116.786 32.878C115.541 32.878 114.531 33.8988 114.531 35.158C114.531 36.4172 115.541 37.438 116.786 37.438Z" fill="#455A7F"></path>
                                            <path d="M128.389 37.438C129.634 37.438 130.644 36.4172 130.644 35.158C130.644 33.8988 129.634 32.878 128.389 32.878C127.144 32.878 126.134 33.8988 126.134 35.158C126.134 36.4172 127.144 37.438 128.389 37.438Z" fill="#455A7F"></path>
                                            <path d="M88.668 61.766L72.172 98.952M63.405 63.8L46.421 80.312L63.405 63.8ZM46.366 80.33L62.694 97.495L46.366 80.33ZM97.436 98.28L114.409 81.76L97.436 98.28ZM114.475 81.74L98.138 64.577L114.475 81.74Z" stroke="white"
                                              stroke-width="2.93" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></div>
                                    <h4 class="MuiTypography-root Typography-ngwq8z-0 styles__CategoryButton_Title-vgii8s-5 eBqjAL MuiTypography-h4 MuiTypography-alignCenter" m="0,2">Gérer vos annonces</h4>
                                </a>
                                <a class="styles__CategoryButton-vgii8s-4 fUQatb" href="{{url('categories')}}">
                                    <div class="styles__CategoryButton_Icon-vgii8s-6 fjEdZT"><svg width="164" height="144" viewBox="0 0 164 144" fill="none">
                                            <rect x="20" y="82" width="135" height="36" rx="18" fill="#FFCDB2"></rect>
                                            <rect x="41" y="112" width="95" height="6" fill="#ED956E"></rect>
                                            <path d="M9 34L21 44.5L26.5 67.5L32.5 69.5H39.5L46.5 83L32.5 84L24 89.5L5 52L1 37L9 34Z" fill="#E3E3E3"></path>
                                            <path d="M68 31.5L81.5 35.5L76.5 50L90.5 53.5L84.5 68.5L98.5 72L94.5 82H76L57 44.5L45.5 21V13L49.5 7.5L63.5 1.5L59.5 13L73.5 16.5L68 31.5Z" fill="#E3E3E3"></path>
                                            <path d="M68 31.5L81.5 35.5L76.5 50L90.5 53.5L84.5 68.5L98.5 72L94.5 82H76L57 44.5L45.5 21V13L49.5 7.5L63.5 1.5L59.5 13L73.5 16.5L68 31.5Z" fill="#E3E3E3"></path>
                                            <path d="M63.0231 36.6552L85.5 82L78.9398 82.8654L57.633 39.2908L63.0231 36.6552Z" fill="#C7C7C7"></path>
                                            <path d="M141 25.5L141 82.5L121 82.5L120 45L123.5 36L132 28L141 25.5Z" fill="#C7C7C7"></path>
                                            <circle cx="156" cy="113" r="5" fill="#67C7CC"></circle>
                                            <path
                                              d="M12.63 55.58L18.82 67.84M130.09 117.87V117.81H137.09C141.402 117.924 145.603 116.435 148.88 113.63C153.6 109.63 156.08 104.46 155.12 98.28C153.58 88.38 146.51 82.62 136.44 82.67C127.69 82.67 118.95 82.97 110.2 82.99C104.2 82.99 98.2 82.65 92.25 82.67C74.05 82.74 55.85 82.91 37.65 83.04H37.44C33.2054 83.3242 29.2421 85.2253 26.37 88.35C24.5826 90.3218 23.2617 92.6704 22.5053 95.222C21.7488 97.7736 21.5761 100.463 22 103.09C23.08 110.44 30.24 117.25 37.67 117.42C45.87 117.6 54.06 117.8 62.26 117.79C76.04 117.79 89.82 117.96 103.61 117.88C112.46 117.83 121.28 117.87 130.09 117.87ZM63.82 1.5C59.46 3.34 55.44 4.9 51.56 6.74C50.0282 7.37343 48.678 8.37767 47.6307 9.6624C46.5833 10.9471 45.8718 12.472 45.56 14.1C44.8169 17.5369 45.2684 21.1244 46.84 24.27C52.6146 36.1923 58.4146 48.1024 64.24 60C67.707 67.1 71.233 74.173 74.82 81.22C75.0107 81.5815 75.2791 81.8962 75.6059 82.1417C75.9327 82.3873 76.3097 82.5574 76.71 82.64C82.36 82.76 88.02 82.75 93.71 82.7C93.979 82.6933 94.2432 82.6271 94.4836 82.5061C94.7239 82.385 94.9344 82.2122 95.1 82C96.42 78.63 97.63 75.22 98.92 71.71L84.61 68.84L90.61 53.31L76.61 50.16C78.41 44.94 80.14 39.91 81.93 34.69L67.93 31.57C69.86 26.37 71.7 21.4 73.57 16.32L59.57 13.18C61 9.2 62.35 5.5 63.82 1.5ZM140.67 82.93V25.32C139.67 25.48 138.89 25.54 138.18 25.73C133.026 26.9934 128.452 29.9662 125.205 34.1632C121.958 38.3603 120.229 43.5339 120.3 48.84C120.3 57.78 120.53 66.72 120.64 75.66V82.93H140.67V82.93ZM38.51 68.05C32 71.3 26.91 69.64 25.16 63.47C23.6865 58.6306 22.5307 53.7001 21.7 48.71C21.5438 47.0202 21.034 45.3822 20.2036 43.9023C19.3732 42.4225 18.2408 41.1338 16.88 40.12C15.9258 39.3293 15.0176 38.4846 14.16 37.59C9.32998 33 9.32998 33 3.35998 35.89C2.98998 36.07 2.51998 36.17 2.27998 36.47C1.91998 36.92 1.39998 37.58 1.51998 38.01C2.73998 42.78 3.51998 47.78 5.51998 52.2C10.92 63.99 16.87 75.54 22.62 87.2C22.87 87.71 24.04 89.01 24.37 89.55C29.23 85.48 33.72 82.55 39.99 83.05C41.99 83.23 43.99 83.05 46.44 83.05C45.84 81.85 45.58 81.3 45.3 80.76L38.51 68.05V68.05ZM135.2 44.28V66.77V44.28Z"
                                              stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                              d="M28.79 101.24C28.79 101.24 29.45 111.24 44.26 111.81H92.52M137.01 92.34V106.99M144.18 99.67H129.52M155.89 106.53C157.061 106.53 158.205 106.877 159.179 107.528C160.152 108.178 160.911 109.103 161.359 110.185C161.807 111.266 161.925 112.457 161.696 113.605C161.468 114.753 160.904 115.808 160.076 116.636C159.248 117.464 158.193 118.028 157.045 118.256C155.897 118.485 154.706 118.367 153.624 117.919C152.543 117.471 151.618 116.713 150.968 115.739C150.317 114.765 149.97 113.621 149.97 112.45L155.89 106.53Z"
                                              stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></div>
                                    <h4 class="MuiTypography-root Typography-ngwq8z-0 styles__CategoryButton_Title-vgii8s-5 eBqjAL MuiTypography-h4 MuiTypography-alignCenter" m="0,2">Gérer vos catégories d'annonce</h4>
                                </a>
                                <a class="styles__CategoryButton-vgii8s-4 fUQatb" href="{{url('users')}}">
                                    <div class="styles__CategoryButton_Icon-vgii8s-6 fjEdZT"><svg width="162" height="145" viewBox="0 0 162 145" fill="none">
                                            <path d="M21 21L25.5 9L38.5 2H115L127 7L135.5 19V138L106 116H39.5L27 110.5L21 96.5V21Z" fill="#F8F8FF"></path>
                                            <path
                                              d="M137.496 144.317L104.976 118.133H42.912C29.822 118.12 19.213 107.526 19.2 94.453V23.68C19.213 10.607 29.822 0.013 42.912 0H113.784C126.874 0.013 137.483 10.607 137.496 23.68V144.317V144.317ZM42.912 4.074C32.075 4.088 23.293 12.857 23.28 23.679V94.454C23.293 105.276 32.075 114.045 42.912 114.059H106.416L133.416 135.797V23.679C133.403 12.857 124.621 4.088 113.784 4.074H42.912V4.074Z"
                                              fill="#455A7F"></path>
                                            <path
                                              d="M69.216 28.437H47.016C46.6812 28.4041 46.3706 28.2478 46.1447 27.9986C45.9187 27.7493 45.7936 27.4249 45.7936 27.0885C45.7936 26.7521 45.9187 26.4277 46.1447 26.1784C46.3706 25.9292 46.6812 25.7729 47.016 25.74H69.216C69.4028 25.7239 69.5909 25.7468 69.7683 25.8072C69.9458 25.8676 70.1088 25.9643 70.2469 26.091C70.3851 26.2178 70.4954 26.3719 70.5708 26.5435C70.6463 26.7151 70.6852 26.9005 70.6852 27.088C70.6852 27.2755 70.6463 27.4609 70.5708 27.6325C70.4954 27.8041 70.3851 27.9582 70.2469 28.085C70.1088 28.2117 69.9458 28.3084 69.7683 28.3688C69.5909 28.4292 69.4028 28.4521 69.216 28.436V28.437ZM91.416 41.583H47.016C46.6812 41.5501 46.3706 41.3938 46.1447 41.1446C45.9187 40.8953 45.7936 40.5709 45.7936 40.2345C45.7936 39.8981 45.9187 39.5737 46.1447 39.3244C46.3706 39.0752 46.6812 38.9189 47.016 38.886H91.416C91.6028 38.8699 91.7909 38.8928 91.9683 38.9532C92.1458 39.0136 92.3088 39.1103 92.4469 39.237C92.5851 39.3638 92.6954 39.5179 92.7708 39.6895C92.8463 39.8611 92.8852 40.0465 92.8852 40.234C92.8852 40.4215 92.8463 40.6069 92.7708 40.7785C92.6954 40.9501 92.5851 41.1042 92.4469 41.231C92.3088 41.3577 92.1458 41.4544 91.9683 41.5148C91.7909 41.5752 91.6028 41.5981 91.416 41.582V41.583ZM108.072 28.437H85.86C85.5252 28.4041 85.2146 28.2478 84.9887 27.9986C84.7627 27.7493 84.6376 27.4249 84.6376 27.0885C84.6376 26.7521 84.7627 26.4277 84.9887 26.1784C85.2146 25.9292 85.5252 25.7729 85.86 25.74H108.072C108.407 25.7729 108.717 25.9292 108.943 26.1784C109.169 26.4277 109.294 26.7521 109.294 27.0885C109.294 27.4249 109.169 27.7493 108.943 27.9986C108.717 28.2478 108.407 28.4041 108.072 28.437V28.437ZM69.216 96.311H47.016C46.8354 96.318 46.6553 96.2884 46.4864 96.2241C46.3175 96.1598 46.1633 96.0621 46.033 95.9368C45.9028 95.8115 45.7992 95.6612 45.7284 95.4949C45.6577 95.3286 45.6212 95.1497 45.6212 94.969C45.6212 94.7883 45.6577 94.6094 45.7284 94.4431C45.7992 94.2768 45.9028 94.1265 46.033 94.0012C46.1633 93.8759 46.3175 93.7782 46.4864 93.7139C46.6553 93.6496 46.8354 93.62 47.016 93.627H69.216C69.3966 93.62 69.5767 93.6496 69.7456 93.7139C69.9145 93.7782 70.0687 93.8759 70.199 94.0012C70.3292 94.1265 70.4328 94.2768 70.5036 94.4431C70.5743 94.6094 70.6108 94.7883 70.6108 94.969C70.6108 95.1497 70.5743 95.3286 70.5036 95.4949C70.4328 95.6612 70.3292 95.8115 70.199 95.9368C70.0687 96.0621 69.9145 96.1598 69.7456 96.2241C69.5767 96.2884 69.3966 96.318 69.216 96.311V96.311ZM108.072 96.311H85.86C85.6794 96.318 85.4993 96.2884 85.3304 96.2241C85.1615 96.1598 85.0073 96.0621 84.877 95.9368C84.7468 95.8115 84.6432 95.6612 84.5724 95.4949C84.5017 95.3286 84.4652 95.1497 84.4652 94.969C84.4652 94.7883 84.5017 94.6094 84.5724 94.4431C84.6432 94.2768 84.7468 94.1265 84.877 94.0012C85.0073 93.8759 85.1615 93.7782 85.3304 93.7139C85.4993 93.6496 85.6794 93.62 85.86 93.627H108.072C108.253 93.62 108.433 93.6496 108.602 93.7139C108.771 93.7782 108.925 93.8759 109.055 94.0012C109.185 94.1265 109.289 94.2768 109.36 94.4431C109.43 94.6094 109.467 94.7883 109.467 94.969C109.467 95.1497 109.43 95.3286 109.36 95.4949C109.289 95.6612 109.185 95.8115 109.055 95.9368C108.925 96.0621 108.771 96.1598 108.602 96.2241C108.433 96.2884 108.253 96.318 108.072 96.311V96.311ZM108.072 41.583H100.092C99.7572 41.5501 99.4466 41.3938 99.2207 41.1446C98.9947 40.8953 98.8696 40.5709 98.8696 40.2345C98.8696 39.8981 98.9947 39.5737 99.2207 39.3244C99.4466 39.0752 99.7572 38.9189 100.092 38.886H108.072C108.407 38.9189 108.717 39.0752 108.943 39.3244C109.169 39.5737 109.294 39.8981 109.294 40.2345C109.294 40.5709 109.169 40.8953 108.943 41.1446C108.717 41.3938 108.407 41.5501 108.072 41.583V41.583ZM91.416 81.488H47.016C46.7804 81.4878 46.5489 81.4257 46.3449 81.3078C46.1408 81.19 45.9714 81.0205 45.8535 80.8165C45.7356 80.6125 45.6734 80.3811 45.6731 80.1455C45.6728 79.9098 45.7345 79.6783 45.852 79.474C46.092 79.059 46.536 78.804 47.016 78.804H91.416C91.6515 78.8043 91.8828 78.8665 92.0867 78.9843C92.2906 79.1021 92.46 79.2714 92.5778 79.4752C92.6957 79.6791 92.758 79.9103 92.7583 80.1458C92.7587 80.3813 92.6972 80.6128 92.58 80.817C92.34 81.232 91.896 81.487 91.416 81.487V81.488ZM108.072 81.488H100.092C99.9126 81.4929 99.7341 81.4618 99.5669 81.3965C99.3998 81.3313 99.2474 81.2332 99.1188 81.108C98.9902 80.9829 98.8879 80.8332 98.8181 80.6679C98.7483 80.5026 98.7124 80.3249 98.7124 80.1455C98.7124 79.9661 98.7483 79.7884 98.8181 79.6231C98.8879 79.4578 98.9902 79.3081 99.1188 79.183C99.2474 79.0578 99.3998 78.9597 99.5669 78.8945C99.7341 78.8292 99.9126 78.7981 100.092 78.803H108.072C108.308 78.8032 108.539 78.8653 108.743 78.9832C108.947 79.101 109.117 79.2705 109.235 79.4745C109.352 79.6785 109.415 79.9099 109.415 80.1455C109.415 80.3812 109.353 80.6127 109.236 80.817C108.996 81.232 108.552 81.487 108.072 81.487V81.488ZM108.072 54.729H85.86C85.5252 54.6961 85.2146 54.5398 84.9887 54.2906C84.7627 54.0413 84.6376 53.7169 84.6376 53.3805C84.6376 53.0441 84.7627 52.7197 84.9887 52.4704C85.2146 52.2212 85.5252 52.0649 85.86 52.032H108.072C108.407 52.0649 108.717 52.2212 108.943 52.4704C109.169 52.7197 109.294 53.0441 109.294 53.3805C109.294 53.7169 109.169 54.0413 108.943 54.2906C108.717 54.5398 108.407 54.6961 108.072 54.729V54.729ZM108.072 67.862H63.672C63.4914 67.869 63.3113 67.8394 63.1424 67.7751C62.9735 67.7108 62.8193 67.6131 62.689 67.4878C62.5588 67.3625 62.4552 67.2122 62.3844 67.0459C62.3137 66.8796 62.2772 66.7007 62.2772 66.52C62.2772 66.3393 62.3137 66.1604 62.3844 65.9941C62.4552 65.8278 62.5588 65.6775 62.689 65.5522C62.8193 65.4269 62.9735 65.3292 63.1424 65.2649C63.3113 65.2006 63.4914 65.171 63.672 65.178H108.072C108.253 65.171 108.433 65.2006 108.602 65.2649C108.771 65.3292 108.925 65.4269 109.055 65.5522C109.185 65.6775 109.289 65.8278 109.36 65.9941C109.43 66.1604 109.467 66.3393 109.467 66.52C109.467 66.7007 109.43 66.8796 109.36 67.0459C109.289 67.2122 109.185 67.3625 109.055 67.4878C108.925 67.6131 108.771 67.7108 108.602 67.7751C108.433 67.8394 108.253 67.869 108.072 67.862V67.862ZM69.216 54.729H47.016C46.6812 54.6961 46.3706 54.5398 46.1447 54.2906C45.9187 54.0413 45.7936 53.7169 45.7936 53.3805C45.7936 53.0441 45.9187 52.7197 46.1447 52.4704C46.3706 52.2212 46.6812 52.0649 47.016 52.032H69.216C69.4028 52.0159 69.5909 52.0388 69.7683 52.0992C69.9458 52.1596 70.1088 52.2563 70.2469 52.383C70.3851 52.5098 70.4954 52.6639 70.5708 52.8355C70.6463 53.0071 70.6852 53.1925 70.6852 53.38C70.6852 53.5675 70.6463 53.7529 70.5708 53.9245C70.4954 54.0961 70.3851 54.2502 70.2469 54.377C70.1088 54.5037 69.9458 54.6004 69.7683 54.6608C69.5909 54.7212 69.4028 54.7441 69.216 54.728V54.729ZM54.996 67.862H47.016C46.8354 67.869 46.6553 67.8394 46.4864 67.7751C46.3175 67.7108 46.1633 67.6131 46.033 67.4878C45.9028 67.3625 45.7992 67.2122 45.7284 67.0459C45.6577 66.8796 45.6212 66.7007 45.6212 66.52C45.6212 66.3393 45.6577 66.1604 45.7284 65.9941C45.7992 65.8278 45.9028 65.6775 46.033 65.5522C46.1633 65.4269 46.3175 65.3292 46.4864 65.2649C46.6553 65.2006 46.8354 65.171 47.016 65.178H54.996C55.1766 65.171 55.3567 65.2006 55.5256 65.2649C55.6945 65.3292 55.8487 65.4269 55.979 65.5522C56.1092 65.6775 56.2128 65.8278 56.2836 65.9941C56.3543 66.1604 56.3908 66.3393 56.3908 66.52C56.3908 66.7007 56.3543 66.8796 56.2836 67.0459C56.2128 67.2122 56.1092 67.3625 55.979 67.4878C55.8487 67.6131 55.6945 67.7108 55.5256 67.7751C55.3567 67.8394 55.1766 67.869 54.996 67.862V67.862Z"
                                              fill="#21B1B9"></path>
                                        </svg></div>
                                    <h4 class="MuiTypography-root Typography-ngwq8z-0 styles__CategoryButton_Title-vgii8s-5 eBqjAL MuiTypography-h4 MuiTypography-alignCenter" m="0,2">Gérer vos utilisateurs</h4>
                                </a>

                                <a class="styles__CategoryButton-vgii8s-4 fUQatb" href="{{url('pricings')}}">
                                    <div class="styles__CategoryButton_Icon-vgii8s-6 fjEdZT">
                                        <img style="width: 100%;" src="https://image.freepik.com/free-vector/illustration-people-with-money_53876-28543.jpg" alt="">
                                    </div>
                                    <h4 class="MuiTypography-root Typography-ngwq8z-0 styles__CategoryButton_Title-vgii8s-5 eBqjAL MuiTypography-h4 MuiTypography-alignCenter" m="0,2">Gérer vos tarifs</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--
                    <div class="row">

                        <div class="col-xl-8 col-md-12">
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h5>Deals Analytics</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div id="allocation-map" class="chart-shadow" style="height:215px"></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div id="allocation-chart" class="chart-shadow" style="height:215px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card prod-p-card card-red">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Total Profit</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">$1,783</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                                        </div>
                                    </div>
                                    <p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From Previous Month</p>
                                </div>
                            </div>
                            <div class="card prod-p-card card-blue">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Total Orders</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">15,830</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-database text-c-blue f-18"></i>
                                        </div>
                                    </div>
                                    <p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From Previous Month</p>
                                </div>
                            </div>

                        </div>


                        <div class="col-xl-12">
                            <div class="card product-progress-card">
                                <div class="card-block">
                                    <div class="row pp-main">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="pp-cont">
                                                <div class="row align-items-center m-b-20">
                                                    <div class="col-auto">
                                                        <i class="fas fa-cube f-24 text-mute"></i>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h2 class="m-b-0 text-c-blue">2476</h2>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center m-b-15">
                                                    <div class="col-auto">
                                                        <p class="m-b-0">Total Product</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class="m-b-0 text-c-blue"><i class="fas fa-long-arrow-alt-up m-r-10"></i>64%</p>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-blue" style="width:45%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="pp-cont">
                                                <div class="row align-items-center m-b-20">
                                                    <div class="col-auto">
                                                        <i class="fas fa-tag f-24 text-mute"></i>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h2 class="m-b-0 text-c-red">843</h2>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center m-b-15">
                                                    <div class="col-auto">
                                                        <p class="m-b-0">New Orders</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class="m-b-0 text-c-red"><i class="fas fa-long-arrow-alt-down m-r-10"></i>34%</p>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-red" style="width:75%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="pp-cont">
                                                <div class="row align-items-center m-b-20">
                                                    <div class="col-auto">
                                                        <i class="fas fa-random f-24 text-mute"></i>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h2 class="m-b-0 text-c-yellow">63%</h2>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center m-b-15">
                                                    <div class="col-auto">
                                                        <p class="m-b-0">Conversion Rate</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class="m-b-0 text-c-yellow"><i class="fas fa-long-arrow-alt-up m-r-10"></i>64%</p>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-yellow" style="width:65%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <div class="pp-cont">
                                                <div class="row align-items-center m-b-20">
                                                    <div class="col-auto">
                                                        <i class="fas fa-dollar-sign f-24 text-mute"></i>
                                                    </div>
                                                    <div class="col text-right">
                                                        <h2 class="m-b-0 text-c-green">41M</h2>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center m-b-15">
                                                    <div class="col-auto">
                                                        <p class="m-b-0">Conversion Rate</p>
                                                    </div>
                                                    <div class="col text-right">
                                                        <p class="m-b-0 text-c-green"><i class="fas fa-long-arrow-alt-up m-r-10"></i>54%</p>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-green" style="width:35%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-8 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Application Sales</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                            <li><i class="feather icon-trash close-card"></i></li>
                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0  table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Application</th>
                                                    <th>Sales</th>
                                                    <th>Change</th>
                                                    <th>Avg Price</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <h6>Able Pro</h6>
                                                            <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                                        </div>
                                                    </td>
                                                    <td>16,300</td>
                                                    <td>
                                                        <div id="app-sale1" style="height:50px"></div>
                                                    </td>
                                                    <td>$53</td>
                                                    <td class="text-c-blue">$15,652</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <h6>Photoshop</h6>
                                                            <p class="text-muted m-b-0">Design Software</p>
                                                        </div>
                                                    </td>
                                                    <td>26,421</td>
                                                    <td>
                                                        <div id="app-sale2" style="height:50px"></div>
                                                    </td>
                                                    <td>$35</td>
                                                    <td class="text-c-blue">$18,785</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <h6>Flatable</h6>
                                                            <p class="text-muted m-b-0">Admin App</p>
                                                        </div>
                                                    </td>
                                                    <td>10,652</td>
                                                    <td>
                                                        <div id="app-sale4" style="height:50px"></div>
                                                    </td>
                                                    <td>$20</td>
                                                    <td class="text-c-blue">$7,856</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h5>Realtime Profit</h5>
                                </div>
                                <div class="card-block text-center">
                                    <div id="realtime-profit" style="height:315px"></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sales Analytics</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                            <li><i class="feather icon-trash close-card"></i></li>
                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div id="sales-analytics" style="height: 390px;"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    --}}
                </div>
            </div>
        </div>
    </div>


@endsection
