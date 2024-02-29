<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class ProgrammingLanguagesAdmin {

    const PL_POST_TYPE = "programminglanguages";
    const CAROUSEL_POST_TYPE = "carousel";

    public function __construct() {
        add_action('init', [$this, "initCpt"]);
    }

    public function initCpt() {
        $labels = array(
            'name' => __('Programming Languages', 'Post Type General Name'),
            'singular_name' => __('Programming Language', 'Post Type Singular Name'),
            'menu_name' => __('Programming Language'),
            'all_items' => __('All Languages'),
            'view_item' => __('View Language'),
            'add_new_item' => __('Add a new Language'),
            'add_new' => __('Add'),
            'edit_item' => __('Edit Language'),
            'update_item' => __('Update Language'),
            'search_items' => __('Search for a Language'),
            'not_found' => __('Language not found'),
            'not_found_in_trash' => __('Language not found in trash')
        );

        $args = array(
            'label' => __('Programming Languages'),
            'description' => __('Visualize and Create Programming Languages'),
            'labels' => $labels,
            'menu_icon' => 'dashicons-html',
            'supports' => array('title', 'editor', 'thumbnail', 'author'),
            'show_in_rest' => true,
            'hierarchical' => false,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'programminglanguages'),
        );

        register_post_type(self::PL_POST_TYPE, $args);

	    $labels = array(
		    'name' => __('PL Carousel', 'Post Type General Name'),
		    'singular_name' => __('PL Carousel', 'Post Type Singular Name'),
		    'menu_name' => __('PL Carousel'),
		    'all_items' => __('All Carousel'),
		    'view_item' => __('View Carousel'),
		    'add_new_item' => __('Add a new Carousel'),
		    'add_new' => __('Add'),
		    'edit_item' => __('Edit Carousel'),
		    'update_item' => __('Update Carousel'),
		    'search_items' => __('Search for a Carousel'),
		    'not_found' => __('Carousel not found'),
		    'not_found_in_trash' => __('Carousel not found in trash')
	    );

	    $args = array(
		    'label' => __('Carousel Turn Off-On'),
		    'description' => __('Turn your programming languages in carousel'),
		    'labels' => $labels,
		    'menu_icon' => 'dashicons-html',
		    'supports' => array('title', 'editor', 'thumbnail', 'true_false', 'author'),
		    'show_in_rest' => true,
		    'hierarchical' => false,
		    'public' => true,
		    'has_archive' => true,
		    'rewrite' => array('slug' => 'programminglanguages'),
	    );

	    register_post_type(self::CAROUSEL_POST_TYPE, $args);
    }

}

new ProgrammingLanguagesAdmin();