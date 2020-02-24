<?php
$arr1=['c','d'];
function showarr()
{
return ['a','b'];
}
$arr2=[...showarr(),...$arr1];
$len=count($arr2);
for($i=0;$i<$len;$i++)
{
echo" $arr2[$i] ";
}
?>