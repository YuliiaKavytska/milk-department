<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";

	if(isset($_POST) && $_SERVER["REQUEST_METHOD"] == "POST"){
		// хешируем пароль
		$password = md5($_POST["password"]);
		// генерируем код подтверждения (рандомное слово)
		$u_code = createRandomString(20);
		$setSql = "INSERT INTO `employees` (`name`, `mail`, `password`, `position`, `branc`, `confirm_mail`) VALUES ('" . $_POST["username"] . "', '" . $_POST["email"] . "', '$password', '" . $_POST["position"] . "', '" . $_POST["branc"] . "', '$u_code')";
		// если запись удалась
		if($connect ->query($setSql)){?>
			<div class="container">
				<div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
					<strong>Ура!</strong> Ви щойно зареєструвались. Тепер перевірте свою електронну адресу, щоб підтвердити реєстрацію.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<?php
			// текст письма
			$link = "<a href='http://milk.local/index.php?u_code=$u_code'>Confirm your registration.</a>";
			// отправляем письмо. (куда, тема, ссылка)
			mail($_POST["email"], 'Confirming', $link);
		}
	}
	// функция рандомного слова
	function createRandomString($lenght = 10){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charectersLenght = strlen($characters);
		$randomString = "";
		for($i = 0; $i < $lenght; $i++){
			$randomString .= $characters[rand(0, $charectersLenght - 1)];
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
	<title>Реєстарція</title>
</head>
<body class="bg-info">

<div class="container">
	<div class="card mt-5">
		<h5 class="card-header text-center">Реєстрація</h5>
		<div class="card-body">
			<form method="POST" >
				<div class="form-group">
					<label for="exampleInputEmail1">ПІБ</label>
					<div class="input-group mb-2 mr-sm-2">
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" require placeholder="Іванов Іван Іванович" pattern='^[а-щА-ЩієїґюяьыэёъІЄЇҐЮЯЬЪЭЁ]+\s+[а-щА-ЩієїґюяьыэёъІЄЇҐЮЯЬЪЭЁ]+\s+[а-щА-ЩієїґюяьыэёъІЄЇҐЮЯЬЪЭЁ]+$'>
					</div>
					<small id="emailHelp" class="form-text text-muted">Вкажіть ваше ПІБ з паспорту.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Посада</label>
					<div class="input-group mb-2 mr-sm-2">
						<input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" name="position" require placeholder="Розливальник">
					</div>
					<small id="emailHelp" class="form-text text-muted">Введіть посаду</small>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail3">Відділ</label>
					<div class="input-group mb-2 mr-sm-2">
						<input type="text" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" name="branc" require placeholder="Виготовлення">
					</div>
					<small id="emailHelp" class="form-text text-muted">Відділ в якому ви працюєте</small>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail4">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp" name="email" require placeholder="email@example.com" pattern='[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]'>
					<small id="emailHelp" class="form-text text-muted">Електронна пошта</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Пароль</label>
					<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="GJeabie64%&gaKF" require pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title='Пароль должен состоять минимум из 8 символов и содержать хотя бы одну цифру и один символ нижнего и верхнего регистра'>
					<small id="emailHelp" class="form-text text-muted">Створіть надійний пароль</small>
				</div>
				<button type="submit" class="btn btn-primary">Вперед</button>
			</form>
		</div>
		<div class="card-footer">
			<small class="text-muted"><a href="/">Я вже зареєсрований!</a></small>
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