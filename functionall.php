	<?php
//Koneksi
$dbc = mysqli_connect('localhost','root','','dbdelimamandiri');
//Data Handphone 
 if(isset($_POST['btn-tmbhHP'])){
	mysqli_query($dbc, "INSERT INTO tbbaranghp VALUES(
		'$_POST[kodebarang]',
		'$_POST[merk]',
		'$_POST[type]',
		'$_POST[sn]',
		'$_POST[imei1]',
		'$_POST[imei2]',
		'$_POST[status]',
		'$_POST[keterangan]',
		'$_POST[foto]')");
 header('location: handphone.php');
}
 

if(isset($_POST['btn-delHP'])){
mysqli_query($dbc, "DELETE FROM tbbaranghp WHERE merk='$_POST[merk]'");
header('location: handphone.php');
}


//data karyawan

if(isset($_POST['btn-tmbhKR'])){
mysqli_query($dbc, "INSERT INTO tbkaryawan VALUES(
	'$_POST[nik]',
	'$_POST[namakaryawan]',
	'$_POST[bagian]',
	'$_POST[noktp]',
	'$_POST[tempatlahir]',
	'$_POST[tgllahir]',	
	'$_POST[jeniskelamin]',
	'$_POST[statusnikah]',
	'$_POST[alamat]',
	'$_POST[nohp]',
	'$_POST[pendidikanakhir]',
	'$_POST[jurusan]',
	'$_POST[tglmulaikerja]',
	'$_POST[tglkeluar]',
	'$_POST[foto]')");
 header('location: Karyawan.php');
}

if(isset($_POST['btn-delKR'])){
mysqli_query($dbc, "DELETE FROM tbkaryawan WHERE namakaryawan='$_POST[namakaryawan]'");
header('location: Karyawan.php');
}



//data laptop

if(isset($_POST['btn-tmbhLPT'])){
mysqli_query($dbc, "INSERT INTO tblaptop VALUES(
	'$_POST[kodebarang]',
	'$_POST[merk]',
	'$_POST[type]',
	'$_POST[sn]',
	'$_POST[status]',
	'$_POST[keterangan]',
	'$_POST[foto]')");
 header('location: Laptop.php');
}


if(isset($_POST['btn-delLPT'])){
mysqli_query($dbc, "DELETE FROM tblaptop WHERE merk ='$_POST[merk]'");
header('location: Laptop.php');
}
//data transaksi hp


if(isset($_POST['btn-tmbhTSHP'])){
mysqli_query($dbc, "INSERT INTO tbtransaksihp VALUES(
	'$_POST[tglpeminjaman]',
	'$_POST[kodebarang]',
	'$_POST[merk]',
	'$_POST[type]',
	'$_POST[sn]',
	'$_POST[imei1]',	
	'$_POST[imei2]',
	'$_POST[status]',
	'$_POST[keterangan]',
	'$_POST[noid]',
	'$_POST[nama]',
	'$_POST[jabatan]',
	'$_POST[pendidikanakhir]',
	'$_POST[jeniskelamin]',
	'$_POST[ttl]',
	'$_POST[alamat]',
	'$_POST[tahunmasuk]',
	'$_POST[nohp]',
	'$_POST[tglpengembalian]')");
 header('location: transaksiHP.php');
}

if(isset($_POST['btn-delTSHP'])){
mysqli_query($dbc, "DELETE FROM tbtransaksihp WHERE merk='$_POST[merk]'");
header('location: transaksiHP.php');
}

//data transaksi laptop

if(isset($_POST['btn-tmbhTSLPT'])){
mysqli_query($dbc, "INSERT INTO tbtransaksilaptop VALUES(
	'$_POST[tglpeminjaman]',
	'$_POST[kodebarang]',
	'$_POST[merk]',
	'$_POST[type]',
	'$_POST[sn]',
	'$_POST[status]',
	'$_POST[keterangan]',
	'$_POST[noid]',
	'$_POST[nama]',
	'$_POST[jabatan]',
	'$_POST[pendidikanakhir]',
	'$_POST[jeniskelamin]',
	'$_POST[ttl]',
	'$_POST[alamat]',
	'$_POST[tahunmasuk]',
	'$_POST[nohp]',
	'$_POST[tglpengembalian]')");
 header('location: transaksiLPT.php');
}

if(isset($_POST['btn-delTSLPT'])){
mysqli_query($dbc, "DELETE FROM tbtransaksilaptop WHERE merk='$_POST[merk]'");
header('location: transaksiLPT.php');
}

//stok barang

if(isset($_POST['btn-tmbhstok'])){
mysqli_query($dbc, "INSERT INTO tbstokbarang VALUES(
	'$_POST[kodebarang]',
	'$_POST[nama]',
	'$_POST[jenis]',
	'$_POST[ukuran]',
	'$_POST[satuan]',
	'$_POST[stockawal]')");
 header('location: stokbarang.php');
}


if(isset($_POST['btn-delstok'])){
mysqli_query($dbc, "DELETE FROM tbstokbarang WHERE nama ='$_POST[nama]'");
header('location: stokbarang.php');
}

//daftar 

if(isset($_POST['btn-tmbhDFTR'])){
mysqli_query($dbc, "INSERT INTO tbuser VALUES(
	'$_POST[no]',
	'$_POST[nama]',
	'$_POST[user]',
	'$_POST[password]',
	'$_POST[confirmpassword]')");
 header('location: Register.php');
}



//edit all (masih error)

//hp

if(isset($_POST['btn-edtHP'])){
mysqli_query($dbc, "UPDATE tbbaranghp SET
merk='$_POST[merk]',
type='$_POST[type]',
sn='$_POST[sn]',
imei1='$_POST[imei1]',
imei2='$_POST[imei2]',
status='$_POST[status]', 
keterangan='$_POST[keterangan]'
 WHERE kodebarang = '$_GET[kodebarang]'");
header('location: handphone.php');

}

//laptop

if(isset($_POST['btn-edtLPT'])){
mysqli_query($dbc, "UPDATE tblaptop SET
merk='$_POST[merk]',
type='$_POST[type]',
sn='$_POST[sn]',
status='$_POST[status]', 
keterangan='$_POST[keterangan]'
 WHERE kodebarang='$_GET[kodebarang]'");
header('location: Laptop.php');
}

//karyawan

if(isset($_POST['btn-edtKR'])){
mysqli_query($dbc, "UPDATE tbkaryawan SET 
	namakaryawan='$_POST[namakaryawan]',
	bagian='$_POST[bagian]',
	noktp='$_POST[noktp]',
	tempatlahir='$_POST[tempatlahir]',
	tgllahir='$_POST[tgllahir]',	
	jeniskelamin='$_POST[jeniskelamin]',
	statusnikah='$_POST[statusnikah]',
	alamat='$_POST[alamat]',
	nohp='$_POST[nohp]',
	pendidikanakhir='$_POST[pendidikanakhir]',
	jurusan='$_POST[jurusan]',
	tglmulaikerja='$_POST[tglmulaikerja]',
	tglkeluar='$_POST[tglkeluar]',
	foto='$_POST[foto]'
 WHERE nik='$_GET[nik]'");
header('location: Karyawan.php');
}

//transaksi hp

if(isset($_POST['btn-edtTSHP'])){
mysqli_query($dbc, "UPDATE tbtransaksihp SET 
    tglpeminjaman='$_POST[tglpeminjaman]',
	merk='$_POST[merk]',
	type='$_POST[type]',
	sn='$_POST[sn]',
	imei1='$_POST[imei1]',	
	imei2='$_POST[imei2]',
	status='$_POST[status]',
	keterangan='$_POST[keterangan]',
	noid='$_POST[noid]',
	nama='$_POST[nama]',
	jabatan='$_POST[jabatan]',
	pendidikanakhir='$_POST[pendidikanakhir]',
	jeniskelamin='$_POST[jeniskelamin]',
	ttl='$_POST[ttl]',
	alamat='$_POST[alamat]',
	tahunmasuk='$_POST[tahunmasuk]',
	nohp='$_POST[nohp]',
	tglpengembalian='$_POST[tglpengembalian]'
   WHERE kodebarang='$_GET[kodebarang]'");
header('location: transaksiHP.php');
}


//transaksi laptop

if(isset($_POST['btn-edtTSLPT'])){
mysqli_query($dbc, "UPDATE tbtransaksilaptop SET 

    tglpeminjaman='$_POST[tglpeminjaman]',
	kodebarang='$_POST[kodebarang]',
	merk='$_POST[merk]',
	type='$_POST[type]',
	sn='$_POST[sn]',
	status='$_POST[status]',
	keterangan='$_POST[keterangan]',
	noid='$_POST[noid]',
	nama='$_POST[nama]',
	jabatan='$_POST[jabatan]',
	pendidikanakhir='$_POST[pendidikanakhir]',
	jeniskelamin='$_POST[jeniskelamin]',
	ttl='$_POST[ttl]',
	alamat='$_POST[alamat]',
	tahunmasuk='$_POST[tahunmasuk]',
	nohp='$_POST[nohp]',
	tglpengembalian='$_POST[tglpengembalian]'
     WHERE kodebarang='$_GET[kodebarang]'");
header('location: transaksiLPT.php');
}

//stokbarang

if(isset($_POST['btn-edtSTK'])){
mysqli_query($dbc, "UPDATE tbstokbarang SET 
nama='$_POST[nama]',
jenis='$_POST[jenis]',
ukuran='$_POST[ukuran]',
satuan='$_POST[satuan]', 
stockawal='$_POST[stockawal]'
 WHERE kodebarang='$_GET[kodebarang]'");
header('location: stokbarang.php');
}




 ?>