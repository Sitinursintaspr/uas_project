<?php
session_start();
error_reporting(0);
include "timeout.php";

if($_SESSION[login]==1){
	if(!cek_login()){
		$_SESSION[login] = 0;
	}
}
if($_SESSION[login]==0){
  header('location:logout.php');
}
else{
if (empty($_SESSION['username']) AND empty($_SESSION['passuser']) AND $_SESSION['login']==0){
  echo "<link href=css/style.css rel=stylesheet type=text/css>";
  echo "<div class='error msg'>Untuk mengakses Modul anda harus login.</div>";
}
else{
    if ($_SESSION['leveluser']=='siswa'){
     echo "<link href=css/style.css rel=stylesheet type=text/css>";
     echo "<div class='error msg'>Anda tidak diperkenankan mengakses halaman ini.</div>";
    }
    else{

?>
<html>
<head>
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="css/new.css">

<link rel="stylesheet" type="text/css" href="css/superfish.css">
<link rel="stylesheet" type="text/css" href="css/uniform.default.css">
<link rel="stylesheet" type="text/css" href="css/jquery.wysiwyg.css">
<link rel="stylesheet" type="text/css" href="css/facebox.css">
<link rel="stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.8.8.custom.css">

<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.8.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Delicious_500.font.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/facebox.js"></script>
<script type="text/javascript" src="../js/clock.js"></script>

<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/switcher.js"></script>

</head>
<body onload="startclock()">
<header id="top">
	<div class="container_12 clearfix">
		<div id="logo" class="grid_5">
			<!-- replace with your website title or logo -->
			<a id="site-title" href="#"><span>E-Learning MTS Tarbiyatul Falah</span></a>
			
		</div>

		<div class="grid_4" id="colorstyle">
			
		</div>

		<div id="userinfo" class="grid_3">
			  <?php
                    if ($_SESSION[leveluser]=='admin'){
			echo "<a href='#'>Administrator</a>";
                    }
                    elseif ($_SESSION[leveluser]=='pengajar'){
                        echo "<a href='#'>Teacher</a>";
                    }
                    ?>
			<a href="media_admin.php?module=home"><img src="images/home.ico" height="25px"; width="25px" title="Home" /></a>
                   
		<a href="logout.php" src=''><img src="images/hh.png" height="25px"; width="25px" title="Logout" /></a>
		</div>
	</div>
</header>
<section id="content">
	<section class="container_12 clearfix">
		<section id="main" class="grid_9 push_3">
			<article id="dashboard">
                           <?php include "content_admin.php"; ?>
		        </article>
		</section>
<aside id="sidebar" class="grid_3 pull_9"> 
	<div class="box">
		<center><h2>Welcome to e-learning</h2></center>
		<br>
		<center><?php
                    if ($_SESSION[leveluser]=='admin'){
						echo "<a href='#'>$_SESSION[namalengkap]</a>";
                    }
                    elseif ($_SESSION[leveluser]=='pengajar'){
                        echo "<a href=''>$_SESSION[namalengkap]</a>";
                    }
                    ?>
        </center>
	</div>
	<div class="box menu">
		<center><h2>Menu</h2></center>
		<section>
			<ul>
				<?php
                    include "menu.php";
                ?>
			</ul>
		</section>
	</div>
</aside>		
    </section>
</section>

<footer id="bottom">
	<section class="container_12 clearfix">
		
		<div class="grid_6 alignright">
			Copyright &copy; 2011 <a href="#">MTs Tarbiyatul Falah</a>
		</div>
	</section>
</footer>

</body>
</html>
<?php
}
}
}
?>