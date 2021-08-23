<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="single__article content">
<header class="single__article__header">
<h1>
<?php the_title(); ?>
</h1>
</header>
<div class="single__article__content">
<?php if ( has_post_thumbnail() ) : ?>
<a href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); echo esc_url( $src[0] ); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
<?php endif; ?>
<?php the_content(); ?>
</div>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>