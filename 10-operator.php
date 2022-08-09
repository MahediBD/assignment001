<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operator</title>
</head>
<body>
<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  


<?php
$x = 10;  
$y = 6;

echo $x - $y;
?>  

<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  


<?php
$x = 10;  
$y = 6;

echo $x / $y;
?> 


<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>  

<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>  



    
</body>
</html>