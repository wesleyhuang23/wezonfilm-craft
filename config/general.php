<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the default settings in `vendor/craftcms/cms/src/config/defaults/general.php`.
 */

define('URI_SCHEME',  ( isset($_SERVER['HTTPS'] ) ) ? "https://" : "http://" );

return [
    // Base site URL
    'siteUrl' => URI_SCHEME . getenv('CRAFT_SITE_URL'),

    // Replace Database Values
    'siteName' => getenv('CRAFT_SITE_NAME'),

    // Environment-specific variables (see https://craftcms.com/docs/multi-environment-configs#environment-specific-variables)
    'environmentVariables' => array(
      'assetsBaseUrl' => URI_SCHEME . getenv('CRAFT_SITE_URL') . '/assets',
      'blockCrawlers' => 1,
      'isStaging' => 1
    ),

    // Default Week Start Day (0 = Sunday, 1 = Monday...)
    'defaultWeekStartDay' => 0,

    // Enable CSRF Protection (recommended, will be enabled by default in Craft 3)
    'enableCsrfProtection' => true,

    // Whether "index.php" should be visible in URLs (true, false, "auto")
    'omitScriptNameInUrls' => 'true',

    // Control Panel trigger word
    'cpTrigger' => 'admin',

    // Set an unique string to identify the app, prevents users from getting logged out after a capistrano deploy
    'appId' => 'your-string-here',

    // Dev Mode (see https://craftcms.com/support/dev-mode)
    'devMode' => true,
];
