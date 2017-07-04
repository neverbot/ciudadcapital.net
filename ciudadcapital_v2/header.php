<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0">
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

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

    <div class="header-dropdown">
      <div class="header-button" onclick="toggleMenu();">☰</div>
      <div class="header-dropdown-menu" id="header-dropdown-menu">
      <ul>
        <a href="<?php echo get_option('home'); ?>/"><li>Blog</li></a>
        <a href="http://twitter.com/ccmud"><li>Twitter</li></a>
        <a href="http://blog.ciudadcapital.net/archivo/mapa-de-ciudad-capital/"><li>Mapa</li></a>
        <a href=""><li>Gu&iacute;a</li></a>
        <a href="http://blog.ciudadcapital.net/jugar/"><li>Jugar</li></a>
        <a href=""><li>Foro</li></a>
        <a href=""><li>Asociaci&oacute;n</li></a>
      </ul>
      </div>
      <script type="text/javascript">
        function toggleMenu() {
          var elem = document.getElementById("header-dropdown-menu");

          console.log(elem.style.visibility);
          if (elem.style.visibility === 'visible') {
            elem.style.visibility = 'hidden';
            elem.style.display = 'none';
          }
          else {
            elem.style.visibility = 'visible';
            elem.style.display = 'block';
          }
        }
      </script>
    </div>
  </div>
  
  <div class="header-logo">
    <a href="<?php echo get_option('home'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/ciudadcapital_logo.png" alt="Ciudad Capital"/></a>
  </div>

  <!-- start page -->
  <div id="page">

