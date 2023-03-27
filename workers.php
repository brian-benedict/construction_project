<?php
session_start();
  include("connection.php");
  include("functions.php");

  //if($user_data = check_login($con)){
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $Workers_Name = $_POST['Workers_Name'];
    $Project_working = $_POST['Project_working'];
    $cash_per_week = $_POST['cash_per_week'];
    $Number_of_weeks = $_POST['Number_of_weeks'];
    $amount_to_be_paid = $_POST['amount_to_be_paid'];
    if(!empty($Workers_Name) && !empty($Project_working) && !empty($cash_per_week) ){
        $user_id = random_num(20);
        $query = "insert into workers(Workers_Name,project_name,cash_per_week,Number_of_weeks,Amount_to_be_paid) values('$Workers_Name', '$Project_working','$cash_per_week','$Number_of_weeks','$amount_to_be_paid')";

        mysqli_query($con, $query);
        header("Location: workers_table.php");
        die;
    }else{
        echo"please enter some valid information";
    }
}
  //}
?>
<html>
    <head>
        <title>Workers</title>
    </head>
<body>
<form action="" method="post">
    <h1>WORKERS REGISTRATION</h1>
    enter the worker name<input type="text" name="Workers_Name"><br><br>
    enter project working<input type="text" name="Project_working"><br><br>
    enter cash per week<input type="text" name="cash_per_week"><br><br>
    enter number of weeks<input type="text" name="Number_of_weeks"><br><br>
    enter amount to be paid<input type="text" name="amount_to_be_paid"><br><br>
    <button type="text" value="sign up">Register Worker</button><br><br>
</form>
</body>
</html>