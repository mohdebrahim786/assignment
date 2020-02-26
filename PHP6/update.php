<?php
ini_set('display_errors',1);
include "mongodbconnection.php";
//$Manager=['_id'=> new MongoDB\BSON\ObjectID,'name'=>"priyanshu",'age'=>20,'type'=>"drupal developer"];
$conn->update(['name'=>"abhinesh"], ['$set' => ['age'=>18]]);
$data=$manager->executeBulkWrite('Bootcamp.mongo',$conn);
if ($data){
    echo "values updated";
}
?>
