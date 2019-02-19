<?php 
/*
Template Name: Gallery Page
 */
?>






<?php get_header(); ?>

<section  class="wrapper">
   <div class="gallery-header-box no-gutters">
      <h1 class="blog-header-title-box" data-text="[PHOTO_GALLERY]">[PHOTO_GALLERY]</h1>
   </div>
   <div class="row no-gutter">
   <div class="col-sm-10 col-sm-offset-1 gallery-body">

      <?php photo_gallery(1); ?>

   </div>
</section>

<?php get_footer(); ?>