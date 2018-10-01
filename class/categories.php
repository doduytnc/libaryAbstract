<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/24/2018
 * Time: 8:41 AM
 */
require 'abstractModel.php';

class categories extends abstractModel
{

    public function showCategories() {
    $tableName = 'categories';
    $oderBy = 'id_category';
    $categories = parent::showData($tableName,$oderBy);
    return $categories;
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