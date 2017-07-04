<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

  <link href='http://fonts.googleapis.com/css?family=Average+Sans|Lora:400,700' rel='stylesheet' type='text/css'>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

  <?php wp_head(); ?>
</head>

<body class="body">
  <div class="header-menu">
    <div class="header-options">
      <a href="<?php echo get_option('home'); ?>/" class="header-option">Blog</a>
      <a href="http://twitter.com/ccmud" class="header-option">Twitter</a>
      <a href="http://blog.ciudadcapital.net/archivo/mapa-de-ciudad-capital/" class="header-option">Mapa</a>
      <a href="" class="header-option">Gu&iacute;a</a>
      <a href="http://blog.ciudadcapital.net/jugar/" class="header-option">Jugar</a>
      <a href="" class="header-option">Foro</a>
      <a href="" class="header-option">Asociaci&oacute;n</a>
    </div>
  </div>
  
  <div class="header-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/ciudadcapital_logo.png" alt="Ciudad Capital"/>
  </div>

  <!-- start page -->
  <div id="page">

