<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM daftar_barang WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Setelah penghapusan berhasil, tampilkan kembali daftar barang yang telah diperbarui
        $sql_select_updated = "SELECT * FROM daftar_barang";
        $result_updated = $conn->query($sql_select_updated);
        
        if ($result_updated->num_rows > 0) {
            echo "<ul>";
            while ($row_updated = $result_updated->fetch_assoc()) {
                echo "<li>" . $row_updated["nama_barang"] . " <button onclick='hapusBarang(" . $row_updated["id"] . ")'>Hapus</button></li>";
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
