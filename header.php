<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php
  if ( ! function_exists( '_wp_render_title_tag' ) ) {
  function theme_slug_render_title() {
  ?>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php
  }
  add_action( 'wp_head', 'theme_slug_render_title' );
  }
  ?>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link href='//fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
  <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5504b0480506ea27" async="async"></script>
