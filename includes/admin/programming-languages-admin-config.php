<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class ProgrammingLanguagesAdmin {

    const PL_POST_TYPE = "programminglanguages";
    const CAROUSEL_POST_TYPE = "carousel";

    public function __construct() {
        add_action('init', [$this, "initCpt"]);
        add_action('init', [$this, "initCptOption"]);
    }

    public function initCpt() {
        $labels = [
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
        ];

        $args = [
            'label' => __('Programming Languages'),
            'description' => __('Visualize and Create Programming Languages'),
            'labels' => $labels,
            'menu_icon' => 'dashicons-html',
            'supports' => array('title', 'editor', 'thumbnail', 'author'),
            'show_in_rest' => true,
            'hierarchical' => false,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'programming-languages'),
        ];

        register_post_type(self::PL_POST_TYPE, $args);
    }

    public function initCptOption() {
        if( function_exists('acf_add_options_page') ) {

            acf_add_options_page(array(
                'page_title'    => 'Programming Languages',
                'menu_title'    => 'Programming Language',
                'menu_slug'     => 'pl-options-page',
                'capability'    => 'edit_posts',
                'redirect'      => false
            ));
        }
    }

}

new ProgrammingLanguagesAdmin();