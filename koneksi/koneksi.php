<?php
$koneksi = mysqli_connect("localhost","root","","pemesanan_kamera");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>
