<?php
/**
 * LogiPro Theme Customizer
 *
 * @package LogiPro
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function logipro_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'logipro_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'logipro_customize_partial_blogdescription',
			)
		);
	}
	$wp_customize->add_panel('logipro', array(
		'title'		 => __('Logi Pro','logipro'),
		'prioprity'  => 70
	));
	$wp_customize->add_section('sliders',array(
		'title'		 => __('Sliders','logipro'),
		'priority'   => 25,
		'panel' 	 => 'logipro',
	));
	/**
	 * First Slide
	 */
	$wp_customize->add_setting('first_slide',array(
		'default'    => '',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'first_slide', array(
		'label' 	 => __('First Slide','logipro'),
		'section'	 => 'sliders',
		'settings'    => 'first_slide'
	)));

	$wp_customize->add_setting('first_slide_top_heading',array(
		'default'   => __('Enter Heading', 'logipro'),
	));
	$wp_customize->add_control('first_slide_top_heading_ctrl',array(
		'label' 	=> __('Add Slider Top Heading','logipro'),
		'type'		=> 'text',
		'settings'	=> 'first_slide_top_heading',
		'section'   => 'sliders'
	));

	$wp_customize->add_setting('first_slide_middle_heading',array(
		'default' 	=>  __('Enter Heading','logipro'), 
	));
	$wp_customize->add_control('first_slide_middle_heading_ctrl',array(
		'label' 	=> __('Add Slider Middle Heading','logipro'),
		'type'		=> 'text',
		'settings'	=> 'first_slide_middle_heading',
		'section'   => 'sliders'
	));

	$wp_customize->add_setting('first_slide_bottom_heading',array(
		'default'   => __('Enter Heading', 'logipro'),
	));
	$wp_customize->add_control('first_slide_bottom_heading_ctrl',array(
		'label'		=> __('Add Slider Bottom Heading', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'first_slide_bottom_heading',
		'section'  => 'sliders'
	));
	/**
	 * Second Slide
	 */
	$wp_customize->add_setting('second_slide',array(
		'default'    => '',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'second_slide', array(
		'label' 	 => __('Second Slide','logipro'),
		'section'	 => 'sliders',
		'settings'   => 'second_slide'
	)));
	$wp_customize->add_setting('second_slide_top_heading',array(
		'default'   => __('Enter Top Heading','logipro'),
	));
	$wp_customize->add_control('second_slide_top_heading_ctrl',array(
		'label'		=> __('Add Slider Top Heading', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'second_slide_top_heading',
		'section'  => 'sliders'
	));
	$wp_customize->add_setting('second_slide_middle_heading',array(
		'default' 	=>  __('Enter Middle Heading','logipro'), 
	));
	$wp_customize->add_control('second_slide_middle_heading_ctrl',array(
		'label' 	=> __('Add Slider Middle Heading','logipro'),
		'type'		=> 'text',
		'settings'	=> 'second_slide_middle_heading',
		'section'   => 'sliders'
	));
	$wp_customize->add_setting('second_slide_bottom_heading',array(
		'default'   => __('Enter Bottom Heading','logipro'),
	));
	$wp_customize->add_control('second_slide_bottom_heading_ctrl',array(
		'label'		=> __('Add Slider Bottom Heading', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'second_slide_bottom_heading',
		'section'  => 'sliders'
	));
	/**
	 * Third Slide
	 */
	$wp_customize->add_setting('third_slide',array(
		'default'    => '',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'third_slide', array(
		'label' 	 => __('Third Slide','logipro'),
		'section'	 => 'sliders',
		'settings'    => 'third_slide'
	)));
	$wp_customize->add_setting('third_slide_top_heading',array(
		'default'   => 'Enter Heading',
	));
	$wp_customize->add_control('third_slide_top_heading_ctrl',array(
		'label'		=> __('Add Slider Top Heading', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'third_slide_top_heading',
		'section'  => 'sliders'
	));
	$wp_customize->add_setting('third_slide_middle_heading',array(
		'default' 	=>  __('Enter Middle Heading','logipro'), 
	));
	$wp_customize->add_control('third_slide_middle_heading_ctrl',array(
		'label' 	=> __('Add Slider Middle Heading','logipro'),
		'type'		=> 'text',
		'settings'	=> 'third_slide_middle_heading',
		'section'   => 'sliders'
	));
	$wp_customize->add_setting('third_slide_bottom_heading',array(
		'default'   => __('Enter Heading','logipro'),
	));
	$wp_customize->add_control('third_slide_bottom_heading_ctrl',array(
		'label'		=> __('Add Slider Bottom Heading', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'third_slide_bottom_heading',
		'section'  => 'sliders'
	));
/**
 * About Us Progress Bar
*/	
	$wp_customize->add_section('progressBar',array(
		'title'		 => __('Progress Bar','logipro'),
		'priority'   => 26,
		'panel' 	 => 'logipro'
	));
	// First Progress Chart
	$wp_customize->add_setting('first_progress',array(
		'default'    => __('Enter First Progress Number','logipro')
	));
	$wp_customize->add_control('first_progress_ctrl',array(
		'label'		=> __('Add First Progress', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'first_progress',
		'section'  => 'progressBar'
	));
	$wp_customize->add_setting('first_progress_year',array(
		'default'    => __('Enter First Progress Year','logipro')
	));
	$wp_customize->add_control('first_progress_year_ctrl',array(
		'label'		=> __('Add First Progress Year', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'first_progress_year',
		'section'  => 'progressBar'
	));
	// Second Progress Chart
	$wp_customize->add_setting('second_progress',array(
		'default'    => __('Enter Second Progress Number','logipro')
	));
	$wp_customize->add_control('second_progress_ctrl',array(
		'label'		=> __('Add Second Progress', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'second_progress',
		'section'  => 'progressBar'
	));
	$wp_customize->add_setting('second_progress_year',array(
		'default'    => __('Enter Second Progress Year','logipro')
	));
	$wp_customize->add_control('second_progress_year_ctrl',array(
		'label'		=> __('Add Second Progress Year', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'second_progress_year',
		'section'  => 'progressBar'
	));
	// Third Progress Chart
	$wp_customize->add_setting('third_progress',array(
		'default'    => __('Enter Third Progress Number','logipro')
	));
	$wp_customize->add_control('third_progress_ctrl',array(
		'label'		=> __('Add Third Progress', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'third_progress',
		'section'  => 'progressBar'
	));
	$wp_customize->add_setting('third_progress_year',array(
		'default'    => __('Enter Third Progress Year','logipro')
	));
	$wp_customize->add_control('third_progress_year_ctrl',array(
		'label'		=> __('Add Third Progress Year', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'third_progress_year',
		'section'  => 'progressBar'
	));
	// Fourth Progress Chart
	$wp_customize->add_setting('forth_progress',array(
		'default'    => __('Enter Forth Progress Number','logipro')
	));
	$wp_customize->add_control('forth_progress_ctrl',array(
		'label'		=> __('Add Forth Progress', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'forth_progress',
		'section'  => 'progressBar'
	));
	$wp_customize->add_setting('forth_progress_year',array(
		'default'    => __('Enter Forth Progress Year','logipro')
	));
	$wp_customize->add_control('forth_progress_year_ctrl',array(
		'label'		=> __('Add Forth Progress Year', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'forth_progress_year',
		'section'  => 'progressBar'
	));

	/**
	 * Core Values
	 */
	$wp_customize->add_section('corevalue', array(
		'title'		 => __('Core Values','logipro'),
		'priority'   => 27,
		'panel' 	 => 'logipro'
	));
	$wp_customize->add_setting('corevalue_heading',array(
		'default' => __('Enter Heading'),
	));
	$wp_customize->add_control('corevalue_heading_ctrl',array(
		'label'		=> __('Add Heading', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'corevalue_heading',
		'section'  => 'corevalue'
	));
	// first core value
	$wp_customize->add_setting('first_core_value_icon',array(
		'default'    => '',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'first_core_value_icon', array(
		'label' 	 => __('First Core Value Icon','logipro'),
		'section'	 => 'corevalue',
		'settings'    => 'first_core_value_icon'
	)));
	$wp_customize->add_setting('first_core_value_heading',array(
		'default' => __('Enter First Core Value Heading'),
	));
	$wp_customize->add_control('first_core_value_heading_ctrl',array(
		'label'		=> __('Add First Core Value Heading', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'first_core_value_heading',
		'section'  => 'corevalue'
	));
	$wp_customize->add_setting('first_core_value_text',array(
		'default' => __('Enter First Core Value Text'),
	));
	$wp_customize->add_control('first_core_value_text_ctrl',array(
		'label'		=> __('Add First Core Value Text', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'first_core_value_text',
		'section'  => 'corevalue'
	));

	// second core value
	$wp_customize->add_setting('second_core_value_icon',array(
		'default'    => '',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'second_core_value_icon', array(
		'label' 	 => __('Second Core Value Icon','logipro'),
		'section'	 => 'corevalue',
		'settings'    => 'second_core_value_icon'
	)));
	$wp_customize->add_setting('second_core_value_heading',array(
		'default' => __('Enter Second Core Value Heading'),
	));
	$wp_customize->add_control('second_core_value_heading_ctrl',array(
		'label'		=> __('Add Second Core Value Heading', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'second_core_value_heading',
		'section'  => 'corevalue'
	));
	$wp_customize->add_setting('second_core_value_text',array(
		'default' => __('Enter Second Core Text'),
	));
	$wp_customize->add_control('second_core_value_text_ctrl',array(
		'label'		=> __('Add Second Core Value Text', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'second_core_value_text',
		'section'  => 'corevalue'
	));

	// third core value
	$wp_customize->add_setting('third_core_value_icon',array(
		'default'    => '',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'third_core_value_icon', array(
		'label' 	 => __('Third Core Value Icon','logipro'),
		'section'	 => 'corevalue',
		'settings'    => 'third_core_value_icon'
	)));
	$wp_customize->add_setting('third_core_value_heading',array(
		'default' => __('Enter Third Core Value Heading'),
	));
	$wp_customize->add_control('third_core_value_heading_ctrl',array(
		'label'		=> __('Add Third Core Value Heading', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'third_core_value_heading',
		'section'  => 'corevalue'
	));
	$wp_customize->add_setting('third_core_value_text',array(
		'default' => __('Enter Third Core Text'),
	));
	$wp_customize->add_control('third_core_value_text_ctrl',array(
		'label'		=> __('Add Third Core Value Text', 'logipro'),
		'type'		=> 'text',
		'settings'  => 'third_core_value_text',
		'section'  => 'corevalue'
	));

	/**
	 * Call To Action On Index
	 */
	$wp_customize->add_section('call_to_action', array(
		'title'		 => __('Call To Action','logipro'),
		'priority'   => 28,
		'panel' 	 => 'logipro'
	));
	$wp_customize->add_setting('call_to_action_left_super_text',array(
		'default'   => '',
	));
	$wp_customize->add_control('call_to_action_left_super_text_ctrl',array(
		'label'     => __('Add Left Super Text','logipro'),
		'type'      => 'text',
		'settings'  => 'call_to_action_left_super_text',
		'section'   => 'call_to_action'
	));
	$wp_customize->add_setting('call_to_action_left_heading',array(
		'default'   => '',
	));
	$wp_customize->add_control('call_to_action_left_heading_ctrl',array(
		'label'     => __('Add Left Heading','logipro'),
		'type'      => 'text',
		'settings'  => 'call_to_action_left_heading',
		'section'   => 'call_to_action'
	));
	$wp_customize->add_setting('call_to_action_image',array(
		'default'    => '',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'call_to_action_image', array(
		'label' 	 => __('Upload Call to Action Image','logipro'),
		'section'	 => 'call_to_action',
		'settings'    => 'call_to_action_image'
	)));

	$wp_customize->add_setting('call_to_action_right_super_text',array(
		'default'   => '',
	));
	$wp_customize->add_control('call_to_action_right_super_text_ctrl',array(
		'label'     => __('Add Right Super Text','logipro'),
		'type'      => 'text',
		'settings'  => 'call_to_action_right_super_text',
		'section'   => 'call_to_action'
	));
	$wp_customize->add_setting('call_to_action_right_heading',array(
		'default'   => '',
	));
	$wp_customize->add_control('call_to_action_right_heading_ctrl',array(
		'label'     => __('Add Right Heading','logipro'),
		'type'      => 'text',
		'settings'  => 'call_to_action_right_heading',
		'section'   => 'call_to_action'
	));
}
add_action( 'customize_register', 'logipro_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function logipro_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function logipro_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function logipro_customize_preview_js() {
	wp_enqueue_script( 'logipro-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'logipro_customize_preview_js' );
