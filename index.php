<?php
$page = "home";
include "configs/db.php";
include "parts/head.php";
?>

<div class="row">
	<?php
	$productSql = "SELECT * FROM products";
	$productResult = $connect -> query($productSql);
	while($product = mysqli_fetch_assoc($productResult)){
		include "parts/product-card.php";
	}
	?>
</div>

<?php
include "parts/footer.php";
?>