<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

ini_set("log_errors", 1);
ini_set("error_log", "includes/PHP_errors.log");

define( 'ROOT_DIR', dirname(dirname(__FILE__)));
define( 'ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
define('APP_ROOT', __DIR__);
define('SITE_STYLES_LOCATION', ROOT_URL . "/data/styles/");

set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__));

define('DOT', get_include_path() );


?>