<html>
    <head>
        <title>Pengolahan Form 1</title>
    </head>
    <body>
        <form action="" method="POST" name="input">
            Nama Anda : <input type="text" name="nama" id="">
            <input type="submit" value="Input" name="Input">
        </form>
    </body>
</html>
<?php
    if(isset($_POST['Input'])){ //jika tombol submit dengan atribut ame Input di klik atau enter
        $nama = $_POST['nama'];//deklarasi var $name dan di berinilai variabel post
        echo "Nama Anda : <b>$nama</b>"; //menampilkan nilai variabel $nama
    }
?>