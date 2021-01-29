<?php
/*
Template Name: CV
*/

get_header(); ?>




<div id="rightcol">



<?php while ( have_posts() ) : the_post(); ?>


<div id="textcontent">
<?php the_content(); ?>
</div><!-- cv -->


	
<?php endwhile; ?>

</div><!-- rightcol -->

<?php get_footer(); ?>
