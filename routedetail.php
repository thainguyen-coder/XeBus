<!DOCTYPE html>
<html>
<head>
	<title>Mau</title>
	
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
	
	body {
		background: #EEEEEE;
		margin: 0;
		padding: 0;
		font-family: Verdana;
		font-size: 14px;
		line-height: 1.5em;
	}
	#map { 
		width: 1150px; 
		height: 500px; 
		border: 0px;
		padding: 0px; }
		#main {
			width: 1500px;
			height: 900px;
			margin: 0 auto;
		}
		#head {
			height: 120 px;
			background:#0b577a;
			color: #fff;
		}
		#head h1{
			margin: 0;
			padding: 5px 17px;
			font-family: "Time New Roman";
			font-size: 1.3em;
		}
		#head h2{
			margin: 0;
			padding: 5px 15px;
			font-family: "Time New Roman";
			font-size: 1.3em;
		}
		#head h3{
			margin: 0;
			padding: 5px 15px;
			font-family: "Time New Roman";
			font-size: 1.3em;
		}
		#menutop {
			height: 40px;
			background: #673ab7;
			color: #fff;
		}
		#menutop ul{
			margin: 0;
			padding: 0;
			list-style: none;
		}
		#menutop ul li a{
			float: left;
			text-decoration: none;
			color: white;
			padding: 10px 100px;
			font-weight: bold;
		}
		#detail{
			height: auto;
			width: 1280px;
			padding: 5px 30px;
		}
		#infor{
			height: 500px;
			width: auto;
		}
		#infor ul li{
			list-style: none;
			line-height: auto;
		}

		#right{
			float: right;
			height: 500px;
			width: auto;
			border: 1px solid #000000;
			margin-top: 5px;
			margin-bottom: 10px;
		}
		#footer {
			clear: both;
			background: #144d68;
			color: white;
		}
		#a1{
			text-align: center;
		}
		#row{
			border: 1px solid red;
			width: 500px;
		}
	</style>
	<body>
		<div id="main">
			<div id="head">
				<h1 style="text-align: center;color: #00CC00;background: #EEEEEE">Hỗ trợ người đi xe buýt</h1>
				<h2 style="text-align: center;color: #00CC00;background: #EEEEEE">tại TP.QUY NHƠN </h2>
			</div>
			<div id="menutop">
				<ul>
					<li><a href="index.php?options=trangchu">Trang chủ</a></li>
					<li><a href="index.php?options=gioithieu">Giới thiệu</a></li>
					<li><a href="index.php?options=thongtin">Thông tin tuyến</a></li>
					<li><a href="index.php?options=phananh">Phản ánh</a></li>
					<li><a href="index.php?options=hotro">Hỗ trợ</a></li>
				</ul>
			</div>
			<div id="maincontent">
				<div id="content">
					<?php
					$options = isset($_GET['options']) ? $_GET['options'] : null;
					switch ($options ) {
						case 'trangchu':
						include "home.php";
						break;
						case 'gioithieu':
						include "about.php";
						break;
						case 'thongtin':
						include "route.php";
						break;
					
						case 'phananh':
						include "feedback.php";
						break;
						case 'hotro':
						include "help.php";
						break;
					}
					?>

				</div>
			</div>
				<div id="detail">
				<div class="left">
					<h2 style="text-align: center; ">Danh sách các tuyến xe buýt Tp.Quy Nhơn</h2>
				</div>	
				<div class="row">
					<?php require"routedetailcontent.php" ?>
					<div class="col-sm-4">
						<div class="p1">
							<h3 style="color: green">Lộ trình:</h3>
							<span>Đi đến:</span>
						<select >
							<?php 

							include 'config.php';
							$id = isset($_GET['id']) ? $_GET['id'] : '';
								//cau len sql 
							$query = "select * from route_setting where routeId = '$id' ";
								//xu li cau lenh sql
							$result = mysqli_query($conn, $query);
							while($row = mysqli_fetch_array($result))
							{

								echo '<option value="">';
								echo $row['name']."<br>";
								echo '</option>';
							}	

							?>

						</select>
						</div>
				</div>
					<div class="col-sm-8">
						<div class="p1">
							<?php 

							require"map.php";
							?>

						</div>
					</div>
				</div>
				</div>
						<div>
							<?php require"footer.php" ?> 	
						</div>
						<!--khung trang web -->
</body>
</html>