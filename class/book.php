<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/24/2018
 * Time: 8:41 AM
 */
require 'abstractModel.php';

class book extends abstractModel
{

    public function showBook() {
        $tableName = 'book';
        $oderBy = 'id_book';
        $book = parent::showData($tableName,$oderBy);
        return $book;
    }

    public function insert($record) {
        $sql = "INSERT INTO categories (name) VALUES ('$record')";
        $this->conn->exec($sql);
    }

    public function update($idCate,$nameCate) {
        $sql = "UPDATE `categories` SET `name` = '$nameCate' WHERE `id_category` = $idCate";
        $this->conn->exec($sql);
    }
}