<?php
/**
  * Plugin Name: Wordpress Plugin Test
  * Description: A wordpress plugin created for testing purposes
  * Version: 1.0.0
  * Author: wcjohnson11
  * Author URI: https://wcj.io
  * Text Domain: wcj
  * License: MIT
  * License URI: https://opensource.org/licenses/MIT
  * Github Plugin URI: https://github.com/wcjohnson11/Wordpress-Plugin-Test
  */

  /*
   * Plugin constants
   */

  /*
   * Avoid direct calls to this file where WP core files are not present
   */
  if (!function_exists('add_action')) :
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
  endif;

   /*
    * Main class
    */

    /**
     * Class Wordpress Plugin Test
     * 
     * This class creates the admin page
     */
  class WordpressPluginTest
  {

      /**
      * Wordpress Plugin Test Constructor.
      * 
      * The main plugin actions registered for Wordpress
      */
      public function __construct()
      {
        $this->plugin_slug = 'wordpress-plugin-test';
        $this->version = '1.0';
        $this->plugin = plugin_basename(__FILE__);
      }

  }
/*
 * Start our plugin class
 */
new WordpressPluginTest();