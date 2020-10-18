<?php
	$sqlPurchase = "SELECT * FROM purchase";
	$PurchaseResult = $connect->query($sqlPurchase);
	while($row = mysqli_fetch_assoc($PurchaseResult)){
	?>
	<tr>
		<td><?php echo $row["id"] ?></td>
		<td class="w-25"><?php echo $row["product"] ?></td>
		<td class="w-25">м. <?php echo $row["city"] ?></td>
		<td><?php echo $row["quantity"] ?> л.</td>
		<td><?php echo $row["price"] ?> грн/л</td>
		<td><?php echo $row["date"] ?></td>
		<td class="float-right">
		<div class="btn-group mr-2" role="group" aria-label="First group">
			<a href="options/purchase/edit.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">Edit</a>
			<div data-link="http://milk.local/admin/options/purchase/delete.php?id=<?php echo $row["id"] ?>" onclick="deleteProduct(this)" id="delete-categ-btn" class="btn btn-danger">Delete</div>
		</div>
		</td>
		</tr>
	<?php
	}
?>