<?php get_header(); ?>
<main class="main-block__homepage homepage">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="homepage__content content">
<?php the_content(); ?>
</section>
<?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>