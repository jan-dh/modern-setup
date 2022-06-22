<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

$isLocal = App::env('CRAFT_ENVIRONMENT') === 'local';
$isDev = App::env('CRAFT_ENVIRONMENT') === 'dev';
$isProd = App::env('CRAFT_ENVIRONMENT') === 'production';

return [
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 1,

        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,

        // Whether administrative changes should be allowed
        'allowAdminChanges' => $isDev,

        // Whether crawlers should be allowed to index pages and following links
        'disallowRobots' => !$isProd,
    ],
    // Local
    'local' => [
        'devMode' => true,
        'allowAdminChanges' => true,
    ],
    // Dev
    'dev' => [
        'devMode' => true,
        'allowAdminChanges' => false,
    ],
    'production' => [
        // Prevent administrative changes from being made on production
        'allowAdminChanges' => false,
    ],
];
