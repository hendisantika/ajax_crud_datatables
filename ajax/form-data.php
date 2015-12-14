<?php
require 'koneksi.php';
bukakoneksi();

$ambilnilai = $_POST['nilai'];
$niss = $_POST['id'];
$result = mysql_fetch_array(mysql_query("SELECT nama, $ambilnilai from nilaiharian where nis = '$niss'"));

if($niss > 0)
{
	$resnilai = $result[1];
	$resnama = $result['nama'];
?>
<div class="form-horizontal">
	<div class="control-group">
		<label class="control-label">NIS</label>
		<div class="controls">
			<input type="text" class="input-medium" name="unis" readonly="true" value="<?php echo $niss; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Nama</label>
		<div class="controls">
			<input type="text" class="input-medium" name="unama" readonly="true" value="<?php echo $resnama; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Nilai</label>
		<div class="controls">
			<input type="text" class="input-small" name="unilai" value="<?php echo $resnilai; ?>">
		</div>
	</div>
</div>
<?php
}
else
{
	$resnilai = "";
	$resnama = "";
?>
<div class="form-horizontal">

     <div class="control-group">
        <label class="control-label">NIS</label> 
             <div class="controls">
                 <?php 
                       $hasil = mysql_query("select * from login where level='2'");
                       $jsArray = "var namauser = new Array();\n";  
                       echo '<select name="tnis" class="input-medium" onchange="document.getElementById(\'result\').value = namauser[this.value]">';
                       echo '<option value="0" selected="selected">Pilih NIS</option>';
      
                       while ($row = mysql_fetch_assoc($hasil))
                       {
                          echo '<option value="' . $row['nis'] . '">' . $row['nis'] . '</option>';  
                          $jsArray .= "namauser['" . $row['nis'] . "'] = '" . addslashes($row['nama']) . "';\n";   
                       }
      

                       echo '</select>';
                 ?> 
             </div>
     </div>

     <div class="control-group">
        <label class="control-label">Nama</label>   
             <div class="controls">
                 <input type="text" name="tnama" id="result" readonly="true" class="inputnama"/><script type="text/javascript"> <?php echo $jsArray; ?> </script>                   
             </div>
     </div>

     <div class="control-group">
        <label class="control-label">Halaman</label> 
              <div class="controls">
                 <select class="input-medium" name="thalaman" id="grade">
                       <option value="0" selected="selected">Pilih Halaman</option>
                             <?php
                                 $query = "select * from grade";
                                 $hasil = mysql_query($query);
                                 while ($qtabel = mysql_fetch_assoc($hasil))
                                 {
                                     echo '<option>'.$qtabel['grade'].'</option>'; 
       
                                 }
                             ?>
                 </select>
              </div>
     </div>

     <div class="control-group">
        <label class="control-label">Nilai</label> 
              <div class="controls">
                 <input type="text" class="input-small" name="tnilai" class="inputnilai"/>
              </div>
     </div>

</div>
<?php
} 
tutupkoneksi();
?>