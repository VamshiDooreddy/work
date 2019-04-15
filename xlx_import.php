<?php include_once '../db/db.php';
if(isset($send)){
	$row =1;
	if (($handle = fopen($_FILES['file']['tmp_name'],"r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
       if($row!=1){
           foreach($data as $key=>$value){
              $data[$key]=test_input($value);
           }
            if($data[0]!=''){
                $sql = "INSERT INTO `tbl_question` (`txt_created`, `txt_status`, `txt_question`, `txt_category`, `txt_date_id`, `txt_paper`, `txt_subject`, `txt_topic`, `txt_subtopic`, `txt_articleform`, `txt_articlelink`, `txt_link`, `txt_notes`, `txt_sources`, `txt_tags`, `txt_previous`, `txt_pdf`, `txt_other`, `txt_date`) VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."','".$data[17]."','$date')";
                $result = mysql_query($sql);
            }
       }
       $row++;
    }
    fclose($handle);
    header("Location:../import.php?m=1");
    }else{
        header("Location:../import.php?m=0");
    }
}
?>