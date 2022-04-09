<?php
// defined('BASEPATH') or exit('No direct script access allowed');
//get site_align setting
// $settings = $this->db->select("site_align")
//   ->get('setting')
//   ->row();
?>
<!doctype html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no">
  <title>Hyunkunun &#8211; Highly Customizable Real Estate Work</title>
  <meta name='robots' content='max-image-preview:large' />
  <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
  <link rel='dns-prefetch' href='http://s.w.org/' />
  <link rel='preconnect' href='https://fonts.gstatic.com/' crossorigin />
  <script type="text/javascript">
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "https:\/\/demo03.houzez.co\/wp-includes\/js\/wp-emoji-release.min.js"
      }
    };
    ! function(e, a, t) {
      var n, r, o, i = a.createElement("canvas"),
        p = i.getContext && i.getContext("2d");

      function s(e, t) {
        var a = String.fromCharCode;
        p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
        e = i.toDataURL();
        return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
      }

      function c(e) {
        var t = a.createElement("script");
        t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
      }
      for (o = Array("flag", "emoji"), t.supports = {
          everything: !0,
          everythingExceptFlag: !0
        }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
        if (!p || !p.fillText) return !1;
        switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
          case "flag":
            return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
          case "emoji":
            return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
        }
        return !1
      }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
      t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
        t.DOMReady = !0
      }, t.supports.everything || (n = function() {
        t.readyCallback()
      }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
        "complete" === a.readyState && t.readyCallback()
      })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
    }(window, document, window._wpemojiSettings);
  </script>
  <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel='stylesheet' id='wp-block-library-css' href='<?php echo base_url('houzez_assets/'); ?>wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='rs-plugin-settings-css' href='<?php echo base_url('houzez_assets/'); ?>wp-content/plugins/revslider/public/assets/css/rs6.css' type='text/css' media='all' />
  <link rel='stylesheet' id='houzez-all-css-css' href='<?php echo base_url('houzez_assets/'); ?>wp-content/themes/houzez/css/all-css.css' type='text/css' media='all' />
  <link rel='stylesheet' id='font-awesome-5-all-css' href='<?php echo base_url('houzez_assets/'); ?>wp-content/themes/houzez/css/font-awesome/css/all.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='houzez-style-css' href='<?php echo base_url('houzez_assets/'); ?>wp-content/themes/houzez/style.css' type='text/css' media='all' />
  <style id='houzez-style-inline-css' type='text/css'>
    .label-color-38 {
      background-color: #dd3333;
    }

    .label-color-54 {
      background-color: #ea923a;
    }

    body {
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
      line-height: 25px;
      text-align: left;
      text-transform: none;
    }

    .main-nav,
    .dropdown-menu,
    .login-register,
    .btn.btn-create-listing,
    .logged-in-nav,
    .btn-phone-number {
      font-family: Roboto;
      font-size: 14px;
      font-weight: 500;
      text-align: left;
      text-transform: none;
    }

    .btn,
    .form-control,
    .bootstrap-select .text,
    .sort-by-title,
    .woocommerce ul.products li.product .button {
      font-family: Roboto;
      font-size: 15px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .item-title {
      font-family: Lora;
      font-weight: 400;
      text-transform: capitalize;
    }

    .post-content-wrap h1,
    .post-content-wrap h2,
    .post-content-wrap h3,
    .post-content-wrap h4,
    .post-content-wrap h5,
    .post-content-wrap h6 {
      font-weight: 400;
      text-transform: capitalize;
      text-align: inherit;
    }

    .top-bar-wrap {
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
      line-height: 25px;
      text-align: left;
      text-transform: none;
    }

    .footer-wrap {
      font-family: Roboto;
      font-size: 14px;
      font-weight: 300;
      line-height: 25px;
      text-align: left;
      text-transform: none;
    }

    .header-v1 .header-inner-wrap,
    .header-v1 .navbar-logged-in-wrap {
      line-height: 60px;
      height: 60px;
    }

    .header-v2 .header-top .navbar {
      height: 110px;
    }

    .header-v2 .header-bottom .header-inner-wrap,
    .header-v2 .header-bottom .navbar-logged-in-wrap {
      line-height: 54px;
      height: 54px;
    }

    .header-v3 .header-top .header-inner-wrap,
    .header-v3 .header-top .header-contact-wrap {
      height: 80px;
      line-height: 80px;
    }

    .header-v3 .header-bottom .header-inner-wrap,
    .header-v3 .header-bottom .navbar-logged-in-wrap {
      line-height: 54px;
      height: 54px;
    }

    .header-v4 .header-inner-wrap,
    .header-v4 .navbar-logged-in-wrap {
      line-height: 90px;
      height: 90px;
    }

    .header-v5 .header-top .header-inner-wrap,
    .header-v5 .header-top .navbar-logged-in-wrap {
      line-height: 110px;
      height: 110px;
    }

    .header-v5 .header-bottom .header-inner-wrap {
      line-height: 54px;
      height: 54px;
    }

    .header-v6 .header-inner-wrap,
    .header-v6 .navbar-logged-in-wrap {
      height: 60px;
      line-height: 60px;
    }

    body,
    #main-wrap,
    .fw-property-documents-wrap h3 span,
    .fw-property-details-wrap h3 span {
      background-color: #f7f8f9;
    }

    body,
    .form-control,
    .bootstrap-select .text,
    .item-title a,
    .listing-tabs .nav-tabs .nav-link,
    .item-wrap-v2 .item-amenities li span,
    .item-wrap-v2 .item-amenities li:before,
    .item-parallax-wrap .item-price-wrap,
    .list-view .item-body .item-price-wrap,
    .property-slider-item .item-price-wrap,
    .page-title-wrap .item-price-wrap,
    .agent-information .agent-phone span a,
    .property-overview-wrap ul li strong,
    .mobile-property-title .item-price-wrap .item-price,
    .fw-property-features-left li a,
    .lightbox-content-wrap .item-price-wrap,
    .blog-post-item-v1 .blog-post-title h3 a,
    .blog-post-content-widget h4 a,
    .property-item-widget .right-property-item-widget-wrap .item-price-wrap,
    .login-register-form .modal-header .login-register-tabs .nav-link.active,
    .agent-list-wrap .agent-list-content h2 a,
    .agent-list-wrap .agent-list-contact li a,
    .agent-contacts-wrap li a,
    .menu-edit-property li a,
    .statistic-referrals-list li a,
    .chart-nav .nav-pills .nav-link,
    .dashboard-table-properties td .property-payment-status,
    .dashboard-mobile-edit-menu-wrap .bootstrap-select>.dropdown-toggle.bs-placeholder,
    .payment-method-block .radio-tab .control-text,
    .post-title-wrap h2 a,
    .lead-nav-tab.nav-pills .nav-link,
    .deals-nav-tab.nav-pills .nav-link,
    .btn-light-grey-outlined:hover,
    button:not(.bs-placeholder) .filter-option-inner-inner,
    .fw-property-floor-plans-wrap .floor-plans-tabs a,
    .products>.product>.item-body>a,
    .woocommerce ul.products li.product .price,
    .woocommerce div.product p.price,
    .woocommerce div.product span.price,
    .woocommerce #reviews #comments ol.commentlist li .meta,
    .woocommerce-MyAccount-navigation ul li a {
      color: #222222;
    }



    a,
    a:hover,
    a:active,
    a:focus,
    .primary-text,
    .btn-clear,
    .btn-apply,
    .btn-primary-outlined,
    .btn-primary-outlined:before,
    .item-title a:hover,
    .sort-by .bootstrap-select .bs-placeholder,
    .sort-by .bootstrap-select>.btn,
    .sort-by .bootstrap-select>.btn:active,
    .page-link,
    .page-link:hover,
    .accordion-title:before,
    .blog-post-content-widget h4 a:hover,
    .agent-list-wrap .agent-list-content h2 a:hover,
    .agent-list-wrap .agent-list-contact li a:hover,
    .agent-contacts-wrap li a:hover,
    .agent-nav-wrap .nav-pills .nav-link,
    .dashboard-side-menu-wrap .side-menu-dropdown a.active,
    .menu-edit-property li a.active,
    .menu-edit-property li a:hover,
    .dashboard-statistic-block h3 .fa,
    .statistic-referrals-list li a:hover,
    .chart-nav .nav-pills .nav-link.active,
    .board-message-icon-wrap.active,
    .post-title-wrap h2 a:hover,
    .listing-switch-view .switch-btn.active,
    .item-wrap-v6 .item-price-wrap,
    .listing-v6 .list-view .item-body .item-price-wrap,
    .woocommerce nav.woocommerce-pagination ul li a,
    .woocommerce nav.woocommerce-pagination ul li span,
    .woocommerce-MyAccount-navigation ul li a:hover {
      color: #00aeff;
    }

    .agent-list-position a {
      color: #00aeff !important;
    }

    .control input:checked~.control__indicator,
    .top-banner-wrap .nav-pills .nav-link,
    .btn-primary-outlined:hover,
    .page-item.active .page-link,
    .slick-prev:hover,
    .slick-prev:focus,
    .slick-next:hover,
    .slick-next:focus,
    .mobile-property-tools .nav-pills .nav-link.active,
    .login-register-form .modal-header,
    .agent-nav-wrap .nav-pills .nav-link.active,
    .board-message-icon-wrap .notification-circle,
    .primary-label,
    .fc-event,
    .fc-event-dot,
    .compare-table .table-hover>tbody>tr:hover,
    .post-tag,
    .datepicker table tr td.active.active,
    .datepicker table tr td.active.disabled,
    .datepicker table tr td.active.disabled.active,
    .datepicker table tr td.active.disabled.disabled,
    .datepicker table tr td.active.disabled:active,
    .datepicker table tr td.active.disabled:hover,
    .datepicker table tr td.active.disabled:hover.active,
    .datepicker table tr td.active.disabled:hover.disabled,
    .datepicker table tr td.active.disabled:hover:active,
    .datepicker table tr td.active.disabled:hover:hover,
    .datepicker table tr td.active.disabled:hover[disabled],
    .datepicker table tr td.active.disabled[disabled],
    .datepicker table tr td.active:active,
    .datepicker table tr td.active:hover,
    .datepicker table tr td.active:hover.active,
    .datepicker table tr td.active:hover.disabled,
    .datepicker table tr td.active:hover:active,
    .datepicker table tr td.active:hover:hover,
    .datepicker table tr td.active:hover[disabled],
    .datepicker table tr td.active[disabled],
    .ui-slider-horizontal .ui-slider-range {
      background-color: #00aeff;
    }

    .control input:checked~.control__indicator,
    .btn-primary-outlined,
    .page-item.active .page-link,
    .mobile-property-tools .nav-pills .nav-link.active,
    .agent-nav-wrap .nav-pills .nav-link,
    .agent-nav-wrap .nav-pills .nav-link.active,
    .chart-nav .nav-pills .nav-link.active,
    .dashaboard-snake-nav .step-block.active,
    .fc-event,
    .fc-event-dot {
      border-color: #00aeff;
    }

    .slick-arrow:hover {
      background-color: rgba(0, 174, 255, 0.65);
    }

    .slick-arrow {
      background-color: #00aeff;
    }

    .property-banner .nav-pills .nav-link.active {
      background-color: rgba(0, 174, 255, 0.65) !important;
    }

    .property-navigation-wrap a.active {
      color: #00aeff;
      -webkit-box-shadow: inset 0 -3px #00aeff;
      box-shadow: inset 0 -3px #00aeff;
    }

    .btn-primary,
    .fc-button-primary,
    .woocommerce nav.woocommerce-pagination ul li a:focus,
    .woocommerce nav.woocommerce-pagination ul li a:hover,
    .woocommerce nav.woocommerce-pagination ul li span.current {
      color: #fff;
      background-color: #00aeff;
      border-color: #00aeff;
    }

    .btn-primary:focus,
    .btn-primary:focus:active,
    .fc-button-primary:focus,
    .fc-button-primary:focus:active {
      color: #fff;
      background-color: #00aeff;
      border-color: #00aeff;
    }

    .btn-primary:hover,
    .fc-button-primary:hover {
      color: #fff;
      background-color: #33beff;
      border-color: #33beff;
    }

    .btn-primary:active,
    .btn-primary:not(:disabled):not(:disabled):active,
    .fc-button-primary:active,
    .fc-button-primary:not(:disabled):not(:disabled):active {
      color: #fff;
      background-color: #33beff;
      border-color: #33beff;
    }

    .btn-secondary,
    .woocommerce span.onsale,
    .woocommerce ul.products li.product .button,
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt,
    .woocommerce #review_form #respond .form-submit input,
    .woocommerce #respond input#submit,
    .woocommerce a.button,
    .woocommerce button.button,
    .woocommerce input.button {
      color: #fff;
      background-color: #28a745;
      border-color: #28a745;
    }

    .woocommerce ul.products li.product .button:focus,
    .woocommerce ul.products li.product .button:active,
    .woocommerce #respond input#submit.alt:focus,
    .woocommerce a.button.alt:focus,
    .woocommerce button.button.alt:focus,
    .woocommerce input.button.alt:focus,
    .woocommerce #respond input#submit.alt:active,
    .woocommerce a.button.alt:active,
    .woocommerce button.button.alt:active,
    .woocommerce input.button.alt:active,
    .woocommerce #review_form #respond .form-submit input:focus,
    .woocommerce #review_form #respond .form-submit input:active,
    .woocommerce #respond input#submit:active,
    .woocommerce a.button:active,
    .woocommerce button.button:active,
    .woocommerce input.button:active,
    .woocommerce #respond input#submit:focus,
    .woocommerce a.button:focus,
    .woocommerce button.button:focus,
    .woocommerce input.button:focus {
      color: #fff;
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-secondary:hover,
    .woocommerce ul.products li.product .button:hover,
    .woocommerce #respond input#submit.alt:hover,
    .woocommerce a.button.alt:hover,
    .woocommerce button.button.alt:hover,
    .woocommerce input.button.alt:hover,
    .woocommerce #review_form #respond .form-submit input:hover,
    .woocommerce #respond input#submit:hover,
    .woocommerce a.button:hover,
    .woocommerce button.button:hover,
    .woocommerce input.button:hover {
      color: #fff;
      background-color: #34ce57;
      border-color: #34ce57;
    }

    .btn-secondary:active,
    .btn-secondary:not(:disabled):not(:disabled):active {
      color: #fff;
      background-color: #34ce57;
      border-color: #34ce57;
    }

    .btn-primary-outlined {
      color: #00aeff;
      background-color: transparent;
      border-color: #00aeff;
    }

    .btn-primary-outlined:focus,
    .btn-primary-outlined:focus:active {
      color: #00aeff;
      background-color: transparent;
      border-color: #00aeff;
    }

    .btn-primary-outlined:hover {
      color: #fff;
      background-color: #33beff;
      border-color: #33beff;
    }

    .btn-primary-outlined:active,
    .btn-primary-outlined:not(:disabled):not(:disabled):active {
      color: #00aeff;
      background-color: rgba(26, 26, 26, 0);
      border-color: #33beff;
    }

    .btn-secondary-outlined {
      color: #28a745;
      background-color: transparent;
      border-color: #28a745;
    }

    .btn-secondary-outlined:focus,
    .btn-secondary-outlined:focus:active {
      color: #28a745;
      background-color: transparent;
      border-color: #28a745;
    }

    .btn-secondary-outlined:hover {
      color: #fff;
      background-color: #34ce57;
      border-color: #34ce57;
    }

    .btn-secondary-outlined:active,
    .btn-secondary-outlined:not(:disabled):not(:disabled):active {
      color: #28a745;
      background-color: rgba(26, 26, 26, 0);
      border-color: #34ce57;
    }

    .btn-call {
      color: #28a745;
      background-color: transparent;
      border-color: #28a745;
    }

    .btn-call:focus,
    .btn-call:focus:active {
      color: #28a745;
      background-color: transparent;
      border-color: #28a745;
    }

    .btn-call:hover {
      color: #28a745;
      background-color: rgba(26, 26, 26, 0);
      border-color: #34ce57;
    }

    .btn-call:active,
    .btn-call:not(:disabled):not(:disabled):active {
      color: #28a745;
      background-color: rgba(26, 26, 26, 0);
      border-color: #34ce57;
    }

    .icon-delete .btn-loader:after {
      border-color: #00aeff transparent #00aeff transparent
    }

    .header-v1 {
      background-color: #004274;
      border-bottom: 1px solid #004274;
    }

    .header-v1 a {
      color: #FFFFFF;
    }

    .header-v1 a:hover,
    .header-v1 a:active {
      color: #00aeff;
      background-color: rgba(0, 174, 255, 0.1);
    }

    .header-v2 .header-top,
    .header-v5 .header-top,
    .header-v2 .header-contact-wrap {
      background-color: #ffffff;
    }

    .header-v2 .header-bottom,
    .header-v5 .header-bottom {
      background-color: #004274;
    }

    .header-v2 .header-contact-wrap .header-contact-right,
    .header-v2 .header-contact-wrap .header-contact-right a,
    .header-contact-right a:hover,
    header-contact-right a:active {
      color: #004274;
    }

    .header-v2 .header-contact-left {
      color: #004274;
    }

    .header-v2 .header-bottom,
    .header-v2 .navbar-nav>li,
    .header-v2 .navbar-nav>li:first-of-type,
    .header-v5 .header-bottom,
    .header-v5 .navbar-nav>li,
    .header-v5 .navbar-nav>li:first-of-type {
      border-color: rgba(0, 174, 255, 0.2);
    }

    .header-v2 a,
    .header-v5 a {
      color: #ffffff;
    }

    .header-v2 a:hover,
    .header-v2 a:active,
    .header-v5 a:hover,
    .header-v5 a:active {
      color: #00aeff;
      background-color: rgba(0, 174, 255, 0.1);
    }

    .header-v2 .header-contact-right a:hover,
    .header-v2 .header-contact-right a:active,
    .header-v3 .header-contact-right a:hover,
    .header-v3 .header-contact-right a:active {
      background-color: transparent;
    }

    .header-v2 .header-social-icons a,
    .header-v5 .header-social-icons a {
      color: #004274;
    }

    .header-v3 .header-top {
      background-color: #004274;
    }

    .header-v3 .header-bottom {
      background-color: #004274;
    }

    .header-v3 .header-contact,
    .header-v3-mobile {
      background-color: #00aeff;
      color: #ffffff;
    }

    .header-v3 .header-bottom,
    .header-v3 .login-register,
    .header-v3 .navbar-nav>li,
    .header-v3 .navbar-nav>li:first-of-type {
      border-color: rgba(0, 174, 239, 0.2);
    }

    .header-v3 a,
    .header-v3 .header-contact-right a:hover,
    .header-v3 .header-contact-right a:active {
      color: #FFFFFF;
    }

    .header-v3 a:hover,
    .header-v3 a:active {
      color: #00aeff;
      background-color: rgba(0, 174, 255, 0.1);
    }

    .header-v3 .header-social-icons a {
      color: #004274;
    }

    .header-v4 {
      background-color: #ffffff;
    }

    .header-v4 a {
      color: #004274;
    }

    .header-v4 a:hover,
    .header-v4 a:active {
      color: #00aeef;
      background-color: rgba(0, 174, 255, 0.1);
    }

    .header-v6 .header-top {
      background-color: #004274;
    }

    .header-v6 a {
      color: #FFFFFF;
    }

    .header-v6 a:hover,
    .header-v6 a:active {
      color: #00aeff;
      background-color: rgba(0, 174, 255, 0.1);
    }

    .header-v6 .header-social-icons a {
      color: #FFFFFF;
    }

    .header-mobile {
      background-color: #004274;
    }

    .header-mobile .toggle-button-left,
    .header-mobile .toggle-button-right {
      color: #FFFFFF;
    }

    .nav-mobile .logged-in-nav a,
    .nav-mobile .main-nav,
    .nav-mobile .navi-login-register {
      background-color: #ffffff;
    }

    .nav-mobile .logged-in-nav a,
    .nav-mobile .main-nav .nav-item .nav-item a,
    .nav-mobile .main-nav .nav-item a,
    .navi-login-register .main-nav .nav-item a {
      color: #004274;
      border-bottom: 1px solid #dce0e0;
      background-color: #ffffff;
    }

    .nav-mobile .btn-create-listing,
    .navi-login-register .btn-create-listing {
      color: #fff;
      border: 1px solid #00aeff;
      background-color: #00aeff;
    }

    .nav-mobile .btn-create-listing:hover,
    .nav-mobile .btn-create-listing:active,
    .navi-login-register .btn-create-listing:hover,
    .navi-login-register .btn-create-listing:active {
      color: #fff;
      border: 1px solid #00aeff;
      background-color: rgba(0, 174, 255, 0.65);
    }

    .header-transparent-wrap .header-v4 {
      background-color: transparent;
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }

    .header-transparent-wrap .header-v4 a {
      color: #ffffff;
    }

    .header-transparent-wrap .header-v4 a:hover,
    .header-transparent-wrap .header-v4 a:active {
      color: #ffffff;
      background-color: rgba(255, 255, 255, 0.1);
    }

    .main-nav .navbar-nav .nav-item .dropdown-menu {
      background-color: rgba(255, 255, 255, 0.95);
    }

    .main-nav .navbar-nav .nav-item .nav-item a {
      color: #222222;
      border-bottom: 1px solid #dce0e0;
    }

    .main-nav .navbar-nav .nav-item .nav-item a:hover,
    .main-nav .navbar-nav .nav-item .nav-item a:active {
      color: #00aeff;
    }

    .header-main-wrap .btn-create-listing {
      color: #ffffff;
      border: 1px solid #00aeff;
      background-color: #00aeff;
    }

    .header-main-wrap .btn-create-listing:hover,
    .header-main-wrap .btn-create-listing:active {
      color: rgba(255, 255, 255, 0.99);
      border: 1px solid #00aeff;
      background-color: rgba(0, 174, 255, 0.65);
    }

    .header-transparent-wrap .header-v4 .btn-create-listing {
      color: #ffffff;
      border: 1px solid #ffffff;
      background-color: rgba(255, 255, 255, 0.2);
    }

    .header-transparent-wrap .header-v4 .btn-create-listing:hover,
    .header-transparent-wrap .header-v4 .btn-create-listing:active {
      color: rgba(255, 255, 255, 1);
      border: 1px solid #00AEEF;
      background-color: rgba(0, 174, 255, 0.65);
    }

    .header-transparent-wrap .logged-in-nav a,
    .logged-in-nav a {
      color: #004274;
      border-color: #dce0e0;
      background-color: #FFFFFF;
    }

    .header-transparent-wrap .logged-in-nav a:hover,
    .header-transparent-wrap .logged-in-nav a:active,
    .logged-in-nav a:hover,
    .logged-in-nav a:active {
      color: #00aeff;
      background-color: rgba(0, 174, 255, 0.1);
      border-color: #dce0e0;
    }

    .form-control::-webkit-input-placeholder,
    .search-banner-wrap ::-webkit-input-placeholder,
    .advanced-search ::-webkit-input-placeholder,
    .advanced-search-banner-wrap ::-webkit-input-placeholder,
    .overlay-search-advanced-module ::-webkit-input-placeholder {
      color: #a1a7a8;
    }

    .bootstrap-select>.dropdown-toggle.bs-placeholder,
    .bootstrap-select>.dropdown-toggle.bs-placeholder:active,
    .bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
    .bootstrap-select>.dropdown-toggle.bs-placeholder:hover {
      color: #a1a7a8;
    }

    .form-control::placeholder,
    .search-banner-wrap ::-webkit-input-placeholder,
    .advanced-search ::-webkit-input-placeholder,
    .advanced-search-banner-wrap ::-webkit-input-placeholder,
    .overlay-search-advanced-module ::-webkit-input-placeholder {
      color: #a1a7a8;
    }

    .search-banner-wrap ::-moz-placeholder,
    .advanced-search ::-moz-placeholder,
    .advanced-search-banner-wrap ::-moz-placeholder,
    .overlay-search-advanced-module ::-moz-placeholder {
      color: #a1a7a8;
    }

    .search-banner-wrap :-ms-input-placeholder,
    .advanced-search :-ms-input-placeholder,
    .advanced-search-banner-wrap ::-ms-input-placeholder,
    .overlay-search-advanced-module ::-ms-input-placeholder {
      color: #a1a7a8;
    }

    .search-banner-wrap :-moz-placeholder,
    .advanced-search :-moz-placeholder,
    .advanced-search-banner-wrap :-moz-placeholder,
    .overlay-search-advanced-module :-moz-placeholder {
      color: #a1a7a8;
    }

    .advanced-search .form-control,
    .advanced-search .bootstrap-select>.btn,
    .location-trigger,
    .vertical-search-wrap .form-control,
    .vertical-search-wrap .bootstrap-select>.btn,
    .step-search-wrap .form-control,
    .step-search-wrap .bootstrap-select>.btn,
    .advanced-search-banner-wrap .form-control,
    .advanced-search-banner-wrap .bootstrap-select>.btn,
    .search-banner-wrap .form-control,
    .search-banner-wrap .bootstrap-select>.btn,
    .overlay-search-advanced-module .form-control,
    .overlay-search-advanced-module .bootstrap-select>.btn,
    .advanced-search-v2 .advanced-search-btn,
    .advanced-search-v2 .advanced-search-btn:hover {
      border-color: #dce0e0;
    }

    .advanced-search-nav,
    .search-expandable,
    .overlay-search-advanced-module {
      background-color: #FFFFFF;
    }

    .btn-search {
      color: #ffffff;
      background-color: #ff6e00;
      border-color: #ff6e00;
    }

    .btn-search:hover,
    .btn-search:active {
      color: #ffffff;
      background-color: #ff8c35;
      border-color: #ff8c35;
    }

    .advanced-search-btn {
      color: #00aeff;
      background-color: #ffffff;
      border-color: #dce0e0;
    }

    .advanced-search-btn:hover,
    .advanced-search-btn:active {
      color: #ffffff;
      background-color: #00aeff;
      border-color: #00aeff;
    }

    .advanced-search-btn:focus {
      color: #00aeff;
      background-color: #ffffff;
      border-color: #dce0e0;
    }

    .search-expandable-label {
      color: #ffffff;
      background-color: #00aeff;
    }

    .advanced-search-nav {
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .features-list-wrap .control--checkbox,
    .features-list-wrap .control--radio,
    .range-text,
    .features-list-wrap .control--checkbox,
    .features-list-wrap .btn-features-list,
    .overlay-search-advanced-module .search-title,
    .overlay-search-advanced-module .overlay-search-module-close {
      color: #222222;
    }

    .advanced-search-half-map {
      background-color: #FFFFFF;
    }

    .advanced-search-half-map .range-text,
    .advanced-search-half-map .features-list-wrap .control--checkbox,
    .advanced-search-half-map .features-list-wrap .btn-features-list {
      color: #222222;
    }

    .save-search-btn {
      border-color: #28a745;
      background-color: #28a745;
      color: #ffffff;
    }

    .save-search-btn:hover,
    .save-search-btn:active {
      border-color: #28a745;
      background-color: #28a745;
      color: #ffffff;
    }

    .label-featured {
      background-color: #77c720;
      color: #ffffff;
    }

    .dashboard-side-wrap {
      background-color: #002B4B;
    }

    .side-menu a {
      color: #839EB2;
    }

    .side-menu a.active,
    .side-menu .side-menu-parent-selected>a,
    .side-menu-dropdown a,
    .side-menu a:hover {
      color: #ffffff;
    }

    .dashboard-side-menu-wrap .side-menu-dropdown a.active {
      color: #00aeff
    }

    .detail-wrap {
      background-color: rgba(0, 174, 255, 0.1);
      border-color: #00aeff;
    }

    .top-bar-wrap,
    .top-bar-wrap .dropdown-menu,
    .switcher-wrap .dropdown-menu {
      background-color: #000000;
    }

    .top-bar-wrap a,
    .top-bar-contact,
    .top-bar-slogan,
    .top-bar-wrap .btn,
    .top-bar-wrap .dropdown-menu,
    .switcher-wrap .dropdown-menu,
    .top-bar-wrap .navbar-toggler {
      color: #ffffff;
    }

    .top-bar-wrap a:hover,
    .top-bar-wrap a:active,
    .top-bar-wrap .btn:hover,
    .top-bar-wrap .btn:active,
    .top-bar-wrap .dropdown-menu li:hover,
    .top-bar-wrap .dropdown-menu li:active,
    .switcher-wrap .dropdown-menu li:hover,
    .switcher-wrap .dropdown-menu li:active {
      color: rgba(0, 174, 239, 0.75);
    }

    .class-energy-indicator:nth-child(1) {
      background-color: #33a357;
    }

    .class-energy-indicator:nth-child(2) {
      background-color: #79b752;
    }

    .class-energy-indicator:nth-child(3) {
      background-color: #c3d545;
    }

    .class-energy-indicator:nth-child(4) {
      background-color: #fff12c;
    }

    .class-energy-indicator:nth-child(5) {
      background-color: #edb731;
    }

    .class-energy-indicator:nth-child(6) {
      background-color: #d66f2c;
    }

    .class-energy-indicator:nth-child(7) {
      background-color: #cc232a;
    }

    .class-energy-indicator:nth-child(8) {
      background-color: #cc232a;
    }

    .class-energy-indicator:nth-child(9) {
      background-color: #cc232a;
    }

    .class-energy-indicator:nth-child(10) {
      background-color: #cc232a;
    }

    .footer-top-wrap {
      background-color: #004274;
    }

    .footer-bottom-wrap {
      background-color: #00335A;
    }

    .footer-top-wrap,
    .footer-top-wrap a,
    .footer-bottom-wrap,
    .footer-bottom-wrap a,
    .footer-top-wrap .property-item-widget .right-property-item-widget-wrap .item-amenities,
    .footer-top-wrap .property-item-widget .right-property-item-widget-wrap .item-price-wrap,
    .footer-top-wrap .blog-post-content-widget h4 a,
    .footer-top-wrap .blog-post-content-widget,
    .footer-top-wrap .form-tools .control,
    .footer-top-wrap .slick-dots li.slick-active button:before,
    .footer-top-wrap .slick-dots li button::before,
    .footer-top-wrap .widget ul:not(.item-amenities):not(.item-price-wrap):not(.contact-list):not(.dropdown-menu):not(.nav-tabs) li span {
      color: #ffffff;
    }

    .footer-top-wrap a:hover,
    .footer-bottom-wrap a:hover,
    .footer-top-wrap .blog-post-content-widget h4 a:hover {
      color: rgba(0, 174, 255, 1);
    }

    .houzez-osm-cluster {
      background-image: url(<?php echo base_url('houzez_assets/wp-content/themes/houzez/img/map/cluster-icon.png'); ?>);
      text-align: center;
      color: #fff;
      width: 48px;
      height: 48px;
      line-height: 48px;
    }

    .featured-property-item-widget .item-wrap-v3 .item-address {
      max-width: calc(100% - 40px);
    }
  </style>
  <link rel='stylesheet' id='elementor-icons-css' href='<?php echo base_url('houzez_assets/'); ?>wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='elementor-animations-css' href='<?php echo base_url('houzez_assets/'); ?>wp-content/plugins/elementor/assets/lib/animations/animations.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='elementor-frontend-legacy-css' href='<?php echo base_url('houzez_assets/'); ?>wp-content/plugins/elementor/assets/css/frontend-legacy.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='elementor-frontend-css' href='<?php echo base_url('houzez_assets/'); ?>wp-content/plugins/elementor/assets/css/frontend.min.css' type='text/css' media='all' />
  <style id='elementor-frontend-inline-css' type='text/css'>
    @font-face {
      font-family: eicons;
      src: url(<?php echo base_url('houzez_assets/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0'); ?>);
      src: url(<?php echo base_url('houzez_assets/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix'); ?>) format("embedded-opentype"), url(<?php echo base_url('houzez_assets/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0'); ?>) format("woff2"), url(<?php echo base_url('houzez_assets/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0'); ?>) format("woff"), url(<?php echo base_url('houzez_assets/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0'); ?>) format("truetype"), url(<?php echo base_url('houzez_assets/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon'); ?>) format("svg");
      font-weight: 400;
      font-style: normal
    }
  </style>
  <link rel='stylesheet' id='elementor-post-17100-css' href='<?php echo base_url('houzez_assets/'); ?>wp-content/uploads/elementor/css/post-17100.css' type='text/css' media='all' />
  <link rel='stylesheet' id='elementor-post-16753-css' href='<?php echo base_url('houzez_assets/'); ?>wp-content/uploads/elementor/css/post-16753.css' type='text/css' media='all' />
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic%7CLora:400&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic%7CLora:400&amp;display=swap" media="print" onload="this.media='all'"><noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic%7CLora:400&amp;display=swap" />
  </noscript>
  <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNoto+Serif+JP%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto' type='text/css' media='all' />
  <script type='text/javascript' src='<?php echo base_url('houzez_assets/'); ?>wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
  <script type='text/javascript' src='<?php echo base_url('houzez_assets/'); ?>wp-includes/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
  <script type='text/javascript' src='<?php echo base_url('houzez_assets/'); ?>wp-content/plugins/revslider/public/assets/js/rbtools.min.js' id='tp-tools-js'></script>
  <script type='text/javascript' src='<?php echo base_url('houzez_assets/'); ?>wp-content/plugins/revslider/public/assets/js/rs6.min.js' id='revmin-js'></script>
  <link rel="https://api.w.org/" href="wp-json/index.html" />
  <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/16753.html" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo base_url('houzez_assets/'); ?>/wp-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 5.7.2" />
  <link rel="canonical" href="index.html" />
  <link rel='shortlink' href='index.html' />
  <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed0c61.html?url=https%3A%2F%2Fdemo03.houzez.co%2F" />
  <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed40d9.html?url=https%3A%2F%2Fdemo03.houzez.co%2F&amp;format=xml" />
  <meta name="framework" content="Redux 4.1.26" /><!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url('houzez_assets/'); ?>wp-content/themes/houzez/img/favicon.png">
  <meta name="generator" content="Powered by Slider Revolution 6.4.11 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
  <script type="text/javascript">
    function setREVStartSize(e) {
      //window.requestAnimationFrame(function() {				 
      window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
      window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
      try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
          newh;
        pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
        e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
        if (e.layout === "fullscreen" || e.l === "fullscreen")
          newh = Math.max(e.mh, window.RSIH);
        else {
          e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
          for (var i in e.rl)
            if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
          e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
          e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
          for (var i in e.rl)
            if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

          var nl = new Array(e.rl.length),
            ix = 0,
            sl;
          e.tabw = e.tabhide >= pw ? 0 : e.tabw;
          e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
          e.tabh = e.tabhide >= pw ? 0 : e.tabh;
          e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
          for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
          sl = nl[0];
          for (var i in nl)
            if (sl > nl[i] && nl[i] > 0) {
              sl = nl[i];
              ix = i;
            }
          var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
          newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
        }
        if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
        document.getElementById(e.c).height = newh + "px";
        window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
      } catch (e) {
        console.log("Failure at Presize of Slider:" + e)
      }
      //});
    };
  </script>
</head>

<body class="<?php echo $body_class; ?> page-template page-template-template page-template-template-homepage page-template-templatetemplate-homepage-php page page-id-16753 transparent-no houzez-header-property_slider elementor-default elementor-kit-17100 elementor-page elementor-page-16753">