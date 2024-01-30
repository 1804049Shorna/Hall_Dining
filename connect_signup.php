<?php
$host="localhost";
$user="root";
$pass="";
$db="diningdb";

$con = mysqli_connect($host,$user,$pass,$db);

if($con)
{
    echo ""; 
}
else 
{
    echo "DB Not Connected";
}

?>