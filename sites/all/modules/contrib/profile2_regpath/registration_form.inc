<?php

/**
 * @file
 * Builds profile-specific register, login, and password forms.
 */
function _profile2_regpath_user_register($vars = array()) {
  module_load_include('pages.inc', 'user', 'user');
  $output = drupal_get_form('user_register_form');
  drupal_set_title(t('User Account'));
  // @todo Allow admins to configure page titles per profile type.
  //drupal_set_title(t('Create new @label account', array('@label' => $vars['profile']->label)));
  return $output;
}

function _profile2_regpath_user_password($vars = array()) {
  module_load_include('pages.inc', 'user', 'user');
  $output = drupal_get_form('user_pass');
  drupal_set_title(t('User Account'));
  return $output;
}

function _profile2_regpath_user_login($vars = array()) {
  module_load_include('pages.inc', 'user', 'user');
  $output = user_page();
  drupal_set_title(t('User Account'));
  return $output;
}