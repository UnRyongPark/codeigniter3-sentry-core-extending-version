<?php

/*
| -------------------------------------------------------------------------
| Sentry
| -------------------------------------------------------------------------
*/
//Do not edit if possible, since this is the default setting.
$config['sentry_path'] = BASEPATH . '../vendor/sentry/sentry/lib/Raven/Autoloader.php';
$config['sentry_logging_levels'] = array('INFO', 'WARNING', 'DEBUG', 'ERROR', 'FATAL');
$config['sentry_logging_level'] = 4 - $config['log_threshold'];
$config['sentry_log_threshold'] = $config['sentry_logging_levels'][$config['sentry_logging_level']];
$config['sentry_client'] = 'your sentry client endpoint';
$config['sentry_config'] = array();