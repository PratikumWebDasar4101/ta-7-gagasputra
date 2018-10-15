<?php
require_once("connect.php");

$nim = $_GET['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$fakultas = $_POST['fakultas'];
$prodi = $_POST['prodi'];
$asal = $_POST['asal'];
$motto = $_POST['motto'];

$database = "UPDATE mahasiswa SET nama = '$nama' , jenis_kelamin = '$jenis_kelamin' , fakultas = '$fakultas', prodi = '$prodi' , asal = '$asal', motto = '$motto' WHERE nim = '$nim'";
if(mysqli_query($connect, $database)) {
    ?>
    <script>
         alert("Update Berhasil");
        location= "view.php";
    </script>
    <?php
}
else {
    ?>
    <script>
        alert("Gagal Edit");
        location= "edit.php";
    </script>
    <?php
}
mysqli_close($connect);


?>