<?php

/**
 Template Name: Home Page
 */


//  Advanced Custom Fields
$carousel_title = get_field('carousel_title');
$carousel_desc = get_field('carousel_description');
$carousel_button_text = get_field('carousel_button_text');
$carousel_button_link = get_field('carousel_button_link');
$description_main_title = get_field('description_main_title');
$house_description_title = get_field('house_description_title');
$house_description = get_field('house_description');
$location_title = get_field('location_title');
$location_description = get_field('location_description');
$turnkey_title = get_field('turnkey_title');
$turnkey_description = get_field('turnkey_description');
$rates_title = get_field('rates_title');
$rate_description = get_field('rate_description');

get_header(); ?>

<?php get_template_part('content-carousel'); ?>
<?php get_template_part('content-about'); ?>


<?php get_footer(); ?>