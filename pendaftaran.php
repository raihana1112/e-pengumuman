<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran E-Pengumuman</title>
	<style>
		body{
			margin: 0px;
		}
		img{
			width: 6%;
			height: 100px;
			margin-top: 15px
		}
		h1{
			margin-top: -65px;
			color: white;
		}
		h3{
			margin-top: -80px;
			margin-left: 100px;
			color: white;
		}
		h4{
			margin-top: -80px;
			margin-right: 50px;

		}
		h4>a{
			color: white;
		}
		.header{
			 background-color: #6186c2;
			 padding-bottom: 30px;

		}
	</style>
</head>
<body>
	<div class="header">
		<img src="uin.png">
		<h3>Teknologi Informasi <br> Fakultas Sains dan Teknologi <br> UIN Ar-Raniry</h3>
		<h1 align="center">Registrasi Peserta</h1>
	</div>
	<br>


	<form method="post" action="">
		<table border="0" width="50%">
			<tr>
				<td width="120">Nim</td>
				<td>: <input type="text" name="nim" ></td>
			</tr>
			<tr>
				<td width="120">Nama</td>
				<td>: <input type="text" name="nama" ></td>
			</tr>
			<tr>
				<td width="120">No Hp</td>
				<td>: <input type="text" name="no_hp" ></td>
			</tr>
			<tr>
				<td width="120">Email</td>
				<td>: <input type="text" name="email" ></td>
			</tr>
			<tr>
				<td width="120">Alamat</td>
				<td>: <textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td width="120"></td>
				<td>&nbsp; <input type="submit" name="submit" value="Simpan Data"> <a href="index.php">Back</a></td>
			</tr>
		</table>
	</form>

</body>
</html>




<?php
 if(isset($_POST['submit'])) {
	include 'koneksi.php';
	$nim  = $_POST['nim'];
	$nama  = $_POST['nama'];
	$no_hp  = $_POST['no_hp'];
	$email  = $_POST['email'];
	$alamat  = $_POST['alamat'];


$sql = "INSERT INTO pendaftaran VALUES ('$nim', '$nama', '$no_hp', '$email', '$alamat')";

if ( mysqli_query ($koneksi, $sql) ) {
  echo "Anda berhasil mendaftar";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);


}
?>
	


