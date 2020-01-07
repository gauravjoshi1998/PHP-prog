<html>
    <head>
     <meta charset="UTF-8">
     <title>Table of a number</title>   
    </head>
    <body>
        <table align="center" border="1" cellpadding="3" vertical-align cellspacing="5">
        <?php
            $num = 5;
            echo"<tc>";
            for($i=1; $i<11; $i++){
            $res = $num*$i;
            echo "<td>$res</td>";
            echo "<br>";
            echo"</tc>";
            }
        ?>
    </table>
    </body>
</html>
