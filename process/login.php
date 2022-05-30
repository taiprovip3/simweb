<?php
    if(isset($_POST['login'])){
        include './db/database.php';

        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $query = "select * from users where email = '$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            if($row["status"] == 1){
                if(password_verify($password,$row["password"])){
                    $_SESSION['email'] = $email;
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=./index.php\">";
                } else{
                    echo '
                    <script>
                    jQuery(document).ready(function(){
                        alert("Sai mật khẩu.")
                    });
                    </script>
                    ';
                }
            } else{
                echo '
                    <script>
                    jQuery(document).ready(function(){
                        alert("Tài khoản chưa xác thực, vui lòng kiểm tra hộp thư email.");
                    });
                    </script>
                    ';
            }
        } else{
            echo '
                <script>
                jQuery(document).ready(function(){
                    alert("Tài khoản này chưa được đăng ký.")
                });
                </script>
            ';
        }
        $conn->close();
    }
?>