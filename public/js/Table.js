var Table =
{
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

    showDesc: function(boost, item, stats)
    {
        var cells = this.table.getElementsByTagName("TD");
        var itemDescElt = document.getElementById("item_desc");
        var itemNameElt = document.getElementById("item_name");
        var itemDetailsElt = document.getElementById("item_details");

        for(var i = 0; i < cells.length; i++)
        {
            if(cells[i].textContent === boost.idItem)
            {
                cells[i].parentNode.addEventListener("mouseover", function(e)
                {
                    var left  = (e.clientX + 30)  + "px";
                    var top  = (e.clientY - 100) + "px";

                    itemDescElt.style.left = left;
                    itemDescElt.style.top = top;
                    itemDescElt.style.display = "block";
                    itemNameElt.textContent = item.name;
                    
                        itemDetailsElt.setAttribute("name", boost.idItem);
                        var boon = "";

                        for(var i = 0; i < stats.length; i++)
                        {
                            if(stats[i].idListStat === boost.element)
                            {
                                boon = stats[i].value;
                                boon = boon.replace(" ", "_");
                            }
                        }

                        var boonElt = document.getElementById(boon);
                        boonElt.textContent = boost.valueFormula;
                        boonElt.style.fontWeight = "bold";

                        if(boost.valueFormula > 0)
                        {
                            boonElt.style.color = "#038b19";
                        }
                        else
                        {
                            boonElt.style.color = "#de0101";
                        }
                    
                });

                cells[i].parentNode.addEventListener("mousemove", function(e)
                {
                    var left  = (e.clientX + 30)  + "px";
                    var top  = (e.clientY - 100) + "px";

                    itemDescElt.style.left = left;
                    itemDescElt.style.top = top;
                });

                cells[i].parentNode.addEventListener("mouseout", function()
                {
                    itemDescElt.style.display = "none";

                    var boons = document.getElementsByClassName("stat_value");

                    for(var i = 0; i < boons.length; i++)
                    {
                        boons[i].textContent = "---";
                        boons[i].style.color = "#000";
                        boons[i].style.fontWeight = "normal";
                    }
                });
            }
        }
    }
}