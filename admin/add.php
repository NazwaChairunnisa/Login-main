<html>
    <head>
        <title>add data</title>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
    <div class="container">
        <div class="box-1">
            <center>
        <h1>Tambahkan Data Buku</h1>

        <form action="proses-tambah.php" method="post">
            <label>ID Katalog</label>
            <input type="number" name="id_katalog">
            <br>
            <label>Judul Buku</label>
            <input type="text" name="judul_buku">
            <br>
            <label>Pengarang</label>
            <input type="text" name="pengarang">
            <br>
            <label>Tahun Terbit</label>
            <input type="date" name="thn_terbit">
            <br>
            <label>Penerbit</label>
            <input type="text" name="penerbit">
            <br>
            <input type="submit" value="submit">
            <br>
        </form>
    </div>
    </div>
    </center>
    </body>
</html>