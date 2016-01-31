<?php 
/**
 * Library of Theme options functions.
 * @package SeaSun
 * @since SeaSun 1.0.0
*/ 

// Display Breadcrumb navigation
function seasun_get_breadcrumb() { 
global $seasun_options_db;
		if ($seasun_options_db['seasun_display_breadcrumb'] != 'Hide') { ?>
<?php if(function_exists( 'bcn_display' ) && !is_front_page()){ _e('<p class="breadcrumb-navigation">', 'seasun'); ?><?php bcn_display(); ?><?php _e('</p>', 'seasun');} ?>
<?php } 
} 

// Display featured images on single posts
function seasun_get_display_image_post() { 
global $seasun_options_db;
		if ($seasun_options_db['seasun_display_image_post'] == '' || $seasun_options_db['seasun_display_image_post'] == 'Display') { ?>
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php } 
}

// Display featured images on pages
function seasun_get_display_image_page() { 
global $seasun_options_db;
		if ($seasun_options_db['seasun_display_image_page'] == '' || $seasun_options_db['seasun_display_image_page'] == 'Display') { ?>
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php } 
} ?>