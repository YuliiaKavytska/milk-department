<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "purchase";

include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";

if(isset($_POST["add-purchase"])){
    $addSql = "INSERT INTO purchase (product, city, quantity, price, date) VALUES ('" . 
    $_POST["product"]  . "', '" . 
    $_POST["city"]  . "', '" . 
    $_POST["quantity"]  . "', '" . 
    $_POST["price"]  . "', '" . 
    $_POST["date"]  . "')";
    if(mysqli_query($connect, $addSql)){
        header("Location: /admin/purchase.php");
    }
}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Закупка</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Додати товар</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Додати закуплений товар</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/options/purchase/add.php" id="add-category-form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Назва товару</label>
                                <input type="text" class="form-control mr-2" name="product" placeholder="Назва">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Місто</label>
                                <input type="text" class="form-control mr-2" name="city" placeholder="Сміла">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Кількість л:</label>
                                <input type="text" class="form-control mr-2" name="quantity" placeholder="100">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ціна грн/л:</label>
                                <input type="text" class="form-control mr-2" name="price" placeholder="5">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Дата (рік-місяць-день):</label>
                                <input type="date" class="form-control mr-2" name="date" placeholder=2020-10-04>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="add-purchase" class="btn btn-info btn-fill pull-right">Додати</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div> 

<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/footer.php";
?>