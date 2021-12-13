<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

 <div class="pd-contact-header">
      <div class="pd-contact-cover">
        <div class="pd-contact-text-box">
          <p class="pd-contact-bigText">
            Get in touch with a Vested support representative.
          </p>
          <p class="pd-contact-smallText">We would love to hear from you.</p>
        </div>
        <div class="pd-contact-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact-header-img.png" alt="contact" />
        
        </div>
      </div>
    </div>

    <section class="pd-contact-form">
      <div class="pd-contact-form-cover">
        <div class="form">
          <div class="line"></div>
          <p>
            By completing and submitting this form, you will receive valuable
            tips and updates on new features and promotions from Vested.
          </p>
          <?php echo do_shortcode( '[contact-form-7 id="2768" title="Contact Form Page"]' ); ?>
        </div>
        <div class="bg">
        <div class="text">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pin.png" class="pin" alt="location">
          <p>UAC House (4th Floor), <br>
            1/5 Odunlami Street, Lagos.</p>
        </div>
        <div class="map-frame-wrap">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe
                  width="100%"
                  height="500"
                  id="gmap_canvas"
                  src="https://maps.google.com/maps?q=UAC%20House%20(4th%20Floor),%201/5%20Odunlami%20Street,%20Lagos.&t=&z=13&ie=UTF8&iwloc=&output=embed"
                  frameborder="0"
                  scrolling="no"
                  marginheight="0"
                  marginwidth="0"
                ></iframe
                ><a href="https://putlocker-is.org"></a><br /><style>
                  .mapouter {
                    position: relative;
                    text-align: right;
                    height: 500px;
                    width: 100%;
                  }</style
                ><a href="https://www.embedgooglemap.net"
                  >embedded google search</a
                ><style>
                  .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 100%;
                  }
                </style>
              </div>
          </div>
        </div>
      </div>
      </div>
    </section>

<?php get_footer(); ?>
