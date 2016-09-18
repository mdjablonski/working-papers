<?php

/*
Template Name: Search Page
*/

/**
 * @package Working_Papers
 */

get_header(); ?>

<?php get_template_part('normal-head', 'none' ); ?>

<main role="main">
	<header class="post-content">
		<h1 class="archive-title"><?php echo __( 'Search Results:', 'working-papers' ) ?> <?php echo get_search_query(); ?></h1>
	</header>

	<section>
		<section class="posts list">
		<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>

			<article class="list-element">
				<p class="category"><?php the_category( ', ' ); ?></p>
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
			</article>

		<?php endwhile; ?>

		</section>
	</section>

	<?php get_template_part('pagination', 'none' ); ?>

	<?php else : ?>

		<article class="list-element">
			<h2 class="post-title">
				<?php echo __( 'No posts found. Try a different search?', 'working-papers' ) ?>
			</h2>
		</article>

	<?php endif; ?>
</main>

<?php get_footer(); ?>