<?php
 //ini_set('display_errors', 1);
   $name=$_REQUEST["fn"];
   $last=$_REQUEST["ln"];
   $email=$_REQUEST["em"];
   $contact=$_REQUEST["cont"];

  
  try
    {
       $conn =new PDO('mysql:host=localhost;dbname=bootcamp','abhi','ttn');
 //var_dump($conn);die;
      
 
       $data =$conn->exec("insert into EMPLOYEES (Fname ,Lname ,Email,Contact) values ('$name','$last','$email','$contact')");
  //var_dump($data);die;

if(preg_match("/^([a-zA-Z' ]+)$/",$name)){
   echo 'Valid name given.';
}else{
   echo 'Invalid name given.';
}
if(preg_match("/^[1-9][0-9]{0,15}$/",$contact)){
   echo 'Valid number given.';
}else{
   echo 'Invalid number given.';
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
   $status = "Invalid email id";
}
$email = $_POST['Email'];
if($email != "") {
    $result = mysql_query("SELECT * FROM EMPLOYEES where Email='".$email."'");
    $num_rows = mysql_num_rows($result);
    if($num_rows >= 1){
        echo "email exist";
    }else{
        $sql = mysql_query ("INSERT INTO EMPLOYEES (Email) VALUES ('$email')");
        echo "Thank you for Submitting. Redirecting back to Home Page";
    }
}


if ($data== TRUE) {
                 echo "New record created successfully";
              }
       else {
              echo "Error: ".$data."<br>".$conn->error;
           }    
       $conn=null;
   }
   
  catch(PDOException $ex){
     die('Error:'.$ex);
}

?>

