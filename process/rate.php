<?php 
    session_start();
    include '../db/database.php';

    $star = $_POST['star'];
    $email = "Anonymous@gmail.com";
    if(isset($_SESSION['email']))
        $email = $_SESSION['email'];

    if($email == "Anonymous@gmail.com"){//TH: user đánh giá la anonymous
        $sql = "select count(*) from rates where email = '$email'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){//TH anonymous khác đánh giá
            $row = mysqli_fetch_array($result);
            if($row[0] > 299){
                echo "Lượt đánh giá vô danh, đã đạt giới hạn cho phép";
            } else{
                $sql = "insert into rates (stars, email) values ($star,'$email')";
                if($conn -> query($sql)){
                    if($star > 2)
                        echo "Cám ơn bạn đã đánh giá, ".$star."sao.";
                    else
                        echo "Buồn quá web free xịn xò vậy mà cho có ".$star."sao.";
                }
            }
        } else{//TH website mới mở chưa ai đánh giá
            $sql = "insert into rates (stars, email) values ($star,'$email')";
            if($conn -> query($sql)){
                if($star > 2)
                    echo "Cám ơn bạn đã đánh giá, ".$star."sao.";
                else
                    echo "Buồn quá web free xịn xò vậy mà cho có ".$star."sao.";
            }
        }
    } else{//TH != anonymous
        $sql = "select count(*) from rates where email = '$email'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){//TH user này đã từng đánh giá mấy lần ó
            $row = mysqli_fetch_array($result);
            if($row[0] > 9){
                echo "Bạn đã đánh giá đủ số lần cho phép.";
            } else{
                $sql = "insert into rates (stars, email) values ($star,'$email')";
                if($conn -> query($sql)){
                    if($star > 2)
                        echo "Cám ơn bạn đã đánh giá, ".$star."sao.";
                    else
                        echo "Buồn quá web free xịn xò vậy mà cho có ".$star."sao.";
                }
            }
        } else{//TH user này chưa đánh giá lần nào
            $sql = "insert into rates (stars, email) values ($star,'$email')";
            if($conn -> query($sql)){
                if($star > 2)
                    echo "Cám ơn bạn đã đánh giá, ".$star."sao.";
                else
                    echo "Buồn quá web free xịn xò vậy mà cho có ".$star."sao.";
            }
        }
    }

    $conn->close();
?>