<?php /* Template Name: Couple */ ?>

<?php get_header(); ?>

<!-- /* Copy about.html content below this Do search and replace in VS Code and replace

'<?php echo get_stylesheet_directory_uri(); ?>' with '<?php echo get_stylesheet_directory_uri(); ?>' without the quotes and then push the updated code to Git*/ -->

<div class="pd-couple">
	<div class="imagePart">

        </div>
        <div class="textPart">
            <p class="topic">
              Complementing your Money Styles as a couple
            </p>
            <p class="explain">
            Opposites, as the saying goes, tend to attract. This has not been empirically shown to be the case in terms of Money Styles, but if we take this as true, then it is particularly important to explore how couples on opposite ends of the Money Style chart can become successful money teams. 
            <br><br>
            There are no hard and fast rules to how to successfully merge/ complement Money Styles. However, you and your partner can choose to <span style="color: #e26d48;">UNCAP</span>. We have provided some general guidance (in 5 not-so-simple steps) based on our experience with couples across various life-stages and contexts. 
 
            </p>

            <div class="listact">
                <div class="each">
                    <div class="circle"></div>
                    <p class="text">
                      <span>Understand: </span>Seek to understand your natural attitudes towards money and those of your partner. Understanding the roots of your partner’s behaviours and attitudes will probably help you become less judgmental. If you have not taken it yet, this <a href="https://vested.ng/quiz">5min Money Style Quiz</a> will help you and your partner understand how you both relate with money, why and what to do about it.
                    </p>
                </div>

                <div class="each">
                    <div class="circle"></div>
                    <p class="text">
                       <span>Negotiate: </span>Discuss what changes you would like to see in your combined attitudes towards money and what that might mean for each partner. What sacrifices might be required from each partner, given their natural Money Style? Some give-and-take is required in this process.
                    </p>
                </div>

                <div class="each">
                    <div class="circle"></div>
                    <p class="text">
                      <span>Communicate: </span>The conversations about our money goals, attitudes and concerns are the crucial starting point. These conversations should start early in the relationship (once things get serious), should be honest and, should continue as the relationship evolves. If you are already having these conversations, you are already ahead of the game. If you are now inspired to have your first one, it is not too late! You can start today.
                    </p>
                </div>

                <div class="each">
                    <div class="circle"></div>
                    <p class="text">
                       <span>Accept: </span> Make peace with the fact that you or your partner will never quite achieve the perfect Money Style that you would like for yourselves. Accept each other’s humanity and celebrate the fact that you will occasionally fall short of the ambition you set for yourselves and each other. You might break your 3-year-long Scrooge streak with an occasional jewelry Splurge, but it is OK. 

                    </p>
                </div>

                <div class="each">
                    <div class="circle"></div>
                    <p class="text">
                   <span>Partner: </span>Maximize your diversity as a couple! Rather than seeking to change everything about yourself or your partner, bring out the best in each other by harnessing your natural <span>Money Styles</span>. 

                    </p>
                </div>
            </div>

            <div class="actions">
                <p>SHARE</p>
                <div class="icons">
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkpersona.svg" alt="icon"></a>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebookpersona.svg" alt="icon"></a>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagrampersona.svg" alt="icon"></a>
                    <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitterpersona.svg" alt="icon"></a>
                </div>
            </div>
        </div>

        <form action="">
            <p class="head">Change, evolve or refine your natural Money Style.</p>
            <div class="group">
                <label for="current">Select your current style:</label>
				<select class="current" id="current" name="current"  required >

						<option value="">Please Select</option>
						<option value="collector">Collector</option>
						<option value="splurger">Splurger</option>
						<option value="scrooge">Scrooge</option>
						<option value="dodger">Dodger</option>
						<option value="abbot">Abbot</option>
											
			    </select>
            </div>

            <div class="group">
                <label for="goal">Select your desired style:</label>
				<select class="goal"  id="goal" name="goal"  required >

                    <option value="">Please Select</option>
                    <option value="collector">Collector</option>
                    <option value="splurger">Splurger</option>
                    <option value="scrooge">Scrooge</option>
                    <option value="dodger">Dodger</option>
                    <option value="abbot">Abbot</option>
											
			    </select>
            </div>

            <!-- <div class="group">
                <label for="name">First and Last name</label>
                <input type="text" required placeholder="Please enter your first and last name">
            </div>

            <div class="group">
                <label for="name">Email address</label>
                <input type="text" class="lastem" required placeholder="Please enter your email adress to receive your result">
            </div> -->

            <button id="myBtn" disabled class="submitt" type="submit">Get Money Style actions</button>
        </form>

        <div class="result total totalDiv">
            <p>Your result</p>
            <ul class="loadUi">
                
            </ul>
        </div>
    
    </div>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/couple.js"></script>
   

<?php get_footer(); ?>

