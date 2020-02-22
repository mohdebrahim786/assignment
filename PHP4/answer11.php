<?php 
  

class Abhinesh { 
  public function sayhello() { 
     echo "abhinesh class "; 
  } 
} 
  
 
trait Priyanshu { 
  public function sayfor() { 
     echo "priyanshu trait "; 
  } 
} 
  
class S extends Abhinesh { 
   use Priyanshu; 
   public function g() { 
      echo "s class "; 
  }  
} 
  
$test = new S(); 
$test->sayhello(); 
$test->sayfor(); 
$test->g(); 
?> 

