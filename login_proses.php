<?php 
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

//cek data
$sql = "SELECT * FROM user WHERE username='$username' ";
$qry = mysqli_query($koneksi,$sql);
$usr = mysqli_fetch_array($qry);

if( 
	($username) == ($usr['username'])
	AND
	($password) == ($usr['password'])
)
{
	$_SESSION['id']  = $usr['id'];
	$_SESSION['username'] = $usr['username'];
	$_SESSION['password'] = $usr['password'];
	$_SESSION['login'] = 1;
	$pesan = "Login berhasil, selamat datang $username";
} else {
	$pesan = "Login gagal, username atau password anda salah!";
}

?>
<script>
	alert('<?php echo $pesan;?>');
	location='index_admin.php';
</script>
