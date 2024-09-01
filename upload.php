<?php

$con = mysqli_connect("localhost","root", "", "park");
if(!$con) echo "error";
if(isset($_GET["depart"])){ 
    $depart = $_GET["depart"];
    if(isset($_GET["i"])) {
        $in_out = $_GET["i"];
        $sql = "INSERT INTO a VALUES('i','$depart')";
    }else{
        $sql = "DELETE FROM a WHERE department='$depart' LIMIT 1";
    }
    $query = mysqli_query($con,$sql);
    if(!$query) echo mysqli_error($con);
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="depart">position of device</label>
        <select name="depart" id="">
            <option value="A">near main gate</option>
            <option value="B">nirvana</option>
            <option value="C">f block</option>
            <option value="D">cos</option>
        </select>
        <br><br>
        <label for="i">car entered</label>
        <input type="checkbox" name="i" id="">
        <br><br>
        <button type="submit">submit</button>
    </form>
</body>
</html>
