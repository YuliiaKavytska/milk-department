<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "sale";

include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";


if(isset($_POST["add-sale"])){
    $shopsSql = "SELECT * FROM  sale WHERE product_id=" . $_POST["product_id"];
    $shopsResult = $connect->query($shopsSql);
    $q = $_POST["quantity"];
    while($shops = mysqli_fetch_assoc($shopsResult)){
        $q += $shops["quantity"];
    }
    $purchaseSql = "SELECT * FROM  purchase";
    $purchaseResult = $connect->query($purchaseSql);
    $item = mysqli_fetch_assoc($purchaseResult);
    if($q > $item["quantity"]){
        echo "<h2 class='mt-0'>Ви намагаєтеся продати більше ніж закупили!</h2>";
        if($item["quantity"] - ($q - $_POST["quantity"]) > 0){
            $num = $item["quantity"] - ($q - $_POST["quantity"]);
            echo "<h3>Ви можете продати тільки " . $num . " л. з цієї партії.</h3>";
        }else{
            echo "<h3>Ви продали вже весь товар за цю дату. Оберіть іншу.</h3>";
        }
    }else{
        $addSql = "INSERT INTO sale (product_id, shop_id, quantity, price) VALUES ('" . 
        $_POST["product_id"] . "', '" . 
        $_POST["shop_id"] . "', '" . 
        $_POST["quantity"] . "', '" . 
        $_POST["price"] . "')";
        if(mysqli_query($connect, $addSql)){
            header("Location: /admin/sale.php");
        }
    }
    
}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin/">Головна</a>
	 </li>
    <li class="breadcrumb-item">
	 	<a href='/admin/sale.php'>Продаж</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Додати нову продажу</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Додати нову продажу</h4>
            </div>
            <div class="card-body">
                <form method="POST" id="add-product-form">
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Назва продукції</label>
                                <select name="product_id" class="form-control" id="exampleFormControlSelect1">
                                    <option value="0">Не обрано</option>
                                    <?php
                                    $purchaseSql = "SELECT * FROM  purchase";
                                    $purchaseResult = $connect->query($purchaseSql);
                                    while($purchase = mysqli_fetch_assoc($purchaseResult)){
                                        echo "<option value=" . $purchase["id"] . ">" . $purchase["product"] . ", Дата: " . $purchase["date"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 px-1">
                            <div class="form-group">
                                <label>Магазин</label>
                                <select name="shop_id" class="form-control" id="exampleFormControlSelect1">
                                    <option value="0">Dont select</option>
                                    <?php
                                        $shopsSql = "SELECT * FROM  shops";
                                        $shopsResult = $connect->query($shopsSql);
                                    while($shops = mysqli_fetch_assoc($shopsResult)){
                                        echo "<option value=" . $shops["id"] . ">" . $shops["name"] . ", адреса:" . $shops["address"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Кількість</label>
                                <input type="text" class="form-control" name="quantity" placeholder="20">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ціна</label>
                                <input type="text" class="form-control" name="price" placeholder="12">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="add-sale" class="btn btn-info btn-fill pull-right">Додати</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div> 

<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/footer.php";
?>