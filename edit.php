<?php

include("konek.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: tampil.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM akun WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Akun </title>
</head>

<body>
    <header>
        <h3>Formulir Edit </h3>
    </header>

    <form action="edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="Kode_Akun">Kode Akuntansi: </label>
            <input type="text" name="Kode_Akun" placeholder="Kode_Akun" value="<?php echo $siswa['Kode_Akun'] ?>" />
        </p>
        <p>
            <label for="Nama_Akun">Nama Akuntansi: </label>
            <input type="text" name="Nama_Akun" placeholder="Nama_Akun" value="<?php echo $siswa['Nama_Akun'] ?>" />
        </p>
        
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>