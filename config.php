<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/MVC");
	$config['dbname'] = 'vendas21';
	$config['host'] = 'localhost\BD';
	$config['dbuser'] = 'sa';
	$config['dbpass'] = '123456';
} else {

	//if(strpos($_SERVER['REMOTE_ADDR'], "192.168") === 0){
		define("BASE_URL", "http://localhost/sorteio");
		$config['dbname'] = 'STOTEM';
		$config['host'] = 'ACER\SQLEXPRESS';
		$config['dbuser'] = 'sa';
		$config['dbpass'] = '1234';
	//}

}

global $db;
try {
	$db = new \PDO("sqlsrv:Server=".$config['host'].";Database=".$config['dbname'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}
