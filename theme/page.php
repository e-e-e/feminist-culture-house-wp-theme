<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="thework">

<?php while ( have_posts() ) : the_post(); ?>

<?php
$media_items = get_attachments_by_media_tags('media_tags=diversity&numberposts=10&return_type=li&size=full');
if ($media_items) {
echo "<ul id=\"next\" class=\"cycle-slideshow\" data-cycle-fx=scrollHorz 
    data-cycle-timeout=\"0\" data-cycle-next=\"#next\"
    data-cycle-manual-speed=\"300\" data-cycle-slides=\"li\" data-cycle-swipe=true
     data-cycle-loader=\"wait\">". $media_items. "</ul>";
}
?>

</div><!-- thework -->
</div><!-- container -->





<?php endwhile; ?>

<?php get_footer(); ?>
