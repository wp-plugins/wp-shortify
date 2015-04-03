<?php
  /*
  * Exit if accessed directly
  */
  if ( ! defined( 'ABSPATH' ) ) exit;
  
  $wp_shortify = new WP_Shortify();
  /*
  * Connect with Google
  */
  $auth_url = http_build_query( array(

                                'next'          =>  admin_url('admin.php?page=wp-shortify-settings'),
                                'scope'         =>  SHORTIFY_SCOPE,
                                'response_type' =>  'code',
                                'redirect_uri'  =>  SHORTIFY_REDIRECT,
                                'client_id'     =>  SHORTIFY_CLIENTID
                              ));
  
  if ( isset( $_POST[ 'save_google_token' ] ) ) {

    $wp_shortify_token = sanitize_text_field($_POST[ 'key_google_token' ]);

    if( $wp_shortify->wp_shortify_save_data( $wp_shortify_token )){

        $update_msg = 'Access code saved';

    }

  }

  $postkey_google_token = $wp_shortify->get_wp_shortify_token( );

  if ( isset( $_POST[ 'save_advance_settings' ] ) ) {
    $show_frontend    = isset($_POST[ 'wp_shortify_show_frontend' ]) ? 1:0;
    update_option( 'wp_shortify_show_frontend', $show_frontend);
    if(isset($_POST[ 'no-posts' ])){
      
      $no_posts = wp_parse_id_list( sanitize_text_field($_POST[ 'no-posts' ]) );

    }
    else{
       
       $no_posts = array();
    }
    
    
    if(isset($_POST[ 'access_role_back' ])) {
      
      $access_role     = $_POST[ 'access_role_back' ];
    }
    else{
      
      $access_role = array();
    }
    if(isset($_POST[ 'show_on' ])) {
      
      $show_on_posts   =  $_POST[ 'show_on' ];
    }
    else{
      
      $show_on_posts = array();
    }
        update_option( 'wp_shortify_admin_access' , $access_role );
        update_option( 'wp_shortify_show_posts_clicks' , $show_on_posts );
        update_option( 'wp_shortify_ex_posts', $no_posts);
        
        $update_msg = 'Settings saved.';

  }
  /*
  * Save Google Client information
  */
  if (isset($_POST[ 'save_google_settings' ])) {

    update_option( 'wp_shortify_client_id',      sanitize_text_field($_POST['google_client_id']));

    update_option( 'wp_shortify_client_secret',  sanitize_text_field($_POST['google_client_secret']));

    update_option( 'wp_shortify_api_key',        sanitize_text_field($_POST['google_api_key']));

    $update_msg = 'Google Client Information has been Saved.';

  }
  /*
  * Delete Google tocken and Logout from Google
  */
  if (isset($_POST[ 'logout' ])) {


    delete_option( 'wp_shortify_auth_token' );

    delete_option( 'wp_shortify_token' );

    $update_msg = 'You have been logout from Google.';
  }
?>

<div class="wrap">

  <h2 class='opt-title' id="title">
    <span class='wp-shortify-logo'>
    <?php 
      
        $logo = plugins_url('images/wp-shortify-large.png',dirname(__FILE__)); 
    ?>
      <img src="<?php echo $logo;?>" alt="">

    </span>
    <span class="intro-text"><?php _e( 'Shortify -> Share the shortened URLs with world and track Stats  .', 'wp-shortify' ); ?></span>
  </h2>

  <?php

  if ( isset( $update_msg ) )
  {
    echo '<div id="message" class="updated  below-h2"><strong><p>'.$update_msg.'</p></strong></div>';
  } 
  
  ?>    
    <ul class="nav shortify-tabs nav-justified nav-tabs" role="tablist">
        <li class="active">
          <a href="#google-settings" role="tab" data-toggle="tab">
            <i class="fa fa-cogs"></i> 
            <?php _e('Google Settings','wp-shortify') ?>
          </a>
        </li>
        <li>
          <a href="#main" role="tab" data-toggle="tab">
            <i class="fa fa-google"></i>
            <?php 
                    _e('Connect with Google','wp-shortify');
            ?>
          </a>
        </li>
        
        <li>
          <a href="#ad-settings" role="tab" data-toggle="tab">
            <i class="fa fa-cogs"></i> 
            <?php _e('Settings','wp-shortify') ?>
          </a>
        </li>

        
        
    </ul>
  <!-- Tab panes -->
  <div class="tab-content shortify-tab-pane">
    <div class="tab-pane" id="main">
  <form action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" method="post" name="settings_form" id="settings_form">
   
    <table width="1004" class="form-table">
      <tbody>
      <?php if(! get_option( 'wp_shortify_google_token' ) ) {  ?>
        <tr>
          <td width="115"></td>
              <td width="877">
                    <a target="_blank" href="javascript:void(0);" onclick="window.open('https://accounts.google.com/o/oauth2/auth?<?php echo $auth_url ?>','activate','width=700,height=600,toolbar=1,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');"><?php _e('Connect with Google','wp-shortify') ?></a>
              </td>
        </tr>
        <tr>
              <td><?php _e('Your Access Code:','wp-shortify')?> </td>
              <td>
                <input type="text" name="key_google_token" value="<?php echo $postkey_google_token ?>" style="width:450px;"/>
              </td>
        </tr>
        <tr>
          <td>
            <p class="submit">
              <button type="submit" class="btn wp-shortify-btn" name="save_google_token" />Save Changes</button>
            </p>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </form>
    </div>
    <div class="tab-pane" id="ad-settings">
       
            <form action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" method="post">
              <table width="1004" class="form-table">
                <tbody>
                 <tr>
                  <td width="315">
                        <?php _e( 'Show Share buttons under post :', 'wp-shortify' ); ?>
                  </td>
                  <td width="677">
                      <input type="checkbox" name="wp_shortify_show_frontend" value="1" <?php if( get_option( 'wp_shortify_show_frontend' ) == 1 ) { echo 'checked'; } ?>>
                  </td>
                </tr>
                  <tr>
                    <td width="199"><?php _e( 'Click Stats under Posts ' ,'wp-shortify'); ?></td>
                    <td>
                       <select class="wp-shortify-choosen" name="show_on[]" multiple style="width:600px;">
                            <?php 
                                $post_types = get_post_types();
                                   foreach ( $post_types as $post_type ) {
                            ?>
                            <option value="<?php echo $post_type ?>" 
                                <?php if ( is_array( get_option( 'wp_shortify_show_posts_clicks' ) ) ) 
                                      {
                                        selected(in_array($post_type, get_option('wp_shortify_show_posts_clicks')));
                                      }  
                                ?>>
                                <?php echo $post_type; ?>
                            </option>
                          <?php } ?>
                       </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Exclude Posts</td>
                    <td>
                      <input type="text" name="no-posts" value="<?php echo implode( ',', get_option('wp_shortify_ex_posts') ); ?>" style="width:416px;">
                      <p class="description">Posts IDS separate with comma i-e (25,27)</p>
                    </td>
                  </tr>
                  <tr>
                    <td width="199"><?php _e( 'Which Roles can access the click stats :', 'wp-shortify' ); ?></td>
                    <td>
                      <select  name="access_role_back[]" class="wp-shortify-choosen" multiple style="width:600px;">
                        <?php
                        if ( !isset( $wp_roles ) ){
                          $wp_roles = new WP_Roles();
                        }
                        $i=0;
                        foreach ( $wp_roles->role_names as $role => $name ) {
                          if ($role != 'subscriber'){
                            $i++;
                            ?>
                            <option value="<?php echo $role; ?>" <?php if ($role == 'administrator') echo __('selected','wp-shortify'); ?>
                              <?php
                              if ( is_array( get_option( 'wp_shortify_admin_access' ) ) ) {
                                selected( in_array( $role, get_option( 'wp_shortify_admin_access' ) ) );
                              }
                              ?>>
                              <?php echo strtoupper($name); ?>
                            </option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                    </td>
                  </tr>
                <tr>
                    <td>
                      <p class="submit">
                        <button type="submit" name="save_advance_settings" class="btn wp-shortify-btn"><?php _e( 'Save Changes', 'wp-shortify' ); ?></button>
                      </p>
                    </td>
                </tr>
              </tbody>
            </table>
          </form>
    </div>
     <div class="tab-pane active" id="google-settings">
       <form action="" method="post" name="auth_form" id="auth_form">
            <table width="1004" class="form-table">
              <tbody>
              <tr>
                <td></td>
                  
                <td>
                  <p class="description"> To fully enjoy this plugin, you need to create a Project in Google <a target="_blank" href="https://console.developers.google.com/project">Console</a>. Read this simple 3 minutes <a target="_blank" href="http://wp-analytify.com/google-api-tutorial">Guide post</a> to get your ClientID, Client Secret and API Key and enter them in below inputs.</p>
                </td>
              </tr>
                <tr>
                  <td width="115"><?php _e( 'CLIENT ID:' ,'wp-shortify')?></td>
                      <td width="877">
                          <input type="text" name="google_client_id" value="<?php echo get_option( 'wp_shortify_client_id' ) ?>" style="width:534px;"/> 
                      </td>
                </tr>
                <tr>
                      <td><?php _e('CLIENT SECRET:','wp-shortify')?> </td>
                      <td>
                        <input type="text" name="google_client_secret" value="<?php echo get_option( 'wp_shortify_client_secret' ) ?>" style="width:534px;"/>
                      </td>
                </tr>
                <tr>
                      <td><?php _e('API KEY:','wp-shortify')?> </td>
                      <td>
                        <input type="text" name="google_api_key" value="<?php echo get_option( 'wp_shortify_api_key' ) ?>" style="width:534px;"/>
                      </td>
                </tr>
                <tr>
                  <td>
                    <p class="submit">
                       <button type="submit" class="btn wp-shortify-btn" name = "save_google_settings" /><?php _e('Save Settings','wp-shortify') ?>  </button>
                    </p>
                  </td>
                </tr>
              </tbody>
          </table>
        </form>
        <form action="" method="post">
              <?php if( get_option( 'wp_shortify_token' ) ) { ?>
                    <p>
                        <button type="submit" class="button-primary btn wp-shortify-btn" name="logout">
                            <i class="glyphicon glyphicon-log-out"></i><?php _e(' Logout From Google','wp-shortify') ?>
                        </button>
                     </p>
              <?php 
                  
                  }
              ?>
        </form>
    </div>
  </div>
</div>