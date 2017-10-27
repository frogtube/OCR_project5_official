<?php
require '../vendor/autoload.php';

use \MyFramework\Application;


$app = new Application();
$app->getController();
$app->run();
