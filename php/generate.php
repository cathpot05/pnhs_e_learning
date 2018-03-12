<?php

    
    
    

    if(isset($_POST['generate']))
    {
       
        $uppr_case = "TEACHER2018";
        $max_num   = "200";
 
       
        $generated_uppr_case = substr(($uppr_case), 0, 7);
    
    
    
    
    $mixed = "$generated_uppr_case$max_num";
   }
    
   

    


    
        

        

?>

<html>
<form action = "TeacherAddAccount.php" method = "post">
    
    <input type = "submit" name = "generate" value="generate" >
    
    
    </form>
    
   

</html>
    
    