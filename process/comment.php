<?php
    if(isset($_POST['comment'])){
        if(isset($_SESSION['email'])){
            $content_box = $_POST['content-box'];
            $email = $_SESSION['email'];
            $sql = "insert into comments (email,comment) values ('$email','$content_box')";
            if($conn -> query($sql)){
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=./index.php\">";
                echo '
                <script>
                jQuery(document).ready(function(){
                    $("html, body").animate({
                        scrollTop: $("#comment").offset().top
                    }, 100);
                });
                </script>
                ';
            }
        } else{
            echo '
            <script>
            jQuery(document).ready(function(){
                $("#authForm").show();
            });
            </script>
            ';
        }
    }
?>