<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "products";

include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";

if(isset($_POST["add"])){
    $addSql = "INSERT INTO shops (`name`, `address`) VALUES ('" . 
    $_POST["name"]  . "', '" . 
    $_POST["address"]  . "')";
    if(mysqli_query($connect, $addSql)){
        header("Location: /admin/stores.php");
    }
}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Закупка</a>
	 </li>
    <li class="breadcrumb-item">
	 	<a href='/admin/stores.php'>Магазини</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Додати магазин</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Додати магазин</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/options/stores/add.php" id="edit-product-form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Назва</label>
                                <input type="text" class="form-control" name="name" placeholder="Казбет">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Адреса</label>
                                <input type="text" class="form-control" name="address" placeholder="вул. Хрещатик 120 буд.3, м. Черкаси">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="add" class="btn btn-info btn-fill pull-right">Додати</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/footer.php";
?>