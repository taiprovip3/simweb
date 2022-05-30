<?php
    include '../db/database.php';
    include '../entity/user.php';

    $email = $_POST['email'];

    //Bắt lỗi bug link
    if($email == ""){
        header('Location: ../index.php');
    } else{//Xử lý
        $query = "select * from users where email = '$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            echo '409';
        } else{
            $id = rand(0,1000);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user = new user($id, $email, $password);
            $authen_token = md5($email.rand(10,9999));

            $sql = "insert into users values ('$id','$email', '$password','$authen_token',0);";
            $sql .= "insert into user_info (user_id) values ('$id');";
            $sql .= "insert into user_balance (token,credit,user_id) values (0,0,'$id');";
            $sql .= "insert into logs (action, status, user_id) values ('Register account','verifying','$id')";
            if(mysqli_multi_query($conn, $sql)){

                include_once '../lib/class.phpmailer.php';
                include_once '../lib/class.smtp.php';
                include '../util/send_mail.php';

                $verify_link = "<a href='localhost/simweb/util/verify_email.php?email=".$email."&authen_token=".$authen_token."'>Nhấp vào đây để xác nhận.</a>";
                $title = "Tạo tài khoản nhinguyen.rf.gd";
                $content = $verify_link;
                $nTo = "Anonymous";
                $mTo = $email;
                $mail = sendMail($title, $content, $nTo, $mTo, $diachicc='');
                if($mail==1)
                    echo '200';
                else 
                    echo '404';
            } else{
                echo '404';
            }
        }
    }
    $conn->close();
?>