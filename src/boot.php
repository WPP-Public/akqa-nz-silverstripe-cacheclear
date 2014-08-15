<?php

$frameworkPath = __DIR__ . '/../../framework';

require_once $frameworkPath . '/core/Constants.php';
require_once $frameworkPath . '/core/Core.php';
require_once $frameworkPath . '/model/DB.php';

global $databaseConfig;
DB::connect($databaseConfig);
Session::start();