<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        ALGORITHM
        1. let x and y be two number
        2. iniate another variable temp to store the value.
        3. store temp = x
        4. change x = y
        5. change the value of num2 , num2 = temp
        6.endd
     -->

     <?php
        $x = 10;
        $y = 20;
        echo "Before swapping x = $x , y = $y";
        $temp = $x;
        $x = $y;
        $y = $temp;

        echo " <br> After swapping x = $x, y = $y";
        
     ?>
</body>
</html>