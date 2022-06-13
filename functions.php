<?php
if (!defined('ABSPATH')) {
  exit;
}
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/navbar.php';

define('ASSETS_DIR', get_template_directory_uri() . '/assets');
define('IMG_DIR', ASSETS_DIR . '/img');
