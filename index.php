<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Kopi Finansial - Pengatur Keuangan Anda</title>
    <!-- Link ke file CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Kopi Finansial - Pengatur Keuangan Anda<br> <img src="gambar_keuangan.png" alt="gambar keuangan" style="vertical-align: middle; width: 300px; height: 300px;"></h1>

    <!-- Form untuk tambah pemasukan -->
    <form method="post" action="proses_pemasukan.php">
        Jumlah Pemasukan: <input type="text" name="jumlah_pemasukan"><br>
        Tanggal: <input type="date" name="tanggal_pemasukan"><br>
        <input type="submit" name="submit_pemasukan" value="Tambah Pemasukan">
    </form>

    <!-- Form untuk tambah pengeluaran -->
    <form method="post" action="proses_pengeluaran.php">
        Jumlah Pengeluaran: <input type="text" name="jumlah_pengeluaran"><br>
        Tanggal: <input type="date" name="tanggal_pengeluaran"><br>
        <input type="submit" name="submit_pengeluaran" value="Tambah Pengeluaran">
    </form>

    <!-- Tampilkan rekapitulasi pemasukan -->
    <h2>Rekapitulasi Pemasukan</h2>
    <?php include 'tampil_rekap_pemasukan.php'; ?>

    <!-- Tampilkan rekapitulasi pengeluaran -->
    <h2>Rekapitulasi Pengeluaran</h2>
    <?php include 'tampil_rekap_pengeluaran.php'; ?>

    <!-- Form untuk tambah barang -->
    <h2>Manajemen Daftar Barang</h2>
    <form method="post" action="proses_barang.php">
        Nama Barang: <input type="text" name="nama_barang"><br>
        Harga Barang: <input type="number" name="harga_barang" min="0" step="1"><br> <!-- Input harga barang dalam Rupiah -->
        <input type="submit" name="submit_barang" value="Tambah Barang">
    </form>

    <!-- Tampilkan daftar barang yang akan dibeli -->
    <?php include 'tampil_daftar_barang.php'; ?>

    <!-- Link ke file JavaScript -->
    <script src="script.js"></script>
</body>

</html> 
