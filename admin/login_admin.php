<html>
    <head>
        <title>Login Ges</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
        <div class="box-1">
        <h1>Login Aplikasi</h1>
        <h6>Admin Access</h6>
        <form action="proses_admin.php" method="post">
            <table>
                <tr>
                    <td>Admin</td>
                    <td>:</td>
                    <td><input type="text" name="admin" id="admin"></td>
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
                    <td>user klik <a href="../user/login.php">sini</a></td>
                </tr>
            </table>
        </form>
        </div>
    </center>
    </body>
</html>