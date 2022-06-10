<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhinguyen.rf.gd | Xác thực email</title>
    <script src="https://kit.fontawesome.com/ad778f42b3.js" crossorigin="anonymous"></script>
</head>
<body>
<?php 
    if($_GET['email'] && $_GET['authen_token']){

        include '../db/database.php';

        $email = $_GET['email'];
        $authen_token = $_GET['authen_token'];

        $query = "select authen_token from users where email = '$email' and authen_token = '$authen_token' and status = 0";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            $query = "update users set status = 1 where email = '$email';";
            $query .= "insert into logs (action,status,email) values ('Verify email','success','$email')";
            if(mysqli_multi_query($conn,$query)){
                echo "<b><i class='fas fa-check-circle' style='color: green;'></i></b> Xác thực thành công<br><br>&emsp;Đăng nhập <a href='../index.php'>tại đây</a>.";
            }
        } else{
            echo "<b><i class='fas fa-exclamation-triangle'></i></b> Link xác thực <i>quá hạn</i> hoặc <i>không tồn tại</i>.<br><br>&emsp;Vui lòng đăng ký lại tài khoản <a href='../index.php'>tại đây</a> <i class='fas fa-link'></i>";
        }
        $conn->close();
    } else{
        header("Location: ../index.php");
    }
?>
</body>
</html>