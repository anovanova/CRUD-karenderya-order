<?php
require '../config.php';
$name = strtoupper($_POST['foodName']);
$quantity = $_POST['foodQuantity'];
$price = $_POST['foodPrice'];
$stmt = $conn->prepare('SELECT food_name FROM food_items_tbl WHERE food_name = :name');
$stmt->execute(['name' => $name]);
$count = $stmt->rowCount();
if($count >= 1){
    echo 2;
}
else{
    $stmt = $conn->prepare('INSERT INTO food_items_tbl (food_name, food_quantity, food_price) VALUES (:name, :quantity, :price)');
    $stmt->execute(['name' => $name, 'quantity' => $quantity, 'price' => $price]);
    echo 1;
}
