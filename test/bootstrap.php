<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

// Define path to application directory
defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(dirname(__FILE__))));

// Define application environment (use 'production' by default)
defined('APPLICATION_ENV')
        || define('APPLICATION_ENV', 'testing');

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
//    APPLICATION_PATH . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . 'support', // Support-Klassen fuer Tests
//    APPLICATION_PATH . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . 'library', // tests/library
//    APPLICATION_PATH . DIRECTORY_SEPARATOR . 'library', // Server library
//    APPLICATION_PATH . DIRECTORY_SEPARATOR . 'vendor', // 3rd party library
    get_include_path()
)));

//require_once 'autoload.php';

// enable fallback autoloader for testing
$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->suppressNotFoundWarnings(false);
$autoloader->setFallbackAutoloader(true);
