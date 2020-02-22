<?php 
namespace MyNamespaceName; 
function hello()  
    { 
        echo 'Hello I am Running from a namespace!'; 
    } 
    
// Resolves to MyNamespaceNamehello 
hello(); 
  
// Explicitly resolves to MyNamespaceNamehello 
namespacehello(); 
?> 


