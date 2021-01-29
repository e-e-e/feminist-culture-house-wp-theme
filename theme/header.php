<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">	

<link href="https://fonts.googleapis.com/css?family=Yatra+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Palanquin:400,600&display=swap" rel="stylesheet">
<link href="http://www.feministculturehouse.org/mobilemenu.css" rel="stylesheet">	

<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
<script>(function(){document.documentElement.className='js'})();</script>

<!-- jQuery library (served from Google) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<?php if(is_page( '486' )){ ?>
   <style type="text/css">
    #navitems li.about a, #navitems li.about a:hover {
	border-bottom: 1px solid #000;
	color: #000;
	padding-bottom: 3px;
}
   </style>
<?php } ?>

<?php if(is_page( '375' )){ ?>
   <style type="text/css">
    #navitems li.presentations a, #navitems li.presentations a:hover {
	border-bottom: 1px solid #000;
	color: #000;
	padding-bottom: 3px;
}
   </style>
<?php } ?>

<?php if(has_category( 'books' )){ ?>
   <style type="text/css">
    #navitems li.books a, #navitems li.books a:hover, #navitems a.writing, #navitems a.writing:hover {
	border-bottom: 1px solid #000;
	color: #000;
	padding-bottom: 3px;
}
   </style>
<?php } ?>

<?php wp_head(); ?>

</head>

<body>




