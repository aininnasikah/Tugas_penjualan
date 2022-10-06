<?php
include("koneksi.php");

if(isset($_POPST['simpan'])){
$kode= $_POST['ID'];
$nama = $_POST['nama'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

$sql = "UPDATE barang SET nama = '$nama', stok='$stok', harga='$harga' WHERE id=$kode";
$query= mysql_query($db,$sql);

if ($query){
    header ('Location:barang.php');
}else{
    die ("gagal mengedit");
}}
else{
    die b("akses dilarang");
}
?>