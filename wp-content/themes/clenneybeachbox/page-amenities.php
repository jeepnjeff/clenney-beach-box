<?php 
/*Template Name: Amenities Page */
?>


<?php get_header(); ?>

<?php
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<!-- Amenities -->
<!-- Title Section -->
<?php if (has_post_thumbnail()) {// check for feature image ?>
<!-- a) select element and set attributes --> 
<section class="amen-img"
  style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover" ;
  data-type="background" data-speed="2">
  <h1 class="page-title amen-header amen-title aligncenter">AMENITIES</h1>
</section>

<?php 
} else { //fallback image  ?>

<section class="amen-img" data-type="background" data-speed="2">
  <h1 class="page-title amen-header amen-title aligncenter">AMENITIES</h1>
</section>

<?php 
} ?>
<!-- End Title Section -->
<section class="wrapper">
  <div class="row no-gutter">
    <div class="col-sm-10 col-sm-offset-1 amen-section">

      <?php while (have_posts()) : the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile; //end of loop?>

      <?php $loop = new WP_Query(array('post_type' => 'Amenities', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

      <?php while ($loop->have_posts()) : $loop->the_post(); ?>

      <?php 
      $amenities_title = get_field('amenities_title');
      $amenities_icon = get_field('amenities_icon');
      $amenities_items = get_field('amenities_items');
      ?>
      <div class="col-sm-12">
        <section class="bottom-hr"></section>
      </div>
      <div class="subheader-box aligncenter">

        <img class="aligncenter amen-icon" src=<?php echo $amenities_icon; ?>>

        <h3 class="amen-subheader">
          <?php echo $amenities_title; ?>
        </h3>

      </div>

      <section>
        <?php the_content(); ?>
      </section>

      <?php endwhile; ?>

    </div>

  </div>

</section>


<?php get_footer(); ?>