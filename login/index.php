<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">


	<style media="screen">
	.text{
		padding-right: 20px;
		padding-top: 10px;
		position: absolute;
		padding-left: 300px;
		top: 40%;
			}
	.w3-text{
			color: #00cec9
			}
	.w3-allerta {
  font-family: "Allerta Stencil", Sans-serif;
		}
.kotak_login h1{
  color: black;
  text-transform: uppercase;
  font-weight: 500;
  padding-right: 10px;
}
.covid{
	font-weight: bold;
	font-display: block;
}
	</style>
	</head>
<body>
		<img  class="wave"src="../img/wave.png">
		<div class="container">
			<div class="text" >
				<!-- <img src="../img/bg.svg"> -->
			<h1 class="w3-text w3-center w3-allerta w3-jumbo" style="text-shadow :1px 1px black;">DATA KARANTINA</h1>
			<h2 class="covid" style="text-shadow">COVID-19</h2>
			</div>

		</div>

	<div class="kotak_login">
		<img class="avatar" src="../img/avatar.svg" alt="">
		<h1 class="tulisan_login">Login Petugas</h1>
		<form  action="proses-login.php" method="post">
			<input type="text" name="username" id="" class="form_login" placeholder="Username atau email ..">
			<input type="password" name="password" id ="" class="form_login" placeholder="Password .." >
			<input type="submit" class="btnlogin" value="login" name="btnlogin">
			<br/>
			<br/>
		</form>
	</div>
</body>
</html>
