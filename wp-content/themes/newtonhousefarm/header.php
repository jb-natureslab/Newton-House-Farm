	<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newtonhousefarm
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
	<?php wp_head(); ?>
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/css/fontawesome.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/css/brands.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/css/solid.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header class="background_green grunge shadow">
		<div>
			<p><a href="/">Newton House Farm</a></p>
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'newtonhousefarm' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav> 
			<div class="social">
				<a class="instagram" href="https://instagram.com/newtonhousefarm"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</header>
