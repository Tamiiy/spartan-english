<?php 
/**
 * Template Name: Page: Right Sidebar
 * 
 * @package Hannari 
 */
get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp pagesidebar innerpage right_sidebar">
			    	<div class="pagecontent">
						<?php get_template_part( 'content-page'); ?> 
					</div>
					<?php get_sidebar(); ?>
				</div>
				<div class="clear">&nbsp;</div>
			</div> 
		</div>
<?php get_footer(); ?>