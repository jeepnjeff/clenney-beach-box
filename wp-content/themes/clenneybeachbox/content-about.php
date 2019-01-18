<?php 
$carousel_title	          =get_field('carousel_title');
$carousel_desc	          =get_field('carousel_description');
$carousel_button_text	    =get_field('carousel_button_text');
$carousel_button_link	    =get_field('carousel_button_link');
$description_main_title	  =get_field('description_main_title');
$house_description_title	=get_field('house_description_title');
$house_description	      =get_field('house_description');
$location_title	          =get_field('location_title');
$location_description	    =get_field('location_description');
$turnkey_title	          =get_field('turnkey_title');
$turnkey_description	    =get_field('turnkey_description');
$rates_title	            =get_field('rates_title');
$rate_description	        =get_field('rate_description');
?>


<!--
-- 💪💪💪 ABOUT SECTION 💪💪💪💪💪💪💪💪💪💪💪💪
-->
<div id="about"></div>
<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <h2 class="about-header">
      <?php echo ($description_main_title); ?>
    </h2>

    <h3 class="about-subheader">
      <?php echo ($house_description_title); ?>
    </h3>
    <p class="about-text">
      <?php echo($house_description); ?>
    </p>

    <h3 class="about-subheader">
      <?php echo($location_title); ?>
    </h3>
    <p class="about-text">
      <?php echo($location_description); ?>

      <h3 class="about-subheader">
        <?php echo($turnkey_title); ?>
      </h3>
      <p class="about-text">
        <?php echo($turnkey_description); ?>
      </p>

      <h3 class="about-subheader"><?php echo($rates_title); ?></h3>
      <p><?php echo($rate_description); ?></p>
    </div>
</div>