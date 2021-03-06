<?php 

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('avventura_lite_masonry_function')) {
	
	function avventura_lite_masonry_function () { 
	
	?>

        <div class="row masonry" id="masonry">
                
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
                    <?php do_action('avventura_lite_postformat'); ?>
            
                </div>
        
			<?php 
			
				endwhile; 
				else:
			
			?>
        
                <div class="post-container col-md-12">
            
                    <article class="post-article">
                            
                        <h1><?php esc_html_e( 'Not found.', 'avventura-lite' );?></h1>
                        <p><?php esc_html_e( 'Sorry, no items found, in this section.', 'avventura-lite' ) ?></p>
             
                    </article>
            
                </div>
            
            <?php endif; ?>
                
        </div>
		
<?php 
	
	} 

	add_action( 'avventura_lite_masonry', 'avventura_lite_masonry_function');

} 

?>