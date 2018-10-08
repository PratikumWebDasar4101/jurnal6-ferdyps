
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post">
    Nama : <input type="text" name="nama" maxlength="35"><br><br>
    NIM : <input type="text" name="nim" pattern="\d*" maxlength="10" minlength="10" required><br><br>
    <input type="submit" name="login" value="Login"><br><br>
    <a href="form.php">Belum Registrasi</a>
    </form>
</body>
</html>
<?php
if(isset($_POST['login'])){
    require_once("db.php");
    $user = $_POST['nama'];
    $pass = $_POST['nim'];
    $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama='$user' && nim='$pass'");
    $num = mysqli_num_rows($sql);
    if ($num == 1) {
        session_start();
        $_SESSION['user'] = $user;
        header("location: data.php");
    }else{
        header('Location: login.php');
        echo "gagal login";
    }
}
?>