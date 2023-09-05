<?php
require '../config.php';
$name = $_GET['foodName'];
$stmt = $conn->prepare('SELECT food_quantity, food_price FROM food_items_tbl WHERE food_name = :name');
$stmt->execute(['name' => $name]);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($orders);