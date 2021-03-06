<?php if (! defined('EVENT_ESPRESSO_VERSION')) {
    exit('No direct script access allowed');
}
/**
* Event Espresso
*
* Event Registration and Management Plugin for WordPress
*
* @ package         Event Espresso
* @ author          Seth Shoultes
* @ copyright   (c) 2008-2011 Event Espresso  All Rights Reserved.
* @linkense         {@link http://eventespresso.com/support/terms-conditions/}   * see Plugin Licensing *
* @linkk                {@link http://www.eventespresso.com}
* @ since           $VID:$
*
* ------------------------------------------------------------------------
*
* New_Addon_Admin_Page_Init class
*
* This is the init for the New_Addon Addon Admin Pages.  See EE_Admin_Page_Init for method inline docs.
*
* @package          Event Espresso (new_addon addon)
* @subpackage       admin/New_Addon_Admin_Page_Init.core.php
* @author               Darren Ethier
*
* ------------------------------------------------------------------------
*/
class Ee_File_Admin_Page_Init extends EE_Admin_Page_Init
{

    /**
     *  constructor
     *
     * @access public
     * @return \New_Addon_Admin_Page_Init
     */
    public function __construct()
    {

        // do_action('AHEE_log', __FILE__, __FUNCTION__, '');

        // define('FILE_PG_SLUG', 'espresso_file');
        // define('FILE_LABEL', __('Files add on for EE', 'wordfile'));
        // define('EE_FILE_ADMIN_URL', admin_url('admin.php?page=' . FILE_PG_SLUG));
        // define('EE_FILE_ADMIN_ASSETS_PATH', EE_FILE_ADMIN . 'assets' . DS);
        // define('EE_FILE_ADMIN_ASSETS_URL', EE_FILE_URL . 'admin' . DS . 'file' . DS . 'assets' . DS);
        // parent::__construct();
        // $this->_folder_path = EE_FILE_ADMIN;
    
    }

    

    protected function _set_init_properties()
    {
       // $this->label = FILE_LABEL;
    }



    /**
    *       _set_menu_map
    *
    *       @access         protected
    *       @return         void
    */
    protected function _set_menu_map()
    {
        // $this->_menu_map = new EE_Admin_Page_Sub_Menu(array(
        //     'menu_group' => 'addons',
        //     'menu_order' => 25,
        //     'show_on_menu' => '',
        //     'parent_slug' => 'espresso_events',
        //     'menu_slug' => FILE_PG_SLUG,
        //     'menu_label' => FILE_LABEL,
        //     'capability' => 'administrator',
        //     'admin_init_page' => $this
        // ));
    }
}
// End of file New_Addon_Admin_Page_Init.core.php
// Location: /wp-content/plugins/eea-new-addon/admin/new_addon/New_Addon_Admin_Page_Init.core.php
