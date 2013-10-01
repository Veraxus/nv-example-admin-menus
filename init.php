<?php
/*
Plugin Name: NOUVEAU Admin Menus
Plugin URI: http://nouveauframework.com/plugins/
Description: Customize admin menus. Remove pages, add pages, etc.
Version: 0.1
Author: Veraxus
Author URI: http://nouveauframework.com/
License: GPLv2 or later
*/

NV_Admin_Menu::init();

class NV_Admin_Menu {


    public static function init() {
        add_action( 'admin_menu', array( __CLASS__, 'remove_items' ) );
        add_action( 'admin_menu', array( __CLASS__, 'add_items' ) );
    }


    /**
     * Customizes admin menu and adds or removes admin screens.
     *
     * Used by action: admin_menu
     *
     * @global $menu
     */
    public static function remove_items() {
        //remove_menu_page('edit.php');                 //Remove Posts
        //remove_menu_page('edit.php?post_type=page');  //Remove Pages
        //remove_menu_page('upload.php');               //Remove Media
        //remove_menu_page('edit-comments.php');        //Remove Comments
        //remove_menu_page('themes.php');               //Remove Appearance
        //remove_menu_page('plugins.php');              //Remove Plugins
        //remove_menu_page('tools.php');                //Remove Tools
        //remove_menu_page('options-general.php');      //Remove Settings
    }


    /**
     * Customizes admin menu and adds or removes admin screens.
     *
     * Used by action: admin_menu
     *
     * Menu Item Positions:
     *
     * 2 Dashboard
     * 4 Separator
     * 5 Posts
     * 10 Media
     * 15 Links (hidden by default)
     * 20 Pages
     * 25 Comments
     * 59 Separator
     * 60 Appearance
     * 65 Plugins
     * 70 Users
     * 75 Tools
     * 80 Settings
     * 99 Separator
     *
     * @global $menu
     */
    public static function add_items() {
        // Add a top-level menu item
        /*
        add_menu_page(
            $page_title,        // Text to use in the page's <title>
            $menu_title,        // Text to use in the menu
            $capability,        // What capability is needed to see this menu item?
            $menu_slug,         // What to use as the menu slug (unique id for this admin page)
            $callback,          // Callback function for creating the new admin page
            $icon_url,          // URL for the menu icon
            $position           // Integer. Where to place this on the menu
        );
        */

        // Add a submenu item
        /*
        add_submenu_page(
            $parent_slug,       // The slug of the meny item to place this item under
            $page_title,        // Text to use in the page's <title>
            $menu_title,        // Text to use in the menu
            $capability,        // What capability is needed to see this menu item?
            $menu_slug,         // What to use as the menu slug (unique id for this admin page)
            $callback           // Callback function for creating the new admin page
        );
        */

        // Add a new WordPress menu item & admin page
        /*
        add_menu_page(
            __( 'Example Admin Page', 'nvLangScope' ),  // Text to use in <title>
            __( 'Example Page', 'nvLangScope' ),        // Text to use in the menu
            'manage_options',                           // What capability is needed to see this menu item?
            'example-nouveau-admin',                    // What to use as the menu slug (unique id for this admin page)
            function(){ require THEME_DIR.'/your-file.php'; } // Anon function as callback (PHP 5.3+ only)
        );
        */

        // Add an example theme options page (not recommended: use theme customizer instead)
        /*
        add_theme_page(
            __( 'Theme Options', 'nvLangScope' ),       //Text to use in <title>
            __( 'Theme Options', 'nvLangScope' ),       //Text to use in the menu
            'manage_options',                           //What capability is needed to see this menu item?
            'nv-example-themeoptions',                  //What to use as the menu slug (unique id for this admin page)
            function(){ require THEME_DIR.'/your-file.php'; } // Anon function as callback (PHP 5.3+ only)
        );
        */

    }


}