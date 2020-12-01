<?php 
include  $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "rating";
?>

<?php
		include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Головна</a>
	 </li>
    <li class="breadcrumb-item active">Статистика збуту</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" id="sale" action="/admin/pages/options/saleStat.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>З:</label>
                                <input type="date" class="form-control" name="date-1" id="minimum">
                            </div>
                        </div>
												<div class="col-md-6">
												<div class="form-group">
                                <label>По:</label>
                                <input type="date" class="form-control" name="date-2" id="maximum">
                            </div>
												</div>
                    </div>
                    <button type="submit" name="add-sale" class="btn btn-info btn-fill pull-right">Пошук</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div> 


<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>#</th>
                        <th>Назва продукту</th>
                        <th>Магазин</th>
                        <th>Кількість</th>
                        <th>Ціна</th>
                        <th>Дата</th>
                    </thead>
                    <tbody id="table-body-sale">
                        <?php
                            include $_SERVER['DOCUMENT_ROOT'] . "/admin/pages/tables/sale.php";
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

