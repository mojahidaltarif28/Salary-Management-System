<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="salary_management_system"; 
$conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$username=$_COOKIE['username'];
$sqlt="SELECT * FROM `employee_information` WHERE `email`='$username'";
        $result=mysqli_query($conn,$sqlt);
        while($res=mysqli_fetch_array($result)){
            $img=$res['image'];
            $division=$res['division'];
        }


if(isset($_POST['submit'])){
   // if($_POST['password']==$_POST['cpassword']){
    
    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
    $fullname="$fname $sname ";
    $fullname="$fname $sname ";
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $national=$_POST['national'];
    $passport=$_POST['passport'];
    $pre_add=$_POST['pre_add'];    
    $card=$_POST['card'];
    $gender=$_POST['gender'];
    
    
    

    if( $_FILES['file1']['name']==NULL){
        
        $sqlj="SELECT * FROM `employee_information` WHERE `email`='$username'";
        $result=mysqli_query($conn,$sqlj);
        while($res=mysqli_fetch_array($result)){
            $id=$res['id'];
        }
       
$sql="UPDATE `employee_information` SET `first_name`='$fname',`surname`='$sname',`full_name`='$fullname',
`contact_number`='$contact',`gender`='$gender',`dob`='$dob',`national_id`='$national',
`passport`='$passport',`pre_address`='$pre_add',
`card_number`='$card' WHERE `id`='$id' ";
$update=mysqli_query($conn,$sql);

if($update){
  header("location:AdminProfile.php?updatess=1");
}
header("location:AdminProfile.php?updatess=1");


    }
    else{
        $image='images_uploaded/'.$_FILES['file1']['name'];   
        $image=mysqli_real_escape_string($conn,$image);
    if(copy($_FILES['file1']['tmp_name'],$image)){
        
        $_SESSION['file1']=$image;
            
            $sqlj="SELECT * FROM `employee_information` WHERE `email`='$username'";
                             $result=mysqli_query($conn,$sqlj);
                             while($res=mysqli_fetch_array($result)){
                                 $id=$res['id'];
                             }
                            
            $sql="UPDATE `employee_information` SET `first_name`='$fname',`surname`='$sname',`full_name`='$fullname',
            `contact_number`='$contact',`gender`='$gender',`dob`='$dob',`national_id`='$national',
            `passport`='$passport',`pre_address`='$pre_add',
            `card_number`='$card',`image`='$image' WHERE `id`='$id' ";
            $update=mysqli_query($conn,$sql);

            if($update){
                       header("location:AdminProfile.php?updatess=1");
            }
             


        
}
}
}
?>
<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="salary_management_system"; 
$conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$username=$_COOKIE['username'];
$sqlt="SELECT * FROM `employee_information` WHERE `email`='$username'";
        $result=mysqli_query($conn,$sqlt);
        while($res=mysqli_fetch_array($result)){
           
            $division=$res['division'];
        }


if(isset($_POST['home'])){
    if($division=="Admin"){
        echo $division;
        header("location:adminhome.php");
    }
    else{
        header("location:userhome.php");
    }
}

?>