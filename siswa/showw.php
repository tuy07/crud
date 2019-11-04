
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>
<body>
<?php 
include '../database.php';
$biodata = new Biodata();
?>
    <?php 
        foreach($siswa->show($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nis = $data['nis'];
            $nama = $data['nama'];
            $jenkel = $data['jenkel'];
            $alamat = $data['alamat'];
            $agama = $data['agama'];
            $tgllahir= $data['tgllahir'];
            $umur = $data['umur'];
        }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <form action="prosess.php?aksi=tambah" method="post"> 
        <input type="hidden" name="id"value="<?php echo $id;?>">
        <table>
        <tr> 
                <th>Nama</th>
                <td><input type="text" name="nama siswa" value="<?php echo $namasiswa; ?>" readonly></td>
            </tr>
            <tr>
                <th>alamat</th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
               <th>jenkel</th>
                <td><input type ="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin;?>" cheked readonly>laki-laki
                <input type ="radio" name="jenis_kelamin" value"<?php echo $jenis   _kelamin;?>"readonly>perempuan<br></td>
            <tr>
                 <th>agama</th>
                 <td><select name="agama"> 
                 <option value="islam"></option>
                 <option value="kristen"></option>
                 <option value="hindu"></option>
                 <option value="atheis"</option>
                 <option value="islam"></option>
                 </select><br></td>
            </tr>
            <tr>
                <th>tanggal lahir</th>
                <td><textarea name="date" name="tgl_lahir" value="<?php echo $tgllahir; ?>" readonly></td>
           </tr>
            <tr>
                <th>umur</th>
                <td><textarea name="number" name="umur" value="<?php echo $umur; ?>" readonly></td>
            </tr>
            </tr>
                 <input type="submit" name="save" value="simpan"></th>
        </table>
    </fieldset>
</body>
</html>