<!DOCTYPE html>
<html lang="en">

<head>

    <title>signup</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/c1e7a1738f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="fullpage">
        <div class="navbar">
        </div>
        <div id='signup_form' class='signup-page'>
            <div class="form-box">
                <form id='register' class='input-group-register' action="signup.php" method="POST" name="form" enctype="multipart/form-data" onsubmit="return validated()">
                    <div class="headline">

                        <h1 style="display: inline-block;"><a style="text-decoration: none;color:rgb(0, 140, 255);" href="home.php"><i3 style="color: rgb(0, 140, 255);" class="fas fa-home"></i3>Home</a> Employee Registration</h1>
                    </div><br/>
                   
                    <?php
                            if(isset($_GET['wrong_code'])==true){
                                echo'<p7 align="right" style="font-weight: ;align:center;margin: 0 320px;color:red;display:inline;font-size:145%">Job code is incorrect</p7>';
                            }            
                    ?>
                    <?php
                            if(isset($_GET['email_error'])==true){
                                echo'<p7 align="right" style="font-weight: ;align:center;margin: 0 240px;color:red;display:inline;font-size:145%">Email account have already exist</p7>';
                            }            
                    ?>
                    <div class="registration-field" onsubmit="return validated()">
                        <input type='text' name="fname" class='input-field' autocomplete="off" placeholder='First Name' required>
                        <input type='text' name="sname" class='input-field' autocomplete="off" placeholder='Surname ' required>
                        <input type='text' name="job_code" class='input-field' placeholder='Job Code  ' required>

                        <input type='email' name="email" class='input-field' placeholder='Email' autocomplete="off"  required>
                        <input type='tel' name="contact" class='input-field' placeholder='Contact number' required>

                        <div class="gender">

                            <p1><label>Gender:</label></p1>
                            <p2> <input type="radio" class="radio" name="gender" value="Male" required /> Male
                                <input type="radio" class="radio" name="gender" value="Female" required/> Female
                                <input type="radio" class="radio" name="gender" value="Custom" required/> Custom
                            </p2>
                        </div>
                        <br/>
                        <div class="ld"><label>Date Of Birth:</label>
                            <br/>
                            <input type='date' name="dob" class='dob' placeholder='date Of Birth ' required>
                        </div>
                        <br/>
                        <input type='text' name="national" class='input-field' placeholder='National ID Number' required>

                        <input type='text' name="passport" class='input-field' placeholder='Passport Number (optional)'>

                        <textarea type='address' name="pre_add" class='input-field' placeholder='Present Address' autocomplete="off" required ></textarea>
                        <textarea type='text' name="per_add" class='input-field' placeholder='Permanent Address' autocomplete="off" required></textarea>
                        <div class="ld"><label>Date Of Join:</label>
                            <br/>
                            <input type='date' name="doj" class='dob' placeholder='date Of Birth ' required>
                        </div>
                        <input type="text" name="card" class='input-field' placeholder='Card Number' required>

                        <input type='password' name="password" class='input-field' placeholder='Enter Password' autocomplete="off" required>
                        <input type='password' name="cpassword" class='input-field' placeholder='Confirm Password' autocomplete="off" required>
                        
                            
                                <div id="not_match" style="color: rgb(233, 4, 4);margin:0 30px;font-size:150%;text-align:center;padding:0px 0px;background:rgba(255,0,0,0.1);width:365px;display:none;" >
                                    password not match
                                </div>
                            
                        
                        <div class="display">
                            <h3 class="my-img"> </h3>
                            <img class="my-img" id="file-1-display" style="width: 200px;height: 200px;border:0.5px solid rgb(2, 247, 2);">
                        </div>
                        <div>
                            <p6> <label class="image1">Uploade image:</label>

                            </p6>
                            <input type="file" name="file" id="file-1" accept="image/*" onchange="showPreview(event);" class="image" required>

                        </div>

                    </div>

                    <br>

                    <button type='submit' name="submit" class='submit-btn' onsubmit="return validated()">Submit</button>

                </form>
            </div>
        </div>
    </div>
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
         var pass=document.forms['form']['password'];
         var cpass=document.forms['form']['cpassword'];

         var not_matchp=document.getElementById('not_match');
         function validated(){
             if(pass.value!=cpass.value){
                pass.style.border="1px solid red";
                cpass.style.border="1px solid red";
                not_matchp.style.display="block";
                pass.focus();
                cpass.focus();
                return false;

             }

         }

     </script>
</body>

</html>