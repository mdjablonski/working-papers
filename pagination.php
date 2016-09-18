<?php
/**
 * @package Working_Papers
 */
?>

<nav>
	<p id="post-paged">
		<?php $args = array(
			'prev_text'	=> __('Previous', 'working-papers'),
			'next_text'	=> __('Next', 'working-papers'),
		); ?>
		<?php echo paginate_links($args); ?>
	</p>
</nav>