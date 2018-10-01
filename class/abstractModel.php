<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/21/2018
 * Time: 9:46 AM
 */
require __DIR__.'/../database/database.php';

abstract class abstractModel
{
    protected $conn;

    public function __construct() {
        $connect = new Database();
        $this->conn = $connect->connect('root', '', 'mylibrary');
    }
    public function showData($table_name,$orderBy) {
        $sql = "SELECT * FROM `{$table_name}` ORDER BY `{$orderBy}`";
        $result = $this->conn->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getRecordById($table_name,$idColumnName,$id) {
        $sql = "SELECT * FROM {$table_name} WHERE {$idColumnName} = '$id'";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function delete($table_name,$delByColumn,$Id) {
        $sql = "DELETE FROM {$table_name} WHERE {$delByColumn} = '$Id'";
        $this->conn->exec($sql);
    }

    abstract public function update($id,$name);
    abstract public function insert($record);

}