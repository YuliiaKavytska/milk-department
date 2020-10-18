<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "products";

include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";

if(isset($_POST["add-product"])){
    $addSql = "INSERT INTO products (title, description, content, category_id, image) VALUES ('" . 
    $_POST["cloth-name"] . "', '" . 
    $_POST["cloth-title"] . "', '" . 
    $_POST["cloth-description"] . "', '" . 
    $_POST["cloth-category"] . "', '" . 
    $_POST["cloth-img"] . "')";
    if(mysqli_query($connect, $addSql)){
        header("Location: /admin/products.php");
    }
}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/">Home</a>
	 </li>
    <li class="breadcrumb-item">
	 	<a href='/admin/products.php'>Product</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Add product</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add one new clothe</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/options/products/add.php" id="add-product-form">
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Name of thing</label>
                                <input type="text" class="form-control" name="cloth-name" placeholder="T-shirt">
                            </div>
                        </div>
                        <div class="col-md-2 px-1">
                            <div class="form-group">
                                <label>Category of product</label>
                                <!-- <input type="text" class="form-control" name="cloth-category" placeholder="1"> -->
                                <select name="cloth-category" class="form-control" id="exampleFormControlSelect1">
                                    <option value="0">Dont select</option>
                                    <?php
                                    $categorySql = "SELECT * FROM  category";
                                    $categoryResult = $connect->query($categorySql);
                                    while($row = mysqli_fetch_assoc($categoryResult)){
                                        echo "<option value=" . $row["id"] . ">" . $row["title"] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Src to image</label>
                                <input type="text" class="form-control" name="cloth-img" placeholder="/img/2.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title under cloth</label>
                                <textarea rows="4" cols="80" class="form-control" name="cloth-title" placeholder="Here can be a title"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description of cloth</label>
                                <textarea rows="4" cols="80" class="form-control" name="cloth-description" placeholder="Here can be a description"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="add-product" class="btn btn-info btn-fill pull-right">Add to Data Base</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div> 

<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/footer.php";
?>