var itemTable = Object.create(Table);
itemTable.init(document.getElementById("items_list"));

var idItems = [];
var boostedItems = [];


ajaxGet("http://localhost/projet5/public/api/api.php", function (data) 
{
    var data = JSON.parse(data);
    var items = data.items;
    var boosts = data.boosts;

    boosts.forEach(function (boostedItem)
    {
        boostedItems.push(boostedItem);
    });
    
    items.forEach(function (item)
    {
        var listedItem = Object.create(Item);
        listedItem.init(item);
        listedItem.addItemToTable(document.getElementById("items_list"));

        boostedItems.forEach(function (item)
        {
            if(item.idItem === listedItem.idItem)
            {
                itemTable.showDesc(item, listedItem);
            }
        });
    });

    itemTable.colorRows();
});