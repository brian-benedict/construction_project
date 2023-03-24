<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbDatabase = "construction_project";

if(!$con=mysqli_connect($dbHost,$dbUser,$dbPass,$dbDatabase))
{
    die("failed to connect");
}
?>