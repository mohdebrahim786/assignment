<?php
$numbers= array(1,2,3,4,5,6);
foreach ($numbers as $value)
{

if ($value ==1 or $value==6)
echo $value ."<br>";
else 
      echo "";
} 
unset($value);
?>