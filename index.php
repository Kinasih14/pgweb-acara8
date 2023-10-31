<!DOCTYPE html>
<html>
<head>
    <title>Tabel PHP</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Longitude</th>
            <th>Latitude</th>
        </tr>
        <?php
        // Data dalam bentuk array
        $data = array(
            array(1, "Bandara Adi Sutjipto", 110.43067496364252, -7.788956040931793),
            array(2, "Bandara YIA Yogyakarta", 110.049105484817662, -7.891432433689074),
            array(3, "Stasiun Lempuyangan", 110.37544938165459, -7.891432433689074),
            array(4, "Stasiun Tugu", 110.36342495287012, -7.789294547910656)
        );

        // Loop melalui array dan mengisi tabel
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "<td>" . $row[3] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php

$array = [1, 2, 3, 4, 5, 7, 9, 11];

foreach ($array as $nilai) {
    if ($nilai != 4 && $nilai != 5) {
        echo $nilai . " ";
    }
}
?>

<br>

<?php
echo "<a href=merapi.php?nama=Merapi&alamat=Sleman>Gunung</a>";
?>

</br>


<html>
<body>
<form action="welcome.php" method="post">
Nama: <input type="text" name="nama" />
Umur: <input type="text" name="umur" />
<input type="submit" value="Kirim"/>
</form>
</body>
</html>




</body>
</html>
