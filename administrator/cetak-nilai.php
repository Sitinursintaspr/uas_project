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
  $siswa_yangmengerjakan2 = mysql_query("SELECT * FROM siswa_sudah_mengerjakan WHERE id_tq = '$_GET[id]'");
  echo "<table border='1' width=100%>
        <tr bgcolor=#c3c3c3>
          <th>NO</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>kelas </th>
          <th>Nilai</th>
        </tr>";

        $no = 1;
        while ($t=mysql_fetch_array($siswa_yangmengerjakan2)){
            $siswa = mysql_query("SELECT * FROM siswa WHERE id_siswa = '$t[id_siswa]'");
            $s = mysql_fetch_array($siswa);
            $kelas = mysql_query("SELECT * FROM kelas WHERE id_kelas = '$s[id_kelas]'");
            $k = mysql_fetch_array($kelas);
            $nilai = mysql_query("SELECT * FROM nilai_soal_esay WHERE id_tq='$_GET[id]' AND id_siswa ='$t[id_siswa]'");
            $n = mysql_fetch_array($nilai);
            $nilai2 = mysql_query("SELECT * FROM nilai WHERE id_tq='$_GET[id]' AND id_siswa = '$t[id_siswa]'");
            $n2 = mysql_fetch_array($nilai2);

          echo "<tr>
                <td> $no</td>
                <td> $s[nis]</td>
                <td><a href=?module=siswa&act=detailsiswa&id=$s[id_siswa] title='Detail siswa'>$s[nama_lengkap]</a></td>
                <td> $k[id_kelas]</td>";
                if ($t[dikoreksi]=='B'){
                          echo "<td>Nilai Tugas/Quiz Pilihan Ganda : $n2[persentase]</td>";
                          echo "
                          <td><a href=$aksi?module=quiz&act=editsiswayangtelahmengerjakan&id=$t[id]&id_siswa=$s[id_siswa]&id_tq=$_GET[id]>Hapus Siswa</a>
                          </td></tr>";
                      }else{
                          echo "<td>Nilai Tugas/Quiz Pilihan Ganda : $n2[persentase]</td>";
                          echo "
                          <td><a href=$aksi?module=quiz&act=editsiswayangtelahmengerjakan&id=$t[id]&id_siswa=$s[id_siswa]&id_tq=$_GET[id]>Hapus Siswa</a>
                          </td></tr>";
                      }
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
    <td align="center">Mengetahui <br> Wali Kelas</td>
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