<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 align="center">FORM HTML</h1>
        <br>
        <br>

        <form action="outputData.php" method="post">
            <table>
                <tr>
                    <th width="30px"></th>
                    <th width="3px"></th>
                    <th width="200px"></th>
                </tr>
                <tr>
                    <td>
                        <label for="nis">Nis</label>   
                    </td>
                    <td><p>:</p></td>
                    <td>
                        <input type="text" name="nis">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Nama">Nama</label>   
                    </td>
                    <td><p>:</p></td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tempat">Tempat Tanggal Lahir</label>   
                    </td>
                    <td><p>:</p></td>
                    <td>
                        <input type="text" name="tempat">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="kelamin">Jenis Kelamin</label>   
                    </td>
                    <td><p>:</p></td>
                    <td>
                        <div class="radios">
                            <input type="radio" id="option1" name="kelamin" value="Laki-Laki">
                            <label for="option1" class="lb">Laki-Laki</label>
                            <input type="radio" id="option2" name="kelamin" value="Perempuan">
                            <label for="option2" class="lb">Perempuan</label>
                        </div>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="kelas">Kelas</label>   
                    </td>
                    <td><p>:</p></td>
                    <td>
                        <input type="text" name="kelas">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jurusan">Jurusan</label> 
                        
                    </td>
                    <td><p>:</p></td>
                    <td>
                        <select id="dropdown" name="jurusan" class="dropdown">
                            <option  class="dropdown" value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option  class="dropdown" value="Akuntansi">Akuntansi</option>
                            <option  class="dropdown" value="Teknik komputer dan jaringan">Teknik komputer dan jaringan</option>
                            <option  class="dropdown" value="Teknik bisnis dan sepeda motor">Teknik bisnis dan sepeda motor</option>
                            <option  class="dropdown" value="Teknik energi terbarukan">Teknik energi terbarukan</option>
                            <option  class="dropdown" value="Teknik elektronika industri">Teknik elektronika industri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat">Alamat</label>   
                    </td>
                    <td><p>:</p></td>
                    <td>
                        <textarea name="alamat" id="" cols="21" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>

                    </td>
                    <td>
                        <button class="btnsubmit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <br><br><br><br>
</body>
</html>