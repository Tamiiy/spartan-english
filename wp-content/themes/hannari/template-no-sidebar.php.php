<?php 
/**
 * Template Name: Page: No Sidebar
 * 
 * @package Hannari 
 */
get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp pagesidebar innerpage nosidebar">
				    <div class="pagecontent">
						<?php get_template_part( 'content-page'); ?>
					</div>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
		</div>
<?php get_footer(); ?>