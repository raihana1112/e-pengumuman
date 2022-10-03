<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Peserta</title>
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
    <h1 align="center">E-Pengumuman</h1>
    <h4 align="right"><a href="logout.php"> Logout</a></h4> <br><br>
  </div>

  <br>
  
<h2 align="center">Daftar Peserta</h2>

<table align="center" width="80%" cellpadding="4" cellspacing="1" bgcolor="#ccc">
  <tr>
   <th bgcolor="#eee" width="50">Nim</th>
   <th bgcolor="#eee" width="100">Nama</th>
   <th bgcolor="#eee" width="100">No Hp</th>
   <th bgcolor="#eee" width="100">Email</th>
   <th bgcolor="#eee" width="100">Alamat</th>
 </tr>

 <?php
 $sql = "SELECT * FROM pendaftaran";
 $query = mysqli_query($koneksi,$sql);
 $total = mysqli_num_rows($query);

 while ($data=mysqli_fetch_array($query))
 {
   echo "<tr>
   <td bgcolor='#fff'>$data[nim]</td>
   <td bgcolor='#fff'>$data[nama]</td>
   <td bgcolor='#fff'>$data[no_hp]</td>
   <td bgcolor='#fff'>$data[email]</td>
   <td bgcolor='#fff'>$data[alamat]</td>
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


