<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "api";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data mahasiswa
$sql = "SELECT id, nama, nim, jurusan FROM students";
$result = $conn->query($sql);

// Tampilkan data dalam tabel
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row["id"]. "</td>";
        echo "<td>". $row["nama"]. "</td>";
        echo "<td>". $row["nim"]. "</td>";
        echo "<td>". $row["jurusan"]. "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
