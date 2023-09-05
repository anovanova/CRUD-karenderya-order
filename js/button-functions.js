$('#homeBtn').on('click', () => {
    $('#createFoodItemContainer').attr('hidden', true);
    $('#orderHistoryContainer').attr('hidden', true);
    $('#orderFoodContainer').attr('hidden', false);
})
$('#orderHistoryBtn').on('click', () => {
    $('#createFoodItemContainer').attr('hidden', true);
    $('#orderHistoryContainer').attr('hidden', false);
    $('#orderFoodContainer').attr('hidden', true);
})
$('#createFoodItemBtn').on('click', () => {
    $('#createFoodItemContainer').attr('hidden', false);
    $('#orderHistoryContainer').attr('hidden', true);
    $('#orderFoodContainer').attr('hidden', true);
})