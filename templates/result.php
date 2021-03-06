<?php
/* Template Name: Result */
?>
<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/result.css" />
    <meta property="og:title" content="The Money Style Quiz" />
    <meta property="og:description" content="Discover why you treat money the way you do" />
    <meta property="og:url" content="https://vested.ng/" />
  </head>
  <body>
  <main class="pd-result">
      <h1>Hello! A summary of your result is in the Money Style chart below</h1>
      <p class="expressResult">
        Based on your responses, your dominant Money Style is <b><span>Collector!</span></b>
		<br />
		Keep on reading to find out more about this style and what it means for you
      </p>
      <div class="wrapper">
        <div class="left">
          <h2 class="t-3">Negative</h2>
          <img
            class="t3-arrow"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrowLong.svg"
            alt="arrow"
          />
          <h1 class="p-left">Emotional orientation</h1>
          <img
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrowLong.svg"
            class="t4-arrow"
            alt="arrow"
          />
          <h2 class="t-4">Positive</h2>
        </div>
        <div class="container">
          <a href="#collector" class="box collector">
            <div class="divbox height box1"></div>
            <div class="inner">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/collector.png" alt="" />
              <p>Collector</p>
              <p class="percent">10%</p>
            </div>
          </a>
          <a href="#splurger" class="box splurger">
            <div class="divbox width box2"></div>
            <div class="inner">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/splurger.png" alt="" />
              <p>Splurger</p>
              <p class="percent">12%</p>
            </div>
          </a>
          <a href="#scrooge" class="box scrooge">
            <div class="divbox width box3"></div>
            <div class="inner">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scrooge.png" alt="" />
              <p>Scrooge</p>
              <p class="percent">20%</p>
            </div>
          </a>
          <a href="#dodger" class="box dodger">
            <div class="divbox height box4"></div>
            <div class="inner">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dodger.png" alt="" />
              <p>Dodger</p>
              <p class="percent">40%</p>
            </div>
          </a>
          <a href="#abbot" class="abbot">
            <div class="inner">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abbot.png" alt="" />
              <p>Abbot</p>
              <p class="percent">40%</p>
            </div>
          </a>
        </div>
        <div class="bottom">
          <h2 class="t-1">Short term</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrowLong.svg" alt="arrow" />
          <h1 class="p-bottom">Time orientation</h1>
          <img
            class="rotate"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrowLong.svg"
            alt="arrow"
          />
          <h2 class="t-2">Long term</h2>
        </div>
      </div>
      <div class="results-meaning">
        <div class="right">
          <div class="coverDiv">
            <img
              id="collector"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon5.svg"
              alt="con"
            />
            <h2>The Collector</h2>
          </div>

          <p>
            You are happiest when you have large amounts of money at your
            disposal to spend, to save, and/or to invest. You have positive
            emotions when you think of money. For example, you are likely to
            equate having money with self-worth, power and status and you
            harbour dreams of building a significant fortune. You are extremely
            future-orientated when it comes to building wealth and are
            consciously aware of your finances. You will have a plan to build
            your wealth, but you will seek opportunities to accelerate your
            progress towards your goals (e.g., by making risky investments or
            starting multiple businesses or side businesses). At any point in
            time, you have a number of potential money-spinning businesses in
            your head or in motion.
          </p>

          <div class="coverDiv">
            <img id="splurger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/purse_1_.svg" alt="con" />
            <h2>The Splurger</h2>
          </div>
          <p>
          You primarily like money for the enjoyment that it brings through the purchase of goods and experiences that make you and your loved ones happy. Your emotional orientation towards money is largely positive. When you think of money, you think of all the things having it will afford you. You think of the prestige and fun that it can buy you. Your time orientation towards money will tend to be more short term. You prefer to fulfil short term needs for yourself or loved ones and believe that the future will take care of itself. You will tend to make financial decisions based primarily on what you can ???afford???, as opposed to any other objective metrics.
          </p>

          <div class="coverDiv">
            <img id="scrooge" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/scruge.svg" alt="con" />
            <h2>The Scrooge</h2>
          </div>
          <p>
            Your favorite quote probably is ???live ready???. You like to save money
            and you are conservative. You also like to prioritize your financial
            goals. You probably have a budget and may enjoy the processes of
            making up a budget and reviewing it periodically. You have a
            negative emotional reaction to money and may be somewhat consumed
            with worry about loss of money and the status and security it
            brings. Spending money makes you feel uncomfortable, you always shop
            for bargains, and you try to save money wherever you can. You have a
            long-term orientation to money and do not like frivolous spending,
            preferring to make plans and set financial targets and save and
            invest to achieve them. When you do save or invest, it is typically
            in lower risk instruments.
          </p>

          <div class="coverDiv">
            <img id="dodger" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dodge.svg" alt="con" />
            <h2>The Dodger</h2>
          </div>
          <p>
            You probably avoid discussions about money, avoid paying your bills
            promptly, and will often find yourself in money emergencies. You
            have largely negative emotional reactions to money or money
            discussions. You are worried about a lack of understanding of money
            or how to manage it. You might also worry that you appear vain or
            greedy if you discuss money openly or frequently. You might become
            stressed when faced with the challenge of creating a financial plan.
            You will also have a short-term orientation to money and will avoid
            making detailed financial plans or budgets, preferring to take each
            day is it comes. You may have limited information on your spending
            habits or your net worth.
          </p>

          <div class="coverDiv">
            <img id="abbot" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/abort3.svg" alt="con" />
            <h2>The Abbot</h2>
          </div>
          <p>
            You are aware that money is a necessary part of life, but you are
            suspicious of great wealth and try to live a life that transcends
            money. Your emotional orientation towards money is neutral. You are
            future-oriented, a giver and you tend to make financial decisions
            based on your values. Your focus on accumulating wealth in the
            long-term comes from your desire to make a difference in the lives
            of the people and organizations you care about. You are charitable
            and prioritize donating to philanthropic causes. You are aware of
            the good things that money can provide but are more concerned about
            getting these for everyone as opposed getting more of these good
            things for yourself. Similarly, your time orientation towards money
            is also neutral. Your long-term plans are not set in any specific
            financial terms but are usually more about life goals and milestones
            or in terms of your impact on the world.
          </p>
        </div>
        <ul class="left">
          <li>
            <a id="collectorLink" class="active" href="#collector"
              >The Collector</a
            >
          </li>
          <li><a id="splurgerLink" href="#splurger">The Splurger</a></li>
          <li><a id="scroogeLink" href="#scrooge">The Scrooge</a></li>
          <li><a id="dodgerLink" href="#dodger">The Dodger</a></li>
          <li><a id="abbotLink" href="#abbot">The Abbot</a></li>
        </ul>
      </div>
    
    <div class="articles">
        <article>
          <a href="https://vested.ng/quiz/individual" class="link-1">
            <p>
              Would you like to change your Money Style? Click here for some
              free tips.
            </p>
          </a>
        </article>
        <article>
          <a href="https://vested.ng/quiz/couple" class="link-2">
            <p>
              Would you like your Money Style to complement your partner???s?
              Click here for some free tips.
            </p>
          </a>
        </article>
      </div>
    </main>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/result.js"></script>
    </body>
</html>
<?php get_footer(); ?>
