<?php
function get_seats($sefer_id) {
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
?>
