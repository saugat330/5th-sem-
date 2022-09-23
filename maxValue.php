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
    1.initialize an array arr with [1,2,3,56,32,100,23,5]
    2.initialize a var $max = 0 ;
    3.iterate through each element in the array
        3.1 if element > $max , set $max = element
    4.print the $max 
    
 -->
<?php
    $arr = array(1,2,3,56,32,100,23,5);
    $max = 0;
    foreach($arr as $el){
        if($el > $max) $max = $el;
    }
    echo "Max Value = ",$max;

?>
</body>
</html>