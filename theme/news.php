<?php
/*
Template Name: News
*/

get_header(); ?>



	
<div id="textcontent" class="newspage">		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div><!-- textcontent -->








<?php get_footer(); ?>
