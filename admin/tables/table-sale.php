<?php
	$sqlPurchase = "SELECT * FROM sale";
	$PurchaseResult = $connect->query($sqlPurchase);
	$i = 1;
	while($row = mysqli_fetch_assoc($PurchaseResult)){
		$productSql = "SELECT * FROM purchase WHERE id=" . $row["product_id"];
		$productResult = $connect->query($productSql);
		$product = mysqli_fetch_assoc($productResult);

		$storeSql = "SELECT * FROM shops WHERE id=" . $row["shop_id"];
		$storeResult = $connect->query($storeSql);
		$store = mysqli_fetch_assoc($storeResult);
	?>
	<tr>
		<td><?php echo $i ?></td>
		<td class="w-25"><?php echo $product["product"] ?></td>
		<td class="w-25"><?php echo $store["name"] ?></td>
		<td><?php echo  $row["quantity"] ?> л.</td>
		<td><?php echo $row["price"] ?> грн/л</td>
		<td><?php echo $product["date"] ?></td>
		<td>
		<div class="btn-group mr-2" role="group" aria-label="First group">
			<div data-link="http://milk.local/admin/options/sale/delete.php?id=<?php echo $row["id"] ?>" onclick="deleteProduct(this)" id="delete-categ-btn" class="btn btn-danger">Delete</div>
		</div>
		</td>
		</tr>
	<?php
	$i++;
	}
?>