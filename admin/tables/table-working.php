<?php
	$sqlPurchase = "SELECT * FROM working";
	$PurchaseResult = $connect->query($sqlPurchase);
	$i = 1;
	while($row = mysqli_fetch_assoc($PurchaseResult)){
		$sqlUser = "SELECT * FROM employees WHERE id=" . $row["user_id"];
		$userResult = $connect->query($sqlUser);
		$user = mysqli_fetch_assoc($userResult);
	?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $user["name"] ?></td>
		<td><?php echo $user["branc"] ?></td>
		<td><?php echo $user["position"]  ?></td>
		<td><?php if($row["shift"] == 1){ echo "Денна"; }else{ echo "Нічна"; }  ?></td>
		<td><?php echo $row["date"] ?></td>
		<td>
		<div class="btn-group mr-2" role="group" aria-label="First group">
			<a href="options/working/edit.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">Змінити</a>
			<div data-link="http://milk.local/admin/options/working/delete.php?id=<?php echo $row["id"] ?>" onclick="deleteProduct(this)" id="delete-categ-btn" class="btn btn-danger">Видалити</div>
		</div>
		</td>
		</tr>
	<?php
	$i++;
	}
?>