<?php
require "../class/categories.php";

$idDelete = $_GET['id'];
$cate = new Categories();
$tableName = 'categories';
$delBy = 'id_category';
$CateDelete = $cate->delete($tableName,$delBy,$idDelete);
header('Location: ../index.php');
exit();