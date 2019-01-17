<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clenney_Beach_Box
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="wp-content/themes/clenneybeachbox/assets/jquery-ui-1.12.1/jquery-ui.css">
		<script type="text/javascript" src="wp-content/themes/clenneybeachbox/assets/jquery-ui-1.12.1/external/jquery/jquery.js"></script>
		
    <script type="text/javascript" src="./wp-content/themes/clenneybeachbox/assets/jquery-ui-1.12.1/jquery-ui.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/lightbox/css/lightbox.css">

	<?php wp_head(); ?>

<!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'clenneybeachbox' ); ?></a>

 <!--
      -- 💪💪💪 HEADER 💪💪💪💪💪💪💪💪💪💪💪💪💪💪💪💪💪💪💪
      -->
			<header class="site-header" role="banner">

<!-- navbar wrapper================-->
<div class="navbar-wrapper">
		<!-- NavBar======================== -->
		<div class="navbar navbar-inverse navbar-fixed-top header-box" role="navigation">
				<div class="container">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" date-target=".navbar-collapse">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
								<a class="navbar-brand" href="#"><img class="logo-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/clenny_logo.png" alt="Clenney Box Logo"></a>
						</div>

<?php
	wp_nav_menu(array(
		'theme_location' => 'primary',
		'container' => 'nav',
		'container_class' => 'navbar-collapse collapse',
		'menu_class' => 'nav navbar-nav navbar-right header-nav'
	));
?>

				</div>
				<!--container-->
		</div>
		<!--END NAVBAR ================-->
</div>
<!--END NAVBAR WRAPPER-->
</header>
<!--
-- 💪💪💪💪💪💪💪💪💪💪 END OF HEADER 💪💪💪💪💪
-->