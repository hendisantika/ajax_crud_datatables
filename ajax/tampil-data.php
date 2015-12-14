<table class="table table-condensed table-bordered table-hover">
<?php
require 'koneksi.php';
bukakoneksi();
?>

<tr>
  <th>NIS</th>
  <th>Nama</th>
  <th>Nilai</th>
  <th>Action</th>
</tr>

<?php
  $nilai = $_POST['nilai'];
	$query= "select nis, $nilai, nama from nilaiharian";
    $konversi = mysql_query($query);
echo "<div id='deskripsi'>Data untuk nilai $nilai</div>";
while($hasil = mysql_fetch_array($konversi))
{

    $nis = $hasil['nis'];
    $nil = $hasil[1];
    $nama = $hasil['nama'];
    
?>
<tr>
     <td><?php echo $nis; ?></td>
     <td><?php echo $nama; ?></td>
     <td><?php echo $nil; ?></td>
     <td>
     	<a href="#kotakdialog" data-toggle="modal" class="ubah" id="<?php echo $nis; ?>"><i class="icon-pencil"></i></a>
     	<a href="#" class="hapus" id="<?php echo $nis; ?>"><i class="icon-trash"></i></a>
     </td>
    </tr>

<?php
}
tutupkoneksi();
?>
</table>