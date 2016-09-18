<?php
/**
 * @package Working_Papers
 */

get_header(); ?>

<?php get_template_part('normal-head', 'none' ); ?>

<main role="main">

	<article>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="post-content">
			<?php get_template_part( 'content', 'page' ); ?>
			<?php comments_template(); ?> 
		</section>

	<?php endwhile; endif; ?>	
		
	</article>

</main>

<?php get_footer(); ?>