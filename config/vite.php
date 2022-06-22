<?php

use craft\helpers\App;


return [
    'checkDevServer' => true,
    'devServerInternal' => 'http://localhost:3000/',
    'devServerPublic' => Craft::getAlias('@web') . ':3000',
    'errorEntry' => 'resources/js/app.js',
    'manifestPath' => Craft::getAlias('@webroot') . '/dist/manifest.json',
    'serverPublic' => Craft::getAlias('@web')  . '/dist/',
    'useDevServer' => App::env('CRAFT_ENVIRONMENT') === 'local',
];
