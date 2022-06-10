<?php
    session_start();
    include_once '../db/database.php';
    include '../process/get_data_header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhinguyen.rf.gd - trang chủ - cửa hàng files - cửa hàng plugins - website miễn phí - server minecraft tại việt nam</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/ad778f42b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/common.css?i=1" type="text/css">
    <link rel="stylesheet" href="../css/phucloi?i=1" type="text/css">
    <link href="../img/favicon.ico" rel="icon" type="image/x-icon" />
    <style>
        #muster-eye{
            display: flex;
        }
        #muster-eye div{
            width: 100%;
        }
        #muster-eye-left img{
            box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
        }
        #muster-eye-left img:hover{
            cursor: pointer;
            box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 p-3" id="outer">
            <div class="p-3" id="title">
                <img src="../img/title.png" width="100%">
                <img src="../img/slogan.png" width="70%">
            </div>
            <div id="intro">
                <div>
                    <img src="../img/headMember.png" alt="thanhvien" width="30%" class="img-circle">
                    <p><span id="intro-span"><?php echo $members; ?></span> thành viên</p>
                </div>
                <div>
                    <img src="../img/star.png" alt="thanhvien" width="30%" class="img-circle">
                    <p>Chất lượng: <span id="intro-span"><?php echo $avg_stars; ?><i class="fa fa-star" style="color: yellow;"></i></span> (6 lượt vote)</p>
                </div>
                <div>
                    <img src="../img/views.png" alt="thanhvien" width="30%" class="img-circle">
                    <p>Lượt ghé webite: <span id="intro-span"><?php echo $views;?></span></p>
                </div>
            </div>  
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-1 container">
            <div class="row">
                <div class="col-lg-12 border bg-success text-white text-center">
                    <h3>CHỨC NĂNG</h3>
                    <i class="fa-solid fa-explosion fa-2x"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 p-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Phúc lợi</a>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cửa hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tải lên</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dịch vụ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản lý</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div id="menu">
                    <div>
                        <h3>Điểm danh</h3>
                        <p>Nhận token miễn phí bằng cách điểm danh hằng ngày.</p>
                        <a id="go-down-muster">Cuộn xuống></a>
                    </div>
                    <div>
                        <h3>Nhập code</h3>
                        <p>Các ngày lễ lớn thường có giftcode đặc biệt tri ân các thành viên.</p>
                        <a id="go-down-code">Cuộn xuống></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-1 container" id="muster">
            <div class="row">
                <div class="col-lg-12 border bg-success text-white text-center">
                    <h3>ĐIỂM DANH</h3>
                    <i class="fas fa-calendar-check fa-2x"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-3 mb-3 text-white" id="muster-eye">
                    <div class="text-center bg-secondary" id="muster-eye-left">
                        <img src="../img/enderEye.gif" alt="enderEye" class="rounded-circle" width="100%" id="let-muster">
                        <p>Nhấp điểm danh</p>
                    </div>
                    <div class="bg-dark text-white p-3" id="muster-eye-right">
                        <h5><code>QUY TẮC:</code></h5>
                        <ul>
                            <li>Không tạo nhiều hơn 1 tài khoản, điểm danh.</li>
                            <li>Reset điểm danh mỗi 00:00</li>
                        </ul>
                        <h5><code>PHẦN THƯỞNG:</code></h5>
                        <ul>
                            <li>+1 token</li>
                            <li>+1 tích luỹ</li>
                        </ul>
                        <h5><code>ĐIỂM CÁ NHÂN:</code></h5>
                        <ul>
                            <li>Token hiện tại: <span class="badge bg-success">0</span></li>
                            <li>Tổng tích luỹ: <span class="badge bg-success">0</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #code-box{
            display: flex;
            justify-content: center;
        }
        #code-box-left{
            display: table;
        }
        #code-box-left > div{
            display: table-cell;
            vertical-align: middle;
        }
        #code-box-right{
            position: relative;
            width: 100%;
        }
        #capcha_random{
            color: blue;
            border-radius: 5px;
            text-align: center;
        }
        #btn-submit{
            position: absolute;
            right: 5px;
            bottom: 5px;
        }
    </style>
    <div class="row">
        <div class="col-lg-12 mt-1 container" id="code">
            <div class="row">
                <div class="col-lg-12 border bg-success text-white text-center">
                    <h3>NHẬP CODE</h3>
                    <i class="fab fa-xbox fa-2x"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-3 mb-3 text-white" id="code-box">
                    <div class="text-center bg-dark" id="code-box-left">
                        <div>
                            <img src="../img/fixerror.png" alt="fixerrr" class="rounded-circle" width="100%" height="100%">
                        </div>
                    </div>
                    <div class="bg-dark text-white p-3" id="code-box-right">
                        <div class="form-group">
                            <label for="sel-user">Chọn nhân vật:</label>
                            <select name="sel-user" id="sel-user" class="form-control">
                                <option value="nhito1doraemon@gmail.com">nhito1doraemon@gmail.com</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="code">Nhập mã code:</label>
                            <input type="text" name="code" id="code" placeholder="Nhập mã code sự kiện vào đây để nhận thưởng" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="code">Mã xác nhận:</label><br>
                            <input type="text" name="capcha_random" id="capcha_random" readonly value="BHG8X">
                            <input type="text" name="capcha" id="capcha" placeholder="Nhập mã xác nhận để anti robot" class="form-control mt-1 mb-1">
                        </div>
                        <br><br>
                        <div id="btn-submit">
                            <input type="submit" value="Xác nhận" class="btn btn-success btn-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- iPerson {fixed} -->
<style>
    #iPerson{
        position: fixed;
        right: 0;
        top: 0;
        border-radius: 15px;
    }
    #iPerson:hover{
        cursor: pointer;
        opacity: 0.5;
        background: lightslategrey;
    }
</style>
<div class="border text-center p-3" id="iPerson">
    <?php
        if(isset($_SESSION['email'])){
            echo '
            <i class="fas fa-user-check fa-2x"></i><br>
            <a href="#">Túi cá nhân</a>
            <p id="logged">'.$_SESSION['email'].', <a href="../process/logout.php">logout</span></a>
            ';
        } else{
            echo '
            <i class="fas fa-user-secret"></i>
            <p id="anonymous">Anonymous, <a href="../index.php">login</a></p>
            ';
        }
    ?>
</div>
<script>
$(document).ready(function(){
    $("#let-muster").click(function(){
        $.ajax({
            type: "POST",
            url: "../process/muster.php",
            dataType: "html",
            success: function(result){
                alert(result)
            }
        });
    });

    //click cuộn lên/xuống
    $("#menu").children().children("a").click(function(){
        var x = $(this).attr('id');
        var elementScrollTo = x.substring(8); //go-down-info
        $('html, body').animate({
            scrollTop: $("#"+elementScrollTo+"").offset().top
        }, 1000);
    });
});
</script>
<?php if(is_resource($conn)) mysqli_close($conn); ?>
</body>
</html>