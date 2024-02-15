<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="employee_manager.css">
    </head>
    <body>    
  
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
$(document).on("click",".edit-btn", function(){
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
        var Addsalary=$("#addsalary").val();

        $.ajax({
          url: "employee_manager_edit.php",
          type : "POST",
          data : {id: Id,addsalary:Addsalary},
          success: function(data) {
            if(data == 1){
              $("#modal").hide();
              loadTable();
            }
          }
        })
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
    </body>
</html>