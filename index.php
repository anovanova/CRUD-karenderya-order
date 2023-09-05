<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Karenderya Order</title>
</head>
<body>
    <nav class='container-fluid m-0 p-0'>
        <div class='w-100 bg-primary'>
            <button class='btn btn-primary' id='homeBtn'>Home</button>
            <button class='btn btn-primary' id='orderHistoryBtn'>Order History</button>
            <button class='btn btn-primary' id='createFoodItemBtn'>Create Food Item</button>
        </div>
        
    </nav>
    <section class='container'>
        <div id='createFoodItemContainer' hidden>
            <input type="text" name="" id="createFoodName" class='form-control mt-2' placeholder="Food Name">
            <input type="number" id='createFoodQuantity' class='form-control mt-2' placeholder="Food Quantity">
            <input type="number" id='createFoodPrice' class='form-control mt-2' placeholder="Food Price">
            <button class='btn btn-success mt-2' id='addFoodItemBtn'>Create Food Item</button>
        </div>
        <div id='orderHistoryContainer' hidden>

        </div>
        <div id='orderFoodContainer'>
            <select name="" id="foodName" class='form-control mt-2'>
                <option value="NONE">Select Food</option>
            </select>
            <input type="number" id='foodQuantity' class='form-control mt-2' placeholder="Food Quantity">
            <p class='mt-2'>Available Quantity: <b><span id='quantityText'></span></b></p>
            <p>Price: <b><span id='priceText'></span></b></p>
            <button class='btn btn-success mt-2' id="submitOrderBtn">Submit Order</button>
        </div>
    </section>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/button-functions.js"></script>
    <script src="js/fetch-food-items.js"></script>
    <script src="js/compute-price.js"></script>
</body>
</html>