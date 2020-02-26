<?php
ini_set('display_errors',1);
include "mongodbconnection.php";
//$Manager=['_id'=> new MongoDB\BSON\ObjectID,'name'=>"priyanshu",'age'=>20,'type'=>"drupal developer"];
$conn->delete(['name' => 'priyanshu','age'=>20]);

$data=$manager->executeBulkWrite('Bootcamp.mongo',$conn);
if ($data){
    echo "values deleted";
}
?>
