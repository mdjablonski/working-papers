<?php
/**
 * @package Working_Papers
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
		<title><?php wp_title(); ?></title>

		<!-- Reset Style Sheet -->
		<link rel="stylesheet" type="text/css" media="print" href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/css/reset.css" />

		<!-- Theme Style Sheet -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/html5shiv.js"></script>
		  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/respond.min.js"></script>
		<![endif]-->


		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

		<?php wp_head(); ?>

	</head>
	<body role="document" <?php body_class(); ?>>
 