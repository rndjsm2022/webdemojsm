<?php
/**
 * Template Name: Full Width Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package Industryup
 */
get_header(); 
get_template_part('index','banner'); ?>
<main id="content">
  <div class="container">
    <div class="row">
        <?php while ( have_posts() ) : the_post(); 
				the_content();
			endwhile; // End of the loop. 
      if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>
    </div>
  </div>
</main>
<?php
get_footer();