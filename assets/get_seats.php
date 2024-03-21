<?php
// Include your database connection file if it's not included already
$servername = "localhost"; // Veritabanı sunucusu
$username = "root"; // Veritabanı kullanıcı adı
$password = "fd49db33b2"; // Veritabanı şifre
$dbname = "otobusbiletuygulama"; // Veritabanı adı
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if sefer_id is set in the POST data
if(isset($_POST['sefer_id'])) {
    // Get the sefer_id from POST data
    $sefer_id = $_POST['sefer_id'];

    // Query to get otobus_id based on sefer_id
    $sql = "SELECT otobus_id FROM sefer WHERE sefer_id = $sefer_id";
    $result = $conn->query($sql);

    // Check if query was successful
    if ($result) {
        // Check if there are rows returned
        if ($result->num_rows > 0) {
            // Fetch row
            $row = $result->fetch_assoc();
            $otobus_id = $row["otobus_id"];

            // Query to get seat information (otobus_kapasite) based on otobus_id
            $sql = "SELECT otobus_kapasite FROM otobus WHERE otobus_id = $otobus_id";
            $result = $conn->query($sql);

            // Check if query was successful
            if ($result) {
                // Check if there are rows returned
                if ($result->num_rows > 0) {
                    // Fetch row
                    $row = $result->fetch_assoc();
                    // Extract otobus_kapasite
                    $otobus_kapasite = $row["otobus_kapasite"];

                    // Generate seat numbers from 1 to otobus_kapasite and create buttons
                    for($i = 1; $i <= $otobus_kapasite; $i++) {
                        // Output button HTML for each seat
                        echo "<button>" . "Koltuk: " . $i . "</button>";
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
} else {
    echo "Sefer ID bulunamadı.";
}

// Close the database connection
$conn->close();
?>
