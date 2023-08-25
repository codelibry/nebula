<?php

/*
	=====================
		Custom Post Types
	=====================	
    */

/**
 * Post Type: Testimonials
 */
function cptui_register_my_cpts_testimonial()
{
    $labels = array(
        'name' => __('Testimonials', 'theme_slug'),
        'singular_name' => __('Testimonial', 'theme_slug'),
    );

    $args = array(
        'label' => __('Testimonials', 'theme_slug'),
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'rest_base' => '',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'has_archive' => false,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'delete_with_user' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array(
            'slug' => 'testimonial',
            'with_front' => true,
        ),
        'query_var' => true,
        'menu_icon' => 'dashicons-format-chat',
        'supports' => array('title', 'editor'),
        'show_in_graphql' => false,
    );

    register_post_type('testimonial', $args);
}

add_action('init', 'cptui_register_my_cpts_testimonial');
