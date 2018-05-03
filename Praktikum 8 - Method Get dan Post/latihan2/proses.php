<?php
    include 'function/displaylatihan1.php'; //Import file html dan CSS
    if(isset($_POST['simpan'])){ //jika tombol submit dengan atribut ame Input di klik atau enter
        
        //deklarasi variabel
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $progdi = $_POST['progdi'];
        $mtk = $_POST['mtk'];
        $akt = $_POST['akt'];
        $pai = $_POST['pai'];
        $db = $_POST['db'];
        $prg = $_POST['prg'];
        $erp = $_POST['erp'];
        $pryk = $_POST['pryk'];
        
        
        //fungsi grade
        include 'function/grade/mtk.php'; //fungsi grade mtk
        include 'function/grade/akt.php'; //fungsi grade akutansi
        include 'function/grade/pai.php'; //fungsi grade pai
        include 'function/grade/db.php'; //fungsi grade database
        include 'function/grade/prg.php'; //fungsi grade pemprograman
        include 'function/grade/erp.php'; //fungsi grade erp
        include 'function/grade/pryk.php'; //fungsi grade proyek
        //fungsi progdi
        include 'function/progdi.php';
        //fungsi bobot
        include 'function/bobotmkul.php';
        //fungsi hitung IPS (Index per Semester)
        include 'function/ips.php';
        //fungsi insert tanggal
        include 'function/tanggal.php';

        //Output

        echo "NIM : <b>$nim</b><br>";
        echo "<p style='float:right'>".tanggal($hari,$tgl),"</p>";
        echo "Nama : <b>$nama</b><br>";
        echo "Program Studi : <b>".jurusan($progdi),"</b><br>";
        echo "<center><h3>Nilai Matakuliah</h3></center>";
        echo "
        <table>
            <tr>
                <th>Mata kuliah</th>
                <th>SKS</th>
                <th>Nilai</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td>Matematika</td>
                <td>$sks_mtk</td>
                <td>$mtk</td>
                <td>".matematika($mtk),"</td>
            </tr>
            <tr>
                <td>Akutansi</td>
                <td>$sks_akt</td>
                <td>$akt</td>
                <td>".akutansi($akt),"</td>
            </tr>
            <tr>
                <td>Pendidikan Agama Islam</td>
                <td>$sks_pai</td>
                <td>$pai</td>
                <td>".agama($pai),"</td>
            </tr>
            <tr>
                <td>Basis Data 1</td>
                <td>$sks_db</td>
                <td>$db</td>
                <td>".database($db),"</td>
            </tr>
            <tr>
                <td>Pemprograman 1</td>
                <td>$sks_prg</td>
                <td>$prg</td>
                <td>".pemprograman($prg),"</td>
            </tr>
            <tr>
                <td>ERP 1</td>
                <td>$sks_erp</td>
                <td>$erp</td>
                <td>".erp($erp),"</td>
            </tr>
            <tr>
                <td>Proyek 2</td>
                <td>$sks_pryk</td>
                <td>$pryk</td>
                <td>".proyek($pryk),"</td>
            </tr>
            <tr>
                <td>IPS (Index per Semester)</td>
                <td> </td>
                <td> </td>
                <td>".round(hitungips($rata2, $na_total, $na), 2) ,"
            </tr>
            <tr>
                <td>Rata - Rata</td>
                <td> </td>
                <td> </td>
                <td>".round($rata2, 2),"</td>
            </tr>
        </table>
        ";
        /*echo "Matematika : $mtk Grade ".matematika($mtk),"<br>";
        echo "Akutansi : $akt Grade ".akutansi($akt),"<br>";
        echo "Pendidigan Agama Islam : $pai Grade ".agama($pai),"<br>";
        echo "Basis Data 1 : $db Grade ".database($db),"<br>";
        echo "Pemprograman 1 : $prg Grade ".pemprograman($db),"<br>";
        echo "ERP : $erp Grade ".erp($erp),"<br>";
        echo "Proyek 2 : $pryk Grade ".proyek($pryk),"<br>";
        echo "IPS : ".hitungips($rata2, $na_total, $na);*/
        

    }
?>