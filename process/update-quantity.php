<?php
require '../config.php';
$quantity = $_POST['updatedQuantity'];
$name = $_POST['foodName'];
$stmt = $conn->prepare('UPDATE food_items_tbl SET food_quantity = :quantity WHERE food_name = :name');
$stmt->execute(['quantity' => $quantity,'name' => $name]);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);