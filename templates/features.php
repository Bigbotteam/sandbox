<?php
/* Template Name: Features */
?>

<?php get_header(); ?>

<!-- /* Copy features.html content below this Do search and replace in VS Code and replace

'<?php echo get_stylesheet_directory_uri(); ?>/assets' with '<?php echo get_stylesheet_directory_uri(); ?>' without the quotes and then push the updated code to Git. 

Also add the features.js src to end of the code but before the php get_footer*/ -->

<section class="pd-features-hero">
      <div class="pd-features-hero-container">
        <div class="pd-features-hero-content">
          <h1>
            Experience individual and joint wealth management options.
          </h1>
          <h3>
            We put the power in your hands. Choose to go solo or together.
          </h3>
        </div>
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/features-hero.png"
          alt="feature"
          id="feature-img"
        />
      </div>
    </section>

    <section class="pd-features-list">
      <div class="pd-features-feature">
        <div class="pd-features-feature-content">
          <h2>Save</h2>
          <p>
            Automate your personal or joint savings and reduce financial stress
            by saving towards short or long-term goals.
          </p>
          <div class="pd-features-feature-items">
            <div class="pd-features-feature-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/features-selected.svg" alt="" />
              <p>
                Save as a lifestyle – cultivate the habit of saving daily,
                monthly, or quarterly.
              </p>
            </div>
            <div class="pd-features-feature-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/features-selected.svg" alt="" />
              <p>
                Save as towards a goal – plan towards a vacation, your rent, a
                new car, retirement, or fun activities.
              </p>
            </div>
          </div>
        </div>
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature-0.png"
          alt="Save feature"
        />
      </div>

      <div class="pd-features-feature">
        <div class="pd-features-feature-content">
          <h2>Invest</h2>
          <p>
            Simplify your personal or joint investment by accessing a curated
            set of investment opportunities.
          </p>
          <div class="pd-features-feature-items">
            <div class="pd-features-feature-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/features-selected.svg" alt="" />
              <p>
                Create a portfolio – diversify your investments by selecting
                from a variety of mutual funds.
              </p>
            </div>
            <div class="pd-features-feature-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/features-selected.svg" alt="" />
              <p>
                Grow your portfolio – add more funds to your portfolio to
                compound your interest.
              </p>
            </div>
          </div>
        </div>
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature-1.png"
          alt="Invest feature"
        />
      </div>

      <div class="pd-features-feature">
        <div class="pd-features-feature-content">
          <h2>Transact</h2>
          <p>
            Schedule your bills payments and make recurring funds transfers from
            your Vested account.
          </p>
          <div class="pd-features-feature-items">
            <div class="pd-features-feature-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/features-selected.svg" alt="" />
              <p>
                Make bill payments – pay utility bills to a variety of vendords
                instantly and conveniently.
              </p>
            </div>
            <div class="pd-features-feature-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/features-selected.svg" alt="" />
              <p>
                Make easy transfers – make easy airtime purchases – buy and send
                airtime/ data with Vested.
              </p>
            </div>
          </div>
        </div>
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature-2.png"
          alt="Transact feature"
        />
      </div>

      <div class="pd-features-feature">
        <div class="pd-features-feature-content">
          <h2>Budget</h2>
          <p>
            Create a personal or joint spending plan for the things you need and
            keep an eye on your expenses.
          </p>
          <div class="pd-features-feature-items">
            <div class="pd-features-feature-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/features-selected.svg" alt="" />
              <p>
                Track your spend – monitor your transactions and stay on track
                to achieve your goals.
              </p>
            </div>
            <div class="pd-features-feature-item">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/features-selected.svg" alt="" />
              <p>
                Choose your categories – select from specialised budget
                categories and assign an amount for it.
              </p>
            </div>
          </div>
        </div>
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/feature-3.png"
          alt="Budget feature"
        />
      </div>
    </section>

<?php get_footer(); ?>
