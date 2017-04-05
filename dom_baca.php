<?php
//membaca file xml, meloadnya menjadi objek dan disimpan di memori
//Document Object Model (DOM)

$doc = new DOMDocument ();
$doc->load ( 'barang1.xml' );

$barangs = $doc->getElementsByTagName ( "barang" );

foreach ( $barangs as $barang ) {

		$ket = $barang->getAttribute ( 'keterangan' );

		$kodes = $barang->getElementsByTagName ( "kode" );
		$kode = $kodes->item ( 0 )->nodeValue;

		$satuans = $barang->getElementsByTagName ( "satuan" );
		$satuan = $satuans->item ( 0 )->nodeValue;

		$hargas = $barang->getElementsByTagName ( "harga" );
		$harga = $hargas->item ( 0 )->nodeValue;

		echo "$kode - $satuan - $harga - $ket" . "</br>";
}

?>