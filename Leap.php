<html>
    <head>
     <meta charset="UTF-8">
     <title>Leap year</title>  
    </head>
    <body align="center" >
        <?php
            $year = 2019;
            if($year == 0)
            echo "<h2>Invalid year</h2>";
            else if($year%4 == 0)
            echo "<h2>Its a leap year!</h2>";
            else
            echo "<h2>Not a leap year</h2>";
        ?>
    </body>
</html>