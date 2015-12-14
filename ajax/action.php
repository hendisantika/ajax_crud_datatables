<?php
require 'koneksi.php';
bukakoneksi();

$buang = $_POST['hapus'];
if(isset($_POST['hapus']))
{
	mysql_query("DELETE from nilaiharian where nis='$buang'");
}
else
{
	$vnis = $_POST['unis'];
	$vnama = $_POST['unama'];
	$vnilai = $_POST['unilai'];
	$varnis = $_POST['tnis'];
	$varnama = $_POST['tnama'];
	$varnilai = $_POST['tnilai'];
	$varhal = $_POST['thalaman'];
	$ambilnis = $_POST['id'];
	$nilai = $_POST['nilai'];

	if($varnama!="" && $varnilai!="" || $vnilai!="")
	{
		if($ambilnis == 0)
		{
			$hasil = mysql_query("INSERT into nilaiharian(nis, nama, $varhal) values('$varnis', '$varnama', '$varnilai')");
		}
		else
		{
			mysql_query("UPDATE nilaiharian set nama='$vnama', $nilai='$vnilai' where nis='$ambilnis'");
		}
	}
}

tutupkoneksi();
?>