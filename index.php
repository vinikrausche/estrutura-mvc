<?php

use \App\Controllers\Pages\HomeController;

require_once __DIR__ . "/vendor/autoload.php";

echo HomeController::getHome();
