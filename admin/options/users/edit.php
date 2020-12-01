<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
$page = "users";


if(isset($_GET)){
    $find = "SELECT * FROM employees WHERE id = " . $_GET["id"];
    $findR = mysqli_query($connect, $find);
    $user = mysqli_fetch_assoc($findR);
}
if(isset($_POST["edit-user"])){
    $update = "UPDATE employees SET ". 
    " name = '" . $_POST["name"] . 
    "', mail = '" . $_POST["mail"] . 
    "', admin = '" . $_POST["admin"] . 
    "', position = '" . $_POST["position"] . 
    "', branc = '" . $_POST["branc"] . 
		"', verifided = '" . $_POST["verifided"] . 
		"' WHERE employees.id = " . $_POST["id"];
    if(mysqli_query($connect, $update)){
        header("Location: /admin/users.php");
    }
}
include $_SERVER['DOCUMENT_ROOT'] . "/admin/parts/head.php";
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
	 	<a href="/admin">Закупка</a>
	 </li>
    <li class="breadcrumb-item">
	 	<a href='/admin/users.php'>Працівники</a>
	 </li>
    <li class="breadcrumb-item active" aria-current="page">Змінити інформацію про працівника</li>
  </ol>
</nav>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Змінити інформацію</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/options/users/edit.php" id="edit-user">
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>ПІБ</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $user["name"]?>" placeholder="Іванов Іван Іванович">
                                <input type="hidden" name="id" value="<?php echo $user["id"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Електронна пошта</label>
                                <input type="text" class="form-control" name="mail" value="<?php echo $user["mail"]?>" placeholder="mmm@mmm.mm">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Права адміністратора</label>
                                <select name="admin" class="form-control" id="exampleFormControlSelect1">
                                    <option value="<?php echo $user["admin"]; ?>"><?php if($user["admin"] == 1){ echo "Так";}else{ echo "Ні";} ?></option>
                                    <?php    
                                        if($user["admin"] == 1){ 
                                            echo "<option value='0'>Ні</option>";
                                        }else{ 
                                            echo "<option value='1'>Так</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Пошта підтведжена</label>
                                <select name="verifided" class="form-control" id="exampleFormControlSelect1">
                                    <option value="<?php echo $user["verifided"]; ?>"><?php if($user["verifided"] == 1){ echo "Так";}else{ echo "Ні";} ?></option>
                                    <?php    
                                        if($user["verifided"] == 1){ 
                                            echo "<option value='0'>Ні</option>";
                                        }else{ 
                                            echo "<option value='1'>Так</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Позиція</label>
                                <input type="text" class="form-control" name="position" value="<?php echo $user["position"]?>" placeholder="Розливальник">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Відділ</label>
                                <input type="text" class="form-control" name="branc" value="<?php echo $user["branc"]?>" placeholder="Відділ виготовлення">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="edit-user" class="btn btn-info btn-fill pull-right">Змінити</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include "../../parts/footer.php";
?>