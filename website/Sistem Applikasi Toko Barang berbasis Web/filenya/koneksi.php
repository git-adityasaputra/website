<?php

$conn = mysqli_connect('Localhost','root','','db_barang');
$query="SELECT * FROM tb_stok";
$hasil = mysqli_query($conn, $query);
if (!$conn){
    echo "Koneksi gagal";
    die();
}

?>