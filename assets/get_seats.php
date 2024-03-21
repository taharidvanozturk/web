<?php
// Veritabanı bağlantı dosyanızı buraya dahil edin
$servername = "localhost"; // Veritabanı sunucusu
$username = "root"; // Veritabanı kullanıcı adı
$password = "fd49db33b2"; // Veritabanı şifre
$dbname = "otobusbiletuygulama"; // Veritabanı adı

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

// POST verilerinde sefer_id var mı diye kontrol et
if(isset($_POST['sefer_id'])) {
    // POST verilerinden sefer_id'yi al
    $sefer_id = $_POST['sefer_id'];

    // sefer_id'ye göre otobus_id'yi almak için sorgu
    $sql = "SELECT otobus_id FROM sefer WHERE sefer_id = $sefer_id";
    $result = $conn->query($sql);

    // Sorgunun başarılı olup olmadığını kontrol et
    if ($result) {
        // Dönen satır olup olmadığını kontrol et
        if ($result->num_rows > 0) {
            // Satırı al
            $row = $result->fetch_assoc();
            $otobus_id = $row["otobus_id"];

            // otobus_id'ye göre koltuk bilgisi (otobus_kapasite) almak için sorgu
            $sql = "SELECT otobus_kapasite FROM otobus WHERE otobus_id = $otobus_id";
            $result = $conn->query($sql);

            // Sorgunun başarılı olup olmadığını kontrol et
            if ($result) {
                // Dönen satır olup olmadığını kontrol et
                if ($result->num_rows > 0) {
                    // Satırı al
                    $row = $result->fetch_assoc();
                    // otobus_kapasite'yi al
                    $otobus_kapasite = $row["otobus_kapasite"];

                    // Koltuk numaralarını 1'den otobus_kapasite'e kadar oluştur ve butonları oluştur
                    for($i = 1; $i <= $otobus_kapasite; $i++) {
                        // Her koltuk için buton HTML'ini oluştur
                        echo "<button class=\"seat-button\" data-seat-number=\"$i\">Koltuk: $i</button>";
                        if($i % 8 === 0) {
                            echo "<br><br>"; // Her sekiz koltukta bir alt satıra geç
                        }
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

// Veritabanı bağlantısını kapat
$conn->close();
?>
