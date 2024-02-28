<?php
	/*
	Plugin Name: Programming Languages
	Description: CPT and List of existing programming language
	Version: 1.0.0
	Requires PHP: 8
	Author: Dabac
	Author URI: https://dabac.tech
	License: GPL-2.0+
	Text Domain: programming-languages
	Domain Path: /languages
	*/

	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly
	}

	if (!class_exists('ProgrammingLanguages') && class_exists('ACF')) :

		class ProgrammingLanguages {

			/**
			 * __construct
			 *
			 * A dummy constructor to ensure Programming Languages is only setup once.
			 *
			 * @date    21/07/22
			 * @param void
			 * @return  void
			 * @since   1.0.0
			 *
			 */
			function __construct() {
				// Do nothing.
			}

			/**
			 * initialize
			 *
			 * Sets up the ACF plugin.
			 *
			 * @date    21/07/22
			 * @param void
			 * @return  void
			 * @since   1.0.0
			 *
			 */
			function initialize() {
				//i18n
				load_plugin_textdomain('programminglanguages', false, dirname(plugin_basename(__FILE__)) . '/languages/');

				function programmingLanguages_enqueue_assets() {
					wp_enqueue_style('programming-languages_styles', plugin_dir_url(__FILE__) . 'assets/css/style.css');
					wp_enqueue_script('programming-languages_script', plugin_dir_url(__FILE__) . 'assets/js/main.js', ['jquery']);
					wp_localize_script('programming-languages_script', 'programmingLanguages_ajax', ["ajaxurl" => admin_url('admin-ajax.php')]);

                    // OwlCarrousel
                    wp_enqueue_style('owlcarousel_styles', plugin_dir_url(__FILE__) . 'assets/owlcarousel/assets/owl.carousel.min.css');
                    wp_enqueue_script('owlcarousel_script', plugin_dir_url(__FILE__) . 'assets/owlcarousel/owl.carousel.min.js', ['jquery']);
				}

				add_action('wp_enqueue_scripts', 'programmingLanguages_enqueue_assets');


				include_once('includes/admin/programming-languages-admin-config.php');

				/* Filter the single_template with our custom function */
				add_filter('single_template', 'programmingLanguages_cpt_template');


				// Include admin.
				if (is_admin()) {
					// Include the ACF plugin.
					include_once(WP_PLUGIN_DIR . '/advanced-custom-fields-pro/acf.php');
					include_once('includes/tools/programming-languages-acf-config.php');
				} else {
					// Add plugin shortcode
					function languages_list() {
						ob_start();
						include 'includes/templates/languages-list.php';
						return ob_get_clean();
					}
				}

				add_shortcode('programmingLanguagesList', 'languages_list');
			}
		}

		function programmingLanguages_cpt_template($single) {

			global $post;

			/* Checks for single template by post type */
			if ($post->post_type == 'programminglanguages') {
				if (file_exists(plugin_dir_path(__FILE__) . '/includes/templates/single-programming-languages.php')) {
					return plugin_dir_path(__FILE__) . '/includes/templates/single-programming-languages.php';
				}
			}

			return $single;
		}

		/*
		* Programming Languages
		*
		* The main function responsible for returning the one true aep Instance to functions everywhere.
		* Use this function like you would a global variable, except without needing to declare the global.
		*
		* Example: <?php $maclass = maclass(); ?>
		*
		* @date    28/02/2024
		* @since   1.0.0
		*
		* @param   void
		* @return  programmingLanguages
		*/
		function programmingLanguages() {
			global $programmingLanguages;

			// Instantiate only once.
			if (!isset($programmingLanguages)) {
				$programmingLanguages = new ProgrammingLanguages();
				$programmingLanguages->initialize();
			}
			return $programmingLanguages;
		}

		// Instantiate.
		programmingLanguages();

	else :
		function programmingLanguages_admin_notice() {
			deactivate_plugins('programming-languages/programming-languages.php');
			if (isset($_GET['activate'])) {
				unset($_GET['activate']);
			}
			echo '<div id="message" class="error notice is-dismissible"><p>Plugin deactivated. Please activate or install <strong>Advanced Custom Fields</strong>.</p></div>';
		}

		add_action('admin_notices', 'programmingLanguages_admin_notice');
	endif;
