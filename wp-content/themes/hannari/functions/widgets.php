<?php
if ( ! function_exists( 'hannari_widgets_init' ) ) :
function hannari_widgets_init() {
	register_sidebar(array(
		'name' => __( 'Sidebar Widget Area', "hannari"),
		'id' => 'sidebar-widget-area',
		'description' => __( 'The sidebar widget area', "hannari"),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));		
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 1', "hannari"),
		'id' => 'footer-widget-area-1',
		'description' => __( 'The footer widget area 1', "hannari"),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 2', "hannari"),
		'id' => 'footer-widget-area-2',
		'description' => __( 'The footer widget area 2', "hannari"),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 3', "hannari"),
		'id' => 'footer-widget-area-3',
		'description' => __( 'The footer widget area 3', "hannari"),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 4', "hannari"),
		'id' => 'footer-widget-area-4',
		'description' => __( 'The footer widget area 4', "hannari"),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	$list_pages = hannari_get_list_pages();
	while ( $list_pages->have_posts() ) {
		$list_pages->the_post();
		$new_sidebar = get_post_meta( get_the_ID(), 'new_sidebar', true);
		if($new_sidebar==1) {
			register_sidebar(array(
				'name' => __( 'Sidebar for Page '.get_the_title(), "hannari"),
				'id' => 'widget-area-'.get_the_ID(),
				'description' => __( 'The pages widget area', "hannari"),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>'
			));		
		}
	}
	wp_reset_postdata();	
}
endif;
add_action( 'widgets_init', 'hannari_widgets_init' );
?>