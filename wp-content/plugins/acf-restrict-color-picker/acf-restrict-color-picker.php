<?php
/*
	Plugin Name: Advanced Custom Fields: Restrict Color Picker Options
	Plugin URI:
	Description: Restrict ACF's color picker field to a specific subset of custom colors.
	Version: 1.2
	Author: Vital
	Author URI: http://vtldesign.com
	Text Domain: vitaldesign
	License: GPLv2

	Copyright 2015  VITAL DESIGN  (email : developer@vtldesign.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Exit if accessed directly
if (! defined('ABSPATH')) {
	exit;
}

class ACF_Restrict_Color_Picker_Options {

	private $plugin_path;
	private $plugin_url;
	private $color_settings;

	/**
	 * Initialize plugin
	 */
	public function __construct() {

		$this->plugin_path    = plugin_dir_path(__FILE__);
		$this->plugin_url     = plugin_dir_url(__FILE__);
		$this->color_settings = get_option('acf_rcpo_settings');

		if (!empty($this->color_settings) && !in_array('', $this->color_settings)) {
			add_action('acf/input/admin_enqueue_scripts', array($this, 'register_scripts'));
			add_action('acf/input/admin_enqueue_scripts', array($this, 'register_styles'));
			add_action('acf/input/admin_enqueue_scripts', array($this, 'localize_options'));
		}

		add_filter('plugin_action_links_' . plugin_basename(__FILE__), array($this, 'action_links'));

		require $this->plugin_path . 'admin.php';

	}

	/**
	 * Add Settings link to plugin on plugins list
	 */
	public function action_links($links) {
		$url = admin_url('edit.php?post_type=acf-field-group&page=acf-restrict-color-picker');
		$custom_links = ["<a href=\"{$url}\">Settings</a>"];

		return array_merge($custom_links, $links);
	}

	/**
	 * Enqueue JavaScript
	 */
	public function register_scripts() {

		wp_enqueue_script('acf_restrict_color_picker_js', $this->plugin_url . 'assets/acf-restrict-color-picker.js', array('jquery'), '1.0', true);
	}

	/**
	 * Enqueue stylesheet
	 */
	public function register_styles() {

		wp_enqueue_style('acf_restrict_color_picker_cs', $this->plugin_url . 'assets/acf-restrict-color-picker.css', false, '1.0');
	}

	/**
	 * Localize color options
	 */
	public function localize_options() {

		// TO DO: Only execute on post creation or edit pages via global $pagenow? (this was loading in ACF field editor sections)
		$color_palettes = array();          // Store the color palettes; 'master' key for global palette
		$color_options_master = array();    // Get master color option
		$color_restrictions = $this->color_settings;    // Get color options setting
		$color_restrictions = preg_replace('/\s+/', '', $color_restrictions);   // Remove any whitespace
		$color_restrictions = explode(',', $color_restrictions['color']);   // Convert to array
		$color_options_master = $color_restrictions;
		$color_palettes['master'] = $color_options_master;     // Store result in color palettes

		// Iterate through active field groups to find active color_picker fields
		$acf_groups = acf_get_field_groups();
		if (!empty($acf_groups)) {
			foreach ($acf_groups as $acf_group) {
				$this->get_color_palettes(acf_get_fields($acf_group['key']), $color_palettes);
			}
		}

		// Pass values along to plugin JS file
		wp_localize_script('acf_restrict_color_picker_js', 'acfRCPOptions', json_encode($color_palettes));
	}

	/**
	 * Given an object containing ACF fields, search them recursively for any color picker
	 * fields and return an array of color palettes used on this page; utilizes the 'Default Value'
	 * field to override the master palette.
	 *
	 * @param  {type}  acf_fields       acf object containing acf fields
	 * @param  {type}  color_palettes   array that will contain the resulting palettes
	 */
	private function get_color_palettes($acf_fields, &$color_palettes) {

		if (!empty($acf_fields)) {
			foreach ($acf_fields as $acf_field) {
				if (isset($acf_field['type']) && (strcmp($acf_field['type'], 'color_picker') == 0)) {
					if ($this->is_valid_color_palette($acf_field['default_value'])) {
						$color_palettes[$acf_field['key']] = explode(',', str_replace(' ', '', $acf_field['default_value'])); // Remove any spaces and encode for JS
					}
				} elseif (!empty($acf_field['layouts'])) {      // Search for and fields containing fields (e.g. 'Flexible Content' fields)
					$this->get_color_palettes($acf_field['layouts'], $color_palettes);
				} elseif (!empty($acf_field['sub_fields'])) {
					$this->get_color_palettes($acf_field['sub_fields'], $color_palettes);
				}
			}
		}
	}

	/**
	 * Confirm that the provided color palette is a comma-delimited list of hex values and isn't empty
	 *
	 * @param  {type}  color_palette         The palette to validate
	 * @return {type}  true if palette is valid, false otherwise
	 */
	private function is_valid_color_palette($color_palette) {

		if (preg_match('/^((default-)?#([0-9a-fA-F]{3}){1,2})(,[\s]?(default-)?#([0-9a-fA-F]{3}){1,2})*$/', $color_palette)) {
			return true;
		} else {
			return false;
		}
	}
}

new ACF_Restrict_Color_Picker_Options();
