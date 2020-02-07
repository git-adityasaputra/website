<?php
require("koneksi.php");
?>

<html>
<head>
<title>DATA STOCK WARUNG</title>
<link rel="stylesheet" type="text/css">
<style>
    *{

        margin: 5px;
    }
td{
    padding: 10px;
}
.header{
    background-color: #875bcf;
    color: #fff;
    height: 80px;
}
h1{
    font-size: 70px;
    margin:none;
}
a{
    text-decoration: none;
}
th,tr:nth-child(1){
    background-color: #875bcf;
    color: #fff;
}
a{
    background-color:  #875bcf;
    color: #fff;
}
a:hover{
    background-color: #de6cf6;
}
</style>
</head>
<body>
    <center>
    
    <div class="header">
    <h1>DATA STOCK BARANG WARUNG</h1>
    </div >
    <span>
    <form>
        <input type="text" name="inputan_pencarian" placeholder="masukan data barang yang dicari" >
        <input type="submit" name="cari_data" value="Cari Data">
    </form>
    </span>
    <br>
 
     <span>User</span>
     <a href="login.php">Logout</a>
    <br>
    <table border="1px">
    <tr align="center">
        <th class="warna"> KODE BARANG </th>
        <td ></td>
        <th class="warna"> NAMA BARANG </th>
        <td></td>
        <th class="warna"> HARGA </th>
        <td ></td>
        <th class="warna"> STOCK</th>
        <td></td>
    </tr>
    <?php 
    // $inputan_pencarian = $_POST['inputan_pencarian'];
    // $cari_data = $_POST['cari_data'];
    // if ($cari_data) {
    //     if ($inputan_pencarian != "") {
    //        $hasil = mysqli_query($conn, $query);
    //     } else {
    //             $hasil = mysqli_query($conn, $query);
    //     }
       
    // } else {
    //     $hasil = mysqli_query($conn, $query);
    // }

    while($data=mysqli_fetch_array($hasil)){   
        
    ?>
    <tr align="center">
     <td><?php echo $data['kd_barang'];?></td>
     <td></td>
     <td><?php echo $data['nm_brg'];?></td>
     <td></td>
     <td><?php echo $data['harga']; ?></td>
     <td></td>
     <td><?php echo $data['stock']; ?></td>
     <td></td>
    </tr>
    
<?php

}
?>
    </table>
    </center>
</body>
</html>