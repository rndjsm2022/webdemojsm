<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php

if ( function_exists('wp_body_open') ) {
	wp_body_open();
}

?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'quotidiano' ); ?></a>

<?php do_action( 'avventura_lite_mobile_menu' ); ?>

<div id="overlay-body"></div>
<div id="wrapper">
				
	<header id="header-wrapper" class="light" >
	
		<div id="header">
                        
			<div class="container">
                        
				<div class="row">
                                    
					<div class="col-md-12" >

                        <a class="mobile-navigation" href="#modal-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>

						<?php 
						
    						if ( 
    							avventura_lite_is_woocommerce_active() && 
    							( 
    								!avventura_lite_setting('avventura_lite_woocommerce_header_cart') || 
    								avventura_lite_setting('avventura_lite_woocommerce_header_cart') == 'on'
    							)
    						
    						) :
    							
    							echo avventura_lite_header_cart();
    						
    						endif;
						
						?>
            
                        <div class="header-search"> 
                            
                            <a class="open-search-form" href="#search-form">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <div class="search-form"><?php get_search_form();?></div>
                        
                        </div>
            
						<div class="clear"></div>
                    
					</div>
            
				</div>
                            
			</div>
                                    
		</div>

        <div id="logo-wrapper">
    
            <div class="container">
                                
                <div class="row">
                                            
                    <div class="col-md-4" >
                                                
                        <div id="logo">
                        
                            <?php
                                
                                if ( function_exists( 'the_custom_logo' ) && get_theme_mod( 'custom_logo' ) ) {
                                        
                                    the_custom_logo();

                                    if ( get_theme_mod('header_text') == true)
                                    	echo '<p class="custom-logo-description">'. esc_attr(get_bloginfo('description')) . '</p>';

                                        
                                } elseif ( get_theme_mod('header_text', true) == true ) {
                                    
                                    echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
                                            
                                        echo esc_html(get_bloginfo('name'));
                                        echo '<span>'. esc_html(get_bloginfo('description')) . '</span>';
                                        
                                    echo '</a>';
                                        
                                }
                            
                            ?>
                    
                        </div>
                                            
                    </div>
                    
                    <?php get_sidebar('banner'); ?>
                                        
                </div>
                                    
            </div>
        
        </div>
        
        <div id="menu-wrapper">
    
            <div class="container">
                                
                <div class="row">
                                            
                    <div class="col-md-12">

                        <button class="menu-toggle" aria-controls="mainmenu" aria-expanded="false" type="button">
                            <span aria-hidden="true"><?php esc_html_e( 'Menu', 'quotidiano' ); ?></span>
                            <span class="dashicons" aria-hidden="true"></span>
                        </button>

                        <nav id="mainmenu" >
                        
                            <?php 
                                                
                                wp_nav_menu( array(
                                    'theme_location' => 'main-menu',
                                    'container' => 'false'
                                )); 
                                                
                            ?>
                                                
                        </nav> 
                        
                    </div>
                                            
                </div>
                                        
			</div>
                                    
		</div>
        
	</header>
