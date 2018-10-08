<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form action="prosesform.php" method="post">
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
