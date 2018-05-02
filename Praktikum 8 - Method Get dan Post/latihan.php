<html>
    <head>
        <title>Latihan Praktikum 8</title>
        <link rel="stylesheet" href="latihan.css" type="text/css">
    </head>
    <body>
        <form action="proses.php" method="post">
            <center><h1>Form Input Nilai</h1></center>
            <center><p>Silahkan Masukan Informasi di Bawah ini</p></center>
            <label for="nim">NIM :</label>
            <input type="text" name="nim" id=""><br>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id=""><br>
            <label for="progdi">Program Studi :</label>
            <select name="progdi" id="">
                <option value="ti">Teknik Informatika</option>
                <option value="tm">Teknik Mesin</option>
                <option value="tkim">Teknik Kimia</option>
            </select><br>
            <h3>Nilai Matakuliah</h3>
            Matematika : <input type="text" name="mtk" id=""><br>
            Akutansi   : <input type="text" name="akt" id=""><br>
            Pendidikan Agama Islam   : <input type="text" name="pai" id=""><br>
            Basis Data 1   : <input type="text" name="db" id=""><br>
            Pemprograman 1   : <input type="text" name="prg" id=""><br>
            ERP 1   : <input type="text" name="erp" id=""><br>
            Proyek 2   : <input type="text" name="pryk" id=""><br>
            <center><input type="submit" value="Simpan" name="simpan"></center>
        </form>
    </body>
</html>