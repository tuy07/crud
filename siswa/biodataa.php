<?php
class  biodata extends Database
{
    //menampilkan semua data
    public function index()
    {
         $biodata = mysqli_query($this->koneksi, "select * from biodata");
        //  var_dump($datadiri);
         return $biodata;
    }

    // menambahkan data
    public function create($nis, $nama, $alamat, $jenkel, $agama, $tgl_lahir ,$umur)
    {
        mysqli_query($this->koneksi,
          "insert into biodata values
          (null,'$nis','$nama','$jenkel','$alamat','$agama','$tgl_lahir','$umur)")
    }
    // menampilkan data berdasarkan id
    public function show($id)
    {

        $biodata = mysqli_query($this->koneksi, "select *from biodata where id='$id'");
          return $biodata;
    }

    // menampilkan data berdasarkan id
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi,
          "select * from biodata where id='$id'");
          return $biodata;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nis, $nama, $alamat, $agama, $tgllahir, $umur) 
    {
        mysqli_query($this->koneksi,
          "update siswa set nis='$nis',nama='$nama',
          alamat='$alamat' where id ='$id'");
    }

    //menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from biodata where id='$id'");
    }
}
?>