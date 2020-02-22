<?php
    class Person {
        // first name of person
        private $fname;
        // last name of person
        private $lname;
        
        // Constructor
        public function __construct($fname, $lname) {
            echo "Initialising the object...<br/>"; 
            $this->fname = $fname;
            $this->lname = $lname;
        }
        
        // Destructor
        public function __destruct(){
            // clean up resources or do something else
            echo "Destroying Object...";
        }
        
        // public method to show name
        public function showName() {
            echo "My name is: " . $this->fname . " " . $this->lname . "<br/>"; 
        }
    }
    
    // creating class object
    $john = new Person("John", "Wick");
    $john->showName();
    
?>


