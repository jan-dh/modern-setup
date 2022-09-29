<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

$isLocal = App::env('CRAFT_ENVIRONMENT') === 'local';
$isDev = App::env('CRAFT_ENVIRONMENT') === 'dev';
$isProd = App::env('CRAFT_ENVIRONMENT') === 'production';


return GeneralConfig::create()
    ->defaultWeekStartDay(1)
    ->enableCsrfProtection(true)
    ->omitScriptNameInUrls(true)
    ->addTrailingSlashesToUrls(false)
    ->cpTrigger('admin')
    ->convertFilenamesToAscii(true)
    ->limitAutoSlugsToAscii(true)
    ->allowUpdates($isLocal)
    ->allowAdminChanges($isLocal)
    ->devMode(!$isProd)
    ->sendPoweredByHeader(false)
    ->maxInvalidLogins(3)
    ->preventUserEnumeration(true)
    ->phpSessionName('PHPSESSID')
    ->csrfTokenName('CSRF_TOKEN')
    ->phpMaxMemoryLimit('256M')
    ->disallowRobots(!$isProd)
    ->runQueueAutomatically(!$isProd)
    ->aliases([
        'assetBaseUrl' => getenv('ASSET_BASE_URL') ? trim(getenv('ASSET_BASE_URL'), '/') : trim(getenv('BASE_URL'), '/'),
        'baseUrl' => trim(getenv('BASE_URL'), '/'),
    ]);
