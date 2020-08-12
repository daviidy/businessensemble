@extends('layouts.menu')
@section('title', 'Services et Team')

@section('content')

  <style media="screen">
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

      .dt-sc-button.white.fully-rounded-border {
        color: #ffffff;
        border-color: #ffffff;
      }

      .dt-sc-button.white.fully-rounded-border:hover {
        color: #000000;
        background: #ffffff;
        border-color: #ffffff;
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
      /*! @import https://businessensemble.fr/wp-content/plugins/designthemes-core-features/shortcodes/css/shortcodes/icon-boxes.css */
      .dt-sc-icon-box.type14,
      .dt-sc-icon-box.type14 .icon-wrapper img,
      .dt-sc-icon-box.type14 .icon-content *,
      .dt-sc-icon-box.type14 .icon-content h5 {
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        -o-transition: all 0.3s linear;
        -ms-transition: all 0.3s linear;
        transition: all 0.3s linear;
      }

      .dt-sc-icon-box {
        float: left;
        clear: both;
        margin: 0px;
        padding: 0px;
        position: relative;
        width: 100%;
      }

      .dt-sc-icon-box .icon-wrapper {
        position: relative;
      }

      .dt-sc-icon-box .icon-content h5 {
        margin-bottom: 2px;
      }

      .dt-sc-icon-box.type5 {
        padding: 5px 0px 0px 100px;
      }

      .dt-sc-icon-box.type5 .icon-content h4 {
        font-size: 18px;
      }

      .dt-sc-icon-box.type5 p {
        color: #888888;
      }

      .dt-sc-icon-box.type5.no-icon {
        display: block;
        float: none;
        width: auto;
        padding: 0px;
      }

      .dt-sc-icon-box.type5.no-icon-bg .icon-content h5,
      .dt-sc-icon-box.type5.no-icon .icon-content h5 {
        font-size: 12px;
        text-transform: uppercase;
        margin-bottom: 5px;
        font-weight: normal;
      }

      .dt-sc-icon-box.type5.no-icon-bg .icon-content h4,
      .dt-sc-icon-box.type5.no-icon .icon-content h4 {
        text-transform: uppercase;
        font-size: 16px;
      }

      .dt-sc-icon-box.type5.no-icon .icon-content h4 {
        width: auto;
        display: inline-block;
        border-bottom: 1px solid;
        padding: 0px 20px 20px;
      }

      .dt-sc-icon-box.type14 {
        text-align: center;
        width: 100%;
        padding: 35px 30px 40px;
        min-height: 257px;
        border-left: 1px solid #ffffff;
      }

      .dt-sc-icon-box.type14 .icon-wrapper {
        text-align: center;
        width: 100%;
        display: inline-block;
        margin: 0px 0px 20px;
      }

      .dt-sc-icon-box.type14 .icon-content {
        display: inline-block;
        width: 100%;
      }

      .dt-sc-icon-box.type14 .icon-content h4 {
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 0px;
      }

      .dt-sc-icon-box.type14 .icon-content p {
        display: none;
        margin: 20px 0px 0px;
      }

      .dt-sc-icon-box.type14:hover .icon-content h5 {
        display: none;
      }

      .dt-sc-icon-box.type14 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        flex-grow: 1;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
      }

      @media screen and (-webkit-min-device-pixel-ratio:0) {
        .dt-sc-icon-box.type14 {
          display: -webkit-box;
          -webkit-box-align: center;
          -webkit-box-flex: 1;
        }
      }

      .dt-sc-icon-box.type14 .icon-wrapper img {
        display: inline-block;
      }

      .dt-sc-icon-box.type14:hover .icon-wrapper {
        display: none;
      }

      .dt-sc-icon-box.type14:hover .icon-content p {
        display: block;
        color: #ffffff;
      }

      .dt-sc-icon-box.type14:hover .icon-content h4 {
        color: #ffffff;
      }

      .dt-sc-icon-box.type14:hover .icon-content h4 {
        color: #ffffff;
      }

      .dt-sc-icon-box.type5.no-icon-bg .icon-content h5,
      .dt-sc-icon-box.type5.no-icon .icon-content h5 {
        color: #a4a4a3;
      }

      .dt-sc-icon-box.type5.no-icon .icon-content p {
        color: #a0a0a0;
      }

      @media only screen and (min-width:992px) and (max-width:1199px) {
        .dt-sc-icon-box.type5.no-icon {
          padding: 0 30px 0 0;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          -ms-box-sizing: border-box;
          -o-box-sizing: border-box;
          box-sizing: border-box;
        }

        .dt-sc-icon-box.type5.no-icon .icon-content h4 {
          padding: 0 0 20px;
        }

        .dt-sc-icon-box.type14 .icon-content h4 {
          font-size: 16px;
        }
      }

      @media only screen and (min-width:768px) and (max-width:991px) {
        .dt-sc-icon-box.type5 {
          padding-left: 75px;
        }

        .dt-sc-icon-box.type5.no-icon-bg {
          padding: 0 0 0 42px;
        }

        .dt-sc-icon-box.type5.no-icon-bg .icon-content h5,
        .dt-sc-icon-box.type5.no-icon .icon-content h5 {
          font-size: 10px;
        }

        .dt-sc-icon-box.type5.no-icon-bg .icon-content h4,
        .dt-sc-icon-box.type5.no-icon .icon-content h4 {
          font-size: 13px;
        }

        .dt-sc-icon-box.type5.no-icon {
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          -ms-box-sizing: border-box;
          -o-box-sizing: border-box;
          box-sizing: border-box;
        }

        .dt-sc-icon-box.type5.no-icon .icon-content h4 {
          padding: 0 0 20px;
        }

        .dt-sc-icon-box.type14 {
          padding: 15px;
        }

        .dt-sc-icon-box.type14 .icon-content h4 {
          font-size: 12px;
        }
      }

      @media only screen and (max-width: 767px) {
        .dt-sc-icon-box {
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          -ms-box-sizing: border-box;
          -o-box-sizing: border-box;
          box-sizing: border-box;
        }

        .dt-sc-icon-box {
          margin-bottom: 25px;
        }

        .dt-sc-icon-box.type5.no-icon {
          padding: 0 15px;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          -ms-box-sizing: border-box;
          -o-box-sizing: border-box;
          box-sizing: border-box;
        }

        .dt-sc-icon-box.type14 {
          min-height: 210px;
        }
      }

      @media only screen and (max-width: 479px) {
        .dt-sc-icon-box.type5 {
          padding-left: 95px;
        }
      }

      @media only screen and (max-width: 319px) {
        .dt-sc-icon-box.type5 {
          padding-left: 75px;
        }

        .dt-sc-icon-box.type5.no-icon-bg {
          padding: 0 0 0 42px;
        }

        .dt-sc-icon-box.type5.no-icon-bg .icon-content h5,
        .dt-sc-icon-box.type5.no-icon .icon-content h5 {
          font-size: 10px;
        }

        .dt-sc-icon-box.type5.no-icon-bg .icon-content h4,
        .dt-sc-icon-box.type5.no-icon .icon-content h4 {
          font-size: 14px;
        }

        .dt-sc-icon-box.type5.no-icon {
          padding: 0 15px;
        }

        .dt-sc-icon-box.type5.no-icon .icon-content h4 {
          padding: 0 0 20px;
        }
      }

      /*! end @import */
    }

    /*! CSS Used from: https://businessensemble.fr/wp-content/plugins/unyson/framework/extensions/builder/static/css/frontend-grid.css?ver=1.2.11 ; media=all */
    @media all {
      img {
        max-width: 100%;
      }

      img {
        height: auto;
      }
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
      .vc_col-sm-4,
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
        .vc_col-sm-4,
        .vc_col-sm-6 {
          float: left;
        }

        .vc_col-sm-12 {
          width: 100%;
        }

        .vc_col-sm-6 {
          width: 50%;
        }

        .vc_col-sm-4 {
          width: 33.33333333%;
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

      .vc_row[data-vc-full-width] {
        -webkit-transition: opacity .5s ease;
        -o-transition: opacity .5s ease;
        transition: opacity .5s ease;
        overflow: hidden;
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

      .wpb_single_image img {
        height: auto;
        max-width: 100%;
        vertical-align: top;
      }

      .wpb_single_image .vc_single_image-wrapper {
        display: inline-block;
        vertical-align: top;
        max-width: 100%;
      }

      .wpb_single_image.vc_align_center {
        text-align: center;
      }

      .wpb_single_image .vc_figure {
        display: inline-block;
        vertical-align: top;
        margin: 0;
        max-width: 100%;
      }
    }

    /*! CSS Used from: Embedded */
    .vc_custom_1503923092652 {
      padding-top: 100px !important;
      padding-bottom: 100px !important;
    }

    .vc_custom_1567559248259 {
      margin-bottom: 0px !important;
    }

    .vc_custom_1493875964566 {
      padding-top: 0px !important;
      padding-right: 0px !important;
      padding-bottom: 0px !important;
      padding-left: 0px !important;
    }

    .vc_custom_1493819054764 {
      padding: 0px !important;
    }

    .vc_custom_1493876017970 {
      padding-top: 0px !important;
      padding-right: 0px !important;
      padding-bottom: 0px !important;
      padding-left: 0px !important;
    }

    .vc_custom_1493876054400 {
      padding-top: 0px !important;
      padding-right: 0px !important;
      padding-bottom: 0px !important;
      padding-left: 0px !important;
    }

    .vc_custom_1493819054764 {
      padding: 0px !important;
    }

    .vc_custom_1493876043193 {
      padding-top: 0px !important;
      padding-right: 0px !important;
      padding-bottom: 0px !important;
      padding-left: 0px !important;
    }

    .vc_custom_1569153045106 {
      margin-bottom: 0px !important;
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
      h4,
      h5,
      p,
      a,
      img,
      strong,
      figure,
      section {
        background: transparent;
        border: 0;
        font-size: 100%;
        margin: 0;
        outline: 0;
        padding: 0;
        vertical-align: baseline;
      }

      figure,
      section {
        display: block;
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

      h4 {
        font-size: 24px;
      }

      h5 {
        font-size: 18px;
      }

      h1,
      h2,
      h4,
      h5 {
        line-height: normal;
        font-weight: bold;
        margin-bottom: 20px;
      }

      h1,
      h2,
      h4,
      h5 {
        font-family: 'Rubik', sans-serif;
      }

      a {
        text-decoration: none;
      }

      p {
        margin-bottom: 10px;
      }

      strong {
        font-weight: bold;
      }

      .aligncenter {
        clear: both;
        display: block;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
      }

      .aligncenter.wpb_column {
        clear: none;
      }

      .aligncenter {
        margin: auto;
      }

      .vc_column_container img,
      .wpb_column img {
        max-width: 100%;
        height: auto;
        display: inherit;
      }

      img {
        max-width: 100%;
        height: auto;
      }

      h1,
      h2,
      h4,
      h5,
      a:hover {
        color: #252525;
      }

      .dt-sc-dark-bg,
      .dt-sc-dark-bg h2,
      .dt-sc-dark-bg h4,
      .dt-sc-dark-bg h5 {
        color: #ffffff;
      }

      .dt-sc-dark-bg {
        border-color: #ffffff;
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

        .rs_col-sm-12 {
          width: 100%;
        }

        .rs_col-sm-12.wpb_column {
          padding-bottom: 25px;
        }

        .rs_col-sm-12.wpb_column:last-child {
          padding-bottom: 0;
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
      }

      @media only screen and (max-width: 479px) {
        .main-title-section h1 {
          font-size: 23px;
        }
      }
    }

    /*! CSS Used from: https://businessensemble.fr/wp-content/themes/businessensemble/css/custom-class.css?ver=1.0 ; media=all */
    @media all {
      .space-left .vc_column-inner {
        padding-left: 40px;
      }

      .dt-sc-centered-border-columns .vc_row>.wpb_column {
        border-style: solid;
        border-width: 1px 1px 0 0;
        border-color: rgba(255, 255, 255, 0.4);
      }

      .dt-sc-centered-border-columns .vc_row>.wpb_column:last-child {
        border-right-width: 0;
      }

      .dt-sc-centered-border-columns .vc_row.first>.wpb_column {
        border-top-width: 0;
      }

      .dt-sc-centered-border-columns .vc_row.last>.wpb_column {
        border-bottom-width: 0;
      }

      .dt-sc-centered-border-columns .vc_row .dt-sc-icon-box.type14 {
        border-width: 0;
      }

      @media only screen and (max-width: 767px) {
        .dt-sc-centered-border-columns .vc_row>.wpb_column {
          border-width: 0px;
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

    .dt-sc-icon-box.type5 .icon-content h4 {
      color: #1b6dc1;
    }

    .dt-sc-button.fully-rounded-border {
      color: #1b6dc1;
    }

    .dt-sc-icon-box.type14 .icon-content h4 {
      color: #1b6dc1;
    }

    .dt-sc-skin-highlight {
      background-color: #1b6dc1;
    }

    .dt-sc-button:hover,
    .dt-sc-button.fully-rounded-border:hover {
      background-color: #1b6dc1;
    }

    .dt-sc-icon-box.type14:hover {
      background-color: #1b6dc1;
    }

    .dt-sc-button.fully-rounded-border,
    .dt-sc-button.fully-rounded-border:hover {
      border-color: #1b6dc1;
    }

    .dt-sc-icon-box.type5.no-icon .icon-content h4,
    .dt-sc-icon-box.type5.no-icon {
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

    h4 {
      font-family: Rubik;
      font-size: 24px;
      font-weight: 700;
      letter-spacing: 0.02em;
      text-transform: none;
      color: #252525;
    }

    h5 {
      font-family: Rubik;
      font-size: 22px;
      font-weight: 700;
      letter-spacing: 0.02em;
      text-transform: none;
      color: #252525;
    }

    /*! CSS Used from: Embedded */
    .spacer-5f3298eecf9a1 {
      height: 10px;
    }

    @media (max-width: 1199px) {
      .spacer-5f3298eecf9a1 {
        height: 10px;
      }
    }

    @media (max-width: 991px) {
      .spacer-5f3298eecf9a1 {
        height: px;
      }
    }

    @media (max-width: 767px) {
      .spacer-5f3298eecf9a1 {
        height: px;
      }
    }

    @media (max-width: 479px) {
      .spacer-5f3298eecf9a1 {
        height: 10px;
      }
    }

    .spacer-5f3298eed0984 {
      height: 75px;
    }

    @media (max-width: 1199px) {
      .spacer-5f3298eed0984 {
        height: 60px;
      }
    }

    @media (max-width: 991px) {
      .spacer-5f3298eed0984 {
        height: 60px;
      }
    }

    @media (max-width: 767px) {
      .spacer-5f3298eed0984 {
        height: 45px;
      }
    }

    @media (max-width: 479px) {
      .spacer-5f3298eed0984 {
        height: 45px;
      }
    }

    .spacer-5f3298eed4d51 {
      height: 50px;
    }

    @media (max-width: 1199px) {
      .spacer-5f3298eed4d51 {
        height: 50px;
      }
    }

    @media (max-width: 991px) {
      .spacer-5f3298eed4d51 {
        height: px;
      }
    }

    @media (max-width: 767px) {
      .spacer-5f3298eed4d51 {
        height: px;
      }
    }

    @media (max-width: 479px) {
      .spacer-5f3298eed4d51 {
        height: 50px;
      }
    }

    .spacer-5f3298eed5745 {
      height: 100px;
    }

    @media (max-width: 1199px) {
      .spacer-5f3298eed5745 {
        height: 100px;
      }
    }

    @media (max-width: 991px) {
      .spacer-5f3298eed5745 {
        height: px;
      }
    }

    @media (max-width: 767px) {
      .spacer-5f3298eed5745 {
        height: px;
      }
    }

    @media (max-width: 479px) {
      .spacer-5f3298eed5745 {
        height: 100px;
      }
    }

    .spacer-5f3298eed634c {
      height: 25px;
    }

    @media (max-width: 1199px) {
      .spacer-5f3298eed634c {
        height: 25px;
      }
    }

    @media (max-width: 991px) {
      .spacer-5f3298eed634c {
        height: px;
      }
    }

    @media (max-width: 767px) {
      .spacer-5f3298eed634c {
        height: px;
      }
    }

    @media (max-width: 479px) {
      .spacer-5f3298eed634c {
        height: 25px;
      }
    }

    /*! CSS Used fontfaces */
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
          <h1>Services &amp; Team</h1>
        </div>
        <div class="breadcrumb"><a href="/">Home</a><span class="fa default"></span><span class="current">Services &amp; Team</span></div>
      </div>
    </section> <!-- ** Container ** -->
    <div class="container">
      <section id="primary" class="content-full-width">
        <!-- #post-7535 -->
        <div id="post-7535" class="post-7535 page type-page status-publish hentry">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1567559248259">

                    <figure class="wpb_wrapper vc_figure">
                      <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1280" height="1035" src="https://businessensemble.fr/wp-content/uploads/2019/08/be53r.jpg" class="vc_single_image-img attachment-full"
                          alt="business ensemble : team et service"
                          srcset="https://businessensemble.fr/wp-content/uploads/2019/08/be53r.jpg 1280w, https://businessensemble.fr/wp-content/uploads/2019/08/be53r-300x243.jpg 300w, https://businessensemble.fr/wp-content/uploads/2019/08/be53r-768x621.jpg 768w, https://businessensemble.fr/wp-content/uploads/2019/08/be53r-1024x828.jpg 1024w, https://businessensemble.fr/wp-content/uploads/2019/08/be53r-150x120.jpg 150w, https://businessensemble.fr/wp-content/uploads/2019/08/be53r-570x460.jpg 570w, https://businessensemble.fr/wp-content/uploads/2019/08/be53r-600x485.jpg 600w"
                          sizes="(max-width: 1280px) 100vw, 1280px"></div>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div class="space-left rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <h2>Notre équipe à votre service</h2>
                  <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                      <p>En plus d’un accompagnement personnalisé pour vous faciliter la vie.<br>
                        Nous réalisons le suivi de votre projet avec des experts en gestion de projet et en finance, et des partenaires locaux pour davantage de proximité.</p>
                      <p>&nbsp;</p>
                      <p>Avec Business Ensemble, vous disposez à chaque étape de votre projet d’entreprise ou d’investissement, d’un interlocuteur unique, expert, disponible et à votre écoute. Nous nous engageons à toujours vous répondre dans un
                        délai maximum de 72 heures.</p>
                      <p>&nbsp;</p>
                      <p>N’attendez plus, il n’est jamais trop tôt pour être un homme ou une femme d’affaire, accordez nous votre confiance et venez nous rejoindre.</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid dt-sc-centered-border-columns dt-sc-skin-highlight dt-sc-dark-bg vcr_float_right vc_custom_1503923092652"
            style="position: relative; left: -44.5px; box-sizing: border-box; width: 1349px; padding-left: 44.5px; padding-right: 44.5px;">
            <div class="aligncenter wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <div class="aligncenter  dt-sc-subtitle-text">Nos services s’adressent à toute entreprise, peu importe sa taille.</div>
                  <div class="ult-spacer spacer-5f3298eecf9a1" data-id="5f3298eecf9a1" data-height="10" data-height-mobile="10" data-height-tab="10" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                  <h2 style="font-size: 50px;line-height: 50px;text-align: center" class="vc_custom_heading"><strong>Nos Services </strong></h2>
                  <div class="ult-spacer spacer-5f3298eed0984" data-id="5f3298eed0984" data-height="75" data-height-mobile="45" data-height-tab="60" data-height-tab-portrait="60" data-height-mobile-landscape="45" style="clear:both;display:block;">
                  </div>
                  <div class="vc_row wpb_row vc_inner vc_row-fluid first">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner vc_custom_1493875964566">
                        <div class="wpb_wrapper">
                          <div class="dt-sc-icon-box type14 ">
                            <div class="icon-wrapper"><img width="50" height="50" src="https://businessensemble.fr/wp-content/uploads/2017/08/ic7.png" class="attachment-full" alt="img"></div>
                            <div class="icon-content">
                              <h5>Conseils</h5>
                              <h4>Conseils</h4>
                              <p>Conseil en investissements</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner vc_custom_1493819054764">
                        <div class="wpb_wrapper">
                          <div class="dt-sc-icon-box type14 ">
                            <div class="icon-wrapper"><img width="50" height="50" src="https://businessensemble.fr/wp-content/uploads/2017/08/ic7.png" class="attachment-full" alt="img"></div>
                            <div class="icon-content">
                              <h5>Accompagnement</h5>
                              <h4>Accompagnement</h4>
                              <p>Accompagnement pour chaque créateur d’entreprise, de l’idée jusqu’à la réalisation du projet</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner vc_custom_1493876017970">
                        <div class="wpb_wrapper">
                          <div class="dt-sc-icon-box type14 ">
                            <div class="icon-wrapper"><img width="50" height="50" src="https://businessensemble.fr/wp-content/uploads/2017/08/ic7.png" class="attachment-full" alt="img"></div>
                            <div class="icon-content">
                              <h5>Business Plan et formation</h5>
                              <h4>Business Plan et formation</h4>
                              <p>Etablissement d’un business plan et formation jeune créateur d’entreprise</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_inner vc_row-fluid last">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner vc_custom_1493876054400">
                        <div class="wpb_wrapper">
                          <div class="dt-sc-icon-box type14 ">
                            <div class="icon-wrapper"><img width="50" height="50" src="https://businessensemble.fr/wp-content/uploads/2017/08/ic7.png" class="attachment-full" alt="img"></div>
                            <div class="icon-content">
                              <h5>Analyse</h5>
                              <h4>Analyse</h4>
                              <p>Analyse économique et financière du projet</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner vc_custom_1493819054764">
                        <div class="wpb_wrapper">
                          <div class="dt-sc-icon-box type14 ">
                            <div class="icon-wrapper"><img width="50" height="50" src="https://businessensemble.fr/wp-content/uploads/2017/08/ic7.png" class="attachment-full" alt="img"></div>
                            <div class="icon-content">
                              <h5>Mise en relation</h5>
                              <h4>Mise en relation</h4>
                              <p>Aide à la mise en relation entre créateurs de projet et investisseurs</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner vc_custom_1493876043193">
                        <div class="wpb_wrapper">
                          <div class="dt-sc-icon-box type14 ">
                            <div class="icon-wrapper"><img width="50" height="50" src="https://businessensemble.fr/wp-content/uploads/2017/08/ic7.png" class="attachment-full" alt="img"></div>
                            <div class="icon-content">
                              <h5>ouverture de marché</h5>
                              <h4>ouverture de marché</h4>
                              <p>Aide à la mise en place d’ouverture de marché et d’appel d’offres</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="ult-spacer spacer-5f3298eed4d51" data-id="5f3298eed4d51" data-height="50" data-height-mobile="50" data-height-tab="50" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                  <a href="https://businessensemble.fr/contact/" target="_self" title="Contact" class="dt-sc-button   large icon-right with-icon  fully-rounded-border  white"> Contact <span class="fa fa-angle-double-right"> </span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row-full-width vc_clearfix"></div>
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <div class="ult-spacer spacer-5f3298eed5745" data-id="5f3298eed5745" data-height="100" data-height-mobile="100" data-height-tab="100" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <h2>Notre expertise à votre service...</h2>
                  <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                      <p>À toutes les étapes de votre projet, nous saurons mettre notre expertise à votre service pour vous conseiller et vous guider vers des solutions adaptées, du conseil en investissements à la mise en place d’ouverture de marché
                        et d’appel d’offres.</p>

                    </div>
                  </div>
                  <div class="dt-sc-icon-box type5 no-icon-bg no-icon">
                    <div class="icon-content">
                      <h5>Opportunités d’affaire</h5>
                      <h4>Vous aider à multiplier les opportunités d’affaire</h4>
                      <p>Multiplier les opportunités d’affaire, les partenariats entre personne morale ou physique</p>
                    </div>
                  </div>
                  <div class="ult-spacer spacer-5f3298eed634c" data-id="5f3298eed634c" data-height="25" data-height-mobile="25" data-height-tab="25" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                </div>
              </div>
            </div>
            <div class="space-left rs_col-sm-12 wpb_column vc_column_container vc_col-sm-6">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1569153045106">

                    <figure class="wpb_wrapper vc_figure">
                      <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="640" height="426" src="https://businessensemble.fr/wp-content/uploads/2019/09/brainstorming.jpg" class="vc_single_image-img attachment-full"
                          alt="Business Ensemble : Nos Services"
                          srcset="https://businessensemble.fr/wp-content/uploads/2019/09/brainstorming.jpg 640w, https://businessensemble.fr/wp-content/uploads/2019/09/brainstorming-300x200.jpg 300w, https://businessensemble.fr/wp-content/uploads/2019/09/brainstorming-600x399.jpg 600w"
                          sizes="(max-width: 640px) 100vw, 640px"></div>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- #post-7535 -->
      </section><!-- **Primary - End** -->
    </div><!-- **Container - End** -->

  </div>
@endsection
