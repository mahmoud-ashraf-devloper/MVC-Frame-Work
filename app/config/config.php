<?php
// -----------------------------------------------------------------------
// DEFINE SITE NAME
// -----------------------------------------------------------------------
define("SITE_NAME", 'MVC Framework');
// -----------------------------------------------------------------------
// DEFINE DATABASE CONSTANTS
// -----------------------------------------------------------------------
define("DB_HOST", 'localhost');
define("DB_NAME", 'mvc_framework');
define("DB_USER", 'root');
define("DB_PASS", '');
// -----------------------------------------------------------------------
// DEFINE SEPERATOR ALIASES
// -----------------------------------------------------------------------
define("URL_SEPARATOR", '/');
define("DS", DIRECTORY_SEPARATOR);
define("PS", PATH_SEPARATOR);
define("US", URL_SEPARATOR);

// -----------------------------------------------------------------------
// DEFINE ROOT PATHS
// -----------------------------------------------------------------------
define("RELATIVE_PATH_ROOT" , '');
define("LOCAL_PATH_ROOT"    , $_SERVER["DOCUMENT_ROOT"]);
define("CONTROLLERS_PATH"   , LOCAL_PATH_ROOT.DS.'app'.DS.'controllers');
define("VIEWS_PATH" , LOCAL_PATH_ROOT.DS.'app'.DS.'views');
define("MODELS_PATH", LOCAL_PATH_ROOT.DS.'app'.DS.'models');
// -----------------------------------------------------------------------
// DEFINE ROOT URL
// -----------------------------------------------------------------------
define("ROOT_URL", 'http://mvc.com/');
