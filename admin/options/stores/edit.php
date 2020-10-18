<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "products";

include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";

if(isset($_GET)){
    $findSql = "SELECT * FROM shops WHERE id = " . $_GET["id"];
    $findResult = mysqli_query($connect, $findSql);
    $product = mysqli_fetch_assoc($findResult);
}
if(isset($_POST["edit"])){
    $updateSql = "UPDATE shops SET `name` = '" . $_POST["name"] . 
    "', address = '" . $_POST["address"] . 
    "' WHERE shops.id = " . $_POST["id"];
    if(mysqli_query($connect, $updateSql)){
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
    <li class="breadcrumb-item active" aria-current="page">Редагувати магазин</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Редагувати магазин</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/options/stores/edit.php" id="edit-product-form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Назва</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $product["name"]?>" placeholder="Казбет">
                                <input type="hidden" name="id" value="<?php echo $product["id"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Адреса</label>
                                <input type="text" class="form-control" name="address" value="<?php echo $product["address"]?>" placeholder="вул. Хрещатик 120 буд.3, м. Черкаси">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="edit" class="btn btn-info btn-fill pull-right">Edit</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include "../../parts/footer.php";
?>