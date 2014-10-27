<?php
/**
 * @package WordPress
 * @subpackage Nadia_Connor
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<article class="row">
	<div class="col-sm-2 tags-sidebar">
		<div class="spacer"></div>
		<?php 
		if ( is_single() ) {
			the_tags('','');
		} ?>
		<br class="clear">
	</div>
	<div class="col-sm-6">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1></a>
		<?php 
		$more_link_text = '[Continue Reading]';
		the_content($more_link_text); 
		?>
	</div>

</article>
<?php 
endwhile;
endif;
?>
<div class="row">
	<div class="col-sm-6 col-sm-offset-2">
		<?php
		if ( function_exists('vb_pagination') ) {
			vb_pagination();
		}
		?>
	</div>	
</div>

<?php
get_footer();
?>