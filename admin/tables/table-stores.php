<?php
	$sqlPurchase = "SELECT * FROM shops";
	$PurchaseResult = $connect->query($sqlPurchase);
	$i = 1;
	while($row = mysqli_fetch_assoc($PurchaseResult)){
	?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row["name"] ?></td>
		<td><?php echo $row["address"] ?></td>
		<td class="float-right">
		<div class="btn-group mr-2" role="group" aria-label="First group">
			<a href="options/stores/edit.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">Змінити</a>
			<div data-link="http://milk.local/admin/options/stores/delete.php?id=<?php echo $row["id"] ?>" onclick="deleteProduct(this)" id="delete-categ-btn" class="btn btn-danger">Видалити</div>
		</div>
		</td>
		</tr>
	<?php
	$i++;
	}
?>