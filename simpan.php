<?php

include("konek.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $Kode_Akun = $_POST['Kode_Akun'];
    $Nama_Akun = $_POST['Nama_Akun'];

    // buat query
    $sql = "INSERT INTO akun (Kode_Akun,Nama_Akun) VALUE ('$Kode_Akun','$Nama_Akun')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>