<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "shift";

include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";

if(isset($_POST["add"])){
    $addSql = "INSERT INTO working (user_id, shift, date) VALUES ('" . 
    $_POST["user_id"]  . "', '" . 
    $_POST["shift"]  . "', '" . 
    $_POST["date"]  . "')";
    if(mysqli_query($connect, $addSql)){
        header("Location: /admin/working-hours.php");
    }
}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Головна</a>
	 </li>
    <li class="breadcrumb-item">
	 	<a href='/admin/working-hours.php'>Зміни</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Додати нову звіну працівника</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Додати нову зміну</h4>
            </div>
            <div class="card-body">
                <form method="POST" id="edit-product-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Працівник</label>
										  <select name="user_id" class="form-control" id="exampleFormControlSelect1">
                                    <option value="0">Не обрано</option>
                                    <?php
                                    $employeesSql = "SELECT * FROM  employees";
                                    $employeesResult = $connect->query($employeesSql);
                                    while($employees = mysqli_fetch_assoc($employeesResult)){
                                        echo "<option value=" . $employees["id"] . ">" . $employees["name"] . "</option>";
                                    }
                                    ?>
										  </select>
										</div>
								</div>
								<div class="col-md-3">
                            <div class="form-group">
                                <label>Зміна</label>
                                <select name="shift" class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">Денна</option>
                                    <option value="2">Нічна</option>
                                </select>
                            </div>
								</div>
								<div class="col-md-3">
                            <div class="form-group">
                                <label>Дата</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="add" class="btn btn-info btn-fill pull-right">Додати</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/footer.php";
?>