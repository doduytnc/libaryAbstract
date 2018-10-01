<?php
require "../class/book.php";

$idDelete = $_GET['id'];
$books = new book();
$tableName = 'book';
$delBy = 'id_book';
$BookDelete = $books->delete($tableName,$delBy,$idDelete);
header('Location: ../book.php');
exit();