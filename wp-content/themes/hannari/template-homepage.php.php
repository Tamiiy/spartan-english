<?php 
/**
 * Template Name: Page: Home Page
 * 
 * @package Hannari 
 */
get_header(); ?>
		<div id="content">
			<div class="center">
			    <?php if (of_get_option('top_box_1_title')<>'' or of_get_option('top_box_2_title')<>'' or of_get_option('top_box_3_title')<>'' or of_get_option('top_box_4_title')<>'') : ?>
			    <div class="clear">&nbsp;</div>
				<div class="columnwrapp someitems">
				     <?php // Here is the set code for the Home page ?>
					 <?php if (of_get_option('top_box_1_title')<>'') : ?>
					 <div class="column4">
						<h5><a href="<?php  echo esc_url(of_get_option('top_box_1_link')); ?>"><?php  echo esc_html(of_get_option('top_box_1_title')); ?></a></h5>					 
						<?php if (of_get_option('top_box_1_image')<>'') : ?><div class="whiteblock"><img height="180" width="270" src="<?php  echo esc_url(of_get_option('top_box_1_image')); ?>" alt="" /></div><?php endif; ?>
						<p><?php  echo esc_html(of_get_option('top_box_1_content')); ?></p>
						<p><a class="readmorebtn" href="<?php  echo esc_url(of_get_option('top_box_1_link')); ?>"><?php  echo esc_html(of_get_option('top_box_1_text_button')); ?></a></p>
					</div>
					<?php endif; ?>
					<?php if (of_get_option('top_box_2_title')<>'') : ?>
					<div class="column4">
						<h5><a href="<?php  echo esc_url(of_get_option('top_box_2_link')); ?>"><?php  echo esc_html(of_get_option('top_box_2_title')); ?></a></h5>					
						<?php if (of_get_option('top_box_2_image')<>'') : ?><div class="whiteblock"><img height="180" width="270" src="<?php  echo esc_url(of_get_option('top_box_2_image')); ?>" alt="" /></div><?php endif; ?>
						<p><?php  echo esc_html(of_get_option('top_box_2_content')); ?></p>
						<p><a class="readmorebtn" href="<?php  echo esc_url(of_get_option('top_box_2_link')); ?>"><?php  echo esc_html(of_get_option('top_box_2_text_button')); ?></a></p>
					</div>
					<?php endif; ?>
					<?php if (of_get_option('top_box_3_title')<>'') : ?>
					<div class="column4">
					    <h5><a href="<?php  echo esc_url(of_get_option('top_box_3_link')); ?>"><?php  echo esc_html(of_get_option('top_box_3_title')); ?></a></h5>
						<?php if (of_get_option('top_box_3_image')<>'') : ?><div class="whiteblock"><img height="180" width="270" src="<?php  echo esc_url(of_get_option('top_box_3_image')); ?>" alt="" /></div><?php endif; ?>
						<p><?php  echo esc_html(of_get_option('top_box_3_content')); ?></p>
						<p><a class="readmorebtn" href="<?php  echo esc_url(of_get_option('top_box_3_link')); ?>"><?php  echo esc_html(of_get_option('top_box_3_text_button')); ?></a></p>
					</div>
					<?php endif; ?>
					<?php if (of_get_option('top_box_4_title')<>'') : ?>
					<div class="column4">
					    <h5><a href="<?php  echo esc_url(of_get_option('top_box_4_link')); ?>"><?php  echo esc_html(of_get_option('top_box_4_title')); ?></a></h5>
						<?php if (of_get_option('top_box_4_image')<>'') : ?><div class="whiteblock"><img height="180" width="270" src="<?php  echo esc_url(of_get_option('top_box_4_image')); ?>" alt="" /></div><?php endif; ?>
						<p><?php  echo esc_html(of_get_option('top_box_4_content')); ?></p>
						<p><a class="readmorebtn" href="<?php  echo esc_url(of_get_option('top_box_4_link')); ?>"><?php  echo esc_html(of_get_option('top_box_4_text_button')); ?></a></p>
					</div>
					<?php endif; ?>					
				</div> 
				<?php endif; ?>	
				<?php if (of_get_option('slogan_home_page')<>'') : ?>
				<div class="clear">&nbsp;</div>
				<div class="columnwrapp someitems homeslogan">
				    <h1><?php  echo of_get_option('slogan_home_page'); ?></h1>
				</div>
				<?php endif; ?>
				<?php if (of_get_option('footer_box_1_title')<>'' or of_get_option('footer_box_2_title')<>'' or of_get_option('footer_box_3_title')<>'' or of_get_option('footer_box_4_title')<>'') : ?>
				<div class="whitelist">
					<ul>
						<?php if (of_get_option('footer_box_1_title')<>'') : ?>
						<li>
							<?php if (of_get_option('footer_box_1_images')<>'') : ?><img class="listicon" src="<?php  echo esc_url(of_get_option('footer_box_1_images')); ?>" alt="" /><?php endif; ?>
							<p class="title"><a href="<?php  echo esc_url(of_get_option('footer_box_1_link')); ?>"><?php  echo esc_html(of_get_option('footer_box_1_title')); ?></a></p>
							<p class="italic"><?php  echo esc_html(of_get_option('footer_box_1_content')); ?></p>
						</li>
						<?php endif; ?>	
						<?php if (of_get_option('footer_box_2_title')<>'') : ?>
						<li>
							<?php if (of_get_option('footer_box_2_images')<>'') : ?><img class="listicon" src="<?php  echo esc_url(of_get_option('footer_box_2_images')); ?>" alt="" /><?php endif; ?>
							<p class="title"><a href="<?php  echo esc_url(of_get_option('footer_box_2_link')); ?>"><?php  echo esc_html(of_get_option('footer_box_2_title')); ?></a></p>
							<p class="italic"><?php  echo esc_html(of_get_option('footer_box_2_content')); ?></p>
						</li>
						<?php endif; ?>	
						<?php if (of_get_option('footer_box_1_title')<>'') : ?>
						<li>
							<?php if (of_get_option('footer_box_3_images')<>'') : ?><img class="listicon" src="<?php  echo esc_url(of_get_option('footer_box_3_images')); ?>" alt="" /><?php endif; ?>
							<p class="title"><a href="<?php  echo esc_url(of_get_option('footer_box_3_link')); ?>"><?php  echo esc_html(of_get_option('footer_box_3_title')); ?></a></p>
							<p class="italic"><?php  echo esc_html(of_get_option('footer_box_3_content')); ?></p>
						</li>
						<?php endif; ?>	
						<?php if (of_get_option('footer_box_4_title')<>'') : ?>
						<li>
							<?php if (of_get_option('footer_box_4_images')<>'') : ?><img class="listicon" src="<?php  echo esc_url(of_get_option('footer_box_4_images')); ?>" alt="" /><?php endif; ?>
							<p class="title"><a href="<?php  echo esc_url(of_get_option('footer_box_4_link')); ?>"><?php  echo esc_html(of_get_option('footer_box_4_title')); ?></a></p>
							<p class="italic"><?php  echo esc_html(of_get_option('footer_box_4_content')); ?></p>
						</li>
						<?php endif; ?>							
					</ul>
				</div> <!--  END whitelist  -->
				<?php endif; ?>	
				<div class="columnwrapp pagesidebar innerpage nosidebar">
				    <div class="pagecontent">
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<?php if(get_post_meta($post->ID, 'display_title_page', true)!=1) { ?>
								<h2><?php the_title(); ?></h2>
						<?php } ?>
								<p><?php the_content(); ?></p>								
						<?php endwhile; ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'hannari' ) . '</span>', 'after' => '</div>' ) ); ?>
						<?php else : ?>
								<h2 class="center"><?php _e( 'Not found', 'hannari' ); ?></h2>
								<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'hannari' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
		</div>
<?php get_footer(); ?>