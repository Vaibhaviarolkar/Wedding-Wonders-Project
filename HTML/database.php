<?php

$hostName="localhost";

$dbUser="root";

$dbPassword="";

$dbName="wedding_wonders";

$conn=mysqli_connect($hostName , $dbUser ,  $dbPassword , $dbName,3308);

if(!$conn)
{

    die("Something Went Wrong");
}

?>