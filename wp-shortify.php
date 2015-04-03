<?php 
/*
Plugin Name: Shortify
Description: Shortify allows you to track, in real-time, the clicks and referrers on any shortened URL - a perfect tool to help you understand what appeals to your audience and to help you optimize your social, email, and other click-through Within Wordpress.
Version: 1.0.0
Author: Khubbaib
Author URI: http://khubbaib.com
Text Domain: wp-shortify
Domain Path: lang
*/


/*
    Exit if accessed directly
*/
if ( ! defined( 'ABSPATH' ) ) exit;
    
    
    if( ! defined( 'SHORTIFY_PLUGIN_NAME' )){
        
        define( 'SHORTIFY_PLUGIN_NAME', 'Shortify' );
    }
    if( ! defined( 'SHORTIFY_ROOT_PATH' )){
        
        define( 'SHORTIFY_ROOT_PATH', dirname(__FILE__) );
    }  
    if( ! defined( 'SHORTIFY_VERSION' )){ 
        
        define( 'SHORTIFY_VERSION', '1.0.0');
    }
    if( ! defined( 'SHORTIFY_MINPHP_VERSION' )){ 
        
        define( 'SHORTIFY_MINPHP_VERSION', '5.3.0' );
    }
    if( ! defined( 'SHORTIFY_DIR_PATH' )){ 
        
        define( 'SHORTIFY_DIR_PATH', plugin_dir_path( __FILE__ ) );
    }
    
    if( ! defined( 'SHORTIFY_SRC_PATH' )){ 
        
        define( 'SHORTIFY_SRC_PATH', dirname(__FILE__) . '/src/' );
    }
    if( ! defined( 'SHORTIFY_CLIENTID' )){ 
        
        define( 'SHORTIFY_CLIENTID', get_option( 'wp_shortify_client_id' ) );
    }
    if( ! defined( 'SHORTIFY_CLIENTSECRET' )){ 
        
        define( 'SHORTIFY_CLIENTSECRET', get_option( 'wp_shortify_client_secret' ) );
    }
    if( ! defined( 'SHORTIFY_API_KEY' )){ 
        
        define( 'SHORTIFY_API_KEY', get_option( 'wp_shortify_api_key' ) ); 
    } 
    if( ! defined( 'SHORTIFY_REDIRECT' )){ 
        
        define( 'SHORTIFY_REDIRECT',  'urn:ietf:wg:oauth:2.0:oob' );
    }
    if( ! defined( 'SHORTIFY_SCOPE' )){ 
        
        define( 'SHORTIFY_SCOPE','https://www.googleapis.com/auth/urlshortener' );
    }
    
    /*
     * Load the required classes 
    */
    include_once 'classes/shortify.php';
    
    $wp_shortify = new WP_Shortify();

    $wp_shortify->wp_shortify_add_alerts();
    
    register_activation_hook( __FILE__, array( $wp_shortify, 'wp_shortify_install_plugin' ) );
    register_deactivation_hook( __FILE__, array( $wp_shortify, 'wp_shortify_uninstall_plugin' ) );