<?php
$numbers= array(5, 2, 3, 4, 1,8,7,6,9);
sort($numbers);
echo "this is an example of sort "."\n";
 foreach($numbers as $value):
    echo $value;
    endforeach;
    echo "\n";
    echo "this is an example of rsort "."\n";
    rsort($numbers);
    foreach($numbers as $value):
       echo $value;
       endforeach;

       $age = array("abhinesh"=>"21", "priyanshu"=>"24", "anil"=>"43");

       asort($age);
        echo "this is an example of asort "."\n";
       foreach($age as $x => $x_value):
           echo "Key=" . $x . ", Value=" . $x_value;
           echo "\n";
       endforeach;
           echo "\n";
           ksort($age);
           echo "this is an example of ksort "."\n";
          foreach($age as $x => $x_value):
              echo "Key=" . $x . ", Value=" . $x_value;
              echo "\n";
          endforeach;
              echo "\n";
              
              arsort($age);
              echo "this is an example of arsort "."\n";
             foreach($age as $x => $x_value):
                 echo "Key=" . $x . ", Value=" . $x_value;
                 echo "\n";
             endforeach;
                 echo "\n";
                 krsort($age);
                 echo "this is an example of krsort "."\n";
                foreach($age as $x => $x_value):
                    echo "Key=" . $x . ", Value=" . $x_value;
                    echo "\n";
                endforeach;
                    echo "\n";
                    
        
?> 