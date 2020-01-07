<html>
    <head>
     <meta charset="UTF-8">
     <title>Factorial of a given number</title> 
    </head>
    <body>
        <?php
        $num = 5;
        $fact = 1;
        for($i=1; $i<=$num; ++$i)
        {
            $fact = $fact*$i;
        }
        echo $fact;
        ?>
    </body>
</html>