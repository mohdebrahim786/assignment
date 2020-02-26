<?php
ini_set('display_errors',1);
include "mongodbconnection.php";
$Manager=['_id'=> new MongoDB\BSON\ObjectID,'name'=>"abhinesh",'age'=>29,'type'=>"drupal trainee"];
$conn->insert($Manager);
$data=$manager->executeBulkWrite('Bootcamp.mongo',$conn);
if ($data){
    echo "values added";
}
?>