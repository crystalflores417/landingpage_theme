<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package fourohfive
 */

?>

			<?php /* Close the #content div from header.php */ ?>
			</div>
		
			<footer class="footer">

				


				<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved. </p>
			</footer>

		<?php wp_footer(); ?>


		<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>
	</body>
</html>
