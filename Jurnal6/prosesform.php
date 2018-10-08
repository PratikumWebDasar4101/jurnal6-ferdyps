<?php
     require_once("db.php");
     session_start();

     $nama = $_POST['nama'];
     $nim = $_POST['nim'];
     $kelas = $_POST['kelas'];
     $gender = $_POST['gender'];
     $hobi = $_POST['hobi'];
     $fakultas = $_POST['fakultas'];
     $alamat = $_POST['alamat'];

     $list_hobi = implode(", ", $hobi);
 
     $sql = "INSERT INTO mahasiswa(nama, nim, kelas, jenis_kelamin, hobi, fakultas, alamat) 
             VALUES ('$nama', '$nim', '$kelas', '$gender', '$list_hobi', '$fakultas', '$alamat')";
 
     if (mysqli_query($conn, $sql)) {
         echo "Data berhasil ditambah <br>";
     }else {
         echo "Error: " . $sql . "<br?" . mysqli_error($conn);
     }
 
     mysqli_close($conn);
     echo "<a href='login.php'>Login</a>";
?>