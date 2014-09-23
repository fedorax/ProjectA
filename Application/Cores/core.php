<?php
define('DS',DIRECTORY_SEPARATOR);
define('CORE_BASE_NAME', "Base");
define('CORE_DB_NAME', "DB");
define('CORE_LOAD_NAME', "LOAD");
define('CORE_SESSION_NAME', "Session");
define('CORE_UTIL_NAME', "Util");
define('CONFIG_NAME', "Config");
define('DATA_NAME', "Data");
define('TEST_NAME', "Test");
define('CONTROLLER_NAME', "Controllers");
define('MODEL_NAME', "Models");
define('VIEW_NAME', "Views");
define('VIEW_PARTS_NAME', "Parts");

define('CORE_BASE_PATH', realpath(CORE_PATH .DS.CORE_BASE_NAME).DS);
define('CORE_DB_PATH', realpath(CORE_PATH .DS.CORE_DB_NAME).DS);
define('CORE_LOAD_PATH', realpath(CORE_PATH .DS.CORE_LOAD_NAME).DS);
define('CORE_UTIL_PATH', realpath(CORE_PATH .DS.CORE_UTIL_NAME).DS);
define('CORE_SESSION_PATH', realpath(CORE_PATH.CORE_SESSION_NAME).DS);


define('CONFIG_PATH', realpath(SITE_PATH .DS. CONFIG_NAME).DS);
define('DATA_PATH', realpath(SITE_PATH .DS. DATA_NAME).DS);
define('CONTROLLER_PATH', realpath(APP_PATH.DS.CONTROLLER_NAME).DS);
define('MODEL_PATH', realpath(APP_PATH.DS.MODEL_NAME).DS);
define('VIEW_PATH', realpath(APP_PATH.DS.VIEW_NAME).DS);
define('VIEW_PARTS_PATH', realpath(VIEW_PATH.DS.VIEW_PARTS_NAME).DS);
define('TEST_PATH', realpath(SITE_PATH .DS. TEST_NAME).DS);

require_once CORE_LOAD_PATH."loader.php";

require_once CONFIG_PATH.'config.php';

?>