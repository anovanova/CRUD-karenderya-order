$(window).on('load', () => {
    $.get('./process/fetch-food-items.php')
    .done((data) => {
        let parsedData = JSON.parse(data);
        for(count in parsedData){
            $('#foodName').append('<option value='+parsedData[count].food_name+'>'+parsedData[count].food_name+'</option>');
        }
        
    });
});