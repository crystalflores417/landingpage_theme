
<div class="container  ">
	<?php the_post_thumbnail('full', ['class' => 'img-fluid']);?>
		


	


	<!-- /* This is your post content. */ -->
	<?php the_content();?>
	
   
   

    <!-- /* This larger custom repeater fields */ -->

    

  
	<?php

      // check if the repeater field has rows of data
      if( have_rows('ourteam') ):

     	// loop through the rows of data
      while ( have_rows('ourteam') ) : the_row(); ?>

  <div class="team-up-container">
    <div class="team-up-content align-items-center align-self-center">
  <?php 
      $image = get_sub_field('team_image');

      //echo '<pre>';
      //print_r($image);
      //echo '</pre>';

       if( !empty($image) ): ?>

	     <img class="img_fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

  <?php endif; ?>

	 <h1 class="p_0 m5">
       <?php the_sub_field('team_title'); ?>
   </h1>
	

	<h2 class="m5">
       <?php the_sub_field('team_name'); ?>
   </h2>
	

	<p class="bg_white">
       <?php the_sub_field('team_bio'); ?>
 
   </p>
   
</div>
</div>
   <?php
    endwhile;

else :

    // no rows found

endif;

?>




<!-- /* This smaller custom repeater fields */ -->
	<?php

// check if the repeater field has rows of data
if( have_rows('our_team_lower') ):

 	// loop through the rows of data
    while ( have_rows('our_team_lower') ) : the_row(); ?>

       
     <div class="grid ">
      <div class="align-items-center">
       <?php 

$image = get_sub_field('image');

//echo '<pre>';
//print_r($image);
//echo '</pre>';

if( !empty($image) ): ?>

	<img  class="img_fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>


	<h2 class="m5">
       <?php the_sub_field('title'); ?>
    </h2>
	

	<h3 class="m5">
       <?php the_sub_field('name'); ?>
    </h3>
	

	<p class="bg_white">
       <?php the_sub_field('bio'); ?>
    </p>
   
  </div>
      
   <?php
    endwhile;

else :

    // no rows found

endif;

?>
</div>
</div>


