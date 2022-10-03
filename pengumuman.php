<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah E-Pengumuman</title>
  <style>
    body{
      margin: 0px;
    }
    img{
       width: 50%;
    }
    .header>img{
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
    <h1 align="center">Input Pengumuman</h1>
    <h4 align="right"><a href="logout.php"> Logout</a></h4> <br><br>
  </div>
  

  <br>
  <form method="post" enctype="multipart/form-data" action="tambah_pengumuman.php">
    <table border="0" width="50%">
      <tr>
       <td width="120">Judul</td>
       <td>: <input type="text" name="judul" width="100"></td>
     </tr>
     <tr>
       <td width="120">Upload Foto</td>
       <td>: <input type="file" name="gambar" ></td>
     </tr>
     <tr>
      <td width="120">Isi / Keterangan</td>
      <td>: <textarea name="isi" rows="5" cols="21"></textarea></td>
    </tr>
    <tr>
     <td width="120"></td>
     <td>&nbsp; <input type="submit" name="submit" value="Simpan Data"> <a href="index_admin.php">Back</a></td>
   </tr>
 </table>
</form>
<hr>
<br><br>

<table align="center" width="60%" cellpadding="4" cellspacing="1" bgcolor="#ccc">
  <tr>
   <th bgcolor="#eee" width="30">ID</th>
   <th bgcolor="#eee">Flyer</th>
   <th bgcolor="#eee" width="200">Judul</th>
   <th bgcolor="#eee" width="200">Isi</th>
   <th bgcolor="#eee" width="50">Ket</th>
 </tr>

 <?php
 $sql = "SELECT * FROM pengumuman";
 $query = mysqli_query($koneksi,$sql);
 $total = mysqli_num_rows($query);

 while ($data=mysqli_fetch_array($query))
 {
   echo "<tr>
   <td bgcolor='#fff'>$data[id]</td>
   <td bgcolor='#fff'><img src='img/".$data['foto']."' width='50%'></td>
   <td bgcolor='#fff'>$data[judul]</td>
   <td bgcolor='#fff'>$data[isi]</td>
   <td bgcolor='#fff'>
   <a href='hapus_pengumuman.php?id=$data[id]'>Hapus</a>
   </td>  
   </tr>";
 }
 ?>
 <tr>
   <td colspan="8" bgcolor="#999" style="color: #fff;" >
    Total : <?php echo "$total Data";?>
  </td>
</tr>
</table>
</body>
</html>


