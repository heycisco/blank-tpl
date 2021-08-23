<?php get_header(); ?>
<main class="content" role="main">
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', 'starchenkov-dev' ), get_search_query() ); ?></h1>
</header>
<section>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article class="post no-results not-found">
<header class="header">
<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'starchenkov-dev' ); ?></h1>
</header>
<div class="entry-content">
<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'starchenkov-dev' ); ?></p>
<?php get_search_form(); ?>
</div>
</article>
</section>
<?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>