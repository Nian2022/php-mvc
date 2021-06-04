<?php
    include '../models/database.php';
    $db = new database();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data User</title>
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
<a class="btn btn-primary" href="input.php">Tambah</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Usia</th>
      <th scope="col">Email</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
<?php
  $no=1;
  foreach($db->tampil_data() as $x){
  ?>
    <tr>
      <th scope="row"><?= $no++;?></th>
      <td><?= $x['nama'];?></td>
      <td><?= $x['usia'];?></td>
      <td><?= $x['email'];?></td>
      <td><a href="edit.php?id=<?= $x['id'];?>">Edit</a> | <a href="../controllers/process.php?action=delete&id=<?= $x['id'];?>">Hapus</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>