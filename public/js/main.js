var itemTable = Object.create(Table);
itemTable.init(document.getElementById("items_list"));

ajaxGet("http://localhost/t5ceditor/public/api/api.php", function (data) 
{
    var items = JSON.parse(data);
    items.forEach(function (item)
    {
        var listedItem = Object.create(Item);
        listedItem.init(item);
        listedItem.addItemToTable(document.getElementById("items_list"));
    });
    itemTable.colorRows();
});