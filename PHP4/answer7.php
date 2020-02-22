<?php 
  
// Abstract class 
abstract class Base { 
    function __construct() { 
        echo "this is abstract class constructor "; 
    } 
  
    // This is abstract function 
    abstract function printdata(); 
} 
class Derived extends base { 
    function __construct() { 
        echo " Derived class constructor"; 
    } 
    function printdata() { 
        echo " Derived class print data function"; 
    } 
} 
$b1 = new Derived; 
$b1->printdata(); 
?> 

