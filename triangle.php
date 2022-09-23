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
        1 2 3 4 5 6 7 8 i=1 , j =9-i = 8
        1 2 3 4 5 6 7   i=2, j = 9 -i = 7
        1 2 3 4 5 6 
        1 2 3 4 5
        1 2 3 4
        1 2 3
        1 2
        1  i=8 , j = 1

        1. column = 8 , row = 8
        2. let a loop from 1 to 8 , which resembles column
            3. in each iteration , generate row which with loop j=1 which runs till j<= 9-i 
                            print the value of j
                            j++;
        3. break a line at the end of each outer loop
        4.end
     -->
  
     <?php 
        for($i = 1; $i<=8;$i++)
        {
            for($j = 1;$j<=(9-$i);$j++)
            {
                echo "$j ";
            }
            echo "<br>";
        }
     ?>
</body>
</html>