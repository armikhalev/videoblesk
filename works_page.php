<?php /* Template Name: works_page */ ?>

<?php get_header(); ?>

<div class="container">
	<div class="row">

		<!-- Background image -->
		<div class="main_background">
			 <img src="http://localhost/wordpress/wp-content/uploads/photo/noche.jpg" alt="night background">
		</div>



					  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

								       <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2 videoWrap">

														<?php the_content(); ?>

    										</div>

					  <?php endwhile; else: ?>
					      <p><?php _e('Sorry, this page does not exist.'); ?></p>
					  <?php endif; ?>




	</div><!-- .row -->
</div>

<?php get_footer(); ?>
