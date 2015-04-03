<?php
  /*
* Exit if accessed directly
  */
  if ( ! defined( 'ABSPATH' ) ) exit;
  
  $wp_shortify = new WP_Shortify();
  if ( isset( $_POST[ 'generate_urls' ] ) ) {
          $post_types = get_option( 'wp_shortify_show_posts_clicks' ) ;
          global $post;
          
            //$arr = array(implode(',', $post_types));
            $args = array(
                              'post_type'        => $post_types,
                              'post_status'      => 'publish',
                              'posts_per_page'   =>  -1
                        );
          $posts_array = get_posts( $args );
          foreach ($posts_array as $post ) {
            setup_postdata( $post );
            $wp_shortify->service = new Shortify_WP_Google_Service_Urlshortener($wp_shortify->client);
            $url = new Shortify_WP_Google_Service_Urlshortener_Url();
            $url->longUrl = get_permalink( get_the_ID() );
            if(!get_post_meta( get_the_ID() ,'short_url',true )){
                    
                    $short = $wp_shortify->service->url->insert( $url );
                    update_post_meta( get_the_ID(), 'short_url', $short->id );
                        
              }
          }
          $update_msg = 'All URLS Generated';
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
    <span class="intro-text"><?php _e( 'Shortify -> Share the shortened URLs with world and track click Stats  .', 'wp-shortify' ); ?></span>
  </h2>

  <?php

  if ( isset( $update_msg ) )
  {
    echo '<div id="message" class="updated below-h2"><strong><p>'.$update_msg.'</p></strong></div>';
  } 
  
  ?>  
  <div id="col-container">
    <div class="metabox-holder">
      <div class="postbox" style="width:100%;">
          <div id="main-sortables" class="meta-box-sortables ui-sortable">
            
              <h3 class="hndle"> Generate Short URL with one click</h3> 
              <div class="inside">
              <div class="panel-group" id="accordion">
              <div class="panel panel-info panel-clear">
                    <div class="panel-heading">
                          <h4 class="panel-title">
                                 <?php _e('Generate all short URLS for selected posts with one click','wp-shortify'); ?> 
                          </h4>
                             <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

                          </div>
                          <div class="panel-body"> 
                              <div class="col-md-12 col-sm-12">
                                <form action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" method="post">
                                    <button type="submit" class="btn wp-shortify-btn" name = "generate_urls" /> Generate short URLS </button>
                                </form>
                        </div>
                    </div>
                  </div> 
                <div class="panel panel-info panel-clear">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                     <?php _e('Share your Short URLS','wp-shortify'); ?> 
                 </h4>
                 <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

              </div>
              <div class="panel-body"> 
                <div class="col-md-12 col-sm-12">
                  <table class="table table-striped wp-shortify-posts">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th><?php _e('Short URL','wp-shortify')?></th>
                          <th><?php _e('Long URL','wp-shortify')?></th>
                          <th><?php _e('Share','wp-shortify')?></th>
                          
                        </tr>
                      </thead>
                          <tbody>
                            <?php  
                              global $post;
                              $post_types = get_option( 'wp_shortify_show_posts_clicks' ) ;
                              $args = array(
                                              'post_type'        => $post_types,
                                              'post_status'      => 'publish',
                                              'posts_per_page'   =>  -1
                                            );
                              $posts_array = get_posts( $args );
                              $i=1;
                              foreach ($posts_array as $post ) {
                                setup_postdata( $post );

                              ?>
                              <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><a href="<?php echo get_post_meta( get_the_ID() ,'short_url',true ) ?>"><?php echo get_post_meta( get_the_ID() ,'short_url',true ) ?></a></td>
                                <td><?php echo get_permalink(get_the_ID()); ?></td>
                                <td>
                                  <a href="#" onclick ="open_popup('https://www.facebook.com/sharer/sharer.php?u=<?php echo get_post_meta( get_the_ID() ,'short_url',true ) ?>')" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                  <a href="#" onclick ="open_popup('https://plus.google.com/share?url=<?php echo get_post_meta( get_the_ID() ,'short_url',true ) ?>')" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a> 
          
                                 </td>
                              </tr>
                              <?php
                              $i++;
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>