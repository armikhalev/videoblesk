<?php /* Template Name: contact_page */ ?>

<?php get_header(); ?>
<div class="container">
<div class="row">

        <!-- Background image -->
        <div class="main_background">
           <img src="http://localhost/wordpress/wp-content/uploads/photo/noche.jpg" alt="night background">
        </div>

        <div class="col-sm-offset-2 col-lg-8 col-sm-offset-2 text-center contactWrap">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; else: ?>
          <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>


</div><!-- .row -->
</div>

<?php get_footer(); ?>
