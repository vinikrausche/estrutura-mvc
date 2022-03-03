<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Controllers\Pages\HomeController;
use App\Http\Request;

echo "<pre>";
$request = new Request();
print_r($request);
echo "</pre>";

exit;

echo HomeController::getHome();
