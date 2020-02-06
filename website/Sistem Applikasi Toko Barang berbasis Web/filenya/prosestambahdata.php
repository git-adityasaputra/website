<?php
require("koneksi.php");

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga =$_POST['harga'];
$stock =$_POST['stok'];

$query ="INSERT INTO tb_stok(kd_barang,nm_brg,harga,stock) VALUES ('$kode','$nama','$harga',$stock)";

$hasil = mysqli_query($conn,$query); 

if ($hasil){
    header('Location:index.php');
} 
?>
