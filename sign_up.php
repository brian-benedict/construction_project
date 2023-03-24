<?php
session_start();
  include("connection.php");
  include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['Name'];
    $password = $_POST['password'];
    $description = $_POST['description'];
    if(!empty($user_name) && !empty($password) && !empty($description) &&!is_numeric($user_name)){
        $user_id = random_num(20);
        $query = "insert into users(User_id,user_name,password,description) values('$user_id', '$user_name', '$password', '$description')";

        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    }else{
        echo"please enter some valid information";
    }
}
?>
<html>
    <head>
        <title>signup</title>
    </head>
<body>
<form action="" method="post">
    <h1>sign up</h1>
    <input type="text" name="Name"><br><br>
    <input type="text" name="password"><br><br>
    <input type="text" name="description"><br><br>
    <button type="text" value="sign up">sign up</button><br><br>
    <a href="login.php">click to Login</a><br><br>
</form>
</body>
</html>