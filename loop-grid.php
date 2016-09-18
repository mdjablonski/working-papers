<?php
/**
 * @package Working_Papers
 */
?>

<article class="grid-element">
	<div class="inside">
		<!-- <p class="category"><?php the_category( ', ' ); ?></p> -->
		<h2 class="post-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<div class="author-and-date">
			<p class="author"><?php the_author_posts_link(); ?></span></p>
			<span> | </span>
			<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
		</div>
	</div>
</article>