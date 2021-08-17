<article id="post-<?php the_ID(); ?>" class="category__posts__article wrapper" <?php post_class(); ?>>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>
<h3 class="entry-title"><?php the_title(); ?></h3>
<?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php the_excerpt(); ?>
</article>