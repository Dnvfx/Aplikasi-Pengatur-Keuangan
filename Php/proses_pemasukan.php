<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_pemasukan'])) {
    $jumlah = $_POST['jumlah_pemasukan'];
    $tanggal = $_POST['tanggal_pemasukan'];

    $sql = "INSERT INTO pemasukan (jumlah, tanggal) VALUES ('$jumlah', '$tanggal')";

    if ($conn->query($sql) === TRUE) {
        echo "Pemasukan berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
