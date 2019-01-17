<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clenney_Beach_Box
 */

?>

<!-- .modal-profile -->
<div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title"></h3>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //.modal-profile -->

    <!-- End of Photo Gallery -->


    <!-- FOOTER
	================================================== -->
    <footer>



        <div>
            <div class="col-sm-3 footer-logo ">
                <p>
                    <a href="www.cleannybeachbox.com "><img class="aligncenter footer-logo " src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/clenny_logo.png" alt="Clenney Box Logo"></a>
                </p>
            </div>
            <!-- end col -->
            <div class="col-sm-6">
                <nav class="footer-nav-space">
                    <ul class="list-unstyled list-inline text-center">
                        <li class="active"><a class="footer-nav-dec" href="/">Home</a></li>
                        <li><a class="footer-nav-dec" href="#about">About</a></li>
                        <li><a class="footer-nav-dec" href="#amenities">Amenities</a></li>
                        <li><a class="footer-nav-dec" href="#photos">Photo Gallery</a></li>
                        <li><a class="footer-nav-dec" data-toggle="modal" data-target="#myModal">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- end col -->
            <div class="col-sm-3 footer-name">
                <p class="text-center">&copy; 2018 Jeff Pendergrass</p>
            </div>
            <!-- end col -->
        </div>
        <!-- container -->
    </footer>


    <!-- Start of Modal -->


    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">We'd Love to Hear From You</h3>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal col-sm-12 ajax" autocomplete="off" method="post" action="email.php" id="contact-form">

                        <div class="form-group"><label id="names">Names</label><input class="form-control" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text" name="names"
                                id="names"></div>

                        <div class="form-group"><label>Name</label><input class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text" name="name"
                                id='name'></div>

                        <div class="form-group"><label>Message</label><textarea class="form-control message required" placeholder="Your message here.." data-content="Please leave a message." data-placement="top" type="text" data-trigger="manual" name="message" id="message"></textarea></div>

                        <div class="form-group"><label>E-Mail</label><input class="form-control email required" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)"
                                type="text" name="email" id="email"></div>

                        <div class="form-group"><label>Phone</label><input class="form-control phone required" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text" name="phone" id="phone"></div>


                        <div class="form-group">
                            <label for="guest-select">Number of Guests:</label>
                            <select class="form-control" id="guest" name="guest">
                        <option value="">--Please choose an option--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        </select>
                        </div>



                        <div class="text-center">

                            <label for="start">Arrive:</label>
                            <input class="form-control cal-width cal-arrive" type="text" id="datepicker" name="arrive">


                            <label for="start">Leave:</label>
                            <input class="form-control cal-width" type="text" id="datepicker1" name="leave">
                        </div>


                        <div id="form-messages"></div>

                        <div class="form-group"><button name="submit" type="submit" id="submit" value="Send" class="btn btn-success pull-right">Send It!</button>
                            <h3 class="text-center text-danger hide" id="form-error">&nbsp; The form is not valid.</h3>
                            <h3 class="text-center text-success hide" id="form-success">&nbsp; Message Sent!</h3>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->

<?php wp_footer(); ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "></script>

<script src="<?php bloginfo ('template_directory'); ?>/assets/lightbox/js/lightbox.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>


</body>
</html>
