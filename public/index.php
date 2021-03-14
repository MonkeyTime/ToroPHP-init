<?php
define('ROOT_PATH', dirname(dirname(__FILE__)));
define('APP_PATH', ROOT_PATH . '/application');
define('PUBLIC_PATH', ROOT_PATH . '/public');
define('VENDOR_PATH', ROOT_PATH . '/vendor');

define('CONTROLLER_PATH', APP_PATH . '/controllers');
define('MODEL_PATH', APP_PATH . '/models');
define('VIEW_PATH', APP_PATH . '/views');

require(VENDOR_PATH . '/autoload.php');
require(APP_PATH . '/dispatcher.php');