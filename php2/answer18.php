<?php
$arraychars=array("green","red","yellow","green","red","yellow","green");
echo $arrlength=count($arraychars);
$arrCount=array();
for($i=0;$i<$arrlength-1;$i++){
	$key=$arraychars[$i];
	if(@$arrCount[$key]>=1){
		
		$arrCount[$key]++;
	} else{
		$arrCount[$key]=1;
	}
	
	
}
echo "<pre>";
print_r($arrCount);
?>