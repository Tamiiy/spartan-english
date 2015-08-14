<?php
/**
 * The template for displaying search
 *
 * @package Hannari
 */
get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp pagesidebar innerpage <?php do_action( 'hannari_display_ps' ); ?>">
					 <?php if(of_get_option('default_layout')=='left') { get_sidebar(); } ?>
					 <div class="pagecontent listpage">
					     <ul>
						 <?php 
						 if (have_posts()) :
						 while (have_posts()) : the_post(); 
						 ?>
							 <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<h2><a href="<?php the_permalink() ?>"><?php if(get_the_title($post->ID)) { the_title(); } else { the_time(get_option( 'date_format' ));} ?></a></h2>
                                <?php if( has_post_thumbnail() ) { echo get_the_post_thumbnail( $post->ID, 'featured'); }?>
								<p><?php the_excerpt(); ?></p>
								<div class="subinfopost">
									<p class="posted">
										<span class="date_time"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( get_the_time() ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a></span> /
										<span class="postedby"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span> /
										<span class="commentcount"><?php comments_popup_link('<span class="icon comments"></span> No Comments', '<span class="icon comments"></span> 1 Comment', '<span class="icon comments"></span> % Comments', 'comment-link'); ?></span>
									</p>
									<a class="readmore" href="<?php the_permalink() ?>"><?php _e( 'Read More &#187', 'hannari' ); ?></a>
                                    <div class="clear"></div>									
								</div>
							 </li>	 
						 <?php endwhile; ?>
						 </ul>
						 <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
							<p class="pagination">
								<span class="prev"><?php next_posts_link(__('Previous Posts', 'hannari')) ?></span>
								<span class="next"><?php previous_posts_link(__('Next posts', 'hannari')) ?></span>
							</p>
						 <?php } ?>
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