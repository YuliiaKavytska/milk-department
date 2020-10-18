<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "catigories";
?>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Home</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Category</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title ">
                Category
                <a href="options/purchase/add.php" class="btn btn-success">Add</a></h4>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name of category</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="table-body">
                        <?php
                            include "table-category.php";
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
    include "parts/footer.php";
?>