<?php
/*
Template Name: Вывод категорий постов
*/
?>

<?php get_header(); ?>


<?php

// Миниатюры категорий
// получаем ID термина на странице термина
$term_id = get_queried_object_id();

// получим ID картинки из метаполя термина
$image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );

// ссылка на полный размер картинки по ID вложения
$image_url = wp_get_attachment_image_url( $image_id, 'full' );

// выводим картинку на экран
echo '<img src="'. $image_url .'" alt="" />';

// Настройки вывода категорий
$args = array(
  'orderby' => 'name', // сортируем по названиям
  'show_count' => 1, // показываем количество записей
  'pad_counts' => 1, // показываем количество записей у родителей
  'hierarchical' => 1, // древовидное представление
  'title_li' => '' // список без заголовка
);

?>



<main class="main-block__category-list category-list">

	<header class="category-list__header">
		<h3><?php the_title(); ?></h3>
	</header>

	<section class="category-list__content">

		<?php wp_list_categories( $args, $image_url ); ?>

	</section>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>