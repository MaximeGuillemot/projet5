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

        for(var i=0; i < rows.length; i++)
        {
            rows[i].style.backgroundColor = swapColor ? "#b7cce4" : "#FFF";
            swapColor = !swapColor;
        }
    }
}