<?php
require("koneksi.php");

$id=$_GET['id'];
$query = "DELETE FROM tb_stok WHERE kd_barang=$id";


$hasil = mysqli_query($conn, $query);
if($hasil){
    header('location:index.php');
}else {
    echo "data gagal";
}
?>
