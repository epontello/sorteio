<?php
//session_destroy();

session_start();

require 'config.php';

/**
* Composer
*/
require 'vendor/autoload.php';

// spl_autoload_register(function($class){

// 	if(file_exists('controllers/'.$class.'.php')) {
// 		require 'controllers/'.$class.'.php';
// 	}
// 	else if(file_exists('models/'.$class.'.php')) {
// 		require 'models/'.$class.'.php';
// 	}
// 	else if(file_exists('core/'.$class.'.php')) {
// 		require 'core/'.$class.'.php';
// 	}

// });

$core = new Core\Core();
$core->run();



