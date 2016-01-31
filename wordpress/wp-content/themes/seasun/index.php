<?php
/**
 * The main template file.
 * @package SeaSun
 * @since SeaSun 1.0.0
*/
get_header(); ?>
<div id="wrapper-content">
  <div class="container">
  <div id="main-content">
    <section class="home-latest-posts<?php if ($seasun_options_db['seasun_post_entry_format'] != 'One Column') { ?> js-masonry<?php } ?>">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if ($seasun_options_db['seasun_post_entry_format'] != 'One Column') {
get_template_part( 'content', 'grid' ); } else {
get_template_part( 'content', 'archives' ); } ?>
<?php endwhile; endif; ?>
    </section>  
<?php seasun_content_nav( 'nav-below' ); ?> 
  </div>
<?php if ($seasun_options_db['seasun_display_sidebar_archives'] == 'Display') { ?>
<?php get_sidebar(); ?>
<?php } ?>
  </div>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>