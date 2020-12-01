<?php 
include  $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "rating";
?>

<?php
    include  $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Головна</a>
	 </li>
    <li class="breadcrumb-item active">Знайти працівників</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" id="user-search" action="http://milk.local/admin/pages/options/findUser.php">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Партія</label>
                                <input type="date" class="form-control" name="date-user" id="date-user">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="add-sale" class="btn btn-info btn-fill pull-right" >Пошук</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div> 


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
                        <th>#</th>
                        <th>ПІБ</th>
                        <th>Електронна пошта</th>
                        <th>Код</th>
                        <th>Підтверджено</th>
                        <th>Права адм.</th>
                        <th>Позиція</th>
                        <th>Відділ</th>
                    </thead>
                    <tbody id="table-body-user">
                        <?php
                            include $_SERVER['DOCUMENT_ROOT'] . "/admin/pages/tables/employee.php";
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

