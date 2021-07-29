<?php

// phpcs:ignoreFile

/**
 * Load default settings.
 */
include $app_root . '/' . $site_path . '/default.settings.php';

/**
 * Get database settings from .env.
 */
$databases['default']['default'] = [
  'database' => $_ENV['DB_NAME'],
  'driver' => 'mysql',
  'host' => $_ENV['DB_HOSt'],
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'password' => $_ENV['DB_PASS'],
  'port' => $_ENV['DB_PORT'],
  'prefix' => '',
  'username' => $_ENV['DB_USER'],
];

/**
 * Location of the site configuration files.
 */
$settings['config_sync_directory'] = '../config';

/**
 * Load default services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/default.services.yml';

/**
 * Load local development override configuration, if available.
 */
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}

/**
 * Load automatically generated local settings override managed by ddev, if available.
 */
if (file_exists($app_root . '/' . $site_path . '/settings.ddev.php') && getenv('IS_DDEV_PROJECT') == 'true') {
  include $app_root . '/' . $site_path . '/settings.ddev.php';
}
