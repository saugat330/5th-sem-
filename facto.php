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
    Algorithm:
    1.initialize a number n
    2.create a function facto()
    3.inside the function
        3.1 if(n === 1 ) then return 1
            else return n * facto(n-1);
    4.call facto(n) and store the return value in factoValue
    5.echo factoValue
 -->
<?php 

    $n = 10;
    
    //function
    function facto($n){
        if($n===1)
        {
            return 1;
        }else{
            return $n * facto($n - 1);
        }

    }

    $factoValue = facto($n);
    echo "Factorial of",$n," = ",$factoValue;
    
?>
</body>
</html>