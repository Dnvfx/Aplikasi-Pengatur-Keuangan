<?php
include 'koneksi.php';

$sql = "SELECT * FROM daftar_barang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Daftar Barang yang Akan Dibeli</h2>";
    echo "<ul id='daftarBarang'>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["nama_barang"] . " (Rp " . number_format($row["harga_barang"], 0, ',', '.') . ") 
        <button onclick='hapusBarang(" . $row["id"] . ")'>Hapus</button></li>";
    }
    echo "</ul>";
} else {
    echo "Belum ada barang yang akan dibeli";
}
?>

<script>
    function hapusBarang(id) {
        if (confirm('Anda yakin ingin menghapus barang ini dari wishlist?')) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'hapus_barang.php?id=' + id, true);

            xhr.onload = function () {
                if (xhr.status === 200) {
                    alert('Barang berhasil dihapus dari wishlist');
                    document.getElementById('daftarBarang').innerHTML = xhr.responseText;
                } else {
                    alert('Terjadi kesalahan saat menghapus barang');
                }
            };

            xhr.send();
        }
    }
</script>
