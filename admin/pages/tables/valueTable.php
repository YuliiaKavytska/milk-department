<?php
if(isset($arr)){
	$sqlPurchase = "SELECT * FROM sale";
	$PurchaseResult = $connect->query($sqlPurchase);
	$i = 1;
	$q = 0;
	$s = 0;
	$qpurs = 0;
	$spurs = 0;
	$find = [];
	while($row = mysqli_fetch_assoc($PurchaseResult)){
		if(in_array($row["product_id"], $arr)){

			$productSql = "SELECT * FROM purchase WHERE id=" . $row["product_id"];
				$productResult = $connect->query($productSql);
				$product = mysqli_fetch_assoc($productResult);

			if(!in_array($row["product_id"], $find)){
				$find[] = $row["product_id"];
				$qpurs += $product["quantity"];
				$spurs += $product["quantity"] * $product["price"];
			}
			
			$q += $row["quantity"];
			$s += $row["price"] * $row["quantity"];
			$storeSql = "SELECT * FROM shops WHERE id=" . $row["shop_id"];
			$storeResult = $connect->query($storeSql);
			$store = mysqli_fetch_assoc($storeResult);
		?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $product["product"] ?></td>
			<td><?php echo $product["quantity"] ?> л.</td>
			<td><?php echo $product["price"] ?> грн/л</td>
			<td><?php echo $store["name"] ?></td>
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
	<td></td>
	<td><?php echo $qpurs ?> л.</td>
	<td><?php echo $spurs ?> грн/л</td>
	<td></td>
	<td><?php echo $q ?> л.</td>
	<td><?php echo $s ?> грн/л</td>
	<td></td>
</tr>
<tr>
	<td><?php echo "Прибуток: " ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php echo $s - $spurs ?> грн</td>
</tr>
<?php
}
?>