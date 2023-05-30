<!DOCTYPE html>
<html>
<head>
    <title>UASMCCA</title>
</head>
<body>
    <?php
    $con = new mysqli('mysql_db', 'database', 'azhar', );

   
    if ($con->connect_error) {
        die("Koneksi database gagal: " . $con->connect_error);
    }

    $table_name = "azhar";
    $query = "SELECT * FROM $table_name";
    $response = $con->query($query);

    if ($response->num_rows > 0) {
        echo "<strong>$table_name: </strong>";
        while ($row = $response->fetch_assoc()) {
            echo "<p>ID: " . $row['id'] . "</p>";
            echo "<p>Nama: " . $row['nama'] . "</p>";
            echo "<p>Tempat Lahir: " . $row['tempat_lahir'] . "</p>";
            echo "<p>Waktu Registrasi: " . $row['waktu_registrasi'] . "</p>";
            echo "<p>Alamat: " . $row['alamat'] . "</p>";
            echo "<p>Panggilan: " . $row['panggilan'] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "Tidak ada data yang ditemukan.";
    }

    $con->close();
    ?>
</body>
</html>
