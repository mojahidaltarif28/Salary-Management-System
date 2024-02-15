<?php

$employee_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","salary_management_system") or die("Connection Failed");


    $sql1="SELECT * FROM `job_code` WHERE 1";
    $qu= mysqli_query($conn, $sql1) or die("SQL Query Failed.");
    $designation="";
    while($row = mysqli_fetch_assoc($qu)){
        $designation.="
        <option style='background-color:rgb(6, 58, 100)' value='{$row["designation"]}' >{$row["designation"]}</option>";
     
    }

    $sql = "SELECT * FROM `employee_information` WHERE id = {$employee_id}";
    $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
    $output = "";
if(mysqli_num_rows($result) > 0 ){

  while($row = mysqli_fetch_assoc($result)){
    $output .= " <tbody  >
    <tr >
    
    <td   align='center' colspan='3'><img src='{$row["image"]}' style='height: 80px;width:80px;border-radius:100%;'></img></td>
   
      
</tr>  
</tbody>
<tbody >  
<tr>
     
      <td  colspan='3' align='center' style='font-size: 30px;'>{$row["first_name"]} {$row["surname"]}
      <input type='text' id='edit-id' hidden  value='{$row["id"]}'>
      </td>
     
      
      </tr>
      <tr >
          <td align='right'>Basic Salary:</td>
          <td colspan='2'>{$row["salary"]}</td>
          
      </tr>
      <tr >
          <td  align='right'>Current Salary:</td>
          <td colspan='2'>{$row["current_salary"]}</td>
          </tr>
      <tr>
          <td align='right'>designation:</td>
          <td colspan='1' ><select id='designation' style='background: none; '>
          <option style='display:none' value='{$row["designation"]}'>{$row["designation"]}</option>
           echo $designation ;
         
          </select> </td>
          <td align='left'><select id='division' style='background:none';>
          <option style='display:none' value='{$row["division"]}'>{$row["division"]}</option>
          <option style='background-color:rgb(6, 58, 100)' value='Admin'>Admin</option>
          <option style='background-color:rgb(6, 58, 100)' value='User'>User</option>
          </select></td>
          
      </tr>
       
      <tr>
      <td align='right'>Salary ± :</td>
      <td colspan='2' align='left' ><input  type='number' id='addsalary' value='0' autocomplete='off' placeholder='±' > </td>
      
      
      </tr>
       <tr>
     
      <td colspan='3' align='right' style='padding-bottom: 50px;'> <input type='submit' id='save-btn' value='save'  style='margin:6px 35px;'></td>
      
      </tr>
</tbody>";

  }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>