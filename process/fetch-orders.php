<?php
require '../config.php';

$stmt = $conn->prepare('SELECT * FROM food_orders_tbl');
$stmt->execute();
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($orders);