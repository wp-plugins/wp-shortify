<?php 

/*
    Exit if accessed directly
*/

if ( ! defined( 'ABSPATH' ) ) exit;

if (! class_exists( 'WP_Shortify' ) ){

class WP_Shortify{

        /**
         * Setup Connection data
         *
         * @since 1.0.0
         */
            function __construct()
                {
                    if (! class_exists('Shortify_WP_Google_Client') ) {

                        require_once SHORTIFY_SRC_PATH . 'Google/Client.php';
                        require_once SHORTIFY_SRC_PATH . 'Google/Service/Urlshortener.php';
                }

                    $this->client = new Shortify_WP_Google_Client();
                    $this->client->setApprovalPrompt( 'force' );
                    $this->client->setAccessType( 'offline' );
                    $this->client->setClientId( SHORTIFY_CLIENTID );
                    $this->client->setClientSecret( SHORTIFY_CLIENTSECRET );
                    $this->client->setRedirectUri( SHORTIFY_REDIRECT );
                    $this->client->setScopes( SHORTIFY_SCOPE );
                    $this->client->setDeveloperKey( SHORTIFY_API_KEY ); 
            try
                {
                    $this->service = new Shortify_WP_Google_Service_Urlshortener( $this->client );
                }

            catch ( Shortify_WP_Google_ServiceException $e ) {

            }

            $this->wp_shortify_connect();
            add_action( 'plugin_action_links', array( 
                        &$this,
                        'wp_shortify_plugin_links'
                    ),10,2);
            add_action( 'admin_menu', array(
                        &$this,
                        'wp_shortify_admin_menus'
                    ));
            add_action( 'admin_enqueue_scripts', array( 
                        &$this,
                        'wp_shortify_admin_scripts'
                    ));
            add_action( 'admin_enqueue_scripts', array( 
                        &$this,
                        'wp_shortify_admin_styles'
                    ));
            add_action( 'wp_enqueue_scripts', array( 
                        &$this,
                        'wp_shortify_front_scripts'
                    ));
            add_action( 'wp_enqueue_scripts', array( 
                        &$this,
                        'wp_shortify_front_styles'
                    ));        
        if ( is_admin() ) {
            
            add_action( 'load-post.php', array(
                    &$this,
                    'wp_shortify_under_post_clicks'
                ));    
        }
            add_action( 'init', array(
                        &$this, 
                        'wp_shortify_localizations'
                      ) );      
        if( get_option( 'wp_shortify_show_frontend') == 1 ){
                add_filter( 'the_content', array(
                            &$this,
                            'wp_shortify_frontend_share'
                    ));
            }

        }
        /**
         * Connect with Google 
         *
         * @access public
         * @param void
         * @since 1.0.0
         * @return boolean true
         */
        public function wp_shortify_connect() {

            $ga_google_authtoken = get_option( 'wp_shortify_auth_token' );

                if (! empty( $ga_google_authtoken )) {

                    $this->client->setAccessToken( $ga_google_authtoken );

                } 

                else{

                    $authCode = get_option( 'wp_shortify_token' );
                    
                    if (empty($authCode)) return false;

                    try {

                        $accessToken = $this->client->authenticate( $authCode );
                    }

                    catch (Exception $e) {
                        
                        return false;
                    }

                    if ($accessToken) {

                        $this->client->setAccessToken( $accessToken );

                        update_option( 'wp_shortify_auth_token', $accessToken );

                        return true;

                    } 

                    else {

                        return false;

                    }

                }

                $this->token = $this->client->getAccessToken();

                return true;
        }
        /**
         * Setup localization 
         * @access public
         * @param void
         * @since 1.0.0
         */
        public function wp_shortify_localizations()
        {
            $plugin_dir = basename(dirname(dirname( __FILE__ )));
            load_plugin_textdomain( 'wp-shortify', false , $plugin_dir . '/lang/');
        }
        /**
         * Add links in plugin oage to perform direct action
         *
         * @access public
         * @param array $links , file $file for plugin reffernce
         * @return array $links
         * @since 1.0.0
         */
        public function wp_shortify_plugin_links( $links, $file ) {
                
                static $cureent_plugin;
                
                if ( empty( $cureent_plugin ) ) 

                    $cureent_plugin = 'wp-shortify/wp-shortify.php';

                if ( $file == $cureent_plugin ) {

                    $settings_link = '<a href="' . admin_url( 'admin.php?page=wp-shortify-settings' ) . '">' . __( 'Settings', 'wp-shortify' ) . '</a> | <a href="' . admin_url("admin.php?page=wp-shortify-dashboard") . '">' . __( 'Dashboard', 'wp-shortify' ) . '</a>';

                    array_unshift( $links, $settings_link );
                }
                return $links;
        }
        /**
         * Add menus in admin menu
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public static function wp_shortify_admin_menus() {
                
                add_menu_page( SHORTIFY_PLUGIN_NAME, __( SHORTIFY_PLUGIN_NAME, 'wp-shortify' ), 'manage_options', 'wp-shortify-dashboard', array(
                                 __CLASS__,
                                'wp_shortify_dashboard_page'

                    ), plugins_url( 'images/wp-shortify.png', dirname(__FILE__)));
                
                add_submenu_page( 'wp-shortify-dashboard', SHORTIFY_PLUGIN_NAME . ' Short URLS', __('All Short URLS','wp-shortify') , 'manage_options', 'wp-shortify-dashboard', array(
                                    __CLASS__,
                                    'wp_shortify_dashboard_page'

                    ));
                add_submenu_page( 'wp-shortify-dashboard', SHORTIFY_PLUGIN_NAME . ' Settings', __('Settings','wp-shortify'), 'manage_options', 'wp-shortify-settings', array(
                                    __CLASS__,
                                    'wp_shortify_plugin_settings_page'

                    ));
        }
        /**
         * Google not connected alert
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public function wp_shortify_add_alerts(){

                add_action( 'admin_footer', array( &$this, 'wp_shortify_show_alerts' ) );
        }
        /**
         * Add Dashboard Page
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public static function wp_shortify_dashboard_page() {
            
            require_once SHORTIFY_ROOT_PATH . '/inc/shortify-dashboard.php';
                
        }
        
        /**
         * Add Settings Page
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public static function wp_shortify_plugin_settings_page() {
           
           require_once SHORTIFY_ROOT_PATH . '/inc/shortify-settings.php';
        }
        /**
         * Add stylesheets in admin head
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public function wp_shortify_admin_styles( ) {
                
                wp_enqueue_style( 'wp-shortify-bootstrap', plugins_url( 'css/bootstrap.css', dirname(__FILE__) ),false, SHORTIFY_VERSION);
                wp_enqueue_style( 'wp-shortify-fontawsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',false, SHORTIFY_VERSION);
                wp_enqueue_style( 'wp-shortify-datatable', plugins_url( 'css/jquery.dataTables.min.css', dirname(__FILE__) ),false, SHORTIFY_VERSION);
                wp_enqueue_style( 'wp-shortify-style', plugins_url( 'css/wp-shortify-style.css', dirname(__FILE__)),false, SHORTIFY_VERSION);
                wp_enqueue_style( 'wp-shortify-chosen', plugins_url( 'css/chosen.css', dirname(__FILE__)),false, SHORTIFY_VERSION);
        }
        /**
         * Add Scripts in admin head
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public function wp_shortify_admin_scripts(  ) {
               
                wp_enqueue_script ( 'jquery' );
                wp_enqueue_script ( 'wp_shortify_gcharts', 'https://www.google.com/jsapi', false, SHORTIFY_VERSION);
                wp_enqueue_script ( 'wp_shortify_chosen', plugins_url('js/chosen.jquery.min.js', dirname(__FILE__)), false, SHORTIFY_VERSION);
                wp_enqueue_script ( 'wp_shortify_dataTables', plugins_url('js/jquery.dataTables.js', dirname(__FILE__)), false, SHORTIFY_VERSION);
                wp_enqueue_script ( 'wp_shortify_script', plugins_url('js/wp-shortify.js', dirname(__FILE__)), false, SHORTIFY_VERSION);
                wp_enqueue_script ( 'wp_shortify_bootstrap', plugins_url('js/bootstrap.js', dirname(__FILE__)), false, SHORTIFY_VERSION);

        }
        /**
         * Add Scripts in Front site
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public function wp_shortify_front_scripts( )
        {
            wp_enqueue_script ( 'jquery' );
            wp_enqueue_script ( 'wp_shortify_front_script', plugins_url('js/shortify-front.js', dirname(__FILE__)), false, SHORTIFY_VERSION);
            wp_enqueue_script ( 'wp_shortify_front_bootstrap', plugins_url('js/bootstrap.js', dirname(__FILE__)), false, SHORTIFY_VERSION);

        }
        /**
         * Add Stylesheets in Front site 
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public function wp_shortify_front_styles( )
        {
            wp_enqueue_style( 'wp-shortify-front-bootstrap', plugins_url( 'css/bootstrap.css', dirname(__FILE__) ),false, SHORTIFY_VERSION);
            wp_enqueue_style( 'wp-shortify-fontawsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',false, SHORTIFY_VERSION);
            wp_enqueue_style( 'wp-shortify-front-style', plugins_url( 'css/front-style.css', dirname(__FILE__)),false, SHORTIFY_VERSION);
        }
        /**
         * Save Google token 
         *
         * @access public
         * @param Google token $wp_shortify_token
         * @return bool true
         * @since 1.0.0
         */
        public function wp_shortify_save_data( $wp_shortify_token ) {
            
            update_option( 'wp_shortify_token', $wp_shortify_token );
            $this->wp_shortify_connect();//conect with google server
            return true;

        }
        /**
         * Get Google token
         *
         * @access public
         * @param void
         * @return string Google token
         * @since 1.0.0
         */
        public function get_wp_shortify_token( ){
            return get_option( 'wp_shortify_token' );
        }
        /**
         * check the access
         *
         * @access public
         * @param array 
         * @return true/false 
         * @since 1.0.0
        */
        public function wp_shortify_roles_types( $access_level ) {

            if ( is_user_logged_in () && isset ( $access_level )) {

                global $current_user;

                $roles = $current_user->roles;

                if ((current_user_can ( 'manage_options' ))) {

                    return true;
                }

                if (in_array ( $roles[0], $access_level )) {

                    return true;

                } else {

                    return false;

                }

            }
        }
        /**
         * Show authenticate Alerts
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public function wp_shortify_show_alerts() {
                
                if(! get_option( 'wp_shortify_token' ) ) {
                   
                   echo "<div id='message' class='error'><p><strong>" . __( 'Please <a style="color:#000" href="'.admin_url().'admin.php?page=wp-shortify-settings">Connected</a> with Google to generate short urls', 'wp-shortify' )."</p></div>"; 
                }
        }
        /**
         * show share Links in frontend
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public function wp_shortify_frontend_share( $content ) {
            
            global $post, $wp_shortify;
            $wp_shortify = new WP_Shortify();
            if ( is_singular()) {

                if( get_option( 'wp_shortify_show_frontend' ) == 1 ) {
                    
                    if( in_array( $post->ID, get_option( 'wp_shortify_ex_posts' ) ) ) {

                        return $content;
                    }
                    if(get_post_meta( $post->ID ,'short_url',true )){
                        ob_start();
                        include SHORTIFY_ROOT_PATH . '/stats/front-end-share.php'; 
                        $content .= ob_get_contents();
                        ob_get_clean();
                    }
                }
            }
                return $content;
        }
        
        /**
         * Add metabox under post edit screen
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public function wp_shortify_under_post_clicks() {
            add_action( 'add_meta_boxes', array(
                        $this,
                        'wp_shortify_post_stats_metabox'
            ));
        }
        /**
         * Add meta box under post in edit screen
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public function wp_shortify_post_stats_metabox() {
            $post_types = get_option( 'wp_shortify_show_posts_clicks' );
            if(!empty( $post_types )){
                foreach ( $post_types as $post_type ) {
                    add_meta_box('wp-shortify-single-click-stats', 
                        'Short URL info and Stats.', 
                        array(
                            'WP_Shortify',// class object
                            'wp_shortify_under_edit_screen'//callback functions
                        ), 
                        $post_type,// selected posts types 
                        'normal',  
                        'high'      
                    ); 
                }
            }
        }
        /**
         * Show ananlytics under post with ajax request
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public static function wp_shortify_under_edit_screen() {
                global $post;
            if( !in_array( $post->ID, get_option( 'wp_shortify_ex_posts' ) ) ) {
   
                $urlPost = '';
                $wp_shortify = new WP_Shortify();
                $urlPost = get_permalink( $post->ID );
                $is_access_level = get_option( 'wp_shortify_admin_access' );
                if( $wp_shortify->wp_shortify_roles_types( $is_access_level ) ){ 
                    $wp_shortify->service = new Shortify_WP_Google_Service_Urlshortener($wp_shortify->client);
                    $url = new Shortify_WP_Google_Service_Urlshortener_Url();
                    $url->longUrl = $urlPost;
                    if(!get_post_meta( $post->ID ,'short_url',true )){
                        $short = $wp_shortify->service->url->insert( $url );
                        update_post_meta( $post->ID, 'short_url', $short->id );
                        
                    }
                    $params = array( 'projection' => "FULL");
                    $details = $wp_shortify->service->url->get( get_post_meta( $post->ID ,'short_url',true ), $params );
                    
                    if(get_post_meta( $post->ID ,'short_url',true )){
                        update_post_meta( $post->ID, 'short_created', $details['created'] );
                        update_post_meta( $post->ID, 'short_status', $details['status'] );
                    }
                    include SHORTIFY_ROOT_PATH . '/stats/quick-stats.php'; 
                   
                    $created_at     =   get_post_meta( $post->ID, 'short_created', true );
                    $short_status   =   get_post_meta( $post->ID, 'short_status', true );
                    $short_url      =   get_post_meta( $post->ID, 'short_url', true );
                    
                    include SHORTIFY_ROOT_PATH . '/stats/share-url.php'; 
                    
                    shortify_click_stats( $details );  
                    
                }
                else{
                        _e( 'Sorry.. Access Denied', 'wp-shortify' );
                }
            }
            else{
                        _e( 'This post is exclude for click stats', 'wp-shortify' );
                }
        }
        
        /**
         * Save options after activate plugin
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */
        public static function wp_shortify_install_plugin() {
            
                update_option( 'wp_shortify_show_posts_clicks',   array(  'post','page' ));
                update_option( 'wp_shortify_admin_access' ,   array( 'administrator' ) );
                update_option( 'wp_shortify_plugin_name' , 'Shortify');
                update_option( 'wp_shortify_ex_posts' , array('0'));
                
         }
        /**
         * Delete options after activate plugin
         *
         * @access public
         * @param void
         * @return void
         * @since 1.0.0
         */ 
        public static function wp_shortify_uninstall_plugin() {
                
                delete_option('wp_shortify_show_posts_clicks');
                delete_option('wp_shortify_admin_access');
                delete_option('wp_shortify_client_id');
                delete_option('wp_shortify_client_secret');
                delete_option('wp_shortify_api_key');
            }
        

    }
}