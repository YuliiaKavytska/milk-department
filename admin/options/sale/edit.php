<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "products";

include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";

if(isset($_GET)){
        $findSql = "SELECT * FROM products WHERE id = " . $_GET["id"];
        $findResult = mysqli_query($connect, $findSql);
        $product = mysqli_fetch_assoc($findResult);
}
if(isset($_POST["edit-product"])){
    $updateSql = "UPDATE products SET title = '" . $_POST["cloth-name"] . 
    "', description = '" . $_POST["cloth-title"] . 
    "', content = '" . $_POST["cloth-description"] . 
    "', category_id = '" . $_POST["cloth-category"] . 
    "', image = '" . $_POST["cloth-img"] . 
    "' WHERE products.id = " . $_POST["cloth-id"];
    if(mysqli_query($connect, $updateSql)){
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
                <h4 class="card-title">Edit clothe</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/options/products/edit.php" id="edit-product-form">
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Name of thing</label>
                                <input type="text" class="form-control" name="cloth-name" value="<?php echo $product["title"]?>" placeholder="T-shirt">
                                <input type="hidden" name="cloth-id" value="<?php echo $product["id"]?>">
                            </div>
                        </div>
                        <div class="col-md-2 px-1">
                            <div class="form-group">
                                <label>Category of product</label>
                                <select name="cloth-category" class="form-control" id="exampleFormControlSelect1">
                                <?php
                                    $categorySql = "SELECT * FROM  category";
                                    $categoryResult = $connect->query($categorySql);
                                    $productCategory = "SELECT * FROM  category WHERE id=" . $product["category_id"];
                                    $prodCategResult = mysqli_query($connect, $productCategory);
                                    $category = mysqli_fetch_assoc($prodCategResult);
                                ?>
                                    <option value="<?php echo $product["category_id"]?>"><?php echo $category["title"]?></option>
                                    <?php    
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
                                <input type="text" class="form-control" name="cloth-img" value="<?php echo $product["image"]?>" placeholder="/img/2.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title under cloth</label>
                                <textarea rows="4" cols="80" class="form-control" name="cloth-title" placeholder="Here can be a title"><?php echo $product["description"]?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description of cloth</label>
                                <textarea rows="4" cols="80" class="form-control" name="cloth-description" placeholder="Here can be a description"><?php echo $product["content"]?></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="edit-product" class="btn btn-info btn-fill pull-right">Edit</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include "../../parts/footer.php";
?>