<div class="container">
<?php
		
		the_post_thumbnail('full', ['class' => 'img-fluid']);
	?>
		




	<!-- /* This is your post content. */ -->

	

	<div class=" contact-container-blurb align-items-center align-self center ">
	<h1 class="p0 m5 learn_title"><?php the_field('contact_title'); ?></h1>
	

	<p  class="p0 m5 bg_white "><?php the_field('contact_blurb'); ?></p>

</div>
<div class="align-items-center   contact-container wpcf7 wpcf7-form gform_button">
	<?php the_content();?>
</div>
	
	

</div>