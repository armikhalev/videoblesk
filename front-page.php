
<?php get_header(); ?>

<div class="container">
<div class="row">
	<div class="box">

	    <div class="col-lg-12 text-center">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
</div>
</div>
</div>

<?php get_footer(); ?>