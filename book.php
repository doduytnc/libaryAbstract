<?php
require "class/book.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
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
        <a href="#">Home</a> |
        <a href="#">Book</a> |
        <a href="#">Reader</a> |
        <a href="#">Borrow books</a> |
        <a href="#">Author</a> |
        <a href="#">Categories</a>
        <!--        </nav>-->
    </div>
    <hr>
    <div class="col-md-12">
        <!--        list-->
        <h2 style="color: chocolate">Book List</h2>

        <?php
        $bookObj = new book();  //Tạo 1 object class Category
        $showBooks = $bookObj->showBook();
        ?>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Book's name</th>
                <th>Category</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($showBooks as $book) : ?>       <!-- Duyệt mảng $category -->

                <tr>
                    <td><?php echo $book['id_book']?></td>
                    <td><?php echo $book['name']?></td>
                    <td><?php echo $book['id_category']?></td>
                    <td><?php echo $book['author']?></td>

                    <td>
                        <a href="book/update.php?id=<?php echo $book['id_book']?>">Update</a> |
                        <a href="book/delete.php?id=<?php echo $book['id_book']?>" onclick="return confirm('Do you realy want to delete this category')">Delete</a>
                    </td>
                </tr>

            <?php endforeach;?>
            </tbody>
        </table>
        <form method="post">
            <a href="categories/insert.php">Add new book</a>
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