<?php get_header(); ?>
<div class="container">

<div class="row">
	<div class="box">

	    <div class="col-lg-12 text-center">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	            <h1><?php the_title(); ?></h1>	
	            <?php the_content(); ?>
	            
            <?php endwhile; else: ?>
	            <p><?php _e('Sorry, there are no posts.'); ?></p>
            <?php endif; ?>
    
        <div>
  
  
    </div><!---- .box --->
</div><!-- .row -->
</div><!-- .container --->
<?php get_footer(); ?>

