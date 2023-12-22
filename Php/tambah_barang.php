<?php
include 'koneksi.php';

if (isset($_POST['nama_barang'])) {
    $namaBarang = $_POST['nama_barang'];

    $sql = "INSERT INTO daftar_barang (nama_barang) VALUES ('$namaBarang')";

    if ($conn->query($sql) === TRUE) {
        // Setelah penambahan berhasil, tampilkan kembali daftar barang yang telah diperbarui
        $sql_select_updated = "SELECT * FROM daftar_barang";
        $result_updated = $conn->query($sql_select_updated);
        
        if ($result_updated->num_rows > 0) {
            echo "<ul>";
            while ($row_updated = $result_updated->fetch_assoc()) {
                echo "<li>" . $row_updated["nama_barang"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Belum ada barang yang akan dibeli";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
