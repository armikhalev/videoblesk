<?php get_header(); ?>
<div class="container">
<div class="row">
	<div class="box">

         <div class="col-lg-12 text-center">
         
         

	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		            <h1><?php the_title(); ?></h1>
		            <p><em><?php the_time('l, F jS, Y'); ?></em></p>

	              	<?php the_content(); ?>
                
	              	<hr>


	            <?php endwhile; else: ?>
		            <p><?php _e('Sorry, this page does not exist.'); ?></p>
	            <?php endif; ?>

        </div>

    </div><!---- .box --->
</div><!-- .row -->
</div>
<?php get_footer(); ?>
