<html>
<head>
<title>Tambah buku</title>
<style>
h1{
    background-color: #875bcf;
    color: #fff;
}
input{
    width: 300px;
    height: 30px;
}
</style>
</head>
<body>
    <center>
        <h1>Data nya tambahin dulu ya</h1>
        <hr>
        <form action="prosestambahdata.php" method="post">
        <table>
        <tr>
        <td>KODE BARANG</td>
        <td><input type="text" name="kode" placeholder="masukan kode barang" onclick="return('data tidak boleh lebih dari 6')" maxlength="6"></td>
        </tr>
        <tr>
        <td>NAMA BARANG</td>
        <td><input type="text" name="nama" placeholder="Masukan nama barang"></td>
        </tr>
        <tr>
        <td>HARGA</td> 
        <td><input type="text" name="harga" placeholder="Masukan harga"></td>
        </tr>
        <tr>
        <td>STOCK</td>
        <td><input type="text" name="stok" placeholder="Masukan stok nya ya"></td>
        </tr>
        <tr>
        </tr>      
        <tr>
        <td></td>
        <td><input type="submit" name="tambah" value="Tambah Data"> </td>
        </tr>  
        </table>
        </form>
    </center>
</body>
</html>