<?php
/**
 * @package Working_Papers
 */
?>

<header class="post-content">
	<h1 class="post-title"><?php the_title(); ?></h1>
	<p class="meta-details"><?php the_time( get_option( 'date_format' ) ); ?></p>
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