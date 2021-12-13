<?php /* Template Name: Privacy Policy */ ?>

<?php get_header(); ?>

<!-- /* Copy about.html content below this Do search and replace in VS Code and replace 

'<?php echo get_stylesheet_directory_uri(); ?>/assets' with '<?php echo get_stylesheet_directory_uri(); ?>/assets' without the quotes and then push the updated code to Git*/
 -->


 <main class="pd-terms">
      <div class="hero">
        <h1>Privacy Policy</h1>
      </div>
      <section class="content introduction">
        		<?php the_content(); ?>
      </section>
    </main>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/home.js"></script>
<?php get_footer(); ?>


