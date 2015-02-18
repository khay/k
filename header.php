<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="pragma" content="no-cache" /> 
  <meta http-equiv="content-script-type" content="text/javascript" />
  <meta http-equiv="content-style-type" content="text/css" />
  <meta name="robots" content="INDEX,FOLLOW" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="When feels bored, I wrote here. Not much active, and random stuffs. Love foods, games and a bookworm." />
  <meta name="keywords" content="k, khay, blog" />
  <title>
    <?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title( ' | ', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
      echo " | $site_description";

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
      echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
    ?>
    
  </title>
  
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico"> 
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/normalize.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>">

  <?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
      wp_enqueue_script( 'comment-reply' );

    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
  ?>

</head>
<body>
  <div class="container">
