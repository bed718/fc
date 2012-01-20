<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column - Sidebar Right'),
  'category' => t('Columns: 2'),
  'icon' => 'sideright.png',
  'theme' => 'panels_sideright',
  'css' => 'sideright.css',
  'regions' => array(
    'left' => t('Main'),
    'right' => t('Sidebar Right')
  ),
);
