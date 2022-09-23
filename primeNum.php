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
    1. Set the limit, count (to find prime num)
    2.iterate through every number less or equal to the number
    3. set count = 0 in starting of every iteration
    4.for each iteration n, divide it by number from 1 to n 
    5.if remainder === 0 then increment count
    6. check the count , if count ===2  then it is a prime number 
    7. go to step 2

 -->

<?php 
    
    $limit = 50;    
    $count;

    for($i = 1; $i<=$limit; $i++)
    {
        $count = 0;
        for($j=1; $j<=$i;$j++)
        {
            $i%$j===0?($count++):$count;
        }
        if($count === 2 ) echo $i," ";
    }

?>
    
</body>
</html>