<div class="body">


<?php 
if (isset($_GET['kodebarang'])) { ?>
	
<h1>Edit Data</h1>	
<?php
require_once 'functionall.php';
require_once 'Koneksi.php';
 $sql = mysqli_query($dbc, "SELECT * FROM tbtransaksilaptop where kodebarang = '$_GET[kodebarang]' ");
 while($data = mysqli_fetch_array($sql)){
 ?>
<form method="post">

	<table border="2" style="border:solid white;">
<tr>
	<td>Tgl. Peminjaman</td>
	<td>Kode Barang</td>
	<td>Merk</td>
	<td>Type</td>
	
</tr>
  
<tr>
	<td><input type="date"  name="tglpeminjaman" value="<?php echo $data['tglpeminjaman'];?>" style="width: 120px; height: 20px;"></td>
	<td><input type="text" name="kodebarang" value="<?php echo $data['kodebarang'];?>" style="width: 120px;"></td>
	<td><input type="text" name="merk" value="<?php echo $data['merk'];?>" style="width: 120px;"></td>
	<td> <input type="text" name="type" value="<?php echo $data['type'];?>" style="width: 120px;"><br></td>
	
</tr>

<tr>
	<td>Serial Number</td>
	<td>Status</td>
	<td>Keterangan</td>
	<td>NIK</td>
	
</tr>
<tr>
	<td><input type="text" name="sn" value="<?php echo $data['sn'];?>" style="width: 120px;"></td>
	<td><input type="text" name="status" value="<?php echo $data['status'];?>" style="width: 120px;"></td>
	<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'];?>" style="width: 120px;"></td>
	<td><input type="text" name="noid" value="<?php echo $data['noid'];?>" style="width: 120px;"></td>
</tr>
<tr>
	
	<td>Nama</td>
	<td>Jabatan</td>
	<td>Tempat Tanggal Lahir</td>
	<td>Alamat</td>
	
</tr>
<tr>
	
	<td><input type="text" name="nama" value="<?php echo $data['nama'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jabatan" value="<?php echo $data['jabatan'];?>" style="width: 120px;"></td>
	<td><input type="text" name="ttl" value="<?php echo $data['ttl'];?>" style="width: 120px;"></td>
	<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" style="width: 120px;"></td>
	
</tr>

<tr>
	<td>Pend. Akhir</td>
	<td>Jenis Kelamin</td>
	<td>Tahun Masuk</td>
	<td>Nomor Handphone</td>
	
</tr>

<tr>
	<td><input type="text" name="pendidikanakhir" value="<?php echo $data['pendidikanakhir'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jeniskelamin" value="<?php echo $data['jeniskelamin'];?>" style="width: 120px;"></td>
	<td><input type="text" name="tahunmasuk" value="<?php echo $data['tahunmasuk'];?>" style="width: 120px;"></td>
	<td><input type="text" name="nohp" value="<?php echo $data['nohp'];?>" style="width: 120px;"></td>
	
</tr>

<tr>
	
	<td>Tgl. Pengembalian</td>
	
	
</tr>

<tr>
	<td><input type="date" name="tglpengembalian" value="<?php echo $data['tglpengembalian'];?>" style="width: 120px;"></td>
		<td><button type="submit" name="btn-edtTSLPT" onclick="return confirm('Apakah Anda Yakin Akan Mengedit Data Tersebut ?')">Edit</button>
		<button><a href="transaksiLPT.php">Kembali</a></button></td>
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
