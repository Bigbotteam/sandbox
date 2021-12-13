<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<!-- /* Copy about.html content below this Do search and replace in VS Code and replace

'<?php echo get_stylesheet_directory_uri(); ?>' with '<?php echo get_stylesheet_directory_uri(); ?>' without the quotes and then push the updated code to Git*/ -->
<header class="pd-hero padding-big">
      <div class="content">
        <div class="pd-hero-text-wrap">
          <h1>
            Financial wellbeing and inclusion for individuals and partners.
          </h1>
          <p>
            We help you go the distance alone, and even further when you go
            together.
          </p>
        </div>
        <div class="img-wrap img-wrap-small">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-image-1.png" alt="hero" />
        </div>
      </div>
    </header>

    <section class="pd-about-journey">
      <div class="pd-about-journey-content">
        <h2>The journey before us</h2>
        <p>
          We aim to create simple, transparent, efficient,  and connected
          experiences that bring a spark to the typically mundane topic of
          money.  
        </p>
        <p>
          With an intense focus on the financial wellbeing of you and yours, we
          intend to show that it is possible for a company to win by taking a
          vested interest in your success.
        </p>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-sub-hero.png" alt="journey" />
      <img
        class="pd-about-journey-box"
        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-sub-hero.png"
        alt="journey"
      />
    </section>

    <section class="pd-about-values">
      <h2>Our guiding values.</h2>
      <h3>What drives us and what you can expect when you work with us.  </h3>
      <div class="pd-about-values-container">
        <div class="pd-about-value">
          <div class="pd-about-value-image-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-community.svg" alt="community" />
          </div>
          <h4>Community</h4>
          <p>We believe in going together.</p>
        </div>
        <div class="pd-about-value">
          <div class="pd-about-value-image-container">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-transparency.svg"
              alt="transparency"
            />
          </div>
          <h4>Transparency</h4>
          <p>We ace the sunshine test.</p>
        </div>
        <div class="pd-about-value">
          <div class="pd-about-value-image-container">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-reliability.svg"
              alt="reliability"
            />
          </div>
          <h4>Innovative</h4>
          <p>We always seek new ways.</p>
        </div>

        <div class="pd-about-value">
          <div class="pd-about-value-image-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-social.svg" alt="social impact" />
          </div>
          <h4>Excellence</h4>
          <p>We aim for brilliance.</p>
        </div>
      </div>
    </section>

    <!-- <section class="pd-about-teams">
      <h2>The Team</h2>
    
      <div class="pd-about-team-container">
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-1.jpg" alt="team member" />
          <h4>Obi Igwe</h4>
          <h5>Chief Executive Officer</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-2.jpg" alt="team member" />
          <h4>Emeka Awagu</h4>
          <h5>Chief Information Officer</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-3.jpg" alt="team member" />
          <h4>Ukela Michael</h4>
          <h5>Operations & Strategy</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-4.jpg" alt="team member" />
          <h4>Michael Daramola</h4>
          <h5>Finance</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-5.jpg" alt="team member" />
          <h4>Oluwafunminiyi Balogun</h4>
          <h5>Product</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-6.jpg" alt="team member" />
          <h4>Chidera Amuta</h4>
          <h5>Growth</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-7.jpg" alt="team member" />
          <h4>Samir Dikko</h4>
          <h5>Operations & Strategy</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-8.jpg" alt="team member" />
          <h4>Anthony Oparah</h4>
          <h5>Product</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-9.jpg" alt="team member" />
          <h4>Oyinlola Jimoh</h4>
          <h5>Product</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-10.jpg" alt="team member" />
          <h4>Taofeek Akintola</h4>
          <h5>Engineering</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-11.jpg" alt="team member" />
          <h4>Chukwukadibia Durugo</h4>
          <h5>Engineering</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-12.jpg" alt="team member" />
          <h4>Obianuju Igweonwu</h4>
          <h5>Engineering</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-13.jpg" alt="team member" />
          <h4>Chiebuka Anelechi</h4>
          <h5>Engineering</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-14.jpg" alt="team member" />
          <h4>Ifeoluwa Anjorin</h4>
          <h5>Engineering</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-15.jpg" alt="team member" />
          <h4>Abdulkabir Omotosho</h4>
          <h5>Engineering</h5>
        </div>
        <div class="pd-about-team">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-16.jpg" alt="team member" />
          <h4>Adedoyin Taiwo</h4>
          <h5>Engineering</h5>
        </div>
      </div>
    </section> -->

    <section class="pd-about-teams">
        <div class="inner">
          <h2>The Team</h2>
          <!--<h3>Meet the Vested Champions who make Vested what it is today.</h3>-->
         

          <div class="owl-carousel owl-theme">
            <div> 

              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-1.jpg" alt="team member" />
                <h4>Obi Igwe</h4>
                <h5>Chief Executive Officer</h5>
              </div>
              
            </div>
            <div> 

              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-2.jpg" alt="team member" />
                <h4>Emeka Awagu</h4>
                <h5>Chief Information Officer</h5>
              </div>
              
            </div>
            <div> 

              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-3.jpg" alt="team member" />
                <h4>Ukela Michael</h4>
                <h5>Operations & Strategy</h5>
              </div>
              
            </div>
            <div> 

              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-4.jpg" alt="team member" />
                <h4>Michael Daramola</h4>
                <h5>Finance</h5>
              </div>
              
            </div>
            <div> 
              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-5.jpg" alt="team member" />
                <h4>Oluwafunminiyi Balogun</h4>
                <h5>Product</h5>
              </div>
           </div>
            <div> 

              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-6.jpg" alt="team member" />
                <h4>Chidera Amuta</h4>
                <h5>Growth</h5>
              </div>
              
            </div>
            <div> 

              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-7.jpg" alt="team member" />
                <h4>Samir Dikko</h4>
                <h5>Operations & Strategy</h5>
              </div>
              
            </div>
            <div> 
              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-8.jpg" alt="team member" />
                <h4>Anthony Oparah</h4>
                <h5>Product</h5>
              </div>
              
            </div>
            <div> 

              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-9.jpg" alt="team member" />
                <h4>Oyinlola Jimoh</h4>
                <h5>Product</h5>
              </div>
              
            </div>
            <div> 
              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-10.jpg" alt="team member" />
                <h4>Taofeek Akintola</h4>
                <h5>Engineering</h5>
              </div>
              
            </div>
            <div>
              <div class="pd-about-team">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-11.jpg" alt="team member" />
                <h4>Chukwukadibia Durugo</h4>
                <h5>Engineering</h5>
              </div>
            </div>
            <div> 
                <div class="pd-about-team">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-12.jpg" alt="team member" />
                  <h4>Obianuju Igweonwu</h4>
                  <h5>Engineering</h5>
                </div>
           </div>

           <div> 
            <div class="pd-about-team">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-13.jpg" alt="team member" />
              <h4>Chiebuka Anelechi</h4>
              <h5>Engineering</h5>
            </div>
          </div>

          <div> 
            <div class="pd-about-team">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-14.jpg" alt="team member" />
              <h4>Ifeoluwa Anjorin</h4>
              <h5>Engineering</h5>
            </div>
          </div>

          <div> 
            <div class="pd-about-team">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-15.jpg" alt="team member" />
              <h4>Abdulkabir Omotosho</h4>
              <h5>Engineering</h5>
            </div>
          </div>

          <div> 
            <div class="pd-about-team">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-team-16.jpg" alt="team member" />
              <h4>Adedoyin Taiwo</h4>
              <h5>Engineering</h5>
            </div>
          </div>


          </div>
          

          
          






        </div>
      </section>

<?php get_footer(); ?>
