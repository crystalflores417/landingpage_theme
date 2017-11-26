<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package fourohfive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body class="sticky-footer">

	

	<header id="masthead">


		<nav id="global-nav" class="global-nav sticky">
			<button  class="menu-toggle">
				<div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>

	
			</button>
			<?php
				/**
				 * This creates a menu area that we can edit via the dashboard.
				 * It's where our global nav will appear.
				 *
				 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
				 */
				wp_nav_menu( array(
					'theme_location' => 'global-nav',
					'menu_id'        => 'global-nav',
				) );
			?>
		</nav>
	</header>

	<?php
		/**
		 * Don't delete that div — it acts as an anchor for the skip-nav above.
		 * We close it at the start of our footer.php file.
		 */
	?>
	<div id="content">
