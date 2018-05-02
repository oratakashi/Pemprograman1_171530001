<html>
    <head>
        <title>Hasil Pembelajaran Semester 2</title>
        <link rel="stylesheet" href="latihan.css" type="text/css">
    </head>
    <body>
        <?php
            $progdi = $_POST['progdi'];
            if ($progdi == 'ti'){
                $jurusan = 'Teknik Informatika';
                //return $jurusan;
            }
            if($progdi == 'tm'){
                $jurusan = 'Teknik Mesin';
                //return $jurusan;
            }
            if($progdi == 'tkim'){
                $jurusan = 'Teknik Kimia';
                //return $jurusan;
            }
            echo "<center><h1>Nilai Semester 2 | $jurusan
            </h1></center>"
        ?>
        <?php 
        $nama = $_POST['nama'];
        echo "
        <center>
            <h3>Nama Mahasiswa : <b>$nama</b></h3>
        </center>
        "?>
    </body>
</html>