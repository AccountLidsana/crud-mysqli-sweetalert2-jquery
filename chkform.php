<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&family=Noto+Sans+Lao+Looped:wght@400&display=swap" rel="stylesheet">
<style>
* {
    /* font-family: 'Noto Sans Lao', sans-serif; */
    font-family: 'Noto Sans Lao Looped', sans-serif !important;
}
</style>

<?php 

include "connect.php";

if(isset($_POST['submit'])) {

    
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $gender =$_POST['gender'];
    $dob =$_POST['dob'];

    if($fname == ""){
        
     echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ຜິດຜາດ?',
    icon: 'warning',
    text:'ກະລຸນາປ້ອນຊື່',
    showConfirmButton: false,
    }).then(()=>{
    window.history.back();

    })
    },500)
    
    ;

    ";
    echo "</script>";
 
        
    }
    else if(  $lname == ""){
        echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ຜິດຜາດ?',
    icon: 'warning',
    text:'ກະລຸນາປ້ອນນາມສະກຸນ'
        
    }).then(()=>{
    window.history.back();

    })
    },500)
    ";
     echo "</script>";
 
        
    

    }
    else if( $gender  == ""){
        
     echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ຜິດຜາດ?',
    icon: 'warning',
    text:'ກະລຸນາປ້ອນເພດ'
        
    }).then(()=>{
    window.history.back();

    })
    
    },100)
    ";
    echo "</script>";
 
        
    }
    
    else if( $dob == ""){

    echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ຜິດຜາດ?',
    icon: 'warning',
    text:'ກະລຸນາປ້ອນວັນເດືອນປີເກິດ'
        
    }).then(()=>{
    window.history.back();

    })
    
    },500)
    ";
    echo "</script>";
 
        
    
    }else{

        // ປ້ອງກັນຊື່ຊ້ຳກັນ ເວລາອັບໂຫລດ
        
    $sql_exist = mysqli_query($conn,"SELECT * FROM users WHERE fname = '$fname'");

    if(mysqli_num_rows($sql_exist) > 0){
            
    echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ຜິດຜາດ',
    icon: 'error',
    text:'ມີຊື່ຊ້ຳ'
        
    }).then(()=>{
    window.history.back();

    })
    
    },500)
    ";
    echo "</script>";

    }else{
            
        // ເພີ່ມຂໍ້ມູນລົງ ຖານຂໍ້ມູນ

    $sql = mysqli_query($conn,"INSERT INTO users (fname,lname,gender,dob) VALUES ('$fname','$lname','$gender','$dob')");
       
    if($sql){
    echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ສຳເລັດ',
    icon: 'success',
    text:'ເພີ່ມຂໍ້ມູນສຳເລັດ',
     confirmButtonText: 'ຕົກລົງ',
    confirmButtonColor: '#3085d6' 
    }).then(()=>{
        
    window.location='index.php';

    })
    
    },500)
    ";
    echo "</script>";

        }else{
    echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ຜິດຜາດ',
    icon: 'error',
    text:'ເພີ່ມຂໍ້ມູນຜິດຜາດ'
        
    }).then(()=>{
    window.history.back();

    })
    
    },500)
    ";
    echo "</script>";

        }
      


        }
    }
}

    



if(isset($_POST['edit'])){

    $id = $_POST['id'];
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $gender =$_POST['gender'];
    $dob =$_POST['dob'];
    

       // ປ້ອງກັນຊື່ຊ້ຳກັນ ເວລາອັບໂຫລດ
        
    $sql_exist = mysqli_query($conn,"SELECT * FROM users WHERE fname = '$fname'");

    if(mysqli_num_rows($sql_exist) > 0){
            
    echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ຜິດຜາດ',
    icon: 'error',
    text:'ມີຊື່ຊ້ຳ'
        
    }).then(()=>{
    window.history.back();

    })
    
    },500)
    ";
    echo "</script>";

    }else{
        
    $sql_edit = mysqli_query($conn,"UPDATE users SET  fname='$fname' , lname='$lname' , gender='$gender' , dob = '$dob' WHERE id ='$id' ");
        
    if($sql_edit){

    echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ສຳເລັດ',
    icon: 'success',
    text:'ແກ້ໄຂສຳເລັດ'
        
    }).then(()=>{
    window.location='index.php';

    })
    
    },500)
    ";
    echo "</script>";

        
    }else{

    echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ຜິດຜາດ',
    icon: 'error',
    text:'ແກ້ໄຂບໍ່ສຳເລັດ'
        
    }).then(()=>{
    window.location='index.php';

    })
    
    },500)
    ";
    echo "</script>";


    }
}
    

}


?>