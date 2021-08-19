<?php get_header(); ?>
<?php

// Миниатюры категорий
// получаем ID термина на странице термина
$term_id = get_queried_object_id();

// получим ID картинки из метаполя термина
$image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );

// ссылка на полный размер картинки по ID вложения
$image_url = wp_get_attachment_image_url( $image_id, 'full' );

?>


<main class="main-block__category category">
<header class="category__header">
<h1 class="category__header__title"><?php single_term_title(); ?></h1>
<div class="category__header__image">
<?php echo '<img src="'. $image_url .'" alt="" />'; ?>
</div>
<div class="category__header__meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
</header>

<section class="category__posts content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
</section>

<?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>