<?php
/*
Template Name: Вывод категорий постов
*/
?>

<?php get_header(); ?>

<main class="main-block__category-list category-list">

	<header class="category-list__header">
		<h3><?php the_title(); ?></h3>
	</header>

	<section class="category-list__content">

<?php
$categories = get_categories(array(
	'orderby' => 'name',
	'order' => 'ASC'
));



// $meta_key = '_thumbnail_id';
// $attach_term_meta_key = 'img_term';


foreach( $categories as $category ){

$image_id = get_term_meta( $term_id, 'img_term' );
$image_url = wp_get_attachment_image_url( $image_id, 'thumbnail' );

echo '<img src="'. $image_url .'">';

echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
	echo '<p> Description:'. $category->description . '</p>';
	echo '<p> Post Count: '. $category->count . '</p>';
}
?>

	</section>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>