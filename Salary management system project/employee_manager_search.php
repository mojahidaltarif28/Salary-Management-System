<?php
use UI\Draw\Color;

$search_value = $_POST["search"];

$conn = mysqli_connect("localhost","root","","salary_management_system") or die("Connection Failed");

$sql = "SELECT * FROM `employee_information` WHERE `first_name`  LIKE '%{$search_value}%' OR `surname` LIKE '%{$search_value}%' OR `full_name` LIKE '%{$search_value}%' OR `id` LIKE '%{$search_value}%' ";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table class="col-xs-7 table-bordered table-striped table-condensed table-fixed"; align="center" border="0"  cellspacing="0" style="height:300px;margin-top:-5px;background:none;text-align:center;font-size:25px;color:black" cellpadding="10px">
                     
            <thead width="600px" border="0"> <tr  border="0" style="color:black; position:static">
                <th width="80px" style="text-align:  center" height="30px"  >Id</th>
                <th width="240px"style="text-align: center">Name</th>
                <th width="0px"style="text-align: center">Edit</th>
                <th width="0px"style="text-align: center">Delete</th>
              </tr></thead>
              ';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr ><td align='center'style='font-style:bold' width='145px'>{$row["id"]}</td><td align='left' width='260px' class='name'> {$row["full_name"]}</td><td align='left' width='130px'><button id='edit-btn' class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td><td align='center' width='150px'><button Class='delete-btn' id='delete-btn' data-id='{$row["id"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    $output = '<table class="col-xs-7 table-bordered table-striped table-condensed table-fixed"; align="center" border="0"  cellspacing="0" style="height:300px;margin-top:-5px;background:none;text-align:center;font-size:25px;color:black" cellpadding="10px">
                     
            <thead width="600px" border="0"> <tr  border="0" style="color:black; position:static">
                <th width="80px" style="text-align:  center" height="30px"  >Id</th>
                <th width="240px"style="text-align: center">Name</th>
                <th width="0px"style="text-align: center">Edit</th>
                <th width="0px"style="text-align: center">Delete</th>
              </tr></thead>
              <tbody border="0" cellspacing="0">
              <tr style="background:none" border="0"><td align="center" border="0" width="700px"><h2 style="color:rgb(255, 1, 1);">No matching records found</h2></td></tr>
              </tbody>
              ';

              
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
    
}

?>
