<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



define( 'ROOT_DIR', dirname(__FILE__) );
define( 'ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
define( 'ROOT_DOC', $_SERVER['DOCUMENT_ROOT'] . "WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW");
define('ROOT', __DIR__);
define('DOT', get_include_path() );

?>