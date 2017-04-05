<?php
include "koneksi.php";
if( !$xml = simplexml_load_file('barang1.xml')){
    echo "load XML failed !";
} else {
    echo '<h1>Berikut Data barang</h1>';
        foreach ($xml as $save) {
            $kode = $save ->kode;
            $satuan = $save ->satuan;
            $harga = $save ->harga;
            $pta = $save ->asal ->pta;
            $emaila = $save ->asal ->emaila;
            $kodewila = $save ->asal ->kodewila;
            $ptt = $save ->tujuan ->ptt;
            $emailt = $save ->tujuan ->emailt;
            $kodewilt = $save ->tujuan ->kodewilt;
            echo '<h4>Barang</h4>';
            echo 'Kode : '.$kode.'<br />';
            echo 'Satuan : '.$satuan.'<br />';
            echo 'Harga : '.$harga.'<br />';
            echo 'PT Asal : '.$pta.'<br />';
            echo 'Email : '.$emaila.'<br />';
            echo 'Kodewil : '.$kodewila.'<br />';
            echo 'PT Tujuan : '.$ptt.'<br />';
            echo 'Email : '.$emailt.'<br />';
            echo 'Kodewil : '.$kodewilt.'<br />';
            echo '<br>';
            $result = mysql_query("INSERT INTO barang VALUES('','$pta $emaila $kodewila','$ptt $emailt $kodewilt','$kode','$satuan','$harga')");
        }
            if ($result){
                echo '<h2>Selamat Data Berhasil Disimpan</h2>';
            } else {
                echo '<h2>Gagal Menyimpan Ke Databases</h2>'.mysql_error();
            }
}
?>