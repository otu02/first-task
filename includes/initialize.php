<?php

//DIRECTORY SEPARATOR
defined('DS') ? null : define("DS", DIRECTORY_SEPARATOR);

//ROOT DIRECTORY
defined('SITE_ROOT') ? null : define("SITE_ROOT", "directory path");

// Library path
defined('LIB_PATH') ? null : define("LIB_PATH", SITE_ROOT.DS."includes");

// load files in
require_once('config.php');
require_once('database.php');
