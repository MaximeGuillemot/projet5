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

    showDesc: function(elt, item, stats, type)
    {
        var cells = this.table.getElementsByTagName("TD");
        var itemDescElt = document.getElementById("item_desc");
        var itemNameElt = document.getElementById("item_name");
        var itemDetailsElt = document.getElementById("item_details");
        var itemReqsElt = document.getElementById("item_reqs");

        for(var i = 0; i < cells.length; i++)
        {
            if(cells[i].textContent === elt.idItem)
            {
                var cell = cells[i];

                cell.parentNode.addEventListener("mouseover", function(e)
                {
                    var left  = (e.clientX + 30)  + "px";
                    var top  = (e.clientY - 100) + "px";

                    itemDescElt.style.left = left;
                    itemDescElt.style.top = top;
                    itemDescElt.style.display = "block";
                    itemNameElt.textContent = item.name;

                    
                //console.log(item);

                    if(cell.textContent === elt.idItem && type === "req")
                    {
                        itemReqsElt.setAttribute("name", elt.idItem);
                        var req = "";

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

                        reqElt.textContent = elt.valueFormula;
                        reqElt.style.fontWeight = "bold";

                        if(elt.valueFormula > 0)
                        {
                            reqElt.style.color = "#038b19";
                        }
                        else
                        {
                            reqElt.style.color = "#de0101";
                        }
                    }   

                    if(cell.textContent === elt.idItem && type === "boost")
                    {
                        itemDetailsElt.setAttribute("name", elt.idItem);
                        var boon = "";

                        for(var i = 0; i < stats.length; i++)
                        {
                            if(stats[i].idListStat === elt.element)
                            {
                                boon = stats[i].value;
                                boon = boon.replace(" ", "_");
                            }
                        }

                        var boonElt = document.getElementById(boon);
                        boonElt.textContent = elt.valueFormula;
                        boonElt.style.fontWeight = "bold";

                        if(elt.valueFormula > 0)
                        {
                            boonElt.style.color = "#038b19";
                        }
                        else
                        {
                            boonElt.style.color = "#de0101";
                        }
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

                    var characs = document.getElementsByClassName("stat_value");

                    for(var i = 0; i < characs.length; i++)
                    {
                        characs[i].textContent = "---";
                        characs[i].style.color = "#000";
                        characs[i].style.fontWeight = "normal";
                    }
                });
            }
        }
    }
}