<?php
    if(isset($_POST['login'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $query = "select * from users where email = '$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            if($row["status"] == 1){
                if(password_verify($password,$row["password"])){
                    $_SESSION['email'] = $email;
                    mysqli_query($conn,"insert into logs (action,status,email) values ('Login to web','success','$email')");
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=./index.php\">";
                } else{
                    mysqli_query($conn,"insert into logs (action,status,email) values ('Login to web','failed cause wrong password','$email')");
                    echo '
                    <script>
                    jQuery(document).ready(function(){
                        alert("Sai mật khẩu.")
                    });
                    </script>
                    ';
                }
            } else{
                mysqli_query($conn,"insert into logs (action,status,email) values ('Login to web','failed cause not verified','$email')");
                echo '
                    <script>
                    jQuery(document).ready(function(){
                        alert("Tài khoản chưa xác thực, vui lòng kiểm tra hộp thư email.");
                    });
                    </script>
                    ';
            }
        } else{
            mysqli_query($conn,"insert into logs (action,status,email) values ('Login to web','failed cause no existed account','$email')");
            echo '
                <script>
                jQuery(document).ready(function(){
                    alert("Tài khoản này chưa được đăng ký.")
                });
                </script>
            ';
        }
    }
?>