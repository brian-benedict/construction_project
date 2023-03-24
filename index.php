<?php 
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>this is my index page</h1>
        <h2><a href="projects.php">projects</a><h2>
        <h2><a href="logout.php">logout</a><h2>
            <br>
        hello, username.
        <br><br>
    </body>
</html>
