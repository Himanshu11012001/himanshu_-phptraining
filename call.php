<?php
  

class GFG {
  
   
    static function someFunction() {
        echo "Parent class \n";
    }
}
  
class Article extends GFG {
  
    // Function to print a string
    static function someFunction() {
        echo "Article class \n";
    }   
}
  
// Static class method callback
call_user_func(array('Article', 'someFunction'));
  
call_user_func('Article::someFunction');
  
// Relative Static class method callback
call_user_func(array('Article', 'parent::someFunction'));
?>