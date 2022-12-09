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
            <h3>TRANSAKSI TABUNGAN</h3>
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
        <h2>TRANSAKSI TABUNGAN</h2>
        <hr>
        <div class="kotak-cari-tabungan">
            <label for="cTabungan" class="clear">Cari Tabungan</label>
            <input type="text" name="cTabungan" placeholder="Masukan kode barang">
        </div>
        <div class="kotak-hasil-cari">
            <label for="hasilcari" class="clear">Hasil Pencarian</label>
            <p>Hasil Pencarian</p>
        </div>

        <div class="bungkus">
            <div class="bg-blue">TABUNGAN</div>
            <table>
                <tr>
                    <td>Tanggal</td>
                    <td id="tanggal-tabungan">06 September 2022, 00:00</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>No.</td>
                    <td>ID Tabungan</td>
                    <td>ID Transaksi</td>
                    <td>ID Petugas</td>
                    <td>ID Tabungan</td>
                    <td>Nama Siswa</td>
                    <td>Tanggal</td>
                    <td>Nominal Total</td>
                    <td>Keterangan</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>10000</td> 
                    <td>11111</td>
                    <td>5123123</td>
                    <td>2000000</td>
                    <td>ABDUL</td>
                    <td>17</td>
                    <td>20.000</td>
                    <td>-</td>
                </tr>
            </table>
            <div class="clear"></div>

            <div class="posi-total">
                <label for="result">Total Semua</label>
                <input type="text">
            </div>
            <div class="posi-bayar">
                <label for="posi-bayar" >Bayar</label>
                <input type="text" name="bayar" id="bayar">
            </div>
        </div>

        

    </section>
</body>

</html>