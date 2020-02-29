<?php
// [HERE] isi variabel sesuai input
$nama = $_GET['name'];
$pwd = $_GET['password'];
// [HERE] Lakukan pengecekan.
if(strlen($nama)<3){
    header('Location: http://localhost/tp5_jurnal/3/index.php');
}
// jika name kurang dari 3 karakter, redirect user ke halaman sebelumnya

// [HERE] panggil template include_once() dari template/result.php
include_once('template/result.php');
?>