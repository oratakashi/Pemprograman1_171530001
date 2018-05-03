<?php
    //inisialisasi sks permakul
    $sks_mtk = 4;
    $sks_akt = 2;
    $sks_pai = 2;
    $sks_db = 3;
    $sks_prg = 3;
    $sks_erp = 3;
    $sks_pryk = 3;

    //Menghitung rata2
    $na = $mtk + $akt + $pai + $db + $prg + $erp + $pryk;
    $rata2 = $na / 7;

    //menghitung nilai akhir permakul
    $na_mtk = bobot_mtk($grade_mtk) * $sks_mtk;
    $na_akt = bobot_akt($grade_akt) * $sks_akt;
    $na_pai = bobot_pai($grade_pai) * $sks_pai;
    $na_db = bobot_db($grade_db) * $sks_db;
    $na_prg = bobot_prg($grade_prg) * $sks_prg;
    $na_erp = bobot_erp($grade_erp) * $sks_erp;
    $na_pryk = bobot_pryk($grade_pryk) * $sks_pryk;
    $jumlah_bobot = bobot_mtk($grade_mtk) + bobot_akt($grade_akt) + bobot_pai($grade_pai) + bobot_db($grade_db) + bobot_prg($grade_prg) + bobot_erp($grade_erp) + bobot_pryk($grade_pryk);
    $na_total = bobot_mtk($grade_mtk) + bobot_akt($grade_akt) + bobot_pai($grade_pai) + bobot_db($grade_db) + bobot_prg($grade_prg) + bobot_erp($grade_erp) + bobot_pryk($grade_pryk);

    //fungsi menghitung IPS (Index per Semester)
    function hitungips ($rata2, $na_total, $na){
        $ips=( $na / 20 ) / 10 + 0.5;
        $ips=$ips / 1;
        return $ips;
    }
?>
