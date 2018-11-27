<?php
	define("BASE_URL", 'http://dagonbhuiyanpaurashava.org.bd/apps/');
	ob_start();
	include 'classes/Session.php';
	include_once 'classes/Login.php';
	Session::checkLogin();
	$log = new Login();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>পৌরসভা নির্মাণ অনুমোদন সিস্টেম</title>
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
						পৌরসভা নির্মাণ অনুমোদন সিস্টেম
					</a>
					<div class="nav-collapse collapse navbar-inverse-collapse">
						<ul class="nav pull-right">
							<!---
								<li><a href="registration.php">
								<i class="menu-icon icon-user"></i> রেজিষ্ট্রেশন
								</a></li>
							--->
							<li><a href="#">
								পার্সওয়ার্ড ভুলে গেছেন?
							</a></li>
						</ul>
					</div><!-- /.nav-collapse -->
				</div>
			</div><!-- /navbar-inner -->
		</div><!-- /navbar -->
		<div class="wrapper">
			<div class="container">
				<!--<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert">×</button>
										 <strong> <marquee style="margin:0; padding:0;"> বর্তমানে সিস্টেমটি আপডেট এর কাজ চলছে। এই ক্ষেত্রে কিছু কিছু অপশনে সাময়িক সমস্যা দেখা   দিতে পারে ।  আগামী শনিবার রাত ১২:০০ মধ্যে সিস্টেমটি পুনরায় স্বাভাবিক ভাবে কাজ করবে। </marquee></strong> 
									</div>
				<div class="row"> -->
				
					<div class="module module-login span4 offset4">
					
						<form class="form-vertical" method="post">
							<div class="module-head">
								<h3>ইউজার লগইন</h3>
							</div>
						
								<div class="module-body">
									<?php
										if ($_SERVER['REQUEST_METHOD'] == 'POST') {
											$status = $log->login($_POST);
										}
									?>
										<form method="post" action="">
									<div class="control-group">
										<div class="controls row-fluid">
											<input type="text" name="username" class="span12"  placeholder="Username">
										</div>
									</div>
									<div class="control-group">
										<div class="controls row-fluid">
											<input type="password" name="password" class="span12" placeholder="Password">
										</div>
									</div>
								</div>
								<div class="module-foot">
									<div class="control-group">
										<div class="controls clearfix">
											<button type="submit" class="btn btn-success pull-right">লগইন</button>
											<label class="checkbox">
												<input type="checkbox"> মনে রাখুন
											</label>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!--/.wrapper-->
            <script>
				$(function () {
					$('input').iCheck({
						checkboxClass: 'icheckbox_square-blue',
						radioClass: 'iradio_square-blue',
						increaseArea: '20%' // optional
					});
				});
			</script>
	<?php include( 'lib/footer.php'); ?>      	