<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <!--Link to our style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
      
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
      
  </head>

  <body>

    <header>
      <a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a>
    </header>
