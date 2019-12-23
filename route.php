<!DOCTYPE html>
<html>
<head>
	<title>QUY NHON MAP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.xe-buyt.com/Resources/cms/core.js?vrs=1.16" type="text/javascript"></script>
	<script src="https://cdn.xe-buyt.com/Resources/cms/common.js?vrs=1.16" type="text/javascript"></script>
	<script src="https://cdn.xe-buyt.com/Resources/cms/fulltextSearch.js?vrs=1.16" type="text/javascript"></script>
	<script src="https://cdn.xe-buyt.com/Resources/cms/leaflet.js?vrs=1.16" type="text/javascript"></script>
	<script src="https://cdn.xe-buyt.com/Resources/cms/L.RouteMap.js?vrs=1.16" type="text/javascript"></script>
	<script src="https://cdn.xe-buyt.com/Resources/cms/routevar.js?vrs=1.16" type="text/javascript"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="icon" href="https://xe-buyt.com/favicon.ico" />
	<link rel="shortcut icon" href="https://xe-buyt.com/favicon.ico" />
</head>
<style type="text/css">
	.header{
		padding: 16px;
	}
	.like{
		width: 124px;
		height: 80px;
		float: left;
		color: #34B67A;
	}
	.s{
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		color: #34B67A;
	}
	.clear{
		clear: both;
	}
	.main-menu{
		background-color: #34B67A;
		width: 100%;
		height:40px;
	}
	.dl{
		
		height:50px;
	}
	li{
		float: left;
	}
	.content-top-wraper{
		margin: 20px 2% 0;
	}
	element.style{
		height: auto ! important;
	}
	
	.dnnFormItem .cms-space-small, .dnnFormItem .cms-button-small{
		width: 80px;
		line-height: 16px;
		text-align: center;
		vertical-align: middle;
		font-size: 13px !important;
		margin: 0px;
		margin-top: 16px;
		margin-left: 10px;
		padding: 5px;
		margin-bottom: 19px;
	}
	.cms-button:hover{
		text-decoration: none !important;
		color: #121212 !important;
		border: 1px solid #34B67A;
		background: none repeat scroll 0 0 #ffffff;
	}
	.NewsTwoMain h1, .NewTwoMain h2, .NewTwoMain h3, .NewTwoMain h4{
		font-size: 24px;
		padding: 0;
		font-weight: normal;
		line-height: 1.2;
		letter-spacing: normal;
		text-transform: none;
	}
	h1{
		margin-block-start: 0.67em;
		margin-block-end: 0.67em;
		margin-inline-start: 0px;
		margin-inline-end: 0px;
	}
	h1.titlelistroute{
		margin:  5px 10px !important;
		color:#34B67A !important;
		background-color: #ccc;
	}
	#iXeBuyt.DNNModuleContent{
		background: #FBFBFB;
	}
	.eds_containers_NewsTwo.eds_templateGroup_default.DNNModuleContent{
		border: 1px solid #dadada;
		padding: 10px;
	}
	.eds_containers_NewsTwo.eds_templateGroup_default {

		border: 1px solid #dadada;
		background-color: #F1F1F1;
	}
	.NewsTwoMain .DnnModule{
		padding-bottom: 10px;
	}
	.cms{

		display: inline-block;
		color: #FFFFFF !important;
		border: 1px solid #ffffff;
		background: none repeat scroll 0 0 #34B67A;
	}
	.cms-button{
		margin-left: 11px;
		margin-bottom: 10px;
		width:277px;
		height: 46px;
		display: inline-block;
		color: #FFFFFF !important;
		border: 1px solid #ffffff;
		background: none repeat scroll 0 0 #34B67A;
	}
	.dnnFormItem input[type="text"], 
	.dnnFormItem input[type="password"], 
	.dnnFormItem input[type="email"], 
	.dnnFormItem input[type="tel"], 
	.dnnFormItem select, 
	.dnnFormItem textarea {
		width: 45%;
		max-width: 445px;}
		.EasyDNNSkin_NewsTwo .NewsTwoBackgroundGradient {
			background-image: url(image/ll.jpg);
			background-attachment: fixed;
			padding: 10px 0px;
		}
		.EasyDNNSkin_NewsTwo .NewsTwoBackgroundGradient {
			/* background-image: url(images/background-gradient.png); */
			background-position: 0 0;
			background-repeat: repeat-x;
			padding: 20px 0;
		}
		.NewsTwoMain {
			background: white;
			max-width: 960px;
			margin: 0 auto;
			-webkit-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.2);
			box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.2);
			border: solid 1px #f2f2f2;
		}
		.cms-button  .icon {

			display: inline-block;
			white-space: nowrap;
			font-size: 18px;
			font-weight: bold;
			text-align: center;
			height: 30px;
			min-width: 30px;
			line-height: 30px;
			margin: 0px;
			padding: 1px;
			vertical-align: middle;
			color: #34B67A;
			float: left;
			margin-right: 5px;
			background-color: #ffffff;
			border: solid 1px #dadada;
			border-radius: 50%;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
		}
		.itemroute{
			font-size: 16px;
			margin: 5px;
		}
		.x{
			margin-bottom: 10px;
		}
		.NewsTwoMain .NewsTwoBottom .bottom-wraper .copyright {
			padding-bottom: 10px;
			height: 40px;
			margin-top: 5px;
			background-color: #ccc;
			text-align: center;
			font-size: 12px;
		}
		#form li{
			list-style: none;
		}

	</style>
	<body style="background:#EEEEEE">
		
		
	</div>
	<div id="divResult" class="x" style="height: auto !important;">
		<form id="form" action="route_detail.php" method="GET" align="center">
			<li>
				<!--<th width="300px" align="center"> Mã tuyến</th> -->
				<h3> Tên tuyến</h3>

				<table border="2px solid red ;" align="center" class="table" style="
				text-align: center;
				background: #FFFFFF;
				">

					<?php 

					include 'config.php';
					//cau len sql 
					$query = "select * from route";
					//xu li cau lenh sql
					$result = mysqli_query($conn, $query);
					
					
					while ($row = mysqli_fetch_array($result)) { ?>

					<tr>
						<!--	<td><a href="route_detail.php?id=<?php echo $row['id'];?>"><?php echo $row ['id']; ?></a></td> -->
						<td><a href="routedetail.php?id=<?php echo $row['id'];?>" ><?php echo $row ['name']; ?></a></td>
					</tr>
					

					<?php }
					?>

				</table>
			</li>
		</form>
	</div>
</div>
</div>
      
</body>
</html>


