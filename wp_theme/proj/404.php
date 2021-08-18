<?php get_header(); ?>
<main class="main-block__404 404">
<article class="post not-found">
<header class="header">
<h1 class="entry-title"><?php esc_html_e( 'Not Found', 'starchenkov-dev' ); ?></h1>
</header>
<div class="entry-content">
<p><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'starchenkov-dev' ); ?></p>
<?php get_search_form(); ?>
</div>
</article>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>