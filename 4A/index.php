<!-- <?php include('koneksi.php'); ?> agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include -->
<html lang="en">
<head>
 <title>CRUD Sederhana Dumbways</title>
 <style type="text/css">
      * {
        font-family: "Helvetica";
      }
      h1 {
        text-transform: uppercase;
        color: #5c5c3d;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #5c5c3d;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          display: inline-block;
    }
    </style>
</head>
<body>
 <center><h1>CRUD Sederhana Dumbways</h1></center>
 <center><a href="tambah_buku.php"> &nbsp; Tambah Buku</a></center>
 <center><a href="tambah_kategori.php"> &nbsp; Tambah Kategori</a></center>
 <table>
  <thead>
   <th>No.</th>
   <th>Buku</th>
   <th>Gambar</th>
   <th>Kategori</th>
   <th>Deskripsi</th>
   <th>Stok</th>
   <th>Aksi</th>
  </thead>
  <tbody>
   <?php
   $query = "SELECT * FROM tb_perpustakaan ORDER BY id DESC";
   $result = mysqli_query($koneksi, $query);

   if(!$result){
    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
   }
   //buat perulangan untuk element tabel dari data buku
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel data dalam bentuk array
      // kemudian dicetak dengan perulangan while
   while ($row = mysqli_fetch_assoc($result)){
    
   
   ?>
   <tr>
    <td><?php echo $no;?></td>
    <td><?php echo $row['judul'];?></td>
    <td><img src="../gambar/"><?php echo $row['gambar_buku'];?></td>
    <td><?php echo $row['category_id'];?></td>
    <td><?php echo substr ($row['deskripsi'],0,255);?>...</td>
    <td>
     <td>
              <a href="update_buku.php?id=<?php echo $row['id']; ?>">Update</a>&nbsp;
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
   </tr>
   <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
  </tbody>
 </table>
 
</body>
</html>