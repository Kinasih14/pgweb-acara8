<html>
<body>

Tabel Jumlah Penduduk dan Luas Kecamatan di Sleman
<?php
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
$sql = "SELECT * FROM kec_sleman";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table border='1px'><tr>
<th>Kecamatan</th>
<th>Luas</th>
<th>Jumlah Penduduk</th>
<th>Longtitude</th>
<th>Latitude</th>";
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>".$row["Kecamatan"]."</td>
<td>".$row["Luas"]."</td>
<td align='right'>".$row["Jumlah_Penduduk"]."</td>
<td>".$row["Longtitude"]."</td>
<td>".$row["Latitude"]."</td>
</tr>";
}
 echo "</table>";
} else {
    echo "0 results";
    }
    $conn->close();
    ?>


</body>
</html>