<?php

/**
 * @file
 * AJAX callbacks for the username_check module.
 */

/**
 * Main AJAX function: originality check menu callback.
 */
function username_check_callback() {
  $output = array();

  $username = $_GET['username'];

  $ret = user_validate_name($username);
  if ($ret) {
    $output['allowed'] = FALSE;
    $output['msg'] = $ret;
  }
  else {
    $ret = user_is_blocked($username);
    if ($ret) {
      $output['allowed'] = FALSE;
      $output['msg'] = t('The username %username is not allowed.', array('%username' => $username));
    }
    else {
      $username = check_plain($username);
      $ret = _username_check_is_user_exists($username);

      if ($ret) {
        $output['allowed'] = FALSE;
        $output['msg'] = t('The name %username is already taken.', array('%username' => $username));
      }
      else {
        $output['allowed'] = TRUE;
      }
    }
  }

  drupal_json_output($output);
}

/**
 * Query user table to check if such username is already exists.
 */
function _username_check_is_user_exists($username) {
  return db_query("SELECT COUNT(u.name) count FROM {users} u WHERE LOWER(u.name) = LOWER(:username)", array(':username' => $username))->fetchField();
}
