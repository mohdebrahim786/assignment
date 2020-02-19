
<?php 
  
list($width, $height, $type, $attr) = getimagesize("a.png"); 
   
echo "Width of image : " . $width . "\n"; 
  
echo "Height of image : " . $height . "\n"; 
  
echo "Image type :" . $type . "\n"; 
  
echo "Image attribute :" .$attr; 
?> 
