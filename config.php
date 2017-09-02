<?php

// connection à la BDD

define('HOME','index.php'); //pour mieux organiser le site web
//define('URL_IMG',URL.'img/'); 
define('DS','/'); 

$dbName = 'dlc';
$dbUser = 'root';
$dbPassword ='choudoudou';

function connectBdd($dbName,$dbUser,$dbPassword) {
	try {
	$connect = new PDO("mysql:host=localhost:3306;dbname=$dbName", "$dbUser", "$dbPassword",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}
	return $connect;
}
?>