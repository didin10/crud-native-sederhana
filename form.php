<!DOCTYPE html>
<html>
<head>
    <title>Formulir </title>
</head>

<body>
    <header>
        <h3>Akuntansi IPB</h3>
    </header>

    <form action="simpan.php" method="POST">

        <fieldset>

        <p>
            <label for="Kode_Akun">Kode Akun: </label>
            <input type="text" name="Kode_Akun" placeholder="Kode_Akun" />
        </p>
        <p>
            <label for="Nama_Akun">Nama Akuntansi: </label>
            <input type="text" name="Nama_Akun" placeholder="Nama_Akun" />
        </p>
        
        <p>
            <input type="submit" value="Input" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>