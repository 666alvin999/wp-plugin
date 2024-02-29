<?php

	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	}

	class ProgrammingLanguages_Acf {

		public function __construct() {
			add_action('acf/init', [$this, 'setFieldGroup']);
		}

		public function setFieldGroup() {
			if (!function_exists('acf_add_local_field_group')) {
				return;
			}

			acf_add_local_field_group(
				array(
					'key' => 'group_65df11074f434',
					'title' => 'Programming Language',
					'fields' => array(
						array(
							'key' => 'field_65df11079ae8c',
							'label' => 'Nom du langage',
							'name' => 'programming_language_name',
							'required' => 0,
							'conditional_logic' => 0
						),
						array(
							'key' => 'field_65df114f9ae8d',
							'label' => 'Logo',
							'name' => 'programming_language_logo',
							'type' => 'image',
							'required' => 0,
							'conditional_logic' => 0,
							'return_format' => 'array',
							'library' => 'all',
							'preview_size' => 'medium'
						),
						array(
							'key' => 'field_65df11999ae8e',
							'label' => 'Courte description',
							'name' => 'programming_language_description',
							'type' => 'wysiwyg',
							'required' => 0,
							'conditional_logic' => 0,
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0
						),
						array(
							'key' => 'field_65df11e78d5b2',
							'label' => 'Site officiel',
							'name' => 'programming_language_website',
							'type' => 'url',
							'required' => 0,
							'conditional_logic' => 0
						),
					),
					'location' => array(
						array(
							array(
								'param' => 'post_type',
								'operator' => '==',
								'value' => 'programmin-languages',
							),
						),
					),
					'menu_order' => 0,
					'position' => 'normal',
					'style' => 'default',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'active' => true,
					'show_in_rest' => 0
				));

            acf_add_local_field_group( array(
                'key' => 'group_65e05146df5ac',
                'title' => 'Test',
                'fields' => array(
                    array(
                        'key' => 'field_65e051476a334',
                        'label' => 'Affichage des Programming languagues',
                        'name' => 'options_programming_languagues_carousel',
                        'aria-label' => '',
                        'type' => 'select',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'choices' => array(
                            'Grille' => 'Grille',
                            'Carousel' => 'Carousel',
                        ),
                        'default_value' => 'Grille',
                        'return_format' => 'value',
                        'multiple' => 0,
                        'allow_null' => 0,
                        'ui' => 0,
                        'ajax' => 0,
                        'placeholder' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'pl-options-page',
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
		}
	}

	new ProgrammingLanguages_ACF();