<?php /*Template Name: Inicio*/ ?>
<?php get_header(); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    
  <section id="usuarios">
    <?php get_template_part( 'components/layout/home' ); ?>
  </section>

  <?php endwhile; ?>
<?php get_footer(); ?>