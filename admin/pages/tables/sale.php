<?php
if(isset($arr)){
	$sqlPurchase = "SELECT * FROM sale";
	$PurchaseResult = $connect->query($sqlPurchase);
	$i = 1;
	$q = 0;
	$s = 0;
	while($row = mysqli_fetch_assoc($PurchaseResult)){
		if(in_array($row["product_id"], $arr)){
			$q += $row["quantity"];
			$s += $row["price"] * $row["quantity"];
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
			</tr>
		<?php
		$i++;
		}
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