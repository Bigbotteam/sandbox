<?php
/* Template Name: Home */
?>

<?php get_header(); ?>

<!-- /* Copy about.html content below this Do search and replace in VS Code and replace 

'<?php echo get_stylesheet_directory_uri(); ?>/assets' with '<?php echo get_stylesheet_directory_uri(); ?>/assets' without the quotes and then push the updated code to Git*/
 -->

    <main class="pd-home">
    <header class="pd-home-header bg-primary">
      <div class="content">
        <div class="pd-home-header-text-wrap left">
              <h1>Build, Secure, and Manage your Wealth Together.</h1>
              <p class="achieve">
                Achieve financial wellbeing and <br />
                meet
               <span class="text-color-orange">personal</span> and <span class="text-color-orange">shared goals.</span>
              </p>
              <div class="subscribe">
              <?php echo do_shortcode(
                  '[contact-form-7 id="2984" title="Newsletter"]'
              ); ?>
               
              </div>     

        </div>
        <div class="img-wrap">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/heroImg.png" alt="hero image" />
        </div>
      </div>
    </header>
    <section class="pd-home-benefits">
      <div class="inner">
        <h2>
          Craft your future through comprehensive, connected, customizable and
          convenient financial experiences.
        </h2>
        <div class="benefits-wrap">
          <div class="icon-wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/iconfinder-comprehensive.svg" alt="Comprehensive" />
            <h4>Comprehensive</h4>
            <p>Plan, pay, save, invest, give, and learn in one place</p>
          </div>
          <div class="icon-wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/iconfinder-connected.svg" alt="Connected " />
            <h4>Connected</h4>
            <p>Share financial experiences with your partner(s)</p>
          </div>
          <div class="icon-wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/iconfinder-customizable.svg" alt="Customizable " />
            <h4>Customizable</h4>
            <p>
              Set the rules. Decide what you do together and what you do alone
            </p>
          </div>
          <div class="icon-wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/iconfinder-convenient.svg" alt="Convenient " />
            <h4>Convenient</h4>
            <p>Enjoy intuitive, human-centered experiences</p>
          </div>
        </div>
      </div>
    </section>
    <section class="pd-home-features bg-primary">
      <div class="inner">
        <h2>Key Features</h2>
        <p class="heading-text">
          You can't build wealth when you don't know where it's going. With
          Vested, you can develop simple daily habits that result in wealth
          accumulation.
        </p>
        <div class="slider-wrap">
          <ul>
            <li class="indicator indicator-0">
              <div class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path
                      d="M4.5 10.875C4.57417 10.875 4.64667 10.897 4.70834 10.9382C4.77001 10.9794 4.81807 11.038 4.84645 11.1065C4.87484 11.175 4.88226 11.2504 4.86779 11.3232C4.85332 11.3959 4.81761 11.4627 4.76516 11.5152C4.71272 11.5676 4.6459 11.6033 4.57316 11.6178C4.50042 11.6323 4.42502 11.6248 4.35649 11.5965C4.28797 11.5681 4.2294 11.52 4.1882 11.4583C4.14699 11.3967 4.125 11.3242 4.125 11.25C4.125 11.1505 4.16451 11.0552 4.23484 10.9848C4.30516 10.9145 4.40054 10.875 4.5 10.875Z"
                      stroke="#243B41" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M19.5 18.375C19.5742 18.375 19.6467 18.397 19.7083 18.4382C19.77 18.4794 19.8181 18.538 19.8465 18.6065C19.8748 18.675 19.8823 18.7504 19.8678 18.8232C19.8533 18.8959 19.8176 18.9627 19.7652 19.0152C19.7127 19.0676 19.6459 19.1033 19.5732 19.1178C19.5004 19.1323 19.425 19.1248 19.3565 19.0965C19.288 19.0681 19.2294 19.02 19.1882 18.9583C19.147 18.8967 19.125 18.8242 19.125 18.75C19.125 18.6505 19.1645 18.5552 19.2348 18.4848C19.3052 18.4145 19.4005 18.375 19.5 18.375Z"
                      stroke="#243B41" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M0.75 7.5H23.25V22.5H0.75V7.5Z" stroke="#243B41" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path
                      d="M9 15C9 15.7956 9.31607 16.5587 9.87868 17.1213C10.4413 17.6839 11.2044 18 12 18C12.7956 18 13.5587 17.6839 14.1213 17.1213C14.6839 16.5587 15 15.7956 15 15C15 14.2044 14.6839 13.4413 14.1213 12.8787C13.5587 12.3161 12.7956 12 12 12C11.2044 12 10.4413 12.3161 9.87868 12.8787C9.31607 13.4413 9 14.2044 9 15Z"
                      stroke="#243B41" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2.25 4.5H21.75" stroke="#243B41" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M5.25 1.5H18.75" stroke="#243B41" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="text">
                <h4>360 &deg; savings options</h4>
                <p>
                  Define and automate your progress towards achieving your
                  financial???goals. Save as a lifestyle and save for long or
                  short-term projects, from your Personal or???Joint Account.???
                </p>
              </div>
            </li>
            <li class="indicator indicator-1">
              <div class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path
                      d="M4.25 23.2282L12.75 9.72816C12.8678 9.57486 13.0192 9.45069 13.1926 9.36524C13.366 9.27979 13.5567 9.23535 13.75 9.23535C13.9433 9.23535 14.134 9.27979 14.3074 9.36524C14.4808 9.45069 14.6322 9.57486 14.75 9.72816L23.25 23.2282H4.25Z"
                      stroke="#243B41" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M4.25 23.2285H0.75L4.5 16.4785L6.675 19.3785" stroke="#243B41" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M8.71094 16.1436L11.0479 18.1346C11.2394 18.2966 11.4847 18.3808 11.7354 18.3704C11.986 18.36 12.2235 18.2559 12.4009 18.0786L13.0429 17.4366C13.2305 17.2491 13.4848 17.1438 13.7499 17.1438C14.0151 17.1438 14.2694 17.2491 14.4569 17.4366L15.0989 18.0786C15.2763 18.2559 15.5139 18.36 15.7645 18.3704C16.0151 18.3808 16.2605 18.2966 16.4519 18.1346L18.8049 16.1686"
                      stroke="#243B41" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13.5 9.26652V0.728516" stroke="#243B41" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M13.5 0.728516H17.25V2.22852H21.75L20.25 4.47852L21.75 6.72852H17.25V5.97852H13.5"
                      stroke="#243B41" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="text">
                <h4>Intuitive???portfolio-based???investments</h4>
                <p>
                  Invest in a portfolio of curated investment opportunities
                  at???once, with???the click of a button.???Edit your portfolio
                  simply and conveniently.
                </p>
              </div>
            </li>
            <li class="indicator indicator-2">
              <div class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path
                      d="M3.375 7.875C3.375 8.96902 3.8096 10.0182 4.58318 10.7918C5.35677 11.5654 6.40598 12 7.5 12C8.59402 12 9.64323 11.5654 10.4168 10.7918C11.1904 10.0182 11.625 8.96902 11.625 7.875C11.625 6.78098 11.1904 5.73177 10.4168 4.95818C9.64323 4.1846 8.59402 3.75 7.5 3.75C6.40598 3.75 5.35677 4.1846 4.58318 4.95818C3.8096 5.73177 3.375 6.78098 3.375 7.875V7.875Z"
                      stroke="#243B41" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M0.75 20.25C0.75 18.4598 1.46116 16.7429 2.72703 15.477C3.9929 14.2112 5.70979 13.5 7.5 13.5C9.29021 13.5 11.0071 14.2112 12.273 15.477C13.5388 16.7429 14.25 18.4598 14.25 20.25"
                      stroke="#243B41" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round" />
                    <path
                      d="M14.2501 4.41605C14.873 4.01133 15.5936 3.78232 16.3358 3.75318C17.078 3.72404 17.8144 3.89585 18.467 4.25049C19.1197 4.60512 19.6645 5.12941 20.0439 5.768C20.4233 6.40659 20.6233 7.13578 20.6226 7.87858C20.622 8.62138 20.4208 9.35022 20.0403 9.98815C19.6598 10.6261 19.114 11.1494 18.4607 11.5029C17.8075 11.8564 17.0708 12.027 16.3287 11.9965C15.5865 11.9661 14.8663 11.7358 14.2441 11.33"
                      stroke="#243B41" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round" />
                    <path
                      d="M15 13.667C15.9886 13.443 17.0148 13.4444 18.0028 13.6708C18.9908 13.8973 19.9151 14.3432 20.7074 14.9754C21.4997 15.6076 22.1396 16.4099 22.5798 17.323C23.0199 18.236 23.249 19.2364 23.25 20.25"
                      stroke="#243B41" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round" />
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="text">
                <h4>Synced??? planning and spending</h4>
                <p>
                  Create daily, weekly, or monthly spending plans and budgets
                  individually or with your partner. Automatically track your
                  progress against your plans.
                </p>
              </div>
            </li>
            <li class="indicator indicator-3">
              <div class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2.25003 3.92296V11.537C2.25005 13.9436 2.97935 16.2937 4.34179 18.2776C5.70423 20.2615 7.63585 21.7859 9.88203 22.65L10.923 23.05C11.6163 23.3166 12.3838 23.3166 13.077 23.05L14.118 22.65C16.3642 21.7859 18.2958 20.2615 19.6583 18.2776C21.0207 16.2937 21.75 13.9436 21.75 11.537V3.92296C21.7519 3.63644 21.671 3.35547 21.5171 3.11384C21.3631 2.87222 21.1426 2.68022 20.882 2.56096C18.0819 1.33875 15.0552 0.721617 12 0.749957C8.94489 0.721617 5.9182 1.33875 3.11803 2.56096C2.85751 2.68022 2.63699 2.87222 2.48301 3.11384C2.32902 3.35547 2.24812 3.63644 2.25003 3.92296V3.92296Z"
                    stroke="#243B41" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round" />
                  <path
                    d="M17.2001 11.25C17.0563 12.2458 16.6295 13.1794 15.9703 13.9396C15.3111 14.6997 14.4473 15.2544 13.4819 15.5377C12.5164 15.8209 11.4899 15.8208 10.5245 15.5372C9.55909 15.2537 8.69551 14.6987 8.03654 13.9384C7.37758 13.178 6.95098 12.2443 6.80754 11.2485C6.66409 10.2526 6.80984 9.23645 7.22744 8.32104C7.64504 7.40563 8.31689 6.6295 9.16302 6.08504C10.0091 5.54059 10.9939 5.25074 12.0001 5.25"
                    stroke="#243B41" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round" />
                  <path
                    d="M17.2492 6.56152L12.4632 11.3475C12.34 11.4704 12.1731 11.5394 11.9992 11.5394C11.8252 11.5394 11.6583 11.4704 11.5352 11.3475L10.0352 9.84252"
                    stroke="#243B41" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="text">
                <h4>Safe and Secure transactions</h4>
                <p>
                  Transact safely and securely,
                  with???the???best-in-class???security and data encryption
                  technology.???Schedule bill payments, buy airtime and renew
                  your data at your convenience.
                </p>
              </div>
            </li>
          </ul>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/keyfeatures-0.png" alt="feature" id="feature-img" />
        </div>
      </div>
    </section>
    <section class="pd-home-testimonial inner">
        <h2>What people are saying</h2>
        <p class="heading-text">
          See Why Thousands of Users Choose Vested to Grow Their Wealth.
        </p>
        <div class="testimonial-wrap">
          <div class="testimonial-indicators">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-2.png"
              alt="testimonial"
              class="t-indicator t-indicator-0 active"
            />
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-3.png"
              alt="testimonial"
              class="t-indicator t-indicator-1"
            />
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial goUp">
              <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-2.png"
                alt="testimonial"
                class="testimonial-img"
              />
              <div class="text">
                <p class="message">
                  ???Vested is simple and easy to use and the app automatically
                  helps us track and manage our money better than we would have
                  done ourselves???
                </p>
                <h4>Hakeem & Marie</h4>
              </div>
            </div>
            <div class="testimonial">
              <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-3.png"
                alt="testimonial"
                class="testimonial-img"
              />
              <div class="text">
                <p class="message">
                  ???Vested is really the plug. All their webinar sessions have
                  been amazing???
                </p>
                <h4>Amaka</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
  </main>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/home.js"></script>
<?php get_footer(); ?>


