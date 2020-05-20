 <?php
/**
 * Template Name: Blog Video Story
 * Template Post Type: post
 * Author: Paula Freitas Martinho
 
 */

get_header(); ?>

	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div id="content-wrap" class="container clr">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div id="primary" class="content-area clr">

			<?php do_action( 'ocean_before_content' ); ?>
			
				<?php if( is_active_sidebar( 'widgetized-page-before-content-widget-area' ) ) : ?>
	<aside class="widgetized-page-before-content-widget-area">
		<?php dynamic_sidebar( 'widgetized-page-before-content-widget-area' ); ?>
	</aside>
<?php endif; ?>
			

			<div id="content" class="site-content clr">

				<?php do_action( 'ocean_before_content_inner' ); ?>
				
			

				<?php
				// Elementor `single` location
				if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {

					// Start loop
					while ( have_posts() ) : the_post();

							// EDD Page
							if ( is_singular( 'download') ) {
								get_template_part( 'partials/edd/single' );
							}

							// Single Page
							elseif ( is_singular( 'page' ) ) {

								get_template_part( 'partials/page/layout' );

							}

							// Library post types
		    				elseif ( is_singular( 'oceanwp_library' )
		    						|| is_singular( 'elementor_library' ) ) {

		    					get_template_part( 'partials/library/layout' );

		    				}

							// All other post types.
							else {

		    					get_template_part( 'partials/single/layout', get_post_type() );

		  					}

					endwhile;

				} ?>
				
				<?php if( is_active_sidebar( 'widgetized-page-after-content-widget-area' ) ) : ?>
	<aside class="widgetized-page-after-content-widget-area">
		<?php dynamic_sidebar( 'widgetized-page-after-content-widget-area' ); ?>
	</aside>
<?php endif; ?>

				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>
