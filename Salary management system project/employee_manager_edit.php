<?php
$id = $_POST["id"];
$designation = $_POST["designation"];
$division = $_POST["division"];
$addsalary=$_POST["addsalary"];
$conn = mysqli_connect("localhost","root","","salary_management_system") or die("Connection Failed");

$sql1="SELECT * FROM `employee_information` WHERE `id` = '$id'";
    $qu= mysqli_query($conn, $sql1) or die("SQL Query Failed.");
    while($row = mysqli_fetch_assoc($qu)){
        $current_salary=$row["current_salary"];
        $username=$row["email"];
         $desi=$row["designation"];
    }
    $jobcode="SELECT * FROM `job_code` WHERE `designation`='$designation'";
    $query= mysqli_query($conn, $jobcode) or die("SQL Query Failed.");
    while($row = mysqli_fetch_assoc($query)){
        $basic_salary=$row["Salary"];
       
    if($desi==$designation){
      $current_salary=$current_salary+$addsalary;
    }
    else{
      $current_salary=$basic_salary;
    }
  }
    
$sql = "UPDATE `employee_information` SET `designation`='$designation',`salary` = '$basic_salary',`current_salary`='$current_salary',`division`='$division' WHERE `id`='$id'";
$sql2 = "UPDATE `allowance` SET `basic_salary` = '$basic_salary', `current_salary`='$current_salary' WHERE `id` = '$id'";
$sql3 = "UPDATE `deduction` SET `basic_salary` = '$basic_salary', `current_salary`='$current_salary' WHERE `id` = '$id'";
$sql4 = "UPDATE `login` SET `devision` = '$division'  WHERE `username` = '$username'";
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