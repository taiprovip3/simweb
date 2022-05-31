<?php
    include './db/database.php';

    $sql = "select * from comments";
    $result = mysqli_query($conn, $sql);
    $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
    json_encode($json);
    $countrow = count($json);
    for ($i = 0; $i < $countrow; $i++)
    {
        $row = $json["$i"];
        $day = substr($row["time"],8,2);
        $month = substr($row["time"],5,2);
        $year = substr($row["time"],0,4);
        $time = substr($row["time"],11);
        $date = $day."/".$month."/".$year;
        echo '
        <div class="bg-light text-success p-3" id="cmt">
            <div>
                <img src="./img/user.png" class="img-thumbnail" width="90px">
            </div>
            <div>
                <p>'.$date.' ; '.$time.' AM</p>
                <p>&emsp;<i class="fas fa-pen-square"> '.$row["comment"].'.</i></p>
                <a href="./file/user-info?email='.$row["email"].'">'.$row["email"].'</a>
            </div>
        </div>
        ';
    }

    $conn->close();
?>