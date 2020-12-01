<?php 
include  $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "shift";
?>

<?php
    include "parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Головна</a>
	 </li>
    <li class="breadcrumb-item active">Години роботи працівників</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title ">
					 Зміни
					 <a href="/admin/options/working/add.php" class="btn btn-success">Додати</a></h4>
                </h4>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>#</th>
                        <th>ПІБ</th>
                        <th>Цех</th>
                        <th>Позиція</th>
                        <th>Зміна</th>
                        <th>Дата</th>
                        <th class="ml-2">Дії</th>
                    </thead>
                    <tbody id="table-body">
                        <?php
                            include $_SERVER['DOCUMENT_ROOT'] . "/admin/tables/table-working.php";
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

