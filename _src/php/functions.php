<?php
add_action( 'after_setup_theme', 'starchenkov_setup' );
function starchenkov_setup() {
load_theme_textdomain( 'starchenkov-dev', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'align-wide' );
add_theme_support( 'customize-selective-refresh-widgets' );
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'generic' ) ) );
}
add_action( 'wp_enqueue_scripts', 'generic_load_scripts' );
function generic_load_scripts() {
wp_enqueue_style( 'starchenkov-dev-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'generic_footer_scripts' );
function generic_footer_scripts() {



/*
wp_register_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js' );
wp_enqueue_script( 'masonry' );

wp_register_script( 'wow', get_template_directory_uri() . '/js/wow.min.js' );
wp_enqueue_script( 'wow' );
*/




wp_register_script( 'starchenkov-dev-scripts', get_template_directory_uri() . '/js/scripts.js' );
wp_enqueue_script( 'starchenkov-dev-scripts' );




wp_register_script( 'starchenkov-dev-videos', get_template_directory_uri() . '/js/videos.js' );
wp_enqueue_script( 'starchenkov-dev-videos' );
wp_add_inline_script( 'starchenkov-dev-videos', 'jQuery(document).ready(function($){$("#wrapper").vids();});' );
}
add_filter( 'document_title_separator', 'generic_document_title_separator' );
function generic_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'generic_title' );
function generic_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_action( 'widgets_init', 'generic_widgets_init' );
function generic_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'generic' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'generic_pingback_header' );
function generic_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'generic_enqueue_comment_reply_script' );
function generic_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function generic_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url( comment_author_link() ); ?></li>
<?php
}
add_filter( 'get_comments_number', 'generic_comment_count', 0 );
add_filter( 'the_content_more_link', '__return_empty_string' ); 

function generic_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}



