<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
  <meta charset="utf-8">


  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>
    <?php wp_title('&laquo;', true, 'right'); ?>
    <?php bloginfo('name'); ?>
  </title>

  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width">

  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "sal/sal.css") ?>


  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "style.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "scss/base.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "bower_components/swiper/dist/css/swiper.min.css") ?>
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "bower_components/aos/dist/aos.css") ?>

  <link rel="icon" type="image/png" href="<?=$GLOBALS["TEMPLATE_RELATIVE_URL"]?>images/favicon.png" />

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

  <div id="nav">
    <div class="inset">

      <a href="#close" class="icon-close"></a>

      <?php
      wp_nav_menu(['theme_location' => 'header']);
      ?>
    </div>
  </div>

  <div id="container" class="container-wrapper">
    <header role="banner">

      <a href="#nav" class="icon-menu"></a>

      <div class="content">
        <div class="logo">
          <a href="<?= get_bloginfo('url') ?>">
           <img src="<?= $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>images/logo.svg"
              alt="">
          </a>
        </div>
        <div class="menu-wrapper">
          <?php
          wp_nav_menu(['theme_location' => 'header']);
          ?>
        </div>
      </div>
    </header>