<?php /* Template Name: 404*/ ?>
<?php get_header(); ?>
<section class="bg-404 d-flex">
	<div class="container-fluid align-self-center">
		<div class="row">
			<div class="col-md-6 offset-md-3 text-center">
				<i class="animated infinite pulse fas fa-surprise fa-5x"></i>
				<i class=""></i>
				<h3 class="pt-4">La página que estás buscando no existe.</h3><br>
				<a class="h3" href="<?php echo get_site_url(); ?>"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;&nbsp;Volver al home</a>
			</div>	
		</div>
	</div>
</section>
<?php get_footer(); ?>

