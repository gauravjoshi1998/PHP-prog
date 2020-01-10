<html>
    <head>
     <meta charset="UTF-8">
     <title>Fibonacci series</title>    
    </head>
    <body>
        <?php
        $first = 0;
        $second = 1;
        echo $first." ";
        echo $second." ";
        for($i=0; $i<10; $i++)
        {
            $third = $first + $second;
            echo $third. " ";
            $first = $second;
            $second = $third;
        }
        ?>
    </body>
</html>