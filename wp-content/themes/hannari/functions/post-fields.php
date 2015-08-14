<?php
if ( ! function_exists( 'hannari_save_postdata' ) ) :
function hannari_save_postdata( $post_id ) { 
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;
	if (isset($_REQUEST['post_type']))  {
	  if ($_REQUEST['post_type']== 'page')  { 
		if (isset($_POST['new_sidebar']))  { 
			$new_sidebar = $_POST['new_sidebar']; 
			update_post_meta($post_id, 'new_sidebar', $new_sidebar);
		}
		if (isset($_POST['display_title_page']))  { 
		    $display_title_page = $_POST['display_title_page'];  
		    update_post_meta($post_id, 'display_title_page', $display_title_page);
		}
	}}
}
endif;
add_action('save_post', 'hannari_save_postdata'); 
if ( ! function_exists( 'hannari_new_sidebar_boxes' ) ) :
function hannari_new_sidebar_boxes() {
	add_meta_box( 'new_sidebar', 'Options Page', 'hannari_new_sidebar','page','side','high');
}
endif;
add_action('add_meta_boxes', 'hannari_new_sidebar_boxes' );

if ( ! function_exists( 'hannari_new_sidebar' ) ) :
function hannari_new_sidebar( $post ) {
	$new_sidebar = get_post_meta( $post->ID, 'new_sidebar', true);	
	$display_title_page = get_post_meta( $post->ID, 'display_title_page', true);
?>
	<p><strong><?php _e( 'Display Title Page', 'hannari' ); ?></strong></p>
	<select name="display_title_page" style="width:200px;">
			<option  value="0" <?php if($display_title_page==0) {echo 'selected';} ?> ><?php _e( 'Yes', 'hannari' ); ?></option>	
			<option  value="1" <?php if($display_title_page==1) {echo 'selected';} ?> ><?php _e( 'No', 'hannari' ); ?></option>
	</select>	
	<p><strong><?php _e( 'Select Sidebar', 'hannari' ); ?></strong></p>
	<select name="new_sidebar" style="width:200px;">
			<?php 
			global $wp_registered_sidebars;
			foreach($wp_registered_sidebars as $v){ 
			if($v['before_widget']<>'') {
			?>
			<option  value="<?php echo $v['id']; ?>" <?php if($new_sidebar==$v['id']) {echo 'selected';} ?> ><?php echo $v['name']; ?></option>	
			<?php
			}}		
			?>
			<option  value="1" <?php if($new_sidebar==1) {echo 'selected';} ?> ><?php _e( 'New Sidebar', 'hannari' ); ?></option>
	</select>
<?php
}
endif;
?>