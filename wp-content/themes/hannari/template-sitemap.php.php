<?php 
/**
 * Template Name: Page: Sitemap
 * 
 * @package Hannari 
 */
get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp pagesidebar innerpage nosidebar">
					 <div class="pagecontent">
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<?php if(get_post_meta($post->ID, 'display_title_page', true)!=1) { ?>
								<h2><?php the_title(); ?></h2>
						<?php } ?>
								<h3><?php _e( 'Pages', "hannari"); ?></h3>
								<ul><?php wp_list_pages('title_li='); ?></ul>
								<h3><?php _e( 'Posts', "hannari" ); ?></h3>
								<ul>
								<?php
									$lastposts = get_posts('numberposts=-1');
									foreach($lastposts as $post) :
								?>
									<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
								<?php endforeach; ?>
								</ul>
								<h3><?php _e( 'Categories', "hannari" ); ?></h3>
								<ul><?php wp_list_categories('title_li='); ?></ul>
						<?php endwhile; ?>
						<?php else : ?>
									<h2 class="center"><?php _e( 'Not found', 'hannari' ); ?></h2>
									<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'hannari' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
		</div>
<?php get_footer(); ?>