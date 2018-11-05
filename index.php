<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="../Pertemuan_11_Bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="../Pertemuan_11_Bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="../Pertemuan_11_Bootstrap/js/bootstrap.js"></script>

    <style>
        body{
            background-image:url("../Pertemuan_11_Bootstrap/bcg.jpg");
        }
        table{
            color:gold;
        }
        legend{
            color:white;
        }
        a{
            color:gold;
        }
    </style>
    
</head>
<body>

    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <a class="navbar-brand" href="index.php">Data Mahasiswa</a>
        <a class="navbar-brand" href="tambah.php">tambah.php</a>
        <a class="navbar-brand" href="tambah_data.php">tambah_data.php</a>
    </nav>

    <center>
       <legend>
            <h1>Data Mahasiswa Polinema</h1>
        </legend>
    <center>
    

    <legend>
        <a href="tambah_data.php">Tambah Data Mahasiswa</a>
    </legend>

    <br>
    
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1 ?>
        <?php foreach($mahasiswa as $row):?>
            <tr>
                <td><?=$i;?></td>
                <td><?=$row["Nama"]; ?></td>
                <td><?=$row["Nim"]; ?></td>
                <td><?=$row["Email"]; ?></td>
                <td><?= $row["Jurusan"];?></td>
                <td><img src="<?php echo $row["Gambar"]; ?>" alt="" width="100" height="100"></td>
                <td>
                    <a href = "">Edit</a>
                    <a href = "hapus.php?id=<?php echo $row["id"]; ?>"onclick="return confirm
                    ('Apakah Data Ini Ingin Dihapus')">Hapus</a>
                </td>
            </tr>    
        <?php $i++ ?>
        <?php endforeach;?>
        </tbody>
    </table>
    
</body>
</html>