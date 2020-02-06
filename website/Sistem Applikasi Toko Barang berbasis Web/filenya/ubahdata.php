<?php
require("koneksi.php"); 
$id = $_GET['id'];

$query="SELECT * FROM tb_stok WHERE kd_barang=".$id;
$hasil=mysqli_query($conn, $query);

?>
<html>
<head>
<title>Ubah Data</title>
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
<style>
h1{
        background-color: #875bcf;
        color: #fff;
        width: 980px;
        height: 30px;
        padding: 10px;

}
input{
        width: 500px;
        height: 50px;
        border-radius: 10px;
        border-color: none;
}
td{
        margin: 30px;
        color: #875bcf;
        border-color: #875bcf;
input{
        margin:30px;
}

</style>
</head>
<body>      
        <center>
        <h1>Ubah Data Stok warung</h1>
        <form action="proseseditdata.php" method="post">
        <?php while($data=mysqli_fetch_array($hasil)){ ?>
        <table>
        <tr>
        <td> KODE BARANG</td>
        <td><input type="text" name="kode" value="<?php $data['kd_barang'] ?>"></td>
        </tr>
        <tr>
        <td> NAMA BARANG</td>
        <td><input type="text" name="nama" value="<?php $data['nm_brg'] ?>"></td>
        </tr>
        <tr>
        <td>HARGA</td> 
        <td><input type="text" name="harga" value="<?php $data['harga'] ?>"></td>
        </tr>
        <tr>
        <td>STOCK</td>
        <td><input type="text" name="stok" value="<?php $data['stock'] ?>"></td>
        </tr>
        <tr>
        </tr>      
        <tr>
        <td><input type="hidden" name="kode" value="<?php echo $data['kd_barang'] ?>"></td>
        <td><input type="submit" name="ubah" value="Ubah data" style="width: 20%;"> </td>
        </tr>  
        </table>
        <?php } ?>
        </form>
        </center>
</body>
</html>