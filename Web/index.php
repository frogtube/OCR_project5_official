<?php
require '../vendor/autoload.php';

use \MyFramework\Application;

define('ROOT', dirname(__DIR__));

// Starting application
$app = new Application();
$app->run();

// PDOFactory initialization




