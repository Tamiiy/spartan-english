<?php
/**
 * The template for displaying page.
 *
 * @package Hannari
 */
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php if(get_post_meta($post->ID, 'display_title_page', true)!=1) { ?>
		<h2><?php the_title(); ?></h2>
<?php } ?>	
<p><?php the_content(); ?></p>	
<p><?php posts_nav_link(); ?></p>
<div id="comments">
	<?php comments_template(); ?>
</div>								
<?php endwhile; ?>
<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'hannari' ) . '</span>', 'after' => '</div>' ) ); ?>
<?php else : ?>
		<h2 class="center"><?php _e( 'Not found', 'hannari' ); ?></h2>
		<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'hannari' ); ?></p>
<?php endif; ?>