<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta property="og:url" content="<?php the_permalink(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>" />
  <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
  <meta name="description" content="<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>" />
  <meta name="keywords" content=""/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <link rel="canonical" href="<?php the_permalink(); ?>"/>
  <?php wp_head(); ?>
  
</head>
<body <?php body_class(); ?> >
  <header></header>