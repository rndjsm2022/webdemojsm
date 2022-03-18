<?php

/**
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('quotidiano_thumbnail_function')) {

	function quotidiano_thumbnail_function($id, $icon = 'on') {

		global $post;
		
		if ( '' != get_the_post_thumbnail() ) { 
			
	?>
			
			<div class="pin-container">
					
				<?php 
						
					the_post_thumbnail($id);
					
					$categories = get_the_category();
									
					if ( !empty( $categories ) ) {
									    
						if ( $icon == "on" ):
							
							echo avventura_lite_posticon();	
							
						endif;

					}

				?>
                    
			</div>
			
	<?php
	
		}
	
	}

	add_action( 'avventura_lite_thumbnail', 'quotidiano_thumbnail_function', 10, 2 );

}

?>