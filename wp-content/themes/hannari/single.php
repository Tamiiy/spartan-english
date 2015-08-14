<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Hannari
 */
get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp pagesidebar innerpage <?php do_action( 'hannari_display_ps' ); ?>">
					 <?php if(of_get_option('default_layout')=='left') { get_sidebar(); } ?>
					 <div class="pagecontent">
					     <ul class="singlecontent">
						 <?php if (have_posts()) : ?>
						 <?php while (have_posts()) : the_post(); ?>
						    <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<h2><?php if(get_the_title($post->ID)) { the_title(); } else { the_time(get_option( 'date_format' ));} ?></h2>
                                <?php if( has_post_thumbnail() ) { echo get_the_post_thumbnail( $post->ID, 'featured'); }?>
								<p><?php the_content(); ?></p>
								<div class="subinfopost">
									<p class="posted">
									<span class="date_time"><?php the_time(get_option( 'date_format' )); ?></span> /
									<span class="postedby"><?php the_author(); ?></span> /
									<span class="commentcount"><?php comments_popup_link('<span class="icon comments"></span> 0', '<span class="icon comments"></span> 1', '<span class="icon comments"></span> %', 'comment-link'); ?></span>
									</p>
                                    <div class="clear"></div>									
								</div>
								<p class="meta_tags"><?php _e( 'Categories:', 'hannari' ); ?> <?php the_category(', '); ?></p>
								<p class="meta_tags"><?php the_tags(); ?></p>
								<?php 
								 wp_link_pages( array( 
											'before'            => '<div class="wp-pagenavi template_paginated">'.__( 'Pages:', 'hannari' ),
											'after'             => '</div>',
											'link_before'       => '<span class="current">',
											'link_after'        => '</span>',
											'pagelink'          => '%',
											'echo'              => 1 
								   ) );
								?>
								<p><?php posts_nav_link(); ?></p>
								<p class="pagination">
									<span class="prev"><?php previous_post_link('%link'); ?></span>
									<span class="next"><?php next_post_link('%link'); ?></span>
								</p>
								<div id="comments">
									<?php comments_template(); ?>
								</div>	
                            </li>								
						 <?php endwhile; ?>
						 </ul>
						 <?php else : ?>
									<h2 class="center"><?php _e( 'Not found', 'hannari' ); ?></h2>
									<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'hannari' ); ?></p>
						 <?php endif; ?>
					 </div>	
					 <?php if(of_get_option('default_layout')=='right') { get_sidebar(); } ?>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
		</div>
<?php get_footer(); ?>