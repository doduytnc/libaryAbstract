<?php

require "../class/categories.php";

//lay ra category can sua
$id = $_GET['id'];
$category = new Categories();
$table = 'categories';
$columnName = 'name';
$cateId = $category->getRecordById($table,$columnName,$id);  //Lấy ra bản ghi cần update
echo var_dump($cateId);
echo $cateId['name'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //update category
    if (isset($_POST['category_name'])) {
        $name = $_POST['category_name'];
        $category->update($id, $name);
        header('Location: ../index.php');
    }
    if (!isset($cateId)) {
        echo "Category is not exist";
        die();
    }
} else {
    echo "You need select category";
    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update category</title>
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
    <script>
            function confirmAction() {
                return confirm("Bạn có thực sự muốn cập nhật category không?");
        }
    </script>
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
        <h3 style="color: chocolate">Update category</h3>
        <p>Update category's name: <?php echo $cateId['name'] ?></p>

        <form method="post" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2">New category's name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="category_name">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" onclick="return confirm('Do you realy want to update name of this category')">Update</button>
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