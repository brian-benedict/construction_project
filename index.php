<?php 
session_start();
include("connection.php");
include("functions.php");

//$user_data = check_login($con);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico">

</head>
<body><br><br>
<div class="b"><br><br>
<nav>
  <div class="logo">
    <img src="logo.jpg" alt="Company Logo">
  </div>
  <div class="center-menu">
    <div class="first">
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Registration</a>
            <div class="dropdown-content">
              <a href="workers.php">Workers Registration</a>
              <a href="projects.php">Project Registration</a>
            </div>
          </li></div>
    <div class="sec">
    <a href="project_table.php">Projects</a></div>
    <div class="third">
    <a href="workers_table.php">Worker's Manual</a></div>
  </div>
  <div class="user-menu">
    <img src="user.png" alt="User Logo">
  </div>
</nav><br><br><br><br><br><br><br><br><br>
<div class="t">
    <table>
          <tr>
            <td>Number of workers</td>
            <td>5788</td>
          </tr>
          <tr>
            <td>Number of projects</td>
            <td>50</td>
          </tr>
          <tr>
            <th>Projects Completed</th>
            <th>60</th>
          </tr>
    </table>
</div>
</div>
<style>
body{
        background-image: url(back.jpg);
        background-size: cover;
        padding: 20px;
        background-attachment: fixed;
    }
    nav {
  background-color: #000000b9;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 35px;
  border-radius: 50px;
}
.first{ 
   padding: 20px;
   border-radius: 20px;
   background-color: #000000b9; 
   align-items: center;
}
.first:hover{
    transition: 0.5s;
    background-color: rgba(255, 255, 255, 0.425);
}
.sec{ 
   padding: 20px;
   border-radius: 20px;
   background-color: #000000b9; 
   align-items: center;
}
.sec:hover{
    transition: 0.5s;
    background-color: rgba(255, 255, 255, 0.425);
}
.third{ 
   padding: 20px;
   border-radius: 20px;
   background-color: #000000b9; 
   align-items: center;
}
.third:hover{
    transition: 0.5s;
    background-color: rgba(255, 255, 255, 0.425);
}
.b{
   border: solid 0.5px; 
   height: 600px;
   padding: 20px;
   border-radius: 30px;
   background-color: rgba(0, 0, 0, 0.514);
}

.logo {
  display: flex;
  align-items: center;
  border-radius: 30px;
}

.logo img {
  height: 40px;
}
.center-menu {
  display: flex;
  justify-content: center;
}
.center-menu a {
  color: #fff;
  margin: 0 20px;
  text-decoration: none;
}
.user-menu img {
  height: 30px;
}
img{
    border-radius: 50px;
}
table, th, td{
    color: white;
    align-items: center;
    padding: 10px;
    text-align: center;
    border: 0px solid
}
table {
  width: 100%;
  background-color: rgba(21, 22, 15, 0.863);
  border-radius: 20px;
}
.t{
    align-items: center;
    text-align: center;
    margin: auto;
    padding: 20px;
}
th, td{
    border-radius: 20px;
    background-color: rgba(0, 0, 0, 0.623);
}
li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #000000a8;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 20px;
  padding: 10px;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  border-radius: 15px;
}

.dropdown-content a:hover {
    background-color: #f1f1f159;
    transition: 0.5s;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style> 
</body>
</html>