<?php 
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $sql = "select lastmuster from musters where email = '$email'";
    } else{
        echo "
        Bạn chưa đăng nhập tài khoản;
        [ENTER] to close;
        ";
    }
?>