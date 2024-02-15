<!DOCTYPE html>
<html>
    <head>
        <title>
            Profile
        </title>
        <link href="login.php">
    
    <link rel="stylesheet" href="AdminProfile.css">   
    
    
    <script src="https://kit.fontawesome.com/c1e7a1738f.js" crossorigin="anonymous"></script>
    </head>
 <body>
     <div class="full-page" style="height: 850px;">
   <ul type="none"style="display: inline-flex;" >  
       <li style="margin-top:50px">
           <div style="margin-left: 80px;">
               <form class="sub-form" method="POST" action="profileUpdate.php" style="border-radius: 0;border: 2px solid rgb(2, 247, 174);">
               <div class="navbar">
               <nav>  
               <ul>
               <li  type="none" > <button type="submit" name="home" class="sub-option" style="background: none;border:none"><i class="fas fa-home"></i></button></li>
               <li  type="none" > <a href="AdminProfile.php" class="sub-option"><i class="fas fa-sync-alt"></i></a></li>
               <li> <a href="home.php" class="nav-menu"><i class="fas fa-sign-out-alt"></i></a>
                 <div class="sub-logout">
                           <ul style="margin-left: 0px;">
                               <li>
                                   <p10>Log Out</p10>
                               </li>
                           </ul>
                       </div>
                </li>    
            </ul>
             </nav> 
             </div>
               </form>
           </div>
       </li>
 <li style="margin-left: 30px;margin-top:50px">
 <div class="profile-form"  id="profile-form" style=" border-radius: 0;border: 2px solid rgb(2, 247, 174);background-color:black">
            <div id="profile-show-1">
            <form style="display: show;"  >
                    
                    <div class="edit-profile"><br>
                      <a class="edit-profile" onclick="document.getElementById('edit-profile-close').style.display='block';document.getElementById('profile-show-1').style.display='none'" style="background: none;margin-left:90px;margin-top:15px;border:none;width:25px;font-size:25px;cursor:pointer;"  ><i7 style="color:darkturquoise" class="fas fa-user-edit"></i7></a>
                    </div>
                    <?php
                    if(isset($_GET['updatess'])==true){
                        echo'<p8  style="padding-left:300px;border:0.5px solid green;color:rgb(0, 255, 0);background-color:rgba(2, 247, 2, 0.185);;display:block;font-size:115%">Successfully Update</p8>';
                          
                    } 
                    else{
                        echo "";
                    } 
                    ?>
                   
                   <div class="profile-value">
                   <?php   
                            $username=$_COOKIE['username'];
                            
                             $host="localhost";
                             $dbusername="root";
                             $dbpassword="";
                             $dbname="salary_management_system"; 
                             $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                             
                             $sqlj="SELECT * FROM `employee_information` WHERE `email`='$username'";
                             $result=mysqli_query($conn,$sqlj);
                             while($res=mysqli_fetch_array($result)){
                               $id=$res['id'];
                                $fname=$res['first_name'];
                               $surname=$res['surname'];
                               $number=$res['contact_number'];
                               $gender=$res['gender'];
                               $dob=$res['dob'];
                               $nid=$res['national_id'];
                               $passport=$res['passport'];
                               $preadd=$res['pre_address'];
                               $peradd=$res['per_address'];
                               $doj=$res['doj'];
                               $card_number=$res['card_number'];
                               $department=$res['department'];
                               $desig=$res['designation'];
                               $salary=$res['salary'];
                               $email1=$res['email'];
                               $pass1=$res['password'];
                               $current_salary=$res['current_salary'];
                               
                                }                                 
                       ?>
                       <ul type="none">
                          
                         <?php 
                          if(isset($_GET['update'])==true){
                             
                          echo 'return updates()';
                         
                         }?>  
                           
                      <li >
                      <p3 style="margin-left: 96px;" >ID : </p3>
                       <p2 > <?php echo "$id"?></p2><br>
                       </li> 
                     <li> 
                      <p3 style="margin-left: 63px;"  >Name : </p3>
                       <p2 > <?php echo "$fname $surname"?></p2><br>
                       </li>
                       <li>
                       <p3 style="margin-left: 44px;" >Number : </p3>
                       <p2> <?php echo "0$number"?></p2><br>
                       </li>
                       <li>
                       <p3 style="margin-left: 54px;" >Gender : </p3>
                       <p2 > <?php echo "$gender"?></p2><br>
                       </li>
                       <li>
                       <p3 style="margin-left: 81px;" >NID : </p3>
                       <p2 > <?php echo "$nid"?></p2><br>
                       </li>
                       <li>
                       <p3 style="margin-left: 44px;" >Passport : </p3>
                       <p2 > <?php echo "$passport"?></p2><br>
                       </li>
                       <li>
                       <p3 >Dath of Birth : </p3>
                       <p2 > <?php echo "$dob"?></p2><br>
                       </li>
                       <li>
                       <p3 style="margin-left: 50px;" >Address : </p3>
                       <p2 > <?php echo "$preadd"?></p2><br>
                       </li>
                       <li>
                       <p3 >Card Number : </p3>
                       <p2 > <?php echo "$card_number"?></p2><br>
                       </li>
                       <li>
                       <p3 style="margin-left: 17px;" >Department : </p3>
                       <p2 > <?php echo "$department"?></p2><br>
                       </li>
                       <li>
                       <p3 style="margin-left: 16px;" >Designation : </p3>
                       <p2 > <?php echo "$desig"?></p2><br>
                       </li>
                       <li>
                       <p3 style="margin-left: 10px;" >Basic Salary : </p3>
                       <p2 > <?php echo "$salary"?></p2><br>
                       </li>
                       <li>
                       <p3 style="margin-left: 0;font-size:23px" >Current Salary : </p3>
                       <p2 > <?php echo "$current_salary"?></p2><br>
                       </li>
                       <li>
                       <p3 style="margin-left: 13px;" >Joining Date : </p3>
                       <p2 > <?php echo "$doj"?></p2><br>
                       </li>
                       </ul>
                   </div>
                     
                      
                            
                    
                        <div class="display1">
                           
                            <?php   
                            $username=$_COOKIE['username'];
                            
                             $host="localhost";
                             $dbusername="root";
                             $dbpassword="";
                             $dbname="salary_management_system"; 
                             $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                             
                             $sqlj="SELECT * FROM `employee_information` WHERE `email`='$username'";
                             $result=mysqli_query($conn,$sqlj);
                             while($res=mysqli_fetch_array($result)){
                               
                               $img=$res['image'];
                               echo " 
                               <img src='{$res['image']}' width= '150px'height='150px'border='1px solid rgb(2, 247, 2)'cursor= 'zoom-in'  >";
                             }
                                  
                       ?>
                        </div>
                        
                   
                </form>
                </div>
                <div id="edit-profile-close" style="display: none;">
                <form action="profileUpdate.php" method="POST"  id="edit-profile-form"class="edit-profile-form-css" enctype="multipart/form-data">
                <div class="profile-cls">
                      <a onclick="document.getElementById('edit-profile-close').style.display='none';document.getElementById('profile-show-1').style.display='block'" id="profile-close"  style="background: none;margin-left:20px;border:none;width:30px;font-size:30px;cursor:pointer;" ><i7 style="color: rgb(4, 157, 252);" class="fas fa-arrow-left"></i7></a>
                    </div> 
                   
                <div class="update-profile">
                    <input type='text' name="fname" class='input-field' placeholder='First Name' value="<?php echo"$fname" ?>" autocomplete="off" required>
                    <input type='text' name="sname" class='input-field' placeholder='Surname ' value="<?php echo"$surname" ?> " autocomplete="off"required>
                    <input type='text' name="contact" class='input-field' placeholder='Contact Number ' value="<?php echo "0$number" ?> "required>
                    <div class="gender">

                            <p3 style="color: rgb(7, 204, 253);margin-left:28px;"><label>Gender:</label></p3>
                            <p2> <input type="radio" class="radio" name="gender" value="Male" required  <?php if($gender=="Male"){echo "checked";} ?>  /> Male
                                <input type="radio" class="radio" name="gender" value="Female" required <?php if($gender=="Female"){echo "checked";} ?> /> Female
                                <input type="radio" class="radio" name="gender" value="Custom" required <?php if($gender=="Custom"){echo "checked";} ?>/> Custom
                            </p2>
                    </div>
                    <br>
                    <div class="ld"><label>Date Of Birth:</label>
                            <br/>
                            <input type='date' name="dob" class='dob' placeholder='date Of Birth ' value="<?php echo"$dob" ?>"required>
                    </div>
                    <div class="ld"><label>NID:</label>
                            <br/>
                    <input style="margin-left: 2px;margin-top:2px;width:372px" type='text' name="national" class='input-field' placeholder='National ID Number' value="<?php echo"$nid" ?>"required>
                    </div>
                    <div class="ld"><label>Passport Number:</label>
                            <br/>
                   <input style="margin-left: 2px;margin-top:2px;width:372px"type='text' name="passport" class='input-field' placeholder='Passport Number (optional)'value="<?php echo"$passport" ?>">
                    </div>
                    <div class="ld"><label>Address:</label>
                            <br/>
                   <input style="margin-left: 2px;margin-top:2px;width:372px"type='text' name="pre_add" class='input-field' placeholder=' Address' value="<?php echo "$preadd"?>" required></input>
                    </div>
                    <div class="ld"><label>Card Number:</label>
                            <br/>
                   <input style="margin-left: 2px;margin-top:2px;width:372px" type="text" name="card" class='input-field' placeholder='Card Number' value="<?php echo"$card_number" ?>" required>
                    </div>
                   <div class="img-update" >
                            <p6 > <label class="image1">Uploade image:</label>

                            </p6>
                            <input  type="file" name="file1" id="file-1" accept="image/*" onchange="showPreview(event);" class="image" src="<?php echo'$img' ?>">
                            <button type='submit' name="submit" class='submit-btn' onclick="document.getElementById('profile-form').style.display='block'"  >Update</button>
                              
                        </div>
                           
                        
                   <div class="display2">
                            <h3 class="my-img"> </h3>
                            
                            <img src="<?php echo "$img" ?>" height="200px" width="200px" class="my-img" id="file-1-display" style="width: 200px;height: 200px;border:0.5px solid rgb(2, 247, 2);" >
                        </div>
                        
                        

                 </div>

                </form>
                </div>

        </div>
          </li>
          <li style="margin-left: 12px;margin-top:50px">
           <div>
               <form class="sub-form" method="POST" action="profileUpdate.php" style="border-radius: 0;border: 2px solid rgb(2, 247, 174);">
               <div class="navbar">
               <nav>  
               <ul>
               
            </ul>
             </nav> 
             </div>
               </form>
           </div>
       </li>
        </ul>
        </div>
 </body>
 <script>
            var a;
            function show_hide(){
                if(a==1)
                {
                    document.getElementById("menu-form").style.display="block";
                    document.getElementById("menu-bt").style.color="rgb(4, 157, 252)";             
                    return a=0;

                }
                else{
                    document.getElementById("menu-form").style.display="none";
                    document.getElementById("menu-bt").style.color="white";          
                    return a=1;
                }
            }
            
        </script>
        <script>
            var a;
            function edit_profile(){
                if(a==1)
                {
                    document.getElementById("menu-form").style.display="block";
                   
                   
                    document.getElementById("menu-bt").style.color="rgb(4, 157, 252)";             
                    return a=0;

                }
                else{
                    document.getElementById("menu-form").style.display="none";
                    document.getElementById("menu-bt").style.color="white";          
                    return a=1;
                }
            }
            
        </script>
        
        <script>
        function showPreview(event) {
    
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-1-display");
                preview.src = src;


            }
        }
    </script>
    
</html>