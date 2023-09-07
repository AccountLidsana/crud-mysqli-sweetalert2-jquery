    <?php

    include "connect.php";


    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql_delete=mysqli_query($conn,"DELETE FROM users WHERE id = $id");
        if($sql_delete){
    echo "<script>";
 
    echo "setTimeout(function(){
    Swal.fire({
    title: 'ສຳເລັດ',
    icon: 'success',
    text:'ລົບສຳເລັດ',
    confirmButtonText: 'ຕົກລົງ',
    confirmButtonColor: '#3085d6',

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
    text:'ຜິດຜາດບໍ່ສາມາດລົບໄດ້'
    showConfirmButton: false 
    }).then(()=>{
    window.location='index.php';

    })
    
    },500)
    ";
    echo "</script>";  
        }
    }


   
    ?>

    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <!-- link fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&family=Noto+Sans+Lao+Looped:wght@400&display=swap" rel="stylesheet">
            <!-- bootstrap 5 css -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <!-- bootstrap 5 script  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

            <style>
            body {
                /* font-family: 'Noto Sans Lao', sans-serif; */
                font-family: 'Noto Sans Lao Looped', sans-serif;
            }

            .btn {
                border-radius: 30px !important;
            }
            </style>
        </head>

        <body>


            <!-- Modal ເພີ່ມຂໍ້ມູນ -->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ຟອມເພີ່ມຂໍ້ມູນ</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="chkform.php">
                            <div class="modal-body">
                                <div class="mb-3">

                                    <label for="exampleInputEmail1" class="form-label">ຊື່ :</label>
                                    <input type="text" class="form-control" placeholder="ກະລຸນາປ້ອນຊື່" name="fname">

                                </div>
                                <div class="mb-3">

                                    <label for="exampleInputPassword1" class="form-label">ນາມສະກຸນ :</label>
                                    <input type="text" class="form-control" placeholder="ກະລຸນາປ້ອນນາມສະກຸນ" name="lname">

                                </div>
                                <div class="mb-3 ">
                                    <label for="gender" class="form-label">ເພດ :</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="" checked>
                                        <label class="form-check-label" for="">
                                            ເພດ
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="ຊາຍ">
                                        <label class="form-check-label" for="gender">
                                            ຊາຍ
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="ຍິງ">
                                        <label class="form-check-label" for="gender">
                                            ຍິງ
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">

                                    <label for="exampleInputPassword1" class="form-label">ວັນເດືອນປີເກິດ :</label>
                                    <input type="date" class="form-control" placeholder="ກະລຸນາປ້ອນວັນເດືອນປີເກິດ" name="dob">

                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit">ບັນທຶກ</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>




            <div class="container">
                <div class="row text-center my-4">
                    <div class="col-lg-6">
                        <h3>
                            ລະບົບCRUD PHP MYSQLi + sweetalert2
                        </h3>
                    </div>
                    <div class="col-lg-6 text-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ເພີ່ມຂໍ້ມູນ<i class="bi bi-file-earmark-plus-fill"></i>
                        </button>
                    </div>
                </div>
                <table class="table table-striped text-center">
                    <thead>

                        <tr>
                            <th>ລຳດັບ :</th>
                            <th>ຊື່ :</th>
                            <th>ນາມສະກຸນ :</th>
                            <th>ເພດ :</th>
                            <th>ວັນເດືອນປີເກິດ :</th>
                            <th>ຈັດການ :</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php 

                            $sql = mysqli_query($conn,"SELECT * FROM users");
                            while($result = mysqli_fetch_assoc($sql)){
                        ?>
                        <tr>
                            <td><?php echo $result['id'] ?></td>
                            <td><?php echo $result['fname'] ?></td>
                            <td><?php echo $result['lname'] ?></td>
                            <td><?php echo $result['gender'] ?></td>
                            <td><?php echo $result['dob'] ?></td>
                            <td>
                                <a href="view.php?view=<?php echo $result['id']?>" class="btn btn-primary">
                                    ເບິ່ງ<i class="bi bi-folder2-open"></i>
                                </a>
                                <a href="edit.php?edit=<?php echo $result['id']?>" class="btn btn-success">
                                    ແກ້ໄຂ<i class="bi bi-pencil-square"></i>
                                </a>
                                <a data-id="<?= $result['id']; ?>" href="?delete=<?php echo $result['id'] ?>" class="delete-btn btn btn-danger">ລົບ<i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
            $(".delete-btn").click(function(e) {
                var Id = $(this).data('id');
                e.preventDefault();
                deleteConfirm(Id);
            })

            function deleteConfirm(Id) {

                Swal.fire({
                    title: 'ທ່ານແນ່ໃຈບໍ່?',
                    text: "ຂ້ອຍຕ້ອງການລົບ!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'ຍົກເລິກ',
                    confirmButtonText: 'ຍືນຍັນລົບຂໍ້ມູນ'
                }).then((result) => {

                    if (result.isConfirmed) {
                        window.location.href = "?delete=" + Id;

                    }
                })
            }
            </script>

        </body>

    </html>