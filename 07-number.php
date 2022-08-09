
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>

<!-- infinty -->
<?php
$x = 1.9e411;
var_dump($x);
?>
    
<!-- nun -->
<?php
$x = acos(8);
var_dump($x);
?>