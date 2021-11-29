<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Buku</title>
    <style type="text/css">
      * {
        font-family: "Helvetica";
      }
      h1 {
        text-transform: uppercase;
        color: #5c5c3d;
      }
    button {
          background-color: #5c5c3d;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: #5c5c3d;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Buku</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Buku</label>
          <input type="text" name="judul" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" />
        </div>
        <div>
          <label>Kategori</label>
         <input type="text" name="category_id" required="" />
        </div>
        <div>
          <label>Stok</label>
         <input type="number" name="stok" required="" />
        </div>
        <div>
          <label>Gambar Buku</label>
         <input type="file" name="gambar_buku" required="" />
        </div>
        <div>
         <button type="submit">Simpan Buku</button>
        </div>
        </section>
      </form>
  </body>
</html>