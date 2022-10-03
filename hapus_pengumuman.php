<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM pengumuman WHERE id=$id");
$pesan = "Data berhasil terhapus";

?>
<script>
 alert('<?php echo $pesan;?>');
 location='pengumuman.php';
</script>
?>