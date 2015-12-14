<?php
require 'koneksi.php';
bukakoneksi(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD with AJAX</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="operation.js"></script>
</head>
<body>

<div class="navbar navbar-static-top">
	<div class="navbar-inner">
		<div class="container">
			<a href="#" class="brand">CRUD with AJAX</a>
		</div>
	</div>
</div>

<div class="modal hide fade" id="kotakdialog">
	<div class="modal-header">
	    <div class="close" type="button" data-dismiss="modal"><span>&times;</span></div>
		<h3 id="judulheader"></h3>
	</div>
	<div class="modal-body">
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
		<button type="button" class="btn btn-success" id="savedata"><span id="sve"></span></button>
	</div>
</div>

<div class="container">
	<h3>
		Data Mahasiswa
	</h3>
	<h4>
	  Pilih Halaman 
	  <?php 
      $query = "select * from grade";
      $hasil = mysql_query($query);
      ?>
      <select class="input-medium" name="nilai" id="nilai">
      <option value="0" selected="selected">Pilih Halaman</option>
      <?php
      while ($qtabel = mysql_fetch_assoc($hasil))
      {
        echo '<option>'.$qtabel['grade'].'</option>'; 
       
      }
      ?>
      </select>
    <button class="btn btn-primary atur" id="show">Show</button> Or <a class="btn tambah atur" type="button" href="#kotakdialog" data-toggle="modal"><i class="icon-plus"></i> Tambah Data</a>
	</h4>
	<div id="tampildata">
	</div>
	<div id="msg"></div>
</div>

<?php
tutupkoneksi(); 
?>

</body>
</html>