<?php 
$employee = array( 
    "name" => "himanshu", 
    "email" => "himanshudhote@gmail.com", 
    "age" => 21, 
    "gender" => "male"
  
); 
  


foreach($employee as $key => $element) { 
    echo $key . ": " . $element . "<br>"; 
} 
  
?> 
