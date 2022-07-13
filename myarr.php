<html>
   <body>
   
      <?php
      
      
        //numeric arrrays are : 
         $numbers = array( 1, 2, 3, 4, 5);
         echo "numeric  arrays =";
          echo "<br/>";
         foreach( $numbers as $value ) {
            echo "Numeric arry value =  $value <br />";
         }
         
         
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
          echo "<br/>";
         
         foreach( $numbers as $value ) {
            echo "Numeric Second method arrays =  $value <br />";
         }
         
         
         echo "<br/>";
          /*  associate arrays */
          echo "associate arrays =";
          //this is first method to create associate arrays 
         $salaries = array("Himanshu " => 2000, "Aasha" => 1000, "Raman" => 500);
          echo "<br/>";
         echo "Salary of Himanshu  is ". $salaries['Himanshu'] . "<br />";
         echo "Salary of Aasha  is ".  $salaries['Aasha']. "<br />";
         echo "Salary of Raman is ".  $salaries['Raman']. "<br />";
         
         
          echo "<br/>";
          
         /* this is second method to create associate arrays = */
         $salaries['Himanshu'] = "high";
         $salaries['Aasha'] = "medium";
         $salaries['Raman'] = "low";
        
         echo "<br/>";
         
         echo "Salary of Himanshu  is ". $salaries['Himanshu'] . "<br />";
         echo "Salary of Aasha is ".  $salaries['Aasha']. "<br />";
         echo "Salary of  Raman is ".  $salaries['Raman']. "<br />";
         echo "<br/>";
         
         
       
         
         //multidiamention arrays 
         echo "multidiamenrtional arrays =";
         echo "<br/>";
         
          $marks = array( 
          
            "himan" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
               
            ),
            
            "dhote" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
               
            ),
                   
            "raman" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
               
            )
            
         );
         
         echo "<br/>";
         
         /* Accessing multi-dimensional array values */
         echo "<br/>";
         
         echo "Marks for himan in physics : " ;
         echo $marks['himan']['physics'] . "<br />"; 
         
         echo "<br/>";
         
         echo "Marks for dhote in maths : ";
         echo $marks['dhote']['maths'] . "<br />"; 
         echo "<br/>";
        
         echo "Marks for zara in chemistry : " ;
         echo $marks['zara']['chemistry'] . "<br />"; 
         echo "<br/>";
         
         
         
         
         
         
         
         
         
      ?>
      
   </body>
</html>
