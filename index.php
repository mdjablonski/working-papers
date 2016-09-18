<?php
/**
 * @package Working_Papers
 */

get_header(); ?>

<aside class="post-content">

	<?php $the_last_post = new WP_Query( 'showposts=1&ignore_sticky_posts=1' ); ?>
	<?php while ($the_last_post -> have_posts()) : $the_last_post -> the_post(); ?>
	
		<p class="category"><?php the_category( ', ' ); ?></p>
		<h1 class="post-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h1>
		<p class="meta-details">
			<span class="author"><?php the_author_posts_link(); ?></span> | <?php the_date(); ?>
		</p>

	<?php endwhile;?>

</aside>

<?php get_template_part('normal-head', 'none' ); ?>

<main role="main">
	<section class="posts grid">

		<?php $the_query = new WP_Query( 'showposts=8&offset=1&ignore_sticky_posts=1' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			
			<?php get_template_part( 'loop', 'grid' ); ?>

		<?php endwhile;?>

	</section>
</main>

<?php get_footer(); ?>