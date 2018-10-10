var Table =
{
    itemDescElt: document.getElementById("item_desc"),

    init: function(table)
    {
        this.table = table;
        var columns = document.getElementsByTagName("TH");

        var j = 0;

        for (i = 0; i < columns.length; i++) 
        {
            columns[i].addEventListener("mouseup", this.sortTable.bind(this, j));
            j++;
        }
    },

    sortTable: function(column)
    {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = this.table;
        switching = true;

        dir = "asc"; 

        while (switching) 
        {
            switching = false;
            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) 
            {
                shouldSwitch = false;

                x = rows[i].getElementsByTagName("TD")[column];
                y = rows[i + 1].getElementsByTagName("TD")[column];

                if (dir == "asc") 
                {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) 
                    {
                        shouldSwitch = true;
                        break;
                    }
                } 
                else if (dir == "desc") 
                {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) 
                    {
                        shouldSwitch = true;
                        break;
                    }
                }
            }

            if (shouldSwitch) 
            {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;

                switchcount ++; 
            } 
            else 
            {
                if (switchcount == 0 && dir == "asc") 
                {
                  dir = "desc";
                  switching = true;
                }
            }
        }

        this.colorRows();
    },

    colorRows: function()
    {
        var swapColor = true;
        var rows = this.table.rows;

        for(var i = 0; i < rows.length; i++)
        {
            rows[i].style.backgroundColor = swapColor ? "#b7cce4" : "#FFF";
            swapColor = !swapColor;
        }
    },

    showDesc: function(elt, item, stats, type, equipPos)
    {
        var cells = this.table.getElementsByTagName("TD");
        var itemNameElt = document.getElementById("item_name");
        var itemGridElt = document.getElementById("item_grid");

        for(var i = 0; i < cells.length; i++)
        {
            if(cells[i].textContent === elt.idItem)
            {
                var cell = cells[i];

                cell.parentNode.addEventListener("mouseover", function(e) { return this.placeDescOnCursor(e); }.bind(this));
                cell.parentNode.addEventListener("mouseover", function() { return this.pickEquipImg(equipPos, item); }.bind(this));
                cell.parentNode.addEventListener("mousemove", function(e) { return this.placeDescOnCursor(e); }.bind(this));
                cell.parentNode.addEventListener("mouseout", function() { return this.hideDesc(); }.bind(this));

                cell.parentNode.addEventListener("mouseover", function()
                {
                    itemNameElt.textContent = item.name + " - " + item.idItem;
                    itemGridElt.src = "../public/images/equipment_grid/grid" + item.slotH + "x" + item.slotW + ".png";
                });

                if(type === "req")
                {
                    cell.parentNode.addEventListener("mouseover", function() { return this.fillReq(elt, stats); }.bind(this));
                }
                else if(type === "boost")
                {
                    cell.parentNode.addEventListener("mouseover", function() { return this.fillBoons(elt, stats); }.bind(this));
                }
            }
        }
    },

    fillReq: function(elt, stats)
    {
        var itemReqsElt = document.getElementById("item_reqs");
        var req = "";

        itemReqsElt.setAttribute("name", elt.idItem);

        for(var i = 0; i < stats.length; i++)
        {
            if(stats[i].idListStat === elt.element)
            {
                req = stats[i].value;
                req = req.replace(" ", "_");
                req = req.replace(req, "req_" + req);
            }
        }

        var reqElt = document.getElementById(req);

        reqElt.parentElement.style.opacity = "1";
        reqElt.textContent = elt.valueFormula;

        reqElt.style.fontWeight = "bold";

        reqElt.style.color = "#de0101";
    },

    fillBoons: function(elt, stats)
    {
        var itemDetailsElt = document.getElementById("item_details");
        var boon = "";

        itemDetailsElt.setAttribute("name", elt.idItem);

        for(var i = 0; i < stats.length; i++)
        {
            if(stats[i].idListStat === elt.element)
            {
                boon = stats[i].value;
                boon = boon.replace(" ", "_");
            }
        }

        var boonElt = document.getElementById(boon);
        boonElt.parentElement.style.opacity = "1";

        boonElt.textContent = elt.valueFormula;
        boonElt.style.fontWeight = "bold";

        if(elt.valueFormula > 0)
        {
            boonElt.style.color = "#006810";
        }
        else
        {
            boonElt.style.color = "#de0101";
        }
    },

    pickEquipImg: function(equipPos, item)
    {
        var itemPosElt = document.getElementById("item_pos");

        for(var i = 0; i < equipPos.length; i++)
        {
            var equip = "";

            if(equipPos[i].idListEquipPosition == item.equipPosition)
            {
                equip = equipPos[i].value;
                equip = equip.toLowerCase();
                equip = equip.replace(" ", "_");
                itemPosElt.src = "../public/images/equipment/" + equip + ".png";
                
            }
        }
    },

    placeDescOnCursor: function(e)
    {
        var left  = (e.clientX + 30)  + "px";
        var top  = (e.clientY - 270) + "px";

        this.itemDescElt.style.left = left;
        this.itemDescElt.style.top = top;
        this.itemDescElt.style.display = "block";
    },

    hideDesc: function()
    {
        var characs = document.getElementsByClassName("stat_value");
        
        for(var i = 0; i < characs.length; i++)
        {
            characs[i].textContent = "---";
            characs[i].style.color = "#000";
            characs[i].style.fontWeight = "normal";
            characs[i].parentElement.style.opacity = ".5";
        }

        this.itemDescElt.style.display = "none";
    }
}