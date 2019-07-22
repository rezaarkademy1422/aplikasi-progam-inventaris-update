<div class="body">


<?php 
if (isset($_GET['kodebarang'])) { ?>
	
<h1>Edit Data</h1>	
<?php
require_once 'functionall.php';
require_once 'Koneksi.php';
 $sql = mysqli_query($dbc, "SELECT * FROM tblaptop where kodebarang = '$_GET[kodebarang]' ");
 while($data = mysqli_fetch_array($sql)){
 ?>

	<form method="post">

	<table border="2" style="border:solid white;">
<tr>
	<td>Kode Barang</td>
	<td>Merk</td>
	<td>Serial Number</td>
	<td>Status</td>
	<td>Keterangan</td>
	
</tr>
  
<tr>
	<td><input type="text" disabled="" name="kodebarang" value="<?php echo $data['kodebarang'];?>" style="width: 80px; height: 20px;"></td>
	<td><input type="text" name="merk" value="<?php echo $data['merk'];?>" style="width: 120px;"></td>
	<td><input type="text" name="sn" value="<?php echo $data['sn'];?>" style="width: 120px;"></td>
	<td> <input type="text" name="status" value="<?php echo $data['status'];?>" style="width: 120px;"><br></td>
	<td> <input type="text" name="keterangan" value="<?php echo $data['keterangan'];?>" style="width: 120px;"><br></td>
	
</tr>

<tr>
	<td style="text-align: left; border:transparent;">
		<button type="submit" name="btn-edtLPT" onclick="return confirm('Apakah Anda Yakin Akan Mengedit Data Tersebut ?')">Edit</button><button><a href="Laptop.php">Kembali</a></button>
	</td>
</tr>

</table>

<?php }
}
 ?>

</form>


</div>
<!-----Gimana Nch---->


<style type="text/css">
	body{
		background-image:url('img/kayu.jpeg');
		color: white;
		font-family: Times New Roman; 
		background-size: cover;	
		background-attachment: fixed;
	}
	.khusus button{
		width: 40%;
		height: 50px;
		border-radius: 3px;
		background-color: white;
		font-size: 20px;
		font-family: Times New Roman;
		margin: 10px;
	}

::placeholder{
	color:white;
}

.body{

	animation-name: gerakan;
	animation-duration: 1s;

}

@keyframes gerakan{

	0%{
		transform: scale(0);
		
	}
	25%{
		transform: scale(0.1);
		
		}
	50%{
		transform: scale(0.1;); 
		
	}
	75%{
		
		
	}
	100%{
		
	}
}


input{
	border:none;
	background-color: transparent;
	color:white;
	font-size: 13px;
	font-family: Comic Sans MS;
	margin: 10px;
}



button{
	margin: 7px;
	width: 65px;
	height: 30px;
	border:1px solid white;
	border-radius: 5px;
	background-color: black;
	color:white;


}

table{
	background-color: rgba(0,0,0,0.5);
}

a{
	text-decoration: none;
	color: white;
}



</style>
