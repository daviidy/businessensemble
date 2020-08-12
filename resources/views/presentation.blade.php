@extends('layouts.menu')
@section('title', 'Présentation')

@section('content')
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
</style>
<style type="text/css">
*{
	font-family: 'Montserrat', sans-serif !important;

}
  /*! CSS Used from: https://businessensemble.fr/wp-content/plugins/designthemes-core-features/shortcodes/css/shortcodes.css?ver=5.2.7 ; media=all */
  @media all {

    /*! @import https://businessensemble.fr/wp-content/plugins/designthemes-core-features/shortcodes/css/shortcodes/buttons.css */
    .dt-sc-button.fully-rounded-border.with-icon span {
      -webkit-transition: all 0.3s linear;
      -moz-transition: all 0.3s linear;
      -o-transition: all 0.3s linear;
      -ms-transition: all 0.3s linear;
      transition: all 0.3s linear;
    }

    .dt-sc-button {
      font-size: 12px;
      text-transform: inherit;
      padding: 8px 15px;
      line-height: normal;
      display: inline-block;
      margin: 10px 0px 0px;
      cursor: pointer;
      outline: none;
      position: relative;
      z-index: 1;
    }

    .dt-sc-button {
      background: rgba(0, 0, 0, 0.05);
      color: #000000;
    }

    .dt-sc-button:hover {
      color: #ffffff;
    }

    .dt-sc-button.large {
      font-size: 17px;
      padding: 20px 40px 18px;
    }

    .dt-sc-button.with-icon.icon-right span {
      margin-left: 10px;
    }

    .dt-sc-button.fully-rounded-border.with-icon.icon-right span {
      margin-left: 5px;
    }

    .dt-sc-button.fully-rounded-border.with-icon.icon-right:hover span {
      transform: translateX(5px);
      -moz-transform: translateX(5px);
      -webkit-transform: translateX(5px);
    }

    .dt-sc-button.fully-rounded-border {
      background: none;
    }

    .dt-sc-button.fully-rounded-border,
    .dt-sc-button.fully-rounded-border:hover {
      border: 2px solid;
      border-radius: 50px;
    }

    .dt-sc-button.fully-rounded-border.large {
      padding: 12px 50px 12px;
    }

    .dt-sc-button.fully-rounded-border:hover {
      color: #ffffff;
    }

    @media only screen and (min-width:768px) and (max-width:991px) {
      .dt-sc-button.large {
        font-size: 15px;
        padding: 20px 34px 18px;
      }
    }

    @media only screen and (max-width: 767px) {
      .dt-sc-button.fully-rounded-border.large {
        padding: 12px 35px 12px;
      }
    }

    @media only screen and (max-width: 319px) {
      .dt-sc-button.large {
        font-size: 14px;
        padding: 20px 34px 18px;
      }
    }

    /*! end @import */
  }


  /*! CSS Used from: https://businessensemble.fr/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.0.3 ; media=all */
  @media all {

    .vc_row:after,
    .vc_row:before {
      content: " ";
      display: table;
    }

    .vc_row:after {
      clear: both;
    }

    .vc_column_container {
      width: 100%;
    }

    .vc_row {
      margin-left: -15px;
      margin-right: -15px;
    }

    .vc_col-sm-12,
    .vc_col-sm-6 {
      position: relative;
      min-height: 1px;
      padding-left: 15px;
      padding-right: 15px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    @media (min-width:768px) {

      .vc_col-sm-12,
      .vc_col-sm-6 {
        float: left;
      }

      .vc_col-sm-12 {
        width: 100%;
      }

      .vc_col-sm-6 {
        width: 50%;
      }
    }

    .vc_clearfix:after,
    .vc_clearfix:before {
      content: " ";
      display: table;
    }

    .vc_clearfix:after {
      clear: both;
    }

    .vc_clearfix:after,
    .vc_clearfix:before {
      content: " ";
      display: table;
    }

    .vc_clearfix:after {
      clear: both;
    }

    .wpb_text_column :last-child,
    .wpb_text_column p:last-child {
      margin-bottom: 0;
    }

    .wpb_content_element {
      margin-bottom: 35px;
    }

    .vc_row.vc_row-no-padding .vc_column-inner {
      padding-left: 0;
      padding-right: 0;
    }

    .vc_row[data-vc-full-width] {
      -webkit-transition: opacity .5s ease;
      -o-transition: opacity .5s ease;
      transition: opacity .5s ease;
      overflow: hidden;
    }

    .vc_row-no-padding .vc_inner {
      margin-left: 0;
      margin-right: 0;
    }

    .vc_row.vc_row-flex {
      box-sizing: border-box;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
    }

    .vc_row.vc_row-flex>.vc_column_container {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
    }

    .vc_row.vc_row-flex>.vc_column_container>.vc_column-inner {
      -webkit-box-flex: 1;
      -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      z-index: 1;
    }

    @media (-ms-high-contrast:active),
    (-ms-high-contrast:none) {
      .vc_row.vc_row-flex>.vc_column_container>.vc_column-inner>* {
        min-height: 1em;
      }
    }

    .vc_row.vc_row-flex::after,
    .vc_row.vc_row-flex::before {
      display: none;
    }

    .vc_row.vc_row-o-equal-height>.vc_column_container {
      -webkit-box-align: stretch;
      -webkit-align-items: stretch;
      -ms-flex-align: stretch;
      align-items: stretch;
    }

    .vc_row.vc_row-o-content-middle>.vc_column_container>.vc_column-inner {
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .vc_column-inner::after,
    .vc_column-inner::before {
      content: " ";
      display: table;
    }

    .vc_column-inner::after {
      clear: both;
    }

    .vc_column_container {
      padding-left: 0;
      padding-right: 0;
    }

    .vc_column_container>.vc_column-inner {
      box-sizing: border-box;
      padding-left: 15px;
      padding-right: 15px;
      width: 100%;
    }

    .vc_col-has-fill>.vc_column-iJWEBXyIfDnIV7nEnX660k_c5Igr {
      padding-top: 35px;
    }

    .vc_row.vc_row-o-equal-height>.vc_column_container {
      -webkit-box-align: stretch;
      -webkit-align-items: stretch;
      -ms-flex-align: stretch;
      align-items: stretch;
    }
  }

  /*! CSS Used from: Embedded */
  .vc_custom_1502889856908 {
    background-image: url(https://businessensemble.fr/wp-content/uploads/2017/05/img2.png?id=10063) !important;
  }

  .vc_custom_1566962977934 {
    margin-bottom: 0px !important;
  }

  .vc_custom_1566963811754 {
    padding-top: 240px !important;
    padding-right: 100px !important;
    padding-bottom: 240px !important;
    background-image: url(https://businessensemble.fr/wp-content/uploads/2019/08/img741r.jpg?id=10904) !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
  }

  /*! CSS Used from: https://businessensemble.fr/wp-content/plugins/Ultimate_VC_Addons/assets/min-css/style.min.css?ver=3.18.0 ; media=all */
  @media all {

    .vc_row,
    .wpb_column,
    .wpb_row {
      position: relative;
    }
  }

  /*! CSS Used from: https://businessensemble.fr/wp-content/themes/businessensemble/css/base.css?ver=1.0 ; media=all */
  @media all {

    div,
    span,
    h1,
    h2,
    h6,
    p,
    a,
    ul,
    li,
    section {
      background: transparent;
      border: 0;
      font-size: 100%;
      margin: 0;
      outline: 0;
      padding: 0;
      vertical-align: baseline;
    }

    section {
      display: block;
    }

    ul {
      list-style: none;
    }

    *,
    *:before,
    *:after {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    a {
      -webkit-transition: all 0.3s linear;
      -moz-transition: all 0.3s linear;
      -o-transition: all 0.3s linear;
      -ms-transition: all 0.3s linear;
      transition: all 0.3s linear;
    }

    h1 {
      font-size: 40px;
    }

    h2 {
      font-size: 34px;
    }

    h6 {
      font-size: 16px;
    }

    h1,
    h2,
    h6 {
      line-height: normal;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .text-hook {
      font-family: 'Lato', sans-serif;
    }

    h1,
    h2,
    h6 {
      font-family: 'Rubik', sans-serif;
    }

    a {
      text-decoration: none;
    }

    p {
      margin-bottom: 10px;
    }

    ul {
      margin-bottom: 20px;
    }

    ul {
      list-style-type: square;
      list-style-position: inside;
    }

    ul li {
      padding-bottom: 10px;
    }

    ul li:last-child {
      padding-bottom: 0;
    }

    .dt-sc-small-separator {
      width: 30px;
      height: 2px;
      display: inline-block;
      clear: both;
      text-align: center;
      margin: 15px 0px;
    }

    .vc_col-has-fill>.vc_column-inner {
      padding-top: 0;
    }

    .vc_row.vc_row-no-padding .wpb_column {
      padding-left: 0px;
      padding-right: 0px;
    }

    h1,
    h2,
    h6,
    a:hover {
      color: #252525;
    }

    ::-webkit-input-placeholder {
      color: #666666;
    }

    ::-moz-placeholder {
      color: #666666;
    }

    :-ms-input-placeholder {
      color: #666666;
    }

    :-moz-placeholder {
      color: #666666;
    }

    @media only screen and (max-width: 319px) {
      h2 {
        font-size: 22px;
      }
    }
  }

  /*! CSS Used from: https://businessensemble.fr/wp-content/themes/businessensemble/css/grid.css?ver=1.0 ; media=all */
  @media all {
    .container {
      width: 1230px;
      margin: 0 auto;
      position: relative;
      clear: both;
    }

    #main {
      float: left;
      clear: both;
      width: 100%;
      margin: 0px;
      padding: 0px;
      display: block;
    }

    #primary {
      width: 930px;
      margin: 0px;
      padding: 0px 0px 0px;
      float: left;
      position: relative;
    }

    #primary.content-full-width {
      width: 100%;
    }

    @media only screen and (min-width:1200px) and (max-width:1280px) {
      .container {
        width: 1080px;
      }

      #primary {
        width: 810px;
      }
    }

    @media only screen and (min-width:992px) and (max-width:1199px) {
      .container {
        width: 900px;
      }

      #primary {
        width: 670px;
      }
    }

    @media only screen and (min-width:768px) and (max-width:991px) {
      .container {
        width: 710px;
      }

      #primary {
        width: 500px;
      }
    }

    @media only screen and (max-width: 767px) {
      #primary {
        width: 100%;
      }

      .wpb_column .wpb_column {
        padding: 0;
      }

      .wpb_column {
        float: left;
        width: 100%;
      }

      .wpb_column {
        margin-bottom: 20px;
      }
    }

    @media only screen and (min-width: 480px) and (max-width: 767px) {
      .container {
        width: 420px;
      }
    }

    @media only screen and (min-width: 320px) and (max-width: 479px) {
      .container {
        width: 290px;
      }
    }

    @media only screen and (max-width: 319px) {
      .container {
        width: 200px;
      }
    }
  }

  /*! CSS Used from: https://businessensemble.fr/wp-content/themes/businessensemble/css/layout.css?ver=1.0 ; media=all */
  @media all {
    .main-title-section-wrapper {
      float: left;
      width: 100%;
      margin: 0px 0px 80px;
      padding: 40px 0px 43px;
      position: relative;
      clear: both;
      background-color: rgba(0, 0, 0, 0.05);
    }

    .main-title-section {
      float: left;
      width: 100%;
      margin: 0px;
      padding: 0px;
      position: relative;
      pointer-events: none;
    }

    .main-title-section h1 {
      font-size: 30px;
      font-weight: 700;
      color: #2b2b2b;
      text-transform: uppercase;
      margin-bottom: 0;
    }

    .breadcrumb {
      clear: both;
      float: left;
      width: 100%;
      margin: 0px;
      padding: 0px;
      font-size: 13px;
      font-weight: 500;
      color: rgba(0, 0, 0, 0.6);
    }

    .breadcrumb a {
      color: #2b2b2b;
    }

    .breadcrumb .fa {
      display: inline-block;
      margin: 0px 4px;
      padding: 0px;
    }

    .breadcrumb span.current {
      color: rgba(0, 0, 0, 0.5);
    }

    .breadcrumb .fa.default {
      display: inline-block;
      height: 14px;
      width: 1px;
      -webkit-transform: rotate(30deg);
      -moz-transform-origin: 0 0;
      -moz-transform: rotate(30deg);
      -ms-transform-origin: 0 0;
      -ms-transform: rotate(30deg);
      transform-origin: 0 0;
      transform: rotate(30deg);
      background: #2b2b2b;
      top: 3px;
      position: relative;
      margin: 0px 5px 0px 10px;
    }

    @media only screen and (max-width: 767px) {
      .main-title-section h1 {
        font-size: 26px;
      }

      .main-title-section h1,
      .breadcrumb,
      .default .main-title-section h1 {
        text-align: center;
      }

      .vc_row-no-padding .wpb_column {
        margin-bottom: 0;
      }
    }

    @media only screen and (max-width: 479px) {
      .main-title-section h1 {
        font-size: 23px;
      }
    }
  }

  /*! CSS Used from: https://businessensemble.fr/wp-content/themes/businessensemble/css/custom-class.css?ver=1.0 ; media=all */
  @media all {
    .space-both-sides.vc_column_container>.vc_column-inner {
      padding: 0px 13%;
    }

    .text-hook {
      letter-spacing: 0.14em;
      font-weight: normal;
      font-size: 20px;
      text-transform: uppercase;
      margin-bottom: 15px;
    }

    @media only screen and (max-width: 767px) {
      .space-both-sides.vc_column_container>.vc_column-inner {
        padding: 0 15px;
      }
    }
  }

  /*! CSS Used from: https://businessensemble.fr/wp-content/themes/businessensemble/css/font-awesome.min.css?ver=4.3.0 ; media=all */
  @media all {
    .fa {
      display: inline-block;
      font: normal normal normal 14px/1 FontAwesome;
      font-size: inherit;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .fa-angle-double-right:before {
      content: "\f101";
    }
  }

  /*! CSS Used from: https://businessensemble.fr/wp-content/themes/businessensemble/css/woocommerce.css?ver=1.0 ; media=all */
  @media all {

    /*! @import https://businessensemble.fr/wp-content/themes/businessensemble/css/woocommerce/woocommerce-default.css */
    ::-webkit-input-placeholder {
      color: inherit;
    }

    :-moz-placeholder {
      color: inherit;
      opacity: 1;
      filter: alpha(opacity=100);
    }

    ::-moz-placeholder {
      color: inherit;
      opacity: 1;
      filter: alpha(opacity=100);
    }

    :-ms-input-placeholder {
      color: inherit;
    }

    /*! end @import */
  }

  /*! CSS Used from: Embedded */
  a {
    color: #1b6dc1;
  }

  .dt-sc-button.fully-rounded-border {
    color: #1b6dc1;
  }

  .dt-sc-small-separator {
    background-color: #1b6dc1;
  }

  .dt-sc-button:hover,
  .dt-sc-button.fully-rounded-border:hover {
    background-color: #1b6dc1;
  }

  .dt-sc-button.fully-rounded-border,
  .dt-sc-button.fully-rounded-border:hover {
    border-color: #1b6dc1;
  }

  .main-title-section h1 {
    font-family: Rubik;
    font-size: 30px;
    font-weight: 400;
    letter-spacing: 0.02em;
    text-transform: none;
    color: #252525;
  }

  h1 {
    font-family: Rubik;
    font-size: 34px;
    font-weight: 700;
    letter-spacing: 0.02em;
    text-transform: none;
    color: #252525;
  }

  h2 {
    font-family: Rubik;
    font-size: 30px;
    font-weight: 700;
    letter-spacing: 0.02em;
    text-transform: none;
    color: #252525;
  }

  h6 {
    font-family: Rubik;
    font-size: 20px;
    font-weight: 700;
    letter-spacing: 0.02em;
    text-transform: none;
    color: #252525;
  }

  /*! CSS Used from: Embedded */
  .spacer-5f32933f0789f {
    height: 10px;
  }

  @media (max-width: 1199px) {
    .spacer-5f32933f0789f {
      height: 10px;
    }
  }

  @media (max-width: 991px) {
    .spacer-5f32933f0789f {
      height: px;
    }
  }

  @media (max-width: 767px) {
    .spacer-5f32933f0789f {
      height: px;
    }
  }

  @media (max-width: 479px) {
    .spacer-5f32933f0789f {
      height: 10px;
    }
  }

  .spacer-5f32933f07dab {
    height: 20px;
  }

  @media (max-width: 1199px) {
    .spacer-5f32933f07dab {
      height: 20px;
    }
  }

  @media (max-width: 991px) {
    .spacer-5f32933f07dab {
      height: px;
    }
  }

  @media (max-width: 767px) {
    .spacer-5f32933f07dab {
      height: px;
    }
  }

  @media (max-width: 479px) {
    .spacer-5f32933f07dab {
      height: 20px;
    }
  }

  @media (max-width: 1199px) {
    .spacer-5f32933f07e59 {
      height: px;
    }
  }

  @media (max-width: 991px) {
    .spacer-5f32933f07e59 {
      height: px;
    }
  }

  @media (max-width: 767px) {
    .spacer-5f32933f07e59 {
      height: 50px;
    }
  }

  @media (max-width: 479px) {
    .spacer-5f32933f07e59 {
      height: 50px;
    }
  }

  .spacer-5f32933f07e7f {
    height: 50px;
  }

  @media (max-width: 1199px) {
    .spacer-5f32933f07e7f {
      height: px;
    }
  }

  @media (max-width: 991px) {
    .spacer-5f32933f07e7f {
      height: px;
    }
  }

  @media (max-width: 767px) {
    .spacer-5f32933f07e7f {
      height: 50px;
    }
  }

  @media (max-width: 479px) {
    .spacer-5f32933f07e7f {
      height: 50px;
    }
  }

  /*! CSS Used fontfaces */
  @font-face {
    font-family: 'Lato';
    font-style: italic;
    font-weight: 100;
    src: local('Lato Hairline Italic'), local('Lato-HairlineItalic'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u-w4BMUTPHjxsIPx-mPCTC79U11vU.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Lato';
    font-style: italic;
    font-weight: 100;
    src: local('Lato Hairline Italic'), local('Lato-HairlineItalic'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u-w4BMUTPHjxsIPx-oPCTC79U1.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Lato';
    font-style: italic;
    font-weight: 300;
    src: local('Lato Light Italic'), local('Lato-LightItalic'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u_w4BMUTPHjxsI9w2_FQfrx9897sxZ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Lato';
    font-style: italic;
    font-weight: 300;
    src: local('Lato Light Italic'), local('Lato-LightItalic'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u_w4BMUTPHjxsI9w2_Gwfrx9897g.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Lato';
    font-style: italic;
    font-weight: 400;
    src: local('Lato Italic'), local('Lato-Italic'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u8w4BMUTPHjxsAUi-sNiXg7eU0.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Lato';
    font-style: italic;
    font-weight: 400;
    src: local('Lato Italic'), local('Lato-Italic'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u8w4BMUTPHjxsAXC-sNiXg7Q.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Lato';
    font-style: italic;
    font-weight: 700;
    src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u_w4BMUTPHjxsI5wq_FQfrx9897sxZ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Lato';
    font-style: italic;
    font-weight: 700;
    src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u_w4BMUTPHjxsI5wq_Gwfrx9897g.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Lato';
    font-style: italic;
    font-weight: 900;
    src: local('Lato Black Italic'), local('Lato-BlackItalic'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u_w4BMUTPHjxsI3wi_FQfrx9897sxZ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Lato';
    font-style: italic;
    font-weight: 900;
    src: local('Lato Black Italic'), local('Lato-BlackItalic'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u_w4BMUTPHjxsI3wi_Gwfrx9897g.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 100;
    src: local('Lato Hairline'), local('Lato-Hairline'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u8w4BMUTPHh30AUi-sNiXg7eU0.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 100;
    src: local('Lato Hairline'), local('Lato-Hairline'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u8w4BMUTPHh30AXC-sNiXg7Q.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 300;
    src: local('Lato Light'), local('Lato-Light'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u9w4BMUTPHh7USSwaPHw3q5d0N7w.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 300;
    src: local('Lato Light'), local('Lato-Light'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u9w4BMUTPHh7USSwiPHw3q5d0.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 400;
    src: local('Lato Regular'), local('Lato-Regular'), url(https://businessensemble.fr/wp-content/fonts/lato/S6uyw4BMUTPHjxAwWCWtFCfQ7A.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 400;
    src: local('Lato Regular'), local('Lato-Regular'), url(https://businessensemble.fr/wp-content/fonts/lato/S6uyw4BMUTPHjx4wWCWtFCc.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 700;
    src: local('Lato Bold'), local('Lato-Bold'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwaPHw3q5d0N7w.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 700;
    src: local('Lato Bold'), local('Lato-Bold'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwiPHw3q5d0.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 900;
    src: local('Lato Black'), local('Lato-Black'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u9w4BMUTPHh50XSwaPHw3q5d0N7w.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Lato';
    font-style: normal;
    font-weight: 900;
    src: local('Lato Black'), local('Lato-Black'), url(https://businessensemble.fr/wp-content/fonts/lato/S6u9w4BMUTPHh50XSwiPHw3q5d0.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 300;
    src: local('Rubik Light Italic'), local('Rubik-LightItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nEldWYwWb-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 300;
    src: local('Rubik Light Italic'), local('Rubik-LightItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nEldWYwWD-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 300;
    src: local('Rubik Light Italic'), local('Rubik-LightItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nEldWYwWz-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 300;
    src: local('Rubik Light Italic'), local('Rubik-LightItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nEldWYwWL-76J8x8s.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 400;
    src: local('Rubik Italic'), local('Rubik-Italic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWEBXyIfDnIV7nEnXq60k_c5IhGzg.woff) format('woff');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 400;
    src: local('Rubik Italic'), local('Rubik-Italic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWEBXyIfDnIV7nEnXy60k_c5IhGzg.woff) format('woff');
    unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 400;
    src: local('Rubik Italic'), local('Rubik-Italic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWEBXyIfDnIV7nEnXC60k_c5IhGzg.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 400;
    src: local('Rubik Italic'), local('Rubik-Italic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWEBXyIfDnIV7nEnX660k_c5Ig.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 500;
    src: local('Rubik Medium Italic'), local('Rubik-MediumItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElY2ZwWb-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 500;
    src: local('Rubik Medium Italic'), local('Rubik-MediumItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElY2ZwWD-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 500;
    src: local('Rubik Medium Italic'), local('Rubik-MediumItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElY2ZwWz-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 500;
    src: local('Rubik Medium Italic'), local('Rubik-MediumItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElY2ZwWL-76J8x8s.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 700;
    src: local('Rubik Bold Italic'), local('Rubik-BoldItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElcWfwWb-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 700;
    src: local('Rubik Bold Italic'), local('Rubik-BoldItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElcWfwWD-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 700;
    src: local('Rubik Bold Italic'), local('Rubik-BoldItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElcWfwWz-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 700;
    src: local('Rubik Bold Italic'), local('Rubik-BoldItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElcWfwWL-76J8x8s.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 900;
    src: local('Rubik Black Italic'), local('Rubik-BlackItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElf2dwWb-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 900;
    src: local('Rubik Black Italic'), local('Rubik-BlackItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElf2dwWD-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 900;
    src: local('Rubik Black Italic'), local('Rubik-BlackItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElf2dwWz-76J8x8utUQ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: italic;
    font-weight: 900;
    src: local('Rubik Black Italic'), local('Rubik-BlackItalic'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWBBXyIfDnIV7nElf2dwWL-76J8x8s.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 300;
    src: local('Rubik Light'), local('Rubik-Light'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7Fqj2mZ8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 300;
    src: local('Rubik Light'), local('Rubik-Light'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7Fqj2mf8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 300;
    src: local('Rubik Light'), local('Rubik-Light'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7Fqj2mT8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 300;
    src: local('Rubik Light'), local('Rubik-Light'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7Fqj2md8Wb07oB-.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 400;
    src: local('Rubik'), local('Rubik-Regular'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWKBXyIfDnIV7nFrXqw023e1Ik.woff) format('woff');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 400;
    src: local('Rubik'), local('Rubik-Regular'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWKBXyIfDnIV7nDrXqw023e1Ik.woff) format('woff');
    unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 400;
    src: local('Rubik'), local('Rubik-Regular'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWKBXyIfDnIV7nPrXqw023e1Ik.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 400;
    src: local('Rubik'), local('Rubik-Regular'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWKBXyIfDnIV7nBrXqw023e.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 500;
    src: local('Rubik Medium'), local('Rubik-Medium'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7EyjmmZ8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 500;
    src: local('Rubik Medium'), local('Rubik-Medium'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7Eyjmmf8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 500;
    src: local('Rubik Medium'), local('Rubik-Medium'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7EyjmmT8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 500;
    src: local('Rubik Medium'), local('Rubik-Medium'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7Eyjmmd8Wb07oB-.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 700;
    src: local('Rubik Bold'), local('Rubik-Bold'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7F6iGmZ8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 700;
    src: local('Rubik Bold'), local('Rubik-Bold'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7F6iGmf8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 700;
    src: local('Rubik Bold'), local('Rubik-Bold'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7F6iGmT8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 700;
    src: local('Rubik Bold'), local('Rubik-Bold'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7F6iGmd8Wb07oB-.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 900;
    src: local('Rubik Black'), local('Rubik-Black'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7FCimmZ8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 900;
    src: local('Rubik Black'), local('Rubik-Black'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7FCimmf8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 900;
    src: local('Rubik Black'), local('Rubik-Black'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7FCimmT8Wb07oB-98o.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  @font-face {
    font-family: 'Rubik';
    font-style: normal;
    font-weight: 900;
    src: local('Rubik Black'), local('Rubik-Black'), url(https://businessensemble.fr/wp-content/fonts/rubik/iJWHBXyIfDnIV7FCimmd8Wb07oB-.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  @font-face {
    font-family: 'FontAwesome';
    src: url('https://businessensemble.fr/wp-content/themes/businessensemble/fonts/fontawesome-webfont.eot?v=4.7.0');
    src: url('https://businessensemble.fr/wp-content/themes/businessensemble/fonts/fontawesome-webfont.eot#iefix&v=4.7.0') format('embedded-opentype'), url('https://businessensemble.fr/wp-content/themes/businessensemble/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('https://businessensemble.fr/wp-content/themes/businessensemble/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('https://businessensemble.fr/wp-content/themes/businessensemble/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('https://businessensemble.fr/wp-content/themes/businessensemble/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
    font-weight: normal;
    font-style: normal;
  }
</style>


  <div id="main">
    <section class="main-title-section-wrapper default" style="background-color:#eaeff5;">
      <div class="container">
        <div class="main-title-section">
          <h1>Présentation</h1>
        </div>
        <div class="breadcrumb"><a href="/">Home</a><span class="fa default"></span><span class="current">Présentation</span></div>
      </div>
    </section> <!-- ** Container ** -->
    <div class="container">
      <section id="primary" class="content-full-width">
        <!-- #post-1637 -->
        <div id="post-1637" class="post-1637 page type-page status-publish hentry">
          <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"
            style="position: relative; left: -44.5px; box-sizing: border-box; width: 1349px;">
            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
              <div class="vc_column-inner vc_custom_1502889856908" style="background-attachment:fixed;">
                <div class="wpb_wrapper">
                  <div class="vc_row wpb_row vc_inner vc_row-fluid space-both-sides">
                    <div class="space-both-sides wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <h6 class="text-hook">Un leader mondial</h6>
                          <h2 style="font-size: 40px;text-align: left" class="vc_custom_heading vcr_heading-right vc_custom_1566962977934">Présentation</h2>
                          <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                              <div class="dt-sc-small-separator "></div>

                            </div>
                          </div>
                          <div class="ult-spacer spacer-5f32933f0789f" data-id="5f32933f0789f" data-height="10" data-height-mobile="10" data-height-tab="10" data-height-tab-portrait="" data-height-mobile-landscape=""
                            style="clear:both;display:block;"></div>
                          <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                              <p>Business Ensemble, leader mondial est la première plateforme dédiée à la mise en relation entre porteur de projet et investisseur, spécialiste de l’investissement digital. Il bouleverse les enjeux Networking et met
                                tout le monde&nbsp; sur le pied d’égalité. Ce créateur de richesse s’inscrit dans une politique structurelle de valorisation du capital humain, particulier, Start up, business Angel.</p>

                            </div>
                          </div>

                          <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                              <h6>De nombreux objectifs&nbsp;:</h6>
                              <ul>
                                <li>Business Ensemble permet aux jeunes Start up de trouver de nouvelles missions pour augmenter le chiffre d’affaire</li>
                                <li>Multiplier les opportunités d’affaire, les partenariats entre personne morale ou physique, trouver à travers la plateforme des investisseurs, des associés, des prestataires et bien d’autres</li>
                                <li>Accompagner tout porteur de projet à devenir un acteur économique</li>
                                <li>La Tontine Project qui associe plusieurs entités ou personnes physiques sur un projet d’ensemble</li>
                                <li>Financer des projets d’ensemble</li>
                              </ul>

                            </div>
                          </div>
                          <div class="ult-spacer spacer-5f32933f07dab" data-id="5f32933f07dab" data-height="20" data-height-mobile="20" data-height-tab="20" data-height-tab-portrait="" data-height-mobile-landscape=""
                            style="clear:both;display:block;"></div><a href="https://businessensemble.fr/contact/" target="_self" title="Contact" class="dt-sc-button   large icon-right with-icon  fully-rounded-border  "> Contactez - nous <span
                              class="fa fa-angle-double-right"> </span></a>
                          <div class="ult-spacer spacer-5f32933f07e59" data-id="5f32933f07e59" data-height="" data-height-mobile="50" data-height-tab="" data-height-tab-portrait="" data-height-mobile-landscape="50" style="clear:both;display:block;">
                          </div>
                          <div class="ult-spacer spacer-5f32933f07e7f" data-id="5f32933f07e7f" data-height="50" data-height-mobile="50" data-height-tab="" data-height-tab-portrait="" data-height-mobile-landscape="50"
                            style="clear:both;display:block;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-6">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <div class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                      <div class="vc_column-inner vc_custom_1566963811754">
                        <div class="wpb_wrapper"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row-full-width vc_clearfix"></div>
        </div><!-- #post-1637 -->
      </section><!-- **Primary - End** -->
    </div><!-- **Container - End** -->

  </div>
@endsection
