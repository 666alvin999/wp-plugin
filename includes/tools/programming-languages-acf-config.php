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
								'value' => 'programminglanguages',
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

			acf_add_local_field_group(
				array(
					'key' => 'group_65df11074f434',
					'title' => 'Carousel',
					'fields' => array(
						array(
							"key" => "field_65e0486eff779",
							"label" => "Off / On",
							"name" => "off-on",
							"type" => "true_false",
							"required" => 0,
							"conditional_logic" => 0
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
					'active' => true,
					'show_in_rest' => 0
				)
			);
		}
	}

	new ProgrammingLanguages_ACF();