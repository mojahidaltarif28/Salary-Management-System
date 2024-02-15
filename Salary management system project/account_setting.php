<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="salary_management_system"; 
$conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$username=$_COOKIE['username'];
$sqlt="SELECT * FROM `employee_information` WHERE `email`='$username'";
        $result=mysqli_query($conn,$sqlt);
       
        $pass=$_POST['pass'];
        while($res=mysqli_fetch_array($result)){
                $division=$res['division'];
            }
       
     
       
  if($division=="Admin") {  
        if(isset($_POST['submit'])){
   // if($_POST['password']==$_POST['cpassword']){
  
    $sql1="UPDATE `login` SET `pass`='$pass' WHERE `username`='$username'";
    $sql2="UPDATE `employee_information` SET `password`='$pass' WHERE `email`='$username'";
    $update1=mysqli_query($conn,$sql1);
    $update2=mysqli_query($conn,$sql2);
    if($update1){
        if($update2){
           
       header("location:adminhome.php");
        
        }
      }
    header("location:adminhome.php");
      
      
}
  }
  else{
   if(isset($_POST['submit'])){
                // if($_POST['password']==$_POST['cpassword']){
               
                 $sql1="UPDATE `login` SET `pass`='$pass' WHERE `username`='$username'";
                 $sql2="UPDATE `employee_information` SET `password`='$pass' WHERE `email`='$username'";
                 $update3=mysqli_query($conn,$sql1);
                 $update4=mysqli_query($conn,$sql2);
                 if($update3){
                     if($update4){
                        
                    header("location:userhome.php");
                     
                     }
                   }
                  header("location:userhome.php");
                   
                   
             }
        }

?>