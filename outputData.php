<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output php</title>
    <link rel="stylesheet" href="styleview.css">
</head>
<body>
    <?php
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $tempat = $_POST['tempat'];
        $kelamin = $_POST['kelamin'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
    ?>
    <div class="container">
        <table>
            <tr>
                <th width="200px"></th>
                <th> </th>
                <th></th>
            </tr>
            <tr>
                <td>
                    <p>Nis</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p><?php echo $nis ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Nama</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p><?php echo $nama ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Kelamin</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p><?php echo $kelamin ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Tempat Lahir</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p><?php echo $tempat ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Kelas</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p><?php echo $kelas ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Jurusan</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p><?php echo $jurusan ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Alamat</p>
                </td>
                <td>
                    <p>:</p>
                </td>
                <td>
                    <p><?php echo $alamat ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="index.php" class="">
                        <button class="btn">BACK</button>
                    </a>
                </td>
                <td></td>
                <td></td>
            </tr>
        </table>

    </div>

</body>
</html>