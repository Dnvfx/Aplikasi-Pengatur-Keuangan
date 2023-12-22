<?php
include 'koneksi.php';

$sql = "SELECT SUM(jumlah) AS total_pemasukan FROM pemasukan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Total Pemasukan: " . $row["total_pemasukan"];
} else {
    echo "Belum ada data pemasukan";
}
?>
