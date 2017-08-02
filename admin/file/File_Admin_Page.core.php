<?php if ( ! defined( 'EVENT_ESPRESSO_VERSION' )) { exit('NO direct script access allowed'); }
/**
 * Event Espresso
 *
 * Event Registration and Management Plugin for WordPress
 *
 * @package		Event Espresso
 * @author			Event Espresso
 * @copyright 	(c) 2009-2014 Event Espresso All Rights Reserved.
 * @license			http://eventespresso.com/support/terms-conditions/  ** see Plugin Licensing **
 * @link				http://www.eventespresso.com
 * @version			EE4
 *
 * ------------------------------------------------------------------------
 *
 * New_Addon_Admin_Page
 *
 * This contains the logic for setting up the New_Addon Addon Admin related pages.  Any methods without PHP doc comments have inline docs with parent class.
 *
 *
 * @package			New_Addon_Admin_Page (new_addon addon)
 * @subpackage 	admin/New_Addon_Admin_Page.core.php
 * @author				Darren Ethier, Brent Christensen
 *
 * ------------------------------------------------------------------------
 */
class File_Admin_Page extends EE_Admin_Page {


	protected function _init_page_props() {
		$this->page_slug = FILE_PG_SLUG;
		$this->page_label = FILE_LABEL;
		$this->_admin_base_url = EE_FILE_ADMIN_URL;
		$this->_admin_base_path = EE_FILE_ADMIN;
	}




	protected function _ajax_hooks() {}





	protected function _define_page_props() {
		$this->_admin_page_title = FILE_LABEL;
		$this->_labels = array(
			'publishbox' => __('Update Settings', 'wordfile')
		);
	}




	protected function _set_page_routes() {
		$this->_page_routes = array(
			'default' => '_basic_settings',
			'update_settings' => array(
				'func' => '_update_settings',
				'noheader' => TRUE
			),
			'usage' => '_usage'
		);
	}
	protected function _set_page_config() {

		$this->_page_config = array(
			'default' => array(
				'nav' => array(
					'label' => __('Settings', 'wordfile'),
					'order' => 10
					),
				'metaboxes' => array_merge( $this->_default_espresso_metaboxes, array( '_publish_post_box') ),
				'require_nonce' => FALSE
			),
			'usage' => array(
				'nav' => array(
					'label' => __('File Add On Usage', 'wordfile'),
					'order' => 30
					),
				'require_nonce' => FALSE
			)
		);
	}


	protected function _add_screen_options() {}
	protected function _add_screen_options_default() {}
	protected function _add_feature_pointers() {}

	public function load_scripts_styles() {
		
	}

	public function admin_init() {
		EE_Registry::$i18n_js_strings[ 'confirm_reset' ] = __( 'Are you sure you want to reset ALL your Event Espresso Files add on Information? This cannot be undone.', 'wordfile' );
	}

	public function admin_notices() {}
	public function admin_footer_scripts() {}






	protected function _basic_settings() {
		$this->_settings_page( 'file_basic_settings.template.php' );
	}




	/**
	 * _settings_page
	 * @param $template
	 */
	protected function _settings_page( $template ) {
		
	}


	protected function _usage() {
		$this->_template_args['admin_page_content'] = EEH_Template::display_template( EE_FILE_ADMIN_TEMPLATE_PATH . 'file_usage_info.template.php', array(), TRUE );
		$this->display_admin_page_with_no_sidebar();
	}

	protected function _update_settings(){
		
	}


	private function _sanitize_config_input( $top_level_key, $second_level_key, $value ){

	}





}
// End of file New_Addon_Admin_Page.core.php
// Location: /wp-content/plugins/eea-new-addon/admin/new_addon/New_Addon_Admin_Page.core.php