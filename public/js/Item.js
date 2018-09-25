var Item =
{
    init: function(item)
    {
        for(var property in item)
        {
            this[property] = item[property];
        }
    },

    addItemToTable: function(table, bgColor)
    {
        var itemLineElt = document.createElement("tr");
        var itemImageElt = document.createElement("img");

        var itemImage = '../public/images/structures/armor.png';

        var properties = Object.entries(this);

        for(var property in properties)
        {
            var itemCellElt = document.createElement("td");

            if(properties[property][0] === "itemStructure")
            {
                switch(properties[property][1])
                {
                    case "0":
                        itemImage = '../public/images/structures/weapon.png';
                        break;
                    case "1":
                        itemImage = '../public/images/structures/armor.png';
                        break;
                    case "2":
                        itemImage = '../public/images/structures/object.png';
                        break;
                    case "3":
                        itemImage = '../public/images/structures/consumable.png';
                        break;
                    case "4":
                        itemImage = '../public/images/structures/chest.png';
                        break;
                    case "5":
                        itemImage = '../public/images/structures/guildchest.png';
                        break;
                    case "6":
                        itemImage = '../public/images/structures/container.png';
                        break;
                    case "7":
                        itemImage = '../public/images/structures/sign.png';
                        break;
                    default:
                        itemImage = '../public/images/structures/armor.png';
                }

                itemImageElt.src = itemImage;
                itemImageElt.alt = "Item icon";
                itemCellElt.appendChild(itemImageElt);
            }
            else
            {
                itemCellElt.textContent = properties[property][1];
            }

            itemLineElt.appendChild(itemCellElt);
        }

        itemLineElt.style.backgroundColor = bgColor;

        table.appendChild(itemLineElt);
    }
}