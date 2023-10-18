<?php
include 'config.php';

$query = "SELECT * FROM users";
$result = mysqli_query($koneksi, $query);


// var_dump($result);
// die;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Utama</h1>

    <a href="tambah-data.php">Tambah</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Tgl Lahir</th>
        </tr>
        <?php 
        $no=1;
        foreach($result as $data) {?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $data['nama']?></td>
            <td><?= $data['email']?></td>
            <td><?= $data['no_hp']?></td>
            <td><?= $data['tgl_lahir']?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>