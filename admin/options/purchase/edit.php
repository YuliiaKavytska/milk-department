<?php 
    include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
    $page = "purchase";



    if(isset($_GET)){
        $findSql = "SELECT * FROM purchase WHERE id = " . $_GET["id"];
        $findResult = mysqli_query($connect, $findSql);
        $purchase = mysqli_fetch_assoc($findResult);
    }
    if(isset($_POST["edit-purchase"])){
        $updateSql = "UPDATE purchase SET " . 
        "product = '" . $_POST["product"] . 
        "', city = '" . $_POST["city"] . 
        "', quantity = '" . $_POST["quantity"] . 
        "', price = '" . $_POST["price"] . 
        "', date = '" . $_POST["date"] . 
        "' WHERE purchase.id = " . $_POST["purchase-id"];
        if(mysqli_query($connect, $updateSql)){
            header("Location: /admin/purchase.php");
        }
		}
		include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin/">Головна</a>
	 </li>
    <li class="breadcrumb-item">
	 	<a href='/admin/sale.php'>Закупка</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Редагувати товар</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Змінити закуплений товар</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/options/purchase/edit.php" id="add-purchase-form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Назва товару</label>
                                <input type="hidden" name="purchase-id" value="<?php echo $purchase["id"]?>">
                                <input type="text" class="form-control mr-2" name="product" placeholder="Назва" value="<?php echo $purchase["product"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Місто / Село</label>
                                <input type="text" class="form-control mr-2" name="city" placeholder="Сміла" value="<?php echo $purchase["city"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Кількість л:</label>
                                <input type="text" class="form-control mr-2" name="quantity" placeholder="100" value="<?php echo $purchase["quantity"]?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ціна грн/л:</label>
                                <input type="text" class="form-control mr-2" name="price" placeholder="5" value="<?php echo $purchase["price"]?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Дата (рік-місяць-день):</label>
                                <input type="date" class="form-control mr-2" name="date" placeholder=2020-10-04 value="<?php echo $purchase["date"]?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="edit-purchase" class="btn btn-info btn-fill pull-right">Змінити</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div> 
<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/footer.php";
?>