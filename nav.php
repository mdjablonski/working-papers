<?php
/**
 * @package Working_Papers
 */
?>

<nav class="posts grid">
	<?php $prev_post = get_previous_post(); if (!empty( $prev_post )): { ?>
		<article class="grid-element">
			<a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="link-block">
				<div class="link-inside">
					<h2 class="post-title">
						<?php echo $prev_post->post_title; ?>
					</h2>
					<div class="author-and-date">

						<?php $author_id=$prev_post->post_author; ?>

						<p class="author"><?php echo get_the_author_meta( 'display_name' , $author_id ); ?></span></p>
						<span> | </span>
						<p class="date"><?php $df = get_option('date_format'); echo $pfx_date = get_the_date( $df, $prev_post ); ?></p>
					</div>
				</div>
			</a>
		</article>
	<?php } ?>
	<?php else : ?>
		<article class="grid-element-empty"></article>
	<?php endif; ?>

	<?php $next_post = get_next_post(); if (!empty( $next_post )): { ?>
		<article class="grid-element">
			<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="link-block">
				<div class="link-inside">
					<h2 class="post-title">
						<?php echo $next_post->post_title; ?>
					</h2>
					<div class="author-and-date">

						<?php $author_id=$next_post->post_author; ?>

						<p class="author"><?php echo the_author_meta( 'display_name' , $author_id ); ?></span></p>
						<span> | </span>
						<p class="date"><?php $df = get_option('date_format'); echo $pfx_date = get_the_date( $df, $next_post ); ?></p>
					</div>
				</div>
			</a>
		</article>
	<?php } ?>
	<?php else : ?>

		<article class="grid-element-empty">
			<a href="" class="link-block">
				<div class="link-inside"></div>
			</a>
		</article>

	<?php endif; ?>
</nav>
