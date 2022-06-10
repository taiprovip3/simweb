<?php 
    session_start();
    if(isset($_SESSION['email'])){

        include '../db/database.php';
        
        $email = $_SESSION['email'];
        $sql = "select lastmuster from musters where email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {//TH: Có tồn tại email đã từng điểm danh
            $row = $result -> fetch_array(MYSQLI_NUM);
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $usernow = new DateTime();
            $usernow = $usernow->format('Y-m-d H:i:s'); //2021-09-03 17:03:15
            $datenow = substr($usernow,0,10); //Lấy ngày hiện tại
            $datemusted = substr($row[0],0,10); //Lấy ngày cuối điểm danh lần trc'
            if($datenow != $datemusted){//TH: hôm nay chưa điểm danh
                $sql = "update musters set lastmuster = '$usernow', countmuster = countmuster + 1 where email = '$email';";
                $sql .= "update balances set token = token + 1000 where email = '$email'";
                if($conn -> multi_query($sql)) {
                    $conn -> next_result();
                    echo "
                        Điểm danh thành công;
                        [ENTER] to close;
                    ";
                } else echo getUnidScript();
            } else{ //TH: đã điểm danh hôm nay
                echo "
                    Đã điểm danh rồi;
                    [ENTER] to close;
                ";
            }
        } else {//TH: điểm danh lần đầu
            $sql = "insert into musters (email, countmuster) values ('$email', 1);";
            $sql .= "insert into balances (email, token) values ('$email', 1000)";
            if($conn -> multi_query($sql)) {
                $conn -> next_result();
                echo "
                    Điểm danh thành công;
                    [ENTER] to close;
                ";
            }
        }
    } else{
        echo "
        Bạn chưa đăng nhập tài khoản;
        [ENTER] to close;
        ";
    }
?>