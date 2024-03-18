<!DOCTYPE HTML>
<html>

<head>
	<title>Green Wheels a Travel Category Flat Bootstrap Responsive Website Template | Bus :: w3layouts</title>
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
	<!--- /header ---->
	<!--- footer-btm ---->
	<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
		<div class="container">
			<div class="navigation">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-1">
							<ul class="nav navbar-nav">
								<li><a href="about.html">About</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="apps.html">Apps</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="travels.html">Travels</a></li>
								<li><a href="privacy.html">Privacy Policy</a></li>
								<li><a href="agent.html">Agent Registration</a></li>
								<li><a href="terms.html">Terms of Use</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a> </li>
								<div class="clearfix"></div>
							</ul>
						</nav>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<!--- /footer-btm ---->
	<!--- banner-1 ---->
	<div class="banner-1 ">
		<div class="container">
			<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Umuttepe Turizm - Sizin Konforunuz Bizim Önceliğimiz</h1>
		</div>
	</div>
	<!--- /banner-1 ---->
	<!--- bus-tp ---->
	<div class="bus-tp">
		<div class="container">
			<p>Fare starts from : USD. 600</p>
			<h2>Buses from California to Alabama</h2>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--- /bus-tp ---->
	<!--- bus-btm ---->
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
	<!--- /bus-btm ---->
	<!--- bus-midd ---->
	<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
		<div class="container boyutlan"><br>
		<script>
	// Butona tıklandığında çalışacak fonksiyon
	function showSeats() {
    // Otobüs kapasitesini al
    var kapasite = <?php echo $row["otobus_kapasite"]; ?>;
    
    // Butonları içerecek olan div'i seç
    var seatDiv = document.getElementById("seatDiv");
    seatDiv.innerHTML = ""; // Her seferinde içeriği temizle
    
    // Kapasite kadar buton oluştur
    for (var i = 1; i <= kapasite; i++) {
        var button = document.createElement("button");
        button.innerText = "Seat " + i;
        seatDiv.appendChild(button);
    }
    
    // Div'i görünür yap
    seatDiv.style.display = "block";
}
	</script>
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

			// Veritabanından sefer bilgilerini al
			$sql = "SELECT * FROM sefer, otobus";
			$result = $conn->query($sql);

			// Verileri yazdır
			if ($result->num_rows > 0) {
				// Sonuçlar üzerinde döngü
				while ($row = $result->fetch_assoc()) {
					// Her sefer için bir buton oluştur
					echo "<button onclick='showSeats()' style='background-color: #4CAF50;
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
				<section>
					<div class="modal-body modal-spa">
						<div class="writ">
							<h4>HOW CAN WE HELP YOU</h4>
							<ul>
								<li class="na-me">
									<input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								</li>
								<li class="na-me">
									<input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								</li>
								<li class="na-me">
									<input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
								</li>
								<li class="na-me">
									<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
										<option value="null">Select Issue</option>
										<option value="null">Booking Issues</option>
										<option value="null">Bus Cancellation</option>
										<option value="null">Refund</option>
										<option value="null">Wallet</option>
									</select>
								</li>
								<li class="na-me">
									<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
										<option value="null">Select Issue</option>
										<option value="null">Booking Issues</option>
										<option value="null">Bus Cancellation</option>
										<option value="null">Refund</option>
										<option value="null">Wallet</option>
									</select>
								</li>
								<li class="descrip">
									<input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Description';}" required="">
								</li>
								<div class="clearfix"></div>
							</ul>
							<div class="sub-bn">
								<form>
									<button class="subbtn">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //write us -->
</body>

</html>