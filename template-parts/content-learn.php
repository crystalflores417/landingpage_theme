
<div class="container ">
<!-- 
<?php
		
		the_post_thumbnail('full', ['class' => 'img-fluid']);
	?>
		 -->


	<!-- <?php the_title( '<h1>', '</h1>' ); ?> -->


	<!-- /* This is your post content. */ -->

	<?php the_content();?>


<?php if( have_rows('learn_more') ):

 	// loop through the rows of data
    while ( have_rows('learn_more') ) : the_row(); ?>

	<section class="media">
		<div class="media__image">
	    
			
       
	        <?php $image = get_sub_field('learn_image');
				//echo '<pre>';
				//print_r($image);
				//echo '</pre>';

				if( !empty($image) ): ?>

				<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		    <?php endif; ?>
		</div>
		
		<div class="media__content">
			<h1 class="learn_title">
	       <?php the_sub_field('learn_title'); ?>
	    </h1>

			<p class="bg_white">
		       <?php the_sub_field('learn_description'); ?>
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
