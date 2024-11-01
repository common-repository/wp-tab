<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options       = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$options[]     = array(
 // 'title'      => 'Select tab Style',
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'          => 'wp_tab',
      'title'         => 'WP Tab Shortcode Generator',
      'view'          => 'clone',
      'clone_id'      => 'wp_tab_content',
      'clone_title'   => 'Add new tab Item',
      'fields'        => array(
		
		array(
			'type' => 'heading',
			'content' => 'Settings',
		),
        array(
          'id'        => 'wp_tab_typography',
          'type'      => 'typography',
          'title'     => 'Typography for tab contents',
          'default'   => array(
            'family'  => 'Open Sans',
            'font'    => 'google', // this is helper for output ( google, websafe, custom )
            'variant' => '400',
          ),
        ),
        array(
          'id'        => 'wp_tab_content_title_font_size',
          'type'      => 'number',
          'title'     => 'Tab contents font size',
          'after'   => ' <i class="cs-text-muted">(px)</i>',
          'default'   => '25',
        ),
        array(
          'id'        => 'wp_tab_content_font_size',
          'type'      => 'number',
          'title'     => 'Tab contents font size',
          'after'   => ' <i class="cs-text-muted">(px)</i>',
          'default'   => '16',
        ),
        array(
          'id'                 => 'wp_tab_animate_in',
          'type'               => 'select',
          'title'              => 'Select tab appear animation',
          'options'            => array(
          'bounce'=>'bounce',
          'flash'=>'flash',
          'pulse'=>'pulse',
          'rubberBand'=>'rubberBand',
          'shake'=>'shake',
          'swing'=>'swing',
          'tada'=>'tada',
          'wobble'=>'wobble',
          'jello'=>'jello',

          'bounceIn'=>'bounceIn',
          'bounceInDown'=>'bounceInDown',
          'bounceInLeft'=>'bounceInLeft',
          'bounceInRight'=>'bounceInRight',
          'bounceInUp'=>'bounceInUp',

          'bounceOut'=>'bounceOut',
          'bounceOutDown'=>'bounceOutDown',
          'bounceOutLeft'=>'bounceOutLeft',
          'bounceOutRight'=>'bounceOutRight',
          'bounceOutUp'=>'bounceOutUp',

          'fadeIn'=>'fadeIn',
          'fadeInDown'=>'fadeInDown',
          'fadeInDownBig'=>'fadeInDownBig',
          'fadeInLeft'=>'fadeInLeft',
          'fadeInLeftBig'=>'fadeInLeftBig',
          'fadeInRight'=>'fadeInRight',
          'fadeInRightBig'=>'fadeInRightBig',
          'fadeInUp'=>'fadeInUp',
          'fadeInUpBig'=>'fadeInUpBig',

          'fadeOut'=>'fadeOut',
          'fadeOutDown'=>'fadeOutDown',
          'fadeOutDownBig'=>'fadeOutDownBig',
          'fadeOutLeft'=>'fadeOutLeft',
          'fadeOutLeftBig'=>'fadeOutLeftBig',
          'fadeOutRight'=>'fadeOutRight',
          'fadeOutRightBig'=>'fadeOutRightBig',
          'fadeOutUp'=>'fadeOutUp',
          'fadeOutUpBig'=>'fadeOutUpBig',

          'flip'=>'flip',
          'flipInX'=>'flipInX',
          'flipInY'=>'flipInY',
          'flipOutX'=>'flipOutX',
          'flipOutY'=>'flipOutY',

          'lightSpeedIn'=>'lightSpeedIn',
          'lightSpeedOut'=>'lightSpeedOut',

          'rotateIn'=>'rotateIn',
          'rotateInDownLeft'=>'rotateInDownLeft',
          'rotateInDownRight'=>'rotateInDownRight',
          'rotateInUpLeft'=>'rotateInUpLeft',
          'rotateInUpRight'=>'rotateInUpRight',

          'rotateOut'=>'rotateOut',
          'rotateOutDownLeft'=>'rotateOutDownLeft',
          'rotateOutDownRight'=>'rotateOutDownRight',
          'rotateOutUpLeft'=>'rotateOutUpLeft',
          'rotateOutUpRight'=>'rotateOutUpRight',

          'slideInUp'=>'slideInUp',
          'slideInDown'=>'slideInDown',
          'slideInLeft'=>'slideInLeft',
          'slideInRight'=>'slideInRight',

          'slideOutUp'=>'slideOutUp',
          'slideOutDown'=>'slideOutDown',
          'slideOutLeft'=>'slideOutLeft',
          'slideOutRight'=>'slideOutRight',

          'zoomIn'=>'zoomIn',
          'zoomInDown'=>'zoomInDown',
          'zoomInLeft'=>'zoomInLeft',
          'zoomInRight'=>'zoomInRight',
          'zoomInUp'=>'zoomInUp',
		  
          'zoomOut'=>'zoomOut',
          'zoomOutDown'=>'zoomOutDown',
          'zoomOutLeft'=>'zoomOutLeft',
          'zoomOutRight'=>'zoomOutRight',
          'zoomOutUp'=>'zoomOutUp',

          'hinge'=>'hinge',
          'rollIn'=>'rollIn',
          'rollOut'=>'rollOut',
          ),
          'class'              => 'chosen',
          'default_option'     => 'fadeIn',
          'desc'     => 'Check all available animation style from <a href="https://daneden.github.io/animate.css/" target="_blank">here</a>',
        ),
        array(
          'id'                 => 'wp_tab_animate_out',
          'type'               => 'select',
          'title'              => 'Select tab disappear animation',
          'options'            => array(
          'bounce'=>'bounce',
          'flash'=>'flash',
          'pulse'=>'pulse',
          'rubberBand'=>'rubberBand',
          'shake'=>'shake',
          'swing'=>'swing',
          'tada'=>'tada',
          'wobble'=>'wobble',
          'jello'=>'jello',

          'bounceIn'=>'bounceIn',
          'bounceInDown'=>'bounceInDown',
          'bounceInLeft'=>'bounceInLeft',
          'bounceInRight'=>'bounceInRight',
          'bounceInUp'=>'bounceInUp',

          'bounceOut'=>'bounceOut',
          'bounceOutDown'=>'bounceOutDown',
          'bounceOutLeft'=>'bounceOutLeft',
          'bounceOutRight'=>'bounceOutRight',
          'bounceOutUp'=>'bounceOutUp',

          'fadeIn'=>'fadeIn',
          'fadeInDown'=>'fadeInDown',
          'fadeInDownBig'=>'fadeInDownBig',
          'fadeInLeft'=>'fadeInLeft',
          'fadeInLeftBig'=>'fadeInLeftBig',
          'fadeInRight'=>'fadeInRight',
          'fadeInRightBig'=>'fadeInRightBig',
          'fadeInUp'=>'fadeInUp',
          'fadeInUpBig'=>'fadeInUpBig',

          'fadeOut'=>'fadeOut',
          'fadeOutDown'=>'fadeOutDown',
          'fadeOutDownBig'=>'fadeOutDownBig',
          'fadeOutLeft'=>'fadeOutLeft',
          'fadeOutLeftBig'=>'fadeOutLeftBig',
          'fadeOutRight'=>'fadeOutRight',
          'fadeOutRightBig'=>'fadeOutRightBig',
          'fadeOutUp'=>'fadeOutUp',
          'fadeOutUpBig'=>'fadeOutUpBig',

          'flip'=>'flip',
          'flipInX'=>'flipInX',
          'flipInY'=>'flipInY',
          'flipOutX'=>'flipOutX',
          'flipOutY'=>'flipOutY',

          'lightSpeedIn'=>'lightSpeedIn',
          'lightSpeedOut'=>'lightSpeedOut',

          'rotateIn'=>'rotateIn',
          'rotateInDownLeft'=>'rotateInDownLeft',
          'rotateInDownRight'=>'rotateInDownRight',
          'rotateInUpLeft'=>'rotateInUpLeft',
          'rotateInUpRight'=>'rotateInUpRight',

          'rotateOut'=>'rotateOut',
          'rotateOutDownLeft'=>'rotateOutDownLeft',
          'rotateOutDownRight'=>'rotateOutDownRight',
          'rotateOutUpLeft'=>'rotateOutUpLeft',
          'rotateOutUpRight'=>'rotateOutUpRight',

          'slideInUp'=>'slideInUp',
          'slideInDown'=>'slideInDown',
          'slideInLeft'=>'slideInLeft',
          'slideInRight'=>'slideInRight',

          'slideOutUp'=>'slideOutUp',
          'slideOutDown'=>'slideOutDown',
          'slideOutLeft'=>'slideOutLeft',
          'slideOutRight'=>'slideOutRight',

          'zoomIn'=>'zoomIn',
          'zoomInDown'=>'zoomInDown',
          'zoomInLeft'=>'zoomInLeft',
          'zoomInRight'=>'zoomInRight',
          'zoomInUp'=>'zoomInUp',
		  
          'zoomOut'=>'zoomOut',
          'zoomOutDown'=>'zoomOutDown',
          'zoomOutLeft'=>'zoomOutLeft',
          'zoomOutRight'=>'zoomOutRight',
          'zoomOutUp'=>'zoomOutUp',

          'hinge'=>'hinge',
          'rollIn'=>'rollIn',
          'rollOut'=>'rollOut',
          ),
          'class'              => 'chosen',
          'default_option'     => 'fadeOut',
          'desc'     => 'Check all available animation style from <a href="https://daneden.github.io/animate.css/" target="_blank">here</a>',
        ),
        array(
          'id'        => 'wp_tab_animate_duration',
          'type'      => 'number',
          'title'     => 'Tab Slide animation duration',
          'after'   => ' <i class="cs-text-muted">(px)</i>',
          'default'   => '200',
        ),
		array(
			'id'      => 'wp_tab_show_content_title',
			'type'    => 'switcher',
			'title'   => 'Show tab title in content',
			'label'   => 'Keep on t if you want to show tab title in contents',
			'default' => true
		),
		array(
			'id'      => 'wp_tab_switching_arrow',
			'type'    => 'switcher',
			'title'   => 'Show tab switching arrow',
			'label'   => 'Keep it on if you want to show tab switching arrows',
			'default' => true
		),
		array(
			'id'      => 'wp_tab_auto_height',
			'type'    => 'switcher',
			'title'   => 'Auto Height',
			'label'   => 'Keep it on if you auto height according to your contents',
			'default' => true
		),
	  	array(
			'type' => 'heading',
			'content' => 'Input Tab contents'
		),
      ),

      'clone_fields'  => array(
        array(
          'id'        => 'wp_tab_title',
          'type'      => 'text',
          'title'     => 'Tab Title',
        ),
        array(
          'id'        => 'wp_tab_icon',
          'type'      => 'icon',
          'title'     => 'Tab Icon',
		  'desc'      => 'Choose a Font Awesome Icon that will appear beside tab title'
        ),
        array(
          'id'        => 'wp_tab_bg',
          'type'      => 'color_picker',
          'title'     => 'Tab Background Color',
          'default'   => '#F2F2F2',
        ),

        array(
          'id'        => 'content',
          'type'      => 'textarea',
          'title'     => 'Tab Content',
          'desc'     => 'If you need , you may also input html code here',
        ),
      )
    ),
    // end: shortcode



  ),
);
CSFramework_Shortcode_Manager::instance( $options );

