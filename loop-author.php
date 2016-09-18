<?php
/**
 * @package Working_Papers
 */
?>

<article class="list-element">
	<h2 class="post-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>
	<div class="author-and-date">
		<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
		<span> | </span>
		<p class="category"><?php the_category( ', ' ); ?></p>
	</div>
</article>