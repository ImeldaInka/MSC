<?php 
// koneksi database
include '../../db/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_rs where id_rs='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:RSView.php");
 
?>
