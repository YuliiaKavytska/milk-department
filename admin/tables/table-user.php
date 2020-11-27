<?php
	$sqlPurchase = "SELECT * FROM employees";
	$PurchaseResult = $connect->query($sqlPurchase);
	$i = 1;
	while($row = mysqli_fetch_assoc($PurchaseResult)){
	?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row["name"] ?></td>
		<td><?php echo $row["mail"] ?></td>
		<td><?php if($row["admin"] == 1){ echo "Так";}else{ echo "Ні";}  ?>.</td>
		<td><?php echo $row["position"] ?></td>
		<td><?php echo $row["branc"] ?></td>
		<td class="float-right">
		<div class="btn-group mr-2" role="group" aria-label="First group">
			<a href="/admin/options/users/edit.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">Edit</a>
			<div data-link="http://milk.local/admin/options/users/delete.php?id=<?php echo $row["id"] ?>" onclick="deleteProduct(this)" id="delete-categ-btn" class="btn btn-danger">Delete</div>
		</div>
		</td>
		</tr>
	<?php
	$i++;
	}
?>