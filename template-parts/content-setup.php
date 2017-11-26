<div class="container ">
	<?php
		
		the_post_thumbnail('full', ['class' => 'img-fluid']);
	?>
		


	


	<!-- /* This is your post content. */ -->

	<?php the_content();?>
	

	<?php if( have_rows('setup') ):

 	// loop through the rows of data
    while ( have_rows('setup') ) : the_row(); ?>

    <section class="mediasetup"> 
    	
    	<div class="mediasetup__image">
            <?php $image = get_sub_field('setup_icon');

			//echo '<pre>';
			//print_r($image);
			//echo '</pre>';

            if( !empty($image) ): ?>

	        <img class="img_fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

           <?php endif; ?>
        </div>

        <div class="mediasetup__content">
	
	    	<h1 class="setup_title">
        	<?php the_sub_field('setup_title'); ?>
        	</h1>  

	   		<p class="bg_white">
       		<?php the_sub_field('setup_description'); ?>
       		</p>
       </div>
	
	</section>
   <?php
    endwhile;

else :

    // no rows found

endif;

?>
     


</div>