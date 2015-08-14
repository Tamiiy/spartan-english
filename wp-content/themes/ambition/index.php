<?php
/**
 * Displays the index section of the theme.
 *
 * @package Theme Horse
 * @subpackage Ambition
 * @since Ambition 1.0
 */
?>
<?php get_header(); ?>
	<?php
		/** 
		 * ambition_before_main_container hook
		 */
		do_action( 'ambition_before_main_container' );
		/** 
		 * ambition_main_container hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * ambition_content 10
		 */
		do_action( 'ambition_main_container' );
		/** 
		 * ambition_after_main_container hook
		 */
		do_action( 'ambition_after_main_container' );


<div id="primary" class="content-area">
   <div id="content" class="site-content" role="main">
　　　　　// ↓　ループの直前に query_posts を記述します！
　　　　　// 以下の例では、カテゴリーIDが3の記事を最大５件表示される例です。
        <?php query_posts("cat=1&showposts=1"); ?>  
 
        <?php
    if ( have_posts() ) :　// ←　ループスタート
        while ( have_posts() ) : the_post();　
                    get_template_part( 'content', get_post_format() );
            endwhile;
       twentyfourteen_paging_nav();
        else :
       get_template_part( 'content', 'none' );
        endif;　// ←　ループエンド
    ?>



 
    </div><!-- #content -->

</div><!-- #primary -->

 do_shortcode( '[display_flexslider]' ); ?>

	?>
<?php get_footer(); ?>