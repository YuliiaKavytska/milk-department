<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/admin/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/admin/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/admin/assets/css/demo.css" rel="stylesheet" />
    <link href="/admin/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<?php 
if(!isset($_COOKIE["admin"])){
	header("Location: /");
}
?>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="/admin/assets/img/sidebar-4.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/admin" class="simple-text">
                        Milk
                    </a>
					 </div>
					 <?php
					 	include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/nav.php";
					 ?>
            </div>
        </div>
		  <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
									<?php
										$user = mysqli_fetch_assoc($connect->query("SELECT * FROM employees WHERE id=" . $_COOKIE["admin"]))
									?>
                    <a class="navbar-brand" href="#pablo"> Привіт, <?php echo $user["name"] ?>! Ти володієш правами адміністратора. </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
            </nav>
            <!-- End Navbar -->
				<div class="content">
    				<div class="container-fluid">