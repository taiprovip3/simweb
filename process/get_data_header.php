<?php
    //update view +1
    $ip_address = gethostbyname("www.google.com");
    $sql = "select * from visitors where ip = '$ip_address'";
    $result = $conn->query($sql);
    $email = "Anonymous@gmail.com";
    if(isset($_SESSION['email']))
        $email = $_SESSION['email'];
    if($result->num_rows <=0){
        $sql = "insert into visitors (ip,view,email) values ('$ip_address',1,'$email')";
        $conn->query($sql);
    } else{
        $sql = "update visitors set view = view + 1 where ip = '$ip_address'";
        $conn->query($sql);
    }

    //get views
    $sql = "select sum(view) from visitors";
    $result = $conn->query($sql);
    $views = 0; //<-
    if($result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        $views = $row[0];
    }

    //get stars
    $sql = "select avg(stars) from rates";
    $result = $conn->query($sql);
    $avg_stars = 0; //<-
    if($result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        $avg_stars = round($row[0],1);
    }

    //get members
    $sql = "select count(*) from users";
    $result = $conn->query($sql);
    $members = 0; //<-
    if($result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        $members = $row[0];
    }
?>