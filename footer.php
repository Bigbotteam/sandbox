<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
    <!-- <footer class="pd-footer">
    <div class="top-section">
      <div class="faq">
        <a href="/faq">FAQs</a>
        <a href="/terms">Terms & Conditions</a>
      </div>
      <div class="icons">
            <a href="https://web.facebook.com/Vested.ng" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.svg" alt="icon" /></a>
            <a href="https://www.youtube.com/channel/UCOs93IuHeiicJfeEyBgTuOg" target="_blank"><img class="ytimg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" alt="icon" /></a>
            <a href="https://www.instagram.com/vested.ng/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.svg" alt="icon" /></a>
            <a href="" class="last-child"
              ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.svg" alt="icon"
            /></a>
      </div>
      <div class="appStore">
        <a href="https://apps.apple.com/ng/app/vested/id1566839320" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/appstore.svg" alt="" /></a>
        <a href="https://play.google.com/store/apps/details?id=com.fsdhgroup.vested" target="_blank"><img class="last-child" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/playstore.svg" alt="icon" /></a>
      </div>

    </div>
    <div class="line"></div>
    <div class="third-section">
      <div class="cover">
        <p>
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          Vested • All right reserved
        </p>


      </div>
    </div>


    </div>
  </footer> -->

  <footer class="pd-footer">
    <div class="top-section" id="subscribe">
      <div class="text">
        <p>Ready to get started?
          Become Vested today.
        </p>
      </div>
      <div class="subscribe">
	<?php echo do_shortcode('[contact-form-7 id="2984" title="Newsletter"]'); ?>
      </div>
    </div>
    <div class="line"></div>
    <div class="third-section">
        <div class="cover">
            <!-- <p>©  <script>document.write(new Date().getFullYear())</script> Vested • All right reserved</p> -->
            <div class="faqT">
              <a class="faqp">FAQs</a>
              <a>Terms & Conditions</a>
            </div>
            <div class="icons">
            <a href="https://web.facebook.com/Vested.ng" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.svg" alt="icon" /></a>
            <a href="https://www.youtube.com/channel/UCOs93IuHeiicJfeEyBgTuOg" target="_blank"><img class="ytimg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" alt="icon" /></a>
            <a href="https://www.instagram.com/vested.ng/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.svg" alt="icon" /></a>
                <!-- <a href="" class="last-child"><img src="<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.svg" alt=""></a> -->
            </div>
            <p>©  <script>document.write(new Date().getFullYear())</script> Vested • All right reserved</p>
        </div>
        
    </div>

 
 
 
  </footer>


 <!-- Scripts to add -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/navbarcolor.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/code.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/home.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/owl.js"></script>


</body>
</html>
