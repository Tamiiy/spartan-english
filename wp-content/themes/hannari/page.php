<?php
/**
 * The template for displaying all pages.
 *
 * @package Hannari
 */
 get_header(); ?>
		<div id="content">
			<div class="center">
				<div class="columnwrapp pagesidebar innerpage <?php do_action( 'hannari_display_ps' ); ?>">
					 <?php if(of_get_option('default_layout')=='left') { get_sidebar(); } ?>
					 <div class="pagecontent">
						 <?php get_template_part( 'content-page'); ?> 
					 </div>
					 <?php if(of_get_option('default_layout')=='right') { get_sidebar(); } ?>
				</div> 
				<div class="clear">&nbsp;</div>
			</div> 
		</div>
<?php get_footer(); ?>