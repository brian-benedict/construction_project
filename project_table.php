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
    <table>
        <tr>
            <th>number</th>
            <th>project Name</th>
            <th>project manager</th>
            <th>project duration</th>
            <th>number of workers</th>
            <th>Amount allocated</th>
        </tr><?php 
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
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
    </body>
</html>