<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Hannari
 */
?>
<div class="sidebar">
<?php
if (is_page()) { 
	$new_sidebar = get_post_meta( get_the_ID(), 'new_sidebar', true);
	if($new_sidebar==1){ $sidebar_select = 'widget-area-'.get_the_ID(); } else if($new_sidebar=='') { $sidebar_select = 'sidebar-widget-area'; } else { $sidebar_select = $new_sidebar; }
} 
else {
 $sidebar_select = 'sidebar-widget-area';
}
?>
<?php if ( is_active_sidebar($sidebar_select) ) : ?>
    <?php dynamic_sidebar($sidebar_select); ?>
<?php else : ?>	
	<div class="widget">
		<h2><?php _e( 'Recent Posts', "hannari" ); ?></h2>
		<ul>
			<?php wp_get_archives('type=postbypost&limit=10'); ?>
		</ul>
	</div>
	<div class="widget">
		<h2><?php _e( 'Pages', "hannari" ); ?></h2>
		<ul>
			<?php wp_list_pages('title_li='); ?>
		</ul>
	</div>
	<div class="widget">
		<h2><?php _e( 'Tag Cloud', "hannari" ); ?></h2>
		<ul>
			<?php wp_tag_cloud(); ?>
		</ul>
	</div>
	<div class="widget">
		<h2><?php _e( 'Categories', "hannari" ); ?></h2>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
	</div>		
<?php endif; ?>
</div> 


