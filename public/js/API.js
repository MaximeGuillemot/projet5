ajaxGet("http://localhost/t5ceditor/public/api/api.php", function (data) 
{
    var swapColor = true;
    var items = JSON.parse(data);
    items.forEach(function (item)
    {
        swapColor = !swapColor;
        var bgColor = swapColor ? "#b7cce4" : "#FFF";
        
        var listedItem = Object.create(Item);
        listedItem.init(item);
        listedItem.addItemToTable(document.getElementById("items_list"), bgColor);
    });
});

