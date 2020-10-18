<?php 
include  $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "users";
?>

<?php
    include "parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/">Закупка</a>
	 </li>
    <li class="breadcrumb-item active">Працівники</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title ">
                Працівники
                </h4>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>ПІБ</th>
                        <th>Електронна пошта</th>
                        <th>Права адм.</th>
                        <th>Позиція</th>
                        <th>Відділ</th>
                        <th>Дії</th>
                    </thead>
                    <tbody id="table-body">
                        <?php
                            include $_SERVER['DOCUMENT_ROOT'] . "/admin/tables/table-user.php";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
    include "parts/footer.php"
?>

