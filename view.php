<?php 
include "connect.php";


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- link fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&family=Noto+Sans+Lao+Looped:wght@400&display=swap" rel="stylesheet">
        <!-- bootstrap 5 css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- bootstrap 5 script  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
        body {
            background-color: #eee;
            /* font-family: 'Noto Sans Lao', sans-serif; */
            font-family: 'Noto Sans Lao Looped', sans-serif;
        }
        </style>
    </head>

    <body>

        <div class="container d-flex justify-content-center">
            <div class="card mt-5" style="width:30rem">
                <div class="card-body">
                    <h1 class="text-center">ເບິ່ງຂໍ້ມູນ</h1>
                    <?php 
                             if(isset($_GET['view'])){
                                $id = $_GET['view'];
                                $sql_view = mysqli_query($conn,"SELECT * FROM users WHERE id = $id ");
                                 while($result_view=mysqli_fetch_assoc($sql_view)){
                              ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">- ລຳດັບ :</label>
                        <p><?php echo $result_view['id'] ?></p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">- ຊື່ :</label>
                        <p><?php echo $result_view['fname'] ?></p>
                    </div>
                    <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label">- ນາມສະກຸນ : </label>
                        <p><?php echo $result_view['lname'] ?></p>
                    </div>
                    <div class="mb-3 ">
                        <label for="gender" class="form-label">- ເພດ : </label>
                        <p><?php echo $result_view['gender'] ?></p>

                    </div>

                    <div class="mb-3">

                        <label for="exampleInputPassword1" class="form-label">- ວັນເດືອນປີເກິດ :</label>
                        <p><?php echo $result_view['dob'] ?></p>


                    </div>
                    <a href="index.php" class="btn btn-secondary w-100">ຍ້ອນກັບ<i class="bi bi-arrow-clockwise"></i></a>

                    <?php 
                                     }
                                }
                            ?>

                </div>
            </div>
        </div>

    </body>

</html>