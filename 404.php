<?php
/**
 * @package Working_Papers
 */

get_header(); ?>

<?php get_template_part( 'normal-head', 'none' ); ?>

<main role="main">
	<article>
		<header class="post-content">
			<h1 class="archive-title"><?php echo '<p>' . __( '404 page ', 'working-papers' ); ?></h1>
		</header>
	</article>
</main>

<?php get_footer(); ?>