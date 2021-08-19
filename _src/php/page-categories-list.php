<?php
/*
Template Name: Вывод категорий постов
*/
?>

<?php get_header(); ?>


<?php
// Настройки вывода категорий

$args = array(
  'orderby' => 'name', // сортируем по названиям
  'show_count' => 1, // показываем количество записей
  'pad_counts' => 1, // показываем количество записей у родителей
  'hierarchical' => 1, // древовидное представление
  'title_li' => '' // список без заголовка
); ?>



<main class="main-block__category-list category-list">

	<header class="category-list__header">
		<h3><?php the_title(); ?></h3>
	</header>

	<section class="category-list__content">

		<?php wp_list_categories( $args ); ?>

	</section>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>