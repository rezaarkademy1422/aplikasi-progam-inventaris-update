<div class="body">

<?php 
if (isset($_GET['nik'])) { ?>
	
<h1>Edit Data</h1>	
<?php
require_once 'functionall.php';
require_once 'Koneksi.php';
 $sql = mysqli_query($dbc, "SELECT * FROM tbkaryawan where nik = '$_GET[nik]' ");
 while($data = mysqli_fetch_array($sql)){
 ?>
<form method="post">

	<table border="2" style="border:solid white;">
<tr>
	<td>NIK</td>
	<td>Nama</td>
	<td>Jabatan</td>
	<td>No_ktp</td>
	
</tr>
  
<tr>
	<td><input type="text" disabled="" name="nik" value="<?php echo $data['nik'];?>" style="width: 80px; height: 20px;"></td>
	<td><input type="text" name="namakaryawan" value="<?php echo $data['namakaryawan'];?>" style="width: 120px;"></td>
	<td><input type="text" name="bagian" value="<?php echo $data['bagian'];?>" style="width: 120px;"></td>
	<td> <input type="text" name="noktp" value="<?php echo $data['noktp'];?>" style="width: 120px;"><br></td>
	
</tr>

<tr>
	<td>Tempat</td>
	<td>Tanggal Lahir</td>
	<td>Jenis Kelamin</td>
	<td>Status Nikah</td>
	
</tr>
<tr>
	<td><input type="text" name="tempatlahir" value="<?php echo $data['tempatlahir'];?>" style="width: 120px;"></td>
	<td><input type="date" name="tgllahir" value="<?php echo $data['tgllahir'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jeniskelamin" value="<?php echo $data['jeniskelamin'];?>" style="width: 120px;"></td>
	<td><input type="text" name="statusnikah" value="<?php echo $data['statusnikah'];?>" style="width: 120px;"></td>
	
</tr>
<tr>
	<td>Alamat</td>
	<td>Nomor HP</td>
	<td>Pend. Terakhir</td>
	<td>Jurusan</td>
</tr>
<tr>
	<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" style="width: 120px;"></td>
	<td><input type="text" name="nohp" value="<?php echo $data['nohp'];?>" style="width: 120px;"></td>
	<td><input type="text" name="pendidikanakhir" value="<?php echo $data['pendidikanakhir'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jurusan" value="<?php echo $data['jurusan'];?>" style="width: 120px;"></td>
</tr>

<tr>
	<td>Mulai Kerja</td>
	<td>Selesai Kerja</td>
	
</tr>

<tr>
	<td><input type="date" name="tgl_masuk" value="<?php echo $data['tglmulaikerja'];?>" style="width: 120px;"></td>
	<td><input type="date" name="tgl_keluar" value="<?php echo $data['tglkeluar'];?>" style="width: 120px;"></td>
	<td style="text-align: left; border:transparent;">
		<button type="submit" name="btn-edtKR" onclick="return confirm('Apakah Anda Yakin Akan Mengedit Data Tersebut ?')">Edit</button>
		<button><a href="Karyawan.php">Kembali</a></button></td>
</tr>

</table>




<?php }
	
	} ?>

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


::placeholder{
	color:white;
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
