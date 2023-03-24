<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $user_name = $_POST['Name'];
  $password = $_POST['password'];
  if(!empty($user_name) && !empty($password) &&!is_numeric($user_name)){
      $user_id = random_num(20);
      $query = "select * from users where user_name ='$user_name' Limit 1";

      $result = mysqli_query($con, $query);


      if($result){
        if($result && mysqli_num_rows($result) > 0 ){
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password){
                $_SESSION['User_id'] = $user_data['User_id'];
                header("Location: index.php");
                die;
            }
        }
      }
      echo"WRONG USER NAME OR PASSWORD";
  }else{
      echo"please enter some valid information";
  }
}
?>
<html>
    <head>
        <title>login</title>
    </head>
<body>
<form action="" method="POST">
    <h1>login</h1>
    <input type="text" name="Name"><br><br>
    <input type="text" name="password"><br><br>
    <button type="text" value="Login">login</button><br><br>
    <a href="sign_up.php">click to sign up</a><br><br>
</form>
</body>
</html>