<?php include("konek.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tampil</title>
</head>

<body>
    <header>
        <h3>Akuntansi IPB</h3>
    </header>

    <nav>
        <a href="index.php"> Back </a>
        <br>
        <br>
        <a href="form.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode AKuntansi</th>
            <th>Nama AKuntansi</th>
            
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM akun";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            
            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['Kode_Akun']."</td>";
            echo "<td>".$siswa['Nama_Akun']."</td>";
            

            echo "<td>";
            echo "<a href='edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>