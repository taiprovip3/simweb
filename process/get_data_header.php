<?php
    include '../db/database.php';
    $ip_address = gethostbyname("www.google.com");
    $sql = "select * from visitors where ip = '$ip_address'";
    $result = $conn->query($sql);
    if($result->num_rows <=0){
        $sql = "insert into visitors values ('','$ip',1)";
        mysqli_query($dbOFF, $sql);
    } else{
        $sql = "update visitors set view = view + 1 where ip = '$ip'";
        mysqli_query($dbOFF, $sql);
    }
?>