<?php
require_once './database.php';

$db = new DB();
$table = "products"

// show all product
$db->select($table);

// search product by name
$db->find($table, 'name = `Macbook`');

// update product
$db->update($table, $params, $pid);

// adding new product
$db->insert($table, $params);

// delete product
$db->delete($table, $pid);