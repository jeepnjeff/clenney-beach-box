<?php 
$carousel_title	          =get_field('carousel_title');
$carousel_desc	          =get_field('carousel_description');
$carousel_button_text	    =get_field('carousel_button_text');
$carousel_button_link	    =get_field('carousel_button_link');
?>

<!--
-- 💪💪💪 CAROUSEL 💪💪💪💪💪💪💪💪💪💪💪💪💪💪💪💪💪
-->
<div class="row">
  <div class="col-sm-12">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">


      <div class="col-sm-6 col-sm-offset-3 carousel-text-box">
        <h1 class="carousel-heading">
          <?php echo($carousel_title); ?>
        </h1>

        <p class="carousel-paragraph">
          <?php echo($carousel_desc); ?>
        </p>
        <button type="button" data-toggle="modal" href="<?php echo ($carousel_button_link); ?>" class="btn btn-primary carousel-button aligncenter">
          <?php echo($carousel_button_text); ?> </button>
      </div>
      <!-- Wrapper for slides -->
      <?php  echo do_shortcode('[smartslider3 slider=2]');?>
    </div>
  </div>
</div>
<!--
-- 💪💪💪💪💪💪💪💪 END OF CAROUSEL 💪💪💪💪💪
-->