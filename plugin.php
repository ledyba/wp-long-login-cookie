<?php
/**
 * Plugin Name: wp-long-login-cookie
 * Description: long login
 * Author: Kaede Fujisaki
 * Author URI: https://7io.org
 * Version: 1.0.0
 */

if( !function_exists( 'long_login_cookie' ) ) {
  function long_login_cookie() {  
    return 60 * 60 * 24 * 365 * 10;
  }  
  add_filter( 'auth_cookie_expiration', 'long_login_cookie' );  
}

