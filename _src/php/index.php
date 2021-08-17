<?php get_header(); ?>

<div class="main-block wrapper">
<?php if ( is_front_page() ) {
	get_template_part( 'parts/homepage' );
	echo('homepage');
}
if ( is_category() ) {
	get_template_part( 'parts/category' );
	echo('category');
}
if (get_post_type() === 'post') {
	get_template_part( 'parts/page' );
	echo('page');
}
if (get_post_type() === 'page') {
	get_template_part( 'parts/single-post' );
	echo('single-post');
}
?>
</div>

<?php get_footer(); ?>