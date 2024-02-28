<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class ProgrammingLanguagesAdmin {

    const POST_TYPE = "programminglanguages";

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
            'rewrite' => array('slug' => 'programming-language'),

        );

        register_post_type(self::POST_TYPE, $args);
    }

}

new ProgrammingLanguagesAdmin();