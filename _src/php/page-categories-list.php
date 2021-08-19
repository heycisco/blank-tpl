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
// Настройка вывода категорий
$categories = get_categories(array(
	'orderby' => 'name',
	'order' => 'ASC'
));
foreach( $categories as $category ){
$image_id = get_term_meta( $category->term_id, '_thumbnail_id', 1 );
// Размер миниатюр
$image_url = wp_get_attachment_image_url( $image_id, 'thumbnail' );

echo '<article class="category-list__content_article wrapper">';
echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Перейти в категорию %s" ), $category->name ) . '" ' . '></a>';
echo '<div class="category-image"><img src="' . $image_url . '"></div>';
echo '<h3 class="title">' . $category->name.'</h3>';
	echo '<div class="description">'. $category->description . '</div>';
	echo '<div class="post-counter">Записей: <span>'. $category->count . '</span></div></div>';
	echo '</div>';
}
?>

	</section>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>