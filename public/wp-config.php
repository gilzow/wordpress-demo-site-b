<?php
/**
* include the true wp-config file
 */
include dirname(__DIR__).DIRECTORY_SEPARATOR.'wp-config.php';
/**
 * Why are we requiring the settings file again when it's already been required in the real config file? Because WPCLI
 * does a regex on the wp-config file it finds to verify that it is "real".
 * @see https://github.com/wp-cli/wp-cli/issues/1218
 * @see https://github.com/wp-cli/wp-cli/blob/master/php/WP_CLI/Runner.php#L571 (as of v2.1.0)
 * @see https://github.com/wp-cli/wp-cli/issues/1218
 */
require_once(ABSPATH . 'wp-settings.php');
