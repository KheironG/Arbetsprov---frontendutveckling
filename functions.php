<?php

/**
 * Adds theme support for built in features
 *
 * @since  1.0
*/
add_theme_support( 'post-thumbnails', array( 'post', 'calender', 'page' ) );


/**
 * Enqueus compiled css stylesheet
 *
 * @since  1.0
*/
function bergendal_theme_css() {
  wp_enqueue_style( 'bergendel-theme-css', get_template_directory_uri() . '/dist/css/styles.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'bergendel-theme-sprites', get_template_directory_uri() . '/dist/css//css/sprite.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( "frontend JS", get_template_directory_uri() . '/js/header.js', array('jquery'), "1.0", "all" );
}
add_action( 'wp_enqueue_scripts', 'bergendal_theme_css');

/**
 * Adds theme specific sections, settings and controls to the Customizer
 *
 * @param $wp_customize
 *
 * @since  1.0
*/
function bergendal_theme_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'logos', array(
        'title' => __( 'Logotyper', 'bergendal-concept' ),
        'description' => __( 'Här laddar ni upp logotyper.', 'bergendal-concept' ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_setting( 'logo_simplified', array(
        'default' => '',
        'capability' => 'edit_theme_options',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_simplified', array(
        'label' => __( 'Ladda upp förenklad logotyp', 'bergendal-concept' ),
        'priority' => 160,
        'section' => 'logos',
        'settings' => 'logo_simplified',
        'button_labels' => array(
                'select' => 'Välj förenklad logotyp',
                'remove' => 'Radera förenklad logotyp',
                'change' => 'Byt förenklad logotyp' )
    )));

    $wp_customize->add_setting( 'logo_full', array(
        'default' => '',
        'capability' => 'edit_theme_options',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_full', array(
        'label' => __( 'Ladda upp fullständig logotyp', 'bergendal-concept' ),
        'priority' => 160,
        'section' => 'logos',
        'settings' => 'logo_full',
        'button_labels' => array(
                'select' => 'Välj fullständig logotyp',
                'remove' => 'Radera fullständig logotyp',
                'change' => 'Byt fullständig logotyp' )
    )));
}
add_action( 'customize_register', 'bergendal_theme_customize_register' );


/**
 * Registers a post type called Calender
 *
 * @since  1.0
*/
function bergendal_register_calender_post_type(){

  register_post_type( 'calender', array(
          'labels'                 => array(
          'name'               => __('Calender','bergendal-concept'),
          'singular_name'      => __('Calender event','bergendal-concept'),
          'add_new'            => __('Add Calender event','bergendal-concept'),
          'add_new_item'       => __('Add new calender event', 'bergendal-concept'),
          'edit_item'          => __('Edit calender event','bergendal-concept'),
          'new_item'           => __('New calender event','bergendal-concept'),
          'view_item'          => __('Show calender event','bergendal-concept'),
          'search_items'       => __('Search calender events','bergendal-concept'),
          'not_found'          => __('No calender events','bergendal-concept'),
          'not_found_in_trash' => __('No calender events in trash','bergendal-concept'),
          'parent_item_colon'  => '',
      ),
      'singular_label'      => 'Calender',
      'public'              => true,
      'exclude_from_search' => false,
      'show_ui'             => true,
      'show_in_menu'             => true,
      'menu_icon'           => 'dashicons-calendar',
      'menu_position'       => 22,
      'capability_type'     => 'post',
      'hierarchical'        => false,
      /*'rewrite'             =>  array(
          'slug'                  => 'calender',
          'with_front'            => true,
          'feeds'                 => false,
      ),*/
      // 'rewrite' => array( 'slug' => 'traningsaktivitet/%program_categories%'),
      'query_var'           => false,
      'show_in_nav_menus'   => false,
      'show_in_rest' 		  => true,
      'rest_controller_class' => 'WP_REST_Posts_Controller',
      'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
  ));
}
add_action('init','bergendal_register_calender_post_type');


/**
 * Adds ACF field group for custom post type calender
 *
 * @since  1.0
*/
// function add_bergendal_calender_post_field_group() {
//     acf_add_local_field_group( array(
//         'key' => 'calender_item_details',
//     	'title' => 'Calender Event Details',
//         'fields' => array (
//     		array (
//     			'key' => 'start_date',
//     			'label' => __( 'Start date', 'bergendal-concept' ),
//     			'name' => 'start_date',
//     			'type' => 'date_picker',
//     			'required' => 1,
//     			'conditional_logic' => 0,
//     			'readonly' => 0,
//     			'disabled' => 0,
//     		),
//             array (
//     			'key' => 'brief_description',
//     			'label' => __( 'Add brief description', 'bergendal-concept' ),
//     			'name' => 'brief_description',
//     			'type' => 'textarea',
//                 'maxlength' => 200,
//                 'rows' => 5,
//                 'placeholder' => 'brief description of the event...',
//     			'required' => 1,
//     			'conditional_logic' => 0,
//     			'readonly' => 0,
//     			'disabled' => 0,
//     		)
//     	),
//         'location' => array (
//     		array (
//     			array (
//     				'param' => 'post_type',
//     				'operator' => '==',
//     				'value' => 'calender',
//     			),
//     		),
//     	),
//     	'menu_order' => 0,
//     	'position' => 'side',
//     	'style' => 'default',
//     	'label_placement' => 'top',
//     	'instruction_placement' => 'label',
//     	'hide_on_screen' => '',
//     ) );
// }
// add_action( 'acf/init', 'add_bergendal_calender_post_field_group' );


?>
