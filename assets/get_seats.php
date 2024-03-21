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
if (isset($_POST['sefer_id'])) {
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

                    // Koltuk durumlarını depolamak için bir dizi oluştur
                    $koltuk_durumları = array();

                    // Koltuk durumu sorgusu
                    $koltukdurumusql = "SELECT koltuk_id, durum FROM durum";
                    $koltukdurumusonucu = $conn->query($koltukdurumusql);
                    if ($koltukdurumusonucu && $koltukdurumusonucu->num_rows > 0) {
                        // Her koltuğun durumunu diziye ekle
                        while ($row = $koltukdurumusonucu->fetch_assoc()) {
                            if (isset($row['koltuk_id']) && isset($row['durum'])) {
                                $koltuk_durumları[$row['koltuk_id']] = $row['durum'];
                            } else {
                                // Eğer koltuk_id veya durum belirtilmemişse, devam etme
                                continue;
                            }
                        }

                        // Koltuk numaralarını 1'den otobus_kapasite'e kadar oluştur ve butonları oluştur
                        for ($i = 1; $i <= $otobus_kapasite; $i++) {
                            // Koltuk durumuna göre buton rengini ayarla
                            $button_color = ($koltuk_durumları[$i] == 1) ? "green" : "red";
                            // Buton HTML'ini oluştur
                            echo "<button style=\"background-color: $button_color;\" class=\"seat-button\" data-seat-number=\"$i\">Koltuk: $i</button>";
                            if ($i % 8 === 0) {
                                echo "<br><br>"; // Her sekiz koltukta bir alt satıra geç
                            }
                        }
                    } else {
                        echo "Koltuk durumu sorgusu başarısız oldu: " . $conn->error;
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
