<?php
/*
Plugin Name: MLO users SSO authentication
Description: Authenticate users form dogmazic using an cookie based token
Version: 1.0.1
Author: Tumulte
*/

// plugin must run before any other authentication plugins -
add_action('wp', 'logOnIfSso', 1);

function logOnIfSso(){
  //check that that there's a cookie and that the user isn't logged on to prevent
  //useless queries
  $user_id = $_COOKIE['sso_authent_coomute']['id'];
  if (! is_user_logged_in() && $user_id){
    //DB config
    include('mlo_sso_config.php');
    //Get the session ID in the user manager database
    $connection = mysql_connect($db_conf['host'], $db_conf['user'], $db_conf['pass']) 
      or die ('Error connecting to the user mysql to get the sso');
    mysql_select_db($db_conf['db']);
    $query = "SELECT ".$db_conf['row']." FROM ".$db_conf['table']." WHERE id='".$user_id."'";
    $session_id = mysql_query($query);
    $result = mysql_result($session_id, 0);

    //IF there is a user, and the token in the cookie matches the one in the DB : logon !
    if($_COOKIE['sso_authent_coomute']['token'] == $result){
      wp_set_auth_cookie($user_id);
    }
  }elseif(is_user_logged_in() && !$user_id){
    //logout user without cookie
    wp_clear_auth_cookie();
  }
}
