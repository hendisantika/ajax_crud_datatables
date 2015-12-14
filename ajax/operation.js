$(document).ready(function()
{
	var nis = 0;

 	$('#show').live("click", function()
 	{
 		var loadpage = "tampil-data.php";
 		var nilai = $('select[name=nilai]').val();
 		$.post(loadpage, {nilai: nilai}, function(data)
 		{
 			$('#tampildata').html(data).show();
 		});
 	
 	});	

 	$('.hapus').live("click", function()
 	{
 		var url = "action.php";
 		nis = this.id;
 		var loadpage = "tampil-data.php";
 		var nilai = $('select[name=nilai]').val();
 		var answer = confirm("Apakah Anda ingin menghapus data ini?");
 		if(answer)
 		{
 			$.post(url, {hapus: nis}, function()
 			{
 				$.post(loadpage, {nilai: nilai}, function(data)
 		        {
 			        $('#tampildata').html(data).show();
 			        $("#msg").show();
                    $("#msg").fadeOut(2500);
				    $('#msg').html("Succesfully deleted");
 		        });
 			});
 		}
 	});

 	$('.tambah, .ubah').live("click", function()
 	{
 		var url = "form-data.php";
 		var nilai = $('select[name=nilai]').val();
 		nis = this.id;
 		if(nis == 0)
 		{
 			$('#judulheader').html("Tambah Data Nilai");
 			$('#sve').html("Input");
 			$('#msg').html("Succesfully added");
 		}
 		else
 		{
 		    $('#judulheader').html("Ubah Data Nilai");
 		    $('#sve').html("Update");	
 		    $('#msg').html("Succesfully updated");
 		}

 		$.post(url, {nilai: nilai, id: nis}, function(data)
 		{
 			$('.modal-body').html(data).show();
 		});
 	});

 	$('#savedata').bind("click", function(event)
 	{
 		var url = "action.php";
 		var loadpage = "tampil-data.php";
 		var getnis = $('input:text[name=unis]').val();
 		var getnama = $('input:text[name=unama]').val();
 		var getnilai = $('input:text[name=unilai]').val();
 		var takenis = $('select[name=tnis]').val();
 		var takenama = $('input:text[name=tnama]').val();
 		var takehal = $('select[name=thalaman]').val();
 		var takenilai = $('input:text[name=tnilai]').val();
 		var nilai = $('select[name=nilai]').val();

 		$.post(url, {unis: getnis, unama: getnama, unilai: getnilai, tnis: takenis, tnama: takenama, thalaman: takehal, tnilai: takenilai, id: nis, nilai: nilai}, function()
 		{
 			$("#kotakdialog").modal("hide");
            $.post(loadpage, {nilai: nilai}, function(data)
 		    {
 			    $('#tampildata').html(data).show();
 			    $("#msg").show();
                $("#msg").fadeOut(2500);
 		    });
          
 		});
 	});
});
