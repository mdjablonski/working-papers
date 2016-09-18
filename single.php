<?php
/**
 * @package Working_Papers
 */

get_header(); ?>

<?php get_template_part('normal-head', 'none' ); ?>

<main role="main">
	<p class="permalink"><?php echo get_permalink(); ?></p>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="post-content initial">
			<?php get_template_part( 'content', 'post' ); ?>
			<?php get_template_part('nav', 'none' ); ?>
			<?php comments_template(); ?> 
		</section>

	<?php endwhile; endif; ?>	

	</article>
</main>

<?php get_footer(); ?>