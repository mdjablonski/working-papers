<?php
/**
 * @package Working_Papers
 */

get_header(); ?>

<?php get_template_part( 'normal-head', 'none' ); ?>

<main role="main">

	<?php if ( have_posts() ) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

		<?php /* If this is a category archive */ if ( is_category() ) { ?>

			<header class="post-content">
				<h1 class="archive-title"><?php single_cat_title(); ?></h1>
			</header>
			<section>
				<section class="posts list">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop', 'archive' ); ?>
					<?php endwhile; ?>
				</section>
			</section>

		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

			<header class="post-content">
				<h1 class="archive-title">
					<?php echo __( 'Posts Tagged', 'working-papers' ); ?> &#8216;<?php single_tag_title(); ?>&#8217;
				</h1>
			</header>
			<section>
				<section class="posts list">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop', 'archive' ); ?>
					<?php endwhile; ?>
				</section>
			</section>

		<?php /* If this is a daily archive */ } elseif ( is_day() ) { ?>

			<header class="post-content">
				<h1 class="archive-title"><?php the_time( get_option( 'date_format' ) ); ?></h1>
			</header>
			<section>
				<section class="posts list">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop', 'archive' ); ?>
					<?php endwhile; ?>
				</section>
			</section>

		<?php /* If this is a monthly archive */ } elseif ( is_month() ) { ?>

			<header class="post-content">
				<h1 class="archive-title"><?php the_time( 'F, Y' ); ?></h1>
			</header>
			<section>
				<section class="posts list">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop', 'archive' ); ?>
					<?php endwhile; ?>
				</section>
			</section>

		<?php /* If this is a yearly archive */ } elseif ( is_year() ) { ?>

			<header class="post-content">
				<h1 class="archive-title"><?php the_time( 'Y' ); ?></h1>
			</header>
			<section>
				<section class="posts list">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop', 'archive' ); ?>
					<?php endwhile; ?>
				</section>
			</section>

		<?php /* If this is a author archive */ } elseif ( is_author() ) { ?>

		<?php $curauth = ( isset( $_GET[ 'author_name' ] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) ); ?>
			<header class="post-content">
				<h1 class="archive-title"><?php the_author(); ?></h1>
			</header>
			<section class="post-content">
				<article>
					<p class="author-desc"><?php echo $curauth->user_description; ?></p>
				</article>
			</section>
			<section class="posts list">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop', 'author' ); ?>
				<?php endwhile; ?>
			</section>

		<?php /* If this is a paged archive */ } elseif ( isset( $_GET[ 'paged' ] ) && !empty( $_GET[ 'paged' ] ) ) { ?>
		
			<header class="post-content">
				<h1 class="archive-title">
					<?php echo __( 'Blog Archives', 'working-papers' ); ?>
				</h1>
			</header>
			<section>
				<section class="posts list">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'loop', 'archive' ); ?>
					<?php endwhile; ?>
				</section>
			</section>
		
	<?php } ?>

	<?php get_template_part( 'pagination', 'none' ); ?>

	<?php else : ?>
		<header class="post-content">
			<h1 class="archive-title">
				<?php echo __( 'Nothing found', 'working-papers' ); ?>
			</h1>
		</header>
	<?php endif; ?>

</main>

<?php get_footer(); ?>