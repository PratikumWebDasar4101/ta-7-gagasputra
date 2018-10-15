<?php
    require("connect.php");
    
    $nim = $_GET['nim'];
    $database = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $result = mysqli_query($connect, $database);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Form Mahasiswa </title>
    </head>
    <body>
        <pre>
        <h1> FORM MAHASISWA </h1>
            <form action="p_edit.php?nim=<?php echo $row['nim']; ?> " method="POST">
                NIM             : <input type="text" name="nim" pattern="\d*" maxlength="10" required value="<?php echo $row['nim']; ?>" disabled> <br><br>
                Nama            : <input type="text" name="nama" value="<?php echo $row['nama']; ?>"> <br><br>
                Jenis Kelamin   : <input type="radio" name="jenis_kelamin" id="radio" value="Laki-Laki" <?php if($row['jenis_kelamin'] == "Laki-Laki") {echo "checked ";} ?> > Laki-Laki <input type="radio" name="jenis_kelamin" id="radio" value="Perempuan" <?php if($row['jenis_kelamin'] == "Perempuan") {echo "checked ";} ?> > Perempuan <br><br>    
                Fakultas        : <select name="fakultas" id="fakultas" required><br>
                    <option value="FTE" <?php if($row['fakultas'] == "FIT"){ echo "selected"; }?> > FTE </option>
                    <option value="FIF" <?php if($row['fakultas'] == "FI"){ echo "selected"; }?>> FIF </option>
                    <option value="FRI" <?php if($row['fakultas'] == "FRI"){ echo "selected"; }?>> FRI </option>
                    <option value="FEB" <?php if($row['fakultas'] == "FEB"){ echo "selected"; }?>> FEB </option>
                    <option value="FKB" <?php if($row['fakultas'] == "FKB"){ echo "selected"; }?>> FKB </option>
                    <option value="FIK" <?php if($row['fakultas'] == "FIK"){ echo "selected"; }?>> FIK </option>
                    <option value="FIT" <?php if($row['fakultas'] == "FIT"){ echo "selected"; }?>> FIT </option>
                    </select> <br><br>
                Program Studi   : <select name="prodi" id="prodi" required><br>
                    <option value="Manajemen Informatika" <?php if($row['prodi'] == "Manajemen Informatika"){ echo "selected"; }?> > Manajemen Informatika </option>
                    <option value="Teknik Telekomunikasi" <?php if($row['prodi'] == "Teknik Telekomunikasi"){ echo "selected"; }?> > Teknik Telekomunikasi </option>
                    <option value="Teknik Informatika" <?php if($row['prodi'] == "Teknik Informatika"){ echo "selected"; }?> > Teknik Informatika </option>
                    <option value="Teknik Komputer" <?php if($row['prodi'] == "Teknik Komputer"){ echo "selected"; }?> > Teknik Komputer </option>
                    <option value="Manajemen Pemasaran" <?php if($row['prodi'] == "Manajemen Pemasaran"){ echo "selected"; }?> > Manajemen Pemasaran </option>
                    <option value="Perhotelan" <?php if($row['prodi'] == "Perhotelan"){ echo "selected"; }?> > Perhotelan </option>
                    <option value="Komputerisasi Akuntansi" <?php if($row['prodi'] == "Komputerisasi Akuntansi"){ echo "selected"; }?> > Komputerisasi Akuntansi </option>
                    <option value="Sistem Multimedia" <?php if($row['prodi'] == "Sistem Multimedia"){ echo "selected"; }?> > Sistem Multimedia </option>
                    </select> <br><br>
                Asal            : <input type="text" name="asal" value="<?php echo $row['asal']; ?>"> <br><br>
                Motto           : <textarea name="motto" cols="20" rows="5"><?php echo $row['motto']; ?></textarea> <br><br>
                <input type="submit" name="submit" value="Edit">
            </form>
        </pre>
    </body>
</html>