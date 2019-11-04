<?php 
include '../database.php';
$siswa = new biodata();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>
<body>
    <?php 
        foreach($biodata->edit($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nis = $data['nis'];
            $nama = $data['nama'];
            $jeniskelin = $data['jeniskelamin'];
            $alamat = $data['alamat'];
            $agama = $data['agama'];
            $tgl_lahir = $data['tgl_lahir'];
            $umur = $data['umur'];
        }
    ?>
    <fieldset>
        <legend>Edit Data Siswa</legend>
        <form action="prosess.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nomor Induk Siswa</th>
                    <td><input type="number" name="nis" value="<?php echo $nis; ?>"required></td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama siswa" value="<?php echo $namasiswa; ?>" required></td>
                </tr>
                <tr>
                    <th>jenis kelamin</th>
                    <td><textarea name="jeniskelamin" cols="40" required><?php echo $jenikelamin; ?></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
                    <th>alamat</th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
                <tr> 
                    <th>agama/th>
                    <td><textarea name="agama" cols="40" required><?php echo $agama; ?></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
                <tr> 
                    <th>tanggal lahir</th>
                    <td><textarea name="tgllahir" cols="40" required><?php echo $tgllahir; ?></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                    </tr>
                <tr> 
                    <th>umur/th>
                    <td><textarea name="umur" cols="40" required><?php echo $umur; ?></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
            </table>
        </form>
    </fieldset>
</body>
</html>