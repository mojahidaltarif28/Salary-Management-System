<?php
$id = $_POST["id"];
$conn = mysqli_connect("localhost","root","","salary_management_system") or die("Connection Failed");

$sql1="SELECT * FROM `employee_information` WHERE `id` = '$id'";
    $qu= mysqli_query($conn, $sql1) or die("SQL Query Failed.");
    while($row = mysqli_fetch_assoc($qu)){
        $username=$row["email"];
    }
    
$sql = "DELETE FROM `employee_information`  WHERE `id`='$id'";
$sql2 = "DELETE FROM `allowance` WHERE `id` = '$id'";
$sql3 = "DELETE FROM `deduction` WHERE `id` = '$id'";
$sql4 = "DELETE FROM `login`   WHERE `username` = '$username'";
if(mysqli_query($conn, $sql)){
  
  mysqli_query($conn, $sql2);
  mysqli_query($conn, $sql3);
  mysqli_query($conn, $sql4);
  echo 1;
  
}
else{
  echo 0;
}

?>