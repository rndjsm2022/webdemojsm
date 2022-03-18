<?php if ( ! function_exists( 'icycp_transportex_slider_customize_register' ) ) :
function icycp_transportex_slider_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

class Icycp_transportex_Toggle_Switch_Custom_control extends WP_Customize_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'toogle_switch';
		/**
		 * Enqueue our scripts and styles
		 */
		/**
		 * Render the control in the customizer
		 */
		public function render_content(){
		?>
			<div class="toggle-switch-control">
				<div class="toggle-switch">
					<input type="checkbox" id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" class="toggle-switch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
					<label class="toggle-switch-label" for="<?php echo esc_attr( $this->id ); ?>">
						<span class="toggle-switch-inner"></span>
						<span class="toggle-switch-switch"></span>
					</label>
				</div>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>
			</div>
		<?php
		}
}


/* Slider Section */
	$wp_customize->add_section( 'slider_section' , array(
		'title'      => __('Slider settings', 'icyclub'),
		'panel'  => 'homepage_setting',
		'priority'   => 1,
   	) );
		
		$wp_customize->add_setting( 'transportex_slider_enable',
		   array(
			  'default' => 1,
			  'transport' => 'refresh',
			  'sanitize_callback' => 'icycp_transportex_switch_sanitization'
		   )
		);
		 
		$wp_customize->add_control( new Icycp_transportex_Toggle_Switch_Custom_control( $wp_customize, 'transportex_slider_enable',
		   array(
			  'label' => esc_html__( 'Slider Enable/Disable' ),
			  'section' => 'slider_section'
		   )
		) );

		
		//Slider Image One

		$wp_customize->add_setting( 'slider_image_one',array('default' => ICYCP_PLUGIN_URL .'inc/transportex/images/slider/slider1.jpg',
		'sanitize_callback' => 'esc_url_raw'));
 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'slider_image_one',
				array(
					'type'        => 'upload',
					'label' => __('Image','icyclub'),
					'settings' =>'slider_image_one',
					'section' => 'slider_section',
					
				)
			)
		);
		
		//Slider Background Overlay Color
		$wp_customize->add_setting( 'slider_overlay_color_one', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'rgba(0,0,0,0.8)',
            ) );	
            
            $wp_customize->add_control(new transportex_Customize_Alpha_Color_Control( $wp_customize,'slider_overlay_color_one', array(
               'label'      => __('Slider image overlay color','transportex' ),
                'palette' => true,
                'section' => 'slider_section')
            ) );
		
		// Slider title
		$wp_customize->add_setting( 'transportex_slider_title_one',array(
		'default' => __('We help from our fleet Send it anywhere','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_title_one',array(
		'label'   => __('Title','icyclub'),
		'section' => 'slider_section',
		'type' => 'text',
		));	
		
		//Slider discription
		$wp_customize->add_setting( 'transportex_slider_discription_one',array(
		'default' => 'we bring the proper people along to challenge established thinking and drive transformation.',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_discription_one',array(
		'label'   => __('Description','icyclub'),
		'section' => 'slider_section',
		'type' => 'textarea',
		));
		
		
		// Slider button text
		$wp_customize->add_setting( 'transportex_slider_btn_txt_one',array(
		'default' => __('Read more','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_btn_txt_one',array(
		'label'   => __('Button Text','icyclub'),
		'section' => 'slider_section',
		'type' => 'text',
		));
		
		// Slider button link
		$wp_customize->add_setting( 'transportex_slider_btn_link_one',array(
		'default' => '#',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'transportex_slider_btn_link_one',array(
		'label'   => __('Button Link','icyclub'),
		'section' => 'slider_section',
		'type' => 'text',
		));
		
		// Slider button target
		$wp_customize->add_setting(
		'transportex_slider_btn_target_one', 
			array(
			'default'        => false,
			'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));
		$wp_customize->add_control('transportex_slider_btn_target_one', array(
			'label'   => __('Open link in new tab', 'icyclub'),
			'section' => 'slider_section',
			'type' => 'checkbox',
		));

		//Slider Image Two
		
		$wp_customize->add_setting( 'slider_image_two',array('default' => ICYCP_PLUGIN_URL .'inc/transportex/images/slider/slider2.jpg',
		'sanitize_callback' => 'esc_url_raw'));
 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'slider_image_two',
				array(
					'type'        => 'upload',
					'label' => __('Image','icyclub'),
					'settings' =>'slider_image_two',
					'section' => 'slider_section',
					
				)
			)
		);
		
		//Slider Background Overlay Color
		$wp_customize->add_setting( 'slider_overlay_color_two', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'rgba(0,0,0,0.8)',
            ) );	
            
            $wp_customize->add_control(new transportex_Customize_Alpha_Color_Control( $wp_customize,'slider_overlay_color_two', array(
               'label'      => __('Slider image overlay color','transportex' ),
                'palette' => true,
                'section' => 'slider_section')
            ) );
		
		// Slider title
		$wp_customize->add_setting( 'transportex_slider_title_two',array(
		'default' => __('Transport your goods Around the World','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_title_two',array(
		'label'   => __('Title','icyclub'),
		'section' => 'slider_section',
		'type' => 'text',
		));	
		
		//Slider discription
		$wp_customize->add_setting( 'transportex_slider_discription_two',array(
		'default' => 'we bring the proper people along to challenge established thinking and drive transformation.',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_discription_two',array(
		'label'   => __('Description','icyclub'),
		'section' => 'slider_section',
		'type' => 'textarea',
		));
		
		
		// Slider button text
		$wp_customize->add_setting( 'transportex_slider_btn_txt_two',array(
		'default' => __('Read more','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_btn_txt_two',array(
		'label'   => __('Button Text','icyclub'),
		'section' => 'slider_section',
		'type' => 'text',
		));
		
		// Slider button link
		$wp_customize->add_setting( 'transportex_slider_btn_link_two',array(
		'default' => '#',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_btn_link_two',array(
		'label'   => __('Button Link','icyclub'),
		'section' => 'slider_section',
		'type' => 'text',
		));
		
		// Slider button target
		$wp_customize->add_setting(
		'transportex_slider_btn_target_two', 
			array(
			'default'        => false,
			'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));
		$wp_customize->add_control('transportex_slider_btn_target_two', array(
			'label'   => __('Open link in new tab', 'icyclub'),
			'section' => 'slider_section',
			'type' => 'checkbox',
		));


		//Slider Image Three
		
		$wp_customize->add_setting( 'slider_image_three',array('default' => ICYCP_PLUGIN_URL .'inc/transportex/images/slider/slider3.jpg',
		'sanitize_callback' => 'esc_url_raw'));
 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'slider_image_three',
				array(
					'type'        => 'upload',
					'label' => __('Image','icyclub'),
					'settings' =>'slider_image_three',
					'section' => 'slider_section',
					
				)
			)
		);
		
		//Slider Background Overlay Color
		$wp_customize->add_setting( 'slider_overlay_color_three', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'rgba(0,0,0,0.8)'
            ) );	
            
            $wp_customize->add_control(new transportex_Customize_Alpha_Color_Control( $wp_customize,'slider_overlay_color_three', array(
               'label'      => __('Slider image overlay color','transportex' ),
                'palette' => true,
                'section' => 'slider_section')
            ) );
		
		// Slider title
		$wp_customize->add_setting( 'transportex_slider_title_three',array(
		'default' => __('Transport your goods Around the World','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_title_three',array(
		'label'   => __('Title','icyclub'),
		'section' => 'slider_section',
		'type' => 'text',
		));	
		
		//Slider discription
		$wp_customize->add_setting( 'transportex_slider_discription_three',array(
		'default' => 'we bring the proper people along to challenge established thinking and drive transformation.',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_discription_three',array(
		'label'   => __('Description','icyclub'),
		'section' => 'slider_section',
		'type' => 'textarea',
		));
		
		
		// Slider button text
		$wp_customize->add_setting( 'transportex_slider_btn_txt_three',array(
		'default' => __('Read more','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_btn_txt_three',array(
		'label'   => __('Button Text','icyclub'),
		'section' => 'slider_section',
		'type' => 'text',
		));
		
		// Slider button link
		$wp_customize->add_setting( 'transportex_slider_btn_link_three',array(
		'default' => '#',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'transportex_slider_btn_link_three',array(
		'label'   => __('Button Link','icyclub'),
		'section' => 'slider_section',
		'type' => 'text',
		));
		
		// Slider button target
		$wp_customize->add_setting(
		'transportex_slider_btn_target_three', 
			array(
			'default'        => false,
			'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));
		$wp_customize->add_control('transportex_slider_btn_target_three', array(
			'label'   => __('Open link in new tab', 'icyclub'),
			'section' => 'slider_section',
			'type' => 'checkbox',
		));
		
		
		
}

add_action( 'customize_register', 'icycp_transportex_slider_customize_register' );
endif;


/**
 * Add selective refresh for Front page section section controls.
 */
function icycp_transportex_register_slider_section_partials( $wp_customize ){

	
	
	$wp_customize->selective_refresh->add_partial( 'slider_image', array(
		'selector'            => '.transportex-slider-warraper .item figure',
		'settings'            => 'slider_image',
	
	) );
	
	//Slider section
	$wp_customize->selective_refresh->add_partial( 'transportex_slider_title', array(
		'selector'            => '#ta-slider .slide-caption h1',
		'settings'            => 'transportex_slider_title',
		'render_callback'  => 'icycp_transportex_slider_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'transportex_slider_discription', array(
		'selector'            => '#ta-slider .slide-caption .description p',
		'settings'            => 'transportex_slider_discription',
		'render_callback'  => 'icycp_transportex_slider_iscription_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'transportex_slider_btn_txt', array(
		'selector'            => '.slide-caption .btn-tislider',
		'settings'            => 'transportex_slider_btn_txt',
		'render_callback'  => 'icycp_transportex_slider_btn_render_callback',
	
	) );
}

add_action( 'customize_register', 'icycp_transportex_register_slider_section_partials' );


function icycp_transportex_slider_title_render_callback() {
	return get_theme_mod( 'transportex_slider_title' );
}

function icycp_transportex_slider_iscription_render_callback() {
	return get_theme_mod( 'transportex_slider_discription' );
}

function icycp_transportex_slider_btn_render_callback() {
	return get_theme_mod( 'transportex_slider_btn_txt' );
}


if ( ! function_exists( 'icycp_transportex_service_customize_register' ) ) :
function icycp_transportex_service_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

/* Services section */
	$wp_customize->add_section( 'services_section' , array(
		'title'      => __('Service settings', 'icyclub'),
		'panel'  => 'homepage_setting',
		'priority'   => 1,
	) );
		
		$wp_customize->add_setting( 'transportex_service_enable',
		   array(
			  'default' => 1,
			  'transport' => 'refresh',
			  'sanitize_callback' => 'icycp_transportex_switch_sanitization'
		   )
		);
		 
		$wp_customize->add_control( new Icycp_transportex_Toggle_Switch_Custom_control( $wp_customize, 'transportex_service_enable',
		   array(
			  'label' => esc_html__( 'Service Enable/Disable' ),
			  'section' => 'services_section'
		   )
		) );

		
		
		// Service section title
		$wp_customize->add_setting( 'service_section_title',array(
		'capability'     => 'edit_theme_options',
		'default' => __('Why We Best in Business Services','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'service_section_title',array(
		'label'   => __('Title','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));	
		
		//Service section discription
		$wp_customize->add_setting( 'service_section_discription',array(
		'capability'     => 'edit_theme_options',
		'default' => 'laoreet ipsum eu laoreet. ugiignissimat Vivamus dignissim feugiat erat sit amet convallis.',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'service_section_discription',array(
		'label'   => __('Description','icyclub'),
		'section' => 'services_section',
		'type' => 'textarea',
		));

		
		// Service icon feature setting
		$wp_customize->add_setting( 'service_one_icon',array(
		'default' => 'fa fa-thumbs-up',
		));	
		$wp_customize->add_control( 'service_one_icon',array(
		'label'   => __('Service Icon','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));	
		
		
		
		// Service section title
		$wp_customize->add_setting( 'service_one_title',array(
		'default' => __('Market Analysis','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'service_one_title',array(
		'label'   => __('Title','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));	
		
		//Service section discription
		$wp_customize->add_setting( 'service_one_description',array(
		'default' => 'laoreet Pellentesque molestie laoreet laoreet.',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'service_one_description',array(
		'label'   => __('Description','icyclub'),
		'section' => 'services_section',
		'type' => 'textarea',
		));
		
		
		// service read more button text
		$wp_customize->add_setting( 'ser_one_btn_text',array(
		'default' => __('Read more','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'ser_one_btn_text',array(
		'label'   => __('Button Text','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));
		
		// service read more button link
		$wp_customize->add_setting( 'ser_one_btn_link',array(
		'default' => __('#','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'ser_one_btn_link',array(
		'label'   => __('Button Link','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));
		
		// service read more button tab
		$wp_customize->add_setting(
		'ser_one_btn_tab', 
			array(
			'default'        => false,
			'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));
		$wp_customize->add_control('ser_one_btn_tab', array(
			'label'   => __('Open link in new tab/window', 'icyclub'),
			'section' => 'services_section',
			'type' => 'checkbox',
		));
		
		
		// Service icon two feature setting
		$wp_customize->add_setting( 'service_two_icon',array(
		'default' => 'fa fa-bank',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'service_two_icon',array(
		'label'   => __('Service Icon','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));	
		
		
		
		// Service section title
		$wp_customize->add_setting( 'service_two_title',array(
		'default' => __('Business Planning','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'service_two_title',array(
		'label'   => __('Title','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));	
		
		//Service section discription
		$wp_customize->add_setting( 'service_two_description',array(
		'default' => 'laoreet Pellentesque molestie laoreet laoreet.',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'service_two_description',array(
		'label'   => __('Description','icyclub'),
		'section' => 'services_section',
		'type' => 'textarea',
		));
		
		
		// service read more button text
		$wp_customize->add_setting( 'ser_two_btn_text',array(
		'default' => __('Read more','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'ser_two_btn_text',array(
		'label'   => __('Button Text','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));
		
		// service read more button link
		$wp_customize->add_setting( 'ser_two_btn_link',array(
		'default' => '#',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'ser_two_btn_link',array(
		'label'   => __('Button Link','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));
		
		// service read more button tab
		$wp_customize->add_setting(
		'ser_two_btn_tab', 
			array(
			'default'        => false,
			'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));
		$wp_customize->add_control('ser_two_btn_tab', array(
			'label'   => __('Open link in new tab/window', 'icyclub'),
			'section' => 'services_section',
			'type' => 'checkbox',
		));
		
		
		// Service icon three feature setting
		$wp_customize->add_setting( 'service_three_icon',array(
		'default' => 'fa fa-bank',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'service_three_icon',array(
		'label'   => __('Service Icon','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));	
		
		
		
		// Service section title
		$wp_customize->add_setting( 'service_three_title',array(
		'default' => __('Financial Planning','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'service_three_title',array(
		'label'   => __('Title','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));	
		
		//Service section discription
		$wp_customize->add_setting( 'service_three_description',array(
		'default' => 'laoreet Pellentesque molestie laoreet laoreet.',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'service_three_description',array(
		'label'   => __('Description','icyclub'),
		'section' => 'services_section',
		'type' => 'textarea',
		));
		
		
		// service read more button text
		$wp_customize->add_setting( 'ser_three_btn_text',array(
		'default' => __('Read more','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'ser_three_btn_text',array(
		'label'   => __('Button Text','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));
		
		// service read more button link
		$wp_customize->add_setting( 'ser_three_btn_link',array(
		'default' => '#',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'ser_three_btn_link',array(
		'label'   => __('Button Link','icyclub'),
		'section' => 'services_section',
		'type' => 'text',
		));
		
		// service read more button tab
		$wp_customize->add_setting(
		'ser_three_btn_tab', 
			array(
			'default'        => false,
			'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));
		$wp_customize->add_control('ser_three_btn_tab', array(
			'label'   => __('Open link in new tab/window', 'icyclub'),
			'section' => 'services_section',
			'type' => 'checkbox',
		));
	
}

add_action( 'customize_register', 'icycp_transportex_service_customize_register' );
endif;


/**
 * Selective refresh for service section
 */
function icycp_transportex_register_service_section_partials( $wp_customize ){

	//Service
	$wp_customize->selective_refresh->add_partial( 'service_section_title', array(
		'selector'            => '.ta-service .transportex-heading h3',
		'settings'            => 'service_section_title',
		'render_callback'  => 'icycp_transportex_service_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'service_section_discription', array(
		'selector'            => '.ta-service .transportex-heading p',
		'settings'            => 'service_section_discription',
		'render_callback'  => 'icycp_transportex_service_discription_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'service_one_title', array(
		'selector'            => '.service-one h3',
		'settings'            => 'service_one_title',
		'render_callback'  => 'icycp_transportex_service_one_title_render_callback',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'service_one_description', array(
		'selector'            => '.service-one .ta-service.three p',
		'settings'            => 'service_one_description',
		'render_callback'  => 'icycp_transportex_service_one_desc_render_callback',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'ser_one_btn_text', array(
		'selector'            => '.service-one a',
		'settings'            => 'ser_one_btn_text',
		'render_callback'  => 'icycp_transportex_service_one_btn_render_callback',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'service_two_title', array(
		'selector'            => '.service-two h3',
		'settings'            => 'service_two_title',
		'render_callback'  => 'icycp_transportex_service_two_title_render_callback',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'service_two_description', array(
		'selector'            => '.service-two .ta-service.three p',
		'settings'            => 'service_two_description',
		'render_callback'  => 'icycp_transportex_service_two_desc_render_callback',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'ser_two_btn_text', array(
		'selector'            => '.service-two a',
		'settings'            => 'ser_two_btn_text',
		'render_callback'  => 'icycp_transportex_service_two_btn_render_callback',
	
	) );
	
	
	//Service three
	$wp_customize->selective_refresh->add_partial( 'service_three_title', array(
		'selector'            => '.service-three h3',
		'settings'            => 'service_three_title',
		'render_callback'  => 'icycp_transportex_service_three_title_render_callback',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'service_three_description', array(
		'selector'            => '.service-three .ta-service.three p',
		'settings'            => 'service_three_description',
		'render_callback'  => 'icycp_transportex_service_three_desc_render_callback',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'ser_three_btn_text', array(
		'selector'            => '.service-three a',
		'settings'            => 'ser_three_btn_text',
		'render_callback'  => 'icycp_transportex_service_three_btn_render_callback',
	
	) );
	
	
	
}

add_action( 'customize_register', 'icycp_transportex_register_service_section_partials' );


function icycp_transportex_service_title_render_callback() {
	return get_theme_mod( 'service_section_title' );
}

function icycp_transportex_service_discription_render_callback() {
	return get_theme_mod( 'service_section_discription' );
}

//Service one

function icycp_transportex_service_one_title_render_callback() {
	return get_theme_mod( 'service_one_title' );
}

function icycp_transportex_service_one_desc_render_callback() {
	return get_theme_mod( 'service_one_description' );
}

function icycp_transportex_service_one_btn_render_callback() {
	return get_theme_mod( 'ser_one_btn_text' );
}


//Service two

function icycp_transportex_service_two_title_render_callback() {
	return get_theme_mod( 'service_two_title' );
}

function icycp_transportex_service_two_desc_render_callback() {
	return get_theme_mod( 'service_two_description' );
}

function icycp_transportex_service_two_btn_render_callback() {
	return get_theme_mod( 'ser_two_btn_text' );
}

//Service three

function icycp_transportex_service_three_title_render_callback() {
	return get_theme_mod( 'service_three_title' );
}

function icycp_transportex_service_three_desc_render_callback() {
	return get_theme_mod( 'service_three_description' );
}

function icycp_transportex_service_three_btn_render_callback() {
	return get_theme_mod( 'ser_three_btn_text' );
}


//Callout
if ( ! function_exists( 'icycp_transportex_callout_customize_register' ) ) :
function icycp_transportex_callout_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

/* Slider Section */
	$wp_customize->add_section( 'home_callout_section' , array(
		'title'      => __('Callout settings', 'transportex'),
		'panel'  => 'homepage_setting',
		'priority'   => 3,
   	) );
		
		// Enable slider
		
		
		
		$wp_customize->add_setting( 'transportex_callout_enable',
		   array(
			  'default' => 1,
			  'transport' => 'refresh',
			  'sanitize_callback' => 'icycp_transportex_switch_sanitization'
		   )
		);
		 
		$wp_customize->add_control( new Icycp_transportex_Toggle_Switch_Custom_control( $wp_customize, 'transportex_callout_enable',
		   array(
			  'label' => esc_html__( 'Callout Enable/Disable' ),
			  'section' => 'home_callout_section'
		   )
		) );

		//Callout background Image
		$wp_customize->add_setting( 'transportex_callout_background',array('default' => ICYCP_PLUGIN_URL .'inc/transportex/images/callout/callout-back.jpg',
		'sanitize_callback' => 'esc_url_raw'));
 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'transportex_callout_background',
				array(
					'type'        => 'upload',
					'label' => __('Image','transportex'),
					'settings' =>'transportex_callout_background',
					'section' => 'home_callout_section',
					
				)
			)
		);
		
		
		
		
		//Callout Background Overlay Color
		$wp_customize->add_setting( 'transportex_overlay_callout_color_control', array(
			'default' => 'rgba(0,41,84,0.8)',
            ) );	
            
            $wp_customize->add_control(new transportex_Customize_Alpha_Color_Control( $wp_customize,'transportex_overlay_callout_color_control', array(
               'label'      => __('Callout image overlay color','transportex' ),
                'palette' => true,
                'section' => 'home_callout_section')
            ) );
		
		
		// callout title
		$wp_customize->add_setting( 'transportex_callout_title',array(
		'default' => __('Trusted By Over 10,000 Worldwide Businesses. Try Today!','transportex'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'transportex_callout_title',array(
		'label'   => __('Title','transportex'),
		'section' => 'home_callout_section',
		'type' => 'text',
		));	
		
		//callout description
		$wp_customize->add_setting( 'transportex_callout_description',array(
		'default' => 'We must explain to you how all this mistaken idea of denouncing pleasure',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'transportex_callout_description',array(
		'label'   => __('Description','transportex'),
		'section' => 'home_callout_section',
		'type' => 'textarea',
		));
		
		
		// callout button text
		$wp_customize->add_setting( 'transportex_callout_button_one_label',array(
		'default' => __('Get Started Now!','transportex'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'transportex_callout_button_one_label',array(
		'label'   => __('Button Text','transportex'),
		'section' => 'home_callout_section',
		'type' => 'text',
		));
		
		// Callout button link
		$wp_customize->add_setting( 'transportex_callout_button_one_link',array(
		'default' => '#',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'transportex_callout_button_one_link',array(
		'label'   => __('Button Link','transportex'),
		'section' => 'home_callout_section',
		'type' => 'text',
		));
		
		// Callout button target
		$wp_customize->add_setting(
		'transportex_callout_button_one_target', 
			array(
			'default'        => false,
			'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));
		$wp_customize->add_control('transportex_callout_button_one_target', array(
			'label'   => __('Open link in new tab/window', 'transportex'),
			'section' => 'home_callout_section',
			'type' => 'checkbox',
		));
		
		
}

add_action( 'customize_register', 'icycp_transportex_callout_customize_register' );
endif;


/**
 * Add selective refresh for Front page section section controls.
 */
function icycp_transportex_register_callout_section_partials( $wp_customize ){

	
	
	$wp_customize->selective_refresh->add_partial( 'transportex_callout_title', array(
		'selector'            => '.ta-callout .ta-heading h3',
		'settings'            => 'transportex_callout_title',
		'render_callback'  => 'icycp_transportex_callout_section_title_render_callback',
	
	) );
	
	//Slider section
	$wp_customize->selective_refresh->add_partial( 'transportex_callout_description', array(
		'selector'            => '.ta-callout p',
		'settings'            => 'transportex_callout_description',
		'render_callback'  => 'icycp_transportex_callout_section_desc_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'transportex_callout_button_one_label', array(
		'selector'            => '.ta-callout a',
		'settings'            => 'transportex_callout_button_one_label',
		'render_callback'  => 'icycp_transportex_callout_btn_txt_render_callback',
	
	) );
}

add_action( 'customize_register', 'icycp_transportex_register_callout_section_partials' );


function icycp_transportex_callout_section_title_render_callback() {
	return get_theme_mod( 'transportex_callout_title' );
}

function icycp_transportex_callout_section_desc_render_callback() {
	return get_theme_mod( 'transportex_callout_description' );
}

function icycp_transportex_callout_btn_txt_render_callback() {
	return get_theme_mod( 'transportex_callout_button_one_label' );
}

//Project Section
if ( ! function_exists( 'icycp_transportex_calltoaction_customizer' ) ) :
function icycp_transportex_calltoaction_customizer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	/* project Section */
	$wp_customize->add_section( 'calltoaction_section' , array(
			'title'      => __('Calltoaction settings', 'icyclub'),
			'panel'  => 'homepage_setting',
			'priority'   => 4,
		) );
		
		$wp_customize->add_setting( 'calltoaction_section_enable',
		   array(
			  'default' => 1,
			  'transport' => 'refresh',
			  'sanitize_callback' => 'icycp_transportex_switch_sanitization'
		   )
		);
		 
		$wp_customize->add_control( new Icycp_transportex_Toggle_Switch_Custom_control( $wp_customize, 'project_section_enable',
		   array(
			  'label' => esc_html__( 'Calltoaction Enable/Disable' ),
			  'section' => 'calltoaction_section'
		   )
		) );
		
		// project section title
		$wp_customize->add_setting( 'calltoaction_section_title',array(
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'default' => __('Make A Difference With Expert Team','icyclub'),
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'calltoaction_section_title',array(
		'label'   => __('Title','icyclub'),
		'section' => 'calltoaction_section',
		'type' => 'text',
		));	
		
		//project section discription
		$wp_customize->add_setting( 'calltoaction_section_discription',array(
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'default' => 'laoreet ipsum eu laoreet. ugiignissimat Vivamus dignissim feugiat erat sit amet convallis.',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'calltoaction_section_discription',array(
		'label'   => __('Description','icyclub'),
		'section' => 'calltoaction_section',
		'type' => 'textarea',
		));
		
		
		// callout button text
		$wp_customize->add_setting( 'transportex_calltoaction_button_label',array(
		'default' => __('Lets Start','transportex'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'transportex_calltoaction_button_label',array(
		'label'   => __('Button Text','transportex'),
		'section' => 'calltoaction_section',
		'type' => 'text',
		));
		
		// Callout button link
		$wp_customize->add_setting( 'transportex_calltoaction_button_link',array(
		'default' => '#',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'transportex_calltoaction_button_link',array(
		'label'   => __('Button Link','transportex'),
		'section' => 'calltoaction_section',
		'type' => 'text',
		));
		
		// Callout button target
		$wp_customize->add_setting(
		'transportex_calltoaction_button_target', 
			array(
			'default'        => false,
			'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		));
		$wp_customize->add_control('transportex_calltoaction_button_target', array(
			'label'   => __('Open link in new tab/window', 'transportex'),
			'section' => 'calltoaction_section',
			'type' => 'checkbox',
		));
		
		

}		
add_action( 'customize_register', 'icycp_transportex_calltoaction_customizer' );
endif;

/**
 * Add selective refresh for project section.
 */
function icycp_transportex_register_calltoaction_section_partials( $wp_customize ){

	
	//calltoaction section
	$wp_customize->selective_refresh->add_partial( 'calltoaction_section_title', array(
		'selector'            => '.ta-calltoaction-box-info h5',
		'settings'            => 'calltoaction_section_title',
		'render_callback'  => 'icycp_transportex_calltoaction_section_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'calltoaction_section_discription', array(
		'selector'            => '.ta-calltoaction-box-info p',
		'settings'            => 'calltoaction_section_discription',
		'render_callback'  => 'icycp_transportex_calltoaction_section_discription_render_callback',
	
	) );

	$wp_customize->selective_refresh->add_partial( 'transportex_calltoaction_button_label', array(
		'selector'            => '.ta-calltoaction .btn-theme',
		'settings'            => 'transportex_calltoaction_button_label',
		'render_callback'  => 'icycp_transportex_calltoaction_section_button_render_callback',
	
	) );
}

add_action( 'customize_register', 'icycp_transportex_register_calltoaction_section_partials' );

//Project Section
function icycp_transportex_calltoaction_section_title_render_callback() {
	return get_theme_mod( 'calltoaction_section_title' );
}

function icycp_transportex_calltoaction_section_discription_render_callback() {
	return get_theme_mod( 'calltoaction_section_discription' );
}

function icycp_transportex_calltoaction_section_button_render_callback() {
	return get_theme_mod( 'transportex_calltoaction_button_label' );
}




if ( ! function_exists( 'icycp_transportex_testimonial_customize_register' ) ) :
function icycp_transportex_testimonial_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

/* Testimonial Section */
	$wp_customize->add_section( 'testimonial_section' , array(
			'title'      => __('Testimonial settings', 'icyclub'),
			'panel'  => 'homepage_setting',
			'priority'   => 7,
		) );
		
		// Enable testimonial section
		$wp_customize->add_setting( 'testimonial_section_enable',
		   array(
			  'default' => 1,
			  'transport' => 'refresh',
			  'sanitize_callback' => 'icycp_transportex_switch_sanitization'
		   )
		);
		 
		$wp_customize->add_control( new Icycp_transportex_Toggle_Switch_Custom_control( $wp_customize, 'testimonial_section_enable',
		   array(
			  'label' => esc_html__( 'Testimonial Enable/Disable' ),
			  'section' => 'testimonial_section'
		   )
		) );
		
		
		
		//Testimonial Background Image
			$wp_customize->add_setting( 'testimonial_callout_bg',array(
			'sanitize_callback' => 'esc_url_raw', 
			'transport' => $selective_refresh ));
			
			
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'testimonial_callout_bg', array(
			  'label'    => __( 'Background Image', 'icyclub' ),
			  'section'  => 'testimonial_section',
			  'settings' => 'testimonial_callout_bg',
			) ) );
			
			// Image overlay
		$wp_customize->add_setting( 'testimonial_bg_overlay_enable', array(
			'default' => true,
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control('testimonial_bg_overlay_enable', array(
			'label'    => __('Enable/disable testimonial background overlay', 'icyclub' ),
			'section'  => 'testimonial_section',
			'type' => 'checkbox',
		) );
		
		
		//Testimonial Background Overlay Color
		$wp_customize->add_setting( 'testimonial_overlay_color', array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => 'rgba(0,0,0,0.6)',
            ) );	
            
            $wp_customize->add_control(new transportex_Customize_Alpha_Color_Control( $wp_customize,'testimonial_overlay_color', array(
               'label'      => __('Testimonial background image overlay color','icyclub' ),
                'palette' => true,
                'section' => 'testimonial_section')
            ) );
			
		
		// testimonial section title
		$wp_customize->add_setting( 'testimonial_section_title',array(
		'capability'     => 'edit_theme_options',
		'default' => __('Our Clients Says','transportex'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'testimonial_section_title',array(
		'label'   => __('Title','transportex'),
		'section' => 'testimonial_section',
		'type' => 'text',
		));	
		
		//testimonial section discription
		$wp_customize->add_setting( 'testimonial_section_discription',array(
		'capability'     => 'edit_theme_options',
		'default'=> 'laoreet ipsum eu laoreet. ugiignissimat Vivamus dignissim feugiat erat sit amet convallis.',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'testimonial_section_discription',array(
		'label'   => __('Description','icyclub'),
		'section' => 'testimonial_section',
		'type' => 'textarea',
		));
		
		//testimonial one image
		$wp_customize->add_setting( 'testimonial_one_thumb',array('default' => ICYCP_PLUGIN_URL .'inc/transportex/images/testimonial/testi1.jpg',
		'sanitize_callback' => 'esc_url_raw', 'transport'         => $selective_refresh,));
	 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'testimonial_one_thumb',
				array(
					'label' => __('Image','icyclub'),
					'settings' =>'testimonial_one_thumb',
					'section' => 'testimonial_section',
					'type' => 'upload',
				)
			)
		);
		
		// testimonial section title
		$wp_customize->add_setting( 'testimonial_one_title',array(
		'capability'     => 'edit_theme_options',
		'default' => __('Professional Team','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'testimonial_one_title',array(
		'label'   => __('Title','icyclub'),
		'section' => 'testimonial_section',
		'type' => 'text',
		));
		
		//testimonial description
		$wp_customize->add_setting( 'testimonial_one_desc',array(
		'capability'     => 'edit_theme_options',
		'default' => 'Vestibulum quis porttitor dui! viverra nunc mi, Aliquam condimentum mattis neque sed pretium Aliquam condimentum mattis neque sed pretiumAliquam condimentum mattis neque sed pretium',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'testimonial_one_desc',array(
		'label'   => __('Description','icyclub'),
		'section' => 'testimonial_section',
		'type' => 'text',
		));
		
		
		$wp_customize->add_setting( 'testimonial_one_name',array(
		'default' => __('Williams Moore','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'testimonial_one_name',array(
		'label'   => __('Name','icyclub'),
		'section' => 'testimonial_section',
		'type' => 'text',
		));
		
		
		
		//testimonial two image
		$wp_customize->add_setting( 'testimonial_two_thumb',array('default' => ICYCP_PLUGIN_URL .'inc/transportex/images/testimonial/testi2.jpg',
		'sanitize_callback' => 'esc_url_raw', 'transport'         => $selective_refresh,));
	 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'testimonial_two_thumb',
				array(
					'label' => __('Image','icyclub'),
					'settings' =>'testimonial_two_thumb',
					'section' => 'testimonial_section',
					'type' => 'upload',
				)
			)
		);
		
		// testimonial section title
		$wp_customize->add_setting( 'testimonial_two_title',array(
		'capability'     => 'edit_theme_options',
		'default' => __('Professional Team','icyclub'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'testimonial_two_title',array(
		'label'   => __('Title','icyclub'),
		'section' => 'testimonial_section',
		'type' => 'text',
		));
		
		//testimonial description
		$wp_customize->add_setting( 'testimonial_two_desc',array(
		'capability'     => 'edit_theme_options',
		'default' => 'Vestibulum quis porttitor dui! viverra nunc mi, Aliquam condimentum mattis neque sed pretium Aliquam condimentum mattis neque sed pretiumAliquam condimentum mattis neque sed pretium',
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'testimonial_two_desc',array(
		'label'   => __('Description','icyclub'),
		'section' => 'testimonial_section',
		'type' => 'text',
		));
		
		
		$wp_customize->add_setting( 'testimonial_two_name',array(
		'default' => __('Williams Moore','transportex'),
		'sanitize_callback' => 'icycp_transportex_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'testimonial_two_name',array(
		'label'   => __('Name','icyclub'),
		'section' => 'testimonial_section',
		'type' => 'text',
		));
		
		
		
		
}

add_action( 'customize_register', 'icycp_transportex_testimonial_customize_register' );
endif;


/**
 * Selective refresh for testimonial section
 */
function icycp_transportex_register_testimonial_section_partials( $wp_customize ){


	
	//Testimonial
	$wp_customize->selective_refresh->add_partial( 'testimonial_callout_background', array(
		'selector'            => 'section.testimonial-section',
		'settings'            => 'testimonial_callout_background',
	
	) );
	
	//Testimonial one
	$wp_customize->selective_refresh->add_partial( 'testimonial_section_title', array(
		'selector'            => '.testimonials-section .transportex-heading h3',
		'settings'            => 'testimonial_section_title',
		'render_callback'  => 'icycp_transportex_testimonial_section_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_section_discription', array(
		'selector'            => '.testimonials-section .transportex-heading p',
		'settings'            => 'testimonial_section_discription',
		'render_callback'  => 'icycp_transportex_testimonial_section_discription_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_one_title', array(
		'selector'            => '.testimonial-one .testimonials_qute .sub-qute h5',
		'settings'            => 'testimonial_one_title',
		'render_callback'  => 'icycp_transportex_testimonial_one_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_one_desc', array(
		'selector'            => '.testimonial-one .testimonials_qute .sub-qute p',
		'settings'            => 'testimonial_one_desc',
		'render_callback'  => 'icycp_transportex_testimonial_one_desc_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_one_name', array(
		'selector'            => '.testimonial-one .testimonials_qute .transportex-client-info h6',
		'settings'            => 'testimonial_one_name',
		'render_callback'  => 'icycp_transportex_testimonial_name_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_one_designation', array(
		'selector'            => '.testimonial-one .transportex-client-info p',
		'settings'            => 'testimonial_one_designation',
		'render_callback'  => 'icycp_transportex_testimonial_designation_render_callback',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_one_thumb', array(
		'selector'            => '.testmonial-area .author-box',
		'settings'            => 'testimonial_one_thumb',
	
	) );
	
	
	//Testimonial one
	$wp_customize->selective_refresh->add_partial( 'testimonial_two_title', array(
		'selector'            => '.testimonial-two .testimonials_qute .sub-qute h5',
		'settings'            => 'testimonial_two_title',
		'render_callback'  => 'icycp_transportex_testimonial_two_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_two_desc', array(
		'selector'            => '.testimonial-two .testimonials_qute .sub-qute p',
		'settings'            => 'testimonial_two_desc',
		'render_callback'  => 'icycp_transportex_testimonial_two_desc_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_two_name', array(
		'selector'            => '.testimonial-two .testimonials_qute .transportex-client-info h6',
		'settings'            => 'testimonial_two_name',
		'render_callback'  => 'icycp_transportex_testimonial_two_name_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_two_designation', array(
		'selector'            => '.testimonial-two .testimonial_two_designation-client-info p',
		'settings'            => 'testimonial_two_designation',
		'render_callback'  => 'icycp_transportex_testimonial_two_designation_render_callback',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'testimonial_two_thumb', array(
		'selector'            => '.testimonial-two .testmonial-area .author-box',
		'settings'            => 'testimonial_two_thumb',
	
	) );
	
	
}

add_action( 'customize_register', 'icycp_transportex_register_testimonial_section_partials' );

//Testimonial Section
function icycp_transportex_testimonial_section_title_render_callback() {
	return get_theme_mod( 'testimonial_section_title' );
}

function icycp_transportex_testimonial_section_discription_render_callback() {
	return get_theme_mod( 'testimonial_section_discription' );
}

//Testimonial One
function icycp_transportex_testimonial_one_title_render_callback() {
	return get_theme_mod( 'testimonial_one_title' );
}

function icycp_transportex_testimonial_one_desc_render_callback() {
	return get_theme_mod( 'testimonial_one_desc' );
}

function icycp_transportex_testimonial_name_render_callback() {
	return get_theme_mod( 'testimonial_one_name' );
}


function icycp_transportex_testimonial_designation_render_callback() {
	return get_theme_mod( 'testimonial_one_designation' );
}


//Testimonial two
function icycp_transportex_testimonial_two_title_render_callback() {
	return get_theme_mod( 'testimonial_two_title' );
}

function icycp_transportex_testimonial_two_desc_render_callback() {
	return get_theme_mod( 'testimonial_two_desc' );
}

function icycp_transportex_testimonial_two_name_render_callback() {
	return get_theme_mod( 'testimonial_two_name' );
}


function icycp_transportex_testimonial_two_designation_render_callback() {
	return get_theme_mod( 'testimonial_two_designation' );
}



if ( ! function_exists( 'icycp_transportex_switch_sanitization' ) ) {
		function icycp_transportex_switch_sanitization( $input ) {
			if ( true === $input ) {
				return 1;
			} else {
				return 0;
			}
		}
}

//Sanatize text validation
function icycp_transportex_home_page_sanitize_text( $input ) {

		return wp_kses_post( force_balance_tags( $input ) );
}