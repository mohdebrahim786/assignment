<?php
$array1 = ['abhinesh', 'priyanshu'];
$array2=[...$array1,'tanya',...$array1,'manpreet',...$array1];
for ($i=0, $len=count($array2); $i<$len; $i++) {
    echo "$array2[$i] ";
 } ?>
