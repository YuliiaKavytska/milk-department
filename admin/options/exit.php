<?php
if(isset($_COOKIE["admin"])){
	setcookie("admin", "", 0, "/");
	header("Location: /");
}
?>