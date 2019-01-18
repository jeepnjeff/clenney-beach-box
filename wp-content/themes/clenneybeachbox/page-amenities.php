<?php 
/*Template Name: Amenities Page */
 ?>


<?php get_header();
$thumbnail_url	  = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );

?>
<!-- Amenities -->
<?php if( has_post_thumbnail() ) {// check for feature image ?>

<section class="amen-img" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover" ;
  data-type="background" data-speed="2">
  <h1 class="page-title amen-header amen-title aligncenter">AMENITIES</h1>
</section>

<?php } else { //fallback image  ?>

<section class="amen-img amen-img-default" data-type="background" data-speed="2">
  <h1 class="page-title amen-header amen-title aligncenter">AMENITIES</h1>
</section>

<?php } ?>
<section class="amen-section">
<div class="row">

   <div class="col-sm-8 col-sm-offset-2">
    <hr>
    <h3 class="amen-subheader">HOUSE</h3>
    <div class="col-sm-4">
      <p class="amen-items">WIFI Internet</p>
      <p class="amen-items">2 Televisions</p>
      <p class="amen-items">Cable TV</p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">Children Welcome</p>
      <p class="amen-items">2 Washer and Dryer</p>
      <p class="amen-items">Parking</p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">Game Room</p>
    </div>

  </div>
</div>
<!-- Bathrooms -->
<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <hr>
    <h3 class="amen-subheader">BATHROOMS</h3>
    <div class="col-sm-4">
      <p class="amen-items">2 Bathrooms</p>
      <p class="amen-items">1 Half Bath</p>
      <p class="amen-items">Toilette Paper</p>
    </div>
  </div>
</div>
<!-- Location -->
<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <hr>
    <h3 class="amen-subheader">LOCATION TYPE</h3>
    <div class="col-sm-4">
      <p class="amen-items">Near Ocean</p>
      <p class="amen-items">Ocean Views</p>
    </div>
  </div>
</div>
<!-- General -->
<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <hr>
    <h3 class="amen-subheader">GENERAL</h3>
    <div class="col-sm-4">
      <p class="amen-items">Linens Provided</p>
      <p class="amen-items">Washing Machine</p>
      <p class="amen-items">Clothes Dryer</p>
      <p class="amen-items">2 Flights of stairs</p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">Parking</p>
      <p class="amen-items">Internet</p>
      <p class="amen-items">Towles Provided</p>
      <p class="amen-items">Built in 2013</p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">Iron And Board</p>
      <p class="amen-items">Hair Dryer</p>
      <p class="amen-items">Living Room</p>
    </div>
  </div>
</div>
<!-- Kitchen -->
<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <hr>
    <h3 class="amen-subheader">KITHCHEN</h3>
    <div class="col-sm-4">
      <p class="amen-items">Dish Washer</p>
      <p class="amen-items">Refrigerator</p>
      <p class="amen-items">Stove</p>
      <p class="amen-items">Paper Products</p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">Oven</p>
      <p class="amen-items">Microwave</p>
      <p class="amen-items">Coffee Maker & Coffee</p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">Toster</p>
      <p class="amen-items">Dishes & Utensiles</p>
      <p class="amen-items">Living Room</p>
    </div>
  </div>
</div>
<!-- Entertainment -->
<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <hr>
    <h3 class="amen-subheader">ENTERTAINMENT</h3>
    <div class="col-sm-4">
      <p class="amen-items">Living Room Television</p>
      <p class="amen-items">Game Room Television</p>
      <p class="amen-items">Cable TV</p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">DVD Player</p>
      <p class="amen-items">Books</p>
      <p class="amen-items">Games</p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">Ping Pong Table</p>
    </div>
  </div>
</div>
<!-- Outside -->
<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <hr>
    <h3 class="amen-subheader">OUTSIDE</h3>
    <div class="col-sm-4">
      <p class="amen-items">Balcony</p>
      <p class="amen-items">Roof Top Deck</p>
      <p class="amen-items">Outdoor BBQ</p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">Roof Top Gas Fire Pit </p>
      <p class="amen-items">Roof Top Refregerator</p>
      <p class="amen-items"> </p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items"> </p>
    </div>
  </div>
</div>
<!-- House Rules -->
<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <hr>
    <h3 class="amen-subheader">HOUSE RULES</h3>
    <div class="col-sm-4">
      <p class="amen-items">Check-in 3:00</p>
      <p class="amen-items">Check-out 10:00</p>
      <p class="amen-items"></p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">No Parties/Events</p>
      <p class="amen-items">No Smoking</p>
      <p class="amen-items">No Pets</p>
    </div>
    <div class="col-sm-4">
      <p class="amen-items">Minimun Age of Primary Renter: 25</p>
      <p class="amen-items">Max occupancy: 10</p>

    </div>

  </div>
  <div id="photos"></div>
</div>
<hr>
</section>

<?php get_footer(); ?>