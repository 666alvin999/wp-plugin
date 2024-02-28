<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class ProgrammingLanguages_Acf {

    public function __construct() {
        add_action('acf/init', [$this, 'setFieldGroup']);
    }

    function setFieldGroup() {
        add_action('acf/include_fields', function () {
            if (!function_exists('acf_add_local_field_group')) {
                return;
            }

            acf_add_local_field_group(array(
                'key' => 'group_65df11074f434',
                'title' => 'Programming Language',
                'fields' => array(
                    array(
                        'key' => 'field_65df11079ae8c',
                        'label' => 'Nom du langage',
                        'name' => 'programming_language_name',
                        'aria-label' => '',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'maxlength' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                    array(
                        'key' => 'field_65df114f9ae8d',
                        'label' => 'Logo',
                        'name' => 'programming_language_logo',
                        'aria-label' => '',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                        'preview_size' => 'medium',
                    ),
                    array(
                        'key' => 'field_65df11999ae8e',
                        'label' => 'Courte description',
                        'name' => 'programming_language_description',
                        'aria-label' => '',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'tabs' => 'all',
                        'toolbar' => 'full',
                        'media_upload' => 1,
                        'delay' => 0,
                    ),
                    array(
                        'key' => 'field_65df11e78d5b2',
                        'label' => 'Site officiel',
                        'name' => 'programming_language_website',
                        'aria-label' => '',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'programminglanguages',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
                'show_in_rest' => 0,
            ));
        });
    }
}

new ProgrammingLanguages_ACF();