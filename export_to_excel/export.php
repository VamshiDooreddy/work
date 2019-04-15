<?php  
//export.php  
$connect = mysqli_connect("localhost","root","","mtp") or die("Database connection failed");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM tbl_user";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>Address</th>  
                         <th>City</th>  
       <th>Postal Code</th>
       <th>Country</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                        <td>'.$row["full_name"].'</td>  
         <td>'.$row["email"].'</td>  
         <td>'.$row["employee_id"].'</td>  
         <td>'.$row["password"].'</td>  
         <td>'.$row["mobile_no"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>