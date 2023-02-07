<html>
    <head>
        <title>add anggota</title>
        <link rel="stylesheet" href="style4.css">
    </head>
    <body>
    <div class="container">
        <div class="box-1">
        <center>
            <h1>Tambahkan Data Anggota</h1>

            <form action="proses-tambah-anggota.php" method="post">
                <label>Nama</label>
                <input type="text" name="nama">
                <br>
                <label>No Telp</label>
                <input type="number" name="telp">
                <br>
                <label>Alamat</label>
                <input type="text" name="alamat">
                <br>
                <label>Email</label>
                <input type="text" name="email">
                <br>
                <label>Password</label>
                <input type="text" name="pass">
                <br>
                <input type="submit" value="submit">
                <br>
            </form>
        </div>
        </div>
    </center>
    </body>
</html>