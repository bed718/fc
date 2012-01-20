<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column - Sidebar Left'),
  'category' => t('Columns: 2'),
  'icon' => 'sideleft.png',
  'theme' => 'panels_sideleft',
  'css' => 'sideleft.css',
  'regions' => array(
    'left' => t('Main'),
    'right' => t('Sidebar Left')
  ),
);
