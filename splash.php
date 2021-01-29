<?php
/*
Template Name: Splashpage
*/

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="splashbox">

<div id="splashheader">Feminist<br />Culture<br />House</div>

<a href="http://www.feministculturehouse.org"><img id="bannerlogo" src="http://www.feministculturehouse.org/FCH.png"></a>

<div id="splashcontent"><?php the_content(); ?>

<div id="mailinglist">
<div class="splashjoin">Sign up for our mailing list</div>

<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
<form action="https://gmail.us20.list-manage.com/subscribe/post?u=ab3af42f3c21ed02a7a8e4321&amp;id=4ac5facd20" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">
<!--	<label for="mce-EMAIL">Email</label> -->
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
<input type="submit" value="Join" name="Join" id="mc-embedded-subscribe" class="button">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div> 
    <div style="position: absolute; left: -5000px;" aria-hidden="true">
    <input type="text" name="b_ab3af42f3c21ed02a7a8e4321_4ac5facd20" tabindex="-1" value=""></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->

</div>

</div><!--splashbox -->

<div id="mobilemailinglist">
<div class="splashjoin">Sign up for our mailing list</div>

<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
<form action="https://gmail.us20.list-manage.com/subscribe/post?u=ab3af42f3c21ed02a7a8e4321&amp;id=4ac5facd20" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group">
<!--	<label for="mce-EMAIL">Email</label> -->
<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
<input type="submit" value="Join" name="Join" id="mc-embedded-subscribe" class="button">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div> 
    <div style="position: absolute; left: -5000px;" aria-hidden="true">
    <input type="text" name="b_ab3af42f3c21ed02a7a8e4321_4ac5facd20" tabindex="-1" value=""></div>
    </div>
</form>
</div></div>
	</div>
<!-- splashbox -->

<div id="splashfooter">Feminist Culture House ry&nbsp;&nbsp;&nbsp;&middot;&nbsp;&nbsp;&nbsp;c/o POIMU, Kuortaneenkatu 13, 5.krs, 00520 Helsinki, Finland&nbsp;&nbsp;&nbsp;&middot;&nbsp;&nbsp;&nbsp;info@feministculturehouse.org</div>

<?php endwhile; else : ?>
<?php endif; ?>


<?php get_footer(); ?>
