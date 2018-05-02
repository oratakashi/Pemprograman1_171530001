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
    if(isset($_POST['Input'])){
        $nama = $_POST['nama'];
        echo "Nama Anda : <b>$nama</b>";
    }
?>