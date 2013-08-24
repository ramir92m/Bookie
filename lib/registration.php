<?php

include_once("Database.php");

if(isset($_GET['register'])) //Check if this script was access by not clicking the submit button in the registration section
{
    $host = "tritz";
    $user = "Bookie";
    $password = "bookie";
    $db = "bookie";
    
    $database = new Database($host,$user,$password,$db);
    
    if(trim($_POST['username']) == "" || trim($_POST['password']) == "" || trim($_POST['fullname']) == "" || trim($_POST['email']) == "" )
    {
        
        $regDataArr = Array(
                               "" => $_POST[''],
                        
                                      );
    }
    else
    {
        
    }
    
}
else 
{
    header("Location: ../");
}




?>
