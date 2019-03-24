<?php

include("konek.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $Kode_Akun = $_POST['Kode_Akun'];
    $Nama_Akun = $_POST['Nama_Akun'];

    // buat query update
    $sql = "UPDATE akun SET Kode_Akun='$Kode_Akun', Nama_Akun='$Nama_Akun' WHERE id=$id";
     //$sql = "INSERT INTO akun (Kode_Akun,Nama_Akun) VALUE ('Kode_Akun,Nama_Akun')";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: tampil.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>