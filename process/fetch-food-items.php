<?php
require '../config.php';

$stmt = $conn->prepare('SELECT food_name FROM food_items_tbl');
$stmt->execute();
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($orders);