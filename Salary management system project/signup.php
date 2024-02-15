<?php
session_start();
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="salary_management_system"; 
$conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
  $_SESSION['message']='';

if($_SERVER['REQUEST_METHOD']=='POST'){
   // if($_POST['password']==$_POST['cpassword']){
     
    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
    $fullname="$fname $sname ";
    $code=$_POST['job_code'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $national=$_POST['national'];
    $passport=$_POST['passport'];
    $pre_add=$_POST['pre_add'];
    $per_add=$_POST['per_add'];
    $doj=$_POST['doj'];
    $card=$_POST['card'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $image='images_uploaded/'.$_FILES['file']['name'];
    $email=mysqli_real_escape_string($conn,$email);
    $image=mysqli_real_escape_string($conn,$image);
    
    
    if(preg_match("!image!",$_FILES['file']['type'])){

        if(copy($_FILES['file']['tmp_name'],$image)){
          $_SESSION['email']=$email;
          $_SESSION['file']=$image;
          
          $sqlt="SELECT * FROM `job_code` WHERE `code`='$code'";
           $result1=mysqli_query($conn,$sqlt);
           
             
           
                if(mysqli_fetch_array($result1)>0){ 


          
          
           $sqlj="SELECT * FROM `job_code` WHERE `code`='$code'";
           $result=mysqli_query($conn,$sqlj);
           while($res=mysqli_fetch_array($result)){
           
            $div=$res['division'];
            $coded=$res['code'];
            $department=$res['department'];
            $designation=$res['designation'];
            $salary=$res['Salary'];
            $sql="INSERT INTO `employee_information`( `first_name`, `surname`,`full_name`, `email`, `job_code`, `contact_number`, `dob`, `national_id`, `passport`, `pre_address`, `per_address`, `doj`, `card_number`,`image`,`gender`,`department`,`designation`,`salary`,`current_salary`,`division`,`password`) VALUES ('$fname','$sname','$fullname','$email','$code','$contact','$dob','$national','$passport','$pre_add','$per_add','$doj','$card','$image','$gender','$department','$designation','$salary','$salary','$div','$password')";
            $sql2="INSERT INTO `login`(`username`, `pass`,`devision`) VALUES ('$email','$password','$div')";
           
           
          if(mysqli_query($conn,$sql)){
               mysqli_query($conn,$sql2);
               header("location:home.php?success=1");
            die;
            
        }else{
            header("location:SignUphtml.php?email_error=1");
            
            die;
           
        }
    
        
    }
       
                  }else{
                     header("location:SignUphtml.php?wrong_code=1");
                  }
                
                  



      } else{
            $_SESSION['message']="file upload failed!";
        }

    }
    else{
        $_SESSION['message']="Please upload only JPG,PNG or GIF file!";
    }

    }
  /*  else{
        echo "password not match ";
        $_SESSION['message']="Password did not match!";
    }

}  */ 


?>