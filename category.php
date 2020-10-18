<?php
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
include $_SERVER['DOCUMENT_ROOT'] . "/parts/head.php";
$categorySql = "SELECT * FROM category WHERE id=" . $_GET["id"];
$categoryResult = $connect -> query($categorySql);
$category = mysqli_fetch_assoc($categoryResult);
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/">Home</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">
	 <?php echo $category["title"] ?>
	 </li>
  </ol>
</nav>

<div class="row">
	
</div>


<?php
include $_SERVER['DOCUMENT_ROOT'] . "/parts/footer.php";
?>