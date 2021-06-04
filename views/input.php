<?php
    include '../models/database.php';
    $db = new database();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: #eee;
        }
        .btn{
            margin-bottom: 10px;
        }
        .main{
            background-color: #fff;
            margin: 50px;
            padding: 50px;
        }
    </style>
</head>
<body>
<div class="main">
<form action="../controllers/process.php?action=tambah" method="POST">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat"></textarea>
  </div>
  <div class="form-group">
    <label>Usia</label>
    <input type="number" class="form-control" name="usia">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</body>
</html>