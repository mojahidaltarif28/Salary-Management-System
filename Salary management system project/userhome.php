<!DOCTYPE html>
<html>

<head>
    <title>User home</title>
    <meta charset="UTF-8">
    <link href="login.php">
    <link rel="stylesheet" href="adminhome.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="accountsetting.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://kit.fontawesome.com/c1e7a1738f.js" crossorigin="anonymous"></script>
</head>

<body>


    <div class="full-page" style="height: 1200px;">

        <div class="navbar" style="padding-top: 0;padding-bottom:5px;border:2px solid rgb(2, 247, 2);border-top:0">
            <div class="display"style="border:none;margin-right:160px" >
            <form style="margin-left:60px;width:750px;border:none" >
            <a href="#" class="nav-menu" onclick="document.getElementById('show-account').style.display='block';document.getElementById('profile-form').style.display='none';document.getElementById('menu-form').style.display='none'"; style="color: white;margin-right:3px;font-size:30px"><i5 class="fas fa-user-cog"></i5></a>
               
                       <?php   
                            $username=$_COOKIE['username'];
                            
                             $host="localhost";
                             $dbusername="root";
                             $dbpassword="";
                             $dbname="salary_management_system"; 
                             $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                             
                             $sql="SELECT * FROM `employee_information` WHERE `email`='$username'";
                             $result=mysqli_query($conn,$sql);
                             while($res=mysqli_fetch_array($result)){
                               $fname =$res['first_name'] ;
                               $sname=$res['surname'];
                               $email=$res['email'];
                               $pass=$res['password'];
                              
                               echo " 
                               <img src='{$res['image']}' width= '55px'height='55px'border='1px solid rgb(2, 247, 2)'cursor= 'zoom-in' border-radius= '100%' >";
                             }
                                  
                       ?>
                           
                           
                              <p8 style="align-self:center;margin-left:10px;color:white;font-size:125%"><?php echo "$fname $sname" ?></p8>
                     
            </form>       
            </div>
                   
            <ul style="margin-left: 1px;padding-right:0;margin-right:0">
            
            
                <li> <a href="userhome.php" class="nav-menu"><i3 class="fas fa-home"></i3></a></li>
                <li> <a href="#" class="nav-menu"><i3 class="fab fa-facebook-messenger"></i3></a></li>
                <li> <a href="#" class="nav-menu"><i3 class="far fa-paper-plane"></i3></a></li>
                
                
                <li> <a href="#" class="nav-menu"><i3 class="fas fa-bell"></i3></a>
                <li> <a href="#" class="nav-menu"><i3 class="far fa-user-circle"></i3></a>
                <div class="sub-user-menu" style="right:78px">
                  <ul style="padding-right: 15px;padding-left: 15px;">
                  <table>  
                  <tr>
                           <td align="center">
                      <?php   
                               
                             $host="localhost";
                             $dbusername="root";
                             $dbpassword="";
                             $dbname="salary_management_system"; 
                             $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                             
                             $sqlj="SELECT * FROM `employee_information` WHERE `email`='$username'";
                             $result=mysqli_query($conn,$sqlj);
                             while($res=mysqli_fetch_array($result)){
                               $designation =$res['designation'] ;
                                }
                                   
                       ?>
                           </td>
                            </tr>
                            <tr>
                           <td align="center">
                        <p9 style="margin-bottom: 10px;"><?php echo "  $designation " ?></p9>
                            </td>
                      </tr>
                      <tr><td align="center">
                      <li ><a href="AdminProfile.php" style="margin-top: 6px;padding-left:6px;padding-right:3px;text-decoration:none" class="btn-sub-menu-user-profile" onclick="document.getElementById('show-account').style.display='none';document.getElementById('profile-form').style.display='block';document.getElementById('menu-form').style.display='none'">profile</a></li>
                      </td>
                      </tr>
                            </table>
                    </ul>
                </div>
                </li>
                 <li> <a href="home.php" class="nav-menu"><i3 class="fas fa-sign-out-alt"></i3></a>
                       <div class="sub-logout">
                           <ul style="margin-left: 15px;">
                               <li>
                                   <p10>Log Out</p10>
                               </li>
                           </ul>
                       </div>
                </li>
            </ul>
            
            
        </div>
        <ul type="none" style="display: inline-flex;">
       <li style="margin-top: -25px;"><button class="menu-btn" id="menu-btn" name="menu-btn" onclick="show_hide(); document.getElementById('show-account').style.display='none';document.getElementById('profile-form').style.display='none';" style="width:auto; "><i id="menu-bt" class="fas fa-bars"></i></button></li> 
        <li >
        <div id="account-form" >
        <form class="account-setting-form" id="show-account" style="margin-top: -25px;" >
        <div class="profile-cls">
                      <a onclick="document.getElementById('show-account').style.display='none';document.getElementById('edit-account').style.display='none';" id="profile-close"  style="background: none;margin-left:420px;border:none;width:20px;font-size:20px;cursor:pointer;" ><i7 style="color: red;" class="fas fa-times"></i7></a>
                    </div>
                    <div class="edit-profile">
                      <a class="edit-profile" onclick="document.getElementById('edit-account').style.display='block';document.getElementById('show-account').style.display='none'" style="background: none;margin-left:10px;border:none;width:25px;font-size:25px;cursor:pointer;"  ><i7 style="color:darkturquoise" class="fas fa-user-edit"></i7></a>
                    </div>
                    
            <div class="account-setting">
                <ul id="account-menu">
                   
                    <nav1>
                         <label style="color: white;">Email:</label><br>
                         <p class="input1" ><?php echo "$email" ?></p> 
                         <label style="color: white;">Password:</label><br>
                         <p class="input1" ><?php echo "$pass" ?></p>
                           

                    </nav1>
                </ul>
            </div>
        </form>
        <form class="account-setting-form" action="account_setting.php" method="POST"  enctype="multipart/form-data" id="edit-account" style="display: none;" >
        <div class="profile-cls">
            <br>
                      <a onclick="document.getElementById('show-account').style.display='block';document.getElementById('edit-account').style.display='none'" id="profile-close"   style="background: none;margin-left:15px;border:none;width:20px;font-size:30px;cursor:pointer;" ><i7 style="color: rgb(3, 152, 252);"  class="fas fa-arrow-left"></i7></a>
                    </div>

                    
            <div class="account-setting">
                <ul id="account-menu">
                   
                    <nav1>
                         <label style="color: white;">Email:</label><br>
                         <p class="input1" ><?php echo "$email" ?></p> 
                         <label style="color: white;">Password:</label><br>
                         <input type="text" class="input" name="pass" value="<?php echo "$pass" ?>"required>
                         <button type='submit' name="submit" class='submit-s' onclick="document.getElementById('account-setting-form').style.display='block'" >Save</button>
                            

                    </nav1>
                </ul>
            </div>
        </form>
        </div>
        </li>    
    </ul>
        <div id="menu-form" style="margin-top: -25px;" >
        <form class="option-form" >
            
            <div class="option">
                <ul id="menu-item">
                    <nav1>
                        <li><button class='button'>Employee Manager</button></li>
                        <li><button class='button'>Search Employee</button></li>
                        <li><button class='button'>Update Job Code</button></li>
                        <li><button class='button'>Allowance</button></li>
                        <li><button class='button'>Deduction</button></li>
                        <li><button class='button'>Payment</button></li>
                        <li><button class='button'>Audit Trail</button></li>
                        <li><button class='button'>Attendance</button></li>
                    </nav1>
                </ul>
            </div>
        </form>
        </div>
        
                   
 
         </div>
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
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-1-display");
                preview.src = src;


            }
        }
    </script>
</body>

</html>