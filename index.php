<?php
include 'koneksidb.php';
 
$conn = OpenCon();
 
echo "Koneksi Berhasil !";
 
CloseCon($conn);
 
?>
