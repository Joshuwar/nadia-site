<?php
/**
 * @package WordPress
 * @subpackage Nadia_Connor
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php echo get_bloginfo(); ?><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  	<!-- <div class="logo">
  		<a href="#">
  			<img src="images/nadia-logo.png" alt="Nadia Connor">
  		</a>
  	</div> -->
	<div class="container">
		<header class="row">
			<div class="container">
				<h1 class="col-sm-4 pull-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<nav>
					<div class="col-sm-1 pull-right"><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ) ?>">About</a></div>
					<div class="col-sm-2 pull-right"><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>">Contact</a></div>
				</nav>
			</div>
		</div>

	<div class="container articles">