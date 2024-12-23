<?php
<?php
$koneksi = mysqli_connect("localhost", "root"," , " "dbakademik"),

if (mysqli_connect_error()) {
    echo "koneksi database gagal : " . mysqli_connect_error();
}

// Membuat tabel
$sql = "CREATE TABLE IF NOT EXISTS customers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    nim INT (8)
    jk ENUM (laki-laki, perempuan)
    email VARCHAR(50),
    password VARCHAR (25)
    alamat VARCHAR (25)
    age INT(3),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel customers berhasil dibuat!";
} else {
    echo "Error membuat tabel: " . $conn->error;
}

// Menutup koneksi
$conn->close();
?>