<?php /* Template Name: Individual */ ?>

<?php get_header(); ?>

<!-- /* Copy about.html content below this Do search and replace in VS Code and replace

'<?php echo get_stylesheet_directory_uri(); ?>' with '<?php echo get_stylesheet_directory_uri(); ?>' without the quotes and then push the updated code to Git*/ -->

<div class="pd-persona">
        <div class="imagePart">

        </div>
        <div class="textPart">
            <p class="topic">
                Changing your dominant Money Style
            </p>
            <p class="explain">
           
            There are no good or bad Money Styles. As with most things, some balance is healthy. Wherever you find yourself in the chart, you can learn behaviours from other Money Styles to complement your natural tendencies. For example, if you are an extreme Scrooge, getting yourself to live (and spend) a little, might be a good idea.
            <br><br>
            However, you should bear in mind that the most diametrically opposed styles are on opposite diagonal segments of the Money Style Chart. These styles are the hardest to transition between. For example, it is more difficult to transition from being a Dodger to being a Collector, than it is to transition from being a Dodger to a Splurger. This is because, for the first transition occur, you will have to change both your emotional and time orientation towards money.
            </p>

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
                <label for="current">Select your current dominant style:</label>
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
				<select class="goal" id="goal" name="goal"  required >

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
                <input type="text" placeholder="Please enter your first and last name">
            </div>

            <div class="group">
                <label for="name">Email address</label>
                <input type="text" placeholder="Please enter your email adress to receive your result">
            </div> -->

            <button id="myBtn" disabled class="submitt" type="submit">Get Money Style actions</button>
            <br><br><p class="explain">
                Would you like your Money Style to complement your partner's? Click <a href="/quiz/couple">here</a> for some free tips. 
            </p>
        </form>
        
        <div class="result total totalDiv">
            <p>Your result</p>
            <ul class="loadUi">
                
            </ul>
        </div>
    </div>
     
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/persona.js"></script>
   

<?php get_footer(); ?>

