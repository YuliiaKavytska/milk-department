<?php 
include  $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "purchase";
?>

<?php
    include "parts/head.php";
?>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Головна</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Закупка</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title ">
                Закупка
                <a href="options/purchase/add.php" class="btn btn-success">Додати</a></h4>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Назва</th>
                        <th>Місто / Село</th>
                        <th>Кількість</th>
                        <th>Ціна</th>
                        <th>Дата закупки</th>
                        <th>Дії</th>
                    </thead>
                    <tbody id="table-body">
                        <?php
                            include $_SERVER['DOCUMENT_ROOT'] . "/admin/tables/table-purchase.php";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
    include  $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/footer.php";
?>
