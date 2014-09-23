<?php

define('SITE_PATH', realpath(dirname(__FILE__)));
define('APP_NAME', "Application");
define('APP_PATH', realpath(SITE_PATH . "/". APP_NAME)."/");
define('PROJECT_NAME', "ProjectA");

require_once APP_PATH . "Application.php";

$app = new Application();
$app->start();

require_once TEST_PATH."test.php";


?>
