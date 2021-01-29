<?php
/*
Template Name: Work
*/

get_header(); ?>

<div id="insidecontainer">

<div id="rightcol">

<?php while ( have_posts() ) : the_post(); ?>

<?php
// vars
$tag = get_field('tag');
?>

	<script>
  	$(document).ready(function(){
  	$(".work").bxSlider({
		auto: false,
		autoControls: true,
		infiniteLoop: false,
		captions: true,
		pager: false
    });
	});
	</script>

<?php

// check if the repeater field has rows of data
if( have_rows('work_images') ):

 	echo "<ul class=\"work\">";


 	// loop through the rows of data
    while ( have_rows('work_images') ) : the_row();     
    
?>


<li>
<img src="<?php the_sub_field('workimage'); ?>">
<div class="caption"><?php the_sub_field('caption'); ?></div>
</li>

	
<?php    endwhile;
else :  // no rows found ?>



<?php endif; ?>

</ul><!-- tag -->

<?php endwhile; ?>

<br style="clear: both;">
</div><!-- rightcol -->
	

<br style="clear: both;">
</div><!-- insidecontainer -->







<?php get_footer(); ?>
