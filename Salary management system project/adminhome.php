<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <title>admin home</title>
    <link rel="stylesheet" href="employee_manager.css">
    <link href="login.php">
    <link rel="stylesheet" href="employee_manager.php">
    <link rel="stylesheet" href="adminhome.css">
    <link rel="stylesheet" href="accountsetting.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://kit.fontawesome.com/c1e7a1738f.js" crossorigin="anonymous"></script>
</head>

<body>


    <div class="full-page" style="height: 1200px; "   >

    <div class="navbar" style="padding-top: 0;padding-bottom:4px;border:2px solid rgb(8, 243, 8);border-top:0">
            <div class="display" style="border:none;margin-right:160px">
                <form style="margin-left:0px;width:740px;border:none" >
            <a href="#" class="nav-menu" onclick="document.getElementById('show-account').style.display='block';document.getElementById('profile-form').style.display='none';document.getElementById('menu-form').style.display='none';"; style="margin-right:3px;font-size:32px;color:white"><i5 class="fas fa-user-cog"></i5></a>
               
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
                           
                           
                              <p8 style="align-self:center;margin-left:10px;color:white;font-size:145%"><?php echo "$fname $sname" ?></p8>
                              </form> 
                             
            </div>

            <ul style="text-align: right;" >
            
                <li class="active" type="none" > <a href="adminhome.php" class="nav-menu"><i3 class="fas fa-home"></i3></a></li>
                <li> <a href="#" class="nav-menu"><i3 class="fab fa-facebook-messenger"></i3></a></li>
                <li> <a href="#" class="nav-menu"><i3 class="far fa-paper-plane"></i3></a></li>
                
                
                <li> <a href="#" class="nav-menu"><i3 class="fas fa-plus-circle"></i3></a>
                <li> <a href="#" class="nav-menu"><i3 class="far fa-user-circle"></i3></a>
                <div class="sub-user-menu" style="right:77px;position:fixed;height:cover;width:180px;padding-top:10px;padding-bottom:10px" >
                  
                  <table style="font-size: 30px;" border="0"> 
                      <tr><td align="center">  
                  <p9 style=" color:rgb(8, 243, 8);font-style:italic;right:3px; border-top: 2px solid rgb(8, 243, 8); border-bottom: 2px solid rgb(8, 243, 8);">Admin</p9>
                     </td> 
                      </tr>
                      <tr>
                          <td align="center" width="180px">  
                  
                        
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
                        <p9 style="margin-top: 15px;margin-bottom:10px;"><?php echo "  $designation " ?></p9>
                     
                          </td>
                      </tr>
                      <tr>
                          <td align="center">
                      <a href="AdminProfile.php" style="margin-top: 6px;padding-left:3px;padding-right:3px;text-decoration:none" class="btn-sub-menu-user-profile" onclick="document.getElementById('show-account').style.display='none';document.getElementById('profile-form').style.display='block';document.getElementById('menu-form').style.display='none'">profile</a>
                          </td>
                      </tr>
                  </table>
                
                </div>
                </li>
                 <li> <a href="home.php" class="nav-menu"><i3 class="fas fa-sign-out-alt"></i3></a>
                 <div class="sub-logout">
                           <ul style="margin-left: 30px;">
                               <li>
                                   <p10>Log Out</p10>
                               </li>
                           </ul>
                       </div>
                </li>
                
            </ul>
           
            </div>
      
        <ul type="none" style="display: inline-flex;">
       <li><button class="menu-btn" id="menu-btn" name="menu-btn" onclick="show_hide(); document.getElementById('show-account').style.display='none';document.getElementById('profile-form').style.display='none';" style="width:auto;margin-top:-10px"><i id="menu-bt" class="fas fa-bars"></i></button></li> 
       <li >
        <div id="account-form" style="margin-top: -20px;top:0;padding-top:0">
        <form class="account-setting-form" id="show-account"  >
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
        <form class="account-setting-form" action="account_setting.php" method="POST"   id="edit-account" style="display: none;" onsubmit="return updates()" >
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
                         <input type="text" class="input" name="pass" id="pass" value="<?php echo "$pass" ?>"required>
                         <button type='submit' name="submit" class='submit-s' onclick="document.getElementById('account-setting-form').style.display='block';" >Save</button>
                            

                    </nav1>
                </ul>
                
            </div>
        </form>
        </div>
        </li>  
        
       
        


    </ul>
        <div id="menu-form"  >
            <ul style="display: inline-flex;">
                <li>
        <form class="option-form" style="width: 350px;margin-right:0;margin-top:-20px">
            
            <div class="option">
                
                <ul id="menu-item" >
                   
               
                        <li><a1 id="employee-manager-btn" style=" padding-left: 8px;padding-right: 8px;"  href="#" class="a1" >Employee Manager</a1></li>
                        <li><a1 id="search-employee-btn" style=" padding-left: 15px;padding-right: 15px;"  href="#" class="a1">Search Employee </a1></li>
                        <li><a1 id="update-jobcode-btn" style=" padding-left: 14px;padding-right: 14px;"  href="#" class="a1"  >Update Job Code </a1></li>
                        <li><a1 id="allowance-btn" style=" padding-left: 57px;padding-right: 57px;" href="#" class="a1"  >Allowance       </a1></li>
                        <li><a1 id="deduction-btn" style=" padding-left: 58px;padding-right: 58px;"  href="#" class="a1"  >Deduction       </a1></li>
                        <li><a1 style=" padding-left: 63px;padding-right: 63px;"  href="#" class="a1"  >Payment         </a1></li>
                        <li><a1 style=" padding-left: 56px;padding-right: 56px;"  href="#" class="a1"  >Audit Trail     </a1></li>
                        <li><a1 style=" padding-left: 50px;padding-right: 50px;"  href="#" class="a1"  >Attendance </a1></li>
               
                </ul>
                           
            </div>
        </form>
                </li>
            
            <li>
        <div id="option_all_form" class="option_all_form "style="display:none;background-color: rgb(17, 29, 32);overflow:hidden;height:580px;margin-top:-30px">
                          <ul style="display: inline-flex;">
                             <li type="none" style="margin-left:760px;margin-top: 5px;font-size:20px;"><a href="#" id="cls-btn-all"><i7 style="color: red;" class="fas fa-times"></a></i7></li>                         
                        </ul>         
<div id="employee_manager"  >
        
                  
    

                    <table id="main" border="0" cellspacing="0" style="background:none;overflow:hiden" >
                    <tr>
      <td id="header">
      <h1 style="color: turquoise;margin-left:20px; text-align:left;font-size:50px;text-decoration:none;padding-right:80px"><p11 style="color: rgb(0, 217, 255);border: 2px solid rgb(152, 250, 61);border-right:0;border-radius:30px">T</p11><p11 style="color: rgb(161, 235, 14);border: 2px solid rgb(152, 250, 61);border-radius:30px;border-left:0;">S</p11><p11 style="color:rgb(14, 235, 143);border-radius:100px;border-top: 2px solid rgb(152, 250, 61);">mart</p11></h1>
           

        <div id="search-bar">
          <label>Search :</label>
          <input type="text" id="search"  placeholder="Id or Name " style="color: #000000;height:35px;font-size:20px;margin-right:10px" autocomplete="off">
        </div>
      </td>
    </tr>
              
     <tr >
                          
          <td id="table-data" >
                              
           <table   border="1" width="100%" cellspacing="0" cellpadding="10px"  >
                                
           </table>
          </td>
                            
      </tr>
                            
</table>
<div id="modal" style="display:none;margin-top:-500px;margin-left:50px">
    <div id="modal-form" style="width: 500px;" >
    <h2 >Employee Details</h2>
        
      <table class="col-xs-7 table-bordered table-striped table-condensed table-fixed1" cellpadding="10px"  border="0" cellspacing="0">
       
      </table>
      <div id="close-btn">X</div>
    </div>
  </div>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
 <script type="text/javascript">
 $(document).ready(function(){
     function loadTable(){
         $.ajax({
         url:"employee_manager.php",
         type:"POST",
         success:function(data){
         $("#table-data").html(data);
                              }
                 });
                         }
loadTable();
$(document).on("click","#edit-btn", function(){
      $("#modal").show();
      var Id = $(this).data("eid");
       $.ajax({
        url: "employee_manager_load_edit.php",
        type: "POST",
        data: {id: Id},
        success: function(data) {
          $("#modal-form table").html(data);
           }
      });  
    });
    $("#close-btn").on("click",function(){
      $("#modal").hide();
    });

    $(document).on("click","#save-btn", function(){
        var Id = $("#edit-id").val();
        var Designation = $("#designation").val();
        var Division = $("#division").val();
        var Addsalary=$("#addsalary").val();
        

        $.ajax({
          url: "employee_manager_edit.php",
          type : "POST",
          data : {id: Id, designation: Designation, division: Division ,addsalary: Addsalary},
          success: function(data) {
            if(data == 1){
              $("#modal").hide();
              swal("Succesfully Saved", "", "success");
              loadTable();
            }
          }
        })
      });


      //delete
      $(document).on("click","#delete-btn", function(){
        var Id = $(this).data("id");
        var name=$("#name").val();
         
        
        swal({
  title: "Are you sure?",
  text: "You want to delete ID : "+Id,
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
          url: "employee_manager_delete.php",
          type : "POST",
          data : {id: Id},
          success: function(data) {
            if(data == 1){
                swal("Succesfully Deleted", "", "success");
              loadTable();
            }
          }
        })
  } 
});
      
       
    
      });

   $("#search").on("keyup",function(){
    var search_term = $(this).val();

     $.ajax({
      url: "employee_manager_search.php",
      type: "POST",
      data : {search:search_term },
       success: function(data) {
        $("#table-data").html(data);
                              }
            });
                                   
        
        });      
  
});
                                    
</script>
                 
 </div>
            <div class="search-employee" id="search-employee">
            <h2 style="color: white;">Search Employee</h2>
          </div> 

          <div class="upadte-jobcode" id="update-jobcode">
            <h2 style="color: white;">Upadate Job Code</h2>
          </div>

          <div class="allowance" id="allowance">
            <h2 style="color: white;">Allowance</h2>
          </div>

          <div class="deduction" id="deduction">
            <h2 style="color: white;">deduction</h2>
          </div>
        <script>
           $(document).ready(function(){
           $(document).on("click","#cls-btn-all", function(){
                $("#option_all_form").hide();
            });
            
               $(document).on("click","#employee-manager-btn",function(){
                $("#option_all_form").show();
                $("#employee_manager").show();
                $("#search-employee").hide();
                $("#update-jobcode").hide();
                $("#allowance").hide();
                $("#deduction").hide();
                });
               $(document).on("click","#search-employee-btn",function(){
                $("#option_all_form").show();
                $("#employee_manager").hide();
                $("#search-employee").show();
                $("#update-jobcode").hide();
                $("#allowance").hide();
                $("#deduction").hide();
                });
               $(document).on("click","#update-jobcode-btn",function(){
                $("#option_all_form").show();
                $("#employee_manager").hide();
                $("#search-employee").hide();
                $("#update-jobcode").show();
                $("#allowance").hide();
                $("#deduction").hide();
                });
                $(document).on("click","#allowance-btn",function(){
                $("#option_all_form").show();
                $("#employee_manager").hide();
                $("#search-employee").hide();
                $("#update-jobcode").hide();
                $("#allowance").show();
                $("#deduction").hide();
                });
                $(document).on("click","#deduction-btn",function(){
                $("#option_all_form").show();
                $("#employee_manager").hide();
                $("#search-employee").hide();
                $("#update-jobcode").hide();
                $("#allowance").hide();
                $("#deduction").show();
                });
            
            
        });
        </script>
     </div>
</li>
     </ul>

        
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
    
    <script>
     
    </script>
</body>

</html>