<?php
require("koneksi.php");

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stock = $_POST['stok'];


$query ="UPDATE tb_stok SET kd_barang='$kode',nm_brg='$nama',harga='$harga',stock='$stock' WHERE kd_barang='$kode' ";

$hasil = mysqli_query($conn, $query);
if($hasil){
    header('location:index.php');
}else {
    echo "ubah data gagal";
}
?>