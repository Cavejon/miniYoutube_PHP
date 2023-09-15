<?php
require 'environment.php';

define("BASE_URL", "http://localhost:8080/simples/mvc");

global $config;
global $db;

$config = array();
if (ENVIRONMENT == 'development') {
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
;

$db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);