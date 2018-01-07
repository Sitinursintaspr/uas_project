<?php
// Bagian Home
if ($_GET['module']=='home'){
  if ($_SESSION['leveluser']=='siswa'){
  echo "<br>
        <p align='right'><b class='judul'>$hari_ini, 
        <span id='date'></span>, <span id='clock'></span></b></p>
        <p class='garisbawah'></p>
        <h1><center>Welcome to <b>E-Learning MTS Tarbiyatul Falah</b><br></center></h1><br>
        <p align='justify'>  Salah satu masalah utama pada sistem pendidikan di Indonesia adalah masalah kualitas.Masalah ini berhubungan dengan penyediaan materi dan bahan belajar yang dapat diakses secara luas tanpa dibatasi oleh kendala jarak dan waktu. Apabila kendala ini dapat diatasi maka misi untuk menerapkan pendidikan sepanjang haya tpada segenap lapisan masyarakat dapat diwujudkan.Dalam mewujudkan hal ini dibutuhkan perubahan pada paradigma proses belajar mengajar yang telah diterapkan selama ini.
        </p>

        <p align='justify'> Selain itu masalah yang dihadapi juga meliputi tidak adanya fasilitas pengaturan materi pembelajaran secara online, tidak adanya pelaksanaan kuis dan ujian bagi murid yang berhalangan hadir datang ke sekolah, tidak adanya fasilitas untuk mengetahui nilai hasil ujian yang telah diikuti oleh murid secara cepat dan tidak adanya pemberitahuan informasi penting lainnya.</p>
        <p align='justify'>Oleh karena itu disediakan aplikasi web E-learning ini agar mempermudah siswa maupun guru dalam proses ajar mengajar. dan siswa juga dapat mendapatkan materi pembelajaran dengan mudah dan efektif.</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
  <p class='garisbawah'></p>";
  }
}
// Bagian kelas
elseif ($_GET['module']=='kelas'){
  if ($_SESSION['leveluser']=='siswa'){
      include "administrator/modul/mod_kelas/kelas.php";
  }
}

// Bagian siswa
elseif ($_GET['module']=='siswa'){
  if ($_SESSION['leveluser']=='siswa'){
      include "administrator/modul/mod_siswa/siswa.php";
  }
}

// Bagian admin
elseif ($_GET['module']=='admin'){
  if ($_SESSION['leveluser']=='siswa'){
      include "administrator/modul/mod_admin/admin.php";
  }
}

// Bagian mapel
elseif ($_GET['module']=='matapelajaran'){
  if ($_SESSION['leveluser']=='siswa'){
      include "administrator/modul/mod_matapelajaran/matapelajaran.php";
  }
}

// Bagian materi
elseif ($_GET['module']=='materi'){
  if ($_SESSION['leveluser']=='siswa'){
      include "administrator/modul/mod_materi/materi.php";
  }
}

// Bagian materi
elseif ($_GET['module']=='quiz'){
  if ($_SESSION['leveluser']=='siswa'){
      include "administrator/modul/mod_quiz/quiz.php";
  }
}

// Bagian materi
elseif ($_GET['module']=='kerjakan_quiz'){
  if ($_SESSION['leveluser']=='siswa'){
      include "administrator/modul/mod_quiz/soal.php";
  }
}

// Bagian materi
elseif ($_GET['module']=='nilai'){
  if ($_SESSION['leveluser']=='siswa'){
      include "daftarnilai.php";
  }
}
?>
