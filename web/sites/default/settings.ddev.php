<?php

$databases['default']['default'] = array(
  'database' => "db",
  'username' => "db",
  'password' => "db",
  'host' => "db",
  'driver' => "mysql",
  'port' => 3306,
  'prefix' => "",
);

$settings['hash_salt'] = 'wCljVcHmtgJnZSzXVKNjklXZaSmqlqSrARAmvdxNLmGkbEBXZAvpObVIGiJIjyBH';

// This will prevent Drupal from setting read-only permissions on sites/default.
$settings['skip_permissions_hardening'] = TRUE;

// This will ensure the site can only be accessed through the intended host
// names. Additional host patterns can be added for custom configurations.
$settings['trusted_host_patterns'] = ['.*'];

// Don't use Symfony's APCLoader. ddev includes APCu; Composer's APCu loader has
// better performance.
$settings['class_loader_auto_detect'] = FALSE;

// Override domain settings with local one.
$config['domain.record.przywory']['hostname'] = 'przywory.loc';
$config['domain.record.przedszkole']['hostname'] = 'przedszkole.przywory.loc';
$config['domain.record.biblioteka']['hostname'] = 'biblioteka.przywory.loc';
$config['domain.record.stowarzyszenie']['hostname'] = 'naszeprzywory.loc';
