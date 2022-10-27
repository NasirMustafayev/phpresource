<?php  
if(isset($_POST["employee_id"]))  
{  
  $output = '';  
  $connect = mysqli_connect("localhost", "root", "516458488", "fliyingdreams");  
  $query = "SELECT * FROM users WHERE user_id = '".$_POST["employee_id"]."'";  
  $result = mysqli_query($connect, $query);  
  $output .= '  
  <div class="table-responsive">  
  <table class="table table-bordered">';  
  while($row = mysqli_fetch_array($result))  
  {  
   $output .= '  
   <tr>  
   <td width="30%"><label>Name</label></td>  
   <td width="70%">'.$row["user_name"].'</td>  
   </tr>
   <tr>  
   <td width="30%"><label>Lastname</label></td>  
   <td width="70%">'.$row["user_lastname"].'</td>  
   </tr>
   <tr>  
   <td width="30%"><label>Address</label></td>  
   <td width="70%">'.$row["user_address"].'</td>  
   </tr>   
   <tr>  
   <td width="30%"><label>Mail</label></td>  
   <td width="70%">'.$row["user_mail"].'</td>  
   </tr>    
   ';  
 }  
 $output .= "</table></div>";  
 echo $output;  
}  
?>