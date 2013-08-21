<?php

include("lib/Database.php");


$database = new Database("tritz","Bookie","bookie","bookie");
$arr = Array(
                "user_ID" => "3912",
                "firstName"  => "Ramir",
                "lastName" => "Manarpaac"
                );

$database->connect();

$database->insertQuery($arr, "user_account");

$database->close();


?>
