<!-- proses_barang.php -->
<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_barang'])) {
    $nama_barang = $_POST['nama_barang'];

    $sql = "INSERT INTO daftar_barang (nama_barang) VALUES ('$nama_barang')";

    if ($conn->query($sql) === TRUE) {
        // Jika query SQL berhasil dieksekusi, kirimkan respons ke JavaScript
        echo "Barang berhasil ditambahkan"; // Pesan ini akan ditampilkan oleh JavaScript

        exit(); // Keluar dari script PHP
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
