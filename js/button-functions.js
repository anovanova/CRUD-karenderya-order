$('#homeBtn').on('click', () => {
    $('#createFoodItemContainer').attr('hidden', true);
    $('#orderHistoryContainer').attr('hidden', true);
    $('#orderFoodContainer').attr('hidden', false);
})
$('#orderHistoryBtn').on('click', () => {
    $.get('./process/fetch-orders.php')
    .done((data) => {
        let parsedData = JSON.parse(data);
        $('#orderHistoryContainer').empty();
        for(count in parsedData){
            $('#orderHistoryContainer').append(
                '<div class="mt-4"><p>Food Name: '+ parsedData[count].food_name +'</p> <p>Quantity: '+ parsedData[count].food_quantity +'</p> <p>Price: '+ parsedData[count].order_price +'</p></div>'
            );
        }
    });
    $('#createFoodItemContainer').attr('hidden', true);
    $('#orderHistoryContainer').attr('hidden', false);
    $('#orderFoodContainer').attr('hidden', true);
})
$('#createFoodItemBtn').on('click', () => {
    $('#createFoodItemContainer').attr('hidden', false);
    $('#orderHistoryContainer').attr('hidden', true);
    $('#orderFoodContainer').attr('hidden', true);
})

$("#addFoodItemBtn").on('click', () => {
    let foodName = $('#createFoodName').val();
    let foodQuantity = $('#createFoodQuantity').val();
    let foodPrice = $('#createFoodPrice').val();
    $.post('./process/add-food-item.php', {foodName: foodName, foodQuantity: foodQuantity, foodPrice: foodPrice})
    .done( (data) => {
        console.log(data);
        if(data == 1){
            alert('Added successfully!');
        }
        else if(data == 2){
            alert('Food already added!');
        }
        else{
            alert('Error');
        }
    });
})

$('#submitOrderBtn').on('click', () => {
    if(parseInt($('#quantityText').text()) == 0){
        alert('Food not available');
    }
    else{
        let foodName = $('#foodName').val();
        let foodQuantity = $('#foodQuantity').val();
        let foodPrice = parseInt($('#priceText').text());
        let updatedQuantity = parseInt($('#quantityText').text()) - $('#foodQuantity').val();
        $.post('./process/add-order-process.php', {foodName: foodName, foodQuantity: foodQuantity, foodPrice: foodPrice})
        .done( (data) => {
            console.log(data);
            if(data == 1){
                alert('Added successfully!');
            }
            else{
                alert('Error');
            }
        });
        $.post('./process/update-quantity.php', {foodName: foodName, updatedQuantity: updatedQuantity})
        .done( (data) => {
            console.log(data);
        });
    }
    
});