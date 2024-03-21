<!DOCTYPE HTML>
<html>
<head>
    <title>Umuttepe Turizm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
    <script src="script.js"></script> <!-- Include your script file here -->
    <script>
        new WOW().init();
    </script>
    <style>
        /* Style for the div that will be toggled */
        .bus-details {
            display: block;
            background-color: #f2f2f2;
            padding: 15px;
            margin-top: 10px;
        }
    </style>    
</head>
<body>
    <div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
        <div class="container boyutlan"><br>
            <?php
            // Include the PHP file with the get_seats function
            include 'get_seats.php';
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
            if ($result->num_rows > 0) {
                // Sonuçlar üzerinde döngü
                while ($row = $result->fetch_assoc()) {
                    echo "<button data-sefer-id='" . $row["sefer_id"] . "' style='background-color: #4CAF50;
                                    border: none;
                                    color: black;
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
</body>
</html>
