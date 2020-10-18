<?php
$page = "home";
include "configs/db.php";
include "parts/head.php";

$productSql = "SELECT * FROM products WHERE id=" . $_GET["id"];
$productResult = $connect -> query($productSql);
$product = mysqli_fetch_assoc($productResult);

$categorySql = "SELECT * FROM category WHERE id=" . $product["category_id"];
$categoryResult = $connect -> query($categorySql);
$category = mysqli_fetch_assoc($categoryResult);
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/">Home</a>
	 </li>
    <li class="breadcrumb-item">
	 	<a href='/category.php?id=<?php echo $category["id"] ?>'><?php echo $category["title"] ?></a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $product["title"] ?></li>
  </ol>
</nav>

<div class="row">
	<div class="col-12">
		<div class="row">
		<div class="col-4 mb-3">
			<img src="img/1.jpg" class="card-img-top" alt="...">
			<a href="#" class="btn btn-primary col mt-3">Add to the basket</a>
		</div> <!-- col-4 -->
		<div class="col-6">
			<h5 class="card-title"><?php echo $product["title"] ?></h5>
			<p class="card-text"><?php echo $product["description"] ?></p>
			<p class="card-text"><?php echo $product["content"] ?></p>
		</div>
		</div>
	</div>
</div>


<?php
include "parts/footer.php";
?>