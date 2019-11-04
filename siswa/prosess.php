<?php
include '../database.php';
$biodata = new Biodata();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $tgllahir = $_POST['tgllahir'];
    $umur = date('y')- $tgl-lahir;
    
}
if ($aksi == "creatt") {
    $biodata->create($nis, $nama, $alamat, $agama ,$tgllahir ,$umur);
    header("location:index.php");
} elseif ($aksi == "update") {
    $biodata->update( $nis, $nama, $alamat ,$agama ,$tgllahir ,$umur);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $biodata->delete($_GET['id']);
    header("location:index.php");
}