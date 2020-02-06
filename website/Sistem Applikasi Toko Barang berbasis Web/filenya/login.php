<?php 
 	@session_start(); 
 	include'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<style type="text/css">
		body{
			font-family: verdana;
			font-size: 14px;
			background-color: #222;
		}
		#utama{
			width: 300px;
			margin: 0 auto;
			margin-top:12%;

		}

		#judul{
			padding: 15px;
			text-align: center;
			color: #fff;
			font-size: 20px;
			background-color: #875bcf;
			border-top-right-radius: 10px; /* untuk melipat ujung dari border */
			border-top-left-radius: 10px;
			border-bottom: 3px solid #ccc;


		}

		#inputan{
			background-color: #eaeaec;
			padding: 20px;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
		}
		input{
			padding: 10px;
			border: 0px;
		}
		.lg{
			width: 240px; /* mengatur panjang border login dan password */
		}
		.btn{
			background-color: #875bcf;
			border-radius: 10px;
			color: #fff;
		}
		.btn:hover{
			background-color: #3399666;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div id="header">
		<br>
		<br>

	</div>
<div id="utama">
	<div id="judul">
		Halaman login
	</div>
	<div id="inputan">
		<form action="" method="post"> <!-- tag/form membuat inputan -->
			<div>
				<input type="text" name="user" placeholder="Username" class="lg" /> <!-- inputan untuk login nama -->
			</div>
			<div style="margin-top:10px; ">
				<input type="password" name="pass" placeholder="password" class="lg" /> <!-- inputan untuk login password -->
			</div>
			<div style="margin-top:10px; ">
				<input type="submit" name="login" value="login" class="btn" /> <!-- untuk tombol login -->
			</div>
		</form>

		<?php 
 		$user = @$_POST['user'];
 		$pass = @$_POST['pass'];
 		$login = @$_POST['login'];

 			if($login){
 			 	if($user == "" || $pass ==""){
 				?> <script type="text/javascript"> alert ("Username/password tidak boleh kosong");</script> <?php
 			} else {
 					$sql = mysqli_query($conn, "select * from tb_login where username ='$user' and password = md5('$pass') ") or die (mysqli_error());
 					$data = mysqli_fetch_array($sql);
 					$cek = mysqli_num_rows($sql);
 				if($cek >= 1){
 					if($data ['level'] == "admin"){
 						@$_SESSION['admin']== $data['kode_user'];
 						header("Location: index.php");
 					} elseif ($data['level'] == "operator"){
 						@$_SESSION['operator'] == $data['kode_user'];
 						header("Location: indexuser.php");
 					}
 				} else {
 					echo"login gagal";
 				}

 			 	}
 			}
		 ?>
		
	</div>
</div>

</body>
</html>