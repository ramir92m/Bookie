<?php
    ob_start();
    session_start();
    if(!$_POST['username'] == '' || !$_POST['password'] == '' )
    {
       header("Location: ../main/");
       $_SESSION['userauth'] = $_POST['username'];
    }
    else
    {
        header("Location: ../index.php?err=userlog");
    }
    ob_flush();
    
?>
