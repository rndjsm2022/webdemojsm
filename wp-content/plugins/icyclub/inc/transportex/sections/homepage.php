<?php
/**
 * Slider section
 */
if ( ! function_exists( 'icycp_transportex_slider' ) ) :
	function icycp_transportex_slider() {
		$slider_image_one = get_theme_mod('slider_image_one',ICYCP_PLUGIN_URL .'inc/transportex/images/slider/slider1.jpg');
		$slider_overlay_color_one = get_theme_mod('slider_overlay_color_one', 'rgba(0,0,0,0.8)');
		$transportex_slider_title_one = get_theme_mod('transportex_slider_title_one','We help from our fleet Send it anywhere');
		$transportex_slider_discription_one = get_theme_mod('transportex_slider_discription_one','we bring the proper people along to challenge transportex thinking and drive transformation.');
		$transportex_slider_btn_txt_one = get_theme_mod('transportex_slider_btn_txt_one','Read More');
		$transportex_slider_btn_link_one = get_theme_mod('transportex_slider_btn_link_one',esc_url('#'));
		$transportex_slider_btn_target_one = get_theme_mod('transportex_slider_btn_target_one',false);

    $slider_image_two = get_theme_mod('slider_image_two',ICYCP_PLUGIN_URL .'inc/transportex/images/slider/slider1.jpg');
    $slider_overlay_color_two = get_theme_mod('slider_overlay_color_two','rgba(0,0,0,0.8)');
    $transportex_slider_title_two = get_theme_mod('transportex_slider_title_two','Transport your goods Around the World');
    $transportex_slider_discription_two = get_theme_mod('transportex_slider_discription_two','we bring the proper people along to challenge transportex thinking and drive transformation.');
    $transportex_slider_btn_txt_two = get_theme_mod('transportex_slider_btn_txt_two','Read More');
    $transportex_slider_btn_link_two = get_theme_mod('transportex_slider_btn_link_two',esc_url('#'));
    $transportex_slider_btn_target_two = get_theme_mod('transportex_slider_btn_target_two',false);

    $slider_image_three = get_theme_mod('slider_image_three',ICYCP_PLUGIN_URL .'inc/transportex/images/slider/slider3.jpg');
    $slider_overlay_color_three = get_theme_mod('slider_overlay_color_three', 'rgba(0,0,0,0.8)');
    $transportex_slider_title_three = get_theme_mod('transportex_slider_title_three','Transport your goods Around the World');
    $transportex_slider_discription_three = get_theme_mod('transportex_slider_discription_three','we bring the proper people along to challenge transportex thinking and drive transformation.');
    $transportex_slider_btn_txt_three = get_theme_mod('transportex_slider_btn_txt_three','Read More');
    $transportex_slider_btn_link_three = get_theme_mod('transportex_slider_btn_link_three',esc_url('#'));
    $transportex_slider_btn_target_three = get_theme_mod('transportex_slider_btn_target_three',false);

    
		$transportex_slider_enable = get_theme_mod('transportex_slider_enable','on');
		if($transportex_slider_enable !='off'){	
		?>
	
	<!--== Home Slider ==-->
  <section class="ta-slider-warraper">
    <!--== ta-slider ==-->
    <div id="ta-slider" > 
       <!--item-->
		 <div class="item">
        <!--slide image-->
        <figure> <img src="<?php echo $slider_image_one; ?>" alt="image description"> </figure>
        <!--/slide image-->
        <!--slide inner-->
        <div class="ta-slider-inner" style="background:<?php echo esc_attr($slider_overlay_color_one);?>">
          <div class="container inner-table">
            <div class="inner-table-cell">
              <!--slide content area-->
              <div class="slide-caption">
                <!--slide box style-->
                
                 <?php 
					 if ( ! empty( $transportex_slider_title_one ) || is_customize_preview() ) { ?>
					<h1><?php echo $transportex_slider_title_one;  ?></h1>
					<?php } 
					if ( ! empty( $transportex_slider_discription_one ) || is_customize_preview() ) {
				  ?>
                  <div class="description hidden-xs">
                    <p><?php echo $transportex_slider_discription_one; ?></p>
                  </div>
				 <?php } if($transportex_slider_btn_txt_one) {?>
                  <a <?php if($transportex_slider_btn_link_one) { ?> href="<?php echo $transportex_slider_btn_link_one; } ?>" 
						<?php if($transportex_slider_btn_target_one) { ?> target="_blank" <?php } ?> class="btn btn-tislider hidden-xs">
						<?php if($transportex_slider_btn_txt_one) { echo $transportex_slider_btn_txt_one; } ?></a>
				 <?php } ?>	
                  <!--/slide box style-->
              <!--/slide content area-->
            </div>
          </div>
        </div>
        <!--/slide inner-->
      </div>
		
		
		
        <!--/slide inner-->
      </div>
      <!--/item-->

      <!--item-->
     <div class="item">
        <!--slide image-->
        <figure> <img src="<?php echo $slider_image_two; ?>" alt="image description"> </figure>
        <!--/slide image-->
        <!--slide inner-->
        <div class="ta-slider-inner" style="background:<?php echo esc_attr($slider_overlay_color_two);?>">
          <div class="container inner-table">
            <div class="inner-table-cell">
              <!--slide content area-->
              <div class="slide-caption">
                <!--slide box style-->
                
                 <?php 
           if ( ! empty( $transportex_slider_title_two ) || is_customize_preview() ) { ?>
          <h1><?php echo $transportex_slider_title_two;  ?></h1>
          <?php } 
          if ( ! empty( $transportex_slider_discription_two ) || is_customize_preview() ) {
          ?>
                  <div class="description hidden-xs">
                    <p><?php echo $transportex_slider_discription_two; ?></p>
                  </div>
         <?php } if($transportex_slider_btn_txt_two) {?>
                  <a <?php if($transportex_slider_btn_link_two) { ?> href="<?php echo $transportex_slider_btn_link_two; } ?>" 
            <?php if($transportex_slider_btn_target_two) { ?> target="_blank" <?php } ?> class="btn btn-tislider hidden-xs">
            <?php if($transportex_slider_btn_txt_two) { echo $transportex_slider_btn_txt_two; } ?></a>
         <?php } ?> 
                  <!--/slide box style-->
              <!--/slide content area-->
            </div>
          </div>
        </div>
        <!--/slide inner-->
      </div>
    
    
    
        <!--/slide inner-->
      </div>
      <!--/item-->

      <!--item-->
     <div class="item">
        <!--slide image-->
        <figure> <img src="<?php echo $slider_image_three; ?>" alt="image description"> </figure>
        <!--/slide image-->
        <!--slide inner-->
        <div class="ta-slider-inner" style="background:<?php echo esc_attr($slider_overlay_color_three);?>">
          <div class="container inner-table">
            <div class="inner-table-cell">
              <!--slide content area-->
              <div class="slide-caption">
                <!--slide box style-->
                
                 <?php 
           if ( ! empty( $transportex_slider_title_three ) || is_customize_preview() ) { ?>
          <h1><?php echo $transportex_slider_title_three;  ?></h1>
          <?php } 
          if ( ! empty( $transportex_slider_discription_three ) || is_customize_preview() ) {
          ?>
                  <div class="description hidden-xs">
                    <p><?php echo $transportex_slider_discription_three; ?></p>
                  </div>
         <?php } if($transportex_slider_btn_txt_three) {?>
                  <a <?php if($transportex_slider_btn_link_three) { ?> href="<?php echo $transportex_slider_btn_link_three; } ?>" 
            <?php if($transportex_slider_btn_target_three) { ?> target="_blank" <?php } ?> class="btn btn-tislider hidden-xs">
            <?php if($transportex_slider_btn_txt_three) { echo $transportex_slider_btn_txt_three; } ?></a>
         <?php } ?> 
                  <!--/slide box style-->
              <!--/slide content area-->
            </div>
          </div>
        </div>
        <!--/slide inner-->
      </div>
    
    
    
        <!--/slide inner-->
      </div>
      <!--/item-->


    </div>
    <!--/ta-slider--> 
  </section>
<div class="clearfix"></div>	
	
		<?php
}
	}

endif;

if ( function_exists( 'icycp_transportex_slider' ) ) {
$homepage_section_priority = apply_filters( 'icycp_transportex_homepage_section_priority', 10, 'icycp_transportex_slider' );
add_action( 'icycp_transportex_homepage_sections', 'icycp_transportex_slider', absint( $homepage_section_priority ) );

}


/**
 * calltoaction
 */
if ( ! function_exists( 'icycp_transportex_calltoaction' ) ) :

  function icycp_transportex_calltoaction() {
    
    $calltoaction_section_title = get_theme_mod('calltoaction_section_title',__('Make A Difference With Expert Team','icyclub'));
    $calltoaction_section_discription = get_theme_mod('calltoaction_section_discription','laoreet ipsum eu laoreet. ugiignissimat Vivamus dignissim feugiat erat sit amet convallis.');
    $calltoaction_section_enable = get_theme_mod('calltoaction_section_enable','on');
    if($calltoaction_section_enable !='off'){
    ?>
<section class="ta-calltoaction wow fadeIn animated">
    <div class="overlay" style="background-color: ;">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-8">
          <?php if( ($calltoaction_section_title) || ($calltoaction_section_discription)!='' ) { ?>
          <!-- Section Title -->
          <div class="ta-calltoaction-box-info">
            <h5><?php echo $calltoaction_section_title; ?></h5>
            <p><?php echo $calltoaction_section_discription; ?></p>
         </div>
         <!-- /Section Title -->
         <?php } ?>

        </div>
        <div class="col-md-2 col-sm-4">
          <?php 
          $transportex_calltoaction_button_link = get_theme_mod('transportex_calltoaction_button_link','#');
          $transportex_calltoaction_button_label = get_theme_mod('transportex_calltoaction_button_label',__('Lets Start'));
          $transportex_calltoaction_button_target = get_theme_mod('transportex_calltoaction_button_target',false);
          if($transportex_calltoaction_button_label !='')
          { ?>
          <a href="<?php echo esc_url($transportex_calltoaction_button_link); ?>" <?php if($transportex_calltoaction_button_target == true){ echo 'target="_blank"';}?> class="btn btn-theme"><?php echo $transportex_calltoaction_button_label ; ?></a>  
          <?php } ?> 
        </div>
      </div>
    </div>
  </div>
</section>

<div class="clearfix"></div>  
<?php } }

endif;

    if ( function_exists( 'icycp_transportex_calltoaction' ) ) {
    $section_priority = apply_filters( 'icycp_transportex_homepage_section_priority', 11, 'icycp_transportex_calltoaction' );
    add_action( 'icycp_transportex_homepage_sections', 'icycp_transportex_calltoaction', absint( $section_priority ) );

    } 

/*** Service */
if ( ! function_exists( 'icycp_transportex_service' ) ) :

	function icycp_transportex_service() {

		$service_section_title = get_theme_mod('service_section_title',__('Why We Best in Business Services','icyclub'));
		$service_section_discription = get_theme_mod('service_section_discription','laoreet ipsum eu laoreet. ugiignissimat Vivamus dignissim feugiat erat sit amet convallis.');
		$transportex_service_enable = get_theme_mod('transportex_service_enable','on');
		if($transportex_service_enable !='off')
		{	
		?>
	    <!-- Section Title -->
<section id="service" class="ta-section ta-service text-center">
	<div class="container">		
		<?php if( ($service_section_title) || ($service_section_discription)!='' ) { ?>
		<div class="row">
			<div class="col-md-12 wow fadeInDown animated padding-bottom-20">
            <div class="ta-heading">
              <h3 class="ta-heading-inner"><?php echo $service_section_title; ?></h3>
			  <p><?php echo $service_section_discription; ?></p>
            </div>
          </div>
		</div>
		<!-- /Section Title -->
		<?php } ?>
			<div class="row">
			  <div class="col-sm-4 col-md-4 swing animated service-one">
                <div class="ta-service two text-left">
                  <div class="ta-service-inner">
					<?php  $service_one_icon = get_theme_mod('service_one_icon','fa fa-thumbs-up'); ?>
                    <div class="ser-icon"> <i class="<?php echo  $service_one_icon; ?>"></i> </div>
					 <?php  $service_one_title = get_theme_mod('service_one_title','Market Analysis'); ?>
                    <h3><?php echo $service_one_title; ?></h3>
					<?php  $service_one_description = get_theme_mod('service_one_description','laoreet Pellentesque molestie laoreet laoreet.'); ?>
                    <p><?php echo $service_one_description; ?></p>
                    <?php 
					$ser_one_btn_link = get_theme_mod('ser_one_btn_link','#');
					$ser_one_btn_text = get_theme_mod('ser_one_btn_text',__('Read More','#'));
					$ser_one_btn_tab = get_theme_mod('ser_one_btn_tab',false);
					if($ser_one_btn_text !='')
					{ ?>
					<a href="<?php echo esc_url($ser_one_btn_link); ?>" <?php if($ser_one_btn_tab == true){ echo 'target="_blank"';}?> class="btn btn-theme"><?php echo $ser_one_btn_text ; ?></a>	
					<?php } ?>
					
					
					
					</div>
                </div>
              </div>
			  <div class="col-sm-4 col-md-4 swing animated service-two">
                <div class="ta-service two text-left">
                  <div class="ta-service-inner">
				    <?php  $service_two_icon = get_theme_mod('service_two_icon','fa fa-bank'); ?>
                    <div class="ser-icon"> <i class="<?php echo $service_two_icon; ?>"></i> </div>
                    <?php  $service_two_title = get_theme_mod('service_two_title','Market Analysis'); ?>
					<h3><?php echo $service_two_title; ?></h3>
					<?php  $service_two_description = get_theme_mod('service_two_description','laoreet Pellentesque molestie laoreet laoreet.'); ?>
                     <p><?php echo $service_two_description; ?></p>
                    <?php 
					$ser_two_btn_link = get_theme_mod('ser_two_btn_link','#');
					$ser_two_btn_text = get_theme_mod('ser_two_btn_text',__('Read More','#'));
					$ser_two_btn_tab = get_theme_mod('ser_two_btn_tab',false);
					if($ser_two_btn_text !='')
					{ ?>
					<a href="<?php echo esc_url($ser_two_btn_link); ?>" <?php if($ser_two_btn_tab == true){ echo 'target="_blank"';}?> class="btn btn-theme"><?php echo $ser_two_btn_text ; ?></a>	
					<?php } ?>
					</div>
				</div>
			  </div>
			  <div class="col-sm-4 col-md-4 swing animated service-three">
                <div class="ta-service two text-left">
                  <div class="ta-service-inner">
					<?php  $service_three_icon = get_theme_mod('service_three_icon','fa fa-bank'); ?>
                    <div class="ser-icon"> <i class="<?php echo $service_three_icon; ?>"></i> </div>
                     <?php  $service_three_title = get_theme_mod('service_three_title','Market Analysis'); ?>
					<h3><?php echo $service_three_title; ?></h3>
					<?php  $service_three_description = get_theme_mod('service_three_description','laoreet Pellentesque molestie laoreet laoreet.'); ?>
                     <p><?php echo $service_three_description; ?></p>
                    <?php 
					$ser_three_btn_link = get_theme_mod('ser_three_btn_link','#');
					$ser_three_btn_text = get_theme_mod('ser_three_btn_text',__('Read More','#'));
					$ser_three_btn_tab = get_theme_mod('ser_three_btn_tab',false);
					if($ser_three_btn_text !='')
					{ ?>
					<a href="<?php echo esc_url($ser_three_btn_link); ?>" <?php if($ser_three_btn_tab == true){ echo 'target="_blank"';}?> class="btn btn-theme"><?php echo $ser_three_btn_text ; ?></a>	
					<?php } ?>
                </div>
              </div>
			</div>
	</div>
</section>
<?php		} }

endif;
if ( function_exists( 'icycp_transportex_service' ) ) {
	$section_priority = apply_filters( 'icycp_transportex_homepage_section_priority', 11, 'icycp_transportex_service' );
	add_action( 'icycp_transportex_homepage_sections', 'icycp_transportex_service', absint( $section_priority ) );
}


/**
 * Callout section
 */
if ( ! function_exists( 'icycp_transportex_callout' ) ) :

	function icycp_transportex_callout() {
		
		$transportex_callout_background = get_theme_mod('transportex_callout_background',ICYCP_PLUGIN_URL .'inc/transportex/images/callout/callout-back.jpg');
		$transportex_overlay_callout_color_control = get_theme_mod('transportex_overlay_callout_color_control');
		$transportex_callout_title = get_theme_mod('transportex_callout_title',__('Trusted By Over 10,000 Worldwide Businesses. Try Today!','transportex'));
		$transportex_callout_description = get_theme_mod('transportex_callout_description','We must explain to you how all this mistransportexken idea of denouncing pleasure');
		$transportex_callout_button_one_label = get_theme_mod('transportex_callout_button_one_label',__('Get Started Now!','transportex'));
		$transportex_callout_button_one_link = get_theme_mod('transportex_callout_button_one_link','#');
		$transportex_callout_button_one_target = get_theme_mod('transportex_callout_button_one_target',true);
		$transportex_callout_enable = get_theme_mod('transportex_callout_enable','on');
		if($transportex_callout_enable !='off'){
		if($transportex_callout_background != '') { 
		?>		
<section class="ta-callout" style="background-image:url('<?php echo esc_url($transportex_callout_background);?>');">
<?php } else { ?>
<section class="ta-callout">
<?php } ?>
<div class="overlay" style="background:<?php echo $transportex_overlay_callout_color_control;?>">
      <!--container-->
      <div class="container">
        <!--row-->
        <div class="row">
          <!--ta-callout-inner-->
            <div class="ta-callout-inner text-xs text-center">
                <h3 class="padding-bottom-30"><?php echo $transportex_callout_title;  ?></h3>
    	        <p class="padding-bottom-50"><?php echo $transportex_callout_description;  ?></p>
            <a href="#"  target="_blank" class="btn btn-theme-two margin-bottom-10"><?php echo $transportex_callout_button_one_label; ?></a>
            </div>
        </div>
          <!--ta-callout-inner-->
        </div>
        <!--/row-->
</div>
      <!--/contransportexiner-->
</section>
<!-- /Portfolio Section -->

<div class="clearfix"></div>	
<?php } }

endif;

		if ( function_exists( 'icycp_transportex_callout' ) ) {
		$section_priority = apply_filters( 'icycp_transportex_homepage_section_priority', 12, 'icycp_transportex_callout' );
		add_action( 'icycp_transportex_homepage_sections', 'icycp_transportex_callout', absint( $section_priority ) );

		}
	
//Testimonial
if ( ! function_exists( 'icycp_transportex_testimonial' ) ) :

	function icycp_transportex_testimonial() {

$testimonial_section_enable = get_theme_mod('testimonial_section_enable','on');
if($testimonial_section_enable !='off')
{
$testimonial_section_title = get_theme_mod('testimonial_section_title','Our Clients Says');
$testimonial_section_discription= get_theme_mod('testimonial_section_discription','laoreet ipsum eu laoreet. ugiignissimat Vivamus dignissim feugiat erat sit amet convallis.')
?>
<section class="testimonials-section">
    <!--overlay-->
    <div class="overlay">
      <!--container-->
      <div class="container">
        <!--row-->
        <div class="row">
          <div class="col-md-12 wow fadeInDown  padding-bottom-20">
            <div class="ta-heading">
              <h3 class="ta-heading-inner"><?php echo $testimonial_section_title; ?></h3>
			  <p><?php echo $testimonial_section_discription; ?></p>
            </div>
          </div>
        </div>
        <!--/row-->
        <!--content-testimonials-->
        <div class="row">
            <!--item-->
           <?php 
				 $testimonial_one_title=  get_theme_mod('testimonial_one_title','Professional Team');
				 $testimonial_one_desc = get_theme_mod('testimonial_one_desc','Vestibulum quis porttitor dui! viverra nunc mi, Aliquam condimentum mattis neque sed pretium Aliquam condimentum mattis neque sed pretiumAliquam condimentum mattis neque sed pretium');
				 $testimonial_one_thumb = get_theme_mod('testimonial_one_thumb',ICYCP_PLUGIN_URL .'inc/transportex/images/testimonial/testi1.jpg');
				 $testimonial_one_name = get_theme_mod('testimonial_one_name','Williams Moore');
				 $testimonial_one_designation = get_theme_mod('testimonial_one_designation','Creative Designer');
				 
				 $testimonial_two_title=  get_theme_mod('testimonial_two_title','Professional Team');
				 $testimonial_two_desc = get_theme_mod('testimonial_two_desc','Vestibulum quis porttitor dui! viverra nunc mi, Aliquam condimentum mattis neque sed pretium Aliquam condimentum mattis neque sed pretiumAliquam condimentum mattis neque sed pretium');
				 $testimonial_two_thumb = get_theme_mod('testimonial_two_thumb',ICYCP_PLUGIN_URL .'inc/transportex/images/testimonial/testi2.jpg');
				 $testimonial_two_name = get_theme_mod('testimonial_two_name','Williams Moore');
				 $testimonial_two_designation = get_theme_mod('testimonial_two_designation','Creative Designer');
		   ?>
			
          <div class="col-md-6 testimonial-one">
            <div class="testimonials_qute">
              <div class="sub-qute">
                <div></div>
                <div class="qute_icons">
                  <i class="fa fa-quote-left"></i>
                </div>
              </div> 
              <div class="testi_discription">
                <div class="clearfix"></div>
                <h5><?php echo $testimonial_one_title ?></h5>
                <p><?php echo $testimonial_one_desc ?></p>             
              </div>
              <div class="ta-client-qute">
                <span class="ta-client">
                  <img src="<?php echo $testimonial_one_thumb; ?>" alt="<?php echo $testimonial_one_name; ?>">
                </span>
                <div class="ti-client-info">  
                  <p class="user-title">
                    <?php echo $testimonial_one_name; ?>
                    </p>
                    <p class="user-designation">
                    </p> 
                  </div>
              </div>
            </div>
          </div>
              
          <div class="col-md-6 testimonial-two">
            <div class="testimonials_qute">
              <div class="sub-qute">
                <div></div>
                <div class="qute_icons">
                  <i class="fa fa-quote-left"></i>
                </div>
              </div> 
              <div class="testi_discription">
                <div class="clearfix"></div>
                <h5><?php echo $testimonial_two_title ?></h5>
                  <p><?php echo $testimonial_two_desc ?></p>         
              </div>
              <div class="ta-client-qute">
                <span class="ta-client">
                  <img src="<?php echo $testimonial_two_thumb; ?>" alt="<?php echo $testimonial_two_name; ?>">
                </span>
                  <div class="ti-client-info">  
                    <p class="user-title">
                    <?php echo $testimonial_two_name; ?>
                    </p>
                    <p class="user-designation">
                    </p> 
                  </div>
              </div>
            </div>
          </div>
			 
          <!--/testimonial-->
        </div>
        <!--/content-testimonials-->
      </div>
      <!--/contransportexiner-->
    </div>
    <!--/overlay-->
  </section>

		<?php
	} }

endif;

		if ( function_exists( 'icycp_transportex_testimonial' ) ) {
		$section_priority = apply_filters( 'icycp_transportex_homepage_section_priority', 14, 'icycp_transportex_testimonial' );
		add_action( 'icycp_transportex_homepage_sections', 'icycp_transportex_testimonial', absint( $section_priority ) );
}