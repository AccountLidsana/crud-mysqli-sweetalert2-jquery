<?php 

// ເຊຶ່ອມຖານຂໍ້ມູນ


$conn = mysqli_connect("localhost","root","","db_crud") or die("error".mysqli_connect_error());

if($conn){
    // echo "Connected successFully";
}else{
    echo "Cannot Connected filed";
}



?>