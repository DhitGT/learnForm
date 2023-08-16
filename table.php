<?php
    require 'functions.php';
    $data = query("SELECT * FROM siswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleview.css">
</head>
<body>
    <table class="viewtable">
        <tr>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        </tr>
        <?php foreach($data as $value):?>
            <tr>
                <td><?php echo $value['Nis'] ?></td>
                <td><?php echo $value['Nama'] ?></td>
                <td><?php echo $value['Kelas'] ?></td>
                <td><?php echo $value['Jurusan'] ?></td>
                <td><?php echo $value['Alamat'] ?></td>
            </tr>
        <?php endforeach;?>
    </table>

</body>
</html>