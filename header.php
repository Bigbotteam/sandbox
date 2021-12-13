<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' ); ?>
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?> 
    <meta
      name="og:image" content="https://res.cloudinary.com/pethsdigital/image/upload/v1622059322/Vested/logo_trnzws.svg"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="og:type" content="website" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap"
      rel="stylesheet"
    />
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-201318144-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-201318144-1');
</script>

</head>
<body>
    <nav class="pd-navbar">
    <div class="nav_container">
      <div class="naves">
      <div class="logo">
            <a href="/"
              ><img class="imglog" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="logo"
            /></a>
        </div>

        <div class="nav_content">
          <ul class="">
            <li><a href="/about" class="aboutdse">About Us</a></li>
            <li><a href="/features" class="featuresdse">Features</a></li>
            <li><a href="/resources" class="resourcesdse">Resources</a></li>
            <li><a href="/contact" class="contactdse">Contact Us</a></li>
          </ul>

          <div class="faq">
            <a href="/faq" class="faqBox">
              <p>FAQs</p>
              <i class="fas fa-arrow-right"></i>
            </a>

            <a href="/terms" class="faqBox">
              <p>Terms & Conditions</p>
              <i class="fas fa-arrow-right"></i>
            </a>

          </div>

          <div class="appStore">
              <!-- <a href="https://play.google.com/store/apps/details?id=com.fsdhgroup.vested" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/playstore.svg" alt="icon" /></a>
              <a href="https://apps.apple.com/ng/app/vested/id1566839320" target="_blank"
                ><img
                  class="last-child"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/appstore.svg"
                  alt="icon"
              /></a> -->

              <a href="#subscribe"><button>Get Vested</button></a> 
            </div>
        </div>
      </div>
    </div>
    <div class="hamburger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>
	
	<?php
	// To fix the WSOD ish :).
//	if ( function_exists( 'hello_elementor_body_open' ) ) {
        hello_elementor_body_open();
//	}
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	// get_template_part( 'template-parts/header' );
}
