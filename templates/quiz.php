<?php
/* Template Name: Quiz */
?>
<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="The Money Style Quiz" />
    <meta property="og:description" content="Discover why you treat money the way you do" />
    <meta property="og:url" content="https://vested.ng/" />
    <meta
      name="og:image"
      content="https://res.cloudinary.com/pethsdigital/image/upload/v1622059322/Vested/logo_trnzws.svg"
    />
    <meta name="og:type" content="website" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/quiz.css" />
    <title>Vested Quiz</title>
  </head>

  <body>
  <main class="pd-quiz">
      <header>
        <h1>
          Discover why you treat money <br />
          the way you do
        </h1>
        <a href="#test" class="btn btnTest">Take the Money Style Quiz</a>
        <video autoplay muted>
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/survey.mov" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      </header>
      <div class="test-container" id="test">
        <div class="mainTest">
          <div class="navContainer">
            <div class="text">
              <p>Historical behaviour and stated values</p>
              <p>Hypothetical scenarios</p>
            </div>
            <div class="progressbar">
              <div class="progress behavior">
                <!-- <div
                class="quadrant"
                role="progressbar"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div> -->
                <div class="pr-child progress1">
                  <span class="active">1 </span>
                  <div
                    class="quadrant"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <div class="pr-child progress2">
                  <span>2</span>
                  <div
                    class="quadrant"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <div class="pr-child progress3">
                  <span>3</span>
                  <div
                    class="quadrant"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <div class="pr-child progress4">
                  <span>4</span>
                  <div
                    class="quadrant"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <div class="pr-child progress5">
                  <span>5</span>
                  <div
                    class="quadrant"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
              <div class="progress hypothesis">
                <div class="pr-child progress6">
                  <span>6</span>
                  <div
                    class="quadrant"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <div class="pr-child progress7">
                  <span>7</span>
                  <div
                    class="quadrant"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <div class="pr-child progress8">
                  <span>8</span>
                  <div
                    class="quadrant"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <div class="pr-child progress9">
                  <span>9</span>
                  <div
                    class="quadrant"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
                <div class="pr-child progress10">
                  <span class="no-tick"
                    ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Shape.svg" alt="shape"
                  /></span>
                  <span class="tick hidden"
                    ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tick-dark.svg" alt="shape"
                  /></span>
                  <div
                    class="quadrant"
                    role="progressbar"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <form action="" class="quiz-form">
          
        </form>
        <button type="submit" disabled class="btn btnMain">I am done!</button>
        <form action="" class="modal">
          <h1>Please enter your details to get your result</h1>
          <div class="form-group">
            <label for="name">Name:</label>
            <input
              class="inp1"
              id="name"
              type="text"
              placeholder="First and Last name"
              required
            />
            <p class="error">Invalid Name</p>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input
              class="inp2"
              type="email"
              placeholder="Vested@gmail.com"
              required
            />
            <p class="error">Invalid Email</p>
          </div>
          <button class="close" type="button">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/quiz-form-close.svg" />
          </button>
          <button disabled class="btn btn3">
            See Your Result &nbsp;
            <svg
              width="11"
              height="11"
              viewBox="0 0 11 11"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.8125 5.5H10.1875"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M5.8125 9.875L10.1875 5.5L5.8125 1.125"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>

          <div class="playstore">
            <p>Join the winning team! Get Vested App</p>
            <div class="appStore">
              <a href="#"
                ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-playstore.svg" alt="appStore"
              /></a>
              <a href="#"
                ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/g-play.svg" alt="appStore"
              /></a>
            </div>
          </div>
        </form>
        <div class="overlay"></div>
      </div>
    </main>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/quiz.js"></script>
    <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/code.js"></script> -->
<!-- END COPY -->
<?php get_footer(); ?>
