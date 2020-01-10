<html>
    <head>
        <meta charset="UTF-8">
        <title>Fancy number table</title>   
    </head>
    <style type="text/css">
        table, tr, td{
            background-color: powderblue;
            border: 1px solid black;
            text-align: center;
        }
    </style>
    <body>
        <table align= center cellpadding="3" cellspacing="5">  
            <?php 
                echo "<br>";
                echo "<br>"; 
                for($i=1;$i<=6;$i++)  
                {  
                    echo "<tr>";  
                    for ($j=1;$j<=5;$j++)  
                      {  
                      echo "<td>$i * $j = ".$i*$j."</td>";  
                      }  
                      echo "</tr>";  
                  }  
            ?>  
        </table>
    </body>
</html>