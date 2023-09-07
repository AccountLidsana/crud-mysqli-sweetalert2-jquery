<?php 

include "connect.php";

if(isset($_GET['edit'])){
    
    $id = $_GET['edit'];

    $sql = mysqli_query($conn,"SELECT * FROM users WHERE id = $id");
}



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
            /* font-family: 'Noto Sans Lao', sans-serif; */
            font-family: 'Noto Sans Lao Looped', sans-serif;
        }
        </style>
    </head>

    <body>
        <div class="container d-flex justify-content-center">
            <div class="card mt-5 " style="width:30rem;">
                <div class="card-body">
                    <h1 class="text-center mb-3">ຟອມແກ້ໄຂ</h1>
                    <form method="POST" action="chkform.php">
                        <?php 

                    while($result = mysqli_fetch_assoc($sql)){
                ?>
                        <div class="mb-3">
                            <label for="id">ID :</label>
                            <input type="number" value="<?php echo $result['id'] ?>" class="form-control" name="id">

                        </div>
                        <div class="mb-3">

                            <label for="exampleInputEmail1" class="form-label">ຊື່ :</label>
                            <input type="text" class="form-control" placeholder="ກະລຸນາປ້ອນຊື່" name="fname" value="<?php echo $result['fname'] ?>">

                        </div>
                        <div class="mb-3">

                            <label for="exampleInputPassword1" class="form-label">ນາມສະກຸນ :</label>
                            <input type="text" class="form-control" placeholder="ກະລຸນາປ້ອນນາມສະກຸນ" name="lname" value="<?php echo $result['lname'] ?>">

                        </div>
                        <div class="mb-3 ">
                            <span>ຂໍ້ມູນເກົ່າ: ເພດ <?php echo $result['gender'] ?></span>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="<?php echo $result['gender'] ?>" checked>
                                <label class="form-check-label" for="gender">
                                    <?php echo $result['gender'] ?>
                                </label>
                            </div>

                            <span>ຂໍ້ມູນໃຫມ່ : ເພດ</span>
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
                            <input type="date" class="form-control" placeholder="ກະລຸນາປ້ອນວັນເດຶອນປີເກິດ" name="dob" value="<?php echo $result['dob'] ?>">

                        </div>

                        <button type="submit" class="btn btn-primary" name="edit">ແກ້ໄຂ<i class="bi bi-pencil-square"></i></button>
                        <a href="index.php" type="button" class="btn btn-secondary">ຍ້ອນກັບ<i class="bi bi-arrow-clockwise"></i></a>


                        <?php 
                    }
                ?>
                    </form>
                </div>
            </div>

        </div>
    </body>

</html>