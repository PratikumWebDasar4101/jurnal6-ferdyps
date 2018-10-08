<?php
    require_once("db.php");
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '$id'");
    $row = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <form method="post">
        Nama : <input type="text" name="nama" maxlength="35"><br><br>
    NIM : <input type="text" name="nim" pattern="\d*" maxlength="10" minlength="10" required><br><br>
    Kelas : <br>
    <input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01 <br>
    <input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02 <br>
    <input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03 <br>
    <input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04 <br><br>
    Jenis Kelamin : <br>
    <input type="radio" name="gender" value="laki-laki">Laki-laki <br>
    <input type="radio" name="gender" value="perempuan">Perempuan <br><br>
    Hobi : <br>
    <input type="checkbox" name="hobi[]" value="makan">Makan <br>
    <input type="checkbox" name="hobi[]" value="tidur">Tidur <br>
    <input type="checkbox" name="hobi[]" value="main">Main <br><br>
    Fakultas : 
    <select name="fakultas">
        <option value="FIT">FIT</option>
        <option value="FEB">FEB</option>
        <option value="FIK">FIK</option>
        <option value="FTE">FTE</option>
        <option value="FIF">FIF</option>
        <option value="FRI">FRI</option>
        <option value="FKB">FKB</option>
    </select>
    <br><br>
    alamat : <br>
    <textarea name="alamat" rows="5"></textarea><br><br>
        <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
<?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
     $nim = $_POST['nim'];
     $kelas = $_POST['kelas'];
     $gender = $_POST['gender'];
     $hobi = $_POST['hobi'];
     $fakultas = $_POST['fakultas'];
     $alamat = $_POST['alamat'];

     $list_hobi = implode(", ", $hobi);

        $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', kelas='$kelas', jenis_kelamin='$gender', hobi='$list_hobi', fakultas='$fakultas', alamat='$alamat' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            header("location: data.php");
        }else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>