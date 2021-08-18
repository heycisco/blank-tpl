<?php get_header(); ?>
<main class="main-block__category category">
<header class="category__header">
<h1 class="category__header__title"><?php single_term_title(); ?></h1>
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