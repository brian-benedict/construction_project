<?php
session_start();
  include("connection.php");
  include("functions.php");

  //if($user_data = check_login($con)){
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $Project_Name = $_POST['Project_Name'];
    $Project_Manager = $_POST['Project_Manager'];
    $Project_Duration = $_POST['Project_Duration'];
    $Number_Of_Workers = $_POST['Number_Of_Workers'];
    $Amount_Allocated = $_POST['Amount_Allocated'];
    if(!empty($Project_Name) && !empty($Project_Manager) && !empty($Project_Duration) ){
        $user_id = random_num(20);
        $query = "insert into projects(project_name,project_manager,project_duration,number_of_workers,amount_allocated) values('$Project_Name', '$Project_Manager','$Project_Duration','$Number_Of_Workers','$Amount_Allocated')";

        mysqli_query($con, $query);
        header("Location: index.php");
        die;
    }else{
        echo"please enter some valid information";
    }
}
  //}
?>
<html>
    <head>
        <title>projects</title>
    </head>
<body>
<form action="" method="post">
    <h1>PROJECT REGISTRATION</h1>
    enter the poject name<input type="text" name="Project_Name"><br><br>
    enter project manager<input type="text" name="Project_Manager"><br><br>
    enter project duration<input type="text" name="Project_Duration"><br><br>
    enter number of workers<input type="text" name="Number_Of_Workers"><br><br>
    enter amount allocated<input type="text" name="Amount_Allocated"><br><br>
    <button type="text" value="sign up">Register Project</button><br><br>
</form>
</body>
</html>