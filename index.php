<?php
require_once './database.php';

// call database
$db = new DB();

// table name eg. products
$table = "products";

// data product
$params = [
    "title" => "MacBook Air (M2 Chip)",
    "price" => "$999",
    "description" => "8-Core CPU 8-Core GPU 8GB Unified Memory 256GB SSD Storage footnote ¹"
];

// show all product
$db->findAll($table);

// search product by name eg. Macbook
$db->findBy($table, 'name = `Macbook`');

// edit product
$db->update($table, $params, $id);

// adding product
$db->create($table, $params);

// remove product
$db->delete($table, $pid);