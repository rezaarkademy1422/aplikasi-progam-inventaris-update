<?php 
require_once 'Koneksi.php';

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Transaski Laptop</title>
 
</head>
<body>
	<div class="back">
		<a href="home.php"><li ><img src="img/home.png" style="width: 50px; height: 35px;"></li></a>
	</div>



	<div class="lol">
 <form method="post" enctype="multipart/form-data">

<div class="tLol">
<h2 style="float: right;"> Data Transaksi Laptop</h2>
<img src="img/tslpt.png" style="width: 70px; height: 70px;">
<hr>
<div class="satu">
 Tanggal Peminjaman :
 <br><input type="date" name="tglpeminjaman" placeholder="..." ><br>
 Kode Barang :
 <br><input type="text" name="kodebarang" placeholder="..."><br>
 Merk :
 <br><input type="text" name="merk" placeholder="..." ><br>
 Type :
 <br><input type="text" name="type" placeholder="..." ><br>
 Serial Number :
 <br><input type="text" name="sn" placeholder="..." ><br>
 Status :
 <br><input type="text" name="status" placeholder="..."><br>
 Keterangan :
 <br><input type="text" name="keterangan" placeholder="..."><br>
 
</div>

 <div class="dua">
 NIK :
 <br><input type="text" name="noid" placeholder="..."><br>
 Nama :
 <br><input type="text" name="nama" placeholder="..."><br>
 Jabatan :
 <br><input type="text" name="jabatan" placeholder="..."><br>
  Pendidikan Akhir:
 <br><input type="text" name="pendidikanakhir" placeholder="..."><br>
  Jenis Kelamin:
 <br><input type="text" name="jeniskelamin" placeholder="..."><br>
 Tempat Tanggal Lahir :
 <br><input type="text" name="ttl" placeholder="..."><br>
 
 </div>
 
<div class="tiga">
 

 Tahun Masuk :
 <br><input type="text" name="tahunmasuk" placeholder="..."><br>
 Nomor Handphone :
 <br><input type="text" name="nohp" placeholder="..."><br>
 Tanggal Pengembalian :
 <br><input type="date" name="tglpengembalian" placeholder="..."><br>
  
</div>


<br>
</div>
<br>


<div class="khusus">

<button type="submit" name="btn-tmbhTSLPT" onclick="berhasil()">Tambah</button>
<button ><a href="outputdataTSLPT.php" style="color: black; text-decoration: none;">Lihat Semua Data Transaksi</a></button>
</div>
<script type="text/javascript">
	function berhasil(){
			var $a = confirm("Data Berhasil Ditambahkan");
		
	
	}
</script>


 </form>
<br>
</div>

</body>
</html>

<div class="search">
<form  method="post">
	
		<input type="text" name="nt" placeholder="Cari kodebarang disini..">
		<button type="submit" name="cari2" value="cari"  class="btn">Cari</button>
<h3 style="margin: 10px;"><b>Hasil Pencarian :</b></h3>
</form>
</div>

<?php
	require_once 'functionall.php';
  if(isset($_POST['cari2'])) {
		$cari = $_POST['nt'];
		$sqli = mysqli_query($db,"SELECT * FROM tbtransaksilaptop WHERE kodebarang LIKE '%$cari%'");
		while($data = mysqli_fetch_array($sqli)){
?>

<div class="bloon2">

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
	
	<td style="text-align: left; border:transparent;"><button type="submit" name="btn-delTSHP"onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Tersebut ?')">Hapus</button>
		<button><a name="btn-edtTSLPT" href="editTSLPT.php?kodebarang=<?php echo $data['kodebarang']?>">Edit</a></button></td>
</tr>



</table>



</form>

<?php }
	
	} ?>

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
	.lol{
		width: 53%;
		height: auto;
		background-color: rgba(0,0,0,0.5);
		font-size: 15px;
		border:1px solid;
		border-radius: 10px;
		position: absolute;
	}
	.lol img{
		margin: 10px;
	}
	.lol input{
		font-size: 15px;
		color:white;
		border:1px solid;
		border-radius: 3px;
		background-color: transparent;
		margin: 10px;
	}
	.khusus{
		float: left;
		margin: 10px;
	}
	.khusus button{
		padding: 10px;
		margin: 15px;
		background-color: white;
		color: black;
		border: 1px solid;
		border-radius: 3px;
		box-shadow: 1px 1px;
		width: 250px;
	}

	.satu{
		float: left;
	}
	.dua{
		float: left;
	}

	.tLol{
		margin:15px;
	}
::placeholder{
	color:white;
}
.bloon2{
	float: right;
	border-radius: 5px;
	height: 400px;
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

	
.bloon2 button{
	width: 60px;
	height: 30px;
	margin: 7px;
	border:1px solid white;
	border-radius: 5px;
	background-color: black;
	color:white;
	cursor: pointer;


}
.bloon2 input{
	border:none;
	background-color: transparent;
	color:white;
	font-size: 13px;
	font-family: Comic Sans MS;
	margin: 10px;
}


.bloon{
	background-color: rgba(0,0,0, 0.5);
	margin: 10px;
	border-radius: 5px;

	}
.bloon button{
	margin: 7px;
	border:1px solid white;
	border-radius: 5px;
	background-color: black;
	color:white;
	cursor: pointer;


}
.bloon input{
	border:none;
	background-color: transparent;
	color:white;
	font-size: 13px;
	font-family: Comic Sans MS;
	margin: 10px;
}
table{
	background-color: rgba(0,0,0,0.5);
}

.back li{
	list-style: none ;
	text-align: center;
	border: 1px solid ;
	border-radius: 5px;
	width: 50px;
	height: 40px;
	color: black;
	background-color:white;
	float: right;
	transition: 0.5s;
	transform: translate(0px);
	margin: 30px;
	}

.back a{
	text-decoration: none;
	color: white;
}

.search{
	background-color: rgba(0,0,0, 0.5);
	border:1px solid white;
	border-radius: 3px;
	width: 585px;
	height: auto;
	margin-left: 745px;

}
.search input{
	width: 250px;
	height: 30px;
	border:3px solid white;
	background-color: transparent;
	color:white;
	font-size: 20px;
	margin:10px;
	
}
.search button{
	width: 70px;
	height: 32px;
	background-color: white;
	
}
.search ::placeholder{
	color:white;
	font-size: 15px;
}
.tambah{
	background-color: white;
}
a{
	text-decoration: none;
	color: white;
}


</style>










