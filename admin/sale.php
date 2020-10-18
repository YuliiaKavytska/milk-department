<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "products";
?>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Home</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Products</li>
  </ol>
</nav>



<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title ">
                Products
                <a href="options/products/add.php" class="btn btn-success">Add</a></h4>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Options</th>
                    </thead>
                    <tbody id="table-body">
                        <?php
                            include "table-products.php";
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