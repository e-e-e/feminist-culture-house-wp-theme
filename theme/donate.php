<?php
/*
Template Name: Donate
*/

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="splashbox">

<div id="splashheader">Donate</div>

<a href="http://www.feministculturehouse.org"><img id="bannerlogo" src="http://www.feministculturehouse.org/FCH.png"></a>
<div id="splashcontent"><?php the_content(); ?></div>

<br style="clear: both;" />
</div><!-- splashbox -->


<?php endwhile; else : ?>
<?php endif; ?>


<?php get_footer(); ?>
