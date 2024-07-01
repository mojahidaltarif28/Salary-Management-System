<?php

$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$devision1="Admin";
$devision2="User";

if(!empty($username)){
    if(!empty($password)){
      $host="localhost";
      $dbusername="root";
      $dbpassword="";
      $dbname="salary_management_system"; 
      $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
      if(mysqli_connect_error()){
          header("location:home.php");
          die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
      }
      else{
          $sql1="SELECT * FROM `login` WHERE `username`='$username' AND `pass`='$password' AND `devision`='$devision1'";
          $query_run1=mysqli_query($conn,$sql1);
          $sql2="SELECT * FROM `login` WHERE `username`='$username' AND `pass`='$password' AND `devision`='$devision2'";
          $query_run2=mysqli_query($conn,$sql2);
          if(mysqli_fetch_array($query_run1)>0){
                 isset($_POST['username']);
                 
                  setcookie('username',$username,'password',$password,time(+60*60*7));
                 
                  session_start();        
                   header('Location:adminhome.php');
              
          }
          else if(mysqli_fetch_array($query_run2)>0){
            isset($_POST['username']);
                 
            setcookie('username',$username,'password',$password,time(+60*60*7));
           
            session_start();   
              header('Location:userhome.php');

          }
          else{
           echo ' <script src="login.js"></script>';
               header("Location:home.php?error=1");
              
            }
        }
        $conn->close();

    }else{
        header("location:home.php");
    }
    
}else{
    header("location:home.php");
}


?>
