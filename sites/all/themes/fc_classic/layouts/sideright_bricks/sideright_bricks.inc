<?php

/**
 * @file
 * Implementation for the two column bricked layout
 */

// Plugin definition
$plugin = array(
  'title' => t('Two column bricks - Sidebar Right'),
  'category' => t('Columns: 2'),
  'icon' => 'sideright_bricks.png',
  'theme' => 'panels_sideright_bricks',
  'css' => 'sideright_bricks.css',
  'regions' => array(
    'top' => t('Top'),
    'left_above' => t('Main above'),
    'right_above' => t('Right sidebar above'),
    'middle' => t('Middle'),
    'left_below' => t('Main below'),
    'right_below' => t('Right sidebar below'),
    'bottom' => t('Bottom'),
  ),
);

