$(window).on('load', () => {
    let price;
    $('#foodName').on('change', (() => {
        let foodName = $('#foodName').val();
        $.get('./process/fetch-selected-food.php', {foodName: foodName})
        .done((data) => {
            console.log(data);
            let parsedData = JSON.parse(data);
            $('#quantityText').text(parsedData[0].food_quantity);
            $('#foodQuantity').on('keyup', () => {
                price = $('#foodQuantity').val() * parsedData[0].food_price;
                $('#priceText').text(price);
            })
        });
    }));

});