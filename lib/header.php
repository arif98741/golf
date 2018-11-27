<?php
ob_start();

date_default_timezone_set('Asia/Dhaka');

define("BASE_URL", 'http://dagonbhuiyanpaurashava.org.bd/apps/');

//case control
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

header("Cache-Control: post-check=0, pre-check=0", false);

header("Pragma: no-cache");



$path = realpath(dirname(__DIR__));

include_once $path . '/classes/Session.php';

//Session::checkSession();



function __autoload($class) {

    $filepath = realpath(dirname(__DIR__));

    include_once $filepath . '/classes/' . $class . '.php';

}



include_once $path . '/helper/Helper.php';

error_reporting(E_ALL);
$db = new Database();
$log = new Login();
$ext = new Extra();
$help = new Helper();
$man = new Manage();

if (isset($_GET['action']) && $_GET['action'] == 'logout') {

    session_destroy();

    echo "<script>window.location = 'login.php';</script>";

}


?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>GOLF EVENT</title>
		<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link type="text/css" href="css/theme.css" rel="stylesheet">
		<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
						<i class="icon-reorder shaded"></i>
					</a>
					<a class="brand" href="index.php"> 
						GOLF EVENT
					</a>
					<div class="nav-collapse collapse navbar-inverse-collapse">
						<?php include( 'top_menu.php'); ?>
	