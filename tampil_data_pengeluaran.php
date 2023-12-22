<?php
include 'koneksi.php';

$sql = "SELECT * FROM pengeluaran";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Data Pengeluaran</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Jumlah</th><th>Tanggal</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["jumlah"] . "</td>";
        echo "<td>" . $row["tanggal"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Belum ada data pengeluaran";
}
?>
