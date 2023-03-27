<?php
session_start();
include("connection.php");
//include("functions.php");

header('Content-Type: application/vnd-ms-excel');
$filename="workers_data-" .date('Y/m/d H:i:s'). ".xls";
header("Content-Disposition: attachment; filename=\"$filename\" ");
?>
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
