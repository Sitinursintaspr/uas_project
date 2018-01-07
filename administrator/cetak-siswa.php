<body onload="window.print()">
<?php
error_reporting(0);
session_start();
include "../configurasi/koneksi.php"; 
?>
<table class="basic"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><strong><p style='margin-bottom:1px'>MTS TARBIYATUL FALAH </p></strong></td>
  </tr>
  <tr>
    <td align="center"><p>Jln. Angkasa Puri II <br> Telp. (0751) 76458, Kode Pos. 26451</p></td>
  </tr>   
</table>
<br><br>
<?php	
	echo "<h3><center>Data Siswa</center></h3>";
echo "<table border='1' width=100%>
        <tr bgcolor=#c3c3c3>
          <th>NO</th>
          <th>Nis</th>
          <th>Nama Lengkap</th>
          <th>Kelas</th>
          <th>Alamat</th>
          <th>Agama</th>
          <th>Nomor Telepon</th>
          <th>Nama Ayah</th>
        </tr>";
        
        $siswa = mysql_query("SELECT * FROM siswa") or die(mysql_error());
        $no = 1;
        while ($r = mysql_fetch_array($siswa)){
          echo "<tr>
                <td> $no</td>
                <td> $r[nis]</td>
                <td> $r[nama_lengkap]</td>
                <td> $r[id_kelas]</td>
                <td> $r[alamat]</td>
                <td> $r[agama]</td>
                <td> $r[no_telp]</td>
                <td> $r[nama_ayah]</td>
              </tr>";
      
          $no++;
        }
      echo "</table><br/>";
?>

<table width=100%>
  <tr>
    <td colspan="2"></td>
    <td width="286"></td>
  </tr>
  <tr>
    <td width="230" align="center">Mengetahui <br> Kepala Sekolah</td>
    <td width="530"></td>
    <td align="center">Mengetahui <br> Ketua Kesiswaan</td>
  </tr>
  <tr>
    <td align="center"><br /><br /><br /><br /><br />
      ( ...................................... )<br />
    NIP : ................................<br /><br /></td>
    <td>&nbsp;</td>
    <td align="center" valign="top"><br /><br /><br /><br /><br />
      ( ...................................... )<br />
	NIP : ................................
    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table> 
</body>