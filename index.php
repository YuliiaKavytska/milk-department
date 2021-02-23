<?php

	include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
	$page = "log";
	if(isset($_GET["u_code"])){
		$changeSql = "SELECT * FROM employees WHERE confirm_mail='" . $_GET["u_code"] . "'";
		$changeResult = mysqli_query($connect, $changeSql);
		if($changeResult->num_rows > 0){
			$user = mysqli_fetch_assoc($changeResult);
			$updateSql = "UPDATE employees SET verifided = '1' WHERE `employees`.`id` = " . $user["id"];
			if($connect->query($updateSql)){
				?>
				<div class="container">
					<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
						<strong>Вас щойно підтвердили!</strong> 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
				<?php
			}
		}
	}

	if(isset($_POST) && $_SERVER["REQUEST_METHOD"] == "POST"){
		$password = md5($_POST["password"]);
		$logIn = "SELECT * FROM employees WHERE mail LIKE '" . $_POST["email"] . "' AND password LIKE '$password'";
		$result = $connect->query($logIn);
		if($result->num_rows > 0){
			$user = mysqli_fetch_assoc($result);
			if($user["verifided"] == 0){
			?>
			<div class="container">
				<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
					<strong>Нажаль,</strong> Ваш аккаунт не підтверджено. Будь ласка, перевірте свою пошту або<a href="/get-verify.php" class="font-italic alert-success"><strong> отримати нове підтверджуюче посилання.</strong></a>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<?php
			}else if($user["admin"] == 1){
				setcookie("admin", $user["id"], time() + 60*60*3, "/");
				header("Location: /admin/");
			}else{
				?>
				<div class="container">
				<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
					<strong>Нажаль,</strong> Ви не володієте правами адміністратора.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
				<?php
			}
		}else{
			?>
			<div class="container">
				<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
					Аккаунт з правами адміністратора не знайдено.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<?php
		}
	}

	function createRandomString($lenght = 10){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charectersLenght = strlen($characters);
		$randomString = "";
		for($i = 0; $i < $lenght; $i++){
			$randomString .=$characters[rand(0, $charectersLenght - 1)];
		}
		return $randomString;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/style/style.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<title>Вхід</title>
</head>
<body class="bg-info">
<div class="container">
	<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
		Login: i@i.i Password: IIIiii111!!!
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>
<div class="container">
	<div class="card mt-5">
		<h5 class="card-header text-center">Вхід</h5>
		<div class="card-body">
			<form method="POST" >
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="email@example.com" pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]'>
					<small id="emailHelp" class="form-text text-muted">Заповніть поле електронної пошти</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Пароль</label>
					<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="GJeabie64%&gaKF">
					<small id="emailHelp" class="form-text text-muted">Заповніть поле електронної пфролю</small>
				</div>
				<button type="submit" class="btn btn-primary">Вхід</button>
			</form>
		</div>
		<div class="card-footer">
			<small class="text-muted"><a href="/registration.php">Я не зареєстрований!</a></small>
    	</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/script.js"></script>
</body>
</html>