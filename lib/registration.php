<?php

include_once("Database.php");

if(isset($_POST['register'])) //Check if this script was access by not clicking the submit button in the registration section
{
    $host = "tritz";
    $user = "Bookie";
    $password = "bookie";
    $db = "bookie";
    
    $database = new Database($host,$user,$password,$db);
    
    
    
}
else 
{
    header("Location: ../");
}




?>
