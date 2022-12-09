<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembeli</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <i>LOGO</i>
        <h1>KOPERASI SEKOLAH</h1>
        <a href="#">Logout</a>
    </nav>
    <nav class="sidebar">
        <img src="cantik.jpg" alt="">

        <ul>
            <h3>DASHBOARD</h3>
            <a href="dashboard.php">
                <li>Dasboard</li>
            </a>
            <h3>MASTER DATA</h3>
            <a href="pembeli.php">
                <li>Pembeli</li>
            </a>
            <a href="kategori.php">
                <li>Kategori</li>
            </a>
            <a href="barang.php">
                <li>Barang</li>
            </a>
            <a href="data-nasabah.php">
                <li>Tabungan</li>
            </a>
            <h3>TRANSAKSI</h3>
            <a href="penjualan.php">
                <li>Penjualan</li>
            </a>
            <a href="transaksi-tabungan.php">
                <li>Trans Tabungan</li>
            </a>
            <h3>LAPORAN</h3>
            <a href="laporan-penjualan.php">
                <li>Lap Penjualan</li>
            </a>
            <a href="">
                <li>Pembukuan</li>
            </a>
        </ul>
    </nav>

    <section class="content">
        <h2>LAPORAN PENJUALAN</h2>
      <hr>
      <div>Cari Laporan Per Bulan</div>
      <div>
      <input type="text" name="bulan" id="bulan" placeholder="BULAN">
      <input type="text" name="tahun" id="tahun" placeholder="TAHUN">
      <button type="submit">Cari</button>
      <button type="submit">Refresh</button>
      </div>
      <div>
        <input type="text" name="tahun" id="tahun" placeholder="Pilih Hari">
        <button type="submit">Cari</button>
        <button type="submit">Refresh</button>
      </div>
      <div class="table-rapi">
        <table>
            <tr>
                <td>No.</td>
                <td>ID Transaksi</td>
                <td>ID Petugas</td>
                <td>ID Pembeli</td>
                <td>ID Barang</td>
                <td>Barang</td>
                <td>Kategori</td>
                <td>Harga</td>
                <td>Harga</td>
                <td>Jumlah Barang</td>
                <td>Tanggal</td>
                <td>Total</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2003312</td> 
                <td>19321</td>
                <td>10001</td>
                <td>5623162</td>
                <td>Pusta</td>
                <td>Buku</td>
                <td>ATK</td>
                <td>500</td>
                <td>2</td>
                <td>20-04-2022</td>
                <td>1000</td>
            </tr>
        </table>
      </div>
    </section>
</body>

</html>