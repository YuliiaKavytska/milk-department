<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "shift";

include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";

if(isset($_POST["edit"])){
    $addSql = "UPDATE working SET " . 
		"user_id = '" . $_POST["user_id"]  . 
		"', shift = '" .  $_POST["shift"]  . 
		"', date='" . 	$_POST["date"]  . 
		"' WHERE working.id = " . $_POST["id"];
    if(mysqli_query($connect, $addSql)){
        header("Location: /admin/working-hours.php");
    }
}else{
	$user = mysqli_fetch_assoc($connect->query("SELECT * FROM working WHERE id=" . $_GET["id"]));
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
    <li class="breadcrumb-item active" aria-current="page">Редагувати звіну працівника</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Редагувати зміну</h4>
            </div>
            <div class="card-body">
                <form method="POST" id="edit-product-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Працівник</label>
										  						<select name="user_id" class="form-control" id="exampleFormControlSelect1">
                                    <?php
                                    $employeesSql = "SELECT * FROM  employees";
                                    $employeesResult = $connect->query($employeesSql);
                                    while($employees = mysqli_fetch_assoc($employeesResult)){
																			if($employees["id"] == $user["user_id"]) { 
																				echo "<option value='" . $employees["id"] . "' selected>" . $employees["name"] . "</option>";
																			}else{
																				echo "<option value='" . $employees["id"] . "'>" . $employees["name"] . "</option>";
																			}
                                    }
                                    ?>
										  						</select>
										</div>
								</div>
								<div class="col-md-3">
                            <div class="form-group">
                                <label>Зміна</label>
                                <select name="shift" class="form-control" id="exampleFormControlSelect1">
																	<option value="<?php echo $user["shift"]; ?>"><?php if($user["shift"] == 1){ echo "Денна";}else{ echo "Нічна";} ?></option>
                                    <?php    
                                        if($user["shift"] == 1){ 
                                            echo "<option value='2'>Нічна</option>";
                                        }else{ 
                                            echo "<option value='1'>Денна</option>";
                                        }
                                    ?>
                                </select>
                            </div>
								</div>
								<div class="col-md-3">
                            <div class="form-group">
                                <label>Дата</label>
                                <input type="date" class="form-control" name="date" value="<?php echo $user["date"] ?>">
                            </div>
                        </div>
										</div>
										<input type="hidden" name="id" value="<?php echo $user["id"]?>">
                    <button type="submit" name="edit" class="btn btn-info btn-fill pull-right">Add</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/footer.php";
?>