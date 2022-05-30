<?php
	require_once './d/connectdbOFF.php';
?>
<!DOCTYPE html>
   <html>
      <head>
		<meta charset="UTF-8">
		<title>Quản trị</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
	    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
		<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" />
		<link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<style>
		#outer{
			display: flex;
			height: 100vh;
		}
		#outer div{
			
		}
		#left{
			border: 2px solid black;
			width: 25%;
			display: flex;
			justify-content:center;
     		align-items:center;
		}
		#left button{
			width: 95%;
			padding: 15px;
		}
		#right{
			border: 1px solid black;
			width: 100%;
		}
	</style>
	</head>
<body>
	<div id="outer">
		<div id="left">
			<form method="post">
			<button name="btn1" class="btn btn-primary">Thống kê yêu cầu nạp thẻ</button><br>
			<button name="btn2" class="btn btn-primary">Thống kê điểm ddcoin toàn mem</button><br>
			<button name="btn3" class="btn btn-primary">Dịch vụ yêu cầu mem request</button><br>
			<button name="btn4" class="btn btn-primary">HỘP THƯ to ADMIN</button><br>
			<button name="btn5" class="btn btn-primary">HỘP THƯ from ADMIN</button><br>
			<button name="btn6" class="btn btn-primary">Viết thư gửi đến all mem</button><br>
			<button name="btn7" class="btn btn-primary">Gửi ddcoin tới tất cả mem</button><br>	
			<button name="btn8" class="btn btn-primary">Gửi cw($) tới all mem</button>
			<?php require './process.php'; ?>
			</form>
		</div>
		<div id="right">
			
		</div>
	</div>
<?php
	$connOFF -> close();
?>
</body>
</html>