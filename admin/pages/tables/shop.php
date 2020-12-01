<?php
if(isset($min) && isset($max)){
	$sqlPurchase = "SELECT * FROM `purchase` WHERE `date` BETWEEN '$min' AND '$max'";
	$PurchaseResult = $connect->query($sqlPurchase);
	$i = 1;
	$q = 0;
	$s = 0;
	while($row = mysqli_fetch_assoc($PurchaseResult)){
		$q += $row["quantity"];
		$s += $row["price"] * $row["quantity"];
	?>
	<tr>
		<td><?php echo $i ?></td>
		<td class="w-25"><?php echo $row["product"] ?></td>
		<td class="w-25"><?php echo $row["city"] ?></td>
		<td><?php echo $row["quantity"] ?> л.</td>
		<td><?php echo $row["price"] ?> грн/л</td>
		<td><?php echo $row["date"] ?></td>
		</tr>
	<?php
	$i++;
	}
	?>
	<tr>
		<td><?php echo "Сумма: " ?></td>
		<td class="w-25"></td>
		<td class="w-25"></td>
		<td><?php echo $q ?> л.</td>
		<td><?php echo $s ?> грн/л</td>
		<td></td>
		</tr>
	<?php
}
?>