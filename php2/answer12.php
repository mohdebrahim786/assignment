 <?php

$d="/home";
// Sort in ascending order - this is default
$a = scandir($d);

// Sort in descending order
$b = scandir($d,1);

print_r($a);
print_r($b);
?> 