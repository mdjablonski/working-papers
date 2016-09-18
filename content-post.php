<?php
/**
 * @package Working_Papers
 */
?>

<header class="post-content">
	<p class="category"><?php the_category( ', ' ); ?></p>
	<h1 class="post-title"><?php the_title(); ?></h1>
	<p class="meta-details desktop">
		<span class="author"><?php the_author_posts_link(); ?></span> | <?php the_time( get_option( 'date_format' ) ); ?>
	</p>
	<p class="meta-details mobile">
		<span class="author"><?php the_author_posts_link(); ?></span>
	</p>
	<p class="meta-details mobile"><?php the_time( get_option( 'date_format' ) ); ?></p>
</header>
<article>
	<?php the_content(); ?>
	
	<?php
		$arg = array(
			'before'           => '<p id="post-paged">',
			'after'            => '</p>',
			'link_before'      => '',
			'link_after'       => '',
			'next_or_number'   => 'next',
			'separator'        => ' ',
			'nextpagelink'     => __( 'Next page', 'working-papers' ),
			'previouspagelink' => __( 'Previous page', 'working-papers' ),
			'pagelink'         => '%',
			'echo'             => 1
		);

		wp_link_pages( $arg );
	?>

</article>
<aside>
	<?php the_tags( __( '<p class="tags">Tags: ', 'working-papers' ), ', ','</p>' ); ?>
	<p class="read"><?php echo __( 'Read More', 'working-papers' ) ?></p>
</aside>