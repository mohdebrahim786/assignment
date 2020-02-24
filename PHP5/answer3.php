<?php
$arr1 = [1, 2, 3];
$array2 = [...$arr1]; for ($i=0, $len=count($array2); $i<$len; $i++) {
    echo "$array2[$i] ";}
   echo"\n";
$array3 = [0, ...$arr1];
for ($i=0, $len=count($array3); $i<$len; $i++) {
    echo "$array3[$i] ";}

    echo"\n";
$array4 = array(...$arr1, ...$array2, 111);
  for ($i=0, $len=count($array4); $i<$len; $i++) {
        echo "$array4[$i] ";}
       echo"\n";

?>