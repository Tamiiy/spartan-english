<?php 
/**
 * Template Name: Blog: Right Sidebar
 * 
 * @package Hannari 
 */
get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp pagesidebar innerpage right_sidebar">
			    	<div class="pagecontent listpage">
					    <?php get_template_part( 'content-post'); ?>
					</div>	
					<?php get_sidebar(); ?>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
		</div>
<?php get_footer(); ?>