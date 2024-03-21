<!DOCTYPE HTML>
<html>

<head>
	<title>Umuttepe Turizm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<style>
		/* Style for the div that will be toggled */
		.bus-details {
			display: none;
			background-color: #f2f2f2;
			/* Gray background */
			padding: 15px;
			margin-top: 10px;
		}
	</style>
	<!--//end-animate-->
</head>

<body>



	<!-- top-header -->
	<div class="top-header">
		<div class="container">
			<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
				<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
				<li class="prnt"></li>

			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--- /top-header ---->
	<!--- header ---->
	<div class="header">
		<div class="container">
			<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
				<a href="index.html">Umuttepe <span>Turizm</span></a>
			</div>
			<div class="bus wow fadeInUp animated" data-wow-delay=".5s">
				<a href="index.html" class="buses active">BUSES</a>
				<a href="hotels.html">HOTELS</a>
			</div>
			<div class="lock fadeInDown animated" data-wow-delay=".5s">
				<li><i class="fa fa-lock"></i></li>
				<li>
					<div class="securetxt">SAFE &amp; SECURE<br> ONLINE PAYMENTS</div>
				</li>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="banner-1 ">
		<div class="container">
			<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Umuttepe Turizm - Sizin Konforunuz Bizim Önceliğimiz</h1>
		</div>
	</div>
	<div class="bus-btm">
		<div class="container">
			<ul>
				<li class="trav"><a href="#">Yolculuk&nbsp;</a> </li>
				<li class="dept"><a href="#">Kalkış Saati</a></li>
				<li class="arriv"><a href="#">Varacağı Yer</a></li>
				<li class="seat"><a href="#">Koltuklar</a></li>
				<li class="fare"><a href="#">Ücret</a></li>
				<div class="clearfix"></div>
			</ul>
		</div>
	</div>

	<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
		<div class="container boyutlan"><br>

			
			<?php

			// Veritabanı bağlantısı
			$servername = "localhost"; // Veritabanı sunucusu
			$username = "root"; // Veritabanı kullanıcı adı
			$password = "fd49db33b2"; // Veritabanı şifre
			$dbname = "otobusbiletuygulama"; // Veritabanı adı

			// Veritabanı bağlantısını oluştur
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Bağlantıyı kontrol et
			if ($conn->connect_error) {
				die("Veritabanına bağlanılamadı: " . $conn->connect_error);
			}
			function get_seats($sefer_id=1)
			{
				// Assuming $conn is your database connection object
				global $conn;

				// Sefer ID'sine göre otobüsü bul
				$sql = "SELECT * FROM sefer WHERE sefer_id = " . $sefer_id;
				$result = $conn->query($sql);

				if ($result) {
					// Check if there are rows returned
					if ($result->num_rows > 0) {
						// Sonuçları al
						$row = $result->fetch_assoc();
						$otobus_id = $row["otobus_id"];

						// Otobüs ID'sine göre otobüsü bul
						$sql = "SELECT * FROM otobus WHERE otobus_id = $otobus_id";
						$result = $conn->query($sql);

						if ($result) {
							// Check if there are rows returned
							if ($result->num_rows > 0) {
								// Sonuçları al
								$row = $result->fetch_assoc();
								$otobus_kapasite = $row["otobus_kapasite"];

								// Koltuk sayısı kadar buton oluştur
								for ($i = 1; $i <= $otobus_kapasite; $i++) {
									echo "<button>Koltuk: $i</button>";
								}
							} else {
								echo "Otobüs bulunamadı.";
							}
						} else {
							echo "Otobüs sorgusu başarısız oldu: " . $conn->error;
						}
					} else {
						echo "Sefer bulunamadı.";
					}
				} else {
					echo "Sefer sorgusu başarısız oldu: " . $conn->error;
				}
			}
			// Veritabanından sefer bilgilerini al
			$sql = "SELECT * FROM sefer, otobus";
			$result = $conn->query($sql);
			get_seats(2);
			if ($result->num_rows > 0) {
				// Sonuçlar üzerinde döngü
				while ($row = $result->fetch_assoc()) {
					echo "<button onclick='get_seats(" . $row["sefer_id"] . ")' style='background-color: #4CAF50;
									border: none;
									color: black; /* Yazı rengi siyah */
									padding: 15px 32px;
									text-align: center;
									text-decoration: none;
									display: inline-block;
									font-size: 24px;
									margin: 4px 2px;
									cursor: pointer;
									width: 100%;'>";
					// Sefer bilgilerini yazdır
					echo "<p style=\"color: black;\">sefer_id: " . $row["sefer_id"] . "</p>";
					echo "<p style=\"color: black;\">Kalkış Şehri: " . $row["kalkis_sehri"] . "</p>";
					echo "<p style=\"color: black;\">Varış Şehri: " . $row["varis_sehri"] . "</p>";
					echo "<p style=\"color: black;\">Kalkış Saati: " . $row["kalkis_saat"] . "</p>";
					echo "<p style=\"color: black;\">Varış Saati: " . $row["varis_saat"] . "</p>";
					echo "<p style=\"color: black;\">Ücret: " . $row["sefer_fiyat"] . "</p>";
					echo "<p style=\"color: black;\">Otobüs Çeşidi: " . $row["otobus_cesidi"] . "</p>";
					echo "</button>";
					echo "<br>";
				}
			} else {
				echo "Veritabanında sefer bulunamadı.";
			}

			$conn->close(); // Veritabanı bağlantısını kapat
			?>


			<div id="seatDiv" class="bus-details">
				<!-- Bu div, butona tıkladığınızda otomatik olarak doldurulacak -->
			</div>
		</div>
	</div>

	<div class="footer-top">
		<div class="container">
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="copy-right">
		<div class="container">

			<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<ul>
					<li><a class="facebook" href="#"><span>Facebook</span></a></li>
					<li><a class="twitter" href="#"><span>Twitter</span></a></li>
					<li><a class="flickr" href="#"><span>Flickr</span></a></li>
					<li><a class="googleplus" href="#"><span>Google+</span></a></li>
					<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
				</ul>
			</div>
			<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2016 Green Wheels . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body modal-spa">
						<div class="login-grids">
							<div class="login">
								<div class="login-left">
									<ul>
										<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
										<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
										<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
									</ul>
								</div>
								<div class="login-right">
									<form>
										<h3>Create your account </h3>
										<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
										<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
										<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">
										<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
										<input type="submit" value="CREATE ACCOUNT">
									</form>
								</div>
								<div class="clearfix"></div>
							</div>
							<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="login-grids">
						<div class="login">
							<div class="login-left">
								<ul>
									<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
									<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
									<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
								</ul>
							</div>
							<div class="login-right">
								<form>
									<h3>Signin with your account </h3>
									<input type="text" value="Enter your mobile number or Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">
									<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
									<h4><a href="#">Forgot password</a></h4>
									<div class="single-bottom">
										<input type="checkbox" id="brand" value="">
										<label for="brand"><span></span>Remember Me.</label>
									</div>
									<input type="submit" value="SIGNIN">
								</form>
							</div>
							<div class="clearfix"></div>
						</div>
						<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>

			</div>
		</div>
	</div>
	<!-- //write us -->
</body>

</html>