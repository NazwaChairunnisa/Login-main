<html>
    <head>
        <title>Login Ges</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <center>
            <div class="box-1">
        <h1>Login Aplikasi</h1>
        <h6>User Access</h6>
        <form action="proses.php" method="post">
            <table>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="pass" id="pass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="login"></td>
                </tr>
                <tr>
                    <td>admin klik <a href="../admin/login_admin.php">sini</a></td>
                </tr>
                
                    <h4>Anda belum punya akun ? Daftar <a href="daftar.php">Disini</a></h4>
            </table>
        </form>
    </center>
    </div>
    </body>
</html>