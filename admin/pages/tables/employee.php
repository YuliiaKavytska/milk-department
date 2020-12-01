<?php
if(isset($arr)){
	for($j=0; $j< count($arr); $j++){
		$sqlPurchase = "SELECT * FROM employees WHERE id=" . $arr[$j]["user_id"];
		$PurchaseResult = $connect->query($sqlPurchase);
		while($row = mysqli_fetch_assoc($PurchaseResult)){
		?>
		<tr>
			<td><?php echo $j + 1 ?></td>
			<td><?php echo $row["name"] ?></td>
			<td><?php if($arr[$j]["shift"] == 1){ echo "Денна"; }else{ echo "Нічна"; } ?></td>
			<td><?php echo $row["mail"] ?></td>
			<td><?php if($row["verifided"] == 1){ echo "Так";}else{ echo "Ні";} ?></td>
			<td><?php if($row["admin"] == 1){ echo "Так";}else{ echo "Ні";}  ?>.</td>
			<td><?php echo $row["position"] ?></td>
			<td><?php echo $row["branc"] ?></td>
			</tr>
		<?php
		}
	}
	
}

?>