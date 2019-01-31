<?php 
/*
Template Name: Gallery Page
 */
?>






<?php get_header(); ?>

<section>

   <div class="gallery-header-box">
      <h1 class="gallery-header-title galler-header-title-box aligncenter">HOUSE GALLERY</h1>
   </div>



   <div class="col-sm-10 col-sm-offset-1 gallery-body">

      <?php photo_gallery(1); ?>

   </div>
</section>

<?php get_footer(); ?>