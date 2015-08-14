<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Hannari
 */
?>
		<div id="footer">
			<div class="center">
			    <div class="column4">
					<?php if ( is_active_sidebar('footer-widget-area-1') ) : ?>
						<?php dynamic_sidebar('footer-widget-area-1'); ?>
					<?php else : ?>	
						<div class="widget">
							<h3><?php _e( 'Recent Posts', "hannari" ); ?></h3>
							<ul>
								<?php wp_get_archives('type=postbypost&limit=10'); ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
				<div class="column4">
					<?php if ( is_active_sidebar('footer-widget-area-2') ) : ?>
						<?php dynamic_sidebar('footer-widget-area-2'); ?>
					<?php else : ?>	
						<div class="widget">
							<h3><?php _e( 'Tag Cloud', "hannari" ); ?></h3>
							<ul>
								<?php wp_tag_cloud(); ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
				<div class="column4">
					<?php if ( is_active_sidebar('footer-widget-area-3') ) : ?>
						<?php dynamic_sidebar('footer-widget-area-3'); ?>
					<?php else : ?>	
						<div class="widget">
							<h3><?php _e( 'Pages', "hannari" ); ?></h3>
							<ul>
								<?php wp_list_pages('title_li='); ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
				<div class="column4">
					<?php if ( is_active_sidebar('footer-widget-area-4') ) : ?>
						<?php dynamic_sidebar('footer-widget-area-4'); ?>
					<?php else : ?>	
						<div class="widget">
							<h3><?php _e( 'Categories', "hannari" ); ?></h3>
							<ul>
								<?php wp_list_categories('title_li='); ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="copyright">
				<p class="center"><?php  echo esc_html(of_get_option('footer_text_left')); ?><span class="right"><?php do_action( 'hannari_display_credits' ); ?></span></p>
			</div> 
		</div> 
	</div> 
<?php wp_footer(); ?>		
</body>
</html>