<?php
include 'koneksi.php';

$sql = "SELECT SUM(jumlah) AS total_pengeluaran FROM pengeluaran";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Total Pengeluaran: " . $row["total_pengeluaran"];
} else {
    echo "Belum ada data pengeluaran";
}
?>
