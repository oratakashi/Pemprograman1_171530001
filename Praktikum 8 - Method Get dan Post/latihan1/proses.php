<?php 
    include 'display.php'; //import html dan css
    if(isset($_GET['simpan'])){
        //deklarasi variabel
        $nik = $_GET['nik'];
        $nama = $_GET['nama'];
        $temptlhr = $_GET['temptlhr'];
        $tgllhr = $_GET['tgllhr'];
        $jenisk = $_GET['jenisk'];
        $alamat = $_GET['alamat'];
        $rt = $_GET['rt'];
        $rw = $_GET['rw'];
        $kel = $_GET['kel'];
        $kec = $_GET['kec'];
        $kota = $_GET['kota'];
        $agama = $_GET['agama'];
        $spernikahan = $_GET['spernikahan'];
        $kerja = $_GET['kerja'];
        $tenggang = $_GET['tenggang'];

        //import function tanggal
        include 'tanggal.php';

        //output
        echo "
        <table>
            <tr>
                <td><h4>NIK : $nik</h4></td>
            </tr>
        </table>";
        echo "
        <table>
            <tr>
                <td>Nama</td>
                <td>: $nama</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>: $temptlhr , $tgllhr</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: $jenisk</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: $alamat</td>
            </tr>
            <tr>
                <td>RT/RW</td>
                <td>: $rt/$rw</td>
            </tr>
            <tr>
                <td>Kel/Desa</td>
                <td>: $kel</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>: $kec</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: $agama</td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td>: $spernikahan</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: $kerja</td>
            </tr>
            <tr>
                <td>Masa Berlaku</td>
                <td>: ".tanggal($tahun,$hari,$tenggang),"</td>
            </tr>
        </table>";
        echo "</div>";
    }
?>