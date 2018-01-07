<!DOCTYPE HTML>
<html lang="en">
<head>
<title>E-learning Mts Tarbiyatul Falah</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style2.css">
<!--[if lte IE 8]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Delicious_500.font.js"></script>
<script language="javascript">
function validasi(form){
  if (form.username.value == ""){
      document.getElementById('eroruser').innerHTML = "<div class='error msg'>Username is empty, click to close</div>";
      form.username.focus();
      $(function() {
	Cufon.replace('#site-title');
	$('.msg').click(function() {
		$(this).fadeTo('slow', 0);
		$(this).slideUp(341);
	});
      });
    return (false);
  }

  if (form.password.value == ""){
    document.getElementById('erorpass').innerHTML = "<div class='error msg'>Password is empty, click to close</div>";
    form.password.focus();
    $(function() {
	Cufon.replace('#site-title');
	$('.msg').click(function() {
		$(this).fadeTo('slow', 0);
		$(this).slideUp(341);
	});
    });
    return (false);
  }
  return (true);
}
</script>

</head>
<body>

<header id="top">
	<div class="container_12 clearfix">
		<div id="logo" class="grid_12">
			<!-- replace with your website title or logo -->
			<a id="site-title"><span>MTS TARBIYATUL FALAH</span></a>
			<a id="view-site" href="../index.php"><img src='images/icons/user-silhouette.png'>Login Siswa</a>
		</div>
	</div>
	<img class='header' height= '170px' width='100%' src='images/lh.jpg'>
</header>

<div class="content">
	<article>
		<h2><center>SELAMAT DATANG DI E-LEARNING MTS TARBIYATUL FALAH</center></h2>
		<img src="images/depan.jpg">
		<p align='justify'>
		Pada awal berdirinya bernama MTs Tarbiyatul Falah yang diprakarsai oleh Bapak Durrahman dan Bapak Sanim. Diresmikan dengan surat keputusan Menteri P.P.K. tanggal 3 Juli 1997 No. 2777/B. Sampai saat ini MTs Tarbiyatul Falah sudah 15 Kali berganti kepemimpinan.
		</p>
		<p align='justify'>
        1. Kegiatan Proses Belajar Mengajar

        Kegiatan proses belajar mengajar di mulai dari jam 07.15 WIB sampai selesai jika ada yang terlambat maka akan melapor ke piket dan siswa akan membawa surat izin masuk kedalam kelas. Siswa MTS Tarbiyatul Falah dalam proses belajar mengajar itu sangat baik. Sekolah Mts Tarbiyatul Falah ini memakai sistem kuliah jadi apabila belajar produktif maka masuk Labor, sedangkan teori di kelas dan setiap mata pelajaran kelas yang berbeda dalam tiap hari jadi mereka tidak mempunyai kelas tetap untuk menunggu guru.
        </p>
        <p align='justify'>
          2. Kegiatan Non Teaching

          Beberapa kegiatan nonteaching berupa tugas bukan mengajar melainkan tugas seperti piket di ruang piket, piket di perpustaka, piket di ruang wakil kurikulum yang membantu tugas yang di berikan oleh guru piket atau waka.
        </p>
	</article>
</div>

<aside>
	<div id="login" class="box">
	<h2>Silahkan Login</h2>
	<section>
		
                <p id="eroruser"></p>
                <p id="erorpass"></p>
		<form method="POST"action="cek_login.php" onSubmit="return validasi(this)">
			<dl>
				<dt><label>Username</label></dt>
                                <dd><input id="username" type="text"  name="username"/></dd>

				<dt><label>Password</label></dt>
				<dd><input id="adminpassword" type="password" name="password"/></dd>
			</dl>
			<p>
				<input type="submit" class="button white" value="Login"></input>
                                <input type="reset" class="button white" value="Reset"></input>
			</p>
		</form>
	</section>
	</div>
	<fieldset>
		<legend><b>Apa Itu E-Learning?</b></legend>
		<article>E-learning merupakan singkatan dari Elektronic Learning, merupakan cara baru dalam proses belajar mengajar yang menggunakan media elektronik khususnya internet sebagai sistem pembelajarannya. E-learning merupakan dasar dan konsekuensi logis dari perkembangan teknologi informasi dan komunikasi. </article>		
	</fieldset>

</aside>
</body>
</html>