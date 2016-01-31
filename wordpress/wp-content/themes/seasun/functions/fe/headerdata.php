<?php
/**
 * Headerdata of Theme options.
 * @package SeaSun
 * @since SeaSun 1.0.0
*/  

// additional js and css
if(	!is_admin()){
function seasun_fonts_include () {
global $seasun_options_db;
// Google Fonts
$bodyfont = $seasun_options_db['seasun_body_google_fonts'];
$headingfont = $seasun_options_db['seasun_headings_google_fonts'];
$descriptionfont = $seasun_options_db['seasun_description_google_fonts'];
$headlinefont = $seasun_options_db['seasun_headline_google_fonts'];
$postentryfont = $seasun_options_db['seasun_postentry_google_fonts'];
$sidebarfont = $seasun_options_db['seasun_sidebar_google_fonts'];
$menufont = $seasun_options_db['seasun_menu_google_fonts'];
$topmenufont = $seasun_options_db['seasun_top_menu_google_fonts'];

$fonturl = "//fonts.googleapis.com/css?family=";

$bodyfonturl = $fonturl.$bodyfont;
$headingfonturl = $fonturl.$headingfont;
$descriptionfonturl = $fonturl.$descriptionfont;
$headlinefonturl = $fonturl.$headlinefont;
$postentryfonturl = $fonturl.$postentryfont;
$sidebarfonturl = $fonturl.$sidebarfont;
$menufonturl = $fonturl.$menufont;
$topmenufonturl = $fonturl.$topmenufont;
	// Google Fonts
     if ($bodyfont != 'default' && $bodyfont != ''){
      wp_enqueue_style('seasun-google-font1', $bodyfonturl); 
		 }
     if ($headingfont != 'default' && $headingfont != ''){
      wp_enqueue_style('seasun-google-font2', $headingfonturl);
		 }
     if ($descriptionfont != 'default' && $descriptionfont != ''){
      wp_enqueue_style('seasun-google-font3', $descriptionfonturl);
		 }
     if ($headlinefont != 'default' && $headlinefont != ''){
      wp_enqueue_style('seasun-google-font4', $headlinefonturl); 
		 }
     if ($postentryfont != 'default' && $postentryfont != ''){
      wp_enqueue_style('seasun-google-font5', $postentryfonturl); 
		 }
     if ($sidebarfont != 'default' && $sidebarfont != ''){
      wp_enqueue_style('seasun-google-font6', $sidebarfonturl);
		 }
     if ($menufont != 'default' && $menufont != ''){
      wp_enqueue_style('seasun-google-font8', $menufonturl);
		 }
     if ($topmenufont != 'default' && $topmenufont != ''){
      wp_enqueue_style('seasun-google-font9', $topmenufonturl);
		 }
}
add_action( 'wp_enqueue_scripts', 'seasun_fonts_include' );
}

// additional js and css
function seasun_css_include () {
global $seasun_options_db;
	if ($seasun_options_db['seasun_css'] == 'Blue (default)' ){
			wp_enqueue_style('seasun-style', get_stylesheet_uri());
		}

		if ($seasun_options_db['seasun_css'] == 'Green' ){
			wp_enqueue_style('seasun-style-green', get_template_directory_uri().'/css/green.css');
		}

		if ($seasun_options_db['seasun_css'] == 'Red' ){
			wp_enqueue_style('seasun-style-red', get_template_directory_uri().'/css/red.css');
		}
}
add_action( 'wp_enqueue_scripts', 'seasun_css_include' );

// Layout Width - 960 px
function seasun_layout_width() {
global $seasun_options_db;
    $layout_width = $seasun_options_db['seasun_layout_width']; 
		if ($layout_width == 'Thin (960 px)') { ?>
		<?php _e('body .footer-signature-content, body .menu-panel, body .container, body #footer, body .header-content, body .header-description, body .top-navigation, body .content-headline { max-width: 960px; } body #main-content { width: 630px; } body .header-image .header-image-text-wrapper { width: 960px; } body .top-navigation ul { max-width: 790px; } body .content-headline h1 { width: 660px; } body .footer-widget-area { width: 300px; }', 'seasun'); ?>
<?php } 
}

// Display Sidebar on Posts/Pages
function seasun_display_sidebar() {
global $seasun_options_db;
    $display_sidebar = $seasun_options_db['seasun_display_sidebar']; 
		if ($display_sidebar == 'Hide') { ?>
		<?php _e('.single .container #main-content, .page .container #main-content, .error404 .container #main-content { width: 100%; }', 'seasun'); ?>
<?php } 
}

// Display Sidebar on Archives
function seasun_display_sidebar_archives() {
global $seasun_options_db;
    $display_sidebar_archives = $seasun_options_db['seasun_display_sidebar_archives']; 
		if ($display_sidebar_archives != 'Display') { ?>
		<?php _e('.blog .container #main-content, .archive .container #main-content, .search .container #main-content { width: 100%; } .archive #sidebar { display: none; }', 'seasun'); ?>
<?php } 
}

// Display Breadcrumb Navigation - headline width
function seasun_display_breadcrumb_headline() {
global $seasun_options_db;
    $display_breadcrumb = $seasun_options_db['seasun_display_breadcrumb']; 
		if ($display_breadcrumb == 'Hide' || !function_exists( 'bcn_display' )) { ?>
		<?php _e('#wrapper .content-headline h1 { width: 100%; }', 'seasun'); ?>
<?php } 
}

// Header Layout - Wide
function seasun_get_header_layout() {
global $seasun_options_db;
    $header_layout = $seasun_options_db['seasun_header_layout']; 
		if ($header_layout == 'Wide') { ?>
		<?php _e('#wrapper-header .site-title { text-align: left; } #wrapper-header .header-logo { margin-left: 0; } .rtl #wrapper-header .site-title { text-align: right; } @media screen and (max-width: 1000px) { html #wrapper #wrapper-header .header-content .site-title, html #wrapper #wrapper-header .header-content .header-logo { margin-bottom: 0 !important; } }', 'seasun'); ?>
<?php } 
}

// Title Box width
function seasun_get_page_title_width() {
global $seasun_options_db;
    $page_title_width = $seasun_options_db['seasun_page_title_width']; 
    $header_layout = $seasun_options_db['seasun_header_layout'];
		if ($page_title_width != '' && $header_layout == 'Wide') { ?>
		<?php _e('#wrapper #wrapper-header .title-box { width: ', 'seasun'); ?><?php echo $page_title_width ?><?php _e(';}', 'seasun'); ?>
<?php } 
}

// Menu Box width
function seasun_get_header_menu_width() {
global $seasun_options_db;
    $header_menu_width = $seasun_options_db['seasun_header_menu_width']; 
    $header_layout = $seasun_options_db['seasun_header_layout'];
		if ($header_menu_width != '' && $header_layout == 'Wide') { ?>
		<?php _e('#wrapper #wrapper-header .menu-box { width: ', 'seasun'); ?><?php echo $header_menu_width ?><?php _e(';}', 'seasun'); ?>
<?php } 
}

// Display Meta Box - post entries styling
function seasun_display_meta_post_entry() {
global $seasun_options_db;
    $display_meta_post_entry = $seasun_options_db['seasun_display_meta_post_entry']; 
		if ($display_meta_post_entry == 'Hide') { ?>
		<?php _e('#wrapper #main-content .post-entry .attachment-post-thumbnail { margin-bottom: 17px; } #wrapper #main-content .post-entry .post-entry-content { margin-bottom: -4px; }', 'seasun'); ?>
<?php } 
}

// FONTS
// Body font
function seasun_get_body_font() {
global $seasun_options_db;
    $bodyfont = $seasun_options_db['seasun_body_google_fonts'];
    if ($bodyfont != 'default' && $bodyfont != '') { ?>
    <?php _e('html body, #wrapper blockquote, #wrapper q, #wrapper .container #comments .comment, #wrapper .container #comments .comment time, #wrapper .container #commentform .form-allowed-tags, #wrapper .container #commentform p, #wrapper input, #wrapper button, #wrapper select, #wrapper #main-content .post-meta { font-family: "', 'seasun'); ?><?php echo $bodyfont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'seasun'); ?>
<?php } 
}

// Site title font
function seasun_get_headings_google_fonts() {
global $seasun_options_db;
    $headingfont = $seasun_options_db['seasun_headings_google_fonts']; 
		if ($headingfont != 'default' && $headingfont != '') { ?>
		<?php _e('#wrapper #wrapper-header .site-title { font-family: "', 'seasun'); ?><?php echo $headingfont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'seasun'); ?>
<?php } 
}

// Site description font
function seasun_get_description_font() {
global $seasun_options_db;
    $descriptionfont = $seasun_options_db['seasun_description_google_fonts'];
    if ($descriptionfont != 'default' && $descriptionfont != '') { ?>
    <?php _e('#wrapper #wrapper-header .header-description h1 {font-family: "', 'seasun'); ?><?php echo $descriptionfont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'seasun'); ?>
<?php } 
}

// Page/post headlines font
function seasun_get_headlines_font() {
global $seasun_options_db;
    $headlinefont = $seasun_options_db['seasun_headline_google_fonts'];
    if ($headlinefont != 'default' && $headlinefont != '') { ?>
		<?php _e('#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6, #wrapper .container .navigation .section-heading, #wrapper #comments .entry-headline, #wrapper .header-image .header-image-text .header-image-headline { font-family: "', 'seasun'); ?><?php echo $headlinefont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'seasun'); ?>
<?php } 
}

// Post entry font
function seasun_get_postentry_font() {
global $seasun_options_db;
    $postentryfont = $seasun_options_db['seasun_postentry_google_fonts']; 
		if ($postentryfont != 'default' && $postentryfont != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline, #wrapper #main-content .grid-entry .grid-entry-headline { font-family: "', 'seasun'); ?><?php echo $postentryfont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'seasun'); ?>
<?php } 
}

// Sidebar and Footer widget headlines font
function seasun_get_sidebar_widget_font() {
global $seasun_options_db;
    $sidebarfont = $seasun_options_db['seasun_sidebar_google_fonts'];
    if ($sidebarfont != 'default' && $sidebarfont != '') { ?>
		<?php _e('#wrapper .container #sidebar .sidebar-widget .sidebar-headline, #wrapper #wrapper-footer #footer .footer-widget .footer-headline { font-family: "', 'seasun'); ?><?php echo $sidebarfont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'seasun'); ?>
<?php } 
}

// Main Header menu font
function seasun_get_menu_font() {
global $seasun_options_db;
    $menufont = $seasun_options_db['seasun_menu_google_fonts']; 
		if ($menufont != 'default' && $menufont != '') { ?>
		<?php _e('#wrapper #wrapper-header .menu-box ul li a, #wrapper #wrapper-header .menu-panel ul li a { font-family: "', 'seasun'); ?><?php echo $menufont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'seasun'); ?>
<?php } 
}

// Top Header menu font
function seasun_get_top_menu_font() {
global $seasun_options_db;
    $topmenufont = $seasun_options_db['seasun_top_menu_google_fonts']; 
		if ($topmenufont != 'default' && $topmenufont != '') { ?>
		<?php _e('#wrapper #wrapper-header .top-navigation ul li a { font-family: "', 'seasun'); ?><?php echo $topmenufont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'seasun'); ?>
<?php } 
}

// User defined CSS.
function seasun_get_own_css() {
global $seasun_options_db;
    $own_css = $seasun_options_db['seasun_own_css']; 
		if ($own_css != '') { ?>
		<?php echo esc_attr($own_css); ?>
<?php } 
}

// Display custom CSS.
function seasun_custom_styles() { ?>
<?php echo ("<style type='text/css'>"); ?>
<?php seasun_get_own_css(); ?>
<?php seasun_layout_width(); ?>
<?php seasun_display_sidebar(); ?>
<?php seasun_display_sidebar_archives(); ?>
<?php seasun_display_breadcrumb_headline(); ?>
<?php seasun_get_header_layout(); ?>
<?php seasun_get_page_title_width(); ?>
<?php seasun_get_header_menu_width(); ?>
<?php seasun_display_meta_post_entry(); ?>
<?php seasun_get_body_font(); ?>
<?php seasun_get_headings_google_fonts(); ?>
<?php seasun_get_description_font(); ?>
<?php seasun_get_headlines_font(); ?>
<?php seasun_get_postentry_font(); ?>
<?php seasun_get_sidebar_widget_font(); ?>
<?php seasun_get_menu_font(); ?>
<?php seasun_get_top_menu_font(); ?>
<?php echo ("</style>"); ?>
<?php
} 
add_action('wp_enqueue_scripts', 'seasun_custom_styles');	?>