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
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $authen_token = md5($email.rand(10,9999));

            $sql = "insert into users (email,password,authen_token,status) values ('$email', '$password','$authen_token',0);";
            $sql .= "insert into infos (email) values ('$email');";
            $sql .= "insert into balances (token,credit,email) values (0,0,'$email');";
            $sql .= "insert into logs (action, status, email) values ('Register account','verifying','$email')";
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
                if($mail==1){
                    echo "GỬI MAIL THÀNH CÔNG";
                }
                else{
                    echo "GỬI MAIL THẤT BẠI";
                }
            } else{
                echo 'KO THỰC HIỆN THÀNh CÔNG MULTI QUERY';
            }
        }
    }
?>