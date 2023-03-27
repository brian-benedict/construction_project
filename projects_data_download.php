<?php
session_start();
include("connection.php");
//include("functions.php");

header('Content-Type: application/vnd-ms-excel');
$filename="projects_data-" .date('Y/m/d H:i:s'). ".xls";
header("Content-Disposition: attachment; filename=\"$filename\" ");
?>
<table>
        <tr>
            <th>number</th>
            <th>project Name</th>
            <th>project manager</th>
            <th>project duration</th>
            <th>number of workers</th>
            <th>Amount allocated</th>
        </tr><?php 


//$user_data = check_login($con);
 $query = "select* from projects";
 $result = $con -> query($query);

 if($result -> num_rows > 0){
    while($row = $result -> fetch_assoc()){
        echo"<tr>
        <td>" . $row["project_id"] ."</td>
        <td>" . $row["project_name"] ."</td>
        <td>" . $row["project_manager"] ."</td>
        <td>" . $row["project_duration"] ."</td>
        <td>" . $row["number_of_workers"] ."</td>
        <td>" . $row["amount_allocated"] ."</td>
        </tr>";
}
 }else
 {
    echo"no results";
 }
?>
    </table>