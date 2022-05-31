
<?php
    session_start();
    include_once './db/database.php';
    include './process/get_data_header.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="grass.rf.gd mạng lưới máy chủ hàng đầu việt nam. Đa năng, toàn diện và hoàn toàn miễn phí">
    <title>nhinguyen.rf.gd - trang chủ - cửa hàng files - cửa hàng plugins - website miễn phí - server minecraft tại việt nam</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/ad778f42b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/index.css?i=1" type="text/css">
    <link href="./img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 p-3" id="outer">
            <div class="p-3" id="title">
                <img src="./img/title.png" width="100%">
                <img src="./img/slogan.png" width="70%">
            </div>
            <div id="intro">
                <div>
                    <img src="./img/headMember.png" alt="thanhvien" width="30%" class="img-circle">
                    <p><span id="intro-span"><?php echo $members; ?></span> thành viên</p>
                </div>
                <div>
                    <img src="./img/star.png" alt="thanhvien" width="30%" class="img-circle">
                    <p>Chất lượng: <span id="intro-span"><?php echo $avg_stars; ?><i class="fa fa-star" style="color: yellow;"></i></span> (6 lượt vote)</p>
                </div>
                <div>
                    <img src="./img/views.png" alt="thanhvien" width="30%" class="img-circle">
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
                            <a class="nav-link active" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./file/phucloi.php">Phúc lợi</a>
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
                        <h3>Giới thiệu</h3>
                        <p>Lịch sử ra đời & hình thành của nhinguyen.rf.gd và công dụng của website ra đời.</p>
                        <a id="go-down-info">Cuộn xuống></a>
                    </div>
                    <!-- <div>
                        <h3>Tool quản lý</h3>
                        <p>Cho phép quản lý dữ liệu người dùng và dữ liệu, do admin hoặc staff sử dụng.</p>
                        <a id="go-down-manager">Cuộn xuống></a>
                    </div> -->
                    <div>
                        <h3>Trợ giúp</h3>
                        <p>Hướng dẫn bạn một vài tính năng khó hiểu hoặc diễn tả chi tiết một đặc trưng, chỉ dẫn nào đó.</p>
                        <a id="go-down-help">Cuộn xuống></a>
                    </div>
                    <div>
                        <h3>Hỗ trợ</h3>
                        <p>Liên lạc nhà phát triển trực tiếp để sử lý vấn đề đang gặp phải nhanh nhất trành mất thời gian tìm hiểu.</p>
                        <a id="go-down-support">Cuộn xuống></a>
                    </div>
                    <div>
                        <h3>Bình luận</h3>
                        <p>Thăm dò một vài ý kiến cá nhân của bạn bè cùng lứa và hỗ trợ nhau hỏi đáp hoặc đưa ra ý kiến.</p>
                        <a id="go-down-comment">Cuộn xuống></a>
                    </div>
                    <div id="rating_container">
                        <div class="text-center" id="rating_div">
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <br>
                            <a id="rate" class="text-danger">Bình chọn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-1 container" id="info">
            <div class="row">
                <div class="col-lg-12 border bg-success text-white text-center">
                    <h3>GIỚI THIỆU</h3>
                    <i class="fa-solid fa-file-pen fa-2x"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <figure>
                        <blockquote class="blockquote">
                            <p class="display-4 text-danger"><span class="badge bg-danger">1</span>Minecraft wikipedia:</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mark">
                            Minecraft là một trò chơi điện tử độc lập trong một thế giới mở với phong cách sandbox, được phát hành vào năm 2009 bởi lập trình viên người Thụy Điển Markus "Notch" Persson và sau đó được phát triển và phát hành bởi Mojang Studio. Khả năng sáng tạo và xây dựng Minecraft cho phép người chơi xây dựng các công trình bằng cách kết hợp các khối lập phương kết cấu trong một thế giới 3D. Các hoạt động khác trong game bao gồm tìm kiếm, thu thập tài nguyên, chế tạo và chiến đấu. <a href="https://vi.wikipedia.org/wiki/Minecraft" target="_blank">[trích dẫn]</a>
                        </figcaption>
                    </figure>
                    <figure>
                        <blockquote class="blockquote">
                            <p class="display-4 text-warning"><span class="badge bg-warning">2</span>"nhinguyen" channel:</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mark">
                            Kênh youtube được thành lập từ năm 2013 với những nội dung bình thường của 1 con người bình thường. Hiện tại kênh đã chuyển sang làm content về minecraft liên quan đến server và file chủ yếu dành cho các configer và admin tham khảo. Hiện tại mình chỉ có một kệnh YT duy nhất là : "nhinguyen". Các file từ video khác có thể do reupload lại từ mình. <a href="https://www.youtube.com/channel/UCWB4agz7YPLibGMLUtydeyQ" target="_blank">[liên kết]</a>
                        </figcaption>
                    </figure>
                    <figure>
                        <blockquote class="blockquote">
                            <p class="display-4 text-primary"><span class="badge bg-primary">3</span>Website official:</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mark">
                            Trải qua nhiều lần cập nhật phiên bản giao diện và ip cũ <b>grass.rf.gd</b> giờ đây website sẽ lấy ip mới chính thức là <b>nhinguyen.rf.gd</b> để đồng bộ với tên channel cho các bạn nhớ đến nó dễ dàng. Admin website này 1 cá nhân personally. Admin mong muốn chia sẽ content các bạn có cùng ý tưởng về server minecraft, hỗ trợ các bạn các tài nguyên trong việc phát triển máy chủ minecraft.
                        </figcaption>
                    </figure>
                    <figure>
                        <blockquote class="blockquote">
                            <p class="display-4 text-success"><span class="badge bg-success">4</span>Máy chủ <u>GRASSMC.COM</u>:</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mark">
                            Server minecraft này đã trải qua hơn 10 season, mặc dù chỉ là 1 server con trong 1 rừng server minecraft Việt Nam. Nhưng đã thu lại những thành tựu đáng nể. Máy chủ chính là skyblock và rễ là các server, cũng từng có vài lần update ra minigame nhưng đã thất bại. Hiện tại mình cần tuyển 1 số lượng admin (configer) từ 3-4 bạn để cùng nhau xây dựng 1 server lớn mạnh, lợi ích chia đều. Chi tiết hãy xem hướng dẫn trên!
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-lg-12 mt-1 container">
            <div class="row">
                <div class="col-lg-12 border bg-success text-white text-center">
                    <h3>TOOL QUẢN LÝ</h3>
                    <i class="fa-solid fa-screwdriver-wrench fa-2x"></i>
                </div>
            </div>
            <div class="row">
                <div id="object">
                    <div class="text-center">
                        <img src="./img/employee.png" class="rounded-circle" width="100%">
                        <a href="#">Employee</a>
                    </div>
                    <div class="text-center">
                        <img src="./img/admin.png" class="rounded-circle" width="100%">
                        <a href="#">Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-lg-12 mt-1 container" id="help">
            <div class="row">
                <div class="col-lg-12 border bg-success text-white text-center">
                    <h3>TRỢ GIÚP / FAQ / Q&A</h3>
                    <i class="fa-solid fa-circle-question fa-2x"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <figure>
                        <blockquote class="blockquote">
                            <code>Mua file xong vào đâu lấy?</code>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            -> Đến trang chủ -> nhấp vào icon cá nhân -> chọn túi đồ -> ...
                        </figcaption>
                    </figure>
                    <figure>
                        <blockquote class="blockquote">
                            <code>Tại sao phải thông qua uploading trung gian?</code>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Tổ chức website này không hề có thu nhập, chia sẽ tập tin vì sở thích và cũng cần có tiền, mình cần thông qua trung gian để nhận thêm tiền cho quảng cáo. Các bạn nhận dữ liệu này hãy xem như một giao dịch và mong bạn bỏ ra một ít thời gian!
                        </figcaption>
                    </figure>
                    <figure>
                        <blockquote class="blockquote">
                            <code>Token có free không?</code>
                        </blockquote>
                        <figcaption class="blockquote-footer ">
                            Có, bằng cách điểm danh hằng ngày <a href="#">[điểm danh]</a>
                        </figcaption>
                    </figure>
                    <figure>
                        <blockquote class="blockquote">
                            <code>Có bị ban ip khi tạo nhiều tài khoản?</code>
                        </blockquote>
                        <figcaption class="blockquote-footer ">
                            Hệ thống có scan ips và ghi nhớ thời gian hoạt động của bạn, dễ dàng nhận ra bạn đang có gian lận và tự động ban vĩnh viễn. Hy vọng bạn chấp thuận chính sách 1 tài khoản duy nhất. Trường hợp sai phạm, liên hệ cá nhân mình xin phép không giải quyết.
                        </figcaption>
                    </figure>
                    <figure>
                        <blockquote class="blockquote">
                            <code>Credit kiếm kiểu gì?</code>
                        </blockquote>
                        <figcaption class="blockquote-footer ">
                            <ul>
                                Bạn chuyển khoản qua STK {momo: <a>0338188506</a> hoặc mbbank: <a>0338188506</a>} với nội dung:"
                                <li>[username]</li>
                                <li>[email]</li>
                                <li>[lời nhắn]</li>
                                Sau 3-4h lượng credit tương ứng sẽ vào túi của bạn.
                                Xem chi tiết mệnh giá nạp credit <a href="#">[mệnh giá]</a><br>
                                Mình chỉ có thể lấy uy tín là các kênh truyền thông đã hoạt động. Chưa hoàn thiện hệ thống nạp thể chính thức vì đang gặp sự cố với bên cung cấp API.
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-1 container" id="support">
            <div class="row">
                <div class="col-lg-12 border bg-success text-white text-center">
                    <h3>HỖ TRỢ / LIÊN HỆ</h3>
                    <i class="fa-solid fa-headset fa-2x"></i>
                </div>
            </div>
            <div class="row">
                <code>Mạng xã hội thường dùng, không offline quá 24h, ae cứ ib hỏi đáp đừng ngại:</code>
                <div class="text-center" id="contact">
                    <div>
                        <img src="./img/channel.PNG" width="300px" height="300px"><br>
                        <a href="https://www.youtube.com/channel/UCWB4agz7YPLibGMLUtydeyQ" target="_blank">[liên kết] <i class="fa-solid fa-square-up-right"></i></a>
                    </div>
                    <div>
                        <img src="./img/facebook.PNG" width="300px" height="300px"><br>
                        <a href="https://www.facebook.com/taiproduaxe/" target="_blank">[liên kết] <i class="fa-solid fa-square-up-right"></i></a>
                    </div>
                    <div>
                        <img src="./img/zalo.PNG" width="300px" height="300px"><br>
                        <a href="https://chat.zalo.me/" target="_blank">[liên kết] <i class="fa-solid fa-square-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-1 container" id="comment">
            <div class="row">
                <div class="col-lg-12 border bg-success text-white text-center">
                    <h3>BÌNH LUẬN</h3>
                    <i class="fa-solid fa-comments fa-2x"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-3 mb-3">
                    <form method="post">
                    <textarea maxlength="255" class="border p-3" name="content-box" id="content-box" rows="5" placeholder="Viết lên suy nghĩ của bạn..." required></textarea>
                    <input type="submit" value="Đăng tải" class="btn btn-outline-primary btn-lg" name="comment">
                    <?php include './process/comment.php'; ?>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <?php include './process/get_comment.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--end container-fluid-->
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
            <p id="logged">'.$_SESSION['email'].', <a href="./process/logout.php">logout</span></a>
            ';
        } else{
            echo '
            <i class="fas fa-user-secret"></i>
            <p id="anonymous">Anonymous, <span class="text-primary">login</span></p>
            ';
            echo '
                <script>
                jQuery(document).ready(function(){
                    $("#authForm").show();
                });
                </script>
            ';
        }
    ?>
</div>
<!-- authForm {fixed} -->
<style>
    #authForm{
        display: none;
        background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
        padding: 40px;
        position: fixed;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    #closeForm{
        position: absolute;
        top: 1px;
        right: 8px;
    }
    #closeForm:hover{
        cursor: pointer;
    }
    .error {
        display: none;
    }
    #register-success-announcer{
        display: none;
    }
</style>
<div class="generalModal" id="authForm">
    <div id="closeForm">
        <span class="text-white">[ESC]</span>
    </div>
    <div id="loginForm">
        <form method="post">
        <div class="text-center text-white">
            <h2 class="text-dark">ĐĂNG NHẬP TÀI KHOẢN</h2>
        </div>
        <div class="form-floating mt-3 mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập vào email" required>
            <label for="username">Tên đăng nhập</label>
        </div>
        <div class="form-floating mt-3 mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu" required>
            <label for="password">Mật khẩu</label>
        </div>
        <input type="submit" class="btn btn-dark btn-lg" value="Đăng nhập" name="login">&emsp;Chưa có tài khoản? <span class="badge bg-dark" id="changeToRegister">Đăng ký</span>
        <?php include './process/login.php'; ?>
        </form>
    </div>
    <div id="regisForm" style="display: none;">
        <form id="regisFormSubmit">
        <div class="text-center text-white">
            <h2>ĐĂNG KÝ TÀI KHOẢN</h2>
        </div>
        <span class="text-danger error" id="error-email">(*) Vui lòng nhập địa chỉ email</span>
        <div class="form-floating mt-3 mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập vào địa chỉ email" data-bs-toggle="tooltip" title="Không được bỏ trống">
            <label for="email">Email</label>
        </div>
        <span class="text-danger error" id="error-password">(*) Trường mật khẩu chưa đáp ứng</span>
        <div class="form-floating mt-3 mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu" data-bs-toggle="tooltip" title="Ít nhất 8 kí tự">
            <label for="password">Mật khẩu</label>
        </div>
        <span class="text-danger error" id="error-repassword">(*) Nhập lại mật khẩu chưa đáp ứng</span>
        <div class="form-floating mt-3 mb-3">
            <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Nhập lại mật khẩu" data-bs-toggle="tooltip" title="Phải giống mật khẩu phía trên">
            <label for="password">Nhập lại mật khẩu</label>
        </div>
        <button type="button" class="btn btn-dark btn-lg" id="register">Đăng ký</button>&emsp;Đã có tài khoản? <span class="badge bg-dark" id="changeToLogin">Đăng nhập</span><br><br>
        <span class="text-danger"><i>Nhấp đăng ký và chờ khoản ~30s rồi xác thực qua hộp mail!</i></span>
        </form>
    </div>
</div>
<!-- announcer {fixed} -->
<style>
    #announcer{
        display: none;
        font-size: x-large;
        position: fixed;
        left: 50%;
        bottom: 0;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
    }
</style>
<div class="alert alert-success" id="announcer">
    <strong>Success!</strong> Đăng ký tài khoản thành công.
</div>
<!-- rating box {fixed} -->
<style>
    #rating-box{
        display: none;

        position: fixed;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);

        border-radius: 10px;
    }
    #rating-close{
        position: absolute;
        right: -10px;
        top: 0;
        width: 10%;
    }
    #rating-box i:hover{
        cursor: pointer;
    }
    #rating-box i{
        margin: 5px;
        padding: 5px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
</style>
<div class="bg-success text-warning text-center p-3" id="rating-box">
    <div id="rating-close">
        <i class="fas fa-times" id="rating-close-i"></i>
    </div>
    <i class="far fa-star fa-5x" id="star1"></i>
    <i class="far fa-star fa-5x" id="star2"></i>
    <i class="far fa-star fa-5x" id="star3"></i>
    <i class="far fa-star fa-5x" id="star4"></i>
    <i class="far fa-star fa-5x" id="star5"></i>
</div>
<!-- scroll TOP {fixed} -->
<style>
    #scrollTop{
        display: none;
        position: fixed;
        right: -8px;
        bottom: 0;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        margin: -10px;
    }
    #scrollTop:hover{
        cursor: pointer;
        opacity: 0.8;
        background: lightgrey;
        color: green;
    }
</style>
<div id="scrollTop">
    <i class="fab fa-autoprefixer fa-2x"></i>
</div>
<!-- Snow animation -->
    <!-- <div class="snow">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow2">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow3">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow4">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow5">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow6">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow7">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow8">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow9">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow10">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow11">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow12">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow13">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow14">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow15">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow16">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow17">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow18">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow19">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow20">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow21">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow22">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow23">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow24">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow25">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow26">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow27">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow28">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow29">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow30">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow31">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow32">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow33">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow34">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow35">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow36">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow37">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow38">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow39">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow40">
        <i class="fa-solid fa-snowflake"></i>
    </div>
    <div class="snow" id="snow41">
        <i class="fa-solid fa-snowflake"></i>
    </div> -->
<script src="./js/index.js?i=1" type="text/javascript"></script>
<?php if(is_resource($conn)) mysqli_close($conn); ?>
</body>
</html>