<?php

/* 
 * The core bootstrap loaded by all files. 
 * 
 * To disable error displays, change the below "define( 'CONFIG_DEV_ENV', true);" to false
 */
 
 //Force SSL
 if($_SERVER["HTTPS"] != "on") {
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
 
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



//define site variables (not styles)
define( 'CONFIG_ROOT_DIR', dirname(dirname(__FILE__))); // C:\xampp\htdocs\aqm <inlude file from another location relative to here? >
$tempUrl = substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(CONFIG_ROOT_DIR))); //    /aqm   <use to set the css location on another php file>
if (empty($tempUrl)) {
    $tempUrl = "/"; //if there no slash to begin with, add it e.g. root
} else {
    $tempUrl = $tempUrl . "/";
}
define( 'CONFIG_ROOT_URL', $tempUrl);
unset($tempUrl); //don't use anymore
//define('INCLUDES', __DIR__);        //  C:\xampp\htdocs\aqm\includes <include location>




//independant files (needed by others)
//include all files in the "lib" & models directory

$includePhpFilesArray = array('/lib/');
foreach ($includePhpFilesArray as $folder){
    try {
        $files = array();
        $lib = dirname(__FILE__) . $folder;
            if (is_dir($lib)){
                    $dir = opendir($lib);
                    while(($currentFile = readdir($dir)) !== false){
                        if ( $currentFile != '.' && $currentFile != '..' && strtolower(substr($currentFile, strrpos($currentFile, '.') + 1)) == 'php' ){
                            $files[] = $currentFile;
                        }
                    }
            closedir($dir);
            } else {
                throw new Exception('Error including library in config.');
            }
        foreach ($files as $file) {
            include_once dirname(__FILE__).$folder.$file;
        }
        $lib = null;
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

//set include path (so you don't reference other files, just this)

$slash = DIRECTORY_SEPARATOR;
$directoriesToInclude = array (
    ''                          //include directory
);

foreach ($directoriesToInclude as $dir){
    $path = directoryToArrayAndAddCurrentDirectory(dirname(__FILE__) . $dir, true, true, false);
    set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $path));
}

//set include path (so you don't reference other files, just this)
$OtherDirectoriesToInclude = array (
    '/../',                 //root directory
);
//dont explore these fodler
foreach ($OtherDirectoriesToInclude as $dir){
    $path = dirname(__FILE__) . $dir;
    set_include_path(get_include_path() . PATH_SEPARATOR . $path);
}

//set global settings
mb_internal_encoding(); //set internal utf-8 encoding
mb_http_output();       //mb_* string functions must still be used
date_default_timezone_set('Australia/Sydney'); // set default timezone incase system is set to wrong time (and avoid apache error)

if(session_id() == '') { //it may of been started eariler eg login file.
    session_start();
}
//auto classnames by classname.php 
//note not using default (the no parms version) since php 5.3 convert to lowercase, we don't want that
//spl_autoload_register();
spl_autoload_register( function( $class ) { include $class . '.php'; });

//php files needed by all

include_once("styles.php");

require_once('templateLogic.php');

//note: when echo-ing html other language, use  echo (htmlentities($string));

