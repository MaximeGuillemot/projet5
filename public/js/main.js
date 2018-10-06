var itemTable = Object.create(Table);
itemTable.init(document.getElementById("items_list"));

var idItems = [];
var boostedItems = [];
var reqItems = [];

ajaxGet("http://localhost/projet5/pages/api/api.php", function (data) 
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


document.getElementById("nav_items").addEventListener("mouseup", function()
{
    document.getElementById("items_page").style.display = "block";
    this.className = "nav_items_colored";

    document.getElementById("nav_creatures").className = "nav_creatures_blank";
    document.getElementById("nav_npcs").className = "nav_npcs_blank";
    document.getElementById("nav_clans").className = "nav_clans_blank";
    document.getElementById("nav_spells").className = "nav_spells_blank";
    document.getElementById("nav_flags").className = "nav_flags_blank";
});

document.getElementById("nav_creatures").addEventListener("mouseup", function()
{
    document.getElementById("items_page").style.display = "none";
    this.className = "nav_creatures_colored";

    document.getElementById("nav_items").className = "nav_items_blank";
    document.getElementById("nav_npcs").className = "nav_npcs_blank";
    document.getElementById("nav_clans").className = "nav_clans_blank";
    document.getElementById("nav_spells").className = "nav_spells_blank";
    document.getElementById("nav_flags").className = "nav_flags_blank";
});

document.getElementById("nav_npcs").addEventListener("mouseup", function()
{
    document.getElementById("items_page").style.display = "none";
    this.className = "nav_npcs_colored";

    document.getElementById("nav_items").className = "nav_items_blank";
    document.getElementById("nav_creatures").className = "nav_creatures_blank";
    document.getElementById("nav_clans").className = "nav_clans_blank";
    document.getElementById("nav_spells").className = "nav_spells_blank";
    document.getElementById("nav_flags").className = "nav_flags_blank";
});

document.getElementById("nav_clans").addEventListener("mouseup", function()
{
    document.getElementById("items_page").style.display = "none";
    this.className = "nav_clans_colored";

    document.getElementById("nav_items").className = "nav_items_blank";
    document.getElementById("nav_creatures").className = "nav_creatures_blank";
    document.getElementById("nav_npcs").className = "nav_npcs_blank";
    document.getElementById("nav_spells").className = "nav_spells_blank";
    document.getElementById("nav_flags").className = "nav_flags_blank";
});

document.getElementById("nav_spells").addEventListener("mouseup", function()
{
    document.getElementById("items_page").style.display = "none";
    this.className = "nav_spells_colored";

    document.getElementById("nav_items").className = "nav_items_blank";
    document.getElementById("nav_creatures").className = "nav_creatures_blank";
    document.getElementById("nav_npcs").className = "nav_npcs_blank";
    document.getElementById("nav_clans").className = "nav_clans_blank";
    document.getElementById("nav_flags").className = "nav_flags_blank";
});

document.getElementById("nav_flags").addEventListener("mouseup", function()
{
    document.getElementById("items_page").style.display = "none";
    this.className = "nav_flags_colored";

    document.getElementById("nav_items").className = "nav_items_blank";
    document.getElementById("nav_creatures").className = "nav_creatures_blank";
    document.getElementById("nav_npcs").className = "nav_npcs_blank";
    document.getElementById("nav_clans").className = "nav_clans_blank";
    document.getElementById("nav_spells").className = "nav_spells_blank";
});