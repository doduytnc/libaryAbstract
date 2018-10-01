<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 18/09/2018
 * Time: 17:43
 */
require "../class/categories.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["category_name"];

/*if ($_POST['category_name']) {
    $name = $_POST['category_name'];*/

    $categories = new Categories();  //Tạo 1 class Category
    $insertCate = $categories->insert($name);
    header('Location: ../index.php'); //Quay trở lại trang index
    exit();
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="col-md-12">
        <!--        header-->
        <h1>Library Manager</h1>
    </div>
    <hr>

    <div class="col-md-12">
        <!--        menu-->
        <!--        <nav class="navbar navbar-inverse navbar-fixed-top">-->
        <a href="#">Home</a>
        <a href="#">Book</a>
        <a href="#">Reader</a>
        <a href="#">Borrow books</a>
        <a href="#">Author</a>
        <a href="#">Categories</a>
        <!--        </nav>-->
    </div>
    <hr>
    <div class="col-md-12">
        <!--        list-->
        <h3 style="color: chocolate">Add New Category</h3>

        <form method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2">Name Category:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="category_name">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Add</button>
                </div>
            </div>
        </form>
        <hr>
    </div>

    <div class="col-md-12">
        <!--        footer-->
        <p style="margin-left: 940px">@ 2017 Library Inc.</p>
    </div>

</div>


</body>


</html>