<?php

/**
 * @file
 * Admin page callbacks for the username_check module.
 */

/**
 * Menu callback; displays the username_check module settings page.
 */
function username_check_settings() {
  $form = array();

  $form['username_check_delay'] = array(
    '#type' => 'textfield',
    '#title' => t('Timer threshold'),
    '#description' => t('Threshold in seconds (ex: 0.5, 1).'),
    '#default_value' => variable_get('username_check_delay', 1),
  );

  return system_settings_form($form);
}