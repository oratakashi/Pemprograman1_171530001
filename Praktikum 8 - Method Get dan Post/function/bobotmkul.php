<?php
    //menyimpan grade per makul
    $grade_mtk = matematika($mtk);
    $grade_akt = akutansi($akt);
    $grade_pai = agama($pai);
    $grade_db = database($db);
    $grade_prg = pemprograman($prg);
    $grade_erp = erp($erp);
    $grade_pryk = proyek($pryk);

    //function untuk menentukan bobot per makul
    include 'function/bobotmkul/mtk.php';
    include 'function/bobotmkul/akt.php';
    include 'function/bobotmkul/pai.php';
    include 'function/bobotmkul/db.php';
    include 'function/bobotmkul/prg.php';
    include 'function/bobotmkul/erp.php';
    include 'function/bobotmkul/pryk.php';
?>