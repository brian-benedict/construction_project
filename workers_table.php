<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $project_name = $_POST['project_name'];
}
?>    
<html>
    <head>
        <title></title>
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
                font-family: monospace;
                color: #eb4034;
                font-size: 25px;
                text-align: left;
            }
            th{
                background-color: #eb4034;
                color: white;

            }
            tr:nth-child(even){
                background-color: #ededed;
            }
        </style>
    </head>
    <body>
<form action="" method="post">
    <h1>WORKERS SEARCH</h1>
    enter the project name<input type="text" name="project_name"><br><br>
    <button type="text" value="search">Search</button><br><br>
</form>
<div>
    <button> <a href="workers_data_download.php" target="_blank">export data</a></button>
</div>
    <table>
        <tr>
            <th>number</th>
            <th>Workers_Name</th>
            <th>project_name</th>
            <th>cash_per_week</th>
            <th>Number_of_weeks</th>
            <th>Amount_to_be_paid</th>
            <th>Date Registered</th>
        </tr><?php 
session_start();
include("connection.php");
include("functions.php");

//$user_data = check_login($con);



    if(!empty($project_name)) {    
        $query = "select* from workers where project_name = '$project_name'";
        $result = $con -> query($query);
        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo"<tr>
                <td>" . $row["ID"] ."</td>
                <td>" . $row["Workers_Name"] ."</td>
                <td>" . $row["project_name"] ."</td>
                <td>" . $row["cash_per_week"] ."</td>
                <td>" . $row["Number_of_weeks"] ."</td>
                <td>" . $row["Amount_to_be_paid"] ."</td>
                <td>" . $row["Time_Registered"] ."</td>
                </tr>";
        }
        }else
        {
            echo"<tr><td>No Records found...</td></tr>";
        }
    }else{
        $query = "select* from workers";
        $result = $con -> query($query);
        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo"<tr>
                <td>" . $row["ID"] ."</td>
                <td>" . $row["Workers_Name"] ."</td>
                <td>" . $row["project_name"] ."</td>
                <td>" . $row["cash_per_week"] ."</td>
                <td>" . $row["Number_of_weeks"] ."</td>
                <td>" . $row["Amount_to_be_paid"] ."</td>
                <td>" . $row["Time_Registered"] ."</td>
                </tr>";
        }
        }else
        {
            echo"<tr><td>No Records found...</td></tr>";
        }
    }
?>
    </table>    
    </body>
</html>