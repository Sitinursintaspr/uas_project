<?php
include "configurasi/koneksi.php";
 
echo "<a href='media.php?module=siswa&act=detailprofilsiswa&id=$_SESSION[idsiswa]'><b>Data Profil</b></a>";
echo "<a href='media.php?module=siswa&act=detailaccount'><b>Ganti Username & Password</b></a>";
?>
