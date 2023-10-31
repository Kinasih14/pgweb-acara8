<?php
$kecamatan = $_POST['kecamatan'];
$luas = $_POST['luas'];
$jumlah_penduduk = $_POST['Jumlah_Penduduk'];
$longtitude = $_POST['Longtitude'];
$latitude = $_POST['Latitude'];
// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pgweb-acara8";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO kec_sleman (Kecamatan, Luas, Jumlah_Penduduk, Longtitude, Latitude)
VALUES ('$kecamatan', $luas, $jumlah_penduduk, $longtitude, $latitude)";
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//header("Location: index.html");
//exit;
?>
