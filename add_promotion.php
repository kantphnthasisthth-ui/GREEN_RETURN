<?php 
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิกใหม่</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <style>
        body{
            background-image: url('image/pexels-ha-phan-825340680-20064332.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
        }
        .card{
            background-color: #00000090;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 10vh;
        }
    </style>
</head>
<body>
    <br><br><br><br>
    <div class="container" style="max-width: 75%;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow p-7">
                    <center><h1 style="color: #ffffff; font-size: 50px;"><span class="badge bg-success">แก้ไขข้อมูลโปรโมชั่น</span></h1></center>
                    <br>
                    <form action="save_promotion.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                         <label for="title" class="col-2 col-form-label" style="color: #ffffff;">โปรโมชั่น</label>
                         <input type="text" class="form-control" name="title" required>
                    </div><br>


                    <div class="mb-3">
                         <label for="detail" class="col-2 col-form-label" style="color: #ffffff;">รายละเอียด</label>
                        <input type="text" class="form-control" name="detail" required>
                    </div><br>


                    <div class="mb-3">
                         <label style="color: #ffffff;">รูปภาพ</label>
                         <input type="file" class="form-control" name="img" required>
                    </div><br>


                
                    <div class="mb-4 row">
                        <label for="submit" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                        <input type="submit" name="submit" class="btn-solid theme-primary" value="บันทึก">
                        <input type="reset" name="reset" class="btn-solid theme-warning" value="ล้าง">
                        <a href="index_admin.php" class="btn-solid theme-secondary">ย้อนกลับ</a>
                        </div>
                    </div><br><br>
                
                </form>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>รูป</th>
                            <th>โปรโมชั่น</th>
                            <th>รายละเอียด</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                <?php
                $sql = "SELECT * FROM promotion";
                $res = $conn->query($sql);
                while($arr = $res->fetch()){
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $arr['id'];?></td>
                            <td><img src="image/<?php echo $arr['img'];?>" width="80" class="rounded"></td>
                            <td><?php echo $arr['title'];?></td>
                            <td><?php echo $arr['detail'];?></td>
                            <td>
                            <a href="delete_promotion.php?id=<?php echo $arr['id'];?>"
                            class="btn-solid theme-danger"
                            onclick="return confirm('คุณแน่ใจว่าต้องการลบโปรโมชั่นนี้ใช่หรือไม่!');">Delete</a>
                            <a href="edit_promotion.php?id=<?php echo $arr['id'];?>"
                            class="btn-solid theme-warning">Edit</a></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
                </table>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>
