<?php
require '../config.php';

$name = strtoupper($_POST['foodName']);
$quantity = $_POST['foodQuantity'];
$price = $_POST['foodPrice'];
$stmt = $conn->prepare('INSERT INTO food_orders_tbl (food_name, food_quantity, order_price) VALUES (:name, :quantity, :price)');
$stmt->execute(['name' => $name, 'quantity' => $quantity, 'price' => $price]);
echo 1;