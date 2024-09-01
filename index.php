<?php

$con = mysqli_connect("localhost","root", "", "park");
if(!$con) echo "error";
$A = "SELECT department from a where department='A'";
$B = "SELECT department from a where department='B'";
$C = "SELECT department from a where department='C'";
$D = "SELECT department from a where department='D'";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>welcome to thapar</title>
</head>
<body>
<div>
    <div id="main">
        <img src="park1.jpeg" alt="">
        <p id="name">Parking near main gate</p>
        <p id="text">seats available <span id="number"><?php  $query = mysqli_query($con,$A);echo 100-mysqli_num_rows($query);   ?></span> </p>
    </div>
    
    <div id="main">
        <img src="park1.jpeg" alt="">
        <p id="name">F-BLOCK</p>
        <p id="text">seats available <span id="number"><?php  $query = mysqli_query($con,$B);echo 100-mysqli_num_rows($query);   ?></span> </p>
    </div>
    <div id="main">
        <img src="park1.jpeg" alt="">
        <p id="name">nirvana</p>
        <p id="text">seats available <span id="number"><?php  $query = mysqli_query($con,$C);echo 100-mysqli_num_rows($query);   ?></span> </p>
    </div>
    <div id="main">
        <img src="park1.jpeg" alt="">
        <p id="name">Parking near main gate</p>
        <p id="text">seats available <span id="number"><?php  $query = mysqli_query($con,$D);echo 100-mysqli_num_rows($query);   ?></span> </p>
    </div>
    <?php   mysqli_close($con);  ?>   
</div>
</body>
</html>
