<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
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
						    <li>
								<h2 class="center"><?php _e( 'Not found', 'hannari' ); ?></h2><br/>
								<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'hannari' ); ?></p>
                            <li>
                         </ul>
                      </div>						 
					<?php if(of_get_option('default_layout')=='right') { get_sidebar(); } ?>
				</div>
				<div class="clear">&nbsp;</div>
			</div> 
		</div> 
<?php get_footer(); ?>