<?php 
include  $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "rating";
?>

<?php
    include "parts/head.php";
?>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Головна</li>
  </ol>
</nav>

<div class="content">
	<div class="container-fluid">
		<div class="card">
				<div class="card-header">
						<h4 class="card-title">Статистика</h4>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<a href="/admin/pages/shop-stat.php">
								<div class="alert alert-info">
										<b>Статистика закупки</b>
								</div>
							</a>
						</div>
						<div class="col-md-12">
							<a href="/admin/pages/sale-stat.php">
								<div class="alert alert-info">
										<b>Статистика збуту</b>
								</div>
							</a>
						</div>
						<div class="col-md-12">
							<a href="/admin/pages/find-employye.php">
								<div class="alert alert-info">
										<b>Пошук працівника за датою (партією)</b>
								</div>
							</a>
						</div>
						<div class="col-md-12">
							<a href="/admin/pages/value.php">
								<div class="alert alert-info">
										<b>Прибуток за проміжок часу</b>
								</div>
							</a>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>


<?php
    include  $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/footer.php";
?>
