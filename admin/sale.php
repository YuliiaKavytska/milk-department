<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "sale";
?>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Головна</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Продаж продукції</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title ">
                Продаж продукції
                <a href="options/sale/add.php" class="btn btn-success">Додати</a></h4>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>#</th>
                        <th>Назва продукту</th>
                        <th>Магазин</th>
                        <th>Кількість</th>
                        <th>Ціна</th>
                        <th>Дата</th>
                        <th>Дії</th>
                    </thead>
                    <tbody id="table-body">
                        <?php
                            include "tables/table-sale.php";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--  My script    -->
<script src="../assets/js/script.js"></script>

<?php
    include  $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/footer.php";
?>
