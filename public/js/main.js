var itemTable = Object.create(Table);
itemTable.init(document.getElementById("items_list"));

var idItems = [];
var boostedItems = [];
var reqItems = [];

ajaxGet("http://localhost/projet5/public/api/api.php", function (data) 
{
    var data = JSON.parse(data);
    var items = data.items;
    var boosts = data.boosts;
    var stats = data.stats;
    var reqs = data.reqs;
    var equipPos = data.equippos;

    boosts.forEach(function (boostedItem)
    {
        boostedItems.push(boostedItem);
    });

    reqs.forEach(function (reqItem)
    {
        reqItems.push(reqItem);
    });
    
    items.forEach(function (item)
    {
        var listedItem = Object.create(Item);
        listedItem.init(item);
        listedItem.addItemToTable(document.getElementById("items_list"));

        boostedItems.forEach(function (elt)
        {
            if(elt.idItem === listedItem.idItem)
            {
                itemTable.showDesc(elt, listedItem, stats, "boost", equipPos);
            }
        });

        reqItems.forEach(function (elt)
        {
            if(elt.idItem === listedItem.idItem)
            {
                itemTable.showDesc(elt, listedItem, stats, "req", equipPos);
            }
        });
    });

    itemTable.colorRows();
});