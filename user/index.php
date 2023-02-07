<html>
    <head>
        <title>User Page</title>
        <link rel="stylesheet" href="style5.css">
    </head>
    <body>

    <div class="box-1">
            <center><h1>Selamat Datang Di Index</h1></center>
            <center><h3>Halaman User</h3></center>
            
            <!-- Cek halaman apakah sudah login atau belum -->
            <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login.php?pesan=belum_login');
        }
        ?>
        <center><h4>Welcome <?php 
        include '../koneksi_db.php';
        $email = $_SESSION['email'];
        $anggota = mysqli_query($koneksi,"select * from anggota where email = '$email'");
        foreach($anggota as $nama){
            echo $nama['nama'];
        }
        ?> anda telah login</h4> </center>
        
        <!-- end -->

        <center><button><a href="update-anggota.php?id_anggota=<?php echo $nama['id_anggota'] ?>">Customize</a></button>
        <button><a href="pesan.php">Pesanan Anda</a></button></center>

        <div class="table">
        <center><h2>Selamat Datang di BUKU STORE</h2>
        <h1>Data Buku</h1></center>
        <br>
        <br>
    <center><table border="1">
        <tr>
            <th>ID Buku</th>
            <th>ID Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>
            
            <?php
            include '../koneksi_db.php';
            $buku = mysqli_query($koneksi, "select * from buku");
            foreach($buku as $row){
                echo "<tr>";
                echo "<td>".$row['id_buku']."</td>";
                echo "<td>".$row['id_katalog']."</td>";
                echo "<td>".$row['judul_buku']."</td>";
                echo "<td>".$row['pengarang']."</td>";
                echo "<td>".$row['tahun_terbit']."</td>";
                echo "<td>".$row['penerbit']."</td>";
                ?>

                <td><a href="keranjang.php?id_buku=<?php echo $row['id_buku']; ?> & action=add">Pesan</a></td>


    <?php
    echo "</tr>";
}
?>
        </tr>
    </table></center>
    </div>
    
    <center><a href="../logout.php">LOGOUT</a></center>
</body>
</div>
</html>