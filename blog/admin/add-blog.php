<?php

session_start();
if ($_SESSION['id']==null){
    header('Location: index.php');
}


require_once '../vendor/autoload.php';
$login = new App\classes\Login();

if (isset($_GET['logout'])){
    $login->adminLogout();
}


?>










<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>


<?php include 'includes/menu.php'; ?>


<div class="container" style="margin-top: 10px">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-title">
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <select name="category name" class="form-control">
                                    <option>----Select Category Name-----</option>
                                    <option value="1">Category One</option>
                                    <option value="2">Category two</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea type="password" name="category_description" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="status" value="1">Published</input>
                                <input type="radio" name="status" value="0">UnPublished</input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Save category Info</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>








<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
</body>
</html>