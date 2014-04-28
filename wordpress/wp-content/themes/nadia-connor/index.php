<?php
/**
 * @package WordPress
 * @subpackage Nadia_Connor
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article class="row">
	<div class="col-sm-2">
		<div class="spacer"></div>
	</div>
	<div class="col-sm-6">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1></a>
		<?php the_content(); ?>
	</div>

</article>
<?php 
endwhile;
endif;
?>

<?php
get_footer();
?>