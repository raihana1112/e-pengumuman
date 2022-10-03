<?php
session_start();
$login = $_SESSION['login'];
if($login == 1)
{
	include "koneksi.php";
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>E-Pengumuman</title>
		<style>
		body{
			margin: 0
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
		h2>a, button>a{
			color: black;
		}
		.header{
			 background-color: #6186c2;
			 padding-bottom: 30px;

		}
		.card>img{
			width: 15%;
			height: 270px;
			margin-top: -5px
		}
	</style>
	</head>



	<body>
		<div class="header">
			<img src="uin.png">
			<h3>Teknologi Informasi <br> Fakultas Sains dan Teknologi <br> UIN Ar-Raniry</h3>
			<h1 align="center">E-Pengumuman</h1>
			<h4 align="right"><a href="logout.php"> Logout</a></h4> <br><br>
		</div>
		<br>
		<div class="content">
			<h2><a href="pengumuman.php">Tambah E-Pengumuman</a></h2> <br>
			<div class="card">
				<?php
				$sql = "SELECT * FROM pengumuman";
				$query = mysqli_query($koneksi,$sql);
				$total = mysqli_num_rows($query);

				while ($data=mysqli_fetch_array($query))
				{
					echo "
					<h2><b>$data[judul]</b></h2>
					<img src='img/".$data['foto']."'>
					<p>$data[isi]</p>
					<button><a href='peserta.php'>Lihat Peserta</a></button>";
				}
				?>
				
			</div>
		</div>





	</body>
	</html>
	<?php
}
else {
	include "login.php";
} 
?>
