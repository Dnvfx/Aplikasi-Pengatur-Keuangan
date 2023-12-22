<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_pengeluaran'])) {
    $jumlah = $_POST['jumlah_pengeluaran'];
    $tanggal = $_POST['tanggal_pengeluaran'];

    $sql = "INSERT INTO pengeluaran (jumlah, tanggal) VALUES ('$jumlah', '$tanggal')";

    if ($conn->query($sql) === TRUE) {
        echo "Pengeluaran berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
