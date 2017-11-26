<?php
/**
 * Template Name: Setup
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

get_header(); ?>

<main class="background_image_setup">

	<div class="hero my">
    <img class="img-fluid hero__image" src="https://res.cloudinary.com/dx6e0lwrp/image/upload/v1511571016/light-1283795_1920_aologw.png">
    <h1 class="hero__headline pages_title_font">GET STARTED</h1>
  </div>


	<?php
	while ( have_posts() ) : the_post();

		/* Get content-page.php */
		get_template_part( 'template-parts/content', 'setup' );

		/* If comments are open or we have at least one comment, load up the comment template. */
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;
	?>


	

</main>

<?php

get_footer();